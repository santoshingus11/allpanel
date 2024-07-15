<?php

namespace App\Http\Controllers\admin;

use App\Helpers\QueryHelper;
use App\Http\Controllers\Controller;
use App\Models\BetHistory;
use App\Models\SportList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;


class PlayerLogReportController extends Controller
{
    public function balance_log(Request $request){

         //  DB::enableQueryLog();
       $balance_log=New BetHistory();
       if($request->method()=='POST'){
        if($request->userid!=''){
           $balance_log=$balance_log->where('client_id',$request->userid);
        }
        if($request->from_date!='' && $request->to_date!=''){
            $balance_log=$balance_log->whereBetween('created_at',[$request->from_date,$request->to_date]);
        }

        if($request->event_id!=''){
            $balance_log=$balance_log->where('event_id',$request->event_id);
        }

        if($request->market_id!=''){
            $balance_log=$balance_log->where('market_id',$request->market_id);
        }

       }
      // exit;
       $data['balance_log']=$balance_log->paginate(50);
       $data['userid']=$request->userid ?? '';
       $data['from_date']=$request->from_date ?? '';
       $data['to_date']=$request->to_date ?? '';   
       $data['event_id']=$request->event_id ?? '';
       $data['market_id']=$request->market_id ?? '';
       //dd(DB::getQueryLog());
        return view('agent.balance-log',$data);
    }
    public function betting_history(){
        return view('agent.player-betting-history');
    }
    public function player_profitloss(){
        return view('agent.player-profit-and-loss');
    }
    public function chips_analysis(){
        return view('agent.chips-analysis');
    }

    public function my_bets_report(Request $request){   

      //  return $request->all();

      $ownid=QueryHelper::ownid();
        
       $data['sports_list'] = SportList::where('status',1)->get();
       
        $betting_history=BetHistory::select('bet_histories.*','admins.username')->join('admins','admins.id','=','bet_histories.client_id');
       

        if(Auth::guard('agent')->user()->role_id != 1){
            $adminids =  QueryHelper::client_list(Auth::guard('agent')->user()->role_id,$ownid);   
            $betting_history=$betting_history->whereIn('bet_histories.client_id',$adminids);
          }  

        if($request->data_type!=''){

            if($request->data_type=='past'){
                if($request->from_date!='' && $request->to_date!=''){           
                    $betting_history=$betting_history->whereBetween('bet_histories.created_at',[$request->from_date,$request->to_date]);
                    
                }else{
                    $betting_history=$betting_history->where('bet_histories.created_at','<',date('Y-m-d'));
                }
            }
            if($request->data_type=='current'){
                $betting_history=$betting_history->where('bet_histories.created_at','like','%'.date('Y-m-d').'%');
            }
           
        }else{
            $betting_history=$betting_history->where('bet_histories.created_at','like','%'.date('Y-m-d').'%');
        }

        if($request->type!=''){
            if($request->type=='deleted'){
                $betting_history=$betting_history->whereNotNull('bet_histories.deleted_at');
            }else{
                $betting_history=$betting_history->where('bet_histories.type',$request->type);
            }
        }else{
            $betting_history=$betting_history->whereNull('bet_histories.deleted_at');
        }

        if($request->event_name!=''){
            $betting_history=$betting_history->where('bet_histories.event_name','like','%'.$request->event_name.'%');
        }

        if($request->market_name!=''){
            $betting_history=$betting_history->where('bet_histories.market_name','like','%'.$request->market_name.'%');
        }

        
        if($request->odds_from!='' && $request->odds_to!=''){
            $betting_history=$betting_history->whereBetween('bet_histories.odd_req',[$request->odds_from,$request->odds_to]);
        }

        if($request->stake_from!='' && $request->stake_to!=''){
            $betting_history=$betting_history->whereBetween('bet_histories.bet_placed',[$request->stake_from,$request->stake_to]);
        } 
        
        if($request->username!=''){
            $betting_history=$betting_history->where('admins.username','like','%'.$request->username.'%');
        } 
       
        $data['betting_history']=$betting_history->orderBy('bet_histories.bet_history_id','DESC')->paginate(50);
        $data['event_name']=$request->event_name ?? '';
        $data['market_name']=$request->market_name ?? '';

        $data['odds_to']=$request->odds_to ?? '';
        $data['odds_from']=$request->odds_from ?? '';

        $data['username']=$request->username ?? '';

        $data['stake_to']=$request->stake_to ?? '';
        $data['stake_from']=$request->stake_from ?? '';

        $data['from_date']=$request->from_date ?? '';
        $data['to_date']=$request->to_date ?? ''; 

        if($request->data_type!=''){
            return view('agent.my-bets-report-search',$data);
        }
        return view('agent.my-bets-report',$data);
    }

    public function profit_loss_report(Request $request){
        $ownid=QueryHelper::ownid();
        $data['sports_list'] = SportList::where('status',1)->get();

        $profit_loss = DB::table('bet_histories');

       if (Auth::guard('agent')->user()->role_id != 1) {
            $adminids = QueryHelper::client_list(Auth::guard('agent')->user()->role_id, $ownid);   
            $profit_loss = $profit_loss->whereIn('bet_histories.client_id',$adminids);
        }

        if($request->from_date!='' && $request->to_date!=''){
            $profit_loss = $profit_loss->whereBetween('bet_histories.created_at',[$request->from_date,$request->to_date]);
        }


        if($request->event_name!=''){
            $profit_loss=$profit_loss->where('bet_histories.event_name','like','%'.$request->event_name.'%');
        }

        if($request->market_name!=''){
            $profit_loss=$profit_loss->where('bet_histories.market_name','like','%'.$request->market_name.'%');
        }

        $data['profit_loss'] = $profit_loss->groupBy('bet_histories.match_name')->paginate(50);

        $data['event_name']=$request->event_name ?? '';
        $data['market_name']=$request->market_name ?? '';
        $data['from_date']=$request->from_date ?? '';
        $data['to_date']=$request->to_date ?? ''; 

        return view('agent.profit-loss-report',$data);
    }

    public function profit_loss_view_bets (Request $request){
        $data['profit_loss'] = DB::table('bet_histories')->select('bet_histories.*','admins.username','admins.admin_id','admins.role_id')->join('admins','admins.id','=','bet_histories.client_id')->where('bet_histories.match_name','like','%'.$request->match_name.'%')->get();
        $data['selection_name']=$request->selection_name;
        $data['market_name']=$request->market_name;
        $data['match_name']=$request->match_name;
        return view('agent.profit-loss-view-bets',$data);
    }

}

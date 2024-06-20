<?php

namespace App\Http\Controllers\admin;

use App\Helpers\QueryHelper;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\BetHistory;
use App\Models\SportList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BetTicketController extends Controller
{
    public function bet_ticker(Request $request){

      //  DB::enableQueryLog();
        $bet_history=BetHistory::select('bet_histories.*','admins.username')->join('admins','admins.id','=','bet_histories.client_id');

          if(Auth::guard('agent')->user()->role_id != 1){
            $adminids =  QueryHelper::client_list(Auth::guard('agent')->user()->role_id,Auth::guard('agent')->user()->id);   
            $bet_history=$bet_history->whereIn('bet_histories.client_id',$adminids);
          }   

          if($request->sports_name!='' && $request->sports_name!='All'){
            $bet_history=$bet_history->where('bet_histories.sports_name','like','%'.$request->sports_name.'%');
          }

          if($request->event_name!=''){
            $bet_history=$bet_history->where('bet_histories.event_name','like','%'.$request->event_name.'%');
          }

          if($request->market_name!='' && $request->market_name!='All'){
            $bet_history=$bet_history->where('bet_histories.market_name','like','%'.$request->market_name.'%');
          }

          if($request->member_name!=''){
            $bet_history=$bet_history->where('admins.username','like','%'.$request->member_name.'%');
          }

          if(($request->odds_from!='' && $request->odds_from!='0') && ($request->odds_to!='' && $request->odds_to!='0')){
            $odds_from=(float)$request->odds_from;
            $odds_to=(float)$request->odds_to;
            $bet_history=$bet_history->whereBetween('bet_histories.odd_req',[$odds_from,$odds_to]);
          }

       $data['bet_history']=$bet_history->orderBy('bet_histories.bet_history_id','DESC')->paginate(50);
      // dd(DB::getQueryLog());
       $data['sportList']=SportList::where('status',1)->get();
       $data['market_name']=$request->market_name ?? '';
       $data['member_name']=$request->member_name ?? '';       
       $data['sports_name']=$request->sports_name ?? '';       
       $data['odds_from']=$request->odds_from ?? '';
       $data['event_name']=$request->event_name ?? '';
       $data['odds_to']=$request->odds_to ?? '';

       if($request->column=='no'){
        return view('agent.bet-ticker-search',$data);
       }

        return view('agent.bet-ticker',$data);
    }

}

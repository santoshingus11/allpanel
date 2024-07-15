<?php

namespace App\Http\Controllers\admin;

use App\Exports\BetListExport;
use App\Helpers\QueryHelper;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\BetHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class BetController extends Controller
{
    public function bet_list(Request $request){

        $ownid=QueryHelper::ownid();
        $date=date('Y-m-d');

       // DB::enableQueryLog();
        $bet_history=BetHistory::select('bet_histories.*','admins.username')->join('admins','admins.id','=','bet_histories.client_id');
        $current_bet_history=BetHistory::select('bet_histories.*','admins.username')->join('admins','admins.id','=','bet_histories.client_id');

        if(Auth::guard('agent')->user()->role_id != 1){
          $adminids =  QueryHelper::client_list(Auth::guard('agent')->user()->role_id,$ownid);   
          $bet_history=$bet_history->whereIn('bet_histories.client_id',$adminids);
          $current_bet_history=$current_bet_history->whereIn('bet_histories.client_id',$adminids);
        }  

        if($request->from_date!='' && $request->to_date!=''){
            $bet_history=$bet_history->whereBetween('bet_histories.created_at',[$request->from_date,$request->to_date]);
            $current_bet_history=$current_bet_history->whereBetween('bet_histories.created_at',[$request->from_date,$request->to_date]);
        }

        if($request->sports_name!=''){
            if($request->sports_name=='casino' || $request->sports_name=='xg'){
                $bet_history=$bet_history->where('bet_histories.sports_name','like',$request->sports_name);
                $current_bet_history=$current_bet_history->where('bet_histories.sports_name','like',$request->sports_name);    
            }else{
                $bet_history=$bet_history->where('bet_histories.sports_name','NOT LIKE','%casino%')->where('bet_histories.sports_name','NOT LIKE','%xg%');
                $current_bet_history=$current_bet_history->where('bet_histories.sports_name','NOT LIKE','%casino%')->where('bet_histories.sports_name','NOT LIKE','%xg%');    
            }
           
        }

        if($request->type!=''){
            $bet_history=$bet_history->where('bet_histories.type','like','%'.$request->type.'%');
            $current_bet_history=$current_bet_history->where('bet_histories.type','like','%'.$request->type.'%');   
        }

        $data['bet_list']=$bet_history->where('bet_histories.created_at','like','%'.$date.'%')->whereNull('bet_histories.deleted_at')->orderBy('bet_histories.bet_history_id','DESC')->paginate(50);
        $data['past_bet_list']=$current_bet_history->where('bet_histories.created_at','<',$date)->whereNull('bet_histories.deleted_at')->orderBy('bet_histories.bet_history_id','DESC')->paginate(50);
     
        $data['from_date']=$request->from_date ?? '';
        $data['to_date']=$request->to_date ?? '';
        $data['sports_name']=$request->sports_name ?? '';
        $data['type']=$request->type ?? '';

       // dd(DB::getQueryLog());
      //  return   $data['past_bet_list'];

      if($request->sports_name!='' || $request->type!=''){
        return view('agent.all-bet-list',$data);

      }

        return view('agent.bet-list',$data);
    }

    public function betdelete(Request $request){
        try{
        BetHistory::where('bet_history_id',$request->id)->delete();
        return redirect()->back()->with('success','Success !!');
        }catch(\Throwable $th){
         //   return $th->getMessage();
         return redirect()->back()->with('success','Something went wrong');
        }
    }

    public function bet_list_live(Request $request){

        $ownid=QueryHelper::ownid();
        $date=date('Y-m-d');

       // DB::enableQueryLog();
        $bet_history=BetHistory::select('bet_histories.*','admins.username')->join('admins','admins.id','=','bet_histories.client_id')->whereNull('bet_histories.deleted_at')->where('bet_histories.created_at','like','%'.$date.'%');

        if(Auth::guard('agent')->user()->role_id != 1){
          $adminids =  QueryHelper::client_list(Auth::guard('agent')->user()->role_id,$ownid);   
          $bet_history=$bet_history->whereIn('bet_histories.client_id',$adminids);
        }  

        if($request->user_id){
            $user_id=$request->user_id;
            $bet_history = $bet_history->where(function ($query) use ($user_id) {
                $query->where('admins.username', $user_id)
                    ->orWhere('admins.id', $user_id)
                    ->orWhere('admins.login_id', $user_id);
            });
        }

        if($request->sports_name!='' && $request->sports_name!='All'){
            $bet_history=$bet_history->where('bet_histories.sports_name',$request->sports_name);
        }

        if($request->bet_status!='' && ($request->bet_status=='unmatched' || $request->bet_status=='matched')){
            $bet_history=$bet_history->where('bet_histories.type',$request->bet_status);
        }

        if($request->display_by!=''){

            if($request->display_by=='unmatched'){
                $bet_history=$bet_history->where('bet_histories.type',$request->display_by);
            }

            if($request->display_by=='matched'){
                $bet_history=$bet_history->where('bet_histories.type',$request->display_by);
            }

            if($request->display_by=='1' || $request->display_by=='2' || $request->display_by=='3'){
                $bet_history=$bet_history->where('bet_histories.status',$request->display_by);
            }           
        }
       

        if($request->order_by!=''){
          $bet_history=$bet_history->orderBy('bet_histories.bet_history_id',$request->order_by);
        }else{
          $bet_history=$bet_history->orderBy('bet_histories.bet_history_id','DESC');
        }


        if($request->last_data!=''){
          $bet_history=$bet_history->paginate($request->last_data);
        }else{
           $bet_history=$bet_history->paginate(50);
        }

        $data['bet_list']=$bet_history;
        $data['sports_list']=DB::table('sports_list')->where('status',1)->get();
        //dd(DB::getQueryLog());
        // $data['bet_list']=$bet_history->where('bet_histories.created_at','like','%'.$date.'%')->whereNull('bet_histories.deleted_at')->orderBy('bet_histories.bet_history_id','DESC')->paginate(50);
        $data['from_date']=$request->from_date ?? '';
        $data['to_date']=$request->to_date ?? '';
        $data['sports_name']=$request->sports_name ?? '';
        $data['type']=$request->type ?? '';
       // return  $data['bet_list'];

        if(count($request->all())>0){
        return view('agent.bet-list-live-search',$data);
        }else{
        return view('agent.bet-list-live',$data);
        }
      
    }
    public function bet_limit(Request $request){

        $ownid=QueryHelper::ownid();
        $admin=Admin::where('role_id',5);
        if(Auth::guard('agent')->user()->role_id != 1){
            $adminids =  QueryHelper::client_list(Auth::guard('agent')->user()->role_id,$ownid);   
            $current_bet_history = $admin->whereIn('id',$adminids);
          }  
        $data['admin']=$admin->paginate(50);
        return view('agent.bet-limit',$data);
    }

    public function bet_list_download(Request $request){
        try{

            return Excel::download(new BetListExport($request->from_date ?? '',$request->to_date ??'',$request->bet_list ?? '',$request->sports_name ?? '',$request->type ?? ''),'betlistexport.xlsx');
    
          }catch(\Throwable $th){
    
           // return $th->getMessage();
    
          }

    }

    
    public function bet_limit_update(Request $request){
        try{

            //DB::enableQueryLog();
            Admin::where('id',$request->id)->update(['sports_bet'=>$request->sports_bet ,'casino_bet'=>$request->casino_bet ]);
          //  dd(DB::getQueryLog());

        }catch(\Throwable $th){
    
            // return $th->getMessage();
     
           }
 
     }
 
    
}

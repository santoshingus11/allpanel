<?php

namespace App\Http\Controllers\admin;

use App\Exports\PLAgentReportExport;
use App\Exports\PLMarketReportExport;
use App\Helpers\QueryHelper;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\BetHistory;
use App\Models\SportList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function p_l_market(Request $request){
        // return $request->all();
        // exit;

        $bet_history=BetHistory::select('bet_histories.*','admins.username')->join('admins','admins.id','=','bet_histories.client_id')->whereNull('admins.deleted_at');

        if(Auth::guard('agent')->user()->role_id != 1){
          $adminids = Admin::where('admin_id',Auth::guard('agent')->user()->id)->pluck('id')->toArray();
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


     $data['bet_history']=$bet_history->orderBy('bet_histories.bet_history_id','DESC')->paginate(50);
    // dd(DB::getQueryLog());
     $data['sportList']=SportList::where('status',1)->get();
     $data['market_name']=$request->market_name ?? '';
     $data['member_name']=$request->member_name ?? '';       
     $data['sports_name']=$request->sports_name ?? '';       
     $data['event_name']=$request->event_name ?? '';

     if($request->column=='no'){
      return view('agent.p-and-l-report-by-market-search',$data);
     }
    
        return view('agent.p-and-l-report-by-market',$data);
    }

    public function plmarketreportdownload(Request $request){

      try{

        return Excel::download(new PLMarketReportExport($request->sports_name ?? '',$request->market_name ??'',$request->event_name ?? '',$request->member_name ?? ''),'plmarketreport.xlsx');

      }catch(\Throwable $th){

       // return $th->getMessage();

      }
    }

    public function p_l_agent(Request $request){
    
    // DB::enableQueryLog();
      $userlist = Admin::with('betHistories')->whereNull('admins.deleted_at')->where('admins.role_id',Auth::guard('agent')->user()->role_id+1);
                 
      if(Auth::guard('agent')->user()->role_id != 1){       
          $userlist=$userlist->where('admins.admin_id',Auth::guard('agent')->user()->id);
        }   

      $data['userlist'] = $userlist->paginate(50);
    //dd(DB::getQueryLog());
      $data['from_date']=$request->from_date ?? '';
      $data['to_date']=$request->to_date ?? '';
      //return $data;
      return view('agent.p-and-l-report-by-agent',$data);
  }

  public function plagentreportdownload(Request $request){

    try{

      return Excel::download(new PLAgentReportExport($request->from_date ?? '',$request->to_date ?? ''),'plagentreport.xlsx');

    }catch(\Throwable $th){

    // return $th->getMessage();

    }
  }

}

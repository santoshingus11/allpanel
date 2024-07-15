<?php

namespace App\Http\Controllers\admin;

use App\Exports\CreditStatementExport;
use App\Exports\PLStatementExport;
use App\Helpers\QueryHelper;
use App\Http\Controllers\Controller;
use App\Models\BalanceLog;
use App\Models\BankingHistory;
use App\Models\CreditLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AgentManagementController extends Controller
{
    public function dashboard(){
        
        return view('agent.dashboard');
    }

    public function user_account_stat(){
        return view('agent.user-statement-account-statement');
    }

      public function account_statement(Request $request){

        $admin_ids=QueryHelper::adminids();
        $plstatement=BankingHistory::select('banking_history.*','p_a.username as pa_username','u_a.username as ua_username')->join('admins as p_a','p_a.id','=','banking_history.parent_id')->join('admins as u_a','u_a.id','=','banking_history.user_id');

        if(Auth::guard('agent')->user()->role_id!=1){
            $plstatement=$plstatement->whereIn('banking_history.parent_id',$admin_ids);
        }

        if($request->balance_type!='all' && $request->balance_type!=''){
            $plstatement=$plstatement->where('banking_history.type',$request->balance_type);
        }

        if($request->from_date!='' && $request->to_date!=''){
            $plstatement=$plstatement->whereBetween('banking_history.created_at',[$request->from_date,$request->to_date]);
        }

        if($request->username!=''){
            $plstatement=$plstatement->where('p_a.username','like','%'.$request->username.'%')->orWhere('u_a.username','like','%'.$request->username.'%');
        }

        $data['p_l_statement']=$plstatement->orderBy('banking_history.banking_history_id','DESC')->paginate(50);

        $credit_history=CreditLog::select('credit_log.*','p_a.username as pa_username','u_a.username as ua_username')->join('admins as p_a','p_a.id','=','credit_log.credit_from')->join('admins as u_a','u_a.id','=','credit_log.credit_to');

        if(Auth::guard('agent')->user()->role_id!=1){
            $credit_history=$credit_history->whereIn('credit_log.credit_from',$admin_ids);
        }

        if($request->credit_username!=''){
            $credit_history=$credit_history->where('p_a.username','like','%'.$request->credit_username.'%')->orWhere('u_a.username','like','%'.$request->credit_username.'%');
        }

        if($request->credit_from_date!='' && $request->credit_end_date!=''){
            $credit_history=$credit_history->whereBetween('credit_log.created_at',[$request->credit_from_date,$request->credit_end_date]);
        }

        $data['credit_history']=$credit_history->orderBy('credit_log.credit_log_id','DESC')->paginate(50);

        $data['from_date']=$request->from_date ?? '';
        $data['to_date']=$request->to_date ?? '';
        $data['username']=$request->username ?? '';
        $data['balance_type']=$request->balance_type ?? '';

        if($request->credit_username!='' || $request->credit_from_date!='' || $request->credit_end_date!=''){
            return view('agent.chaccount-statement',$data);
        }

       // return $data;

        return view('agent.account-statement',$data);
    }

    public function account_statement_download(Request $request){

        try{ 
            if($request->type=='p_l'){
            return Excel::download(new PLStatementExport($request->from_date ?? '',$request->to_date ?? '',$request->username ?? '',$request->balance_type ?? ''),'plstatement.xlsx');
            }
            if($request->type=='credit'){
            return Excel::download(new CreditStatementExport($request->credit_from_date ?? '',$request->credit_end_date ?? '',$request->credit_username ?? ''),'creditstatement.xlsx');
            }
        }catch(\Throwable $th){
    
         return $th->getMessage();
    
        }
      }

    
}

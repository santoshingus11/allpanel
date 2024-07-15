<?php

namespace App\Http\Controllers\admin;

use App\Helpers\QueryHelper;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\BankingHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CashbankingController extends Controller
{
    public function cash_banking(Request $request){
        $admin_ids=QueryHelper::adminids();
       // DB::enableQueryLog();
       $cashbanking=Admin::whereIn('id',$admin_ids);

        if(isset($request->status_value) && $request->status_value!=''){
            $status_value=$request->status_value;
            if($status_value!=4){
                $cashbanking->where(function ($query) use ($status_value) {             
                    $query->where('admins.status',$status_value);
                }); 
            }           
        }

        if($request->user_name!=''){
            $cashbanking->where('admins.username',$request->user_name);           
        }

        $data['cashbanking'] = $cashbanking->paginate(50) ?? [];

       // return $data['cashbanking'];

      //  dd(DB::getQueryLog());

        if(isset($request->status_value)){
            return view('agent.cash-banking-search',$data);
        }  

        return view('agent.cash-banking',$data);
    }

    public function updatepaymentsubmit(Request $request){        
        try{
        $check_payment=DB::table('submit_payment_count')->where('user_id',$request->user_id)->where('unique_id',$request->unique_id)->first();
        if(empty($check_payment)){
            DB::table('submit_payment_count')->insert(['user_id'=>$request->user_id,'type'=>$request->type,'unique_id'=>$request->unique_id]);
        }
        return DB::table('submit_payment_count')->where('unique_id',$request->unique_id)->count();        
        }catch(\Throwable $th){
       // return  $th->getMessage();
        }
    }

    public function bankingSubmit(Request $request){
        try{       

            $admindata = Admin::where('id', Auth::guard('agent')->user()->id)->first();

            if (Hash::check($request->password, $admindata->password)) {
                $rules = [];
                $messages = [];                         
                $data = [];   
                $errors =[];     
                for ($i = 1; $i <= $request->total_agent; $i++) {
                    $typ = 'type_' . $i;
                    $am = 'amount_' . $i;
                    // $crref = 'editCreditReference_' . $i;
                    $re = 'remarks_' . $i;
                    $ag = 'agent_id' . $i;
                    $agent_balance='agent_balance'.$i;   



                    if($request->$typ=='' && ($request->$am!='' || $request->$am!=0)){
                        $rules[$typ] = 'required|string';        
                        $messages["$typ.required"] = "Deposit or Withdraw required for User $i";    
                        $validator = Validator::make($request->all(), $rules, $messages); 
    
                        if ($validator->fails()) {
                            $errors[] = $validator->errors()->first($typ);
                            continue; // Skip further processing for this user if validation fails
                        }
                    }

                    
                    // if($request->$crref!=''){
                    //     Admin::where('id',$request->$ag)->update(['credit' => $request->$crref]);
                    // }
                   
        
                    if ($request->$typ != '' && $request->$am!='') {                                  
                        
                      
                        if($request->$typ=='D'){  
                            $agent_role=Admin::where('id',$request->$ag)->first();
                            if(Auth::guard('agent')->user()->role_id==1){                               
                                Admin::where('id',$request->$ag)->update(['balance' => DB::raw('balance + ' . $request->$am)]);                               
                                QueryHelper::updatebalancelog($request->$am,Auth::guard('agent')->user()->id,$request->$ag,$request->$re);
                           
                                $ag_de= Admin::where('id',$request->$ag)->first();                                

                                $data[] = [
                                    'type' => $request->$typ,
                                    'amount' => $request->$am,
                                    'balance' => $ag_de->balance,
                                    // 'credit_reference' => $request->$crref,
                                    'remarks' => $request->$re,
                                    'parent_id' => Auth::guard('agent')->user()->id,
                                    'user_id' => $request->$ag,
                                    'status' => 1,
                                ];      
                            }else{
                                if($request->$am > $admindata->balance){
                                    $balance_mess[] = "Due to insufficient balance of agent balance not updated for User $i";                               
                                }else{
                                Admin::where('id',$request->$ag)->update(['balance' => DB::raw('balance + ' . $request->$am)]);
                                Admin::where('id',Auth::guard('agent')->user()->id)->update(['balance' => DB::raw('balance - ' . $request->$am)]);       
                                QueryHelper::updatebalancelog($request->$am,Auth::guard('agent')->user()->id,$request->$ag,$request->$re); 
                               
                                $ag_de= Admin::where('id',$request->$ag)->first();      

                                $data[] = [
                                    'type' => $request->$typ,
                                    'amount' => $request->$am,
                                    'balance' => $ag_de->balance,
                                    // 'credit_reference' => $request->$crref,
                                    'remarks' => $request->$re,
                                    'parent_id' => Auth::guard('agent')->user()->id,
                                    'user_id' => $request->$ag,
                                    'status' => 1,
                                ];      
                            
                            
                            }    
                            }                                               
                        }


                        if($request->$typ=='W'){
                        if($request->$am<=$request->$agent_balance){                         
                                Admin::where('id',$request->$ag)->update(['balance' => DB::raw('balance - ' . $request->$am)]);
                               
                                $ag_de= Admin::where('id',$request->$ag)->first();   

                                $data[] = [
                                    'type' => $request->$typ,
                                    'amount' => $request->$am,
                                    'balance' => $ag_de->balance,
                                    // 'credit_reference' => $request->$crref,
                                    'remarks' => $request->$re,
                                    'parent_id' => Auth::guard('agent')->user()->id,
                                    'user_id' => $request->$ag,
                                    'status' => 1,
                                ];      
                        }else{
                            return redirect()->back()->with('error', "Insufficient balance to withdwar for user $i");
                        }
                        }                       
                    }
                   
                }
        
                BankingHistory::insert($data);

                    if (!empty($errors) || !empty($balance_mess)) {
                        $errorMessages = [ 'user_errors'=> $errors ?? '' , 'balance_errors'=> $balance_mess ?? '']; 
                             
                        return redirect()->back()->withErrors($errorMessages)->withInput();
                    }

                    $check_payment=DB::table('submit_payment_count')->where('unique_id',$request->unique_id)->first();
                    
                    if(!empty($check_payment)){
                        DB::table('submit_payment_count')->where('unique_id',$request->unique_id)->delete();
                    }

                    if(!empty($data)){
                        return redirect()->back()->with('success', 'Successfully Added');
                    }else{
                        return redirect()->back();
                    }
             
            } else {
                return redirect()->back()->with('success', 'Password Mismatch');
            }
          
         
        }catch(\Throwable $th){
            return $th->getMessage();
        return  redirect('cash-banking')->with('success','Something went wrong');
        }
    }

    public function bankinglog(Request $request)
    {
       
        //DB::enableQueryLog();
        if($request->segment(3)!=''){
            $id=$request->segment(3);           
            $data['banking_log']=BankingHistory::select("banking_history.*","admins.username",'to_user.username as to_username')->join('admins','admins.id','=','banking_history.parent_id')->join('admins as to_user','to_user.id','=','banking_history.user_id')->where('banking_history.user_id',$id)->orderBy('banking_history.banking_history_id','DESC')->paginate(50);
        }else{
            $id=Auth::guard('agent')->user()->id;
            $data['banking_log']=BankingHistory::select("banking_history.*","admins.username",'to_user.username as to_username')->join('admins','admins.id','=','banking_history.parent_id')->join('admins as to_user','to_user.id','=','banking_history.user_id')->where('banking_history.parent_id',$id)->orderBy('banking_history.banking_history_id','DESC')->paginate(50);
        }     
       // dd(DB::getQueryLog());
        $data['user']=Admin::select('username')->where('id',$id)->first();    
        
        //return $data;
      
        return view('agent.bankinglog',$data);
    }

}

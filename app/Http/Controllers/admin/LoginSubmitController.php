<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\CreditLog;
use App\Models\Passwordlogs;
use App\Models\BetSettings;
use App\Models\PositionTaking;
use App\Rules\CustomRule;
class LoginSubmitController extends Controller
{
    public function new_agent_submit(Request $request){
    //   dd($request->all());
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
                      'password' => [
        'nullable',
        'string',
        'min:8',
        new CustomRule,
    ],
            'confirm_password' => 'required|string|same:password', // Ensures confirm_password matches password
            'status' => 'required|in:0,1',
            'bet_status' => 'required|in:0,1',
            'credit_limit' => 'required|numeric',
            'user_rate' => 'required|numeric',
            'exposure_limit' => 'nullable|numeric',
            'message' => 'nullable|string',
            'agent_password' => 'required|string',
            'level' => 'required|string',
        ]);
    
        $validator->sometimes('confirm_password', 'different:password', function ($input) {
            return $input->password !== $input->confirm_password;
        });
    
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $existingUser = Admin::where('username', $request->username)->first();

        if ($existingUser) {
            return redirect()
                ->back()
                ->with('error', 'Username already exists. Please try with a new username.')
                ->withInput();
        }
        

        $user = Auth::guard('agent')->user();
        if (!$user || !Hash::check($request->agent_password, $user->password)) {
            
            return redirect()->back()->with('error', 'Authentication failed. Please check your password.')->withInput();
        }
        if($request->has('id')){
            $newAgent= Admin::where('id', $request->id);
        }else{
            $newAgent = new Admin();
        } 
        if($request->level=='User'){
            $role_id=5;
        }else{
            $role_id=$user->role_id+1;
        }
        $newAgent->username = $request->username;
        $newAgent->password = bcrypt($request->password);
        $newAgent->status = $request->status;
        $newAgent->level_permission = $request->level;
        $newAgent->bet_status = $request->bet_status;
        $newAgent->credit_limit = $request->credit_limit;
        $newAgent->user_rate = $request->user_rate;
        $newAgent->exposure_limit = $request->exposure_limit;
        $newAgent->message = $request->message;
         $newAgent->role_id =$role_id; 
        $newAgent->admin_role = $user->role_id; 
        $newAgent->admin_id = $user->id; 
        $newAgent->save();

        // Redirect to the appropriate page after successful form submission
        return redirect()->route('agent-listing')->with('error', $request->level == 'User' ? 'User created successfully.' : 'Agent created successfully');
    }
    public function admin_user(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'password' => [
                'required',
                'string',
                'min:8',
                new CustomRule,
            ],
            'confirm_password' => 'required|string|same:password', // Ensures confirm_password matches password
            'status' => 'required|in:0,1',
        ]);
        $validator->sometimes('confirm_password', 'different:password', function ($input) {
            return $input->password !== $input->confirm_password;
        });
     
        if ($validator->fails()) {
            $errors = $validator->errors();

            return response()->json(['errors' => $errors], 422);
        }
        $existingUser = Admin::where('username', $request->username)->first();
        if ($existingUser) {
            return response()->json(['error' => 'UserName Already Exists'], 401);
            
        }

        $user = Auth::guard('agent')->user();
        $newUser = [
            'username' => $request->username,
            'role_id' => $user->role_id,
            'admin_id' => $user->id,
            'user_access'=>'1',
            'admin_role' => $user->admin_role,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => bcrypt($request->password),
            'status' => $request->status,
        ];
        $insert =Admin::insert($newUser);
        if($insert){
            return response()->json(['success' => 'User Added Successfully.']);

        }else{
            return response()->json(['error' => 'Something Went Wrong.']);
        }
    }
    public function agent_update(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'password' => [
        'nullable',
        'string',
        'min:8',
        new CustomRule,
    ],
            'confirm_password' => 'required_with:password|nullable|string|same:password',
            'status' => 'nullable|in:0,1',
            'bet_status' => 'nullable|in:0,1',
            'credit_limit' => 'nullable|numeric',
            'user_rate' => 'nullable|numeric',
            'exposure_limit' => 'nullable|numeric',
            'message' => 'nullable|string',
            'agent_password' => 'required|string',
        ]);
    
        $validator->sometimes('confirm_password', 'different:password', function ($input) {
            return $input->password !== $input->confirm_password;
        });
        $old=Admin::where('id', $request->id)->first();
           
        if ($old) {
            // Get the ID and credit limit of the retrieved Admin
           
            $oldCredit = $old->credit_limit ?? 0;
        } 
        if ($request->new_credit_limit === null) {
            $credit = $request->old_credit_limit;
        } else {
            $credit = $request->new_credit_limit;
        }
     
        if ($validator->fails()) {
            $errors = $validator->errors();

        return response()->json(['errors' => $errors], 422);
        }
    
        $user = Auth::guard('agent')->user();
    
        if (!$user || !Hash::check($request->agent_password, $user->password)) {
            return response()->json(['error' => 'Authentication failed. Please check your password.'], 401);
        }
    
        $newAgent = [
            'username' => $request->username,
            'status' => $request->status,
            'bet_status' => $request->bet_status, // Assuming this is intended, otherwise update accordingly
            'credit_limit' => $credit,
            'user_rate' => $request->user_rate,
            'exposure_limit' => $request->exposure_limit,
            'message' => $request->message,
        ];
        if (($request->password!='')) {
            // Update the password if provided
            $newAgent['password'] = bcrypt($request->password);
        
            $passwordlog = [
                'user_id' => $request->id,
                'change_by_user' => $user->id,
                'remarks' => 'Agent Password updated by ' . $user->username,
                'created_at' => now(),
            ];
            // dd($passwordlog);
            $insertpassword=Passwordlogs::insert($passwordlog);
        }
        Admin::where('id', $request->id)->update($newAgent);
        if(Auth::guard('agent')->user()->user_access=='1'){
            $creditfrom= Auth::guard('agent')->user()->admin_id;

        }else{
            $creditfrom= Auth::guard('agent')->user()->id;
        }
        if($request->new_credit_limit != null){
            $balance =[
                'credit_old_value'=> $oldCredit,
                'credit_new_value'=>$credit,
                'credit_from' => $creditfrom,
                'credit_to'=> $request->id,
                'stake' => $credit,
            ];
           
            $creditinsert = CreditLog::insert($balance);
       
           }

    
        return response()->json(['message' => 'Updated successfully.'], 200);

    }
    public function admin_update(Request $request){
        // return $request->status;
      
        // return $request->payment_threshold;
        $validator = Validator::make($request->all(), [
            'password' => [
        'nullable',
        'string',
        'min:8',
        new CustomRule,
    ],
  
            'status' => 'nullable|in:0,1,2,3',
         
            'credit_limit' => 'nullable|numeric',
            'payment_threshold'=>'nullable|numeric',
            'message' => 'nullable|string',
            'agent_password' => 'required|string',
           
        ]);
        $old=Admin::where('id', $request->id)->first();
           
        if ($old) {
            // Get the ID and credit limit of the retrieved Admin
           
            $oldCredit = $old->credit_limit ?? 0;
        } 
        if ($request->new_credit_limit === null) {
            $credit = $request->credit_limit;
        } else {
            $credit = $request->new_credit_limit;
        }
        if ($validator->fails()) {
            $errors = $validator->errors();

        return response()->json(['errors' => $errors], 422);
        }
        $user = Auth::guard('agent')->user();
    
        if (!$user || !Hash::check($request->agent_password, $user->password)) {
            return response()->json(['error' => 'Authentication failed. Please check your password.'], 401);
        }
        $newAdmin = [
            'username' => $request->username,
           
            'status' => $request->status,
            'credit_limit' =>$credit,
            'message' => $request->message,
            'payment_threshold' => $request->payment_threshold,
        ];
        $user = Auth::guard('agent')->user();
        if (!empty($request->password)) {
         // Update the password if provided
         $newAdmin['password'] = bcrypt($request->password);
     
         $passwordlog = [
             'user_id' => $request->id,
             'change_by_user' => $user->id,
             'remarks' => 'Agent Password updated by ' . $user->username,
             'created_at' => now(),
         ];
         // dd($passwordlog);
         $insertpassword=Passwordlogs::insert($passwordlog);
        }

        $add=Admin::where('id', $request->id)->update($newAdmin);
        if (!$add) {
            return response()->json(['message' => 'Admin update failed.'], 500);
        }
            if(Auth::guard('agent')->user()->user_access=='1'){
                $creditfrom= Auth::guard('agent')->user()->admin_id;

            }else{
                $creditfrom= Auth::guard('agent')->user()->id;
            }
            $admin=Admin::where('username',$request->username)->first();
            $adminId=$admin->id;
           
           if($request->new_credit_limit != null){
            $balance =[
                'credit_old_value'=> $oldCredit,
                'credit_new_value'=> $credit,
                'credit_from' => $creditfrom,
                'credit_to'=> $request->id,
                'stake' => $credit,
            ];
           
            $creditinsert = CreditLog::insert($balance);
       
           }
          
      
          

      
     
        $position=[
            'cricket'           => $request->cricket,
            'football'          => $request->football,
            'tennis'            => $request->tennis,
            'admin_id'          => $request->id,
            'horse_racing'      => $request->horse_racing,
            'greyhound_racing'  => $request->greyhound_racing,
            'casino'            => $request->casino,
            'other'             => $request->other,
        ];
        // return $position;
        $checkadminid = PositionTaking::where('admin_id', $request->id)->first();

        if ($checkadminid) {
            // If a record with the specified admin_id exists, update it
            PositionTaking::where('admin_id', $request->id)->update($position);
        } else {
            // If no record with the specified admin_id exists, insert a new record
            PositionTaking::insert($position);
        }
      
        $betSettingsData = $request->input('bet_settings');
 
        //dd($betSettingsData);
        if (is_array($betSettingsData)) {
        foreach ($betSettingsData as $sportName => $betSetting) {
            // dd($key);
        //    print_r($betSetting['min_bet']);
        //    exit;
       
           if(!empty($betSetting['min_bet']) || !empty($betSetting['max_bet']) || !empty($betSetting['max_market'])){
            $minBet = $betSetting['min_bet'] ?? 0;
            $maxBet = $betSetting['max_bet'] ?? 0;
            $maxMarket = $betSetting['max_market'] ?? 0;

           
            $betdata = [
                'admin_id' => $request->id,
                'min_bet' => $minBet,
                'max_bet' => $maxBet,
                'max_market' => $maxMarket,
            ];

        //    DB::enableQueryLog();
            $betsettings_check=BetSettings::where('sport_name',$sportName)->where('admin_id',$request->id)->first();
          //  dd(DB::getQueryLog());
               
            
            if(!empty($betsettings_check)) {

             
                BetSettings::where('sport_name',$sportName)->where('admin_id',$request->id)->update($betdata);
               
                   
            } else {
                // Create a new record
                BetSettings::insert(
                    ['sport_name' => $sportName, 
                    'admin_id' =>$request->id,
                    'min_bet' => $minBet,
                    'max_bet' => $maxBet,
                    'max_market' => $maxMarket,]
                );
            }
           }
           
        }
    }
        return response()->json(['message' => 'Updated successfully.'], 200);


    }

}
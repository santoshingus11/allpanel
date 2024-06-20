<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\PositionTaking;
use App\Models\Passwordlogs;
use App\Models\CreditLog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Rules\CustomRule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class AdminUserController extends Controller
{
    public function user_detail(Request $request)
    {
        $id = $request->id;
        $userdata = Admin::where('id', $id)->first();
        // return $userdata;
        return view('agent.user_access_data', compact('userdata'));
    }
    public function user_access_edit(Request $request)
    {
        $id = $request->id;
        $userdata = Admin::where('id', $id)->first();
        return view('agent.supermaster_user_access', compact('userdata'));
    }
    public function get_user_data(Request $request)
    {
        $data = Admin::where('id', $request->id)->first();
        return response()->json($data);
    }
    public function update_whitelevel_status(Request $request)
    {
        $adminId = $request->input('id');
        $status = $request->input('status');

        // Update status in the database
        Admin::where('id', $adminId)->update(['status' => $status]);

        return response()->json(['message' => 'Status updated successfully']);
    }
    public function update_user_password(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'new_password' =>  [
                'required',
                'string',
                'min:8',
                new CustomRule,           
            ],
            'agent_password' => 'required|string',
            'confirm_password' => 'required|string|same:new_password',
        ]);
        $validator->sometimes('confirm_password', 'different:new_password', function ($input) {
           
            return $input->new_password !== $input->confirm_password;
        });
    
        // Check if validation fails
        if ($validator->fails()) {
            $errors = $validator->errors();
    
            return response()->json(['errors' => $errors], 422);
        }
        $user = Auth::guard('agent')->user();
        if(Auth::guard('agent')->user()->user_access == '1') {
            $userid=Auth::guard('agent')->user()->admin_id;
        }else{
            $userid=Auth::guard('agent')->user()->id;
        }
        if (!$user || !Hash::check($request->agent_password, $user->password)) {
            return response()->json(['error' => 'Request failed. Admin Password is incorrect.'], 401);
        }else{
            $passwordupdate=[
                'password' => bcrypt($request->new_password),
            ];
                $passwordlog = [
                    'user_id' => $request->id,
                    'change_by_user' => $user->id,
                    'remarks' => 'User Password updated by ' . $user->username. '',
                    'created_at' => now(),
                ];
                // dd($passwordlog);
                $insertpassword=Passwordlogs::insert($passwordlog);
              
            
            Admin::where('id',$user->id)->update($passwordupdate);
          
        }
        $user = Auth::guard('agent')->user();
        // $passwordlogs=[
        //     'user_id' => $userid,
        //     'change_by_user'=>$userid,
        //     'remarks' =>1,
        //     'created_at' =>now()
        // ];
        // $insertlog=Passwordlogs::insertorcreate($passwordlogs);
        return response()->json(['message' => 'Password updated successfully']);
    }

    public function update_user_data(Request $request)
    {
        // return$request->password;
        $validator = Validator::make($request->all(), [

            'password' =>  [
                'nullable',
                'string',
                'min:8',
                new CustomRule,
            ],

            'agent_password' => 'required|string',
            'status' => 'nullable|in:0,1,2,3',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            $errors = $validator->errors();

            return response()->json(['errors' => $errors], 422);
        }

        $user = Auth::guard('agent')->user();
        if (!$user || !Hash::check($request->agent_password, $user->password)) {
            return response()->json(['error' => 'Request failed.Agent Password is incorrect.'], 401);
        }
        $insertdata = [
            'message' => $request->message,
            'status' => $request->status,
            'updated_at' => now()
        ];

        if (!empty($request->password)) {
            // Update the password if provided
            $insertdata['password'] = bcrypt($request->password);
        
            $passwordlog = [
                'user_id' => $request->id,
                'change_by_user' => $user->id,
                'remarks' => 'User Password updated by ' . $user->username,
                'created_at' => now(),
            ];
            // dd($passwordlog);
            $insertpassword=Passwordlogs::insert($passwordlog);
    }
        $query = Admin::where('id', $request->id)->update($insertdata);

        if ($query) {
            return response()->json(['success' => 'Data updated successfully!']);
        } else {
            return response()->json(['error' => 'Something Went Wrong! Please Refresh page or try again'], 403);
        }
    }
    public function white_label_add(Request $request)
    {
        // dd($request->all());
        if ($request->id != '') {
            $validator = Validator::make($request->all(), [
                'password' =>  [
                    'nullable',
                    'string',
                    'min:8',
                    new CustomRule,
                ],

                'username' => 'required|string|',
                'login_id' => 'required|string|',
                'client_logo' => 'nullable|image|mimes:jpeg,png,gif,jpg|max:2048',
                'credit_limit' => 'required|numeric|',
                'balance' => 'required|numeric',
                'white_level_permission' => 'required|string',
                'currency' => 'required|string',
                'agent_password' => 'required|string',

            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'password' =>  [
                    'nullable',
                    'string',
                    'min:8',
                    new CustomRule,
                ],

                'username' => 'required|string|',
                'login_id' => 'required|string|',
                'client_logo' => 'required|image|mimes:jpeg,png,gif,jpg|max:2048',
                'credit_limit' => 'required|numeric|',
                'balance' => 'required|numeric',
                'currency' => 'required|string',
                'white_level_permission' => 'required|string',
                'agent_password' => 'required|string',

            ]);
        }
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json(['errors' => $errors], 422);
        }

        $user = Auth::guard('agent')->user();
        if (Auth::guard('agent')->user()->user_access == '1') {
            $userid = Auth::guard('agent')->user()->admin_id;
        } else {
            $userid = Auth::guard('agent')->user()->id;
        }
        $old=Admin::where('id', $request->id)->first();
           
        if ($old) {
            // Get the ID and credit limit of the retrieved Admin
           
            $oldCredit = $old->credit_limit ?? 0;
        } 
       
        $existingloginId = Admin::where('login_id', $request->login_id)->first();
        $existingUser = Admin::where('username', $request->username)->first();
        if ($request->id != '') {
            $existingEntry = Admin::find($request->id);

            if (!$existingEntry) {
                return response()->json(['error' => 'Invalid ID for update.'], 404);
            }

            if ($existingEntry->login_id != $request->login_id && $existingloginId) {
                return response()->json(['error' => 'Login Id Already Exist!'], 404);
            }

            if ($existingEntry->username != $request->username && $existingUser) {
                return response()->json(['error' => 'Username Already Exist!'], 403);
            }
            $user = Auth::guard('agent')->user();
            if (!$user || !Hash::check($request->agent_password, $user->password)) {
                return response()->json(['error' => 'Request failed.Agent Password is incorrect.'], 401);
            }
            $insertdata = [
                'username' => $request->username,
                'login_id' => $request->login_id,
                'credit_limit' => $request->credit_limit,
                'first_name' => $request->brand_name,
                'balance' => $request->balance,
                'betting_features' => $request->betting_features,
                'domain_url' => $request->domain_url,
                'currency' => $request->currency,
                'white_level_permission' => $request->white_level_permission,
            ];
            if ($request->hasFile('client_logo')) {
                $oldImagePath = public_path('admin/assets/images/others/') . $existingEntry->client_logo;
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
                // Upload and save the new image
                $imagefile = time() . '.' . $request->file('client_logo')->extension();
                $icon_original = $request->file('client_logo');
                $width = 50; // Specify your desired width
                $height = 50; // Specify your desired height
                $image = Image::make($icon_original);
                $image->resize($width, $height);
                $pathToSave = public_path('admin/assets/images/others/');
                $imageName =  $imagefile;
                $image->save($pathToSave . $imageName);
                // Update the existing entry with the new image filename
                $existingEntry->update(['client_logo' => $imageName]);
            }
            if(Auth::guard('agent')->user()->user_access=='1'){
                $creditfrom= Auth::guard('agent')->user()->admin_id;
    
            }else{
                $creditfrom= Auth::guard('agent')->user()->id;
            }
            if($request->credit_limit != null){
                $balance =[
                    'credit_old_value'=> $oldCredit,
                    'credit_new_value'=>$request->credit_limit,
                    'credit_from' => $creditfrom,
                    'credit_to'=> $request->id,
                    'stake' => $request->credit_limit,
                ];
               
                $creditinsert = CreditLog::insert($balance);
           
               }
            if ($request->password !='') {
                // Update the password if provided
                $insertdata['password'] = bcrypt($request->password);
            
                $passwordlog = [
                    'user_id' => $request->id,
                    'change_by_user' => $user->id,
                    'remarks' => 'Agent Password updated by ' . $user->username,
                    'created_at' => now(),
                ];
                // dd($passwordlog);
                $insertpassword=Passwordlogs::insert($passwordlog);
              
            }
            $newAdmin = Admin::where('id', $request->id)->update($insertdata);
            return response()->json(['message' => 'Data Updated Successfully']);
        } else {
            if ($existingloginId) {
                return response()->json(['error' => 'Login Id Already Exist!'], 404);
            }

            if ($existingUser) {
                return response()->json(['error' => 'Username Already Exist!'], 403);
            }

            if (!$user || !Hash::check($request->agent_password, $user->password)) {
                return response()->json(['error' => 'Authentication failed. Please check your password.'], 401);
            }
            if ($request->hasFile('client_logo')) {
                $imagefile = time() . '.' . $request->file('client_logo')->extension();

                /////big icon start/////////////////////
                $icon_original = $request->file('client_logo');
                $width = 50; // Specify your desired width
                $height = 50; // Specify your desired height
                $image = Image::make($icon_original);
                $image->resize($width, $height);
                $pathToSave = public_path('admin/assets/images/others/'); // Define the path where you want to save the image
                $imageName =  $imagefile; // Define the name for the resized image    
                $image->save($pathToSave . $imageName);   /////big icon end/////////////////////
            }
            $insertdata = [
                'username' => $request->username,
                'login_id' => $request->login_id,
                'credit_limit' => $request->credit_limit,
                'first_name' => $request->brand_name,
                'balance' => $request->balance,
                'betting_features' => $request->betting_features,
                'role_id' => $user->role_id + 1,
                'admin_id' => $userid,
                'domain_url' => $request->domain_url,
                'admin_role' => $user->admin_role,
                'white_level_permission' => $request->white_level_permission,
                'password' => bcrypt($request->password),
                'client_logo' => $imagefile,
            ];
            

            $newAdmin = Admin::create($insertdata);
            $newAdminId = $newAdmin->id;
            if(Auth::guard('agent')->user()->user_access=='1'){
                $creditfrom= Auth::guard('agent')->user()->admin_id;
    
            }else{
                $creditfrom= Auth::guard('agent')->user()->id;
            }
            if($request->credit_limit != null){
                $balance =[
                    'credit_old_value'=> $oldCredit,
                    'credit_new_value'=>$request->credit_limit,
                    'credit_from' => $creditfrom,
                    'credit_to'=> $newAdminId,
                    'stake' => $request->credit_limit,
                ];
               
                $creditinsert = CreditLog::insert($balance);
           
               }

            return response()->json(['message' => 'Data Inserted Successfully']);
        }
       
    }
    public function user_access(Request $request)
    {
        // dd($request->all());
        try {
            $admin = Admin::where('id', $request->id)->first();

            $admin = Admin::find($request->id);

            if ($admin) {
                // Get the existing admin_access data
                $existingData = $admin->admin_access;

                // Extract the fields to update from the request
                $fieldsToUpdate = $request->except(['id', '_token']);

                // Update the fields in the existingData
                foreach ($fieldsToUpdate as $field => $value) {
                    // Check if the field already exists in the admin_access data
                    $pattern = "/$field=[^,]*/";
                    if (preg_match($pattern, $existingData)) {
                        // If the field exists, replace its value
                        $existingData = preg_replace($pattern, "$field=$value", $existingData);
                    } else {
                        // If the field doesn't exist, append it to the existingData
                        $existingData .= ($existingData ? ',' : '') . "$field=$value";
                    }
                }

                $admin->admin_access = $existingData;
                $admin->save();


                return redirect()->back()->with('success', 'Data updated successfully!');
            } else {
                return redirect()->back()->with('error', 'Something Went Wrong!');
            }
        } catch (ValidationException $e) {
            // Handle validation errors
            return $e->getResponse();
        }
    }
    public function user_access_update(Request $request)
    {

        //    dd($request->all());
        $adminaccess = Admin::where('id', $request->id)->first();

        if (!$adminaccess) {
            // Handle the case where the user is not found
            return redirect()->back()->with('error', 'User not found!');
        }

        // Extract the fields to update from the request
        $fieldsToUpdate = $request->except(['id', '_token']);

        // Update the admin_access field
        $dataToUpdate = [];
        foreach ($fieldsToUpdate as $field => $value) {
            $dataToUpdate[] = "$field=$value";
        }

        $adminaccess->update(['admin_access' => implode(',', $dataToUpdate)]);


        return redirect()->back()->with('success', 'User Access Updated Successfully!');
    }
    public function master_user_access(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => [
                'required',
                'string',
                'min:8',
                new CustomRule,
            ],
            'confirm_password' => 'required|string|same:password',
            'name' => 'nullable|string',
            'agent_password' => 'required|string',
            // Ensures confirm_password matches password

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
                ->with('success', 'Username already exists. Please try with a new username.')
                ->withInput();
        }
        $userrole = Auth::guard('agent')->user()->role_id;
        $user = Auth::guard('agent')->user();
        if (Auth::guard('agent')->user()->user_access == '1') {
            $userid = Auth::guard('agent')->user()->admin_id;
        } else {
            $userid = Auth::guard('agent')->user()->id;
        }

        if (!$user || !Hash::check($request->agent_password, $user->password)) {
            return redirect()->back()->with('success', 'Authentication failed. Please check your password.')->withInput();
        }
        $userdata = [
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'first_name' => $request->first_name,
            'admin_id'  => $userid,
            'role_id'   => $userrole,
            'admin_role' => $userrole,
            'user_access' => '1',
            'created_at'  => now(),
        ];
        $insert = Admin::insert($userdata);
        if ($insert) {
            $adminaccess = Admin::where('username', $request->username)->first();

            if ($adminaccess) {
                $existingData = $adminaccess->admin_access;

                // Extract the fields to update from the request
                $fieldsToUpdate = $request->except(['id', '_token', 'username', 'password', 'first_name', 'confirm_password', 'agent_password']);

                // Update the fields in the existingData
                foreach ($fieldsToUpdate as $field => $value) {
                    // Check if the field already exists in the admin_access data
                    $pattern = "/$field=[^,]*/";
                    if (preg_match($pattern, $existingData)) {
                        // If the field exists, replace its value
                        $existingData = preg_replace($pattern, "$field=$value", $existingData);
                    } else {
                        // If the field doesn't exist, append it to the existingData
                        $existingData .= ($existingData ? ',' : '') . "$field=$value";
                    }
                }

                // Update the admin_access field
                $adminaccess->update(['admin_access' => $existingData]);
            }
        }
        return redirect()->back()->with('success', 'User Added Successfully!');
    }
}

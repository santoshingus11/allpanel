<?php

namespace App\Http\Controllers\admin;

use App\Helpers\QueryHelper;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\PositionTaking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PositionController extends Controller
{
    //

    public function position_taking(Request $request){
        try{

            $position_taking=PositionTaking::select('position_taking.*','admins.username','admins.login_id')->Join('admins','admins.id','=','position_taking.admin_id');
        
            if($request->search!=''){
               $position_taking=$position_taking->where('admins.username','like','%'.$request->search.'%');
            }

            if(Auth::guard('agent')->user()->role_id != 1){
              
                $ids = QueryHelper::adminids();

                $position_taking=$position_taking->whereIn('position_taking.admin_id',$ids);
            }

            $data['position_taking']=$position_taking->paginate(5);
    
           // return  $data['position_taking'];
            if($request->search!=''){
                return view('agent.position-taking-listing-search',$data);
            }
    
            return view('agent.position-taking-listing',$data);
        }catch(\Throwable $th){

            return '';
        }
       
    }

    public function positionupdate(Request $request){
        try{

           $users=explode(',',$request->all_ids);

           $data=Admin::where('id',Auth::guard('agent')->user()->id)->first();
           if(Hash::check($request->agent_password,$data->password)){   


           for($i=0;$i<=count($users);$i++){
            $admin=PositionTaking::where('admin_id',$users[$i])->first();
            if(!empty($admin)){
                $data=[
                    'cricket'=>$request->cricket ?? $admin->cricket,
                    'football'=>$request->football ?? $admin->football,
                    'tennis'=>$request->tennis ?? $admin->tennis,
                    'horse_racing'=>$request->horse_racing ?? $admin->horse_racing,
                    'greyhound_racing'=>$request->greyhound_racing ?? $admin->greyhound_racing,
                    'casino'=>$request->casino ?? $admin->casino,
                    'other'=>$request->other ?? $admin->other,        
                    ];
                    PositionTaking::where('admin_id',$users[$i])->update($data);
            }else{
                $insertdata=[
                    'cricket'=>$request->cricket ?? '',
                    'football'=>$request->football ?? '',
                    'tennis'=>$request->tennis ?? '',
                    'horse_racing'=>$request->horse_racing ?? '',
                    'greyhound_racing'=>$request->greyhound_racing ?? '',
                    'casino'=>$request->casino ?? '',
                    'other'=>$request->other ?? '',  
                    'admin_id'=>$users[$i],        
                    ];
                    PositionTaking::insert($insertdata);
            }
           
           }
            return redirect()->back()->with('success','Successfully updated');

        }else{
                return redirect()->back()->with('success','Wrong Password !!');
            }
        }catch(\Throwable $th){
           return redirect()->back()->with('success','Something went wrong');
        }
    }
}

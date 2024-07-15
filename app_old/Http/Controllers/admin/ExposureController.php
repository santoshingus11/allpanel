<?php

namespace App\Http\Controllers\admin;

use App\Helpers\QueryHelper;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\BetHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExposureController extends Controller
{
    public function net_exposure(Request $request){

        // $date=date('Y-m-d');
      
        // $bet_history=BetHistory::where('created_at','like','%'.$date.'%');

        $bet_history=New BetHistory();
        
        if(Auth::guard('agent')->user()->role_id != 1){
         $adminids =  QueryHelper::client_list(Auth::guard('agent')->user()->role_id,Auth::guard('agent')->user()->id); 
           $bet_history=$bet_history->whereIn('client_id',$adminids);
         }   

         if($request->sports_name && $request->sports_name!='All' && $request->sports_name!='no'){        
            $bet_history=$bet_history->where('sports_name','like','%'.$request->sports_name.'%');
         }


         $data['bet_history']=$bet_history->orderBy('bet_history_id','DESC')->paginate(15);

         if($request->sports_name){

            return view('agent.net-exposure-search',$data);

         }
         //dd(DB::getQueryLog());

        //return $data;

        return view('agent.net-exposure',$data);
    }
}

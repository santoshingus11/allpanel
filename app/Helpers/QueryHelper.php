<?php
/**
 * Created by UniverseCode.
 */
namespace App\Helpers;

use App\Models\Admin;
use App\Models\BalanceLog;
use App\Models\BankingHistory;
use App\Models\BetHistory;
use App\Models\Role;
use App\Models\SiteNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\CricketPlaceBet;
use App\Models\FootballPlaceBet;
use App\Models\GreyhoundRacingPlaceBet;
use App\Models\HorseRacingPlaceBet;
use App\Models\TennisPlaceBet;
class QueryHelper
{
    public static function total_balanceup($id,$role_id)
    {

     $amount=BalanceLog::where('balance_given_to',$id)->sum('balance_amount');

         if(!empty($amount)){
         $data = $amount;      
         }else{
         $data = '0.00';
         }
         return $data;
    }  
    
    public static function total_balancedown($id,$role_id)
    {
       
     $amount=BalanceLog::where('balance_given_by',$id)->sum('balance_amount');

     if(!empty($amount)){
     $data = $amount;      
     }else{
     $data = '0.00';
     }
     return $data;
    }  

    public static function total_netexposure($id,$role_id)
    {
      //   if($role_id==1){
      //       $adminids=Admin::pluck('id')->toArray();
      //   }else{
      //       $adminids=Admin::where('admin_id',$id)->where('role_id',$role_id+1)->pluck('id')->toArray();
      //   }
      $deposit = BankingHistory::where('parent_id',Auth::guard('agent')->user()->id)->where('type','D')->sum('amount');
      $withdraw = BankingHistory::where('parent_id',Auth::guard('agent')->user()->id)->where('type','W')->sum('amount');
      
     
      return $deposit - $withdraw;
      //   $date=date('Y-m-d');
      //   $amount=BetHistory::where('client_id',$id)->sum('bet_placed');
      //    if(!empty($amount)){
      //    $data = $amount;      
      //    }else{
      //    $data = '0.00';
      //    }
      //    return $data;
       
    }  

    public static function total_availablecredit($id,$role_id)
    {
       
        
       // DB::enableQueryLog();
        $amount=Admin::where('id',$id)->first();
       // dd(DB::getQueryLog());

        if(!empty($amount)){
            $data = $amount->credit;      
            }else{
            $data = '0.00';
            }
            return $data;

       
    }  
    public static function total_bets($id)
    {
       
      $GreyhoundRacingPlaceBet = GreyhoundRacingPlaceBet::where('user_id',$id)->where('bet_result',Null)->sum('bet_stake');
      $HorseRacingPlaceBet = HorseRacingPlaceBet::where('user_id',$id)->where('bet_result',Null)->sum('bet_stake');
      $TennisPlaceBet = TennisPlaceBet::where('user_id',$id)->where('bet_result',Null)->sum('bet_stake');
      $FootballPlaceBet = FootballPlaceBet::where('user_id',$id)->where('bet_result',Null)->sum('bet_stake');
      $CricketPlaceBet = CricketPlaceBet::where('user_id',$id)->where('bet_result',Null)->sum('bet_stake');

       return $CricketPlaceBet + $FootballPlaceBet + $TennisPlaceBet + $HorseRacingPlaceBet + $GreyhoundRacingPlaceBet;
    }  

    public static function admin_access_id()
    {
      $data=Admin::where('user_access','!=',1);

      if(Auth::guard('agent')->user()->user_access==1)
      {
       $checkadmin=Admin::where('id',Auth::guard('agent')->user()->admin_id)->first();
       $data=$data->where('admin_id',$checkadmin);
      }else{
      $data=$data->where('admin_id',Auth::guard('agent')->user()->id);
      } 
      $admin_access_id=$data->pluck('id')->toArray();

      return $admin_access_id;
    }


    

    public static function give_clientcredit($role_id)
    {
      $id=QueryHelper::admin_access_id();    
      //DB::enableQueryLog();
      $data= Admin::where('role_id',$role_id)->whereIn('id',$id)->pluck('id')->toArray();
      //  dd(DB::getQueryLog());
      //  print_r($data);
      // exit;

      if(count($data)>0){
        $amount=BalanceLog::whereIn('balance_given_by',$data)->sum('balance_amount');
      }else{
         $amount= '0.00';
      }

      return $amount;    
    }

    public static function to_clientcredit($role_id)
    {
      $id=QueryHelper::admin_access_id();
    
     // DB::enableQueryLog();
      $data= Admin::where('role_id',$role_id)->whereIn('id',$id)->pluck('id')->toArray();
     // dd(DB::getQueryLog());

      if(count($data)>0){
        $amount=BalanceLog::whereIn('balance_given_to',$data)->sum('balance_amount');
      }else{
         $amount= '0.00';
      }

      return $amount;    
    }


    public static function role_name($role_id)
    {

       $role=Role::where('role_id',$role_id)->first();

       return $role->role_name;

    }

    public static function takebalance($id)
    {

        $amount=BankingHistory::where('parent_id',$id)->where('type','D')->sum('amount');
        // dd(DB::getQueryLog());
 
         if(!empty($amount)){
             $data = $amount;      
             }else{
             $data = '0.00';
             }
             return $data;
    }

    public static function givebalance($id)
    {
      $amount=BankingHistory::where('user_id',$id)->where('type','D')->sum('amount');
        // dd(DB::getQueryLog());
 
         if(!empty($amount)){
             $data = $amount;      
             }else{
             $data = '0.00';
             }
             return $data;

    }

    public static function stake($role_id,$id,$from_date=null,$to_date=null){
       // DB::enableQueryLog();
        $stakeQuery = ($role_id == 5) ? BetHistory::where('client_id', $id) : BetHistory::whereIn('client_id', QueryHelper::client_list($role_id, $id));
  
        if ($from_date != 'null' && $to_date != '') {
            $stakeQuery->whereBetween('created_at', [$from_date, $to_date]);
        }

        $stake = $stakeQuery->sum('bet_placed');
       // dd(DB::getQueryLog());
        return $stake;
     }

     public static function winner($role_id,$id,$from_date=null,$to_date=null){
        if($role_id==5){
           $master=collect($id);
         }else{
           $master=QueryHelper::client_list($role_id,$id);
         }    
        // dd(DB::getQueryLog());
        $amount=DB::table('bet_histories')->whereIn('client_id',$master)->where('result','1');
        
        if ($from_date != 'null' && $to_date != '') {
           $amount->whereBetween('created_at', [$from_date, $to_date]);
       }

       $amount= $amount->get();
  
        $total=0;
        foreach($amount as $am){
           $bet_amount=$am->bet_placed*($am->odd_req-1);
           $total=$total+$bet_amount;       
        }    
  
        return $total;
     }

     public static function loser($role_id,$id,$from_date=null,$to_date=null){
      if($role_id==5){
         $master=collect($id);
       }else{
          $master=QueryHelper::client_list($role_id,$id);
       }
      $amount=BetHistory::whereIn('client_id',$master)->where('result','2');

      if ($from_date != 'null' && $to_date != '') {
         $amount->whereBetween('created_at', [$from_date, $to_date]);
     }

     $amount= $amount->sum('bet_placed');

      if(!empty($amount)){
      $data = $amount;      
      }else{
      $data = '0.00';
      }
      return $data;
   }
  
    
  
     public static function odds($role_id,$id,$from_date=null,$to_date=null){
        $stakeQuery = ($role_id == 5) ? BetHistory::where('client_id', $id) : BetHistory::whereIn('client_id', QueryHelper::client_list($role_id, $id));
  
        if ($from_date != 'null' && $to_date != '') {
            $stakeQuery->whereBetween('created_at', [$from_date, $to_date]);
        }    
  
        $amount=$stakeQuery->sum('odd_req');
  
         if(!empty($amount)){
         $data = $amount;      
         }else{
         $data = '0.00';
         }
         return $data;
      }
  
    
     public static function client_list($role_id,$id){
        if($role_id==2){
           $hyperhyperid=Admin::where('admin_id',$id)->where('role_id',3)->pluck('id')->toArray();
        
           
           $hyperid=Admin::whereIn('admin_id',$hyperhyperid)->where('role_id',4)->pluck('id')->toArray();
       
         //  DB::enableQueryLog();
           $supersuper=Admin::whereIn('admin_id',$hyperid)->where('role_id',5)->pluck('id')->toArray();
           //dd(DB::getQueryLog());
        }elseif($role_id==3){          
           $hyperid=Admin::where('admin_id',$id)->where('role_id',4)->pluck('id')->toArray();
           $supersuper=Admin::whereIn('admin_id',$hyperid)->where('role_id',5)->pluck('id')->toArray();
        }elseif($role_id==4){
           $supersuper=Admin::where('admin_id',$id)->where('role_id',5)->pluck('id')->toArray();
        }else{
           $supersuper=0;
        }
  
        return $supersuper;
  
     }

     public static function ownid(){
      if(Auth::guard('agent')->user()->user_access==1){
         $ownid=Auth::guard('agent')->user()->admin_id;
      }else{
         $ownid=Auth::guard('agent')->user()->id;
      }
      return $ownid;
     }

     public static function adminids(){
    // $data = Admin::where('role_id',Auth::guard('agent')->user()->role_id+1);
    
      $data=Admin::where('user_access','!=',1);
      
      if(Auth::guard('agent')->user()->role_id<=2){
         
         $data=$data->where('role_id',Auth::guard('agent')->user()->role_id+1);

      }else{
         $data=$data->whereIn('role_id',[Auth::guard('agent')->user()->role_id+1,5]);
      }
     
        if(Auth::guard('agent')->user()->user_access==1)
        {
        
         $checkadmin=Admin::where('id',Auth::guard('agent')->user()->admin_id)->first();
         dd($checkadmin);
         $data=$data->where('admin_id',$checkadmin->id);
        }else{

       
         $data=$data->where('admin_id',Auth::guard('agent')->user()->id);
        }  
        
        $alldata = $data->pluck('id')->toArray();

        return $alldata;

     }

     public static function userdetails($id,$username=null){
      $checkadmin=Admin::where('id',$id)->first();
      return $checkadmin;
     }

     public static function updatebalancelog($amount,$admin_id,$agent_id,$remarks){
      DB::table('balance_log')->insert(['balance_amount'=>$amount,'balance_given_by'=>$admin_id,'balance_given_to'=>$agent_id,'note'=>$remarks]);                          
   }


   public static function notification($type){
      $data=SiteNotification::where('site_notificational_type',$type)->first();
      return $data->description ?? '';
   }

   public function getIpDetails()
      {
                  $ipAddress = request()->ip(); 
                  $response = Http::get("https://ipinfo.io/{$ipAddress}?token=d9c9f9e72daec3");
                  $data = $response->json();
                  if(!empty($data['asn'])){
                     $isp = $data['asn']['asn'].' '.$data['asn']['name'];
                  }else{
                     $isp = 'AS55836 Reliance Jio Infocomm Limited';
                  }     
                  return $data;
      }

      public static function hyperhypercurrency($admin_id,$role){
         try{
            if($admin_id=='' && $role==''){
               $hyperhypermaster_id=Admin::where('id',1)->pluck('currency');
            }
       
              if($role==5){
               if($admin_id==1){
                  $hyperhypermaster_id=Admin::where('id',$admin_id)->pluck('currency');
               }else{
               $subsupermaster_id=Admin::where('id',$admin_id)->where('role_id','4')->pluck('admin_id');
               $hypermaster_id=Admin::whereIn('id',[$subsupermaster_id])->where('role_id','3')->pluck('admin_id');
               $hyperhypermaster_id=Admin::whereIn('id',[$hypermaster_id])->where('role_id','2')->pluck('currency');
               }
              }
              if($role==4){   
               if($admin_id==1){
                  $hyperhypermaster_id=Admin::where('id',$admin_id)->pluck('currency');
               }else{         
               $hypermaster_id=Admin::where('id',$admin_id)->where('role_id','3')->pluck('admin_id');
               $hyperhypermaster_id=Admin::whereIn('id',[$hypermaster_id])->where('role_id','2')->pluck('currency');
               }
              }
              if($role==3){        
               if($admin_id==1){
                  $hyperhypermaster_id=Admin::where('id',$admin_id)->pluck('currency');
               }else{    
               $hyperhypermaster_id=Admin::where('id',$admin_id)->where('role_id','2')->pluck('currency');
               }
             
              }
              if($role==2){   
               $hyperhypermaster_id=collect(Auth::guard('agent')->user()->currency);
              }
              if($role==1){   
               $hyperhypermaster_id=collect(Auth::guard('agent')->user()->currency);
              }
               return $hyperhypermaster_id ?? [];
         }catch(\Throwable $th){
            $hyperhypermaster_id=Admin::where('id',1)->pluck('currency');
            return $hyperhypermaster_id ?? [];
   
         }
   
       
      }
}

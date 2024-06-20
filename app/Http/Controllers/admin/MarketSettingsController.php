<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarketSettingsController extends Controller
{
    
    public function market_settings(Request $request){

        
        $data['series_list']=DB::table('series_list')->get();
        $data['match_list']=DB::table('match_list')->get();

        $subquery = DB::table('series_list')->distinct()->pluck('series_name');
        $data['sports_list'] = DB::table('sports_list')
        ->whereNotIn('sports_name', $subquery)
        ->get();
     
        $market_settings=DB::table('market_settings')->groupBy(['selection_name', 'match_name', 'market_name']);
       
        if($request->sports_name!=''){
          $market_settings=$market_settings->where('sports_name','like',$request->sports_name);
        }
        if($request->series_name!=''){
          $market_settings=$market_settings->where('series_name','like',$request->series_name);
        }  
        if($request->match_name!=''){
            $market_settings=$market_settings->where('match_name','like',$request->match_name);
        }
    
        if($request->status_name!='' && $request->status_value!=''){
          DB::table('market_settings')->where('market_settings_id',$request->id)->update([$request->status_name=>$request->status_value]);
        }

        $data['market_settings']=$market_settings->orderBy('market_settings_id','DESC')->paginate(50);    
        
        if($request->sports_name!='' || $request->series_name!='' || $request->match_name!=''){
            return view('agent.market-settings-search',$data);
        }

        return view('agent.market-settings',$data);
    }   

    public function global_setting(Request $request){

      if ($request->isMethod('post')){   
          
        if(isset($request->site_logo)){

          $site_logo = time().'.'.$request->site_logo->extension();    
             
              $icon_original = $request->file('site_logo');
              $width = 56; // Specify your desired width
              $height = 54; // Specify your desired height
              $image = Image::make($icon_original);    
              $image->resize($width, $height);    
              $pathToSave = public_path('global_images/'); // Define the path where you want to save the image
              $imageName =  $site_logo; // Define the name for the resized image    
              $image->save($pathToSave . $imageName);

              $insertdata=['site_logo'=>$site_logo];

        }elseif(isset($request->fav_icon)){

                $fav_icon = time().'.'.$request->fav_icon->extension();    
                   
                    $icon_original = $request->file('fav_icon');
                    $width = 56; // Specify your desired width
                    $height = 54; // Specify your desired height
                    $image = Image::make($icon_original);    
                    $image->resize($width, $height);    
                    $pathToSave = public_path('global_images/'); // Define the path where you want to save the image
                    $imageName =  $fav_icon; // Define the name for the resized image    
                    $image->save($pathToSave . $imageName);                       
                    
                    $insertdata=['fav_icon'=>$fav_icon];   
                    
        }elseif(isset($request->apk_file)){
          
          $imageName = time().'.'.$request->apk_file->extension();    
          $request->apk_file->move(public_path('global_images'), $imageName);
          $insertdata=['apk_file'=>$imageName];   
            
        }elseif(isset($request->whatsapp_image)){
          
        $imageName = time().'.'.$request->whatsapp_image->extension();    
        $request->whatsapp_image->move(public_path('global_images'), $imageName);
        $insertdata=['whatsapp_image'=>$imageName];   
          
        }elseif(isset($request->insta_image)){
          
          $imageName = time().'.'.$request->insta_image->extension();    
          $request->insta_image->move(public_path('global_images'), $imageName);
          $insertdata=['insta_image'=>$imageName];   
            
        }elseif(isset($request->telegram_image)){
          
          $imageName = time().'.'.$request->telegram_image->extension();    
          $request->telegram_image->move(public_path('global_images'), $imageName);
          $insertdata=['telegram_image'=>$imageName];   
            
        }elseif(isset($request->facebook_image)){
          
          $imageName = time().'.'.$request->facebook_image->extension();    
          $request->facebook_image->move(public_path('global_images'), $imageName);  
          $insertdata=['facebook_image'=>$imageName];   
            
        }elseif(isset($request->twitter_image)){
          
          $imageName = time().'.'.$request->twitter_image->extension();    
          $request->twitter_image->move(public_path('global_images'), $imageName);  
          $insertdata=['twitter_image'=>$imageName];   
            
        }elseif(isset($request->currency_number)){
          $check_currency=DB::table('currency_settings')->where('match_stack',$request->currency_number)->first();

        $stack_one='stake_1_'.$request->currency_number;
        $stack_two='stake_2_'.$request->currency_number;
        $stack_three='stake_3_'.$request->currency_number;
        $stack_four='stake_4_'.$request->currency_number;
        $stack_five='stake_5_'.$request->currency_number;
        $stack_six='stake_6_'.$request->currency_number;
        $stack_seven='stake_7_'.$request->currency_number;
        $stack_eight='stake_8_'.$request->currency_number;
        $minbet='min_bet'.$request->currency_number;
        $maxbet='max_bet'.$request->currency_number;
        $sports_name='sports_name'.$request->currency_number;       
        
          $data=['sports_name'=>$request->$sports_name,
                'min_bet'=>$request->$minbet,
                'max_bet'=>$request->$maxbet,
                'stakes_1'=>$request->$stack_one,
                'stakes_2'=>$request->$stack_two,
                'stakes_3'=>$request->$stack_three,    
                'stakes_4'=>$request->$stack_four,
                'stakes_5'=>$request->$stack_five,
                'stakes_6'=>$request->$stack_six,     
                'stakes_7'=>$request->$stack_seven,
                'stakes_8'=>$request->$stack_eight,     
                'match_stack'=>$request->currency_number                  
                ];
                
                if(empty($check_currency)){
                  DB::table('currency_settings')->insert($data);
                }else{
                  DB::table('currency_settings')->where('match_stack',$request->currency_number)->update($data);
                                  }          
        }else{
            //return 6;
            $insertdata=[
              'site_under_maintenance'=>$request->site_under_maintenance ?? 0,
              'whatsapp_link'=>$request->whatsapp_link,
              'insta_link'=>$request->insta_link,
              'telegram_link'=>$request->telegram_link,
              'facebook_link'=>$request->facebook_link,
              'twitter_link'=>$request->twitter_link,
              'sign_up_status'=>$request->sign_up_status ?? 0,
              'show_user_setting'=>$request->show_user_setting ?? 0,
              'bet_start_time'=>$request->bet_start_time ?? 0,
              'payment_gateway_status'=>$request->payment_gateway_status ?? 0,  
              'transaction'=>$request->transaction,
              'site_message'=>$request->site_message, 
              'max_bet_amount'=>$request->max_bet_amount,
              'max_number_bet'=>$request->max_number_bet,                 
              'odds_min'=>$request->odds_min ?? 0,
              'odds_max'=>$request->odds_max ?? 0,
              'odds_delay'=>$request->odds_delay ?? 0,
              'bookmaker_min'=>$request->bookmaker_min ?? 0,
              'bookmaker_max'=>$request->bookmaker_max ?? 0,  
              'bookmaker_delay'=>$request->bookmaker_delay ?? 0,
              'session_min'=>$request->session_min ?? 0, 
              'session_max'=>$request->session_max ?? 0,
              'session_delay'=>$request->session_delay ?? 0,   
            ];
     

        }
        if(!isset($request->currency_number)){
          DB::table('settings')->where('settings_id',1)->update($insertdata);
        }
    
       }
       //return $request->all();
       $data['global_setting']=DB::table('settings')->where('settings_id','1')->first();
       $data['currency_settings']=DB::table('currency_settings')->whereNull('client_id')->get();
      // $data['global_currency']=DB::table('')->where()->get();
      // return $data;
      return view('agent.global-settings',$data);
  }

}

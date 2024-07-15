<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\BetRecord;
use Illuminate\Http\Request;
use App\Models\CricketMatch;
use App\Models\CricketPlaceBet;
class CommandController extends Controller
{
    public function index(Request $request){
        $requestData = $request->json()->all();
        // dd($requestData['cmd']);
        $validatedData = $this->validate($request, [
            'hall' => 'required',
            'key' => 'required',
            'login' => 'required',
        ]);
        if($requestData['cmd']=="getBalance"){
            $admin = Admin::where('username',$validatedData['login'])->first();
            if($admin){
                $response = [
                    'status' => 'success',
                    'error' => '',
                    'login' => $admin->username,
                    'balance' => $admin->balance,
                    'currency' => 'INR'
                ];
                return response()->json($response);
            }else{
                    return response()->json($this->errorfunction('user_not_found'));
            }
        }elseif($requestData['cmd']=="writeBet"){


            $admin = Admin::where('username',$validatedData['login'])->first();
            if($admin){
                $response = $this->writeBet($requestData,$admin);
                return response()->json($response);
            }else{
                return response()->json($this->errorfunction('user_not_found'));
             }


        }else{
            return response()->json($this->errorfunction('request_not_found!'));
        }



   }


   public function writeBet($request, $admin){
        if($request['betInfo'] != "refund"){
            if($request['bet'] > $admin->balance){
                return response()->json($this->errorfunction('fail_balance'));
            }
            $balance = $admin->balance - $request['bet'];
            $admin->update([

                'balance'=>$balance + $request['win']
             ]);

            $record = BetRecord::create(
                [
                    'admin_id' =>$admin->id,
                    'hall' => $request['hall'],
                    'key' => $request['key'],
                    'sessionId' => (isset($request['sessionId']) ? $request['sessionId'] : ''),
                    'bet' => $request['bet'],
                    'win' => $request['win'],
                    'tradeId' => (isset($request['tradeId'])) ? $request['tradeId'] : '',
                    'action' => (isset($request['action'])) ? $request['action'] : '',
                    'betInfo' => (isset($request['betInfo'])) ? $request['betInfo'] : '',
                    'gameId' => $request['gameId'],
                    'matrix' => (isset($request['matrix'])) ? $request['matrix'] : '',
                    'date' => (isset($request['date'])) ? $request['date'] : '',
                    'winLines' => (isset($request['WinLines'])) ? $request['WinLines'] : ''
                ]
             );

             return [
                'status' => 'success',
                'error' => '',
                'login' => $admin->username,
                'balance' => $admin->balance,
                'currency' => 'INR',
                'operationId' => $record->id
            ];
        }else{
            return  [
                'status' => 'fail',
                'error' => 'fail_balance'

            ];
        }
   }


public function profit_loss($id,$game_id,$win_loss){
      
 try {

//         $cricket = CricketMatch::findOrFail($id);
//          echo '<pre>';
// print_r($cricket);
// echo '</pre>';
// die();
        if(isset($win_loss)){
            // $cricket->win_loss = $win_loss; 
                   
            $winnerSelection = CricketPlaceBet::where('match_id',$id)->where('bet_result',null)->where('back_lay',$win_loss)
                                  ->join('admins', 'cricket_place_bet.user_id', '=', 'admins.id')
                                  ->get();
            
            if(!empty($winnerSelection)){
              foreach($winnerSelection as $winner){
                  $total_balance = $winner->balance + $winner->bet_profit;
                   
                  $admin = Admin::findOrFail($winner->user_id);
                  $admin->balance = $total_balance;
                  $admin->save();
              } 
            }
            
             $placeBetResults = CricketPlaceBet::where('match_id',$id)->where('bet_result',null)->where('back_lay',$win_loss)->get();
            
            if(!empty($placeBetResults)){
              foreach($placeBetResults as $placeBetResult){
                  $placeBetResult->bet_result = 1; //1=win, 2=Lose
                  $placeBetResult->save();
              }
            }
            
            if($win_loss=='back'){
                $winLoss = 'lay';
            }
            if($win_loss=='lay'){
                $winLoss = 'back';
            }
            
            $LoseResults = CricketPlaceBet::where('match_id',$id)->where('bet_result',null)->where('back_lay',$winLoss)->get();
            
            if(!empty($LoseResults)){
              foreach($LoseResults as $LoseResult){
                  $LoseResult->bet_result = 2; // 2=Lose
                  $LoseResult->save();
              }
            }
         
        }
        return "done";
        
             } catch(Exception $e) {
             return $e->getMessage();
            }
   }


  public function  errorfunction($error){
    return  [
        'status' => 'fail',
        'error' => $error

    ];
  }
}

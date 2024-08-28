<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\BetRecord;
use Illuminate\Http\Request;
use App\Models\CricketMatch;
use App\Models\CricketPlaceBet;
use App\Models\FootballPlaceBet;
use App\Models\GreyhoundRacingPlaceBet;
use App\Models\HorseRacingPlaceBet;
use App\Models\TennisPlaceBet;
use App\Models\BankingHistory;
use App\Models\Deposit;
use App\Models\Withdraw;

class CommandController extends Controller
{
    public function index(Request $request)
    {
        $requestData = $request->json()->all();
        // dd($requestData['cmd']);
        $validatedData = $this->validate($request, [
            'hall' => 'required',
            'key' => 'required',
            'login' => 'required',
        ]);
        if ($requestData['cmd'] == "getBalance") {
            $admin = Admin::where('username', $validatedData['login'])->first();
            if ($admin) {
                $response = [
                    'status' => 'success',
                    'error' => '',
                    'login' => $admin->username,
                    'balance' => $admin->balance,
                    'currency' => 'INR'
                ];
                return response()->json($response);
            } else {
                return response()->json($this->errorfunction('user_not_found'));
            }
        } elseif ($requestData['cmd'] == "writeBet") {


            $admin = Admin::where('username', $validatedData['login'])->first();
            if ($admin) {
                $response = $this->writeBet($requestData, $admin);
                return response()->json($response);
            } else {
                return response()->json($this->errorfunction('user_not_found'));
            }
        } else {
            return response()->json($this->errorfunction('request_not_found!'));
        }
    }


    public function writeBet($request, $admin)
    {
        if ($request['betInfo'] != "refund") {
            if ($request['bet'] > $admin->balance) {
                return response()->json($this->errorfunction('fail_balance'));
            }
            $balance = $admin->balance - $request['bet'];
            $admin->update([

                'balance' => $balance + $request['win']
            ]);

            $record = BetRecord::create(
                [
                    'admin_id' => $admin->id,
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
        } else {
            return  [
                'status' => 'fail',
                'error' => 'fail_balance'

            ];
        }
    }


    public function profit_loss($id, $game_id, $win_loss)
    {

        try {


            if ($game_id == 'cricket') {
                $winnerSelection = CricketPlaceBet::where('match_id', $id)->where('bet_result', null)->where('back_lay', $win_loss)
                    ->join('admins', 'cricket_place_bet.user_id', '=', 'admins.id')
                    ->get();

                if (!empty($winnerSelection)) {
                    foreach ($winnerSelection as $winner) {
                        $total_balance = $winner->balance + $winner->bet_profit;

                        $admin = Admin::findOrFail($winner->user_id);
                        $admin->balance = $total_balance;
                        $admin->save();
                    }
                }

                $placeBetResults = CricketPlaceBet::where('match_id', $id)->where('bet_result', null)->where('back_lay', $win_loss)->get();

                if (!empty($placeBetResults)) {
                    foreach ($placeBetResults as $placeBetResult) {
                        $placeBetResult->bet_result = 1; //1=win, 2=Lose
                        $placeBetResult->save();
                    }
                }

                if ($win_loss == 'back') {
                    $winLoss = 'lay';
                }
                if ($win_loss == 'lay') {
                    $winLoss = 'back';
                }

                $LoseResults = CricketPlaceBet::where('match_id', $id)->where('bet_result', null)->where('back_lay', $winLoss)->get();

                if (!empty($LoseResults)) {
                    foreach ($LoseResults as $LoseResult) {
                        $LoseResult->bet_result = 2; // 2=Lose
                        $LoseResult->save();
                    }
                }
            }

            if ($game_id == 'football') {
                echo '<pre>';

                $winnerSelection = FootballPlaceBet::where('match_id', $id)->where('bet_result', null)->where('back_lay', $win_loss)
                    ->join('admins', 'football_place_bet.user_id', '=', 'admins.id')
                    ->get();

                if (!empty($winnerSelection)) {
                    foreach ($winnerSelection as $winner) {
                        $total_balance = $winner->balance + $winner->bet_profit;

                        $admin = Admin::findOrFail($winner->user_id);
                        $admin->balance = $total_balance;
                        $admin->save();
                    }
                }

                $placeBetResults = FootballPlaceBet::where('match_id', $id)->where('bet_result', null)->where('back_lay', $win_loss)->get();

                if (!empty($placeBetResults)) {
                    foreach ($placeBetResults as $placeBetResult) {
                        $placeBetResult->bet_result = 1; //1=win, 2=Lose
                        $placeBetResult->save();
                    }
                }

                if ($win_loss == 'back') {
                    $winLoss = 'lay';
                }
                if ($win_loss == 'lay') {
                    $winLoss = 'back';
                }

                $LoseResults = FootballPlaceBet::where('match_id', $id)->where('bet_result', null)->where('back_lay', $winLoss)->get();

                if (!empty($LoseResults)) {
                    foreach ($LoseResults as $LoseResult) {
                        $LoseResult->bet_result = 2; // 2=Lose
                        $LoseResult->save();
                    }
                }
            }

            if ($game_id == 'tennis') {
                $winnerSelection = TennisPlaceBet::where('match_id', $id)->where('bet_result', null)->where('back_lay', $win_loss)
                    ->join('admins', 'tennis_place_bet.user_id', '=', 'admins.id')
                    ->get();

                if (!empty($winnerSelection)) {
                    foreach ($winnerSelection as $winner) {
                        $total_balance = $winner->balance + $winner->bet_profit;

                        $admin = Admin::findOrFail($winner->user_id);
                        $admin->balance = $total_balance;
                        $admin->save();
                    }
                }

                $placeBetResults = TennisPlaceBet::where('match_id', $id)->where('bet_result', null)->where('back_lay', $win_loss)->get();

                if (!empty($placeBetResults)) {
                    foreach ($placeBetResults as $placeBetResult) {
                        $placeBetResult->bet_result = 1; //1=win, 2=Lose
                        $placeBetResult->save();
                    }
                }

                if ($win_loss == 'back') {
                    $winLoss = 'lay';
                }
                if ($win_loss == 'lay') {
                    $winLoss = 'back';
                }

                $LoseResults = TennisPlaceBet::where('match_id', $id)->where('bet_result', null)->where('back_lay', $winLoss)->get();

                if (!empty($LoseResults)) {
                    foreach ($LoseResults as $LoseResult) {
                        $LoseResult->bet_result = 2; // 2=Lose
                        $LoseResult->save();
                    }
                }
            }


            if ($game_id == 'horse') {
                $winnerSelection = HorseRacingPlaceBet::where('match_id', $id)->where('bet_result', null)->where('back_lay', $win_loss)
                    ->join('admins', 'horse_racing_place_bet.user_id', '=', 'admins.id')
                    ->get();

                if (!empty($winnerSelection)) {
                    foreach ($winnerSelection as $winner) {
                        $total_balance = $winner->balance + $winner->bet_profit;

                        $admin = Admin::findOrFail($winner->user_id);
                        $admin->balance = $total_balance;
                        $admin->save();
                    }
                }

                $placeBetResults = HorseRacingPlaceBet::where('match_id', $id)->where('bet_result', null)->where('back_lay', $win_loss)->get();

                if (!empty($placeBetResults)) {
                    foreach ($placeBetResults as $placeBetResult) {
                        $placeBetResult->bet_result = 1; //1=win, 2=Lose
                        $placeBetResult->save();
                    }
                }

                if ($win_loss == 'back') {
                    $winLoss = 'lay';
                }
                if ($win_loss == 'lay') {
                    $winLoss = 'back';
                }

                $LoseResults = HorseRacingPlaceBet::where('match_id', $id)->where('bet_result', null)->where('back_lay', $winLoss)->get();

                if (!empty($LoseResults)) {
                    foreach ($LoseResults as $LoseResult) {
                        $LoseResult->bet_result = 2; // 2=Lose
                        $LoseResult->save();
                    }
                }
            }

            if ($game_id == 'greyhound') {
                $winnerSelection = GreyhoundRacingPlaceBet::where('match_id', $id)->where('bet_result', null)->where('back_lay', $win_loss)
                    ->join('admins', 'greyhound_racing_place_bet.user_id', '=', 'admins.id')
                    ->get();

                if (!empty($winnerSelection)) {
                    foreach ($winnerSelection as $winner) {
                        $total_balance = $winner->balance + $winner->bet_profit;

                        $admin = Admin::findOrFail($winner->user_id);
                        $admin->balance = $total_balance;
                        $admin->save();
                    }
                }

                $placeBetResults = GreyhoundRacingPlaceBet::where('match_id', $id)->where('bet_result', null)->where('back_lay', $win_loss)->get();

                if (!empty($placeBetResults)) {
                    foreach ($placeBetResults as $placeBetResult) {
                        $placeBetResult->bet_result = 1; //1=win, 2=Lose
                        $placeBetResult->save();
                    }
                }

                if ($win_loss == 'back') {
                    $winLoss = 'lay';
                }
                if ($win_loss == 'lay') {
                    $winLoss = 'back';
                }

                $LoseResults = GreyhoundRacingPlaceBet::where('match_id', $id)->where('bet_result', null)->where('back_lay', $winLoss)->get();

                if (!empty($LoseResults)) {
                    foreach ($LoseResults as $LoseResult) {
                        $LoseResult->bet_result = 2; // 2=Lose
                        $LoseResult->save();
                    }
                }
            }

            return "done";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    public function  errorfunction($error)
    {
        return  [
            'status' => 'fail',
            'error' => $error

        ];
    }

    public function all_games_bet($game, $match_id)
    {
        if ($game) {
            if ($game == "cricket") {
                $response = CricketPlaceBet::where('match_id', $match_id)->orderBy('id', 'desc')->get();
            }
            if ($game == "football") {
                $response = FootballPlaceBet::where('match_id', $match_id)->orderBy('id', 'desc')->get();
            }
            if ($game == "tennis") {
                $response = TennisPlaceBet::where('match_id', $match_id)->orderBy('id', 'desc')->get();
            }
            if ($game == "horse") {
                $response = HorseRacingPlaceBet::where('match_id', $match_id)->orderBy('id', 'desc')->get();
            }
            if ($game == "greyhound") {
                $response = GreyhoundRacingPlaceBet::where('match_id', $match_id)->orderBy('id', 'desc')->get();
            }
            return [
                'status' => 'success',
                'response' => $response,

            ];
        } else {
            return  [
                'status' => 'fail',
                'error' => 'fail_balance'

            ];
        }
    }

    public function all_games_bet_count_and_data()
    {
        $CricketPlaceBet = CricketPlaceBet::where('bet_result', null)->orderBy('id', 'desc')->get();
        $CricketPlaceBetcount = CricketPlaceBet::where('bet_result', null)->count();

        $FootballPlaceBet = FootballPlaceBet::where('bet_result', null)->orderBy('id', 'desc')->get();
        $FootballPlaceBetcount = FootballPlaceBet::where('bet_result', null)->count();

        $TennisPlaceBet = TennisPlaceBet::where('bet_result', null)->orderBy('id', 'desc')->get();
        $TennisPlaceBetcount = TennisPlaceBet::where('bet_result', null)->count();

        $HorseRacingPlaceBet = HorseRacingPlaceBet::where('bet_result', null)->orderBy('id', 'desc')->get();
        $HorseRacingPlaceBetcount = HorseRacingPlaceBet::where('bet_result', null)->count();

        $GreyhoundRacingPlaceBet = GreyhoundRacingPlaceBet::where('bet_result', null)->orderBy('id', 'desc')->get();
        $GreyhoundRacingPlaceBetcount = GreyhoundRacingPlaceBet::where('bet_result', null)->count();

        $data = [
            'CricketPlaceBet' =>   $CricketPlaceBet,
            'CricketPlaceBetcount' =>   $CricketPlaceBetcount,
            'FootballPlaceBet' =>   $FootballPlaceBet,
            'FootballPlaceBetcount' =>   $FootballPlaceBetcount,
            'TennisPlaceBet' =>   $TennisPlaceBet,
            'TennisPlaceBetcount' =>   $TennisPlaceBetcount,
            'HorseRacingPlaceBet' =>   $HorseRacingPlaceBet,
            'HorseRacingPlaceBetcount' =>   $HorseRacingPlaceBetcount,
            'GreyhoundRacingPlaceBet' =>   $GreyhoundRacingPlaceBet,
            'GreyhoundRacingPlaceBetcount' =>   $GreyhoundRacingPlaceBetcount,
        ];
        return response()->json([
            'status' => 'success',
            'response' => $data,
        ]);
    }
    public function all_games_bet_count()
    {
        $CricketPlaceBetcount = CricketPlaceBet::where('bet_result', null)->count();
        $CricketPlaceBetcountnew = CricketPlaceBet::where('bet_result', null)->where('status', 0)->count();

        $FootballPlaceBetcount = FootballPlaceBet::where('bet_result', null)->count();
        $FootballPlaceBetcountnew = FootballPlaceBet::where('bet_result', null)->where('status', 0)->count();

        $TennisPlaceBetcount = TennisPlaceBet::where('bet_result', null)->count();
        $TennisPlaceBetcountnew = TennisPlaceBet::where('bet_result', null)->where('status', 0)->count();

        $HorseRacingPlaceBetcount = HorseRacingPlaceBet::where('bet_result', null)->count();
        $HorseRacingPlaceBetcountnew = HorseRacingPlaceBet::where('bet_result', null)->where('status', 0)->count();

        $GreyhoundRacingPlaceBetcount = GreyhoundRacingPlaceBet::where('bet_result', null)->count();
        $GreyhoundRacingPlaceBetcountnew = GreyhoundRacingPlaceBet::where('bet_result', null)->where('status', 0)->count();

        $total = $CricketPlaceBetcount + $FootballPlaceBetcount + $TennisPlaceBetcount + $HorseRacingPlaceBetcount + $GreyhoundRacingPlaceBetcount;
        $data = [
            'total' =>   $total,
            'CricketPlaceBetcount' =>   $CricketPlaceBetcount,
            'CricketPlaceBetcountnew' =>   $CricketPlaceBetcountnew,
            'FootballPlaceBetcount' =>   $FootballPlaceBetcount,
            'FootballPlaceBetcountnew' =>   $FootballPlaceBetcountnew,
            'TennisPlaceBetcount' =>   $TennisPlaceBetcount,
            'TennisPlaceBetcountnew' =>   $TennisPlaceBetcountnew,
            'HorseRacingPlaceBetcount' =>   $HorseRacingPlaceBetcount,
            'HorseRacingPlaceBetcountnew' =>   $HorseRacingPlaceBetcountnew,
            'GreyhoundRacingPlaceBetcount' =>   $GreyhoundRacingPlaceBetcount,
            'GreyhoundRacingPlaceBetcountnew' =>   $GreyhoundRacingPlaceBetcountnew,
        ];

        return [
            'status' => 'success',
            'response' => $data,

        ];
    }
    public function all_games_bet_reject($id, $game)
    {
        if ($game == "Cricket") {
            $CricketPlaceBet = CricketPlaceBet::where('id', $id)->first();
            $user = Admin::where('id', $CricketPlaceBet->user_id)->first();
            $total = $user->balance + $CricketPlaceBet->bet_stake;
            Admin::where('id', $CricketPlaceBet->user_id)->update(['balance' => $total]);
            CricketPlaceBet::where('id', $id)->update(['bet_result' => '3']);
        }
        if ($game == "FootBall") {
            $CricketPlaceBet = FootballPlaceBet::where('id', $id)->first();
            $user = Admin::where('id', $CricketPlaceBet->user_id)->first();
            $total = $user->balance + $CricketPlaceBet->bet_stake;
            Admin::where('id', $CricketPlaceBet->user_id)->update(['balance' => $total]);
            FootballPlaceBet::where('id', $id)->update(['bet_result' => '3']);
        }
        if ($game == "Tennis") {
            $CricketPlaceBet = TennisPlaceBet::where('id', $id)->first();
            $user = Admin::where('id', $CricketPlaceBet->user_id)->first();
            $total = $user->balance + $CricketPlaceBet->bet_stake;
            Admin::where('id', $CricketPlaceBet->user_id)->update(['balance' => $total]);
            TennisPlaceBet::where('id', $id)->update(['bet_result' => '3']);
        }
        if ($game == "HorseRacing") {
            $CricketPlaceBet = HorseRacingPlaceBet::where('id', $id)->first();
            $user = Admin::where('id', $CricketPlaceBet->user_id)->first();
            $total = $user->balance + $CricketPlaceBet->bet_stake;
            Admin::where('id', $CricketPlaceBet->user_id)->update(['balance' => $total]);
            HorseRacingPlaceBet::where('id', $id)->update(['bet_result' => '3']);
        }
        if ($game == "GreyhoundRacing") {
            $CricketPlaceBet = GreyhoundRacingPlaceBet::where('id', $id)->first();
            $user = Admin::where('id', $CricketPlaceBet->user_id)->first();
            $total = $user->balance + $CricketPlaceBet->bet_stake;
            Admin::where('id', $CricketPlaceBet->user_id)->update(['balance' => $total]);
            GreyhoundRacingPlaceBet::where('id', $id)->update(['bet_result' => '3']);
        }
        return [
            'status' => 'success',
        ];
    }
    public function all_games_bet_accept($id, $game)
    {

        if ($game == "Cricket") {
            CricketPlaceBet::where('id', $id)->update(['status' => '1']);
        }
        if ($game == "FootBall") {
            FootballPlaceBet::where('id', $id)->update(['status' => '1']);
        }
        if ($game == "Tennis") {
            TennisPlaceBet::where('id', $id)->update(['status' => '1']);
        }
        if ($game == "HorseRacing") {
            HorseRacingPlaceBet::where('id', $id)->update(['status' => '1']);
        }
        if ($game == "GreyhoundRacing") {
            GreyhoundRacingPlaceBet::where('id', $id)->update(['status' => '1']);
        }
        return [
            'status' => 'success',
        ];
    }
    //////////////////////////////////////////////////// PAnnel//////////////////////////////////////////////

    function all_users()
    {
        $data = Admin::where('role_id', 5)->get() ?? [];
        $datas = [
            'data' => $data
        ];
        return response()->json($datas);
    }
    public function user_detail($id)
    {

        $user_data = Admin::where('id', $id)->first();


        $cricket_played_matches = CricketPlaceBet::where('user_id', $id)->where('bet_result', null)->orderBy('id', 'desc')->get();
        $football_played_matches = FootballPlaceBet::where('user_id', $id)->where('bet_result', null)->orderBy('id', 'desc')->get();
        $tennis_played_matches = TennisPlaceBet::where('user_id', $id)->where('bet_result', null)->orderBy('id', 'desc')->get();
        $HorseRacingPlaceBet = HorseRacingPlaceBet::where('user_id', $id)->where('bet_result', null)->orderBy('id', 'desc')->get();
        $GreyhoundRacingPlaceBet = GreyhoundRacingPlaceBet::where('user_id', $id)->where('bet_result', null)->orderBy('id', 'desc')->get();
        $merged_played_matches = $cricket_played_matches
            ->merge($football_played_matches)
            ->merge($HorseRacingPlaceBet)
            ->merge($tennis_played_matches)
            ->merge($GreyhoundRacingPlaceBet);

        // Sort the merged collection by 'id' in descending order
        $sorted_merged_played_matches = $merged_played_matches->sortByDesc('id');

        // If you need it as an array
        $sorted_merged_played_matches_array = $sorted_merged_played_matches->values()->all();
        //2
        $bankingHistories = BankingHistory::where('user_id', $id)->orderBy('banking_history_id', 'desc')->get();
        //3
        $betRecords = BetRecord::where('admin_id', $id)->orderBy('id', 'desc')->get();
        $cricketBets = CricketPlaceBet::where('user_id', $id)->orderBy('id', 'desc')->get();
        $footballBets = FootballPlaceBet::where('user_id', $id)->orderBy('id', 'desc')->get();
        $tennisBets = TennisPlaceBet::where('user_id', $id)->orderBy('id', 'desc')->get();
        $horseBets = HorseRacingPlaceBet::where('user_id', $id)->orderBy('id', 'desc')->get();
        $greyhoundBets = GreyhoundRacingPlaceBet::where('user_id', $id)->orderBy('id', 'desc')->get();

        return response()->json(get_defined_vars());
    }
    function deposit_withdraw_request()
    {
        $deposit = Deposit::with('user')->where('status', 'pending')->get();
        $depositcount = Deposit::with('user')->where('status', 'pending')->count();
        $withdraw = Withdraw::where('status', 'pending')->get();
        $withdrawcount = Withdraw::where('status', 'pending')->count();
        $data = [
            'deposit' => $deposit,
            'depositcount' => $depositcount,
            'withdraw' => $withdraw,
            'withdrawcount' => $withdrawcount
        ];
        return response()->json($data);
    }
    function deposit_withdraw_accept_reject($id, $deposit_withdraw, $accept_reject)
    {

        if ($deposit_withdraw == "deposit") {

            if ($accept_reject == "accept") {

                $deposit = Deposit::where('id', $id)->first();
                $admin = Admin::where('id', $deposit->user_id)->first();
                $amount = $admin->balance + $deposit->amount;
                // Update 
                Admin::where('id', $deposit->user_id)->update(['balance' => $amount]);
                Deposit::where('id', $id)->update(['status' => 'approved']);
            } else {
                Deposit::where('id', $id)->update(['status' => 'rejected']);
            }
        } else {
            if ($accept_reject == "accept") {

                $deposit = Withdraw::where('id', $id)->first();

                $admin = Admin::where('id', $deposit->user_id)->first();
                $amount = $admin->balance - $deposit->amount;

                // Update 
                Admin::where('id', $deposit->user_id)->update(['balance' => $amount]);
                Withdraw::where('id', $id)->update(['status' => 'approved']);
            } else {
                Withdraw::where('id', $id)->update(['status' => 'rejected']);
            }
        }
        return response()->json('done');
    }


    public function new_agent_submit(Request $request)
    {
        $existingUser = Admin::where('username', $request->username)->first();
        if ($existingUser) {
            return response()->json('Username already exists. Please try with a new username.');
        }
        if ($request->has('id')) {
            $newAgent = Admin::where('id', $request->id);
        } else {
            $newAgent = new Admin();
        }
        $newAgent->username = $request->username;
        $newAgent->password = bcrypt($request->password);
        $newAgent->status = $request->status;
        $newAgent->level_permission = $request->level; //user
        $newAgent->bet_status = $request->bet_status;
        $newAgent->credit_limit = 0;
        $newAgent->user_rate = 1;
        $newAgent->phone = $request->phone;
        $newAgent->role_id = 5;
        $newAgent->admin_role = 4;
        $newAgent->admin_id = 4;
        $newAgent->save();
        return response()->json('done');
    }

    public function adminControlDashboardApi()
    {
        $pending_deposits = Deposit::where('status', 'pending')->get()->count();
        $pending_withdraw = Withdraw::where('status', 'pending')->get()->count();
        $total_balancedown=QueryHelper::total_balancedown(4,4);
        $up=QueryHelper::total_balanceup(4,4);
        $total_balanceup = $up - $total_balancedown;
        return response()->json([
            'status' => 'success',
            'response' => get_defined_vars(),
        ]);
    }
}

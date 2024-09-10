<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use App\Models\CricketPlaceBet;
use App\Models\FootballPlaceBet;
use App\Models\Admin;
use App\Models\TennisPlaceBet;
use App\Models\HorseRacingPlaceBet;
use App\Models\GreyhoundRacingPlaceBet;
use App\Models\BankingHistory;
use App\Models\BetRecord;
use App\Models\Deposit;
use App\Models\Withdraw;

class HomeController extends Controller
{

    public function cricket_details(Request $request, $game_id)
    {

        //get match list
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        $url = "https://ujala11games.com/api/cricket/match-list/" . $game_id;
        curl_setopt($ch, CURLOPT_URL, $url);
        // Further increase timeout settings
        curl_setopt($ch, CURLOPT_TIMEOUT, 60); // Wait up to 60 seconds for a response
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); // Wait up to 30 seconds to connect
        // Execute
        $result = curl_exec($ch);
        // Will dump a beauty json <3
        $response = json_decode($result, true);

        curl_close($ch);


        //get Games list
        $gm = curl_init();
        // Disable SSL verification
        curl_setopt($gm, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($gm, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        $url = "https://ujala11games.com/api/cricket/game/single/" . $game_id;
        curl_setopt($gm, CURLOPT_URL, $url);
        // Further increase timeout settings
        curl_setopt($ch, CURLOPT_TIMEOUT, 60); // Wait up to 60 seconds for a response
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); // Wait up to 30 seconds to connect
        // Execute
        $res = curl_exec($gm);
        // Will dump a beauty json <3
        $game_single = json_decode($res, true);

        curl_close($gm);
        if ($request->ajax()) {

            //get Games list
            $gm1 = curl_init();
            // Disable SSL verification
            curl_setopt($gm1, CURLOPT_SSL_VERIFYPEER, false);
            // Will return the response, if false it print the response
            curl_setopt($gm1, CURLOPT_RETURNTRANSFER, true);
            // Set the url
            $url1 = "https://ujala11games.com/api/game-score-list/" . $game_id;
            curl_setopt($gm1, CURLOPT_URL, $url1);
            // Further increase timeout settings
            curl_setopt($gm1, CURLOPT_TIMEOUT, 60); // Wait up to 60 seconds for a response
            curl_setopt($gm1, CURLOPT_CONNECTTIMEOUT, 30); // Wait up to 30 seconds to connect
            // Execute
            $res1 = curl_exec($gm1);
            // Will dump a beauty json <3
            $game_singlescore = json_decode($res1, true);

            curl_close($gm1);


            return response()->json([
                'response' => $response,
                'game_single' => $game_single,
                'score' => $game_singlescore,
                'game_id' => $game_id,
            ]);
        }
        // if ($game_id == 1) {
        //             return view('client.Cricket-details-ipl', compact('response', 'game_single'));
        //         }
        return view('client.Cricket-details', compact('response', 'game_single', 'game_id'));
    }

    public function cricket_bet_place(Request $request)
    {

        // $url = "https://ujala11games.com/api/cricket/game/place-bet";

        // $post = [
        //   'bet_odds' => $request->bet_odds,
        //   'bet_stake' => $request->bet_stake,
        //   'back_lay' => $request->back_lay,
        //   'match_id' => $request->match_id,
        //   'bet_profit' => $request->bet_profit,
        //   'bet_team_name' => $request->bet_team_name,
        //   'user_id' => Auth::guard('client')->user()->id
        // ];

        //  $headers = [
        //     'X-CSRF-TOKEN' => $request->_token
        // ];

        // $response = Http::withHeaders($headers)->post($url, $post);

        // $statusCode = $response->status();
        // $responseBody = json_decode($response->getBody(), true);
        // $myBets = $responseBody['played_matches'];

        if ($request->bet_stake == null || Auth::guard('client')->user()->balance < $request->bet_stake) {
            return redirect()->back()->with(['error' => 'Could not place bet due to insufficient balance', 'myBets' => null]);
        }

        $user_id =  Auth::guard('client')->user()->id;

        $placeBet = new CricketPlaceBet();
        $placeBet->match_id = $request->match_id;
        $placeBet->bet_odds = $request->bet_odds;
        $placeBet->bet_stake = $request->bet_stake;
        $placeBet->back_lay = $request->back_lay;
        $placeBet->bet_profit = $request->bet_profit;
        $placeBet->user_id = $user_id;
        $placeBet->team_name = $request->bet_team_name;
        $placeBet->save();

        $user = Admin::findOrFail($user_id);
        $user->balance = $user->balance - $request->bet_stake;
        $user->save();

        $played_matches = CricketPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();


        // if($statusCode=='200'){
        return redirect()->back()->with(['message' => 'Bet placed successfully', 'myBets' => $played_matches]);
        // }


    }




    public function foot_ball(Request $request)
    {

        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/football/game-list");
        // Further increase timeout settings
        curl_setopt($ch, CURLOPT_TIMEOUT, 60); // Wait up to 60 seconds for a response
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); // Wait up to 30 seconds to connect
        $retry = 3;
        $success = false;
        $response = null;
        while ($retry > 0 && !$success) {
            $result = curl_exec($ch);
            if ($result === false) {
                $retry--;
            } else {
                $success = true;
                $response = json_decode($result, true);
            }
        }

        // Execute
        // $result = curl_exec($ch);
        // // Will dump a beauty json <3
        // $response = json_decode($result, true);

        curl_close($ch);

        //get all games list
        $chr = curl_init();
        // Disable SSL verification
        curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/get-all-games-list");
        // Further increase timeout settings
        curl_setopt($chr, CURLOPT_TIMEOUT, 60); // Wait up to 60 seconds for a response
        curl_setopt($chr, CURLOPT_CONNECTTIMEOUT, 30); // Wait up to 30 seconds to connect
        $retry1 = 3;
        $success1 = false;
        $allGames = null;
        while ($retry1 > 0 && !$success1) {
            $allGameresult = curl_exec($chr);
            if ($allGameresult === false) {
                $retry1--;
            } else {
                $success1 = true;
                $allGames = json_decode($allGameresult, true);
            }
        }
        // Execute
        // $allGameresult = curl_exec($chr);
        // // Will dump a beauty json <3
        // $allGames = json_decode($allGameresult, true);

        curl_close($chr);
        // dd($response);
        if ($request->ajax()) {
            return response()->json([
                'response' => $response,
                'allGames' => $allGames,
                // 'data' => $data,
            ]);
        }
        return view('client.football', compact('response', 'allGames'));
    }

    public function football_details(Request $request, $game_id)
    {

        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/football/game-list");
        // Execute
        $result = curl_exec($ch);
        // Will dump a beauty json <3
        $response = json_decode($result, true);

        curl_close($ch);

        //get all games list
        $chr = curl_init();
        // Disable SSL verification
        curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/get-all-games-list");
        // Execute
        $allGameresult = curl_exec($chr);
        // Will dump a beauty json <3
        $allGames = json_decode($allGameresult, true);

        curl_close($chr);

        //get match list
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/football/match-list/" . $game_id;
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        //get Games list
        $gm = curl_init();
        curl_setopt($gm, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($gm, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/football/game/single/" . $game_id;
        curl_setopt($gm, CURLOPT_URL, $url);
        $res = curl_exec($gm);
        $game_single = json_decode($res, true);
        curl_close($gm);
        if ($request->ajax()) {


            //get Games list
            $gm1 = curl_init();
            // Disable SSL verification
            curl_setopt($gm1, CURLOPT_SSL_VERIFYPEER, false);
            // Will return the response, if false it print the response
            curl_setopt($gm1, CURLOPT_RETURNTRANSFER, true);
            // Set the url
            $url1 = "https://ujala11games.com/api/game-score-list/" . $game_id;
            curl_setopt($gm1, CURLOPT_URL, $url1);
            // Execute
            $res1 = curl_exec($gm1);
            // Will dump a beauty json <3
            $game_singlescore = json_decode($res1, true);

            curl_close($gm1);


            return response()->json([
                'response' => $response,
                'score' => $game_singlescore,
                'game_single' => $game_single,
                'game_id' => $game_id,
            ]);
        }
        return view('client.Football-Details', compact('response', 'game_single', 'allGames', 'game_id'));
    }

    public function football_bet_place(Request $request)
    {

        if ($request->bet_stake == null || Auth::guard('client')->user()->balance < $request->bet_stake) {
            return redirect()->back()->with(['error' => 'Could not place bet due to insufficient balance', 'myBets' => null]);
        }

        $user_id =  Auth::guard('client')->user()->id;

        $placeBet = new FootballPlaceBet();
        $placeBet->match_id = $request->match_id;
        $placeBet->bet_odds = $request->bet_odds;
        $placeBet->bet_stake = $request->bet_stake;
        $placeBet->back_lay = $request->back_lay;
        $placeBet->bet_profit = $request->bet_profit;
        $placeBet->user_id = $user_id;
        $placeBet->team_name = $request->bet_team_name;
        $placeBet->save();

        $user = Admin::findOrFail($user_id);
        $update_balance = [
            'balance' => $user->balance - $request->bet_stake
        ];
        Admin::where('id', $user_id)->update($update_balance);
        // $user->balance = $user->balance - $request->bet_stake;
        // $user->save();

        $played_matches = FootballPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();

        return redirect()->back()->with(['message' => 'Bet placed successfully', 'myBets' => $played_matches]);
    }




    public function ten_nis(Request $request)
    {
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/tennis/game-list");
        // Further increase timeout settings
        curl_setopt($ch, CURLOPT_TIMEOUT, 60); // Wait up to 60 seconds for a response
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); // Wait up to 30 seconds to connect
        $retry = 3;
        $success = false;
        $response = null;
        while ($retry > 0 && !$success) {
            $result = curl_exec($ch);
            if ($result === false) {
                $retry--;
            } else {
                $success = true;
                $response = json_decode($result, true);
            }
        }
        // Execute
        // $result = curl_exec($ch);
        // // Will dump a beauty json <3
        // $response = json_decode($result, true);

        curl_close($ch);

        //get all games list
        $chr = curl_init();
        // Disable SSL verification
        curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/get-all-games-list");

        $retry1 = 3;
        $success1 = false;
        $allGames = null;
        while ($retry1 > 0 && !$success1) {
            $allGameresult = curl_exec($chr);
            if ($allGameresult === false) {
                $retry1--;
            } else {
                $success1 = true;
                $allGames = json_decode($allGameresult, true);
            }
        }
        // Execute
        // $allGameresult = curl_exec($chr);
        // // Will dump a beauty json <3
        // $allGames = json_decode($allGameresult, true);

        curl_close($chr);
        if ($request->ajax()) {
            return response()->json([
                'response' => $response,
                'allGames' => $allGames,
                // 'data' => $data,
            ]);
        }

        return view('client.Tennis', compact('response', 'allGames'));
    }

    public function tennis_details(Request $request, $game_id)
    {
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/football/game-list");
        // Execute
        // Further increase timeout settings
        curl_setopt($ch, CURLOPT_TIMEOUT, 60); // Wait up to 60 seconds for a response
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); // Wait up to 30 seconds to connect
        $result = curl_exec($ch);
        // Will dump a beauty json <3
        $response = json_decode($result, true);

        curl_close($ch);

        //get all games list
        $chr = curl_init();
        // Disable SSL verification
        curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/get-all-games-list");
        // Execute
        // Further increase timeout settings
        curl_setopt($chr, CURLOPT_TIMEOUT, 60); // Wait up to 60 seconds for a response
        curl_setopt($chr, CURLOPT_CONNECTTIMEOUT, 30); // Wait up to 30 seconds to connect
        $allGameresult = curl_exec($chr);
        // Will dump a beauty json <3
        $allGames = json_decode($allGameresult, true);

        curl_close($chr);

        //get match list
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/tennis/match-list/" . $game_id;
        curl_setopt($ch, CURLOPT_URL, $url);
        // Further increase timeout settings
        curl_setopt($ch, CURLOPT_TIMEOUT, 60); // Wait up to 60 seconds for a response
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); // Wait up to 30 seconds to connect
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        //get Games list
        $gm = curl_init();
        curl_setopt($gm, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($gm, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/tennis/game/single/" . $game_id;
        curl_setopt($gm, CURLOPT_URL, $url);
        // Further increase timeout settings
        curl_setopt($gm, CURLOPT_TIMEOUT, 60); // Wait up to 60 seconds for a response
        curl_setopt($gm, CURLOPT_CONNECTTIMEOUT, 30); // Wait up to 30 seconds to connect
        $res = curl_exec($gm);
        $game_single = json_decode($res, true);
        curl_close($gm);
        if ($request->ajax()) {


            //get Games list
            $gm1 = curl_init();
            // Disable SSL verification
            curl_setopt($gm1, CURLOPT_SSL_VERIFYPEER, false);
            // Will return the response, if false it print the response
            curl_setopt($gm1, CURLOPT_RETURNTRANSFER, true);
            // Set the url
            $url1 = "https://ujala11games.com/api/game-score-list/" . $game_id;
            curl_setopt($gm1, CURLOPT_URL, $url1);
                          // Further increase timeout settings
curl_setopt($gm1, CURLOPT_TIMEOUT, 60); // Wait up to 60 seconds for a response
curl_setopt($gm1, CURLOPT_CONNECTTIMEOUT, 30); // Wait up to 30 seconds to connect
            // Execute
            $res1 = curl_exec($gm1);
            // Will dump a beauty json <3
            $game_singlescore = json_decode($res1, true);

            curl_close($gm1);
            return response()->json([
                'response' => $response,
                'game_single' => $game_single,
                'score' => $game_singlescore,
                'game_id' => $game_id,
            ]);
        }
        return view('client.Tennis-details', compact('response', 'game_single', 'allGames', 'game_id'));
    }

    public function tennis_bet_place(Request $request)
    {

        if ($request->bet_stake == null || Auth::guard('client')->user()->balance < $request->bet_stake) {
            return redirect()->back()->with(['error' => 'Could not place bet due to insufficient balance', 'myBets' => null]);
        }

        $user_id =  Auth::guard('client')->user()->id;

        $placeBet = new TennisPlaceBet();
        $placeBet->match_id = $request->match_id;
        $placeBet->bet_odds = $request->bet_odds;
        $placeBet->bet_stake = $request->bet_stake;
        $placeBet->back_lay = $request->back_lay;
        $placeBet->bet_profit = $request->bet_profit;
        $placeBet->user_id = $user_id;
        $placeBet->team_name = $request->bet_team_name;
        $placeBet->save();

        $user = Admin::findOrFail($user_id);
        $user->balance = $user->balance - $request->bet_stake;
        $user->save();

        $played_matches = TennisPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();

        return redirect()->back()->with(['message' => 'Bet placed successfully', 'myBets' => $played_matches]);
    }


    public function horse()
    {
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/horseracing/game-list");
        // Execute
        $result = curl_exec($ch);
        // Will dump a beauty json <3
        $response = json_decode($result, true);

        curl_close($ch);

        //get all games list
        $chr = curl_init();
        // Disable SSL verification
        curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/get-all-games-list");
        // Execute
        $allGameresult = curl_exec($chr);
        // Will dump a beauty json <3
        $allGames = json_decode($allGameresult, true);

        curl_close($chr);


        return view('client.horse', compact('response', 'allGames'));
    }

    public function horse_detail($time_slot_id)
    {
        //get match list
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/horseracing/match-list/" . $time_slot_id;
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        //get Games list
        $gm = curl_init();
        curl_setopt($gm, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($gm, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/horseracing/game/single/" . $time_slot_id;
        curl_setopt($gm, CURLOPT_URL, $url);
        $res = curl_exec($gm);
        $game_single = json_decode($res, true);
        curl_close($gm);

        return view('client.horse_detail', compact('response', 'game_single'));
    }

    public function horseracing_bet_place(Request $request)
    {

        if ($request->bet_stake == null || Auth::guard('client')->user()->balance < $request->bet_stake) {
            return redirect()->back()->with(['error' => 'Could not place bet due to insufficient balance', 'myBets' => null]);
        }

        $user_id =  Auth::guard('client')->user()->id;

        $placeBet = new HorseRacingPlaceBet();
        $placeBet->match_id = $request->match_id;
        $placeBet->bet_odds = $request->bet_odds;
        $placeBet->bet_stake = $request->bet_stake;
        $placeBet->back_lay = $request->back_lay;
        $placeBet->bet_profit = $request->bet_profit;
        $placeBet->user_id = $user_id;
        $placeBet->team_name = $request->bet_team_name;
        $placeBet->save();

        $user = Admin::findOrFail($user_id);
        $user->balance = $user->balance - $request->bet_stake;
        $user->save();

        $played_matches = HorseRacingPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();

        return redirect()->back()->with(['message' => 'Bet placed successfully', 'myBets' => $played_matches]);
    }

    public function greyhound()
    {
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/greyhoundracing/game-list");
        // Execute
        $result = curl_exec($ch);
        // Will dump a beauty json <3
        $response = json_decode($result, true);

        curl_close($ch);

        //get all games list
        $chr = curl_init();
        // Disable SSL verification
        curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/get-all-games-list");
        // Execute
        $allGameresult = curl_exec($chr);
        // Will dump a beauty json <3
        $allGames = json_decode($allGameresult, true);

        curl_close($chr);


        return view('client.greyhound', compact('response', 'allGames'));
    }

    public function greyhound_detail($time_slot_id)
    {
        //get match list
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/greyhoundracing/match-list/" . $time_slot_id;
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        //get Games list
        $gm = curl_init();
        curl_setopt($gm, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($gm, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/greyhoundracing/game/single/" . $time_slot_id;
        curl_setopt($gm, CURLOPT_URL, $url);
        $res = curl_exec($gm);
        $game_single = json_decode($res, true);
        curl_close($gm);

        return view('client.greyhound_detail', compact('response', 'game_single'));
    }

    public function greyhoundracing_bet_place(Request $request)
    {

        if ($request->bet_stake == null || Auth::guard('client')->user()->balance < $request->bet_stake) {
            return redirect()->back()->with(['error' => 'Could not place bet due to insufficient balance', 'myBets' => null]);
        }

        $user_id =  Auth::guard('client')->user()->id;

        $placeBet = new GreyhoundRacingPlaceBet();
        $placeBet->match_id = $request->match_id;
        $placeBet->bet_odds = $request->bet_odds;
        $placeBet->bet_stake = $request->bet_stake;
        $placeBet->back_lay = $request->back_lay;
        $placeBet->bet_profit = $request->bet_profit;
        $placeBet->user_id = $user_id;
        $placeBet->team_name = $request->bet_team_name;
        $placeBet->save();

        $user = Admin::findOrFail($user_id);
        $user->balance = $user->balance - $request->bet_stake;
        $user->save();

        $played_matches = GreyhoundRacingPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();

        return redirect()->back()->with(['message' => 'Bet placed successfully', 'myBets' => $played_matches]);
    }

    public function account_settlement()
    {
        $bankingHistories = BankingHistory::where('user_id', Auth::guard('client')->user()->id)->orderBy('banking_history_id', 'desc')->get();
        $deposits = Deposit::all();
        $withdraw = Withdraw::all();
        return view('client.account_settlement', get_defined_vars());
    }

    function change_pass()
    {

        return view('client.change_pass');
    }
    public function submit_change_pass(Request $request)
    {
        $oldPass = $request->oldPassword;
        $newPass = $request->newPassword;
        $confirmPass = $request->confirmPassword;
        if ($newPass == $confirmPass) {
            $user = Admin::where('id', Auth::guard('client')->user()->id)->first();
            $user->password = Hash::make($newPass);
            $user->save();
            return redirect()->back()->with('message', 'Password changed successfully');
        }
        return redirect()->back()->with('error', "Password doesn't match!");
    }
    function setbutton()
    {
        return view('client.setbutton');
    }
    function unsettle_bet()
    {
        return view('client.unsettle_bet');
    }
    function profit_loss_report()
    {
        $user_id = Auth::guard('client')->user()->id;
        $betRecords = BetRecord::where('admin_id', $user_id)->orderBy('id', 'desc')->paginate(10);

        return view('client.profit_loss_report', compact('betRecords'));
        // return view('client.profit_loss_report');
    }



    public function trackCricketMatchResult()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/cricket/match/get-result";
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        $get_bet_result = $response['match_result']['win_loss'];
        $get_match_id = $response['match_result']['id'];

        $winnerSelection = CricketPlaceBet::where('match_id', $get_match_id)->where('bet_result', null)->where('back_lay', $get_bet_result)
            ->join('admins', 'cricket_place_bet.user_id', '=', 'admins.id')
            ->get();
        // dd($winnerSelection);
        if (!empty($winnerSelection)) {
            foreach ($winnerSelection as $winner) {
                $total_balance = $winner->balance + $winner->bet_profit;

                $admin = Admin::findOrFail($winner->user_id);
                $admin->balance = $total_balance;
                $admin->save();
            }
        }

        $placeBetResults = CricketPlaceBet::where('match_id', $get_match_id)->where('bet_result', null)->where('back_lay', $get_bet_result)->get();

        if (!empty($placeBetResults)) {
            foreach ($placeBetResults as $placeBetResult) {
                $placeBetResult->bet_result = 1; //1=win, 2=Lose
                $placeBetResult->save();
            }
        }

        if ($get_bet_result == 'back') {
            $winLoss = 'lay';
        }
        if ($get_bet_result == 'lay') {
            $winLoss = 'back';
        }

        $LoseResults = CricketPlaceBet::where('match_id', $get_match_id)->where('bet_result', null)->where('back_lay', $winLoss)->get();

        if (!empty($LoseResults)) {
            foreach ($LoseResults as $LoseResult) {
                $LoseResult->bet_result = 2; // 2=Lose
                $LoseResult->save();
            }
        }
        // return redirect('https://ujala11games.com/admin/cricket/game-list');
    }

    public function trackFootballMatchResult()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/football/match/get-result";
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        $get_bet_result = $response['match_result']['win_loss'];
        $get_match_id = $response['match_result']['id'];

        $winnerSelection = FootballPlaceBet::where('match_id', $get_match_id)->where('bet_result', null)->where('back_lay', $get_bet_result)
            ->join('admins', 'football_place_bet.user_id', '=', 'admins.id')
            ->get();
        // dd($winnerSelection);
        if (!empty($winnerSelection)) {
            foreach ($winnerSelection as $winner) {
                $total_balance = $winner->balance + $winner->bet_profit;

                $admin = Admin::findOrFail($winner->user_id);
                $admin->balance = $total_balance;
                $admin->save();
            }
        }

        $placeBetResults = FootballPlaceBet::where('match_id', $get_match_id)->where('bet_result', null)->where('back_lay', $get_bet_result)->get();

        if (!empty($placeBetResults)) {
            foreach ($placeBetResults as $placeBetResult) {
                $placeBetResult->bet_result = 1; //1=win, 2=Lose
                $placeBetResult->save();
            }
        }

        if ($get_bet_result == 'back') {
            $winLoss = 'lay';
        }
        if ($get_bet_result == 'lay') {
            $winLoss = 'back';
        }

        $LoseResults = FootballPlaceBet::where('match_id', $get_match_id)->where('bet_result', null)->where('back_lay', $winLoss)->get();

        if (!empty($LoseResults)) {
            foreach ($LoseResults as $LoseResult) {
                $LoseResult->bet_result = 2; // 2=Lose
                $LoseResult->save();
            }
        }
    }

    public function trackTennisMatchResult()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/tennis/match/get-result";
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        $get_bet_result = $response['match_result']['win_loss'];
        $get_match_id = $response['match_result']['id'];

        $winnerSelection = TennisPlaceBet::where('match_id', $get_match_id)->where('bet_result', null)->where('back_lay', $get_bet_result)
            ->join('admins', 'tennis_place_bet.user_id', '=', 'admins.id')
            ->get();
        // dd($winnerSelection);
        if (!empty($winnerSelection)) {
            foreach ($winnerSelection as $winner) {
                $total_balance = $winner->balance + $winner->bet_profit;

                $admin = Admin::findOrFail($winner->user_id);
                $admin->balance = $total_balance;
                $admin->save();
            }
        }

        $placeBetResults = TennisPlaceBet::where('match_id', $get_match_id)->where('bet_result', null)->where('back_lay', $get_bet_result)->get();

        if (!empty($placeBetResults)) {
            foreach ($placeBetResults as $placeBetResult) {
                $placeBetResult->bet_result = 1; //1=win, 2=Lose
                $placeBetResult->save();
            }
        }

        if ($get_bet_result == 'back') {
            $winLoss = 'lay';
        }
        if ($get_bet_result == 'lay') {
            $winLoss = 'back';
        }

        $LoseResults = TennisPlaceBet::where('match_id', $get_match_id)->where('bet_result', null)->where('back_lay', $winLoss)->get();

        if (!empty($LoseResults)) {
            foreach ($LoseResults as $LoseResult) {
                $LoseResult->bet_result = 2; // 2=Lose
                $LoseResult->save();
            }
        }
    }

    public function trackHorseRacingMatchResult()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/horseracing/match/get-result";
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        $get_bet_result = $response['match_result']['win_loss'];
        $get_match_id = $response['match_result']['id'];

        $winnerSelection = HorseRacingPlaceBet::where('match_id', $get_match_id)->where('bet_result', null)->where('back_lay', $get_bet_result)
            ->join('admins', 'horse_racing_place_bet.user_id', '=', 'admins.id')
            ->get();
        // dd($winnerSelection);
        if (!empty($winnerSelection)) {
            foreach ($winnerSelection as $winner) {
                $total_balance = $winner->balance + $winner->bet_profit;

                $admin = Admin::findOrFail($winner->user_id);
                $admin->balance = $total_balance;
                $admin->save();
            }
        }

        $placeBetResults = HorseRacingPlaceBet::where('match_id', $get_match_id)->where('bet_result', null)->where('back_lay', $get_bet_result)->get();

        if (!empty($placeBetResults)) {
            foreach ($placeBetResults as $placeBetResult) {
                $placeBetResult->bet_result = 1; //1=win, 2=Lose
                $placeBetResult->save();
            }
        }

        if ($get_bet_result == 'back') {
            $winLoss = 'lay';
        }
        if ($get_bet_result == 'lay') {
            $winLoss = 'back';
        }

        $LoseResults = HorseRacingPlaceBet::where('match_id', $get_match_id)->where('bet_result', null)->where('back_lay', $winLoss)->get();

        if (!empty($LoseResults)) {
            foreach ($LoseResults as $LoseResult) {
                $LoseResult->bet_result = 2; // 2=Lose
                $LoseResult->save();
            }
        }
    }

    public function trackGreyhoundRacingMatchResult()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/greyhoundracing/match/get-result";
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        $get_bet_result = $response['match_result']['win_loss'];
        $get_match_id = $response['match_result']['id'];

        $winnerSelection = GreyhoundRacingPlaceBet::where('match_id', $get_match_id)->where('bet_result', null)->where('back_lay', $get_bet_result)
            ->join('admins', 'greyhound_racing_place_bet.user_id', '=', 'admins.id')
            ->get();
        // dd($winnerSelection);
        if (!empty($winnerSelection)) {
            foreach ($winnerSelection as $winner) {
                $total_balance = $winner->balance + $winner->bet_profit;

                $admin = Admin::findOrFail($winner->user_id);
                $admin->balance = $total_balance;
                $admin->save();
            }
        }

        $placeBetResults = GreyhoundRacingPlaceBet::where('match_id', $get_match_id)->where('bet_result', null)->where('back_lay', $get_bet_result)->get();

        if (!empty($placeBetResults)) {
            foreach ($placeBetResults as $placeBetResult) {
                $placeBetResult->bet_result = 1; //1=win, 2=Lose
                $placeBetResult->save();
            }
        }

        if ($get_bet_result == 'back') {
            $winLoss = 'lay';
        }
        if ($get_bet_result == 'lay') {
            $winLoss = 'back';
        }

        $LoseResults = GreyhoundRacingPlaceBet::where('match_id', $get_match_id)->where('bet_result', null)->where('back_lay', $winLoss)->get();

        if (!empty($LoseResults)) {
            foreach ($LoseResults as $LoseResult) {
                $LoseResult->bet_result = 2; // 2=Lose
                $LoseResult->save();
            }
        }
    }








    public function cricket_details_ipl()
    {
        return view('client.cricket_details_ipl');
    }




    public function index()
    {
        return view('client.home');
    }
    public function home()
    {
        return view('client.home');
    }
    public function changepassword()
    {
        return view('client.changepassword');
    }
    public function transferstatement()
    {
        return view('client.transferstatement');
    }
    public function mybets()
    {
        return view('client.mybets');
    }
    public function loss_profit()
    {
        return view('client.profitloss');
    }
    public function secureauth()
    {
        return view('client.secureauth');
    }
    public function message()
    {
        return view('client.message');
    }
    public function statement()
    {
        return view('client.accountstatement');
    }
    public function cric_ket()
    {
        return view('client.cricket');
    }
    public function tenis()
    {
        return view('client.table-tennis');
    }
    public function dart()
    {
        return view('client.darts');
    }
    public function badmint_on()
    {
        return view('client.badminton');
    }
    public function kaba_ddi()
    {
        return view('client.Kabaddi');
    }
    public function queen_result()
    {
        return view('client.queen-results');
    }
    public function boxi_ng()
    {
        return view('client.boxing');
    }
    public function artss()
    {
        return view('client.arts');
    }
    public function motor_sport()
    {
        return view('client.Motor-Sport');
    }
    public function basketball()
    {
        return view('client.basketball');
    }
    public function election()
    {
        return view('client.election2023');
    }
    public function icc()
    {
        return view('client.Icc2023');
    }
    public function lottery()
    {
        return view('client.lottery');
    }
    public function casino()
    {
        return view('client.live-casino');
    }
    public function details4()
    {
        return view('client.Cricket-details-pages-4');
    }
    public function details3()
    {
        return view('client.Cricket-details-pages-3');
    }
    public function details2()
    {
        return view('client.Cricket-details-pages-2');
    }
    public function details()
    {
        return view('client.Cricket-details');
    }
    public function basket_details()
    {
        return view('client.basketball-details');
    }
    public function kabaddi_details()
    {
        return view('client.Kabaddi-details');
    }
    public function race20()
    {
        return view('client.race20');
    }
    public function queen_20()
    {
        return view('client.queen');
    }
    public function andarbahar2()
    {
        return view('client.andarbahar2');
    }
    public function dragon_tiger()
    {
        return view('client.20-20-dragon-tiger');
    }
    public function casino_result()
    {
        return view('client.casino-results');
    }
    public function andarbahar_result()
    {
        return view('client.andarbahar-results');
    }
    public function tiger_result()
    {
        return view('client.tiger-results');
    }



    public function casino_detail()
    {
        return view('client.casino.live-casino-detail');
    }
    public function cricket_detail()
    {
        return view('client.cricket_detail');
    }
    public function one_day_teen_patti()
    {
        return view('client.one_day_teen_patti');
    }
    public function roullete()
    {
        return view('client.roullete');
    }
    public function cricker_games_api()
    {
           $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/cricket/game-list");
        // Further increase timeout settings
        curl_setopt($ch, CURLOPT_TIMEOUT, 60); // Wait up to 60 seconds for a response
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); // Wait up to 30 seconds to connect
          $result = curl_exec($ch);
          
         
          
         $response = json_decode($result, true);
     
 return $response;
        // Execute
        // // $result = curl_exec($ch);
        // // // Will dump a beauty json <3
        // // $response = json_decode($result, true);

        // curl_close($ch);

        // //get all games list
        // $chr = curl_init();
        // // Disable SSL verification
        // curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // // Will return the response, if false it print the response
        // curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // // Set the url
        // curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/get-all-games-list");
        // // Further increase timeout settings
        // curl_setopt($chr, CURLOPT_TIMEOUT, 60); // Wait up to 60 seconds for a response
        // curl_setopt($chr, CURLOPT_CONNECTTIMEOUT, 30); // Wait up to 30 seconds to connect
       
        //   $allGameresult = curl_exec($chr);
        //      $allGames = json_decode($allGameresult, true);

        // // Execute
        // // $allGameresult = curl_exec($chr);
        // // // Will dump a beauty json <3
        // // $allGames = json_decode($allGameresult, true);

        // curl_close($chr);
        // // dd($response);
        // if ($request->ajax()) {
        //     return response()->json([
        //         'response' => $response,
        //         'allGames' => $allGames,
        //     ]);
        // }
    }
    public function football_games_api()
    {
           $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/football/game-list");
        // Further increase timeout settings
        curl_setopt($ch, CURLOPT_TIMEOUT, 60); // Wait up to 60 seconds for a response
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); // Wait up to 30 seconds to connect
          $result = curl_exec($ch);
         $response = json_decode($result, true);
      return $response;

        // // Execute
        // // $result = curl_exec($ch);
        // // // Will dump a beauty json <3
        // // $response = json_decode($result, true);

        // curl_close($ch);

        // //get all games list
        // $chr = curl_init();
        // // Disable SSL verification
        // curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // // Will return the response, if false it print the response
        // curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // // Set the url
        // curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/get-all-games-list");
        // // Further increase timeout settings
        // curl_setopt($chr, CURLOPT_TIMEOUT, 60); // Wait up to 60 seconds for a response
        // curl_setopt($chr, CURLOPT_CONNECTTIMEOUT, 30); // Wait up to 30 seconds to connect
       
        //   $allGameresult = curl_exec($chr);
        //      $allGames = json_decode($allGameresult, true);

        // // Execute
        // // $allGameresult = curl_exec($chr);
        // // // Will dump a beauty json <3
        // // $allGames = json_decode($allGameresult, true);

        // curl_close($chr);
        // // dd($response);
        // if ($request->ajax()) {
        //     return response()->json([
        //         'response' => $response,
        //         'allGames' => $allGames,
        //     ]);
        // }
    }
    public function tennis_games_api()
    {
    //   $ch = curl_init();
    //     // Disable SSL verification
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    //     // Will return the response, if false it print the response
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     // Set the url
    //     curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/tennis/game-list");
    //     // Further increase timeout settings
    //     curl_setopt($ch, CURLOPT_TIMEOUT, 60); // Wait up to 60 seconds for a response
    //     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); // Wait up to 30 seconds to connect
  
    //         $result = curl_exec($ch);
          
    //             $response = json_decode($result, true);
            
        
    //     // Execute
    //     // $result = curl_exec($ch);
    //     // // Will dump a beauty json <3
    //     // $response = json_decode($result, true);

    //     curl_close($ch);

        //get all games list
        $chr = curl_init();
        // Disable SSL verification
        curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/get-all-games-list");

            $allGameresult = curl_exec($chr);
         
                $allGames = json_decode($allGameresult, true);
          return $allGames;
        // Execute
        // $allGameresult = curl_exec($chr);
        // // Will dump a beauty json <3
        // $allGames = json_decode($allGameresult, true);

        // curl_close($chr);
        // if ($request->ajax()) {
        //     return response()->json([
        //         'response' => $response,
        //         'allGames' => $allGames,
        //         // 'data' => $data,
        //     ]);
        // }
    }
}

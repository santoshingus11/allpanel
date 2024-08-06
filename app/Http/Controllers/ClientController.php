<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use App\Models\BetRecord;
use App\Models\TennisPlaceBet;
use App\Models\HorseRacingPlaceBet;
use App\Models\GreyhoundRacingPlaceBet;
use App\Models\CricketPlaceBet;
use App\Models\FootballPlaceBet;


class ClientController extends Controller
{
    use AuthenticatesUsers;
    public function client_login()
    {

        return view('client.login');
    }
    public function fetch($url)
    {
        $response = Http::get($url);
        return response($response->body(), $response->status())
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Content-Type', $response->header('Content-Type'));
    }
    public function live()
    {
        $url = "https://allinone-tataplay-web-one.vercel.app/player.html?channel=24";

        // Initialize cURL session
        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        // Execute cURL session and get the content
        $response = curl_exec($ch);

        // Check for cURL errors
        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
            echo "cURL Error: $error_msg";
            return;
        }

        // Close cURL session
        curl_close($ch);
        echo '<pre>';
        print_r($response); 
        echo '</pre>';
        die();
        
        return view('live');
    }
    public function logout()
    {
        if (Auth::guard('client')->check()) {
            // Update login_status
            Admin::where('id', Auth::guard('client')->user()->id)->update(['login_status' => 2]);
            $user = Admin::where(['id' => Auth::guard('client')->user()->id])->update(['logout_at' => now()]);
            // Logout the user
            Auth::guard('client')->logout();
        }

        return redirect()->route('login');
    }

    public function client()
    {
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/cricket/game-list");
        // curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        
        // $retry = 3;
        // $success = false;
        // $response = null;
        // while ($retry > 0 && !$success) {
        //     $result = curl_exec($ch);
        //     if ($result === false) {
        //         $retry--;
        //     } else {
        //         $success = true;
        //         $response = json_decode($result, true);
        //     }
        // }
        // curl_close($ch);


        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/cricket/game-list");
       
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
        // // Execute
        // $allGameresult = curl_exec($chr);
        // // Will dump a beauty json <3
        // $allGames = json_decode($allGameresult, true);

        curl_close($chr);



        //Casino games api
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://tbs2api.aslot.net/API/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => '{
        "cmd": "gamesList",
        "hall": "3204352",
        "key": "ArT657OIY809TyyuFD",
        "cdnUrl": ""
        }',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Content-Type: application/json',
                'Cookie: PHPSESSID=ab4edemrk4d7edk2mc057vgfeq'
            ),
        ));

        $responseCas = curl_exec($curl);

        curl_close($curl);
        $gameData = json_decode($responseCas);

        // $liveEvolutionLobbyGames = [];
        // for($i=0; $i<=50; $i++){
        //     if ($gameData->content->gameList[$i]->label === 'evolution_lobby') {
        //         $liveEvolutionLobbyGames[] = $gameData->content->gameList[$i];
        //     }
        // }

        $casino = $gameData->content->gameList;
        $liveEvolutionLobbyGames = [];
        foreach ($casino as $game) {
            if ($game->label === 'evolution_lobby') {
                if (($game->id >= 9325 && $game->id <= 9630) || ($game->id >= 9281 && $game->id <= 9286) || ($game->id >= 9633 && $game->id <= 9644) || ($game->id >= 9658 && $game->id <= 9660)) {
                    continue;
                }

                $liveEvolutionLobbyGames[] = $game;
            }
        }

        // $casino = $gameData->content->gameList;
        // $sportBetGames = [];
        // foreach ($casino as $game) {
        //     if ($game->label === 'sport_betting') {
        //         $sportBetGames[] = $game;
        //     }
        // }

        $data = [
            'labels' => $gameData->content->gameLabels,
            'games' => $gameData->content->gameList,
            'liveGames' => $liveEvolutionLobbyGames,
            // 'sportBetGames' => $sportBetGames
        ];


        return view('client.home', compact('response', 'allGames'))->with('data', $data);
    }

    public function our_casino()
    {

        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/cricket/game-list");
        // Execute
        $result = curl_exec($ch);
        // Will dump a beauty json <3
        $response = json_decode($result, true);

        curl_close($ch);


        //Casino games api
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://tbs2api.aslot.net/API/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => '{
        "cmd": "gamesList",
        "hall": "3204352",
        "key": "ArT657OIY809TyyuFD",
        "cdnUrl": ""
        }',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Content-Type: application/json',
                'Cookie: PHPSESSID=ab4edemrk4d7edk2mc057vgfeq'
            ),
        ));

        $responseCas = curl_exec($curl);

        curl_close($curl);
        $gameData = json_decode($responseCas);

        // $liveEvolutionLobbyGames = [];
        // for($i=0; $i<=50; $i++){
        //     if ($gameData->content->gameList[$i]->label === 'evolution_lobby') {
        //         $liveEvolutionLobbyGames[] = $gameData->content->gameList[$i];
        //     }
        // }

        $casino = $gameData->content->gameList;
        $liveEvolutionLobbyGames = [];
        foreach ($casino as $game) {
            if ($game->label === 'evolution_lobby') {
                if (($game->id >= 9325 && $game->id <= 9630) || ($game->id >= 9281 && $game->id <= 9286) || ($game->id >= 9633 && $game->id <= 9644) || ($game->id >= 9658 && $game->id <= 9660)) {
                    continue;
                }

                $liveEvolutionLobbyGames[] = $game;
            }
        }

        // $casino = $gameData->content->gameList;
        // $sportBetGames = [];
        // foreach ($casino as $game) {
        //     if ($game->label === 'sport_betting') {
        //         $sportBetGames[] = $game;
        //     }
        // }

        $data = [
            'labels' => $gameData->content->gameLabels,
            'games' => $gameData->content->gameList,
            'liveGames' => $liveEvolutionLobbyGames,
            // 'sportBetGames' => $sportBetGames
        ];


        return view('client.our_casino', compact('response'))->with('data', $data);
    }


    public function launch($gameid)
    {
        if (!Auth::guard('client')->user()) {
            return redirect()->back()->with('error', 'Pleae Login First!');
        }
        //  dd(Auth::guard('client')->user()->username);
        $curl = curl_init();
        $payload = json_encode(array(
            "cmd" => "openGame",
            "hall" => "3204461",
            "domain" => "http://newsilver.art",
            "exitUrl" => "http://newsilver.art/exitGame",
            "language" => "en",
            "key" => "ArT657OIY809TyyuFD",
            "login" => Auth::guard('client')->user()->username,
            "gameId" => $gameid, // Correctly interpolated variable
            "cdnUrl" => "http://newsilver.art/",
            "demo" => "0"
        ));
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://tbs2api.aslot.net/API/openGame/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $payload
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $gameData = json_decode($response);

        return view('client.slot.launch')->with('gameUrl', $gameData->content->game->url);
        // dd($gameData->content->game);
    }

    public function myBets()
    {
        $user_id = Auth::guard('client')->user()->id;
        // $betRecords = BetRecord::where('admin_id', $user_id)->orderBy('id', 'desc')->paginate(10);
        $cricket_played_matches = CricketPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();
        $football_played_matches = FootballPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();
        $tennis_played_matches = TennisPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();
        $HorseRacingPlaceBet = HorseRacingPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();
        $GreyhoundRacingPlaceBet = GreyhoundRacingPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();
        $merged_played_matches = $cricket_played_matches
            ->merge($football_played_matches)
            ->merge($HorseRacingPlaceBet)
            ->merge($tennis_played_matches)
            ->merge($GreyhoundRacingPlaceBet);

        // Sort the merged collection by 'id' in descending order
        $sorted_merged_played_matches = $merged_played_matches->sortByDesc('id');

        // If you need it as an array
        $sorted_merged_played_matches_array = $sorted_merged_played_matches->values()->all();
      
        return view('client.unsettle_bet', compact('sorted_merged_played_matches_array'));
    }

    public function login_submit(Request $request)
    {

        try {
            // $isDatabaseConnected = $this->checkDatabaseConnection();

            // if (!$isDatabaseConnected) {
            //     return response()->json(['success' => false, 'message' => 'Unable to establish a connection to the database']);
            // }
            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required',
            ]);

            // Check if validation fails
            if ($validator->fails()) {
                throw new ValidationException($validator);
            }

            $input = $request->all();

            if (Auth::guard('client')->attempt(['username' => $input['username'], 'password' => $input['password']]) && Auth::guard('client')->user()->status == 1) {
                // Check if the role_id is not in [1, 2, 3, 4]
                $notallowedRoles = [1, 2, 3, 4];
                $userRoleId = Auth::guard('client')->user()->role_id;

                if (in_array($userRoleId, $notallowedRoles)) {

                    return response()->json(['success' => false, 'message' => 'Please fill valid details']);
                }
                $lastlogin = Admin::where(['id' => Auth::guard('client')->user()->id])->update(['last_login' => now()]);
                $user = Admin::where(['id' => Auth::guard('client')->user()->id])->update(['login_status' => 1]);
                // Assuming you want to return a JSON response
                return response()->json(['success' => true, 'redirect' => route('client-home')]);
            } else {
                return response()->json(['success' => false, 'message' => 'Incorrect username or password']);
            }
        } catch (ValidationException $e) {
            // Handle validation errors
            $errors = $e->validator->errors()->toArray();
            return response()->json(['success' => false, 'message' => reset($errors)[0]]);
        } catch (\Throwable $th) {
            // Log or handle other exceptions
            return response()->json(['success' => false, 'message' => 'An error occurred during login']);
        }
    }



    // private function checkDatabaseConnection()
    // {
    //     try {
    //         // Use the default connection to check if the database is connected
    //         DB::select('select 1');
    //         return true;
    //     } catch (\Exception $e) {
    //         // An exception will be thrown if the database connection fails
    //         return false;
    //     }
    // }
    function bet_history_client()
    {
        $user_id = Auth::guard('client')->user()->id;
        $betRecords = BetRecord::where('admin_id', $user_id)->orderBy('id', 'desc')->get();
        $cricketBets = CricketPlaceBet::where('user_id', $user_id)->orderBy('id', 'desc')->get();
        $footballBets = FootballPlaceBet::where('user_id', $user_id)->orderBy('id', 'desc')->get();
        $tennisBets = TennisPlaceBet::where('user_id', $user_id)->orderBy('id', 'desc')->get();
        $horseBets = HorseRacingPlaceBet::where('user_id', $user_id)->orderBy('id', 'desc')->get();
        $greyhoundBets = GreyhoundRacingPlaceBet::where('user_id', $user_id)->orderBy('id', 'desc')->get();

        return view('client.bet_history_client', compact('betRecords', 'cricketBets', 'footballBets', 'tennisBets', 'horseBets', 'greyhoundBets'));
    }

    public function games_score()
    {

        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/cricket/game-list");
        // Execute
        $result = curl_exec($ch);
        // Will dump a beauty json <3
        $response = json_decode($result, true);

        curl_close($ch);

        $data = [
            'labels' => $gameData->content->gameLabels,
            'games' => $gameData->content->gameList,
            'liveGames' => $liveEvolutionLobbyGames,
            // 'sportBetGames' => $sportBetGames
        ];


        return view('client.home', compact('response', 'allGames'))->with('data', $data);
    }
}

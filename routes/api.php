<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CommandController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/commands',[CommandController::class,'index']);
Route::get('/all_games_bet_count_and_data',[CommandController::class,'all_games_bet_count_and_data']);
Route::get('/all_games_bet_count',[CommandController::class,'all_games_bet_count']);
Route::get('/all_games_bet/{game}/{matchid}',[CommandController::class,'all_games_bet']);
Route::get('/profit_loss/{id}/{game_id}/{win_loss}',[CommandController::class,'profit_loss']);
Route::get('/all_games_bet_reject/{id}/{game}',[CommandController::class,'all_games_bet_reject']);
Route::get('/all_games_bet_accept/{id}/{game}',[CommandController::class,'all_games_bet_accept']);



Route::get('/all_users',[CommandController::class,'all_users']);
Route::get('/user_detail/{id}',[CommandController::class,'user_detail']);
Route::get('/deposit_withdraw_request',[CommandController::class,'deposit_withdraw_request']);
Route::get('/deposit_withdraw_accept_reject/{id}/{deposit_withdraw}/{accept_reject}',[CommandController::class,'deposit_withdraw_accept_reject']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('football', [HomeController::class, 'foot_ball'])->name('football-frontend');
Route::get('tennis', [HomeController::class, 'ten_nis'])->name('tennis-frontend');
Route::get('cricket', [HomeController::class, 'cric_ket'])->name('cricket-frontend');
Route::get('table-tenis', [HomeController::class, 'tenis'])->name('table-tenis-frontend');
Route::get('darts', [HomeController::class, 'dart'])->name('darts-frontend');
Route::get('badminton', [HomeController::class, 'badmint_on'])->name('badminton-frontend');
Route::get('kabaddi', [HomeController::class, 'kaba_ddi'])->name('kabaddi-frontend');
Route::get('boxing', [HomeController::class, 'boxi_ng'])->name('boxing-frontend');
Route::get('arts', [HomeController::class, 'artss'])->name('arts-frontend');
Route::get('motor', [HomeController::class, 'motor_sport'])->name('Motor-Sport-frontend');
Route::get('basketball', [HomeController::class, 'basketball'])->name('basketball-frontend');
Route::get('election', [HomeController::class, 'election'])->name('election2023-frontend');
Route::get('icc', [HomeController::class, 'icc'])->name('icc2023-frontend');
Route::get('lottery', [HomeController::class, 'lottery'])->name('lottery-frontend');
Route::get('casino', [HomeController::class, 'casino'])->name('live-casino-frontend');
Route::get('casino_result', [HomeController::class, 'casino_result'])->name('casino-results');
Route::get('tiger_result', [HomeController::class, 'tiger_result'])->name('tiger-result');
Route::get('queen_result', [HomeController::class, 'queen_result'])->name('queen-result');
Route::get('andarbahar_result', [HomeController::class, 'andarbahar_result'])->name('andarbahar-result');
       

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/',[HomeController::class,'index']);
Route::get('home',[HomeController::class,'home'])->name('home');
Route::get('mybets',[HomeController::class,'mybets'])->name('my-bets');
Route::get('profit-loss',[HomeController::class,'loss_profit'])->name('profit_loss');
Route::get('account-statement',[HomeController::class,'statement'])->name('account_statement');
Route::get('cricket-details4',[HomeController::class,'details4'])->name('Cricket-details-pages-4');
Route::get('cricket-details2',[HomeController::class,'details2'])->name('Cricket-details-pages-2');
Route::get('cricket-details3',[HomeController::class,'details3'])->name('Cricket-details-pages-3');
Route::get('cricket-details',[HomeController::class,'details'])->name('Cricket-details');
Route::get('football-details',[HomeController::class,'football_details'])->name('Football-Details');
Route::get('tennis-details',[HomeController::class,'tennis_details'])->name('tenis-details');
Route::get('basketball-details',[HomeController::class,'basket_details'])->name('Basketball-details');
Route::get('kabaddi-details',[HomeController::class,'kabaddi_details'])->name('Kabaddi-details');
Route::get('race',[HomeController::class,'race20'])->name('race20');
Route::get('queen_20',[HomeController::class,'queen_20'])->name('queen');
Route::get('andar_bahar2',[HomeController::class,'andarbahar2'])->name('andarbahar2');
Route::get('dragon_tiger',[HomeController::class,'dragon_tiger'])->name('dragon-tiger');
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'admin_login'])->name('login');
});
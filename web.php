<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\LoginSubmitController;
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


Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});


Route::get('/cc', function () {
    Artisan::call('cache:clear');
    echo '<script>alert("cache clear Success")</script>';
});


Route::get('/ccc', function () {
    Artisan::call('config:cache');
    echo '<script>alert("config cache Success")</script>';
});
Route::get('/vc', function () {
    Artisan::call('view:clear');
    echo '<script>alert("view clear Success")</script>';
});
Route::get('/cr', function () {
    Artisan::call('route:cache');
    echo '<script>alert("route clear Success")</script>';
});
Route::get('/coc', function () {
    Artisan::call('config:clear');
    echo '<script>alert("config clear Success")</script>';
});

Route::get('/', [ClientController::class, 'client_login'])->name('login');
Route::post('client-submit', [ClientController::class, 'login_submit'])->name('login_submit');
Route::middleware('client.login.check')->group(function () {
    
    Route::get('client',[ClientController::class,'client'])->name('client-home');
    Route::get('logout',[ClientController::class,'logout'])->name('client-logout');
    
    Route::get('cricket-details4',[HomeController::class,'details4'])->name('Cricket-details-pages-4');
    Route::get('cricket-details2',[HomeController::class,'details2'])->name('Cricket-details-pages-2');
    Route::get('cricket-details3',[HomeController::class,'details3'])->name('Cricket-details-pages-3');
    Route::get('cricket-details',[HomeController::class,'details'])->name('Cricket-details');
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
    Route::get('home',[HomeController::class,'home'])->name('home');
    Route::get('mybets',[HomeController::class,'mybets'])->name('my-bets');
    Route::get('secureauth',[HomeController::class,'secureauth'])->name('secureauth');
    Route::get('message',[HomeController::class,'message'])->name('message');
    Route::get('profit-loss',[HomeController::class,'loss_profit'])->name('profit_loss');
    Route::get('account-client-statement',[HomeController::class,'statement'])->name('account_statement');
    Route::get('football-details',[HomeController::class,'football_details'])->name('Football-Details');
    Route::get('tennis-details',[HomeController::class,'tennis_details'])->name('tenis-details');
    Route::get('basketball-details',[HomeController::class,'basket_details'])->name('Basketball-details');
    Route::get('kabaddi-details',[HomeController::class,'kabaddi_details'])->name('Kabaddi-details');
    Route::get('race_20_20',[HomeController::class,'race20'])->name('race20');
    Route::get('queen_20',[HomeController::class,'queen_20'])->name('queen');
    Route::get('andar_bahar2',[HomeController::class,'andarbahar2'])->name('andarbahar2');
    Route::get('dragon_tiger',[HomeController::class,'dragon_tiger'])->name('dragon-tiger');
    Route::get('transferstatement',[HomeController::class,'transferstatement'])->name('transferstatement');
    Route::get('changepassword',[HomeController::class,'changepassword'])->name('changepassword');
    
});
Route::group(['prefix' => 'admin'], function () {

    Route::get('/', [AdminController::class, 'admin_login'])->name('admin_login');
    Route::post('admin-submit', [AdminController::class, 'admin_submit'])->name('admin_submit');

 
    Route::middleware('agent.login.check')->group(function () {
    Route::get('agent-home', [AdminController::class, 'agent'])->name('agent-home');    
    Route::get('admin-logout',[AdminController::class,'logout'])->name('admin-logout');

    Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('sup-listing',[AdminController::class,'super_master'])->name('super-master-listing');
    Route::get('position',[AdminController::class,'position_taking'])->name('position-taking-listing');
    Route::get('agency-management',[AdminController::class,'management_transfer'])->name('agency-management-transfer');
    Route::get('exposure',[AdminController::class,'net_exposure'])->name('net-exposure');
    Route::get('bet-ticker',[AdminController::class,'bet_ticker'])->name('bet-ticker');
    Route::get('p-l-market',[AdminController::class,'p_l_market'])->name('p-and-l-report-by-market');
    Route::get('p-l-agent',[AdminController::class,'p_l_agent'])->name('p-and-l-report-by-agent');
    Route::get('casino',[AdminController::class,'casino'])->name('casino-report');
    Route::get('user-transfer',[AdminController::class,'user_transfer'])->name('user-transfer-statement');
    
    Route::get('user-statement',[AdminController::class,'user_account_stat'])->name('user-statement-account-statement');
    Route::get('user-listing',[AdminController::class,'user_listing'])->name('user-listing');
    Route::get('bet-list',[AdminController::class,'bet_list'])->name('bet-list');
    Route::get('bet-limit',[AdminController::class,'bet_limit'])->name('bet-limit');
    Route::get('su-list-live',[AdminController::class,'bet_list_live'])->name('bet-list-live');
    Route::get('banner-update',[AdminController::class,'banner_update'])->name('banner-update');
    Route::get('news-update',[AdminController::class,'news_update'])->name('news-update');
    Route::get('client-notification',[AdminController::class,'client_notification'])->name('client-notification');
    Route::get('balance-log',[AdminController::class,'balance_log'])->name('balance-log');
    Route::get('betting-history',[AdminController::class,'betting_history'])->name('player-betting-history');
    Route::get('profit-loss',[AdminController::class,'player_profitloss'])->name('player-profit-and-loss');
    Route::get('chips-analysis',[AdminController::class,'chips_analysis'])->name('chips-analysis');
    Route::get('market-setting',[AdminController::class,'market_settings'])->name('market-settings');
    Route::get('declare-market',[AdminController::class,'declare_market'])->name('declare-market');
    Route::get('matchlock',[AdminController::class,'match_lock'])->name('matchlock');
    Route::get('market-rollback',[AdminController::class,'market_rollback'])->name('market-rollback');
    Route::get('online-user',[AdminController::class,'online_user'])->name('online-user');
    Route::get('delete-bet-history',[AdminController::class,'delete_bet_history'])->name('delete-bet-history');
    Route::get('global-setting',[AdminController::class,'global_setting'])->name('global-settings');
    Route::get('fancy-setting',[AdminController::class,'fancy_setting'])->name('fancy-setting');
    Route::get('match-setting',[AdminController::class,'match_setting'])->name('match-setting');
    Route::get('match-limit',[AdminController::class,'match_limit'])->name('match-limit');
    Route::get('suspend-all',[AdminController::class,'suspend_market'])->name('suspend-all-market');
    Route::get('score-card',[AdminController::class,'score_tv'])->name('score-card-and-tv');
    Route::get('prifitloss-downline',[AdminController::class,'profitloss_downline'])->name('profitLoss-report-by-downline');
    Route::get('prifitloss-market',[AdminController::class,'prifitloss_market'])->name('profitLoss-report-by-market');
    Route::get('risk-management',[AdminController::class,'risk_management'])->name('risk-management');
    Route::get('cash-banking',[AdminController::class,'cash_banking'])->name('cash-banking');
    Route::get('password-history',[AdminController::class,'password_history'])->name('password-history');
    Route::get('commission',[AdminController::class,'commission'])->name('commission');
    Route::get('market-analysis',[AdminController::class,'market_analysis'])->name('market-analysis');
    Route::get('void-market',[AdminController::class,'void_market'])->name('void-markets');
    Route::get('white-label',[AdminController::class,'white_label'])->name('white-lable');
    Route::get('new-super-user',[AdminController::class,'new_super'])->name('new-super-master');
    Route::get('profit-loss-report',[AdminController::class,'profit_loss_report'])->name('profit-loss-report');
    Route::get('transfer-statement',[AdminController::class,'transfer_statement'])->name('transfer-statement');
    Route::get('casino-result',[AdminController::class,'casino_result'])->name('casino-result');
    Route::get('game-report',[AdminController::class,'game_report'])->name('game-report');
    Route::get('create-account',[AdminController::class,'create_account'])->name('create-account');
    Route::get('live-casino',[AdminController::class,'live_casino'])->name('live-casino');
    Route::get('notification',[AdminController::class,'notifi_cation'])->name('notification');
    Route::get('account-statement',[AdminController::class,'account_statement'])->name('account-statement');
    Route::get('message-report',[AdminController::class,'message_report'])->name('message-report');
    Route::get('client_account_statement',[AdminController::class,'client_account_statement'])->name('client-account-statement');
    // Route::post('password-change/{id}',[AdminController::class,'password_change'])->name('admin-password-change');
    Route::get('smdemo1-agent-listing-demoag5',[AdminController::class,'demo_2'])->name('smdemo1-agent-listing-demoag5');
    Route::get('agent-listing2',[AdminController::class,'demo_1'])->name('agent-listing2');
    Route::get('agent-listing',[AdminController::class,'demo_3'])->name('agent-listing');
    Route::get('agent-listing-demoag5',[AdminController::class,'demo_4'])->name('agent-listing-demoag5');
    Route::get('create-new-user',[AdminController::class,'new_user'])->name('create-new-user');
    Route::get('race20',[AdminController::class,'race20'])->name('admin-race-20');
    Route::get('new-agent',[AdminController::class,'new_agent'])->name('new-agent');
    Route::get('my-bets-report',[AdminController::class,'my_bets_report'])->name('my-bets-report');
    Route::get('agent-dashboard',[AdminController::class,'agent_dashboard'])->name('agent-dashboard');
    Route::post('new-agent-submit',[LoginSubmitController::class,'new_agent_submit'])->name('new-agent-submit');
    Route::get('admin-detail',[AdminController::class,'admin_detail'])->name('admin-details');
    Route::post('agent-update',[LoginSubmitController::class,'agent_update'])->name('agent-update');
});

});
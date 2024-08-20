<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BetTicketController;
use App\Http\Controllers\admin\ExposureController;
use App\Http\Controllers\admin\LoginSubmitController;
use App\Http\Controllers\admin\PositionController;
use App\Http\Controllers\admin\ReportController;
use App\Http\Controllers\admin\TransferController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\AgentManagementController;
use App\Http\Controllers\admin\BetController;
use App\Http\Controllers\admin\CashbankingController;
use App\Http\Controllers\admin\ExtraController;
use App\Http\Controllers\admin\MarketSettingsController;
use App\Http\Controllers\admin\PlayerLogReportController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\WithdrawController;
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
// Route::get('/slot-games',[ClientController::class,'slotgames'])->name('slot_games.home');

Route::post('client-submit', [ClientController::class, 'login_submit'])->name('login_submit');
Route::middleware('client.login.check')->group(function () {
    
    Route::get('/exitGame',[ClientController::class,'slotgames']);
    Route::get('slot/games',[ClientController::class,'slotgames'])->name('client.slot_games');
    Route::get('/slot/game/lounch/{id}',[ClientController::class,'launch']);
     Route::get('public/reports/bet-history',[ClientController::class,'bet_history_client'])->name('bet_history_client');
    
    Route::get('mybets',[ClientController::class,'myBets'])->name('my-bets');
    
    Route::get('our-casino',[ClientController::class,'our_casino'])->name('our_casino');
    
    Route::get('client',[ClientController::class,'client'])->name('client-home');
    Route::get('cricket-details/{game_id?}',[HomeController::class,'cricket_details'])->name('Cricket-details');
    Route::get('cricket_details_ajax/{game_id?}',[HomeController::class,'cricket_details_ajax']);
    Route::post('cricket/bet-place',[HomeController::class,'cricket_bet_place'])->name('cricket-bet-place');
    
    
    Route::get('football', [HomeController::class, 'foot_ball'])->name('football-frontend');
    Route::get('football-details/{game_id?}',[HomeController::class,'football_details'])->name('Football-Details');
    Route::post('football/bet-place',[HomeController::class,'football_bet_place'])->name('football-bet-place');
   
    
    Route::get('tennis', [HomeController::class, 'ten_nis'])->name('tennis-frontend');
    Route::get('tennis-details/{game_id?}',[HomeController::class,'tennis_details'])->name('tenis_detail');
    Route::post('tennis/bet-place',[HomeController::class,'tennis_bet_place'])->name('tennis-bet-place');
    
    Route::get('horse', [HomeController::class, 'horse'])->name('horse');
    Route::get('horse_detail/{time_slot_id?}', [HomeController::class, 'horse_detail'])->name('horse_detail');
    Route::post('horseracing/bet-place',[HomeController::class,'horseracing_bet_place'])->name('horseracing-bet-place');
    
    Route::get('greyhound', [HomeController::class, 'greyhound'])->name('greyhound');
    Route::get('greyhound_detail/{time_slot_id?}', [HomeController::class, 'greyhound_detail'])->name('greyhound_detail');
    Route::post('greyhoundracing/bet-place',[HomeController::class,'greyhoundracing_bet_place'])->name('greyhound-bet-place');
    
    
    
    
    
    Route::get('cricket_details_ipl',[HomeController::class,'cricket_details_ipl'])->name('cricket_details_ipl');
    
    Route::get('account_settlement', [HomeController::class, 'account_settlement'])->name('account_settlement');
    Route::get('profit_loss_report', [HomeController::class, 'profit_loss_report'])->name('profit_loss_report');
    Route::get('unsettle_bet', [HomeController::class, 'unsettle_bet'])->name('unsettle_bet');
    Route::get('setbutton', [HomeController::class, 'setbutton'])->name('setbutton');
    Route::get('change_pass', [HomeController::class, 'change_pass'])->name('change_pass');
    Route::post('submit-change-pass',[HomeController::class, 'submit_change_pass'])->name('submit.change.pass');

    Route::get('logout',[ClientController::class,'logout'])->name('client-logout');
    
    Route::get('cricket-details4',[HomeController::class,'details4'])->name('Cricket-details-pages-4');
    Route::get('cricket-details2',[HomeController::class,'details2'])->name('Cricket-details-pages-2');
    Route::get('cricket-details3',[HomeController::class,'details3'])->name('Cricket-details-pages-3');
    Route::get('cricket-details-page-sample',function(){
        return view('client.Cricket-details-sample');
        });
    Route::get('cricket', [HomeController::class, 'cric_ket'])->name('cricket-frontend');
    Route::get('cricket_detail', [HomeController::class, 'cricket_detail'])->name('cricket_detail-frontend');
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
        Route::get('one_day_teen_patti', [HomeController::class, 'one_day_teen_patti'])->name('one_day_teen_patti');
         Route::get('roullete', [HomeController::class, 'roullete'])->name('roullete');
    Route::get('casino_detail', [HomeController::class, 'casino_detail'])->name('live-casino_detail-frontend');
    Route::get('casino_result', [HomeController::class, 'casino_result'])->name('casino-results');
    Route::get('tiger_result', [HomeController::class, 'tiger_result'])->name('tiger-result');
    Route::get('queen_result', [HomeController::class, 'queen_result'])->name('queen-result');
    Route::get('andarbahar_result', [HomeController::class, 'andarbahar_result'])->name('andarbahar-result');
    Route::get('home',[HomeController::class,'home'])->name('home');
    // Route::get('mybets',[HomeController::class,'mybets'])->name('my-bets');
    Route::get('secureauth',[HomeController::class,'secureauth'])->name('secureauth');
    Route::get('message',[HomeController::class,'message'])->name('message');
    Route::get('profit-loss',[HomeController::class,'loss_profit'])->name('profit_loss');
    Route::get('account-client-statement',[HomeController::class,'statement'])->name('account_statement');
    Route::get('basketball-details',[HomeController::class,'basket_details'])->name('Basketball-details');
    Route::get('kabaddi-details',[HomeController::class,'kabaddi_details'])->name('Kabaddi-details');
    Route::get('race_20_20',[HomeController::class,'race20'])->name('race20');
    Route::get('queen_20',[HomeController::class,'queen_20'])->name('queen');
    Route::get('andar_bahar2',[HomeController::class,'andarbahar2'])->name('andarbahar2');
    Route::get('dragon_tiger',[HomeController::class,'dragon_tiger'])->name('dragon-tiger');
    Route::get('transferstatement',[HomeController::class,'transferstatement'])->name('transferstatement');
    Route::get('changepassword',[HomeController::class,'changepassword'])->name('changepassword');
    Route::get('deposit',[DepositController::class,'create_deposit'])->name('deposit.create');
    Route::post('submit-deposit',[DepositController::class,'submit_deposit'])->name('deposit.submit');

    Route::get('withdraw',[WithdrawController::class,'create_withdraw'])->name('withdraw.create');
    Route::post('submit-withdraw',[WithdrawController::class,'submit_withdraw'])->name('withdraw.submit');
});
Route::group(['prefix' => 'admin'], function () {

    Route::get('/', [AdminController::class, 'admin_login'])->name('admin_login');
    Route::post('admin-submit', [AdminController::class, 'admin_submit'])->name('admin_submit');

 
    Route::middleware('agent.login.check')->group(function () {
             Route::get('new_admin', [AdminController::class, 'new_admin'])->name('new_admin');
        Route::post('new_admin_store', [AdminController::class, 'new_admin_store'])->name('new_admin_store');

        
    Route::get('agent-home', [AdminController::class, 'agent'])->name('agent-home');    
    Route::get('admin-logout',[AdminController::class,'logout'])->name('admin-logout');

    Route::get('dashboard',[AgentManagementController::class,'dashboard'])->name('dashboard');

    Route::get('user-statement',[AgentManagementController::class,'user_account_stat'])->name('user-statement-account-statement');

    Route::get('sup-listing',[AdminController::class,'super_master'])->name('super-master-listing');
    Route::get('super-master-listing-search',[AdminController::class,'super_master_search'])->name('super-master-listing-search');
    Route::get('position',[PositionController::class,'position_taking'])->name('position-taking-listing');

    Route::post('position-update',[PositionController::class,'positionupdate'])->name('position-update');


    Route::get('agency-management',[TransferController::class,'management_transfer'])->name('agency-management-transfer');

    Route::post('transfer-amount',[TransferController::class,'transferAmount'])->name('transfer-amount');
    Route::get('all-member-list',[TransferController::class,'allmemberlist'])->name('all-member-list');

    Route::post('bulk-tranfer-amount',[TransferController::class,'bulktransferAmount'])->name('bulk-tranfer-amount');

    Route::get('exposure',[ExposureController::class,'net_exposure'])->name('net-exposure');
    
    Route::get('bet-ticker',[BetTicketController::class,'bet_ticker'])->name('bet-ticker');
        
    Route::post('bet-ticker',[BetTicketController::class,'bet_ticker'])->name('bet-ticker');

    Route::get('p-l-market',[ReportController::class,'p_l_market'])->name('p-and-l-report-by-market');
    Route::post('p-l-market',[ReportController::class,'p_l_market'])->name('p-and-l-report-by-market');

    Route::get('p-l-market-report-download',[ReportController::class,'plmarketreportdownload'])->name('p-l-market-report-download');


    Route::get('p-l-agent-report-download',[ReportController::class,'plagentreportdownload'])->name('p-l-agent-report-download');


    Route::get('p-l-agent',[ReportController::class,'p_l_agent'])->name('p-and-l-report-by-agent');
    Route::post('p-l-agent',[ReportController::class,'p_l_agent'])->name('p-and-l-report-by-agent');

    Route::get('casino',[AdminController::class,'casino'])->name('casino-report');
    Route::get('user-transfer',[AdminController::class,'user_transfer'])->name('user-transfer-statement');
    
    Route::get('user-listing',[AdminController::class,'user_listing'])->name('user-listing');
    Route::get('bet-list',[BetController::class,'bet_list'])->name('bet-list');
    Route::get('bet-limit',[BetController::class,'bet_limit'])->name('bet-limit');
    Route::get('bet-limit-update',[BetController::class,'bet_limit_update'])->name('bet-limit-update');


    Route::get('bet-list-download',[BetController::class,'bet_list_download'])->name('bet-list-download');

    Route::get('bet-delete',[BetController::class,'betdelete'])->name('delete-bet');
    Route::post('bet-list',[BetController::class,'bet_list'])->name('bet-list');

    Route::get('su-list-live',[BetController::class,'bet_list_live'])->name('bet-list-live');

    Route::get('banner-update',[AdminController::class,'banner_update'])->name('banner-update');
    Route::get('news-update',[ExtraController::class,'news_update'])->name('news-update');
    Route::get('client-notification',[ExtraController::class,'client_notification'])->name('client-notification');
    Route::post('update-notification',[ExtraController::class,'update_notification'])->name('update-notification');

    Route::get('balance-log',[PlayerLogReportController::class,'balance_log'])->name('balance-log');
    Route::post('balance-log',[PlayerLogReportController::class,'balance_log'])->name('balance-log');

    Route::get('player-betting-history',[PlayerLogReportController::class,'my_bets_report'])->name('player-betting-history');
    Route::get('my-bets-report',[PlayerLogReportController::class,'my_bets_report'])->name('my-bets-report');
    Route::post('player-betting-history',[PlayerLogReportController::class,'my_bets_report'])->name('player-betting-history');
    Route::post('my-bets-report',[PlayerLogReportController::class,'my_bets_report'])->name('my-bets-report');

    Route::get('profit-loss',[PlayerLogReportController::class,'profit_loss_report'])->name('player-profit-and-loss');
    Route::get('profit-loss-report',[PlayerLogReportController::class,'profit_loss_report'])->name('profit-loss-report');

    Route::post('profit-loss',[PlayerLogReportController::class,'profit_loss_report'])->name('player-profit-and-loss');
    Route::post('profit-loss-report',[PlayerLogReportController::class,'profit_loss_report'])->name('profit-loss-report');

    Route::get('profit-loss-view-bets',[PlayerLogReportController::class,'profit_loss_view_bets'])->name('profit-loss-view-bets');
    Route::get('chips-analysis',[PlayerLogReportController::class,'chips_analysis'])->name('chips-analysis');

    Route::get('market-setting',[MarketSettingsController::class,'market_settings'])->name('market-settings');
    Route::get('declare-market',[MarketSettingsController::class,'market_settings'])->name('declare-market');
    Route::get('match-lock',[MarketSettingsController::class,'market_settings'])->name('matchlock');
    Route::get('market-rollback',[MarketSettingsController::class,'market_settings'])->name('market-rollback');
    Route::get('global-setting',[MarketSettingsController::class,'global_setting'])->name('global-settings');

    Route::post('global-currency-update', [MarketSettingsController::class,'globalcurrencyupdate'])->name('global-currency-update');


    Route::get('online-user',[AdminController::class,'online_user'])->name('online-user');
    Route::get('delete-bet-history',[AdminController::class,'delete_bet_history'])->name('delete-bet-history');

    Route::get('fancy-setting',[AdminController::class,'fancy_setting'])->name('fancy-setting');
    Route::get('match-setting',[AdminController::class,'match_setting'])->name('match-setting');
    Route::get('match-limit',[AdminController::class,'match_limit'])->name('match-limit');
    Route::get('suspend-all',[AdminController::class,'suspend_market'])->name('suspend-all-market');
    Route::get('score-card',[AdminController::class,'score_tv'])->name('score-card-and-tv');
 
 
    Route::get('prifitloss-downline',[AdminController::class,'profitloss_downline'])->name('profitLoss-report-by-downline');
    Route::get('prifitloss-market',[AdminController::class,'prifitloss_market'])->name('profitLoss-report-by-market');
    Route::get('risk-management',[AdminController::class,'risk_management'])->name('risk-management');

    Route::get('cash-banking',[CashbankingController::class,'cash_banking'])->name('cash-banking');
    Route::post('cash-banking',[CashbankingController::class,'cash_banking'])->name('cash-banking');
    Route::get('/update-payment-submit', [CashbankingController::class,'updatepaymentsubmit'])->name('update-payment-submit');
    Route::post('cash-banking-submit',[CashbankingController::class,'bankingSubmit'])->name('cash-banking-submit');   
    Route::get('/banking-log/{id?}', [CashbankingController::class,'bankinglog'])->name('banking-log'); 

    Route::get('password-history',[AdminController::class,'password_history'])->name('password-history');
    Route::get('commission',[AdminController::class,'commission'])->name('commission');
    Route::get('market-analysis',[AdminController::class,'market_analysis'])->name('market-analysis');
    Route::get('void-market',[AdminController::class,'void_market'])->name('void-markets');
    Route::get('white-label',[AdminController::class,'white_label'])->name('white-lable');
    Route::get('new-super-user',[AdminController::class,'new_super'])->name('new-super-master');
    
    Route::get('transfer-statement',[AdminController::class,'transfer_statement'])->name('transfer-statement');
    Route::get('casino-result',[AdminController::class,'casino_result'])->name('casino-result');
    Route::get('game-report',[AdminController::class,'game_report'])->name('game-report');
    Route::get('create-account',[AdminController::class,'create_account'])->name('create-account');
    Route::get('live-casino',[AdminController::class,'live_casino'])->name('live-casino');
    Route::get('notification',[AdminController::class,'notifi_cation'])->name('notification');

    Route::get('account-statement',[AgentManagementController::class,'account_statement'])->name('account-statement');

    Route::post('account-statement',[AgentManagementController::class,'account_statement'])->name('account-statement');

    Route::get('account-statement-download',[AgentManagementController::class,'account_statement_download'])->name('account-statement-download');


    Route::get('message-report',[AdminController::class,'message_report'])->name('message-report');
    Route::get('client_account_statement',[AdminController::class,'client_account_statement'])->name('client-account-statement');
    // Route::post('password-change/{id}',[AdminController::class,'password_change'])->name('admin-password-change');
    Route::get('smdemo1-agent-listing-demoag5',[AdminController::class,'demo_2'])->name('smdemo1-agent-listing-demoag5');
    Route::get('agent-listing2',[AdminController::class,'demo_1'])->name('agent-listing2');
    Route::any('agent-listing',[AdminController::class,'agent_listing'])->name('agent-listing');
    Route::get('agent-listing-demoag5/{id}',[AdminController::class,'demo_4'])->name('agent-listing-demoag5');
    Route::get('agent-listing-demoag55/{id}',[AdminController::class,'demo_44'])->name('agent-listing-demoag55');
    Route::get('create-new-user',[AdminController::class,'new_user'])->name('create-new-user');
    Route::get('race20',[AdminController::class,'race20'])->name('admin-race-20');
    Route::get('new-agent',[AdminController::class,'new_agent'])->name('new-agent');
 
    Route::get('agent-dashboard',[AdminController::class,'agent_dashboard'])->name('agent-dashboard');
    Route::post('new-agent-submit',[LoginSubmitController::class,'new_agent_submit'])->name('new-agent-submit');
    Route::get('admin-detail',[AdminController::class,'admin_detail'])->name('admin-details');
    Route::post('agent-update',[LoginSubmitController::class,'agent_update'])->name('agent-update');
    Route::get('update-password',[AdminController::class,'password_update'])->name('update-password');
    Route::post('new-admin',[AdminController::class,'admin_add_submit'])->name('admin-add-submit');
    Route::post('admin-update',[LoginSubmitController::class,'admin_update'])->name('admin-update');
    Route::post('update-admin-status', [AdminController::class, 'update_Status'])->name('update-status');
    Route::post('admin-user-create', [LoginSubmitController::class, 'admin_user'])->name('admin-user-create');
    Route::get('user-detail',[AdminUserController::class,'user_detail'])->name('user-details');
    Route::post('user-access',[AdminUserController::class,'user_access'])->name('admin-user-access');
    Route::post('super-master-user',[AdminUserController::class,'master_user_access'])->name('super-master-user');
    Route::get('user-access-edit',[AdminUserController::class,'user_access_edit'])->name('adminuser-details');
    Route::post('user-access-update',[AdminUserController::class,'user_access_update'])->name('update-useraccess');
    Route::get('get-user-data', [AdminUserController::class,'get_user_data'])->name('get-user-data');
    Route::get('update-user-data', [AdminUserController::class,'update_user_data'])->name('update-user-data');
    Route::post('white-label-create',[AdminUserController::class,'white_label_add'])->name('white-label-submit');
    Route::post('update-status',[AdminUserController::class,'update_whitelevel_status'])->name('update-whitelevel-status');
    Route::get('update-user-password',[AdminUserController::class,'update_user_password'])->name('update-user-password');
    Route::post('logout-all',[AdminController::class,'logout_all'])->name('logout-all-user');
});

});
Route::get('control-dashboard-api',[AgentManagementController::class,'adminControlDashboardApi']);
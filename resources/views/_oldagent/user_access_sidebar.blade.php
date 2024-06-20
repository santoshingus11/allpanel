@php
$adminAccess = [];
if (isset(Auth::guard('agent')->user()->admin_access) && Auth::guard('agent')->user()->user_access == '1') {
    $userdata = Auth::guard('agent')->user();
    $adminAccessArray = explode(',', $userdata->admin_access);

    foreach ($adminAccessArray as $item) {
        // Only proceed if there is a key-value pair
        if (strpos($item, '=')) {
            list($key, $value) = explode('=', $item);
            $adminAccess[$key] = $value;
        }
    }
}

@endphp
@if(($adminAccess!=''))
<ul class="nav">
  {{-- @if(Auth::guard('agent')->user()->user_access == '1' || Auth::guard('agent')->user()->user_access == '1') --}}
  @if(isset($adminAccess['client_list']))
  @if($adminAccess['client_list'] === '1')
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#ManagementPosition" role="button" aria-expanded="false" aria-controls="ManagementPosition">
      <span class="link-title">Agency Management</span>
      <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="ManagementPosition">
      <ul class="nav sub-menu">
     
      
        <a href="{{route('agent-listing')}}" class="nav-link"> Master Listing</a>
        @if((Auth::guard('agent')->user()->role_id==4))
        <a href="{{route('agent-listing')}}" class="nav-link"> Agent Listing</a> 
        @endif
      </li>
      {{-- @if(Auth::guard('agent')->user()->role_id==1 || Auth::guard('agent')->user()->role_id==2)
      <li class="nav-item">
        <a href="{{route('position-taking-listing')}}" class="nav-link"> Position Taking Listing</a>
      </li>
      @endif --}}
      {{-- <li class="nav-item">
        <a href="{{route('agency-management-transfer')}}" class="nav-link"> Transfer</a>
      </li> --}}
      {{-- @if(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
      <li class="nav-item">
        <a href="{{route('notification')}}" class="nav-link">Notification</a>
      </li>
      @endif --}}
      </ul>
    </div>
  </li>
  @endif
  @endif
      @if(isset($adminAccess['agency_management']))
        @if($adminAccess['agency_management'] === '0')
          @elseif($adminAccess['agency_management'] ==='2')
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ManagementPosition" role="button" aria-expanded="false" aria-controls="ManagementPosition">
              <span class="link-title">Agency Management</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="ManagementPosition">
              <ul class="nav sub-menu">
             
                @if(Auth::guard('agent')->user()->role_id==1)
                <a href="{{route('super-master-listing')}}" class="nav-link"> Admin Listing</a>
                @elseif(Auth::guard('agent')->user()->role_id==2)
                <a href="{{route('super-master-listing')}}" class="nav-link"> Super Master Listing</a>
                {{-- @elseif((Auth::guard('agent')->user()->role_id==3))
                <a href="{{route('agent-listing')}}" class="nav-link"> Master Listing</a>
                @elseif((Auth::guard('agent')->user()->role_id==4))
                <a href="{{route('agent-listing')}}" class="nav-link"> Agent Listing</a> --}} 
                @endif
              </li>
              @if(Auth::guard('agent')->user()->role_id==1 || Auth::guard('agent')->user()->role_id==2)
              <li class="nav-item">
                <a href="{{route('position-taking-listing')}}" class="nav-link"> Position Taking Listing</a>
              </li>
              @endif
              <li class="nav-item">
                <a href="{{route('agency-management-transfer')}}" class="nav-link"> Transfer</a>
              </li>
              {{-- @if(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
              <li class="nav-item">
                <a href="{{route('notification')}}" class="nav-link">Notification</a>
              </li>
              @endif --}}
              </ul>
            </div>
          </li>
            @elseif($adminAccess['agency_management'] === '1')
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ManagementPosition" role="button" aria-expanded="false" aria-controls="ManagementPosition">
                <span class="link-title">Agency Management</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="ManagementPosition">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                        @if(isset($adminAccess['admin_listing']))
                            @if($adminAccess['admin_listing'] === '0')
                                @if(Auth::guard('agent')->user()->role_id=='1')
                                  <a href="javascript:void(0)" class="nav-link"> Admin Listing</a>
                                @elseif(Auth::guard('agent')->user()->role_id=='2')
                                <a href="javascript:void(0)" class="nav-link"> Super Master Listing</a>
                                @endif
                            @elseif($adminAccess['admin_listing'] === '1' || $adminAccess['admin_listing'] === '2')

                            <a href="{{route('super-master-listing')}}" class="nav-link"> 
                              @if(Auth::guard('agent')->user()->role_id=='1')
                              Admin Listing
                              @elseif(Auth::guard('agent')->user()->role_id=='2')
                              Super Master listing
                              @endif
                            </a>
                            @endif
                        @endif
                        {{-- @if(Auth::guard('agent')->user()->role_id=='2')
                        @if(isset($adminAccess['super_master_listing']))
                            @if($adminAccess['super_master_listing'] === '0')
                              <a href="javascript:void(0)" class="nav-link">Super Master Listing</a>
                          @elseif($adminAccess['super_master_listing'] === '1' || $adminAccess['super_master_listing'] === '2')
                          <a href="{{route('super-master-listing')}}" class="nav-link"> Super Master Listing</a>
                          @endif
                        @endif
                        @endif   --}}
                        
                        {{-- @if($userrole==2)
                        <a href="{{route('super-master-listing')}}" class="nav-link"> Super Master Listing</a>
                        @elseif($userrole==3)
                        <a href="{{route('agent-listing')}}" class="nav-link"> Master Listing</a>
                        @elseif($userrole==4)
                        <a href="{{route('agent-listing')}}" class="nav-link"> Agent Listing</a>
                        @endif --}}
                        </li>
                      @if(isset($adminAccess['position_taking']))
                        @if($adminAccess['position_taking'] === '0')
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link"> Position Taking Listing</a>
                        </li>
                        @elseif($adminAccess['position_taking'] === '1' || $adminAccess['position_taking'] ==='2')
                        <li class="nav-item">
                            <a href="{{route('position-taking-listing')}}" class="nav-link"> Position Taking Listing</a>
                        </li>
                        @endif
                      @endif
                    @if(isset($adminAccess['transfer']))
                      @if($adminAccess['transfer'] === '0')
                      <li class="nav-item">
                          <a href="javascript:void(0)" class="nav-link"> Transfer</a>
                      </li>
                      @else
                      <li class="nav-item">
                          <a href="{{route('agency-management-transfer')}}" class="nav-link">Transfer</a>
                      </li>
                      @endif
                    @endif
                    {{-- @if($userrole==3 || $userrole==4)
                    <li class="nav-item">
                        <a href="{{route('notification')}}" class="nav-link">Notification</a>
                    </li>
                    @endif --}}
                </div>
                </li>
        @endif
      @endif
        @if(isset($adminAccess['risk_management']))
          @if($adminAccess['risk_management'] === '0')
          @elseif( $adminAccess['risk_management'] === '2')
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#RiskManagement" role="button" aria-expanded="false" aria-controls="RiskManagement">
              <span class="link-title">Risk Management</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="RiskManagement">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('net-exposure')}}" class="nav-link">Net Exposure</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('bet-ticker')}}" class="nav-link">Bet Ticker</a>
                </li>
              </ul>
            </div>
          </li>
          
            @elseif($adminAccess['risk_management'] =='1')
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#RiskManagement" role="button" aria-expanded="false" aria-controls="RiskManagement">
                <span class="link-title">Risk Management</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="RiskManagement">
                <ul class="nav sub-menu">
                  @if(isset($adminAccess['net_exposure']))
                    @if($adminAccess['net_exposure']==='0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link">Net Exposure</a>
                    </li>
                    @elseif($adminAccess['net_exposure']==='1' || $adminAccess['net_exposure']==='2')
                    <li class="nav-item">
                        <a href="{{route('net-exposure')}}" class="nav-link">Net Exposure</a>
                      </li>
                    @endif
                  @endif
                  @if(isset($adminAccess['bet_ticker']))
                    @if($adminAccess['bet_ticker']==='0')
                    <li class="nav-item">
                      <a href="{{route('bet-ticker')}}" class="nav-link">Bet Ticker</a>
                    </li>
                    @elseif($adminAccess['bet_ticker']==='1' || $adminAccess['bet_ticker']==='2')
                    <li class="nav-item">
                        <a href="{{route('bet-ticker')}}" class="nav-link">Bet Ticker</a>
                      </li>
                    @endif
                  @endif
                </ul>
              </div>
            </li>
            @endif
          @endif
          @if(Auth::guard('agent')->user()->role_id=='3' || Auth::guard('agent')->user()->role_id=='4')
          @if( array_key_exists('my_bets', $adminAccess) ||
          array_key_exists('casino_report', $adminAccess) ||
          array_key_exists('bank_list', $adminAccess) ||
          array_key_exists('game_report', $adminAccess)
      )
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#Reports" role="button" aria-expanded="false" aria-controls="Reports">
              <span class="link-title">Reports</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="Reports">
              <ul class="nav sub-menu">
                @if(isset($adminAccess['my_bets']))
                  @if(($adminAccess['my_bets']=='1'))
                  <li class="nav-item">
                  <a href="{{route('my-bets-report')}}" class="nav-link"> My Bets Reports </a>
                  </li>
                  @endif
                @endif
                @if(isset($adminAccess['bank_list']))
                  @if(($adminAccess['bank_list']=='1'))
                  <li class="nav-item">
                  <a href="{{route('transfer-statement')}}" class="nav-link"> Transfer Statement </a>
                  </li>
                  @endif
                @endif
                @if(isset($adminAccess['casino_list']))
                  @if(($adminAccess['casino_list']=='1'))
                  <li class="nav-item">
                  <a href="{{route('casino-result')}}" class="nav-link"> Casino Result </a>
                  </li>
                  @endif
                @endif
                @if(isset($adminAccess['game_report']))
                  @if(($adminAccess['game_report']=='1'))
                  <li class="nav-item">
                  <a href="{{route('game-report')}}" class="nav-link"> Game Report </a>
                  </li>
                  @endif
                @endif

                {{-- @if(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
                <li class="nav-item">
                 <a href="{{route('profit-loss-report')}}" class="nav-link"> Profit Loss Report</a>
                </li>
                <li class="nav-item">
                 <a href="{{route('transfer-statement')}}" class="nav-link"> Transfer Statement</a>
                </li>
                @endif --}}
                {{-- <li class="nav-item">
                 @if(Auth::guard('agent')->user()->role_id==1 || Auth::guard('agent')->user()->role_id==2)
                  <a href="{{route('casino-report')}}" class="nav-link"> Casino Report</a>
                  @elseif(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
                  <a href="{{route('casino-result')}}" class="nav-link"> Casino Result</a>
                  @endif
                </li>
                @if(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
                <li class="nav-item">
                 <a href="{{route('game-report')}}" class="nav-link"> Game Report</a>
                </li>
                <li class="nav-item">
                 <a href="{{route('message-report')}}" class="nav-link"> Message Report</a>
                </li>
                @endif
                @if(Auth::guard('agent')->user()->role_id==2)
                <li class="nav-item">
                  <a href="{{route('bet-list')}}" class="nav-link">Bet list</a>
                </li>
                @endif
                @if(Auth::guard('agent')->user()->role_id==1)
                <li class="nav-item">
                  <a href="{{route('user-transfer-statement')}}" class="nav-link"> Transfer Statement</a>
                </li>
                @endif --}}
              </ul>
            </div>
          </li>
          @endif
          @endif
          @if(isset($adminAccess['reports']))
            @if($adminAccess['reports'] === '0')
            @elseif($adminAccess['reports'] === '2')
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#Reports" role="button" aria-expanded="false" aria-controls="Reports">
                  <span class="link-title">Reports</span>
                  <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="Reports">
                  <ul class="nav sub-menu">
          
                  @if(Auth::guard('agent')->user()->role_id==1 || Auth::guard('agent')->user()->role_id==2)
                      <li class="nav-item">
                      <a href="{{route('p-and-l-report-by-market')}}" class="nav-link"> P&L Report by Market</a>
                      </li>
                      <li class="nav-item">
                      <a href="{{route('p-and-l-report-by-agent')}}" class="nav-link"> P&L Report by Agent</a>
                      </li>
                      @endif
                    
                      @if(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
                      <li class="nav-item">
                      <a href="{{route('profit-loss-report')}}" class="nav-link"> Profit Loss Report</a>
                      </li>
                      <li class="nav-item">
                      <a href="{{route('transfer-statement')}}" class="nav-link"> Transfer Statement</a>
                      </li>
                      @endif
                      <li class="nav-item">
                      @if(Auth::guard('agent')->user()->role_id==1 || Auth::guard('agent')->user()->role_id==2)
                      <a href="{{route('casino-report')}}" class="nav-link"> Casino Report</a>
                      @elseif(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
                      <a href="{{route('casino-result')}}" class="nav-link"> Casino Result</a>
                      @endif
                      </li>
                      @if(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
                      <li class="nav-item">
                      <a href="{{route('game-report')}}" class="nav-link"> Game Report</a>
                      </li>
                      <li class="nav-item">
                      <a href="{{route('message-report')}}" class="nav-link"> Message Report</a>
                      </li>
                      @endif
                      @if(Auth::guard('agent')->user()->role_id==2)
                      <li class="nav-item">
                      <a href="{{route('bet-list')}}" class="nav-link">Bet list</a>
                      </li>
                      @endif
                      @if(Auth::guard('agent')->user()->role_id==1)
                      <li class="nav-item">
                      <a href="{{route('user-transfer-statement')}}" class="nav-link"> Transfer Statement</a>
                      </li>
                      @endif
                  </ul>
                  </div>
              </li>
            @elseif($adminAccess['reports'] === '1')
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#Reports" role="button" aria-expanded="false" aria-controls="Reports">
                <span class="link-title">Reports</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="Reports">
                <ul class="nav sub-menu">
                  @if(isset($adminAccess['p_l_report_market']))
                    @if($adminAccess['p_l_report_market']==='0')
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link"> P&L Report by Market</a>
                      </li>
                    @elseif($adminAccess['p_l_report_market']==='1' || $adminAccess['p_l_report_market']==='2')
                    <li class="nav-item">
                        <a href="{{route('p-and-l-report-by-market')}}" class="nav-link"> P&L Report by Market</a>
                    </li>
                    @endif
                  @endif
                  @if(isset($adminAccess['p_l_report_agent']))
                    @if($adminAccess['p_l_report_agent']==='0')
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link">P&L Report by Agent</a>
                      </li>
                    @elseif($adminAccess['p_l_report_agent']==='1' || $adminAccess['p_l_report_agent']==='2')
                    <li class="nav-item">
                        <a href="{{route('p-and-l-report-by-agent')}}" class="nav-link"> P&L Report by Agent</a>
                    </li>
                    @endif
                  @endif
                  {{-- @if(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
                      <li class="nav-item">
                      <a href="{{route('my-bets-report')}}" class="nav-link"> My Bets Reports </a>
                      </li>
                      @endif
                      @if(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
                      <li class="nav-item">
                      <a href="{{route('profit-loss-report')}}" class="nav-link"> Profit Loss Report</a>
                      </li>
                      <li class="nav-item">
                      <a href="{{route('transfer-statement')}}" class="nav-link"> Transfer Statement</a>
                      </li>
                  @endif --}}
                  @if(isset($adminAccess['transfer_statement']))
                    @if($adminAccess['transfer_statement']==='0')
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link"> Casino Report</a>
                    </li>
                    @elseif($adminAccess['casino_report']==='1' || $adminAccess['casino_report']==='2')
                    <li class="nav-item">
                        <a href="{{route('casino-report')}}" class="nav-link"> Casino Report</a>
                    </li>
                    @endif
                  @endif
                  @if(isset($adminAccess['transfer_statement']))
                    @if($adminAccess['transfer_statement']==='0')
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link"> Transfer Statement</a>
                    </li>
                    @elseif($adminAccess['transfer_statement']==='1' || $adminAccess['transfer_statement']==='2')
                    <li class="nav-item">
                        <a href="{{route('user-transfer-statement')}}" class="nav-link"> Transfer Statement</a>
                  </li>
                  @endif
                @endif
        
                
                </ul>
              </div>
            </li>
            @endif
          @endif
          @if(isset($adminAccess['account_management']))
              @if($adminAccess['account_management'] === '0')
                @elseif($adminAccess['account_management'] === '2')
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#AccountManagement" role="button" aria-expanded="false" aria-controls="AccountManagement">
                        <span class="link-title">Account Management</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="AccountManagement">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                            @if(Auth::guard('agent')->user()->role_id==1 || Auth::guard('agent')->user()->role_id==2)
                            <a href="{{route('dashboard')}}" class="nav-link">Balance</a>
                            @elseif(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
                            <a href="{{route('account-statement')}}" class="nav-link">Account Statement</a>
                            @endif
                            </li>
                            <li class="nav-item">
                            @if(Auth::guard('agent')->user()->role_id==1 || Auth::guard('agent')->user()->role_id==2)
                            <a href="{{route('user-statement-account-statement')}}" class="nav-link">Statement</a>
                            @elseif(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
                            <a href="{{route('client-account-statement')}}" class="nav-link">Client Account Statement</a>
                            @endif
                            </li>
                            @if(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
                            <li class="nav-item">
                            <a href="{{route('dashboard')}}" class="nav-link">Balance</a>
                            </li>
                            @endif
                        </ul>
                        </div>
                    </li>
                    @elseif($adminAccess['account_management'] === '1')
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#AccountManagement" role="button" aria-expanded="false" aria-controls="AccountManagement">
                    <span class="link-title">Account Management</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="AccountManagement">
                    <ul class="nav sub-menu">
                      @if(isset($adminAccess['balance']))
                          @if($adminAccess['balance'] === '0')
                          <li class="nav-item">
                          <a href="javascript:void(0)" class="nav-link">Balance</a>
                          </li>
                          @elseif($adminAccess['balance'] === '1' || $adminAccess['balance'] === '2')
                          <li class="nav-item">
                              <a href="{{route('dashboard')}}" class="nav-link">Balance</a>
                          </li>
                          @endif
                      @endif
                      @if(isset($adminAccess['account_statement']))
                        @if($adminAccess['account_statement'] === '0')
                        <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link">Statement</a>
                        </li>
                        @elseif($adminAccess['account_statement'] === '1' || $adminAccess['account_statement'] === '2')
                        <li class="nav-item">
                            <a href="{{route('client-account-statement')}}" class="nav-link">Statement</a>
                        </li>
                        @endif
                      @endif
                    </ul>
                    </div>
                </li>
                @endif
          @endif
          @if(isset($adminAccess['user_create']))
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#UserListing" role="button" aria-expanded="false" aria-controls="UserListing">
              <span class="link-title">Admin Users</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="UserListing">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('create-account')}}" class="nav-link">Create Account</a>
                </li>
              </ul>
            </div>
          </li>
          @endif
          @if(isset($adminAccess['admin_user']))
                @if($adminAccess['admin_user'] === '0')
                @elseif($adminAccess['admin_user'] === '2')
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#UserListing" role="button" aria-expanded="false" aria-controls="UserListing">
                      <span class="link-title">Admin Users</span>
                      <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="UserListing">
                      <ul class="nav sub-menu">
                        <li class="nav-item">
                        @if(Auth::guard('agent')->user()->role_id==1 || Auth::guard('agent')->user()->role_id==2)
                          <a href="{{route('user-listing')}}" class="nav-link"> User Listing</a>
                          @elseif(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
                          <a href="{{route('create-account')}}" class="nav-link">Create Account</a>
                          @endif
                        </li>
                      </ul>
                    </div>
                    @if(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
                    <li class="nav-item">
                    <a class="nav-link blinking-new" data-bs-toggle="collapse" href="#LiveCasino" role="button" aria-expanded="false" aria-controls="LiveCasino">
                      <span class="link-title">Live Casino</span>
                      <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="LiveCasino">
                      <ul class="nav sub-menu">
                        <li class="nav-item">
                          <a href="{{route('live-casino')}}" class="nav-link">Live Casino</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  @endif
                  </li>
                @elseif($adminAccess['admin_user'] === '1')
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#UserListing" role="button" aria-expanded="false" aria-controls="UserListing">
                      <span class="link-title">Admin Users</span>
                      <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="UserListing">
                      <ul class="nav sub-menu">
                        @if(isset($adminAccess['user_listing']))
                          @if($adminAccess['user_listing'] === '0')
                          <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link"> User Listing</a>
                          </li>
                          @elseif($adminAccess['user_listing'] === '1' || $adminAccess['user_listing'] === '2')
                          <li class="nav-item">
                              <a href="{{route('user-listing')}}" class="nav-link"> User Listing</a>
                            </li>
                            @endif
                        @endif
                      </ul>
                    </div>
                  </li>
              @endif
          @endif
          @if(isset($adminAccess['bet']))
            @if($adminAccess['bet'] === '0')
            @elseif($adminAccess['bet'] === '2')
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#Bet" role="button" aria-expanded="false" aria-controls="Bet">
                <span class="link-title">Bet</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="Bet">
                <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{route('bet-list')}}" class="nav-link">Bet List</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('bet-list-live')}}" class="nav-link">Bet List Live</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('bet-limit')}}" class="nav-link">Bet Limit</a>
                  </li>
                </ul>
              </div>
            </li>
            @elseif($adminAccess['bet'] === '1')
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#Bet" role="button" aria-expanded="false" aria-controls="Bet">
                <span class="link-title">Bet</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="Bet">
                <ul class="nav sub-menu">
                  @if(isset($adminAccess['bet_list']))
                    @if($adminAccess['bet_list'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link"> Bet List</a>
                    </li>
                    @elseif($adminAccess['bet_list'] === '1' || $adminAccess['bet_list'] === '2')
                    <li class="nav-item">
                        <a href="{{route('bet-list')}}" class="nav-link">Bet List</a>
                    </li>
                      @endif
                  @endif
                  @if(isset($adminAccess['bet_list_live']))
                    @if($adminAccess['bet_list_live'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link"> Bet List Live</a>
                    </li>
                    @elseif($adminAccess['bet_list_live'] === '1' || $adminAccess['bet_list_live'] === '2')
                    <li class="nav-item">
                        <a href="{{route('bet-list-live')}}" class="nav-link">Bet List Live</a>
                    </li>
                    @endif
                  @endif
                  @if(isset($adminAccess['bet_limit']))
                    @if($adminAccess['bet_limit'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link"> Bet Limit</a>
                    </li>
                    @elseif($adminAccess['bet_limit'] === '1' || $adminAccess['bet_limit'] === '2')
                    <li class="nav-item">
                        <a href="{{route('bet-limit')}}" class="nav-link">Bet Limit</a>
                    </li>
                    @endif
                  @endif
                </ul>
              </div>
            </li>
            @endif
          @endif
          @if(isset($adminAccess['extra']))
            @if($adminAccess['extra'] === '0')
            @elseif($adminAccess['extra'] === '2')
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#Extra" role="button" aria-expanded="false" aria-controls="Extra">
                <span class="link-title">Extra</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="Extra">
                <ul class="nav sub-menu">
                  <!-- <li class="nav-item">
                    <a href="{{route('banner-update')}}" class="nav-link">Banner Update</a>
                  </li> -->
                  <li class="nav-item">
                    <a href="{{route('news-update')}}" class="nav-link">News Update</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('client-notification')}}" class="nav-link">Client Notification</a>
                  </li>
                </ul>
              </div>
            </li>
            @elseif($adminAccess['extra'] === '1')
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#Extra" role="button" aria-expanded="false" aria-controls="Extra">
                <span class="link-title">Extra</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="Extra">
                <ul class="nav sub-menu">
                  @if(isset($adminAccess['banner_update']))
                    @if($adminAccess['banner_update'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link"> Banner Update</a>
                    </li>
                    @elseif($adminAccess['banner_update'] === '1' || $adminAccess['banner_update'] === '2')
                    <!-- <li class="nav-item">
                        <a href="{{route('banner-update')}}" class="nav-link">Banner Update</a>
                    </li> -->
                      @endif
                  @endif
                  @if(isset($adminAccess['news_update']))
                    @if($adminAccess['news_update'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link">News Update</a>
                    </li>
                    @elseif($adminAccess['news_update'] === '1' || $adminAccess['news_update'] === '2')
                    <li class="nav-item">
                        <a href="{{route('news-update')}}" class="nav-link">News Update</a>
                    </li>
                    @endif
                  @endif
                  @if(isset($adminAccess['client_notification']))
                    @if($adminAccess['client_notification'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link"> Client Notification</a>
                    </li>
                    @elseif($adminAccess['client_notification'] === '1' || $adminAccess['client_notification'] === '2')
                    <li class="nav-item">
                        <a href="{{route('client-notification')}}" class="nav-link">Client Notification</a>
                    </li>
                    @endif
                  @endif
                </ul>
              </div>
            </li>
            @endif
          @endif
          @if(isset($adminAccess['player_log_report']))
              @if($adminAccess['player_log_report'] === '0')
              @elseif($adminAccess['player_log_report'] === '2')
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#PlayerLog" role="button" aria-expanded="false" aria-controls="PlayerLog">
                    <span class="link-title">Player Log & Report</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="PlayerLog">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="{{route('balance-log')}}" class="nav-link">Balance Log</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('player-betting-history')}}" class="nav-link">Player Betting History</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('player-profit-and-loss')}}" class="nav-link">Player Profit and Loss</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a href="{{route('chips-analysis')}}" class="nav-link">Chips Analysis</a>
                      </li> -->
                    </ul>
                  </div>
                </li>
              @elseif($adminAccess['player_log_report'] === '1')

                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#PlayerLog" role="button" aria-expanded="false" aria-controls="PlayerLog">
                    <span class="link-title">Player Log & Report</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="PlayerLog">
                    <ul class="nav sub-menu">
                      @if(isset($adminAccess['balance_log']))
                        @if($adminAccess['balance_log'] === '0')
                        <li class="nav-item">
                          <a href="javascript:void(0)" class="nav-link"> Balance Log</a>
                        </li>
                        @elseif($adminAccess['balance_log'] === '1' || $adminAccess['balance_log'] === '2')
                        <li class="nav-item">
                            <a href="{{route('balance-log')}}" class="nav-link">Balance Log</a>
                        </li>
                          @endif
                      @endif
                      @if(isset($adminAccess['betting_history']))
                        @if($adminAccess['betting_history'] === '0')
                        <li class="nav-item">
                          <a href="javascript:void(0)" class="nav-link">Player Betting History</a>
                        </li>
                        @elseif($adminAccess['betting_history'] === '1' || $adminAccess['betting_history'] === '2')
                        <li class="nav-item">
                            <a href="{{route('player-betting-history')}}" class="nav-link">Player Betting History</a>
                        </li>
                        @endif
                      @endif
                      @if(isset($adminAccess['player_profit_loss']))
                        @if($adminAccess['player_profit_loss'] === '0')
                        <li class="nav-item">
                          <a href="javascript:void(0)" class="nav-link"> Player Profit and Loss</a>
                        </li>
                        @elseif($adminAccess['player_profit_loss'] === '1' || $adminAccess['player_profit_loss'] === '2')
                        <li class="nav-item">
                            <a href="{{route('player-profit-and-loss')}}" class="nav-link">Player Profit and Loss</a>
                        </li>
                        @endif
                      @endif
                      @if(isset($adminAccess['chips_analysis']))
                        @if($adminAccess['chips_analysis'] === '0')
                        <li class="nav-item">
                          <a href="javascript:void(0)" class="nav-link"> Chips Analysis</a>
                        </li>
                        @elseif($adminAccess['chips_analysis'] === '1' || $adminAccess['chips_analysis'] === '2')
                        <!-- <li class="nav-item">
                            <a href="{{route('chips-analysis')}}" class="nav-link">Chips Analysis</a>
                        </li> -->
                        @endif
                      @endif
                    </ul>
                  </div>
                </li>
              @endif
            @endif
          @endif
          @if(isset($adminAccess['main_market_setting']))
            @if($adminAccess['main_market_setting'] === '0')
            @elseif($adminAccess['main_market_setting'] === '2')
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#MarketSetting" role="button" aria-expanded="false" aria-controls="MarketSetting">
                  <span class="link-title">Market Setting</span>
                  <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="MarketSetting">
                  <ul class="nav sub-menu">
                    <li class="nav-item">
                      <a href="{{route('market-settings')}}" class="nav-link">Market Settings</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('declare-market')}}" class="nav-link">Declare Market</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('matchlock')}}" class="nav-link">Match Lock </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('market-rollback')}}" class="nav-link">Market Rollback </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('online-user')}}" class="nav-link">Online User </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('delete-bet-history')}}" class="nav-link">Delete Bet History </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('global-settings')}}" class="nav-link">Global Settings </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('fancy-setting')}}" class="nav-link">Fancy Setting </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('match-setting')}}" class="nav-link">Match Setting</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('match-limit')}}" class="nav-link">Match Limit </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('suspend-all-market')}}" class="nav-link">Suspend All Market </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('score-card-and-tv')}}" class="nav-link">Score Card and TV </a>
                    </li>
          
                  </ul>
                </div>
              </li>
            @elseif($adminAccess['main_market_setting'] === '1')
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#MarketSetting" role="button" aria-expanded="false" aria-controls="MarketSetting">
                <span class="link-title">Market Setting</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="MarketSetting">
                <ul class="nav sub-menu">
                  @if(isset($adminAccess['market_settings']))
                  @if($adminAccess['market_settings'] === '0')
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link"> Market Settings</a>
                  </li>
                  @elseif($adminAccess['market_settings'] === '1' || $adminAccess['market_settings'] === '2')
                  <li class="nav-item">
                      <a href="{{route('market-settings')}}" class="nav-link">Market Settings</a>
                  </li>
                    @endif
                  @endif
                  @if(isset($adminAccess['declare_market']))
                    @if($adminAccess['declare_market'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link">Declare Market</a>
                    </li>
                    @elseif($adminAccess['declare_market'] === '1' || $adminAccess['declare_market'] === '2')
                    <li class="nav-item">
                        <a href="{{route('declare-market')}}" class="nav-link">Declare Market</a>
                    </li>
                    @endif
                  @endif
                  @if(isset($adminAccess['match_lock']))
                    @if($adminAccess['match_lock'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link"> Match Lock</a>
                    </li>
                    @elseif($adminAccess['match_lock'] === '1' || $adminAccess['match_lock'] === '2')
                    <li class="nav-item">
                        <a href="{{route('matchlock')}}" class="nav-link">Match Lock</a>
                    </li>
                    @endif
                  @endif
                  @if(isset($adminAccess['market_rollback']))
                    @if($adminAccess['market_rollback'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link"> Market Rollback</a>
                    </li>
                    @elseif($adminAccess['market_rollback'] === '1' || $adminAccess['market_rollback'] === '2')
                    <li class="nav-item">
                        <a href="{{route('market-rollback')}}" class="nav-link">Market Rollback</a>
                    </li>
                    @endif
                  @endif
                  @if(isset($adminAccess['online_user']))
                    @if($adminAccess['online_user'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link"> Online User</a>
                    </li>
                    @elseif($adminAccess['online_user'] === '1' || $adminAccess['online_user'] === '2')
                    <li class="nav-item">
                        <a href="{{route('online-user')}}" class="nav-link">Online User</a>
                    </li>
                      @endif
                  @endif
                  @if(isset($adminAccess['delete_bet_history']))
                    @if($adminAccess['delete_bet_history'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link">Delete Bet History</a>
                    </li>
                    @elseif($adminAccess['delete_bet_history'] === '1' || $adminAccess['delete_bet_history'] === '2')
                    <li class="nav-item">
                        <a href="{{route('delete-bet-history')}}" class="nav-link">Delete Bet History</a>
                    </li>
                    @endif
                  @endif
                  @if(isset($adminAccess['global_settings']))
                    @if($adminAccess['global_settings'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link"> Global Settings </a>
                    </li>
                    @elseif($adminAccess['global_settings'] === '1' || $adminAccess['global_settings'] === '2')
                    <li class="nav-item">
                        <a href="{{route('global-settings')}}" class="nav-link">Global Settings </a>
                    </li>
                    @endif
                  @endif
                  @if(isset($adminAccess['fancy_setting']))
                    @if($adminAccess['fancy_setting'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link"> Fancy Setting </a>
                    </li>
                    @elseif($adminAccess['fancy_setting'] === '1' || $adminAccess['fancy_setting'] === '2')
                    <li class="nav-item">
                        <a href="{{route('fancy-setting')}}" class="nav-link">Fancy Setting </a>
                    </li>
                    @endif
                  @endif
                  @if(isset($adminAccess['match_setting']))
                    @if($adminAccess['match_setting'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link"> Match Setting</a>
                    </li>
                    @elseif($adminAccess['match_setting'] === '1' || $adminAccess['match_setting'] === '2')
                    <li class="nav-item">
                        <a href="{{route('match-setting')}}" class="nav-link">Match Setting</a>
                    </li>
                      @endif
                  @endif
                  @if(isset($adminAccess['match_limit']))
                    @if($adminAccess['match_limit'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link">Match Limit </a>
                    </li>
                    @elseif($adminAccess['match_limit'] === '1' || $adminAccess['match_limit'] === '2')
                    <li class="nav-item">
                        <a href="{{route('match-limit')}}" class="nav-link">Match Limit </a>
                    </li>
                    @endif
                  @endif
                  @if(isset($adminAccess['suspend_all_market']))
                    @if($adminAccess['suspend_all_market'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link"> Suspend All Market</a>
                    </li>
                    @elseif($adminAccess['suspend_all_market'] === '1' || $adminAccess['suspend_all_market'] === '2')
                    <li class="nav-item">
                        <a href="{{route('suspend-all-market')}}" class="nav-link">Suspend All Market</a>
                    </li>
                    @endif
                  @endif
                  @if(isset($adminAccess['scorecard_tv']))
                    @if($adminAccess['scorecard_tv'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link"> Score Card and TV</a>
                    </li>
                    @elseif($adminAccess['scorecard_tv'] === '1' || $adminAccess['scorecard_tv'] === '2')
                    <li class="nav-item">
                        <a href="{{route('score-card-and-tv')}}" class="nav-link">Score Card and TV</a>
                    </li>
                    @endif
                  @endif
                </ul>
              </div>
            </li>
            @endif
          @endif
          @if(isset($adminAccess['my_report']))
          @if($adminAccess['my_report'] === '0')
          @elseif($adminAccess['my_report'] === '2')
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#MyReport" role="button" aria-expanded="false" aria-controls="MyReport">
              <span class="link-title">My Report</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="MyReport">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('profitLoss-report-by-downline')}}" class="nav-link">Profit/Loss Report by Downline</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('profitLoss-report-by-market')}}" class="nav-link">Profit/Loss Report by Market</a>
                </li>
              </ul>
            </div>
          </li>
          @elseif($adminAccess['my_report'] === '1')
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#MyReport" role="button" aria-expanded="false" aria-controls="MyReport">
              <span class="link-title">My Report</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="MyReport">
              <ul class="nav sub-menu">
                @if(isset($adminAccess['profit_loss_report_downline']))
                  @if($adminAccess['profit_loss_report_downline'] === '0')
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link"> Profit/Loss Report by Downline </a>
                  </li>
                  @elseif($adminAccess['profit_loss_report_downline'] === '1' || $adminAccess['profit_loss_report_downline'] === '2')
                  <li class="nav-item">
                      <a href="{{route('profitLoss-report-by-downline')}}" class="nav-link">Profit/Loss Report by Downline </a>
                  </li>
                  @endif
                @endif
                @if(isset($adminAccess['profit_loss_report_market']))
                  @if($adminAccess['profit_loss_report_market'] === '0')
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link"> Profit/Loss Report by Market</a>
                  </li>
                  @elseif($adminAccess['profit_loss_report_market'] === '1' || $adminAccess['profit_loss_report_market'] === '2')
                  <li class="nav-item">
                      <a href="{{route('profitLoss-report-by-market')}}" class="nav-link">Profit/Loss Report by Market</a>
                  </li>
                    @endif
                @endif
              </ul>
            </div>
          </li>
          @endif
         
          @if(isset($adminAccess['admin_risk']))
            @if($adminAccess['admin_risk'] === '0')
            @elseif($adminAccess['admin_risk'] === '2')
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#Risk" role="button" aria-expanded="false" aria-controls="Risk">
                <span class="link-title">Risk</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="Risk">
                <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{route('risk-management')}}" class="nav-link">Risk Management</a>
                  </li>
                </ul>
              </div>
            </li>
            @elseif($adminAccess['admin_risk'] === '1')
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#Risk" role="button" aria-expanded="false" aria-controls="Risk">
                <span class="link-title">Risk</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="Risk">
                <ul class="nav sub-menu">
                  @if(isset($adminAccess['admin_risk_management']))
                    @if($adminAccess['admin_risk_management'] === '0')
                    <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link"> Risk Management</a>
                    </li>
                    @elseif($adminAccess['admin_risk_management'] === '1' || $adminAccess['admin_risk_management'] === '2')
                    <li class="nav-item">
                        <a href="{{route('risk-management')}}" class="nav-link">Risk Management</a>
                    </li>
                      @endif
                  @endif
                </ul>
              </div>
            </li>
            @endif
          @endif
          {{-- @if(isset($adminAccess['banking']))
            @if($adminAccess['banking'] === '0')
            @elseif($adminAccess['banking'] === '2' || $adminAccess['banking'] === '1')
            <li class="nav-item">
              <a href="{{route('cash-banking')}}" class="nav-link">
                <span class="link-title">Banking</span>
              </a>
            </li>
            @endif
          @endif --}}
          @if(isset($adminAccess['password_history']))
            @if($adminAccess['password_history'] === '0')
            @elseif($adminAccess['password_history'] === '2' || $adminAccess['password_history'] === '1')
            <li class="nav-item">
              <a href="{{route('password-history')}}" class="nav-link">
                <span class="link-title">Password History</span>
              </a>
            </li>
          @endif
          @endif
          @if(isset($adminAccess['commission']))
            @if($adminAccess['commission'] === '0')
            @elseif($adminAccess['commission'] === '2' || $adminAccess['commission'] === '1')
            <li class="nav-item">
              <a href="{{route('commission')}}" class="nav-link">
                <span class="link-title">Commission</span>
              </a>
            </li>
            @endif
          @endif
          @if(isset($adminAccess['market_analysis']))
            @if($adminAccess['market_analysis'] === '0')
            @elseif($adminAccess['market_analysis'] === '2' || $adminAccess['market_analysis'] === '1')
            <li class="nav-item">
              <a href="{{route('market-analysis')}}" class="nav-link">
                <span class="link-title">Market Analysis</span>
              </a>
            </li>
         @endif
          @endif
          @if(isset($adminAccess['void_market']))
            @if($adminAccess['void_market'] === '0')
            @elseif($adminAccess['void_market'] === '2' || $adminAccess['void_market'] === '1')
            <li class="nav-item">
              <a href="{{route('void-markets')}}" class="nav-link">
                <span class="link-title">Void markets</span>
              </a>
            </li>
            @endif
          @endif
          @if(isset($adminAccess['white_label']))
            @if($adminAccess['white_label'] === '0')
            @elseif($adminAccess['white_label'] === '2' || $adminAccess['white_label'] === '1')
            <li class="nav-item">
              <a href="{{route('white-lable')}}" class="nav-link">
                <span class="link-title">White Lable</span>
              </a>
            </li>
             @endif
          @endif

</ul>

@endif
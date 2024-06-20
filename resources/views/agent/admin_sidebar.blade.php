<ul class="nav">
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ManagementPosition" role="button" aria-expanded="false" aria-controls="ManagementPosition">
        <span class="link-title">Agency Management</span>
        <i class="link-arrow" data-feather="chevron-down"></i>
      </a>
      <div class="collapse" id="ManagementPosition">
        <ul class="nav sub-menu">
          <li class="nav-item">
         @if(Auth::guard('agent')->user()->role_id==1)
            <a href="{{route('super-master-listing')}}" class="nav-link"> Admin Listing</a>
            @elseif(Auth::guard('agent')->user()->role_id==2)
            <a href="{{route('super-master-listing')}}" class="nav-link"> Super Master Listing</a>
            @elseif((Auth::guard('agent')->user()->role_id==3))
            <a href="{{route('agent-listing')}}" class="nav-link"> Master Listing</a>
            @elseif((Auth::guard('agent')->user()->role_id==4))
            <a href="{{route('agent-listing')}}" class="nav-link"> Agent Listing</a>
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
          @if(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
          <li class="nav-item">
            <a href="{{route('notification')}}" class="nav-link">Notification</a>
          </li>
          @endif
        </ul>
      </div>
    </li>

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
           <a href="{{route('account-statement')}}" class="nav-link">Account Statement</a>
            <!-- <a href="{{route('user-statement-account-statement')}}" class="nav-link">Statement</a> -->
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

   @if(Auth::guard('agent')->user()->role_id==1)
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
<!-- 
    <li class="nav-item">
      <a href="{{route('cash-banking')}}" class="nav-link">
        <span class="link-title">Banking</span>
      </a>
    </li> -->

    <li class="nav-item">
      <a href="{{route('password-history')}}" class="nav-link">
        <span class="link-title">Password History</span>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{route('commission')}}" class="nav-link">
        <span class="link-title">Commission</span>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{route('market-analysis')}}" class="nav-link">
        <span class="link-title">Market Analysis</span>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{route('void-markets')}}" class="nav-link">
        <span class="link-title">Void markets</span>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{route('white-lable')}}" class="nav-link">
        <span class="link-title">White Lable</span>
      </a>
    </li>

   
</ul>
@endif
<app-topnav>
    <div class="topbar">
        <div class="container-fluid">
              @if(Session::has('message'))
              <p class="alert alert-success">{{ Session::get('message') }}</p>
              @endif
            <div class="row">
                <div class="col-md-4 col-4 d-flex"><a class="homelogo" href="{{route('client-home')}}"><i class="fa fa-home"></i><img _ngcontent-wcx-c72="" class="logo-login" src="{{asset('/')}}assets/logologin.png"><!----></a></div>
                <div class="col-md-8 col-8">
                    <ul class="top-right">
                        <li class="searchbar"><!----><input _ngcontent-wcx-c72="" id="SearchInput" typeaheadoptionfield="name" placeholder="All Events" autocomplete="off" class="form-control ng-untouched ng-pristine ng-valid" style="display: none;" aria-expanded="false" aria-autocomplete="list"><!----><a href="javascript:void(0)"><i class="fa fa-search-plus"></i></a></li>
                        <li class="rules-apk"><a href="javascript:void(0)"><b>Rules</b></a></li>
                        <li class="bespan"><span><sub>Balance:</sub><i class="fa fa-landmark"></i><b>@if(Auth::guard('client')->check()) {{Auth::guard('client')->user()->balance}} @endif </b></span><span _ngcontent-wcx-c72="">Exp<sub>osure</sub>: <b>0</b></span></li>
                        <li class="dropdown topright_drop">
                             <div class="btn-group"><a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle">@if(Auth::guard('client')->check()) {{Auth::guard('client')->user()->username}} @endif <i class="fa fa-caret-down"></i><i class="fa fa-chevron-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{route('account_settlement')}}"> account statement </a>
                                    <a class="dropdown-item" href="{{route('profit_loss_report')}}"> profit loss report </a>
                                    <a class="dropdown-item" href="{{route('bet_history_client')}}"> bet history </a>
                                    <a class="dropdown-item" href="{{route('withdraw.create')}}"> Withdraw </a>
                                    <a class="dropdown-item" href="{{route('deposit.create')}}"> Deposit </a>
                                    <a class="dropdown-item" href="{{route('change_pass')}}"> change password </a>
                                    <a class="dropdown-item d-sm-none d-block" href=""> rules </a>
                                    <div class="dropdown-divider"></div><a href="{{route('client-logout')}}" class="dropdown-item"> SignOut </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <marquee id="marquee_text" scrollamount="3" class="d-sm-block d-none"> </marquee>
                </div>
                <div class="col-12 d-block d-sm-none">
                    <div class="searchM"><!----><input _ngcontent-wcx-c72="" type="text" placeholder="Search Here ..." typeaheadoptionfield="name" class="input ng-untouched ng-pristine ng-valid" aria-expanded="false" aria-autocomplete="list"><!---->
                        <div class="search"><i class="fa fa-search"></i></div>
                    </div>
                    <marquee scrollamount="3" class="searchClose m-marquee"></marquee>
                </div>
            </div>
        </div>
    </div><!---->
    <div class="header-bottom">
        <div class="row mx-lg-0">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-md btco-hover-menu"><button type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span _ngcontent-wcx-c72="" class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse">
                        <ul class="list-unstyled navbar-nav">
                            <li class="nav-item active"><a routerlink="/sports/4" href="{{route('client-home')}}" class="router-link-exact-active router-link-active"><b>Home</b></a></li>
                            <li class="nav-item"><a href="{{route('client-home')}}" class="router-link-exact-active router-link-active"><b>Cricket</b></a>
                            </li>
                            <li class="nav-item"><a href="{{route('football-frontend')}}"><b>Football</b></a></li>
                            <li class="nav-item"><a href="{{route('tennis-frontend')}}"><b>Tennis</b></a></li>
                            <li class="nav-item"><a href="javascript:void(0)"><b>Election</b></a></li>
                            <li class="nav-item"><a href="{{route('client-home')}}"><b>IPL
                                        2024</b></a></li>
                            <li class="nav-item"><a href="https://allpanel.art/slot/game/lounch/9280"><b>One-Day
                                        Teenpatti</b></a></li>
                            <li class="nav-item"><a href="https://allpanel.art/slot/game/lounch/9646"><b>Roulette</b></a></li>
                            <li class="nav-item"><a href="{{route('horse')}}"><b>Horse Racing</b></a></li>
                            <li class="nav-item"><a href="{{route('greyhound')}}"><b>Greyhound Racing</b></a></li>
                            <li class="nav-item"><a href="https://allpanel.art/slot/game/lounch/9686"><b>Sicbo</b></a></li>
                            <li class="nav-item"><a href="https://allpanel.art/slot/game/lounch/9690"><b>Poker</b></a></li>
                            <li class="nav-item"><a href="https://allpanel.art/slot/game/lounch/12959"><b>Andar
                                        Bahar</b></a></li>
                            <li class="nav-item"><a href="https://allpanel.art/slot/game/lounch/9678"><b>One-Day
                                        Dragon Tiger</b></a></li><!---->
                        </ul><!---->
                    </div>
                </nav>
            </div>
        </div>
    </div><!---->
    <div bsmodal="" tabindex="-1" role="dialog" aria-labelledby="dialog-static-name" class="modal fade" aria-hidden="true" aria-modal="true" style="display: none;">
        <div class="modal-dialog modal-lg modal-lr">
            <div class="modal-content">
                <div class="modal-header"><button type="button" aria-label="Close" class="btn-close close pull-right"><i class="fa fa-close-thick"></i></button></div>
                <div class="modal-body">
                    <div style="box-shadow: 0px 0px 5px; padding: 10px;">
                        <h2>Dear Client,</h2>
                        <h5 class="mb-1">You are requested to login with our official site <a href="javascript:void(0)">'cricket247buzz.com'</a><!----> only. Please check
                            the site name before you login. </h5>
                        <h5 class="mb-1">Thanks for your support.</h5>
                        <h5 class="mb-1">Team cricket247buzz</h5><!---->
                    </div>
                    <div class="mt-5 font-hindi" style="box-shadow: 0px 0px 5px; padding: 10px;">
                        <h2>प्रिय ग्राहक,</h2>
                        <h5 class="mb-1">आपसे अनुरोध है कि केवल हमारी आधिकारिक साइट <a href="javascript:void(0)">'cricket247buzz.com'</a><!----> से लॉगिन करें।
                            लॉगइन करने से पहले साइट का नाम जरूर देख लें।</h5>
                        <h5 class="mb-1">आपके समर्थन के लिए धन्यवाद।</h5>
                        <h5 class="mb-1">टीम cricket247buzz</h5><!---->
                    </div>
                    <div class="text-right mt-3"><button class="btn btn-primary" style="min-width: 100px;">OK</button></div>
                </div>
            </div>
        </div>
    </div><!---->
</app-topnav>
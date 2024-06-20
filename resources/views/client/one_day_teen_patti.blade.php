@extends('web_layout.app')
@section('style')
<style>
    /* Style Goes Here */

    /* Style Goes Here */
</style>
@endsection
@section('content')
<div class="col-md-10 pxxs-0"><router-outlet
    ></router-outlet><app-live-teenpatti>
        <div class="both-section">
            <div class="casino-center"><app-mobile-tab-header
                >
                    <div id="element" class="casino-container ds-block-mobile">
                        <div class="listing_screen casino-tabs-om">
                            <tabset class="tab-container">
                                <ul role="tablist" class="nav nav-tabs" aria-label="Tabs">
                                    <li class="active nav-item"><a
                                            href="javascript:void(0);" role="tab" class="nav-link active"
                                            aria-controls="" aria-selected="true" id=""><span
                                            >GAME</span><!----><!----></a></li>
                                    <li class="nav-item"><a
                                            href="javascript:void(0);" role="tab" class="nav-link" aria-controls=""
                                            aria-selected="false" id=""><span></span> PLACED
                                            BETS(0) <!----><!----></a></li>
                                    <li class="nav-item"><a
                                            href="javascript:void(0);" role="tab" class="nav-link" aria-controls=""
                                            aria-selected="false" id=""><span></span>
                                            <div class="float-right text-right round pr-2"><a
                                                 href="javasript:void(0)" role="button"
                                                    class="ml-1">Rules</a><span class="d-block">
                                                    Round ID: <span>71474617</span></span></div>
                                            <!----><!---->
                                        </a></li><!---->
                                </ul>
                                <div class="tab-content">
                                    <tab heading="GAME" role="tabpanel" aria-labelledby=""
                                        class="tab-pane active"></tab>
                                    <tab role="tabpanel" aria-labelledby="" class="tab-pane">
                                        <!----><app-my-bets-casino _nghost-vlm-c94="">
                                            <div class="bets-section">
                                                <h2>My Bet</h2>
                                                <div class="p-1">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <td>Matched Bet </td>
                                                                <td>Odds</td>
                                                                <td>Stake</td>
                                                            </tr>
                                                        </thead><!---->
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="3"
                                                                    class="text-center"> No records Found</td>
                                                            </tr>
                                                        </tbody><!---->
                                                    </table>
                                                </div>
                                            </div>
                                        </app-my-bets-casino></tab>
                                    <tab role="tabpanel" aria-labelledby="" class="tab-pane">
                                        <!----></tab>
                                </div>
                            </tabset>
                        </div>
                    </div>
                    <div bsmodal="" tabindex="-1" role="dialog"
                        aria-labelledby="dialog-static-name" class="modal fade">
                        <div class="modal-dialog modal-lr casino-rules-modal">
                            <div class="modal-content">
                                <div class="modal-header border-0">
                                    <h4 id="dialog-static-name" class="modal-title pull-left">
                                        Rules</h4><button type="button" aria-label="Close"
                                        class="btn-close close pull-right"><i
                                            class="mdi mdi-close-thick"></i></button>
                                </div>
                                <div class="modal-body">
                                    <accordion role="tablist" class="panel-group"
                                        style="display: block;" aria-multiselectable="false"><!----></accordion>
                                </div>
                            </div>
                        </div>
                    </div><!---->
                </app-mobile-tab-header>
                <div id="element" class="casino-container">
                    <div class="casino-table">
                        <div class="casino-video">
                            <div class="casino-video-title"><span
                                    class="casino-name">1 Day Teenpatti <small><a
                                        
                                            href="javascript:void(0)">rules</a></small></span><span
                                 class="casino-video-rid">Round ID: 71474617 <span
                                     class="c-min-max-head"> | Min: 100 | Max:
                                        200000</span><!----></span></div>
                            <div class="video-box-container">
                                <div id="video-box" class="video-box" style="height: 411.75px;">
                                    <iframe allowfullscreen="" title="liveTranslation"
                                        id="c-iframe"
                                        src="https://video.fawk.app/#/stream/exchange-games/56767?token=eyJpZCI6IjE3MTYyMTA5MTIiLCJpcCI6IjE1NC41Ny4yMTcuMSIsInhpZCI6IjBhMGQ2ZDE3LWJiZDAtNGE0NS1iOGIwLWM5NThkMzUyN2Q2NCIsInRva2VuIjoiNGVyUGppQjlTQ2pzdU52QjRsdC9aQ1hhQWZDU3F0SEMyMlBCalZuU2NRY2pWTS9oYTY0SDZGbk0ycGZia0FScXNRZE1FTVVYZ0IyUUs0OUtDdDdZTXc9PSJ9"
                                        style="height: 411.75px;"></iframe></div>
                            </div>
                            <div class="casino-video-cards hide-cards">
                                <div class="casino-cards-shuffle"> || </div>
                                <div class="casino-video-cards-container">
                                    <div><span><img
                                                class="v-card" src="/assets/img/cards/1.png"></span><span
                                        ><img class="v-card"
                                                src="/assets/img/cards/1.png"></span><span><img
                                             class="v-card"
                                                src="/assets/img/cards/1.png"></span><!----></div>
                                    <div><span><img
                                                class="v-card" src="/assets/img/cards/1.png"></span><span
                                        ><img class="v-card"
                                                src="/assets/img/cards/1.png"></span><span><img
                                             class="v-card"
                                                src="/assets/img/cards/1.png"></span><!----></div><!---->
                                </div>
                            </div><!---->
                            <div class="casino-timer d-none-mobile">
                                <div class="base-timer"><svg
                                        viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"
                                        class="base-timer__svg">
                                        <g class="base-timer__circle">
                                            <circle cx="50" cy="50" r="45"
                                                class="base-timer__path-elapsed"></circle>
                                            <path stroke-dasharray="225 283"
                                                d="M 50, 50 m -45, 0 a 45,45 0 1,0 90,0 a 45,45 0 1,0 -90,0"
                                                class="base-timer__path-remaining green"></path>
                                        </g>
                                    </svg><span class="base-timer__label green"><span
                                        >26</span></span></div>
                            </div><!---->
                        </div>
                        <div class="casino-detail">
                            <div class="casino-section">
                                <p class="cs_title">Match odds:</p>
                                <div class="casinobetplace">
                                    <div class="casino_odds">
                                        <div class="row">
                                            <div class="col-md-7 col-5">
                                                <div class="c-min-max">Min:100 Max:200000</div>
                                                <!---->
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="btn-group c_odds_title"><button
                                                     class="back">back</button><button
                                                     class="lay">lay</button></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 col-5 pl-2"><span
                                                >Player A</span>
                                                <div class="down-text"><b
                                                    ></b></div>
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="btn-group c_odds_value"><button
                                                     class="back"><span
                                                        >1.98 <span
                                                            >200000</span></span><!----><!----></button><button
                                                     class="lay"><!----><span
                                                        >-</span><!----></button><!----></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 col-5 pl-2"><span
                                                >Player B</span>
                                                <div class="down-text"><b
                                                    ></b></div>
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="btn-group c_odds_value"><button
                                                     class="back"><span
                                                        >1.98 <span
                                                            >200000</span></span><!----><!----></button><button
                                                     class="lay"><!----><span
                                                        >-</span><!----></button><!----></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div><!---->
                                    </div>
                                </div>
                            </div>
                            <div class="casino-section">
                                <p class="cs_title">Pair Plus:</p>
                                <div class="casinobetplace">
                                    <div class="casino_odds">
                                        <div class="row">
                                            <div class="col-md-7 col-5">
                                                <div class="c-min-max">Min:100 Max:10000</div>
                                                <!---->
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="btn-group c_odds_title"><button
                                                     class="back">back</button><button
                                                     class="lay">lay</button></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 col-5 pl-2"><span
                                                >Player A+</span>
                                                <div class="down-text"><b
                                                    ></b></div>
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="btn-group c_odds_value"><button
                                                     class="back"><span>2
                                                            <span
                                                            >10000</span></span><!----><!----></button><button
                                                     class="lay"><!----><span
                                                        >-</span><!----></button><!----></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 col-5 pl-2"><span
                                                >Player B+</span>
                                                <div class="down-text"><b
                                                    ></b></div>
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="btn-group c_odds_value"><button
                                                     class="back"><span>2
                                                            <span
                                                            >10000</span></span><!----><!----></button><button
                                                     class="lay"><!----><span
                                                        >-</span><!----></button><!----></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div><!---->
                                    </div>
                                </div>
                            </div>
                            <div class="casino-section">
                                <p class="cs_title">combo:</p>
                                <div class="casinobetplace">
                                    <div class="casino_odds">
                                        <div class="row">
                                            <div class="col-md-7 col-5"><!----></div>
                                            <div class="col-md-5 col-7">
                                                <div class="btn-group c_odds_title"><button
                                                     class="back">back</button><button
                                                     class="lay">lay</button></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 col-5 pl-2"><span
                                                >combo</span>
                                                <div class="down-text"><b
                                                    ></b></div>
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="btn-group c_odds_value"><button
                                                     class="back"><!----><span
                                                        >-</span><!----></button><button
                                                     class="lay"><!----><span
                                                        >-</span><!----></button><!----></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div><!---->
                                    </div>
                                </div>
                            </div><!---->
                        </div>
                        <div class="casino-lastResult">
                            <h2>Last Results </h2>
                            <div class="clr-sec"><span
                                    class="resultText playerb">B</span><span
                                    class="resultText playera">A</span><span
                                    class="resultText playera">A</span><span
                                    class="resultText playera">A</span><span
                                    class="resultText playerb">B</span><span
                                    class="resultText playerb">B</span><span
                                    class="resultText playera">A</span><span
                                    class="resultText playera">A</span><span
                                    class="resultText playerb">B</span><!----></div>
                        </div><!---->
                    </div>
                </div>
            </div>
            <div id="right-sidebar-id" class="right-sidebar casino-right-sidebar teen2sidebar">
                <app-bet-slip-casino _nghost-vlm-c96="">
                    <div class="bets-section" style="position: relative;">
                        <h2>Place Bet</h2>
                        <div class="back">
                            <div class="row align-items-center mx-0">
                                <div class="col"> (Bet for) </div>
                                <div class="col"> Odds </div>
                                <div class="col"> Stake </div>
                            </div><!---->
                            <div
                                class="row align-items-center mx-0 border-top border-bottom border-light py-1">
                                <div class="col text-left"><i
                                        class="fa fa-close text-danger"></i> Player A </div>
                                <div class="col"><input type="text"
                                        readonly="true" class="form-control ng-untouched ng-pristine ng-valid"><a
                                     href="javascript:void(0)" class="arrow-up"><i
                                         class="fa fa-angle-up"></i></a><a
                                     href="javascript:void(0)" class="arrow-down"><i
                                         class="fa fa-angle-down"></i></a></div><!---->
                                <div class="col"><input type="number"
                                        placeholder="Amount" class="form-control ng-untouched ng-pristine ng-valid">
                                </div>
                            </div><!----><!----><!---->
                            <div class="stakes">
                                <div class="btn-group"><button
                                        type="button">100</button><button
                                        type="button">500</button><button
                                        type="button">1000</button><button
                                        type="button">5000</button><button
                                        type="button">10000</button><button
                                        type="button">25000</button><!----></div>
                            </div><!---->
                            <div class="row">
                                <div class="col"><button
                                        class="btn cancel-btn">reset</button></div>
                                <div class="col"><button
                                        class="btn betplace-btn" disabled="">submit</button><!----></div>
                            </div>
                        </div><!----><!---->
                    </div>
                </app-bet-slip-casino><app-my-bets-casino _nghost-vlm-c94="">
                    <div class="bets-section">
                        <h2>My Bet</h2>
                        <div class="p-1">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>Matched Bet </td>
                                        <td>Odds</td>
                                        <td>Stake</td>
                                    </tr>
                                </thead><!---->
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="text-center"> No records Found</td>
                                    </tr>
                                </tbody><!---->
                            </table>
                        </div>
                    </div>
                </app-my-bets-casino></div>
        </div><!---->
        <div bsmodal="" tabindex="-1" role="dialog" aria-labelledby="dialog-child-name"
            class="modal fade">
            <div class="modal-dialog modal-sm inner-modal">
                <div class="modal-content">
                    <div class="modal-header py-1 mobileBetplaceHeader">
                        <h4 id="dialog-child-name" class="modal-title pull-left">place bet</h4>
                        <button type="button" aria-label="Close" class="close pull-right"><span
                             aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body p-0"><app-bet-slip-casino
                            _nghost-vlm-c96="">
                            <div class="bets-section" style="position: relative;">
                                <h2>Place Bet</h2>
                                <div class="back">
                                    <div class="row align-items-center mx-0">
                                        <div class="col"> (Bet for) </div>
                                        <div class="col"> Odds </div>
                                        <div class="col"> Stake </div>
                                    </div><!---->
                                    <div
                                        class="row align-items-center mx-0 border-top border-bottom border-light py-1">
                                        <div class="col text-left"><i
                                                class="fa fa-close text-danger"></i> Player A </div>
                                        <div class="col"><input type="text"
                                                readonly="true"
                                                class="form-control ng-untouched ng-pristine ng-valid"><a
                                             href="javascript:void(0)" class="arrow-up"><i
                                                 class="fa fa-angle-up"></i></a><a
                                             href="javascript:void(0)" class="arrow-down"><i
                                                 class="fa fa-angle-down"></i></a></div><!---->
                                        <div class="col"><input
                                                type="number" placeholder="Amount"
                                                class="form-control ng-untouched ng-pristine ng-valid"></div>
                                    </div><!----><!----><!---->
                                    <div class="stakes">
                                        <div class="btn-group"><button
                                                type="button">100</button><button
                                                type="button">500</button><button
                                                type="button">1000</button><button
                                                type="button">5000</button><button
                                                type="button">10000</button><button
                                                type="button">25000</button><!----></div>
                                    </div><!---->
                                    <div class="row">
                                        <div class="col"><button
                                                class="btn cancel-btn">reset</button></div>
                                        <div class="col"><button
                                                class="btn betplace-btn" disabled="">submit</button><!----></div>
                                    </div>
                                </div><!----><!---->
                            </div>
                        </app-bet-slip-casino></div>
                </div>
            </div>
        </div><!---->
    </app-live-teenpatti><!----></div>

@endsection
@section('script')
<script>
    /* Script Goes Here */

    /* Script Goes Here */
</script>
@endsection
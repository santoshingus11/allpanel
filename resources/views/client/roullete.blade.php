@extends('web_layout.app')
@section('style')
<style>
    /* Style Goes Here */

    /* Style Goes Here */
</style>
@endsection
@section('content')

<div class="col-md-10 pxxs-0"><router-outlet></router-outlet><app-roulette _nghost-vlm-c107="">
        <div class="both-section">
            <div class="casino-center"><app-mobile-tab-header>
                    <div id="element" class="casino-container ds-block-mobile">
                        <div class="listing_screen casino-tabs-om">
                            <tabset class="tab-container">
                                <ul role="tablist" class="nav nav-tabs" aria-label="Tabs">
                                    <li class="active nav-item"><a href="javascript:void(0);" role="tab"
                                            class="nav-link active" aria-controls="" aria-selected="true"
                                            id=""><span>GAME</span><!----><!----></a></li>
                                    <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link"
                                            aria-controls="" aria-selected="false" id=""><span></span> PLACED
                                            BETS(0) <!----><!----></a></li>
                                    <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link"
                                            aria-controls="" aria-selected="false" id=""><span></span>
                                            <div class="float-right text-right round pr-2"><a href="javasript:void(0)"
                                                    role="button" class="ml-1">Rules</a><span class="d-block">
                                                    Round ID: <span>71474995</span></span></div>
                                            <!----><!---->
                                        </a></li><!---->
                                </ul>
                                <div class="tab-content">
                                    <tab heading="GAME" role="tabpanel" aria-labelledby="" class="tab-pane active">
                                    </tab>
                                    <tab role="tabpanel" aria-labelledby="" class="tab-pane">
                                        <!----><app-my-bets-casino>
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
                                                                <td colspan="3" class="text-center"> No records Found
                                                                </td>
                                                            </tr>
                                                        </tbody><!---->
                                                    </table>
                                                </div>
                                            </div>
                                        </app-my-bets-casino>
                                    </tab>
                                    <tab role="tabpanel" aria-labelledby="" class="tab-pane">
                                        <!---->
                                    </tab>
                                </div>
                            </tabset>
                        </div>
                    </div>
                    <div bsmodal="" tabindex="-1" role="dialog" aria-labelledby="dialog-static-name" class="modal fade">
                        <div class="modal-dialog modal-lr casino-rules-modal">
                            <div class="modal-content">
                                <div class="modal-header border-0">
                                    <h4 id="dialog-static-name" class="modal-title pull-left">
                                        Rules</h4><button type="button" aria-label="Close"
                                        class="btn-close close pull-right"><i class="mdi mdi-close-thick"></i></button>
                                </div>
                                <div class="modal-body">
                                    <accordion role="tablist" class="panel-group" style="display: block;"
                                        aria-multiselectable="false"><!----></accordion>
                                </div>
                            </div>
                        </div>
                    </div><!---->
                </app-mobile-tab-header>
                <div id="element" class="casino-container">
                    <div class="casino-table teenpatti2024">
                        <div class="casino-video">
                            <div class="casino-video-title"><span class="casino-name">Roulette <small><a
                                            href="javascript:void(0)">rules</a></small></span><span
                                    class="casino-video-rid">Round ID: 71474995 <!----></span>
                            </div>
                            <div class="video-box-container">
                                <div id="video-box" class="video-box" style="height: 411.75px;">
                                    <iframe allowfullscreen="" title="liveTranslation" id="c-iframe"
                                        src="https://stream.fawk.app/#/sevens/stream/98788?token=eyJpZCI6IjE3MTYyMTEyMTgiLCJpcCI6IjE1NC41Ny4yMTcuMSIsInhpZCI6IjYwZDI5MDU5LWVhNzYtNDRlMi05YzI0LTlmODkzYzI4YjY2YyIsInRva2VuIjoiSHlZZ3dCUWxRWU8rRnVSNjFlUmRlbUs5QW9FY0g2dWdxRUlqT05BaTMyam9jeEZFMnlsSm11NHo2MGlZT29pVkpaOVY0TTZnRWZ2MDV2M1hPT01jMFE9PSJ9"
                                        style="height: 411.75px;"></iframe>
                                </div>
                            </div>
                            <div class="casino-timer d-none-mobile">
                                <div class="base-timer"><svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"
                                        class="base-timer__svg">
                                        <g class="base-timer__circle">
                                            <circle cx="50" cy="50" r="45" class="base-timer__path-elapsed"></circle>
                                            <path stroke-dasharray="225 283"
                                                d="M 50, 50 m -45, 0 a 45,45 0 1,0 90,0 a 45,45 0 1,0 -90,0"
                                                class="base-timer__path-remaining green"></path>
                                        </g>
                                    </svg><span class="base-timer__label orange"><span>7</span></span></div>
                            </div><!---->
                            <div class="roulette-block"><!----></div>
                        </div>
                        <div class="roulette-table">
                            <div class="roulette-table__body">
                                <div class="roulette-table__body-tr zero-column">
                                    <div class="roulette-table__body-cell zero-cell"><span
                                            class="roulette-table__body-num">0</span><!----><!----></div>
                                </div>
                                <div class="roulette-table__body-tr column-nums column-1-12">
                                    <div class="roulette-table__body-td num-cell-wrapper">
                                        <div class="roulette-table__body-td-inner-wrapper num-cell-inner-wrapper">
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">3</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">6</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">9</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">12</span><!----><!----></div>
                                        </div>
                                        <div class="roulette-table__body-td-inner-wrapper num-cell-inner-wrapper">
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">2</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">5</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">8</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">11</span><!----><!----></div>
                                        </div>
                                        <div class="roulette-table__body-td-inner-wrapper num-cell-inner-wrapper">
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">1</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">4</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">7</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">10</span><!----><!----></div>
                                        </div>
                                    </div>
                                    <div class="roulette-table__body-td multiple-bid-wrapper">
                                        <div class="roulette-table__body-td-inner-wrapper inner-wrapper-1-12">
                                            <div class="roulette-table__body-cell multiple-cell">
                                                <span class="roulette-table__body-num">1<sup>st</sup>
                                                    12</span><!----><!---->
                                            </div>
                                        </div>
                                        <div class="roulette-table__body-td-inner-wrapper inner-wrapper-1-18-even">
                                            <div class="roulette-table__body-cell multiple-cell">
                                                <span class="roulette-table__body-num">1-18</span><!----><!---->
                                            </div>
                                            <div class="roulette-table__body-cell multiple-cell">
                                                <span class="roulette-table__body-num">EVEN</span><!----><!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roulette-table__body-tr column-nums column-2-12">
                                    <div class="roulette-table__body-td num-cell-wrapper">
                                        <div class="roulette-table__body-td-inner-wrapper num-cell-inner-wrapper">
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">15</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">18</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">21</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">24</span><!----><!----></div>
                                        </div>
                                        <div class="roulette-table__body-td-inner-wrapper num-cell-inner-wrapper">
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">14</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">17</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">20</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">23</span><!----><!----></div>
                                        </div>
                                        <div class="roulette-table__body-td-inner-wrapper num-cell-inner-wrapper">
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">13</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">16</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">19</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">22</span><!----><!----></div>
                                        </div>
                                    </div>
                                    <div class="roulette-table__body-td multiple-bid-wrapper">
                                        <div class="roulette-table__body-td-inner-wrapper inner-wrapper-2-12">
                                            <div class="roulette-table__body-cell multiple-cell">
                                                <span class="roulette-table__body-num">2<sup>st</sup>
                                                    12</span><!----><!---->
                                            </div>
                                        </div>
                                        <div class="roulette-table__body-td-inner-wrapper inner-wrapper-red-black">
                                            <div class="roulette-table__body-cell multiple-cell rectangle-icon-wrapper">
                                                <img src="/assets/img/red-rectangle.svg" alt=""
                                                    class="roulette-table__body-color-rectangle red-rectangle"><!----><!---->
                                            </div>
                                            <div class="roulette-table__body-cell multiple-cell rectangle-icon-wrapper">
                                                <img src="/assets/img/black-rectangle.svg" alt=""
                                                    class="roulette-table__body-color-rectangle black-rectangle"><!----><!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roulette-table__body-tr column-nums column-3-12">
                                    <div class="roulette-table__body-td num-cell-wrapper">
                                        <div class="roulette-table__body-td-inner-wrapper num-cell-inner-wrapper">
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">27</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">30</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">33</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">36</span><!----><!----></div>
                                        </div>
                                        <div class="roulette-table__body-td-inner-wrapper num-cell-inner-wrapper">
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">26</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">29</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">32</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">35</span><!----><!----></div>
                                        </div>
                                        <div class="roulette-table__body-td-inner-wrapper num-cell-inner-wrapper">
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">25</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">28</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell black-num"><span
                                                    class="roulette-table__body-num">31</span><!----><!----></div>
                                            <div class="roulette-table__body-cell num-cell red-num"><span
                                                    class="roulette-table__body-num">34</span><!----><!----></div>
                                        </div>
                                    </div>
                                    <div class="roulette-table__body-td multiple-bid-wrapper">
                                        <div class="roulette-table__body-td-inner-wrapper inner-wrapper-3-12">
                                            <div class="roulette-table__body-cell multiple-cell">
                                                <span class="roulette-table__body-num">3<sup>st</sup>
                                                    12</span><!----><!---->
                                            </div>
                                        </div>
                                        <div class="roulette-table__body-td-inner-wrapper inner-wrapper-odd-19-36">
                                            <div class="roulette-table__body-cell multiple-cell">
                                                <span class="roulette-table__body-num">ODD</span><!----><!---->
                                            </div>
                                            <div class="roulette-table__body-cell multiple-cell">
                                                <span class="roulette-table__body-num">19-36</span><!----><!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roulette-table__body-tr column-2to1">
                                    <div class="roulette-table__body-td multiple-bid-wrapper wrapper-2to1">
                                        <div class="roulette-table__body-cell multiple-cell">
                                            <span class="roulette-table__body-num">2<sup>to</sup> 1</span><!----><!---->
                                        </div>
                                        <div class="roulette-table__body-cell multiple-cell">
                                            <span class="roulette-table__body-num">2<sup>to</sup> 1</span><!----><!---->
                                        </div>
                                        <div class="roulette-table__body-cell multiple-cell">
                                            <span class="roulette-table__body-num">2<sup>to</sup> 1</span><!----><!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="right-sidebar-id" class="right-sidebar casino-right-sidebar teen2sidebar">
                <div class="casino-lastResult rules-t20">
                    <h2>Last Results </h2>
                    <div class="clr-sec"><span class="resultText Black">2</span><span
                            class="resultText Red">34</span><span class="resultText Red">18</span><span
                            class="resultText Black">11</span><span class="resultText Red">34</span><span
                            class="resultText Red">9</span><span class="resultText Black">6</span><span
                            class="resultText Black">35</span><span class="resultText Red">19</span><!----></div>
                </div><!----><app-bet-slip-casino _nghost-vlm-c96="">
                    <div class="bets-section" style="position: relative;">
                        <h2>Place Bet</h2>
                        <div class="back">
                            <div class="row align-items-center mx-0">
                                <div class="col"> (Bet for) </div>
                                <div class="col"> Odds </div>
                                <div class="col"> Stake </div>
                            </div><!---->
                            <div class="row align-items-center mx-0 border-top border-bottom border-light py-1">
                                <div class="col text-left"><i class="fa fa-close text-danger"></i> 27 </div>
                                <div class="col"><input type="text" readonly="true"
                                        class="form-control ng-untouched ng-pristine ng-valid"><a
                                        href="javascript:void(0)" class="arrow-up"><i class="fa fa-angle-up"></i></a><a
                                        href="javascript:void(0)" class="arrow-down"><i
                                            class="fa fa-angle-down"></i></a></div><!---->
                                <div class="col"><input type="number" placeholder="Amount"
                                        class="form-control ng-untouched ng-pristine ng-valid">
                                </div>
                            </div><!----><!----><!---->
                            <div class="stakes">
                                <div class="btn-group"><button type="button">100</button><button
                                        type="button">500</button><button type="button">1000</button><button
                                        type="button">5000</button><button type="button">10000</button><button
                                        type="button">25000</button><!----></div>
                            </div><!---->
                            <div class="row">
                                <div class="col"><button class="btn cancel-btn">reset</button></div>
                                <div class="col"><button class="btn betplace-btn" disabled="">submit</button><!---->
                                </div>
                            </div>
                        </div><!----><!---->
                    </div>
                </app-bet-slip-casino><app-my-bets-casino>
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
                </app-my-bets-casino>
            </div>
        </div><!---->
        <div bsmodal="" tabindex="-1" role="dialog" aria-labelledby="dialog-child-name" class="modal fade">
            <div class="modal-dialog modal-sm inner-modal">
                <div class="modal-content">
                    <div class="modal-header py-1 mobileBetplaceHeader">
                        <h4 id="dialog-child-name" class="modal-title pull-left">place bet</h4>
                        <button type="button" aria-label="Close" class="close pull-right"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body p-0"><app-bet-slip-casino _nghost-vlm-c96="">
                            <div class="bets-section" style="position: relative;">
                                <h2>Place Bet</h2>
                                <div class="back">
                                    <div class="row align-items-center mx-0">
                                        <div class="col"> (Bet for) </div>
                                        <div class="col"> Odds </div>
                                        <div class="col"> Stake </div>
                                    </div><!---->
                                    <div class="row align-items-center mx-0 border-top border-bottom border-light py-1">
                                        <div class="col text-left"><i class="fa fa-close text-danger"></i> 27 </div>
                                        <div class="col"><input type="text" readonly="true"
                                                class="form-control ng-untouched ng-pristine ng-valid"><a
                                                href="javascript:void(0)" class="arrow-up"><i
                                                    class="fa fa-angle-up"></i></a><a href="javascript:void(0)"
                                                class="arrow-down"><i class="fa fa-angle-down"></i></a></div><!---->
                                        <div class="col"><input type="number" placeholder="Amount"
                                                class="form-control ng-untouched ng-pristine ng-valid"></div>
                                    </div><!----><!----><!---->
                                    <div class="stakes">
                                        <div class="btn-group"><button type="button">100</button><button
                                                type="button">500</button><button type="button">1000</button><button
                                                type="button">5000</button><button type="button">10000</button><button
                                                type="button">25000</button><!----></div>
                                    </div><!---->
                                    <div class="row">
                                        <div class="col"><button class="btn cancel-btn">reset</button></div>
                                        <div class="col"><button class="btn betplace-btn"
                                                disabled="">submit</button><!----></div>
                                    </div>
                                </div><!----><!---->
                            </div>
                        </app-bet-slip-casino></div>
                </div>
            </div>
        </div><!---->
    </app-roulette><!----></div>

@endsection
@section('script')
<script>
    /* Script Goes Here */

    /* Script Goes Here */
</script>
@endsection
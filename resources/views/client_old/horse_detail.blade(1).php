@extends('web_layout.app')
@section('style')

@endsection
@section('content')
<div class="col-md-10 pxxs-0"><router-outlet></router-outlet><app-sport-detail>
        <div class="wrapper-inner detail_screen">
            <div>
                <div class="row">
                    <div class="col-md-8 mobile-sec ds-block-mobile listing_screen">
                        <tabset class="odds_matched_tv tab-container">
                            <ul role="tablist" class="nav nav-tabs" aria-label="Tabs">
                                <li class="active nav-item"><a href="javascript:void(0);" role="tab" class="nav-link active" aria-controls="" aria-selected="true" id=""><span>ODDS</span><!----><!----></a></li>
                                <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span> MATCHED BET(0) <!----><!----></a></li><!---->
                            </ul>
                            <div class="tab-content">
                                <tab heading="ODDS" role="tabpanel" aria-labelledby="" class="tab-pane active"></tab>
                                <tab role="tabpanel" aria-labelledby="" class="tab-pane"><!----><app-my-bets>
                                        <div class="bets-section">
                                            <h2 class="ds-none-mobile">My Bet</h2>
                                            <div>
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
                                    </app-my-bets></tab>
                            </div>
                        </tabset><!---->
                    </div>
                    <div class="col-md-8">
                        <h2 class="event-title">Finger Lakes (US) 05/20/2024 10:44:00 AM </h2>
                        <div id="scoreCard" class="multi-collapse">
                            <div class="col-12 px-0"><app-score-card><!----></app-score-card></div>
                        </div><!---->
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <h4 class="panel-title"> R2 6f Mdn <!----><!----></h4>
                                    <div class="body-odds th-bl">
                                        <div class="events_odds">&nbsp;&nbsp;</div>
                                        <div class="odds_bhav">
                                            <div class="back_oddsbox bhav_box">Back</div>
                                            <div class="Lay_oddsbox bhav_box">Lay</div>
                                        </div>
                                    </div>
                                    <div class="randerScore mainScore">
                                        <div class="odds_rows horse-detail">
                                            <div class="events_odds">
                                                <div placement="right" class="event-names">
                                                    <div class="custom-control custom-checkbox country-name"><input type="checkbox" class="custom-control-input" id="horceCheck0" name="horceCheck0"><label class="custom-control-label" for="horceCheck0">
                                                            <div><img src="https://content-cache.cdnbf.net/feeds_images/Horses/SilkColours/saddle_1.gif"></div><!---->
                                                            <div><span>Go Grad</span>
                                                                <div class="d-none-desktop w-100 text-right"></div><span class="jockey-detail d-none-mobile"><span class="horse-attr"><b>Jockey:</b> Emanuel De Diego</span><span class="horse-attr"><b>Trainer:</b> Ralph D'Alessandro</span><span class="horse-attr"><b>Age:</b>3</span></span>
                                                            </div>
                                                        </label></div>
                                                    <div><!----><!----></div>
                                                </div><!----><!---->
                                            </div>
                                            <div class="odds_bhav">
                                                <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">5</strong>
                                                    <div class="size"><span class="ng-binding"> 3.83 </span></div>
                                                </div>
                                                <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">5.4</strong>
                                                    <div class="size"><span class="ng-binding"> 7.03 </span></div>
                                                </div><!----><!---->
                                            </div>
                                        </div>
                                        <div class="d-none-desktop horse-detail"><span class="jockey-detail"><span class="horse-attr"><b>Jockey:</b> Emanuel De Diego</span><span class="horse-attr"><b>Trainer:</b> Ralph D'Alessandro</span><span class="horse-attr"><b>Age:</b>3</span></span></div><!---->
                                    </div>
                                    <div class="randerScore mainScore">
                                        <div class="odds_rows horse-detail">
                                            <div class="events_odds">
                                                <div placement="right" class="event-names">
                                                    <div class="custom-control custom-checkbox country-name"><input type="checkbox" class="custom-control-input" id="horceCheck1" name="horceCheck1"><label class="custom-control-label" for="horceCheck1">
                                                            <div><img src="https://content-cache.cdnbf.net/feeds_images/Horses/SilkColours/saddle_2.gif"></div><!---->
                                                            <div><span>Thewipersonthebus</span>
                                                                <div class="d-none-desktop w-100 text-right"></div><span class="jockey-detail d-none-mobile"><span class="horse-attr"><b>Jockey:</b> Jacqueline A. Davis</span><span class="horse-attr"><b>Trainer:</b> Rachel Sells</span><span class="horse-attr"><b>Age:</b>4</span></span>
                                                            </div>
                                                        </label></div>
                                                    <div><!----><!----></div>
                                                </div><!----><!---->
                                            </div>
                                            <div class="odds_bhav">
                                                <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">-</strong>
                                                    <div class="size"><span class="ng-binding"> - </span></div>
                                                </div>
                                                <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">-</strong>
                                                    <div class="size"><span class="ng-binding"> - </span></div>
                                                </div>
                                                <div class="suspendedMessage"> REMOVED</div><!----><!---->
                                            </div>
                                        </div>
                                        <div class="d-none-desktop horse-detail"><span class="jockey-detail"><span class="horse-attr"><b>Jockey:</b> Jacqueline A. Davis</span><span class="horse-attr"><b>Trainer:</b> Rachel Sells</span><span class="horse-attr"><b>Age:</b>4</span></span></div><!---->
                                    </div>
                                    <div class="randerScore mainScore">
                                        <div class="odds_rows horse-detail">
                                            <div class="events_odds">
                                                <div placement="right" class="event-names">
                                                    <div class="custom-control custom-checkbox country-name"><input type="checkbox" class="custom-control-input" id="horceCheck2" name="horceCheck2"><label class="custom-control-label" for="horceCheck2">
                                                            <div><img src="https://content-cache.cdnbf.net/feeds_images/Horses/SilkColours/saddle_3.gif"></div><!---->
                                                            <div><span>English Storm</span>
                                                                <div class="d-none-desktop w-100 text-right"></div><span class="jockey-detail d-none-mobile"><span class="horse-attr"><b>Jockey:</b> Andre Shivnarine Worrie</span><span class="horse-attr"><b>Trainer:</b> Jeremiah C. Englehart</span><span class="horse-attr"><b>Age:</b>4</span></span>
                                                            </div>
                                                        </label></div>
                                                    <div><!----><!----></div>
                                                </div><!----><!---->
                                            </div>
                                            <div class="odds_bhav">
                                                <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">2.22</strong>
                                                    <div class="size"><span class="ng-binding"> 11.65 </span></div>
                                                </div>
                                                <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">2.34</strong>
                                                    <div class="size"><span class="ng-binding"> 11.48 </span></div>
                                                </div><!----><!---->
                                            </div>
                                        </div>
                                        <div class="d-none-desktop horse-detail"><span class="jockey-detail"><span class="horse-attr"><b>Jockey:</b> Andre Shivnarine Worrie</span><span class="horse-attr"><b>Trainer:</b> Jeremiah C. Englehart</span><span class="horse-attr"><b>Age:</b>4</span></span></div><!---->
                                    </div>
                                    <div class="randerScore mainScore">
                                        <div class="odds_rows horse-detail">
                                            <div class="events_odds">
                                                <div placement="right" class="event-names">
                                                    <div class="custom-control custom-checkbox country-name"><input type="checkbox" class="custom-control-input" id="horceCheck3" name="horceCheck3"><label class="custom-control-label" for="horceCheck3">
                                                            <div><img src="https://content-cache.cdnbf.net/feeds_images/Horses/SilkColours/saddle_4.gif"></div><!---->
                                                            <div><span>Don Antonio</span>
                                                                <div class="d-none-desktop w-100 text-right"></div><span class="jockey-detail d-none-mobile"><span class="horse-attr"><b>Jockey:</b> Rafael Rohena, Jr.</span><span class="horse-attr"><b>Trainer:</b> Rafael Jose Rohena</span><span class="horse-attr"><b>Age:</b>4</span></span>
                                                            </div>
                                                        </label></div>
                                                    <div><!----><!----></div>
                                                </div><!----><!---->
                                            </div>
                                            <div class="odds_bhav">
                                                <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">-</strong>
                                                    <div class="size"><span class="ng-binding"> - </span></div>
                                                </div>
                                                <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">-</strong>
                                                    <div class="size"><span class="ng-binding"> - </span></div>
                                                </div>
                                                <div class="suspendedMessage"> REMOVED</div><!----><!---->
                                            </div>
                                        </div>
                                        <div class="d-none-desktop horse-detail"><span class="jockey-detail"><span class="horse-attr"><b>Jockey:</b> Rafael Rohena, Jr.</span><span class="horse-attr"><b>Trainer:</b> Rafael Jose Rohena</span><span class="horse-attr"><b>Age:</b>4</span></span></div><!---->
                                    </div>
                                    <div class="randerScore mainScore">
                                        <div class="odds_rows horse-detail">
                                            <div class="events_odds">
                                                <div placement="right" class="event-names">
                                                    <div class="custom-control custom-checkbox country-name"><input type="checkbox" class="custom-control-input" id="horceCheck4" name="horceCheck4"><label class="custom-control-label" for="horceCheck4">
                                                            <div><img src="https://content-cache.cdnbf.net/feeds_images/Horses/SilkColours/saddle_5.gif"></div><!---->
                                                            <div><span>Uncle Kendric</span>
                                                                <div class="d-none-desktop w-100 text-right"></div><span class="jockey-detail d-none-mobile"><span class="horse-attr"><b>Jockey:</b> Heman K. Harkie</span><span class="horse-attr"><b>Trainer:</b> Ronald Breed</span><span class="horse-attr"><b>Age:</b>5</span></span>
                                                            </div>
                                                        </label></div>
                                                    <div><!----><!----></div>
                                                </div><!----><!---->
                                            </div>
                                            <div class="odds_bhav">
                                                <div class="back_oddsbox bhav_box down"><strong class="odds ng-binding">10.5</strong>
                                                    <div class="size"><span class="ng-binding"> 7.07 </span></div>
                                                </div>
                                                <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">12.5</strong>
                                                    <div class="size"><span class="ng-binding"> 8.17 </span></div>
                                                </div><!----><!---->
                                            </div>
                                        </div>
                                        <div class="d-none-desktop horse-detail"><span class="jockey-detail"><span class="horse-attr"><b>Jockey:</b> Heman K. Harkie</span><span class="horse-attr"><b>Trainer:</b> Ronald Breed</span><span class="horse-attr"><b>Age:</b>5</span></span></div><!---->
                                    </div>
                                    <div class="randerScore mainScore">
                                        <div class="odds_rows horse-detail">
                                            <div class="events_odds">
                                                <div placement="right" class="event-names">
                                                    <div class="custom-control custom-checkbox country-name"><input type="checkbox" class="custom-control-input" id="horceCheck5" name="horceCheck5"><label class="custom-control-label" for="horceCheck5">
                                                            <div><img src="https://content-cache.cdnbf.net/feeds_images/Horses/SilkColours/saddle_6.gif"></div><!---->
                                                            <div><span>Happy Instead</span>
                                                                <div class="d-none-desktop w-100 text-right"></div><span class="jockey-detail d-none-mobile"><span class="horse-attr"><b>Jockey:</b> Keiber J. Coa</span><span class="horse-attr"><b>Trainer:</b> M. Anthony Ferraro</span><span class="horse-attr"><b>Age:</b>3</span></span>
                                                            </div>
                                                        </label></div>
                                                    <div><!----><!----></div>
                                                </div><!----><!---->
                                            </div>
                                            <div class="odds_bhav">
                                                <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">-</strong>
                                                    <div class="size"><span class="ng-binding"> - </span></div>
                                                </div>
                                                <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">-</strong>
                                                    <div class="size"><span class="ng-binding"> - </span></div>
                                                </div>
                                                <div class="suspendedMessage"> REMOVED</div><!----><!---->
                                            </div>
                                        </div>
                                        <div class="d-none-desktop horse-detail"><span class="jockey-detail"><span class="horse-attr"><b>Jockey:</b> Keiber J. Coa</span><span class="horse-attr"><b>Trainer:</b> M. Anthony Ferraro</span><span class="horse-attr"><b>Age:</b>3</span></span></div><!---->
                                    </div>
                                    <div class="randerScore mainScore">
                                        <div class="odds_rows horse-detail">
                                            <div class="events_odds">
                                                <div placement="right" class="event-names">
                                                    <div class="custom-control custom-checkbox country-name"><input type="checkbox" class="custom-control-input" id="horceCheck6" name="horceCheck6"><label class="custom-control-label" for="horceCheck6">
                                                            <div><img src="https://content-cache.cdnbf.net/feeds_images/Horses/SilkColours/saddle_7.gif"></div><!---->
                                                            <div><span>Hair On Fire</span>
                                                                <div class="d-none-desktop w-100 text-right"></div><span class="jockey-detail d-none-mobile"><span class="horse-attr"><b>Jockey:</b> Jeremias Flores</span><span class="horse-attr"><b>Trainer:</b> Paul W. Barrow</span><span class="horse-attr"><b>Age:</b>3</span></span>
                                                            </div>
                                                        </label></div>
                                                    <div><!----><!----></div>
                                                </div><!----><!---->
                                            </div>
                                            <div class="odds_bhav">
                                                <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">9.8</strong>
                                                    <div class="size"><span class="ng-binding"> 5.43 </span></div>
                                                </div>
                                                <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">10.5</strong>
                                                    <div class="size"><span class="ng-binding"> 3.12 </span></div>
                                                </div><!----><!---->
                                            </div>
                                        </div>
                                        <div class="d-none-desktop horse-detail"><span class="jockey-detail"><span class="horse-attr"><b>Jockey:</b> Jeremias Flores</span><span class="horse-attr"><b>Trainer:</b> Paul W. Barrow</span><span class="horse-attr"><b>Age:</b>3</span></span></div><!---->
                                    </div>
                                    <div class="randerScore mainScore">
                                        <div class="odds_rows horse-detail">
                                            <div class="events_odds">
                                                <div placement="right" class="event-names">
                                                    <div class="custom-control custom-checkbox country-name"><input type="checkbox" class="custom-control-input" id="horceCheck7" name="horceCheck7"><label class="custom-control-label" for="horceCheck7">
                                                            <div><img src="https://content-cache.cdnbf.net/feeds_images/Horses/SilkColours/saddle_8.gif"></div><!---->
                                                            <div><span>Joe West</span>
                                                                <div class="d-none-desktop w-100 text-right"></div><span class="jockey-detail d-none-mobile"><span class="horse-attr"><b>Jockey:</b> Luis E. Perez</span><span class="horse-attr"><b>Trainer:</b> James S. Acquilano</span><span class="horse-attr"><b>Age:</b>3</span></span>
                                                            </div>
                                                        </label></div>
                                                    <div><!----><!----></div>
                                                </div><!----><!---->
                                            </div>
                                            <div class="odds_bhav">
                                                <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">5.5</strong>
                                                    <div class="size"><span class="ng-binding"> 7.38 </span></div>
                                                </div>
                                                <div class="Lay_oddsbox bhav_box down"><strong class="odds ng-binding">5.8</strong>
                                                    <div class="size"><span class="ng-binding"> 1.6 </span></div>
                                                </div><!----><!---->
                                            </div>
                                        </div>
                                        <div class="d-none-desktop horse-detail"><span class="jockey-detail"><span class="horse-attr"><b>Jockey:</b> Luis E. Perez</span><span class="horse-attr"><b>Trainer:</b> James S. Acquilano</span><span class="horse-attr"><b>Age:</b>3</span></span></div><!---->
                                    </div><!---->
                                </div><!----><!----><!----><!---->
                            </div>
                            <div><!----><!----><!----><!----></div><!----><!---->
                        </div>
                        <div class="col-md-4">
                            <div id="rightBarDiv" class="bets_box-main"><!----><!----><app-bet-slip _nghost-snd-c87="">
                                    <div class="betting-table lay-bt" style="position: relative;">
                                        <h2 class="mrkname"> place bet </h2>
                                        <div class="back">
                                            <div class="row align-items-center">
                                                <div class="col col-md-4"> (Bet for) </div>
                                                <div class="col"> Odds </div>
                                                <div class="col"> Stake </div>
                                                <div class="col"> Profit </div>
                                            </div><!---->
                                            <div class="row border-bottom align-items-center">
                                                <div class="col col-md-4 text-left"><a><i class="fa fa-close text-danger"></i></a> Go Grad </div>
                                                <div class="col"><input type="number" readonly="true" min="1.01" max="999.99" class="form-control ng-untouched ng-pristine ng-valid"><a href="javascript:void(0)" class="arrow-up"><i class="fa fa-angle-up"></i></a><a href="javascript:void(0)" class="arrow-down"><i class="fa fa-angle-down"></i></a></div><!----><!---->
                                                <div class="col"><input type="number" placeholder="Amount" class="form-control ng-untouched ng-pristine ng-valid"></div>
                                                <div class="col"> 0 </div>
                                            </div><!----><!----><!---->
                                            <div class="stakes" style="width: 100%;">
                                                <div class="btn-group"><button type="button">100</button><button type="button">500</button><button type="button">1000</button><button type="button">5000</button><button type="button">10000</button><button type="button">25000</button><!----></div>
                                            </div><!---->
                                            <div class="row align-items-center">
                                                <div class="col"><button class="btn cancel-btn">reset</button></div>
                                                <div class="col"><button class="btn betplace-btn" disabled="">submit</button></div><!---->
                                            </div><!---->
                                        </div><!----><!---->
                                    </div>
                                </app-bet-slip><app-my-bets>
                                    <div class="bets-section">
                                        <h2 class="ds-none-mobile">My Bet</h2>
                                        <div>
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
                                </app-my-bets></div>
                        </div>
                    </div>
                </div><!---->
            </div>
            <div bsmodal="" tabindex="-1" role="dialog" aria-labelledby="dialog-static-name" class="modal fade">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header py-1 mobileBetplaceHeader">
                            <h4 id="dialog-static-name" class="modal-title pull-left">Place Bet</h4><button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="fa fa-close"></i></button>
                        </div>
                        <div class="modal-body p-0"><app-bet-slip _nghost-snd-c87="">
                                <div class="betting-table lay-bt" style="position: relative;">
                                    <h2 class="mrkname"> place bet </h2>
                                    <div class="back">
                                        <div class="row align-items-center">
                                            <div class="col col-md-4"> (Bet for) </div>
                                            <div class="col"> Odds </div>
                                            <div class="col"> Stake </div>
                                            <div class="col"> Profit </div>
                                        </div><!---->
                                        <div class="row border-bottom align-items-center">
                                            <div class="col col-md-4 text-left"><a><i class="fa fa-close text-danger"></i></a> Go Grad </div>
                                            <div class="col"><input type="number" readonly="true" min="1.01" max="999.99" class="form-control ng-untouched ng-pristine ng-valid"><a href="javascript:void(0)" class="arrow-up"><i class="fa fa-angle-up"></i></a><a href="javascript:void(0)" class="arrow-down"><i class="fa fa-angle-down"></i></a></div><!----><!---->
                                            <div class="col"><input type="number" placeholder="Amount" class="form-control ng-untouched ng-pristine ng-valid"></div>
                                            <div class="col"> 0 </div>
                                        </div><!----><!----><!---->
                                        <div class="stakes" style="width: 100%;">
                                            <div class="btn-group"><button type="button">100</button><button type="button">500</button><button type="button">1000</button><button type="button">5000</button><button type="button">10000</button><button type="button">25000</button><!----></div>
                                        </div><!---->
                                        <div class="row align-items-center">
                                            <div class="col"><button class="btn cancel-btn">reset</button></div>
                                            <div class="col"><button class="btn betplace-btn" disabled="">submit</button></div><!---->
                                        </div><!---->
                                    </div><!----><!---->
                                </div>
                            </app-bet-slip></div>
                    </div>
                </div>
            </div><!----><!---->
        </div>
    </app-sport-detail><!----></div>

@endsection
@section('script')
<script>
    /* Script Goes Here */

    /* Script Goes Here */
</script>
@endsection
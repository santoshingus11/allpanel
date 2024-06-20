@extends('web_layout.app')
@section('style')
<style>
  /* Style Goes Here */

  /* Style Goes Here */
</style>
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
                <tab role="tabpanel" aria-labelledby="" class="tab-pane"><!----><app-my-bets _nghost-xyn-c88="">
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
            <h2 class="event-title">Grasshoppers Zurich v Yverdon Sport</h2>
            <div id="scoreCard" class="multi-collapse">
              <div class="col-12 px-0"><app-score-card><!----></app-score-card></div>
            </div><!---->
            <div class="row">
              <div class="col-md-12">
                <div>
                  <h4 class="panel-title"> Match Odds <!----><span> Maximum Bet 1 &nbsp; <i class="fa fa-info-circle"></i></span><!----></h4>
                  <div class="body-odds th-bl">
                    <div class="events_odds">&nbsp;&nbsp;</div>
                    <div class="odds_bhav">
                      <div class="back_oddsbox bhav_box">Back</div>
                      <div class="Lay_oddsbox bhav_box">Lay</div>
                    </div>
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Grasshoppers Zurich</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">1.84</strong>
                          <div class="size"><span class="ng-binding"> 39.27 </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">1.86</strong>
                          <div class="size"><span class="ng-binding"> 45.7 </span></div>
                        </div><!----><!---->
                      </div>
                    </div><!---->
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Yverdon Sport</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">4.6</strong>
                          <div class="size"><span class="ng-binding"> 27.87 </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">4.8</strong>
                          <div class="size"><span class="ng-binding"> 45.17 </span></div>
                        </div><!----><!---->
                      </div>
                    </div><!---->
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">The Draw</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">4</strong>
                          <div class="size"><span class="ng-binding"> 67.59 </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">4.1</strong>
                          <div class="size"><span class="ng-binding"> 2.14 </span></div>
                        </div><!----><!---->
                      </div>
                    </div><!---->
                  </div><!---->
                </div><!----><!----><!----><!---->
              </div>
              <div class="col-md-12">
                <div>
                  <h4 class="panel-title"> Over/Under 0.5 Goals <!----><span> Maximum Bet 1 &nbsp; <i class="fa fa-info-circle"></i></span><!----></h4>
                  <div class="body-odds th-bl">
                    <div class="events_odds">&nbsp;&nbsp;</div>
                    <div class="odds_bhav">
                      <div class="back_oddsbox bhav_box">Back</div>
                      <div class="Lay_oddsbox bhav_box">Lay</div>
                    </div>
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Under 0.5 Goals</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">17.5</strong>
                          <div class="size"><span class="ng-binding"> 5.39 </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">19.5</strong>
                          <div class="size"><span class="ng-binding"> 3.51 </span></div>
                        </div><!----><!---->
                      </div>
                    </div><!---->
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Over 0.5 Goals</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">1.05</strong>
                          <div class="size"><span class="ng-binding"> 2458.25 </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">1.06</strong>
                          <div class="size"><span class="ng-binding"> 56 </span></div>
                        </div><!----><!---->
                      </div>
                    </div><!---->
                  </div><!---->
                </div><!----><!----><!----><!---->
              </div>
              <div class="col-md-12">
                <div>
                  <h4 class="panel-title"> Over/Under 1.5 Goals <!----><span> Maximum Bet 1 &nbsp; <i class="fa fa-info-circle"></i></span><!----></h4>
                  <div class="body-odds th-bl">
                    <div class="events_odds">&nbsp;&nbsp;</div>
                    <div class="odds_bhav">
                      <div class="back_oddsbox bhav_box">Back</div>
                      <div class="Lay_oddsbox bhav_box">Lay</div>
                    </div>
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Under 1.5 Goals</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">4.7</strong>
                          <div class="size"><span class="ng-binding"> 58.72 </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">4.9</strong>
                          <div class="size"><span class="ng-binding"> 132.54 </span></div>
                        </div><!----><!---->
                      </div>
                    </div><!---->
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Over 1.5 Goals</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">1.26</strong>
                          <div class="size"><span class="ng-binding"> 278.98 </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">1.27</strong>
                          <div class="size"><span class="ng-binding"> 110 </span></div>
                        </div><!----><!---->
                      </div>
                    </div><!---->
                  </div><!---->
                </div><!----><!----><!----><!---->
              </div>
              <div class="col-md-12">
                <div>
                  <h4 class="panel-title"> Over/Under 2.5 Goals <!----><span> Maximum Bet 1 &nbsp; <i class="fa fa-info-circle"></i></span><!----></h4>
                  <div class="body-odds th-bl">
                    <div class="events_odds">&nbsp;&nbsp;</div>
                    <div class="odds_bhav">
                      <div class="back_oddsbox bhav_box">Back</div>
                      <div class="Lay_oddsbox bhav_box">Lay</div>
                    </div>
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Under 2.5 Goals</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">2.26</strong>
                          <div class="size"><span class="ng-binding"> 92.49 </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">2.3</strong>
                          <div class="size"><span class="ng-binding"> 137.47 </span></div>
                        </div><!----><!---->
                      </div>
                    </div><!---->
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Over 2.5 Goals</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">1.77</strong>
                          <div class="size"><span class="ng-binding"> 94.28 </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">1.79</strong>
                          <div class="size"><span class="ng-binding"> 51 </span></div>
                        </div><!----><!---->
                      </div>
                    </div><!---->
                  </div><!---->
                </div><!----><!----><!----><!---->
              </div>
              <div class="col-md-12">
                <div>
                  <h4 class="panel-title"> Over/Under 3.5 Goals <!----><span> Maximum Bet 1 &nbsp; <i class="fa fa-info-circle"></i></span><!----></h4>
                  <div class="body-odds th-bl">
                    <div class="events_odds">&nbsp;&nbsp;</div>
                    <div class="odds_bhav">
                      <div class="back_oddsbox bhav_box">Back</div>
                      <div class="Lay_oddsbox bhav_box">Lay</div>
                    </div>
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Under 3.5 Goals</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">1.48</strong>
                          <div class="size"><span class="ng-binding"> 85 </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">1.51</strong>
                          <div class="size"><span class="ng-binding"> 208.03 </span></div>
                        </div><!----><!---->
                      </div>
                    </div><!---->
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Over 3.5 Goals</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">2.98</strong>
                          <div class="size"><span class="ng-binding"> 34.01 </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">3.1</strong>
                          <div class="size"><span class="ng-binding"> 83.63 </span></div>
                        </div><!----><!---->
                      </div>
                    </div><!---->
                  </div><!---->
                </div><!----><!----><!----><!---->
              </div>
              <div><!----><!----><!----><!----></div><!----><!---->
            </div>
            <div class="col-md-4">
              <div id="rightBarDiv" class="bets_box-main"><!----><!----><app-bet-slip _nghost-xyn-c87="">
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
                        <div class="col col-md-4 text-left"><a><i class="fa fa-close text-danger"></i></a> Grasshoppers Zurich </div>
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
                </app-bet-slip><app-my-bets _nghost-xyn-c88="">
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
            <div class="modal-body p-0"><app-bet-slip _nghost-xyn-c87="">
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
                      <div class="col col-md-4 text-left"><a><i class="fa fa-close text-danger"></i></a> Grasshoppers Zurich </div>
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
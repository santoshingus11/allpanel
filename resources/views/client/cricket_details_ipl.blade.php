@extends('web_layout.app')
@section('style')
<style>
  /* Style Goes Here */

  /* Style Goes Here */
</style>
@endsection
@section('content')

<!-- Contant Goes Here -->

<div class="col-md-10 pxxs-0"><router-outlet></router-outlet><app-sport-detail>
    <div class="wrapper-inner detail_screen">
      <div>
        <div class="row">
          <div class="col-md-8 mobile-sec ds-block-mobile listing_screen">
            <tabset class="odds_matched_tv tab-container" _nghost-orf-c35="">
              <ul role="tablist" class="nav nav-tabs" aria-label="Tabs">
                <li class="active nav-item"><a href="javascript:void(0);" role="tab" class="nav-link active" aria-controls="" aria-selected="true" id=""><span>ODDS</span><!----><!----></a></li>
                <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span> MATCHED BET(0) <!----><!----></a></li><!---->
              </ul>
              <div class="tab-content">
                <tab heading="ODDS" role="tabpanel" aria-labelledby="" class="tab-pane active"></tab>
                <tab role="tabpanel" aria-labelledby="" class="tab-pane"><!----><app-my-bets _nghost-orf-c89="">
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
            </tabset><a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" class="tv"><i class="fa fa-tv"></i></a><!---->
          </div>
          <div class="col-md-8">
            <h2 class="event-title">Indian Premier League </h2>
            <div class="row mobile">
              <div class="col-12">
                <div id="multiCollapseExample1" class="collapse multi-collapse">
                  <div class="card card-body p-0"><!----></div>
                </div>
              </div>
            </div><!---->
            <div class="row">
              <div class="col-md-12"><!---->
                <div class="row only_bm">
                  <div class="col-md-12">
                    <h4 class="panel-title"> WINNER BOOKMAKER <!----><!----></h4>
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
                              <div class="slogen-horce"><span class="team-horce">Chennai Super Kings</span></div>
                            </div>
                            <div><!----><!----></div>
                          </div><!---->
                        </div>
                        <div class="odds_bhav">
                          <div class="back_oddsbox bhav_box"><strong class="odds ng-binding"> 575 </strong>
                            <div class="size"><span class="ng-binding"> </span></div>
                          </div>
                          <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding"> 650 </strong>
                            <div class="size"><span class="ng-binding"> </span></div>
                          </div><!----><!---->
                        </div>
                      </div><!---->
                    </div>
                    <div class="randerScore mainScore">
                      <div class="odds_rows">
                        <div class="events_odds"><!---->
                          <div class="event-names">
                            <div class="horse-event">
                              <div class="slogen-horce"><span class="team-horce">Punjab Kings</span></div>
                            </div>
                            <div><!----><!----></div>
                          </div><!---->
                        </div>
                        <div class="odds_bhav">
                          <div class="back_oddsbox bhav_box"><strong class="odds ng-binding"> 0 </strong>
                            <div class="size"><span class="ng-binding"> 0.0 </span></div>
                          </div>
                          <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding"> 0 </strong>
                            <div class="size"><span class="ng-binding"> 0.0 </span></div>
                          </div>
                          <div class="suspendedMessage"> SUSPENDED</div><!----><!---->
                        </div>
                      </div><!---->
                    </div>
                    <div class="randerScore mainScore">
                      <div class="odds_rows">
                        <div class="events_odds"><!---->
                          <div class="event-names">
                            <div class="horse-event">
                              <div class="slogen-horce"><span class="team-horce">Mumbai Indians</span></div>
                            </div>
                            <div><!----><!----></div>
                          </div><!---->
                        </div>
                        <div class="odds_bhav">
                          <div class="back_oddsbox bhav_box"><strong class="odds ng-binding"> 0 </strong>
                            <div class="size"><span class="ng-binding"> 0.0 </span></div>
                          </div>
                          <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding"> 0 </strong>
                            <div class="size"><span class="ng-binding"> 0.0 </span></div>
                          </div>
                          <div class="suspendedMessage"> SUSPENDED</div><!----><!---->
                        </div>
                      </div><!---->
                    </div>
                    <div class="randerScore mainScore">
                      <div class="odds_rows">
                        <div class="events_odds"><!---->
                          <div class="event-names">
                            <div class="horse-event">
                              <div class="slogen-horce"><span class="team-horce">Gujarat Titans</span></div>
                            </div>
                            <div><!----><!----></div>
                          </div><!---->
                        </div>
                        <div class="odds_bhav">
                          <div class="back_oddsbox bhav_box"><strong class="odds ng-binding"> 0 </strong>
                            <div class="size"><span class="ng-binding"> 0.0 </span></div>
                          </div>
                          <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding"> 0 </strong>
                            <div class="size"><span class="ng-binding"> 0.0 </span></div>
                          </div>
                          <div class="suspendedMessage"> SUSPENDED</div><!----><!---->
                        </div>
                      </div><!---->
                    </div>
                    <div class="randerScore mainScore">
                      <div class="odds_rows">
                        <div class="events_odds"><!---->
                          <div class="event-names">
                            <div class="horse-event">
                              <div class="slogen-horce"><span class="team-horce">Royal Challengers Bangalore</span></div>
                            </div>
                            <div><!----><!----></div>
                          </div><!---->
                        </div>
                        <div class="odds_bhav">
                          <div class="back_oddsbox bhav_box"><strong class="odds ng-binding"> 1300 </strong>
                            <div class="size"><span class="ng-binding"> </span></div>
                          </div>
                          <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding"> 1600 </strong>
                            <div class="size"><span class="ng-binding"> </span></div>
                          </div><!----><!---->
                        </div>
                      </div><!---->
                    </div>
                    <div class="randerScore mainScore">
                      <div class="odds_rows">
                        <div class="events_odds"><!---->
                          <div class="event-names">
                            <div class="horse-event">
                              <div class="slogen-horce"><span class="team-horce">Rajasthan Royals</span></div>
                            </div>
                            <div><!----><!----></div>
                          </div><!---->
                        </div>
                        <div class="odds_bhav">
                          <div class="back_oddsbox bhav_box"><strong class="odds ng-binding"> 380 </strong>
                            <div class="size"><span class="ng-binding"> </span></div>
                          </div>
                          <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding"> 430 </strong>
                            <div class="size"><span class="ng-binding"> </span></div>
                          </div><!----><!---->
                        </div>
                      </div><!---->
                    </div>
                    <div class="randerScore mainScore">
                      <div class="odds_rows">
                        <div class="events_odds"><!---->
                          <div class="event-names">
                            <div class="horse-event">
                              <div class="slogen-horce"><span class="team-horce">Sunrisers Hyderabad</span></div>
                            </div>
                            <div><!----><!----></div>
                          </div><!---->
                        </div>
                        <div class="odds_bhav">
                          <div class="back_oddsbox bhav_box"><strong class="odds ng-binding"> 300 </strong>
                            <div class="size"><span class="ng-binding"> </span></div>
                          </div>
                          <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding"> 350 </strong>
                            <div class="size"><span class="ng-binding"> </span></div>
                          </div><!----><!---->
                        </div>
                      </div><!---->
                    </div>
                    <div class="randerScore mainScore">
                      <div class="odds_rows">
                        <div class="events_odds"><!---->
                          <div class="event-names">
                            <div class="horse-event">
                              <div class="slogen-horce"><span class="team-horce">Lucknow Super Giants</span></div>
                            </div>
                            <div><!----><!----></div>
                          </div><!---->
                        </div>
                        <div class="odds_bhav">
                          <div class="back_oddsbox bhav_box"><strong class="odds ng-binding"> 0 </strong>
                            <div class="size"><span class="ng-binding"> 0.0 </span></div>
                          </div>
                          <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding"> 0 </strong>
                            <div class="size"><span class="ng-binding"> 0.0 </span></div>
                          </div>
                          <div class="suspendedMessage"> SUSPENDED</div><!----><!---->
                        </div>
                      </div><!---->
                    </div>
                    <div class="randerScore mainScore">
                      <div class="odds_rows">
                        <div class="events_odds"><!---->
                          <div class="event-names">
                            <div class="horse-event">
                              <div class="slogen-horce"><span class="team-horce">Delhi Capitals</span></div>
                            </div>
                            <div><!----><!----></div>
                          </div><!---->
                        </div>
                        <div class="odds_bhav">
                          <div class="back_oddsbox bhav_box"><strong class="odds ng-binding"> 0 </strong>
                            <div class="size"><span class="ng-binding"> 0.0 </span></div>
                          </div>
                          <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding"> 0 </strong>
                            <div class="size"><span class="ng-binding"> 0.0 </span></div>
                          </div>
                          <div class="suspendedMessage"> SUSPENDED</div><!----><!---->
                        </div>
                      </div><!---->
                    </div>
                    <div class="randerScore mainScore">
                      <div class="odds_rows">
                        <div class="events_odds"><!---->
                          <div class="event-names">
                            <div class="horse-event">
                              <div class="slogen-horce"><span class="team-horce">Kolkata Knight Riders</span></div>
                            </div>
                            <div><!----><!----></div>
                          </div><!---->
                        </div>
                        <div class="odds_bhav">
                          <div class="back_oddsbox bhav_box"><strong class="odds ng-binding"> 170 </strong>
                            <div class="size"><span class="ng-binding"> </span></div>
                          </div>
                          <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding"> 190 </strong>
                            <div class="size"><span class="ng-binding"> </span></div>
                          </div><!----><!---->
                        </div>
                      </div><!---->
                    </div><!---->
                  </div><!---->
                </div><!----><!----><!---->
              </div>
              <div class="col-md-12">
                <div>
                  <h4 class="panel-title"> Winner <!----><!----></h4>
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
                            <div class="slogen-horce"><span class="team-horce">Mumbai Indians</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">-</strong>
                          <div class="size"><span class="ng-binding"> - </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">-</strong>
                          <div class="size"><span class="ng-binding"> - </span></div>
                        </div>
                        <div class="suspendedMessage"> LOSER</div><!----><!---->
                      </div>
                    </div><!---->
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Chennai Super Kings</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">6.6</strong>
                          <div class="size"><span class="ng-binding"> 519.99 </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">6.8</strong>
                          <div class="size"><span class="ng-binding"> 9.29 </span></div>
                        </div><!----><!---->
                      </div>
                    </div><!---->
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Gujarat Titans</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">-</strong>
                          <div class="size"><span class="ng-binding"> - </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">-</strong>
                          <div class="size"><span class="ng-binding"> - </span></div>
                        </div>
                        <div class="suspendedMessage"> LOSER</div><!----><!---->
                      </div>
                    </div><!---->
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Sunrisers Hyderabad</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">4</strong>
                          <div class="size"><span class="ng-binding"> 1065.93 </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">4.2</strong>
                          <div class="size"><span class="ng-binding"> 136.88 </span></div>
                        </div><!----><!---->
                      </div>
                    </div><!---->
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Rajasthan Royals</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">5.1</strong>
                          <div class="size"><span class="ng-binding"> 135.45 </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">5.2</strong>
                          <div class="size"><span class="ng-binding"> 209.56 </span></div>
                        </div><!----><!---->
                      </div>
                    </div><!---->
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Lucknow Super Giants</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">-</strong>
                          <div class="size"><span class="ng-binding"> - </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">-</strong>
                          <div class="size"><span class="ng-binding"> - </span></div>
                        </div>
                        <div class="suspendedMessage"> LOSER</div><!----><!---->
                      </div>
                    </div><!---->
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Royal Challengers Bangalore</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">16</strong>
                          <div class="size"><span class="ng-binding"> 1174.24 </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">17</strong>
                          <div class="size"><span class="ng-binding"> 171.22 </span></div>
                        </div><!----><!---->
                      </div>
                    </div><!---->
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Delhi Capitals</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">-</strong>
                          <div class="size"><span class="ng-binding"> - </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">-</strong>
                          <div class="size"><span class="ng-binding"> - </span></div>
                        </div>
                        <div class="suspendedMessage"> LOSER</div><!----><!---->
                      </div>
                    </div><!---->
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Punjab Kings</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">-</strong>
                          <div class="size"><span class="ng-binding"> - </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">-</strong>
                          <div class="size"><span class="ng-binding"> - </span></div>
                        </div>
                        <div class="suspendedMessage"> LOSER</div><!----><!---->
                      </div>
                    </div><!---->
                  </div>
                  <div class="randerScore mainScore">
                    <div class="odds_rows">
                      <div class="events_odds"><!---->
                        <div class="event-names">
                          <div class="horse-event">
                            <div class="slogen-horce"><span class="team-horce">Kolkata Knight Riders</span></div>
                          </div>
                          <div><!----><!----></div>
                        </div><!---->
                      </div>
                      <div class="odds_bhav">
                        <div class="back_oddsbox bhav_box"><strong class="odds ng-binding">2.8</strong>
                          <div class="size"><span class="ng-binding"> 149.79 </span></div>
                        </div>
                        <div class="Lay_oddsbox bhav_box"><strong class="odds ng-binding">2.82</strong>
                          <div class="size"><span class="ng-binding"> 2377.34 </span></div>
                        </div><!----><!---->
                      </div>
                    </div><!---->
                  </div><!---->
                </div><!----><!----><!----><!---->
              </div>
              <div><!----><!----><!---->
                <div class="listing_screen">
                  <tabset _nghost-orf-c35="" class="tab-container">
                    <ul role="tablist" class="nav nav-tabs" aria-label="Tabs">
                      <li class="active nav-item"><a href="javascript:void(0);" role="tab" class="nav-link active" aria-controls="" aria-selected="true" id=""><span>Fancy 1</span><!----><!----></a></li>
                      <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span>Meter</span><!----><!----></a></li>
                      <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span>Khado</span><!----><!----></a></li>
                      <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span>Odd Even</span><!----><!----></a></li>
                      <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span>Wicket</span><!----><!----></a></li>
                      <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span>Four</span><!----><!----></a></li>
                      <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span>Six</span><!----><!----></a></li>
                      <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span>Cricket Casino</span><!----><!----></a></li><!---->
                    </ul>
                    <div class="tab-content">
                      <tab role="tabpanel" aria-labelledby="" class="tab-pane active">
                        <div class="row"><!----><!---->
                          <div class="col-md-12">
                            <div class="randerScore mainScore">
                              <div class="no-dt">
                                <p>No real-time records found</p>
                              </div>
                            </div>
                          </div><!---->
                        </div>
                      </tab>
                      <tab role="tabpanel" aria-labelledby="" class="tab-pane">
                        <div class="row"><!----><!---->
                          <div class="col-md-12">
                            <div class="randerScore mainScore">
                              <div class="no-dt">
                                <p>No real-time records found</p>
                              </div>
                            </div>
                          </div><!---->
                        </div>
                      </tab>
                      <tab role="tabpanel" aria-labelledby="" class="tab-pane">
                        <div class="row"><!----><!---->
                          <div class="col-md-12">
                            <div class="randerScore mainScore">
                              <div class="no-dt">
                                <p>No real-time records found</p>
                              </div>
                            </div>
                          </div><!---->
                        </div>
                      </tab>
                      <tab role="tabpanel" aria-labelledby="" class="tab-pane">
                        <div class="row"><!----><!---->
                          <div class="col-md-12">
                            <div class="randerScore mainScore">
                              <div class="no-dt">
                                <p>No real-time records found</p>
                              </div>
                            </div>
                          </div><!---->
                        </div>
                      </tab>
                      <tab role="tabpanel" aria-labelledby="" class="tab-pane">
                        <div class="row"><!----><!---->
                          <div class="col-md-12">
                            <div class="randerScore mainScore">
                              <div class="no-dt">
                                <p>No real-time records found</p>
                              </div>
                            </div>
                          </div><!---->
                        </div>
                      </tab>
                      <tab role="tabpanel" aria-labelledby="" class="tab-pane">
                        <div class="row"><!----><!---->
                          <div class="col-md-12">
                            <div class="randerScore mainScore">
                              <div class="no-dt">
                                <p>No real-time records found</p>
                              </div>
                            </div>
                          </div><!---->
                        </div>
                      </tab>
                      <tab role="tabpanel" aria-labelledby="" class="tab-pane">
                        <div class="row"><!----><!---->
                          <div class="col-md-12">
                            <div class="randerScore mainScore">
                              <div class="no-dt">
                                <p>No real-time records found</p>
                              </div>
                            </div>
                          </div><!---->
                        </div>
                      </tab>
                      <tab role="tabpanel" aria-labelledby="" class="tab-pane">
                        <div class="row"><!----><!---->
                          <div class="col-md-12">
                            <div class="randerScore mainScore">
                              <div class="no-dt">
                                <p>No real-time records found</p>
                              </div>
                            </div>
                          </div><!---->
                        </div>
                      </tab><!---->
                    </div>
                  </tabset>
                </div><!---->
              </div><!----><!---->
            </div>
            <div class="col-md-4">
              <div id="rightBarDiv" class="bets_box-main">
                <div class="tv desktop"><span>Live Match</span><a data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2"><i class="fa fa-tv"></i> Live Stream Start </a></div><!---->
                <div class="row">
                  <div class="col-12">
                    <div id="multiCollapseExample2" class="collapse multi-collapse">
                      <div class="card card-body p-0"><!----></div>
                    </div>
                  </div>
                </div><!----><app-bet-slip>
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
                        <div class="col col-md-4 text-left"><a><i class="fa fa-close text-danger"></i></a> Chennai Super Kings </div><!---->
                        <div class="col"><span>6.75</span></div><!---->
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
                </app-bet-slip><app-my-bets _nghost-orf-c89="">
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
                </app-my-bets>
              </div>
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
            <div class="modal-body p-0"><app-bet-slip>
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
                      <div class="col col-md-4 text-left"><a><i class="fa fa-close text-danger"></i></a> Chennai Super Kings </div><!---->
                      <div class="col"><span>6.75</span></div><!---->
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
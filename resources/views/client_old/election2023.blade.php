@extends('web_layout.app')
@section('style')
<style>
    /* Style Goes Here */

    /* Style Goes Here */
</style>
@endsection
@section('content')
<div class="col-md-10 pxxs-0"><router-outlet
    ></router-outlet><app-sport-detail>
        <div class="wrapper-inner detail_screen">
            <div>
                <div class="row">
                    <div class="col-md-8 mobile-sec ds-block-mobile listing_screen">
                        <tabset class="odds_matched_tv tab-container">
                            <ul role="tablist" class="nav nav-tabs" aria-label="Tabs">
                                <li class="active nav-item"><a
                                        href="javascript:void(0);" role="tab" class="nav-link active" aria-controls=""
                                        aria-selected="true" id=""><span
                                        >ODDS</span><!----><!----></a></li>
                                <li class="nav-item"><a
                                        href="javascript:void(0);" role="tab" class="nav-link" aria-controls=""
                                        aria-selected="false" id=""><span></span> MATCHED BET(0)
                                        <!----><!----></a></li><!---->
                            </ul>
                            <div class="tab-content">
                                <tab heading="ODDS" role="tabpanel" aria-labelledby=""
                                    class="tab-pane active"></tab>
                                <tab role="tabpanel" aria-labelledby="" class="tab-pane">
                                    <!----><app-my-bets>
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
                                                            <td colspan="3" class="text-center">
                                                                No records Found</td>
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
                        <h2 class="event-title">BJP LS v CON LS 10/06/2024 08:30:00 AM</h2>
                    
                        <div class="row">
                            <div class="col-md-12"><!---->
                                <div class="row only_bm">
                                    <div class="col-md-12">
                                        <h4 class="panel-title"> BOOKMAKER <!----><!----></h4>
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
                                                            <div class="slogen-horce"><span
                                                                 class="team-horce">BJP</span>
                                                            </div>
                                                        </div>
                                                        <div><!----><!----></div>
                                                    </div><!---->
                                                </div>
                                                <div class="odds_bhav">
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding"> 0 </strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 0.0 </span>
                                                        </div>
                                                    </div>
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding"> 0 </strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 0.0 </span>
                                                        </div>
                                                    </div>
                                                    <div class="suspendedMessage"> SUSPENDED</div>
                                                    <!----><!---->
                                                </div>
                                            </div><!---->
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds"><!---->
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                 class="team-horce">CON</span>
                                                            </div>
                                                        </div>
                                                        <div><!----><!----></div>
                                                    </div><!---->
                                                </div>
                                                <div class="odds_bhav">
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding"> 0 </strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 0.0 </span>
                                                        </div>
                                                    </div>
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding"> 0 </strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 0.0 </span>
                                                        </div>
                                                    </div>
                                                    <div class="suspendedMessage"> SUSPENDED</div>
                                                    <!----><!---->
                                                </div>
                                            </div><!---->
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds"><!---->
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce">OTHER</span></div>
                                                        </div>
                                                        <div><!----><!----></div>
                                                    </div><!---->
                                                </div>
                                                <div class="odds_bhav">
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding"> 0 </strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 0.0 </span>
                                                        </div>
                                                    </div>
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding"> 0 </strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 0.0 </span>
                                                        </div>
                                                    </div>
                                                    <div class="suspendedMessage"> SUSPENDED</div>
                                                    <!----><!---->
                                                </div>
                                            </div><!---->
                                        </div><!---->
                                    </div><!---->
                                </div><!----><!----><!---->
                            </div>
                            <div class="col-md-6"><!----><!---->
                                <div>
                                    <h4 class="panel-title"> Fancy </h4>
                                    <div class="body-odds th-bl">
                                        <div class="events_odds">&nbsp;&nbsp;</div>
                                        <div class="odds_bhav twoSectionBhavRow">
                                            <div class="Lay_oddsbox bhav_box">No</div>
                                            <div class="back_oddsbox bhav_box">Yes</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat</span>
                                                            </div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">305</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">307</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat</span>
                                                            </div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">306</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 115 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">306</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">85 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat</span>
                                                            </div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">307</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 125 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">307</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Seat Bhav 2</span>
                                                            </div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">250</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 11 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">250</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">7 </span></div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Bhav
                                                                    3</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">275</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 26 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">275</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">22 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Bhav
                                                                    4</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">310</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 140 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">310</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">120 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Bhav
                                                                    5</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">325</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 300 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">325</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">250 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Bhav
                                                                    6</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">300</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 65 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">300</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">55 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">CONG Total Seat</span>
                                                            </div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">60</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">62</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">CONG Total Seat</span>
                                                            </div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">61</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">61</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">70 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">CONG Total Seat</span>
                                                            </div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">62</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 115 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">62</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">85 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">CONG Seat Bhav</span>
                                                            </div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">50</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 35 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">50</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">27 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Gujarat</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">26</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 70 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">26</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">50 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Rajasthan</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">19</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">20</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Madhya Pradesh</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">28</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">29</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Chhattisgarh</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">10</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">11</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Uttarakhand</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">5</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 50 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">5</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">35 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Delhi</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">6</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">7</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Himachal Pradesh</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">4</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 80 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">4</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">60 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Haryana</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">5</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">6</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Uttar Pradesh</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">64</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">66</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Tamil Nadu</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">3</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 110 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">3</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">80 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Jharkhand</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">10</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">11</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Punjab</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">2</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 130 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">2</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">90 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Odisha</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">13</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">14</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">India Alliance Total
                                                                    Seat In Tamil Nadu</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">33</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">35</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">TMC Total Seat In West
                                                                    Bengal</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">21</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">23</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">YSRCP Total Seat In
                                                                    Andhra Pradesh</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">8</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">9</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">NDA Total Seat In
                                                                    Karnataka</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">18</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">20</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Telangana</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">7</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 120 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">7</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">80 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">CONG Total Seat In
                                                                    Telangana</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">8</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">9</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">NDA Total Seat In
                                                                    Assam</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">11</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">12</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Bihar</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">13</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">15</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Maharashtra</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">18</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">20</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">NDA Total Seat In
                                                                    Maharashtra</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">26</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">28</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">NDA Total Seat In
                                                                    Bihar</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">27</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">29</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat In
                                                                    Goa</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">1</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">2</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">UDF Total Seat In
                                                                    Kerla</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">14</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">16</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">NDA Total Seat In
                                                                    Andhra Pradesh</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">15</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 100 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">17</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">100 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div><!---->
                                    </div>
                                </div><!----><!---->
                            </div>
                            <div class="col-md-6"><!----><!---->
                                <div>
                                    <h4 class="panel-title"> Run Bhav </h4>
                                    <div class="body-odds th-bl">
                                        <div class="events_odds">&nbsp;&nbsp;</div>
                                        <div class="odds_bhav twoSectionBhavRow">
                                            <div class="Lay_oddsbox bhav_box">No</div>
                                            <div class="back_oddsbox bhav_box">Yes</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">BJP Total Seat Odd Run
                                                                    Bhav</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">1</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 103 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">1</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">97 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="randerScore mainScore">
                                            <div class="odds_rows">
                                                <div class="events_odds">
                                                    <div class="event-names">
                                                        <div class="horse-event">
                                                            <div class="slogen-horce"><span
                                                                
                                                                    class="team-horce hyper-text">CONG Total Seat Odd
                                                                    Run Bhav</span></div>
                                                        </div>
                                                        <div><!----></div>
                                                    </div><!----><!---->
                                                </div>
                                                <div class="odds_bhav twoSectionBhavRow">
                                                    <div class="Lay_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">1</strong>
                                                        <div class="size"><span
                                                             class="ng-binding"> 103 </span>
                                                        </div>
                                                    </div>
                                                    <div class="back_oddsbox bhav_box"><strong
                                                         class="odds ng-binding">1</strong>
                                                        <div class="size"><span
                                                             class="ng-binding">97 </span>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div><!---->
                                    </div>
                                </div><!----><!---->
                            </div>
                            <div><!----><!----><!----><!----></div><!----><!---->
                        </div>
                        <div class="col-md-4">
                            <div id="rightBarDiv" class="bets_box-main">
                                <!----><!----><app-bet-slip>
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
                                                <div class="col col-md-4 text-left"><a
                                                    ><i
                                                            class="fa fa-close text-danger"></i></a> BJP Total Seat/100
                                                </div><!---->
                                                <div class="col"><span
                                                    >307</span></div><!---->
                                                <div class="col"><input
                                                        type="number" placeholder="Amount"
                                                        class="form-control ng-untouched ng-pristine ng-valid"></div>
                                                <div class="col"> 0 </div>
                                            </div><!----><!----><!---->
                                            <div class="stakes" style="width: 100%;">
                                                <div class="btn-group"><button
                                                     type="button">100</button><button
                                                     type="button">500</button><button
                                                     type="button">1000</button><button
                                                     type="button">5000</button><button
                                                     type="button">10000</button><button
                                                     type="button">25000</button><!----></div>
                                            </div><!---->
                                            <div class="row align-items-center">
                                                <div class="col"><button
                                                        class="btn cancel-btn">reset</button></div>
                                                <div class="col"><button
                                                        class="btn betplace-btn" disabled="">submit</button></div>
                                                <!---->
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
                                                        <td colspan="3" class="text-center"> No
                                                            records Found</td>
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
            <div bsmodal="" tabindex="-1" role="dialog" aria-labelledby="dialog-static-name"
                class="modal fade">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header py-1 mobileBetplaceHeader">
                            <h4 id="dialog-static-name" class="modal-title pull-left">Place Bet
                            </h4><button type="button" data-dismiss="modal" aria-label="Close"
                                class="close"><i class="fa fa-close"></i></button>
                        </div>
                        <div class="modal-body p-0"><app-bet-slip
                            >
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
                                            <div class="col col-md-4 text-left"><a
                                                ><i
                                                        class="fa fa-close text-danger"></i></a> BJP Total Seat/100
                                            </div><!---->
                                            <div class="col"><span
                                                >307</span></div><!---->
                                            <div class="col"><input
                                                    type="number" placeholder="Amount"
                                                    class="form-control ng-untouched ng-pristine ng-valid"></div>
                                            <div class="col"> 0 </div>
                                        </div><!----><!----><!---->
                                        <div class="stakes" style="width: 100%;">
                                            <div class="btn-group"><button
                                                    type="button">100</button><button
                                                    type="button">500</button><button
                                                    type="button">1000</button><button
                                                    type="button">5000</button><button
                                                    type="button">10000</button><button
                                                    type="button">25000</button><!----></div>
                                        </div><!---->
                                        <div class="row align-items-center">
                                            <div class="col"><button
                                                    class="btn cancel-btn">reset</button></div>
                                            <div class="col"><button
                                                    class="btn betplace-btn" disabled="">submit</button></div><!---->
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
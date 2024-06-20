<footer class="home-relative">
  <div class="login_footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="footer_list">
            <p class="text-center upper-footer"><a href="responsiblegambling.php" class="theme1font">
                Responsible Gambling
              </a> |
              <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#ProhibitedTerritories" class="theme1font" role="button">Prohibited Territories</a> |
              <a href="https://www.gamcare.org.uk/" target="blank"><img src="{{asset('frontend/assets/icons/gamecare.svg')}}" class="gamecare"></a> |
              <a href="https://www.begambleaware.org/" target="blank"><img src="{{asset('frontend/assets/icons/begambleaware.png')}}" class="begambleaware"></a> |
              <a href="https://www.gamstop.co.uk/" target="blank"><img src="{{asset('frontend/assets/icons/gamstop.svg')}}" class="gamstop"></a> |
              <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#UnderAgegambling" role="button"><img src="{{asset('frontend/assets/icons/18plus.png')}}" class="plus18"></a>
            </p>
            <div class="text-center Regulations"><a href="" data-bs-toggle="modal" data-bs-target="#rulesandRegulations"><span>Rules &amp; Regulations</span></a>
              <span>© 2023</span>
              <div class="powered-by"><span>Powered By</span> <img src="{{asset('frontend/assets/icons/powered-by.png')}}">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</section>


<!-- Rules Modal -->
<div class="modal fade" id="RulesstaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl extra-wid">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Rules</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-pills nav-Rules" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#Fancy" type="button" role="tab" aria-controls="Fancy" aria-selected="true">Fancy</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#Favourite" type="button" role="tab" aria-controls="Favourite" aria-selected="false">Lunch Favourite</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#FancyMarket" type="button" role="tab" aria-controls="FancyMarket" aria-selected="false">Fancy Market 1</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#Election" type="button" role="tab" aria-controls="Election" aria-selected="false">Election</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#Khado" type="button" role="tab" aria-controls="Khado" aria-selected="false">Khado</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#BigBash" type="button" role="tab" aria-controls="BigBash" aria-selected="false">Big Bash League</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#Caribbeanpremier" type="button" role="tab" aria-controls="Caribbeanpremier" aria-selected="false">Caribbean premier
              league</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#ipl" type="button" role="tab" aria-controls="ipl" aria-selected="false">IPL</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#Bookmaker" type="button" role="tab" aria-controls="Bookmaker" aria-selected="false">Bookmaker</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#FootballFancy" type="button" role="tab" aria-controls="FootballFancy" aria-selected="false">Football Fancy</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#Betfair" type="button" role="tab" aria-controls="Betfair" aria-selected="false">Betfair</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#Kabaddi" type="button" role="tab" aria-controls="Kabaddi" aria-selected="false">Kabaddi</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#Football" type="button" role="tab" aria-controls="Football" aria-selected="false">Football</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#Tennis" type="button" role="tab" aria-controls="Tennis" aria-selected="false">Tennis</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="Fancy" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <div class="table-responsive">
              <table class="table table-bordered bg-images">
                <tbody>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        1. All fancy bets will be validated when match has been tied.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        2. All advance fancy will be suspended before toss or weather condition.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        3. In case technical error or any circumstances any fancy is suspended and does not resume
                        result will be given all previous bets will be valid (based on haar/jeet).
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        4. If any case wrong rate has been given in fancy that particular bets will be cancelled.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        5. In any circumstances management decision will be final related to all exchange items. Our
                        scorecard will be considered as valid if there is any mismatch in online portal.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        6. In case customer make bets in wrong fancy we are not liable to delete, no changes will be
                        made and bets will be consider as confirm bet.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        7. Due to any technical error market is open and result has came all bets after result will be
                        deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        8. Manual bets are not accepted in our exchange.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        9.Our exchange will provide 5 second delay in our tv.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        10. Company reserves the right to suspend/void any id/bets if the same is found to be
                        illegitimate. For example incase of vpn/robot-use/multiple entry from same IP/ multiple bets
                        at same time (Punching) and others. Note : only winning bets will be voided, For example: If
                        we find such entries (above mentioned) from any id and their bets are (200000 lay in a 6 over
                        session for the rate 40 and 200000 back for the rate of 48) and the actual score is 38, bets
                        of 40 lay will be voided and the bets for 48 back will be considered valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        11. Company reserves the right to void any bets (only winning bets) of any event at any point
                        of the match if the company believes there is any cheating/wrong doing in that particular
                        event by the players (either batsman/bowler).
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        12. Once our exchange give username and password it is your responsibility to change a
                        password.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        13. Penalty runs will not be counted in any fancy.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        14. Warning:- live scores and other data on this site is sourced from third party feeds and
                        may be subject to time delays and/or be inaccurate. If you rely on this data to place bets,
                        you do so at your own risk. Our exchange does not accept responsibility for loss suffered as a
                        result of reliance on this data.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        15.Traders will be block the user ID if find any misinterpret activities, No queries accept
                        regarding.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        16. Our exchange is not responsible for misuse of client id.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Test
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        1 Session:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1.1 Complete session valid in test.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1.2 Middle session and Session is not completed due to Innings declared or all out so that
                        particular over considered as completed and remaining over counted in next team Innings for
                        ex:- In case of Innings declared or all out In 131.5th over Considered as 132 over completed
                        remaining 1 over counted for 133 over middle session and 3 over counted for 135 over session
                        from next team Innings and One over session and Only over session is not completed due to
                        innings declared so that Particular over session bets will be deleted and all out considered
                        as valid for ex:- In case of Innings declared In 131.5th over so 132 over will be deleted and
                        if all out then 132 over and Only 132 over will be Valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1.3 1st day 1st session run minimum 25 over will be played then result is given otherwise 1st
                        day 1st session will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1.4 1st day 2nd session run minimum 25 over will be played then result is given otherwise 1st
                        day 2nd session will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1.5 1st day total run minimum 80 over will be played then result is given otherwise 1st day
                        total run will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1.6 Test match both advance session is valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        2 Test lambi/ Inning run:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        2.1 Mandatory 70 over played in test lambi paari/ Innings run. If any team all-out or
                        declaration lambi paari/ innings run is valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        2.2 In case due to weather situation match has been stopped all lambi trades will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        2.3 In test both lambi paari / inning run is valid in advance fancy.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        3 Test batsman:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        3.1 In case batsmen is injured he/she is made 34 runs the result will be given 34 runs.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        3.2 Batsman 50/100 run if batsman is injured or declaration the result will be given on
                        particular run.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        3.3 In next men out fancy if player is injured particular fancy will be deleted
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        3.4 In advance fancy opening batsmen is only valid if same batsmen came in opening the fancy
                        will be valid in case one batsmen is changed that particular player fancy will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        3.5 Test match both advance fancy batsmen run is valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        4 Test partnership:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        4.1 In partnership one batsman is injured partnership is continued in next batsman.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        4.2 Partnership and player runs due to weather condition or match abandoned the result will be
                        given as per score.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        4.3 Advance partnership is valid in case both players are different or same.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        4.4 Test match both advance fancy partnership is valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        5 Other fancy advance (test):-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        5.1 Four, sixes, wide, wicket, extra run, total run, highest over and top batsmen is valid
                        only if 300 overs has been played or the match has been won by any team otherwise all these
                        fancy will be deleted. Additionally all events are valid only for 1st innings( this is
                        applicable to all individual team events also)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Odi rule:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Session:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Match 1st over run advance fancy only 1st innings run will be counted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Complete session is valid in case due to rain or match abandoned particular session will be
                        deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        For example:- 35 over run team a is playing any case team A is all-out in 33 over team a has
                        made 150 run the session result is validated on particular run.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Advance session is valid in only 1st innings.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        50 over runs:
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        In case 50 over is not completed all bet will be deleted due to weather or any condition.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Advance 50 over runs is valid in only 1st innings.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Odi batsman runs:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        In case batsman is injured he/she is made 34 runs the result will be given 34 runs.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        In next men out fancy if player is injured particular fancy will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        In advance fancy opening batsmen is only valid if same batsmen came in opening the fancy will
                        be valid in case one batsmen is changed that particular player fancy will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Odi partnership runs:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        In partnership one batsman is injured partnership is continued in next batsman.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Advance partnership is valid in case both players are different or same.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Both team advance partnerships are valid in particular match.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Other fancy:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Four, sixes, wide, wicket, extra run, total run, highest over ,top batsman,maiden
                        over,caught-out,no-ball,run-out,fifty and century are valid only match has been completed in
                        case due to rain over has been reduced all other fancy will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        T20:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Session:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Match 1st over run advance fancy only 1st innings run will be counted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Complete session is valid in case due to rain or match abandoned particular session will be
                        deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        For example :- 15 over run team a is playing any case team a is all-out in 13 over team A has
                        made 100 run the session result is validated on particular run.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Advance session is valid in only 1st innings.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        20 over runs:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Advance 20 over run is valid only in 1st innings. 20 over run will not be considered as valid
                        if 20 overs is not completed due to any situation.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        T20 batsman runs:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        In case batsman is injured he/she is made 34 runs the result will be given 34 runs.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        In next men out fancy if player is injured particular fancy will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        In advance fancy opening batsmen is only valid if same batsmen came in opening the fancy will
                        be valid in case one batsmen is changed that particular player fancy will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        T20 partnership runs:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        In partnership one batsman is injured partnership is continued in next batsman.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Advance partnership is valid in case both players are different or same.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Both team advance partnerships are valid in particular match.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        1st 2 &amp; 3 Wickets runs:- T20/ODI
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Advance event is valid in only 1st Innings.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If over reduced due to rain or weather condition or match abandoned the result will be given
                        as per score.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Other fancy:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        T-20 ,one day and test match in case current innings player and partnership are running in
                        between match has been called off or abandoned that situation all current player and
                        partnership results are valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Four, sixes, wide, wicket, extra run, total run, highest over and top batsman,maiden
                        over,caught-out,no-ball,run-out,fifty and century are valid only match has been completed in
                        case due to rain over has been reduced all other fancy will be deleted. 1st 6 over dot ball
                        and 20 over dot ball fancy only valid is 1st innings.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1st wicket lost to any team balls meaning that any team 1st wicket fall down in how many balls
                        that particular fancy at least minimum one ball have to be played otherwise bets will be
                        deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1st wicket lost to any team fancy valid both innings.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        How many balls for 50 runs any team meaning that any team achieved 50 runs in how many balls
                        that particular fancy at least one ball have to be played otherwise that fancy bets will be
                        deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        How many balls for 50 runs fancy any team only first inning valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1st 6 inning boundaries runs any team fancy will be counting only according to run scored
                        fours and sixes at least 6 over must be played otherwise that fancy will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1st inning 6 over boundaries runs any team run like wide ,no-ball ,leg-byes ,byes and over
                        throw runs are not counted this fancy.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        How many balls face any batsman meaning that any batsman how many balls he/she played that
                        particular fancy at least one ball have to be played otherwise that fancy bets will be
                        deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        How many balls face by any batsman both innings valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Lowest scoring over will be considered valid only if the over is completed fully (all six
                        deliveries has to be bowled)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Match 30s : If a Player reached 50 means, Not considered in this Event
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Boundaries in 1st Power play : Number of Boundaries Scored in 1st Power play, 1st
                        Innings only Valid In T20/ODI Both
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Dot balls in 1st Power play : Number of Dot balls coming in 1st Power play, 1st Innings
                        only Valid In T20/ODI Both
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total match Wicket keeper's Dismissals: Wicket keepers Caught outs and Stumping Only
                        Considered In T20/ODI Both
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1st Inn Death Over Runs : Runs Scored, Last Over Only Considered, 1st Innings only Valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Match Single Digit Scores By Players : Duck outs Not Considered in this Event. If Not
                        out Batsman/Injured Batsman facing One Legal Delivery and nothing scored ('0') means
                        Considered as Single Digit
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Match 1st Over Dot ball : Number of Dot balls in Match 1st Over. 1st Innings Only Valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most Balls Faced By a Batsman : Maximum Balls Faced by an Individual Batsman in Match
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        High Pship Boundaries in the Match : Maximum Number of Boundaries Scored during any
                        Partnership
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Concussion in Test:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        All bets of one over session will be deleted in test scenario, in case session is incomplete.
                        For example innings declared or match suspended to bad light or any other conditions.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1. All bets will be considered as valid if a player has been replaced under concussion
                        substitute, result will be given for the runs scored by the mentioned player. For example DM
                        Bravo gets retired hurt at 23 runs, then result will be given for 23.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        2. Bets of both the player will be valid under concussion substitute.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Total Match- Events (test):-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Minimum of 300 overs to be bowled in the entire test match, otherwise all bets related to the
                        particular event will get void. For example, Total match caught outs will be valid only if 300
                        overs been bowled in the particular test match
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Limited over events-Test:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        This event will be considered valid only if the number of overs defined on the particular
                        event has been bowled, otherwise all bets related to this event will get void. For example
                        0-25 over events will be valid only if 25 overs has been bowled, else the same will not be
                        considered as valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the team gets all out prior to any of the defined overs, then balance overs will be counted
                        in next innings. For example if the team gets all out in 23.1 over the same will be considered
                        as 24 overs and the balance overs will be counted from next innings.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Bowler Wicket event's- Test:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Minimum of one legal over (one complete over) has to be bowled by the bowler mentioned in the
                        event, else the same will not be considered as valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Bowler over events- Test:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        The mentioned bowler has to complete the defined number of overs, else the bets related to
                        that particular event will get void. For example if the mentioned bowler has bowled 8 overs,
                        then 5 over run of that particular bowler will be considered as valid and the 10 over run will
                        get void.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Player ball event's- Test:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        This event will be considered valid only if the defined number of runs made by the mentioned
                        player, else the result will be considered as 0 (zero) balls.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        For example if Root makes 20 runs in 60 balls and gets out on 22 runs, result for 20 runs will
                        be 60 balls and the result for balls required for 25 run Root will be considered as 0 (Zero)
                        and the same will be given as result.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Limited over events-ODI:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        This event will be considered valid only if the number of overs defined on the particular
                        event has been bowled, otherwise all bets related to this event will get void. 0-50 over
                        events will be valid only if 50 over completed, if the team batting first get all out prior to
                        50 over the balance over will be counted from second innings. For example if team batting
                        first gets all out in 35 over balance 15 over will be counted from second innings, the same
                        applies for all events if team gets all out before the defined number of overs.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        The events which remains incomplete will be voided if over gets reduced in the match due to
                        any situation, for example if match interrupted in 15 overs due to rain/badlight and post this
                        over gets reduced. Events for 0-10 will be valid, all other events related to this type will
                        get deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        This events will be valid only if the defined number of over is completed. For example team
                        batting first gets all out in 29.4 over then the same will be considered as 30 over, the team
                        batting second must complete 20 overs only then 0-50 over events will be considered as valid.
                        In case team batting second gets all out in 19.4 over then 0-50 over event will not be
                        considered as valid, This same is valid for 1st Innings only.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Bowler event- ODI:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        The mentioned bowler has to complete the defined number of overs, else the bets related to
                        that particular event will get void. For example if the mentioned bowler has bowled 8 overs,
                        then 5 over run of that particular bowler will be considered as valid and the 10 over run will
                        get void.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Both innings are valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Other event:- T20
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        The events for 1-10 over and 11-20 over will be considered valid only if the number of over
                        mentioned has been played completely. However if the over got reduced before the particular
                        event then the same will be voided, if the team batting first get all out prior to 20 over the
                        balance over will be counted from second innings. For example if team batting first gets all
                        out in 17 over balance 3 over will be counted from second innings and that 3 over all events
                        are counted. This same is valid for 1st Innings only.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If over got reduced in between any running event, then the same will be considered valid and
                        the rest will be voided. For example.., match started and due to rain/bad light or any other
                        situation match got interrupted at 4 over and later over got reduced. Then events for 1-10 is
                        valid rest all will be voided.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Bowler Session: Bowler session advance events only valid for 1st inning. This event is valid
                        only if the bowler has completed his maximum quota of overs, else the same will be voided.
                        However if the match has resulted and the particular bowler has already started bowling his
                        final over then result will be given even if he haven't completed the over. For example B
                        Kumar is bowling his final over and at 3.4 the match has resulted then result will be given
                        for B Kumar over runs.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Incase of DLS, the over got reduced then the bowler who has already bowled his maximum quota
                        of over that result will be considered as valid and the rest will be voided.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Most Dot balls By a Bowler Event:
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Leg bye run and wickets considered as Dot&nbsp;ball&nbsp;in&nbsp;bowler
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Boundary on Match 1st Free hit
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Boundary hit on Free hit only be considered as valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Bets will be deleted if there is no Free hit in the mentioned match
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Boundary by bat will be considered as valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Boundaries by Player
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Both Four and six are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Inning Run Bhav Event :
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Inning run bhav bets are valid if over reduced due to rain or weather condition or match
                        abandoned the result will be given as per official result.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Settlement occurs once the stipulated conditions are met, which involves either completion of
                        the allotted overs or the batting team's dismissal, including weather disturbances.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        In the event of a weather-shortened match, all Bhav Bets placed in the Inning Run Bhav market
                        will be settled according to the official result. For limited overs matches, this includes
                        results determined by the Duckworth Lewis method
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        In case of pitch vandalism, player safety concerns, stadium damage, acts of terrorism, or acts
                        of God, the company holds the authority to nullify all bets, with the exception of those
                        related to markets that have already been conclusively settled.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Bets made during instances of incorrect scorecard updates, inaccurate commentary, delays in
                        suspending the Bhav Bets of Total Innings Runs market, or erroneous updates of rates and odds
                        for Bhav Bets in Total Innings Runs will be removed and deleted from user accounts.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Ex: 1st inning run bhav(ENG v AUS),2nd Inning run bhav(ENG v AUS) - England vs Australia T20
                        Match
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Any query regarding result or rate has to be contacted within 7 days from the event, query
                        after 7 days from the event will not be considered as valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Virtual Cricket
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Scorecard available on the video will be considered as valid. At any situation, if there is a
                        difference between the scorecard in the website and the scorecard available on video. Score
                        card available on video will be valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        In case of any technical issues the video gets interrupted/stopped and the same cannot be
                        continued, the existing markets will be voided. However the markets which are already
                        finished/settled will remain valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        World Cup:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        In case of any circumstances, management decision will be final for all the fancies under
                        world cup.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        WC:-WORLD CUP
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        MOM:-MAN OF THE MATCH.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        If World Cup fixture of 48 matches gets reduced due to any reason, then all the special
                        fancies will be voided (Match abandoned due to rain/bad light will not be considered in this)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Super over will not be included
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        At any situation if result is given for any particular event based on the rates given for the
                        same, then the particular result will be considered valid, similarly if the tournament gets
                        canceled due to any reason the previously given result will be considered valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Match 1st over runs : Average 4 runs will be given in case match abandoned or over
                        reduced (Only First Innings is Valid)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Match 1st over Dot Ball : Average 4 runs will be given in case match abandoned or over
                        reduced (Only First Innings is Valid)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Match 1st 10 over run:- Average 50 runs will be given in case match abandoned or over
                        reduced (Only First Innings is Valid)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total fours: Average 45 fours will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total sixes: Average 11 sixes will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Wickets - Average 15 Wickets will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Wides - Average 16 Wides will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total No balls:- Average 2 No ball will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Extras - Average 26 extras will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Caught outs: Average 9 caught out will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Bowled:- Average 3 Bowled out will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total LBW:- Average 2 LBW will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Run out:- Average 1 Run out will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Fifties - Average 3 fifties will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total 100s - Average 1 Hundred will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Ducks:- Average 1 Duck out will be given if the match is abandoned or over reduced. If
                        the player is not out in the score of zero the same will not be considered as Duck out.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Maidens - Average 4 Maidens will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total 50+ Partnerships - Average 3 Fifty plus Partnerships will be given in case match
                        abandoned or over reduced. 50 and 50 Above Partnerships All Counted in this.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest 1st over run in individual match: Only First Innings is Valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest 1st 10 over run in individual match: Only First Innings is Valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Fours in individual match: Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Sixes in individual match: Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Wicket in individual match: Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Extras in individual match: Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Scoring runs in Over: Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Run Scorer : Total Runs Scored by An Individual Batsman in Full Tournament
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Wicket Taker : Total Wickets Taken by a Bowler in Full Tournament
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most Balls Faced By a Batsman in the Match : Maximum Balls Faced by an Individual Batsman in
                        any Single Match
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most 4s by a Batsman in the Match : Maximum 4s Hitted by an Individual Batsman in any Single
                        Match
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most 6s by a Batsman in the Match : Maximum 6s Hitted by an Individual Batsman in any Single
                        Match
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most Boundaries Given by a Bowler : Maximum Boundaries Given by an Individual Bowler in his
                        Quota of any Single Match
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most Runs Given by a Bowler in the Match : Maximum Runs Given by an Individual Bowler in his
                        Quota of any Single Match
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most Dotballs By a Bowler in the Match : Maximum Dotballs Bowled by an Individual Bowler in
                        his Quota of any Single Match
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most Wides Given by a Bowler in the Match : Maximum Wides Given by an Individual Bowler in his
                        Quota of any Single Match
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most Wickets by a Bowler in the Match : Maximum Wickets Given by an Individual Bowler in his
                        Quota of any Single Match
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Tour Special Events
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Australia tour of Sri Lanka, 2022
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        If first match of tour (T20 or ODI) cancelled or over reduce in first match, then all special
                        fancy events will be deleted
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        If First match played completely and next match gets over reduced or cancelled, then that
                        match bets all bets will be deleted and first match bets will be valid and average will count
                        in other bets
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Ex. : First match total 4's is 20 and second match over reduced so bets after first match upto
                        second match started that all deleted and for other bets average counted total 4's is 24 and
                        third match total 4's is 26, So Result of Total 4's is 7
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        T20 :
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Matches 1st over runs : Average 6 runs will be given in case match abandoned or over
                        reduced (only 1st innings valid)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Matches 1st 6 over runs : Average 45 runs will be given in case match abandoned or over
                        reduced (Only 1st Innings valid)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total fours: Average 24 fours will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total sixes: Average 9 sixes will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Boundaries: Average 33 Boundaries will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Fifties - Average 2 Fifties will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Wickets - Average 12 Wickets will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Wides - Average 8 Wides will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Extras - Average 15 Extras will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Caught outs: Average 8 Caught out will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Bowled:- Average 2 Bowled out will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total LBW:- Average 2 LBW will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Run out:- Average 1 Run out will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        At any situation if result is given for any particular event based on the rates given for the
                        same, then the particular result will be considered valid, similarly if the tournament gets
                        canceled due to any reason the previously given result will be considered valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most runs given by Bowler in an Inning of Tour : Maximum How much Runs conceded by a
                        individual Bowler in an Innings. Ex : For T20I How much runs conceded by a bowler in his 4
                        overs Quota.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest total runs in individual match of IPL : Maximum Total runs of both Teams in individual
                        match.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest innings run - Only first inning is valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Partnership - Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest 1st over run of individual match: only first inning is valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Fours of individual match: Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Sixes of individual match: Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Extras of individual match: Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest over run: Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Top Batsman Runs in Tour : Most runs by an Individual Player in any Individual matches in
                        ODI/T20I Format of Tour
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Wickets by Bowler in Tour : Most Wickets taken by Individual Player in Overall
                        ODI/T20I Format of Tour
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Over runs in Tour : Most Runs Scored in Any Single Over of any Individual Match in
                        Overall ODI/T20I Format of Tour
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Player Total Runs : Total Runs Scored by an Individual Player in Full ODI/T20I Format of Tour
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Player Total 4s : Total 4s Hitted by an Individual Player in Full ODI/T20I Format of Tour
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Player Total 6s : Total 6s Hitted by an Individual Player in Full ODI/T20I Format of Tour
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Player Boundaries : Total Boundaries Hitted by an Individual Player in Full ODI/T20I Format of
                        Tour
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        For Player based Events, If any Player not in playing 11 suppose First match any player played
                        completely but if same player not available in next match, then that match bets all bets will
                        be deleted and first match bets will be valid and average will count in other bets
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        If any one match not in Playing 11 means Average Given for that match
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Average For Players:
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        A Finch Total Runs, Boundaries, 4s and 6s : 26,4,3 &amp; 1.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        D Warner Total Runs, Boundaries, 4s and 6s : 28,5,4&amp; 1.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        P Nissanka Total Runs, Boundaries, 4s and 6s : 22,3,2 &amp; 1.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        D Gunathilaka Total Runs, Boundaries, 4s and 6s : 23,3,2 &amp; 1.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        J Hazlewood,M Starc,D Chameera &amp; M Theekshana : 2 wkts Average given if player not in
                        playing 11.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Indoor Cricket T10 League
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        9 Players squad with 7 players a side Over Arm Box Cricket Championship
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Scoring Rules :
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Hitting the ball in Zone A (the front net, i.e., the net behind the wicket keeper) won't get
                        you any bonus runs.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the ball hits the net in Zone B (side nets between the striker's end and halfway down the
                        pitch), you get 1 bonus run.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the ball hits the net in Zone C (side nets between the bowler's end and halfway), you score
                        2 bonus runs.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Hitting the ball in Zone D (the back net, i.e., the net behind the bowler) allows you to score
                        4 or 6 bonus runs depending on how the ball hits the back net. If the ball hits the net after
                        bouncing, you get 4 bonus runs. If the ball hits the net without bouncing on the ground, you
                        score 6 bonus runs.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the ball hits Zone B or C onto Zone D, you score 3 bonus runs.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Remember that at least one physical run must be taken for any bonus runs to be scored.
                        Whatever bonus runs you get will be added to the physical runs. For example, if you strike the
                        ball into the front net for 1 bonus run and take 2 physical runs, you score a total of 3 runs
                        off the ball.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Game Format :
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        10 over a-side innings
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Power Play for the 1st 3 overs. Only 1 player allowed beyond the Inner box marking. After the
                        end of power play over, only 2 players can be outside the Inner Box.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        No Ball &amp; Wide balls as per normal cricketing rules.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the ball touches the upper net and if any player catches the ball, the batsman is
                        considered out.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the Ball Touches the Upper Net and lands safely on the field, then the batsman have to take
                        a physical run if they want, if no physical run is taken there will be no runs.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Zone A shall concede 0 runs.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the player hits the net after the middle line (Zone C) its 2 bonus runs. (only taken into
                        consideration if the players take a physical run)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the player hits the net before the middle line (Zone B) its 1 bonus run. (only taken into
                        consideration if the players take a physical run)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the ball goes straight to the boundary (Zone D) without a bounce, it’s a SIX.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the ball bounces and goes to the boundary (Zone D) it’s a FOUR.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the ball hits the upper net and goes straight to the boundary (Zone D) it’s a 6.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the ball hits the upper net and bounces and goes straight to the boundary (Zone D) it’s a
                        4.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Note: Bonus Runs are only applied if the ball hits or touches the Side Nets of that particular
                        zone (B&amp;C) and taken into consideration if the players take a physical Run.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        The bowler is not allowed to touch the front line or the side line of the Crease, in case they
                        do so it will be counted as a no ball and 2 runs will be given to the batting team and the
                        ball will not be counted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If a bowler bowls a no or a wide ball, the delivery will not be counted and each wide or no
                        ball will be given 2 runs to the batting team total.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the batsman is a right hander and if the ball goes out of the white wide line it will be
                        given as a wide ball &amp; if the ball is going leg side and is inside the Leg Side line the
                        ball is counted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Dismissals in Indoor Cricket are as followed: Bowled, Run Out, Catch Out, Stumping and
                        Handling the Ball.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the bowler is bowling directly above waist and one bounce above shoulder level it is
                        counted as a no ball, but the batter has to play the ball from the crease, in case the batter
                        is outside the crease and plays the ball it will be termed as a good ball.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Incomplete action or throwing the ball to the stump will be termed as a no ball and 2 runs
                        will be given to the batting team.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the batsman does not hit the ball after it is bowled it is considered as a Dot Ball, the
                        batsman gets 0 runs.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the batsman hits the ball and the fielders or the wicket-keeper catch it without it
                        touching the floor, the batsman will be dismissed as Catch Out.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the ball touches a fielder and then hits the nets (zones), the bonus runs will be counted,
                        if the physical runs are taken by the batter.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        No runs for overthrow.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the ball is caught directly after touching the zones (B/C), it will be treated as NOT OUT
                        and bonus runs are applicable if physical run is taken.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        If the ball touches the bonus run zones and the fielder accomplishes a run out, the batter
                        will be OUT and no bonus runs will be counted. Physical run will be counted if 1 run is taken
                        and run out happens during the second run.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        When a batter gets out, the next player coming in will take the strike.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Run out will ONLY be at the batter’s end.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        When 6 wickets of a team fall, the last batter will be allowed to bat. The team will send a
                        runner at non-striker’s end. After every physical run taken, the last batsman will have to go
                        back to strike to face the next ball. Run out for the runner will mean dismissal for the last
                        batsman.
                      </p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="Favourite" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class="table-responsive">
              <table class="table table-bordered bg-images">
                <tbody>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        1. THE TEAM WHICH IS FAVOURITE AT LUNCH WILL BE CONSIDERED AS LUNCH FAVOURITE OR THE TEAM
                        WHICH IS FAVOURITE AFTER FIRST INNING LAST BALL WILL BE CONSIDERED AS LUNCH FAVOURITE IN OUR
                        EXCHANGE .
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        2. IN ANY CIRCUMSTANCES MANAGEMENT DECISION WILL BE FINAL.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        3. IN CASE OF TIE IN T20 OR ONE DAY IN LUNCH FAVOURITE GAME , ALL BETS WILL BE DELETED IN OUR
                        EXCHANGE.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        4. IN CASE OVERS ARE REDUCED IN A MATCH,THE TEAM WHICH FAVOURITE AT LUNCH WILL BE CONSIDERED
                        AS LUNCH FAVOURITE.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        4.1 FOR EXAMPLE :- IF MATCH IS REDUCED TO 18 OVER PER SIDE IN T20 OR ONEDAY THEN AFTER 18 OVER
                        THE TEAM WHICH IS FAVOURITE AT LUNCH WILL BE CONSIDERED AS LUNCH FAVOURITE.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        5. IN CASE OF WEATHER, 1ST INNINGS MATCH OVERS ARE REDUCED AND DIRECT TARGET IS GIVEN TO TEAM
                        WHICH WILL BAT IN 2ND INNING THEN LUNCH FAVOURITE WILL BE CONSIDERED AFTER TARGET IS GIVEN AT
                        LUNCH.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        5.1 FOR EXAMPLE :- IN T20 MATCH RAIN COMES AT 14 OVER AND MATCH IS INTERRUPTED DUE TO RAIN AND
                        DIRECT TARGET IS GIVEN TO 2ND BATTING TEAM, THEN TEAM WHICH IS FAVOURITE IN MATCH ODDS AFTER
                        TARGET IS GIVEN IN MATCH, WILL BE CONSIDERED AS LUNCH FAVOURITE.
                      </p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="FancyMarket" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="table-responsive">
              <table class="table table-bordered bg-images">
                <tbody>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        1. Even odd game betting rate rules.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1.1 Completed game is valid , in case due to rain over are reduced or match abandoned
                        particular game will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1.2 All bets regarding to ODD/EVEN player/partnership are valid if one legal delivery is being
                        played, else the bets will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1.3 All bets regarding Odd/Even sessions will be deleted if the particular session is
                        incomplete, for example match got abandoned or finished before the end of particular session.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1.4 In any circumstances management decision will be final.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        2 Top batsman rules:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        2.1 If any player does not come as per playing eleven then all bets will be get deleted for
                        the particular player.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        2.2 two players done the same run in a single match (M Agarwal 30 runs and A Rayudu 30 runs,
                        whole inning top batsmen score also 30 run) then both player settlement to be get done 50
                        percent (50% , 50%)rate on their original value which given by our exchange.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Suppose we have opened value of M Agarwal 3.75 back and customer place bets on 10000 @ 3.75
                        rates and A Rayudu 3.0 back and customer place bets on 10000 @ 3.0 rates.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Whole inning result announces 30 run by both player then
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Rule of top batsman:-if you bet on M Agarwal you will be get half amount of this rate
                        (10000*3.75/2=18750 you will get)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Rule of top batsman:-if you bet on A Rayudu you will be get half amount of this rate
                        (10000*3.00/2=15000 you will get)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Top batsman only 1st inning valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        For one day 50 over and for t-20 match 20 over must be played for top batsmen otherwise all
                        bets will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Man of the Match Rules
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1. All bets will be deleted in case the match is abandoned or over reduced.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        2. All bets will be deleted if the mentioned player is not included in playing 11.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        3. In case Man of the Match is shared between two players then Dead heat rule will be
                        applicable, For example K Perera and T Iqbal shares the Man of the Match, then the settlement
                        will be done 50% of the rates accordingly.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        4. Rules similar to our Top Batsman rules.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Maximum Sixes by Team
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1. All bets will be deleted if match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        2. All bets will be deleted if both the teams hits same number of sixes.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        3. Super over will not be considered.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Maximum 6 or 10 over runs
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1. All bets will be deleted if match abandoned or over reduced.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        2. All the bets will be deleted if both the teams score is same (Runs scored in 6 or 10 overs)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        3. 6 overs for T20 and 10 overs for ODI
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        4. Both the innings are valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        5. This fancy will be valid for 1st 6 overs of both innings for T20 and 1st 10 overs of both
                        innings for ODI
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Batsman Match
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Batsman Match:- Bets for Favourite batsman from the two batsman matched.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        All bets will be deleted if any one of the mentioned player is not included in playing 11.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        All bets will be deleted unless one ball being played by both the mentioned players.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        All bets will be deleted if over reduced or Match abandoned.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        All bets will be deleted if both the player scored same run. For example H Amla and J Bairstow
                        are the batsman matched, H Amla and J Bairstow both scored 38 runs then all bets will be
                        deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Both innings will be valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Opening Pair
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1. Bets for Favourite opening pair from the two mentioned opening pair.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        2. Runs made by both the opening player will be added. For example:- J Roy scored 20 runs and
                        J Bairstow scored 30 runs result will be 50 runs.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        3. Highest run made by the pair will be declared as winner. For example: Opening pair ENG
                        total is 70 runs and Opening pair SA is 90 runs, then SA 90 runs will be declared as winner.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Both innings will be valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Our exchange Special
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        All bets will be deleted if the mentioned player is not included in playing 11.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        All bets will be deleted if match abandoned or over reduced.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Both innings will be valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Direction of First Boundary
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        All bets will be deleted if the mentioned batsman is not included in playing 11.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        All bets will be deleted if match abandoned or over reduced.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        The boundary hit through off side of the stump will be considered as off side four.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        The boundary hit through leg side of the stump will be considered as leg side four.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Boundaries through extras (byes,leg byes,wide,overthrow) will not be considered as valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Only 1st Inning will be considered
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Fifty &amp; Century by Batsman
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        All bets will be deleted if match abandoned or over reduced.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        All bets will be deleted if the mentioned batsman is not included in playing 11.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        All bets will be deleted unless the batsman faces one legal ball.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Both Innings will be valid.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        1st over Fancy
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Boundaries through extras (byes,leg byes,wide,overthrow) will not be considered.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Only 1st inning will be valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Odd Even Fancy
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Incompleted games will be deleted. Over reduced or abandoned all bets will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        For example:-275 run SL bhav must be played 50 over if rain comes or any condition otherwise
                        275 run SL bets will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Next Man out
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Next man out fancy advance &amp; in regular.
                        Both inning will be valid. If any player does not come in opening then all bets will be
                        deleted. If over reduced or abandoned then all bets will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Caught out
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Caught out fancy in advance &amp; in regular.
                        Both inning will be valid. If over reduced or match abandoned then all bets will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Wkt &amp; All out Fancy
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        5 wkt in 10 over &amp; All out in 20 over fancy is valid for both inning. If match abandoned
                        or over reduced all bets will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Test Match: Game Completed Fancy
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        1. This is the fancy for match to be won/ completed in which day &amp; session (Completed:
                        Game has to be completed)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        2. If match drawn then all the sessions will be considered as lost.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Common Market:-
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        In future, if any circumstances happens like covid issue , natural disasters or any reasons
                        series will postponed or cancelled then at that moment result will be given to difference of
                        opening rate to present rate.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Due to any reasons company has rights to take final decisions.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Common Means Only 1 Win
                      </p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="Election" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="table-responsive">
              <table class="table table-bordered bg-images">
                <tbody>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        1. THE FINAL RESULT DECLARED BY ELECTION COMMISSION OF INDIA FOR LOKSABHA ELECTION 2019 WILL
                        BE VALID IN OUR EXCHANGE.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        2. ACCIDENTAL ISSUES DURING LOKSABHA ELECTION 2019 WILL NOT BE COUNTED IN OUR EXCHANGE.
                      </p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="Khado" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="table-responsive">
              <table class="table table-bordered bg-images">
                <tbody>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Only First inning valid for T20 and one day matches.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Same will be work like Lambi. If match abandoned or over reduced, all bets will be deleted
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        You can choose your own value in this event
                      </p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="BigBash" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="table-responsive">
              <table class="table table-bordered bg-images">
                <tbody>
                  <tr>
                    <td class="text-center">
                      <p class="m-b-0">No real-time records found</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="Caribbeanpremier" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="table-responsive">
              <table class="table table-bordered bg-images">
                <tbody>
                  <tr>
                    <td class="text-center">
                      <p class="m-b-0">No real-time records found</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="ipl" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="table-responsive">
              <table class="table table-bordered bg-images">
                <tbody>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        If IPL fixture of 74 matches gets reduced due to any reason, then all the special fancies will
                        be voided (Match abandoned due to rain/bad light will not be considered in this)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Management decision will be final
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total 1st over runs: Average 6 runs will be given in case match abandoned or over reduced
                        (only 1st innings valid)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total 1st 6 over run:- Average 46 runs will be given in case match abandoned or over reduced
                        (Only 1st Innings valid)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total fours: Average 29 fours will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total sixes: Average 12 sixes will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Wickets - Average will 12 Wickets be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Wides - Average 8 wides will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Extras - Average 16 extras will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Fifties - Average 2 fifties will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Caught outs: Average 8 caught out will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Bowled:- Average 2 Bowled out will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total LBW:- Average 1 LBW will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Total Run out:- Average 1 Run out will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        At any situation if result is given for any particular event based on the rates given for the
                        same, then the particular result will be considered valid, similarly if the tournament gets
                        canceled due to any reason the previously given result will be considered valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        How many matches win by a team : Only valid for league stage matches. Ex. For CSK, How many
                        matches CSK win during league stages only considered. Playoffs matches not considered in this.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most 4's by individual batsman of IPL : Maximum Number of Fours Hit By A Batsman in full
                        Tournament. Ex. Last Season (2021) R Gaikwad Hit 64 Fours in 16 Matches. So, 64 was the Result
                        for last season.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most 4's by an individual batsman in an Inning of IPL : Maximum Number of Fours Hit By A
                        Batsman in one Innings. Ex. Last Season (2021) S Yadav Hit 13 Fours in 55th league Match. So,
                        13 was the Result for last season.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most 6's by individual batsman of IPL : Maximum Number of Sixes Hit By A Batsman in full
                        Tournament. Ex. Last Season (2021) KL Rahul Hit 30 Sixes in 13 Matches. So, 30 was the Result
                        for last season.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most 6's by individual batsman in an Inning of IPL : Maximum Number of Sixes Hit By A Batsman
                        in one Innings. Ex. Last Season (2021) K Pollard Hit 8 Sixes in 27th league Match. So, 8 was
                        the Result for last season.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most runs given by Bowler in an Inning of IPL : Maximum How much Runs conceded by a individual
                        Bowler in an Innings. Ex : Last Season (2021) L Ngidi concede 62 runs in 4 overs of 27th
                        Match. So, 62 was the Result for last season.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most wickets by Bowler in an inning of IPL : Maximum How much Wickets taken by a individual
                        Bowler in an Innings. Ex : Last Season (2021) H Patel taken 5 wickets in 1st Match. So, 5 was
                        the Result for last season.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Most 50's by individual batsman of IPL : Maximum Number of Fifties Hit By A Batsman in full
                        Tournament. Ex. Last Season (2021) Faf duPlessis Hit 6 fifties in 16 Matches. So, 6 was the
                        Result for last season.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest total runs in individual match of IPL : Maximum total runs of both Teams in individual
                        match. Ex . Last Season (2021) RR vs PBKS match both teams Total runs 438 (4th League Match) .
                        So, 438 was the Result for Last Season.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest innings run - Only first innings is valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Lowest innings run - Only first innings is valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest over run: Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest 1st over run in individual match: only first innings is valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Fours in individual match: Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Sixes in individual match: Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Extras in individual match: Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest Wicket in individual match: Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Highest 6 over run: - Both innings are valid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Super over will not be included
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        In fastest fifty always the first 50 runs will be considered, for example of R Sharma scores
                        1st fifty in 17 balls and scores 100 in next 14 balls, fastest 50 will be given based on the
                        balls for the 1st fifty runs
                      </p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="Bookmaker" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="table-responsive">
              <table class="table table-bordered bg-images">
                <tbody>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        1. Due to any reason any team will be getting advantage or disadvantage we are not concerned.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        2. Company reserves the right to suspend/void any id/bets if the same is found to be
                        illegitimate. For example incase of vpn/robot-use/multiple entry from same IP/ multiple bets
                        at the same time (Punching) and others. Note : only winning bets will be voided.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        3. We will simply compare both teams 25 overs score higher score team will be declared winner
                        in ODI (25 over comparison)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        4. We will simply compare both teams 10 overs higher score team will be declared winner in T20
                        matches (10 over comparison)
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        5. Total Wickets - Average 12 wickets will be given in case match abandoned or over reduced
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        6. Any query about the result or rates should be contacted within 7 days of the specific
                        event, the same will not be considered valid post 7 days from the event.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        7. Football-Spain LaLiga winner 2019-2020 without Barcelona &amp; Real Madrid
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        8. Highest point scoring team in the league table excluding Barcelona &amp; Real Madrid will
                        be considered as winner of this event
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        9. If two team ends up with equal points, then result will be given based on the official
                        point table
                      </p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="FootballFancy" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="table-responsive">
              <table class="table table-bordered bg-images">
                <tbody>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Tournament Total Goals, Team Total Goals goals. scored in 90 minutes or in extra-time will
                        count.Goals scored in penalty shootouts do not count.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Tournament Corners - Only corners taken in 90 minutes count.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Tournament Penalties Missed/Converted - Penalties taken in 90 minutes, extra-time and penalty
                        shootouts all count. If a penalty has to be re-taken the previous disallowed penalty(ies) do
                        not count.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Match Odds :- All bets apply to the relevant full 'regular time' period including stoppage
                        time. Any extra-time and/or penalty shoot-out is not included. For the cancellation of a goal,
                        due to VAR, bets matched between the time of the goal being scored and the time at which the
                        video assistant referee finishes the review will be voided. For the cancellation of a red
                        card, due to VAR, bets matched after the time at which the video assistant referee commences
                        the review will be voided.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Under_Over Goals :- In the event of a match starting but not being completed, all bets will be
                        void, unless the specific market outcome is already determined,
                      </p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="Betfair" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="table-responsive">
              <table class="table table-bordered bg-images">
                <tbody>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        If betfair void bets for some reason in running game or completed game and because of it the
                        account goes any up/down effect, then the company and the client will be responsible for its
                        payout.
                      </p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="Kabaddi" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="table-responsive">
              <table class="table table-bordered bg-images">
                <tbody>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        In any circumstances management decision will be final related to all Fancy of kabaddi of our
                        exchange.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        All fancy bets will be validated when match has been tied.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        Result of individual player of fancy will be validated only when player play that match.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        In any case wrong rate has been given in fancy that particular bets will be deleted.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0">
                        For Playoffs Final Result Of 40 Minutes Of Two Halves Will Be Valid In Our Exchange
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Company reserves the right to suspend/void any id/bets if the same is found to be
                        illegitimate. For example incase of VPN/robot-use/multiple entry from same or different IP and
                        others. Note : only winning bets will be voided.
                      </p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="Football" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="table-responsive">
              <table class="table table-bordered bg-images">
                <tbody>
                  <tr>
                    <td>
                      <p class="m-b-0 text-danger">
                        Company reserves the right to suspend/void any id/bets if the same is found to be
                        illegitimate. For example incase of VPN/robot-use/multiple entry from same or different IP and
                        others. Note : only winning bets will be voided.
                      </p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="Tennis" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <table class="table table-bordered bg-images">
              <tbody>
                <tr>
                  <td>
                    <p class="m-b-0 text-danger">
                      Company reserves the right to suspend/void any id/bets if the same is found to be
                      illegitimate. For example incase of VPN/robot-use/multiple entry from same or different IP and
                      others. Note : only winning bets will be voided.
                    </p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div> -->
    </div>
  </div>
</div>

<!-- Prohibited Territories Modal -->
<div class="modal fade" id="ProhibitedTerritories" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ProhibitedTerritoriesLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ProhibitedTerritoriesLabel">Prohibited Territories</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>The right to prohibit betting on the Website by customers, whether acting alone, in a syndicate or via an AGENT or Sub-agent, where such customers are residing in Prohibited Jurisdictions. As of the Commencement Date, the following are Prohibited Jurisdictions:</p>
        <p>Algeria, Australia, Austria, Bulgaria, Canada, Cyprus, the Czech Republic, Democratic People’s Republic of Korea, Denmark, Europe, France (and French territories), Germany, Gibraltar, Iran, Iraq, Ireland, Italy, Malta, Myanmar, New Zealand, Poland, Portugal, Qatar, Romania, Singapore, South Africa, Spain, Turkey, the United Kingdom, the United States of America and its territories, and any other territories that Betfair may notify the operator</p>
      </div>
    </div>
  </div>
</div>

<!-- Prohibited Territories Modal -->
<div class="modal fade" id="UnderAgegambling" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="UnderAgegamblingLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="UnderAgegamblingLabel">18+(underage gambling)</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Over 18s only</h5>
        <p>It is an offence for anyone under the age of 18 to open an account or to gamble on our exchange. We take its age-verification responsibilities very seriously. We carry out age-verification checks on all customers who use payment mechanisms which are available to under 18s and additionally perform random age-verification checks on customers using other forms of funding mechanisms. We may ask for information to verify your age and could restrict or suspend your account until your age is confirmed.</p>
        <p>PLEASE NOTE THAT ANYONE UNDER THE AGE OF 18 YEARS OLD FOUND TO BE USING THIS SITE WILL HAVE ANY WINNINGS FORFEITED AND MAY ALSO BE REPORTED TO THE POLICE.</p>
      </div>
    </div>
  </div>
</div>

<!-- the site rules and regulations Modal -->
<div class="modal fade" id="rulesandRegulations" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="rulesandRegulations" aria-hidden="true">
  <div class="modal-dialog modal-xl ext-wid">
    <div class="modal-content Prohibited-Territories">
      <div class="modal-header">
        <h4 class="modal-title" id="rulesandRegulations">THE SITE RULES AND REGULATIONS</h4>
        <button type="button" class="btn-close extra-hight" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body height700">
        <div class="apl-section-inner">
          <div class="rules-regs">
            <div class="intro interpretation">
              <h4 class="m-b-15">PART A - INTRODUCTION</h4>
              <h5 class="mt-3">Use and interpretation</h5>
              <p>These Rules and Regulations ("<b>Rules</b>") are part of the Site's <span></span>terms and
                conditions.</p>
              <p>The Rules apply to all bets placed on this online betting platform ("<b>Site</b>"). The Rules consist
                of the following:</p>
              <ul>
                <li>This INTRODUCTION section (Part A);</li>
                <li>The GENERAL RULES (set out in Part B below); and</li>
                <li>The SPECIFIC SPORTS RULES (set out in Part C below - these apply to certain sports).</li>
              </ul>
              <p>The General Rules apply to all bets unless stated otherwise in the Specific Sports Rules. If there is
                any inconsistency between the Specific Sports Rules and the General Rules, the Specific Sports Rules
                shall prevail.</p>
              <p>The rules governing how markets are offered, managed and/or settled are not the same for every market
                on each product. In certain circumstances, a bet that is settled as a winner on one product may be
                settled as a loser on the other product (and vice versa). Additionally, different settlement rules may
                apply so that, for example, bets that are a winner on one product may be settled as a dead heat or be
                voided on the other product. Customers must ensure that they familiarise themselves with the relevant
                rules that apply to the bets that they place on the Site.</p>
              <h5>Customer responsibility</h5>
              <ul>
                <li>Customers should make themselves aware of all of the Rules affecting any market on which they wish
                  to place a bet.</li>
                <li>In particular, customers who use the "one-click" option to place bets are solely responsible for
                  their actions and the Site shall have no liability to such customers for any errors made by
                  customers when using this option.</li>
              </ul>
            </div>
            <div class="general intro interpretation">
              <h5>PART B - GENERAL RULES</h5>
              <h4>Matters beyond the Site's reasonable control and malfunctions</h4>
              <p>The Site is not liable for any loss or damage you may suffer because of any: act of God; power cut;
                trade or labour dispute; act, failure or omission of any government or authority; obstruction or
                failure of telecommunication services; or any other delay or failure caused by a third party or
                otherwise outside of our control. In such an event, the Site reserves the right to cancel or suspend
                access to the Site without incurring any liability.</p>
              <p>The Site is not liable for the failure of any equipment or software howsoever caused, wherever
                located or administered, or whether under its direct control or not, that may prevent the operation of
                the Site.</p>
              <p>In the event of a technological failure or error which is apparent to the customer, the customer is
                obliged to notify the Site of such failure/error immediately. If the customer continues to place a bet
                in these circumstances, they shall take reasonable action to minimise any potential loss. In the
                absence of such action, the Site reserves the right to void a bet.</p>
              <p>The Site reserves the right in its absolute discretion to restrict access to the Site, or withhold
                funds or void any bets outstanding to a customerâ€™s account in its absolute discretion in the event
                of a technological failure or other malfunction which affects the integrity of the Site whether this
                is under its direct control or otherwise. Customers will be notified on the Site of any such
                malfunction which may operate to prevent the placing of further bets or which may result in
                outstanding bets being voided.</p>
              <h4>Managing markets In-Play</h4>
              <h5>General</h5>
              <ul>
                <li>If a market is not scheduled to be turned in-play but the Site fails to suspend the market at the
                  relevant time, then:</li>
                <ul>
                  <li>if the event has a scheduled 'off' time, all bets matched after that scheduled off time will be
                    void; and</li>
                  <li>if the event does not have a scheduled 'off' time, the Site will use its reasonable endeavours
                    to ascertain the time of the actual 'off' and all bets after the time of the 'off' determined by
                    the Site will be void.</li>
                </ul>
                <li>The Site aims to use its reasonable endeavours to suspend in-play markets at the start of and at
                  the end of the event. However, the Site does not guarantee that such markets will be suspended at
                  the relevant time.</li>
                <li>Customers are responsible for managing their in-play bets at all times.</li>
                <li>For the purposes of in-play betting, customers should be aware that transmissions described as
                  "live" by some broadcasters may actually be delayed or pre-recorded. The extent of any delay may
                  vary depending on the set-up through which they are receiving pictures or data.</li>
              </ul>
              <h4>Soccer markets - not suspending at kick-off or on the occurrence of a Material Event and rules
                relating to VAR</h4>
              <ul>
                <li>Not suspending at kick-off</li>
                <ul>
                  <li>In relation to soccer markets that are <u>scheduled to be turned in-play</u>, the Site aims to
                    use its reasonable endeavours to turn such markets in-play at kick-off and to suspend such markets
                    on the occurrence of a Material Event (see definition of "Material Event" below).</li>
                  <li>The Site does not guarantee that such markets will be suspended and turned in-play at kick-off.
                  </li>
                  <li>If a market is scheduled to be turned in-play but the Site does not suspend the market at
                    kick-off and the market is not turned in-play at any time during the match, all bets matched after
                    the scheduled time of the kick-off will be void.</li>
                  <li>If a market is scheduled to be turned in-play but the Site does not suspend the market at
                    kick-off (so unmatched bets are not cancelled at that time), but the market is turned in-play at a
                    later time during the match, all bets matched after the scheduled time of the kick-off and before
                    the first "Material Event" will stand. However, if there has been one or more "Material Events",
                    any bets matched between the first "Material Event" and the market being turned in-play will be
                    void.</li>
                </ul>
                <li>Not suspending on the occurrence of a Material Event and cancellations of Material Events due to
                  VAR</li>
                <ul>
                  <li>If the Site does not suspend a market on time for the occurrence of a Material Event, the Site
                    reserves the right to void bets unfairly matched after the Material Event has occurred. Voiding of
                    these bets may take place during the event or retrospectively once a game is completed.</li>
                  <li>Where a Material Event is cancelled due to a determination made via a video assistant referee,
                    the Site will void all bets which are matched between the occurrence of the Material Event and the
                    cancellation of it. The voiding of any such bets may take place during the event or
                    retrospectively once a game is completed.</li>
                </ul>
                <li>Definition of "Material Event"</li>
                <ul>
                  <li>For the purpose of these Rules, a "Material Event" shall mean a goal being scored, a penalty
                    being awarded or a player being sent off.</li>
                </ul>
              </ul>
              <h4>Results and market settlement</h4>
              <h5>General</h5>
              <ul>
                <li>Markets will be settled in accordance as set out in the Specific Sports Rules.</li>
                <li>Where the Specific Sports Rules do not specify how and on what basis a market will be settled,
                  markets will be settled on the official result of the relevant governing body regardless of any
                  subsequent disqualification or amendment to the result (except if an amendment is announced within
                  24 hours of the initial settlement of the relevant market in order to correct an error in reporting
                  the result).</li>
                <li>If no official result of a relevant governing body is available, the result will be determined by
                  the Site (acting reasonably) using information from independent sources. In such cases, if any new
                  information comes into the public domain within 48 hours of settlement, then the Site shall (acting
                  reasonably) determine either: (i) whether the market should be reinstated or resettled in light of
                  this new information; or (ii) whether or not to wait for further information before deciding whether
                  to reinstate or resettle the market. Except where the Site has announced that it is waiting for
                  further information, any information that comes into the public domain more than 48 hours after a
                  market has been settled shall not be considered by the Site (regardless of whether or not such
                  information may have led to a different result).</li>
                <li>In the event of any uncertainty about any result or potential result, the Site reserves the right
                  to suspend settlement of any market for an unlimited period until the uncertainty can be resolved to
                  the reasonable satisfaction of the Site. The Site reserves the right to void any market if the
                  uncertainty regarding settlement cannot be resolved to the Site's reasonable satisfaction.</li>
              </ul>
              <h4>Resettlements</h4>
              <ul>
                <li>Markets are generally settled shortly after the end of the event in question. the Site may settle
                  (or part-settle) some markets before the official result is declared (or may increase a customer's
                  'available to bet' balance by the minimum potential winnings of that customer on a given market)
                  purely as a customer service benefit. However, the Site reserves the right to amend the settlement
                  of the market if: (i) the official result is different to the result on which the Site initially
                  settled the market ; or (ii) if the whole market is eventually voided (e.g. for an abandoned event).
                </li>
                <li>The Site reserves the right to reverse the settlement of a market if a market is settled in error
                  (for example, a human or technical error).</li>
                <li>If The Site resettles a market, this may lead to amendments being made to a customer's balance to
                  reflect changes in market settlement.</li>
              </ul>
              <h4>Non-runners, withdrawals and disqualifications</h4>
              <ul>
                <li>Subject always to the Site's right to void bets under its terms and conditions or for any
                  exception under the Rules, if a market contains a statement that says "All bets stand, run or not"
                  (or something similar), then all bets on a team or competitor will stand regardless of whether or
                  not the team or competitor starts the event or takes any part in the event.</li>
                <li>If a team or competitor is disqualified, withdraws or forfeits after starting an event they will
                  be deemed a loser providing at least one other team or competitor completes the event. If no team or
                  competitor completes an event (having started) then all bets will be void except for bets on any
                  markets which have been unconditionally determined.</li>
              </ul>
              <h4>Winner with [named selection]' markets</h4>
              <ul>
                <li>The Site may from time to time offer markets that are dependent on the participation of a
                  particular competitor. If the competitor named in a 'Winner with â€¦' market title does not
                  participate in the tournament or event then all bets on the market will be void.</li>
                <li>A team or competitor will be deemed to have participated if they have taken part to the extent
                  necessary to record an official result or classification (including any disqualification but
                  excluding any "did not start" or equivalent classification).</li>
              </ul>
              <h4>Abandonments, Cancellations, Postponements</h4>
              <p>Some markets have different rules and these are listed in the Specific Sports Rules. However, where a
                market has no rules in the Specific Sports Rules in relation to an abandonment, cancellation and/or
                postponement the following shall apply.</p>
              <p>In relation to any match, fixture, game, individual event, or similar: If the event is not completed
                within three days after the scheduled completion date, then all bets on markets for this event will be
                void, except for bets on any markets that have been unconditionally determined.</p>
              <p>In relation to any tournament, competition or similar: If the event is not completed within three
                days after the scheduled completion date, then any markets relating to the event will be settled in
                accordance with the official ruling of the relevant governing body, providing such a decision is given
                within 90 days after the scheduled completion date. If no official ruling is announced in this 90 day
                period, then bets on any market relating to this event will be void, except for bets on any markets
                which have been unconditionally determined. If a market is to be voided but has been part-settled as a
                courtesy to customers, then such part-settled bets will be reversed and all bets on the market will be
                void.</p>
              <p>The Site will decide (acting reasonably) whether a market relates to a match (or similar) or a
                tournament (or similar).</p>
              <h4>Change of venue</h4>
              <p>Some markets have different rules and these are listed in the Specific Sports Rules.</p>
              <p>However, if change of venue is not dealt with in the Specific Sports Rules then the following shall
                apply:</p>
              <ul>
                <li>For any team sport: if the scheduled venue is changed after the market is loaded by the Site, all
                  bets will be void only if the new venue is a home ground of the original away team</li>
                <li>For all categories or markets other than team sports: if the scheduled venue is changed after the
                  market is loaded by the Site, all bets will stand.</li>
                <li>If there is a change in the type of scheduled surface after the market has been loaded, all bets
                  will stand.</li>
              </ul>
              <h4>Periods of time</h4>
              <p>Some markets have different rules and these are listed in the Specific Sports Rules. However, if not
                dealt with in the Specific Sports Rules then the following shall apply.</p>
              <p>If the scheduled duration of an event is changed after the market has been loaded but before the
                start of the event, then all bets will be void.</p>
              <p>Some markets refer to the length of time until an occurrence in the event (e.g. time of first goal).
                If an event happens in stoppage or injury time after any regular time period then it will be deemed to
                have occurred at the end of the regular time period. For example, if a goal is scored in first half
                stoppage-time in a soccer match it will be deemed to have occurred on 45 minutes.</p>
              <p>All bets apply to the relevant full 'regular time' period including stoppage time. Any extra-time
                and/or penalty shoot-out is not included.</p>
              <p>References within these Rules to a particular number of 'days' shall mean the end of the day local
                time after the expiry of the specified number of days.</p>
              <h4>"To qualify" markets</h4>
              <p>Some markets have different rules and these are listed in the Specific Sports Rules. However, if not
                dealt with in the Specific Sports Rules then the following shall apply.</p>
              <p>Any 'to qualify' market (e.g. "to reach the final" markets) will be determined by the competitor or
                team that qualifies, whether or not they take part in the next round or event for which they have
                qualified. Markets will be settled after the qualifying stage and any subsequent disqualification or
                amendment to the result will not count.</p>
              <h4>Dead heats</h4>
              <p>Unless stated otherwise in the Specific Sports Rules the Dead Heat Rule applies to bets on a market
                where there are more winners than expected.</p>
              <p>For each bet matched on a relevant winning selection, the stake money is first reduced in proportion
                by multiplying it by the sum of the number of winners expected, divided by the number of actual
                winners (i.e. stake multiplied by (number of winners expected/number of actual winners)). The winnings
                are then paid to the successful backers on this 'reduced stake' (reduced stake multiplied by traded
                price) and the remaining stake money is paid to the appropriate layers.</p>
              <h4>Miscellaneous</h4>
              <ul>
                <li>All references to time periods in the Rules relate to the time zone in which the event takes
                  place. For example, a reference to the start time of a football match, relates to the local kick-off
                  time.</li>
                <li>All information supplied by the Site is done so in good faith. However, the Site cannot accept
                  liability for any errors or omissions in respect of any information, such as the posting of prices,
                  runners, times, scores, results or general statistics.</li>
                <li>The Site reserves the right to correct any obvious errors and shall take all reasonable steps to
                  ensure markets are administered with integrity and transparency.</li>
                <li>If an incorrect team or competitor name is displayed (excluding minor spelling mistakes) or the
                  incorrect number of teams, competitors or outcomes is displayed in any complete market or a market
                  is otherwise loaded using incorrect information or includes any obvious error, then the Site
                  reserves the right to suspend the market and (providing it acts reasonably) to void all bets matched
                  on the market.</li>
                <li>Customers are responsible for ensuring that they satisfy themselves that the selection on which
                  they place a bet is their intended selection. For example, in the case of a competitor bearing the
                  same name as another individual not competing in the relevant event, the onus is on the customer to
                  ensure that they know which competitor the Site has loaded into the relevant market and to ensure
                  that they are placing their bet on their chosen competitor.</li>
                <li>The Site may, in its sole and absolute discretion, decide to suspend betting on a market at any
                  time (even if such suspension is earlier than anticipated by the Rules). In the interests of
                  maintaining integrity and fairness in the markets, the Site may also void certain bets in a market
                  or void a whole market in its entirety.</li>
                <li>The Site reserves the right to close or suspend a customerâ€™s account if it considers that that
                  customer has used the Site in an unfair manner, has deliberately cheated or taken unfair advantage
                  or if the customerâ€™s account is being used for the benefit of a third party. The Site also
                  reserves the right to close or suspend a customerâ€™s account if it considers that it has been used
                  in a fraudulent manner or for illegal and/or unlawful or improper purposes.</li>
                <li>The Site reserves the right to amend the Rules at any time. Any such revision will be binding and
                  effective immediately on the posting of such rule changes on the Site and any markets loaded after
                  the new Rules have been posted shall be governed by the new Rules.</li>
                <li>The Site reserves the right to cancel unmatched bets to protect customers at any time.</li>
                <li>On the settlement of any market, amounts relating to:</li>
                <ul>
                  <li>winnings/losses on bets; and</li>
                  <li>any charges</li>
                </ul>
              </ul>
              <p>will be rounded up or down to the nearest two decimal places</p>
              <h4>Multiple accounts</h4>
              <p>Customers are not permitted to hold multiple accounts. Customers who continue to operate multiple
                accounts will have their accounts "linked" and managed accordingly which may affect the extent to
                which bets can be placed on the Site.</p>
              <p>If the Site believes, in its absolute discretion, that customers have registered and/or used more
                than one account, and/or acted in collusion with one or more other individuals through a number of
                different accounts, the Site reserves the right to void bets and/or withhold any winnings arising from
                such a behaviour.</p>
            </div>
            <div class="specific">
              <h3>PART C - SPECIFIC SPORTS RULES</h3>
              <h4>Cricket</h4>
              <h5>General</h5>
              <ul>
                <li>If a ball is not bowled during a competition, series or match then all bets will be void except
                  for those on any market that has been unconditionally determined (e.g. in the 'Completed Match'
                  market).</li>
                <li>If a match is shortened by weather, all bets will be settled according to the official result
                  (including for limited overs matches, the result determined by the Duckworth Lewis method).</li>
                <li>In the event of a match being decided by a bowl-off or toss of the coin, all bets will be void
                  except for those on markets that have been unconditionally determined.</li>
              </ul>
              <h5>Test matches</h5>
              <ul>
                <li>If a match starts but is later abandoned for any reason other than weather (which may include but
                  is not limited to: dangerous or unplayable wicket or outfield; pitch vandalism; strike or boycott;
                  crowd protests/violence; stadium damage; acts of terrorism; and acts of God), the Site reserves the
                  right to void all bets, except for those on markets that have been unconditionally determined.</li>
                <li>If the match is not scheduled to be completed within five days after the original scheduled
                  completion date, then all bets on markets for this event will be void, except for bets on any
                  markets that have been unconditionally determined.</li>
              </ul>
              <h5>Limited Over matches</h5>
              <ul>
                <li>If a match is declared "No Result'', bets will be void on all markets for the event except for
                  those markets which have been unconditionally determined or where the minimum number of overs have
                  been bowled as laid out in the market specific information.</li>
                <li>In the event of a new toss taking place on a scheduled reserve day for a limited overs match all
                  bets that were placed after 30 minutes before the original scheduled start of play on the first day
                  will be made void. This rule relates to all markets except those that have been unconditionally
                  determined (e.g. in the win the toss and toss combination markets).</li>
              </ul>
              <h5>Sessions/Innings/Player Runs</h5>
              <ul>
                <li>All session/innings/player runs are based on Haar-Jeet odds format.</li>
                <li>In the event of rain reduced innings:</li>
                <ul>
                  <li>If an innings is curtailed before the original scheduled start of play, all bets will be
                    settled.</li>
                  <li>If an innings is curtailed after start of play, then all bets on markets for this event will be
                    settled up to the stipulated new innings length.</li>
                </ul>
                <li>For Advance Session markets denoted by 'ADV' in market name only the 1st team to bat Innings
                  markets are valid. For Test Matches the 1st innings for each team is valid.</li>
                <li>If innings is reduced all bets in the following markets will be void; Total Match Four, Total
                  Match Sixes, Total Match Runs, Total Match Wides, Total Match Extras, Total Match Wicket, Innings
                  Designated Line Markets.</li>
                <li>Batsman Runs - bets will stand if the batsman has faced one ball or is given out before first ball
                  is faced. Score counts if batsman is Not-Out including if innings is declared. In case of rain,
                  match abandoned etc. settled bets will be valid.</li>
                <li>Current/Next Innings Runs Odd/Even - Extras and Penalty runs will be included for settlement
                  purposes.</li>
                <li>Runs at Fall of 1st Wicket â€“ This market will be settled based on the total number of runs
                  scored at the fall of the first wicket. At least one ball must be bowled, if no wickets fall bets
                  will be void unless settlement is already determined.</li>
                <li>Runs at Fall of Next Wicket - The score before the fall of the specified wicket determines the
                  result of the market. If a team declares or reaches their target then the score at the conclusion of
                  the innings will determine the settlement of the bets. Bets will be void should no more play take
                  place following the intervention of rain, or any other delay, as the ability to reach previous
                  quotes offered will have been removed. In case of rain, match abandoned etc. settled bets will be
                  valid.</li>
                <li>Over Total Runs â€“ Bets will be settled on the total number of runs scored during the 1st over of
                  the match. Extras and penalty runs will be included. The over must be completed for bets to stand
                  unless settlement is already determined.</li>
                <li>Limited Overs Matches - <b>(Player Meter)</b>, Individual Batsmen Runs or Partnerships - In a
                  limited overs match where bets may be made on an individual batsman or partnership runs in-play and
                  the innings is curtailed or subject to any reduction in overs, then these markets will be settled at
                  the midpoint of the last available quote before the overs were reduced. If the innings resumes at a
                  later time, a new market may be formed. If a customer wants a position in the new market they are
                  required to place a new bet. If there are any subsequent reductions in overs, exactly the same rules
                  will continue to apply i.e. the market is settled at the midpoint of the last available quote before
                  the overs were reduced and a new market may be formed.</li>
                <li>Test Matches (Meter Paari) - All bets, open or closed, on a teamâ€™s innings runs shall be void if
                  50 full overs are not bowled unless one team has won, is dismissed or declares prior to that point.
                </li>
                <li>Test Matches - (PLAYERS METER) Individual Batsmen Runs / Partnerships - All bets, open or closed,
                  on an individual batsman or partnership runs shall be void if 50 full overs are not bowled unless
                  one team has won, is dismissed or declares prior to that point. Bets on partnership totals make up
                  when the next wicket falls. If a batsman in the relevant partnership retires hurt, the partnership
                  is treated as continuing between the remaining batsman and the batsman who comes to the wicket. A
                  partnership is also treated as being ended by the end of an innings.</li>
              </ul>
              <h5>Exchange Runs</h5>
              <ul>
                <li>Bets are placed in an exchange and matched with corresponding bets.</li>
                <li>Bets will be matched at the requested run line or better.</li>
                <li>All exchange runs are based on decimal odds format.</li>
                <li>All bets are placed at 2.00 odds.</li>
                <li>
                  Bets will be void in the following cases, regardless of whether the outcome of the bet is already
                  unconditionally determined:
                  <ol class="type-a">
                    <li>if the scheduled number of overs for the innings is reduced by rain interruption and at
                      settlement time, the actual number of overs bowled is less than the number of overs stipulated
                      for the market; or</li>
                    <li>if the scheduled number of overs for the innings is reduced for any other reason after the
                      innings has begun, and at settlement time, the reduced number of scheduled overs is less than
                      the number of overs stipulated for the market.</li>
                  </ol>
                </li>
                <li>Please note that if the batting side reach their target within the total amount of stipulated
                  overs or have been bowled out and the innings hasnâ€™t been reduced in overs to less than the
                  stipulated number of overs for the market, the market will be settled as complete.</li>
              </ul>
              <h5>Completed Match</h5>
              <ul>
                <li>A match will be treated as "Completed" when the required number of overs for that game have been
                  completed as determined by the match officials. If the required number of overs for that match has
                  not been completed, the match will be treated as "Match Abandoned" or "No Result" and bets will be
                  settled accordingly.</li>
              </ul>
              <h4>Soccer</h4>
              <ul>
                <li>If the Site does not suspend a market on time for the occurrence of a Material Event, the Site
                  reserves the right to void bets unfairly matched after the Material Event has occurred. Voiding of
                  these bets may take place during the event or retrospectively once a game is completed.</li>
                <li>If a match has not started (or if the Site believes that a match will not have started) by 23:59
                  (local time) on its scheduled start date, then all bets will be void unless the Site has knowledge
                  that the match has been rescheduled to be played within three days of its original start date.</li>
                <li>If a match starts but is later abandoned or postponed and the Site believes that the match will
                  not have been completed by 23:59 (local time) on its scheduled start date, then all markets, with
                  the exception of any unconditionally determined markets, will be void unless the Site has knowledge
                  that the match has been rescheduled to be played within three days of its original start date. If
                  the Site does have knowledge that the game will be played within three days and the game is played
                  within three days, then all bets will stand except if the match is restarted from the beginning. If
                  the match is restarted from the beginning then all bets matched before the market went in-play will
                  stand, but any bets placed in-play will be void, except for any bets placed in-play on markets which
                  have been unconditionally determined, which will stand.</li>
                <li>For Friendly matches, all bets apply to the full duration of play according to the match
                  officials, plus any stoppage time. If a friendly match starts but is later abandoned or postponed
                  and is not completed (i.e. the full duration of play according to match officials, plus any stoppage
                  time) within three days of the scheduled start date, all bets will be void except for those on
                  markets which have been unconditionally determined. In the case of ambiguity over the official
                  result from match officials, the outcome will be determined by the Site (acting reasonably) using
                  information from independent sources.</li>
                <li>Match odds bets apply to the full duration of play according to the match officials, plus any
                  stoppage time. They do not include any result given after Extra Time or Penalties.</li>
                <li>If an official fixture lists different team details to those listed on the Site (for example, the
                  team name, reserves, age group, gender, etc), then all bets matched on the affected markets will be
                  void. In all other cases, bets will stand (including instances where a team name is listed without
                  specifying the term 'XI' in the name). If an official fixture is shown on the Site under an
                  incorrect competition name, then the Site reserves the right to void all bets matched on the
                  affected markets.</li>
                <li>If a team is disqualified, thrown out or otherwise removed from a league, one of the following
                  will apply:
                  <ul>
                    <li>If this happens before the relevant season has started, all bets on all affected markets will
                      be void (except for those on markets which have been unconditionally determined);</li>
                    <li>If this happens after relevant season has started, all affected markets will stand and the
                      team will be deemed to be relegated and all bets on that team will be settled accordingly in all
                      relevant markets (assuming, of course, that it is not subsequently reinstated before the end of
                      the season).</li>
                  </ul>
                </li>
                <li>The relevant season will be deemed to have started once the first league game has been played. For
                  the purposes of this rule, markets relating to individual matches will not be deemed to be "affected
                  markets".</li>
                <li>For 'top goalscorer' markets only the goals scored in the league or competition stated in the
                  Market Information count. For example, if a player joins a club mid-season any goals scored in a
                  different league will not count, however goals scored for a different club in the same league will
                  count. Own goals will not count.</li>
                <li>In markets which relate to the number of incidents to occur, such as 'number of corners', these
                  will be determined on the basis of the number taken, rather than awarded.</li>
                <li>For markets that relate to the number of bookings given, the number of corners taken, any
                  goalscorer or the time of a particular goal, the result will be determined by the Site (acting
                  reasonably) using information from independent sources. In such cases, if any new information comes
                  into the public domain within 48 hours of settlement, then the Site shall (acting reasonably)
                  determine either: (i) whether the market should be reinstated or resettled in light of this new
                  information; or (ii) to wait for further information before deciding whether to reinstate or
                  resettle the market. Except where the Site has announced that it is waiting for further information,
                  any information that comes into the public domain more than 48 hours after a market has been settled
                  shall not be considered by the Site (regardless of whether or not such information may have led to a
                  different result).</li>
              </ul>
              <h4>Tennis</h4>
              <ul>
                <li>If a player or pairing retires or is disqualified in any match, the player or pairing progressing
                  to the next round (or winning the tournament in the case of a final) will be deemed the winner.
                  However if less than one set has been completed at the time of the retirement or disqualification
                  then all bets relating to that individual match will be void.</li>
                <li>All bets will stand regardless of changes to scheduled venues, including any changes to a
                  different type of surface.</li>
                <li>If the scheduled duration of a match is reduced or increased in the number of games/sets required
                  to win, all bets will be void except for those on markets which have been unconditionally
                  determined. Please note that this does not apply to 'Match Odds' or 'Set Winner' markets on Davis
                  Cup matches or 'dead rubber' matches that have been shortened from five sets to three sets after the
                  market has been loaded, provided that the match has been shortened in accordance with the
                  competition's rules.</li>
                <li>Where markets are offered on individual games or sets within a match, a retirement or
                  disqualification during a game or set will render bets on that game or set market and all individual
                  game or set markets void except those on markets which have been unconditionally determined.</li>
              </ul>
              <h4>Greyhound racing</h4>
              <ul>
                <li>All bets (excluding those struck on ante-post and Australian licensed markets) are placed on trap
                  numbers. Greyhound names are displayed for information purposes only.</li>
                <li>Markets will be determined according to the official result at the time the track gives the result
                  green light status, either in the form of an announcement or by display. Subsequent
                  disqualifications, appeals or amendments to the result will be disregarded.</li>
                <li>If a non-runner or reserve runner is declared, then all bets prior to the update of the market on
                  the Site will be void and all unmatched bets including 'Take SP' and 'keep' bets will be cancelled
                  (except for certain SP bets as set out in Paragraph 10.5 of Part B above).</li>
                <li>If there are no finishers in any race or any race is declared void before the official result is
                  declared then all bets will be void.</li>
                <li>If the scheduled venue is changed after the market has been loaded by the Site, all bets will be
                  void.</li>
              </ul>
              <h5>Australian Specific Non-Runner Rules</h5>
              <ul>
                <li>Notwithstanding the above, the following rules apply to declared non-runners in Australian
                  greyhound markets.</li>
                <li>If a greyhound becomes a notified non runner after the market is loaded but prior to the
                  commencement of the race it will be removed and all bets on the market, matched prior to the update
                  of the market on the Site, will be voided.</li>
                <li>If, following the completion of a race, the stewards declare a greyhound a non-runner, the Site
                  will resettle the market and will void all bets that were placed on that runner only. The Site will
                  then apply a reduction factor to all bets placed on the winner (or placegetters in the case of place
                  markets) based on that runner's weighted average price.</li>
              </ul>
              <h4>Horseracing</h4>
              <h5>General</h5>
              <ul>
                <li>All individual race markets will be determined according to the official result at the time of the
                  'weigh-in' announcement (or equivalent). Subsequent disqualifications, appeals or amendments to the
                  result will be disregarded.</li>
                <li>If a race is abandoned or otherwise declared void, or in the event of a walkover, all bets on that
                  race will be void.</li>
                <li>If the scheduled venue is changed after the market has been loaded by the Site, all bets will be
                  void.</li>
                <li>Where a race does not take part on its scheduled day, all bets will be void.</li>
                <li>If a scheduled surface type is changed (e.g. turf to dirt) all bets will stand.</li>
                <li>Horseracing Exchange Multiples are based on the Site's 'day of the race' markets (and not the
                  Site's ante-post markets). The Site's horseracing ante-post rules do not therefore apply in relation
                  to horseracing Exchange Multiples.</li>
              </ul>
              <h5>The Site Non-Runner Rule</h5>
              <ul>
                <li>The Site's non-runner rule relates to the adjustment of odds on bets already matched when a horse
                  in a race is declared a non-runner. In order to make the adjustment the Site applies a reduction
                  factor to the remaining runners. The reduction factor allocated to a non-runner is a calculation
                  (the details of which are described below) of that horse's chances of winning (or being placed, etc
                  as appropriate) and is applied to bets already matched on the other runners in the relevant market
                  or markets.</li>
                <li>Any horse listed when the relevant market is loaded which does not subsequently come under
                  starter's orders is deemed to be a non-runner.</li>
                <li>When the market is loaded each horse is given a 'reduction factor', based on a forecast price,
                  which is expressed as a percentage. These reduction factors may be updated periodically at the
                  discretion of the Site based on trading in the market, but after approximately 15 minutes
                  (approximately 5 minutes for Australian and US markets) from the scheduled 'off' time of a given
                  race, they will be updated only in exceptional circumstances. The current reduction factor
                  percentage for each horse can be viewed on the 'info' page on the Site website or by asking the
                  Helpdesk.</li>
                <li>Reductions will be made to both win and place markets but applied differently (as described
                  below), and horses will have a different reduction factor for each market.</li>
                <li>As soon as the Site becomes aware that a horse is an official non-runner or a highly likely
                  non-runner, following a statement to the press from connections, the following will happen:</li>
                <li>All matched bets on that horse will be void and the horse will be removed from the market.</li>
                <li>In the win market: if the reduction factor of the non-runner is 2.5% or greater, the traded price
                  of all the matched bets on the remaining horses will be reduced by an amount equal to the
                  non-runner's final reduction factor and all the unmatched offers to lay will be cancelled. If the
                  non-runner's reduction factor is less than 2.5%, reductions will not be applied and unmatched bets
                  will not be cancelled.</li>
                <li>In the place market the reduction factor of all non-runners will be applied (even if less than
                  2.5%) and the potential winnings in relation to matched bets on the remaining horses will be reduced
                  by an amount equal to the non-runner's final reduction factor. Only if the non-runner's reduction
                  factor is 4.0% or greater will all the unmatched offers to lay be cancelled.</li>
                <li>All the reduction factors on the remaining horses will be adjusted to reflect their improved
                  chance of winning.</li>
                <li>Reduction factors are not applied to bets which are struck in-play. However, if a market is turned
                  in-play prematurely by error (or, for example, there is a false start), all bets matched during this
                  time will be subject to any later reduction factor, provided the market is turned out of play before
                  the race commences. In the event of a late withdrawal, the Site reserves the right to remove the
                  runner after completion of the race. In this case only those bets matched prior to the off will be
                  affected by a reduction factor.</li>
                <li>In the event of a non-runner being removed from a race in error or following incorrect information
                  regarding a runner's participation, the Site will reinstate both the runner and all previously
                  matched bets associated with that runner. All bets made between the time of withdrawal and
                  reinstatement will be void in both the place market and the win market. The reduction factor applied
                  to matched bets at the time of withdrawal will be reversed and the original prices will become
                  valid.</li>
                <li>Any non-runners will be removed from the relevant markets in the order in which they are brought
                  to the Site's attention. If the Site becomes aware of more than one non-runner at the same time, it
                  will remove the non-runners from the relevant markets in racecard order.</li>
                <li>If a runner is not included in a market because of an error or because of incorrect information
                  regarding a runner's participation, the Site reserves the right to introduce the missing runner into
                  the market at any time prior to settlement (even after the race has been run), provided that the
                  Site has determined that the missing runner is not a material runner (i.e. a selection with a
                  reduction factor of approx. 2.5% or less in the win market). In such circumstances, all pre-play
                  unmatched and matched bets will stand, however if the runner is not introduced before the start of
                  the race, all in-play bets will be void. However, if the missing runner is deemed to be a material
                  runner, then the malformed market will be void and a new market will be loaded where possible.</li>
              </ul>
              <h5>How the Reductions are applied for Exchange markets</h5>
              <ul>
                <li>In the win market, reductions will be made on the traded price.</li>
                <li>For example: if the non-runner's final reduction factor is 25% the traded price on all previously
                  matched bets on other horses will be reduced by 25% - traded price of 8.0 would become 6.0 etc. And
                  these might be further reduced if another horse is subsequently declared a non-runner.</li>
                <li>For example: if the non-runner's final reduction factor is 25% the traded price on all previously
                  matched bets on other horses will be reduced by 25% - - traded price of 8.0 would become 6.0. If the
                  each Way terms were 1/5th odds for 3 places, the corresponding price for the Place portion of the
                  bet would reduce from 2.4 to 2.0.</li>
                <li>In the place market, reductions will be made to the potential winnings on the bet only, and not
                  the traded price.</li>
                <li>For example: if the non-runner's final reduction factor is 25% the potential winnings on all
                  previously matched bets on the other horses will be reduced by 25% - a traded price of 8.0 would
                  become 6.25. For example a Â£10 bet on a horse to be placed at a traded price of 8.0 would provide
                  winnings of Â£70. If there is a non-runner with a reduction factor of 25% in the race, that factor
                  will be applied to the Â£70 of potential winnings leaving potential winnings of Â£52.50. Therefore
                  the revised traded price will be 6.25.</li>
                <li>The traded price may be further reduced if any other horse(s) is subsequently declared a
                  non-runner, however odds cannot be reduced below 1.01.</li>
                <li>Reserves: A reserve runner may appear in the relevant markets but will have a non-applicable
                  reduction factor until the Site has received confirmation that it is a confirmed runner, in which
                  case an applicable reduction factor may apply to it.</li>
                <li>For the avoidance of doubt, any reduction factor applicable to a non-runner replaced by a reserve,
                  will be applied to all bets struck on the relevant markets, prior to the removal from those markets
                  of such non-runner by the Site. Likewise, should a reserve runner become a confirmed runner but
                  subsequently become a non-runner, any reduction factor applicable to such non-runner will be applied
                  to all bets struck on the relevant markets, prior to the removal from those markets of such
                  non-runner by the Site.</li>
              </ul>
              <h5>Additional rules</h5>
              <ul>
                <li>Card numbers are posted as a guide only: bets are placed on a named horse.</li>
                <li>Horses will not be coupled.</li>
                <li>Where any horse(s) runs for purse money only it is deemed a non-runner for betting purposes.
                  Should this result in the number of possible winners stated in the relevant Market Information being
                  equal to or greater than the number of runners in the relevant Site market, all bets in the market
                  will be void.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@include('layouts.client-footer-url')
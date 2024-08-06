@extends('web_layout.app')
@section('style')
<style>
  /* Style Goes Here */

  /* Style Goes Here */
</style>
<style>
  .liveTvMatch {
    width: 100%;
    height: 400px;
    /* Adjust the height as needed */
    position: relative;
  }

  iframe {
    width: 100% !important;
    ;
    height: 100% !important;
    ;
    border: none;
  }
</style>

@endsection
@section('content')

<input type="hidden" id="channel_id" name="channel_id" value="{{$game_single['channel_id'] ?? ''}}">
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
                          <tbody class="my-bet-table">
                            @if(!empty(Session::get('myBets')))
                            @foreach(Session::get('myBets') as $m)
                            <tr>
                              <td class="text-left">{{$m->team_name}};
                              <td class="text-left">{{$m->bet_odds}};
                              <td colspan="3" class="text-left">{{$m->bet_stake}};
                            </tr>
                            @endforeach
                            @else
                            <tr>
                              <td colspan="3" class="text-left text-center">No data Found</td>
                            </tr>
                            @endif
                          </tbody><!---->
                        </table>
                      </div>
                    </div>
                  </app-my-bets></tab>
              </div>
            </tabset><!---->
          </div>
          <div class="col-md-8">
            <?php if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) { ?>
              <div class="betting-table lay-bt" style="position: relative;">
                <h2 _ngcontent-uhn-c87="" class="mrkname" id="liveMatchLink"> Live Match </h2>
              </div>
              <div id="liveTvMatch"></div>
            <?php } ?>
            <style>
              .container {
                background-color: #2a2a3c;
                padding: 20px;
                border-radius: 10px;
                text-align: center;
                color: white;
              }

              .header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 20px;
              }

              .header .title {
                font-size: 18px;
              }

              .header .date {
                font-size: 14px;
                color: #bfbfbf;
              }

              .score {
                display: flex;
                justify-content: space-between;
                align-items: center;
              }

              .team {
                display: flex;
                align-items: center;
              }

              .team img {
                width: 30px;
                height: 30px;
                margin-right: 10px;
              }

              .team .name {
                font-size: 16px;
              }

              .goal {
                font-size: 14px;
                color: #bfbfbf;
              }

              .result {
                font-size: 24px;
                font-weight: bold;
              }

              .half-time {
                font-size: 12px;
                color: #bfbfbf;
                margin-top: 10px;
              }
            </style>
            <?php if (!empty($game_single['channel_id'])) { ?>
              <div class="container">
                <div class="header">
                  <div class="title">{{$game_single['game_title'] ?? ""}}</div>
                  <div class="date">{{$game_single['run_date_time'] ?? ""}}</div>
                </div>
               <hr>
                <div id="scoreboard"></div>
                <div id="timer" style="text-align:center;font-weight: bold;font-size: 25px;"></div>
              </div>
            <?php } ?>
            <h2 class="event-title">{{$game_single['game_title'] ?? ""}}</h2>
            <div id="scoreCard" class="multi-collapse">
              <div class="col-12 px-0"><app-score-card class="scoreCard_game"><!----></app-score-card></div>
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

                  <div class="randerScore mainScore matchoddclass">

                  </div><!---->
                </div>

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

                <div class="randerScore mainScore " id="over_0_goals">

                </div>

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

                <div class="randerScore mainScore " id="over_under_1_point_5_goals">

                </div>

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

                <div class="randerScore mainScore over_under_2_point_5_goals">

                </div>

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

                <div class="randerScore mainScore over_under_3_point_5_goals">

                </div>

              </div><!----><!----><!----><!---->
            </div>
            <div><!----><!----><!----><!----></div><!----><!---->
          </div>
          <div class="col-md-4">

            <?php if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) { ?>

              <!-- // If the user agent indicates a mobile device, use mobile styles -->
              <div id="rightBarDiv" class="bets_box-main " style="display:contents;">
              <?php   } else { ?>

                <!-- // Otherwise, use desktop styles -->
                <div id="rightBarDiv" class="bets_box-main ">
                  <div class="betting-table lay-bt" style="position: relative;">
                    <h2 _ngcontent-uhn-c87="" class="mrkname" id="liveMatchLink"> Live Match </h2>
                  </div>
                  <div id="liveTvMatch"></div>
                <?php  } ?>





                @if(Session::has('message'))
                <p class="alert alert-success"><strong>{{Session::get('message')}}</strong></p>
                @endif
                @if(Session::has('error'))
                <p class="alert alert-danger"><strong>{{Session::get('error')}}</strong></p>
                @endif

                <!--<div id="rightBarDiv" class="bets_box-main"> ---->
                <app-bet-slip _nghost-xyn-c87="" class="show_bet">
                  <form action="{{route('football-bet-place')}}" method="POST">
                    @csrf
                    <div class="betting-table lay-bt" style="position: relative;">
                      <h2 class="mrkname d-flex justify-content-between align-items-center">
                        place bet
                        <span class="text-right remove_bet">X</span>
                      </h2>
                      <div class="back">
                        <div class="row align-items-center">
                          <div class="col col-md-4"> (Bet for) </div>
                          <div class="col"> Odds </div>
                          <div class="col"> Stake </div>
                          <div class="col"> Profit </div>
                        </div><!---->
                        <div class="row border-bottom align-items-center">
                          <div class="col col-md-4 text-left bat_team_place"><a><i class="fa fa-close text-danger"></i></a> </div>
                          <div class="col"><input type="hidden" name="bet_input_stake" id="bet_input_stake"><input type="text" name="bet_odds" id="bet_input" readonly="true" min="1.01" max="999.99" class="form-control ng-untouched ng-pristine ng-valid"><a href="javascript:void(0)" class="arrow-up"><i class="fa fa-angle-up"></i></a><a href="javascript:void(0)" class="arrow-down"><i class="fa fa-angle-down"></i></a></div><!----><!---->
                          <div class="col"><input type="number" name="bet_stake" id="add_input" placeholder="Amount" class="form-control ng-untouched ng-pristine ng-valid"></div>
                          <div class="col profit_div"> 0 </div>
                          <input type="hidden" name="back_lay" id="back_lay">
                          <input type="hidden" name="match_id" id="match_id">
                          <input type="hidden" name="bet_profit" id="bet_profit">
                          <input type="hidden" name="bet_team_name" id="bet_team_name">
                        </div><!----><!----><!---->
                        <div class="stakes" style="width: 100%;">
                          <div class="btn-group"><button type="button" class="add_bet">100</button><button type="button" class="add_bet">500</button><button type="button" class="add_bet">1000</button><button type="button" class="add_bet">5000</button><button type="button" class="add_bet">10000</button><button type="button" class="add_bet">25000</button><!----></div>
                        </div><!---->
                        <div class="row align-items-center">
                          <div class="col"><button class="btn cancel-btn" id="reset_btn">reset</button></div>
                          <div class="col"><button class="btn betplace-btn" disabled="">submit</button></div><!---->
                        </div><!---->
                      </div><!----><!---->
                    </div>
                  </form>
                </app-bet-slip>
                <!-- <app-my-bets _nghost-xyn-c88="">
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
                        </thead>
                        <tbody class="my-bet-table">
                          @if(!empty(Session::get('myBets')))
                          @foreach(Session::get('myBets') as $m)
                          <tr>
                            <td class="text-left">{{$m->team_name}};
                            <td class="text-left">{{$m->bet_odds}};
                            <td colspan="3" class="text-left">{{$m->bet_stake}};
                          </tr>
                          @endforeach
                          @else
                          <tr>
                            <td colspan="3" class="text-left text-center">No data Found</td>
                          </tr>
                          @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </app-my-bets> -->
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
            <div class="modal-body p-0">

              <app-bet-slip _nghost-xyn-c87="">
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
                      <div class="col col-md-4 text-left"><a><i class="fa fa-close text-danger"></i></a> </div>
                      <div class="col"><input type="number" readonly="true" min="1.01" max="999.99" class="form-control ng-untouched ng-pristine ng-valid"><a href="javascript:void(0)" class="arrow-up"><i class="fa fa-angle-up"></i></a><a href="javascript:void(0)" class="arrow-down"><i class="fa fa-angle-down"></i></a></div><!----><!---->
                      <div class="col"><input type="number" placeholder="Amount" class="form-control ng-untouched ng-pristine ng-valid"></div>
                      <div class="col"> 0 </div>
                    </div><!----><!----><!---->
                    <div class="stakes" style="width: 100%;">
                      <div class="btn-group"><button type="button">100</button><button type="button">500</button><button type="button">1000</button><button type="button">5000</button><button type="button">10000</button><button type="button">25000</button><button type="button" class="add_bet">25000</button><button type="button" class="add_bet">50000</button><button type="button" class="add_bet">100000</button><button type="button" class="add_bet">500000</button><!----></div>
                    </div><!---->
                    <div class="row align-items-center">
                      <div class="col"><button class="btn cancel-btn">reset</button></div>
                      <div class="col"><button class="btn betplace-btn" disabled="">submit</button></div><!---->
                    </div><!---->
                  </div><!----><!---->
                </div>
              </app-bet-slip>
            </div>
          </div>
        </div>
      </div><!----><!---->
    </div>
  </app-sport-detail><!----></div>
@endsection
@section('script')
<script>
  document.getElementById('liveMatchLink').addEventListener('click', function() {

    var liveTvMatchDiv = document.getElementById('liveTvMatch');
    var channel_id = $("#channel_id").val();


    if (liveTvMatchDiv.style.display === 'none' || liveTvMatchDiv.style.display === '') {
      var iframe = document.createElement('iframe');
      iframe.src = channel_id;
      // iframe.src = "https://allinonereborn.in/web/ptv.html";
      // iframe.src = "https://tveboxlive.blogspot.com/?m=1&autoplay=1";
      // iframe.src = "https://allinone-tataplay-web-one.vercel.app/player.html?channel=24";
      liveTvMatchDiv.innerHTML = ''; // Clear any previous content
      liveTvMatchDiv.appendChild(iframe);
      liveTvMatchDiv.style.display = 'block'; // Show the div
      liveTvMatchDiv.style.height = '215px'; // Show the div
      iframe.style.height = '100%'; // Show the div
      iframe.style.width = '100%'; // Show the div
    } else {
      liveTvMatchDiv.style.display = 'none'; // Hide the div
    }
  });
</script>
<script>
  $(function() {
    @if(empty(Session::get('myBets')))
    $(".show_bet").hide();
    @endif
    $(document).on('click', '.bet_text', function() {
      $(".show_bet").show();
      const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
      if (isMobile) {
        $('html, body').animate({
          scrollTop: $(document).height()
        }, 800);
      }
      // $elem = $(this).parent("div");
      $elem = $(this).parents('.mainScore').first();

      // $elem.parents('.event-names').length // id = $div.attr("id");

      text = $elem.find(".team_name").text();

      $('#back_lay').val($(this).data("back-lay"));
      $('#match_id').val($(this).data("match-id"));
      $('#bet_input_stake').val($(this).data("match-stake"));
      $('#bet_team_name').val($(this).data("team-name"));


      console.log($(this).data("match-id"));
      console.log($(this).text());

      // alert( text  );
      $('.bat_team_place').text(text);
      $("#bet_input").val($(this).text());
    });
  });
</script>


<script>
  $(function() {
    $(".add_bet").click(function() {
      // alert($("#bet_input").val());
      // alert($(this).text());
      var amnt = $(this).text();
      var odds = $("#bet_input_stake").val();
      var profit = amnt * odds;
      console.log(profit);
      $(".profit_div").text(profit);
      $("#add_input").val($(this).text());
      $("#bet_profit").val(profit);
      $('.betplace-btn').prop("disabled", false);
    });
    $("#reset_btn").click(function() {
      $("#add_input").val("");
      $("#bet_input").val("");
      $(".profit_div").text("");
    });
  });
</script>

<script>
  setTimeout(function() {
    if ($(".alert").is(":visible")) {
      //you may add animate.css class for fancy fadeout
      $(".alert").fadeOut("slow");
    }
  }, 2000)
</script>
<script>
  $(".remove_bet").click(function() {
    $(".show_bet").hide();
  });
</script>

<script>
  $(document).ready(function() {
    function loadCricketDetails() {
      var game_id = "{{ $game_id }}"; // Replace with your actual game ID or pass it dynamically

      $.ajax({
        url: game_id, // Update with your actual route
        // url: '/football-details/' + game_id, // Update with your actual route
        // url: '/newsilvergit/football-details/' + game_id, // Update with your actual route
        method: 'GET',
        success: function(data) {

          updateCricketDetails(data);
        },
        error: function(xhr, status, error) {
          console.error('Error fetching cricket details:', error);
        }
      });

      $.ajax({
        url: game_id, // Update with your actual route
        method: 'GET',
        success: function(data) {

          console.log(data);
          var score = `

          <div class="score">
                  <div class="team">
                   <img src="https://allpanel.art/public/highlight.b1ac6c3e.png" alt="Al Mokawloon">
                    <div class="name">${data.score.football.team_name_a}</div>
                  </div>
                  <div class="result"><span></span> ${data.score.football.score_a} : ${data.score.football.score_b}</div>
                  <div class="team">
                  <img src="https://allpanel.art/public/highlight.b1ac6c3e.png" alt="Al Mokawloon">
                    <div class="name">${data.score.football.team_name_b}</div>
                   </div>
                </div>
          `;
          $('#scoreboard').html(score);
        },
        error: function(xhr, status, error) {
          console.error('Error fetching cricket details:', error);
        }
      });

    }
 
    function updateCricketDetails(data) {

      // // Update the HTML with new data (example below, adapt as needed)
      var matchOddsHtml = '';
      $.each(data.response.match_odds, function(index, r) {
        matchOddsHtml += `<div class="odds_rows">
                    <div class="events_odds">
                        <div class="event-names">
                            <div class="horse-event">
                                <div class="slogen-horce">
                                    <span class="team-horce team_name">${r.team_name}</span>
                                </div>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="odds_bhav">`;

        if (r.back_status == 1) {
          matchOddsHtml += `<div class="back_oddsbox bhav_box">
                    <strong class="odds ng-binding bet_text" 
                            data-back-lay="back" 
                            data-match-stake="${r.stake}" 
                            data-match-id="${r.id}" 
                            data-team-name="${r.team_name}">${r.back_value}</strong>
                    <div class="size">
                        <span class="ng-binding">39.27</span>
                    </div>
                </div>`;
        } else {
          matchOddsHtml += `<div style="background:white !important;" class="back_oddsbox bhav_box"></div>`;
        }

        if (r.lay_status == 1) {
          matchOddsHtml += `<div class="Lay_oddsbox bhav_box">
                    <strong class="odds ng-binding bet_text" 
                            data-back-lay="lay" 
                            data-match-stake="${r.stake}" 
                            data-match-id="${r.id}" 
                            data-team-name="${r.team_name}">${r.lay_value}</strong>
                    <div class="size">
                        <span class="ng-binding">45.7</span>
                    </div>
                </div>`;
        } else {
          matchOddsHtml += `<div style="background:white !important;" class="Lay_oddsbox bhav_box"></div>`;
        }

        matchOddsHtml += `</div>
            </div>`;

      });

      // console.log(matchOddsHtml);
      $('.matchoddclass').html(matchOddsHtml); // Update with your actual container class
      //bookmaker

      // over_under_1_point_5_goals
      var over_under_1_point_5_goals = '';
      $.each(data.response.over_under_1_point_5_goals, function(index, r) {
        over_under_1_point_5_goals = `<div class="odds_rows">
                    <div class="events_odds">
                        <div class="event-names">
                            <div class="horse-event">
                                <div class="slogen-horce">
                                    <span class="team-horce team_name">${r.team_name}</span>
                                </div>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="odds_bhav">`;

        if (r.back_status == 1) {
          over_under_1_point_5_goals += `<div class="back_oddsbox bhav_box">
                    <strong class="odds ng-binding bet_text" 
                            data-back-lay="back" 
                            data-match-stake="${r.stake}" 
                            data-match-id="${r.id}" 
                            data-team-name="${r.team_name}">${r.back_value}</strong>
                    <div class="size">
                        <span class="ng-binding">5.39</span>
                    </div>
                </div>`;
        } else {
          over_under_1_point_5_goals += `<div style="background:white !important;" class="back_oddsbox bhav_box"></div>`;
        }

        if (r.lay_status == 1) {
          over_under_1_point_5_goals += `<div class="Lay_oddsbox bhav_box">
                    <strong class="odds ng-binding bet_text" 
                            data-back-lay="lay" 
                            data-match-stake="${r.stake}" 
                            data-match-id="${r.id}" 
                            data-team-name="${r.team_name}">${r.lay_value}</strong>
                    <div class="size">
                        <span class="ng-binding">3.51</span>
                    </div>
                </div>`;
        } else {
          over_under_1_point_5_goals += `<div style="background:white !important;" class="Lay_oddsbox bhav_box"></div>`;
        }

        over_under_1_point_5_goals += `</div>
            </div>`;

      });

      $('#over_under_1_point_5_goals').html(over_under_1_point_5_goals);
      // over_under_1_point_5_goals
      var over_0_goals = '';
      $.each(data.response.over_under_0_point_5_goals, function(index, r) {
        over_0_goals += `<div class="odds_rows">
                    <div class="events_odds">
                        <div class="event-names">
                            <div class="horse-event">
                                <div class="slogen-horce">
                                    <span class="team-horce team_name">${r.team_name}</span>
                                </div>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="odds_bhav">`;

        if (r.back_status == 1) {
          over_0_goals += `<div class="back_oddsbox bhav_box">
                    <strong class="odds ng-binding bet_text" 
                            data-back-lay="back" 
                            data-match-stake="${r.stake}" 
                            data-match-id="${r.id}" 
                            data-team-name="${r.team_name}">${r.back_value}</strong>
                    <div class="size">
                        <span class="ng-binding">5.39</span>
                    </div>
                </div>`;
        } else {
          over_0_goals += `<div style="background:white !important;" class="back_oddsbox bhav_box"></div>`;
        }

        if (r.lay_status == 1) {
          over_0_goals += `<div class="Lay_oddsbox bhav_box">
                    <strong class="odds ng-binding bet_text" 
                            data-back-lay="lay" 
                            data-match-stake="${r.stake}" 
                            data-match-id="${r.id}" 
                            data-team-name="${r.team_name}">${r.lay_value}</strong>
                    <div class="size">
                        <span class="ng-binding">3.51</span>
                    </div>
                </div>`;
        } else {
          over_0_goals += `<div style="background:white !important;" class="Lay_oddsbox bhav_box"></div>`;
        }

        over_0_goals += `</div>
            </div>`;

      });

      $('#over_0_goals').html(over_0_goals);

      // over_under_2_point_5_goals
      var over_under_2_point_5_goals = '';
      $.each(data.response.over_under_2_point_5_goals, function(index, r) {
        over_under_2_point_5_goals += `<div class="odds_rows">
                    <div class="events_odds">
                        <div class="event-names">
                            <div class="horse-event">
                                <div class="slogen-horce">
                                    <span class="team-horce team_name">${r.team_name}</span>
                                </div>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="odds_bhav">`;

        if (r.back_status == 1) {
          over_under_2_point_5_goals += `<div class="back_oddsbox bhav_box">
                    <strong class="odds ng-binding bet_text" 
                            data-back-lay="back" 
                            data-match-stake="${r.stake}" 
                            data-match-id="${r.id}" 
                            data-team-name="${r.team_name}">${r.back_value}</strong>
                    <div class="size">
                        <span class="ng-binding">92.49</span>
                    </div>
                </div>`;
        } else {
          over_under_2_point_5_goals += `<div style="background:white !important;" class="back_oddsbox bhav_box"></div>`;
        }

        if (r.lay_status == 1) {
          over_under_2_point_5_goals += `<div class="Lay_oddsbox bhav_box">
                    <strong class="odds ng-binding bet_text" 
                            data-back-lay="lay" 
                            data-match-stake="${r.stake}" 
                            data-match-id="${r.id}" 
                            data-team-name="${r.team_name}">${r.lay_value}</strong>
                    <div class="size">
                        <span class="ng-binding">137.47</span>
                    </div>
                </div>`;
        } else {
          over_under_2_point_5_goals += `<div style="background:white !important;" class="Lay_oddsbox bhav_box"></div>`;
        }

        over_under_2_point_5_goals += `</div>
            </div>`;

      });

      $('.over_under_2_point_5_goals').html(over_under_2_point_5_goals);

      // over_under_3_point_5_goals
      var over_under_3_point_5_goals = '';
      $.each(data.response.over_under_3_point_5_goals, function(index, r) {
        over_under_3_point_5_goals += `<div class="odds_rows">
                    <div class="events_odds">
                      <div class="event-names">
                        <div class="horse-event">
                          <div class="slogen-horce">
                            <span class="team-horce team_name">${r.team_name}</span>
                          </div>
                        </div>
                        <div></div>
                      </div>
                    </div>
                    <div class="odds_bhav">`;

        if (r.back_status == 1) {
          over_under_3_point_5_goals += `<div class="back_oddsbox bhav_box">
                    <strong class="odds ng-binding bet_text" 
                            data-back-lay="back" 
                            data-match-stake="${r.stake}" 
                            data-match-id="${r.id}" 
                            data-team-name="${r.team_name}">${r.back_value}</strong>
                    <div class="size">
                        <span class="ng-binding">85</span>
                    </div>
                </div>`;
        } else {
          over_under_3_point_5_goals += `<div style="background:white !important;" class="back_oddsbox bhav_box"></div>`;
        }

        if (r.lay_status == 1) {
          over_under_3_point_5_goals += `<div class="Lay_oddsbox bhav_box">
                    <strong class="odds ng-binding bet_text" 
                            data-back-lay="lay" 
                            data-match-stake="${r.stake}" 
                            data-match-id="${r.id}" 
                            data-team-name="${r.team_name}">${r.lay_value}</strong>
                    <div class="size">
                        <span class="ng-binding">208.03</span>
                    </div>
                </div>`;
        } else {
          over_under_3_point_5_goals += `<div style="background:white !important;" class="Lay_oddsbox bhav_box"></div>`;
        }

        over_under_3_point_5_goals += `</div>
            </div>`;

      });

      $('.over_under_3_point_5_goals').html(over_under_3_point_5_goals);



    }



    // Load cricket details every 5 seconds
    setInterval(loadCricketDetails, 10000);

    // // Initial load
    loadCricketDetails();

  });
</script>

<script>
  function updateProfit(amnt) {
    var odds = parseFloat($("#bet_input_stake").val()) || 1;
    var profit = amnt * odds;
    $(".profit_div").text(profit.toFixed(2)); // Format profit to 2 decimal places
    $("#bet_profit").val(profit);
    $('.betplace-btn').prop("disabled", false);
  }
  $("#add_input").on('input', function() {

    var amnt = parseFloat($(this).val()) || 0;
    updateProfit(amnt);
  });
</script>
<script>
  $(document).ready(function() {
    var game_id = "{{ $game_id }}";
    $.ajax({
      url: game_id, // Update with your actual route
      method: 'GET',
      success: function(data) {
        // Example hardcoded times
        // var end = "2024-07-31T12:52:00";

        var end = data.score.football.end_time; // Uncomment when using dynamic data
        // var start = "2024-07-31T10:52:00";
        var start = data.score.football.start_time; // Uncomment when using dynamic data

        // Set the start and end times
        const startTime = new Date(start).getTime();
        const endTime = new Date(end).getTime(); // For example, a 2-hour match

        // Function to update the timer
        function updateTimer() {
          const now = new Date().getTime();
          const timerElement = document.getElementById('timer');

          if (now < startTime) {
            timerElement.innerHTML = "Match hasn't started yet.";
          } else if (now >= startTime && now <= endTime) {
            const elapsedTime = now - startTime;
            const totalSeconds = Math.floor(elapsedTime / 1000);
            const hours = Math.floor(totalSeconds / 3600);
            const minutes = Math.floor((totalSeconds % 3600) / 60);
            const seconds = totalSeconds % 60;

            timerElement.innerHTML = `${hours}:${minutes}:${seconds}`;
          } else {
            timerElement.innerHTML = "Match has ended.";
            clearInterval(timerInterval); // Stop the timer
          }
        }

        // Update the timer every second
        const timerInterval = setInterval(updateTimer, 1000);

      },
      error: function(xhr, status, error) {
        console.error('Error fetching cricket details:', error);
      }
    });

  });
</script>
@endsection
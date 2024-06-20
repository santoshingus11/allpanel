<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="">
  @include('layouts.header-url')
</head>

<body>
  <div class="main-wrapper Dashboard-bg admin-bg customResponsive">
    <!-- partial:partials/_sidebar.html -->
    <div class="left-side-bar">@include('layouts.left-side-bar')</div>
    <div class="page-wrapper bg-none">
      <!-- partial:partials/_navbar.html -->
      <div class="top-header-section">@include('layouts.header')</div>
      <!-- partial -->
      <div class="page-content">
        <div class="Welcometo-section">
          @include('layouts.top-balance-section')
        </div>
        <div class="row">
          <div class="col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                  <div class="d-inline-flex align-items-center">
                    <h4 class=" mb-0">Profit/Loss Report by Market</h4>
                  </div>
                  <!-- <div class="btn_Download d-inline-flex text-nowrap">
                    <div class="input-group">
                      <input class="form-control event-search" type="text" placeholder="enter userId......">
                    </div>
                    <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                      Submit
                    </button>
                  </div> -->
                </div>

                <div class="row mb-3">
                  <div class="col-lg-2 col-md-6 col-sm-12 mmb-10 destop_change">
                    <div class="input-group">
                      <label class="Search-By_User Name">Sports</label>
                      <select class="form-select" id="func_sports">
                        <option value="-1" selected="selected">All
                        </option>
                        <option value="1">SOCCER
                        </option>
                        <option value="1" data-eventreporttype="1">SOCCER_BOOK
                        </option>
                        <option value="2">TENNIS
                        </option>
                        <option value="2" data-eventreporttype="1">TENNIS_BOOK
                        </option>
                        <option value="4">CRICKET
                        </option>
                        <option value="4" data-eventreporttype="5">CRICKET_FANCY
                        </option>
                        <option value="4" data-eventreporttype="1">CRICKET_BOOK
                        </option>
                        <option value="5">RUGBY_UNION
                        </option>
                        <option value="7">HORSE_RACING
                        </option>
                        <option value="4339">GREYHOUND_RACING
                        </option>
                        <option value="6423">AMERICAN_FOOTBALL
                        </option>
                        <option value="7522">BASKETBALL
                        </option>
                        <option value="2378962" data-eventreporttype="5">ELECTION_FANCY
                        </option>
                        <option value="9999999" data-eventreporttype="5">FANCYBET_FANCY
                        </option>
                        <option value="2378961">POLITICS
                        </option>
                        <option value="137">E_SOCCER
                        </option>
                        <option value="138">KABADDI
                        </option>
                        <option value="138" data-eventreporttype="1">KABADDI_BOOK
                        </option>
                        <option value="-99">CASINO
                        </option>
                        <option value="-97">BPOKER
                        </option>
                        <option value="-96">SKY TRADER
                        </option>
                        <option value="-95">SABA
                        </option>
                        <option value="-93">ROYAL GAMING
                        </option>
                        <option value="-94">LUCKCO7
                        </option>
                        <option value="-100" data-eventreporttype="4">BINARY
                        </option>

                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 mmb-10 destop_change">
                    <div class="input-group">
                      <label class="Search-By_User Name">Time Zone</label>
                      <select class="form-select" name="timezone" id="timezone">

                        <option value="Pacific/Midway">Pacific/Midway(GMT-11:00)
                        </option>

                        <option value="Pacific/Honolulu">Pacific/Honolulu(GMT-10:00)
                        </option>

                        <option value="America/Juneau">America/Juneau(GMT-9:00)
                        </option>

                        <option value="America/Los_Angeles">America/Los_Angeles(GMT-8:00)
                        </option>

                        <option value="America/Phoenix">America/Phoenix(GMT-7:00)
                        </option>

                        <option value="America/Chicago">America/Chicago(GMT-6:00)
                        </option>

                        <option value="America/New_York">America/New_York(GMT-5:00)
                        </option>

                        <option value="America/Santiago">America/Santiago(GMT-4:00)
                        </option>

                        <option value="America/Sao_Paulo">America/Sao_Paulo(GMT-3:00)
                        </option>

                        <option value="Atlantic/South_Georgia">Atlantic/South_Georgia(GMT-2:00)
                        </option>

                        <option value="Atlantic/Azores">Atlantic/Azores(GMT-1:00)
                        </option>

                        <option value="Europe/London">Europe/London(GMT+0:00)
                        </option>

                        <option value="Europe/Paris">Europe/Paris(GMT+1:00)
                        </option>

                        <option value="Africa/Cairo">Africa/Cairo(GMT+2:00)
                        </option>

                        <option value="Asia/Qatar">Asia/Qatar(GMT+3:00)
                        </option>

                        <option value="Asia/Dubai">Asia/Dubai(GMT+4:00)
                        </option>

                        <option value="Asia/Karachi">Asia/Karachi(GMT+5:00)
                        </option>

                        <option value="IST" selected="selected">IST(Bangalore / Bombay / New Delhi) (GMT+5:30)
                        </option>

                        <option value="Asia/Kathmandu">Asia/Kathmandu(GMT+5:45)
                        </option>

                        <option value="Asia/Dhaka">Asia/Dhaka(GMT+6:00)
                        </option>

                        <option value="Asia/Bangkok">Asia/Bangkok(GMT+7:00)
                        </option>

                        <option value="Asia/Hong_Kong">Asia/Hong_Kong(GMT+8:00)
                        </option>

                        <option value="Asia/Tokyo">Asia/Tokyo(GMT+9:00)
                        </option>

                        <option value="Australia/Adelaide">Australia/Adelaide(GMT+9:30)
                        </option>

                        <option value="Australia/Melbourne">Australia/Melbourne(GMT+10:00)
                        </option>

                        <option value="Asia/Magadan">Asia/Magadan(GMT+11:00)
                        </option>

                        <option value="Pacific/Fiji">Pacific/Fiji(GMT+12:00)
                        </option>

                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 mmb-10 destop_change">
                    <div class="input-group">
                      <label class="Search-By_User Name">Period</label>
                      <div class="relative calender_icon-style"><input type="text" id="config-demo" class="ng-valid-ng-dirty-ng-touched">
                        <img src="{{asset('admin/Super-Admin/assets/icons/calender.png')}}" class="calender_icon_filter ngx-daterangepicker-action">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 mmb-10 destop_change">
                    <div class="input-group">
                      <button type="submit" class="btn-send normal_with  font-13 no-border">Just For Today</button>
                      <button type="submit" class="btn_replay normal_with font-13  mx-2">From Yesterday</button>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-6 col-sm-6 destop_change">
                    <button type="button" class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">
                      Get P & L
                    </button>
                  </div>
                </div>

                <!-- <div class="Pand-l-Statement">
                  <div class="card-body_agent-listing-demoag5">
                    <div class="card-header-Sports-Profit"> Player Betting History</div>
                    
                  </div>

                </div> -->
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>

  <script type="text/javascript">
    $('#config-demo').daterangepicker({
      "timePicker": true,
      "linkedCalendars": false,
      "startDate": "12/13/2023",
      "endDate": "12/19/2023",
      "opens": "center"
    }, function(start, end, label) {
      console.log("New date range selected: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    });
  </script>


  @include('layouts.footer')
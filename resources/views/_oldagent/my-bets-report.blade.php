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
  <script>
    // Wait for the DOM to be ready
    document.addEventListener("DOMContentLoaded", function() {
      var startDateInput = document.getElementById("start-date");
      var endDateInput = document.getElementById("end-date");

      // Get today's date in the format "YYYY-MM-DD"
      var today = new Date().toISOString().split('T')[0];

      // Set initial values for date inputs
      startDateInput.value = today;
      endDateInput.value = today;

      // Initialize date picker for start date
      flatpickr(startDateInput, {
        dateFormat: "Y-m-d",
        onChange: function(selectedDates, dateStr) {
          endDatePicker.set("minDate", dateStr);
        }
      });

      // Initialize date picker for end date
      var endDatePicker = flatpickr(endDateInput, {
        dateFormat: "Y-m-d",
        onChange: function(selectedDates, dateStr) {
          startDatePicker.set("maxDate", dateStr);
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Click event for the "Current" tab
      $("#currentTab").click(function() {
        $("#dateRangeSection").hide();
        $("#currentTab").addClass("active");
        $("#pastTab").removeClass("active");
      });

      // Click event for the "Past" tab
      $("#pastTab").click(function() {
        $("#dateRangeSection").show();
        $("#pastTab").addClass("active");
        $("#currentTab").removeClass("active");
      });
    });
  </script>

</head>

<body>


  <div class="main-wrapper Dashboard-bg customResponsive">

    <!-- partial:partials/_sidebar.html -->
    <div class="left-side-bar"> @include('layouts.left-side-bar')</div>


    <div class="page-wrapper bg-none">

      <!-- partial:partials/_navbar.html -->
      <div class="top-header-section"> @include('layouts.header')</div>
      <!-- partial -->

      <div class="page-content">
        @include('layouts.top-balance-section')
        <div class="row">
          <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                  <h4 class=" mb-0">{{ucwords(str_replace('-',' ',Request::segment(2)))}}</h4>
                </div>

                <div class="d-flex justify-content-between align-items-baseline mobile_port_change-new">
                  <form method="post" action="{{url()->current()}}" class="forms-sample d-flex">
                    @csrf

                    <input type="hidden" id="data_type" value="current">

                    <div class="mb-3 mobile_port_change-new">
                      <label>Event</label>
                      <select class="form-select" name="event_name" id="event_name">
                        <option value="">Select Event</option>
                        @foreach($sports_list as $sl)
                        <option value="{{$sl->sports_name}}" @if(isset($event_name) && $sl->sports_name==$event_name){{'selected'}}@endif>{{$sl->sports_name}}</option>
                        @endforeach

                      </select>
                    </div>
                    <div class="mb-3 mx-2 mobile_port_change-new">
                      <label>Market</label>
                      <select class="form-select mobile_port_change-new" name="market_name" id="market_name" style="width: 220px;">
                        <option value="">All</option>
                        <option value="Match Odds" @if(isset($market_name) && $market_name=='Match Odds' ){{'selected'}}@endif>Match_odds</option>
                        <option value="Super Over" @if(isset($market_name) && $market_name=='Super Over' ){{'selected'}}@endif>Super_Over</option>
                        <option value="Turnament Winner" @if(isset($market_name) && $market_name=='Turnament Winner' ){{'selected'}}@endif>Turnament_Winner</option>
                        <option value="Tied Match" @if(isset($market_name) && $market_name=='Tied Match' ){{'selected'}}@endif>Tied_Match</option>
                        <option value="Completed Match" @if(isset($market_name) && $market_name=='Completed Match' ){{'selected'}}@endif>Completed_Match</option>
                      </select>
                    </div>
                    <div class="mb-3 mobile_port_change-new">
                      <div class="dropdown">
                        <label>Rate</label>
                        <button class="form-select dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Odds: All
                        </button>
                        <ul class="dropdown-menu w-300 form-to-form" aria-labelledby="dropdownMenuButton1">
                          <div class="dropdown-date">
                            <span class=" py-3 font-16">From</span>
                            <input type="text" name="odds_from" id="odds_from" value="@if(isset($odds_from)){{$odds_from}}@endif" value="0" class="Odds-All">
                            <span class="px-3 py-3 font-16">To</span>
                            <input type="text" name="odds_to" id="odds_to" value="@if(isset($odds_to)){{$odds_to}}@endif" value="0" class="Odds-All">
                            <span class="text-danger error-account"></span>
                          </div>
                        </ul>
                      </div>
                    </div>
                    <div class="mb-3 mx-2 mobile_port_change-new">
                      <div class="dropdown">
                        <label>Amount</label>
                        <button class="form-select dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Stake: All
                        </button>
                        <ul class="dropdown-menu w-300 form-to-form" aria-labelledby="dropdownMenuButton1">
                          <div class="dropdown-date">
                            <span class=" py-3 font-16">From</span>
                            <input type="text" name="stake_from" id="stake_from" value="@if(isset($stake_from)){{$stake_from}}@endif" class="Odds-All">
                            <span class="px-3 py-3 font-16">To</span>
                            <input type="text" name="stake_to" id="stake_to" value="@if(isset($stake_to)){{$stake_to}}@endif" class="Odds-All">
                            <span class="text-danger error-account"></span>
                          </div>
                        </ul>
                      </div>
                    </div>
                    <div class="mb-3 mobile_port_change-new">
                      <label>Search By User</label>
                      <input class="form-control event-search" value="@if(isset($username)){{$username}}@endif" name="username" id="username" type="text" placeholder="Enter Atleast 3 character">
                    </div>
                    <div class="align-items-center">
                      <button type="submit" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                        Apply
                      </button>
                      <button type="button" class="btn btn-danger btn-icon-text mb-2 mb-md-0" style="border: none;border-radius: 0px;font-size: 13px;">
                        Cancel
                      </button>
                    </div>
                    <br>
                    <div class="My-Bets_Report" id="dateRangeSection">
                      <div class="d-flex mobile_port_change-new">
                        <div class="mb-3 mobile_port_change-new">
                          <label for="start-date" class="form-label">From</label>
                          <input type="datetime-local" class="form-select" id="from_date" value="@if(isset($from_date)){{$from_date}}@endif" name="from_date">
                        </div>
                        <div class="mb-3 mx-2 mobile_port_change-new">
                          <label for="end-date" class="form-label">To</label>
                          <input type="datetime-local" class="form-select" id="to_date" value="@if(isset($to_date)){{$to_date}}@endif" name="to_date">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>


                <div class="tab-start-date-show-and-hide my-2">
                  <ul role="tablist" class="nav nav-tabs">
                    <li role="presentation" class="nav-item"><a class="nav-link active" id="currentTab" onclick="currecntdatae('current')">Current</a></li>
                    <li role="presentation" class="nav-item"><a class="nav-link" id="pastTab" onclick="currecntdatae('past')">Past</a></li>
                  </ul>
                </div>



                <div class="Agent_-Listing height30vh">
                  <div class="mb-4 mt-3">
                    <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" name="type" value="matched" id="matched_type" onclick="changetype('matched')">
                      <label class="form-check-label" for="matched_type">
                        Matched
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" name="type" value="unmatched" id="unmatch_type" onclick="changetype('unmatched')">
                      <label class="form-check-label" for="unmatch_type">
                        Unmatched
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" name="type" value="deleted" id="deleted_bet_type" onclick="changetype('deleted')">
                      <label class="form-check-label" for="deleted_bet_type">
                        Deleted
                      </label>
                    </div>
                  </div>
                  <div class="serch-bx-and-dropdown">
                    <div class="row">
                      <div class="col-sm-12 col-md-9">
                        <div class="dataTables_length" id="dataTableExample_length">
                          <label class="d-flex justify-content-between align-items-baseline fit-content"> Show <select name="dataTableExample_length" aria-controls="dataTableExample" class="form-select form-select-sm">
                              <option value="10">10</option>
                              <option value="30">30</option>
                              <option value="50">50</option>
                              <option value="-1">All</option>
                            </select> entries </label>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-3">
                        <div class="input-group">
                          <input class="form-control" id="bet_list_search_box" type="text" placeholder="Search...">
                          <!-- <button class="btn btn-light btn-icon" type="button" id="button-search-addon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                              <circle cx="11" cy="11" r="8"></circle>
                              <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg></button> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="">Place Date</th>
                          <th class="">Description</th>
                          <th class="">User name</th>
                          <th class="">Bet Type</th>
                          <th class="">User Rate</th>
                          <th class="">Win/Loss</th>
                          <th class="">IP</th>
                          <th class="">Browser Details</th>
                          <th class="">Amount</th>
                        </tr>
                      </thead>
                      <tbody id="bet_report_id">
                        @include('agent.my-bets-report-search')
                      </tbody>
                    </table>

                  </div>
                  @php $data=$betting_history; @endphp
                  @include('layouts.allpagination')

                </div>
              </div>
            </div>
          </div>
        </div>



      </div>


    </div>
  </div>


  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">IP Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body">



          <table class="table table-striped">
            <thead>
              <tr>
                <th>Title</th>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>status</td>
                <td>success</td>
              </tr>
              <tr>
                <td>country</td>
                <td id="country"></td>
              </tr>
              <!-- <tr>
                    <td>countryCode</td>
                    <td id="country_code"></td>
                  </tr> -->
              <tr>
                <td>region</td>
                <td id="region"></td>
              </tr>
              <!-- <tr>
                    <td>regionName</td>
                    <td id="region_name"></td>
                  </tr> -->
              <tr>
                <td>city</td>
                <td id="city"></td>
              </tr>
              <tr>
                <td>zip</td>
                <td id="zip"></td>
              </tr>
              <tr>
                <td>lat</td>
                <td id="lat"></td>
              </tr>
              <tr>
                <td>lon</td>
                <td id="lon"></td>
              </tr>
              <tr>
                <td>timezone</td>
                <td id="timezone"></td>
              </tr>
              <tr>
                <td>isp</td>
                <td id="isp"></td>
              </tr>
              <tr>
                <td>org</td>
                <td id="org"></td>
              </tr>
              <tr>
                <td>as</td>
                <td id="as"></td>
              </tr>
              <tr>
                <td>query</td>
                <td id="query"></td>
              </tr>
            </tbody>
          </table>


        </div>
        <div class="modal-footer">
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" data-bs-dismiss="modal" class="btn green  btn-icon-text mb-2 mb-md-0 mx-2">
              Cancel
            </button>


          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function checkbrowserdetails(id) {
      var browserDetails = document.getElementById('browser_details' + id).getAttribute('data-browser-details');
      var parsedBrowserDetails = JSON.parse(browserDetails);
      document.getElementById("country").innerHTML = parsedBrowserDetails.country;
      document.getElementById("query").innerHTML = parsedBrowserDetails.ip;
      document.getElementById("org").innerHTML = parsedBrowserDetails.org;
      document.getElementById("as").innerHTML = parsedBrowserDetails.org;
      document.getElementById("isp").innerHTML = parsedBrowserDetails.org;
      document.getElementById("timezone").innerHTML = parsedBrowserDetails.timezone;
      document.getElementById("region").innerHTML = parsedBrowserDetails.region;
      document.getElementById("zip").innerHTML = parsedBrowserDetails.postal;
      document.getElementById("city").innerHTML = parsedBrowserDetails.city;

      var locArray = parsedBrowserDetails.loc.split(","); // Split the string by comma

      var latitude = locArray[0]; // Get the latitude value
      var longitude = locArray[1]; // Get the longitude value
      document.getElementById("lat").innerHTML = latitude;
      document.getElementById("lon").innerHTML = longitude;

    }

    function currecntdatae(data_type) {

      document.getElementById('data_type').value = data_type

      if (document.getElementById('event_name').value !== null) {
        var event_name = document.getElementById('event_name').value;
      } else {
        var event_name = '';
      }

      if (document.getElementById('market_name').value !== null) {
        var market_name = document.getElementById('market_name').value;
      } else {
        var market_name = '';
      }

      if (document.getElementById('odds_from').value !== null) {
        var odds_from = document.getElementById('odds_from').value;
      } else {
        var odds_from = '';
      }


      if (document.getElementById('odds_to').value !== null) {
        var odds_to = document.getElementById('odds_to').value;
      } else {
        var odds_to = '';
      }


      if (document.getElementById('stake_from').value !== null) {
        var stake_from = document.getElementById('stake_from').value;
      } else {
        var stake_from = '';
      }


      if (document.getElementById('stake_to').value !== null) {
        var stake_to = document.getElementById('stake_to').value;
      } else {
        var stake_to = '';
      }


      if (document.getElementById('username').value !== null) {
        var username = document.getElementById('username').value;
      } else {
        var username = '';
      }

      if (document.getElementById('from_date').value !== null) {
        var from_date = document.getElementById('from_date').value;
      } else {
        var from_date = '';
      }

      if (document.getElementById('to_date').value !== null) {
        var to_date = document.getElementById('to_date').value;
      } else {
        var to_date = '';
      }

      $.ajax({
        type: 'GET',
        url: '{{url()->current()}}',
        data: {
          data_type: data_type,
          event_name: event_name,
          market_name: market_name,
          odds_from: odds_from,
          odds_to: odds_to,
          stake_from: stake_from,
          stake_to: stake_to,
          username: username,
          from_date: from_date,
          to_date: to_date
        },
        success: function(data) {
          //alert(data);
          document.getElementById("bet_report_id").innerHTML = data;
          //   location.reload(); 
        },
        error: function(error) {
          console.error('Error fetching admin details:', error);
        }
      });
    }


    function changetype(type) {

      var data_type = document.getElementById('data_type').value;

      if (document.getElementById('event_name').value !== null) {
        var event_name = document.getElementById('event_name').value;
      } else {
        var event_name = '';
      }

      if (document.getElementById('market_name').value !== null) {
        var market_name = document.getElementById('market_name').value;
      } else {
        var market_name = '';
      }

      if (document.getElementById('odds_from').value !== null) {
        var odds_from = document.getElementById('odds_from').value;
      } else {
        var odds_from = '';
      }


      if (document.getElementById('odds_to').value !== null) {
        var odds_to = document.getElementById('odds_to').value;
      } else {
        var odds_to = '';
      }


      if (document.getElementById('stake_from').value !== null) {
        var stake_from = document.getElementById('stake_from').value;
      } else {
        var stake_from = '';
      }


      if (document.getElementById('stake_to').value !== null) {
        var stake_to = document.getElementById('stake_to').value;
      } else {
        var stake_to = '';
      }


      if (document.getElementById('username').value !== null) {
        var username = document.getElementById('username').value;
      } else {
        var username = '';
      }

      if (document.getElementById('from_date').value !== null) {
        var from_date = document.getElementById('from_date').value;
      } else {
        var from_date = '';
      }

      if (document.getElementById('to_date').value !== null) {
        var to_date = document.getElementById('to_date').value;
      } else {
        var to_date = '';
      }

      $.ajax({
        type: 'GET',
        url: '{{url()->current()}}',
        data: {
          data_type: data_type,
          type: type,
          event_name: event_name,
          market_name: market_name,
          odds_from: odds_from,
          odds_to: odds_to,
          stake_from: stake_from,
          stake_to: stake_to,
          username: username,
          from_date: from_date,
          to_date: to_date
        },
        success: function(data) {
          //alert(data);
          document.getElementById("bet_report_id").innerHTML = data;
          //   location.reload(); 
        },
        error: function(error) {
          console.error('Error fetching admin details:', error);
        }
      });
    }

    $(document).ready(function(){
    $("#bet_list_search_box").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#bet_report_id tbody tr").each(function() {
            var rowContainsValue = false;
            $(this).find('td').each(function() {
                if ($(this).text().toLowerCase().indexOf(value) > -1) {
                    rowContainsValue = true;
                    return false; // Exit the loop if a match is found in this row
                }
            });
            $(this).toggle(rowContainsValue);
        });
    });
});
  </script>

  @include('layouts.footer')
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
                    <h4 class=" mb-0">Player Betting History</h4>
                  </div>
                  <div class="btn_Download d-inline-flex text-nowrap">
                    <div class="input-group mx-2">
                      <input class="form-control event-search" type="text" placeholder="enter betId...">
                    </div>
                    <div class="input-group">
                      <input class="form-control event-search" type="text" placeholder="enter userId......">
                    </div>
                    <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                      Submit
                    </button>
                  </div>
                  <p>Multiple of betIds querie can be entered (e.g. 12,345,6789)</p>
                </div>

                <div class="row mb-3">
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="input-group">
                      <label class="Search-By_User Name">Time Zone</label>
                      <select class="form-select" id="exampleFormControlSelect1">
                        <option selected="" disabled="">Unmatched</option>
                        <option value="1">Matched</option>
                        <option value="2">Settled</option>
                        <option value="3">Cancelled</option>
                        <option value="4">Voided</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="input-group">
                      <label class="Search-By_User Name">Period</label>
                      <div class="relative calender_icon-style"><input type="text" id="config-demo" class="ng-valid-ng-dirty-ng-touched">
                        <img src="{{asset('admin/Super-Admin/assets/icons/calender.png')}}" class="calender_icon_filter ngx-daterangepicker-action">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="input-group">
                      <button type="submit" class="btn-send normal_with  font-13 no-border">Just For Today</button>
                      <button type="submit" class="btn_replay normal_with font-13  mx-2">From Yesterday</button>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-6 col-sm-12">
                    <button type="button" class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">
                      Get History
                    </button>
                  </div>
                </div>

                <div class="Pand-l-Statement">
                  <div class="card-body_agent-listing-demoag5">
                    <div class="card-header-Sports-Profit"> Player Betting History</div>
                    <div class="bg-white py-4 px-4">
                      <div class="_Account-Statement user_profile_-">
                        <nav>
                          <div class="nav nav-tabs current-bets-nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link current-bets-nav-link font-15 active" id="nav-Exchange-tab-profitLoss" data-bs-toggle="tab" data-bs-target="#nav-Exchange-profitLoss" type="button" role="tab" aria-controls="nav-Exchange-profitLoss" aria-selected="true" tabindex="-1">Exchange</button>
                            <button class="nav-link current-bets-nav-link font-15" id="nav-FancyBet-tab-profitLoss" data-bs-toggle="tab" data-bs-target="#nav-FancyBet-profitLoss" type="button" role="tab" aria-controls="nav-FancyBet-profitLoss" aria-selected="false" tabindex="-1">FancyBet</button>
                            <button class="nav-link current-bets-nav-link font-15" id="nav-SportsBook-tab-profitLoss" data-bs-toggle="tab" data-bs-target="#nav-SportsBook-profitLoss" type="button" role="tab" aria-controls="nav-SportsBook-profitLoss" aria-selected="false" tabindex="-1">SportsBook</button>
                            <button class="nav-link current-bets-nav-link font-15" id="nav-BookMaker-tab-profitLoss" data-bs-toggle="tab" data-bs-target="#nav-BookMaker-profitLoss" type="button" role="tab" aria-controls="nav-BookMaker-profitLoss" aria-selected="false" tabindex="-1">BookMaker</button>
                            <button class="nav-link current-bets-nav-link font-15" id="nav-Binary-tab-profitLoss" data-bs-toggle="tab" data-bs-target="#nav-Binary-profitLoss" type="button" role="tab" aria-controls="nav-Binary-profitLoss" aria-selected="false" tabindex="-1">Binary</button>
                          </div>
                        </nav>
                        <div class="function-wrap fix_mobile_view_design_code">
                          <div class="serch-bx-and-dropdown mb-2  mt-3">
                            <div class="row">
                              <div class="col-sm-12 col-md-9">
                                <div class="dataTables_length" id="dataTableExample_length">
                                  <label class="d-flex justify-content-between align-items-baseline fit-content text-black"> Show <select name="dataTableExample_length" aria-controls="dataTableExample" class="form-select form-select-sm mx-2">
                                      <option value="10">10</option>
                                      <option value="30">30</option>
                                      <option value="50">50</option>
                                      <option value="-1">All</option>
                                    </select> entries </label>
                                </div>
                              </div>
                              <div class="col-sm-12 col-md-3">
                                <div class="input-group">
                                  <input class="form-control border" type="text" placeholder="Type to Search">
                                  <button class="btn btn-light btn-icon border" type="button" id="button-search-addon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                      <circle cx="11" cy="11" r="8"></circle>
                                      <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg></button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- <div class=" total_all w-100">
                            <table id="table_transfer" class="table01 tab-transfer tab-banking w-100 borders">
                              <tbody>
                                <tr class="fancy-setting">
                                  <th scope="col" class="align-C px-4 border-l">Agent Name</th>
                                  <th scope="col" class="align-C px-4 border-l">Turn Over</th>
                                  <th scope="col" class="align-C px-4 border-l">Commission</th>
                                  <th scope="col" class="align-C px-4 border-l">Action</th>
                                </tr>
                              </tbody>
                              <tbody>
                                <tr class="fancy-setting">
                                  <td class="align-C border-l">super</td>
                                  <td class="align-C border-l">700</td>
                                  <td class="align-C border-l">00</td>
                                  <td class="align-C border-l d-flex align-items-center justify-content-center">
                                    <button type="submit" class="btn-send normal_with w1-100 font-13 no-border">Settle</button>
                                    <button type="submit" class="btn_replay normal_with w1-100 font-13  mx-2">Reject</button>
                                  </td>
                                </tr>
                                <tr class="fancy-setting">
                                  <td class="align-C border-l">ssadmin</td>
                                  <td class="align-C border-l">17300</td>
                                  <td class="align-C border-l">00</td>
                                  <td class="align-C border-l d-flex align-items-center justify-content-center">
                                    <button type="submit" class="btn-send normal_with w1-100 font-13 no-border">Settle</button>
                                    <button type="submit" class="btn_replay normal_with w1-100 font-13  mx-2">Reject</button>
                                  </td>
                                </tr>
                                <tr class="fancy-setting">
                                  <td class="align-C border-l">smahisuper</td>
                                  <td class="align-C border-l">11300</td>
                                  <td class="align-C border-l">00</td>
                                  <td class="align-C border-l d-flex align-items-center justify-content-center">
                                    <button type="submit" class="btn-send normal_with w1-100 font-13 no-border">Settle</button>
                                    <button type="submit" class="btn_replay normal_with w1-100 font-13  mx-2">Reject</button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>

                          </div> -->
                          <div class="Banking_log History_enables mt-5">
                            <p>Betting History enables you to review the bets you have placed</p>
                            <p>Specify the time period during which your bets were placed, the type of markets on which the bets were placed, and the sport.</p>
                            <p>Betting History is available online for the past 62 days.</p>
                            <p>User can search up to 14 days records per query only .</p>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>

                </div>
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
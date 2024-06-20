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
          <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
              <div class="card-body">
                <div class="d-flex justify-content-start align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                  <h4 class="mb-0 _Account-Statement_">Account Statement</h4>
                  <div class="d-flex align-items-center flex-wrap text-nowrap mx-5">
                    <div class="relative calender_icon-style"><input type="text" id="config-demo" class="ng-valid-ng-dirty-ng-touched">
                      <img src="{{asset('admin/Super-Admin/assets/icons/calender.png')}}" class="calender_icon_filter ngx-daterangepicker-action">
                    </div>
                  </div>
                </div>
                <nav class="Account-Statement-nav mb-3">
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true" tabindex="-1">P&amp;L Statement</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Credit Statement</button>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                    <div class="Pand-l-Statement">

                      <div class="Agent_-Listing height30vh mt-3">
                        <div class="table-responsive">
                          <div class="Total_pl font-15 mb-3 fw-600"> Total P&amp;L: <span class="nagative"><b class="red">0</b></span></div>
                          <table class="table table-striped displayunblock">
                            <thead>
                              <tr>
                                <th class="">Date</th>
                                <th class="">Description</th>
                                <th class="right">P&L</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td colspan="3" class="text-center no-data-table-bg">no records found</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    <div class="Pand-l-Statement">
                      <div class="Agent_-Listing height30vh mt-3">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th class="">Date</th>
                                <th class="">Description</th>
                                <th class="">To/From</th>
                                <th class="">Amount</th>
                                <th class="">Credit Balance</th>
                              </tr>
                            </thead>
                            <tbody>
                             @include('agent.user-statement-account-statement-search')
                            </tbody>
                          </table>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-sm-12 col-md-5">
                      <div class="dataTables_info" id="dataTableExample_info" role="status" aria-live="polite">Showing 1 to 10 of 22 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7 ">
                      <div class="dataTables_paginate paging_simple_numbers right" id="dataTableExample_paginate">
                        <ul class="pagination">
                          <li class="paginate_button page-item previous disabled" id="dataTableExample_previous"><a href="#" aria-controls="dataTableExample" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                          <li class="paginate_button page-item active"><a href="#" aria-controls="dataTableExample" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                          <li class="paginate_button page-item "><a href="#" aria-controls="dataTableExample" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                          <li class="paginate_button page-item "><a href="#" aria-controls="dataTableExample" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                          <li class="paginate_button page-item next" id="dataTableExample_next"><a href="#" aria-controls="dataTableExample" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="border-bottom mt-3"></div>
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
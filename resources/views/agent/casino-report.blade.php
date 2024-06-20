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
    $(document).ready(function() {
      // Initially hide the filter section and remove active class
      $("#filterSection").hide();
      $("#toggleFilterSection").removeClass("active");

      // Toggle the filter section and toggle active class on button click
      $("#toggleFilterSection").click(function() {
        $("#filterSection").toggle();
        $("#toggleFilterSection").toggleClass("active");
      });
    });
  </script>
</head>

<body>
  <div class="main-wrapper Dashboard-bg admin-bg bg customResponsive">
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
                    <h4 class=" mb-0">Casino Report</h4>
                    <div class="d-inline-flex mx-2 filter-group statement-fltr">
                      <div class="relative calender_icon-style"><input type="text" id="config-demo" class="ng-valid-ng-dirty-ng-touched m-0">
                        <img src="{{asset('admin/Super-Admin/assets/icons/calender.png')}}" class="calender_icon_filter ngx-daterangepicker-action">
                      </div>
                    </div>
                    <button class="filter-applybtn" id="toggleFilterSection">
                      <img src="{{asset('admin/Super-Admin/assets/icons/filter.png')}}">
                    </button>
                    <div class="mx-5">
                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="radioInlineSelected" id="radioInlineSelected" checked="">
                        <label class="form-check-label" for="radioInlineSelected">
                          XG
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="radioInline" id="radioInline1">
                        <label class="form-check-label" for="radioInline1">
                          Evolution
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="radioInline" id="radioInline1">
                        <label class="form-check-label" for="radioInline1">
                          Live Casino
                        </label>
                      </div>

                    </div>
                  </div>
                  <div class="btn_Download d-inline-flex text-nowrap">
                    <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                      Download CSV
                    </button>
                  </div>
                </div>
                <div class="Pand-l-Statement">
                  <div class="card-body_agent-listing-demoag5">
                    <div class="" id="filterSection">
                      <div class="d-flex justify-content-start align-items-baseline mb-4 mb-md-3 pb-2">
                        <div class="d-inline-flex align-items-center">
                          <div class="d-inline-flex">
                            <div class="input-group">
                              <input class="form-control event-search" type="text" placeholder="Session ID">
                            </div>
                            <div class="input-group mx-2">
                              <input class="form-control event-search" type="text" placeholder="Agency/Member Name">
                            </div>
                          </div>
                        </div>
                        <div class="btn_Download d-inline-flex text-nowrap">
                          <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                            Apply
                          </button>
                          <a href="#"><button type="button" class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">
                              Clear
                            </button></a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="Agent_-Listing height30vh mt-1">
                      <div class="table-responsive border-bottom">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th class="w-10"></th>
                              <th class="w-8"></th>
                              <th class="w-8"></th>
                              <th class="w-8"></th>
                              <th class="w-8"></th>
                              <th class="w-8"></th>
                              <th class="w-18"></th>
                              <th class="w-16"></th>
                              <th class="w-8"></th>
                              <th class="w-8"></th>
                              <th class="w-8"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td colspan="11" class="text-center no-data-table-bg">There is no data for selected filters.</td>
                            </tr>
                          </tbody>
                        </table>
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
  <style>
    hr {
      color: white;
      opacity: 0.5;
    }
  </style>

  @include('layouts.footer')
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
                    <h4 class=" mb-0">Bet List</h4>

                    <input type="hidden" value="current" name="bet_list" id="bet_list" >

                    <input class="form-control event-search" id="url"  value="{{url('/')}}" type="hidden" placeholder="Event">

                    <form action="{{route('bet-list')}}" method="post">
                      @csrf
                    <div class="d-inline-flex mx-2 filter-group statement-fltr" style="    margin-left: 28px !important;">
                      <div class="relative calender_icon-style">
                        <input type="datetime-local" name="from_date"  value="@if(isset($from_date)){{$from_date}}@endif" id="from_date" class="ng-valid-ng-dirty-ng-touched m-0">
                      </div>
                      <div class="relative calender_icon-style">
                        <input type="datetime-local" name="to_date" value="@if(isset($to_date)){{$to_date}}@endif" id="to_date" class="ng-valid-ng-dirty-ng-touched m-0">
                      </div>
                    </div>
                    <button type="submit" class="filter-applybtn" id="toggleFilterSection">
                      <img src="{{asset('admin/Super-Admin/assets/icons/filter.png')}}">
                    </button>
                    </form>
                    <div class="mx-5">
                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="sports_name" id="sports_for_sports" @if(isset($sports_name) && $sports_name=='sports'){{'checked'}}@endif value="sports" onclick="searchbdetlist()">
                        <label class="form-check-label" for="sports_for_sports">
                          Sports
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="sports_name" id="sports_for_xg" @if(isset($sports_name) && $sports_name=='xg'){{'checked'}}@endif  value="xg"  onclick="searchbdetlist()">
                        <label class="form-check-label" for="sports_for_xg">
                          XG
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="sports_name" id="sports_for_casino" @if(isset($sports_name) && $sports_name=='casino'){{'checked'}}@endif  value="casino"  onclick="searchbdetlist()">
                        <label class="form-check-label" for="sports_for_casino">
                          Live Casino
                        </label>
                      </div>

                    </div>
                  </div>
                  <div class="btn_Download d-inline-flex text-nowrap">
                    <button type="button" onclick="downloadbetlist('admin/bet-list-download')" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                      Download CSV
                    </button>
                  </div>
                </div>
                <div class="Pand-l-Statement">
                  <div class="card-body_agent-listing-demoag5">
                 
                    <nav class="Account-Statement-nav mb-3">
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true" onclick="changebetlisttype('current')">Current</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="changebetlisttype('past')" tabindex="-1">Past</button>
                      </div>
                    </nav>
                    <div id="bet_list_id">
                @include('agent.all-bet-list')      
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

  <script>
    
  </script>

  @include('layouts.footer')
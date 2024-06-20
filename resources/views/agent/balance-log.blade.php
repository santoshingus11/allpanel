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
                    <h4 class=" mb-0">Balance Log</h4>
                  </div>
                </div>
                <div class="Pand-l-Statement">
                  <div class="card-body_agent-listing-demoag5">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <form action="{{route('balance-log')}}" method="post" class="forms-sample d-flex">
                        @csrf
                        <div class="mb-3">
                          <label for="Client ID" class="form-label">Event Id *</label>
                          <input type="text" class="form-control event-search" id="" placeholder="Event ID" name="event_id" value="@if($event_id){{$event_id}}@endif" required="">
                        </div>
                        <div class="mb-3 mx-2">
                          <label for="Full Name" class="form-label">Market Id *</label>
                          <input type="text" class="form-control event-search" id="" placeholder="Market ID" name="market_id" value="@if($market_id){{$market_id}}@endif" required="">
                        </div>
                        <div class="mb-3">
                          <label for="Full Name" class="form-label">User Id *</label>
                          <input type="text" class="form-control event-search" id="" placeholder="User Id" name="userid" value="@if($userid){{$userid}}@endif" required="">
                        </div>
                        <div class="mb-3 mx-2">
                          <label for="start-date" class="form-label">From</label>
                          <input type="datetime-local" class="form-select flatpickr-input" id="from_date" name="from_date" value="@if($from_date){{$from_date}}@endif" >
                        </div>
                        <div class="mb-3">
                          <label for="end-date" class="form-label">To</label>
                          <input type="datetime-local" class="form-select flatpickr-input" id="to_date" name="to_date"  value="@if($to_date){{$to_date}}@endif">
                        </div>
                        <div class="mb-1 mx-2">
                          <button type="submit" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2 mt-4">
                            <i data-feather="upload-cloud"></i> Submit
                          </button>
                        </div>


                      </form>
                    </div>

                    <div class="Agent_-Listing height30vh mt-1">
                      <div class="table-responsive border-bottom">
                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th class="">User Id</th>
                              <th class="">Site</th>
                              <th class="">Event Id</th>
                              <th class="">Event Name</th>
                              <th class="">Market Id</th>
                              <th class="">Market Name</th>
                              <th class="">Category Type</th>
                              <th class="">Before Balance</th>
                              <th class="">After Balance</th>
                              <th class="">Profit Loss</th>
                              <th class="">Remark</th>
                              <th class="">Create Date</th>
                            </tr>
                          </thead>
                          <tbody>
                          @include('agent.balance-log-search')                            
                          </tbody>
                        </table>
                        @php $data=$balance_log; @endphp
                        @include('layouts.allpagination')
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


  @include('layouts.footer')
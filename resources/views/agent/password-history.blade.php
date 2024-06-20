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
                <div class="d-flex justify-content-between align-items-center mb-4 mb-md-3 pb-2 border-bottom">
                  <div class="d-inline-flex align-items-center">
                    <h4 class=" mb-0">Password Change History</h4>
                  </div>
                </div>
                <div class="Pand-l-Statement">
                  <div class="card-body_agent-listing-demoag5">
                    <div class="card-header-Sports-Profit"> Agent Commission</div>
                    <div class="bg-white py-4 px-4">
                      <div class="_Account-Statement user_profile_-">
                        <div class="function-wrap fix_mobile_view_design_code">
                          <div class="serch-bx-and-dropdown mb-2">
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
                                    <input id="searchInput" class="form-control border" type="text" placeholder="Type to Search">
                                    <button class="btn btn-light btn-icon border" type="button" id="button-search-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            </div>
                          </div>
                          <div class=" total_all w-100">
                            <table id="table_transfer" class="table01 tab-transfer tab-banking w-100 borders">
                              <tbody>
                                <tr class="fancy-setting">
                                  <th scope="col" class="align-C px-4 border-l">Username</th>
                                  <th scope="col" class="align-C px-4 border-l">Remark</th>
                                  <th scope="col" class="align-C px-4 border-l">Date & Time</th>
                                </tr>
                              </tbody>
                              <tbody>
                                @php
                                $password_history =DB::table('password_history')->get();
                                @endphp
                                @if(isset($password_history))
                                @foreach($password_history as $history)
                                <tr class="fancy-setting">
                                    @php
                                    $getuser = DB::table('admins')->where('id', $history->user_id)->first();
                                    $username = optional($getuser)->username; // Use optional() to handle null gracefully
                                    @endphp
                                     <td class="align-C border-l">{{$username}}</td>
                                     <td class="align-C border-l">{{$history->remarks}}</td>
                                     <td class="align-C border-l"> {{ \Carbon\Carbon::parse($history->created_at)->format('m/d/Y h:i:s A') }}</td>
                                </tr>
                            @endforeach
                              @endif
                               
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
    </div>
    <script>
     
    $(document).ready(function () {
    $("#button-search-addon").on("click", function () {
        var searchText = $("#searchInput").val().toLowerCase();

        // Loop through each row and hide/show based on the search text in Username and Remark columns
        $("#table_transfer tbody tr").each(function () {
            var username = $(this).find("td:nth-child(1)").text().toLowerCase();
            var remarks = $(this).find("td:nth-child(2)").text().toLowerCase();

            if (username.includes(searchText) || remarks.includes(searchText)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});
  </script>
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="author" content="">
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
</head>

<body>


  <div class="main-wrapper Dashboard-bg customResponsive">
    <!-- partial:partials/_sidebar.html -->
    <div class="left-side-bar">@include('layouts.left-side-bar')</div>
    <div class="page-wrapper bg-none">
      <!-- partial:partials/_navbar.html -->
      <div class="top-header-section">@include('layouts.header')</div>
      <!-- partial -->
      <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin top-bg px-4">
          <div class="Welcome-to Dashboard">
            <ul class="d-flex justify-content-between Balance_Down">
              <li>Balance Down: <span class="red">0.00</span></li>
              <li>Balance Up: <span class="red">0.00</span></li>
              <li>Net Exposure: <span class="red">0.00</span></li>
              <li>Available Credit: <span class="">0.00</span></li>
            </ul>
          </div>
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0">
              Refresh
            </button>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                  <h4 class=" mb-0">Account Statement</h4>
                  <div class="d-flex align-items-center flex-wrap text-nowrap">
                  <input type="hidden" name="type" id="type" value="p_l">
                  <input class="form-control event-search" id="url"  value="{{url('/')}}" type="hidden" placeholder="Event">

                    <button type="button" onclick="downloadaccountstatement('admin/account-statement-download')" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0">
                      Download CSV
                    </button>

                  </div>
                </div>
                <nav class="Account-Statement-nav mb-3">
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true" onclick="clickdiv('p_l')">P&L Statement</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"  onclick="clickdiv('credit')">Credit History</button>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                    <div class="Pand-l-Statement">
                    <form action="{{route('account-statement')}}" method="post" class="forms-sample d-flex">
                      @csrf
                      <div class="d-flex justify-content-between align-items-baseline mobile_port_change-new">
                      
                          <div class="mb-3 mobile_port_change-new">
                            <label for="start-date" class="form-label">Balance Type</label>
                            <select class="form-select" id="balance_type" name="balance_type">
                              <option value="all" @if(isset($balance_type) && $balance_type=='all'){{'selected'}}@endif>All</option>
                              <option value="Upper" @if(isset($balance_type) && $balance_type=='Upper'){{'selected'}}@endif>Upper</option>
                              <option value="Down" @if(isset($balance_type) && $balance_type=='Down'){{'selected'}}@endif>Lower</option>
                              <option value="CW"  @if(isset($balance_type) && $balance_type=='CW'){{'selected'}}@endif>Only C/W</option>
                              <option value="DW"  @if(isset($balance_type) && $balance_type=='DW'){{'selected'}}@endif>Only D/W</option>
                              <option value="W"  @if(isset($balance_type) && $balance_type=='W'){{'selected'}}@endif>Withdraw</option>
                              <option value="D"  @if(isset($balance_type) && $balance_type=='D'){{'selected'}}@endif>Deposit</option>
                            </select>
                          </div>
                          <div class="mb-3 mx-2 mobile_port_change-new">
                            <label for="Searchbyuser" class="form-label">Search by User</label>
                            <input class="form-control event-search inline-block" name="username" value="@if(isset($username)){{$username}}@endif" id="username" type="text" placeholder="Enter Atleast 3 character">
                          </div>
                          <div class="d-flex mobile_port_change-new">
                            <div class="mb-3 mobile_port_change-new">
                              <label for="start-date" class="form-label">From</label>
                              <input type="datetime-local" class="form-select" id="from_date" value="@if(isset($from_date)){{$from_date}}@endif" name="from_date" >
                            </div>
                            <div class="mb-3 mx-2 mobile_port_change-new">
                              <label for="end-date" class="form-label">To</label>
                              <input type="datetime-local" class="form-select" id="to_date" value="@if(isset($to_date)){{$to_date}}@endif" name="to_date" >
                            </div>
                          </div>

                          <div class="align-items-center mt-0">
                            <div class="mb-3">
                              <button type="submit" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2 mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                  <circle cx="11" cy="11" r="8"></circle>
                                  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg> Load
                              </button>
                            </div>
                          </div>

                        
                      </div>
                      </form>
                      <div class="Agent_-Listing height30vh mt-3">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th class="">Date</th>
                                <th class="">Description</th>
                                <th class="">Ip</th>
                                <th class="">From - To</th>
                                <th class="">Amount</th>
                                <th class="right">Closing</th>
                              </tr>
                            </thead>
                            <tbody>
                            @include('agent.placcount-statement-search')
                            </tbody>
                          </table>

                        

                        </div>

                      </div>
                      
                    </div>
                  </div>
                  @php $data=$p_l_statement; @endphp
                  @include('layouts.allpagination')
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    <div class="Pand-l-Statement">
                      <div class="d-flex justify-content-between align-items-baseline mobile_port_change-new">
                        <form id="credit_history_form" class="forms-sample d-flex">
                          @csrf
                          <div class="mb-3 mx-2 mobile_port_change-new">
                            <label for="Searchbyuser" class="form-label">Search by User</label>
                            <input class="form-control event-search inline-block" type="text" id="credit_username" name="credit_username" placeholder="Enter Atleast 3 character">
                          </div>
                          <div class="d-flex mobile_port_change-new">
                            <div class="mb-3 mobile_port_change-new">
                              <label for="start-date" class="form-label">From</label>
                              <input type="datetime-local" class="form-select" id="credit_from_date"  name="credit_from_date" >
                            </div>
                            <div class="mb-3 mx-2 mobile_port_change-new">
                              <label for="end-date" class="form-label">To</label>
                              <input type="datetime-local" class="form-select" id="credit_end_date" name="credit_end_date" >
                            </div>
                          </div>

                          <div class="align-items-center mt-0">
                            <div class="mb-3">
                              <button type="button" onclick="functionsubmit()" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2 mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                  <circle cx="11" cy="11" r="8"></circle>
                                  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg> Load
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="Agent_-Listing height30vh mt-3">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th class="">Date</th>
                                <th class="">User Name</th>
                                <th class="">Master Name</th>
                                <!-- <th class="">Remark</th> -->
                                <th class="">Stake</th>
                              </tr>
                            </thead>
                            <tbody id="credit_history_id">
                           @include('agent.chaccount-statement')
                            </tbody>
                          </table>

                          @php $data=$credit_history; @endphp
                          @include('layouts.allpagination')
                          
                        </div>
                      </div>
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

  <div class="modal fade" id="TransferStatusexampleModals" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-13" id="exampleModalLabel">IP Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="btn-close"></button>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center flex-wrap text-nowrap">
                        <button type="button" data-bs-dismiss="modal"
                            class="btn green  btn-icon-text mb-2 mb-md-0 mx-2">
                            Cancel
                        </button>

                        <a href="#"><button type="button"
                                class="btn btn-primary New-Agent-save btn-icon-text mb-2 mb-md-0">
                                Save
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  @include('layouts.footer')
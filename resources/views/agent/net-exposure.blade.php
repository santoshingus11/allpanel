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
                    <h4 class=" mb-0">Net Exposure</h4>
                  </div>
                </div>
                <div class="Pand-l-Statement">
                  <div class="card-body_agent-listing-demoag5">
                    <div class="d-flex justify-content-between align-items-baseline" style="border-bottom: 1px solid #cae0e8;">
                      <div class="mb-2">
                        <div class="form-check form-check-inline">
                          <input type="radio" class="form-check-input" name="radioInline" id="radioInline1">
                          <label class="form-check-label" for="radioInline1">
                            My PT
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="radio" class="form-check-input" name="radioInline" id="radioInline1">
                          <label class="form-check-label" for="radioInline1">
                            Total Book
                          </label>
                        </div>
</br>
                        <div class="form-check form-check-inline p-0">
                          <label class="form-check-label Filtesport_ttile" for="radioInline">Filter by Sport</label>
                        </div>
                        </br>

                        @php $sportslist=DB::table('sports_list')->where('status',1)->get();
                        $i=1;
                        @endphp


                        @foreach($sportslist as $sl)
                        <div class="form-check form-check-inline">
                          <input type="radio" class="form-check-input" value="{{$sl->sports_name}}" name="sports_name" id="radioInline{{$sl->sports_value}}" onclick="searchneexpo(this.value)" @if($i==1){{'checked'}}@endif>
                          <label class="form-check-label" for="radioInline{{$sl->sports_value}}">
                            {{$sl->sports_name}}
                          </label>
                        </div>
                       
                        @php $i++; @endphp
                        @endforeach     

                      </div>

                      <div class="serch-filter">
                        <div class="input-group">
                          <div class="mx-3 font-13 f-weight600" id="counter">2</div>
                          <script>
                            // Get the counter element
                            const counterElement = document.getElementById('counter');

                            // Function to update the counter
                            function updateCounter() {
                              let count = parseInt(counterElement.innerText);

                              // Check if the count is greater than 1, decrement, otherwise reset to 8
                              count = (count > 1) ? count - 1 : 8;

                              // Update the counter element
                              counterElement.innerText = count;

                              // Call the function again after 1000ms (1 second)
                              setTimeout(updateCounter, 1000);
                            }

                            // Initial call to start the counter
                            updateCounter();
                          </script>
                          <button type="button" class="btn btn-primary Refresh  btn-icon-text mb-2 mb-md-0">
                            Refresh
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="Agent_-Listing height30vh">
                      <div class="table-responsives border-bottom">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th class="w-10"></th>
                              <th class="w-8"></th>
                              <th class="w-8">Stake</th>
                              <th class="w-8">1</th>
                              <th class="w-8">x</th>
                              <th class="w-8">2</th>
                              <th class="w-18"></th>
                              <th class="w-16"></th>
                              <th class="w-8">Stake</th>
                              <th class="w-8">P/L</th>
                              <!-- <th class="w-8">Under/No</th> -->
                            </tr>
                          </thead>
                          <tbody id="net_exposure_result">
                           
                            @include('agent.net-exposure-search')
                           
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

        @php
        $data=$bet_history;
        @endphp
        @include('layouts.allpagination')
      </div>
    </div>
  </div>

  <!-- Modal -->
  <!-- <div class="modal fade" id="TransferStatusexampleModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-13" id="exampleModalLabel">Are you sure you want to pending lock 34150?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="modal-footer">
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" data-bs-dismiss="modal" class="btn green  btn-icon-text mb-2 mb-md-0 mx-2">
              Cancel
            </button>

            <a href="#"><button type="button" class="btn btn-primary New-Agent-save btn-icon-text mb-2 mb-md-0">
                Save
              </button></a>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Modal -->
  <!-- <div class="modal fade" id="Transferforsmdemo1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Transferforsmdemo1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content perfect-scrollbar-example">
        <div class="modal-header">
          <h1 class="fs-5 text-white" id="staticBackdropLabel">Transfer for smdemo1</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3">

            <div class="mb-0">
              <label for="TransferAmount" class="form-label">Transfer Amount</label>
              <input type="number" value="500" class="form-control" id="TransferAmount" placeholder="Transfer Amount">
            </div>
            <div class="mb-3 TransferAmount">
              <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Agent Notes" rows="3"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <div class="d-flex align-items-center justify-content-between w-100">
            <button type="button" data-bs-dismiss="modal" class="btn red bg-red btn-icon-text mb-2 mb-md-0 mx-2">
              Cancel
            </button>
            <a href="#"><button type="button" class="btn btn-primary New-Agent-save btn-icon-text mb-2 mb-md-0">
                Transfer
              </button></a>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Information Modal -->
  <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content perfect-scrollbar-example">
        <div class="modal-header">
          <h1 class=" fs-5" id="staticBackdropLabel">Bulk transfer</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3">
            <div class="table-responsives no-bordered">
              <table class="table no-bordered">
                <thead>
                  <tr>
                    <th>Login name</th>
                    <th style="padding-left:18px !important;">Transfer amount</th>
                  </tr>
                </thead>
                <tbody class="extra_pt_items">
                  <tr>
                    <th>smdemo1</th>
                    <td>
                      <i data-feather="trash-2" class="font-13 wid-14"></i>
                      <input type="text" value="400" class="w-200 ng-untouched ng-pristine ng-valid">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="border" style="border: 1px solid white !important;margin: 20px 0px;display: inline-block;"></div>
            <div class="d-flex justify-content-between align-items-baseline mt-0">
              <h5>Total</h5>
              <h5>400</h5>
            </div>
            <div class="mb-3 TransferAmount">
              <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Agent Notes" rows="3"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <div class="d-flex align-items-center justify-content-between w-100">
            <button type="button" data-bs-dismiss="modal" class="btn red bg-red btn-icon-text mb-2 mb-md-0 mx-2">
              Cancel
            </button>
            <a href="#"><button type="button" class="btn btn-primary New-Agent-save btn-icon-text mb-2 mb-md-0">
                Transfer
              </button></a>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <script>

    function searchneexpo(sports_name){

      $.ajax({
      type: 'GET',
      url: '{{route("net-exposure")}}',
      data:{sports_name:sports_name},
      success: function (data) {
            //alert(data);
            document.getElementById("net_exposure_result").innerHTML=data;         
            },
            error: function (error) {
                console.error('Error fetching admin details:', error);
            }
        });

     // alert(sports_name);
    }
    $(document).ready(function() {
      // When the "selectAll" checkbox is changed
      $("#selectAll").change(function() {
        // Get the checked status of "selectAll"
        var isChecked = $(this).prop("checked");

        // Set the same checked status to all checkboxes with class "form-check-input"
        $(".form-check-input").prop("checked", isChecked);
      });
    });



// Call the function every 8 seconds
setInterval(function() {
    searchneexpo('no');
}, 8000);

  </script>
  <style>
    hr {
      color: white;
      opacity: 0.5;
    }
  </style>

  @include('layouts.footer')
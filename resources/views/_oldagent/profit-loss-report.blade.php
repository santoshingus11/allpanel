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
                  <h4 class=" mb-0">Profit Loss Report by Market</h4>
                </div>

                <div class="d-flex justify-content-between align-items-baseline mobile_port_change-new">
                  <form action="{{url()->current()}}" method="post" class="forms-sample d-flex">

                  @csrf

                    <div class="mb-3 mx-2 mobile_port_change-new">
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
                    <div class="mb-3 mx-2 mobile_port_change-new">
                      <label for="start-date" class="form-label">From</label>
                      <input type="datetime-local" class="form-select" id="from_date" value="@if(isset($from_date)){{$from_date}}@endif" name="from_date" >
                    </div>
                    <div class="mb-3 mobile_port_change-new">
                      <label for="end-date" class="form-label">To</label>
                      <input type="datetime-local" class="form-select" id="to_date" value="@if(isset($to_date)){{$to_date}}@endif" name="to_date" >
                    </div>
                    <div class="mb-3 mx-2 mt-1">
                      <button type="submit" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2 mt-4">
                        <i data-feather="search"></i> Search
                      </button>
                    </div>
                  </form>

                </div>
                <div class="Agent_-Listing height30vh">
                  <div class="table-responsive pnl-by-market"  id="pnl-by-market" >
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th></th>
                          <th class="text-right b-r-0">P&amp;L</th>
                        </tr>
                      </thead>
                      <tbody>
                      @php $g_to=0; @endphp
                      @foreach($profit_loss as $pl)
                      @php
                      $total_calculation = DB::table('bet_histories')->where('bet_histories.match_name','like','%'.$pl->match_name.'%')->get();                    
                      @endphp
                   
                      @php $to=0; @endphp
                      @foreach($total_calculation as $tc)        
                      @php
                      if($tc->result==1) {
                      $to_pofit=$tc->bet_placed*($tc->odd_req-1);
                      }else{
                        $to_pofit=0;                        
                      }
                      
                      if($tc->result==0) {
                      $to_loss=$tc->bet_placed;
                      }else{
                      $to_loss=0;
                      }        

                      $to=$to+($to_pofit-$to_loss);
                      @endphp
                   
                      @endforeach  

                      @php $g_to=$g_to+$to; @endphp
                      <tr>
                          <td colspan="5" class="date-group b-r-0"><span>{{$pl->created_at}}</span></td>
                        </tr>
                        <tr>
                          <td colspan="5" class="event-group b-r-0"><span>{{$pl->match_name}}</span></td>
                        </tr>
                        <tr>
                          <td><span>{{$pl->selection_name ?? $pl->match_name}} - {{$pl->market_name}} |</span> 
                          
                          <!-- <a  data-target="pnl-by-market"  data-href="{{route('profit-loss-view-bets')}}" href="javascript:;" >View Bets</a> -->
                          <a class="view-bets-link" data-target="pnl-by-market" data-href="{{ route('profit-loss-view-bets').'?match_name='.$pl->match_name.'&selection_name='.$pl->selection_name.'&market_name='.$pl->market_name }}" href="javascript:;">View Bets</a>

                          <!-- <a href="javascript:void(0)">View Bets</a> -->
                          </td>
                          <td class="text-right b-r-0 @if($to>=0) green @else red @endif">{{str_replace('-','',$to)}}</td>
                        </tr>
                        <tr>
                          <td class="text-right">Total</td>
                          <td class="text-right b-r-0 @if($to>=0) green @else red @endif">{{str_replace('-','',$to)}}</td>
                        </tr>
                       
                      @endforeach                  
                      </tbody>
                      <tbody>
                        <tr>
                          <td class="text-right b-r-0">Grand Total</td>
                          <td class="text-right b-r-0 @if($g_to>=0) green @else red @endif ">{{$g_to}}</td>
                        </tr>
                      </tbody>
                    </table> <!---->
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
   document.addEventListener("DOMContentLoaded", function() {
    // Find all elements with the class "view-bets-link"
    var viewBetsLinks = document.getElementsByClassName("view-bets-link");
    
    // Loop through each "View Bets" link and add a click event listener
    Array.from(viewBetsLinks).forEach(function(viewBetsLink) {
        viewBetsLink.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent the default action of the link
            
            // Get the target element ID from the data-target attribute of the clicked link
            var targetId = this.getAttribute("data-target");
            
            // Get the URL from the data-href attribute of the clicked link
            var url = this.getAttribute("data-href");
            
            // Perform an action based on the data-href attribute
            if (url) {
                // For example, you can fetch data from the URL using AJAX
                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        // Update the content of the target element with the fetched data
                        document.getElementById(targetId).innerHTML = data;
                    })
                    .catch(error => console.error('Error fetching data:', error));
            }
        });
    });
});

  </script>
  @include('layouts.footer')
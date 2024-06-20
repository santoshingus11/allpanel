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
              <form action="{{route('bet-ticker')}}" method="post">
                <div class="d-flex justify-content-start align-items-center mb-4 mb-md-3 pb-2">
                    @csrf
                  <div class="d-inline-flex align-items-center">
                    <h4 class=" mb-0">Bet Ticker</h4>
                    <div class="d-inline-flex mx-4 mr-0">
                      <div class="input-group mx-2">
                        <select class="form-select" name="sports_name">
                        <option value="All">Sports: All</option>
                        @foreach($sportList as $sl)
                        <option  value="{{$sl->sports_name}}" @if(isset($sports_name) && ($sports_name==$sl->sports_name)){{'selected'}}@endif>{{$sl->sports_name}}</option>
                        @endforeach
                         
                        </select>
                      </div>
                      <div class="input-group">
                      <select class="form-select" name="market_name">
                          <option value="All" @if(isset($market_name) && ($market_name=='All')){{'selected'}}@endif>Market Type: All</option>
                          <option  value="Match Odds" @if(isset($market_name) && ($market_name=='Match Odds')){{'selected'}}@endif>Session Runs</option>
                          <option  value="Bookmaker" @if(isset($market_name) && ($market_name=='Bookmaker')){{'selected'}}@endif>Bookmaker</option>
                        </select>
                      </div>
                      <div class="input-group mx-2">
                        <input class="form-control event-search" type="text" name="event_name" value="@if(isset($event_name)){{$event_name}}@endif" placeholder="Event">
                      </div>
                      <div class="input-group w-auto mobile_port_change">
                        <div class="dropdown">
                          <button class="form-select dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Odds: All
                          </button>
                          <ul class="dropdown-menu w-300 form-to-form" aria-labelledby="dropdownMenuButton1">
                            <div class="dropdown-date">
                              <span class=" py-3 font-16">From</span>
                              <input type="text" name="odds_from" value="@if(isset($odds_from)){{$odds_from}}@endif"  class="Odds-All">
                              <span class="px-3 py-3 font-16">To</span>
                              <input type="text" name="odds_to" value="@if(isset($odds_to)){{$odds_to}}@endif"  class="Odds-All">
                              <span class="text-danger error-account"></span>
                            </div>
                          </ul>
                        </div>
                      </div>
                      <div class="input-group mx-2">
                        <input class="form-control event-search" name="member_name" value="@if(isset($member_name)){{$member_name}}@endif" type="text" placeholder="Agency/Member Name">
                      </div>

                    </div>
                  </div>
                  <div class="btn_Download d-inline-flex text-nowrap">
                    <button type="submit" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                      Apply
                    </button>
                    <a href="#"><button type="button" onclick="clearall()" class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">
                        Clear
                      </button></a>
                  </div>
                </div>
                </form>
                <div class="Pand-l-Statement">
                  <div class="card-body_agent-listing-demoag5">
                    <div class="d-flex justify-content-end align-items-baseline mb-1" style="border-bottom: 1px solid #cae0e8;">
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
                    <div class="Agent_-Listing height30vh mt-1">
                      <div class="table-responsive border-bottom">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th class="w-10">Member</th>
                              <th class="w-8">Event</th>
                              <th class="w-8">Market</th>
                              <th class="w-8">Selection</th>
                              <th class="w-8">Odds Req.</th>
                              <th class="w-8">Ave. Matched</th>
                              <th class="w-18">Matched</th>
                              <th class="w-16">Unmatched</th>
                              <th class="w-8">Profit/Liability</th>
                              <th class="w-8">IP Address</th>
                              <th class="w-8">Last updated</th>
                            </tr>
                          </thead>
                          <tbody id="bet_ticket_search_id">
                            @include('agent.bet-ticker-search')
                          </tbody>
                        </table>

                       

                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @php $data=$bet_history; @endphp

          @include('layouts.allpagination')
        </div>
       


      </div>
    </div>
  </div>

  <script>
    function selectsports(value){
      $.ajax({
      type: 'GET',
      url: '{{route("bet-ticker")}}',
      data:{column:value},
      success: function (data) {
            //alert(data);
            document.getElementById("bet_ticket_search_id").innerHTML=data;         
            },
            error: function (error) {
                console.error('Error fetching admin details:', error);
            }
        });

    }

    setInterval(function() {
      selectsports('no');
}, 8000);

    $(document).ready(function() {
      // When the "selectAll" checkbox is changed
      $("#selectAll").change(function() {
        // Get the checked status of "selectAll"
        var isChecked = $(this).prop("checked");

        // Set the same checked status to all checkboxes with class "form-check-input"
        $(".form-check-input").prop("checked", isChecked);
      });
    });
  </script>
  <style>
    hr {
      color: white;
      opacity: 0.5;
    }
  </style>

  @include('layouts.footer')
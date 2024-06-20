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
                    <h4 class=" mb-0">Bet List Live</h4>
                  </div>
                </div>
                <div class="Pand-l-Statement">
                  <div class="card-body_agent-listing-demoag5">
                    <div class="d-flex justify-content-between align-items-baseline mobile_port_change" style="border-bottom: 1px solid #cae0e8;">
                      <div class="mb-2 w-100">

                      @foreach($sports_list as $sl)
                        <div class="form-check form-check-inline">
                          <input type="radio" class="form-check-input" value="{{$sl->sports_name}}" name="sports_name" id="all_sports{{$sl->sports_id }}" onclick="changebetlistlive()">
                          <label class="form-check-label" for="all_sports{{$sl->sports_id }}">
                            {{$sl->sports_name}}
                          </label>
                        </div>
                      @endforeach
                      
                      </div>
                      <div class="dropdown mx-2 mobile_view_m-0">
                        <button class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2 dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i data-feather="sliders"></i>
                          Odds Differential Filter (%)
                        </button>
                        <div class="dropdown-menu _User-_Filter mt-2" aria-labelledby="dropdownMenuButton">
                          <div id="oddsDifferentialFilterContent" class="filter_selection-wrap">
                            <div>
                              <dl id="populateDl0" class="flex-center space-x-1">
                                <dd class="d-flex align-items-center">Back &gt;=<input type="text" id="oddsDifferentialFilterBackMore" name="oddsDifferentialFilterBackMoreVal" value=""> %</dd>
                              </dl>
                              <dl id="populateDl1" class="flex-center space-x-1">
                                <dd class="d-flex align-items-center">Back &lt;= <input type="text" id="oddsDifferentialFilterBackLess" name="oddsDifferentialFilterBackLessVal" value=""> %</dd>
                              </dl>
                              <dl id="populateDl2" class="flex-center space-x-1">
                                <dd class="d-flex align-items-center">Lay &gt;= <input type="text" id="oddsDifferentialFilterLayMore" name="oddsDifferentialFilterLayMoreVal" value=""> %</dd>
                              </dl>
                              <dl id="populateDl3" class="flex-center space-x-1">
                                <dd class="d-flex align-items-center">Lay &lt;= <input type="text" id="oddsDifferentialFilterLayLess" name="oddsDifferentialFilterLayLessVal" value=""> %</dd>
                              </dl>
                            </div>
                          </div>
                          <ul class="d-flex justify-content-between align-items-baseline Refresh-Confirm p-0 mb-0">
                            <li><a class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2" href="javascript:void(0);">Refresh</a></li>
                            <li><a class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0" href="javascript:void(0);">Confirm</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="dropdown">
                        <button class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0 dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i data-feather="sliders"></i>
                          User Filter
                        </button>

                        <div class="dropdown-menu _User-_Filter mt-2" aria-labelledby="dropdownMenuButton">
                          <div class="w-100">
                            <div class="d-flex align-items-center flex-wrap text-nowrap mb-3">
                              <div class="on-off-toggle">
                                <input class="on-off-toggle__input" type="checkbox" id="bopiqs" />
                                <label for="bopiqs" class="on-off-toggle__slider"></label>
                              </div>
                            </div>
                            <div class="w-100">
                              <div class="input-group">
                                <label class="Search-By_User Name text-black">User Level</label>
                                <select class="form-select" id="exampleFormControlSelect1">
                                  <option value="0">Player</option>
                                </select>
                              </div>
                              <div class="input-group my-2">
                                <label class="Search-By_User Name text-black">User ID</label>
                                <input class="form-control event-search" type="text" name="user_id"  id="user_id"  placeholder="User ID">
                              </div>
                            </div>
                          </div>
                          <ul class="d-flex justify-content-end align-items-baseline Refresh-Confirm p-0 mb-0">
                            <li><button type="button" class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0"  onclick="changebetlistlive()">Confirm</button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center mt-3 pb-2 mobile_port_change">
                      <div class="d-inline-flex mr-0">
                        <div class="input-group">
                          <label class="Search-By_User Name">Order of display:</label>
                          <select class="form-select" id="display_by" name="display_by" onclick="changebetlistlive()">
                            <option value="">Select</option>   
                            <option value="unmatched">Unmatched</option>
                            <option value="matched">Matched</option>
                            <option value="1">Settled</option>
                            <option value="3">Cancelled</option>
                            <option value="2">Voided</option>
                          </select>
                        </div>

                        <div class="input-group">
                          <label class="Search-By_User Name">of</label>
                          <select class="form-select" id="order_by" name="order_by" onclick="changebetlistlive()">
                            <option value="">Select</option>  
                            <option value="ASC">Ascending</option>
                            <option value="DESC">Descending</option>
                          </select>
                        </div>
                        <div class="input-group mx-2">
                          <label class="Search-By_User Name">Last:</label>
                          <select class="form-select" id="last_data" name="last_data" onclick="changebetlistlive()">
                            <option value="">Select</option>
                            <option value="100">100 Txn</option>
                            <option value="50">50 Txn</option>
                            <option value="25">25 Txn</option>
                          </select>
                        </div>
                        <div class="input-group">
                          <label class="Search-By_User Name">Auto Refresh</label>
                          <select class="form-select" id="exampleFormControlSelect1" onchange="autoRefresh(this.value)">
                            <option value="0">Stop</option>
                            <option value="60">60</option>
                            <option value="30">30</option>
                            <option value="15">15</option>
                            <option value="5">5</option>
                            <option value="2">2</option>
                          </select>
                        </div>
                        <div class="input-group mx-2">
                          <label class="Search-By_User Name">Bet Status:</label>
                          <select class="form-select" id="bet_status" name="bet_status"  onclick="changebetlistlive()" >
                            <option value="">Select</option>
                            <option value="all">All</option>
                            <option value="unmatched">Unmatched</option>
                            <option value="matched">Matched</option>
                          </select>
                        </div>
                      </div>
                      <div class="btn_Download d-inline-flex text-nowrap">
                        <button type="button"  onclick="location.reload()"  class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                          Refresh
                        </button>

                      </div>
                    </div>
                    
                    <div id="bet_list_live">
                    @include('agent.bet-list-live-search')
                    </div>

                @php $data=$bet_list; @endphp
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

 
<script>
  function changebetlistlive(){    
    var user_id = document.getElementById('user_id').value;
    var sports_name = document.querySelector('input[name="sports_name"]:checked')?.value ?? null;
    var display_by=document.getElementById('display_by').value;
    var order_by=document.getElementById('order_by').value;
    var last_data=document.getElementById('last_data').value;
    var bet_status=document.getElementById('bet_status').value;   
   // alert(user_id);
    $.ajax({
    type: 'GET',
    url: '{{route("bet-list-live")}}',
    data:{user_id:user_id,sports_name:sports_name,display_by:display_by,order_by:order_by,last_data:last_data,bet_status:bet_status},
    success: function (data) {
          //alert(data);
          document.getElementById("bet_list_live").innerHTML=data; 
          },
          error: function (error) {
              console.error('Error fetching admin details:', error);
          }
      });
  }

  var refreshTimeout;
        function autoRefresh(value) {

          console.log(value,8888888);

          if (value === '0') {
        clearTimeout(refreshTimeout);
        return;
         }
         // Clear any existing timeouts
        clearTimeout(refreshTimeout);
      //  if (value !== '0') {
            // Set a new timeout based on the selected value
            refreshTimeout = setTimeout(function () {
                $.ajax({
                    url: '{{route("bet-list-live")}}',
                    method: 'GET',
                    data: { auto_refresh: value },
                    success: function (data) {
                        document.getElementById('bet_list_live').innerHTML = data;
                        console.log(data, 5555);
                        // Call the autoRefresh function again for the next refresh
                        autoRefresh(value);
                    }
                });
            }, value);
    //    }            
        }   
</script>

  @include('layouts.footer')
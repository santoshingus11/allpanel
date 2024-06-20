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
                <div class="d-flex justify-content-start align-items-center pb-2 mobile_port_change">
                  <div class="d-inline-flex align-items-center">
                    <h4 class=" mb-0">Void markets</h4>
                    <div class="d-inline-flex mx-4 mr-0">
                      <div class="input-group mx-2">
                        <select class="form-select" id="exampleFormControlSelect1">
                          <option selected="" disabled="">Sport Name</option>
                          < <option value="0">All</option>
                            <option value="2">Tennis</option>
                            <option value="1">Football</option>
                            <option value="4">Cricket</option>
                            <option value="-17">Virtual T10</option>
                            <option value="-1">Casino</option>
                            <option value="">Volleyball</option>
                            <option value="">Greyhound Racing</option>
                            <option value="">Esports</option>
                            <option value="8">Motor Sport</option>
                            <option value="6">Boxing</option>
                        </select>
                      </div>
                      <div class="input-group">
                        <select class="form-select" id="exampleFormControlSelect1">
                          <option selected="" disabled="">Series Name</option>
                          <option value="0">All</option>
                          <option value="-1">Live Teen Patti</option>
                          <option value="-2">Live Poker</option>
                          <option value="-3">Andar Bahar</option>
                          <option value="-7">Lucky 7</option>
                          <option value="-12">32 Card Casino</option>
                          <option value="-13">Dragon Tiger</option>
                          <option value="-14">Bollywood Casino</option>
                          <option value="-10">Worli</option>
                          <option value="-16">Race 20-20</option>
                          <option value="-15">Sport Casino</option>
                          <option value="-19">Casino War</option>
                        </select>
                      </div>
                      <div class="input-group mx-2">
                        <select class="form-select" id="exampleFormControlSelect1">
                          <option selected="" disabled="">Match Name</option>
                          <option value="">All</option>
                          <option value="-1">20-20 Teen Patti</option>
                          <option value="-2">1 Day Teen Patti</option>
                          <option value="-3">Test Teen Patti</option>
                          <option value="-4">20-20 Poker</option>
                          <option value="-5">1 Day Poker</option>
                          <option value="-7">Andar Bahar</option>
                          <option value="-145">Lucky 7 - A</option>
                          <option value="-1010">32 Cards - B</option>
                          <option value="-1011">20-20 DRAGON TIGER</option>
                          <option value="-1012">32 Cards A</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="btn_Download d-inline-flex text-nowrap">
                    <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                      Search
                    </button>
                  </div>
                </div>
                <div class="Pand-l-Statement">
                  <div class="card-body_agent-listing-demoag5">
                    <div class="d-flex justify-content-end align-items-baseline mb-1">
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
                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th class="w-10">Sr.No</th>
                              <th class="w-8">Series Name</th>
                              <th class="w-8">Match Name</th>
                              <th class="w-8">Match Date</th>
                              <th class="w-8">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="">1</td>
                              <td class="">Race 20-20</td>
                              <td class="">Adelaide Strikers WBBL v Brisbane Heat WBBL</td>
                              <td class="">0001-01-01 05:53:28 </td>
                              <td class="">
                                <div class="match_locks">
                                  <a class="btn void-button" href="javascript:void(0);" id="downloadFile_Match_Odds">void </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="">2</td>
                              <td class="">Race 20-20</td>
                              <td class="">Adelaide Strikers WBBL v Brisbane Heat WBBL</td>
                              <td class="">0001-01-01 05:53:28 </td>
                              <td class="">
                                <div class="match_locks">
                                  <a class="btn void-button" href="javascript:void(0);" id="downloadFile_Match_Odds">void </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="">3</td>
                              <td class="">Race 20-20</td>
                              <td class="">Adelaide Strikers WBBL v Brisbane Heat WBBL</td>
                              <td class="">0001-01-01 05:53:28 </td>
                              <td class="">
                                <div class="match_locks">
                                  <a class="btn void-button" href="javascript:void(0);" id="downloadFile_Match_Odds">void </a>
                                </div>
                              </td>
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


  @include('layouts.footer')
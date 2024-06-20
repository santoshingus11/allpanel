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
          <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center pb-2 border-bottom mobile_port_change-new">
                  <div class="d-inline-flex align-items-center">
                    <h4 class=" mb-0"> Match Setting</h4>
                  </div>
                  <form class="forms-sample">
                    <div class="row align-items-center">
                      <div class="mb-2 col-md-6 col-lg-4 col-sm-12">
                        <label for="exampleInputUsername1" class="form-label">Sport Name</label>
                        <select class="form-select" id="exampleFormControlSelect1">
                          <option selected="" disabled="">Sport Type: All</option>
                          <option value="2">Tennis</option>
                          <option value="1">Football</option>
                          <option value="4">Cricket</option>
                          <option value="-17">Virtual T10</option>
                          <option value="-1">Casino</option>
                          <option value="998917">Volleyball</option>
                          <option value="4339">Greyhound Racing</option>
                          <option value="27454571">Esports</option>
                          <option value="8">Motor Sport</option>
                          <option value="6">Boxing</option>
                          <option value="7524">Ice Hockey</option>
                          <option value="3503">Darts</option>
                          <option value="26420387">Mixed Martial Arts</option>
                          <option value="5">Rugby Union</option>
                          <option value="-5">Election</option>
                        </select>
                      </div>

                      <div class="mb-2 col-md-6 col-lg-3 col-sm-12">
                        <label for="exampleInputUsername1" class="form-label">Series Name</label>
                        <select class="form-select" id="exampleFormControlSelect1">
                          <option selected="" disabled="">Series Name: All</option>
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
                          <option value="-18">Baccarat</option>
                          <option value="10932509">English Premier League</option>
                          <option value="11">Dutch Eerste Divisie</option>
                          <option value="8594603">Peruvian Primera Division</option>
                          <option value="23">Danish Superliga</option>
                          <option value="45">Finnish Veikkausliiga</option>
                          <option value="4905">Romanian Liga I</option>
                          <option value="81">Italian Serie A</option>
                        </select>
                      </div>

                      <div class="mb-2 col-md-6 col-lg-3 col-sm-12">
                        <label for="exampleInputUsername1" class="form-label">Match Name</label>
                        <select class="form-select" id="exampleFormControlSelect1">
                          <option selected="" disabled="">Match Name: All</option>
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
                      <div class="mb-2 col-md-6 col-lg-2 col-sm-12">
                        <label for="exampleInputUsername1" class="form-label"></label>
                        <a type="submit" class="btn-send normal_with font-13 no-border mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i data-feather="star"></i> Bet Limit</a>
                      </div>
                    </div>
                  </form>

                </div>

                <div class="Agent_-Listing height30vh">
                  <div class="table-responsive mt-3">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="">Sr.No</th>
                          <th class="">Series Name</th>
                          <th class="">Match Name</th>
                          <th class="">Match Date</th>
                          <th class="">Logs and History</th>
                          <th class="">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>HG0125</td>
                          <td>Tyr45tu</td>
                          <td>
                            <div class="global-ex-logo"><img class="" src="https://clone-lordsexch.mrmmbs.com/assets/images/logo.png"></div>
                          </td>
                          <td class="cursor" data-bs-toggle="modal" data-bs-target="#LogsandHistory">2023-07-01 11:17:01</td>
                          <td>
                            <div class="input-group mobile_port_change-new">
                              <button type="submit" class="btn-send normal_with  font-13 no-border" data-bs-toggle="modal" data-bs-target="#TransferStatusexampleModal"><i data-feather="settings"></i></button>
                              <button type="submit" class="btn_replay normal_with font-13  mx-2">Update</button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>HG0125</td>
                          <td>Tyr45tu</td>
                          <td>
                            <div class="global-ex-logo"><img class="" src="https://clone-lordsexch.mrmmbs.com/assets/images/logo.png"></div>
                          </td>
                          <td class="cursor" data-bs-toggle="modal" data-bs-target="#LogsandHistory">2023-07-01 11:17:01</td>
                          <td>
                            <div class="input-group mobile_port_change-new">
                              <button type="submit" class="btn-send normal_with  font-13 no-border" data-bs-toggle="modal" data-bs-target="#TransferStatusexampleModal"><i data-feather="settings"></i></button>
                              <button type="submit" class="btn_replay normal_with font-13  mx-2">Update</button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>HG0125</td>
                          <td>Tyr45tu</td>
                          <td>
                            <div class="global-ex-logo"><img class="" src="https://clone-lordsexch.mrmmbs.com/assets/images/logo.png"></div>
                          </td>
                          <td class="cursor" data-bs-toggle="modal" data-bs-target="#LogsandHistory">2023-07-01 11:17:01</td>
                          <td>
                            <div class="input-group mobile_port_change-new">
                              <button type="submit" class="btn-send normal_with  font-13 no-border" data-bs-toggle="modal" data-bs-target="#TransferStatusexampleModal"><i data-feather="settings"></i></button>
                              <button type="submit" class="btn_replay normal_with font-13  mx-2">Update</button>
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



  <!-- Edit a Bet Limit Modal -->
  <div class="modal fade" id="TransferStatusexampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content perfect-scrollbar-example">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit a Bet Limit</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3">

            <div class="dashboard-card">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="inputPassword4" class="form-label font-13 font-600">Series Name</label>
                  <select class="form-select" aria-label="Default select example">
                    <option value="0">All</option>
                    <option value="2">Tennis</option>
                    <option value="1">Football</option>
                    <option value="4">Cricket</option>
                    <option value="-17">Virtual T10</option>
                    <option value="-1">Casino</option>
                    <option value="998917">Volleyball</option>
                    <option value="4339">Greyhound Racing</option>
                    <option value="27454571">Esports</option>
                    <option value="8">Motor Sport</option>
                    <option value="6">Boxing</option>
                    <option value="7524">Ice Hockey</option>
                    <option value="3503">Darts</option>
                    <option value="26420387">Mixed Martial Arts</option>
                    <option value="5">Rugby Union</option>
                    <option value="-5">Election</option>
                  </select>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="inputPassword4" class="form-label font-13 font-600">Match Name</label>
                  <div class="agent_serch_box mb-2">
                    <select class="form-select" aria-label="Default select example">
                      <option value="0">All</option>
                      <option value="2">Tennis</option>
                      <option value="1">Football</option>
                      <option value="4">Cricket</option>
                      <option value="-17">Virtual T10</option>
                      <option value="-1">Casino</option>
                      <option value="998917">Volleyball</option>
                      <option value="4339">Greyhound Racing</option>
                      <option value="27454571">Esports</option>
                      <option value="8">Motor Sport</option>
                      <option value="6">Boxing</option>
                      <option value="7524">Ice Hockey</option>
                      <option value="3503">Darts</option>
                      <option value="26420387">Mixed Martial Arts</option>
                      <option value="5">Rugby Union</option>
                      <option value="-5">Election</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="inputPassword4" class="form-label font-13 font-600">Min bet</label>
                  <input type="number" class="form-control event-search" placeholder="Min bet" aria-label="User Name">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="inputPassword4" class="form-label font-13 font-600">Max Bet</label>
                  <input type="number" class="form-control event-search" placeholder="Max Bet" aria-label="User Name">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="Min Profit" class="form-label font-13 font-600">Min Profit</label>
                  <input type="number" class="form-control event-search" placeholder="Min Profit" aria-label="User Name">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="number" class="form-label font-13 font-600">Maximum Profit</label>
                  <input type="number" class="form-control event-search" placeholder="Maximum Profit" aria-label="Name">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="number" class="form-label font-13 font-600">Markets Commission</label>
                  <input type="number" class="form-control event-search" placeholder="Markets Commission" aria-label="Name">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="number" class="form-label font-13 font-600">Max Liability</label>
                  <input type="number" class="form-control event-search" placeholder="Max Liability" aria-label="Name">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="number" class="form-label font-13 font-600">Max Market</label>
                  <input type="number" class="form-control event-search" placeholder="Max Market" aria-label="Name">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="number" class="form-label font-13 font-600">Liability</label>
                  <input type="number" class="form-control event-search" placeholder="Liability" aria-label="Name">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="number" class="form-label font-13 font-600">Bet Delay</label>
                  <input type="number" class="form-control event-search" placeholder="Bet Delay" aria-label="Name">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                  <label for="number" class="form-label font-13 font-600">Commission</label>
                  <input type="number" class="form-control event-search" placeholder="Commission" aria-label="Name">
                </div>

              </div>
            </div>
          </form>
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
  </div>

  <!-- Create a Bet Limit Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content perfect-scrollbar-example">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Bet Limit</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3">

            <div class="dashboard-card">

              <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="inputPassword4" class="form-label font-13 font-600">Series Name</label>
                  <select class="form-select" aria-label="Default select example">
                    <option value="0">All</option>
                    <option value="2">Tennis</option>
                    <option value="1">Football</option>
                    <option value="4">Cricket</option>
                    <option value="-17">Virtual T10</option>
                    <option value="-1">Casino</option>
                    <option value="998917">Volleyball</option>
                    <option value="4339">Greyhound Racing</option>
                    <option value="27454571">Esports</option>
                    <option value="8">Motor Sport</option>
                    <option value="6">Boxing</option>
                    <option value="7524">Ice Hockey</option>
                    <option value="3503">Darts</option>
                    <option value="26420387">Mixed Martial Arts</option>
                    <option value="5">Rugby Union</option>
                    <option value="-5">Election</option>
                  </select>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="inputPassword4" class="form-label font-13 font-600">Match Name</label>
                  <div class="agent_serch_box mb-2">
                    <select class="form-select" aria-label="Default select example">
                      <option value="0">All</option>
                      <option value="2">Tennis</option>
                      <option value="1">Football</option>
                      <option value="4">Cricket</option>
                      <option value="-17">Virtual T10</option>
                      <option value="-1">Casino</option>
                      <option value="998917">Volleyball</option>
                      <option value="4339">Greyhound Racing</option>
                      <option value="27454571">Esports</option>
                      <option value="8">Motor Sport</option>
                      <option value="6">Boxing</option>
                      <option value="7524">Ice Hockey</option>
                      <option value="3503">Darts</option>
                      <option value="26420387">Mixed Martial Arts</option>
                      <option value="5">Rugby Union</option>
                      <option value="-5">Election</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="inputPassword4" class="form-label font-13 font-600">Min bet</label>
                  <input type="number" class="form-control event-search" placeholder="Min bet" aria-label="User Name">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="inputPassword4" class="form-label font-13 font-600">Max Bet</label>
                  <input type="number" class="form-control event-search" placeholder="Max Bet" aria-label="User Name">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="Min Profit" class="form-label font-13 font-600">Min Profit</label>
                  <input type="number" class="form-control event-search" placeholder="Min Profit" aria-label="User Name">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="number" class="form-label font-13 font-600">Maximum Profit</label>
                  <input type="number" class="form-control event-search" placeholder="Maximum Profit" aria-label="Name">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="number" class="form-label font-13 font-600">Markets Commission</label>
                  <input type="number" class="form-control event-search" placeholder="Markets Commission" aria-label="Name">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="number" class="form-label font-13 font-600">Max Liability</label>
                  <input type="number" class="form-control event-search" placeholder="Max Liability" aria-label="Name">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="number" class="form-label font-13 font-600">Max Market</label>
                  <input type="number" class="form-control event-search" placeholder="Max Market" aria-label="Name">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="number" class="form-label font-13 font-600">Liability</label>
                  <input type="number" class="form-control event-search" placeholder="Liability" aria-label="Name">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="number" class="form-label font-13 font-600">Bet Delay</label>
                  <input type="number" class="form-control event-search" placeholder="Bet Delay" aria-label="Name">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                  <label for="number" class="form-label font-13 font-600">Commission</label>
                  <input type="number" class="form-control event-search" placeholder="Commission" aria-label="Name">
                </div>

              </div>
            </div>
          </form>
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
  </div>

  <!-- Logs and History Modal -->
  <div class="modal fade" id="LogsandHistory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="LogsandHistoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content perfect-scrollbar-example">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="LogsandHistoryLabel">Logs and History</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card-body_agent-listing-demoag5">
            <div class="bg-white py-3 px-3">
              <div class="_Account-Statement user_profile_-">
                <div class="function-wrap fix_mobile_view_design_code">
                  <div class="serch-bx-and-dropdown mb-2  mt-3">
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
                          <input class="form-control border" type="text" placeholder="Type to Search">
                          <button class="btn btn-light btn-icon border" type="button" id="button-search-addon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                              <circle cx="11" cy="11" r="8"></circle>
                              <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" total_all w-100">
                    <table id="table_transfer" class="table01 tab-transfer tab-banking w-100 borders">
                      <tbody>
                        <tr class="fancy-setting">
                          <th scope="col" class="align-C px-4 border-l">Remark</th>
                          <th scope="col" class="align-C px-4 border-l">Date & Time</th>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr class="fancy-setting">
                          <td class="align-C border-l">user password changed by self</td>
                          <td class="align-C border-l">2023-10-27 15:46:14</td>
                        </tr>
                        <tr class="fancy-setting">
                          <td class="align-C border-l">Password updated by self</td>
                          <td class="align-C border-l">2023-10-27 15:50:21</td>
                        </tr>
                        <tr class="fancy-setting">
                          <td class="align-C border-l">User Password Changed By sadmin111</td>
                          <td class="align-C border-l">2023-10-29 15:12:58</td>
                        </tr>
                        <tr class="fancy-setting">
                          <td class="align-C border-l">user password changed by self</td>
                          <td class="align-C border-l">2023-10-27 15:46:14</td>
                        </tr>
                       
                       
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="modal-footer">
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" data-bs-dismiss="modal" class="btn green  btn-icon-text mb-2 mb-md-0 mx-2">
              Cancel
            </button>

            <a href="#"><button type="button" class="btn btn-primary New-Agent-save btn-icon-text mb-2 mb-md-0">
                Save
              </button></a>
          </div>
        </div> -->
      </div>
    </div>
  </div>

  @include('layouts.footer')
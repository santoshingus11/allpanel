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
              <div class="card-body pt-2">
                <div class="d-flex justify-content-between align-items-center pb-2 border-bottom mobile_port_change-new">
                  <div class="d-inline-flex align-items-center">
                    <h4 class=" mb-0"> Fancy Setting</h4>
                  </div>
                  <form class="forms-sample">
                    <div class="row">
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

                      <div class="mb-2 col-md-6 col-lg-4 col-sm-12">
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

                      <div class="mb-2 col-md-6 col-lg-4 col-sm-12">
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
                    </div>
                  </form>
                </div>
                <div class="Pand-l-Statement">
                  <div class="card-body_agent-listing-demoag5">
                    <div class="Agent_-Listing height30vh mt-1">
                      <div class="table-responsive border-bottom mt-3">
                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th class="align-C">Sr.No</th>
                              <th class="align-C">Match Name</th>
                              <th class="align-C">Match Date</th>
                              <th class="align-C">Result</th>
                              <th class="align-C">Abandon</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-center">1</td>
                              <td class="text-center">Adelaide Strikers WBBL v Brisbane Heat WBBL</td>
                              <td class="text-center">2023-12-02T08:10:00.000Z</td>
                              <td class="text-center">
                                <form action="" method="post" id="" class="fany-form ng-untouched ng-pristine ng-valid">
                                  <div class="form-inline d-flex align-items-center"><input type="text" class="form-control event-search wid-150" id="result0">
                                    <button type="submit" class="btn-send normal_with w1-100 font-13 no-border mx-2">Update</button>
                                  </div>
                                </form>
                              </td>
                              <td class="align-C border-l d-flex align-items-center justify-content-center">

                                <button type="submit" class="btn_replay normal_with w1-100 font-13  mx-2">Abandon</button>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">2</td>
                              <td class="text-center">Adelaide Strikers WBBL v Brisbane Heat WBBL</td>
                              <td class="text-center">2023-12-02T08:10:00.000Z</td>
                              <td class="text-center">
                                <form action="" method="post" id="" class="fany-form ng-untouched ng-pristine ng-valid">
                                  <div class="form-inline d-flex align-items-center"><input type="text" class="form-control event-search" id="result0">
                                    <button type="submit" class="btn-send normal_with w1-100 font-13 no-border mx-2">Update</button>
                                  </div>
                                </form>
                              </td>
                              <td class="align-C border-l d-flex align-items-center justify-content-center">

                                <button type="submit" class="btn_replay normal_with w1-100 font-13  mx-2">Abandon</button>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">3</td>
                              <td class="text-center">Adelaide Strikers WBBL v Brisbane Heat WBBL</td>
                              <td class="text-center">2023-12-02T08:10:00.000Z</td>
                              <td class="text-center">
                                <form action="" method="post" id="" class="fany-form ng-untouched ng-pristine ng-valid">
                                  <div class="form-inline d-flex align-items-center"><input type="text" class="form-control event-search wid-150" id="result0">
                                    <button type="submit" class="btn-send normal_with w1-100 font-13 no-border mx-2">Update</button>
                                  </div>
                                </form>
                              </td>
                              <td class="align-C border-l d-flex align-items-center justify-content-center">

                                <button type="submit" class="btn_replay normal_with w1-100 font-13  mx-2">Abandon</button>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">4</td>
                              <td class="text-center">Adelaide Strikers WBBL v Brisbane Heat WBBL</td>
                              <td class="text-center">2023-12-02T08:10:00.000Z</td>
                              <td class="text-center">
                                <form action="" method="post" id="" class="fany-form ng-untouched ng-pristine ng-valid">
                                  <div class="form-inline d-flex align-items-center"><input type="text" class="form-control event-search wid-150" id="result0">
                                    <button type="submit" class="btn-send normal_with w1-100 font-13 no-border mx-2">Update</button>
                                  </div>
                                </form>
                              </td>
                              <td class="align-C border-l d-flex align-items-center justify-content-center">

                                <button type="submit" class="btn_replay normal_with w1-100 font-13  mx-2">Abandon</button>
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


    @include('layouts.footer')
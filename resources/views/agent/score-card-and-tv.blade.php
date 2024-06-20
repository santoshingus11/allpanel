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
                <div class="d-flex justify-content-between align-items-center pb-2 border-bottom">
                  <div class="d-inline-flex align-items-center">
                    <h4 class=" mb-0"> Score Card and TV</h4>
                  </div>

                </div>
                <div class="Pand-l-Statement mt-3">
                  <div class="card-body_agent-listing-demoag5">
                    <div class="Agent_-Listing height30vh mt-1">
                      <div class="table-responsive border-bottom">
                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th class="align-C">Sr.No</th>
                              <th class="align-C">Match Name</th>
                              <th class="align-C">Date</th>
                              <th class="align-C">Score Card</th>
                              <th class="align-C">TV</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-center">1</td>
                              <td class="text-center">Tennis</td>
                              <td class="text-center">0001-01-01 05:53:28</td>
                              <td class="text-centers">
                                <div class="toggle-group">
                                  <input type="checkbox" name="on-off-switch" id="on-off-switch" checked="" tabindex="1">
                                  <label for="on-off-switch">
                                    <!-- <span class="aural">Show:</span> Show Accessible Toggle Switch -->
                                  </label>
                                  <div class="onoffswitch pull-right" aria-hidden="true">
                                    <div class="onoffswitch-label">
                                      <div class="onoffswitch-inner"></div>
                                      <div class="onoffswitch-switch"></div>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td class="text-centers">
                                <div class="toggle-group">
                                  <input type="checkbox" name="on-off-switch1" id="on-off-switch1" checked="" tabindex="1">
                                  <label for="on-off-switch1">
                                    <!-- <span class="aural">Show:</span> Show Accessible Toggle Switch -->
                                  </label>
                                  <div class="onoffswitch pull-right" aria-hidden="true">
                                    <div class="onoffswitch-label">
                                      <div class="onoffswitch-inner"></div>
                                      <div class="onoffswitch-switch"></div>
                                    </div>
                                  </div>
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


    @include('layouts.footer')
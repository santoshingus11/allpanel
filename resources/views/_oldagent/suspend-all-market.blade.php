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
                <div class="d-flex justify-content-between align-items-center pb-2 border-bottom mobile_port_change">
                  <div class="d-inline-flex align-items-center">
                    <h4 class=" mb-0"> Suspend All Market</h4>
                  </div>
                  <form class="forms-sample width-50">
                    <div class="row">
                      <div class="mb-2 col-md-6 col-lg-5 col-sm-12">
                        <label for="exampleInputUsername1" class="form-label">Suspend Market</label>
                        <select class="form-select" id="exampleFormControlSelect1">
                          <option selected="" disabled="">Market Type: All</option>
                          <option value="2">Active Market</option>
                          <option value="1">Suspend All Market</option>
                        </select>
                      </div>

                      <div class="mb-2 col-md-6 col-lg-5 col-sm-12">
                        <label for="exampleInputUsername1" class="form-label">Confirm Password</label>
                        <input type="number" class="form-control event-search" id="exampleInputUsername1" autocomplete="off" placeholder="Confirm Password">
                      </div>

                     
                      <div class="mb-1 col-md-6 col-lg-2 col-sm-12">
                        <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2 mt-4">
                        <i data-feather="send"></i> Submit 
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="Pand-l-Statement">
                  <div class="card-body_agent-listing-demoag5">
                  
                  </div>
                </div>
              </div>
            </div>
          </div>




        </div>
      </div>
    </div>


    @include('layouts.footer')
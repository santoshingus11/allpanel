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
                <div class="d-flex justify-content-between align-items-center pb-2 border-bottom global-settings_m">
                  <div class="d-inline-flex align-items-center">
                    <h4 class=" mb-0"> Declare Market</h4>
                  </div>
                  <form class="forms-sample">
                    <div class="row">
                      <div class="mb-2 col-md-6 col-lg-4 col-sm-12">
                        <label for="exampleInputUsername1" class="form-label">Sport Name</label>
                        <select class="form-select" id="sports_name" onchange="changemarketsettings()">
                        <option value="">--Select--</option>
                        @foreach($sports_list as $sl)
                        <option value="{{$sl->sports_name}}" @if(isset($event_name) && $sl->sports_name==$event_name){{'selected'}}@endif>{{$sl->sports_name}}</option>
                        @endforeach
                        </select>
                      </div>

                      <div class="mb-2 col-md-6 col-lg-4 col-sm-12">
                        <label for="exampleInputUsername1" class="form-label">Series Name</label>
                        <select class="form-select" id="series_name" onchange="changemarketsettings()">
                        <option value="">--Select--</option>
                          @foreach($series_list as $sl)
                          <option value="{{$sl->series_name}}" @if(isset($series_name) && $sl->series_name==$series_name){{'selected'}}@endif>{{$sl->series_name}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="mb-2 col-md-6 col-lg-4 col-sm-12">
                        <label for="exampleInputUsername1" class="form-label">Match Name</label>
                        <select class="form-select" id="match_name" onchange="changemarketsettings()">
                        <option value="">--Select--</option>
                          @foreach($match_list as $sl)
                          <option value="{{$sl->match_name}}" @if(isset($match_name) && $sl->match_name==$match_name){{'selected'}}@endif>{{$sl->match_name}}</option>
                          @endforeach
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
                              <th class="align-C">Series Name</th>
                              <th class="align-C">Selection Name</th>
                              <th class="align-C">Match Name</th>
                              <th class="align-C">Match Date</th>
                              <th class="align-C">Market Name</th>
                              <th class="align-C">Market Id</th>
                              <th class="align-C">Action</th>
                            </tr>
                          </thead>
                          <tbody id="market_settings_id">
                       @include('agent.declare-market-search')
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
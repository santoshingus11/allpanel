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
                <div class="d-flex justify-content-between align-items-center pb-2 border-bottom">
                  <div class="d-inline-flex align-items-center">
                    <h4 class=" mb-0"> Banner Update</h4>
                  </div>
                  <form class="forms-sample d-flex">


                    <div class="mb-3">
                      <label for="exampleInputUsername1" class="form-label">Index Number</label>
                      <input type="number" class="form-control event-search" id="exampleInputUsername1" autocomplete="off" placeholder="Index Number">
                    </div>
                    <div class="mb-3 mx-2">
                      <label for="formFile" class="form-label">Choose File</label>
                      <input class="form-control event-search" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputUsername1" class="form-label">Banner Placement</label>
                      <select class="form-select" id="exampleFormControlSelect1">
                        <option selected="" disabled="">Banner Type: All</option>
                        <option value="0">All</option>
                        <option value="2">after login</option>
                        <option value="1">before login</option>
                      </select>
                    </div>
                    <div class="mb-1 mx-2">
                      <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2 mt-4">
                        <i data-feather="upload-cloud"></i> Upload Images
                      </button>
                    </div>
                  </form>
                </div>
                <div class="Pand-l-Statement">
                  <div class="card-body_agent-listing-demoag5">
                    <div class="Agent_-Listing height30vh mt-1">
                      <div class="table-responsive border-bottom">
                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th class="align-C">Index</th>
                              <th class="align-C">Images</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-center">10 </td>
                              <td class="text-center">https://ag.kingexchangge.com/api/upload/image/screenshot.png </td>
                            </tr>
                            <tr>
                              <td class="text-center">10 </td>
                              <td class="text-center">https://ag.kingexchangge.com/api/upload/image/screenshot.png </td>
                            </tr>
                            <tr>
                              <td class="text-center">10 </td>
                              <td class="text-center">https://ag.kingexchangge.com/api/upload/image/screenshot.png </td>
                            </tr>
                            <tr>
                              <td class="text-center">10 </td>
                              <td class="text-center">https://ag.kingexchangge.com/api/upload/image/screenshot.png </td>
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
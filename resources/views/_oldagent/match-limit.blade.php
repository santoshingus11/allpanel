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
                    <h4 class=" mb-0">Match Limit</h4>
                  </div>
                </div>

                <table class="table-s table-exchange w-100 border bg-white mb-4">
                  <thead>
                    <tr>
                      <th colspan="4" class="table-s-header">Match Limit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="ancy-setting">
                      <th class=""></th>
                      <th class="">Min</th>
                      <th class="">Max</th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr class="ancy-setting">
                      <td class="font-600 text-black">Match Limit</td>
                      <td class=""><input type="number" placeholder="Commission" value="400" class="box-shadow form-control font-12" id="commissionInput"></td>
                      <td class=""><input type="number" placeholder="Commission" value="100000" class="box-shadow form-control font-12" id="commissionInput"></td>
                    </tr>
                    <tr class="ancy-setting">
                      <td class="font-600 text-black">Profit Limit</td>
                      <td class=""><input type="number" placeholder="Commission" value="400" class="box-shadow form-control font-12" id="commissionInput"></td>
                      <td class=""><input type="number" placeholder="Commission" value="100000" class="box-shadow form-control font-12" id="commissionInput"></td>
                    </tr>
                    <tr class="ancy-setting">
                      <td class="font-600 text-black">Liablity Limit</td>
                      <td class=""><input type="number" placeholder="Commission" value="400" class="box-shadow form-control font-12" id="commissionInput"></td>
                      <td class=""><input type="number" placeholder="Commission" value="100000" class="box-shadow form-control font-12" id="commissionInput"></td>
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



  @include('layouts.footer')
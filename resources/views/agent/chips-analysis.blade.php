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
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                  <h4 class=" mb-0">Chip Analysis</h4>
                </div>
                <div class="admin">
                  <table class="w-auto table table-striped table-balance">
                    <tbody>
                      <tr>
                        <td>Net Exposure</td>
                        <td class="text-right negative red">0</td>
                      </tr>
                      <tr>
                        <th>Balance Down</th>
                        <td class="text-right  negative red">-400</td>
                      </tr>
                      <tr>
                        <td>Balance Up</td>
                        <td class="text-right negative green">400</td>
                      </tr>
                      <tr>
                        <td>Credit Limit</td>
                        <td class="text-right negative red">4000000</td>
                      </tr>
                      <tr>
                        <td>Available Credit</td>
                        <td class="text-right">995000</td>
                      </tr>
                      <tr>
                        <td>Total credit given to Super Master</td>
                        <td class="text-right">3005000</td>
                      </tr>
                      <tr>
                        <td>Total credit distributed by Master</td>
                        <td class="text-right">2000000</td>
                      </tr>
                      <tr>
                        <td>Total credit distributed by Agent</td>
                        <td class="text-right">1000000</td>
                      </tr>
                      <tr>
                        <td>Total credit distributed by Agent</td>
                        <td class="text-right">1000000</td>
                      </tr>
                      <tr>
                        <td>Total credit distributed by Member</td>
                        <td class="text-right">204000</td>
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
  @include('layouts.footer')
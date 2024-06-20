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
                    <h4 class=" mb-0"> Delete Bet History</h4>
                  </div>
                </div>
                <div class="Pand-l-Statement mt-3">
                  <div class="card-body_agent-listing-demoag5">
                    <div class="Agent_-Listing height30vh mt-1">
                      <div class="table-responsive border-bottom">
                        <table class="table table-striped table-bordered inline-block overflow-x">
                          <thead>
                            <tr>
                              <th class="align-C">Placed Date.</th>
                              <th class="align-C">Deleted Date</th>
                              <th class="align-C">UserName</th>
                              <th class="align-C">Market</th>
                              <th class="align-C">Deleted By</th>
                              <th class="align-C">Match Name</th>
                              <th class="align-C">Selection Name</th>
                              <th class="align-C">Odds</th>
                              <th class="align-C">stack</th>
                              <th class="align-C">Ip Address</th>
                              <th class="align-C">Location</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($data as $sc)
                            <tr>
                              <td class="text-center">
                                @if(!empty($sc->created_at))
                                 {{  \Carbon\Carbon::parse($sc->created_at)->format('Y-m-d h:i:s') }}
                                @else
                                No data found
                                @endif
                              </td>
                              <td class="text-center"> 
                                @if(!empty($sc->deleted_at))
                                {{  \Carbon\Carbon::parse($sc->deleted_at)->format('Y-m-d h:i:s') }}
                               @else
                               No data found
                               @endif
                              </td>
                              <td class="text-center">
                               
                                {{$sc->client_username}}
                               
                              </td>
                              <td class="text-center">{{$sc->market_name}}</td>
                              <td class="text-center"> 
                              
                                {{$sc->deleted_by_username}}
                               

                              </td>
                              <td class="text-center"> {{$sc->match_name}}</td>
                              <td class="text-center">{{$sc->selection_name}}</td>
                              <td class="text-center"> {{$sc->odd_req}}</td>
                              <td class="text-center"> {{$sc->bet_placed}}</td>
                              @php
                              $browserDetails = json_decode($sc->browser_details, true);
                              $ip = $browserDetails['ip'] ?? '';
                              $location = implode(', ', array_filter([$browserDetails['city'] ?? '', $browserDetails['region'] ?? '', $browserDetails['country'] ?? '']));
                              @endphp
                              <td class="text-center"> {{ $ip }}</td>
                              <td class="text-center"> {{ $location }}</td>
                            </tr>
                          @endforeach
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
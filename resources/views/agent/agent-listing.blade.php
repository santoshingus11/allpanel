@php
$netexposure=QueryHelper::total_netexposure(Auth::guard('agent')->user()->id,Auth::guard('agent')->user()->role_id);
$total_balancedown=QueryHelper::total_balancedown(Auth::guard('agent')->user()->id,Auth::guard('agent')->user()->role_id);
$total_balanceup=QueryHelper::total_balanceup(Auth::guard('agent')->user()->id,Auth::guard('agent')->user()->role_id);
$available_credit=QueryHelper::total_availablecredit(Auth::guard('agent')->user()->id,Auth::guard('agent')->user()->role_id);
@endphp
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
<style>
  .flash__message {
    padding: 12px;
    background-color: aliceblue;
    border-radius: 4px;
  }

  .flash__message.error {
    color: #fff;
    background-color: #982626;
    text-align: center;
    font-size: 14px;
    padding: 6px 16px;
    position: absolute;
    top: 23px;
    border-radius: 0px;
    left: 46%;
    transform: translateX(-50%);
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    display: block;
  }
</style>

<body>


  <div class="main-wrapper Dashboard-bg customResponsive">
    <!-- partial:partials/_sidebar.html -->
    <div class="left-side-bar">@include('layouts.left-side-bar')</div>
    <div class="page-wrapper bg-none">
      <!-- partial:partials/_navbar.html -->
      <div class="top-header-section">@include('layouts.header')</div>
      <!-- partial -->


      <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin top-bg px-4">
          <div class="Welcome-to Dashboard">
            <ul class="d-flex justify-content-between Balance_Down">
              <li>Balance Down: <span class="red">{{$total_balancedown ?? '0.00'}}</span></li>
              <li>Balance Up: <span class="green">
              <?php

use App\Models\BankingHistory;

$exposure = BankingHistory::where('parent_id',Auth::guard('agent')->user()->id)->where('type','W')->sum('amount');
 
?>
                  <?php

use App\Helpers\QueryHelper;

 if (!empty($total_balanceup)) { ?>
                    <?php echo $total_balanceup - $total_balancedown ?? "" ?>
                  <?php } ?>
                </span></li>
              <li>Net Exposure: <span @if($exposure>0) class="green" @else class="red" @endif >{{$exposure ?? '0.00'}}</span></li>
              <li>Available Credit: <span @if($available_credit>0) class="green" @else class="red" @endif>{{$available_credit ?? '0.00'}}</span></li>
            </ul>
          </div>
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0">
              Refresh
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div id="successMessage" class="center_error_message_all_section relative">
                </div>
                <script>
                  $(document).ready(function() {
                    setTimeout(function() {
                      $(".center_error_message_all_section").fadeOut("slow");
                    }, 3000);
                  });
                </script>
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                  <h4 class=" mb-0">
                    @if(Auth::guard('agent')->user()->role_id=='3')
                    Master Listing
                    @elseif(Auth::guard('agent')->user()->role_id=='4')
                    Client Listing
                    @endif
                  </h4>
                  <div class="serch-filter">
                    <div class="mb-4">
                      <input type="text" id="searchInput" class="form-control" placeholder="Search by Login Name">
                    </div>
                  </div>

                  <div class="d-flex align-items-center flex-wrap text-nowrap">
                    <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                      Download CSV
                    </button>
                    <a href="{{route('new-agent')}}"><button type="button" class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">
                        @if(Auth::guard('agent')->user()->role_id == 4)
                        New Client
                        @elseif(Auth::guard('agent')->user()->role_id == 3)
                        New Master
                        @endif
                      </button></a>
                  </div>
                </div>
                <div class="Agent_-Listing">
                  <p><em>Downline Listing</em></p>

                  <div class="table-responsive mt-4">
                    <table class="table table-striped" id="dataTable">

                      <thead>
                        <tr>
                          <th class="">Login Name</th>
                          <th class="">Account Type</th>
                          @if(Auth::guard('agent')->user()->role_id == 3)
                          <th class="">Downline</th>
                          @endif
                          <th class="">Betting Status</th>
                          <th class="">Phone</th>
                          <th class="">Status</th>
                          <th class="">Details</th>
                          <th class="">Net Exposure</th>
                          <th class="">G/T</th>
                          <th class="">Credit Limit 0.00</th>
                          <th class="">Available Credit</th>
                          <th class="">Created</th>
                          <th class="">Last Login</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          @foreach($data as $sc)
                          <?php $total_bets_credit = QueryHelper::total_bets($sc->id); ?>

                          <td colspan="" class="">
                            @if(request()->has('id'))
                            <a href="javascript:void(0);" class="eye-view Learn-More-Button">
                              {{ $sc->username }}
                            </a>
                            @else
                            <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="eye-view Learn-More-Button" data-admin-id="{{ $sc->id }}">
                              {{ $sc->username }}
                            </a>
                            @endif
                          </td>
                          <td colspan="" class="">{{$sc->level_permission}}</td>
                          @if(Auth::guard('agent')->user()->role_id == 3)
                          @php
                          $adminrole = $sc->role_id;
                          $check_downline = DB::table('admins')->where('role_id', $sc->role_id + 1)->where('admin_id', $sc->id)->first();
                          @endphp

                          @if (!empty($check_downline))
                          <td colspan="" class="fix-images">
                            <a href="{{ route('agent-listing', ['id' => $sc->id])}}" class="font-13">
                              <img src="{{ asset('admin/assets/icons/sitemap.png') }}" class="img-fluid">
                            </a>
                            @else
                          <td colspan="" class="fix-images filter bg-none">
                            <a class="font-13">
                              <img src="{{ asset('admin/assets/icons/sitemap.png') }}" class="img-fluid">
                            </a>
                            @endif
                            @endif
                          </td>
                          <td colspan="" class="">
                            @if($sc->bet_status == 1)
                            <a class="font-13 green"><i data-feather="unlock"></i></a>
                            @elseif($sc->betstatus == 0)
                            <a class="font-13 red"><i data-feather="lock"></i></a>
                            @endif
                          </td>
                          <td>
                            {{$sc->phone}}
                           
                          </td>
                          <td colspan="" class="">
                            @if($sc->status == 1)
                            Active
                            @elseif($sc->status == 0)
                            Inactive
                            @endif
                          </td>

                          @if(Auth::guard('agent')->user()->role_id == "4")
                          <td colspan="" class=""><a href="{{route('agent-listing-demoag55',$sc->id)}}" class="font-13 eye-view"><i data-feather="eye"></i></a></td>
                          @elseif(Auth::guard('agent')->user()->role_id == "3")
                          <td colspan="" class=""><a href="{{route('agent-listing-demoag5',$sc->id)}}" class="font-13 eye-view"><i data-feather="eye"></i></a></td>
                          @else
                          <td colspan="" class=""><a href="javascript:void(0)" class="font-13 eye-view"><i data-feather="eye"></i></a></td>
                          @endif
                          <td colspan="" class="red">0.00</td>
                          <td colspan="" class="green">{{$total_bets_credit}}</td>
                          <td colspan="" class="">{{$sc->credit_limit}}</td>
                          <td colspan="" class="">{{$sc->balance}}</td>
                          <td colspan="" class="">{{ \Carbon\Carbon::parse($sc->created_at)->format('m/d/Y h:i:s A') }} </td>
                          <td colspan="" class="">
                            @if(!empty($sc->last_login))
                            {{ \Carbon\Carbon::parse($sc->last_login)->format('m/d/Y h:i:s A') }}
                            @else
                            No login data
                            @endif
                          </td>
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
  <!-- Information Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      @include('agent.adminmodal')
    </div>

  </div>



  <script>
    $(document).ready(function() {
      $("#searchInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#dataTable tbody tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
  @include('layouts.footer')
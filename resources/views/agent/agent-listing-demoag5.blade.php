<!DOCTYPE html>
@php
$netexposure=QueryHelper::total_netexposure($user_data->id,$user_data->role_id);
$total_balancedown=QueryHelper::total_balancedown($user_data->id,$user_data->role_id);
$total_balanceup=QueryHelper::total_balanceup($user_data->id,$user_data->role_id);
$available_credit=QueryHelper::total_availablecredit($user_data->id,$user_data->role_id);
@endphp
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


  <div class="main-wrapper Dashboard-bg customResponsive">
    <!-- partial:partials/_sidebar.html -->
    <div class="left-side-bar"> @include('layouts.left-side-bar')</div>
    <div class="page-wrapper bg-none">
      <!-- partial:partials/_navbar.html -->
      <div class="top-header-section"> @include('layouts.header')</div>
      <!-- partial -->
      <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin top-bg px-4">
          <div class="Welcome-to Dashboard">
            <ul class="d-flex justify-content-between Balance_Down">
              <li>Balance Down: <span class="red">0.00</span></li>
              <li>Balance Up: <span class="red">0.00</span></li>
              <li>Net Exposure: <span class="red">0.00</span></li>
              <li>Available Credit: <span class="">0.00</span></li>
            </ul>
          </div>
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0">
              Refresh
            </button>
          </div>
        </div>
       

        <?php if (Auth::guard('agent')->user()->role_id == 3) { ?>
          <div class="row">
            <div class="col-md-12">
              <h4 class=" mb-0">
                Master Listing
              </h4>
              <div class="Welcome-to Dashboard">
                <ul class="d-flex justify-content-between Balance_Down">
                  <li>Balance Down: <span class="red">{{$total_balancedown ?? '0.00'}}</span></li>
                  <li>Balance Up: <span class="green">
                      <?php if (!empty($total_balanceup)) { ?>
                        <?php echo $total_balanceup - $total_balancedown ?? "" ?>
                      <?php } ?>
                    </span></li>
                  <li>Net Exposure: <span @if($netexposure>0) class="green" @else class="red" @endif >{{$netexposure ?? '0.00'}}</span></li>
                  <li>Available Credit: <span @if($available_credit>0) class="green" @else class="red" @endif>{{$available_credit ?? '0.00'}}</span></li>
                </ul>
              </div>

              <div class="table-responsive mt-4">
                <table class="table table-striped">

                  <thead>
                    <tr>
                      <th class="">Login Name</th>
                      <th class="">Account Type</th>
                      @if(Auth::guard('agent')->user()->role_id == 3)
                      <th class="">Downline</th>
                      @endif
                      <th class="">Betting Status</th>
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
                      <td colspan="" class="">
                        @if(request()->has('id'))
                        <a href="javascript:void(0);" class="eye-view Learn-More-Button">
                          {{ $sc->username }}
                        </a>
                        @else
                        <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop1" class="eye-view Learn-More-Button" data-admin-id="{{ $sc->id }}">
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
                      <td colspan="" class="">
                        @if($sc->status == 1)
                        Active
                        @elseif($sc->status == 0)
                        Inactive
                        @endif
                      </td>
                      <td colspan="" class=""><a href="{{route('agent-listing-demoag55',$sc->id)}}" class="font-13 eye-view"><i data-feather="eye"></i></a></td>
                      <td colspan="" class="red">0.00</td>
                      <td colspan="" class="green">0.00</td>
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
        <?php } ?>

      </div>
    </div>
  </div>




  <!-- Information Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content perfect-scrollbar-example">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Information</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3 py-3 px-3">
            <h5>Username:- <span class="user-name_demoag5">demoag5</span></h5>
            <div class="col-md-12">
              <label for="UserRate" class="form-label">User Rate</label>
              <input type="number" class="form-control" id="UserRate">
            </div>

            <h5 class="mt-5">Change Password</h5>
            <div class="col-md-6">
              <label for="ChangePassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="ChangePassword" placeholder="Password">
            </div>
            <div class="col-6">
              <label for="RepeatPassword" class="form-label">Repeat Password</label>
              <input type="password" class="form-control" id="RepeatPassword" placeholder="Repeat Password">
            </div>
            <h5 class="mt-5">Change Status</h5>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">User Status</label>
              <div class="mb-4">
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="radioInline" id="radioInline">
                  <label class="form-check-label" for="radioInline">
                    Active
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="radioInline" id="radioInline1">
                  <label class="form-check-label" for="radioInline1">
                    Inactive
                  </label>
                </div>
              </div>
            </div>
            <div class="col-12 mt-2">
              <label for="inputAddress2" class="form-label">Bet Status</label>
              <div class="mb-4">
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="radioInline" id="radioInline">
                  <label class="form-check-label" for="radioInline">
                    Active
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="radioInline" id="radioInline1">
                  <label class="form-check-label" for="radioInline1">
                    Inactive
                  </label>
                </div>
              </div>
            </div>

            <h5>Credit</h5>
            <div class="col-md-6">
              <label for="CreditLimit" class="form-label">Credit Limit</label>
              <input type="number" class="form-control" placeholder="Credit Limit" id="CreditLimit">
            </div>
            <div class="col-6">
              <label for="inputAddress" class="form-label">New Credit Limit</label>
              <input type="number" class="form-control" id="inputAddress" placeholder="New Credit Limit">
              <span class="d-inline-block v-m">
                &gt;=0.00
                <br> &lt;= 0.00
              </span>
            </div>

            <h5 class="mt-5">Notes</h5>
            <div class="col-12 mt-2">
              <textarea class="form-control" id="Notes" rows="3"></textarea>
            </div>

            <h5 class="mt-5">Master Password</h5>
            <div class="col-md-12">
              <input type="password" class="form-control" id="MasterPassword" placeholder="Master Password">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" data-bs-dismiss="modal" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
              Close
            </button>
            <a href="#"><button type="button" class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">
                Save
              </button></a>
          </div>
        </div>
      </div>
    </div>
  </div>


  @include('layouts.footer')
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
                  <div class="d-inline-flex align-items-center">
                    <h4 class=" mb-0">Bet Limit</h4>
                  </div>

                  <div class="btn_Download d-inline-flex text-nowrap">
                    <div class="input-group">
                      <input class="form-control" type="text" placeholder="Search Bet Limit...">
                      <button class="btn btn-light btn-icon" type="button" id="button-search-addon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                          <circle cx="11" cy="11" r="8"></circle>
                          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg></button>
                    </div>
                  </div>
                </div>
                <div class="Agent_-Listings">
                  <div class="table-responsive mt-4">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="">User Name</th>
                          <th class="">Event Name</th>
                          <th class="">Nation</th>
                          <th class="">Sport Bet</th>
                          <th class="">Casino Bet</th>
                          <th class="">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                    @include('agent.bet-limit-search')
                      </tbody>
                    </table>

                    @php $data=$admin; @endphp
                    @include('layouts.allpagination')
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="TransferStatusexampleModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-13" id="exampleModalLabel">Are you sure you want to pending lock 34150?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="modal-footer">
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" data-bs-dismiss="modal" class="btn green  btn-icon-text mb-2 mb-md-0 mx-2">
              Cancel
            </button>

            <a href="#"><button type="button" class="btn btn-primary New-Agent-save btn-icon-text mb-2 mb-md-0">
                Save
              </button></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="TransferStatusexampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-13" id="exampleModalLabel">Are you sure you want to lock 34150?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="modal-footer">
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" data-bs-dismiss="modal" class="btn green  btn-icon-text mb-2 mb-md-0 mx-2">
              Cancel
            </button>

            <a href="#"><button type="button" class="btn btn-primary New-Agent-save btn-icon-text mb-2 mb-md-0">
                Save
              </button></a>
          </div>
        </div>
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
            <div class="Information_user-panel">
              <div class="user-panel-left"> <i data-feather="user" class="userMember"></i>
                <div class="user-panel-info">
                  <div class="text-level">Member</div>
                  <div>341490000</div>
                </div>
              </div>
            </div>

            <h5 class="mb-4">Login Name:- <span class="user-name_demoag5">smdemo1</span></h5>
            <div class="row">
              <div class="col-md-8">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
              </div>
              <div class="col-md-4">
                <div class="btn_Download">
                  <label for="password" class="form-label" style="display: block;width: 100%;margin-bottom: 30px;"></label>
                  <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                    Generate password
                  </button>
                </div>
              </div>
            </div>
            <h5 class="mt-4">Status</h5>
            <div class="col-12">
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
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="radioInline" id="radioInline1">
                  <label class="form-check-label" for="radioInline1">
                    Suspended
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="radioInline" id="radioInline1">
                  <label class="form-check-label" for="radioInline1">
                    Close
                  </label>
                </div>
              </div>
            </div>
            <hr />
            <h5>Credit</h5>
            <div class="col-md-6">
              <label for="CreditLimit" class="form-label">Credit Limit</label>
              <input type="number" class="form-control" placeholder="Credit Limit" id="CreditLimit">
              <span class="d-inline-block v-m">
                &gt;=0.00
                <br> &lt;= 1995000
              </span>
            </div>
            <div class="col-6">
              <label for="inputAddress" class="form-label">Payment Threshold</label>
              <input type="number" class="form-control" id="inputAddress" placeholder="New Credit Limit">
            </div>
            <div class="col-6">
              <label for="inputAddress" class="form-label">Member Max Credit</label>
              <input type="number" class="form-control" id="inputAddress" placeholder="New Credit Limit">
              <span class="d-inline-block v-m">
                &gt;=0.00
                <br> &lt;= 1000000
              </span>
            </div>
            <hr class="mt-5" />
            <div class="BetSettings mb-2">
              <h5>Bet Settings</h5>
              <div class="form-check form-check-inline mt-3">
                <input type="radio" class="form-check-input" name="radioInline" id="radioInline">
                <label class="form-check-label" for="radioInline">
                  Same for All Sports
                </label>
              </div>
              <table class="table mb-5">
                <thead style="border: #333d79;">
                  <tr>
                    <th scope="col" class="wid-30"></th>
                    <th scope="col">Min Bet</th>
                    <th scope="col">Max Bet</th>
                    <th scope="col">Max Market</th>
                  </tr>
                </thead>
                <tbody class="vertical-align-baseline">
                  <tr>
                    <td class="font-w-600">Cricket</td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                  </tr>
                  <tr>
                    <td class="font-w-600">Fancy Markets</td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                  </tr>
                  <tr>
                    <td class="font-w-600">Exch Runs</td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                  </tr>
                  <tr>
                    <td class="font-w-600">Football</td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                  </tr>
                  <tr>
                    <td class="font-w-600">Tennis</td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                  </tr>
                  <tr>
                    <td class="font-w-600">Horse Racing</td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                  </tr>
                  <tr>
                    <td class="font-w-600">Greyhound Racing</td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                  </tr>
                  <tr>
                    <td class="font-w-600">Other</td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                  </tr>
                </tbody>
              </table>
              <hr class="mb-5" />

              <h5 class="mt-3">Position Talking</h5>
              <div class="form-check form-check-inline mt-3">
                <input type="radio" class="form-check-input" name="radioInline" id="radioInline">
                <label class="form-check-label" for="radioInline">
                  Same for All Sports
                </label>
              </div>
              <table class="table mt-2">
                <thead style="border: #333d79;">
                  <tr>
                    <th scope="col" class="wid-30">Sports</th>
                    <th scope="col">Agent PT(%)</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="vertical-align-baseline">
                  <tr>
                    <td class="font-w-600">Cricket</td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td>>= 0 <= 0</td>
                  </tr>
                  <tr>
                    <td class="font-w-600">Football</td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td>>= 0 <= 0</td>
                  </tr>
                  <tr>
                    <td class="font-w-600">Tennis</td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td>>= 0 <= 0</td>
                  </tr>
                  <tr>
                    <td class="font-w-600">Horse Racing</td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td>>= 0 <= 0</td>
                  </tr>
                  <tr>
                    <td class="font-w-600">Greyhound Racing</td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td>>= 0 <= 0</td>
                  </tr>
                  <tr>
                    <td class="font-w-600">Casino</td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td>>= 0 <= 0</td>
                  </tr>
                  <tr>
                    <td class="font-w-600">Other</td>
                    <td><input type="number" class="form-control" id="inputEmail3"></td>
                    <td>>= 0 <= 0</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr>
            <h5 class="mt-3">Position Talking</h5>
            <div class="col-12 mt-2">
              <textarea class="form-control" id="Notes" rows="3"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" data-bs-dismiss="modal" class="btn green  btn-icon-text mb-2 mb-md-0 mx-2">
              Cancel
            </button>

            <a href="#"><button type="button" class="btn btn-primary New-Agent-save btn-icon-text mb-2 mb-md-0">
                Save
              </button></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    hr {
      color: white;
      opacity: 0.5;
    }
  </style>

  @include('layouts.footer')
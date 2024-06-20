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
                    <h4 class=" mb-0">Super Master Listing</h4>
                    <div class="d-inline-flex mx-4">
                      <div class="input-group mx-2">
                        <input class="form-control event-search" type="text" placeholder="Agency/Member Name">
                      </div>
                      <div class="input-group">
                        <input class="form-control event-search" type="text" placeholder="Login Name">
                      </div>
                      <div class="input-group mx-2">
                        <select class="form-select" id="exampleFormControlSelect1">
                          <option selected="" disabled="">Select Level</option>
                          <option _ngcontent-rjl-c23="" value="">Status</option>
                          <option _ngcontent-rjl-c23="" value="1">Active</option>
                          <option _ngcontent-rjl-c23="" value="2">Inactive</option>
                          <option _ngcontent-rjl-c23="" value="3">Suspended</option>
                          <option _ngcontent-rjl-c23="" value="4">Closed</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="btn_Download d-inline-flex text-nowrap">
                    <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                      Download CSV
                    </button>
                  </div>
                </div>
                <div class="Agent_-Listing height30vh">
                  <p class="DownlineListing-bg p-2 text-info"><em class="">Downline Listing</em> > <span class="text-white">smdemo1</span></p>

                  <div class="table-responsive mt-4">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="">Login Name</th>
                          <th class="">ID</th>
                          <th class="">Downline</th>
                          <th class="">Betting Status</th>
                          <th class="">Transfer Status</th>
                          <th class="">Status</th>
                          <th class="">Details</th>
                          <th class="">Net Exposure</th>
                          <th class="">Take</th>
                          <th class="">Give</th>
                          <th class="">Credit Limit</th>
                          <th class="">Available Balance</th>
                          <th class="">PT (%) C/F/T/H/G/X/O</th>
                          <th class="">Created</th>
                          <th class="">Last Login</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td colspan="" class=""><a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="eye-view">mdemo2</a></td>
                          <td colspan="" class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">341500000</td>
                          <td colspan="" class="fix-images"><a href="{{route('agent-listing2')}}" class="font-13"><img src="{{asset('admin/Super-Admin/assets/icons/sitemap.png')}}" class="img-fluid wid-12"></a></td>
                          <td colspan="" class="relative"><button data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle no-border bg-none"><img src="{{asset('admin/Super-Admin/assets/icons/unlock.png')}}" class="wid-12"></button></a>
                            <ul class="dropdown-menu admin-dropdown-menu">
                              <li data-bs-toggle="modal" data-bs-target="#TransferStatusexampleModals"><a href="javascript:void(0);" class="dropdown-item icon-yellow"><img src="{{asset('admin/Admin/Super-Admin/assets/icons/unlock.png')}}"></a></li>
                              <li data-bs-toggle="modal" data-bs-target="#TransferStatusexampleModal"><a href="javascript:void(0);" class="dropdown-item icon-red"><img src="{{asset('admin/Super-Admin/assets/icons/unlock.png')}}"></a></li>
                            </ul>
                          </td>
                          <td colspan="" class=""><a href="" data-bs-toggle="modal" data-bs-target="#TransferStatusexampleModal" class="font-13"><img src="{{asset('admin/Super-Admin/assets/icons/unlock.png')}}" class="img-fluid wid-12"></a></td>
                          <td colspan="" class="">Active </td>
                          <td colspan="" class=""><a href="{{route('smdemo1-agent-listing-demoag5')}}" class="font-13 eye-view"><i data-feather="eye"></i></a></td>
                          <td colspan="" class="red">0.00</td>
                          <td colspan="" class="red"></td>
                          <td colspan="" class="red">400</td>
                          <td colspan="" class="">3000000</td>
                          <td colspan="" class="">1000000</td>
                          <td colspan="" class="">0/0/0/0/0/0/0</td>
                          <td colspan="" class="">2023-11-23 17:48:09 </td>
                          <td colspan="" class="">2023-12-10 16:48:17</td>
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
    <div class="modal-dialog">
      <div class="modal-content perfect-scrollbar-example">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Information</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3">
            <div class="table-responsives no-bordered">
              <table class="table no-bordered">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Login Name</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>341500000</th>
                    <td>mdemo2</td>
                    <td>Active</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr>
            <h5 class="mt-3">Credit</h5>
            <div class="table-responsives no-bordered">
              <table class="table no-bordered">
                <thead>
                  <tr>
                    <th>Credit Limit</th>
                    <th>Payment Threshold</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>1000000</th>
                    <td>---</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr>
            <h5 class="mt-3">Bet Settings</h5>
            <div class="table-responsives no-bordered">
              <table class="table no-bordered">
                <thead>
                  <tr class="text-center">
                    <th></th>
                    <th>Min Bet</th>
                    <th>Max Bet</th>
                    <th>Max Market</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center">
                    <th class="left">Football</th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                  <tr class="text-center">
                    <th class="left">Cricket</th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                  <tr class="text-center">
                    <th class="left">Tennis</th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                  <tr class="text-center">
                    <th class="left">Horse Racing</th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                  <tr class="text-center">
                    <th class="left">Greyhound Racing</th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                  <tr class="text-center">
                    <th class="left">Fancy Markets</th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                  <tr class="text-center">
                    <th class="left">Exch Runs</th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                  <tr class="text-center">
                    <th class="left">Casino</th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                  <tr class="text-center">
                    <th class="left">Other</th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr>
            <h5 class="mt-3">Bet Settings</h5>
            <div class="table-responsives no-bordered">
              <table class="table no-bordered">
                <thead>
                  <tr class="text-center">
                    <th class="left">Sports</th>
                    <th>Agent Position (%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center">
                    <th class="left">Football</th>
                    <td>0</td>
                  </tr>
                  <tr class="text-center">
                    <th class="left">Cricket</th>
                    <td>0</td>
                  </tr>
                  <tr class="text-center">
                    <th class="left">Tennis</th>
                    <td>0</td>
                  </tr>
                  <tr class="text-center">
                    <th class="left">Horse Racing</th>
                    <td>0</td>
                  </tr>
                  <tr class="text-center">
                    <th class="left">Greyhound Racing</th>
                    <td>0</td>
                  </tr>
                  <tr class="text-center">
                    <th class="left">Casino</th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                  <tr class="text-center">
                    <th class="left">Other</th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" data-bs-dismiss="modal" class="btn green  btn-icon-text mb-2 mb-md-0 mx-2">
              Cancel
            </button>
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
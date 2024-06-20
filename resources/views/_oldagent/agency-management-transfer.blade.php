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
                <div id="emptymember"></div>
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-1 pb-2 border-bottom">
                  <div class="d-inline-flex align-items-center">
                    <h4 class=" mb-0">Transfer</h4>
                    <div class="d-inline-flex mx-4">
                      <div class="serch-filter">
                        <div class="input-group">
                          <label class="Search-By_User Name">Search by Login Name</label>
                          <input class="form-control event-search" name="login_name" onkeyup="searchdetails(this.value,'agency-management','searchresult')" type="text" placeholder="Enter Atleast 3 character">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="btn_Download d-inline-flex text-nowrap">
                    <button type="button" onclick="checkselectedmember('staticBackdrop');" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                      Bulk Transfer
                    </button>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-baseline">
                  <!--<p class="mt-2 font-14"><em>Available to take: 995000</em></p>-->
                  <!-- <p class="p-2"><em>Agent Max PT: 0/0/0/0/0/0/0 %</em></p> -->
                </div>

                <div class="Agent_-Listing height30vh">
                  <div class="table-responsive mt-3">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="">
                            <div class="form-checks">
                              <input type="checkbox" class="form-check-input" id="selectAll">
                            </div>
                          </th>
                          <th class="">Login Name</th>
                          <th class=""> ID</th>
                          <th class="">Take</th>
                          <th class="">Give</th>
                          <th class="">Give Available</th>
                          <th class="">Payment Threshold</th>
                          <th class="">Credit Limit</th>
                          <th class="">Available Balance</th>
                          <th class="">Transfer</th>
                        </tr>
                      </thead>
                      <tbody id="searchresult">
                        @include('agent.agency-management-transfer-search')
                      </tbody>
                    </table>

                
                  </div>
                </div>
                @include('layouts.allpagination')

              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>

  <!-- Modal -->

  <div class="modal fade" id="Transferforsmdemo1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Transferforsmdemo1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content perfect-scrollbar-example">
        <div class="modal-header">
          <h1 class="fs-5 text-white" id="displayname">Transfer for smdemo1</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('transfer-amount')}}" method="post" class="row g-3">

            @csrf

            <input type="hidden" value="" class="form-control" name="id" id="id">

            <div class="mb-0">
              <label for="TransferAmount" class="form-label">Transfer Amount</label>
              <input type="number" name="amount" value="" class="form-control" id="TransferAmount" placeholder="Transfer Amount" require="required">
            </div>
            <div class="mb-3 TransferAmount">
              <textarea class="form-control" name="note" id="exampleFormControlTextarea1" placeholder="Agent Notes" rows="3"></textarea>
            </div>

            <!--<div class="mb-0">-->
            <!--  <label for="TransferAmount" class="form-label">{{QueryHelper::role_name(Auth::guard('agent')->user()->role_id)}} Password</label>-->
            <!--  <input type="text" name="agent_password" class="form-control" id="agent_password" placeholder="{{QueryHelper::role_name(Auth::guard('agent')->user()->role_id)}} Password" required="required">-->
            <!--</div>-->

            <div class="modal-footer">
              <div class="d-flex align-items-center justify-content-between w-100">
                <button type="button" data-bs-dismiss="modal" class="btn red bg-red btn-icon-text mb-2 mb-md-0 mx-2">
                  Cancel
                </button>
                <a href="#"><button type="submit" class="btn btn-primary New-Agent-save btn-icon-text mb-2 mb-md-0">
                    Transfer
                  </button></a>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Information Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content perfect-scrollbar-example">
        <div class="modal-header">
          <h1 class=" fs-5" id="staticBackdropLabel">Bulk transfer</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('bulk-tranfer-amount')}}" method="post" class="row g-3">
          @csrf

          <div class="modal-body">

            <input type="hidden" value="" id="all_ids" name="all_ids">

            <div class="table-responsives no-bordered">
              <table class="table no-bordered">
                <thead>
                  <tr>
                    <th>Login name</th>
                    <th style="padding-left:18px !important;">Transfer amount</th>
                  </tr>
                </thead>
                <tbody class="extra_pt_items" id="bulk_transfer_id">
                </tbody>
              </table>
            </div>
            <div class="border" style="border: 1px solid white !important;margin: 20px 0px;"></div>
            <div class="d-flex justify-content-between align-items-baseline mt-0" id="total_transfer">
              <h5>Total</h5>
              <h5>0</h5>
            </div>
            <div class="mb-3 TransferAmount">
              <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Agent Notes" name="note" rows="3"></textarea>
            </div>

            <div class="mb-0">
              <label for="TransferAmount" class="form-label">{{QueryHelper::role_name(Auth::guard('agent')->user()->role_id)}} Password</label>
              <input type="text" name="agent_password" class="form-control" id="agent_password" placeholder="{{QueryHelper::role_name(Auth::guard('agent')->user()->role_id)}} Password" required="required">
            </div>

          </div>

          <div class="modal-footer">
            <div class="d-flex align-items-center justify-content-between w-100">
              <button type="button" data-bs-dismiss="modal" class="btn red bg-red btn-icon-text mb-2 mb-md-0 mx-2">
                Cancel
              </button>
              <a href="#"><button type="submit" class="btn btn-primary New-Agent-save btn-icon-text mb-2 mb-md-0">
                  Transfer
                </button></a>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
  <script>
    function sendids(id, name) {
      document.getElementById("displayname").innerHTML = 'Transfer for ' + name;
      document.getElementById("id").value = id;
    }

    $(document).ready(function() {
      // When the "selectAll" checkbox is changed
      $("#selectAll").change(function() {
        // Get the checked status of "selectAll"
        var isChecked = $(this).prop("checked");

        // Set the same checked status to all checkboxes with class "form-check-input"
        $(".form-check-input").prop("checked", isChecked);
      });
    });
  </script>
  <style>
    hr {
      color: white;
      opacity: 0.5;
    }
  </style>

  @include('layouts.footer')
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
                    <h4 class=" mb-0">Position Taking Listing</h4>
                    <div class="d-inline-flex mx-4">
                      <div class="serch-filter">
                        <div class="input-group">
                          <label class="Search-By_User Name">Search by Login Name</label>
                          <input class="form-control event-search" name="login_name" onkeyup="searchdetails(this.value,'position','searchresult')" type="text" placeholder="Enter Atleast 3 character">
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <div class="btn_Download d-inline-flex text-nowrap">
                  
                    <button type="button" onclick="checkselectedmember('staticBackdrop')" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                      Edite PT
                    </button>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-baseline">
                  <p class="p-2"><em>Downline Listing</em></p>
                  <p class="p-2"><em>Agent Max PT: 0/0/0/0/0/0/0 %</em></p>
                </div>

                <div class="Agent_-Listing height30vh">


                  <div class="table-responsive mt-3">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="">
                            <div class="form-checks">
                              <input type="checkbox"  class="position form-check-input" id="selectAll">
                            </div>
                          </th>
                          <th class="">Login Name</th>
                          <th class=""> ID</th>
                          <th class="">Cricket (0%)</th>
                          <th class="">Football (0%)</th>
                          <th class="">Tennis (0%)</th>
                          <th class="">Horse Racing (0%)</th>
                          <th class="">Greyhound Racing (0%)</th>
                          <th class="">XG (0%)</th>
                          <th class="">Other (0%)</th>
                        </tr>
                      </thead>
                      <tbody id="searchresult">                    
                      @include('agent.position-taking-listing-search')
                      </tbody>
                    </table>

                  
                  </div>
                </div>
               
              </div>
              
            </div>
            
          </div>
        
        </div>

        @php $data=$position_taking; @endphp
        @include('layouts.allpagination')

      </div>
    </div>
  </div>


  <!-- Information Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content perfect-scrollbar-example">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="total_member">0 Member selected</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{route('position-update')}}" class="row g-3">
          @csrf
        <div class="modal-body">         
          <input type="hidden" value="" id="all_ids" name="all_ids">

            <div class="extra_pt_row">
              <div class="extra_pt_item">
                <div class="titile_txt"><img src="{{asset('admin/Super-Admin/assets/icons/cricket-white.png')}}"> (10%) </div>
                <div class="extra_pt_input"><input name="cricket" formcontrolname="cricket_partnership" type="text" class="form-control ng-untouched ng-pristine ng-valid"></div>
              </div>
              <div class="extra_pt_item">
                <div class="titile_txt"><img src="{{asset('admin/Super-Admin/assets/icons/football-white.png')}}"> (10%) </div>
                <div class="extra_pt_input"><input name="football"  formcontrolname="soccer_partnership" type="text" class="form-control ng-pristine ng-valid ng-touched"></div>
              </div>
              <div class="extra_pt_item">
                <div class="titile_txt"><img src="{{asset('admin/Super-Admin/assets/icons/tennis-white.png')}}"> (10%) </div>
                <div class="extra_pt_input"><input name="tennis"  formcontrolname="tennis_partnership" type="text" class="form-control ng-untouched ng-pristine ng-valid"></div>
              </div>
              <div class="extra_pt_item">
                <div class="titile_txt"><img src="{{asset('admin/Super-Admin/assets/icons/horse-racing-white.png')}}"> (10%) </div>
                <div class="extra_pt_input"><input name="horse_racing"  formcontrolname="horse_racing_partnership" type="text" class="form-control ng-untouched ng-pristine ng-valid"></div>
              </div>
              <div class="extra_pt_item">
                <div class="titile_txt"><img src="{{asset('admin/Super-Admin/assets/icons/greyhound-racing-white.png')}}"> (10%) </div>
                <div class="extra_pt_input"><input name="greyhound_racing"  formcontrolname="greyhorse_racing_partnership" type="text" class="form-control ng-untouched ng-pristine ng-valid"></div>
              </div>
              <div class="extra_pt_item">
                <div class="titile_txt"><img  src="{{asset('admin/Super-Admin/assets/icons/sports-white.png')}}"> (10%) </div>
                <div class="extra_pt_input"><input name="casino"  formcontrolname="casino_partnership" type="text" class="form-control ng-untouched ng-pristine ng-valid"></div>
              </div>
              <div class="extra_pt_item">
                <div class="titile_txt"><b>Other</b> (10%) </div>
                <div class="extra_pt_input"><input name="other" formcontrolname="other_partnership" type="text" class="form-control ng-untouched ng-pristine ng-valid"></div>
              </div>
              
           

            </div>

            <div class="mb-0">
              <label for="TransferAmount" class="form-label">{{QueryHelper::role_name(Auth::guard('agent')->user()->role_id)}} Password</label>
              <input type="text" name="agent_password" class="form-control" id="agent_password" placeholder="{{QueryHelper::role_name(Auth::guard('agent')->user()->role_id)}} Password" required="required">
            </div>



        </div>
        <div class="modal-footer">
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" data-bs-dismiss="modal" class="btn green  btn-icon-text mb-2 mb-md-0 mx-2">
              Cancel
            </button>

            <a href="#"><button type="submit" class="btn btn-primary New-Agent-save btn-icon-text mb-2 mb-md-0">
                Save
              </button></a>
          </div>
        </div>

        </form>
      </div>
    </div>
  </div>
  <script>
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
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
        <div class="row">
          <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                  <h4 class=" mb-0">Casino Result</h4>
                </div>

                <div class="d-flex justify-content-between align-items-baseline mobile_port_change-new">
                  <form class="forms-sample d-flex">
                    <div class="mb-3 mobile_port_change-new">
                      <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0 casino-image" id="dashboardDate">
                        <label class="w-100" for="start-date" class="form-label">From</label>
                        <input type="text" class="form-select flatpickr-input" placeholder="Select date" data-input="" readonly="readonly">
                      </div>
                    </div>
                    <div class="mb-3 mobile_port_change-new">
                      <label for="start-date" class="form-label mb-0">Account Type</label>
                      <select class="form-select" id="exampleFormControlSelect1">
                        <option selected="" disabled="">Select Level</option>
                        <option value="teen">One Day Teenpatti</option>
                        <option value="teen9">Test Teenpatti</option>
                        <option value="teen20">20-20 Teenpatti</option>
                        <option value="poker">Live Poker One Day</option>
                        <option value="poker20">Live Poker 20-20</option>
                        <option value="poker9">6 Player Poker</option>
                        <option value="ab20">Andar Bahar Casino</option>
                        <option value="abj">Andar Bahar 2 Casino</option>
                        <option value="worli">Worli Matka</option>
                        <option value="3cardj">3 Cards Judgement</option>
                        <option value="card32">32 Cards - A</option>
                        <option value="teen8">Open TeenPatti</option>
                        <option value="worli2">Instant Worli</option>
                        <option value="lucky7">Lucky 7 - A</option>
                        <option value="lucky7eu">Lucky 7 - B</option>
                        <option value="dt20">20-20 Dragon Tiger</option>
                        <option value="dt202">20-20 Dragon Tiger 2</option>
                        <option value="aaa">Amar Akbar Anthony</option>
                        <option value="btable">Bollywood Casino</option>
                        <option value="dt6"> 1 Day Dragon Tiger</option>
                        <option value="card32eu"> 32 Cards - B</option>
                        <option value="war">Casino War</option>
                        <option value="dtl20">20-20 Dragon Tiger Lion</option>
                        <option value="cmeter">Casino Meter</option>
                        <option value="baccarat">Baccarat</option>
                        <option value="baccarat2">Baccarat2</option>
                        <option value="race20">Race 20-20</option>
                        <option value="queen">Queen</option>
                      </select>
                    </div>
                    <div class="align-items-center mt-3">
                      <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                        Apply
                      </button>
                      <button type="button" class="btn btn-danger btn-icon-text mb-2 mb-md-0" style="border: none;border-radius: 0px;font-size: 13px;">
                        Cancel
                      </button>
                    </div>

                  </form>
                </div>

                <div class="Agent_-Listing height90vh">
                  <div class="serch-bx-and-dropdown mt-3 mb-2">
                    <div class="row">
                      <div class="col-sm-12 col-md-9">
                        <div class="dataTables_length" id="dataTableExample_length">
                          <label class="d-flex justify-content-between align-items-baseline fit-content"> Show <select name="dataTableExample_length" aria-controls="dataTableExample" class="form-select form-select-sm">
                              <option value="10">10</option>
                              <option value="30">30</option>
                              <option value="50">50</option>
                              <option value="-1">All</option>
                            </select> entries </label>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-3">
                        <div class="input-group">
                          <input class="form-control" type="text" placeholder="Search mail...">
                          <button class="btn btn-light btn-icon" type="button" id="button-search-addon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                              <circle cx="11" cy="11" r="8"></circle>
                              <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-striped displayunblock">
                      <thead>
                        <tr>
                          <th class="">Round Id</th>
                          <th class="">Winner</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="underline" data-bs-toggle="modal" data-bs-target="#CasinoResult">230412121333</td>
                          <td>Player A - Teen</td>
                        </tr>
                        <tr>
                          <td class="underline" data-bs-toggle="modal" data-bs-target="#CasinoResult">230412120340 </td>
                          <td>Player B - Teen</td>
                        </tr>
                        <tr>
                          <td class="underline" data-bs-toggle="modal" data-bs-target="#CasinoResult">230412113222 </td>
                          <td>Player A - Teen</td>
                        </tr>
                        <tr>
                          <td class="underline" data-bs-toggle="modal" data-bs-target="#CasinoResult">230412121333</td>
                          <td>Player B - Teen</td>
                        </tr>
                        <tr>
                          <td class="underline" data-bs-toggle="modal" data-bs-target="#CasinoResult">230412120340 </td>
                          <td>Player A - Teen</td>
                        </tr>
                        <tr>
                          <td class="underline" data-bs-toggle="modal" data-bs-target="#CasinoResult">230412113222 </td>
                          <td>Player B - Teen</td>
                        </tr>
                        <tr>
                          <td class="underline" data-bs-toggle="modal" data-bs-target="#CasinoResult">230412121333</td>
                          <td>Player A - Teen</td>
                        </tr>
                        <tr>
                          <td class="underline" data-bs-toggle="modal" data-bs-target="#CasinoResult">230412120340 </td>
                          <td>Player B - Teen</td>
                        </tr>
                        <tr>
                          <td class="underline" data-bs-toggle="modal" data-bs-target="#CasinoResult">230412113222 </td>
                          <td>Player A - Teen</td>
                        </tr>
                        <tr>
                          <td class="underline" data-bs-toggle="modal" data-bs-target="#CasinoResult">230412113222 </td>
                          <td>Player B - Teen</td>
                        </tr>

                      </tbody>
                    </table>
                    <div class="d-flex mt-3">
                      <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="dataTableExample_info" role="status" aria-live="polite">Showing 1 to 10 of 22 entries</div>
                      </div>
                      <div class="col-sm-12 col-md-7 ">
                        <div class="dataTables_paginate paging_simple_numbers right" id="dataTableExample_paginate">
                          <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="dataTableExample_previous"><a href="#" aria-controls="dataTableExample" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="dataTableExample" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTableExample" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTableExample" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                            <li class="paginate_button page-item next" id="dataTableExample_next"><a href="#" aria-controls="dataTableExample" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-bottom mt-3"></div>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>


  <!-- Casino Result Report Modal -->
  <div class="modal fade" id="CasinoResult" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="CasinoResultLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="CasinoResultLabel">Casino Result</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="OneDay-Teenpatti_Result">
            <p class="text-center font-16 mb-3">OneDay Teenpatti Result</p>
            <div class="PlayerA-id">
              <p><span class="float-right round-id font-13"></span></p>
            </div>
            <div class="PlayerB-id">
              <p><span class="float-right round-id font-13"><b>Round ID:</b>
                  231212104100
                </span></p>
            </div>
            <div class="TeenpattiResult d-flex justify-content-between align-items-baseline w-100">
              <div class="PlayerA">
                <h4>Player A</h4>
                <img src="{{asset('admin/Super-Admin/assets/cards/4HH.png')}}">
                <img src="{{asset('admin/Super-Admin/assets/cards/KCC.png')}}">
                <img src="{{asset('admin/Super-Admin/assets/cards/5HH.png')}}">
              </div>
              <div class="center-border"></div>
              <div class="PlayerB">
                <h4>Player B</h4>
                <img src="{{asset('admin/Super-Admin/assets/cards/ASS.png')}}">
                <img src="{{asset('admin/Super-Admin/assets/cards/KDD.png')}}">
                <img src="{{asset('admin/Super-Admin/assets/cards/8CC.png')}}">
                <div class="col-md-12 text-center"><label class="winner-label bg-success  mt-2"><i data-feather="award"></i> Winner</label></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  @include('layouts.footer')
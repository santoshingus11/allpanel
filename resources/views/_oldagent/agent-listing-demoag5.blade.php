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
        <div class="row">
          <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h4 class="mb-0 font-14"><em><span class="text-info">Downline Listing ></span> demoag5</em></h4>
                  <div class="d-flex align-items-center flex-wrap text-nowrap">
                    <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0">
                      Download CSV
                    </button>
                  </div>
                </div>
                <nav class="Account-Statement-nav mb-3">
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Activity</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" tabindex="-1">Balance</button>
                    <button class="nav-link" id="Betlist-tab" data-bs-toggle="tab" data-bs-target="#Betlist" type="button" role="tab" aria-controls="Betlist" aria-selected="false" tabindex="-1">Betlist</button>
                    <button class="nav-link" id="Betting-tab" data-bs-toggle="tab" data-bs-target="#Betting" type="button" role="tab" aria-controls="Betting" aria-selected="false" tabindex="-1">Betting P&L</button>
                    <button class="nav-link" id="Statement-tab" data-bs-toggle="tab" data-bs-target="#Statement" type="button" role="tab" aria-controls="Statement" aria-selected="false" tabindex="-1">Statement</button>
                    <button class="nav-link" id="TransferStatement-tab" data-bs-toggle="tab" data-bs-target="#TransferStatement" type="button" role="tab" aria-controls="TransferStatement" aria-selected="false" tabindex="-1">Transfer Statement</button>
                    <button class="nav-link" id="NetExposure-tab" data-bs-toggle="tab" data-bs-target="#NetExposure" type="button" role="tab" aria-controls="NetExposure" aria-selected="false" tabindex="-1">Net Exposure</button>
                    <button class="nav-link" id="ClientsAccount-tab" data-bs-toggle="tab" data-bs-target="#ClientsAccount" type="button" role="tab" aria-controls="ClientsAccount" aria-selected="false" tabindex="-1">Clients Account Statement</button>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                    <div class="activity-report">
                      <div class="main-panel d-flex justify-content-start align-items-baseline">
                        <div class="left-panel">
                          <table class="table m-t-30 ">
                            <thead>
                              <tr>
                                <th class="text-center"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="text-right">Win</td>
                              </tr>
                              <tr>
                                <td class="text-right">P&amp;L</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="mid-panel w-100">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th class="text-center">Today</th>
                                <th class="text-center">3 Days</th>
                                <th class="text-center">7 Days</th>
                                <th class="text-center">30 Days</th>
                                <th class="text-center">Lifetime</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="text-center"><span class="positive">0.00</span></td>
                                <td class="text-center"><span class="positive">0.00</span></td>
                                <td class="text-center"><span class="positive">0.00</span></td>
                                <td class="text-center"><span class="positive">0.00</span></td>
                                <td class="text-center"><span class="positive">0.00</span></td>
                              </tr>
                              <tr>
                                <td class="text-center"><span class="positive">
                                    0.00
                                  </span></td>
                                <td class="text-center"><span class="positive">
                                    0.00
                                  </span></td>
                                <td class="text-center"><span class="positive">
                                    0.00
                                  </span></td>
                                <td class="text-center"><span class="positive">
                                    0.00
                                  </span></td>
                                <td class="text-center"><span class="positive">
                                    0.00
                                  </span></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    <div class="Pand-l-Statement">
                      <div class="">
                        <table class="w-auto table table-striped table-balance displayunblock">
                          <tbody>
                            <tr>
                              <th>Net Exposure</th>
                              <td class=" text-right negative red">0.00</td>
                            </tr>
                            <tr>
                              <th>Balance Down</th>
                              <td class=" text-right  negative red">0.00</td>
                            </tr>
                            <tr>
                              <th>Balance Up</th>
                              <td class=" text-right negative red">0.00</td>
                            </tr>
                            <tr>
                              <th>Credit Limit</th>
                              <td class="text-right negative red">0.00</td>
                            </tr>
                            <tr>
                              <th>Available Credit</th>
                              <td class="text-right ">0.00</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="Betlist" role="Betlist" aria-labelledby="Betlist-tab" tabindex="0">
                    <div class="Pand-l-Statement">
                      <div class="d-flex justify-content-between align-items-baseline">
                        <form class="forms-sample d-flex align-items-center">
                          <div class="d-flex mobile_port_change-new">
                            <div class="mb-3">
                              <label for="start-date" class="form-label">From</label>
                              <input type="text" class="form-select flatpickr-input" id="start-date" name="start-date" readonly="readonly">
                            </div>
                            <div class="mb-3 mx-2 mobile_port_change-new">
                              <label for="end-date" class="form-label">To</label>
                              <input type="text" class="form-select flatpickr-input" id="end-date" name="end-date" readonly="readonly">
                            </div>
                          </div>
                          <div class="align-items-center">
                            <label for="end-date" class="form-label w-100"></label>
                            <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                              Apply
                            </button>
                            <button type="button" class="btn btn-danger btn-icon-text mb-2 mb-md-0" style="border: none;border-radius: 0px;font-size: 13px;">
                              Cancel
                            </button>
                          </div>

                        </form>
                      </div>
                      <div class="tab-start-date-show-and-hide my-2">
                        <ul role="tablist" class="nav nav-tabs">
                          <li role="presentation" class="nav-item"><a class="nav-link active" id="currentTab">Current</a></li>
                          <li role="presentation" class="nav-item"><a class="nav-link" id="pastTab">Past</a></li>
                        </ul>
                      </div>

                      <div class="Agent_-Listing height30vh">
                        <div class="mb-4 mt-3">
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="radioInlineSelected" id="radioInlineSelected" checked="">
                            <label class="form-check-label" for="radioInlineSelected">
                              Matched
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="radioInline" id="radioInline">
                            <label class="form-check-label" for="radioInline">
                              Unmatched
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="radioInline" id="radioInline1">
                            <label class="form-check-label" for="radioInline1">
                              Deleted
                            </label>
                          </div>
                        </div>
                        <div class="serch-bx-and-dropdown">
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
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th class="">Place Date</th>
                                <th class="">Description</th>
                                <th class="">User name</th>
                                <th class="">Bet Type</th>
                                <th class="">User Rate</th>
                                <th class="">Win/Loss</th>
                                <th class="">IP</th>
                                <th class="">Browser Details</th>
                                <th class="">Amount</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td colspan="9" class="text-center no-data-table-bg">no records found</td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="row mt-3">
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
                  <div class="tab-pane fade" id="Betting" role="Betting" aria-labelledby="Betting-tab" tabindex="0">
                    <div class="Pand-l-Statement">
                      <div class="card-body_agent-listing-demoag5">
                        <div class="d-flex justify-content-between align-items-baseline">
                          <form class="forms-sample d-flex">
                            <div class="d-flex mobile_port_change-new">
                              <div class="mb-3">
                                <label for="start-date" class="form-label">From</label>
                                <input type="text" class="form-select flatpickr-input" id="start-date-Betting" name="start-date" readonly="readonly">
                              </div>
                              <div class="mb-3 mx-2 mobile_port_change-new">
                                <label for="end-date" class="form-label">To</label>
                                <input type="text" class="form-select flatpickr-input" id="end-date-Betting" name="end-date" readonly="readonly">
                              </div>
                            </div>

                            <div class="align-items-center mt-4">
                              <div class="d-flex align-items-center flex-wrap text-nowrap">
                                <a href="#"><button type="button" class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">
                                    Load
                                  </button></a>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="Agent_-Listing height30vh mt-3">
                          <div class="table-responsive">
                            <table class="table table-striped displayunblock">
                              <thead>
                                <tr>
                                  <th class="">Market</th>
                                  <th class="">Start Time</th>
                                  <th class="">Settled</th>
                                  <th class="right">Net Win</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td colspan="6" class="text-center no-data-table-bg">no records found</td>
                                </tr>
                              </tbody>
                            </table>

                          </div>
                          <div class="row mt-3">
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
                          <div class="border-bottom mt-3"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="Statement" role="Statement" aria-labelledby="Statement-tab" tabindex="0">
                    <div class="Pand-l-Statement">
                      <div class="card-body_agent-listing-demoag5">
                        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                          <h4 class=" mb-0">Account Statement</h4>
                          <div class="d-flex align-items-center flex-wrap text-nowrap">
                            <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0">
                              Download CSV
                            </button>
                          </div>
                        </div>
                        <nav class="Account-Statement-nav mb-3">
                          <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="Statement4-tab" data-bs-toggle="tab" data-bs-target="#Statement4" type="button" role="tab" aria-controls="Statement4" aria-selected="true">P&amp;L Statement</button>
                            <button class="nav-link" id="CreditHistory1-tab" data-bs-toggle="tab" data-bs-target="#CreditHistory1" type="button" role="tab" aria-controls="CreditHistory" aria-selected="false" tabindex="-1">Credit History</button>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade active show" id="Statement4" role="tabpanel" aria-labelledby="Statement4-tab" tabindex="0">
                            <div class="Pand-l-Statement">
                              <div class="d-flex justify-content-between align-items-baseline">
                                <form class="forms-sample d-flex">
                                  <div class="mb-3 mobile_port_change-new">
                                    <label for="start-date" class="form-label">Balance Type</label>
                                    <select class="form-select" id="exampleFormControlSelect1">
                                      <option value="all">All</option>
                                      <option value="Upper">Upper</option>
                                      <option value="Down">Lower</option>
                                      <option value="CW">Only C/W</option>
                                      <option value="DW">Only D/W</option>
                                      <option value="W">Withdraw</option>
                                      <option value="D">Deposit</option>
                                    </select>
                                  </div>
                                  <div class="mb-3 mx-2 mobile_port_change-new">
                                    <label for="Searchbyuser" class="form-label">Search by User</label>
                                    <input class="form-control event-search inline-block" type="text" placeholder="Enter Atleast 3 character">
                                  </div>
                                  <div class="d-flex mobile_port_change-new">
                                    <div class="mb-3">
                                      <label for="start-date" class="form-label">From</label>
                                      <input type="text" class="form-select flatpickr-input" id="start-date" name="start-date" readonly="readonly">
                                    </div>
                                    <div class="mb-3 mx-2 mobile_port_change-new">
                                      <label for="end-date" class="form-label">To</label>
                                      <input type="text" class="form-select flatpickr-input" id="end-date" name="end-date" readonly="readonly">
                                    </div>
                                  </div>

                                  <div class="align-items-center mt-0">
                                    <div class="mb-3">
                                      <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2 mt-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                          <circle cx="11" cy="11" r="8"></circle>
                                          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg> Load
                                      </button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                              <div class="Agent_-Listing height30vh mt-3">
                                <div class="table-responsive">
                                  <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th class="">Date</th>
                                        <th class="">Description</th>
                                        <th class="">Ip</th>
                                        <th class="">From To</th>
                                        <th class="">Amount</th>
                                        <th class="right">Closing</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td colspan="6" class="text-center no-data-table-bg">no records found</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <div class="row mt-3">
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
                                <div class="border-bottom mt-3"></div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="CreditHistory1" role="CreditHistory1" aria-labelledby="CreditHistory1-tab" tabindex="0">
                            <div class="Pand-l-Statement">
                              <div class="d-flex justify-content-between align-items-baseline">
                                <form class="forms-sample d-flex">
                                  <div class="mb-3 mx-2 mobile_port_change-new">
                                    <label for="Searchbyuser" class="form-label">Search by User</label>
                                    <input class="form-control event-search inline-block" type="text" placeholder="Enter Atleast 3 character">
                                  </div>
                                  <div class="d-flex mobile_port_change-new">
                                    <div class="mb-3">
                                      <label for="start-date" class="form-label">From</label>
                                      <input type="text" class="form-select" id="start-date" name="start-date" readonly="">
                                    </div>
                                    <div class="mb-3 mx-2 mobile_port_change-new">
                                      <label for="end-date" class="form-label">To</label>
                                      <input type="text" class="form-select" id="end-date" name="end-date" readonly="">
                                    </div>
                                  </div>

                                  <div class="align-items-center mt-0">
                                    <div class="mb-3">
                                      <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2 mt-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                          <circle cx="11" cy="11" r="8"></circle>
                                          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg> Load
                                      </button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                              <div class="Agent_-Listing height30vh mt-3">
                                <div class="table-responsive">
                                  <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th class="">Date</th>
                                        <th class="">User Name</th>
                                        <th class="">Master Name</th>
                                        <th class="">Remark</th>
                                        <th class="right">Stake</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td colspan="5" class="text-center no-data-table-bg">no records found</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <div class="row mt-3">
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
                                <div class="border-bottom mt-3"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="TransferStatement" role="TransferStatement" aria-labelledby="TransferStatement" tabindex="0">
                    <div class="Pand-l-Statement">
                      <div class="card-body_agent-listing-demoag5">
                        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                          <h4 class=" mb-0">Transfer Statement</h4>

                          <div class="d-flex align-items-center flex-wrap text-nowrap">
                            <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0">
                              Download CSV
                            </button>
                          </div>
                        </div>
                        <div class="Agent_-Listing height30vh">
                          <p class="text-center">There Have Been No Transfers In The Last 180 Days.</p>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="NetExposure" role="NetExposure" aria-labelledby="NetExposure" tabindex="0">
                    <div class="Pand-l-Statement">
                      <div class="card-body_agent-listing-demoag5">
                        <div class="d-flex justify-content-end align-items-baseline">
                          <div class="serch-filter">
                            <div class="input-group">
                              <div class="mx-3 font-13 f-weight600" id="counter">7</div>
                              <script>
                                // Get the counter element
                                const counterElement = document.getElementById('counter');

                                // Function to update the counter
                                function updateCounter() {
                                  let count = parseInt(counterElement.innerText);

                                  // Check if the count is greater than 1, decrement, otherwise reset to 8
                                  count = (count > 1) ? count - 1 : 8;

                                  // Update the counter element
                                  counterElement.innerText = count;

                                  // Call the function again after 1000ms (1 second)
                                  setTimeout(updateCounter, 1000);
                                }

                                // Initial call to start the counter
                                updateCounter();
                              </script>
                              <button type="button" class="btn btn-primary Refresh  btn-icon-text mb-2 mb-md-0">
                                Refresh
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="Agent_-Listing height30vh">
                          <div class="table-responsive border-bottom">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th class="w-10"></th>
                                  <th class="w-8"></th>
                                  <th class="w-8">Stake</th>
                                  <th class="w-8">1</th>
                                  <th class="w-8">x</th>
                                  <th class="w-8">2</th>
                                  <th class="w-18"></th>
                                  <th class="w-16"></th>
                                  <th class="w-8">Stake</th>
                                  <th class="w-8">P/L</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td colspan="10" class="text-center no-data-table-bg">There are no records to show </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="ClientsAccount" role="ClientsAccount" aria-labelledby="ClientsAccount" tabindex="0">
                    <div class="Pand-l-Statement">
                      <div class="card-body_agent-listing-demoag5">
                        <div class="d-flex justify-content-between align-items-baseline">
                          <form class="forms-sample d-flex">
                            <div class="d-flex mobile_port_change-new">
                              <div class="mb-3">
                                <label for="start-date" class="form-label">From</label>
                                <input type="text" class="form-select flatpickr-input" id="start-date" name="start-date" readonly="readonly">
                              </div>
                              <div class="mb-3 mx-2 mobile_port_change-new">
                                <label for="end-date" class="form-label">To</label>
                                <input type="text" class="form-select flatpickr-input" id="end-date" name="end-date" readonly="readonly">
                              </div>
                            </div>
                            <div class="mb-3 mx-2 mobile_port_change-new">
                              <label for="Searchbyuser" class="form-label">Search by user</label>
                              <input class="form-control event-search inline-block" type="text" placeholder="Enter Atleast 3 character">
                            </div>
                            <div class="align-items-center mt-0">
                              <div class="mb-3">
                                <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2 mt-4">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                  </svg> Search
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="Agent_-Listing height30vh mt-3">
                          <div class="table-responsive">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th class="">Date</th>
                                  <th class="">Description</th>
                                  <th class="">P&amp;L</th>
                                  <th class="">Credit Limit</th>
                                  <th class="right">Balance</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td colspan="5" class="text-center no-data-table-bg">no records found</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="row mt-3">
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
                          <div class="border-bottom mt-3"></div>
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
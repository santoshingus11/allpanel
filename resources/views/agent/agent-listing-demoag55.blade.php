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
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Unsettled Bets</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" tabindex="-1">Account Statement</button>
                  <button class="nav-link" id="Betlist-tab" data-bs-toggle="tab" data-bs-target="#Betlist" type="button" role="tab" aria-controls="Betlist" aria-selected="false" tabindex="-1">Bet list</button>
                     <!--  <button class="nav-link" id="Betting-tab" data-bs-toggle="tab" data-bs-target="#Betting" type="button" role="tab" aria-controls="Betting" aria-selected="false" tabindex="-1">Betting P&L</button>
                    <button class="nav-link" id="Statement-tab" data-bs-toggle="tab" data-bs-target="#Statement" type="button" role="tab" aria-controls="Statement" aria-selected="false" tabindex="-1">Statement</button>
                    <button class="nav-link" id="TransferStatement-tab" data-bs-toggle="tab" data-bs-target="#TransferStatement" type="button" role="tab" aria-controls="TransferStatement" aria-selected="false" tabindex="-1">Transfer Statement</button>
                    <button class="nav-link" id="NetExposure-tab" data-bs-toggle="tab" data-bs-target="#NetExposure" type="button" role="tab" aria-controls="NetExposure" aria-selected="false" tabindex="-1">Net Exposure</button>
                    <button class="nav-link" id="ClientsAccount-tab" data-bs-toggle="tab" data-bs-target="#ClientsAccount" type="button" role="tab" aria-controls="ClientsAccount" aria-selected="false" tabindex="-1">Clients Account Statement</button> -->
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                    <div class="activity-report">
                      <div class="row">
                        <div class="col-md-12">
                          <table id="btDataTable" class="table table-bordered btDataTable table-striped table-bordered" style="width: 100%;">
                            <thead>
                              <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Event Name</th>
                                <th class="text-center">Stake</th>
                                <th class="text-center">Profit</th>
                                <th class="text-center">Match date</th>
                              </tr>
                            </thead>
                            <tbody>
                              @if(!empty($sorted_merged_played_matches_array))
                              @foreach($sorted_merged_played_matches_array as $b)
                              <tr>
                                <td class="text-center">{{$b->id}}</td>
                                <td class="text-center">{{$b->team_name}}</td>
                                <td class="text-center">{{$b->bet_stake}}</td>
                                <td class="text-center">{{$b->bet_profit}}</td>
                                <td class="text-center">{{$b->created_at}}</td>
                              </tr><!---->
                              @endforeach
                              @endif
                            </tbody>
                         
                          </table>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    <div class="Pand-l-Statement">
                      <div class="">
                      <table id="btDataTable" class="table table-bordered btDataTable table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">date</th>
                                <th class="text-right">Debit</th>
                                <th class="text-right">Credit</th>
                                <th class="text-right">Balance</th>
                                <th class="text-center">Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bankingHistories as $b)
                            <tr>
                                <td class="text-center">{{$b->created_at}}</td>
                                @if($b->type=='W')
                                <td class="text-right red">{{$b->amount ?? 0}}</td>
                                @else
                                <td class="text-right red">0</td>
                                @endif
                                
                                @if($b->type=='D')
                                <td class=" text-right green">{{$b->amount ?? 0}}</td>
                                @else
                                <td class=" text-right green">0</td>
                                @endif
                                <td class="text-right green"> {{$b->balance ?? 0}}</td>
                                <td class="text-center">
                                    {{$b->remarks}}
                                    <!--<a href="/reports/account-statement-details/1.69329085.662a9d87b950fbe569b638d5.plain">Live Teenpatti Virtual</a>-->
                                </td><!----><!---->
                            </tr><!---->
                            @endforeach
                        </tbody><!----><!----><!---->
                    </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="Betlist" role="Betlist" aria-labelledby="Betlist-tab" tabindex="0">
                    <div class="Pand-l-Statement">
                    <div class="wrapper-inner user_screen">
            <h2 class="user-title">bet history</h2>
            <div class="border border-light">
                <div class="filter m-2">
                    <div class="form-row align-items-center">
                        <!-- <div class="col-md-3 col-lg-2 col-6"><input type="text" name="from" placeholder="Datepicker" bsdatepicker="" class="form-control ng-untouched ng-pristine ng-valid"></div>
                        <div class="col-md-3 col-lg-2 col-6"><input type="text" name="to" placeholder="Datepicker" bsdatepicker="" class="form-control ng-untouched ng-pristine ng-valid"></div> -->
                        <div class="col-md-2 col-12">
                            <select name="reportType" id="bet_select_box" class="form-control custom-select ng-untouched ng-pristine ng-valid">
                                <option value="casino">Casino</option>
                                <option value="cricket">Cricket</option>
                                <option value="football">Football</option>
                                <option value="tennis">Tennis</option>
                                <option value="horse">Horse Racing</option>
                                <option value="greyhound">Greyhound Racing</option>
                            </select></div>
                        <div class="col-md-2 col-lg-1 col-12"><button type="button" id="bet_select_btn" class="btn btn-primary btn-block">submit</button></div>
                    </div>
                </div>
                <div class="table-responsive casinoTable">
                    <table id="" class="table table-bordered btDataTable table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Bet ID</th>
                                <th class="text-center">Event Name</th>
                                <th class="text-center">Event Type</th>
                                <th class="text-center">Market Type</th>
                                <th class="text-center">Selection</th>
                                <th class="text-center">Bet Type</th>
                                <th class="text-center">Odds</th>
                                <th class="text-center">Stake</th>
                                <th class="text-center">Win/Loss</th>
                                <th class="text-center">Placed Time</th>
                                <th class="text-center">Settled Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($betRecords as $bet)
                            <tr class="back">
                                <td class="text-center">{{$bet->tradeId}}</td>
                                <td class="text-center">{{$bet->gameId}}</td>
                                <td class="text-center">Exchange Games</td>
                                <td class="text-center">MATCH_ODDS</td>
                                <td class="text-center">{{$bet->action}}</td>
                                <td class="text-center">Back</td>
                                <td class="text-center">{{$bet->bet}}</td>
                                <td class="text-center">{{$bet->bet}}</td>
                                <td class="text-center green"> {{$bet->win}}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
              <div class="table-responsive cricketTable" style="display:none;">
                    <table id="" class="table table-bordered btDataTable table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Bet ID</th>
                                <th class="text-center">Event Name</th>
                                <th class="text-center">Event Type</th>
                                
                                <th class="text-center">Win/Loss</th>
                                <th class="text-center">Placed Time</th>
                                <th class="text-center">Settled Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($cricketBets as $bet)
                            <tr class="back">
                                <td class="text-center">{{$bet->id}}</td>
                                <td class="text-center">{{$bet->team_name}}</td>
                                <td class="text-center">CRICKET</td>
                                
                                <!--@if($bet->bet_result != NULL)-->
                                <!--<td class="text-center green">{{$bet->bet_stake}}</td>-->
                                <!--@else-->
                                <!--<td class="text-center red">{{$bet->bet_stake}}</td>-->
                                <!--@endif-->
                                @if($bet->bet_result == 1)
                                <td class="text-center green">{{$bet->bet_profit}}</td>
                                @elseif($bet->bet_result == 2)
                                 <td class="text-center red"> {{$bet->bet_stake}}</td>
                                 @else
                                  <td class="text-center black"> - </td>
                                @endif
                                <td class="text-center">{{$bet->created_at}}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="table-responsive footballTable" style="display:none;">
                    <table id="" class="table table-bordered btDataTable table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                            <th class="text-center">Bet ID</th>
                                <th class="text-center">Event Name</th>
                                <th class="text-center">Event Type</th>
                                
                                <th class="text-center">Win/Loss</th>
                                <th class="text-center">Placed Time</th>
                                <th class="text-center">Settled Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($footballBets as $bet)
                            <tr class="back">
                                <td class="text-center">{{$bet->id}}</td>
                                <td class="text-center">{{$bet->team_name}}</td>
                                <td class="text-center">Football</td>
                                
                                <!--@if($bet->bet_result != NULL)-->
                                <!--<td class="text-center green">{{$bet->bet_stake}}</td>-->
                                <!--@else-->
                                <!--<td class="text-center red">{{$bet->bet_stake}}</td>-->
                                <!--@endif-->
                                @if($bet->bet_result == 1)
                                <td class="text-center green">{{$bet->bet_profit}}</td>
                                @elseif($bet->bet_result == 2)
                                 <td class="text-center red"> {{$bet->bet_stake}}</td>
                                 @else
                                  <td class="text-center black"> - </td>
                                @endif
                                <td class="text-center">{{$bet->created_at}}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                            </tr>
                           
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="table-responsive tennisTable" style="display:none;">
                    <table id="" class="table table-bordered btDataTable table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                            <th class="text-center">Bet ID</th>
                                <th class="text-center">Event Name</th>
                                <th class="text-center">Event Type</th>
                                
                                <th class="text-center">Win/Loss</th>
                                <th class="text-center">Placed Time</th>
                                <th class="text-center">Settled Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($tennisBets as $bet)
                            <tr class="back">
                                <td class="text-center">{{$bet->id}}</td>
                                <td class="text-center">{{$bet->team_name}}</td>
                                <td class="text-center">Tennis</td>
                                
                                <!--@if($bet->bet_result != NULL)-->
                                <!--<td class="text-center green">{{$bet->bet_stake}}</td>-->
                                <!--@else-->
                                <!--<td class="text-center red">{{$bet->bet_stake}}</td>-->
                                <!--@endif-->
                                @if($bet->bet_result == 1)
                                <td class="text-center green">{{$bet->bet_profit}}</td>
                                @elseif($bet->bet_result == 2)
                                 <td class="text-center red"> {{$bet->bet_stake}}</td>
                                 @else
                                  <td class="text-center black"> - </td>
                                @endif
                                <td class="text-center">{{$bet->created_at}}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="table-responsive horseTable" style="display:none;">
                    <table id="" class="table table-bordered btDataTable table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                            <th class="text-center">Bet ID</th>
                                <th class="text-center">Event Name</th>
                                <th class="text-center">Event Type</th>
                                
                                <th class="text-center">Win/Loss</th>
                                <th class="text-center">Placed Time</th>
                                <th class="text-center">Settled Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($horseBets as $bet)
                            <tr class="back">
                                <td class="text-center">{{$bet->id}}</td>
                                <td class="text-center">{{$bet->team_name}}</td>
                                <td class="text-center">Horse</td>
                                
                                <!--@if($bet->bet_result != NULL)-->
                                <!--<td class="text-center green">{{$bet->bet_stake}}</td>-->
                                <!--@else-->
                                <!--<td class="text-center red">{{$bet->bet_stake}}</td>-->
                                <!--@endif-->
                                @if($bet->bet_result == 1)
                                <td class="text-center green">{{$bet->bet_profit}}</td>
                                @elseif($bet->bet_result == 2)
                                 <td class="text-center red"> {{$bet->bet_stake}}</td>
                                 @else
                                  <td class="text-center black"> - </td>
                                @endif
                                <td class="text-center">{{$bet->created_at}}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="table-responsive greyhoundTable" style="display:none;">
                    <table id="" class="table table-bordered btDataTable table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                            <th class="text-center">Bet ID</th>
                                <th class="text-center">Event Name</th>
                                <th class="text-center">Event Type</th>
                                
                                <th class="text-center">Win/Loss</th>
                                <th class="text-center">Placed Time</th>
                                <th class="text-center">Settled Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($greyhoundBets as $bet)
                            <tr class="back">
                                <td class="text-center">{{$bet->id}}</td>
                                <td class="text-center">{{$bet->team_name}}</td>
                                <td class="text-center">Greyhound</td>
                                
                                <!--@if($bet->bet_result != NULL)-->
                                <!--<td class="text-center green">{{$bet->bet_stake}}</td>-->
                                <!--@else-->
                                <!--<td class="text-center red">{{$bet->bet_stake}}</td>-->
                                <!--@endif-->
                                @if($bet->bet_result == 1)
                                <td class="text-center green">{{$bet->bet_profit}}</td>
                                @elseif($bet->bet_result == 2)
                                 <td class="text-center red"> {{$bet->bet_stake}}</td>
                                 @else
                                  <td class="text-center black"> - </td>
                                @endif
                                <td class="text-center">{{$bet->created_at}}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                
            </div>
        </div>
        <script>
    $(function(){
        $('#bet_select_btn').click(function(){
             var selectText = $("#bet_select_box option:selected").val();
             if(selectText=='casino'){
                 $('.casinoTable').show();
                 $('.cricketTable').hide();
                 $('.footballTable').hide();
                 $('.tennisTable').hide();
                 $('.horseTable').hide();
                 $('.greyhoundTable').hide();
             }else if(selectText=='cricket'){
                 $('.casinoTable').hide();
                 $('.cricketTable').show();
                 $('.footballTable').hide();
                 $('.tennisTable').hide();
                 $('.horseTable').hide();
                 $('.greyhoundTable').hide();
             }else if(selectText=='football'){
                 $('.casinoTable').hide();
                 $('.cricketTable').hide();
                 $('.footballTable').show();
                 $('.tennisTable').hide();
                 $('.horseTable').hide();
                 $('.greyhoundTable').hide();
             }else if(selectText=='tennis'){
                 $('.casinoTable').hide();
                 $('.cricketTable').hide();
                 $('.footballTable').hide();
                 $('.tennisTable').show();
                 $('.horseTable').hide();
                 $('.greyhoundTable').hide();
             }else if(selectText=='horse'){
                 $('.casinoTable').hide();
                 $('.cricketTable').hide();
                 $('.footballTable').hide();
                 $('.tennisTable').hide();
                 $('.horseTable').show();
                 $('.greyhoundTable').hide();
             }else if(selectText=='greyhound'){
                 $('.casinoTable').hide();
                 $('.cricketTable').hide();
                 $('.footballTable').hide();
                 $('.tennisTable').hide();
                 $('.horseTable').hide();
                 $('.greyhoundTable').show();
             }
        });
    });
</script>
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






  @include('layouts.footer')
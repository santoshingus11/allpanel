@extends('web_layout.app')
@section('style')
<style>
    /* Style Goes Here */

    /* Style Goes Here */
</style>
@endsection
@section('content')

<div class="col-md-10 pxxs-0">
    <router-outlet></router-outlet>
    <app-bet-history>
        <div class="wrapper-inner user_screen">
            <h2 class="user-title">bet history</h2>
            <div class="border border-light">
                <div class="filter m-2">
                    <div class="form-row align-items-center">
                        <div class="col-md-3 col-lg-2 col-6"><input type="text" name="from" placeholder="Datepicker" bsdatepicker="" class="form-control ng-untouched ng-pristine ng-valid"></div>
                        <div class="col-md-3 col-lg-2 col-6"><input type="text" name="to" placeholder="Datepicker" bsdatepicker="" class="form-control ng-untouched ng-pristine ng-valid"></div>
                        <div class="col-md-2 col-12">
                            <select name="reportType" id="bet_select_box" class="custom-select ng-untouched ng-pristine ng-valid">
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
                                <th class="text-center">Bet Stake</th>
                                
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
                                
                              
                                <td class="text-center red">{{$bet->bet_stake}}</td>
                              
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
                                <th class="text-center">Bet Stake</th>
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
                                
                              
                                <td class="text-center red">{{$bet->bet_stake}}</td>
                             
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
                                <th class="text-center">Bet Stake</th>
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
                                
                               
                                <td class="text-center red">{{$bet->bet_stake}}</td>
                              
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
                                <th class="text-center">Bet Stake</th>
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
                                
                               
                                <td class="text-center red">{{$bet->bet_stake}}</td>
                               
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
                                <th class="text-center">Bet Stake</th>
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
                                
                              
                                <td class="text-center red">{{$bet->bet_stake}}</td>
                               
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
    </app-bet-history>
</div>

@endsection
@section('script')
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
@endsection


















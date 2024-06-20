@php error_reporting(0); @endphp

@if($userlist->count()>0)
@php $r=1;

$total_stake=0;
$total_player_p_l = 0;
$total_downline_p_l = 0;
$total_master_commission = 0;
@endphp
@foreach($userlist as $ul)

@php $stake=number_format(QueryHelper::stake($ul->role_id,$ul->id,$from_date ?? '',$to_date ?? ''),2); @endphp
@if($stake>0)
@php
$win=number_format(QueryHelper::winner($ul->role_id,$ul->id,$from_date ?? '',$to_date ?? ''),2);
$lose=number_format(QueryHelper::loser($ul->role_id,$ul->id,$from_date ?? '',$to_date ?? ''),2);
$odds=number_format(QueryHelper::odds($ul->role_id,$ul->id,$from_date ?? '',$to_date ?? ''),2);
$player_p_l = number_format($win-$lose,2);
$downline_p_l = $player_p_l;
if($player_p_l>0){
$master_commission = number_format((Auth::guard('agent')->user()->commission / 100) * $player_p_l,2);
}else{
$master_commission = 0.00;
}
$total_stake = number_format($total_stake + $stake,2);
$total_player_p_l = number_format($total_player_p_l + $player_p_l,2);
$total_downline_p_l = number_format($total_downline_p_l+$player_p_l,2);
$total_master_commission = number_format($total_master_commission+$master_commission,2);
@endphp
<tr>
  <td> @if(Auth::guard('agent')->user()->role_id<4) <a href="#" class="link-open" onclick="showbalancedetails('{{$ul->id}}')"><b>+</b></a>
      @endif {{$ul->username}}</td>
  <td @if($stake>0) class="green" @else class="red" @endif >{{str_replace('-','',$stake)}}</td>
  <td @if($player_p_l>0) class="green" @else class="red" @endif >{{str_replace('-','',$player_p_l)}}</td>
  @if(Auth::guard('agent')->user()->role_id<4) <td @if($downline_p_l>0) class="green" @else class="red" @endif >{{str_replace('-','',$downline_p_l)}}</td>
    @endif
    <td @if($master_commission>0) class="green" @else class="red" @endif >{{str_replace('-','',$master_commission)}}</td>
    <td @if($player_p_l>0) class="green" @else class="red" @endif >{{str_replace('-','',$player_p_l)}}</td>
</tr>


@if(Auth::guard('agent')->user()->role_id<4) @php $client_ids=QueryHelper::client_list($ul->role_id,$ul->id);
  @endphp
  @if(count($client_ids)>0)
  @php
  $bet_details = DB::table('bet_histories')
  ->select('sports_name',
  DB::raw('SUM(bet_placed) as total_bet_placed'),
  DB::raw('SUM(CASE WHEN result = 1 THEN bet_placed * (odd_req - 1) ELSE 0 END) AS win_amount'),
  DB::raw('SUM(CASE WHEN result = 2 THEN bet_placed ELSE 0 END) AS loss_amount')
  )
  ->whereIn('client_id', $client_ids)
  ->groupBy('sports_name')
  ->get();
  $de_win=0;
  @endphp
  @foreach($bet_details as $btd)

  @php
  $total_loss_win=$btd->win_amount-$btd->loss_amount;
  if($master_commission>0){
  $super_comm=(Auth::guard('agent')->user()->commission / 100) * $total_loss_win;
  }else{
  $super_comm=0.00;
  }

  @endphp

  <tr id="sub_mdemo555_{{$ul->id}}" style="display: none;">
    <td>
    </td>
    <td>
      <a>{{$btd->sports_name}}</a>
    </td>
    <td> {{number_format($btd->total_bet_placed,2)}}</td>
    @if($total_loss_win>0)
    <td> {{number_format($total_loss_win,2)}}</td>
    @else
    <td class="red"> {{number_format(str_replace('-','',$total_loss_win),2)}}</td>
    @endif




    @if(Auth::guard('agent')->user()->role_id<6) @if($total_loss_win>0)
      <td> {{number_format($total_loss_win,2)}}</td>
      @else
      <td class="red"> {{number_format(str_replace('-','',$total_loss_win),2)}}</td>
      @endif
      @endif


      <td> {{number_format(str_replace('-','',$super_comm),2)}}</td>


      @if($total_loss_win>0)
      <td> {{number_format($total_loss_win,2)}}</td>
      @else
      <td class="red"> {{number_format(str_replace('-','',$total_loss_win),2)}}</td>
      @endif


  </tr>

  @endforeach
  @endif
  @endif

  @php $r++; @endphp
  @endif
  @endforeach

  <tr>
    <td>Total</td>
    <td @if($total_stake>0) class="green" @else class="red" @endif> {{str_replace('-','',$total_stake)}}</td>
    <td @if($total_player_p_l>0) class="green" @else class="red" @endif> {{str_replace('-','',$total_player_p_l)}}</td>
    @if(Auth::guard('agent')->user()->role_id<4) <td @if($total_downline_p_l>0) class="green" @else class="red" @endif>{{str_replace('-','',$total_downline_p_l)}}</td>
      @endif
      <td @if($total_master_commission>0) class="green" @else class="red" @endif> {{str_replace('-','',$total_master_commission)}}</td>
      <td @if($total_player_p_l>0) class="green" @else class="red" @endif>{{str_replace('-','',$total_player_p_l)}}</td>
  </tr>

  @else
  <tr>
    <td colspan="11" class="text-center no-data-table-bg">There is no data for selected filters.</td>
  </tr>
  @endif

  <script>
    function showbalancedetails(id) {

      $("#sub_mdemo555_" + id).toggle();

    }
  </script>
@php
  $total_profit_loss=0; 
  $total_stake=0;
  $total_commission=0;
  @endphp
@if($bet_history->count()>0)


  @foreach($bet_history as $bh)
  @php   
  $stake=$bh->bet_placed;
  if($bh->result==1){
  $winner=$bh->bet_placed * ($bh->odd_req - 1);
  } else{
    $winner=0;
  } 
  if($bh->result==2){
  $loss= $bh->bet_placed;
  } else{
  $loss=0;
  } 
  $player_profit=$winner - $loss;
  $total_profit_loss=$total_profit_loss+$player_profit; 
  $super_comm=(Auth::guard('agent')->user()->commission / 100) * $player_profit;
  $total_stake=$total_stake+$stake;
  $total_commission=$total_commission+$super_comm;
  @endphp

<tr>
  <td>{{$bh->sports_name}} <span>-></span> {{$bh->match_name}}</td>
  <td  @if($stake>0) class="green" @else  class="green" @endif>{{number_format($stake,2)}}</td>
  
  <td  @if($player_profit>0) class="green" @else  class="green" @endif>{{number_format(str_replace('-','',$player_profit),2)}}</td>
  
  <td @if($player_profit>0) class="green" @else  class="green" @endif  >{{number_format(str_replace('-','',$player_profit),2)}}</td>
  
  <td>{{number_format(str_replace('-','',$super_comm),2)}}</td>
  
  <td @if($player_profit>0) class="green" @else  class="green" @endif  >{{number_format(str_replace('-','',$player_profit),2)}}</td>

</tr>

@endforeach
@else
<tr>
<td colspan="11" class="text-center no-data-table-bg">There is no data for selected filters.</td>
</tr>
@endif

<tr id="tempTotalTr" class="total">
			<td class="align-L">Total
			</td>
			<td id="_totalStake"  @if($total_stake>0) class="green" @else  class="green" @endif > {{str_replace('-','',$total_stake)}}</td>

     
			<td id="_totalProfitLoss"><span  @if($total_profit_loss>0) class="green" @else  class="green" @endif >{{number_format(str_replace('-','',$total_profit_loss),2)}}</span></td>

			<td id="_totalProfitLoss"><span  @if($total_profit_loss>0) class="green" @else  class="green" @endif >{{number_format(str_replace('-','',$total_profit_loss),2)}}</span></td>
   
			<td id="_totalTax3"  > {{number_format(str_replace('-','',$total_commission))}}</td>

      
			<td id="_totalProfitLoss" ><span  @if($total_profit_loss>0) class="green" @else  class="green" @endif >{{number_format(str_replace('-','',$total_profit_loss),2)}}</span></td>
   
			
</tr>
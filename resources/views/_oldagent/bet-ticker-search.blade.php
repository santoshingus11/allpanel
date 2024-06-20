
@if($bet_history->count()>0)
@foreach($bet_history as $bh)
@php 
if($bh->result==1){
  $profit=$bh->bet_placed*($bh->odd_req-1);
}else{
  $profit=$bh->bet_placed;
}
@endphp
<tr>
                              <td >{{$bh->username}}</td>
                              <td >{{$bh->event_name}}</td>
                              <td >{{$bh->market_name}}</td>
                              <td >{{$bh->selection_name}}</td>
                              <td >{{$bh->odd_req}}</td>
                              <td >{{$bh->ave_odds_matched}}</td>
                              <td ></td>
                              <td ></td>
                              <td @if($profit<0) class="red"  @else  class="green"  @endif>{{str_replace('-','',$profit)}}</td>
                              <td >{{$bh->ip_address}}</td>
                              <td >{{$bh->settled_date}}</td>
</tr>
@endforeach

@else


<tr>
                              <td colspan="11" class="text-center no-data-table-bg">There are no records to show </td>
                            </tr>

                            @endif
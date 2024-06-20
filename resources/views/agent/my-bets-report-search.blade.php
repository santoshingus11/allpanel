@if($betting_history->count()>0)
@foreach($betting_history as $bh)
<tr>
  <td>{{$bh->created_at}}</td>
  <td>{{$bh->match_name.'-'.$bh->market_name}}<br>Match Date:{{$bh->match_date}}</td>
  <td>{{$bh->username}}</td>
  <td>{{ucfirst($bh->bet_type)}}</td>
  <td>{{$bh->odd_req}}</td>
  @if($bh->result==1)<td class="green">WIN</td>@elseif($bh->result==0)<td class="red">LOSS</td>@else<td>--</td>@endif
  <td>{{$bh->ip_address}}</td>
  <td><a href="" data-bs-toggle="modal" onclick="checkbrowserdetails('{{$bh->bet_history_id}}')" id="browser_details{{$bh->bet_history_id}}" data-bs-target="#staticBackdrop" class="eye-view  Learn-More-Button" data-browser-details="{{$bh->browser_details}}" >Details</a></td>
  <td>{{$bh->bet_placed}}</td>
</tr>
@endforeach
@else
<tr>
  <td colspan="9" class="text-center no-data-table-bg">no records found</td>
</tr>
@endif

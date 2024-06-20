@if($balance_log->count()>0)
@foreach($balance_log as $bl)
<tr>
<td>{{$bl->client_id}}</td>
<td>{{$bl->site ?? '--'}}</td>
<td>{{$bl->event_id ?? '--'}}</td>
<td>{{$bl->event_name ?? '--'}}</td>
<td>{{$bl->market_id ?? '--'}}</td>
<td>{{$bl->market_name ?? '--'}}</td>
<td>--</td>
<td>--</td>
<td>--</td>
<td>@if($bl->result==1){{$bl->bet_placed*($bl->odd_req-1)}}@else{{$bl->bet_placed}}@endif</td>
<td>--</td>
<td>{{$bl->created_at ?? '--'}}</td>
</tr>
@endforeach
@else
<tr>
<td colspan="12" class="text-center">No Data </td>
</tr>
@endif
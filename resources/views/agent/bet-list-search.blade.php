@if($bet_list->count()>0)
@foreach($bet_list as $bl)
<tr>
<td>{{$bl->username}}</td>
<td>--</td>
<td>--</td>
<td>@if($bl->in_play==1){{'Yes'}}@else{{'NO'}}@endif</td>
<td>@if($bl->one_click==1){{'Yes'}}@else{{'NO'}}@endif</td>
<td>{{$bl->odd_req}}</td>
<td>{{$bl->bet_placed}}</td>
<td>@if($bl->result==1){{$bl->bet_placed*($bl->odd_req-1)}}@else{{'0.00'}}@endif</td>
<td>@if($bl->result==0){{$bl->bet_placed}}@else{{'0.00'}}@endif</td>
<td>0.00</td>
<td>0.00</td>
<td>0.00</td>
<td>@if($bl->result==1){{$bl->bet_placed*($bl->odd_req-1)}}@else{{'0.00'}}@endif</td>
<td><a href="{{route('delete-bet').'?id='.$bl->bet_history_id}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

</tr>
@endforeach
@else
<tr>
<td colspan="14" class="text-center no-data-table-bg">There is no data for selected filters.</td>
</tr>
@endif
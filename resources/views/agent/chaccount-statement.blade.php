@if($credit_history->count()>0)
@foreach($credit_history as $ch)
<tr>
<td>{{date('Y-m-d',strtotime($ch->created_at))}}</td>
<td>{{$ch->ua_username}}</td>
<td>{{$ch->pa_username}}</td>
<td>{{$ch->stake ?? '0'}}</td>
</tr>
@endforeach
@else
<tr>
<td colspan="5" class="text-center no-data-table-bg">no records found</td>
</tr>
@endif
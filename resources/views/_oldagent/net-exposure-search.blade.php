
@if($bet_history->count()>0)
@foreach($bet_history as $bh)

@php $profit= $bh->bet_placed*($bh->odd_req-1); @endphp
<tr>
<td></td>
<td></td>
<td>{{$bh->bet_placed}}</td>
<td>{{$bh->odd_req}}</td>
<td>{{$bh->bet_placed}}</td>
<td>{{$bh->bet_placed}}</td>
<td></td>
<td></td>
<td>{{$bh->bet_placed}}</td>
<td @if($profit<0) class="red" @else class="green" @endif>{{str_replace('-','',$profit)}}</td>

</tr>
@endforeach
@else

<tr><td colspan="11" class="text-center no-data-table-bg">There are no records to show </td></tr>

@endif
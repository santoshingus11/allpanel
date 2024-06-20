@if($data->count()>0)
@foreach ($data as $key => $sc)
<tr>
    <td class="text-center">{{ $key + 1 }}</td>
    <td class="text-center">{{ $sc->username }}</td>
    <td class="text-center">
        {{ \Carbon\Carbon::parse($sc->last_login)->format('m/d/Y h:i:s A') }}
    </td>
    <td class="text-center">
        @if (!empty($sc->ip_address))
            {{ $sc->ip_address }}
        @else
            No data found
        @endif
    </td>
    <td class="text-center">
        @if (!empty($sc->agent_info))
            {{ $sc->agent_info }}
        @else
            No data found
        @endif
    </td>
</tr>
@endforeach
@else
<tr><span class="p2">  No result found</span></tr>
@endif
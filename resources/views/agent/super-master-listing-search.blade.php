@php
if (isset(Auth::guard('agent')->user()->admin_access) && Auth::guard('agent')->user()->user_access == '1') {
    $userdata = Auth::guard('agent')->user();
    $adminAccessArray = explode(',', $userdata->admin_access);

    foreach ($adminAccessArray as $item) {
        // Only proceed if there is a key-value pair
        if (strpos($item, '=')) {
            list($key, $value) = explode('=', $item);
            $adminAccess[$key] = $value;
        }
    }
}
@endphp
@if($data->count()>0)
@foreach ($data as $sc)
<tr>
    @if (request()->has('id'))
        <td colspan="" class="">
            <a href="javascript:void(0);"
                class="eye-view Learn-More-Button">
                {{ $sc->username }}
            </a>
        @else
        @if(Auth::guard('agent')->user()->user_access == '1')   
            
            @if(isset($adminAccess['agency_management']))
                @if($adminAccess['agency_management'] =='2')
                <td colspan="" class=""><a href=""
                        data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop"
                        class="eye-view Learn-More-Button"
                        data-admin-id="{{ $sc->id }}">{{ $sc->username }}</a>
                </td>
                @elseif($adminAccess['agency_management'] =='1')
                    @if(isset($adminAccess['admin_listing']))
                        @if($adminAccess['admin_listing'] == '2')
                            <td colspan="" class=""><a href=""
                                data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop"
                                class="eye-view Learn-More-Button"
                                data-admin-id="{{ $sc->id }}">{{ $sc->username }}</a>
                            </td>
                        @elseif($adminAccess['admin_listing'] == '1')
                        <td colspan="" class=""><a href="javascript:void(0);"
                            data-admin-id="{{ $sc->id }}">{{ $sc->username }}</a>
                        </td>
                        @endif
                    @endif
                @endif
            @endif
            @else
            <td colspan="" class=""><a href=""
                data-bs-toggle="modal"
                data-bs-target="#staticBackdrop"
                class="eye-view Learn-More-Button"
                data-admin-id="{{ $sc->id }}">{{ $sc->username }}</a>
            </td>
            @endif
            
    @endif
    
    <td colspan="" class="" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">{{ $sc->login_id }}</td>
    @php
        $adminrole = $sc->role_id;
        $check_downline = DB::table('admins')
            ->where('role_id', $sc->role_id + 1)
            ->where('admin_id', $sc->id)
            ->first();
    @endphp
    @if (!empty($check_downline))
        <td colspan="" class="fix-images"><a
                href="{{ route('super-master-listing', ['id' => $sc->id]) }}"
                class="font-13"><img
                    src="{{ asset('admin/assets/icons/sitemap.png') }}"
                    class="img-fluid wid-12"></a></td>
    @else
        <td colspan="" class="fix-images filter bg-none"><a
                href="javascript:void(0);" class="font-13"><img
                    src="{{ asset('admin/assets/icons/sitemap.png') }}"
                    class="img-fluid wid-12"></a></td>
    @endif
    <td colspan="" class="relative"
        data-admin-id-update="{{ $sc->id }}"
        data-type-id="bet">
        <button data-bs-toggle="dropdown" aria-expanded="false"
            class="dropdown-toggle no-border bg-none">
            @if ($sc->bet_status == 1)
                <img src="{{ asset('admin/assets/icons/unlock.png') }}"
                    class="wid-12">
            @elseif($sc->bet_status == 0)
                <img src="{{ asset('admin/assets/icons/lock.png') }}"
                    class="wid-15">
            @endif
        </button>
        <ul class="dropdown-menu admin-dropdown-menu">
            <li data-status="1"><a href="javascript:void(0);"
                    class="dropdown-item icon-yellow"><img
                        src="{{ asset('admin/assets/icons/unlock.png') }}"></a>
            </li>
            <li data-status="0"><a href="javascript:void(0);"
                    class="dropdown-item icon-red"><img
                        src="{{ asset('admin/assets/icons/unlock.png') }}"></a>
            </li>
        </ul>
    </td>
    @if (!request()->has('id'))
        <td colspan="" class="relative"
            data-admin-id-update="{{ $sc->id }}"
            data-type-id="transfer">
            <button data-bs-toggle="dropdown"
                aria-expanded="false"
                class="dropdown-toggle no-border bg-none">
                @if ($sc->transfer_status == 1)
                    <img src="{{ asset('admin/assets/icons/unlock.png') }}"
                        class="wid-12">
                @elseif($sc->transfer_status == 0)
                    <img src="{{ asset('admin/assets/icons/lock.png') }}"
                        class="wid-15">
                @endif
            </button>
            <ul class="dropdown-menu admin-dropdown-menu">
                <li data-status="1"><a href="javascript:void(0);"
                        class="dropdown-item icon-yellow"><img
                            src="{{ asset('admin/assets/icons/unlock.png') }}"></a>
                </li>
                <li data-status="0"><a href="javascript:void(0);"
                        class="dropdown-item icon-red"><img
                            src="{{ asset('admin/assets/icons/unlock.png') }}"></a>
                </li>
            </ul>
           
        </td>
    @endif
    @if (request()->has('id'))
        @php
            $new = DB::table('admins')->where('id', request()->get('id'))->first();
            $adminrole = $new->role_id;
        @endphp
        @if ($adminrole == 2)
            <!-- Admin role is 2, show the "Transfer Status" column -->
            <td colspan="" class="relative"
                data-admin-id-update="{{ $sc->id }}"
                data-type-id="transfer">
                <button data-bs-toggle="dropdown"
                    aria-expanded="false"
                    class="dropdown-toggle no-border bg-none">
                    @if ($sc->transfer_status == 1)
                        <img src="{{ asset('admin/assets/icons/unlock.png') }}"
                            class="wid-12">
                    @elseif($sc->transfer_status == 0)
                        <img src="{{ asset('admin/assets/icons/lock.png') }}"
                            class="wid-15">
                    @endif
                </button>
                <ul class="dropdown-menu admin-dropdown-menu">
                    <li data-status="1"><a
                            href="javascript:void(0);"
                            class="dropdown-item icon-yellow"><img
                                src="{{ asset('admin/assets/icons/unlock.png') }}"></a>
                    </li>
                    <li data-status="0"><a
                            href="javascript:void(0);"
                            class="dropdown-item icon-red"><img
                                src="{{ asset('admin/assets/icons/unlock.png') }}"></a>
                    </li>
                </ul>
               
            </td>
        @endif
    @endif
    <td colspan="" class="">
        @if ($sc->status == 0)
            Inactive
        @elseif($sc->status == 1)
            Active
        @elseif($sc->status == 2)
            Suspended
        @elseif($sc->status == 3)
            Locked
        @endif
    </td>

    <td colspan="" class=""><a
            href="{{ route('smdemo1-agent-listing-demoag5') }}"
            class="font-13 eye-view"><i
                data-feather="eye"></i></a></td>
    <td colspan="" class="red">{{ $sc->exposure }}</td>
    <td colspan="" class="red"></td>
    <td colspan="" class="red">400</td>
    <td colspan="" class="">{{ $sc->credit_limit }}
    </td>
    <td colspan="" class="">{{ $sc->balance }}</td>
    @php
        $pt = DB::table('position_taking')
            ->where('admin_id', $sc->id)
            ->first();
    @endphp
    <td colspan="" class="">
        @if (!$pt == null)
            {{ $pt->cricket }}/{{ $pt->football }}/{{ $pt->tennis }}/{{ $pt->horse_racing }}/{{ $pt->greyhound_racing }}/{{ $pt->casino }}/{{ $pt->other }}
        @else
            No data available
        @endif
    <td colspan="" class="">
        {{ \Carbon\Carbon::parse($sc->created_at)->format('m/d/Y h:i:s A') }}
    </td>
    <td colspan="" class="">
        @if (!empty($sc->last_login))
            {{ \Carbon\Carbon::parse($sc->last_login)->format('m/d/Y h:i:s A') }}
        @else
            No login data
        @endif
    </td>

</tr>
@endforeach
@else
<tr><span class="p2">  No result found</span></tr>
@endif

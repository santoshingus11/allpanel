<!DOCTYPE html>
<html lang="en">
@php

    if (isset(Auth::guard('agent')->user()->admin_access) && Auth::guard('agent')->user()->user_access == '1') {
        $userdata = Auth::guard('agent')->user();
        $adminAccessArray = explode(',', $userdata->admin_access);

        foreach ($adminAccessArray as $item) {
            // Only proceed if there is a key-value pair
            if (strpos($item, '=')) {
                [$key, $value] = explode('=', $item);
                $adminAccess[$key] = $value;
            }
        }
    }

@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="">
    @include('layouts.header-url')
</head>

<body>
    <div class="main-wrapper Dashboard-bg admin-bg customResponsive">
        <!-- partial:partials/_sidebar.html -->
        <div class="left-side-bar">@include('layouts.left-side-bar')</div>
        <div class="page-wrapper bg-none">
            <!-- partial:partials/_navbar.html -->
            <div class="top-header-section">@include('layouts.header')</div>
            <!-- partial -->
            <div class="page-content">
                <div class="Welcometo-section">
                    @include('layouts.top-balance-section')
                </div>
                <div class="row">
                    <div class="col-12 col-xl-12 grid-margin stretch-card">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div id="successMessage" class="center_error_message_all_section relative">
                                </div>
                                <div id="statusMessage" class="center_error_message_all_section relative">
                                </div>
                                <div
                                    class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                                    <div class="d-inline-flex align-items-center">
                                        <div id="useradminsuccess" class="center_error_message_all_section relative">
                                        </div>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const urlParams = new URLSearchParams(window.location.search);
                                                const successMessage = urlParams.get('success');

                                                if (successMessage) {
                                                    document.getElementById('useradminsuccess').style.display = 'block';
                                                    document.getElementById('useradminsuccess').innerHTML = successMessage;

                                                    // Remove the success parameter from the URL
                                                    const newUrl = window.location.pathname;
                                                    window.history.replaceState({}, document.title, newUrl);

                                                    // Set a flag to track whether to close the message automatically
                                                    let closeAutomatically = true;

                                                    setTimeout(function() {
                                                        // Check the flag before closing the message automatically
                                                        if (closeAutomatically) {
                                                            $("#useradminsuccess").fadeOut("slow");
                                                        }
                                                    }, 3000);

                                                    // Listen for any AJAX requests, set the flag to false when a request is made
                                                    $(document).ajaxStart(function() {
                                                        closeAutomatically = false;
                                                    });

                                                    // If another request completes successfully, set the flag back to true
                                                    $(document).ajaxSuccess(function() {
                                                        closeAutomatically = true;
                                                    });
                                                }
                                            });
                                        </script>
                                        <h4 class=" mb-0">
                                            @if (request()->has('id'))
                                                @php
                                                    $new = DB::table('admins')
                                                        ->where('id', request()->get('id'))
                                                        ->first();
                                                    $adminrole = $new->role_id;
                                                @endphp
                                                @if ($adminrole == 2)
                                                    Super Master Listing
                                                @elseif($adminrole == 3)
                                                    Master Listing
                                                @elseif($adminrole == 4)
                                                    Client Listing
                                                @endif
                                            @else
                                                @php
                                                    $role = Auth::guard('agent')->user()->role_id;
                                                @endphp
                                                @if ($role == 1)
                                                    Admin Listing
                                                @elseif($role == 2)
                                                    Super Master Listing
                                                @elseif($role == 3)
                                                    Master Listing
                                                @elseif($role == 3)
                                                    Client Listing
                                                @endif
                                            @endif
                                        </h4>
                                        @if (Auth::guard('agent')->user()->user_access == '1')

                                            @if (isset($adminAccess['agency_management']))
                                                @if ($adminAccess['agency_management'] == '2')
                                                    <div class="d-inline-flex mx-4">
                                                        <div class="input-group mx-2">
                                                            <input class="form-control event-search" id="agency"
                                                                onkeyup="handleSearch()" name="agency_member"
                                                                type="text" placeholder="Agency/Member Name">
                                                        </div>
                                                        <div class="input-group">
                                                            <input class="form-control event-search" id="loginname"
                                                                onkeyup="handleSearch()" name="login_name"
                                                                type="text" placeholder="Login Name">
                                                        </div>
                                                        <div class="input-group mx-2"><select class="form-select"
                                                                id="userstatus" onchange="handleSearch()">
                                                                <option selected="" disabled="">Select Level
                                                                </option>
                                                                <option _ngcontent-rjl-c23="" value="">Status
                                                                </option>
                                                                <option _ngcontent-rjl-c23="" value="1">Active
                                                                </option>
                                                                <option _ngcontent-rjl-c23="" value="0">Inactive
                                                                </option>
                                                                <option _ngcontent-rjl-c23="" value="2">Suspended
                                                                </option>
                                                                <option _ngcontent-rjl-c23="" value="3">Closed
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                    </div>

                                    <div class="btn_Download d-inline-flex text-nowrap">
                                        <button type="button" id="downloadCSV"
                                            class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                                            Download CSV
                                        </button>
                                        @if (Auth::guard('agent')->user()->role_id != '1')
                                            <a href="{{ route('new-super-master') }}"><button type="button"
                                                    class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">
                                                    @if (Auth::guard('agent')->user()->role_id == 1)
                                                        New Admin
                                                    @elseif(Auth::guard('agent')->user()->role_id == 2)
                                                        New Super Master
                                                    @endif

                                                </button></a>
                                        @endif
                                    </div>
                                @elseif($adminAccess['agency_management'] == '1')
                                    @if (isset($adminAccess['admin_listing']))
                                        @if ($adminAccess['admin_listing'] == '2')
                                            <div class="d-inline-flex mx-4">
                                                <div class="input-group mx-2">
                                                    <input class="form-control event-search" id="agency"
                                                        onkeyup="handleSearch()" name="agency_member" type="text"
                                                        placeholder="Agency/Member Name">
                                                </div>
                                                <div class="input-group">
                                                    <input class="form-control event-search" id="loginname"
                                                        onkeyup="handleSearch()" name="login_name" type="text"
                                                        placeholder="Login Name">
                                                </div>
                                                <div class="input-group mx-2"><select class="form-select"
                                                        id="userstatus" onchange="handleSearch()">
                                                        <option selected="" disabled="">Select Level</option>
                                                        <option _ngcontent-rjl-c23="" value="">Status</option>
                                                        <option _ngcontent-rjl-c23="" value="1">Active</option>
                                                        <option _ngcontent-rjl-c23="" value="0">Inactive</option>
                                                        <option _ngcontent-rjl-c23="" value="2">Suspended</option>
                                                        <option _ngcontent-rjl-c23="" value="3">Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                </div>
                                <div class="btn_Download d-inline-flex text-nowrap">
                                    <button type="button" id="downloadCSV"
                                        class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                                        Download CSV
                                    </button>
                                    @if (Auth::guard('agent')->user()->role_id != '1')
                                        <a href="{{ route('new-super-master') }}"><button type="button"
                                                class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">

                                                @if (Auth::guard('agent')->user()->role_id == 2)
                                                    New Super Master
                                                @endif

                                            </button></a>
                                    @endif
                                </div>
                            @elseif($adminAccess['admin_listing'] == '1')
                                <div class="d-inline-flex mx-4">
                                    <div class="input-group mx-2">
                                        <input class="form-control event-search" name="agency_member" type="text"
                                            placeholder="Agency/Member Name">
                                    </div>
                                    <div class="input-group">
                                        <input class="form-control event-search" name="login_name" type="text"
                                            placeholder="Login Name">
                                    </div>
                                    <div class="input-group mx-2"><select class="form-select">
                                            <option selected="" disabled="">Select Level</option>
                                            <option _ngcontent-rjl-c23="" value="">Status</option>
                                            <option _ngcontent-rjl-c23="" value="1">Active</option>
                                            <option _ngcontent-rjl-c23="" value="0">Inactive</option>
                                            <option _ngcontent-rjl-c23="" value="2">Suspended</option>
                                            <option _ngcontent-rjl-c23="" value="3">Closed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="btn_Download d-inline-flex text-nowrap">
                                <button type="button"
                                    class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                                    Download CSV
                                </button>
                                @if (Auth::guard('agent')->user()->role_id != '1')
                                    <a href="javascript:void(0);"><button type="button"
                                            class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">

                                            @if (Auth::guard('agent')->user()->role_id == 2)
                                                New Super Master
                                            @endif

                                        </button></a>
                                @endif
                            </div>

                            @endif
                            @endif
                            @endif
                            @endif
                        @else
                            <div class="d-inline-flex mx-4">
                                <div class="input-group mx-2">
                                    <input class="form-control event-search" id="agency" onkeyup="handleSearch()"
                                        name="agency_member" type="text" placeholder="Agency/Member Name">
                                </div>
                                <div class="input-group">
                                    <input class="form-control event-search" id="loginname" onkeyup="handleSearch()"
                                        name="login_name" type="text" placeholder="Login Name">
                                </div>
                                <div class="input-group mx-2"><select class="form-select" id="userstatus"
                                        onchange="handleSearch()">
                                        <option selected="" disabled="">Select Level</option>
                                        <option _ngcontent-rjl-c23="" value="">Status</option>
                                        <option _ngcontent-rjl-c23="" value="1">Active</option>
                                        <option _ngcontent-rjl-c23="" value="0">Inactive</option>
                                        <option _ngcontent-rjl-c23="" value="2">Suspended</option>
                                        <option _ngcontent-rjl-c23="" value="3">Closed</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="btn_Download d-inline-flex text-nowrap">
                            <button type="button" id="downloadCSV"
                                class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                                Download CSV
                            </button>
                              @if (Auth::guard('agent')->user()->role_id == 1)
                            <a href="{{ route('new_admin') }}">
                                <button type="button" class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">
                                    New Admin
                                </button>
                            </a>
                            @else
                             <a href="{{ route('new_admin') }}"><button type="button"
                                        class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">
                                        @if (Auth::guard('agent')->user()->role_id == 2)
                                            New Super Master
                                        @elseif(Auth::guard('agent')->user()->role_id == 3)
                                            Master
                                        @endif

                                    </button></a>
                            @endif
                            <!--@if (Auth::guard('agent')->user()->role_id == '1')-->
                            <!--    <a href="{{ route('new-super-master') }}"><button type="button"-->
                            <!--            class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">-->
                            <!--            @if (Auth::guard('agent')->user()->role_id == 1)-->
                            <!--                New Admin-->
                            <!--            @elseif(Auth::guard('agent')->user()->role_id == 2)-->
                            <!--                New Super Master-->
                            <!--            @endif-->

                            <!--        </button></a>-->
                            <!--@endif-->
                        </div>
                        @endif
                    </div>
                    <div class="Agent_-Listing">
                        <p class="DownlineListing-bg p-2"><em>Downline Listing</em></p>

                        <div class="table-responsives mt-4">
                            <table id="agentTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="">Login Name</th>
                                        <th class="">ID</th>
                                        <th class="">Downline</th>
                                        <th class="">Betting Status</th>
                                        @if (!request()->has('id'))
                                            <th class="">Transfer Status</th>
                                        @endif
                                        @if (request()->has('id'))
                                            @php
                                                $new = DB::table('admins')->where('id', request()->get('id'))->first();
                                                $adminrole = $new->role_id;
                                            @endphp
                                            @if ($adminrole == 2)
                                                <th class="">Transfer Status</th>
                                            @endif
                                        @endif
                                        <th class="">Status</th>
                                        <th class="">Details</th>
                                        <th class="">Net Exposure</th>
                                        <th class="">Take</th>
                                        <th class="">Give</th>
                                        <th class="">Credit Limit</th>
                                        <th class="">Available Balance</th>
                                        <th class="">PT (%) C/F/T/H/G/X/O</th>
                                        <th class="">Created</th>
                                        <th class="">Last Login</th>
                                    </tr>
                                </thead>
                                <tbody id="super-master-search-id">
                                    @include('agent.super-master-listing-search')
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="dataTableExample_info" role="status" aria-live="polite">
                            Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of {{ $data->total() }} entries
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers right" id="dataTableExample_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous {{ $data->previousPageUrl() ? '' : 'disabled' }}"
                                    id="dataTableExample_previous">
                                    <a href="{{ $data->previousPageUrl() ?? '#' }}" aria-controls="dataTableExample"
                                        tabindex="0" class="page-link">Previous</a>
                                </li>
                                @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                                    <li
                                        class="paginate_button page-item {{ $page == $data->currentPage() ? 'active' : '' }}">
                                        <a href="{{ $url }}" aria-controls="dataTableExample" tabindex="0"
                                            class="page-link">{{ $page }}</a>
                                    </li>
                                @endforeach
                                <li class="paginate_button page-item next {{ $data->nextPageUrl() ? '' : 'disabled' }}"
                                    id="dataTableExample_next">
                                    <a href="{{ $data->nextPageUrl() ?? '#' }}" aria-controls="dataTableExample"
                                        tabindex="0" class="page-link">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    </div>
    </div>
    </div>




    <!-- Modal -->
    {{-- <div class="modal fade" id="TransferStatusexampleModals" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-13" id="exampleModalLabel">Are you sure you want to pending lock
                        34150?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="btn-close"></button>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center flex-wrap text-nowrap">
                        <button type="button" data-bs-dismiss="modal"
                            class="btn green  btn-icon-text mb-2 mb-md-0 mx-2">
                            Cancel
                        </button>

                        <a href="#"><button type="button"
                                class="btn btn-primary New-Agent-save btn-icon-text mb-2 mb-md-0">
                                Save
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="TransferStatusexampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-13" id="exampleModalLabel">Are you sure you want to lock 34150?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="btn-close"></button>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center flex-wrap text-nowrap">
                        <button type="button" data-bs-dismiss="modal"
                            class="btn green  btn-icon-text mb-2 mb-md-0 mx-2">
                            Cancel
                        </button>

                        <a href="#"><button type="button"
                                class="btn btn-primary New-Agent-save btn-icon-text mb-2 mb-md-0">
                                Save
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Information Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            @include('agent.adminmodal')
        </div>
    </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        hr {
            color: white;
            opacity: 0.5;
        }
    </style>

        <script>
            $(document).ready(function() {
                $('.dropdown-toggle').on('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    // Toggle Bootstrap dropdown
                    $(this).closest('.dropdown').toggleClass('show');
                });

                $('.dropdown-item').on('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    var adminId = $(this).closest('td').data('admin-id-update');
                    var status = $(this).closest('li').data('status');
                    var type = $(this).closest('td').data('type-id'); // Update this line

                    $.ajax({
                        type: 'POST',
                        url: '{{ route('update-status') }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            status: status,
                            id: adminId,
                            type: type
                        },
                        success: function(data) {
                            document.getElementById('statusMessage').innerHTML = data.message;
                            $('#statusMessage').show().addClass('errorActive').delay(1000).fadeOut(
                                'slow');
                            setTimeout(function() {
                                location.reload();
                            }, 500);
                            $('.dropdown-toggle').dropdown('hide');

                            console.log(data);
                        },
                        error: function(error) {
                            // Handle error (if needed)
                            console.error(error);
                        }
                    });
                });
            });
        </script>

    <script>
        $(document).ready(function() {
            // Function to convert a table to CSV
            function convertToCSV(table) {
                var csv = [];

                // Add custom header row without "Downline" and "Details"
                var headerRow = [
                    'Login ID', 'ID', 'Betting Status', 'Status',
                    'Net Exposure', 'Take', 'Give', 'Credit Limit', 'Available Balance',
                    'PT (%) C/F/T/H/G/X/O', 'Created', 'Last Login'
                ];

                // Check if the "Transfer Status" column exists in the table
                var transferStatusIndex = table.find('th:contains("Transfer Status")').index();
                if (transferStatusIndex !== -1) {
                    headerRow.splice(3, 0,
                    'Transfer Status'); // Insert "Transfer Status" at the appropriate position
                }

                csv.push(headerRow.join(','));

                var rows = table.find('tr');

                // Iterate over each row starting from the second row (index 1)
                rows.slice(1).each(function(index, row) {
                    var rowData = [];

                    // Iterate over each cell in the row
                    $(row).find('td').each(function(index, cell) {
                        // Convert "Betting Status" and "Transfer Status" column values
                        if (index === 3 || index === 4) {
                            var isLocked = $(cell).find('.wid-15').length > 0;
                            var statusValue = isLocked ? 'Inactive' : 'Active';
                            rowData.push(statusValue);
                        } else if (index !== 2 && index !== 6 && index !== transferStatusIndex) {
                            // Exclude "Downline" and "Details" columns and "Transfer Status" if present
                            rowData.push($(cell).text().trim());
                        }
                    });

                    csv.push(rowData.join(','));
                });

                return csv.join('\n');
            }

            $('#downloadCSV').on('click', function() {
                // Select the table by its ID
                var table = $('#agentTable');

                var blob = new Blob([convertToCSV(table)], {
                    type: 'text/csv;charset=utf-8;'
                });

                var link = document.createElement('a');
                link.href = URL.createObjectURL(blob);
                link.download = 'agent_data.csv';

                link.click();

                // Refresh the page
                location.reload();
            });
        });
    </script>
    <script>
        function handleSearch() {
            var agencyMemberName = $('#agency').val().toLowerCase();
            var loginName = $('#loginname').val().toLowerCase();
            var selectedStatus = $('#userstatus').val();
            // alert(selectedStatus);

            if (agencyMemberName !== '' || loginName !== '' || selectedStatus !== '') {
                $.ajax({
                    type: 'GET',
                    url: '{{ route('super-master-listing-search') }}',
                    data: {
                        agency_member_name: agencyMemberName,
                        login_name: loginName,
                        selected_status: selectedStatus
                    },
                    success: function(data) {
                        document.getElementById('super-master-search-id').innerHTML = data;
                        console.log(data);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            }
        }
        if (agencyMemberName !== '' || loginName !== '' || selectedStatus !== '') {
            $.ajax({
                type: 'GET',
                url: '{{ route('super-master-listing-search') }}',
                data: {
                    agency_member_name: agencyMemberName,
                    login_name: loginName,
                    selected_status: selectedStatus
                },
                success: function(data) {
                    document.getElementById('super-master-search-id').innerHTML = data;
                    console.log(data);
                },
                error: function(error) {
                    console.error(error);
                }
            })
        }
    </script>

    {{-- @php
   $check=Auth::guard('agent')->user()->user_access;
   if($check->user_access=='1'){
    $function=true;
   }
   @endphp --}}
    {{-- <script>
   
        var adminListingAccess = @json($adminAccess['admin_listing'] ?? false);
        var superMasterListingAccess = @json($adminAccess['super_master_listing'] ?? false);
        var agencyManagement = @json($adminAccess['agency_management'] ?? false);

            console.log('adminListingAccess:', adminListingAccess);
            console.log('superMasterListingAccess:', superMasterListingAccess);
            console.log('agencyManagement:', agencyManagement);

            // Global variable to control whether to enable or disable all page functions
            var enablePageFunctions = true;

            if (agencyManagement == 2) {
                enablePageFunctions = true;
                console.log('Enabling all page functions because agencyManagement is 2.');
            } else if (agencyManagement == 0) {
                // Disable all page functions because agencyManagement is 0
                enablePageFunctions = false;
                console.log('Disabling all page functions because agencyManagement is 0.');
            } else if (agencyManagement == 1) {
                // Check adminListingAccess and superMasterListingAccess for agencyManagement == 1
                if (adminListingAccess == 2 || superMasterListingAccess == 2) {
                    // Enable all page functions
                    console.log('Enabling all page functions because adminListingAccess or superMasterListingAccess is 2.');
                } else {
                    // Disable all page functions
                    enablePageFunctions = false;
                    console.log('Disabling all page functions because adminListingAccess or superMasterListingAccess is not 2.');
                }
            }
 
            function samplePageFunction() {
                // Check the enablePageFunctions variable before executing the logic
                if (enablePageFunctions) {
                    
                  
                } else {
                    console.log('Page functions are disabled. Cannot execute sample page function.');
                }
            }

            samplePageFunction();
    else{

    }
</script> --}}
    @include('layouts.footer')

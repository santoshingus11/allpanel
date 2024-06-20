<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="">
    @include('layouts.header-url')
    <script>
        // Wait for the DOM to be ready
        document.addEventListener("DOMContentLoaded", function() {
            var startDateInput = document.getElementById("start-date");
            var endDateInput = document.getElementById("end-date");

            // Get today's date in the format "YYYY-MM-DD"
            var today = new Date().toISOString().split('T')[0];

            // Set initial values for date inputs
            startDateInput.value = today;
            endDateInput.value = today;

            // Initialize date picker for start date
            flatpickr(startDateInput, {
                dateFormat: "Y-m-d",
                onChange: function(selectedDates, dateStr) {
                    endDatePicker.set("minDate", dateStr);
                }
            });

            // Initialize date picker for end date
            var endDatePicker = flatpickr(endDateInput, {
                dateFormat: "Y-m-d",
                onChange: function(selectedDates, dateStr) {
                    startDatePicker.set("maxDate", dateStr);
                }
            });
        });
    </script>

</head>

<body>


    <div class="main-wrapper Dashboard-bg customResponsive">
        <!-- partial:partials/_sidebar.html -->
        <div class="left-side-bar">@include('layouts.left-side-bar')</div>
        <div class="page-wrapper bg-none">
            <!-- partial:partials/_navbar.html -->
            <div class="top-header-section">@include('layouts.header')</div>
            <!-- partial -->
            <div class="page-content">
                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin top-bg px-4">
                    <div class="Welcome-to Dashboard">
                        <ul class="d-flex justify-content-between Balance_Down">
                            <li>Balance Down: <span class="red">0.00</span></li>
                            <li>Balance Up: <span class="red">0.00</span></li>
                            <li>Net Exposure: <span class="red">0.00</span></li>
                            <li>Available Credit: <span class="">0.00</span></li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center flex-wrap text-nowrap">
                        <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0">
                            Refresh
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div id="usersuccessMessage" class="center_error_message_all_section relative">
                                </div>
                                <div id="userdataerror" class="center_error_message_all_section relative">
                                </div>
                                <form class="forms-sample" action="{{ route('super-master-user') }}" method="post">
                                    @csrf
                                    <div
                                        class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                                        <h4 class=" mb-0">Personal Information</h4>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <div class="forms-sample d-flex w-100">
                                            <div class="mb-3 col-lg-3 mobile-100">
                                                <label for="Client ID" class="form-label">User ID *</label>
                                                <input type="text"
                                                    class="form-control @error('username') is-invalid @enderror"
                                                    id="" placeholder="Client ID" name="username"
                                                    value="{{ old('username') }}">
                                                @error('username')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>


                                            <div class="mb-3 mx-3 col-lg-3 mobile_view_m-0 mobile-100">
                                                <label for="Full Name" class="form-label">Full Name *</label>
                                                <input type="text"
                                                    class="form-control  @error('first_name') is-invalid @enderror"
                                                    id="" placeholder="Full Name" name="first_name"
                                                    value="{{ old('first_name') }}">
                                                @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>


                                            <div class="mb-3 mx-2 col-lg-3 mobile_view_m-0 mobile-100">
                                                <label for="Full Name" class="form-label">Password *</label>
                                                <input type="Password"
                                                    class="form-control  @error('password') is-invalid @enderror"
                                                    id="password" placeholder="Password" name="password"
                                                    value="{{ old('password') }}">
                                                @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3 mx-2 col-lg-3 mobile_view_m-0 mobile-100">
                                                <label for="Full Name" class="form-label">Confirm Password *</label>
                                                <input type="Password"
                                                    class="form-control  @error('confirm_password') is-invalid @enderror"
                                                    id="confirmpassword" placeholder="Confirm Password"
                                                    name="confirm_password" value="{{ old('confirm_password') }}">
                                                @error('confirm_password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <div class="w-100">
                                            <h4>Privileges</h4>
                                        </div>
                                        <div class="forms-sample d-flex w-100 mt-3">
                                            <div class="mb-3 bg-gray mobile-100">
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="checkInline"
                                                        name="market_analysis" value="1">
                                                    <label class="form-check-label" for="checkInline">
                                                        Market Analysis
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="checkInlineChecked" name="client_list" value="1">
                                                    <label class="form-check-label" for="checkInlineChecked">
                                                        Client List
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="checkInline"
                                                        name="withdraw" value="1">
                                                    <label class="form-check-label" for="checkInline">
                                                        Withdraw
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="checkInlineChecked" name="deposit" value="1">
                                                    <label class="form-check-label" for="checkInlineChecked">
                                                        Deposit

                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="checkInline"
                                                        name="user_status" value="1">
                                                    <label class="form-check-label" for="checkInline">
                                                        User Status
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="checkInlineChecked" name="user_update" value="1">
                                                    <label class="form-check-label" for="checkInlineChecked">
                                                        User Update
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="checkInline"
                                                        name="change_password" value="1">
                                                    <label class="form-check-label" for="checkInline">
                                                        Change Password
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="checkInlineChecked" name="bank_list" value="1">
                                                    <label class="form-check-label" for="checkInlineChecked">
                                                        Bank List
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="checkInline"
                                                        name="account_statement" value="1">
                                                    <label class="form-check-label" for="checkInline">
                                                        Account Statement
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="checkInlineChecked" name="my_bets" value="1">
                                                    <label class="form-check-label" for="checkInlineChecked">
                                                        My Bets
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="checkInline"
                                                        name="casino_report" value="1">
                                                    <label class="form-check-label" for="checkInline">
                                                        Casino Report
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="checkInlineChecked" name="user_logs" value="1">
                                                    <label class="form-check-label" for="checkInlineChecked">
                                                        User Logs
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="checkInline"
                                                        name="game_report" value="1">
                                                    <label class="form-check-label" for="checkInline">
                                                        Game Report
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="checkInlineChecked" name="fraud_report" value="1">
                                                    <label class="form-check-label" for="checkInlineChecked">
                                                        Fraud Report
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="checkInline"
                                                        name="casino_list" value="1">
                                                    <label class="form-check-label" for="checkInline">
                                                        Casino List
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="checkInlineChecked" name="game_list" value="1">
                                                    <label class="form-check-label" for="checkInlineChecked">
                                                        Game List
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="checkInline"
                                                        name="credit_reference" value="1">
                                                    <label class="form-check-label" for="checkInline">
                                                        Credit Reference
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="checkInlineChecked" name="exposure_limit" value="1">
                                                    <label class="form-check-label" for="checkInlineChecked">
                                                        Exposure Limit
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="checkInline"
                                                        name="user_create" value="1">
                                                    <label class="form-check-label" for="checkInline">
                                                        User Create
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end align-items-baseline pb-2">
                                        <div class="serch-filter">
                                            <div class="input-group">
                                                <label class="Search-By_User Name">Master Password</label>
                                                <input
                                                    class="form-control event-search mx-2  @error('agent_password') is-invalid @enderror"
                                                    type="password" name="agent_password"
                                                    placeholder="Master Password" value="{{ old('agent_password') }}">

                                                <button type="submit"
                                                    class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">
                                                    Submit
                                                </button>
                                                @error('agent_password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </form>





                                <div class="Agent_-Listing">
                                    <div class="table-responsives mt-3">
                                        <table class="table table-striped">
                                            <thead class="table-responsive-new-designs">
                                                <tr>
                                                    <th class="">Access</th>
                                                    <th class="">Edit</th>
                                                    <th class="">User Name</th>
                                                    <th class="">Full Name</th>
                                                    <th class="">Market Analysis</th>
                                                    <th class="">Client List</th>
                                                    <th class="">Withdraw</th>
                                                    <th class="">Deposit</th>
                                                    <th class="">User Status</th>
                                                    <th class="">User Update</th>
                                                    <th class="">Change Password</th>
                                                    <th class="">Bank List</th>
                                                    <th class="">Account Statement</th>
                                                    <th class="">My Bets</th>
                                                    <th class="">Casino Report</th>
                                                    <th class="">User Log</th>
                                                    <th class="">Game Report</th>
                                                    <th class="">Fraudt</th>
                                                    <th class="">Casino List</th>
                                                    <th class="">Game List</th>
                                                    <th class="">User Active</th>
                                                    <th class="">Credit Reference</th>
                                                    <th class="">Exposure Limit</th>
                                                    <th class="">User Create</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $sc)
                                                    @php
                                                        // Explode the admin_access string into an array
                                                        $adminAccessArray = explode(',', $sc->admin_access);

                                                        // Initialize an associative array to store key-value pairs
                                                        $adminAccessKeyValue = [];

                                                        // Populate the $adminAccessKeyValue array with key-value pairs
                                                        foreach ($adminAccessArray as $item) {
                                                            // Only proceed if there is a key-value pair
                                                            if (strpos($item, '=')) {
                                                                [$key, $value] = explode('=', $item);
                                                                $adminAccessKeyValue[$key] = $value;
                                                            }
                                                        }
                                                    @endphp
                                                    <tr>
                                                        <td colspan="" class="edit-color Learn-More"
                                                            data-bs-toggle="modal" data-bs-target="#editModal"
                                                            data-useraccess-id="{{ $sc->id }}">
                                                            <img src="http://localhost/lordexch/code/public/admin/Super-Admin/assets/icons/secured-lock.png"
                                                                class="img-fluid">

                                                        </td>
                                                        <td colspan="" class="edit-color Learn-More2"
                                                            data-bs-toggle="modal" data-bs-target="#newmodal"
                                                            data-usereditdata-id="{{ $sc->id }}">
                                                            <img src="http://localhost/lordexch/code/public/admin/Super-Admin/assets/icons/pencil.png"
                                                                class="img-fluid">

                                                        </td>
                                                        <td class="">{{ $sc->username }}</td>
                                                        <td class="">
                                                            {{ $sc->first_name }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['market_analysis'] ?? null) == '1' ? 'Yes' : 'no' }}

                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['client_list'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['withdraw'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['deposit'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['user_status'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['user_update'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['change_password'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['bank_list'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['account_statement'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['my_bets'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['casino_report'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['user_logs'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['game_report'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['fraud_report'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['casino_list'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['game_list'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            @if ($sc->status == 1)
                                                                Active
                                                            @elseif($sc->status == 0)
                                                                Inactive
                                                            @endif
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['credit_reference'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['exposure_limit'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                        <td class="">
                                                            {{ ($adminAccessKeyValue['user_create'] ?? null) == '1' ? 'Yes' : 'no' }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="dataTableExample_info" role="status"
                                            aria-live="polite">Showing 1 to 10 of 22 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7 ">
                                        <div class="dataTables_paginate paging_simple_numbers right"
                                            id="dataTableExample_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="dataTableExample_previous"><a href="#"
                                                        aria-controls="dataTableExample" data-dt-idx="0"
                                                        tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="dataTableExample" data-dt-idx="1"
                                                        tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="dataTableExample" data-dt-idx="2"
                                                        tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="dataTableExample" data-dt-idx="3"
                                                        tabindex="0" class="page-link">3</a></li>
                                                <li class="paginate_button page-item next" id="dataTableExample_next">
                                                    <a href="#" aria-controls="dataTableExample"
                                                        data-dt-idx="4" tabindex="0" class="page-link">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
                    aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        @include('agent.supermaster_user')
                    </div>
                </div>
            </div>
            <div class="modal fade" id="newmodal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">
                                Edit User - <span id="usernamePlaceholder"></span>
                            </h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Your form fields go here -->
                            <form id="userEditForm" action="" method="post">
                                <div class="mb-3">
                                    <label for="password">New Password</label>
                                    <input type="password" class="form-control" id="userpassword" name="password">
                                    <div class="password invalid-feedback"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="password">Message</label>
                                    <input type="text" class="form-control" id="message" name="message"
                                        value="">

                                </div>
                                <div class="mb-3">
                                    <label for="adminpassword">Admin Password</label>
                                    <input type="password" class="form-control" id="agentpassword"
                                        name="agent_password" value="">
                                    <div class="agentpassword invalid-feedback" id="adminpassworderror"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <input type="hidden" name="id" value="" id="useraccessid">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="submitUserEdit()">Save
                                Changes</button>
                        </div>

                    </div>
                </div>
            </div>


        </div>


    </div>
    </div>
    <style>
        .form-check-inline {
            display: inline-block;
            margin-right: 1rem;
            margin-bottom: 15px;
        }
    </style>
    <script>
        $(document).on('click', '.Learn-More2', function() {
            var adminId = $(this).data('usereditdata-id');
            // alert(adminId);
            loadUserData(adminId);
        });

        function loadUserData(adminId) {
            // alert(userId);

            $.ajax({
                url: "{{ route('get-user-data') }}",
                data: {
                    id: adminId
                }, // Fixed the syntax error here
                type: 'GET',
                success: function(data) {

                    $('#status').val(data.status);
                    $('#useraccessid').val(data.id);
                    $('#message').val(data.message);


                    // Open the modal
                    $('#newmodal').modal('show');
                    $('#usernamePlaceholder').text(data.username);
                },
                error: function(error) {
                    console.log('Error fetching user data:', error);
                }
            });
        }
    </script>
    <script>
        function submitUserEdit() {
            // Assuming you have fields in your modal with IDs: #message, #password, #status
            var message = $('#message').val();
            var password = $('#userpassword').val();
            var agentpassword = $('#agentpassword').val();
            var status = $('#status').val();

            // Assuming you have a user ID, replace 'your_user_id' with the actual user ID
            var userId = $('#useraccessid').val();

            $.ajax({
                url: "{{ route('update-user-data') }}", // Replace with your actual route
                type: 'GET',
                data: {
                    id: userId,
                    message: message,
                    password: password,
                    status: status,
                    agent_password: agentpassword
                },
                dataType: 'json',
                success: function(response) {
                    $('.invalid-feedback').text('');
                    document.getElementById('usersuccessMessage').innerHTML = response.success;
                    $('#usersuccessMessage').show().addClass('errorActive').delay(3000).fadeOut('slow');

                    // Handle success, show a message, or perform additional actions
                    console.log('User data updated successfully:', response);

                    // Close the modal
                    $('#newmodal').modal('hide');
                },
                error: function(error) {
                    $('.invalid-feedback').text('');

                    if (error.status === 422) {
                        var errors = error.responseJSON.errors;

                        // Display errors in their corresponding fields
                        $.each(errors, function(key, value) {
                            // For each error, display it in the corresponding error field
                            var errorField = $('[name="' + key + '"]').siblings('.invalid-feedback');
                            errorField.text(value[0]).show();
                        });
                    } else if (error.status === 401) {
                        var errorMessage = error.responseJSON.error;
                        document.getElementById('adminpassworderror').innerHTML = errorMessage;

                    } else if (error.status === 403) {
                        var errorMessage = error.responseJSON.error;
                        document.getElementById('userdataerror').innerHTML = errorMessage;
                        $('#userdataerror').show().addClass('errorActive').delay(3000).fadeOut('slow');
                        $('#newmodal').modal('hide');
                    } else {
                        console.log('Error updating password:', error);
                    }


                    // Handle error, show an error message, or perform additional actions


                    // You might want to display an error message to the user
                    // alert('Error updating user data. Please try again.');
                }
            });
        }
    </script>
    <script>
        function loadUserDetails(adminId) {
            $.ajax({
                type: 'GET',
                url: '{{ route('adminuser-details') }}',
                data: {
                    id: adminId
                },
                success: function(data) {
                    document.getElementById("supermasteruser").innerHTML = data;
                    $('#editModal').modal('show');

                },
                error: function(error) {
                    console.error('Error fetching admin details:', error);
                }
            });
        }
        $(document).on('click', '.Learn-More', function() {
            var adminId = $(this).data('useraccess-id');
            // alert(adminId);
            loadUserDetails(adminId);
        });

        // Add click event listener to "Learn More" buttons
    </script>
    @include('layouts.footer')

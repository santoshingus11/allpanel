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

                                <div
                                    class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                                    <h4 class=" mb-0">User Listing</h4>
                                    <div class="d-flex align-items-center flex-wrap text-nowrap">
                                        <button type="button"
                                            class="btn btn-primary tealgreen btn-icon-text mb-2 mb-md-0 mx-2">
                                            <a href="{{ route('create-new-user') }}">Create New User</a>
                                        </button>
                                    </div>
                                </div>
                                <div class="Agent_-Listing height30vh">
                                    <div class="table-responsive mt-4">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="">Username</th>
                                                    <th class="">Edit</th>
                                                    <th class="">Access</th>
                                                    <th class="">User Status</th>
                                                    <th class="">First Name</th>
                                                    <th class="">Last Name</th>
                                                    <th class="">Created</th>
                                                    <th class="">Last Login Date</th>
                                                    <th class="">Last IP</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($UserData as $sc)
                                                    <tr>
                                                        <td colspan="" class=""><a href="#"
                                                                class="">{{ $sc->username }}</a></td>
                                                        <td colspan="" class="edit-color Learn-More4" data-bs-toggle="modal"
                                                            data-bs-target="#ChangePassword1" data-userpassword-id="{{ $sc->id }}"><img
                                                                src="{{ asset('admin/Super-Admin/assets/icons/pencil.png') }}"
                                                                class="img-fluid">

                                                        </td>
                                                        <td colspan="" class="edit-color Learn-More"
                                                            data-bs-toggle="modal" data-bs-target="#SecuredLock"
                                                            data-user-id="{{ $sc->id }}"><img
                                                                src="{{ asset('admin/Super-Admin/assets/icons/secured-lock.png') }}"
                                                                class="img-fluid"></td>
                                                        <td colspan="" class="">
                                                            @if ($sc->status == 1)
                                                                Active
                                                            @elseif($sc->status == 0)
                                                                Inactive
                                                            @endif
                                                        </td>
                                                        <td colspan="" class="">{{ $sc->first_name }}</td>
                                                        <td colspan="" class="">{{ $sc->last_name }}</td>
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
                                                        <td colspan="" class="">150.107.190.4</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            @php
                                $data = $UserData;
                            @endphp

                        </div>

                    </div>
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="dataTableExample_info" role="status" aria-live="polite">
                            Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of {{ $data->total() }}
                            entries
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
<div class="modal fade" id="ChangePassword1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content Change-Password">
            <div class="modal-header">
                <h4 class="modal-title  text-white" id="staticBackdropLabel">Change Password</h4>
                <button type="button" class="btn-close extra-hight" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="changePasswordForm" action="{{route('update-user-password')}}" id="updatePassword1">
                    @csrf
                    <div>
                        <div>
                            <div class="default-flash-message m-b-10">
                                <div class="flash__wrapper"></div>
                            </div>
                            <div  class="m-b-35" id="usernamePlaceholder"></div>
                            <div class="form-group m-b-35">
                                <label for="NewPassword">New Password</label>
                                <input type="password" placeholder="Enter new password" name="new_password"
                                    class="form-control" aria-required="true" aria-invalid="false">
                                {{-- <div id="newpasswordError" class="invalid-feedback" style="display: none;"></div> --}}
                                <div class="new_password invalid-feedback"></div>
                            </div>
                            <input type="hidden" id="useraccessid" name="id">
                            <div class="form-group m-b-35">
                                <label for="RepeatPassword" class="form-label text-white">Confirm Password</label>
                                <input type="password" placeholder="Enter confirm password" name="confirm_password"
                                    id="confirmPassword" class="form-control" aria-required="true"
                                    aria-invalid="false">
                                {{-- <div id="confirmpasswordError" class="invalid-feedback" style="display: none;"></div> --}}
                                <div class="confirm_password invalid-feedback"></div>

                            </div>
                            <div class="form-group m-b-35">
                                <label for="RepeatPassword" class="form-label text-white">Admin Password</label>
                                <input type="password" placeholder="Enter admin password" name="agent_password"
                                    id="confirmPassword" class="form-control" aria-required="true"
                                    aria-invalid="false">
                                {{-- <div id="confirmpasswordError" class="invalid-feedback" style="display: none;"></div> --}}
                                <div class="agent_password invalid-feedback" id="usererrorMessage"></div>

                            </div>

                            <div class="form-group text-right">
                                <button type="button" onclick="submitFormdata1()"
                                    class="btn btn-success Confirm_other">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>

                <script>
                     $(document).on('click', '.Learn-More4', function() {
                var adminId = $(this).data('userpassword-id');
                // alert(adminId);
                loadAdminData(adminId);
            });

            function loadAdminData(adminId) {
                // alert(adminId);

                $.ajax({
                    url: "{{ route('get-user-data') }}",
                    data: {
                        id: adminId
                    }, // Fixed the syntax error here
                    type: 'GET',
                    success: function(data) {
                        console.log(data);
                        $('#ChangePassword1').modal('show');
                        $('#useraccessid').val(data.id);
                      
                        $('#usernamePlaceholder').text(data.username);
                    },
                    error: function(error) {
                        console.log('Error fetching user data:', error);
                    }
                });
            }
                    </script>
                <script>
                    function submitFormdata1() {
                        event.preventDefault(); // Prevent the default form submission

                        var formData = $('#updatePassword1').serialize();

                        $.ajax({
                            type: 'GET',
                            url: $('#updatePassword1').attr('action'),
                            data: formData,
                            dataType: 'json',
                            success: function(response) {
                                $('.invalid-feedback').text('');
                                if (response.message) {
                                    $('#ChangePassword1').modal('hide');
                                    $('#useradminsuccess').text(response.message).show().addClass('errorActive').delay(3000)
                                        .fadeOut('slow');
                                }
                            },
                            error: function(error) {
                                // Clear any previous error messages
                                $('.invalid-feedback').text('');
                                document.getElementById('errorMessage').innerHTML = '';

                                if (error.status === 422) { // Assuming 422 is the HTTP status for validation errors
                                    var errors = error.responseJSON.errors;

                                    // Display errors in their corresponding fields
                                    $.each(errors, function(key, value) {
                                        // For each error, display it in the corresponding error field
                                        var errorField = $('[name="' + key + '"]').siblings('.invalid-feedback');
                                        errorField.text(value[0]).show();
                                    });
                                } else if (error.status === 401) {
                                    var errorMessage = error.responseJSON.error;
                                    document.getElementById('usererrorMessage').innerHTML = errorMessage;
                                } else {
                                    // Handle other error cases if needed
                                }
                            }
                        });
                    }

                </script>
                
            </div>
        </div>
    </div>
</div>

    <!-- Access rights for user Password Modal -->
    <div class="modal fade" id="SecuredLock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            @include('agent.user_access')
        </div>

    </div>
    </div>

    <script>
        function listitem(sectionId) {
            // alert('hello');
            var section = document.getElementById(sectionId);
            if (section.style.display === 'block') {
                section.style.display = 'none';
            } else {
                section.style.display = 'block';
            }
        }
    </script>
    <script>
        function loadadminDetails(adminId) {
            $.ajax({
                type: 'GET',
                url: '{{ route('user-details') }}',
                data: {
                    id: adminId
                },
                success: function(data) {
                    document.getElementById("userdatadisplay").innerHTML = data;
                    $('#SecuredLock').modal('show');

                },
                error: function(error) {
                    console.error('Error fetching admin details:', error);
                }
            });
        }

        // Add click event listener to "Learn More" buttons
        $(document).on('click', '.Learn-More', function() {
            var adminId = $(this).data('user-id');

            //  alert(adminId);
            loadadminDetails(adminId);
        });
    </script>
    @include('layouts.footer')

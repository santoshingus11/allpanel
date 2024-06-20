<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 new_menu_color">
            <li class="nav-item dropdown d-flex ml-40">
                <div id="date"></div>
                <div id="time"></div>
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    (+05:30)
                </a>
                <ul class="dropdown-menu menu_design_1 bg-white">
                    <li><a class="dropdown-item text-black" href="#">System time - (GMT +00:00)</a></li>
                    <li><a class="dropdown-item text-black" href="#">Your computer time - (GMT +05:30)</a></li>
                    <li><a class="dropdown-item text-black" href="#">India Standard time - (GMT +05:30)</a></li>
                </ul>
            </li>
        </ul>

        <div id="message_bet_limit"></div>

        @if (Session::has('success'))
            <div class="flash-message p6">
                {{ Session::get('success') }}
            </div>
        @endif
        <div id="successMessage" class="center_error_message_all_section relative">
        </div>

        @if (session('error'))
            <div class="flash__wrapper">
                <div role="alert" aria-live="polite" id="errorFlashMessage" aria-atomic="true"
                    class="error flash__message relative">
                    {{ session('error') }}
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    setTimeout(function() {
                        $(".flash__wrapper").fadeOut("slow");
                    }, 3000); // 3000 milliseconds = 3 seconds (adjust as needed)
                });
            </script>
        @endif
        @if (session('success'))
            <div class="flash__wrapper">
                <div role="alert" aria-live="polite" id="successFlashMessage" aria-atomic="true"
                    class="error flash__message relative">
                    {{ session('success') }}
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    setTimeout(function() {
                        $(".flash__wrapper").fadeOut("slow");
                    }, 3000);
                });
            </script>
        @endif
        @php
            $role = Auth::guard('agent')->user()->username;
            $lastlogin = Auth::guard('agent')->user()->last_login;
        @endphp
        <ul class="navbar-nav w-100">
            <li class="Logged mt-4 px-5">
                <p>Logged in as {{ $role }}</p>
                <p class="last-login">Last logged in:
                    <span>{{ \Carbon\Carbon::parse($lastlogin)->format('d/m/Y H:i') }}</span></p>
            </li>
            <li class="nav-item dropdown mobile_view-code">
                <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="settings"></i>
                    Settings
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                    <div class="p-1">
                        <ul class="bg-white p-0 Change-Password">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#ChangePassword"
                                    class="text-black">Change Password</a></li>
                            <li><a href="#" class="text-black">Security</a></li>
                        </ul>

                    </div>
                </div>
            </li>
            <li class="nav-item mobile_view-code">
                <a href="{{ route('admin-logout') }}" class="text-body ms-0 text-white">
                    <i class="icon-md" data-feather="log-out"></i>
                    <span>LogOut</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Change Password Modal -->
<div class="modal fade" id="ChangePassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content Change-Password">
            <div class="modal-header">
                <h4 class="modal-title  text-white" id="staticBackdropLabel">Change Password</h4>
                <button type="button" class="btn-close extra-hight" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="changePasswordForm" action="{{ route('update-password') }}" id="updatePassword">
                    @csrf
                    <div>
                        <div>
                            <div class="default-flash-message m-b-10">
                                <div class="flash__wrapper"></div>
                            </div>

                            <div class="form-group m-b-20">
                                <label for="OldPassword" class="form-label  text-white">Old Password</label>
                                <input type="password" placeholder="Enter old password" name="old_password"
                                    id="oldPassword" class="form-control" aria-required="true" aria-invalid="false">
                                {{-- <div id="oldpasswordError" class="invalid-feedback" style="display: none;"></div> --}}
                                <div class="old_password invalid-feedback" id="errorMessage"></div>

                            </div>
                            <div class="form-group m-b-35">
                                <label for="NewPassword" class="form-label  text-white">New Password</label>
                                <input type="password" placeholder="Enter new password" name="new_password"
                                    id="newPassword" class="form-control" aria-required="true" aria-invalid="false">
                                {{-- <div id="newpasswordError" class="invalid-feedback" style="display: none;"></div> --}}
                                <div class="new_password invalid-feedback"></div>
                            </div>
                            <div class="form-group m-b-35">
                                <label for="RepeatPassword" class="form-label text-white">Repeat Password</label>
                                <input type="password" placeholder="Enter confirm password" name="confirm_password"
                                    id="confirmPassword" class="form-control" aria-required="true"
                                    aria-invalid="false">
                                {{-- <div id="confirmpasswordError" class="invalid-feedback" style="display: none;"></div> --}}
                                <div class="confirm_password invalid-feedback"></div>

                            </div>

                            <div class="form-group text-right">
                                <button type="button" onclick="submitFormdata()"
                                    class="btn btn-success Confirm_other">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>


                <script>
                    function submitFormdata() {
                        event.preventDefault(); // Prevent the default form submission

                        var formData = $('#updatePassword').serialize();

                        $.ajax({
                            type: 'GET',
                            url: $('#updatePassword').attr('action'),
                            data: formData,
                            dataType: 'json',
                            success: function(response) {
                                $('.invalid-feedback').text('');
                                if (response.message) {
                                    $('#ChangePassword').modal('hide');
                                    $('#successMessage').text(response.message).show().addClass('errorActive').delay(3000)
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
                                    document.getElementById('errorMessage').innerHTML = errorMessage;
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

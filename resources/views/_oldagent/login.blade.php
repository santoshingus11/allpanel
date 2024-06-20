<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">
  @include('layouts.header-url')
  <style>

</style>
</head>
<body>
  @php
  $userrole=Auth::guard('web')->user();
  //  return $userrole;
  // dd($userrole->role_id);
@endphp
  <div class="main-wrapper admin-login">
    <div class="page-wrapper full-page">
      <div class="page-content d-flex align-items-center justify-content-center">
        <div class="row w-100 mx-0 auth-page">
          <div class="col-md-3 col-xl-3 mx-auto">
            <div class="card login-bg">
              <div class="auth-form-wrapper px-5 py-5">
                <a href="" class="noble-ui-logo logo-light d-block mb-2"><img src="{{asset('admin/assets/img/logo.png')}}" style="height: 75px;"></a>
                <form class="forms-sample" id="loginForm">
                  @csrf
                  <div class="flash__wrapper">
                    <div role="alert" aria-live="polite" id="usernameError" aria-atomic="true"
                        class="error flash__message relative">
                        <div class="flash__message-content">
                       
                    </div>
                </div>
                  <div class="mb-3">
                    <label for="userEmail" class="form-label mb-0">Enter Username:</label>
                    <input type="text" class="form-controls" id="username"name="username" placeholder="Enter Login Id" >
                  </div>
                  <div class="mb-3">
                    <label for="userPassword" class="form-label mb-0">Enter Password:</label>
                    <input type="password" class="form-controls" id="password" name="password" autocomplete="current-password" placeholder="Enter Password" >
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
                  </div>
                  <div class="recaptchaTerms mt-3">This site is protected by reCAPTCHA and the Google
                    <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and
                    <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.
                  </div>

                  <div class="form-group text-center"><label class="w-100 mt-4 mb-2">Best Viewed In:</label> <img src="{{asset('admin/assets/icons/chrome.png')}}"> <img src="{{asset('admin/assets/icons/firefox.png')}}"> <img src="{{asset('admin/assets/icons/ie.png')}}"></div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="modal fade" id="loginexampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content Change-Password login_wid">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="text-white">Underage gambling is prohibited. Please confirm if you are 18 years old and above as of today.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger Exit_red" data-bs-dismiss="modal">Exit</button>
          <button type="button" class="btn btn-success Confirm_other">Confirm</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      // Intercept form submission
      // $('#usernameError').hide();
      $('#loginForm').submit(function(event) {
        event.preventDefault(); // Prevent the form from submitting the traditional way
        $('#usernameError').text('');
        // Perform form validation here
        var username = $('#username').val();
        var password = $('#password').val();
  
        // Example validation: Check if username and password are not empty
        if (username.trim() === '' && password.trim() === '') {
                    showFlashMessage('Please fill Username and Password');
                    return;
                }
                // Check if username and password are empty
                if (username.trim() === '') {
                    showFlashMessage('The Username field is required');
                    return;
                }
    
                if (password.trim() === '') {
                    showFlashMessage('The Password field is required');
                    return;
                }
    
                // Display the modal if the form is valid
                $('#loginexampleModal').modal('show');
            });
  
      // Handle modal confirmation button click
      $('#loginexampleModal .btn-success').click(function() {
        // Perform further actions upon confirmation if needed
  
        // Submit form data to the 'admin/login' route using AJAX
        var formData = $('#loginForm').serialize();
        // console.log(formData);
       
        $.ajax({
          type: 'POST',
          url: '{{ route('admin_submit') }}', // Using the 'login_submit' route within the 'admin' group
          data: formData,
          success: function(response) {
                          if (response.success) {
                              // Redirect on success
                              window.location.href = response.redirect;
                          } else if (response.message) {
                              // Handle failure, show error message in flash
                              showFlashMessage(response.message);
      
                              // Set a separate timeout for incorrect login attempts
                              setTimeout(function() {
                                  $('#usernameError').removeClass('flash__wrapper').hide();
                              }, 3000); // Adjust the timeout as needed for incorrect attempts
                          }
                      },
                      error: function(error) {
                          // Handle the AJAX error
                          console.error(error);
                          alert('An error occurred. Please try again.');
  
                        
                      }
                  });
      
        // Close the modal
        $('#loginexampleModal').modal('hide');
      });
      function showFlashMessage(message) {
                // Set flash message content
                $('#usernameError').text(message);
    
                // Show the flash message
                $('#usernameError').show().addClass('flash__wrapper');
    
                // Set a timeout to hide the flash message after 3 seconds
                setTimeout(function() {
                    $('#usernameError').removeClass('flash__wrapper').hide();
                }, 2000);
            }
      
    });
  </script>
  
  @include('layouts.footer')
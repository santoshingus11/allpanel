<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('layouts.client-header-url')

    <style>
        .flash__message {
            padding: 12px;
            background-color: aliceblue;
            border-radius: 4px;
        }
        .flash__message.error {
    color: #fff;
    background-color: #a94442;
    border-color: #a94442;
    text-align: center;
    font-size: larger;
}
.social_connect[_ngcontent-enx-c43], .social_connect[_ngcontent-enx-c43] a[_ngcontent-enx-c43] {
    display: flex;
    justify-content: center;
}

.social_connect[_ngcontent-enx-c43] {
    text-align: center;
    border-top: 1px dashed var(--theme1-bg);
    margin-top: 10px;
    padding-top: 5px;
}
.slide-right[_ngcontent-enx-c43] {
    animation: moveRight 0.7s cubic-bezier(.785,.135,.15,.86) infinite alternate both;
}
@keyframes moveRight {
    0% {
      left: 0; /* Start position */
    }
    100% {
      left: calc(20% - 50px); /* End position */
    }
  }
.handicon[_ngcontent-enx-c43] {
    width: 30px !important;
    position: absolute;
    left: 30px;
}
img {
    vertical-align: middle;
    border-style: none;
}
.social_connect[_ngcontent-enx-c43] a[_ngcontent-enx-c43] {
    text-decoration: none;
    align-items: center;
    margin: 0 3%;
    color: #000;
}
.social_connect[_ngcontent-enx-c43] a[_ngcontent-enx-c43] svg[_ngcontent-enx-c43] {
    height: 30px;
    width: 30px;
}

svg {
    overflow: hidden;
    vertical-align: middle;
}
.social_connect[_ngcontent-enx-c43] a[_ngcontent-enx-c43] span[_ngcontent-enx-c43] {
    font-size: 14px;
    font-weight: 900;
    margin-left: 5px;
    color: #000;
    text-transform: uppercase;
}
.social_connect[_ngcontent-enx-c43], .social_connect[_ngcontent-enx-c43] a[_ngcontent-enx-c43] {
    display: flex;
    justify-content: center;
}
a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
}
#login {
    width: 100%;
    background-image: linear-gradient(#000, #8000ff) !important;
    display: flex;
    justify-content: center;
    /* align-items: center; */
    height: 100vh;
}
html, body {
    /*background: none !important;*/
    background-image: linear-gradient(var(--theme1-bg), var(--theme2-bg)) !important;
}
.login_footer{
    display: none !important;
}
.fa-user, .fa-key{
    margin-left: -20px;
}
@media only screen and (max-width: 600px) {
    .hideForMob {
      display: none !important;
    }
  }
    </style>
</head>

<body>
    <div class="fullpage-loader">
        <div class="fullpage-loader__logo">
            <img src="{{ asset('frontend/assets/images/logo-login.png') }}" />
        </div>
    </div>

    <section id="login" class="">
        <div class="container">
            <div class="login_logo">
                    <img src="{{ asset('frontend/assets/images/logo-login.png') }}" alt="logo" class="img-fluid" />
                <div class="card mt-2" style="background: white">
                    <form class="mt-2" id="loginForm">

                     <h1 class="text-center hideForMob">LOGIN <i class="fas fa-hand-point-down"></i></h1>
                        @csrf
                        {{-- <div class="form-group position-relative"> <!-- Add a container for positioning --> --}}
                        <div class="flash__wrapper">
                            <div role="alert" aria-live="polite" id="usernameError" aria-atomic="true"
                                class="error flash__message relative">
                                <div class="flash__message-content">
                                <button type="button" class="flash__close-button" data-dismiss="alert"
                                    aria-label="alertClose">
                                    <span aria-hidden="true">×</span>
                                </button></div>
                            </div>
                        </div>
                        <div class="form-group d-flex form-inline align-items-center">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" >
                        <i class="fa fa-user"></i>
                        </div>
                        {{-- <div id="usernameError" class="error-popup"></div> <!-- Container for error popup --> --}}
                        {{-- </div> --}}
                        <div class="form-group d-flex form-inline align-items-center">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                         <i class="fa fa-key"></i>
                        </div>

                        <div class="buttons">
                            <button type="submit" class="login-button">Login <i class="ms-2 fa fa-sign-in-alt"></i></button>
                        </div>
                    </form>
                    <form class="" style="margin-top:-10px" id="loginForm">

                        <div class="buttons">
                            <button type="submit" class="login-button">Login with Demo ID<i class="ms-2 fa fa-sign-in-alt"></i></button>
                        </div>
                    </form>
                    <p class="m-b-0 text-black"><small class="recaptchaTerms">This site is protected by reCAPTCHA and the
                            Google
                            <a href="#">Privacy Policy</a> and
                            <a href="#">Terms of Service</a> apply.
                        </small></p>
                        <a class="mb-2 mt-3 text-center" href="gold365info@gmail.com">gold365info@gmail.com</a>
                        <hr style="border-top: 2px dotted black">
                        <div _ngcontent-enx-c43="" class="social_connect"><img _ngcontent-enx-c43="" src="https://cdn-icons-png.flaticon.com/512/2201/2201767.png" class="slide-right handicon"><a _ngcontent-enx-c43="" target="_blank" href="https://instagram.com/gold365official"><svg _ngcontent-enx-c43="" width="40px" height="40px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle _ngcontent-enx-c43="" cx="24" cy="24" r="20" fill="#C13584"></circle><path _ngcontent-enx-c43="" d="M24 14.1622C27.2041 14.1622 27.5837 14.1744 28.849 14.2321C30.019 14.2855 30.6544 14.481 31.0773 14.6453C31.6374 14.863 32.0371 15.123 32.457 15.5429C32.877 15.9629 33.137 16.3626 33.3547 16.9227C33.519 17.3456 33.7145 17.981 33.7679 19.1509C33.8256 20.4163 33.8378 20.7958 33.8378 23.9999C33.8378 27.2041 33.8256 27.5836 33.7679 28.849C33.7145 30.019 33.519 30.6543 33.3547 31.0772C33.137 31.6373 32.877 32.0371 32.4571 32.457C32.0371 32.8769 31.6374 33.1369 31.0773 33.3546C30.6544 33.519 30.019 33.7144 28.849 33.7678C27.5839 33.8255 27.2044 33.8378 24 33.8378C20.7956 33.8378 20.4162 33.8255 19.151 33.7678C17.981 33.7144 17.3456 33.519 16.9227 33.3546C16.3626 33.1369 15.9629 32.8769 15.543 32.457C15.1231 32.0371 14.863 31.6373 14.6453 31.0772C14.481 30.6543 14.2855 30.019 14.2321 28.849C14.1744 27.5836 14.1622 27.2041 14.1622 23.9999C14.1622 20.7958 14.1744 20.4163 14.2321 19.1509C14.2855 17.981 14.481 17.3456 14.6453 16.9227C14.863 16.3626 15.123 15.9629 15.543 15.543C15.9629 15.123 16.3626 14.863 16.9227 14.6453C17.3456 14.481 17.981 14.2855 19.151 14.2321C20.4163 14.1744 20.7959 14.1622 24 14.1622ZM24 12C20.741 12 20.3323 12.0138 19.0524 12.0722C17.7752 12.1305 16.9028 12.3333 16.1395 12.63C15.3504 12.9366 14.6812 13.3469 14.0141 14.0141C13.3469 14.6812 12.9366 15.3504 12.63 16.1395C12.3333 16.9028 12.1305 17.7751 12.0722 19.0524C12.0138 20.3323 12 20.741 12 23.9999C12 27.259 12.0138 27.6676 12.0722 28.9475C12.1305 30.2248 12.3333 31.0971 12.63 31.8604C12.9366 32.6495 13.3469 33.3187 14.0141 33.9859C14.6812 34.653 15.3504 35.0633 16.1395 35.3699C16.9028 35.6666 17.7752 35.8694 19.0524 35.9277C20.3323 35.9861 20.741 35.9999 24 35.9999C27.259 35.9999 27.6677 35.9861 28.9476 35.9277C30.2248 35.8694 31.0972 35.6666 31.8605 35.3699C32.6496 35.0633 33.3188 34.653 33.9859 33.9859C34.653 33.3187 35.0634 32.6495 35.37 31.8604C35.6667 31.0971 35.8695 30.2248 35.9278 28.9475C35.9862 27.6676 36 27.259 36 23.9999C36 20.741 35.9862 20.3323 35.9278 19.0524C35.8695 17.7751 35.6667 16.9028 35.37 16.1395C35.0634 15.3504 34.653 14.6812 33.9859 14.0141C33.3188 13.3469 32.6496 12.9366 31.8605 12.63C31.0972 12.3333 30.2248 12.1305 28.9476 12.0722C27.6677 12.0138 27.259 12 24 12Z" fill="white"></path><path _ngcontent-enx-c43="" d="M24.0059 17.8433C20.6026 17.8433 17.8438 20.6021 17.8438 24.0054C17.8438 27.4087 20.6026 30.1675 24.0059 30.1675C27.4092 30.1675 30.1681 27.4087 30.1681 24.0054C30.1681 20.6021 27.4092 17.8433 24.0059 17.8433ZM24.0059 28.0054C21.7968 28.0054 20.0059 26.2145 20.0059 24.0054C20.0059 21.7963 21.7968 20.0054 24.0059 20.0054C26.2151 20.0054 28.0059 21.7963 28.0059 24.0054C28.0059 26.2145 26.2151 28.0054 24.0059 28.0054Z" fill="white"></path><path _ngcontent-enx-c43="" d="M31.8507 17.5963C31.8507 18.3915 31.206 19.0363 30.4107 19.0363C29.6154 19.0363 28.9707 18.3915 28.9707 17.5963C28.9707 16.801 29.6154 16.1562 30.4107 16.1562C31.206 16.1562 31.8507 16.801 31.8507 17.5963Z" fill="white"></path></svg><span _ngcontent-enx-c43="">Instagram</span></a><a _ngcontent-enx-c43="" target="_blank" href="https://telegram.me/Gold365Tg"><svg _ngcontent-enx-c43="" width="40px" height="40px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><circle _ngcontent-enx-c43="" cx="16" cy="16" r="14" fill="url(#paint0_linear_87_7225)"></circle><path _ngcontent-enx-c43="" d="M22.9866 10.2088C23.1112 9.40332 22.3454 8.76755 21.6292 9.082L7.36482 15.3448C6.85123 15.5703 6.8888 16.3483 7.42147 16.5179L10.3631 17.4547C10.9246 17.6335 11.5325 17.541 12.0228 17.2023L18.655 12.6203C18.855 12.4821 19.073 12.7665 18.9021 12.9426L14.1281 17.8646C13.665 18.3421 13.7569 19.1512 14.314 19.5005L19.659 22.8523C20.2585 23.2282 21.0297 22.8506 21.1418 22.1261L22.9866 10.2088Z" fill="white"></path><defs _ngcontent-enx-c43=""><linearGradient _ngcontent-enx-c43="" id="paint0_linear_87_7225" x1="16" y1="2" x2="16" y2="30" gradientUnits="userSpaceOnUse"><stop _ngcontent-enx-c43="" stop-color="#37BBFE"></stop><stop _ngcontent-enx-c43="" offset="1" stop-color="#007DBB"></stop></linearGradient></defs></svg><span _ngcontent-enx-c43="">Telegram</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- login Modal -->
    <div class="modal fade" id="loginexampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content login_wid">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Please Confirm</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <P>Underage gambling is prohibited. Please confirm if you are 18 years old and above as of today</P>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn Exit_red" data-bs-dismiss="modal">Exit</button>
                    <button type="button" class="btn btn-primary Confirm_other">Confirm</button>
                </div>
            </div>
        </div>
    </div>


    

    <script>
        $(document).ready(function() {
            // Hide the error message initially
            $('#usernameError').hide();
    
            // Intercept form submission
            $('#loginForm').submit(function(event) {
                event.preventDefault(); // Prevent the form from submitting the traditional way
    
                // Reset the previous error message
                $('#usernameError').text('');
    
                // Perform form validation here
                var username = $('#username').val();
                var password = $('#password').val();
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
            $('#loginexampleModal .btn-primary').click(function() {
                // Get form data
                var formData = $('#loginForm').serialize();
    
                // Submit form data to the 'login_submit' route using AJAX
                $.ajax({
                    type: 'POST',
                    url: '{{ route('login_submit') }}',
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
    
    
    


    @include('layouts.client-footer')

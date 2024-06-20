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
</head>
<body>

  <div class="main-wrapper admin-login">
    <div class="page-wrapper full-page">
      <div class="page-content d-flex align-items-center justify-content-center">
        <div class="row w-100 mx-0 auth-page">
          <div class="col-md-3 col-xl-3 mx-auto">
            <div class="card login-bg">
              <div class="auth-form-wrapper px-5 py-5">
                <a href="index.php" class="noble-ui-logo logo-light d-block mb-2"><img src="{{asset('admin/Super-Admin/assets/img/logo.png')}}"></a>
                <form class="forms-sample" id="loginForm">
                  @csrf
                  <div class="mb-3">
                    <label for="userEmail" class="form-label mb-0">Enter Username:</label>
                    <input type="email" class="form-controls" id="username" placeholder="Enter Login Id" required>
                  </div>
                  <div class="mb-3">
                    <label for="userPassword" class="form-label mb-0">Enter Password:</label>
                    <input type="password" class="form-controls" id="password" autocomplete="current-password" placeholder="Enter Password" required>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
                  </div>
                  <div class="recaptchaTerms mt-3">This site is protected by reCAPTCHA and the Google
                    <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and
                    <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.
                  </div>

                  <div class="form-group text-center"><label class="w-100 mt-4 mb-2">Best Viewed In:</label> <img src="{{asset('admin/Super-Admin/assets/icons/chrome.png')}}"> <img src="{{asset('admin/Super-Admin/assets/icons/firefox.png')}}"> <img src="{{asset('admin/Super-Admin/assets/icons/ie.png')}}"></div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  @include('layouts.footer')
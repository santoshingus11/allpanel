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


  <div class="main-wrapper Dashboard-bg admin-bg">
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
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                  <h4 class=" mb-0">Create New User</h4>
                </div>
                <div class="Information red-brown py-4 px-4">
                <form id="adminuser" action="{{route('admin-user-create')}}" method="post">
                  @csrf
                    <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                      <h4 class="font-16 mb-0">Information</h4>
                    </div>
                    <div class="forms-sample row" >
                      {{-- <div class="mb-3 col-lg-6">
                        <label for="Client ID" class="form-label">Login Id</label>
                        <input type="text" class="form-control" id="" placeholder="Username" name="username"  required>
                      </div> --}}
                      <div class="mb-3 col-lg-6">
                        <label for="Client ID" class="form-label">Username</label>
                        <input type="text" class="form-control" id="" placeholder="Username" name="username" >
                        <div class="username invalid-feedback" id="username_errorMessage"></div>
                      </div>
                      
                      <div class="mb-3 col-lg-6">
                        <label for="Client ID" class="form-label">Status</label>
                        <select class="form-select" id="userstatus" name="status">
                          <option selected="" disabled="">Select Level</option>
                          <option value="1">Active</option>
                          <option value="0">InActive</option>
                        </select>
                        <div class="status invalid-feedback"></div>
                      </div>
                      <div class="mb-3 col-lg-6">
                        <label for="Full Name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="" placeholder="First Name" name="first_name" >
                        <div class="first_name invalid-feedback"></div>
                      </div>
                      <div class="mb-3 col-lg-6">
                        <label for="Full Name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="last_name" >
                        <div class="last_name invalid-feedback"></div>
                      </div>
                      <div class="mb-3 col-lg-6">
                        <label for="Full Name" class="form-label">Password *</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" >
                        <div class="password invalid-feedback"></div>
                      </div>
                      <div class="mb-3 col-lg-6">
                        <label for="Full Name" class="form-label">Repeat Password *</label>
                        <input type="text" class="form-control" id="RepeatPassword" placeholder="Password" name="confirm_password" >
                        <div class="confirm_password invalid-feedback"></div>
                      </div>
                      {{-- <div class="mb-3 col-lg-6">
                        <div class="d-flex justify-content-center mt-4">
                          <button type="button" class="btn btn-primary tealgreen btn-icon-text mb-2 px-5 py-2 mb-md-0 mx-2">
                            <a href="#">Copy Password</a>
                          </button>
                        </div>
                      </div> --}}
                    </div>
                  
                  </div>
                  <div class="form-group text-right mt-5 mb-5">
                    <button type="button" class="btn btn-success Confirm_other"><a href="{{route('user-listing')}}">Cancel </a></button>
                    <button type="button" onclick="submitadminuser()" class="btn btn-success Confirm_other">Create</button>
                  </div>
                </form>
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
    function submitadminuser() {
      event.preventDefault();
     var formData = $('#adminuser').serialize();

     $.ajax({
         type: 'POST',
         url: $('#adminuser').attr('action'),
         data: formData,
         dataType: 'json',
         success: function (response) {
          if (response.success) {
          // alert(response.message);
          window.location.href = '{{ route("user-listing") }}?success=' +(response.success);
          // document.getElementById('useradminsuccess').style.display = 'block';
          // document.getElementById('useradminsuccess').innerHTML = response.success;
         
          }
      },
      error: function (error) {
          $('.invalid-feedback').text('');
         // document.getElementById('errorMessage').innerHTML = '';

          if (error.status === 422) { // Assuming 422 is the HTTP status for validation errors
              var errors = error.responseJSON.errors;

              // Display errors in their corresponding fields
              $.each(errors, function (key, value) {
                  // For each error, display it in the corresponding error field
                  var errorField = $('[name="' + key + '"]').siblings('.invalid-feedback');
                
                  errorField.text(value[0]).show();
                  
                 
              });
          } else if (error.status === 401 || error.status === 402) {
            
            document.getElementById('username_errorMessage').style.display = 'block';
              var errorMessage = error.responseJSON.error;
              // alert(error.responseJSON.error);
              document.getElementById('username_errorMessage').innerHTML = error.responseJSON.error;
          }  
      }
  });
}
</script>
  @include('layouts.footer')
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
<style>
     .flash__message {
        padding: 12px;
        background-color: aliceblue;
        border-radius: 4px;
    }
    .flash__message.error {
    color: #fff;
    background-color: #982626;
    text-align: center;
    font-size: 14px;
    padding: 6px 16px;
    position: absolute;
    top: 23px;
    border-radius: 0px;
    left: 46%;
    transform: translateX(-50%);
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    display: block;
}
</style>
<body>
    <div class="main-wrapper Dashboard-bg">
        <!-- partial:partials/_sidebar.html -->
        <div class="left-side-bar">@include('layouts.left-side-bar')</div>
        <div class="page-wrapper bg-none">
            <!-- partial:partials/_navbar.html -->
            <div class="top-header-section">@include('layouts.header')</div>
            <!-- partial -->
            <div class="page-content">
             
             
                <div class="createagent main-bg py-4 px-4 ">
                  <form class="forms-sample" action="{{route('new-agent-submit')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="Information Information-bg px-4 py-4 w-100 ">
                                <div class="card-body">
                                    <h5 class="border-bottom mb-3 pb-1">Information</h5>
                                    
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">Login Name</label>
                                            <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" id="username"
                                                autocomplete="off" placeholder="Login Id" value="{{ old('username') }}">
                                              @error('username')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password"
                                                placeholder="Password" value="{{ old('password') }}">
                                                @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <div id="passwordError" class="invalid-feedback" style="display: none;"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Repeat
                                                Password</label>
                                            <input type="password" class="form-control  @error('confirm_password') is-invalid @enderror" id="passwordrepeat"
                                                autocomplete="off" name="confirm_password" placeholder="Confirm Password" value="{{ old('confirm_password') }}">
                                                @error('confirm_password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label w-100">User Status</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    id="inlineRadio1" name="status" value="1"  checked>
                                                <label class="form-check-label" for="inlineRadio1">ACTIVE</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" 
                                                    id="inlineRadio2" name="status" value="0">
                                                <label class="form-check-label" for="inlineRadio2">INACTIVE</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Bet Status</label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" 
                                                        id="gender27" name="bet_status" value="1" checked>
                                                    <label class="form-check-label" for="gender27">
                                                        ACTIVE
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" 
                                                        id="gender2"  name="bet_status" value="0" >
                                                    <label class="form-check-label" for="gender2">
                                                        INACTIVE
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                  
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="Information Information-bg px-4 py-4 w-100">
                                <div class="card-body">
                                    <h5 class="border-bottom mb-3 pb-1">Credit</h5>
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">Credit Limit</label>
                                            <input type="text" class="form-control @error('credit_limit') is-invalid @enderror" id="creditlimit" name="credit_limit"
                                                value="0" autocomplete="off" placeholder="Credit Limit" value="{{ old('credit_limit') }}">
                                                @error('credit_limit')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">User Rate</label>
                                            <input type="number" class="form-control @error('user_rate') is-invalid @enderror" id="userrate" name="user_rate"
                                                value="1" autocomplete="off" placeholder="User Rate" value="{{ old('user_rate') }}">
                                                @error('credit_limit')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="Information Information-bg px-4 py-4 w-100">
                                <div class="card-body">
                                    <h5 class="border-bottom mb-3 pb-1">Account Detais</h5>
                                      <div class="mb-3">
                                          <label for="expouser" class="form-label">Select Level</label>
                                          <select class="form-select @error('level') is-invalid @enderror" id="expouser" name="level" onchange="toggleExpouserLimit()">
                                              <option selected="" disabled="">Select Level</option>
                                              <option>User</option>
                                              @if(Auth::guard('agent')->user()->role_id==3)
                                              <option>Agent</option>
                                              @endif
                                          </select>
                                          @error('level')
                                          <div class="invalid-feedback">{{ $message }}</div>
                                      @enderror
                                      </div>
                                      <div class="mb-3" id="expouserlimit">
                                          <label for="expouserlimit" class="form-label">Exposure Limit</label>
                                          <input type="number" class="form-control  @error('exposure_limit') is-invalid @enderror" id="exposure_limit" name="exposure_limit" value="{{ old('exposure_limit') }}" autocomplete="off" placeholder="Expouser Limit">
                                          @error('exposure_limit')
                                          <div class="invalid-feedback">{{ $message }}</div>
                                      @enderror
                                        </div>
                                 
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="Information Information-bg px-4 py-4 w-100">
                                <div class="card-body">
                                    <h5 class="border-bottom mb-3 pb-1">Notes</h5>
                                        <div class="mb-3">
                                            <label for="exampleFormControlSelect1" class="form-label">Message</label>
                                            <textarea class="form-control  @error('message') is-invalid @enderror" value="{{ old('message') }}" id="message" name="message" rows="5"></textarea>
                                            @error('message')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                </div>
                            </div>
                        </div>
                   
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="Information px-4 py-4 right">
                                <div class="serch-filter">
                                    <div class="input-group mb-3">
                                        <label class="Search-By_User Name">
                                            @if (Auth::guard('agent')->user()->role_id == 3)
                                                Super-Master password
                                            @elseif(Auth::guard('agent')->user()->role_id == 4)
                                                Master password
                                            @endif
                                        </label>
                                        <input class="form-control event-search mx-2  @error('agent_password') is-invalid @enderror" type="password"
                                           name="agent_password" placeholder="Password" value="{{ old('agent_password') }}">
                                             @error('agent_password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="button" class="btn green btn-icon-text mb-2 mb-md-0" onclick="cancelForm()">
                                      Cancel
                                  </button>
                                    <button type="submit"
                                        class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0" id="submitBtn">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
    <script>
      function toggleExpouserLimit() {
          var selectedOption = document.getElementById("expouser");
          var expouserLimitContainer = document.getElementById("expouserlimit");
  
          // If "Agent" is selected, hide the Expouser Limit input
          if (selectedOption.value === "Agent") {
              expouserLimitContainer.style.display = "none";
          } else {
              expouserLimitContainer.style.display = "block";
          }
      }
      function cancelForm() {
        // Add any additional logic for cancelling if needed
        window.location.href = "{{ route('agent-listing') }}";
    }
  $(document).ready(function() {
    var passwordInput = $('#password');
    var passwordError = $('#passwordError');
    var submitButton = $('#submitBtn'); // Add an ID to your submit button
    
    passwordInput.on('input', function() {
   

        var password = $(this).val();

        var lengthError = password.length < 8 || password.length > 15;
        var lowercaseError = !/[a-z]/.test(password);
        var uppercaseError = !/[A-Z]/.test(password);
        var numberError = !/\d/.test(password);

        if (lengthError) {
            passwordError.text('Password must be between 8 and 15 characters').show();
        } else if (lowercaseError) {
            passwordError.text('Password must contain at least 1 lowercase letter').show();
        } else if (uppercaseError) {
            passwordError.text('Password must contain at least 1 uppercase letter').show();
        } else if (numberError) {
            passwordError.text('Password must contain at least 1 number').show();
        } else {
            passwordError.hide();
        }
        // Disable submit button if any error exists
        submitButton.prop('disabled', lengthError || lowercaseError || uppercaseError || numberError);
    });
});
  </script>
    @include('layouts.footer')

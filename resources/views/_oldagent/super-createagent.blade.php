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
        <form class="forms-sample" action="{{route('admin-add-submit')}}" method="post" id="adminsubmit">
          @csrf
          <div class="createagent main-bg py-4 px-4">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="Information Information-bg px-4 py-4 w-100">
                  <div class="card-body">
                    
                      <h5 class="border-bottom mb-3 pb-1">Information</h5>
                      <div class="invalid-feedback"  id="username_errorMessage"></div>
                      <label for="exampleInputUsername1 w-100" class="form-label">Login ID</label>
                      <div class="mb-3 d-flex Information_user-p justify-content-between align-items-center">
                        <span class="User_Information_Name" id="result">34149-</span>
                        <input type="number" class="form-control" value="0" id="input1" oninput="updateResult()" autocomplete="off" placeholder="Login Id">
                        <input type="number" class="form-control" value="0" id="input2" oninput="updateResult()" autocomplete="off" placeholder="Login Id">
                        <input type="number" class="form-control" value="0" id="input3" oninput="updateResult()" autocomplete="off" placeholder="Login Id">
                        <input type="number" class="form-control" value="2" id="input4" oninput="updateResult()" autocomplete="off" placeholder="Login Id">
                        <input type="hidden" name="login_id" id="concatenated_values">

                    </div>
                  
                      <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Login Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="username" placeholder="Login Name">
                        <div class="username invalid-feedback"></div>
                        
                       
                      </div>
                      <div class="mb-3 relative">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder="Password">
                        {{-- <a href="javascript:void(0);" class="pass_reload"><i data-feather="rotate-cw"></i></a> --}}
                        <div class="password invalid-feedback"></div>
                      </div>
                      
                      {{-- <div id="passwordError" class="invalid-feedback" style="display: none;"></div> --}}
                      <div class="mb-3 relative">
                        <label for="exampleInputEmail1" class="form-label">Repeat Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="confirm_password" placeholder="Password">
                        {{-- <a href="javascript:void(0);" class="pass_reload"><i data-feather="rotate-cw"></i></a> --}}
                        <div class="confirm_password invalid-feedback"></div>
                      </div>
                      
                      {{-- <div class="form-group mb-3"><button type="button" class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0 w-100">Copy password</button></div> --}}
                      <div class="mb-3">
                        <label class="form-label">User Status</label>
                        <div>
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="status" id="gender1" value="1" checked>
                            <label class="form-check-label" for="gender1">
                              ACTIVE
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="status" value="0" id="gender2">
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
                              <form class="forms-sample">
                                <div class="">
                                  <label for="exampleInputUsername1" class="form-label">Credit Limit</label>
                                  <input type="text" class="form-control" id="exampleInputUsername1" name ="credit_limit" value="" autocomplete="off" placeholder="Credit Limit">
                                  <div class="credit_limit invalid-feedback"></div>
                                  <div class="mb-3 mt-2">
                                    >= 0
                                    <= 995000 </div>
                                  </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                          <div class="Information Information-bg px-4 py-4 w-100">
                            <div class="card-body">
                              <h5 class="border-bottom mb-3 pb-1">Position Taking</h5>
                              
                                <div class="mb-3">
                                  <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="gender2">
                                    <label class="form-check-label" for="gender2">
                                      Default checkbox
                                    </label>
                                  </div>
                                </div>
                                <div class="row row new_member_wrap_sport_list align-items-center">
                                  <div class="col-lg-5 col-md-12 col-sm-12">
                                    <div class="Sport-Sport mb-3">
                                      <p class="fw-600">Sport</p>
                                    </div>
                                  </div>
                                  <div class="col-lg-7 col-md-12 col-sm-12">
                                    <div class="Sport-Sport mb-3">
                                      <p class="fw-600">Agent PT (%)</p>
                                    </div>
                                  </div>
                                  <div class="mb-3 d-flex align-items-center">
                                    <div class="col-lg-5 col-md-12 col-sm-12">
                                      <div class="form-group">
                                        <p class="fw-600">Cricket</p>
                                      </div>
                                    </div>
                                    <div class="col-lg-7 col-md-12 col-sm-12">
                                      <div class="form-group">
                                        <div class="Username_codes d-flex justify-content-between align-items-center">
                                          <input formcontrolname="cricket_partnership" type="number" name="cricket" class="form-control ng-valid ng-dirty ng-touched w-200">
                                          
                                          <span>&lt;= 0</span>
                                         
                                        </div>
                                        <div class="cricket invalid-feedback"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mb-3 d-flex align-items-center">
                                    <div class="col-lg-5 col-md-12 col-sm-12">
                                      <div class="form-group">
                                        <p class="fw-600">Football</p>
                                      </div>
                                    </div>
                                    <div class="col-lg-7 col-md-12 col-sm-12">
                                      <div class="form-group">
                                        <div class="Username_codes d-flex justify-content-between align-items-center">
                                          <input formcontrolname="cricket_partnership" type="number" name="football" class="form-control ng-valid ng-dirty ng-touched w-200">
                                         
                                          <span>&lt;= 0</span>
                                          
                                        </div>
                                        <div class="football invalid-feedback"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mb-3 d-flex align-items-center">
                                    <div class="col-lg-5 col-md-12 col-sm-12">
                                      <div class="form-group">
                                        <p class="fw-600">Tennis</p>
                                      </div>
                                    </div>
                                    <div class="col-lg-7 col-md-12 col-sm-12">
                                      <div class="form-group">
                                        <div class="Username_codes d-flex justify-content-between align-items-center">
                                          <input formcontrolname="cricket_partnership" type="number" name="tennis" class="form-control ng-valid ng-dirty ng-touched w-200">
                                          
                                          <span>&lt;= 0</span>
                                          <div class="tennis invalid-feedback"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mb-3 d-flex align-items-center">
                                    <div class="col-lg-5 col-md-12 col-sm-12">
                                      <div class="form-group">
                                        <p class="fw-600">Horse Racing</p>
                                      </div>
                                    </div>
                                    <div class="col-lg-7 col-md-12 col-sm-12">
                                      <div class="form-group">
                                        <div class="Username_codes d-flex justify-content-between align-items-center">
                                          <input formcontrolname="cricket_partnership" type="number" name="horse_racing" class="form-control ng-valid ng-dirty ng-touched w-200">
                                          
                                          <span>&lt;= 0</span>
                                          <div class="horse_racing invalid-feedback"></div>
                                        </div>
                                        
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mb-3 d-flex align-items-center">
                                    <div class="col-lg-5 col-md-12 col-sm-12">
                                      <div class="form-group">
                                        <p class="fw-600">Greyhound <br>Racing</p>
                                      </div>
                                    </div>
                                    <div class="col-lg-7 col-md-12 col-sm-12">
                                      <div class="form-group">
                                        <div class="Username_codes d-flex justify-content-between align-items-center">
                                          <input formcontrolname="cricket_partnership" type="number" name="greyhound_racing" class="form-control ng-valid ng-dirty ng-touched w-200">
                                          <div class="greyhound_racing invalid-feedback"></div>
                                          <span>&lt;= 0</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mb-3 d-flex align-items-center">
                                    <div class="col-lg-5 col-md-12 col-sm-12">
                                      <div class="form-group">
                                        <p class="fw-600">Casino</p>
                                      </div>
                                    </div>
                                    <div class="col-lg-7 col-md-12 col-sm-12">
                                      <div class="form-group">
                                        <div class="Username_codes d-flex justify-content-between align-items-center">
                                          <input formcontrolname="cricket_partnership" type="number" name="casino" class="form-control ng-valid ng-dirty ng-touched w-200">
                                          <div class="casino invalid-feedback"></div>
                                          <span>&lt;= 0</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mb-3 d-flex align-items-center">
                                    <div class="col-lg-5 col-md-12 col-sm-12">
                                      <div class="form-group">
                                        <p class="fw-600">Other</p>
                                      </div>
                                    </div>
                                    <div class="col-lg-7 col-md-12 col-sm-12">
                                      <div class="form-group">
                                        <div class="Username_codes d-flex justify-content-between align-items-center">
                                          <input formcontrolname="cricket_partnership" type="number" name="other" class="form-control ng-valid ng-dirty ng-touched w-200">
                                          <div class="other invalid-feedback"></div>
                                          <span>&lt;= 0</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                          <div class="Information Information-bg px-4 py-4 w-100">
                            <div class="card-body">
                              <h5 class="border-bottom mb-3 pb-1">Notes</h5>
                            
                                <div class="mb-3">
                                  <label for="exampleFormControlSelect1" class="form-label">Message</label>
                                  <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
                                  <div class="message invalid-feedback"></div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="Information px-4 py-4 right">
                            <div class="serch-filter">
                              <button type="button" action="{{route('super-master-listing')}}"class="btn green btn-icon-text mb-2 mb-md-0" onclick="cancelForm()">
                                Cancel
                              </button>
                              <button type="button"  onclick="submitadmin()" class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">
                                Create
                              </button>
                            </div>
                          </div>
                        </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  @include('layouts.footer')
  <script>
      function submitadmin() {
        event.preventDefault();
       var formData = $('#adminsubmit').serialize();

       $.ajax({
           type: 'POST',
           url: $('#adminsubmit').attr('action'),
           data: formData,
           dataType: 'json',
           success: function (response) {
            if (response.success) {
            // alert(response.message);
            window.location.href =  '{{ route("super-master-listing") }}?success=' +(response.success);
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
  <script>
    function updateResult() {
        // Get the values of each input field
        const input1 = document.getElementById('input1').value;
        const input2 = document.getElementById('input2').value;
        const input3 = document.getElementById('input3').value;
        const input4 = document.getElementById('input4').value;

        // Concatenate the values without a separator
        const result = "34149" + input1 + input2 + input3 + input4;

        // Update the result and set the concatenated values in the hidden input field for submission
        // document.getElementById('result').textContent = result;
        // alert(result);
        document.getElementById('concatenated_values').value = result;
    }
</script>
  <script>
     function cancelForm() {
        // Add any additional logic for cancelling if needed
        window.location.href = "{{ route('super-master-listing') }}";
    }
  </script>
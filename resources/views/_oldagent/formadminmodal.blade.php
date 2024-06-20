{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
@if(Auth::guard('agent')->user()->role_id==1 || Auth::guard('agent')->user()->role_id==2)

<form id="updateForm" class="row g-3 py-3 px-3" action="{{ route('admin-update') }}" method="post">
  @endif
<form id="updateForm" class="row g-3 py-3 px-3" action="{{ route('agent-update') }}" method="post">
  @csrf
  
    @if(Auth::guard('agent')->user()->role_id==1 || Auth::guard('agent')->user()->role_id==2)
   
      <div class="Information_user-panel">
        <div class="user-panel-left"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user userMember"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
          <div class="user-panel-info">
           
            <div class="text-level">Member</div>
            <div>{{$admindata->login_id}}</div>
          </div>
        </div>
      </div>

      <h5 class="mb-4">Login Name:- <span class="user-name_demoag5">{{$admindata->username}}</span></h5>
      <div class="row">
        <input type="hidden" name="username" value="{{$admindata->username}}">
        
        <div class="col-md-8">
          <label for="password" class="form-label">Password</label>
          <input type="text" class="form-control" id="password" name="password">
          <input type="hidden" name="id" value="{{$admindata->id}}">
          <div class="password invalid-feedback"></div>
          
        </div>
        <div class="col-md-4">
          <div class="btn_Download">
            <label for="password" class="form-label" style="display: block;width: 100%;margin-bottom: 30px;"></label>
            <button type="button" onclick="generatePassword()" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
              Generate password
            </button>
          </div>
        </div>
      </div>
      <h5 class="mt-4">Status</h5>
      <div class="col-12">
        <div class="mb-4">
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="status" id="radioInline"  @if (isset($admindata) && $admindata->status==1) {{ 'checked' }} @endif value="1">
            <label class="form-check-label" for="radioInline">
              Active
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="status" id="radioInline1"  @if (isset($admindata) && $admindata->status==0) {{ 'checked' }} @endif value="0">
            <label class="form-check-label" for="radioInline1">
              Inactive
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="status" id="radioInline1"  @if (isset($admindata) && $admindata->status==2) {{ 'checked' }} @endif value="2">
            <label class="form-check-label" for="radioInline1">
              Suspended
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="status" id="radioInline1"  @if (isset($admindata) && $admindata->status==3) {{ 'checked' }} @endif value="3">
            <label class="form-check-label" for="radioInline1">
              Close
            </label>
          </div>
        </div>
      </div>
      <hr />
      <h5>Credit</h5>
      <div class="col-md-6">
        <label for="CreditLimit" class="form-label">Credit Limit</label>
        <input type="number" class="form-control" placeholder="Credit Limit" name="credit_limit" id="CreditLimit" value="{{$admindata->credit_limit ?? ''}}" readonly>
        <span class="d-inline-block v-m">
          &gt;=0.00
          <br> &lt;= 1995000
        </span>
      </div>
      <div class="col-6">
        <label for="inputAddress" class="form-label">Payment Threshold</label>
        <input type="number" class="form-control" id="paymentthreshold" placeholder="New Payment Threshold" name="payment_threshold" value="{{$admindata->payment_threshold ?? ''}}" >
      </div>
      <div class="col-6">
        <label for="inputAddress" class="form-label">Member Max Credit</label>
        <input type="number" class="form-control" id="inputAddress" placeholder="New Credit Limit" name="new_credit_limit">
        <span class="d-inline-block v-m">
          &gt;=0.00
          <br> &lt;= 1000000
        </span>
      </div>
      <hr class="mt-5" />
      <div class="BetSettings mb-2">
        <h5>Bet Settings</h5>
        <div class="form-check form-check-inline mt-3">
          <input type="radio" class="form-check-input" name="radioInline" id="selectall">
          <label class="form-check-label" for="radioInline">
            Same for All Sports
          </label>
        </div>
        <table class="table mb-5" id="inputall">
          <thead style="border: #333d79;">
            <tr>
              <th scope="col" class="wid-30"></th>
              <th scope="col">Min Bet</th>
              <th scope="col">Max Bet</th>
              <th scope="col">Max Market</th>
            </tr>
          </thead>
           @php
            $betdata = DB::table('bet_settings')->where('admin_id', $admindata->id)->get();
            $founddata= false;
            @endphp
    <tbody class="vertical-align-baseline" id="inputdata">
        <tr>
            <td class="font-w-600">Cricket</td>
            @php
            $founddata= false;
            @endphp
            @foreach($betdata as $crt)
            @if($crt->sport_name == 'cricket')
          <td><input type="number" class="form-control" name="bet_settings[cricket][min_bet]" id="inputEmail3" value="{{$crt->min_bet}}"></td>
          <td><input type="number" class="form-control" name="bet_settings[cricket][max_bet]" id="inputEmail3" value="{{$crt->max_bet}}"></td>
          <td><input type="number" class="form-control" name="bet_settings[cricket][max_market]" id="inputEmail3" value="{{$crt->max_market}}"></td>
          @php
          $founddata = true;
          @endphp
          @endif
          @endforeach
          @if(!$founddata)
            <td><input type="number" class="form-control" name="bet_settings[cricket][min_bet]" id="inputEmail3" value=""></td>
            <td><input type="number" class="form-control" name="bet_settings[cricket][max_bet]" id="inputEmail3" value=""></td>
            <td><input type="number" class="form-control" name="bet_settings[cricket][max_market]" id="inputEmail3" value=""></td>
        @endif
       
            
          
          </tr>

            <tr>
              <td class="font-w-600">Fancy Markets</td>
              @php
              $founddata= false;
              @endphp
              @foreach($betdata as $st)
             
              @if($st->sport_name === 'fancy_market')
              <td><input type="number" class="form-control" name="bet_settings[fancy_market][min_bet]" id="inputEmail3" value="{{$st->min_bet}}"></td>
              <td><input type="number" class="form-control" name="bet_settings[fancy_market][max_bet]" id="inputEmail3" value="{{$st->max_bet}}"></td>
              <td><input type="number" class="form-control" name="bet_settings[fancy_market][max_market]" id="inputEmail3" value="{{$st->max_market}}"></td>
              @php
              $founddata = true;
              @endphp
              @endif
              @endforeach
              @if(!$founddata)
              <td><input type="number" class="form-control" name="bet_settings[fancy_market][min_bet]" id="inputEmail3" value=""></td>
              <td><input type="number" class="form-control" name="bet_settings[fancy_market][max_bet]" id="inputEmail3" value=""></td>
              <td><input type="number" class="form-control" name="bet_settings[fancy_market][max_market]" id="inputEmail3" value=""></td>
          @endif 
      </tr>
            <tr>
           
              <td class="font-w-600">Exch Runs</td>
              @php
              $founddata= false;
              @endphp
              @foreach($betdata as $et)
              
                @if($et->sport_name === 'exch_runs')
              <td><input type="number" class="form-control"  name="bet_settings[exch_runs][min_bet]" id="inputEmail3" value="{{$et->min_bet}}"></td>
              <td><input type="number" class="form-control" name="bet_settings[exch_runs][max_bet]" value="{{$et->max_bet}}"></td>
              <td><input type="number" class="form-control" name="bet_settings[exch_runs][max_market]" id="inputEmail3" value="{{$et->max_market}}"></td>
              @php
              $founddata = true;
              @endphp
              @endif
              @endforeach
              @if(!$founddata)
              <td><input type="number" class="form-control"  name="bet_settings[exch_runs][min_bet]" id="inputEmail3"></td>
              <td><input type="number" class="form-control" name="bet_settings[exch_runs][max_bet]"></td>
              <td><input type="number" class="form-control" name="bet_settings[exch_runs][max_market]" id="inputEmail3"></td>
              @endif
            </tr>
            <tr>
              @php
              $founddata= false;
              @endphp
              <td class="font-w-600">Football</td>
              @foreach($betdata as $ft)
             
               @if($ft->sport_name === 'football')
              <td><input type="number" class="form-control" name="bet_settings[football][min_bet]" id="inputEmail3"  value="{{$ft->min_bet}}"></td>
              <td><input type="number" class="form-control" name="bet_settings[football][max_bet]" id="inputEmail3"  value="{{$ft->max_bet}}"></td>
              <td><input type="number" class="form-control" name="bet_settings[football][max_market]" id="inputEmail3"  value="{{$ft->max_market}}"></td>
              @php
              $founddata = true;
              @endphp
              @endif
              @endforeach
              @if(!$founddata)
              <td><input type="number" class="form-control" name="bet_settings[football][min_bet]" id="inputEmail3"></td>
              <td><input type="number" class="form-control" name="bet_settings[football][max_bet]" id="inputEmail3"></td>
              <td><input type="number" class="form-control" name="bet_settings[football][max_market]" id="inputEmail3"></td>
              @endif
            </tr>
            <tr>
              @php
              $founddata= false;
              @endphp
              <td class="font-w-600">Tennis</td>
              @foreach($betdata as $tt)
             
               @if($tt->sport_name === 'tennis')
              <td><input type="number" class="form-control" name="bet_settings[tennis][min_bet]" id="inputEmail3" value="{{$tt->min_bet}}"></td>
              <td><input type="number" class="form-control" name="bet_settings[tennis][max_bet]" id="inputEmail3" value="{{$tt->max_bet}}"></td>
              <td><input type="number" class="form-control" name="bet_settings[tennis][max_market]" id="inputEmail3" value="{{$tt->max_market}}"></td>
              @php
              $founddata = true;
              @endphp
              @endif
              @endforeach
              @if(!$founddata)
              <td><input type="number" class="form-control" name="bet_settings[tennis][min_bet]" id="inputEmail3"></td>
              <td><input type="number" class="form-control" name="bet_settings[tennis][max_bet]" id="inputEmail3"></td>
              <td><input type="number" class="form-control" name="bet_settings[tennis][max_market]" id="inputEmail3"></td>
              @endif
            </tr>
            <tr>
              @php
              $founddata= false;
              @endphp
              <td class="font-w-600">Horse Racing</td>
              @foreach($betdata as $ht)
             
              @if($ht->sport_name === 'horse_racing')
              <td><input type="number" class="form-control" name="bet_settings[horse_racing][min_bet]" id="inputEmail3"  value="{{$ht->min_bet}}"></td>
              <td><input type="number" class="form-control" name="bet_settings[horse_racing][max_bet]" id="inputEmail3"  value="{{$ht->max_bet}}"></td>
              <td><input type="number" class="form-control" name="bet_settings[horse_racing][max_market]" id="inputEmail3"  value="{{$ht->max_market}}"></td>
              @php
              $founddata = true;
              @endphp
              @endif
              @endforeach
              @if(!$founddata)
              <td><input type="number" class="form-control" name="bet_settings[horse_racing][min_bet]" id="inputEmail3"></td>
              <td><input type="number" class="form-control" name="bet_settings[horse_racing][max_bet]" id="inputEmail3"></td>
              <td><input type="number" class="form-control" name="bet_settings[horse_racing][max_market]" id="inputEmail3"></td>
              @endif
            
            </tr>
            <tr>
              @php
              $founddata= false;
              @endphp
              <td class="font-w-600">Greyhound Racing</td>
              @foreach($betdata as $gt)
             
               @if($gt->sport_name === 'greyhound_racing')
              <td><input type="number" class="form-control" name="bet_settings[greyhound_racing][min_bet]" id="inputEmail3" value="{{$gt->min_bet}}"></td>
              <td><input type="number" class="form-control" name="bet_settings[greyhound_racing][max_bet]" id="inputEmail3" value="{{$gt->max_bet}}"></td>
              <td><input type="number" class="form-control" name="bet_settings[greyhound_racing][max_market]" id="inputEmail3" value="{{$gt->max_market}}"></td>
              @php
              $founddata = true;
              @endphp
              @endif
              @endforeach
              @if(!$founddata)
              <td><input type="number" class="form-control" name="bet_settings[greyhound_racing][min_bet]" id="inputEmail3"></td>
              <td><input type="number" class="form-control" name="bet_settings[greyhound_racing][max_bet]" id="inputEmail3"></td>
              <td><input type="number" class="form-control" name="bet_settings[greyhound_racing][max_market]" id="inputEmail3"></td>
              @endif
            </tr>
            <tr>
              @php
              $founddata= false;
              @endphp
              <td class="font-w-600">Other</td>
              @foreach($betdata as $ot)
             
               @if($ot->sport_name === 'other')
              <td><input type="number" class="form-control" name="bet_settings[other][min_bet]" id="inputEmail3" value="{{$ot->min_bet}}"></td>
              <td><input type="number" class="form-control" name="bet_settings[other][max_bet]" id="inputEmail3" value="{{$ot->max_bet}}"></td>
              <td><input type="number" class="form-control" name="bet_settings[other][max_market]" id="inputEmail3" value="{{$ot->max_market}}"></td>
              @php
              $founddata = true;
              @endphp
              @endif
              @endforeach
              @if(!$founddata)
              <td><input type="number" class="form-control" name="bet_settings[other][min_bet]" id="inputEmail3"></td>
              <td><input type="number" class="form-control" name="bet_settings[other][min_bet]" id="inputEmail3"></td>
              <td><input type="number" class="form-control" name="bet_settings[other][max_market]" id="inputEmail3"></td>
              @endif
            </tr>
          </tbody>
        </table>
        <hr class="mb-5" />
        @php
          $pt_data=DB::table('position_taking')->where('admin_id', $admindata->id)->first()
        @endphp
        <h5 class="mt-3">Position Talking</h5>
        <div class="form-check form-check-inline mt-3">
          <input type="radio" class="form-check-input" name="radioInline" id="radioInline">
          <label class="form-check-label" for="radioInline">
            Same for All Sports
          </label>
        </div>
        <table class="table mt-2">
          <thead style="border: #333d79;">
            <tr>
              <th scope="col" class="wid-30">Sports</th>
              <th scope="col">Agent PT(%)</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="vertical-align-baseline" >
            <tr>
              <td class="font-w-600">Cricket</td>
              <td><input type="number" class="form-control" name="cricket" id="inputEmail3" value="{{$pt_data->cricket?? ''}}"></td>
              <td>>= 0 <= 0</td>
            </tr>
            <tr>
              <td class="font-w-600">Football</td>
              <td><input type="number" class="form-control" name="football" id="inputEmail3" value="{{$pt_data->football?? ''}}"></td>
              <td>>= 0 <= 0</td>
            </tr>
            <tr>
              <td class="font-w-600">Tennis</td>
              <td><input type="number" class="form-control" name="tennis" id="inputEmail3" value="{{$pt_data->tennis?? ''}}"></td>
              <td>>= 0 <= 0</td>
            </tr>
            <tr>
              <td class="font-w-600">Horse Racing</td>
              <td><input type="number" class="form-control" name="horse_racing" id="inputEmail3" value="{{$pt_data->horse_racing?? ''}}"></td>
              <td>>= 0 <= 0</td>
            </tr>
            <tr>
              <td class="font-w-600">Greyhound Racing</td>
              <td><input type="number" class="form-control" name="greyhound_racing" id="inputEmail3" value="{{$pt_data->greyhound_racing?? ''}}"></td>
              <td>>= 0 <= 0</td>
            </tr>
            <tr>
              <td class="font-w-600">Casino</td>
              <td><input type="number" class="form-control" name="casino" id="inputEmail3" value="{{$pt_data->casino?? ''}}"></td>
              <td>>= 0 <= 0</td>
            </tr>
            <tr>
              <td class="font-w-600">Other</td>
              <td><input type="number" class="form-control" name="other" id="inputEmail3" value="{{$pt_data->other?? ''}}"></td>
              <td>>= 0 <= 0</td>
            </tr>
          </tbody>
        </table>
      </div>
      <hr>
      <h5 class="mt-3">Notes</h5>
      <div class="col-12 mt-2">
        {{-- <textarea class="form-control" id="Notes" name="message" rows="3" value= "{{$admindata->message ?? ''}}"></textarea> --}}
        
         <input type="text" class="form-control personal-height" name="message" id="inputEmail3" value="{{$admindata->message?? ''}}"></td>
      </div>
      <div class="col-10">
        <label for="inputAddress" class="form-label">Admin Password</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Agent Password" name="agent_password">
        <div class="agent_password invalid-feedback" id="errorMessage"></div>
      </div>

@endif
    @if(Auth::guard('agent')->user()->role_id==3 || Auth::guard('agent')->user()->role_id==4)
      <h5>Username:- <span class="user-name_demoag5">{{$admindata->username}}</span></h5>
      <div class="col-md-12">
        <label for="UserRate" class="form-label">User Rate</label>
        <input type="number" class="form-control" id="UserRate" name="user_rate"  value="{{$admindata->user_rate ?? ''}}">
      </div>
      <input type="hidden" name="username" value="{{$admindata->username}}">
      <input type="hidden" name="id" value="{{$admindata->id}}">
      <h5 class="mt-5">Change Password</h5>
      <div class="col-md-6">
        <label for="ChangePassword" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" name="password" id="newpassword" placeholder="Password"  value="{{ old('password') }}">
        {{-- <div class="password invalid-feedback"></div> --}}
        <div class="password invalid-feedback"></div>

    {{-- <div id="newpasswordError" class="invalid-feedback" style="display: none;"></div> --}}
      </div>
        <div class="col-6">
          <label for="RepeatPassword" class="form-label">Repeat Password</label>
          <input type="password" class="form-control" name="confirm_password" id="RepeatPassword" placeholder="Repeat Password"  value="{{ old('confirm_password') }}">
          <div class="confirm_password invalid-feedback"></div>

        </div>
        <h5 class="mt-5">Change Status</h5>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">User Status</label>
          <div class="mb-4">
            <div class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="status"  id="radioInline"  @if (isset($admindata) && $admindata->status==1) {{ 'checked' }} @endif value="1">
              <label class="form-check-label" for="radioInline">
                Active
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="status" id="radioInline"  @if (isset($admindata) && $admindata->status==0) {{ 'checked' }} @endif  value="0">
              <label class="form-check-label" for="radioInline1">
                Inactive
              </label>
            </div>
          </div>
        </div>
        <div class="col-12 mt-2">
          <label for="inputAddress2" class="form-label">Bet Status</label>
          <div class="mb-4">
            <div class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="bet_status" id="radioInline1" @if (isset($admindata) && $admindata->bet_status==1) {{ 'checked' }} @endif value="1">
              <label class="form-check-label" for="radioInline">
                Active
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="bet_status" id="radioInline1" @if (isset($admindata) && $admindata->bet_status==0) {{ 'checked' }} @endif value="0">
              <label class="form-check-label" for="radioInline1">
                Inactive
              </label>
            </div>
          </div>
        </div>

        <h5>Credit</h5>
        <div class="col-md-6">
          <label for="CreditLimit" class="form-label">Credit Limit</label>
          <input type="number" class="form-control" placeholder="Credit Limit" id="CreditLimit" name="old_credit_limit" value="{{$admindata->credit_limit ?? ''}}" readonly>
        </div>
        <div class="col-md-6">
          <label for="inputAddress" class="form-label">New Credit Limit</label>
          <input type="number" class="form-control" id="inputAddress" name="new_credit_limit" placeholder="New Credit Limit" value="">
        

          <span class="d-inline-block v-m">
            &gt;=0.00
            <br> &lt;= 0.00
          </span>
        </div>
        @if($admindata->level_permission=='User')
        <h5>Exposure</h5>
        <div class="col-md-6">
          <label for="CreditLimit" class="form-label">Exposure</label>
          <input type="number" class="form-control" placeholder="Exposure Limit" id="CreditLimit" value="{{$admindata->exposure_limit ?? ''}}" readonly>
        </div>
        <div class="col-md-6">
          <label for="inputAddress" class="form-label">New Exposure Limit</label>
          <input type="number" class="form-control" id="inputAddress" name="exposure_limit" placeholder="New Credit Limit" value="{{ old('exposure_limit') }}">
          <span class="d-inline-block v-m">
            &gt;=0.00
            <br> &lt;= 0.00
          </span>
        </div>
  @endif
      <h5 class="mt-5">Notes</h5>
      <div class="col-12 mt-2">
        <textarea class="form-control" id="Notes" rows="3" value="{{$admindata->message ?? ''}}"></textarea>
      </div>

      <h5 class="mt-5"> @if(Auth::guard('agent')->user()->role_id == 3)
        Super Master Password
        @elseif(Auth::guard('agent')->user()->role_id == 4)
        Master password
        @endif
      
      </h5>
      <div class="col-md-12">
        
        <input type="password" class="form-control"  name="agent_password" placeholder="Password"  value="{{ old('agent_password') }}">
    
         <div class="agent_password invalid-feedback" id="errorMessage"></div>

      </div>
      @endif
      <div class="modal-footer">
        <div class="d-flex align-items-center flex-wrap text-nowrap">
          <button type="button" data-bs-dismiss="modal" class="btn green  btn-icon-text mb-2 mb-md-0 mx-2">
            Cancel
          </button>
    
          <button type="button" onclick="submitForm()" class="btn btn-primary New-Agent-save btn-icon-text mb-2 mb-md-0">
            Save
        </button>
        </div>
      </div> 
</form>
<script>
  function submitForm() {
       var formData = $('#updateForm').serialize();
       $.ajax({
           type: 'POST',
           url: $('#updateForm').attr('action'),
           data: formData,
           dataType: 'json',
           success: function (response) {
            $('.invalid-feedback').text('');
              document.getElementById('successMessage').innerHTML = response.message;
              $('#successMessage').show().addClass('errorActive').delay(3000).fadeOut('slow');

              $('#staticBackdrop').modal('hide');
          },
          error: function (error) {
              // Clear any previous error messages
              $('.invalid-feedback').text('');
              document.getElementById('errorMessage').innerHTML = '';

              if (error.status === 422) { // Assuming 422 is the HTTP status for validation errors
                  var errors = error.responseJSON.errors;

                  // Display errors in their corresponding fields
                  $.each(errors, function (key, value) {
                      // For each error, display it in the corresponding error field
                      var errorField = $('[name="' + key + '"]').siblings('.invalid-feedback');
                    
                      errorField.text(value[0]).show();
                      
                    
                  });
              } else if (error.status === 401) {
                  var errorMessage = error.responseJSON.error;
                  document.getElementById('errorMessage').innerHTML = errorMessage;
              } else {
                
              }
          }
      });
}
</script>
<script>
 $(document).ready(function() {
  var password =document.getElementById('newpassword').value;

      var password = $(this).val();
     
      var passwordError = $('#newpasswordError');
      if (password.length < 8) {
          passwordError.text('Password must be at least 8 characters').show();
      } else if (password.length > 15) {
          passwordError.text('Password must be at most 15 characters').show();
      } else if (!/[a-z]/.test(password)) {
          passwordError.text('Password must contain at least 1 lowercase letter').show();
      } else if (!/[A-Z]/.test(password)) {
          passwordError.text('Password must contain at least 1 uppercase letter').show();
      } else if (!/\d/.test(password)) {
          passwordError.text('Password must contain at least 1 number').show();
      } else {
          passwordError.hide();
      }
  });

</script>
<script>
  function generatePassword() {
  var length = 8;
  var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
  var password = "";

  // Ensure at least one upper case letter, one lowercase letter, and one number
  var hasUppercase = false;
  var hasLowercase = false;
  var hasNumber = false;

  while (password.length < length || !hasUppercase || !hasLowercase || !hasNumber) {
    var randomIndex = Math.floor(Math.random() * charset.length);
    var randomChar = charset.charAt(randomIndex);

    password += randomChar;

    // Check for character types
    if (/^[A-Z]$/.test(randomChar)) {
      hasUppercase = true;
    } else if (/^[a-z]$/.test(randomChar)) {
      hasLowercase = true;
    } else if (/^\d$/.test(randomChar)) {
      hasNumber = true;
    }

    // Ensure at least one upper case letter, one lowercase letter, and one number
    if (!hasUppercase || !hasLowercase || !hasNumber) {
      password = ""; // Reset the password if it doesn't meet the requirements
    }
  }

  document.getElementById("password").value = password;
}


  // Add an event listener to the "Generate Password" button
  
</script>
<script>
      document.addEventListener('DOMContentLoaded', function() {
    var selectAllRadio = document.getElementById('selectall');
    var inputFields = document.querySelectorAll('#inputdata input');

    selectAllRadio.addEventListener('change', function() {
      if (selectAllRadio.checked) {
        inputFields.forEach(function(input, index) {
          input.addEventListener('input', function() {
            updateSameValues(index);
          });
        });
      } else {
        // Remove event listeners if "Same for All Sports" is not selected
        inputFields.forEach(function(input) {
          input.removeEventListener('input', updateSameValues);
        });
      }
    });

    function updateSameValues(index) {
      var value = inputFields[index].value;
      var column = index % 3; // Assuming each row has 3 columns

      inputFields.forEach(function(input, i) {
        if (i % 3 === column) {
          // Update only the input fields in the same column
          input.value = value;
        }
      });
    }
  });
</script>





<div class="row mb-3">
    @php
    $adminAccess = [];
    if (isset($userdata->admin_access) && $userdata->admin_access != null) {
                        $adminAccessArray = explode(',', $userdata->admin_access);
                        if (!empty($adminAccessArray)) {
                    foreach ($adminAccessArray as $item) {
                        list($key, $value) = explode('=', $item);
                        $adminAccess[$key] = $value;
                    }
                }
            // else {
            //     // Set default values if 'admin_access' is not set or is null
            //     $adminAccess['key'] = '0'; // Set your default value here
            //     // Add more default values if needed
            // }
        }


$userrole = Auth::guard('agent')->user()->role_id;

@endphp


    <!-- Your form with checkboxes, password fields, and other fields -->
    {{-- <form action="{{ route('update-privileges') }}" method="post"> --}}
        
        <form id="useraccessupdate"  action="{{route('update-useraccess')}}" method="post" >
                @csrf
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="market_analysis" value="1" @if(isset($adminAccess['market_analysis']) && $adminAccess['market_analysis'] === '1') checked @endif >
                        Market Analysis
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="client_list" value="1"  @if(isset($adminAccess['client_list']) && $adminAccess['client_list'] === '1') checked @endif>
                        Client List
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="withdraw" value="1"  @if(isset($adminAccess['withdraw']) && $adminAccess['withdraw'] === '1') checked @endif>
                        Withdraw
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="deposit" value="1"  @if(isset($adminAccess['deposit']) && $adminAccess['deposit'] === '1') checked @endif>
                        Deposit
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="user_update" value="1"  @if(isset($adminAccess['user_update']) && $adminAccess['user_update'] === '1') checked @endif>
                        User Update
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="change_password" value="1"  @if(isset($adminAccess['change_password']) && $adminAccess['change_password'] === '1') checked @endif>
                        Change Password
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="bank_list" value="1"  @if(isset($adminAccess['bank_list']) && $adminAccess['bank_list'] === '1') checked @endif>
                        Bank List
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="account_statement" value="1"  @if(isset($adminAccess['account_statement']) && $adminAccess['account_statement'] === '1') checked @endif>
                        Account Statement
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="my_bets" value="1"  @if(isset($adminAccess['my_bets']) && $adminAccess['my_bets'] === '1') checked @endif>
                        My Bets
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="casino_report" value="1"  @if(isset($adminAccess['casino_report']) && $adminAccess['casino_report'] === '1') checked @endif>
                        Casino Report
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="user_logs" value="1"  @if(isset($adminAccess['user_logs']) && $adminAccess['user_logs'] === '1') checked @endif>
                        User Logs
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="game_report" value="1"  @if(isset($adminAccess['game_report']) && $adminAccess['game_report'] === '1') checked @endif>
                        Game Report
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="fraud_report" value="1"  @if(isset($adminAccess['fraud_report']) && $adminAccess['fraud_report'] === '1') checked @endif>
                        Fraud Report
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="casino_list" value="1"  @if(isset($adminAccess['casino_list']) && $adminAccess['casino_list'] === '1') checked @endif>
                        Casino List
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="game_list" value="1"  @if(isset($adminAccess['game_list']) && $adminAccess['game_list'] === '1') checked @endif>
                        Game List
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="credit_reference" value="1"  @if(isset($adminAccess['credit_reference']) && $adminAccess['credit_reference'] === '1') checked @endif>
                        Credit Reference
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="exposure_limit" value="1"  @if(isset($adminAccess['exposure_limit']) && $adminAccess['exposure_limit'] === '1') checked @endif>
                        Exposure Limit
                    </label>
                </div>
                <div class="col">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="user_create" value="1"  @if(isset($adminAccess['user_create']) && $adminAccess['user_create'] === '1') checked @endif>
                        User Create
                    </label>
                </div>
                <input type="hidden" name="id" value="{{$userdata->id}}">
                <br>
                <!-- Add password and confirm password fields -->
               

                <button type="submit"  class="btn btn-primary">Save Changes</button>
             
        </form>
      
    <div>
       
       
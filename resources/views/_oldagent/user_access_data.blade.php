@php
$userrole=$userdata->role_id;
@endphp

<form class="changePasswordForm" action="{{route('admin-user-access')}}" method="post">
    @csrf
        <div class="acess_table_section">
                    @php
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
           
            <div class="row border-bottam">
                <div class="col-lg-6">
                    <h5 class="access-rights-header"><span>Access rights for </span>{{$userdata->username}}</h5>
                </div>
                <div class="col-lg-6">
                    <ul class="p-0 d-flex No_access">
                        <li>No access</li>
                        <li>View only</li>
                        <li>Full access</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="_Management_-- d-flex justify-content-between">
                  
                    <div class="Agency_-Management d-flex">
                        <p>Agency Management
                        <div class="toggle-icon" onclick="toggleVisibility('section1')" style="margin-left:7px;">▶</div></p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="agency_management" id="AgencyManagement"
                                    class="form-check-input" value="0" @if(isset($adminAccess['agency_management']) && $adminAccess['agency_management'] === '0') checked 
                                     @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="agency_management"
                                    id="flexRadioDefault2"  class="form-check-input" value="1" @if(isset($adminAccess['agency_management']) && $adminAccess['agency_management'] === '1') checked  @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="agency_management"
                                    id="flexRadioDefault3" class="form-check-input" value="2" @if(isset($adminAccess['agency_management']) && $adminAccess['agency_management'] === '2') checked  @endif></div>
                        </div>

                    </div>
                    <input type="hidden" id="adminid" name="id" value="{{$userdata->id?? ''}}">
                </div>
                <div class="show_hide" id="section1_content" style="display: none">
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            @if($userrole=='1')
                            <p> Admin Listing</p>
                            @elseif($userrole=='2')
                            <p> Super Master Listing</p> 
                            @endif           
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="admin_listing"
                                    id="adminlisting" class="form-check-input" value="0"  @if(isset($adminAccess['admin_listing']) && $adminAccess['admin_listing'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="admin_listing"
                                        id="adminlisting"  class="form-check-input" value="1"  @if(isset($adminAccess['admin_listing']) && $adminAccess['admin_listing'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="admin_listing"
                                        id="adminlisting"  class="form-check-input" value="2"  @if(isset($adminAccess['admin_listing']) && $adminAccess['admin_listing'] === '2') checked @endif>
                                </div>
                              
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Position Taking Listing</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="position_taking"
                                        id="positiontaking" class="form-check-input" value="0"  @if(isset($adminAccess['position_taking']) && $adminAccess['position_taking'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="position_taking"
                                        id="positiontaking"  class="form-check-input" value="1"  @if(isset($adminAccess['position_taking']) && $adminAccess['position_taking'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="position_taking"
                                        id="positiontaking"  class="form-check-input" value="2"  @if(isset($adminAccess['position_taking']) && $adminAccess['position_taking'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Transfer</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="transfer"
                                        id="transfer" class="form-check-input" value="0" @if(isset($adminAccess['transfer']) && $adminAccess['transfer'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="transfer"
                                        id="transfer"  class="form-check-input" value="1" @if(isset($adminAccess['transfer']) && $adminAccess['transfer'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="transfer"
                                        id="transfer" class="form-check-input" value="2" @if(isset($adminAccess['transfer']) && $adminAccess['transfer'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="_Management_-- d-flex justify-content-between">
                    <div class="Agency_-Management d-flex">
                        <p>Risk Management <div class="toggle-icon"  onclick="toggleVisibility('section2')" style="margin-left:7px;">▶</div></p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="risk_management" id="riskmanagement"
                                    class="form-check-input" value="0"  @if(isset($adminAccess['risk_management']) && $adminAccess['risk_management'] === '0') checked @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="risk_management"
                                    id="riskmanagement"  class="form-check-input" value="1"  @if(isset($adminAccess['risk_management']) && $adminAccess['risk_management'] === '1') checked @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="risk_management"
                                    id="riskmanagement"  class="form-check-input" value="2"  @if(isset($adminAccess['risk_management']) && $adminAccess['risk_management'] === '2') checked @endif></div>
                        </div>

                    </div>
                </div>
                <div class="show_hide" id="section2_content" style="display: none">
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Net Exposure</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="net_exposure"
                                        id="netexposure" class="form-check-input" value="0"  @if(isset($adminAccess['net_exposure']) && $adminAccess['net_exposure'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="net_exposure"
                                        id="netexposure"  class="form-check-input" value="1"  @if(isset($adminAccess['net_exposure']) && $adminAccess['net_exposure'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="net_exposure"
                                        id="netexposure"  class="form-check-input" value="2"  @if(isset($adminAccess['net_exposure']) && $adminAccess['net_exposure'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Bet Ticker</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="bet_ticker"
                                        id="betticker" class="form-check-input" value="0"  @if(isset($adminAccess['bet_ticker']) && $adminAccess['bet_ticker'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="bet_ticker"
                                        id="betticker"  class="form-check-input" value="1"  @if(isset($adminAccess['bet_ticker']) && $adminAccess['bet_ticker'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="bet_ticker"
                                        id="betticker"  class="form-check-input" value="2"  @if(isset($adminAccess['bet_ticker']) && $adminAccess['bet_ticker'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="_Management_-- d-flex justify-content-between">
                    <div class="Agency_-Management d-flex">
                        <p>Reports <div class="toggle-icon"  onclick="toggleVisibility('section3')" style="margin-left:7px;">▶</div></p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="reports" id="reports"
                                    class="form-check-input" value="0" @if(isset($adminAccess['reports']) && $adminAccess['reports'] === '0') checked @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="reports"
                                    id="reports" class="form-check-input" value="1" @if(isset($adminAccess['reports']) && $adminAccess['reports'] === '1') checked @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="reports"
                                    id="reports"  class="form-check-input" value="2" @if(isset($adminAccess['reports']) && $adminAccess['reports'] === '2') checked @endif></div>
                        </div>

                    </div>
                </div>
                <div class="show_hide" id="section3_content" style="display: none">
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>P&L Report By Market</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="p_l_report_market"
                                        id="reportmarket" class="form-check-input" value="0" @if(isset($adminAccess['p_l_report_market']) && $adminAccess['p_l_report_market'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="p_l_report_market"
                                        id="reportmarket" class="form-check-input" value="1" @if(isset($adminAccess['p_l_report_market']) && $adminAccess['p_l_report_market'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="p_l_report_market"
                                        id="reportmarket" class="form-check-input" value="2" @if(isset($adminAccess['p_l_report_market']) && $adminAccess['p_l_report_market'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>P&L Report By Market</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="p_l_report_agent"
                                        id="reportagent" class="form-check-input" value="0" @if(isset($adminAccess['p_l_report_agent']) && $adminAccess['p_l_report_agent'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="p_l_report_agent"
                                        id="reportagent"  class="form-check-input" value="1" @if(isset($adminAccess['p_l_report_agent']) && $adminAccess['p_l_report_agent'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="p_l_report_agent"
                                        id="reportagent" class="form-check-input" value="2" @if(isset($adminAccess['p_l_report_agent']) && $adminAccess['p_l_report_agent'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Casino Report</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="casino_report"
                                        id="casinoreport1" class="form-check-input" value="0" @if(isset($adminAccess['casino_report']) && $adminAccess['casino_report'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="casino_report"
                                        id="casinoreport1" class="form-check-input" value="1" @if(isset($adminAccess['casino_report']) && $adminAccess['casino_report'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="casino_report"
                                        id="casinoreport1"  class="form-check-input" value="2" @if(isset($adminAccess['casino_report']) && $adminAccess['casino_report'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                    @if($userrole=='2')
                        <div class="Agency_-Management">
                            <p>Bet List</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="bet_list"
                                        id="betlist" class="form-check-input" value="0" @if(isset($adminAccess['bet_list']) && $adminAccess['bet_list'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="bet_list"
                                        id="betlist" class="form-check-input" value="1" @if(isset($adminAccess['bet_list']) && $adminAccess['bet_list'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="bet_list"
                                        id="betlist"  class="form-check-input" value="2" @if(isset($adminAccess['bet_list']) && $adminAccess['bet_list'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                        @endif
                    </div>
                    
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Transfer Statement</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="transfer_statement"
                                        id="transferstatement" class="form-check-input" value="0" @if(isset($adminAccess['transfer_statement']) && $adminAccess['transfer_statement'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="transfer_statement"
                                        id="transferstatement"  class="form-check-input" value="1" @if(isset($adminAccess['transfer_statement']) && $adminAccess['transfer_statement'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="transfer_statement"
                                        id="transferstatement" class="form-check-input" value="2" @if(isset($adminAccess['transfer_statement']) && $adminAccess['transfer_statement'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="_Management_-- d-flex justify-content-between">
                    <div class="Agency_-Management d-flex">
                        <p>Account Management <div class="toggle-icon" onclick="toggleVisibility('section5')" style="margin-left:7px;">▶</div></p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="account_management" id="accountmanagement"
                                    class="form-check-input" value="0" @if(isset($adminAccess['account_management']) && $adminAccess['account_management'] === '0') checked @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="account_management"
                                    id="accountmanagement" class="form-check-input" value="1" @if(isset($adminAccess['account_management']) && $adminAccess['account_management'] === '1') checked @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="account_management"
                                    id="accountmanagement" class="form-check-input" value="2" @if(isset($adminAccess['account_management']) && $adminAccess['account_management'] === '2') checked @endif></div>
                        </div>

                    </div>
                </div>
                <div class="show_hide" id="section5_content" style="display: none">
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Balance</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="balance"
                                        id="balance" class="form-check-input" value="0" @if(isset($adminAccess['balance']) && $adminAccess['balance'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="balance"
                                        id="balance" class="form-check-input" value="1" @if(isset($adminAccess['balance']) && $adminAccess['balance'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="balance"
                                        id="balance" class="form-check-input" value="2" @if(isset($adminAccess['balance']) && $adminAccess['balance'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Statement</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="account_statement"
                                        id="statement1" class="form-check-input" value="0" @if(isset($adminAccess['account_statement']) && $adminAccess['account_statement'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="account_statement"
                                        id="statement2"  class="form-check-input" value="1" @if(isset($adminAccess['account_statement']) && $adminAccess['account_statement'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="account_statement"
                                        id="statement3" class="form-check-input" value="2" @if(isset($adminAccess['account_statement']) && $adminAccess['account_statement'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    </div>
                
                <div class="_Management_-- d-flex justify-content-between">
                    <div class="Agency_-Management d-flex">
                        <p>Admin User <div class="toggle-icon" onclick="toggleVisibility('section6')" style="margin-left:7px;">▶</div></p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="admin_user" id="adminuser"
                                    class="form-check-input" value="0" @if(isset($adminAccess['admin_user']) && $adminAccess['admin_user'] === '0') checked @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="admin_user"
                                    id="adminuser"  class="form-check-input" value="1" @if(isset($adminAccess['admin_user']) && $adminAccess['admin_user'] === '1') checked @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="admin_user"
                                    id="adminuser"  class="form-check-input" value="2" @if(isset($adminAccess['admin_user']) && $adminAccess['admin_user'] === '2') checked @endif></div>
                        </div>

                    </div>
                </div>
                <div class="show_hide" id="section6_content" style="display: none">
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>User Listing</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="user_listing"
                                        id="userlisting" class="form-check-input" value="0" @if(isset($adminAccess['user_listing']) && $adminAccess['user_listing'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="user_listing"
                                        id="userlisting" class="form-check-input" value="1" @if(isset($adminAccess['user_listing']) && $adminAccess['user_listing'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="user_listing"
                                        id="userlisting" class="form-check-input" value="2" @if(isset($adminAccess['user_listing']) && $adminAccess['user_listing'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                  
                </div>
                @if($userrole == '1')
                <div class="_Management_-- d-flex justify-content-between">
                    <div class="Agency_-Management d-flex">
                        <p>Bet <div class="toggle-icon" onclick="toggleVisibility('section8')" style="margin-left:7px;">▶</div></p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="bet" id="adminbet2"
                                    class="form-check-input" value="0" @if(isset($adminAccess['bet']) && $adminAccess['bet'] === '0') checked @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="bet"
                                    id="adminbet2"  class="form-check-input" value="1" @if(isset($adminAccess['bet']) && $adminAccess['bet'] === '1') checked @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="bet"
                                    id="adminbet2"  class="form-check-input" value="2" @if(isset($adminAccess['bet']) && $adminAccess['bet'] === '2') checked @endif></div>
                        </div>

                    </div>
                </div>
                <div class="show_hide" id="section8_content" style="display: none">
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Bet List</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="bet_list"
                                        id="betlist" class="form-check-input" value="0"  @if(isset($adminAccess['bet_list']) && $adminAccess['bet_list'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="bet_list"
                                        id="betlist" class="form-check-input" value="1"  @if(isset($adminAccess['bet_list']) && $adminAccess['bet_list'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="bet_list"
                                        id="betlist" class="form-check-input" value="2"  @if(isset($adminAccess['bet_list']) && $adminAccess['bet_list'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Bet List Live </p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="bet_list_live"
                                        id="betlive" class="form-check-input" value="0" @if(isset($adminAccess['bet_list_live']) && $adminAccess['bet_list_live'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="bet_list_live"
                                        id="betlive"  class="form-check-input" value="1" @if(isset($adminAccess['bet_list_live']) && $adminAccess['bet_list_live'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="bet_list_live"
                                        id="betlive" class="form-check-input" value="2" @if(isset($adminAccess['bet_list_live']) && $adminAccess['bet_list_live'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Bet Limit </p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="bet_limit"
                                        id="betlimit" class="form-check-input" value="0" @if(isset($adminAccess['bet_limit']) && $adminAccess['bet_limit'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="bet_limit"
                                        id="betlimit"  class="form-check-input" value="1" @if(isset($adminAccess['bet_limit']) && $adminAccess['bet_limit'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="bet_limit"
                                        id="betlimit" class="form-check-input" value="2" @if(isset($adminAccess['bet_limit']) && $adminAccess['bet_limit'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                 
                    </div>
                </div>
                <div class="_Management_-- d-flex justify-content-between">
                    <div class="Agency_-Management d-flex">
                        <p>Extra <div class="toggle-icon" onclick="toggleVisibility('section9')" style="margin-left:7px;">▶</div></p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="extra" id="adminbet1"
                                    class="form-check-input" value="0" @if(isset($adminAccess['extra']) && $adminAccess['extra'] === '0') checked @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="extra"
                                    id="adminbet1"  class="form-check-input" value="1" @if(isset($adminAccess['extra']) && $adminAccess['extra'] === '1') checked @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="extra"
                                    id="adminbet1"  class="form-check-input" value="2" @if(isset($adminAccess['extra']) && $adminAccess['extra'] === '2') checked @endif></div>
                        </div>

                    </div>
                </div>
                <div class="show_hide" id="section9_content" style="display: none">
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Banner Update</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="banner_update"
                                        id="bannerupdate" class="form-check-input" value="0" @if(isset($adminAccess['banner_update']) && $adminAccess['banner_update'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="banner_update"
                                        id="bannerupdate" class="form-check-input" value="1" @if(isset($adminAccess['banner_update']) && $adminAccess['banner_update'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="banner_update"
                                        id="bannerupdate" class="form-check-input" value="2" @if(isset($adminAccess['banner_update']) && $adminAccess['banner_update'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>News Update </p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="news_update"
                                        id="newsupdate" class="form-check-input" value="0" @if(isset($adminAccess['news_update']) && $adminAccess['news_update'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="news_update"
                                        id="newsupdate"  class="form-check-input" value="1" @if(isset($adminAccess['news_update']) && $adminAccess['news_update'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="news_update"
                                        id="newsupdate" class="form-check-input" value="2" @if(isset($adminAccess['news_update']) && $adminAccess['news_update'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Client Notification </p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="client_notification"
                                        id="clientnotification" class="form-check-input" value="0" @if(isset($adminAccess['client_notification']) && $adminAccess['client_notification'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="client_notification"
                                        id="clientnotification"  class="form-check-input" value="1" @if(isset($adminAccess['client_notification']) && $adminAccess['client_notification'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="client_notification"
                                        id="clientnotification" class="form-check-input" value="2" @if(isset($adminAccess['client_notification']) && $adminAccess['client_notification'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                  
                </div>
                <div class="_Management_-- d-flex justify-content-between">
                    <div class="Agency_-Management d-flex">
                        <p>Player Log and Report <div class="toggle-icon" onclick="toggleVisibility('section10')" style="margin-left:7px;">▶</div></p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="player_log_report" id="playerlogreport"
                                    class="form-check-input" value="0" @if(isset($adminAccess['player_log_report']) && $adminAccess['player_log_report'] === '0') checked @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="player_log_report"
                                    id="playerlogreport"  class="form-check-input" value="1" @if(isset($adminAccess['player_log_report']) && $adminAccess['player_log_report'] === '1') checked @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="player_log_report"
                                    id="playerlogreport"  class="form-check-input" value="2" @if(isset($adminAccess['player_log_report']) && $adminAccess['player_log_report'] === '2') checked @endif></div>
                        </div>

                    </div>
                </div>
                <div class="show_hide" id="section10_content" style="display: none">
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Balance Log</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="balance_log"
                                        id="balancelog" class="form-check-input" value="0" @if(isset($adminAccess['balance_log']) && $adminAccess['balance_log'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="balance_log"
                                        id="balancelog" class="form-check-input" value="1" @if(isset($adminAccess['balance_log']) && $adminAccess['balance_log'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="balance_log"
                                        id="balancelog" class="form-check-input" value="2" @if(isset($adminAccess['balance_log']) && $adminAccess['balance_log'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Player Betting History </p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="betting_history"
                                        id="bettinghistory" class="form-check-input" value="0" @if(isset($adminAccess['betting_history']) && $adminAccess['betting_history'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="betting_history"
                                        id="bettinghistory"  class="form-check-input" value="1" @if(isset($adminAccess['betting_history']) && $adminAccess['betting_history'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="betting_history"
                                        id="bettinghistory" class="form-check-input" value="2" @if(isset($adminAccess['betting_history']) && $adminAccess['betting_history'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Player Profit Loss </p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="player_profit_loss"
                                        id="profitloss" class="form-check-input" value="0" @if(isset($adminAccess['player_profit_loss']) && $adminAccess['player_profit_loss'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="player_profit_loss"
                                        id="profitloss"  class="form-check-input" value="1" @if(isset($adminAccess['player_profit_loss']) && $adminAccess['player_profit_loss'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="player_profit_loss"
                                        id="profitloss" class="form-check-input" value="2" @if(isset($adminAccess['player_profit_loss']) && $adminAccess['player_profit_loss'] === '2') checked @endif>
                                </div>
                            </div>
                       

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Chips Analysis </p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="chips_analysis"
                                        id="chipsanalysis" class="form-check-input" value="0" @if(isset($adminAccess['chips_analysis']) && $adminAccess['chips_analysis'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="chips_analysis"
                                        id="chipsanalysis"  class="form-check-input" value="1" @if(isset($adminAccess['chips_analysis']) && $adminAccess['chips_analysis'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="chips_analysis"
                                        id="chipsanalysis" class="form-check-input" value="2" @if(isset($adminAccess['chips_analysis']) && $adminAccess['chips_analysis'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="_Management_-- d-flex justify-content-between">
                    <div class="Agency_-Management d-flex">
                        <p>Market Setting <div class="toggle-icon" onclick="toggleVisibility('section11')" style="margin-left:7px;">▶</div></p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="main_market_setting" id="marketsetting"
                                    class="form-check-input" value="0"  @if(isset($adminAccess['main_market_setting']) && $adminAccess['main_market_setting'] === '0') checked @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="main_market_setting"
                                    id="marketsetting"  class="form-check-input" value="1"  @if(isset($adminAccess['main_market_setting']) && $adminAccess['main_market_setting'] === '1') checked @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="main_market_setting"
                                    id="marketsetting"  class="form-check-input" value="2"  @if(isset($adminAccess['main_market_setting']) && $adminAccess['main_market_setting'] === '2') checked @endif></div>
                        </div>

                    </div>
                </div>
                <div class="show_hide" id="section11_content" style="display: none">
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Market Settings</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="market_settings"
                                        id="marketsettings" class="form-check-input" value="0" @if(isset($adminAccess['market_settings']) && $adminAccess['market_settings'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="market_settings"
                                        id="marketsettings" class="form-check-input" value="1" @if(isset($adminAccess['market_settings']) && $adminAccess['market_settings'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="market_settings"
                                        id="marketsettings" class="form-check-input" value="2" @if(isset($adminAccess['market_settings']) && $adminAccess['market_settings'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Declare Market </p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="declare_market"
                                        id="DeclareMarket" class="form-check-input" value="0" @if(isset($adminAccess['declare_market']) && $adminAccess['declare_market'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="declare_market"
                                        id="DeclareMarket"  class="form-check-input" value="1" @if(isset($adminAccess['declare_market']) && $adminAccess['declare_market'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="declare_market"
                                        id="DeclareMarket" class="form-check-input" value="2" @if(isset($adminAccess['declare_market']) && $adminAccess['declare_market'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Match Lock </p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="match_lock"
                                        id="matchlock" class="form-check-input" value="0" @if(isset($adminAccess['match_lock']) && $adminAccess['match_lock'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="match_lock"
                                        id="matchlock"  class="form-check-input" value="1" @if(isset($adminAccess['match_lock']) && $adminAccess['match_lock'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="match_lock"
                                        id="matchlock" class="form-check-input" value="2" @if(isset($adminAccess['match_lock']) && $adminAccess['match_lock'] === '2') checked @endif>
                                </div>
                            </div>
                       

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Market Rollback </p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="market_rollback"
                                        id="marketrollback" class="form-check-input" value="0" @if(isset($adminAccess['market_rollback']) && $adminAccess['market_rollback'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="market_rollback"
                                        id="marketrollback"  class="form-check-input" value="1" @if(isset($adminAccess['market_rollback']) && $adminAccess['market_rollback'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="market_rollback"
                                        id="marketrollback" class="form-check-input" value="2" @if(isset($adminAccess['market_rollback']) && $adminAccess['market_rollback'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Online User </p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="online_user"
                                        id="onlineuser" class="form-check-input" value="0" @if(isset($adminAccess['online_user']) && $adminAccess['online_user'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="online_user"
                                        id="onlineuser"  class="form-check-input" value="1" @if(isset($adminAccess['online_user']) && $adminAccess['online_user'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="online_user"
                                        id="onlineuser" class="form-check-input" value="2" @if(isset($adminAccess['online_user']) && $adminAccess['online_user'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Delete Bet History</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="delete_bet_history"
                                        id="deletebethistory" class="form-check-input" value="0" @if(isset($adminAccess['delete_bet_history']) && $adminAccess['delete_bet_history'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="delete_bet_history"
                                        id="deletebethistory"  class="form-check-input" value="1" @if(isset($adminAccess['delete_bet_history']) && $adminAccess['delete_bet_history'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="delete_bet_history"
                                        id="deletebethistory" class="form-check-input" value="2" @if(isset($adminAccess['delete_bet_history']) && $adminAccess['delete_bet_history'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Global Settings</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="global_settings"
                                        id="globalsettings" class="form-check-input" value="0" @if(isset($adminAccess['global_settings']) && $adminAccess['global_settings'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="global_settings"
                                        id="globalsettings"  class="form-check-input" value="1" @if(isset($adminAccess['global_settings']) && $adminAccess['global_settings'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="global_settings"
                                        id="globalsettings" class="form-check-input" value="2" @if(isset($adminAccess['global_settings']) && $adminAccess['global_settings'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Fancy Settings</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="fancy_setting"
                                        id="fancysetting" class="form-check-input" value="0" @if(isset($adminAccess['fancy_setting']) && $adminAccess['fancy_setting'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="fancy_setting"
                                        id="fancysetting"  class="form-check-input" value="1" @if(isset($adminAccess['fancy_setting']) && $adminAccess['fancy_setting'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="fancy_setting"
                                        id="fancysetting" class="form-check-input" value="2" @if(isset($adminAccess['fancy_setting']) && $adminAccess['fancy_setting'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Match Setting</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="match_setting"
                                        id="matchsetting" class="form-check-input" value="0" @if(isset($adminAccess['match_setting']) && $adminAccess['match_setting'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="match_setting"
                                        id="matchsetting"  class="form-check-input" value="1" @if(isset($adminAccess['match_setting']) && $adminAccess['match_setting'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="match_setting"
                                        id="matchsetting" class="form-check-input" value="2" @if(isset($adminAccess['match_setting']) && $adminAccess['match_setting'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Match Limit</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="match_limit"
                                        id="matchlimit" class="form-check-input" value="0" @if(isset($adminAccess['match_limit']) && $adminAccess['match_limit'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="match_limit"
                                        id="matchlimit"  class="form-check-input" value="1" @if(isset($adminAccess['match_limit']) && $adminAccess['match_limit'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="match_limit"
                                        id="matchlimit" class="form-check-input" value="2" @if(isset($adminAccess['match_limit']) && $adminAccess['match_limit'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Suspend All Market</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="suspend_all_market"
                                        id="suspendmarket" class="form-check-input" value="0" @if(isset($adminAccess['suspend_all_market']) && $adminAccess['suspend_all_market'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="suspend_all_market"
                                        id="suspendmarket"  class="form-check-input" value="1" @if(isset($adminAccess['suspend_all_market']) && $adminAccess['suspend_all_market'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="suspend_all_market"
                                        id="suspendmarket" class="form-check-input" value="2" @if(isset($adminAccess['suspend_all_market']) && $adminAccess['suspend_all_market'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Score Card And Tv</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="scorecard_tv"
                                        id="scoretv" class="form-check-input" value="0" @if(isset($adminAccess['scorecard_tv']) && $adminAccess['scorecard_tv'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="scorecard_tv"
                                        id="scoretv"  class="form-check-input" value="1" @if(isset($adminAccess['scorecard_tv']) && $adminAccess['scorecard_tv'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="scorecard_tv"
                                        id="scoretv" class="form-check-input" value="2" @if(isset($adminAccess['scorecard_tv']) && $adminAccess['scorecard_tv'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="_Management_-- d-flex justify-content-between">
                    <div class="Agency_-Management d-flex">
                        <p>My Report <div class="toggle-icon" onclick="toggleVisibility('section12')" style="margin-left:7px;">▶</div></p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="my_report" id="myreport"
                                    class="form-check-input" value="0"  @if(isset($adminAccess['my_report']) && $adminAccess['my_report'] === '0') checked @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="my_report"
                                    id="myreport"  class="form-check-input" value="1"  @if(isset($adminAccess['my_report']) && $adminAccess['my_report'] === '1') checked @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="my_report"
                                    id="myreport"  class="form-check-input" value="2"  @if(isset($adminAccess['my_report']) && $adminAccess['my_report'] === '2') checked @endif></div>
                        </div>

                    </div>
                </div>
                <div class="show_hide" id="section12_content" style="display: none">
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Profit/Loss Report By Downline</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="profit_loss_report_downline"
                                        id="profitlossreport" class="form-check-input" value="0"  @if(isset($adminAccess['profit_loss_report_downline']) && $adminAccess['profit_loss_report_downline'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="profit_loss_report_downline"
                                        id="profitlossreport" class="form-check-input" value="1"  @if(isset($adminAccess['profit_loss_report_downline']) && $adminAccess['profit_loss_report_downline'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="profit_loss_report_downline"
                                        id="profitlossreport" class="form-check-input" value="2"  @if(isset($adminAccess['profit_loss_report_downline']) && $adminAccess['profit_loss_report_downline'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Profit/Loss Report By Market</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="profit_loss_report_market"
                                        id="profitlossreportm" class="form-check-input" value="0"  @if(isset($adminAccess['profit_loss_report_market']) && $adminAccess['profit_loss_report_market'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="profit_loss_report_market"
                                        id="profitlossreportm" class="form-check-input" value="1"  @if(isset($adminAccess['profit_loss_report_market']) && $adminAccess['profit_loss_report_market'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="profit_loss_report_market"
                                        id="profitlossreportm" class="form-check-input" value="2"  @if(isset($adminAccess['profit_loss_report_market']) && $adminAccess['profit_loss_report_market'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                </div>
                <div class="_Management_-- d-flex justify-content-between">
                    <div class="Agency_-Management d-flex">
                        <p>Risk <div class="toggle-icon" onclick="toggleVisibility('section13')" style="margin-left:7px;">▶</div></p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="admin_risk" id="adminrisk"
                                    class="form-check-input" value="0"  @if(isset($adminAccess['admin_risk']) && $adminAccess['admin_risk'] === '0') checked @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="admin_risk"
                                    id="adminrisk"  class="form-check-input" value="1"  @if(isset($adminAccess['admin_risk']) && $adminAccess['admin_risk'] === '1') checked @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="admin_risk"
                                    id="adminrisk"  class="form-check-input" value="2"  @if(isset($adminAccess['admin_risk']) && $adminAccess['admin_risk'] === '2') checked @endif></div>
                        </div>

                    </div>
                </div>
                <div class="show_hide" id="section13_content" style="display: none">
                    <div class="_Management_-- d-flex justify-content-between show_hide---">
                        <div class="Agency_-Management">
                            <p>Risk Management</p>
                        </div>
                        <div class="_--Agency Management">
                            <div class="d-flex----">
                                <div class="form-check"><input type="radio" name="admin_risk_management"
                                        id="admin_riskmanagement" class="form-check-input" value="0" @if(isset($adminAccess['admin_risk_management']) && $adminAccess['admin_risk_management'] === '0') checked @endif></div>
                                <div class="form-check pd-45"><input type="radio" name="admin_risk_management"
                                        id="admin_riskmanagement" class="form-check-input" value="1" @if(isset($adminAccess['admin_risk_management']) && $adminAccess['admin_risk_management'] === '1') checked @endif>
                                </div>
                                <div class="form-check pd-75"><input type="radio" name="admin_risk_management"
                                        id="admin_riskmanagement" class="form-check-input" value="2" @if(isset($adminAccess['admin_risk_management']) && $adminAccess['admin_risk_management'] === '2') checked @endif>
                                </div>
                            </div>

                        </div>
                    </div>
               
                </div>
        
                {{-- <div class="_Management_-- d-flex justify-content-between">
                    <div class="Agency_-Management d-flex">
                        <p>Banking </p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="banking" id="banking"
                                    class="form-check-input" value="0" @if(isset($adminAccess['banking']) && $adminAccess['banking'] === '0') checked @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="banking"
                                    id="banking"  class="form-check-input" value="1" @if(isset($adminAccess['banking']) && $adminAccess['banking'] === '1') checked @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="banking"
                                    id="banking"  class="form-check-input" value="2" @if(isset($adminAccess['banking']) && $adminAccess['banking'] === '2') checked @endif></div>
                        </div>

                    </div>
                </div> --}}
                <div class="_Management_-- d-flex justify-content-between">
                    <div class="Agency_-Management d-flex">
                        <p>Password History </p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="password_history" id="passwordhistory"
                                    class="form-check-input" value="0" @if(isset($adminAccess['password_history']) && $adminAccess['password_history'] === '0') checked @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="password_history"
                                    id="passwordhistory"  class="form-check-input" value="1" @if(isset($adminAccess['password_history']) && $adminAccess['password_history'] === '1') checked @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="password_history"
                                    id="passwordhistory"  class="form-check-input" value="2" @if(isset($adminAccess['password_history']) && $adminAccess['password_history'] === '2') checked @endif></div>
                        </div>

                    </div>
                </div>
                <div class="_Management_-- d-flex justify-content-between">
                    <div class="Agency_-Management d-flex">
                        <p>Commission </p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="commission" id="commission"
                                    class="form-check-input" value="0"  @if(isset($adminAccess['commission']) && $adminAccess['commission'] === '0') checked @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="commission"
                                    id="commission"  class="form-check-input" value="1"  @if(isset($adminAccess['commission']) && $adminAccess['commission'] === '1') checked @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="commission"
                                    id="commission"  class="form-check-input" value="2"  @if(isset($adminAccess['commission']) && $adminAccess['commission'] === '2') checked @endif></div>
                        </div>

                    </div>
                </div>
                <div class="_Management_-- d-flex justify-content-between">
                    <div class="Agency_-Management d-flex">
                        <p>Market Analysis </p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="market_analysis" id="marketanalysis"
                                    class="form-check-input" value="0" @if(isset($adminAccess['market_analysis']) && $adminAccess['market_analysis'] === '0') checked @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="market_analysis"
                                    id="marketanalysis"  class="form-check-input" value="1" @if(isset($adminAccess['market_analysis']) && $adminAccess['market_analysis'] === '1') checked @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="market_analysis"
                                    id="marketanalysis"  class="form-check-input" value="2" @if(isset($adminAccess['market_analysis']) && $adminAccess['market_analysis'] === '2') checked @endif></div>
                        </div>

                    </div>
                </div>
                <div class="_Management_-- d-flex justify-content-between">
                    <div class="Agency_-Management d-flex">
                        <p>Void Markets </p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="void_market" id="voidmarket"
                                    class="form-check-input" value="0" @if(isset($adminAccess['void_market']) && $adminAccess['void_market'] === '0') checked @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="void_market"
                                    id="voidmarket"  class="form-check-input" value="1" @if(isset($adminAccess['void_market']) && $adminAccess['void_market'] === '1') checked @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="void_market"
                                    id="voidmarket"  class="form-check-input" value="2" @if(isset($adminAccess['void_market']) && $adminAccess['void_market'] === '2') checked @endif></div>
                        </div>

                    </div>
                </div>
                <div class="_Management_-- d-flex justify-content-between">
                    <div class="Agency_-Management d-flex">
                        <p>White label </p>
                    </div>
                    <div class="_--Agency Management">
                        <div class="d-flex----">
                            <div class="form-check"><input type="radio" name="white_label" id="whitelabel"
                                    class="form-check-input" value="0" @if(isset($adminAccess['white_label']) && $adminAccess['white_label'] === '0') checked @endif></div>
                            <div class="form-check pd-45"><input type="radio" name="white_label"
                                    id="whitelabel"  class="form-check-input" value="1" @if(isset($adminAccess['white_label']) && $adminAccess['white_label'] === '1') checked @endif></div>
                            <div class="form-check pd-75"><input type="radio" name="white_label"
                                    id="whitelabel"  class="form-check-input" value="2" @if(isset($adminAccess['white_label']) && $adminAccess['white_label'] === '2') checked @endif></div>
                        </div>

                    </div>
                </div>
                @endif
            </div>
            <div class="form-group text-right mt-3 mb-3">
                <button type="submit" class="btn btn-success Confirm_other">Save</button>
            </div>
        </div>
</form>
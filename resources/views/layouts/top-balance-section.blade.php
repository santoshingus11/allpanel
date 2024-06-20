
@php 
$netexposure=QueryHelper::total_netexposure(Auth::guard('agent')->user()->id,Auth::guard('agent')->user()->role_id);
$total_balancedown=QueryHelper::total_balancedown(Auth::guard('agent')->user()->id,Auth::guard('agent')->user()->role_id);
$total_balanceup=QueryHelper::total_balanceup(Auth::guard('agent')->user()->id,Auth::guard('agent')->user()->role_id);
$available_credit=QueryHelper::total_availablecredit(Auth::guard('agent')->user()->id,Auth::guard('agent')->user()->role_id);
@endphp

<div class="Welcome-to_lotus">
  <marquee class="top-bg py-1 px-2 mb-2">
    <p class="font-14">{{QueryHelper::notification('news')}}</p>
  </marquee>
</div>
<div class="d-flex justify-content-between align-items-center flex-wrap mb-3 top-bg px-4">
  <div class="Welcome-to Dashboard">
    <ul class="d-flex justify-content-between Balance_Down">
      <li>Balance Down: <span class="red" >{{$total_balancedown ?? '0.00'}}</span></li>
      <li>Balance Up: <span class="green" >{{$total_balanceup ?? '0.00'}}</span></li>
      <li>Net Exposure: <span @if($netexposure>0) class="green" @else class="red" @endif >{{$netexposure ?? '0.00'}}</span></li>
      <li>Available Credit: <span @if($available_credit>0) class="green" @else class="red" @endif>{{$available_credit ?? '0.00'}}</span></li>
    </ul>
  </div>
  <div class="d-flex align-items-center flex-wrap text-nowrap">
    <div class="on-off-toggle">
      <input class="on-off-toggle__input" type="checkbox" id="bopis" />
      <label for="bopis" class="on-off-toggle__slider"></label>
    </div>
  </div>
</div>

<!-- <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin top-bg px-4"> 
          <div class="Welcome-to Dashboard">
            <ul class="d-flex justify-content-between Balance_Down">
              <li>Balance Down: <span class="red">0.00</span></li>
              <li>Balance Up: <span class="red">0.00</span></li>
              <li>Net Exposure: <span class="red">0.00</span></li>
              <li>Available Credit: <span class="">0.00</span></li>
            </ul>
          </div>
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0">
              Refresh
            </button>
          </div>
        </div>-->
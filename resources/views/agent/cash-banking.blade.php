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
        <div class="row">
          <div class="col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
              <div class="card-body pt-2">
              <form action="{{route('cash-banking')}}" method="post">
                      @csrf
                <div class="d-flex justify-content-between align-items-center pb-2 border-bottom mobile_port_change">
                  <div class="d-inline-flex align-items-center">
                    <h4 class=" mb-0"> Banking</h4>
                  </div>
                   
                    <div class="mb-1">
                      <label for="exampleInputUsername1" class="form-label">User Name</label>
                      <input type="text" name="user_name" class="form-control event-search w-300" id="exampleInputUsername1" autocomplete="off" placeholder="Search By User name or user_id">
                    </div>

                    <div class="mt-4">
                      <button type="submit" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                          <circle cx="11" cy="11" r="8"></circle>
                          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg> Search
                      </button>
                    </div>
                  

                    <div class="d-inline-flex mx-2 mt-4">
                      <div class="serch-filter">
                        <div class="input-group mx-2">
                          <label class="Search-By_User Name">Status</label>
                          <select class="form-select" id="exampleFormControlSelect1" name="status_value" onchange="statuschange(this.value)">
                            <option selected="" value="">Select Level</option>
                            <option _ngcontent-rjl-c23="" value="1">Active</option>
                            <option _ngcontent-rjl-c23="" value="2">Inactive</option>
                            <option _ngcontent-rjl-c23="" value="3">Suspended</option>
                            <option _ngcontent-rjl-c23="" value="4">Closed</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    </form>
                </div>

                <form action="{{route('cash-banking-submit')}}" method="post">
                  @csrf
             <input type="hidden" name="total_agent"  value="{{$cashbanking->count()}}"> 
             <input type="hidden" name="unique_id" id="unique_id"  value="{{uniqid()}}">       

                <div class="function-wrap clearfix px-2 py-2 mt-2">
                  <dl class="banking-head m-0">
                    <h4>Your Balance</h4>
                    <!-- <dd id="yourBalance"><span>PTH</span>50.00</dd> -->
                    <dd id="yourBalance">{{Auth::guard('agent')->user()->balance}}</dd>

                  </dl>
                </div>
                <div class="Pand-l-Statement">
                  <div class="card-body_agent-listing-demoag5">
                    <div class="Agent_-Listing height30vh mt-1">
                      <div class="table-responsives border-bottom">
                        <table class="table table-striped table-bordered fix_mobile_view_design_code">
                          <thead>
                            <tr>
                              <th class="align-C">UID</th>
                              <th class="align-C">Balance</th>
                              <th class="align-C">Available D/W</th>
                              <th class="align-C">Exposure</th>
                              <th class="align-C">Deposit / Withdraw</th>
                              <!-- <th class="align-C">Credit Reference</th>
                              <th class="align-C">Reference P/L</th> -->
                              <th class="align-C">Remark</th>
                              <th class="align-C"><a id="allLog" href="javascript:void(0);" class="btn-send normal_with font-13 no-border"  onclick="openNewWindow()">All Log
                                </a></th>
                            </tr>
                          </thead>
                          <tbody id="new_content">
                           @include('agent.cash-banking-search')
                          </tbody>
                        </table>
                      </div>
                      <div class="Submit_0_Payment mt-4">
                        <div class="submit-wrap" id="settlementBar">
                          <ul class="mobile_port_change-new">
                            <li><a href="javascript:void(0);" class="btn_Clear-All" onclick="clearall()">Clear All
                              </a></li>
                            <li class="submit-payment">
                              <input type="password" placeholder="Password" name="password" style="display: inline">
                              <button type="submit" id="submit_button" href="javascript:void(0);" class="btn-send" disabled>Submit <span id="submitCount">0</span> Payment
                              </button>
                            </li>
                          </ul>
                        </div>
                      </div>
                      @php $data=$cashbanking; @endphp
                      @include('layouts.allpagination')
                    </div>
                  </div>
                </div>

                </form>


              </div>
            </div>
          </div>




        </div>
      </div>
    </div>

    <script>

function clearall(){
    $("input[type='text']").val("");
  }

      /*===================== Deposit / Withdraw	Deposit / Withdraw	===========*/
      var clickCounts = {};

function agentdeposit(val,type,autoid){

  $("#submit_button").removeAttr("disabled") ;

  var btnListDW = document.getElementById("btn_list_DW"+val);
  var fullBtn = document.getElementById("fullBtn"+val);
  if(type == 1){
  if (btnListDW) {
    btnListDW.classList.add("dBtn-select");
    btnListDW.classList.remove("wBtn-select");
    document.getElementById("type"+autoid).innerHTML='<input type="hidden" name="type_'+autoid+'" value="D">';
    fullBtn.classList.add("disable");
  }
  }
  if(type == 2){
  if (btnListDW) {
    btnListDW.classList.add("wBtn-select");
    btnListDW.classList.remove("dBtn-select");
    document.getElementById("type"+autoid).innerHTML='<input type="hidden" name="type_'+autoid+'" value="W">';
    fullBtn.classList.remove("disable"); 
  }
  }

  var unique_id = document.getElementById("unique_id").value;
  
  $.ajax({
    url: '{{ route("update-payment-submit") }}',
    method: 'GET',
    data: { user_id: val, type: type, unique_id: unique_id },
    success: function(data) {
        //alert(data);
        document.getElementById("submitCount").innerHTML = data;
    },
    error: function(jqXHR, textStatus, errorThrown) {
        console.error("AJAX Error:", textStatus, errorThrown);
    }
  });

}
      // var dBtn = document.getElementById("dBtn");
      // var wBtn = document.getElementById("wBtn");

      // dBtn.addEventListener("click", function() {
      //   var btnListDW = document.querySelector(".btn_list-DW");
      //   btnListDW.classList.add("dBtn-select");
      //   btnListDW.classList.remove("wBtn-select");
      // });

      // wBtn.addEventListener("click", function() {
      //   var btnListDW = document.querySelector(".btn_list-DW");
      //   btnListDW.classList.add("wBtn-select");
      //   btnListDW.classList.remove("dBtn-select");
      // });

      // var wBtn = document.getElementById("wBtn");
      // var fullBtn = document.getElementById("fullBtn");

      // wBtn.addEventListener("click", function() {
      //   // Check if the fullBtn element has the 'disable' class
      //   if (fullBtn.classList.contains("disable")) {
      //     // Remove the 'disable' class
      //     fullBtn.classList.remove("disable");
      //   }
      // });

      
function fullamount(id, value) {
    var element = document.querySelector('[name="amount_' + id + '"]');    
    if (element) {
        element.value = value;
        console.log("Updated value: " + element.value);
    } else {
      console.log("Element not found");
    }
}

function statuschange(status_value){
    $.ajax({
      url: '{{route("cash-banking")}}', 
      method: 'GET',
      data: { status_value: status_value},
      success: function(data) {       
        if (data.length > 0) {  
          document.getElementById("new_content").innerHTML = data;         

          
         //   document.getElementById("submitCount").innerHTML = data;           
        } else {
          document.getElementById("new_content").innerHTML = '';
			//document.getElementById("content").innerHTML = '0';  
        }
      }
    });
  }


      /*===================== Deposit / Withdraw end	Deposit / Withdraw	===========*/

      /*===================== Credit Reference	Credit Reference	===========*/
      var editBtn = document.getElementById("editCreditReferenceBtn");
      var cancelBtn = document.getElementById("cancelCreditReferenceBtn");
      var userCreditReference = document.getElementById("userCreditReference");
      var editCreditReference = document.getElementById("editCreditReference");

      // Edit button click event
      editBtn.addEventListener("click", function() {
        // Hide userCreditReference and show editCreditReference
        userCreditReference.style.display = "none";
        editCreditReference.style.display = "inline-block";
        // Show cancel button and hide edit button
        cancelBtn.style.display = "inline-block";
        editBtn.style.display = "none";
      });

      // Cancel button click event
      cancelBtn.addEventListener("click", function() {
        // Show userCreditReference and hide editCreditReference
        userCreditReference.style.display = "inline-block";
        editCreditReference.style.display = "none";
        // Show edit button and hide cancel button
        editBtn.style.display = "inline-block";
        cancelBtn.style.display = "none";
      });

      function openNewWindow(val=null){
  // Specify the URL of the new window
  var encodedVal = encodeURIComponent(val);
  if(val!=null){
    var newWindowUrl = '{{route("banking-log",["id"=>":val"])}}';
  }else{
    var newWindowUrl = '{{route("banking-log")}}';
  }
 
  newWindowUrl = newWindowUrl.replace(':val', encodedVal);
  // Open a new window with the specified URL
  window.open(newWindowUrl, '_blank', 'width=600,height=600');
  }
      /*===================== Credit Reference end	Credit Reference	===========*/
    </script>
    @include('layouts.footer')
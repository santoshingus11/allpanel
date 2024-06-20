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


  <div class="main-wrapper Dashboard-bg">

    <!-- partial:partials/_sidebar.html -->
    <div class="left-side-bar">@include('layouts.left-side-bar')</div>


    <div class="page-wrapper bg-none">

      <!-- partial:partials/_navbar.html -->
      <div class="top-header-section">@include('layouts.header')</div>
      <!-- partial -->

      <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin top-bg px-4">
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
        </div>
        <div class="row">
          <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                  <h4 class=" mb-0">Notification</h4>
                  <!-- <div class="serch-filter">
                    <div class="input-group">
                      <label class="Search-By_User Name">Search By User Name</label>
                      <input class="form-control event-search" type="text" placeholder="Enter Atleast 3 character">
                    </div>
                  </div> -->

                  <!-- <div class="d-flex align-items-center flex-wrap text-nowrap">
                    <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                      Download CSV
                    </button>
                    <a href="createagent.php"><button type="button" class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">
                      New Agent
                    </button></a>
                  </div> -->
                </div>
                <div class="Agent_-Listing height30vh">
                  <form>
                    <div class="mb-3">
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0 pull-right">
                      Update
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>


    </div>
  </div>
  @include('layouts.footer')
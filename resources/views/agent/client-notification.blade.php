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
        <div class="createagent main-bg py-4 px-4">
          <div class="row">

          <form action="{{route('update-notification')}}" method="post" class="forms-sample">
            @csrf
          <input type="hidden" name="type"  value="client_notification" >


            <div class="col-lg-12 col-md-6 col-sm-12">
              <div class="Information Information-bg px-4 py-4 w-100">
                <div class="card-body">
                  <h5 class="border-bottom mb-3 pb-1"> Client Notification</h5>               
                    <div class="mb-3">
                      <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="Notification" rows="5"></textarea>
                    </div>                
                </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="Information px-4 py-4 right">
                <div class="serch-filter">
                  <button type="submit" class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">
                    Update Notification
                  </button>
                </div>
              </div>
            </div>

            </form>

          </div>
        </div>


      </div>
    </div>
  </div>
  @include('layouts.footer')
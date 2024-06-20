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
              <div class="card-body">
              <h4 class=" mb-0">P&L Report by Agent</h4>
              <br>


                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
               
                <form action="{{route('p-and-l-report-by-agent')}}" method="post">
                  @csrf
                  <input class="form-control event-search" id="url"  value="{{url('/')}}" type="hidden" placeholder="Event">

                  
                  <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex mx-2 filter-group statement-fltr"> 
                      <div class="relative calender_icon-style"><input type="datetime-local" id="from_date" name="from_date" value="@if(isset($from_date) && $from_date!=''){{$from_date}}@endif" >
                      </div>
                    </div>
                    <div class="d-inline-flex mx-2 filter-group statement-fltr">
                      <div class="relative calender_icon-style"><input type="datetime-local" id="to_date" name="to_date" value="@if(isset($to_date) && $to_date!=''){{$to_date}}@endif">
                      </div>
                    </div>

                    <div class="btn_Download d-inline-flex text-nowrap">
                          <button type="submit" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                            Apply
                          </button>                        
                        </div>
                  </div>
                </form>
                  <div class="btn_Download d-inline-flex text-nowrap">
                    <button type="button" onclick="downloadfunctionforagent('admin/p-l-agent-report-download')" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                      Download CSV
                    </button>
                  </div>
                </div>
                <div class="Pand-l-Statement">
                  <div class="card-body_agent-listing-demoag5">
                    <div class="Agent_-Listing height30vh mt-1">
                      <div class="table-responsive border-bottom">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th class="w-10">UID</th>
                              <th class="w-8">STAKE</th>
                              <th class="w-8">PLAYER P/L</th>
                              <th class="w-8">DOWNLINE P/L</th>
                              <th class="w-8">SUPER COMM</th>
                              <th class="w-8">UPLINE P/L</th>
                            </tr>
                          </thead>
                          <tbody>
                           @include('agent.p-and-l-report-by-agent-search')
                          </tbody>
                        </table>


                      </div>
                    </div>
                  </div>
                </div>
                @php $data=$userlist; @endphp
                @include('layouts.allpagination')
              </div>
              
           
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>

  <script type="text/javascript">
    $('#config-demo').daterangepicker({
      "timePicker": true,
      "linkedCalendars": false,
      "startDate": "12/13/2023",
      "endDate": "12/19/2023",
      "opens": "center"
    }, function(start, end, label) {
      console.log("New date range selected: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    });
  </script>
  <style>
    hr {
      color: white;
      opacity: 0.5;
    }
  </style>

  @include('layouts.footer')
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
                                <div id="logoutsuccessMessage" class="center_error_message_all_section relative">
                                </div>
                                <div
                                    class="d-flex justify-content-between align-items-center pb-2 border-bottom mobile_port_change-new">
                                    <div class="d-inline-flex align-items-center">
                                        <h4 class=" mb-0"> Online User</h4>
                                    </div>
                                    <form class="forms-sample d-flex align-items-center">
                                        <div class="mb-1">
                                            <label for="exampleInputUsername1" class="form-label">User Name</label>
                                            <input type="text" class="form-control event-search w-300"
                                                id="exampleInputUsername1" autocomplete="off"
                                                placeholder="Search By User name or user_id">
                                        </div>

                                        <div class="mt-4">
                                            <button type="button"
                                                class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2"
                                                onclick="searchdetails(document.getElementById('exampleInputUsername1').value, 'online-user', 'searchresult')">
                                                <i data-feather="search"></i> Search
                                            </button>
                                            <button type="button" class="btn btn-primary New-Agent btn-icon-text"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                                <i data-feather="user"></i> All User Logout
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="Pand-l-Statement mt-3">
                                    <div class="card-body_agent-listing-demoag5">
                                        <div class="Agent_-Listing height30vh mt-1">
                                            <div class="table-responsive border-bottom">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="align-C">Sr.No</th>
                                                            <th class="align-C">UserName</th>
                                                            <th class="align-C">Login Time</th>
                                                            <th class="align-C">Ip Address</th>
                                                            <th class="align-C">Browser Info</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="searchresult">
                                                        @include('agent.online-user-search')
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @include('layouts.allpagination')
                </div>

            </div>

        </div>
     <!-- Button trigger modal -->

@php
$username =Auth::guard('agent')->user()->username;
$password =Auth::guard('agent')->user()->password;
@endphp
<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Are you sure you want to log out all users?</p>
        </div>
        <div class="modal-footer">
          <form action="{{route('logout-all-user')}}" method="post" >
            @csrf
            <input type ="hidden" name="username" value="{{$username}}" />
            <input type ="hidden" name="password" value="{{$password}}" />
            
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger" >Logout All Users</button>
          </form>
           
        </div>
    </div>
</div>
</div>
        {{-- <script>
            function logoutall() {
                // alert('hello');

                $.ajax({
                    type: 'GET',
                    url: 'logout-all',

                    success: function(response) {
                        document.getElementById('#logoutsuccessMessage').innerHTML = response.message;
                        $('#logoutsuccessMessage').show().addClass('errorActive').delay(3000).fadeOut('slow');
                        setTimeout(function() {
                            location.reload();
                        }, 500);
                    },
                    error: function(error) {
                        console.error('Error fetching admin details:', error);
                    }
                });
            }
        </script> --}}
        @include('layouts.footer')

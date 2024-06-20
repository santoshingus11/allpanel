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
                    <div class="col-12 col-xl-12 grid-margin stretch-card">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div id="whitelabelMessage" class="center_error_message_all_section relative">
                                </div>
                                <div
                                    class="d-flex justify-content-between align-items-baseline mb-4 mb-md-1 pb-2 border-bottom mobile_port_change">
                                    <div class="d-inline-flex align-items-center">
                                        <h4 class=" mb-0">White Lable</h4>
                                    </div>
                                    <div class="btn_Download d-inline-flex text-nowrap">
                                        <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#TransferStatusexampleModal"
                                            class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                                            <i data-feather="users"></i>
                                            Create a White Lable
                                        </button>
                                        <button type="button"
                                            class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0">
                                            <i data-feather="refresh-ccw"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="Agent_-Listing height30vh">
                                    <div class="table-responsiv mt-3">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="">Sr.No</th>
                                                    <th class=""> WhiteLabelID</th>
                                                    <th class="">Name</th>
                                                    <th class="">Logo</th>
                                                    <th class="">Domain</th>
                                                    <th class="">CreatedAt</th>
                                                    <th class="">UpdatedAt</th>
                                                    <th class="">Balance</th>
                                                    <th class="">Currency</th>
                                                    <th class="">Status</th>
                                                    <th class="">Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key => $sc)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $sc->username }}</td>
                                                        <td>{{ $sc->first_name }}</td>
                                                        <td>
                                                            <div class="global-ex-logo"><img class=""
                                                                    src="{{ asset('admin/assets/images/others/' . $sc->client_logo) }}">
                                                            </div>
                                                        </td>
                                                        <td>{{ $sc->domain_url }}</td>
                                                        <td> {{ \Carbon\Carbon::parse($sc->created_at)->format('m/d/Y h:i:s A') }}
                                                        </td>
                                                        <td>
                                                            @if (!empty($sc->updated_at))
                                                                {{ \Carbon\Carbon::parse($sc->updated_at)->format('m/d/Y h:i:s A') }}
                                                            @else
                                                                No update data
                                                            @endif
                                                        </td>
                                                        <td>{{ $sc->balance }}</td>
                                                        <td>{{$sc->currency}}</td>
                                                        <td>
                                                            @php
                                                                $uniqueId = 'entry_' . uniqid();
                                                            @endphp

                                                            <div
                                                                class="d-flex align-items-center flex-wrap text-nowrap">
                                                                <div class="on-off-toggle">
                                                                    <input class="on-off-toggle__input" type="checkbox"
                                                                        id="{{ $uniqueId }}"
                                                                        data-id="{{ $sc->id }}"
                                                                        @if ($sc->status == '1') checked @endif />
                                                                    <label for="{{ $uniqueId }}"
                                                                        class="on-off-toggle__slider"></label>
                                                                </div>
                                                            </div>
                                    </div>
                                    </td>
                                   
                                    <td><a href="#" class="Learn-More3" data-bs-toggle="modal"
                                            data-bs-target="#TransferStatusexampleModal"
                                            data-usereditdata-id="{{ $sc->id }}"><i
                                                data-feather="edit-2"></i></a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="dataTableExample_info" role="status" aria-live="polite">
                    Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of {{ $data->total() }}
                    entries
                </div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers right" id="dataTableExample_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous {{ $data->previousPageUrl() ? '' : 'disabled' }}"
                            id="dataTableExample_previous">
                            <a href="{{ $data->previousPageUrl() ?? '#' }}" aria-controls="dataTableExample"
                                tabindex="0" class="page-link">Previous</a>
                        </li>
                        @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                            <li class="paginate_button page-item {{ $page == $data->currentPage() ? 'active' : '' }}">
                                <a href="{{ $url }}" aria-controls="dataTableExample" tabindex="0"
                                    class="page-link">{{ $page }}</a>
                            </li>
                        @endforeach
                        <li class="paginate_button page-item next {{ $data->nextPageUrl() ? '' : 'disabled' }}"
                            id="dataTableExample_next">
                            <a href="{{ $data->nextPageUrl() ?? '#' }}" aria-controls="dataTableExample" tabindex="0"
                                class="page-link">Next</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    </div>



    <!-- Edit a White Lable Modal -->
    <div class="modal fade" id="TransferStatusexampleModal" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content perfect-scrollbar-example">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit a White Lable</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        onclick="refreshdata()"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="{{ route('white-label-submit') }}" id="whitelabelsubmit"
                        method="post">
                        @csrf
                        <div class="dashboard-card">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label for="inputPassword4" class="form-label font-13 font-600">User Name</label>

                                    <input type="text" class="form-control font-12 font-600"
                                        placeholder="User Name" name = "username" id="username"
                                        aria-label="User Name">
                                    <div class="username invalid-feedback" id="agentusername"></div>
                                </div>
                                <input type="hidden" id="useraccessid" name="id">
                                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label for="inputPassword4" class="form-label font-13 font-600">Password</label>
                                    <input type="Password" class="form-control font-12 font-600"
                                        placeholder="Password" name="password">
                                    <div class="password invalid-feedback"></div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label for="inputPassword4" class="form-label font-13 font-600">White Label
                                        Id</label>
                                    <input type="text" class="form-control font-12 font-600"
                                        placeholder="White Label Id" name="login_id" id="whitelabelid"
                                        aria-label="User Name">
                                    <div class="login_id invalid-feedback" id="agentloginerror"></div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label for="Name" class="form-label font-13 font-600">Brand Name</label>
                                    <input type="text" class="form-control font-12 font-600" id="brandname"
                                        placeholder="Name" name="brand_name" aria-label="Name">
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label for="Logo" class="form-label font-13 font-600">Client Logo</label>
                                    <input class="form-control font-12 font-600" type="file" placeholder="Logo"
                                        name="client_logo" aria-label="Logo">
                                    <div class="client_logo invalid-feedback"></div>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label for="Domain Name" class="form-label font-13 font-600">Domain URL</label>
                                    <input type="text" class="form-control font-12 font-600" id="domainurl"
                                        placeholder="Domain" name="domain_url" aria-label="Domain Name">
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label for="Domain Name" class="form-label font-13 font-600">Levels
                                        Permissions</label>
                                    <select class="form-select font-14 box-shadow" id="whitelevelpermission"
                                        aria-label="Default select example" name="white_level_permission">
                                        <option value="all">All</option>
                                        <option value="admin">Admin</option>
                                        <option value="supermaster">Super Master</option>
                                        <option value="master">Master</option>
                                        <option value="client">Client</option>

                                    </select>
                                    <div class="white_level_permission invalid-feedback"></div>
                                </div>
                                @php
                                    $currencies = DB::table('currencies')->get();
                                @endphp
                                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label for="Domain Name" class="form-label font-13 font-600">
                                        Currency</label>
                                    <select class="form-select font-14 box-shadow" id="currency"
                                        aria-label="Default select example" name="currency">
                                        <option value="">Select</option>
                                        @foreach ($currencies as $currency)
                                            <option value="{{ $currency->code }}">{{ $currency->code}}</option>
                                        @endforeach
                                    </select>
                                    <div class="currency invalid-feedback"></div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label for="Domain Name" class="form-label font-13 font-600">Betting
                                        Features</label>
                                    <select class="js-example-basic-multiple form-select"
                                        placeholder="Credit Referance" name="betting_features" id="bettingfeatures"
                                        multiple="multiple" data-width="100%">
                                        <option value="TX">Texas</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="NY">New York</option>
                                        <option value="FL">Florida</option>
                                        <option value="KN">Kansas</option>
                                        <option value="HW">Hawaii</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label for="Created At" class="form-label font-13 font-600">Credit Limit</label>
                                    <input type="text" class="form-control font-12 font-600"
                                        placeholder="Credit Referance" name="credit_limit" id="creditlimit"
                                        aria-label="Created At">
                                    <div class="credit_limit invalid-feedback"></div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label for="Created At" class="form-label font-13 font-600">Balance</label>
                                    <input type="text" class="form-control font-12 font-600" id="adminbalance"
                                        placeholder="Balance" name="balance"aria-label="Created At">
                                    <div class="balance invalid-feedback"></div>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label for="Created At" class="form-label font-13 font-600">Created At </label>
                                    <input type="text" class="form-control font-12 font-600"
                                        placeholder="Created At" id="created_at" aria-label="Created At">

                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label for="Updated At" class="form-label font-13 font-600">Updated At </label>
                                    <input type="text" class="form-control font-12 font-600"
                                        placeholder="Updated At" id="updated_at" aria-label="Updated At">
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                                    <label for="Updated At" class="form-label font-13 font-600">Admin Password</label>
                                    <input type="text" class="form-control font-12 font-600"
                                        placeholder="Updated At" name="agent_password" aria-label="Updated At">
                                    <div class="agent_password invalid-feedback" id="agenterrorMessage"></div>

                                </div>

                                {{-- <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                  <label for="Chips" class="form-label font-13 font-600">Chips</label>
                  <input type="number" class="form-control font-12 font-600" placeholder="Chips" aria-label="Chips">
                </div> --}}
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center flex-wrap text-nowrap">
                        <button type="button" data-bs-dismiss="modal"
                            class="btn green  btn-icon-text mb-2 mb-md-0 mx-2" onclick="refreshdata()">
                            Cancel
                        </button>

                        <a href="#"><button type="button" onclick="whitelabel()"
                                class="btn btn-primary New-Agent-save btn-icon-text mb-2 mb-md-0">
                                Submit
                            </button></a>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>
    </div>
    <script>
        function refreshdata() {
            setTimeout(function() {
                location.reload();
            }, 10);

        }
        $(document).on('click', '.Learn-More3', function() {
            var adminId = $(this).data('usereditdata-id');
            // alert(adminId);
            loadAdminData(adminId);
        });

        function loadAdminData(adminId) {
            // alert(adminId);

            $.ajax({
                url: "{{ route('get-user-data') }}",
                data: {
                    id: adminId
                }, // Fixed the syntax error here
                type: 'GET',
                success: function(data) {
                    console.log(data);

                    //  $('#created_at').val(formattedCreateDate + ' ' + formattedCreateTime);

                    $('#status').val(data.status);
                    $('#username').val(data.username);
                    $('#useraccessid').val(data.id);
                    $('#whitelabelid').val(data.login_id);
                    $('#brandname').val(data.first_name);
                    $('#domainurl').val(data.domain_url);
                    $('#whitelevelpermission').val(data.white_level_permission);
                    $('#bettingfeatures').val(data.betting_features);
                    $('#creditlimit').val(data.credit_limit);
                    $('#currency').val(data.currency);
                    $('#adminbalance').val(data.balance);
                    $('#created_at').val(data.created_at);
                    $('#updated_at').val(data.updated_at);

                    // var createdAt = new Date(data.created_at);
                    // var formattedCreateDate = createdAt.getFullYear() + '-' + pad((createdAt.getMonth() + 1),
                    //     2) + '-' + pad(createdAt.getDate(), 2);
                    // var formattedCreateTime = pad(createdAt.getHours(), 2) + ':' + pad(createdAt.getMinutes(),
                    //     2) + ':' + pad(createdAt.getSeconds(), 2);
                    // $('#created_at').val(formattedCreateDate + ' ' + formattedCreateTime);
                    // Open the modal
                    $('#TransferStatusexampleModal').modal('show');
                    $('#usernamePlaceholder').text(data.username);
                },
                error: function(error) {
                    console.log('Error fetching user data:', error);
                }
            });
        }
    </script>
    <script>
        $('.on-off-toggle__input').on('change', function() {
            var checkbox = $(this);
            var status = checkbox.prop('checked') ? '1' : '0';
            var adminId = checkbox.data('id');


            // Perform AJAX request to update status
            $.ajax({
                url: "{{ route('update-whitelevel-status') }}", // Replace with your update status route
                method: 'POST',
                data: {
                    id: adminId,
                    status: status,
                    _token: '{{ csrf_token() }}' // Include CSRF token for Laravel
                },
                success: function(response) {
                    // location.reload();
                    // console.log(response);
                    var statusElement = $('#statusElement'); // Replace with your actual status element
                    if (response.status == '1') {
                        statusElement.text('On');
                    } else {
                        statusElement.text('Off');
                    }
                },
                error: function(error) {
                    // Handle error if needed
                    console.error(error);
                }
            });
        });
    </script>
    <script>
        function whitelabel() {
            var formdata = new FormData($('#whitelabelsubmit')[0]);

            $.ajax({
                type: 'POST', // Change to POST method
                url: "{{ route('white-label-submit') }}",
                data: formdata,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {

                    document.getElementById('whitelabelMessage').innerHTML = response.message;

                    $('#whitelabelMessage').show().addClass('errorActive').delay(3000).fadeOut('slow');
                    setTimeout(function() {
                        location.reload();
                    }, 1000);

                    $('#TransferStatusexampleModal').modal('hide');
                },
                error: function(error) {
                    // Clear any previous error messages
                    $('.invalid-feedback').text('');
                    document.getElementById('errorMessage').innerHTML = '';

                    if (error.status === 422) {
                        var errors = error.responseJSON.errors;

                        // Display errors in their corresponding fields
                        $.each(errors, function(key, value) {
                            // For each error, display it in the corresponding error field
                            var errorField = $('[name="' + key + '"]').siblings('.invalid-feedback');

                            errorField.text(value[0]).show();
                        });
                    } else if (error.status === 403) {
                        var errorMessage = error.responseJSON.error;
                        document.getElementById('agentusername').innerHTML = errorMessage;
                        $('#agentusername').show().addClass('blockClass').delay(3000).fadeOut('slow');
                    } else if (error.status === 401) {
                        var errorMessage = error.responseJSON.error;
                        document.getElementById('agenterrorMessage').innerHTML = errorMessage;
                        $('#agenterrorMessage').show().addClass('blockClass').delay(3000).fadeOut('slow');
                    } else if (error.status === 404) {
                        var errorMessage = error.responseJSON.error;
                        document.getElementById('agentloginerror').innerHTML = errorMessage;
                        $('#agentloginerror').show().addClass('blockClass').delay(3000).fadeOut('slow');
                    }
                }
            });
        }
    </script>
    {{--

  @include('layouts.footer')

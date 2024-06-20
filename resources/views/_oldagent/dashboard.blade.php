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
@php
    $adminAccess = [];
    if (isset(Auth::guard('agent')->user()->admin_access) && Auth::guard('agent')->user()->admin_access !== null) {
        $userdata = Auth::guard('agent')->user();
        $adminAccessArray = explode(',', $userdata->admin_access);

        foreach ($adminAccessArray as $item) {
            // Only proceed if there is a key-value pair
            if (strpos($item, '=')) {
                [$key, $value] = explode('=', $item);
                $adminAccess[$key] = $value;
            }
        }
    }
@endphp

<body>

    <div class="main-wrapper Dashboard-bg admin-bg customResponsive">
        <!-- partial:partials/_sidebar.html -->
        <div class="left-side-bar">@include('layouts.left-side-bar')</div>
        <div class="page-wrapper bg-none">
            <!-- partial:partials/_navbar.html -->
            <div class="top-header-section">@include('layouts.header')</div>
            <!-- partial -->
            @if ($adminAccess != '')
                <div class="page-content">
                    <div class="Welcometo-section">
                        @include('layouts.top-balance-section')
                    </div>

                    @php
                        $netexposure = QueryHelper::total_netexposure(
                            Auth::guard('agent')->user()->id,
                            Auth::guard('agent')->user()->role_id,
                        );
                        $total_balancedown = QueryHelper::total_balancedown(
                            Auth::guard('agent')->user()->id,
                            Auth::guard('agent')->user()->role_id,
                        );
                        $total_balanceup = QueryHelper::total_balanceup(
                            Auth::guard('agent')->user()->id,
                            Auth::guard('agent')->user()->role_id,
                        );
                        $available_credit = QueryHelper::total_availablecredit(
                            Auth::guard('agent')->user()->id,
                            Auth::guard('agent')->user()->role_id,
                        );
                    @endphp


                    <div class="row">
                        <div class="col-12 col-xl-12 grid-margin stretch-card">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div
                                        class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                                        <h4 class=" mb-0">Balance Information</h4>
                                    </div>
                                    <div class="admin">
                                        <table class="w-auto table table-striped table-balance">
                                            <tbody>
                                                <tr>
                                                    <td>Net Exposure</td>
                                                    <td
                                                        class="text-right negative @if ($netexposure <= 0) red @else green @endif">
                                                        {{ $netexposure }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Balance Down</th>
                                                    <td class="text-right  negative red">{{ $total_balancedown }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Balance Up</td>
                                                    <td class="text-right negative  green ">{{ $total_balanceup }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Credit Limit</td>
                                                    <td
                                                        class="text-right negative @if (Auth::guard('agent')->user()->credit_limit <= 0) red @else green @endif">
                                                        {{ Auth::guard('agent')->user()->credit_limit ?? '0.00' }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Available Credit</td>
                                                    <td class="text-right">{{ $available_credit }}</td>
                                                </tr>

                                                @php

                                                    $belowuser = QueryHelper::role_name(
                                                        Auth::guard('agent')->user()->role_id + 1,
                                                    );

                                                    $admin_credit = QueryHelper::give_clientcredit(2);
                                                    $supermaster_credit = QueryHelper::give_clientcredit(3);
                                                    $master_credit = QueryHelper::give_clientcredit(4);
                                                    $client_credit = QueryHelper::give_clientcredit(5);
                                                    $role = Auth::guard('agent')->user()->role_id;
                                                    $to_credit = QueryHelper::to_clientcredit(
                                                        Auth::guard('agent')->user()->role_id + 1,
                                                    );

                                                @endphp

                                                <tr>
                                                    <td>Total credit given to {{ $belowuser }}</td>
                                                    <td class="text-right">{{ $to_credit ?? '0.0' }}</td>
                                                </tr>

                                                @if (Auth::guard('agent')->user()->role_id == 1)
                                                    <tr>
                                                        <td>Total credit distributed by Admin</td>
                                                        <td class="text-right">{{ $admin_credit }}</td>
                                                    </tr>
                                                @endif

                                                @if (Auth::guard('agent')->user()->role_id <= 2)
                                                    <tr>
                                                        <td>Total credit distributed by Super Master</td>
                                                        <td class="text-right">{{ $supermaster_credit }}</td>
                                                    </tr>
                                                @endif

                                                @if (Auth::guard('agent')->user()->role_id <= 3)
                                                    <tr>
                                                        <td>Total credit distributed by Master</td>
                                                        <td class="text-right">{{ $master_credit }}</td>
                                                    </tr>
                                                @endif

                                                @if (Auth::guard('agent')->user()->role_id <= 4)
                                                    <tr>
                                                        <td>Total credit distributed by Client</td>
                                                        <td class="text-right">{{ $client_credit }}</td>
                                                    </tr>
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    @include('layouts.footer')

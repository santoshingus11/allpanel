@extends('layouts.front')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/front/css/datatables.css')}}">
@endsection
@section('content')
@include('partials.global.common-header')
<!-- breadcrumb -->
<div class="full-row bg-light overlay-dark py-5" style="background-image: url({{ $gs->breadcrumb_banner ? asset('assets/images/'.$gs->breadcrumb_banner):asset('assets/images/noimage.png') }}); background-position: center center; background-size: cover;">
   <div class="container">
      <div class="row text-center text-white">
         <div class="col-12">
            <h3 class="mb-2 text-white">{{ __('Dashboard') }}</h3>
         </div>
      </div>
   </div>
</div>
<!-- breadcrumb -->
<!--==================== Blog Section Start ====================-->

<div class="full-row">
   <div class="container">
        <div class="mb-4 d-xl-none">
            <button class="dashboard-sidebar-btn btn bg-primary rounded">
                <i class="fas fa-bars"></i>
            </button>
        </div>
      <div class="row">
         <div class="col-xl-4">
            @include('partials.user.dashboard-sidebar')
         </div>
         <div class="col-xl-8">
            @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>{{__('Success')}}</strong> {{Session::get('success')}}
            </div>
            @endif
            <div class="row">
               <div class="col-lg-12">
                  <div class="widget border-0 p-30 widget_categories bg-light account-info dashboard-sidebar_2024">
                     <h4 class="widget-title down-line mb-30">{{ __('Account Information') }}</h4>
                     <div class="user-info">
                        <h5 class="title">{{ $user->name }}</h5>
                        <p><span class="user-title">{{ __('Email') }}:</span> {{ $user->email }}</p>
                        @if($user->phone != null)
                        <p><span class="user-title">{{ __('Phone') }}:</span> {{ $user->phone }}</p>
                        @endif
                        @if($user->fax != null)
                        <p><span class="user-title">{{ __('Fax') }}:</span> {{ $user->fax }}</p>
                        @endif
                        @if($user->city != null)
                        <p><span class="user-title">{{ __('City') }}:</span> {{ $user->city }}</p>
                        @endif
                        @if($user->zip != null)
                        <p><span class="user-title">{{ __('Zip') }}:</span> {{ $user->zip }}</p>
                        @endif
                        @if($user->address != null)
                        <p><span class="user-title">{{ __('Address') }}:</span> {{ $user->address }}</p>
                        @endif
                     </div>
                  </div>
               </div>
               <!--<div class="col-lg-6">
                  <div class="widget border-0 p-30 widget_categories bg-light account-info">
                     <h4 class="widget-title down-line mb-30">{{ __('My Wallet') }}</h4>
                     <div class="user-info">
                        <h5 class="title">{{ __('Affiliate Bonus') }}:</h5>
                        <h5 class="title w-price">{{ App\Models\Product::vendorConvertPrice($user->affilate_income) }}</h5>
                        <hr>
                        <h5 class="title w-title">{{ __('Wallet Balance') }}</h5>
                        <h5 class="title w-price mb-3">{{ App\Models\Product::vendorConvertPrice(Auth::user()->balance) }}</h5>
                        <a href="{{ route('user-deposit-create') }}" class="mybtn1 sm "> <i class="fas fa-plus"></i> {{ __('Add Deposit') }}</a>
                     </div>
                  </div>
               </div>-->
            </div>
            {{-- Statistic section --}}
            <div class="row mt-3">
               <div class="col-lg-6">
                  <div class="widget border-0 p-30 widget_categories bg-light account-info card c-info-box-area yellow-brown_bg">
                     <div class="c-info-box box2" style="border-color: #000000;">
                        <p class="text-black">{{ Auth::user()->orders()->count() }}</p>
                     </div>
                     <div class="c-info-box-content">
                        <h6 class="title text-black">{{ __('Total Orders') }}</h6>
                        <p class="text text-black">{{ __('All Time') }}</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="widget border-0 p-30 widget_categories bg-light account-info card c-info-box-area dark_brown_bg">
                     <div class="c-info-box box1">
                        <p class="text-white">{{ Auth::user()->orders()->where('status','pending')->count() }}</p>
                     </div>
                     <div class="c-info-box-content">
                        <h6 class="title text-white">{{ __('Pending Orders') }}</h6>
                        <p class="text text-white">{{ __('All Time') }}</p>
                     </div>
                  </div>
               </div>
            </div>
            {{-- Statistic section End--}}
            <div class="row table-responsive-lg mt-3">
               <div class="col-lg-12">
                  <div class="widget border-0 p-30 widget_categories bg-light account-info dashboard-sidebar_2024">
                     <h4 class="widget-title down-line mb-30">{{ __('Recent Orders') }}</h4>
                     <div class="table-responsive">
                        <table class="table order-table" cellspacing="0" width="100%">
                           <thead>
                              <tr>
                                 <th>{{ __('#Order') }}</th>
                                 <th>{{ __('Date') }}</th>
                                 <th>{{ __('Order Total') }}</th>
                                 <th>{{ __('Order Status') }}</th>
                                 <th>{{ __('View') }}</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach(Auth::user()->orders()->latest()->take(5)->get() as $order)
                              <tr>
                                 <td data-label="{{ __('#Order') }}">
                                    <div>
                                       {{$order->order_number}}
                                    </div>
                                 </td>
                                 <td data-label="{{ __('Date') }}">
                                    <div>
                                       {{date('d M Y',strtotime($order->created_at))}}
                                    </div>
                                 </td>
                                 <td data-label="{{ __('Order Total') }}">
                                    <div>
                                       {{ \PriceHelper::showAdminCurrencyPrice(($order->pay_amount  * $order->currency_value),$order->currency_sign) }}
                                    </div>
                                 </td>
                                 <td data-label="{{ __('Order Status') }}">
                                    <div class="order-status {{ $order->status }}">
                                       {{ucwords($order->status)}}
                                    </div>
                                 </td>
                                 <td data-label="{{ __('View') }}">
                                    <div>
                                       <a class="mybtn1 sm1" href="{{route('user-order',$order->id)}}">
                                          {{ __('View Order') }}
                                       </a>
                                    </div>
                                 </td>
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
   </div>
</div>
<!--==================== Blog Section End ====================-->
@includeIf('partials.global.common-footer')
@endsection

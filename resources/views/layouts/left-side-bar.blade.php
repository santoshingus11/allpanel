 <style>
   .sidebar .sidebar-body .nav .nav-item .nav-link {
     padding: 0px 15px !important;
     height: 40px !important;
   }
 </style>

{{-- @isset($adminAccess)
    Admin Access is set. Content: {{ json_encode($adminAccess) }}
@else
    Admin Access is not set.
@endisset --}}

 <nav class="sidebar">
   <div class="sidebar-header">
     <a href="{{route('dashboard')}}" class="sidebar-brand">
       <img src="{{asset('admin/assets/img/logo.png')}}">
     </a>
     <div class="sidebar-toggler not-active">
       <span></span>
       <span></span>
       <span></span>
     </div>
   </div>
   <div class="sidebar-body top-bg">
    @if((Auth::guard('agent')->user()->user_access=='1'))
    @include('agent.user_access_sidebar')
    @else
     @include('agent.admin_sidebar')
     @endif
   </div>
 </nav>
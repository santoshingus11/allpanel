@extends('web_layout.app')
@section('style')

@endsection
@section('content')

<div class="col-md-10 pxxs-0"><router-outlet></router-outlet><app-change-password>
        <div class="wrapper-inner user_screen">
            <h2 class="user-title">change password</h2>
            <div>
                @if(Session::has('message'))
                    <p class="alert alert-success">{{Session::get('message')}}</p>
                @endif
                
                 @if(Session::has('error'))
                    <p class="alert alert-danger">{{Session::get('error')}}</p>
                @endif
            </div>
            <div class="border border-light">
                <form action="{{route('submit.change.pass')}}" method="POST" class="p-2 cp-password ng-untouched ng-pristine ng-invalid">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-4 col-12"><label>Current Password</label><input type="password" formcontrol name="oldPassword" class="form-control ng-untouched ng-pristine ng-invalid"><!----></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 col-12"><label>New Password</label><input type="password" formcontrol name="newPassword" class="form-control ng-untouched ng-pristine ng-invalid"><!----></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 col-12"><label>Confirm New Password</label><input type="password" formcontrol name="confirmPassword" class="form-control ng-untouched ng-pristine ng-invalid"><!----></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2 col-12"><button type="submit" class="btn btn-primary btn-block">Change Password</button></div>
                    </div>
                </form>
            </div>
        </div>
    </app-change-password><!----></div>

@endsection
@section('script')
<script>
    /* Script Goes Here */

    /* Script Goes Here */
</script>
@endsection
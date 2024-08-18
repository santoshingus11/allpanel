@extends('web_layout.app')
@section('style')
<style>
    /* Style Goes Here */

    /* Style Goes Here */
</style>
@endsection
@section('content')

<div class="col-md-10 pxxs-0"><router-outlet></router-outlet><app-sport-list>

        <div class="events p-4">
            <h1 class="event_Cricket">Withdraw
                <span class="starts-in-label">Bank Transfer</span>
            </h1>

            <div class="events-row">



                <form action="{{route('withdraw.submit')}}" enctype="multipart/form-data" method="POST">
                   @csrf
                    <div class="row mb-4">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="mybets-date-picker">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="amount" class="col-12 col-form-label" style="font-weight: bolder;">Amount</label>
                                        <input name="amount" id="amountField" type="number" autocomplete="off" placeholder="Amount" value="" class="mx-input w-100">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="email" class="col-12 col-form-label" style="font-weight: bolder;">Email</label>
                                        <input name="email" type="email" autocomplete="off" placeholder="Email" value="" class="mx-input w-100">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="" class="col-12 col-form-label" style="font-weight: bolder;">Bank Name</label>
                                        <input name="bank_name" type="text" autocomplete="off" placeholder="Bank Name" value="" class="mx-input w-100">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="col-12 col-form-label" style="font-weight: bolder;">Account Holder Name</label>
                                        <input name="account_holder_name" type="text" autocomplete="off" placeholder="Account Holder Name" value="" class="mx-input w-100">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="col-12 col-form-label" style="font-weight: bolder;">Account Number</label>
                                        <input name="account_number" type="text" autocomplete="off" placeholder="Account Number" value="" class="mx-input w-100">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="col-12 col-form-label" style="font-weight: bolder;">Account Type</label>
                                        <input name="account_type" type="text" autocomplete="off" placeholder="Account Type" value="" class="mx-input w-100">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="col-12 col-form-label" style="font-weight: bolder;">IFSC Code</label>
                                        <input name="ifsc_code" type="text" autocomplete="off" placeholder="IFSC Code" value="" class="mx-input w-100">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="col-12 col-form-label" style="font-weight: bolder;">Branch</label>
                                        <input name="branch" type="text" autocomplete="off" placeholder="Branch" value="" class="mx-input w-100">
                                    </div>

                                    <div class="col-lg-12 text-center">
                                        <label for="toDate" class="col-12 col-form-label w-100 height-24"></label>
                                        <button class="btn btn-primary" style="height: 35px;">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </app-sport-list><!---->
</div>

@endsection
@section('script')
<script>
    /* Script Goes Here */

    /* Script Goes Here */
</script>
@endsection
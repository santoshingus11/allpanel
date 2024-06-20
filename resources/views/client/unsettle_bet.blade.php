@extends('web_layout.app')
@section('style')

@endsection
@section('content')

<div class="col-md-10 pxxs-0"><router-outlet></router-outlet><app-unsettled-bet>
        <div class="wrapper-inner user_screen">
            <h2 class="user-title">unsetteled bet</h2>
            <div class="border border-light">
                <div class="filter m-2">
                    <div class="form-row align-items-center">
                        <div class="col-md-2 col-6"><input type="text" name="from" placeholder="Datepicker" bsdatepicker="" class="form-control ng-untouched ng-pristine ng-valid"><!----></div>
                        <div class="col-md-2 col-6"><input type="text" name="to" placeholder="Datepicker" bsdatepicker="" class="form-control ng-untouched ng-pristine ng-valid"><!----></div>
                        <div class="col-md-1 col-12"><button type="button" class="btn btn-primary btn-block">submit</button></div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="btDataTable" class="table table-bordered btDataTable table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Event Name</th>
                                <th class="text-center">Selection</th>
                                <th class="text-center">Event Type</th>
                                <th class="text-center">Market Type</th>
                                <th class="text-center">Bet Type</th>
                                <th class="text-center">Odds</th>
                                <th class="text-center">Stake</th>
                                <th class="text-center">Placed Time</th>
                                <th class="text-center">Match date</th>
                            </tr>
                        </thead>
                        <tbody><!----></tbody><!---->
                        <tbody>
                            <td colspan="11" class="noData"> No Data Found</td>
                        </tbody><!----><!---->
                    </table>
                </div>
            </div>
        </div>
    </app-unsettled-bet><!----></div>
@endsection
@section('script')
<script>
    /* Script Goes Here */

    /* Script Goes Here */
</script>
@endsection
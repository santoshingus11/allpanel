@extends('web_layout.app')
@section('style')

@endsection
@section('content')

<div class="col-md-10 pxxs-0"><router-outlet></router-outlet><app-profit-loss>
        <div class="wrapper-inner user_screen">
            <h2 class="user-title">profit loss</h2>
            <div class="border border-light">
                <div class="filter m-2">
                    <div class="form-row align-items-center">
                        <div class="col-md-2 col-6"><input type="text" name="from" placeholder="Datepicker" bsdatepicker="" class="form-control ng-untouched ng-pristine ng-valid"><!----></div>
                        <div class="col-md-2 col-6"><input type="text" name="to" placeholder="Datepicker" bsdatepicker="" class="form-control ng-untouched ng-pristine ng-valid"><!----></div>
                        <div class="col-md-2 col-12"><select name="reportType" class="custom-select ng-untouched ng-pristine ng-valid">
                                <option value="">All</option>
                                <!--<option value="4">Cricket</option>-->
                                <!--<option value="1">Football</option>-->
                                <!--<option value="2">Tennis</option>-->
                                <!--<option value="1444001">Exchange Game</option>-->
                            </select></div>
                        <div class="col-md-1 col-12"><button type="button" class="btn btn-primary btn-block">submit</button></div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="btDataTable" class="table table-bordered btDataTable table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Event Id</th>
                                <th class="text-center">Market Name</th>
                                <th class="text-center">Start Time</th>
                                <th class="text-center">Settled Time</th>
                                <th class="text-center">Commission</th>
                                <th class="text-center">Win/Loss</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($betRecords as $b)
                            <tr>
                                <td class="text-center">{{$b->tradeId}}</td>
                                <td class="text-center">Match odds</td>
                                <td class="text-center">{{$b->created_at}}</td>
                                <td class="text-center">{{$b->date}}</td>
                                <td class="text-center">0</td>
                                <td class="text-center green"> {{$b->win}}</td>
                            </tr><!---->
                            @endforeach
                        </tbody><!----><!----><!---->
                    </table>
                    <p>{{$betRecords->links()}}</p>
                </div>
            </div>
        </div>
    </app-profit-loss><!----></div>
@endsection
@section('script')
<script>
    /* Script Goes Here */

    /* Script Goes Here */
</script>
@endsection
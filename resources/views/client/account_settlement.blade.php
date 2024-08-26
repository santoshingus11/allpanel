@extends('web_layout.app')
@section('style')

@endsection
@section('content')
<div class="col-md-10 pxxs-0"><router-outlet></router-outlet><app-account-statement>
        <div class="wrapper-inner user_screen">
            <h2 class="user-title">account statement</h2>
            <div class="border border-light">
                <div class="filter m-2">
                    <div class="form-row align-items-center">
                        <div class="col-md-3 col-lg-2 col-6"><input type="text" name="from" placeholder="Datepicker" bsdatepicker="" class="form-control ng-untouched ng-pristine ng-valid"><!----></div>
                        <div class="col-md-3 col-lg-2 col-6"><input type="text" name="to" placeholder="Datepicker" bsdatepicker="" class="form-control ng-untouched ng-pristine ng-valid"><!----></div>
                        <div class="col-md-3 col-lg-2 col-12"><select name="reportType" class="custom-select ng-untouched ng-pristine ng-valid">
                                <option value="">All</option>
                                <!--<option value="transfer">Deposit/Withdraw Report</option>-->
                                <!--<option value="settle">Game Report</option>-->
                            </select></div>
                        <div class="col-md-3 col-lg-1 col-12"><button type="button" class="btn btn-primary btn-block">submit</button></div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="btDataTable" class="table table-bordered btDataTable table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">date</th>
                                <th class="text-right">Debit</th>
                                <th class="text-right">Credit</th>
                                <th class="text-right">Balance</th>
                                <th class="text-center">Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bankingHistories as $b)
                            <tr>
                                <td class="text-center">{{$b->created_at}}</td>
                                @if($b->type=='W')
                                <td class="text-right red">{{$b->amount ?? 0}}</td>
                                @else
                                <td class="text-right red">0</td>
                                @endif
                                
                                @if($b->type=='D')
                                <td class=" text-right green">{{$b->amount ?? 0}}</td>
                                @else
                                <td class=" text-right green">0</td>
                                @endif
                                <td class="text-right green"> {{$b->balance ?? 0}}</td>
                                <td class="text-center">
                                    {{$b->remarks}}
                                    <!--<a href="/reports/account-statement-details/1.69329085.662a9d87b950fbe569b638d5.plain">Live Teenpatti Virtual</a>-->
                                </td><!----><!---->
                            </tr><!---->
                            @endforeach
                        </tbody><!----><!----><!---->
                    </table>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">Deposit Request</div>
                            <table id="" class="table dt-responsive">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Person Name</th>
                                        <th>Person Email</th>
                                        <th>Username</th>
                                        <th>Balance</th>
                                        <!-- <th>Image</th> -->
                                        <th>Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($deposits))
                                    @foreach ($deposits as $dataa)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $dataa['user']['username'] ?? "" }}</td>
                                        <td>{{ $dataa['email'] ?? "" }}</td>
                                        <td>{{ $dataa['username'] ?? "" }}</td>
                                        <td>{{ $dataa['amount'] ?? "" }}</td>
                                        <!-- <td>{{ url('/assets/images/Deposit/').$dataa['image_name'] ?? "" }}</td> -->
                                        <!-- /assets/images/Deposit/ -->
                                        <td>{{ $dataa['created_at'] ?? "" }}</td>
                                       
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">Withdraw Request</div>
                            <table id="" class="table dt-responsive">
                                <thead>
                                    <tr>
                                        <th>User Id</th>
                                        <th>username</th>
                                        <!-- <th>email</th> -->
                                        <th>bank_name</th>
                                        <th>account_holder_name</th>
                                        <th>account_number</th>
                                        <th>account_type</th>
                                        <th>branch</th>
                                        <th>Balance</th>
                                        <th>Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($withdraw))
                                    @foreach ($withdraw as $dataa)

                                    <tr>
                                        <td>{{ $dataa['user_id'] }}</td>
                                        <td>{{ $dataa['username'] ?? "" }}</td>
                                        <!-- <td>{{ $dataa['email'] ?? "" }}</td> -->
                                        <td>{{ $dataa['bank_name'] ?? "" }}</td>
                                        <td>{{ $dataa['account_holder_name'] ?? "" }}</td>
                                        <td>{{ $dataa['account_number'] ?? "" }}</td>
                                        <td>{{ $dataa['account_type'] ?? "" }}</td>
                                        <td>{{ $dataa['branch'] ?? "" }}</td>
                                        <td>{{ $dataa['amount'] ?? "" }}</td>
                                        <td>{{ $dataa['created_at'] ?? "" }}</td>
                                      
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </app-account-statement><!----></div>
 
@endsection
@section('script')
<script>
    /* Script Goes Here */

    /* Script Goes Here */
</script>
@endsection
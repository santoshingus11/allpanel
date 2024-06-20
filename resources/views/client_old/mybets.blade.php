<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('layouts.client-header-url')
</head>
<?php $page = 'Home';
?>
@include('layouts.client-header')


<section id="home-pages" class="home_pages">
  <div class="banner" style="margin-bottom:30%;">
    <div class="container">
      <div class="row">
        <!--<div class="col-lg-2 col-md-12 col-sm-12">-->
        <!--  <div class="All-pages-left-side-bar">-->
            <!--@include('layouts.client-left-side-bar')-->
        <!--  </div>-->
        <!--</div>-->
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="Home_pages_main_section mybets">
            <h1 class="event_Cricket">My Bets</h1>
            <!--<div class="row mb-4">-->
            <!--  <div class="col-lg-4 col-md-12 col-sm-12">-->
            <!--    <div class="mybets-tabs">-->
            <!--      <div class="column">-->
            <!--        <div class="selection">-->
            <!--          <div class="item selected" id="currentItem">-->
            <!--            Current-->
            <!--          </div>-->
            <!--          <div class="item" id="pastItem">-->
            <!--            Past-->
            <!--          </div>-->
            <!--        </div>-->
            <!--        <div class="selection m-u" id="selectionMU">-->
            <!--          <div class="item selected" id="matchedItem">-->
            <!--            Matched-->
            <!--          </div>-->
            <!--          <div class="item" id="unmatchedItem">-->
            <!--            Unmatched-->
            <!--          </div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div class="col-lg-8 col-md-12 col-sm-12">-->
            <!--    <div class="mybets-date-picker">-->
            <!--      <div class="row">-->
            <!--        <div class="col-lg-5">-->
            <!--          <label for="fromDate" class="col-1 col-form-label">From:</label>-->
            <!--          <input name="fromDate" type="date" id="fromDatepicker" autocomplete="off" class="mx-input w-100">-->
            <!--        </div>-->
            <!--        <div class="col-lg-5">-->
            <!--          <label for="toDate" class="col-1 col-form-label">To:</label>-->
            <!--          <input name="toDate" type="date" id="toDatepicker" autocomplete="off" class="mx-input w-100">-->
            <!--        </div>-->
            <!--        <div class="col-lg-2">-->
            <!--          <label for="toDate" class="col-1 col-form-label w-100 height-24"></label>-->
            <!--          <button class="btn btn-primary" style="height: 35px;"><i class="fa fa-search m-r-5"></i>Search</button>-->
            <!--        </div>-->
            <!--      </div>-->

            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->

            <div class="mybets_table-design">
              <div class="cuttent_table">
                <div class="table-responsive">
                  <table class="table profit-loss-table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Trade ID</th>
                        <th>Action</th>
                        <th><span>Bet</span></th>
                        <th>Win</th>
                        <th>BetInfo</th>
                        <th><span>GameId</span></th>
                        <th><span>Matrix</span></th>
                        <th><span>Date</span></th>
                        <th><span>WinLines</span></th>
                      </tr>
                    </thead>
                    <tbody>
                        @if(!empty($betRecords))
                            @foreach($betRecords as $betRec)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$betRec->tradeId}}</td>
                                    <td>{{$betRec->action}}</td>
                                    <td>{{$betRec->bet}}</td>
                                    <td>{{$betRec->win}}</td>
                                    <td>{{$betRec->betInfo}}</td>
                                    <td>{{$betRec->gameId}}</td>
                                    <td>{{$betRec->matrix}}</td>
                                    <td>{{$betRec->date}}</td>
                                    <td>{{$betRec->winLines}}</td>
                                </tr>
                            @endforeach
                        @else
                          <tr>
                            <td colspan="7" class="text-center">There are no records to display</td>
                          </tr>
                        @endif
                    </tbody>
                  </table>
                  <p>{{$betRecords->links()}}</p>
                </div>
              </div>

            </div>




          </div>
        </div>

      </div>

    </div>
  </div>
  <script>

  </script>
  @include('layouts.client-footer')
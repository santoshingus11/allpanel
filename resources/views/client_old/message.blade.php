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
  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-12 col-sm-12">
          <div class="All-pages-left-side-bar">
            @include('layouts.client-left-side-bar')
          </div>
        </div>
        <div class="col-lg-10 col-md-12 col-sm-12">
          <div class="Home_pages_main_section mybets">
            <h1 class="event_Cricket">Messages</h1>
            <div class="row mb-4">
              <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="mybets-date-picker">
                  <div class="row">
                    <div class="col-lg-5">
                      <label for="fromDate" class="col-1 col-form-label">From:</label>
                      <input name="fromDate" type="date" id="fromDatepicker" autocomplete="off" class="mx-input w-100">
                    </div>
                    <div class="col-lg-5">
                      <label for="toDate" class="col-1 col-form-label">To:</label>
                      <input name="toDate" type="date" id="toDatepicker" autocomplete="off" class="mx-input w-100">
                    </div>
                    <div class="col-lg-2">
                      <label for="toDate" class="col-1 col-form-label w-100 height-24"></label>
                      <button class="btn btn-primary" style="height: 35px;"><i class="fa fa-search m-r-5"></i>Search</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mybets_table-design">
              <div class="cuttent_table">
                <div class="table-responsive">
                  <table class="table profit-loss-table">
                    <thead>
                      <tr>
                        <th>File</th>
                        <th>Event Name</th>
                        <th class="text-right">Amount</th>
                        <th>Date</th>
                        <th>Remark</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="7" class="text-center">There are no record to display</td>
                      </tr>
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
  <script>

  </script>
 @include('layouts.client-footer')
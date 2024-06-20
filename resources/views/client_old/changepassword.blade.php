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
            <h1 class="event_Cricket">Change Password</h1>
            <div class="row mb-4">

              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mybets-date-picker">
                  <div class="row">
                    <div class="col-lg-3">
                      <label for="fromDate" class="col-12 col-form-label">Old Password:</label>
                      <input name="fromDate" type="password"  autocomplete="off" placeholder="Old Password" class="mx-input w-100">
                    </div>
                    <div class="col-lg-3">
                      <label for="toDate" class="col-12 col-form-label">New Password</label>
                      <input name="toDate" type="password"  autocomplete="off" placeholder="New Password" class="mx-input w-100">
                    </div>
                    <div class="col-lg-3">
                      <label for="toDate" class="col-12 col-form-label">Repeat Password</label>
                      <input name="toDate" type="password"  autocomplete="off" placeholder="Repeat Password" class="mx-input w-100">
                    </div>
                    <div class="col-lg-2">
                      <label for="toDate" class="col-12 col-form-label w-100 height-24"></label>
                      <button class="btn btn-primary" style="height: 35px;">Save</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="mybets_table-design">





            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
  <script>

  </script>
 @include('layouts.client-footer')
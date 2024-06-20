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
            <h1 class="event_Cricket">Secure Auth Varification</h1>
            <div class="mybets_table-design">

              <div class="security-auth">
                <div class="text-center"><b>Secure Auth Verification Status:</b> <span class="badge badge-danger">Disabled</span></div>
                <div class="mt-2 text-center">Please select below option to enable secure auth verification</div>
                <div class="casino-report-tabs mt-3">
                  <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link">Eanable Using Mobile App</a></li>
                    <li class="nav-item"><a class="nav-link">Enable Using Telegram</a></li>
                  </ul>
                </div>
                <div class="tab-content"><!----> <!----></div>
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
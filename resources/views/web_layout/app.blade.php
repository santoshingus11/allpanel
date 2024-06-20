<!DOCTYPE html>
<html lang="en">

<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>


<?php if (strpos($url,'roullete') !== false) { ?>
    @include('web_layout/head_roulette')
 <?php } else { ?>
   @include('web_layout/head')
 <?php } ?>

<body class="main-content-pages" style="padding-right: 0px;">
    <app-root>
        @include('web_layout/header')
        <main _ngcontent-wcx-c75="" id="main">
            <div _ngcontent-wcx-c75="" class="row mx-0">
                <div _ngcontent-wcx-c75="" class="col-md-2 sidebar">
                    @include('web_layout/side_bar')
                </div>
                 @include('web_layout.more_games')
                 <div class="d-sm-none" style="display: flex; padding: 0;">
                    <div class="mobie-title bg-color" style="width: 100% !important;"> IPL 2024 </div>
                    <div class="mobie-title" style="width: 100% !important;"> LOK SABHA 2024 </div>
                  </div>
                @yield('content')
            </div>
        </main>
        @yield('script')
</body>

</html>
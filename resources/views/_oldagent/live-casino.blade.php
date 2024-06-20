<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="">
  @include('layouts.header-url')
</head>

<body>


  <div class="main-wrapper Dashboard-bg">
    <!-- partial:partials/_sidebar.html -->
    <div class="left-side-bar"> @include('layouts.left-side-bar')</div>
    <div class="page-wrapper bg-none">
      <!-- partial:partials/_navbar.html -->
      <div class="top-header-section"> @include('layouts.header')</div>
      <!-- partial -->
      <div class="page-content">

        <div class="row">
          <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
              <div class="card-body pb-5">
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                  <h4 class=" mb-0">Live Casino</h4>
                </div>
                <div class="row pb-3">
                  <div class="col-md-2 m-t-20 casino-image"><a href="{{route('admin-race-20')}}" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/race20.jpg')}}" alt="Race 20-20" class="img-fluid"></a></div>
                  <div class="col-md-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/queen.jpg')}}" alt="Queen" class="img-fluid"></a></div>
                  <div class="col-md-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/andar-bahar2.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-md-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/dt202.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-md-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/baccarat2.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-md-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/baccarat.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-md-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/lucky7B.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-md-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/cmeter.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-md-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/cc20.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/war.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/dtl.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/teenpatti-test.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/teenpatti-1day.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/teenpatti-20.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/open-teenpatti.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/poker-1day.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#r" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/poker-20.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/poker-6player.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/32cards.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/32CardsB.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/worli-matka.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/instant-worli.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/aaa.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/Dt6.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/Dt20.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/3cards.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/lucky7A.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/bollywood-casino.jpg')}}" class="img-fluid"></a></div>
                  <div class="col-2 m-t-20 casino-image"><a href="#" class="m-r-5 m-l-5"><img src="{{asset('admin/Super-Admin/assets/images/LiveCasino/andar-bahar.jpg')}}" class="img-fluid"></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.footer')
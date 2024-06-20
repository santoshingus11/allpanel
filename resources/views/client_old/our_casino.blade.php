@extends('web_layout.app')
@section('style')
<style>
  /* Style Goes Here */

  /* Style Goes Here */
</style>
@endsection
@section('content')

<!-- Contant Goes Here -->

<div class="col-md-10 pxxs-0"><router-outlet></router-outlet>

  <app-sport-list>

    <div class="listing_screen"><!---->

      <div class="w-100 d-flex flex-nowrap overflow-auto gap-2 pt-1 pb-1 top-nav-event-1 d-none d-md-flex"><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1022 1013" class="icon-blink" style="height: 14px;">
            <path d="M335 330q-26 26-60.5 40T203 384q-21 0-41-4.5T124 366l247-242q25 52 15 109t-51 97zm19-235L94 349q-12-8-22.5-18.5T52 308L312 54q6 4 11.5 8.5T335 73q5 5 10 10.5t9 11.5zm-72-59L35 279q-21-43-18-89.5T46 104q25-40 67-62.5T203 19q20 0 40.5 4.5T282 36zm91 660l67 64 582-580L835 0 253 580l66 64L67 895l-19-18-48 48 92 88 48-48-19-19 252-250z"></path>
          </svg><!----><span class="blink" style="font-size: 13px;">Ireland v Pakistan</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1022 1013" class="icon-blink" style="height: 14px;">
            <path d="M335 330q-26 26-60.5 40T203 384q-21 0-41-4.5T124 366l247-242q25 52 15 109t-51 97zm19-235L94 349q-12-8-22.5-18.5T52 308L312 54q6 4 11.5 8.5T335 73q5 5 10 10.5t9 11.5zm-72-59L35 279q-21-43-18-89.5T46 104q25-40 67-62.5T203 19q20 0 40.5 4.5T282 36zm91 660l67 64 582-580L835 0 253 580l66 64L67 895l-19-18-48 48 92 88 48-48-19-19 252-250z"></path>
          </svg><!----><span class="blink" style="font-size: 13px;">Bangladesh v Zimbabwe</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1022 1013" class="icon-blink" style="height: 14px;">
            <path d="M335 330q-26 26-60.5 40T203 384q-21 0-41-4.5T124 366l247-242q25 52 15 109t-51 97zm19-235L94 349q-12-8-22.5-18.5T52 308L312 54q6 4 11.5 8.5T335 73q5 5 10 10.5t9 11.5zm-72-59L35 279q-21-43-18-89.5T46 104q25-40 67-62.5T203 19q20 0 40.5 4.5T282 36zm91 660l67 64 582-580L835 0 253 580l66 64L67 895l-19-18-48 48 92 88 48-48-19-19 252-250z"></path>
          </svg><!----><span class="blink" style="font-size: 13px;">Gujarat Titans v Chennai Super Kings</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z"></path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Elmer Moeller v Jacopo Berrettini</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z"></path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">El Cocciaretto v Garcia</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z"></path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">D Yastremska v Siegemund</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z"></path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Flavio Cobolli v Sebastian Korda</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z"></path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Alexander Zverev v Aleksandar Vukic</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z"></path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Jordan Thompson v Thiago Monteiro</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z"></path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Ben Shelton v Pavel Kotov</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z"></path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Azarenka v Mag Linette</span></span><!----><!----></div>
      <div class="d-sm-none" style="display: flex; padding: 0;">
        <div class="mobie-title bg-color" style="width: 100% !important;"> IPL 2024 </div>
        <div class="mobie-title" style="width: 100% !important;"> LOK SABHA 2024 </div>
      </div><!---->
      <div class="mobile-sec ds-block-mobile">
        <tabset type="pills nav-fill inplayTabs_list" _nghost-whm-c35="" class="tab-container">
          <ul role="tablist" class="nav nav-pills nav-fill inplayTabs_list" aria-label="Tabs">
            <li class="nav-item active"><a href="{{route('client-home')}}" role="tab" class="nav-link" aria-controls="tab0" aria-selected="true" id="tab0-link"><span>IN-PLAY</span><!----><!----></a></li>
            <li class="nav-item"><a href="{{route('client-home')}}" role="tab" class="nav-link" aria-controls="tab1" aria-selected="false" id="tab1-link"><span>SPORTS</span><!----><!----></a></li>
            <li class="nav-item"><a href="{{route('client-home')}}" role="tab" class="nav-link active" aria-controls="tab2" aria-selected="false" id="tab2-link"><span>OUR CASINO</span><!----><!----></a></li>
            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="tab5" aria-selected="false" id="tab5-link"><span>FANTACY</span><!----><!----></a></li><!---->
          </ul>
          <div class="tab-content">
            <tab role="tabpanel" aria-labelledby="tab0-link" id="tab0" class="tab-pane active"></tab><!----><!---->
            <tab role="tabpanel" aria-labelledby="tab1-link" id="tab1" class="tab-pane"></tab><!----><!---->
            <tab role="tabpanel" aria-labelledby="tab2-link" id="tab2" class="tab-pane"></tab><!----><!----><!----><!----><!----><!---->
            <tab role="tabpanel" aria-labelledby="tab5-link" id="tab5" class="tab-pane"></tab><!----><!----><!---->
          </div>
        </tabset>
      </div>
      

      <div role="tabpanel" aria-labelledby="inplay-tab" class="tab-pane fade show active ds-none">
        <div class="games-tabsList">
          <tabset type="pills nav-fill" _nghost-nyb-c35="" class="tab-container">
            <ul role="tablist" class="nav nav-pills nav-fill" aria-label="Tabs"><!----></ul>
            <div class="tab-content"><!----><!----><!----><!----></div>
          </tabset>
        </div>
      </div><!---->
    </div><!---->

    <div class="dash_casino">
      <h2>Our Casino</h2>
      <div class="grid-container">
        @foreach($data['liveGames'] as $d)
        <a href="/slot/game/lounch/{{$d->id}}">
          <div class="d-inline-block casinoicons"><img class="img-fluid" src="{{$d->img}}">
            <div class="casinoname"> {{$d->name}} </div>
          </div>
        </a>
        @endforeach
      </div>
    </div><!----><!----><!---->
  </app-sport-list><!---->
</div>

@endsection
@section('script')
<script>
  /* Script Goes Here */

  /* Script Goes Here */
</script>
@endsection
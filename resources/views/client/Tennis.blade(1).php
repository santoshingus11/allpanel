@extends('web_layout.app')
@section('style')
<style>
  /* Style Goes Here */

  /* Style Goes Here */
</style>
@endsection
@section('content')

<div class="col-md-10 pxxs-0"><router-outlet></router-outlet><app-sport-list>
    <div class="listing_screen"><!---->
      <div class="w-100 d-flex flex-nowrap overflow-auto gap-2 pt-1 pb-1 top-nav-event-1 d-none d-md-flex"><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1022 1013" class="icon-blink" style="height: 14px;">
            <path d="M335 330q-26 26-60.5 40T203 384q-21 0-41-4.5T124 366l247-242q25 52 15 109t-51 97zm19-235L94 349q-12-8-22.5-18.5T52 308L312 54q6 4 11.5 8.5T335 73q5 5 10 10.5t9 11.5zm-72-59L35 279q-21-43-18-89.5T46 104q25-40 67-62.5T203 19q20 0 40.5 4.5T282 36zm91 660l67 64 582-580L835 0 253 580l66 64L67 895l-19-18-48 48 92 88 48-48-19-19 252-250z">
            </path>
          </svg><!----><span class="blink" style="font-size: 13px;">Bangladesh Women v
            India Women</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1022 1013" class="icon-blink" style="height: 14px;">
            <path d="M335 330q-26 26-60.5 40T203 384q-21 0-41-4.5T124 366l247-242q25 52 15 109t-51 97zm19-235L94 349q-12-8-22.5-18.5T52 308L312 54q6 4 11.5 8.5T335 73q5 5 10 10.5t9 11.5zm-72-59L35 279q-21-43-18-89.5T46 104q25-40 67-62.5T203 19q20 0 40.5 4.5T282 36zm91 660l67 64 582-580L835 0 253 580l66 64L67 895l-19-18-48 48 92 88 48-48-19-19 252-250z">
            </path>
          </svg><!----><span class="blink" style="font-size: 13px;">Punjab Kings v Royal
            Challengers Bengaluru</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z">
            </path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">D Kasatkina v
            T Maria</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z">
            </path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Gastao Elias
            v Elmer Moeller</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z">
            </path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Thiago
            Seyboth Wild v Gregoire Barrere</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z">
            </path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Arthur
            Rinderknech v Francesco Passaro</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z">
            </path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Di Shnaider v
            L Samsonova</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z">
            </path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Reb Masarova
            v I Begu</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z">
            </path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Zarazua v El
            Cocciaretto</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z">
            </path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Di Sarra v V
            Gracheva</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z">
            </path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">L Noskova v
            Stefanini</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z">
            </path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Rogers v Q
            Zheng</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z">
            </path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Rinky
            Hijikata v Jaume Munar</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z">
            </path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Dominik
            Koepfer v Andrea Vavassori</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
            <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z">
            </path>
          </svg><!----><!----><span class="blink" style="font-size: 13px;">Podoroska v
            Sorribes Tormo</span></span><!----><!----></div>
      <div role="tabpanel" aria-labelledby="inplay-tab" class="tab-pane fade show active">
        <div class="games-tabsList">
          <tabset type="pills nav-fill" _nghost-vef-c35="" class="tab-container">
            <ul role="tablist" class="nav nav-pills nav-fill" aria-label="Tabs">
              <li _ngcontent-vef-c35="" class="nav-item"><a _ngcontent-vef-c35="" href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span _ngcontent-vef-c35=""></span>
                  <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="https://crickekbuz.art/public/assets/4.png"><!----><b>Cricket</b></div><!----><!---->
                </a></li>
              <li _ngcontent-vef-c35="" class="nav-item"><a _ngcontent-vef-c35="" href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span _ngcontent-vef-c35=""></span>
                  <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="https://crickekbuz.art/public/assets/1.png"><!----><b>Football</b></div><!----><!---->
                </a></li>
              <li _ngcontent-vef-c35="" class="nav-item active"><a _ngcontent-vef-c35="" href="javascript:void(0);" role="tab" class="nav-link active" aria-controls="" aria-selected="true" id=""><span _ngcontent-vef-c35=""></span>
                  <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="https://crickekbuz.art/public/assets/2.png"><!----><b>Tennis</b></div><!----><!---->
                </a></li>
              <li _ngcontent-vef-c35="" class="nav-item"><a _ngcontent-vef-c35="" href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span _ngcontent-vef-c35=""></span>
                  <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="https://crickekbuz.art/public/assets/7.png"><!----><b>Horse Racing</b></div><!----><!---->
                </a></li>
              <li _ngcontent-vef-c35="" class="nav-item"><a _ngcontent-vef-c35="" href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span _ngcontent-vef-c35=""></span>
                  <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="https://crickekbuz.art/public/assets/4339.png"><!----><b>Greyhound Racing</b></div><!----><!---->
                </a></li>
              <li _ngcontent-vef-c35="" class="nav-item"><a _ngcontent-vef-c35="" href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span _ngcontent-vef-c35=""></span>
                  <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="https://crickekbuz.art/public/assets/56767.png"><!----><b>Teenpatti</b></div><!----><!---->
                </a></li>
              <li _ngcontent-vef-c35="" class="nav-item"><a _ngcontent-vef-c35="" href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span _ngcontent-vef-c35=""></span>
                  <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="https://crickekbuz.art/public/assets/98788.png"><!----><b>Roulette</b></div><!----><!---->
                </a></li><!---->
            </ul>



            <!-- Content -->


            <div class="tab-content">
              <tab role="tabpanel" aria-labelledby="" class="tab-pane"><!---->
                <div>
                  <div class="row th-head">
                    <div class="col-lg-7 col-md-5 col-6">
                      <p>games</p>
                    </div>
                    <div class="col-lg-5 col-md-7 col-12 text-center px-xl-0"><span>1</span><span>X</span><span>2</span></div><!---->
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="{{route('tenis_detail')}}">
                        <p>Gastao Elias v Elmer Moeller<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">4</span></button><button class="lay"><span class="odd">4.3</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.31</span></button><button class="lay"><span class="odd">1.33</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Rinky Hijikata v Jaume Munar<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">12.5</span></button><button class="lay"><span class="odd">13.5</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.08</span></button><button class="lay"><span class="odd">1.09</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Dominik Koepfer v Andrea Vavassori<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="suspendedMessage">SUSPENDED</div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Thiago Seyboth Wild v Gregoire Barrere<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">1.01</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">100</span></button><button class="lay"><span class="odd">1000</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Di Shnaider v L Samsonova<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.03</span></button><button class="lay"><span class="odd">1.06</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">17.5</span></button><button class="lay"><span class="odd">36</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> L Noskova v Stefanini<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.17</span></button><button class="lay"><span class="odd">1.19</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">6.2</span></button><button class="lay"><span class="odd">7</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> D Kasatkina v T Maria<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">1.01</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">100</span></button><button class="lay"><span class="odd">180</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Di Sarra v V Gracheva<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">26</span></button><button class="lay"><span class="odd">36</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.03</span></button><button class="lay"><span class="odd">1.04</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Reb Masarova v I Begu<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">2.3</span></button><button class="lay"><span class="odd">2.48</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.68</span></button><button class="lay"><span class="odd">1.76</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Zarazua v El Cocciaretto<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.98</span></button><button class="lay"><span class="odd">2.08</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.93</span></button><button class="lay"><span class="odd">2.04</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Podoroska v Sorribes Tormo<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.89</span></button><button class="lay"><span class="odd">2.1</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.91</span></button><button class="lay"><span class="odd">2.12</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Arthur Rinderknech v Francesco Passaro<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            04:00PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.95</span></button><button class="lay"><span class="odd">2.04</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.96</span></button><button class="lay"><span class="odd">2.06</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Rogers v Q Zheng<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            04:00PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">3.3</span></button><button class="lay"><span class="odd">3.45</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.41</span></button><button class="lay"><span class="odd">1.43</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div><!---->
                </div><!----><!----><!---->
              </tab>
              <tab role="tabpanel" aria-labelledby="" class="tab-pane"><!---->
                <div>
                  <div class="row th-head">
                    <div class="col-lg-7 col-md-5 col-6">
                      <p>games</p>
                    </div>
                    <div class="col-lg-5 col-md-7 col-12 text-center px-xl-0"><span>1</span><span>X</span><span>2</span></div><!---->
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="{{route('tenis_detail')}}">
                        <p> Gastao Elias v Elmer Moeller<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">4</span></button><button class="lay"><span class="odd">4.3</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.31</span></button><button class="lay"><span class="odd">1.33</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Rinky Hijikata v Jaume Munar<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">12.5</span></button><button class="lay"><span class="odd">13.5</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.08</span></button><button class="lay"><span class="odd">1.09</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Dominik Koepfer v Andrea Vavassori<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="suspendedMessage">SUSPENDED</div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Thiago Seyboth Wild v Gregoire Barrere<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">1.01</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">100</span></button><button class="lay"><span class="odd">1000</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Di Shnaider v L Samsonova<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.03</span></button><button class="lay"><span class="odd">1.06</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">17.5</span></button><button class="lay"><span class="odd">36</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> L Noskova v Stefanini<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.17</span></button><button class="lay"><span class="odd">1.19</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">6.2</span></button><button class="lay"><span class="odd">7</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> D Kasatkina v T Maria<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">1.01</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">100</span></button><button class="lay"><span class="odd">180</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Di Sarra v V Gracheva<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">26</span></button><button class="lay"><span class="odd">36</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.03</span></button><button class="lay"><span class="odd">1.04</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Reb Masarova v I Begu<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">2.3</span></button><button class="lay"><span class="odd">2.48</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.68</span></button><button class="lay"><span class="odd">1.76</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Zarazua v El Cocciaretto<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.98</span></button><button class="lay"><span class="odd">2.08</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.93</span></button><button class="lay"><span class="odd">2.04</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Podoroska v Sorribes Tormo<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.89</span></button><button class="lay"><span class="odd">2.1</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.91</span></button><button class="lay"><span class="odd">2.12</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Arthur Rinderknech v Francesco Passaro<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            04:00PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.95</span></button><button class="lay"><span class="odd">2.04</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.96</span></button><button class="lay"><span class="odd">2.06</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Rogers v Q Zheng<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            04:00PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">3.3</span></button><button class="lay"><span class="odd">3.45</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.41</span></button><button class="lay"><span class="odd">1.43</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div><!---->
                </div><!----><!----><!---->
              </tab>
              <tab role="tabpanel" aria-labelledby="" class="tab-pane active"><!---->
                <div>
                  <div class="row th-head">
                    <div class="col-lg-7 col-md-5 col-6">
                      <p>games</p>
                    </div>
                    <div class="col-lg-5 col-md-7 col-12 text-center px-xl-0"><span>1</span><span>X</span><span>2</span></div><!---->
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="{{route('tenis_detail')}}">
                        <p> Gastao Elias v Elmer Moeller<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">4</span></button><button class="lay"><span class="odd">4.3</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.31</span></button><button class="lay"><span class="odd">1.33</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Rinky Hijikata v Jaume Munar<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">12.5</span></button><button class="lay"><span class="odd">13.5</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.08</span></button><button class="lay"><span class="odd">1.09</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Dominik Koepfer v Andrea Vavassori<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="suspendedMessage">SUSPENDED</div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Thiago Seyboth Wild v Gregoire Barrere<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">1.01</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">100</span></button><button class="lay"><span class="odd">1000</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Di Shnaider v L Samsonova<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.03</span></button><button class="lay"><span class="odd">1.06</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">17.5</span></button><button class="lay"><span class="odd">36</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> L Noskova v Stefanini<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.17</span></button><button class="lay"><span class="odd">1.19</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">6.2</span></button><button class="lay"><span class="odd">7</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> D Kasatkina v T Maria<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">1.01</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">100</span></button><button class="lay"><span class="odd">180</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Di Sarra v V Gracheva<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">26</span></button><button class="lay"><span class="odd">36</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.03</span></button><button class="lay"><span class="odd">1.04</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Reb Masarova v I Begu<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">2.3</span></button><button class="lay"><span class="odd">2.48</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.68</span></button><button class="lay"><span class="odd">1.76</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Zarazua v El Cocciaretto<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.98</span></button><button class="lay"><span class="odd">2.08</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.93</span></button><button class="lay"><span class="odd">2.04</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Podoroska v Sorribes Tormo<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.89</span></button><button class="lay"><span class="odd">2.1</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.91</span></button><button class="lay"><span class="odd">2.12</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Arthur Rinderknech v Francesco Passaro<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            04:00PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.95</span></button><button class="lay"><span class="odd">2.04</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.96</span></button><button class="lay"><span class="odd">2.06</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Rogers v Q Zheng<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            04:00PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">3.3</span></button><button class="lay"><span class="odd">3.45</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.41</span></button><button class="lay"><span class="odd">1.43</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div><!---->
                </div><!----><!----><!---->
              </tab>
              <tab role="tabpanel" aria-labelledby="" class="tab-pane"><!---->
                <div>
                  <div class="row th-head">
                    <div class="col-lg-7 col-md-5 col-6">
                      <p>games</p>
                    </div>
                    <div class="col-lg-5 col-md-7 col-12 text-center px-xl-0"><span>1</span><span>X</span><span>2</span></div><!---->
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="{{route('tenis_detail')}}">
                        <p> Gastao Elias v Elmer Moeller<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">4</span></button><button class="lay"><span class="odd">4.3</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.31</span></button><button class="lay"><span class="odd">1.33</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Rinky Hijikata v Jaume Munar<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">12.5</span></button><button class="lay"><span class="odd">13.5</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.08</span></button><button class="lay"><span class="odd">1.09</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Dominik Koepfer v Andrea Vavassori<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="suspendedMessage">SUSPENDED</div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Thiago Seyboth Wild v Gregoire Barrere<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">1.01</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">100</span></button><button class="lay"><span class="odd">1000</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Di Shnaider v L Samsonova<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.03</span></button><button class="lay"><span class="odd">1.06</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">17.5</span></button><button class="lay"><span class="odd">36</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> L Noskova v Stefanini<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.17</span></button><button class="lay"><span class="odd">1.19</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">6.2</span></button><button class="lay"><span class="odd">7</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> D Kasatkina v T Maria<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">1.01</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">100</span></button><button class="lay"><span class="odd">180</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Di Sarra v V Gracheva<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">26</span></button><button class="lay"><span class="odd">36</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.03</span></button><button class="lay"><span class="odd">1.04</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Reb Masarova v I Begu<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">2.3</span></button><button class="lay"><span class="odd">2.48</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.68</span></button><button class="lay"><span class="odd">1.76</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Zarazua v El Cocciaretto<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.98</span></button><button class="lay"><span class="odd">2.08</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.93</span></button><button class="lay"><span class="odd">2.04</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Podoroska v Sorribes Tormo<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.89</span></button><button class="lay"><span class="odd">2.1</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.91</span></button><button class="lay"><span class="odd">2.12</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Arthur Rinderknech v Francesco Passaro<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            04:00PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.95</span></button><button class="lay"><span class="odd">2.04</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.96</span></button><button class="lay"><span class="odd">2.06</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Rogers v Q Zheng<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            04:00PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">3.3</span></button><button class="lay"><span class="odd">3.45</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.41</span></button><button class="lay"><span class="odd">1.43</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div><!---->
                </div><!----><!----><!---->
              </tab>
              <tab role="tabpanel" aria-labelledby="" class="tab-pane"><!---->
                <div>
                  <div class="row th-head">
                    <div class="col-lg-7 col-md-5 col-6">
                      <p>games</p>
                    </div>
                    <div class="col-lg-5 col-md-7 col-12 text-center px-xl-0"><span>1</span><span>X</span><span>2</span></div><!---->
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="{{route('tenis_detail')}}">
                        <p> Gastao Elias v Elmer Moeller<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">4</span></button><button class="lay"><span class="odd">4.3</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.31</span></button><button class="lay"><span class="odd">1.33</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Rinky Hijikata v Jaume Munar<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">12.5</span></button><button class="lay"><span class="odd">13.5</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.08</span></button><button class="lay"><span class="odd">1.09</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Dominik Koepfer v Andrea Vavassori<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="suspendedMessage">SUSPENDED</div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Thiago Seyboth Wild v Gregoire Barrere<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">1.01</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">100</span></button><button class="lay"><span class="odd">1000</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Di Shnaider v L Samsonova<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.03</span></button><button class="lay"><span class="odd">1.06</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">17.5</span></button><button class="lay"><span class="odd">36</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> L Noskova v Stefanini<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.17</span></button><button class="lay"><span class="odd">1.19</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">6.2</span></button><button class="lay"><span class="odd">7</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> D Kasatkina v T Maria<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">1.01</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">100</span></button><button class="lay"><span class="odd">180</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Di Sarra v V Gracheva<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">26</span></button><button class="lay"><span class="odd">36</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.03</span></button><button class="lay"><span class="odd">1.04</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Reb Masarova v I Begu<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">2.3</span></button><button class="lay"><span class="odd">2.48</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.68</span></button><button class="lay"><span class="odd">1.76</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Zarazua v El Cocciaretto<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.98</span></button><button class="lay"><span class="odd">2.08</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.93</span></button><button class="lay"><span class="odd">2.04</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Podoroska v Sorribes Tormo<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.89</span></button><button class="lay"><span class="odd">2.1</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.91</span></button><button class="lay"><span class="odd">2.12</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Arthur Rinderknech v Francesco Passaro<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            04:00PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.95</span></button><button class="lay"><span class="odd">2.04</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.96</span></button><button class="lay"><span class="odd">2.06</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Rogers v Q Zheng<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            04:00PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">3.3</span></button><button class="lay"><span class="odd">3.45</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.41</span></button><button class="lay"><span class="odd">1.43</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div><!---->
                </div><!----><!----><!---->
              </tab>
              <tab role="tabpanel" aria-labelledby="" class="tab-pane"><!---->
                <div>
                  <div class="row th-head">
                    <div class="col-lg-7 col-md-5 col-6">
                      <p>games</p>
                    </div>
                    <div class="col-lg-5 col-md-7 col-12 text-center px-xl-0"><span>1</span><span>X</span><span>2</span></div><!---->
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Gastao Elias v Elmer Moeller<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">4</span></button><button class="lay"><span class="odd">4.3</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.31</span></button><button class="lay"><span class="odd">1.33</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Rinky Hijikata v Jaume Munar<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">12.5</span></button><button class="lay"><span class="odd">13.5</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.08</span></button><button class="lay"><span class="odd">1.09</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Dominik Koepfer v Andrea Vavassori<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="suspendedMessage">SUSPENDED</div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Thiago Seyboth Wild v Gregoire Barrere<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">1.01</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">100</span></button><button class="lay"><span class="odd">1000</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Di Shnaider v L Samsonova<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.03</span></button><button class="lay"><span class="odd">1.06</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">17.5</span></button><button class="lay"><span class="odd">36</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> L Noskova v Stefanini<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.17</span></button><button class="lay"><span class="odd">1.19</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">6.2</span></button><button class="lay"><span class="odd">7</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> D Kasatkina v T Maria<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">1.01</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">100</span></button><button class="lay"><span class="odd">180</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Di Sarra v V Gracheva<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">26</span></button><button class="lay"><span class="odd">36</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.03</span></button><button class="lay"><span class="odd">1.04</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Reb Masarova v I Begu<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">2.3</span></button><button class="lay"><span class="odd">2.48</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.68</span></button><button class="lay"><span class="odd">1.76</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Zarazua v El Cocciaretto<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.98</span></button><button class="lay"><span class="odd">2.08</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.93</span></button><button class="lay"><span class="odd">2.04</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Podoroska v Sorribes Tormo<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.89</span></button><button class="lay"><span class="odd">2.1</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.91</span></button><button class="lay"><span class="odd">2.12</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Arthur Rinderknech v Francesco Passaro<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            04:00PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.95</span></button><button class="lay"><span class="odd">2.04</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.96</span></button><button class="lay"><span class="odd">2.06</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Rogers v Q Zheng<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            04:00PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">3.3</span></button><button class="lay"><span class="odd">3.45</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.41</span></button><button class="lay"><span class="odd">1.43</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div><!---->
                </div><!----><!----><!---->
              </tab>
              <tab role="tabpanel" aria-labelledby="" class="tab-pane"><!---->
                <div>
                  <div class="row th-head">
                    <div class="col-lg-7 col-md-5 col-6">
                      <p>games</p>
                    </div>
                    <div class="col-lg-5 col-md-7 col-12 text-center px-xl-0"><span>1</span><span>X</span><span>2</span></div><!---->
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="{{route('tenis_detail')}}">
                        <p> Gastao Elias v Elmer Moeller<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">4</span></button><button class="lay"><span class="odd">4.3</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.31</span></button><button class="lay"><span class="odd">1.33</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Rinky Hijikata v Jaume Munar<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">12.5</span></button><button class="lay"><span class="odd">13.5</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.08</span></button><button class="lay"><span class="odd">1.09</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Dominik Koepfer v Andrea Vavassori<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="suspendedMessage">SUSPENDED</div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Thiago Seyboth Wild v Gregoire Barrere<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">1.01</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">100</span></button><button class="lay"><span class="odd">1000</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Di Shnaider v L Samsonova<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.03</span></button><button class="lay"><span class="odd">1.06</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">17.5</span></button><button class="lay"><span class="odd">36</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> L Noskova v Stefanini<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.17</span></button><button class="lay"><span class="odd">1.19</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">6.2</span></button><button class="lay"><span class="odd">7</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> D Kasatkina v T Maria<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            02:35PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">1.01</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">100</span></button><button class="lay"><span class="odd">180</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Di Sarra v V Gracheva<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">26</span></button><button class="lay"><span class="odd">36</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.03</span></button><button class="lay"><span class="odd">1.04</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Reb Masarova v I Begu<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">2.3</span></button><button class="lay"><span class="odd">2.48</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.68</span></button><button class="lay"><span class="odd">1.76</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Zarazua v El Cocciaretto<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.98</span></button><button class="lay"><span class="odd">2.08</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.93</span></button><button class="lay"><span class="odd">2.04</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Podoroska v Sorribes Tormo<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            03:30PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.89</span></button><button class="lay"><span class="odd">2.1</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.91</span></button><button class="lay"><span class="odd">2.12</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Arthur Rinderknech v Francesco Passaro<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            04:00PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.95</span></button><button class="lay"><span class="odd">2.04</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.96</span></button><button class="lay"><span class="odd">2.06</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div>
                  <div class="row td-body" tabindex="0">
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="javascript:void(0)">
                        <p> Rogers v Q Zheng<span>&nbsp;/&nbsp;</span><b>May 09 2024
                            04:00PM (IST)</b></p>
                      </a><!----></div>
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span class="active"></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">3.3</span></button><button class="lay"><span class="odd">3.45</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.41</span></button><button class="lay"><span class="odd">1.43</span></button><!----></div><!---->
                      </div><!---->
                    </div>
                  </div><!---->
                </div><!----><!----><!---->
              </tab><!---->
            </div>



            <!-- Content -->

          </tabset>
        </div>
      </div>
      <div role="tabpanel" aria-labelledby="inplay-tab" class="tab-pane fade show active ds-none">
        <div class="games-tabsList">
          <tabset type="pills nav-fill" _nghost-vef-c35="" class="tab-container">
            <ul role="tablist" class="nav nav-pills nav-fill" aria-label="Tabs"><!---->
            </ul>
            <div class="tab-content"><!----><!----><!----><!----></div>
          </tabset>
        </div>
      </div><!---->
    </div><!---->

  </app-sport-list>
  <!---->
</div>

@endsection
@section('script')
<script>
  /* Script Goes Here */

  /* Script Goes Here */
</script>
@endsection
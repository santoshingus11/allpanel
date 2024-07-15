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

      <div class="w-100 d-flex flex-nowrap overflow-auto gap-2 pt-1 pb-1 top-nav-event-1 d-none d-md-flex">
        @if(!empty($allGames['crickets']))
        @foreach($allGames['crickets'] as $c)
        <a href="{{route('Cricket-details',$c['id'])}}">
          <span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded">
            <svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1022 1013" class="icon-blink" style="height: 14px;">
              <path d="M335 330q-26 26-60.5 40T203 384q-21 0-41-4.5T124 366l247-242q25 52 15 109t-51 97zm19-235L94 349q-12-8-22.5-18.5T52 308L312 54q6 4 11.5 8.5T335 73q5 5 10 10.5t9 11.5zm-72-59L35 279q-21-43-18-89.5T46 104q25-40 67-62.5T203 19q20 0 40.5 4.5T282 36zm91 660l67 64 582-580L835 0 253 580l66 64L67 895l-19-18-48 48 92 88 48-48-19-19 252-250z">
              </path>
            </svg>
            <span class="blink" style="font-size: 13px;">{{$c['game_title']}}</span>
          </span>
        </a>
        @endforeach
        @endif
        @if(!empty($allGames['footballs']))
        @foreach($allGames['footballs'] as $c)
        <a href="{{route('Football-Details',$c['id'])}}">
          <span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded">
            <svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1022 1013" class="icon-blink" style="height: 14px;">
              <path d="M335 330q-26 26-60.5 40T203 384q-21 0-41-4.5T124 366l247-242q25 52 15 109t-51 97zm19-235L94 349q-12-8-22.5-18.5T52 308L312 54q6 4 11.5 8.5T335 73q5 5 10 10.5t9 11.5zm-72-59L35 279q-21-43-18-89.5T46 104q25-40 67-62.5T203 19q20 0 40.5 4.5T282 36zm91 660l67 64 582-580L835 0 253 580l66 64L67 895l-19-18-48 48 92 88 48-48-19-19 252-250z">
              </path>
            </svg>
            <span class="blink" style="font-size: 13px;">{{$c['game_title']}}</span>
          </span>
        </a>
        @endforeach
        @endif
        @if(!empty($allGames['tennises']))
        @foreach($allGames['tennises'] as $c)
        <a href="{{route('tenis_detail',$c['id'])}}">
          <span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded">
            <svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1022 1013" class="icon-blink" style="height: 14px;">
              <path d="M335 330q-26 26-60.5 40T203 384q-21 0-41-4.5T124 366l247-242q25 52 15 109t-51 97zm19-235L94 349q-12-8-22.5-18.5T52 308L312 54q6 4 11.5 8.5T335 73q5 5 10 10.5t9 11.5zm-72-59L35 279q-21-43-18-89.5T46 104q25-40 67-62.5T203 19q20 0 40.5 4.5T282 36zm91 660l67 64 582-580L835 0 253 580l66 64L67 895l-19-18-48 48 92 88 48-48-19-19 252-250z">
              </path>
            </svg>
            <span class="blink" style="font-size: 13px;">{{$c['game_title']}}</span>
          </span>
        </a>
        @endforeach
        @endif
      </div>

      <!--<div class="d-sm-none" style="display: flex; padding: 0;">-->
      <!--  <div class="mobie-title bg-color" style="width: 100% !important;"> IPL 2024 </div>-->
      <!--  <div class="mobie-title" style="width: 100% !important;"> LOK SABHA 2024 </div>-->
      <!--</div>-->
      <div class="mobile-sec ds-block-mobile">
        <tabset type="pills nav-fill inplayTabs_list" _nghost-whm-c35="" class="tab-container">
          <ul role="tablist" class="nav nav-pills nav-fill inplayTabs_list" aria-label="Tabs">
            <li class="nav-item active"><a href="{{route('client-home')}}" role="tab" class="nav-link active" aria-controls="tab0" aria-selected="true" id="tab0-link"><span>IN-PLAY</span><!----><!----></a></li>
            <li class="nav-item"><a href="{{route('client-home')}}" role="tab" class="nav-link" aria-controls="tab1" aria-selected="false" id="tab1-link"><span>SPORTS</span><!----><!----></a></li>
            <li class="nav-item"><a href="{{route('our_casino')}}" role="tab" class="nav-link" aria-controls="tab2" aria-selected="false" id="tab2-link"><span>OUR CASINO</span><!----><!----></a></li>
            <!-- <li class="nav-item"><a href="https://crickekbuz.art/slot/game/lounch/9673" role="tab" class="nav-link" aria-controls="tab5" aria-selected="false" id="tab5-link"><span>FANTACY</span></a></li> -->
          </ul>
          <div class="tab-content">
            <tab role="tabpanel" aria-labelledby="tab0-link" id="tab0" class="tab-pane active"></tab><!----><!---->
            <tab role="tabpanel" aria-labelledby="tab1-link" id="tab1" class="tab-pane"></tab><!----><!---->
            <tab role="tabpanel" aria-labelledby="tab2-link" id="tab2" class="tab-pane"></tab><!----><!----><!----><!----><!----><!---->
            <tab role="tabpanel" aria-labelledby="tab5-link" id="tab5" class="tab-pane"></tab><!----><!----><!---->
          </div>
        </tabset>
      </div>
      <div role="tabpanel" aria-labelledby="inplay-tab" class="tab-pane fade show active">
        <div class="games-tabsList">
          <tabset type="pills nav-fill" _nghost-nyb-c35="" class="tab-container">
            <ul role="tablist" class="nav nav-pills nav-fill" aria-label="Tabs">
              <li class="active nav-item"><a href="{{route('client-home')}}" role="tab" class="nav-link active" aria-controls="" aria-selected="true" id=""><span></span>
                  <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="{{asset('/')}}/assets/img/icons/4.png"><!----><b>Cricket</b></div><!----><!---->
                </a></li>
              <li class="nav-item"><a href="{{route('football-frontend')}}" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                  <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="{{asset('/')}}/assets/img/icons/1.png"><!----><b>Football</b></div><!----><!---->
                </a></li>
              <li class="nav-item"><a href="{{route('tennis-frontend')}}" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                  <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="{{asset('/')}}/assets/img/icons/2.png"><!----><b>Tennis</b></div><!----><!---->
                </a></li>
              <li class="nav-item"><a href="{{route('horse')}}" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                  <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="{{asset('/')}}/assets/img/icons/7.png"><!----><b>Horse Racing</b></div><!----><!---->
                </a></li>
              <li class="nav-item"><a href="{{route('greyhound')}}" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                  <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="{{asset('/')}}/assets/img/icons/4339.png"><!----><b>Greyhound Racing</b></div><!----><!---->
                </a></li>
              <li class="nav-item"><a href="https://crickekbuz.art/slot/game/lounch/9280" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                  <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="{{asset('/')}}/assets/img/icons/56767.png"><!----><b>Teenpatti</b></div><!----><!---->
                </a></li>
              <li class="nav-item"><a href="https://crickekbuz.art/slot/game/lounch/9673" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                  <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="{{asset('/')}}/assets/img/icons/98788.png"><!----><b>Roulette</b></div><!----><!---->
                </a></li><!---->
            </ul>
            @if(!empty($response))
            @foreach($response as $r)
            <div class="tab-content">
              <tab role="tabpanel" aria-labelledby="" class="tab-pane active"><!---->
                <div>
                  <div class="row th-head">
                    <div class="col-lg-7 col-md-5 col-6">
                      <p>games</p>
                    </div>
                    <div class="col-lg-5 col-md-7 col-12 text-center px-xl-0"><span>1</span><span>X</span><span>2</span></div><!---->
                  </div>
                  <div class="row td-body" tabindex="0">
                    @php
                    $dateTime = new DateTime($r['datetimeGMT'], new DateTimeZone('GMT'));
                    $dateTime->setTimezone(new DateTimeZone('Asia/Kolkata'));
                    $istTime = $dateTime->format('Y-m-d H:i:s');
                    @endphp

                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="{{ route('Cricket-details',$r['id']) }}">
                        <p> {{$r['game_title']}}<span>&nbsp;/&nbsp;</span><b>{{$r['datetimeGMT']}} (IST)</b></p>
                      </a><!----></div>

                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span @if($r['channel_id']!="") class="active" @endif></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor loginButton"></i><!----></span><span class="game-icon"><img src="{{asset('/')}}/assets/img/icons/ic_fancy.png" class="fancy-icon cursor"><!----></span><span class="game-icon"><img src="{{asset('/')}}/assets/img/icons/ic_bm.png" class="bookmaker-icon cursor"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center"><span>1</span><span>X</span><span>2</span></div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">

                      @if($r['status']==1)
                      <a href="{{ route('Cricket-details',$r['id']) }}">
                        <div class="list-event-odds">
                          <div class="btn-grp-cs"><button class="back"><span class="odd">1.99</span></button><button class="lay"><span class="odd">2</span></button><!----></div>
                          <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                          <div class="btn-grp-cs"><button class="back"><span class="odd">2</span></button><button class="lay"><span class="odd">2.02</span></button><!----></div><!---->
                        </div>
                      </a><!---->
                      @else
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.99</span></button><button class="lay"><span class="odd">2</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">2</span></button><button class="lay"><span class="odd">2.02</span></button><!----></div><!---->
                      </div>
                      @endif

                    </div>
                  </div><!---->
                </div><!----><!----><!---->
              </tab><!---->
            </div>
            @endforeach
            @endif
          </tabset>
        </div>
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
      @if(!empty($data['liveGames']))
        @foreach($data['liveGames'] as $d)
        <a href="/slot/game/lounch/{{$d->id}}">
          <div class="d-inline-block casinoicons"><img class="img-fluid" src="{{$d->img}}">
            <div class="casinoname"> {{$d->name}} </div>
          </div>
        </a>
        @endforeach
        @endif
      </div>
    </div><!----><!----><!---->
  </app-sport-list><!---->


</div>



@endsection
@section('script')

<script>


</script>
<script>
  /* Script Goes Here */

  /* Script Goes Here */
</script>
@endsection
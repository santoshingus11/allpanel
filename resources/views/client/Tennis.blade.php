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
    <div class="w-100 d-flex flex-nowrap overflow-auto gap-2 pt-1 pb-1 top-nav-event-1 d-none d-md-flex">
        @if(!empty($allGames['crickets']))
        @foreach($allGames['crickets'] as $c)
        <a href="{{route('Cricket-details',$c['id'])}}">
          <span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><!---->
            <svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1022 1013" class="icon-blink" style="height: 14px;">
              <path d="M335 330q-26 26-60.5 40T203 384q-21 0-41-4.5T124 366l247-242q25 52 15 109t-51 97zm19-235L94 349q-12-8-22.5-18.5T52 308L312 54q6 4 11.5 8.5T335 73q5 5 10 10.5t9 11.5zm-72-59L35 279q-21-43-18-89.5T46 104q25-40 67-62.5T203 19q20 0 40.5 4.5T282 36zm91 660l67 64 582-580L835 0 253 580l66 64L67 895l-19-18-48 48 92 88 48-48-19-19 252-250z"></path>
            </svg><!----><span class="blink" style="font-size: 13px;">{{$c['game_title']}}</span></span></a><!---->
        @endforeach
        @endif
        @if(!empty($allGames['footballs']))
        @foreach($allGames['footballs'] as $c)
        <a href="{{route('Football-Details',$c['id'])}}">
          <span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><!---->
            <svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1022 1013" class="icon-blink" style="height: 14px;">
              <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z"></path>
            </svg><!----><span class="blink" style="font-size: 13px;">{{$c['game_title']}}</span></span></a><!---->
        @endforeach
        @endif
        @if(!empty($allGames['tennises']))
        @foreach($allGames['tennises'] as $c)
        <a href="{{route('tenis_detail',$c['id'])}}">
          <span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><!---->
            <svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1022 1013" class="icon-blink" style="height: 14px;">
              <path d="M335 330q-26 26-60.5 40T203 384q-21 0-41-4.5T124 366l247-242q25 52 15 109t-51 97zm19-235L94 349q-12-8-22.5-18.5T52 308L312 54q6 4 11.5 8.5T335 73q5 5 10 10.5t9 11.5zm-72-59L35 279q-21-43-18-89.5T46 104q25-40 67-62.5T203 19q20 0 40.5 4.5T282 36zm91 660l67 64 582-580L835 0 253 580l66 64L67 895l-19-18-48 48 92 88 48-48-19-19 252-250z"></path>
            </svg><!----><span class="blink" style="font-size: 13px;">{{$c['game_title']}}</span></span></a><!---->
        @endforeach
        @endif
      </div>
                  
      <div role="tabpanel" aria-labelledby="inplay-tab" class="tab-pane fade show active">
        <div class="games-tabsList">
          <tabset type="pills nav-fill" _nghost-vef-c35="" class="tab-container">
            <ul _ngcontent-nyb-c35="" role="tablist" class="nav nav-pills nav-fill" aria-label="Tabs">
              <li _ngcontent-nyb-c35="" class="nav-item"><a _ngcontent-nyb-c35="" href="{{route('client-home')}}" role="tab" class="nav-link" aria-controls="" aria-selected="true" id=""><span _ngcontent-nyb-c35=""></span>
                  <div _ngcontent-nyb-c80="" class="d-flex flex-column h-full align-items-center justify-content-center"><img _ngcontent-nyb-c80="" class="img-fluid" src="{{asset('/')}}/assets/img/icons/4.png"><!----><b _ngcontent-nyb-c80="">Cricket</b></div><!----><!---->
                </a></li>
              <li _ngcontent-nyb-c35="" class=" nav-item"><a _ngcontent-nyb-c35="" href="{{route('football-frontend')}}" role="tab" class="nav-link " aria-controls="" aria-selected="false" id=""><span _ngcontent-nyb-c35=""></span>
                  <div _ngcontent-nyb-c80="" class="d-flex flex-column h-full align-items-center justify-content-center"><img _ngcontent-nyb-c80="" class="img-fluid" src="{{asset('/')}}/assets/img/icons/1.png"><!----><b _ngcontent-nyb-c80="">Football</b></div><!----><!---->
                </a></li>
              <li _ngcontent-nyb-c35="" class="active nav-item"><a _ngcontent-nyb-c35="" href="{{route('tennis-frontend')}}" role="tab" class="nav-link active" aria-controls="" aria-selected="false" id=""><span _ngcontent-nyb-c35=""></span>
                  <div _ngcontent-nyb-c80="" class="d-flex flex-column h-full align-items-center justify-content-center"><img _ngcontent-nyb-c80="" class="img-fluid" src="{{asset('/')}}/assets/img/icons/2.png"><!----><b _ngcontent-nyb-c80="">Tennis</b></div><!----><!---->
                </a></li>
              <li _ngcontent-nyb-c35="" class="nav-item"><a _ngcontent-nyb-c35="" href="{{route('horse')}}" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span _ngcontent-nyb-c35=""></span>
                  <div _ngcontent-nyb-c80="" class="d-flex flex-column h-full align-items-center justify-content-center"><img _ngcontent-nyb-c80="" class="img-fluid" src="{{asset('/')}}/assets/img/icons/7.png"><!----><b _ngcontent-nyb-c80="">Horse Racing</b></div><!----><!---->
                </a></li>
              <li _ngcontent-nyb-c35="" class="nav-item"><a _ngcontent-nyb-c35="" href="{{route('greyhound')}}" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span _ngcontent-nyb-c35=""></span>
                  <div _ngcontent-nyb-c80="" class="d-flex flex-column h-full align-items-center justify-content-center"><img _ngcontent-nyb-c80="" class="img-fluid" src="{{asset('/')}}/assets/img/icons/4339.png"><!----><b _ngcontent-nyb-c80="">Greyhound Racing</b></div><!----><!---->
                </a></li>
              <li _ngcontent-nyb-c35="" class="nav-item"><a _ngcontent-nyb-c35="" href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span _ngcontent-nyb-c35=""></span>
                  <div _ngcontent-nyb-c80="" class="d-flex flex-column h-full align-items-center justify-content-center"><img _ngcontent-nyb-c80="" class="img-fluid" src="{{asset('/')}}/assets/img/icons/56767.png"><!----><b _ngcontent-nyb-c80="">Teenpatti</b></div><!----><!---->
                </a></li>
              <li _ngcontent-nyb-c35="" class="nav-item"><a _ngcontent-nyb-c35="" href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span _ngcontent-nyb-c35=""></span>
                  <div _ngcontent-nyb-c80="" class="d-flex flex-column h-full align-items-center justify-content-center"><img _ngcontent-nyb-c80="" class="img-fluid" src="{{asset('/')}}/assets/img/icons/98788.png"><!----><b _ngcontent-nyb-c80="">Roulette</b></div><!----><!---->
                </a></li><!---->
            </ul>



            <!-- Content -->
            @if(isset($allGames['tennises']))
            @foreach($allGames['tennises'] as $r)
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
                    @if($r['status']==1)
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="{{route('tenis_detail',$r['id'])}}">
                        <p> {{$r['game_title']}}<span>&nbsp;/&nbsp;</span><b>{{$r['run_date_time']}} (IST)</b></p>
                      </a><!---->
                    </div>
                    @else
                    <div class="col-md-4 col-lg-5 col-6 cursor">
                        <p> {{$r['game_title']}}<span>&nbsp;/&nbsp;</span><b>{{$r['run_date_time']}} (IST)</b></p>
                      <!---->
                    </div>
                    @endif
                    <div class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div class="game-icons"><span class="game-icon"><span @if($r['status']==1) class="active" @endif ></span><!----></span><span class="game-icon"><i class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span class="game-icon"><!----></span><span class="game-icon"><!----></span></div><!---->
                    </div>
                    <div class="col-md-4 col-12 d-sm-none d-block th-head text-center">
                      <span>1</span><span>X</span><span>2</span>
                    </div><!---->
                    <div class="col-md-7 col-lg-5 col-12 pr-xl-0">
                    @if($r['status']==1)
                    <a href="{{ route('tenis_detail',$r['id']) }}">
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">4</span></button><button class="lay"><span class="odd">4.3</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.31</span></button><button class="lay"><span class="odd">1.33</span></button><!----></div><!---->
                      </div><!---->
                     </a>
                     @else
                      <div class="list-event-odds">
                        <div class="btn-grp-cs"><button class="back"><span class="odd">4</span></button><button class="lay"><span class="odd">4.3</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">-</span></button><button class="lay"><span class="odd">-</span></button><!----></div>
                        <div class="btn-grp-cs"><button class="back"><span class="odd">1.31</span></button><button class="lay"><span class="odd">1.33</span></button><!----></div><!---->
                      </div><!---->
                     @endif
                     
                    </div>
                  </div>
                  
                  <!---->
                </div><!----><!----><!---->
              </tab>
            </div>
            @endforeach
            @endif

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
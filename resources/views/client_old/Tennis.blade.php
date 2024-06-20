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
            @if(isset($response))
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
                    @if($r['status']==1)
                    <div class="col-md-4 col-lg-5 col-6 cursor"><a href="{{route('tenis_detail',$r['id'])}}">
                        <p> {{$r['game_title']}}<span>&nbsp;/&nbsp;</span><b>{{date('M d Y h:i A', strtotime($r['created_at']))}} (IST)</b></p>
                      </a><!---->
                    </div>
                    @else
                    <div class="col-md-4 col-lg-5 col-6 cursor">
                        <p> {{$r['game_title']}}<span>&nbsp;/&nbsp;</span><b>{{date('M d Y h:i A', strtotime($r['created_at']))}} (IST)</b></p>
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
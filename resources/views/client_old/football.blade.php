@extends('web_layout.app')
@section('style')
<style>
  /* Style Goes Here */

  /* Style Goes Here */
</style>
@endsection
@section('content')

<div class="col-md-10 pxxs-0"><router-outlet></router-outlet><app-sport-list>
    <div href="javascript:void(0)" class="listing_screen"><!---->
     

      <div href="javascript:void(0)" role="tabpanel" aria-labelledby="inplay-tab" class="tab-pane fade show active">
        <div href="javascript:void(0)" class="games-tabsList">
          <tabset href="javascript:void(0)" type="pills nav-fill" class="tab-container">
            <ul _ngcontent-nyb-c35="" role="tablist" class="nav nav-pills nav-fill" aria-label="Tabs">
              <li _ngcontent-nyb-c35="" class="nav-item"><a _ngcontent-nyb-c35="" href="{{route('client-home')}}" role="tab" class="nav-link" aria-controls="" aria-selected="true" id=""><span _ngcontent-nyb-c35=""></span>
                  <div _ngcontent-nyb-c80="" class="d-flex flex-column h-full align-items-center justify-content-center"><img _ngcontent-nyb-c80="" class="img-fluid" src="{{asset('/')}}/assets/img/icons/4.png"><!----><b _ngcontent-nyb-c80="">Cricket</b></div><!----><!---->
                </a></li>
              <li _ngcontent-nyb-c35="" class="active nav-item"><a _ngcontent-nyb-c35="" href="{{route('football-frontend')}}" role="tab" class="nav-link active" aria-controls="" aria-selected="false" id=""><span _ngcontent-nyb-c35=""></span>
                  <div _ngcontent-nyb-c80="" class="d-flex flex-column h-full align-items-center justify-content-center"><img _ngcontent-nyb-c80="" class="img-fluid" src="{{asset('/')}}/assets/img/icons/1.png"><!----><b _ngcontent-nyb-c80="">Football</b></div><!----><!---->
                </a></li>
              <li _ngcontent-nyb-c35="" class="nav-item"><a _ngcontent-nyb-c35="" href="{{route('tennis-frontend')}}" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span _ngcontent-nyb-c35=""></span>
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
              <tab href="javascript:void(0)" role="tabpanel" aria-labelledby="" class="tab-pane active"><!---->
                <div href="javascript:void(0)">
                  <div href="javascript:void(0)" class="row th-head">
                    <div href="javascript:void(0)" class="col-lg-7 col-md-5 col-6">
                      <p href="javascript:void(0)">games</p>
                    </div>
                    <div href="javascript:void(0)" class="col-lg-5 col-md-7 col-12 text-center px-xl-0"><span href="javascript:void(0)">1</span><span href="javascript:void(0)">X</span><span href="javascript:void(0)">2</span></div><!---->
                  </div>
                  <div href="javascript:void(0)" class="row td-body" tabindex="0">
                        @php 
                            $dateTime = new DateTime($r['run_date_time'], new DateTimeZone('America/New_York'));
                            $dateTime->setTimezone(new DateTimeZone('Asia/Kolkata'));
                            $istTime = $dateTime->format('Y-m-d H:i:s');
                        @endphp
                   
                    <div href="javascript:void(0)" class="col-md-4 col-lg-5 col-6 cursor"><a href="{{route('Football-Details',$r['id'])}}">
                        <p href="javascript:void(0)"> {{$r['game_title']}}<span href="javascript:void(0)">&nbsp;/&nbsp;</span><b href="javascript:void(0)">{{$istTime}} </b></p>
                      </a><!----></div>
                    
                    <div href="javascript:void(0)" class="col-md-1 col-lg-2 col-6 px-lg-0">
                      <div href="javascript:void(0)" class="game-icons"><span href="javascript:void(0)" class="game-icon"><span href="javascript:void(0)" @if($r['status']==1) class="active" @endif ></span><!----></span><span href="javascript:void(0)" class="game-icon"><i href="javascript:void(0)" class="fa fa-tv v-m icon-tv cursor"></i><!----></span><span href="javascript:void(0)" class="game-icon"><!----></span><span href="javascript:void(0)" class="game-icon"><!----></span></div><!---->
                    </div>
                    <div href="javascript:void(0)" class="col-md-4 col-12 d-sm-none d-block th-head text-center"><span href="javascript:void(0)">1</span><span href="javascript:void(0)">X</span><span href="javascript:void(0)">2</span></div><!---->
                    <div href="javascript:void(0)" class="col-md-7 col-lg-5 col-12 pr-xl-0">
                      
                      @if($r['status']==1)
                    <a href="{{ route('Football-Details',$r['id']) }}">
                      <div href="javascript:void(0)" class="list-event-odds">
                        <div href="javascript:void(0)" class="btn-grp-cs"><button href="javascript:void(0)" class="back"><span href="javascript:void(0)" class="odd">-</span></button><button href="javascript:void(0)" class="lay"><span href="javascript:void(0)" class="odd">1.01</span></button><!----></div>
                        <div href="javascript:void(0)" class="btn-grp-cs"><button href="javascript:void(0)" class="back"><span href="javascript:void(0)" class="odd">1000</span></button><button href="javascript:void(0)" class="lay"><span href="javascript:void(0)" class="odd">-</span></button><!----></div>
                        <div href="javascript:void(0)" class="btn-grp-cs"><button href="javascript:void(0)" class="back"><span href="javascript:void(0)" class="odd">1000</span></button><button href="javascript:void(0)" class="lay"><span href="javascript:void(0)" class="odd">-</span></button><!----></div><!---->
                      </div><!---->
                      </a>
                      @else
                      <div href="javascript:void(0)" class="list-event-odds">
                        <div href="javascript:void(0)" class="btn-grp-cs"><button href="javascript:void(0)" class="back"><span href="javascript:void(0)" class="odd">-</span></button><button href="javascript:void(0)" class="lay"><span href="javascript:void(0)" class="odd">1.01</span></button><!----></div>
                        <div href="javascript:void(0)" class="btn-grp-cs"><button href="javascript:void(0)" class="back"><span href="javascript:void(0)" class="odd">1000</span></button><button href="javascript:void(0)" class="lay"><span href="javascript:void(0)" class="odd">-</span></button><!----></div>
                        <div href="javascript:void(0)" class="btn-grp-cs"><button href="javascript:void(0)" class="back"><span href="javascript:void(0)" class="odd">1000</span></button><button href="javascript:void(0)" class="lay"><span href="javascript:void(0)" class="odd">-</span></button><!----></div><!---->
                      </div><!---->
                      @endif
                      
                    </div>
                  </div>
                  
                </div><!----><!----><!---->
              </tab>
            </div>
            @endforeach
            @endif
            
            <!-- Content -->


          </tabset>
        </div>
      </div>
      <div href="javascript:void(0)" role="tabpanel" aria-labelledby="inplay-tab" class="tab-pane fade show active ds-none">
        <div href="javascript:void(0)" class="games-tabsList">
          <tabset href="javascript:void(0)" type="pills nav-fill" class="tab-container">
            <ul role="tablist" class="nav nav-pills nav-fill" aria-label="Tabs"><!----></ul>
            <div class="tab-content"><!----><!----><!----><!----></div>
          </tabset>
        </div>
      </div><!---->
    </div><!---->

  </app-sport-list><!----></div>

@endsection
@section('script')
<script>
  /* Script Goes Here */

  /* Script Goes Here */
</script>
@endsection
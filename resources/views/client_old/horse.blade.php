@extends('web_layout.app')
@section('style')

@endsection
@section('content')
<div _ngcontent-wun-c75="" class="col-md-10 pxxs-0"><router-outlet _ngcontent-wun-c75=""></router-outlet><app-sport-list _nghost-wun-c79="">
        <div class="listing_screen"><!---->
            
            <div role="tabpanel" aria-labelledby="inplay-tab" class="tab-pane fade show active">
                <div class="games-tabsList">
                    <tabset type="pills nav-fill" class="tab-container">
                        <ul _ngcontent-nyb-c35="" role="tablist" class="nav nav-pills nav-fill" aria-label="Tabs">
                      <li _ngcontent-nyb-c35="" class="nav-item"><a _ngcontent-nyb-c35="" href="{{route('client-home')}}" role="tab" class="nav-link" aria-controls="" aria-selected="true" id=""><span _ngcontent-nyb-c35=""></span>
                          <div _ngcontent-nyb-c80="" class="d-flex flex-column h-full align-items-center justify-content-center"><img _ngcontent-nyb-c80="" class="img-fluid" src="{{asset('/')}}/assets/img/icons/4.png"><!----><b _ngcontent-nyb-c80="">Cricket</b></div><!----><!---->
                        </a></li>
                      <li _ngcontent-nyb-c35="" class=" nav-item"><a _ngcontent-nyb-c35="" href="{{route('football-frontend')}}" role="tab" class="nav-link " aria-controls="" aria-selected="false" id=""><span _ngcontent-nyb-c35=""></span>
                          <div _ngcontent-nyb-c80="" class="d-flex flex-column h-full align-items-center justify-content-center"><img _ngcontent-nyb-c80="" class="img-fluid" src="{{asset('/')}}/assets/img/icons/1.png"><!----><b _ngcontent-nyb-c80="">Football</b></div><!----><!---->
                        </a></li>
                      <li _ngcontent-nyb-c35="" class=" nav-item"><a _ngcontent-nyb-c35="" href="{{route('tennis-frontend')}}" role="tab" class="nav-link " aria-controls="" aria-selected="false" id=""><span _ngcontent-nyb-c35=""></span>
                          <div _ngcontent-nyb-c80="" class="d-flex flex-column h-full align-items-center justify-content-center"><img _ngcontent-nyb-c80="" class="img-fluid" src="{{asset('/')}}/assets/img/icons/2.png"><!----><b _ngcontent-nyb-c80="">Tennis</b></div><!----><!---->
                        </a></li>
                      <li _ngcontent-nyb-c35="" class="active nav-item"><a _ngcontent-nyb-c35="" href="{{route('horse')}}" role="tab" class="nav-link active" aria-controls="" aria-selected="false" id=""><span _ngcontent-nyb-c35=""></span>
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
                    
            
            
                        <div class="row mt-2">
                            <div class="col-md-12 col-lg-12 col-12">
                                <tabset type="pills" class="tab-container">
                                    <ul role="tablist" class="nav nav-pills" aria-label="Tabs">
                                        <li class="active nav-item"><a href="javascript:void(0);" role="tab" class="nav-link active" aria-controls="" aria-selected="true" id=""><span>IE</span><!----><!----></a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span>GB</span><!----><!----></a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span>US</span><!----><!----></a></li>
                                        <!---->
                                    </ul>
                                   
                                    @if(isset($response))
                                    @foreach($response as $r)
                                    <div class="tab-content">
                                        <tab role="tabpanel" aria-labelledby="" class="tab-pane active">
                                            <div class="bet-table horse-table">
                                                <div class="coupon-card coupon-card-first">
                                                    <div class="card-content">
                                                        <div class="row align-items-center mx-0">
                                                            <div class="col-md-3 col-12">  {{$r['game_title']}} </div>
                                                            <div class="col-md-9 col-12">
                                                                <div class="horse-time-detail">
                                                                    
                                                                    @foreach($r['time_slots'] as $time)
                                                                    <a href="{{route('horse_detail',$time['id'])}}"><span>{{$time['time_slot']}}</span></a>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div><!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </tab>
                                    </div>
                                    @endforeach
                                    @endif
                                    
                                </tabset>
                            </div>
                        </div>
                    </tabset>
                </div>
            </div>
            <div role="tabpanel" aria-labelledby="inplay-tab" class="tab-pane fade show active ds-none">
                <div class="games-tabsList">
                    <tabset type="pills nav-fill" class="tab-container">
                        <ul role="tablist" class="nav nav-pills nav-fill" aria-label="Tabs"><!----></ul>
                        <div class="tab-content"><!----><!----><!----><!----></div>
                    </tabset>
                </div>
            </div><!---->
        </div><!---->

    </app-sport-list><!---->
</div>

@endsection
@section('script')
<script>
    /* Script Goes Here */

    /* Script Goes Here */
</script>
@endsection
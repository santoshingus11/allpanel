<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('layouts.client-header-url')
  <style>
      @keyframes blink {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.blinking-text {
    font-size:12px !important;
  animation: blink 1s infinite;
}
  </style>
  
</head>
<?php $page = 'Home';
 ?>
 @include('layouts.client-header')
<section id="home-pages" class="home_pages">
  <div class="banner">
    <div class="container-fluid  m-0">
      <div class="row">
        <div class="col-lg-2 col-md-12 col-sm-12 p-0">
          <div class="All-pages-left-side-bar">
            @include('layouts.client-left-side-bar-old')
          </div>
        </div>
        <div class="col-lg-10 col-md-12 col-sm-12">
             
          <div class="Home_pages_main_section">
              <nav class="navbar navbar-expand-lg mt-1">
      <div class="container-fluid p-0 m-0" >
        <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--  <span class="navbar-toggler-icon"></span>-->
        <!--</button>-->
        <div class="" id="navbarSupportedContent" style="max-width: 100%;">
          <ul class="d-flex justify-content-around navb" style="overflow-x: auto;" >
            <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('football-frontend')}}" class="nav-link"> <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
          <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('tennis-frontend')}}" class="nav-link"> <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
          <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
          <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('table-tenis-frontend')}}" class="nav-link"> <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
          <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('darts-frontend')}}" class="nav-link">
              <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
          <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
          <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('kabaddi-frontend')}}" class="nav-link"> <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
          <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('boxing-frontend')}}" class="nav-link"> <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
          <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('arts-frontend')}}" class="nav-link">
              <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
          
          </ul>
        </div>
      </div>
    </nav>
    
    <nav class="navbar navbar-expand-lg home-nav-2 d-none d-md-block" style="background: #8A2BE2;">
      <div class="container-fluid" >
        <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--  <span class="navbar-toggler-icon"></span>-->
        <!--</button>-->
        <div class="" id="navbarSupportedContent" style="max-width: 100%;">
          <ul class="d-flex justify-content-around navb" style="overflow-x: auto;" >
            <li class="nav-item col-auto p-2 px-3"><a href="{{route('tennis-frontend')}}" class="nav-link"> <span class="link-name">Inplay</span></a></li>
          <li class="nav-item col-auto p-2 px-3"><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name">Cricket</span></a></li>
          <li class="nav-item col-auto p-2 px-3"><a href="{{route('table-tenis-frontend')}}" class="nav-link"> <span class="link-name">Footbal</span></a></li>
          <li class="nav-item col-auto p-2 px-3"><a href="{{route('darts-frontend')}}" class="nav-link">
              <span class="link-name">Tennis</span></a></li>
          <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Horse Racing</span></a></li>
          <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Sports</span></a></li>
          <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Casino</span></a></li>
          <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Sports Book</span></a></li>
          <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Others</span></a></li>
         
          </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg d-block d-md-none"">
      <div class="" >
        <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--  <span class="navbar-toggler-icon"></span>-->
        <!--</button>-->
        <div class="" id="navbarSupportedContent" style="max-width: 100%;">
          <ul class="d-flex justify-content-around navb" style="overflow-x: auto;" >
            <li class="nav-item col-auto p-2 px-3 text-center" style="min-width: 50%; background: #223577;"><a href="{{route('tennis-frontend')}}" class="nav-link"> <span class="link-name text-white">IPL 2024</span></a></li>
          <li class="nav-item col-auto p-2 px-3 text-center" style="min-width: 50%; background: #bb1919"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name text-white">LOK SABHA 2024</span></a></li>
         
          </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg home-nav-2 d-block d-md-none" style="background: #8A2BE2;">
      <div class="container-fluid" >
        <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--  <span class="navbar-toggler-icon"></span>-->
        <!--</button>-->
        <div class="" id="navbarSupportedContent" style="max-width: 100%;">
          <ul class="d-flex justify-content-around navb" style="overflow-x: auto;" >
            <li class="nav-item col-auto p-2 px-3"><a href="{{route('tennis-frontend')}}" class="nav-link"> <span class="link-name">Inplay</span></a></li>
          <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Sports</span></a></li>
          <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Casino</span></a></li>
          <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Sports Book</span></a></li>
          <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Others</span></a></li>
         
          </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg d-block d-md-none" style="background: #8A2BE2;">
      <div class="container-fluid" >
        <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--  <span class="navbar-toggler-icon"></span>-->
        <!--</button>-->
        <div class="" id="navbarSupportedContent" style="max-width: 100%;">
          <ul class="d-flex justify-content-around navb" style="overflow-x: auto;" >
          <li class="nav-item col-auto p-2 px-3 text-center"><i class="fa fa-pen text-white mb-1"></i><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name">Cricket</span></a></li>
          <li class="nav-item col-auto p-2 px-3 text-center"><i class="fa fa-pen text-white mb-1"></i><a href="{{route('table-tenis-frontend')}}" class="nav-link"> <span class="link-name">Footbal</span></a></li>
          <li class="nav-item col-auto p-2 px-3 text-center"><i class="fa fa-pen text-white mb-1"></i><a href="{{route('darts-frontend')}}" class="nav-link">
              <span class="link-name">Tennis</span></a></li>
          <li class="nav-item col-auto p-2 px-3 text-center"><i class="fa fa-pen text-white mb-1"></i><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Horse Racing</span></a></li>
          <li class="nav-item col-auto p-2 px-3 text-center"><i class="fa fa-pen text-white mb-1"></i><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Greyhound racing</span></a></li>
         
          </ul>
        </div>
      </div>
    </nav>
            <div class="">
              <div class="events">
                <h1 class="event_Cricket">Cricket
                  <span class="starts-in-label">Betting from 30 mins before start</span>
                </h1>
                <div class="events-row">
                  <table class="market-listing-table">
                    <thead>
                      <tr>
                        <th class="title">Match</th>
                        <th colspan="2" class="text-center">1</th>
                        <th colspan="2" class="text-center">X</th>
                        <th colspan="2" class="text-center">2</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td><a href="{{route('Cricket-details-pages-4')}}" class="event-name">Sydney Sixers WBBL v Perth Scorchers WBBL</a> <small><span class="event-inplay float-right"><img src="{{asset('frontend/assets/icons/inplay.png')}}">In-Play
                            </span></small></td>
                        <td class="back"><strong class="odds">4.7</strong></td>
                        <td class="lay"><strong class="odds">4.8</strong></td>
                        <td class="empty betting-disabled"><span>
                            0
                          </span></td>
                        <td class="empty betting-disabled"><span>0</span></td>
                        <td class="back"><strong class="odds">1.26</strong></td>
                        <td class="lay"><strong class="odds">1.27</strong></td>
                      </tr>
                      <tr>
                        <td><img src="{{asset('frontend/assets/icons/game-icon.svg')}}" class="icon-vir"> <a href="Cricket-details-pages-4.php" class="event-name">Australia T10 v South Africa T10</a> <small><span class="event-inplay float-right"><img src="{{asset('frontend/assets/icons/inplay.png')}}">In-Play
                            </span></small></td>
                        <td class="back"><strong class="odds">0</strong></td>
                        <td class="lay"><strong class="odds">0</strong></td>
                        <td class="empty betting-disabled"><span>
                            0
                          </span></td>
                        <td class="empty betting-disabled"><span>0</span></td>
                        <td class="back"><strong class="odds">0</strong></td>
                        <td class="lay"><strong class="odds">0</strong></td>
                      </tr>
                      <tr>
                        <td><img src="{{asset('frontend/assets/icons/ic_vir.png')}}" class="icon-vir"> <a href="{{route('Cricket-details-pages-3')}}" class="event-name">GAW XI v SNP XI</a> <small><span class="event-inplay float-right"><img src="{{asset('frontend/assets/icons/inplay.png')}}">In-Play
                            </span></small></td>
                        <td class="back"><strong class="odds">0</strong></td>
                        <td class="lay"><strong class="odds">0</strong></td>
                        <td class="empty betting-disabled"><span>
                            0
                          </span></td>
                        <td class="empty betting-disabled"><span>0</span></td>
                        <td class="back"><strong class="odds">0</strong></td>
                        <td class="lay"><strong class="odds">0</strong></td>
                      </tr>
                      <tr>
                        <td><img src="{{asset('frontend/assets/icons/ic_vir.png')}}" class="icon-vir"> <a href="{{route('Cricket-details-pages-3')}}" class="event-name">Delhi XI v Mumbai XI</a> <small><span class="event-inplay float-right">16/11/2023 11:20:00</span></small></td>
                        <td class="back"><strong class="odds">0</strong></td>
                        <td class="lay"><strong class="odds">0</strong></td>
                        <td class="empty betting-disabled"><span>
                            0
                          </span></td>
                        <td class="empty betting-disabled"><span>0</span></td>
                        <td class="back"><strong class="odds">0</strong></td>
                        <td class="lay"><strong class="odds">0</strong></td>
                      </tr>
                      <tr>
                        <td><img src="{{asset('frontend/assets/icons/game-icon.svg')}}" class="icon-vir"> <a href="{{route('Cricket-details-pages-3')}}" class="event-name">India T10 v Australia T10</a> <small><span>16/11/2023 11:40:00</span></small></td>
                        <td class="back"><strong class="odds">0</strong></td>
                        <td class="lay"><strong class="odds">0</strong></td>
                        <td class="empty betting-disabled"><span>
                            0
                          </span></td>
                        <td class="empty betting-disabled"><span>0</span></td>
                        <td class="back"><strong class="odds">0</strong></td>
                        <td class="lay"><strong class="odds">0</strong></td>
                      </tr>
                      <tr>
                        <td><img src="{{asset('frontend/assets/icons/game-icon.svg')}}" class="icon-vir"> <a href="{{route('Cricket-details-pages-3')}}" class="event-name">Bangladesh T10 v India T10</a> <small><span>16/11/2023 12:40:00</span></small></td>
                        <td class="back"><strong class="odds">0</strong></td>
                        <td class="lay"><strong class="odds">0</strong></td>
                        <td class="empty betting-disabled"><span>
                            0
                          </span></td>
                        <td class="empty betting-disabled"><span>0</span></td>
                        <td class="back"><strong class="odds">0</strong></td>
                        <td class="lay"><strong class="odds">0</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Cricket-details-pages-2')}}" class="event-name">South Africa v Australia</a> <small><span>16/11/2023 14:00:00</span></small></td>
                        <td class="back"><strong class="odds">2.32</strong></td>
                        <td class="lay"><strong class="odds">2.34</strong></td>
                        <td class="empty betting-disabled"><span>
                            0
                          </span></td>
                        <td class="empty betting-disabled"><span>0</span></td>
                        <td class="back"><strong class="odds">1.74</strong></td>
                        <td class="lay"><strong class="odds">1.75</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Cricket-details')}}" class="event-name">Melbourne Stars WBBL v Hobart Hurricanes WBBL</a> <small><span>17/11/2023 10:40:00</span></small></td>
                        <td class="back"><strong class="odds">1.74</strong></td>
                        <td class="lay"><strong class="odds">1.87</strong></td>
                        <td class="empty betting-disabled"><span>
                            0
                          </span></td>
                        <td class="empty betting-disabled"><span>0</span></td>
                        <td class="back"><strong class="odds">2.14</strong></td>
                        <td class="lay"><strong class="odds">2.36</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Cricket-details')}}" class="event-name">Brisbane Heat WBBL v Melbourne Renegades WBBL</a> <small><span>17/11/2023 14:10:00</span></small></td>
                        <td class="back"><strong class="odds">1.46</strong></td>
                        <td class="lay"><strong class="odds">1.53</strong></td>
                        <td class="empty betting-disabled"><span>
                            0
                          </span></td>
                        <td class="empty betting-disabled"><span>0</span></td>
                        <td class="back"><strong class="odds">2.88</strong></td>
                        <td class="lay"><strong class="odds">3.2</strong></td>
                      </tr>
                    </tbody>

                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('layouts.client-footer')
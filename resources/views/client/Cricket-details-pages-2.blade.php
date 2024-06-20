<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('layouts.client-header-url')
</head>
<?php $page = 'Home';
 ?>
 @include('layouts.client-header')

<section id="home-pages" class="home_pages">
  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-12 col-sm-12">
          <div class="All-pages-left-side-bar">
            <div class="left-pane">
              <aside class="menu">
                <nav class="tree-menu">
                  <div class="left-menu-inner">

                    <ul class="menu-column menu-prev sport-type-Cricket">
                      <li><a href="{{route('home')}}" class="home-link"><i class="fas fa-home"></i> <span class="link-name">Sports</span></a></li>
                      <li><a href="#" class="link-lvl-sport router-link-exact-active router-link-active"><img src="assets/icons/4.png" class="game-icon"> <span class="link-name">Cricket</span></a></li>
                      <li><a href="{{route('cricket-frontend')}}" class="link-lvl-prev"><i class="fas fa-chevron-circle-left"></i> <span class="link-name">Previous</span></a></li>
                      <span>
                        <li><a href="#" class="menu-link sport-type-Cricket"><span class="link-name">Indian Premier League</span> <i class="fas fa-angle-right float-right"></i></a></li>
                        <li><a href="#" class="menu-link sport-type-Cricket"><span class="link-name">WBBL</span> <i class="fas fa-angle-right float-right"></i></a></li>
                        <li><a href="#" class="menu-link sport-type-Cricket"><span class="link-name">ICC Cricket World Cup</span> <i class="fas fa-angle-right float-right"></i></a></li>
                        <li><a href="#" class="menu-link sport-type-Cricket"><span class="link-name">T5 XI</span> <i class="fas fa-angle-right float-right"></i></a></li>
                        <li><a href="#" class="menu-link sport-type-Cricket"><span class="link-name">T10 XI</span> <i class="fas fa-angle-right float-right"></i></a></li>
                        <li><a href="#" class="menu-link sport-type-Cricket"><span class="link-name">Virtual Cricket League</span> <i class="fas fa-angle-right float-right"></i></a></li>
                      </span>
                    </ul>
                  </div>
                </nav>
              </aside>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12">
          <div class="Home_pages_main_section">
            <div class="sports-wrapper block">
              <div class="events">
                <h1 class="event_Cricket">South Africa v Australia
                  <span class="starts-in-label">17/11/2023 14:10:00</span>
                </h1>
                <div class="events-row extra-data-height-scroll">
                  <table class="market-listing-table table bet-fair">
                    <thead>
                      <tr class="bg-remove-th border-top">
                        <th class="market-name title">
                          MATCH_ODDS
                        </th>
                        <th colspan="2"></th>
                        <th class="back"><span>Back</span></th>
                        <th class="lay"><span>Lay</span></th>
                        <th colspan="2"></th>
                      </tr>
                    </thead>
                    <tbody data-title="OPEN" class="">
                      <tr data-title="OPEN" class="">
                        <td>
                          <div class="event-name" style="color: rgb(15, 35, 39);">South Africa</div>
                          <p class="m-b-0"><span style="color: black;">0</span> <span style="display: none; color: black;"> &gt;&gt; 0</span></p>
                        </td>
                        <td class="back unhighlighted"><strong class="odds">2.28</strong>
                          <div class="size"><span><span>8299.1K</span></span></div>
                        </td>
                        <td class="back unhighlighted"><strong class="odds">2.3</strong>
                          <div class="size"><span><span>8058.8K</span></span></div>
                        </td>
                        <td class="back"><strong class="odds">2.32</strong>
                          <div class="size"><span><span>7207.1K</span></span></div>
                        </td>
                        <td class="lay"><strong class="odds">2.34</strong>
                          <div class="size"><span><span>1041.5K</span></span></div>
                        </td>
                        <td class="lay unhighlighted"><strong class="odds">2.36</strong>
                          <div class="size"><span><span>12792.5K</span></span></div>
                        </td>
                        <td class="lay unhighlighted"><strong class="odds">2.38</strong>
                          <div class="size"><span><span>11656.5K</span></span></div>
                        </td>
                      </tr>
                      <tr data-title="OPEN" class="">
                        <td>
                          <div class="event-name" style="color: rgb(15, 35, 39);">Australia</div>
                          <p class="m-b-0"><span style="color: black;">0</span> <span style="display: none; color: black;"> &gt;&gt; 0</span></p>
                        </td>
                        <td class="back unhighlighted"><strong class="odds">1.72</strong>
                          <div class="size"><span><span>6650.9K</span></span></div>
                        </td>
                        <td class="back unhighlighted"><strong class="odds">1.73</strong>
                          <div class="size"><span><span>16272.9K</span></span></div>
                        </td>
                        <td class="back"><strong class="odds">1.74</strong>
                          <div class="size"><span><span>18344.1K</span></span></div>
                        </td>
                        <td class="lay"><strong class="odds">1.75</strong>
                          <div class="size"><span><span>4050.9K</span></span></div>
                        </td>
                        <td class="lay unhighlighted"><strong class="odds">1.76</strong>
                          <div class="size"><span><span>10223.4K</span></span></div>
                        </td>
                        <td class="lay unhighlighted"><strong class="odds">1.77</strong>
                          <div class="size"><span><span>8643.6K</span></span></div>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="row bookmaker-market">
                    <div class="bm1 col-xl-12">
                      <div>
                        <div class="game-title m-t-5">
                          <h5 class=" d-inline-block m-b-0">Bookmaker</h5>
                        </div>
                        <table class="market-listing-table table m-b-0 m-t-5">
                          <thead>
                            <tr class="bg-remove-th border-top">
                              <th class="market-name title"></th>
                              <th colspan="2"></th>
                              <th class="back"><span>Back</span></th>
                              <th class="lay"><span>Lay</span></th>
                              <th colspan="2"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr data-title="SUSPENDED" class="suspended">
                              <td>
                                <div class="event-name" style="color: rgb(15, 35, 39);">South Africa</div>
                                <p class="m-b-0"><span style="color: black;">0</span> <span style="display: none; color: black;"> &gt;&gt; 0</span></p>
                              </td>
                              <td class="back unhighlighted betting-disabled"><strong class="odds">0</strong>
                                <div class="size"><span>0.0</span></div>
                              </td>
                              <td class="back unhighlighted betting-disabled"><strong class="odds">0</strong>
                                <div class="size"><span>0.0</span></div>
                              </td>
                              <td class="back betting-disabled"><strong class="odds">0</strong>
                                <div class="size"><span>0.0</span></div>
                              </td>
                              <td class="lay betting-disabled"><strong class="odds">0</strong>
                                <div class="size"><span>0.0</span></div>
                              </td>
                              <td class="lay unhighlighted betting-disabled"><strong class="odds">0</strong>
                                <div class="size"><span>0.0</span></div>
                              </td>
                              <td class="lay unhighlighted betting-disabled"><strong class="odds">0</strong>
                                <div class="size"><span>0.0</span></div>
                              </td>
                            </tr>
                            <tr data-title="ACTIVE" class="">
                              <td>
                                <div class="event-name" style="color: rgb(15, 35, 39);">Australia</div>
                                <p class="m-b-0"><span style="color: black;">0</span> <span style="display: none; color: black;"> &gt;&gt; 0</span></p>
                              </td>
                              <td class="back unhighlighted betting-disabled"><strong class="odds">0</strong>
                                <div class="size"><span>0.0</span></div>
                              </td>
                              <td class="back unhighlighted betting-disabled"><strong class="odds">0</strong>
                                <div class="size"><span>0.0</span></div>
                              </td>
                              <td class="back"><strong class="odds">72</strong>
                                <div class="size"><span>500K</span></div>
                              </td>
                              <td class="lay"><strong class="odds">75</strong>
                                <div class="size"><span>500K</span></div>
                              </td>
                              <td class="lay unhighlighted betting-disabled"><strong class="odds">0</strong>
                                <div class="size"><span>0.0</span></div>
                              </td>
                              <td class="lay unhighlighted betting-disabled"><strong class="odds">0</strong>
                                <div class="size"><span>0.0</span></div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="min-max text-right mt-1" style="border-bottom: 0px;"><span>Min: <span>50</span></span> <span>Max: <span>250K</span></span></div>
                        <div>
                          <marquee>Play World's Fastest Cricket Game Ball By Ball,Started In Our Exchange!!!</marquee>
                        </div>
                      </div>
                    </div> <!---->
                  </div>

                  <div class="fancy-market-container row">
                    <div class="fancy-market col-lg-6 col-md-12 col-sm-12">
                      <div class="row m-b-20">
                        <div class="col-md-12">
                          <div class="game-title m-t-5">
                            <h5 class=" d-inline-block m-b-0"><span>Fancy Market</span></h5>
                          </div>
                          <div class="table-header">
                            <div class="float-left country-name"></div>
                            <div class="box-w1 float-left ">No</div>
                            <div class=" box-w1 float-left ">Yes</div>
                            <div class="box-w2 float-left"></div>
                          </div>
                          <div class="table-body">
                            <div class="fancy-tripple">
                              <div data-title="" class="table-row">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      10 over runs SA(SA vs AUS)adv
                                    </span> <img src="assets/icons/ladder.png" class="float-right ladder-icon m-t-5"></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 lay float-left text-center"><span class="odd d-block">51</span> <span>100</span></div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">53</span> <span>100</span></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>25K</span></span></div>
                              </div>
                            </div>
                            <div class="fancy-tripple">
                              <div data-title="" class="table-row">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      10 over runs AUS(SA vs AUS)adv
                                    </span> <img src="assets/icons/ladder.png" class="float-right ladder-icon m-t-5"></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 lay float-left text-center"><span class="odd d-block">62</span> <span>100</span></div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">64</span> <span>100</span></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>25K</span></span></div>
                              </div>
                            </div>
                            <div class="fancy-tripple">
                              <div data-title="" class="table-row">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      Match 1st over run(SA vs AUS)adv
                                    </span> <img src="assets/icons/ladder.png" class="float-right ladder-icon m-t-5"></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 lay float-left text-center"><span class="odd d-block">4</span> <span>100</span></div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">5</span> <span>100</span></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>25K</span></span></div>
                              </div>
                            </div>
                            <div class="fancy-tripple">
                              <div data-title="" class="table-row">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      Match 1st over Dotball(SA vs AUS)adv
                                    </span> <img src="assets/icons/ladder.png" class="float-right ladder-icon m-t-5"></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 lay float-left text-center"><span class="odd d-block">4</span> <span>100</span></div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">5</span> <span>100</span></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>25K</span></span></div>
                              </div>
                            </div>
                            <div class="fancy-tripple">
                              <div data-title="" class="table-row">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      50 over runs SA(SA vs AUS)adv
                                    </span> <img src="assets/icons/ladder.png" class="float-right ladder-icon m-t-5"></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 lay float-left text-center"><span class="odd d-block">291</span> <span>100</span></div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">295</span> <span>100</span></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>25K</span></span></div>
                              </div>
                            </div>
                            <div class="fancy-tripple">
                              <div data-title="" class="table-row">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      50 over runs AUS(SA vs AUS)adv
                                    </span> <img src="assets/icons/ladder.png" class="float-right ladder-icon m-t-5"></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 lay float-left text-center"><span class="odd d-block">307</span> <span>100</span></div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">311</span> <span>100</span></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>25K</span></span></div>
                              </div>
                            </div>
                            <div class="fancy-tripple">
                              <div data-title="" class="table-row">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      Fall of 1st wkt SA(SA vs AUS)adv
                                    </span> <img src="assets/icons/ladder.png" class="float-right ladder-icon m-t-5"></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 lay float-left text-center"><span class="odd d-block">28</span> <span>120</span></div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">28</span> <span>90</span></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>25K</span></span></div>
                              </div>
                            </div>
                            <div class="fancy-tripple">
                              <div data-title="" class="table-row">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      Fall of 1st wkt AUS(SA vs AUS)adv
                                    </span> <img src="assets/icons/ladder.png" class="float-right ladder-icon m-t-5"></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 lay float-left text-center"><span class="odd d-block">32</span> <span>120</span></div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">32</span> <span>90</span></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>25K</span></span></div>
                              </div>
                            </div>
                            <div class="fancy-tripple">
                              <div data-title="" class="table-row">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      1st 2 wkt runs SA(SA vs AUS)adv
                                    </span> <img src="assets/icons/ladder.png" class="float-right ladder-icon m-t-5"></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 lay float-left text-center"><span class="odd d-block">75</span> <span>110</span></div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">75</span> <span>90</span></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>25K</span></span></div>
                              </div>
                            </div>
                            <div class="fancy-tripple">
                              <div data-title="" class="table-row">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      1st Inn 0 to 50 overs Total Sixes AUS adv
                                    </span> <img src="assets/icons/ladder.png" class="float-right ladder-icon m-t-5"></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 lay float-left text-center"><span class="odd d-block">8</span> <span>100</span></div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">10</span> <span>100</span></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>12.5K</span></span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fancy-market col-lg-6 col-md-12 col-sm-12">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="game-title m-t-5">
                            <h5 class=" d-inline-block m-b-0">Fancy Market 1</h5>
                          </div>
                          <div class="table-header">
                            <div class="float-left country-name"></div>
                            <div class="box-w1 float-left ">Back</div>
                            <div class=" box-w1 float-left ">Lay</div>
                            <div class="box-w2 float-left"></div>
                          </div>
                          <div class="table-body">
                            <div data-title="" class="fancy-tripple">
                              <div class="table-row ">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      SA Will Win the Toss bhav(SA vs AUS)adv
                                    </span></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">1.95</span> <span>500K</span></div>
                                <div class="box-w1 lay float-left text-center betting-disabled"><!----></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>50K</span></span></div>
                              </div>
                            </div>
                            <div data-title="" class="fancy-tripple">
                              <div class="table-row ">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      AUS Will Win the Toss bhav(SA vs AUS)adv
                                    </span></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">1.95</span> <span>500K</span></div>
                                <div class="box-w1 lay float-left text-center betting-disabled"><!----></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>50K</span></span></div>
                              </div>
                            </div>
                            <div data-title="" class="fancy-tripple">
                              <div class="table-row ">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      Lunch Favourite Match Odds(SA vs AUS)adv
                                    </span></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">1.39</span> <span>500K</span></div>
                                <div class="box-w1 lay float-left text-center"><span class="odd d-block">1.42</span> <span>500K</span></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>50K</span></span></div>
                              </div>
                            </div>
                            <div data-title="" class="fancy-tripple">
                              <div class="table-row ">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      Top Batsman SA Q de Kock(SA vs AUS)adv
                                    </span></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">3.5</span> <span>500K</span></div>
                                <div class="box-w1 lay float-left text-center betting-disabled"><!----></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>12.5K</span></span></div>
                              </div>
                            </div>
                            <div data-title="" class="fancy-tripple">
                              <div class="table-row ">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      Top Batsman SA R van der Dussen(SA vs AUS)adv
                                    </span></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">4.5</span> <span>500K</span></div>
                                <div class="box-w1 lay float-left text-center betting-disabled"><!----></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>12.5K</span></span></div>
                              </div>
                            </div>
                            <div data-title="" class="fancy-tripple">
                              <div class="table-row ">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      Top Batsman SA A Markram(SA vs AUS)adv
                                    </span></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">4.5</span> <span>500K</span></div>
                                <div class="box-w1 lay float-left text-center betting-disabled"><!----></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>12.5K</span></span></div>
                              </div>
                            </div>
                            <div data-title="" class="fancy-tripple">
                              <div class="table-row ">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      Top Batsman SA T Bavuma(SA vs AUS)adv
                                    </span></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">4.5</span> <span>500K</span></div>
                                <div class="box-w1 lay float-left text-center betting-disabled"><!----></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>12.5K</span></span></div>
                              </div>
                            </div>
                            <div data-title="" class="fancy-tripple">
                              <div class="table-row ">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      Top Batsman SA R Hendricks(SA vs AUS)adv
                                    </span></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">4.5</span> <span>500K</span></div>
                                <div class="box-w1 lay float-left text-center betting-disabled"><!----></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>12.5K</span></span></div>
                              </div>
                            </div>
                            <div data-title="" class="fancy-tripple">
                              <div class="table-row ">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      Top Batsman SA H Klaasen(SA vs AUS)adv
                                    </span></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">5</span> <span>500K</span></div>
                                <div class="box-w1 lay float-left text-center betting-disabled"><!----></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>12.5K</span></span></div>
                              </div>
                            </div>
                            <div data-title="" class="fancy-tripple">
                              <div class="table-row ">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      Top Batsman SA D Miller(SA vs AUS)adv
                                    </span></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">7</span> <span>500K</span></div>
                                <div class="box-w1 lay float-left text-center betting-disabled"><!----></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>12.5K</span></span></div>
                              </div>
                            </div>
                            <div data-title="" class="fancy-tripple">
                              <div class="table-row ">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      Top Batsman SA M Jansen(SA vs AUS)adv
                                    </span></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">16</span> <span>500K</span></div>
                                <div class="box-w1 lay float-left text-center betting-disabled"><!----></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>12.5K</span></span></div>
                              </div>
                            </div>
                            <div data-title="" class="fancy-tripple">
                              <div class="table-row ">
                                <div class="float-left country-name" style="border-bottom: 0px;">
                                  <p class="m-b-0"><span>
                                      Top Batsman SA A Phehlukwayo(SA vs AUS)adv
                                    </span></p>
                                  <p class="m-b-0"><span style="color: black;">0</span></p>
                                </div>
                                <div class="box-w1 back float-left text-center"><span class="odd d-block">17</span> <span>500K</span></div>
                                <div class="box-w1 lay float-left text-center betting-disabled"><!----></div>
                                <div class="box-w2 float-left text-right min-max" style="border-bottom: 0px;"><span class="d-block">Min: <span>50</span></span> <span class="d-block">Max: <span>12.5K</span></span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12">
          <div class="homepages-right-section">
            <div class="account-overview">
              <div data-bs-toggle="collapse" class="Credit_home_button" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><span><strong>Available Credit: </strong> <span class="value">0.00</span></span>
                <i class="fas fa-angle-down m-l-5 toggle-icon"></i>
              </div>
              <div class="collapse Available-Credit" id="collapseExample">
                <ul class="credit-boxs">
                  <li><strong>Credit Limit: </strong> <span>0.00</span></li>
                  <li><strong>Winnings:</strong> <span>0.00</span></li>
                  <li><strong>Total Net Exposure: </strong> <span>0.00</span></li>
                </ul>
              </div>
            </div>

            <div class="user-settings">
              <div class="d-flex">
                <div class="switchToggle float-left">
                  <input type="checkbox" id="switch"> <label for="switch"></label>
                </div>
                <label class="float-left m-l-10 m-t-5">1 Click Betting</label>
              </div>
              <div id="hiddenSection" class="hidden-section">
                <button class="btn btn-primary float-right m-b-5 m-r-5 edit-save-btn">Edit</button>
                <div class="one-click-bet float-left w-100 m-b-5">
                  <button class="btn btn-primary m-b-5 m-b-5">2000</button>
                  <button class="btn btn-primary m-b-5 m-b-5">5000</button>
                  <button class="btn btn-primary m-b-5 m-b-5">7000</button>
                </div>

                <div class="edit-section hidden">
                  <input type="text" class="edit-input wd-100 no_bc active selected" value="2000">
                  <input type="text" class="edit-input wd-100 no_bc" value="5000">
                  <input type="text" class="edit-input wd-100 no_bc" value="7000">
                </div>
              </div>
            </div>

            <div class="bet-manager_Betslip">
              <h4>Betslip</h4>
              <div class="Betslip_-section">
                <ul class="nav nav-pills Betslip_tab-menu" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Betslip</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Open Bets</button>
                  </li>
                  <li>
                    <button class="btn btn-primary fix-right-side-bar" id="editButton" type="button">Edit Stakes</button>
                  </li>
                </ul>
                <div class="tab-content extra-data-height-scroll" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <div class="bets betslip center">
                      <div class="sc-content">
                        <ul class="content relative">
                          <div class="overlay edit-stakes-buttons" id="editButton" style="display:none"></div>
                          <li class="input-table-value">
                            <div class="betslip bets py-0">
                              <div class="betslipContent">
                                <div>
                                  <form>
                                    <div>
                                      <h6 class="m-b-0 p-l-10 bet-type-info back left">Back</h6>
                                      <div class="market-list"><a href="#" class="event-name router-link-exact-active left router-link-active"><span>FK Qabala U19 v Olympiacos U19</span></a>
                                        <div class="bets-list">
                                          <div class="bet back left"><span class="selected-nation">FK Qabala U19 v Olympiacos U19</span>
                                            <div class="bet-fields m-b-10">
                                              <div class="odds-field placeholder-wrapper activated"><span class="placeholder">Odds</span>
                                                <div class="step-input-wrapper"><input type="" name="" placeholder="1.90" class="step-input">
                                                  <div class="button-wrapper"><button type="button" class="step-up"><i class="fas fa-angle-up angle-up"></i></button> <button type="button" class="step-down"><i class="fas fa-angle-down angle-down"></i></button></div>
                                                </div>
                                              </div>
                                              <div class="placeholder-wrapper betslip-input"><input type="text" placeholder="Stake" name="betamount"></div>
                                              <div class="info-field"><span class="title">Profit</span> <span class="value">0</span></div>
                                              <div class="control-fields"><button type="button" class="btn-remove btn-mini"><i class="fa fa-times"></i></button></div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="market-list"></div>
                                    </div>
                                    <div class="m-t-10">
                                      <h6 class="m-b-0 p-l-10 bet-type-info lay left">Lay</h6>
                                      <div class="market-list"></div>
                                      <div class="market-list"><a href="#" class="event-name router-link-exact-active left router-link-active"><span>Sparta Prague U19 v MSK Zilina U19</span></a>
                                        <div class="bets-list left">
                                          <div class="bet lay"><span class="selected-nation">Sparta Prague U19 v MSK Zilina U19</span>
                                            <div class="bet-fields m-b-10">
                                              <div class="odds-field placeholder-wrapper activated"><span class="placeholder">Odds</span>
                                                <div class="step-input-wrapper"><input type="" name="" placeholder="1.90" class="step-input">
                                                  <div class="button-wrapper"><button type="button" class="step-up"><i class="fas fa-angle-up angle-up"></i></button> <button type="button" class="step-down"><i class="fas fa-angle-down angle-down"></i></button></div>
                                                </div>
                                              </div>
                                              <div class="placeholder-wrapper betslip-input"><input type="text" placeholder="Stake" name="betamount"></div>
                                              <div class="info-field"><span class="title">Profit</span> <span class="value">0</span></div>
                                              <div class="control-fields"><button type="button" class="btn-remove btn-mini"><i class="fa fa-times"></i></button></div>
                                            </div>
                                            <div class="button-stakes lay"><button type="button" class="btn btn-secondary">
                                                +2000
                                              </button><button type="button" class="btn btn-secondary">
                                                +50000
                                              </button><button type="button" class="btn btn-secondary">
                                                +7000
                                              </button><button type="button" class="btn btn-secondary">
                                                +10000
                                              </button><button type="button" class="btn btn-secondary">
                                                +25000
                                              </button><button type="button" class="btn btn-secondary">
                                                +50000
                                              </button> <button type="button" class="btn btn-link" style="float: right;">Clear</button></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <p class="summary-info left">Liability: 0.00</p>
                                    <div class="summary-buttons text-right right"><button type="button" class="btn btn-remove">Remove All</button>
                                      <button type="submit" class="btn btn-primary">Place Bets</button>
                                    </div>
                                    <label class="confirmation-checkbox left"><input type="checkbox" class="left"><span class="left">Confirm bets before placing</span></label>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="edite-table-value">
                            <div class="edit-stakes-buttons">
                              <div class="buttons-div">
                                <input type="number" value="2000" class="form-control" id="">
                                <input type="number" value="50000" class="form-control" id="">
                                <input type="number" value="7000" class="form-control" id="">
                                <input type="number" value="10000" class="form-control" id="">
                                <input type="number" value="25000" class="form-control" id="">
                                <input type="number" value="50000" class="form-control" id="">

                                <div class="text-center m-t-10">
                                  <button class="btn btn-link text-right" id="cancelButton" class="hide">Cancel</button>
                                  <button class="btn btn-primary" id="saveButton">Save</button>
                                </div>
                              </div>
                            </div>
                          </li>
                          <div id="successMessage" class="hidden">Successfully Updated</div>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <div class="sc-content scrollcontent">
                      <ul class="content" style="position: relative;">
                        <li>
                          <div class="bets">
                            <div class="show-bet  betslip"><label class="confirmation-checkbox">
                                <div class="custom-control custom-checkbox Matched_Bets"><input id="checkbox-1" type="checkbox" name="checkbox-1" autocomplete="off" class="custom-control-input" value="true"><label for="checkbox-1" class="custom-control-label">
                                    Show Bet Info
                                  </label></div>
                              </label></div>
                            <div class="matched-bets">
                              <div class="toggleable-list-title"><span>Unmatched Bets</span> <i class="fas fa-angle-down m-l-5 toggle-icon"></i></div>
                              <p class="empty-list-info"><span>
                                  You Have
                                  no Unmatched Bet</span></p>
                            </div>
                            <div class="matched-bets">
                              <div class="toggleable-list-title"><span>Matched Bets</span> <i class="fas fa-angle-down m-l-5 toggle-icon"></i></div>
                              <div class="filter">
                                <div id="radios2" role="group" tabindex="-1" class="d-flex Matched_Bets">
                                  <div class="custom-control custom-control-inline custom-checkbox Matched_Bets">
                                    <input type="checkbox" name="radioSubComponent" autocomplete="off" class="custom-control-input" value="bet" id="__BVID__87"><label class="custom-control-label" for="__BVID__87">Consolidate</label>
                                  </div>
                                  <div class="custom-control custom-control-inline custom-checkbox Matched_Bets">
                                    <input type="checkbox" name="radioSubComponent" autocomplete="off" class="custom-control-input" value="average" id="__BVID__88"><label class="custom-control-label" for="__BVID__88">Average Odd</label>
                                  </div>
                                  <div class="custom-control custom-control-inline custom-checkbox Matched_Bets">
                                    <input type="checkbox" name="radioSubComponent" autocomplete="off" class="custom-control-input" value="date" id="__BVID__89"><label class="custom-control-label" for="__BVID__89">Order By Date</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>


                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>

  @include('layouts.client-footer')
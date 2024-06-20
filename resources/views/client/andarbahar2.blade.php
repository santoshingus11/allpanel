<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('layouts.client-header-url')
  <style>
    .suspended:after {
      width: 100%;
    }
  </style>
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
            @include('layouts.left-side-bar')
          </div>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12">
          <div class="Home_pages_main_section">
            <div class="sports-wrapper block">
              <div class="events teenpatti-wrapper new-casino race">
                <div class="d-flex justify-content-between align-items-center event_Cricket">
                  <h1 class="mb-0">Andar Bahar 2 <span class="font-13"><a href="" data-bs-toggle="modal" data-bs-target="#Rulestopsection">Rules</a></span></h1>
                  <span class="starts-in-label">Round ID: 231312104927</span>
                </div>
                <div class="events-row iframe-video">
                  <img src="{{asset('frontend/assets/video/andarbahar2.png')}}" alt="" class="w-100" />
                  <div class="teenpatti-wrapper ab-2">
                    <div class="ab-2-container">
                      <div class="bet-a">
                        <div class="a-title">A</div>
                        <div class="sa">
                          <div class="">
                            <div>SA</div>
                            <div class="mt-1">13</div>
                          </div>
                          <div class="book" style="color: black;">0</div>
                        </div>
                        <div class="first-bet">
                          <div class="">
                            <div>1st Bet</div>
                            <div class="mt-1">2</div>
                          </div>
                          <div class="book" style="color: black;">0</div>
                        </div>
                        <div class="second-bet">
                          <div class="suspended">
                            <div>2nd Bet</div>
                            <div class="mt-1">2</div>
                          </div>
                          <div class="book" style="color: black;">0</div>
                        </div>
                        <div class="a-title">A</div>
                      </div>
                      <div class="bet-a">
                        <div class="a-title">B</div>
                        <div class="sa">
                          <div class="">
                            <div>SB</div>
                            <div class="mt-1">13</div>
                          </div>
                          <div class="book" style="color: black;">0</div>
                        </div>
                        <div class="first-bet">
                          <div class="">
                            <div>1st Bet</div>
                            <div class="mt-1">2</div>
                          </div>
                          <div class="book" style="color: black;">0</div>
                        </div>
                        <div class="second-bet">
                          <div class="suspended">
                            <div>2nd Bet</div>
                            <div class="mt-1">2</div>
                          </div>
                          <div class="book" style="color: black;">0</div>
                        </div>
                        <div class="a-title">B</div>
                      </div>
                    </div>
                    <div class="row row5 mt-2">
                      <div class="col-6">
                        <div class="ab-2-box">
                          <div class="row row5">
                            <div class="col-6 text-center">
                              <div class="bltitle"><b>Odd</b></div>
                              <div class="back mt-1 blbox"><span class="odd">1.83</span></div>
                              <div class="mt-1"><span style="color: black;">0</span></div>
                            </div>
                            <div class="col-6 text-center">
                              <div class="bltitle"><b>Even</b></div>
                              <div class="back mt-1 blbox"><span class="odd">2.12</span></div>
                              <div class="mt-1"><span style="color: black;">0</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="ab-2-box">
                          <div class="row row5">
                            <div class="col-3 text-center">
                              <div class="bltitle"><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/cards/spade.png"></div>
                              <div class="back mt-1 blbox"><span class="odd">3.83</span></div>
                              <div class="mt-1"><span style="color: black;">0</span></div>
                            </div>
                            <div class="col-3 text-center">
                              <div class="bltitle"><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/cards/club.png"></div>
                              <div class="back mt-1 blbox"><span class="odd">3.83</span></div>
                              <div class="mt-1"><span style="color: black;">0</span></div>
                            </div>
                            <div class="col-3 text-center">
                              <div class="bltitle"><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/cards/heart.png"></div>
                              <div class="back mt-1 blbox"><span class="odd">3.83</span></div>
                              <div class="mt-1"><span style="color: black;">0</span></div>
                            </div>
                            <div class="col-3 text-center">
                              <div class="bltitle"><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/cards/diamond.png"></div>
                              <div class="back mt-1 blbox"><span class="odd">3.83</span></div>
                              <div class="mt-1"><span style="color: black;">0</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row row5 mt-2">
                      <div class="col-12">
                        <div class="ab-2-box">
                          <div class="row"></div>
                          <div class="row">
                            <div class="col-12 text-center">
                              12
                            </div>
                          </div>
                          <div class="row mt-1">
                            <div class="col-12 text-center">
                              <div class=" m-r-5 card-image ">
                                <div class=""><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/andar_bahar/1.jpg"></div>
                                <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                              </div>
                              <div class=" m-r-5 card-image">
                                <div class=""><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/andar_bahar/2.jpg"></div>
                                <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                              </div>
                              <div class=" m-r-5 card-image">
                                <div class=""><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/andar_bahar/3.jpg"></div>
                                <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                              </div>
                              <div class=" m-r-5 card-image">
                                <div class=""><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/andar_bahar/4.jpg"></div>
                                <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                              </div>
                              <div class=" m-r-5 card-image">
                                <div class=""><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/andar_bahar/5.jpg"></div>
                                <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                              </div>
                              <div class=" m-r-5 card-image">
                                <div class=""><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/andar_bahar/6.jpg"></div>
                                <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                              </div>
                              <div class=" m-r-5 card-image">
                                <div class=""><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/andar_bahar/7.jpg"></div>
                                <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                              </div>
                              <div class=" m-r-5 card-image">
                                <div class=""><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/andar_bahar/8.jpg"></div>
                                <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                              </div>
                              <div class=" m-r-5 card-image">
                                <div class=""><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/andar_bahar/9.jpg"></div>
                                <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                              </div>
                              <div class=" m-r-5 card-image">
                                <div class=""><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/andar_bahar/10.jpg"></div>
                                <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                              </div>
                              <div class=" m-r-5 card-image">
                                <div class=""><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/andar_bahar/11.jpg"></div>
                                <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                              </div>
                              <div class=" m-r-5 card-image">
                                <div class=""><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/andar_bahar/12.jpg"></div>
                                <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                              </div>
                              <div class=" m-r-5 card-image">
                                <div class=""><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/andar_bahar/13.jpg"></div>
                                <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>



                <div class="last-result-title m-t-10">
                  <span>Last Result</span>
                  <span class="float-right">
                    <a href="{{route('andarbahar-result')}}" class="">View All</a>
                  </span>
                </div>


                <div class="last-result-container text-right m-t-10 mb-5">
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="last-result m-l-5 playera">A</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="last-result m-l-5 playera">A</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="last-result m-l-5 playera">A</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="last-result m-l-5 playera">A</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="last-result m-l-5 playera">A</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="last-result m-l-5 playerb">B</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="last-result m-l-5 playerb">B</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="last-result m-l-5 playera">A</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="last-result m-l-5 playera">A</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="last-result m-l-5 playera">A</span></span>
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

            <div class="bet-manager_Betslip pt-0">
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
                    <button class="btn btn-primary fix-right-side-bar" id="editButton" type="button">Edit
                      Stakes</button>
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
                                    <div class="bets-list">
                                      <div class="bet back"><span class="selected-nation">K of heart</span>
                                        <div class="bet-fields m-b-10 left">
                                          <div class="odds-field placeholder-wrapper activated"><span class="placeholder">Odds</span>
                                            <div class="step-input-wrapper"><input type="" name="" value="6.58" class="step-input">
                                              <div class="button-wrapper"><button type="button" class="step-up"><i class="fas fa-angle-up angle-up"></i></button> <button type="button" class="step-down"><i class="fas fa-angle-down angle-down"></i></button></div>
                                            </div>
                                          </div>
                                          <div class="placeholder-wrapper betslip-input"><input type="number" class="betamount" placeholder="Stake" name="betamount"></div>
                                          <div class="info-field"><span class="title">Profit</span> <span class="value">0</span></div>
                                          <div class="control-fields"><button type="button" class="btn-remove btn-mini"><i class="fa fa-times"></i></button></div>
                                        </div>
                                        <div class="button-stakes back left"><button type="button" class="btn btn-secondary">
                                            +2000
                                          </button><button type="button" class="btn btn-secondary">
                                            +500
                                          </button><button type="button" class="btn btn-secondary">
                                            +7000
                                          </button><button type="button" class="btn btn-secondary">
                                            +10000
                                          </button><button type="button" class="btn btn-secondary">
                                            +25000
                                          </button><button type="button" class="btn btn-secondary">
                                            +50000
                                          </button><button type="button" class="btn btn-link" style="float: right;">Clear</button></div>
                                      </div>
                                    </div>
                                    <p class="summary-info left mb-0">Liability: 0.00</p>
                                    <div class="summary-buttons text-right">
                                      <button type="submit" class="btn btn-primary">Place Bets</button>
                                    </div>
                                    <label class="confirmation-checkbox left"><input type="checkbox"> <span>Confirm bets before placing</span></label>
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
                              <div class="toggleable-list-title"><span>Matched Bets</span> <i class="fas fa-angle-down m-l-5 toggle-icon"></i></div>
                              <p class="empty-list-info"><span>
                                  You Have no Matched Bet</span></p>
                            </div>
                            <!-- <div class="matched-bets">
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
                            </div> -->
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

  <!-- Rules top section Modal -->
  <div class="modal fade" id="Rulestopsection" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="RulestopsectionLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Race20ResultLabel">Rules</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="{{asset('frontend/assets/images/abj-rules.jpg')}}" alt="" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>

  <!-- Queen Result Modal -->
  <div class="modal fade" id="Race20Result" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Race20ResultLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Race20ResultLabel">Andar Bahar 2 Result</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body race-modal">
          <div>
            <h6 class="text-right round-id"><b>Round Id:</b>
              231312174325
            </h6>
            <div class="row row5 abj-result text-center align-items-center">
              <div class="col-1">
                <div class="row row5">
                  <div class="col-12">
                    <h4 class="mb-0" style="line-height: 50px;"><b>A</b></h4>
                  </div>
                </div>
                <div class="row row5">
                  <div class="col-12">
                    <h4 class="mb-0" style="line-height: 50px;"><b>B</b></h4>
                  </div>
                </div>
              </div>
              <div class="col-2"><img src="{{asset('frontend/assets/cards/8SS.png')}}" class="card-right"></div>
              <div class="col-9">
                <div class="card-inner">
                  <div class="row row5">
                    <div class="col-2"><img src="{{asset('frontend/assets/cards/JSS.png')}}" class="mb-1"></div>
                    <div class="col-8">
                      <div id="result-a-cards" class="ab-rtlslider owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                          <div class="owl-stage">
                            <div class="owl-item active">
                              <div class="item"><img src="{{asset('frontend/assets/cards/6HH.png')}}"></div>
                            </div>
                            <div class="owl-item">
                              <div class="item"><img src="{{asset('frontend/assets/cards/6SS.png')}}"></div>
                            </div>
                            <div class="owl-item">
                              <div class="item"><img src="{{asset('frontend/assets/cards/JHH.png')}}"></div>
                            </div>
                            <div class="owl-item">
                              <div class="item"><img src="{{asset('frontend/assets/cards/7HH.png')}}"></div>
                            </div>
                            <div class="owl-item">
                              <div class="item"><img src="{{asset('frontend/assets/cards/10HH.png')}}"></div>
                            </div>
                          </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next disabled"><span aria-label="Next">›</span></button></div>
                        <div class="owl-dots disabled"></div>
                      </div>
                    </div>
                    <div class="col-2 winner-box"></div>
                  </div>
                </div>
                <div class="card-inner">
                  <div class="row row5">
                    <div class="col-2"><img src="{{asset('frontend/assets/cards/ACC.png')}}" class="mb-1"></div>
                    <div class="col-8">
                      <div id="result-b-cards" class="ab-rtlslider owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                          <div class="owl-stage">
                            <div class="owl-item active">
                              <div class="item"><img src="{{asset('frontend/assets/cards/8DD.png')}}"></div>
                            </div>
                            <div class="owl-item">
                              <div class="item"><img src="{{asset('frontend/assets/cards/6CC.png')}}"></div>
                            </div>
                            <div class="owl-item">
                              <div class="item"><img src="{{asset('frontend/assets/cards/QCC.png')}}"></div>
                            </div>
                            <div class="owl-item">
                              <div class="item"><img src="{{asset('frontend/assets/cards/4SS.png')}}"></div>
                            </div>
                            <div class="owl-item">
                              <div class="item"><img src="{{asset('frontend/assets/cards/2SS.png')}}"></div>
                            </div>
                            <div class="owl-item">
                              <div class="item"><img src="{{asset('frontend/assets/cards/7CC.png')}}"></div>
                            </div>
                          </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next disabled"><span aria-label="Next">›</span></button></div>
                        <div class="owl-dots disabled"></div>
                      </div>
                    </div>
                    <div class="col-2 winner-box">
                      <div class="winner-icon mt-3"><i class="fas fa-trophy mr-2"></i></div>
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
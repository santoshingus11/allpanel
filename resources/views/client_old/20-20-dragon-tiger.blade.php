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
 @include('layouts.header')

<section id="home-pages" class="home_pages">
  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-12 col-sm-12">
          <div class="All-pages-left-side-bar">
            @include('layouts.client-left-side-bar')
          </div>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12">
          <div class="Home_pages_main_section">
            <div class="sports-wrapper block">
              <div class="events teenpatti-wrapper new-casino race">
                <div class="d-flex justify-content-between align-items-center event_Cricket">
                  <h1 class="mb-0">20-20 Dragon Tiger 2 <span class="font-13"><a href="" data-bs-toggle="modal" data-bs-target="#Rulestopsection">Rules</a></span></h1>
                  <span class="starts-in-label">Round ID: 231312104927</span>
                </div>
                <div class="events-row iframe-video">
                  <img src="{{asset('frontendassets/video/20-20.png')}}" alt="" class="w-100" />
                  <div class="teenpatti-wrapper baccarat ab-2">
                    <div class="dt-container">
                      <div class="d-t-box m-b-10 m-t-10">
                        <div class="row">
                          <div class="col-md-9">
                            <div class="row">
                              <div class="col-md-5 text-center"><b>2.00</b>
                                <div class="m-t-10"><button class="text-uppercase btn-theme low-high-btn suspended"><b>Dragon</b></button> <span class="d-block m-t-5" style="color: black;">0</span></div>
                              </div>
                              <div class="col-md-2 text-center"><b>50.00</b>
                                <div class="m-t-10"><button class="text-uppercase  btn-theme low-high-btn suspended"><b>Tie</b></button> <span class="d-block m-t-5" style="color: black;">0</span></div>
                              </div>
                              <div class="col-md-5 text-center"><b>2.00</b>
                                <div class="m-t-10"><button class="text-uppercase btn-theme low-high-btn suspended"><b>Tiger</b></button> <span class="d-block m-t-5" style="color: black;">0</span></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3 pair-block  text-center"><b>12.00</b>
                            <div class="m-t-10"><button class="text-uppercase btn-theme low-high-btn suspended"><b>Pair</b></button> <span class="d-block m-t-5" style="color: black;">0</span></div>
                          </div>
                          <div class="col-md-12 m-t-10 text-right"><span>
                              Min: <span>100.0</span>
                              Max: <span>50K</span></span></div>
                        </div>
                      </div>
                      <div class="row row5">
                        <div class="col-md-6">
                          <div class="d-t-box m-b-10">
                            <div class="row ">
                              <div class="col-12">
                                <h4 class="m-b-0 text-center text-uppercase">Dragon</h4>
                              </div>
                              <div class="col-md-6 text-center"><b>2.10</b>
                                <div class="m-t-10"><button class="text-uppercase btn-theme low-high-btn suspended"><b>Even</b></button> <span class="d-block m-t-5" style="color: black;">0</span></div>
                              </div>
                              <div class="col-md-6 text-center"><b>1.79</b>
                                <div class="m-t-10"><button class="text-uppercase btn-theme low-high-btn suspended"><b>Odd</b></button> <span class="d-block m-t-5" style="color: black;">0</span></div>
                              </div>
                              <div class="col-md-12 m-t-10 text-right"><span>
                                  Min: <span>100.0</span>
                                  Max: <span>12.5K</span></span></div>
                              <div class="col-md-6 text-center m-t-10"><b>1.95</b>
                                <div class="m-t-10"><button class="text-uppercase btn-theme low-high-btn suspended">
                                    <div class="color-card"></div> <span class="card-icon"><span class="card-red">[</span></span> <span class="card-icon"><span class="card-red">{</span></span>
                                  </button> <span class="d-block m-t-5" style="color: black;">0</span></div>
                              </div>
                              <div class="col-md-6 text-center m-t-10"><b>1.95</b>
                                <div class="m-t-10"><button class="text-uppercase btn-theme low-high-btn suspended">
                                    <div class="color-card"></div> <span class="card-icon"><span class="card-black">]</span></span> <span class="card-icon"><span class="card-black">}</span></span>
                                  </button> <span class="d-block m-t-5" style="color: black;">0</span></div>
                              </div>
                              <div class="col-md-12 m-t-10 text-right"><span>
                                  Min: <span>100.0</span>
                                  Max: <span>12.5K</span></span></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="d-t-box m-b-10">
                            <div class="row ">
                              <div class="col-12">
                                <h4 class="m-b-0 text-center text-uppercase">Tiger</h4>
                              </div>
                              <div class="col-md-6 text-center"><b>2.10</b>
                                <div class="m-t-10"><button class="text-uppercase btn-theme low-high-btn suspended"><b>Even</b></button> <span class="d-block m-t-5" style="color: black;">0</span></div>
                              </div>
                              <div class="col-md-6 text-center"><b>1.79</b>
                                <div class="m-t-10"><button class="text-uppercase btn-theme low-high-btn suspended"><b>Odd</b></button> <span class="d-block m-t-5" style="color: black;">0</span></div>
                              </div>
                              <div class="col-md-12 m-t-10 text-right"><span>
                                  Min: <span>100.0</span>
                                  Max: <span>12.5K</span></span></div>
                              <div class="col-md-6 text-center m-t-10"><b>1.95</b>
                                <div class="m-t-10"><button class="text-uppercase btn-theme low-high-btn suspended">
                                    <div class="color-card"></div> <span class="card-icon"><span class="card-red">[</span></span> <span class="card-icon"><span class="card-red">{</span></span>
                                  </button> <span class="d-block m-t-5" style="color: black;">0</span></div>
                              </div>
                              <div class="col-md-6 text-center m-t-10"><b>1.95</b>
                                <div class="m-t-10"><button class="text-uppercase btn-theme low-high-btn suspended">
                                    <div class="color-card"></div> <span class="card-icon"><span class="card-black">]</span></span> <span class="card-icon"><span class="card-black">}</span></span>
                                  </button> <span class="d-block m-t-5" style="color: black;">0</span></div>
                              </div>
                              <div class="col-md-12 m-t-10 text-right"><span>
                                  Min: <span>100.0</span>
                                  Max: <span>12.5K</span></span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row row5">
                        <div class="col-md-6">
                          <div class="d-t-box m-b-10">
                            <div class="row ">
                              <div class="col-md-12">
                                <h4 class="m-b-0 text-center text-uppercase">Dragon 12.00
                                </h4>
                              </div>
                              <div class="card-dt col-md-12 text-center m-t-10">
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/1.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/2.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/3.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/4.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/5.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/6.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/7.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/8.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/9.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/10.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/11.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/12.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/13.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                              </div>
                              <div class="col-md-12 m-t-10 text-right"><span>
                                  Min: <span>100.0</span>
                                  Max: <span>12.5K</span></span></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="d-t-box m-b-10">
                            <div class="row">
                              <div class="col-md-12">
                                <h4 class="m-b-0 text-center text-uppercase">Tiger 12.00
                                </h4>
                              </div>
                              <div class="card-dt col-md-12 text-center m-t-10">
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/1.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/2.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/3.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/4.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/5.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/6.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/7.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/8.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/9.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/10.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/11.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/12.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                                <div class=" m-r-5 card-image d-inline-block">
                                  <div class="suspended"><img src="{{asset('frontendassets/cards/andar_bahar/13.jpg')}}"></div>
                                  <div class="ubook text-center m-t-5"><b style="color: black;">0</b></div>
                                </div>
                              </div>
                              <div class="col-md-12 m-t-10 text-right"><span>
                                  Min: <span>100.0</span>
                                  Max: <span>12.5K</span></span></div>
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
                    <a href="{{route('tiger-result')}}" class="">View All</a>
                  </span>
                </div>

                <div class="last-result-container text-right m-t-10 mb-5">
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result" class="last-result m-l-5 playerb"><span>T</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result" class="last-result m-l-5 playera"><span>D</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result" class="last-result m-l-5 playerb"><span>T</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result" class="last-result m-l-5 playerb"><span>T</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result" class="last-result m-l-5 playera"><span>D</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result" class="last-result m-l-5 playerb"><span>T</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result" class="last-result m-l-5 playerb"><span>T</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result" class="last-result m-l-5 playera"><span>D</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result" class="last-result m-l-5 playera"><span>D</span></span>
                  <span data-bs-toggle="modal" data-bs-target="#Race20Result" class="last-result m-l-5 playerb"><span>T</span></span>
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
          <img src="{{asset('frontendassets/images/dt202-rules.jpg')}}" alt="" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>

  <!-- 20 20 Result Modal -->
  <div class="modal fade" id="Race20Result" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Race20ResultLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Race20ResultLabel">20-20 Dragon Tiger 2 Result</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body race-modal">
          <div>
            <h6 class="text-right round-id"><b>Round Id:</b> 231412112428
            </h6>
            <div class="text-center luckyseven-img"><img src="{{asset('frontend/assets/cards/2CC.png')}}"> <img src="{{asset('frontend/assets/cards/ACC.png')}}"></div>
            <div class="board-result-inner m-t-5">
              <p class="m-b-0"><b class="greenbx">Result:</b>
                Dragon|No Pair
              </p>
              <p class="m-b-0"><b class="redbx">Dragon:</b>
                Black|Even|Card2
              </p>
              <p class="m-b-0"><b class="yellowbx">Tiger:</b>
                Black|Odd|CardA
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  @include('layouts.client-footer')
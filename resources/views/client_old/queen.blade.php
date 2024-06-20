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
            @include('layouts.client-left-side-bar')
          </div>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12">
          <div class="Home_pages_main_section">
            <div class="sports-wrapper block">
              <div class="events teenpatti-wrapper new-casino race">
                <div class="d-flex justify-content-between align-items-center event_Cricket">
                  <h1 class="mb-0">Queen</h1>
                  <span class="starts-in-label">Round ID: 231312104927</span>
                </div>
                <div class="events-row iframe-video">
                  <!-- <div class="casino-video">
                    <div class="casino-video-title">
                      <div class="total-points">
                        <div>
                          <div>Total Card:</div>
                          <div>1</div>
                        </div>
                        <div>
                          <div>Total Point:</div>
                          <div>4</div>
                        </div>
                      </div>
                    </div>
                    <div class="video-box-container">
                      <div class="video-box">
                        <img src="assets/video/video.png" alt="" class="w-100" />
                        <div class="casinoclock clock2digit flip-clock-wrapper">
                          <ul class="flip play">
                            <li class="flip-clock-before"><a href="#">
                                <div class="up">
                                  <div class="shadow"></div>
                                  <div class="inn">1</div>
                                </div>
                                <div class="down">
                                  <div class="shadow"></div>
                                  <div class="inn">1</div>
                                </div>
                              </a></li>
                            <li class="flip-clock-active"><a href="#">
                                <div class="up">
                                  <div class="shadow"></div>
                                  <div class="inn">0</div>
                                </div>
                                <div class="down">
                                  <div class="shadow"></div>
                                  <div class="inn">0</div>
                                </div>
                              </a></li>
                          </ul>
                          <ul class="flip play">
                            <li class="flip-clock-before"><a href="#">
                                <div class="up">
                                  <div class="shadow"></div>
                                  <div class="inn">1</div>
                                </div>
                                <div class="down">
                                  <div class="shadow"></div>
                                  <div class="inn">1</div>
                                </div>
                              </a></li>
                            <li class="flip-clock-active"><a href="#">
                                <div class="up">
                                  <div class="shadow"></div>
                                  <div class="inn">0</div>
                                </div>
                                <div class="down">
                                  <div class="shadow"></div>
                                  <div class="inn">0</div>
                                </div>
                              </a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="video-overlay">
                      <div class="mb-1"><span><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/cards/spade.png"></span></div>
                      <div class="mb-1"><span><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/cards/heart.png"></span></div>
                      <div class="mb-1"><span><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/cards/club.png"></span></div>
                      <div class="mb-1"><span><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/cards/diamond.png"></span>
                        <img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/cards/4SS.png">
                        <img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/cards/KSS.png">
                      </div>
                    </div>
                  </div> -->
                  <img src="{{asset('frontend/assets/video/Queen.png')}}" alt="" class="w-100" />
                </div>

                <div class="card-content redqueen m-t-10">
                  <div class="casino-odds-box-wrapper">
                    <div class="casino-odds-box-container casino-odds-box-container-double">
                      <div class="casino-odds-box-bhav"><b>Total 0</b>
                        <div class="range-icon"><i data-toggle="collapse" data-target="#demo0" class="fas fa-info-circle float-right"></i>
                          <div id="demo0" class="collapse icon-range">
                            Range: <span>100.0</span> - <span>50K</span></div>
                        </div>
                      </div>
                      <div class="casino-odds-box ">
                        <div class="back-border"><span class="casino-odds-box-odd">2.76</span></div>
                        <div class="lay-border"><span class="casino-odds-box-odd">2.90</span></div>
                      </div>
                      <div class="casino-odds-book" style="color: black;">0</div>
                    </div>
                    <div class="casino-odds-box-container casino-odds-box-container-double">
                      <div class="casino-odds-box-bhav"><b>Total 1</b>
                        <div class="range-icon"><i data-toggle="collapse" data-target="#demo1" class="fas fa-info-circle float-right"></i>
                          <div id="demo1" class="collapse icon-range">
                            Range: <span>100.0</span> - <span>50K</span></div>
                        </div>
                      </div>
                      <div class="casino-odds-box">
                        <div class="back-border"><span class="casino-odds-box-odd">2.76</span></div>
                        <div class="lay-border"><span class="casino-odds-box-odd">2.90</span></div>
                      </div>
                      <div class="casino-odds-book" style="color: black;">0</div>
                    </div>
                    <div class="casino-odds-box-container casino-odds-box-container-double">
                      <div class="casino-odds-box-bhav"><b>Total 2</b>
                        <div class="range-icon"><i data-toggle="collapse" data-target="#demo2" class="fas fa-info-circle float-right"></i>
                          <div id="demo2" class="collapse icon-range">
                            Range: <span>100.0</span> - <span>50K</span></div>
                        </div>
                      </div>
                      <div class="casino-odds-box">
                        <div class="back-border"><span class="casino-odds-box-odd">5.75</span></div>
                        <div class="lay-border"><span class="casino-odds-box-odd">6.17</span></div>
                      </div>
                      <div class="casino-odds-book" style="color: black;">0</div>
                    </div>
                    <div class="casino-odds-box-container casino-odds-box-container-double">
                      <div class="casino-odds-box-bhav"><b>Total 3</b>
                        <div class="range-icon"><i data-toggle="collapse" data-target="#demo3" class="fas fa-info-circle float-right"></i>
                          <div id="demo3" class="collapse icon-range">
                            Range: <span>100.0</span> - <span>50K</span></div>
                        </div>
                      </div>
                      <div class="casino-odds-box">
                        <div class="back-border"><span class="casino-odds-box-odd">7.96</span></div>
                        <div class="lay-border"><span class="casino-odds-box-odd">8.66</span></div>
                      </div>
                      <div class="casino-odds-book" style="color: black;">0</div>
                    </div>
                  </div>
                </div>




                <div class="last-result-title m-t-10"><span>Last Result</span> <span class="float-right"><a href="{{route('queen-result')}}" class="">View All
                    </a></span></div>

                <div class="last-result-container text-right m-t-10">
                  <span class="last-result m-l-5">
                    <span class="ball-runs playerb last-result">0</span></span>
                  <span class="last-result m-l-5" data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="ball-runs playerb last-result">1</span></span>
                  <span class="last-result m-l-5" data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="ball-runs playerb last-result">3</span></span>
                  <span class="last-result m-l-5" data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="ball-runs playerb last-result">0</span></span>
                  <span class="last-result m-l-5" data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="ball-runs playerb last-result">1</span></span>
                  <span class="last-result m-l-5" data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="ball-runs playerb last-result">1</span></span>
                  <span class="last-result m-l-5" data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="ball-runs playerb last-result">3</span></span>
                  <span class="last-result m-l-5">
                    <span class="ball-runs playerb last-result">2</span></span>
                  <span class="last-result m-l-5" data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="ball-runs playerb last-result">2</span></span>
                  <span class="last-result m-l-5" data-bs-toggle="modal" data-bs-target="#Race20Result"><span class="ball-runs playerb last-result">0</span></span>
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

  <!-- Queen Result Modal -->
  <div class="modal fade" id="Race20Result" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Race20ResultLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Race20ResultLabel">Queen Result</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body race-modal">
          <div class="row player-container m-t-10">
            <div class="col-md-12">
              <div>
                <h6 class="text-right round-id"><b>Round Id:</b> 231312155416
                </h6>
                <div class="row">
                  <div class="col-md-3 player-type">
                    <h4 class="text-center">Total 0</h4>
                    <div class="text-center"><img src="{{asset('frontend/assets/cards/5DD.png')}}"></div>
                  </div>
                  <div class="col-md-3 player-type">
                    <h4 class="text-center">Total 1</h4>
                    <div class="text-center"><img src="{{asset('frontend/assets/cards/4SS.png')}}"></div>
                  </div>
                  <div class="col-md-3 player-type">
                    <h4 class="text-center">Total 2</h4>
                    <div class="text-center"><img src="{{asset('frontend/assets/cards/6SS.png')}}"></div>
                  </div>
                  <div class="col-md-3 player-type">
                    <h4 class="text-center">Total 3</h4>
                    <div class="text-center"><img src="{{asset('frontend/assets/cards/QDD.png')}}"></div>
                    <div class="winner-label m-t-10"><span><i class="fas fa-trophy m-r-5"></i> Winner
                      </span></div>
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
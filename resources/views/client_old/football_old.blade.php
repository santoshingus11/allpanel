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

                    <ul class="menu-column menu-prev sport-type-Football">
                      <li><a href="{{route('home')}}" class="home-link"><i class="fas fa-home"></i> <span class="link-name">Sports</span></a></li>
                      <li><a href="#" class="link-lvl-sport router-link-exact-active router-link-active"><img src="{{asset('frontend/assets/icons/1.png')}}" class="game-icon"> <span class="link-name">Football</span></a></li>
                      <li><a href="{{route('home')}}" class="link-lvl-prev"><i class="fas fa-chevron-circle-left"></i> <span class="link-name">Previous</span></a></li>
                    </ul>
                  </div>
                </nav>
              </aside>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12">
          <div class="Home_pages_main_section">
            <div class="sports-wrapper">
              <div class="events">
                <h1 class="event_Cricket">Football
                  <span class="starts-in-label">Betting from 30 mins before start</span>
                </h1>
                <div class="events-row extra-data-height-scroll">
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
                        <td><a href="{{route('Football-Details')}}" class="event-name">Kofu v Zhejiang Greentown</a> <small><span class="event-inplay float-right"><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/icons/inplay.png">In-Play
                            </span></small></td>
                        <td class="back"><strong class="odds">1.04</strong></td>
                        <td class="lay"><strong class="odds">1.05</strong></td>
                        <td class="empty"><span>
                            28
                          </span></td>
                        <td class="empty"><span>32</span></td>
                        <td class="back"><strong class="odds">100</strong></td>
                        <td class="lay"><strong class="odds">160</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">Home Utd v Jeonbuk Motors</a> <small><span class="event-inplay float-right"><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/icons/inplay.png">In-Play
                            </span></small></td>
                        <td class="back"><strong class="odds">1.3</strong></td>
                        <td class="lay"><strong class="odds">1.32</strong></td>
                        <td class="empty changed"><span>
                            5.8
                          </span></td>
                        <td class="empty"><span>6.4</span></td>
                        <td class="back"><strong class="odds">13</strong></td>
                        <td class="lay changed"><strong class="odds">14</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">Pohang Steelers v Urawa</a> <small><span class="event-inplay float-right"><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/icons/inplay.png">In-Play
                            </span></small></td>
                        <td class="back"><strong class="odds">9.8</strong></td>
                        <td class="lay"><strong class="odds">11</strong></td>
                        <td class="empty"><span>
                            3.5
                          </span></td>
                        <td class="empty"><span>3.65</span></td>
                        <td class="back"><strong class="odds">1.59</strong></td>
                        <td class="lay"><strong class="odds">1.61</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">Napoli U19 v 1. FC Union Berlin U19</a> <small><span class="event-inplay float-right"><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/icons/inplay.png">In-Play
                            </span></small></td>
                        <td class="back"><strong class="odds">1.6</strong></td>
                        <td class="lay"><strong class="odds">1.65</strong></td>
                        <td class="empty"><span>
                            3.5
                          </span></td>
                        <td class="empty"><span>3.75</span></td>
                        <td class="back"><strong class="odds">8.4</strong></td>
                        <td class="lay"><strong class="odds">9.6</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">Real Sociedad U19 v SL Benfica Lisbon U19</a> <small><span class="event-inplay float-right"><img src="https://d1arlbwbznybm5.cloudfront.net/v1/static/front/images/icons/inplay.png">In-Play
                            </span></small></td>
                        <td class="back"><strong class="odds">1.67</strong></td>
                        <td class="lay"><strong class="odds">1.7</strong></td>
                        <td class="empty"><span>
                            4.8
                          </span></td>
                        <td class="empty"><span>5.2</span></td>
                        <td class="back"><strong class="odds">4.7</strong></td>
                        <td class="lay"><strong class="odds">5</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">Bangkok Utd v Kitchee SC</a> <small><span>08/11/2023 17:30:00</span></small></td>
                        <td class="back"><strong class="odds">1.6</strong></td>
                        <td class="lay"><strong class="odds">1.62</strong></td>
                        <td class="empty"><span>
                            4.8
                          </span></td>
                        <td class="empty"><span>4.9</span></td>
                        <td class="back"><strong class="odds">5.6</strong></td>
                        <td class="lay"><strong class="odds">5.8</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">Ha Noi T and T v Wuhan Three Towns</a> <small><span>08/11/2023 17:30:00</span></small></td>
                        <td class="back"><strong class="odds">4.4</strong></td>
                        <td class="lay"><strong class="odds">4.6</strong></td>
                        <td class="empty"><span>
                            4.5
                          </span></td>
                        <td class="empty"><span>4.6</span></td>
                        <td class="back"><strong class="odds">1.79</strong></td>
                        <td class="lay"><strong class="odds">1.8</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">Persis Solo v PSS Sleman</a> <small><span>08/11/2023 17:30:00</span></small></td>
                        <td class="back"><strong class="odds">1.66</strong></td>
                        <td class="lay"><strong class="odds">1.69</strong></td>
                        <td class="empty"><span>
                            4.4
                          </span></td>
                        <td class="empty"><span>4.7</span></td>
                        <td class="back"><strong class="odds">5.4</strong></td>
                        <td class="lay"><strong class="odds">5.6</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">Garbarnia v Stal Mielec</a> <small><span>08/11/2023 17:30:00</span></small></td>
                        <td class="back"><strong class="odds">8</strong></td>
                        <td class="lay"><strong class="odds">11</strong></td>
                        <td class="empty"><span>
                            5.7
                          </span></td>
                        <td class="empty"><span>6.2</span></td>
                        <td class="back"><strong class="odds">1.35</strong></td>
                        <td class="lay"><strong class="odds">1.4</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">Sheriff Tiraspol U19 v FK Partizan Beograd U19</a> <small><span>08/11/2023 17:30:00</span></small></td>
                        <td class="back"><strong class="odds">4.2</strong></td>
                        <td class="lay"><strong class="odds">4.4</strong></td>
                        <td class="empty"><span>
                            5.2
                          </span></td>
                        <td class="empty"><span>5.5</span></td>
                        <td class="back"><strong class="odds">1.71</strong></td>
                        <td class="lay"><strong class="odds">1.75</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">FK Qabala U19 v Olympiacos U19</a> <small><span>08/11/2023 17:30:00</span></small></td>
                        <td class="back"><strong class="odds">7.4</strong></td>
                        <td class="lay"><strong class="odds">8</strong></td>
                        <td class="empty"><span>
                            5.2
                          </span></td>
                        <td class="empty"><span>5.8</span></td>
                        <td class="back"><strong class="odds">1.42</strong></td>
                        <td class="lay"><strong class="odds">1.47</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">Bali Utd Pusam v Central Coast Mariners</a> <small><span>08/11/2023 17:30:00</span></small></td>
                        <td class="back"><strong class="odds">5.3</strong></td>
                        <td class="lay"><strong class="odds">6</strong></td>
                        <td class="empty"><span>
                            5.8
                          </span></td>
                        <td class="empty"><span>6.8</span></td>
                        <td class="back"><strong class="odds">1.48</strong></td>
                        <td class="lay"><strong class="odds">1.54</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">Sparta Prague U19 v MSK Zilina U19</a> <small><span>08/11/2023 17:30:00</span></small></td>
                        <td class="back"><strong class="odds">1.55</strong></td>
                        <td class="lay"><strong class="odds">1.62</strong></td>
                        <td class="empty"><span>
                            4.7
                          </span></td>
                        <td class="empty"><span>5.1</span></td>
                        <td class="back"><strong class="odds">5.9</strong></td>
                        <td class="lay"><strong class="odds">6.6</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">Levadiakos v Aiolikos Mytilene AFC</a> <small><span>08/11/2023 18:30:00</span></small></td>
                        <td class="back"><strong class="odds">1.31</strong></td>
                        <td class="lay"><strong class="odds">1.33</strong></td>
                        <td class="empty"><span>
                            5.8
                          </span></td>
                        <td class="empty"><span>7.2</span></td>
                        <td class="back"><strong class="odds">11</strong></td>
                        <td class="lay"><strong class="odds">16.5</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">Arsenal U19 v Sevilla U19</a> <small><span>08/11/2023 18:30:00</span></small></td>
                        <td class="back"><strong class="odds">2.08</strong></td>
                        <td class="lay"><strong class="odds">2.22</strong></td>
                        <td class="empty"><span>
                            3.95
                          </span></td>
                        <td class="empty"><span>4.2</span></td>
                        <td class="back"><strong class="odds">3.4</strong></td>
                        <td class="lay"><strong class="odds">3.65</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">PSV Eindhoven U19 v RC Lens U19</a> <small><span>08/11/2023 18:30:00</span></small></td>
                        <td class="back"><strong class="odds">1.54</strong></td>
                        <td class="lay"><strong class="odds">1.6</strong></td>
                        <td class="empty"><span>
                            4.7
                          </span></td>
                        <td class="empty"><span>5.1</span></td>
                        <td class="back"><strong class="odds">5.7</strong></td>
                        <td class="lay"><strong class="odds">6.8</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">Melbourne Victory v Wellington Phoenix</a> <small><span>10/11/2023 14:15:00</span></small></td>
                        <td class="back"><strong class="odds">1.72</strong></td>
                        <td class="lay"><strong class="odds">1.75</strong></td>
                        <td class="empty"><span>
                            4.3
                          </span></td>
                        <td class="empty"><span>4.7</span></td>
                        <td class="back"><strong class="odds">4.6</strong></td>
                        <td class="lay"><strong class="odds">5.4</strong></td>
                      </tr>
                      <tr>
                        <td><a href="{{route('Football-Details')}}" class="event-name">Sassuolo v Salernitana</a> <small><span>10/11/2023 23:00:00</span></small></td>
                        <td class="back"><strong class="odds">1.75</strong></td>
                        <td class="lay"><strong class="odds">1.76</strong></td>
                        <td class="empty"><span>
                            4.2
                          </span></td>
                        <td class="empty"><span>4.4</span></td>
                        <td class="back"><strong class="odds">4.8</strong></td>
                        <td class="lay"><strong class="odds">5.1</strong></td>
                      </tr>
                    </tbody>

                  </table>
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
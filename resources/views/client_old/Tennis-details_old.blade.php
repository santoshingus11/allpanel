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

                    <ul class="menu-column menu-prev sport-type-Tennis">
                      <li><a href="{{route('home')}}" class="home-link"><i class="fas fa-home"></i> <span class="link-name">Sports</span></a></li>
                      <li><a href="#" class="link-lvl-sport router-link-exact-active router-link-active"><img src="{{asset('frontend/assets/icons/2.png')}}" class="game-icon"> <span class="link-name">Tennis</span></a></li>
                      <li><a href="{{route('tennis-frontend')}}" class="link-lvl-prev"><i class="fas fa-chevron-circle-left"></i> <span class="link-name">Previous</span></a></li>
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
                <div class="all-details-pages-live-data">
                  <img src="{{asset('frontend/assets/images/Tennis-details.png')}}" alt="" class="img-fluid" />
                </div>
                <h1 class="event_Cricket">Cimarrones de Sonora v Atlante
                  <span class="starts-in-label">16/11/2023 08:35:00</span>
                </h1>
                <div class="events-row extra-data-height-scroll">

                  <table class="market-listing-table table bet-fair">
                    <thead>
                      <tr class="bg-remove-th border-top">
                        <th class="market-name title">MATCH_ODDS</th>
                        <th colspan="2"></th>
                        <th class="back"><span>Back</span></th>
                        <th class="lay"><span>Lay</span></th>
                        <th colspan="2"></th>
                      </tr>
                    </thead>
                    <tbody data-title="OPEN" class="">
                      <tr data-title="OPEN" class="">
                        <td>
                          <div class="event-name" style="color: rgb(15, 35, 39);">Cimarrones de Sonora</div>
                          <p class="m-b-0"><span style="color: black;">0</span> <span style="display: none; color: black;"> &gt;&gt; 0</span></p>
                        </td>
                        <td class="back unhighlighted"><strong class="odds">1.06</strong>
                          <div class="size"><span><span>819.7K</span></span></div>
                        </td>
                        <td class="back unhighlighted"><strong class="odds">1.08</strong>
                          <div class="size"><span><span>143.2K</span></span></div>
                        </td>
                        <td class="back"><strong class="odds">1.1</strong>
                          <div class="size"><span><span>47.6K</span></span></div>
                        </td>
                        <td class="lay"><strong class="odds">1.12</strong>
                          <div class="size"><span><span>91.9K</span></span></div>
                        </td>
                        <td class="lay unhighlighted"><strong class="odds">1.13</strong>
                          <div class="size"><span><span>40K</span></span></div>
                        </td>
                        <td class="lay unhighlighted"><strong class="odds">1.14</strong>
                          <div class="size"><span><span>18.1K</span></span></div>
                        </td>
                      </tr>
                      <tr data-title="OPEN" class="">
                        <td>
                          <div class="event-name" style="color: rgb(15, 35, 39);">Atlante</div>
                          <p class="m-b-0"><span style="color: black;">0</span> <span style="display: none; color: black;"> &gt;&gt; 0</span></p>
                        </td>
                        <td class="back unhighlighted"><strong class="odds">110</strong>
                          <div class="size"><span><span>26.6K</span></span></div>
                        </td>
                        <td class="back unhighlighted"><strong class="odds">150</strong>
                          <div class="size"><span><span>31.3K</span></span></div>
                        </td>
                        <td class="back"><strong class="odds">200</strong>
                          <div class="size"><span><span>19.7K</span></span></div>
                        </td>
                        <td class="lay"><strong class="odds">390</strong>
                          <div class="size"><span><span>2K</span></span></div>
                        </td>
                        <td class="lay unhighlighted"><strong class="odds">1000</strong>
                          <div class="size"><span><span>721.3</span></span></div>
                        </td>
                        <td class="lay unhighlighted"></td>
                      </tr>
                      <tr data-title="OPEN" class="">
                        <td>
                          <div class="event-name" style="color: rgb(15, 35, 39);">The Draw</div>
                          <p class="m-b-0"><span style="color: black;">0</span> <span style="display: none; color: black;"> &gt;&gt; 0</span></p>
                        </td>
                        <td class="back unhighlighted"><strong class="odds">8.2</strong>
                          <div class="size"><span><span>236.1K</span></span></div>
                        </td>
                        <td class="back unhighlighted"><strong class="odds">8.8</strong>
                          <div class="size"><span><span>5.1K</span></span></div>
                        </td>
                        <td class="back"><strong class="odds">9.6</strong>
                          <div class="size"><span><span>10.7K</span></span></div>
                        </td>
                        <td class="lay"><strong class="odds">12</strong>
                          <div class="size"><span><span>4.4K</span></span></div>
                        </td>
                        <td class="lay unhighlighted"><strong class="odds">14.5</strong>
                          <div class="size"><span><span>10.7K</span></span></div>
                        </td>
                        <td class="lay unhighlighted"><strong class="odds">19.5</strong>
                          <div class="size"><span><span>292.1K</span></span></div>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <table  class="market-listing-table table bet-fair">
                    <thead>
                      <tr class="bg-remove-th border-top">
                        <th  class="market-name title">
                          OVER_UNDER_05
                        </th>
                        <th  colspan="2"></th>
                        <th  class="back"><span >Back</span></th>
                        <th  class="lay"><span >Lay</span></th>
                        <th  colspan="2"></th>
                      </tr>
                    </thead>
                    <tbody data-title="OPEN" class="">
                      <tr data-title="OPEN" class="">
                        <td>
                          <div class="event-name" style="color: rgb(15, 35, 39);">Under 0.5 Goals</div>
                          <p class="m-b-0"><span  style="color: black;">0</span> <span  style="display: none; color: black;"> &gt;&gt; 0</span></p>
                        </td>
                        <td class="back unhighlighted"><strong  class="odds">1.05</strong>
                          <div class="size"><span ><span >432.8K</span></span></div>
                        </td>
                        <td class="back unhighlighted"><strong  class="odds">1.06</strong>
                          <div class="size"><span ><span >172K</span></span></div>
                        </td>
                        <td class="back"><strong  class="odds">1.07</strong>
                          <div class="size"><span ><span >6.6K</span></span></div>
                        </td>
                        <td class="lay"><strong  class="odds">110</strong>
                          <div class="size"><span ><span >3.5K</span></span></div>
                        </td>
                        <td class="lay unhighlighted betting-disabled"></td>
                        <td class="lay unhighlighted"></td>
                      </tr>
                      <tr data-title="OPEN" class="">
                        <td >
                          <div class="event-name" style="color: rgb(15, 35, 39);">Over 0.5 Goals</div>
                          <p class="m-b-0"><span  style="color: black;">0</span> <span  style="display: none; color: black;"> &gt;&gt; 0</span></p>
                        </td>
                        <td  class="back unhighlighted betting-disabled"></td>
                        <td  class="back unhighlighted"><strong  class="odds">1.01</strong>
                          <div class="size"><span ><span >375K</span></span></div>
                        </td>
                        <td class="back"><strong  class="odds">1.02</strong>
                          <div class="size"><span >><span >1.7K</span></span></div>
                        </td>
                        <td class="lay"><strong  class="odds">18</strong>
                          <div class="size"><span ><span >10.6K</span></span></div>
                        </td>
                        <td class="lay unhighlighted"><strong  class="odds">21</strong>
                          <div class="size"><span ><span >21.6K</span></span></div>
                        </td>
                        <td class="lay unhighlighted"><strong  class="odds">26</strong>
                          <div class="size"><span ><span >11.3K</span>></span></div>
                        </td>
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
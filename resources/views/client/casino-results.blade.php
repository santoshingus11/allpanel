<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('layouts.client-header-url')
  <style>
    .result-image img {
      max-width: 40px;
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
        <div class="col-lg-10 col-md-12 col-sm-12">
          <div class="Home_pages_main_section mybets">
            <h1 class="event_Cricket">Casino Results</h1>
            <div class="row mb-4">
              <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="mybets-date-picker">
                  <div class="row">
                    <div class="col-lg-5">
                      <label for="fromDate" class="col-1 col-form-label">From:</label>
                      <input name="fromDate" type="date" id="fromDatepicker" autocomplete="off" class="mx-input w-100">
                    </div>
                    <div class="col-lg-5">
                      <label for="toDate" class="col-form-label">Casino Type</label>
                      <select class="form-select Casino-Type theme1font">
                        <option value="" disabled="disabled">Choose Casino Type Here</option>
                        <option value="teen">1 Day Teenpatti</option>
                        <option value="teen9">Test Teenpatti</option>
                        <option value="teen20">20-20 Teenpatti</option>
                        <option value="teen8">Open Teenpatti</option>
                        <option value="poker">1 Day Poker</option>
                        <option value="poker20">20-20 Poker</option>
                        <option value="poker9">6 Player Poker</option>
                        <option value="ab20">Andar Bahar Casino</option>
                        <option value="3cardj">3 Card Judgement</option>
                        <option value="card32">32 Cards - A</option>
                        <option value="card32eu">32 Cards - B</option>
                        <option value="worli">Worli Matka</option>
                        <option value="worli2">Instant Worli Matka</option>
                        <option value="lucky7">Lucky 7 - A</option>
                        <option value="lucky7eu">Lucky 7 - B</option>
                        <option value="dt20">20-20 Dragon Tiger</option>
                        <option value="dt6">1-Day Dragon Tiger</option>
                        <option value="aaa">Amar Akbar Anthony</option>
                        <option value="btable">Bollywood Casino</option>
                        <option value="war">Casino War</option>
                        <option value="dtl20">20-20 Dragon Tiger Lion</option>
                        <option value="cmeter">Casino Meter</option>
                        <option value="cmatch20">20-20 Cricket Match</option>
                        <option value="baccarat">Baccarat</option>
                        <option value="baccarat2">Baccarat 2</option>
                        <option value="dt202">20-20 Dragon Tiger 2</option>
                        <option value="abj">Andar Bahar 2</option>
                        <option value="race20">Race 20</option>
                        <option value="queen">Queen</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <label for="toDate" class="col-1 col-form-label w-100 height-24"></label>
                      <button class="btn btn-primary" style="height: 35px;"><i class="fa fa-search m-r-5"></i>Search</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mybets_table-design">
              <div class="cuttent_table">
                <div class="table-responsive">
                  <table class="table profit-loss-table">
                    <thead>
                      <tr>
                        <th>Round Id</th>
                        <th> Winner</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="pointer" data-bs-toggle="modal" data-bs-target="#Race20Result">231312130954</td>
                        <td class="">- race20</td>
                      </tr>
                      <tr>
                        <td class="pointer" data-bs-toggle="modal" data-bs-target="#Race20Result">231312130954</td>
                        <td class="">- race20</td>
                      </tr>
                      <tr>
                        <td class="pointer" data-bs-toggle="modal" data-bs-target="#Race20Result">231312130954</td>
                        <td class="" data-bs-toggle="modal" data-bs-target="#Race20Result">- race20</td>
                      </tr>
                      <tr>
                        <td class="pointer" data-bs-toggle="modal" data-bs-target="#Race20Result">231312130954</td>
                        <td class="" data-bs-toggle="modal" data-bs-target="#Race20Result">- race20</td>
                      </tr>
                      <tr>
                        <td class="pointer" data-bs-toggle="modal" data-bs-target="#Race20Result">231312130954</td>
                        <td class="" data-bs-toggle="modal" data-bs-target="#Race20Result">- race20</td>
                      </tr>
                      <tr>
                        <td class="pointer" data-bs-toggle="modal" data-bs-target="#Race20Result">231312130954</td>
                        <td class="">- race20</td>
                      </tr>
                      <tr>
                        <td class="pointer" data-bs-toggle="modal" data-bs-target="#Race20Result">231312130954</td>
                        <td class="">- race20</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <!-- Race 20 Result Modal -->
            <div class="modal fade" id="Race20Result" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Race20ResultLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="Race20ResultLabel">Casino Result</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body race-modal">
                    <div class="row player-container m-t-10">
                      <div class="text-center col-md-12">
                        <h4>Race 20 Result</h4>
                      </div>
                      <div class="col-md-12">
                        <h6 class="text-right"><b>Round Id :</b> 231312130954</h6>
                        <div class="race-result-box">
                          <div class="pr mb-1">
                            <span class="result-image"><img src="assets/cards/spade.png"></span>
                            <span class="result-image"><img src="assets/cards/3HH.png"></span>
                            <span class="result-image"><img src="assets/cards/4HH.png"></span>
                            <span class="result-image"><img src="assets/cards/7HH.png"></span>
                            <span class="result-image"><img src="assets/cards/AHH.png"></span>
                            <span class="result-image k-image"><img src="assets/cards/KHH.png"></span>
                          </div>
                          <div class="pr mb-1">
                            <span class="result-image"><img src="assets/cards/heart.png"></span>
                            <span class="result-image"><img src="assets/cards/3DD.png"></span>
                            <span class="result-image"><img src="assets/cards/QDD.png"></span>
                            <span class="result-image"><img src="assets/cards/JDD.png"></span>
                            <span class="result-image"><img src="assets/cards/10DD.png"></span>
                            <span class="result-image"><img src="assets/cards/8DD.png"></span>
                            <span class="result-image k-image"><img src="assets/cards/KDD.png"></span>
                            <div class="casino-result-cards-item">
                              <img src="assets/cards/winner.png" class="winner-icon">
                            </div>
                          </div>
                          <div class="pr mb-1">
                            <span class="result-image"><img src="assets/cards/club.png"></span>
                            <span class="result-image"><img src="assets/cards/QCC.png"></span>
                            <span class="result-image"><img src="assets/cards/3CC.png"></span>
                            <span class="result-image"><img src="assets/cards/7CC.png"></span>
                            <span class="result-image"><img src="assets/cards/6CC.png"></span>
                            <span class="result-image k-image"><img src="assets/cards/KCC.png"></span>
                          </div>
                          <div class="pr mb-1">
                            <span class="result-image"><img src="assets/cards/diamond.png"></span>
                            <span class="result-image"><img src="assets/cards/6SS.png"></span>
                            <span class="result-image"><img src="assets/cards/2SS.png"></span>
                            <span class="result-image"><img src="assets/cards/ASS.png"></span>
                            <span class="result-image"><img src="assets/cards/4SS.png"></span>
                            <span class="result-image k-image"><img src="assets/cards/KSS.png"></span>
                          </div>
                          <div class="video-winner-text">
                            <div>W</div>
                            <div>I</div>
                            <div>N</div>
                            <div>N</div>
                            <div>E</div>
                            <div>R</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <p class="text-center mt-3"><b class="text-success">Result: </b> Heart | Point : 100 | Cards : 17</p>
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
  <script>

  </script>
  @include('layouts.client-footer')
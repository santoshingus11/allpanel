<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="">
  @include('layouts.header-url')
</head>

<body>


  <div class="main-wrapper Dashboard-bg">
    <!-- partial:partials/_sidebar.html -->
    <div class="left-side-bar">@include('layouts.left-side-bar')</div>
    <div class="page-wrapper bg-none">
      <!-- partial:partials/_navbar.html -->
      <div class="top-header-section">@include('layouts.header')</div>
      <!-- partial -->
      <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin top-bg px-4">
          <div class="Welcome-to Dashboard">
            <ul class="d-flex justify-content-between Balance_Down">
              <li>Balance Down: <span class="red">0.00</span></li>
              <li>Balance Up: <span class="red">0.00</span></li>
              <li>Net Exposure: <span class="red">0.00</span></li>
              <li>Available Credit: <span class="">0.00</span></li>
            </ul>
          </div>
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0">
              Refresh
            </button>
          </div>
        </div>

        <div class="card-body top-bg py-4 px-4">
          <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
              <div class="casino-box game-type-container casino-box m-b-15 teenpatti-container new-casino race mb-5">

                <div class="casino-video">
                  <div class="video-box-container">
                    <div class="video-boxs">
                      <img src="{{asset('admin/Super-Admin/assets/video/race20.png')}}" alt="" class="img-fluid"/>
                    </div>
                  </div>

                  <div title="Rules" class="casino-video-rules-icon" role="button"><i class="fas fa-info-circle"></i></div>

                  <div>
                    <div id="rules-modal___BV_modal_outer_" style="position: relative; z-index: 2000;">
                      <div id="rules-modal" role="dialog" tabindex="-1" aria-hidden="true" class="modal fade casino-rules" style="display: none;">
                        <div class="modal-dialog modal-md">
                          <div role="document" id="rules-modal___BV_modal_content_" aria-labelledby="rules-modal___BV_modal_header_" aria-describedby="rules-modal___BV_modal_body_" class="modal-content">
                            <header id="rules-modal___BV_modal_header_" class="modal-header">
                              <h5 class="modal-title">Rules</h5><button type="button" aria-label="Close" class="close">×</button>
                            </header>
                            <div id="rules-modal___BV_modal_body_" class="modal-body"><img src="{{asset('admin/Super-Admin/assets/rules/race20.jpg')}}" class="img-fluid"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card-content m-t-10">
                  <div class="casino-odds-box-wrapper">
                    <div class="casino-odds-box-container casino-odds-box-container-double">
                      <div class="casino-odds-box-bhav"><img src="https://d3kb8xz339pq18.cloudfront.net/v1/static/backend/images/cards/KHH.png" style="width: 35px;">
                        <div class="range-icon"><i data-toggle="collapse" data-target="#demo0" class="fas fa-info-circle float-right"></i>
                          <div id="demo0" class="collapse icon-range">
                            Range:<span>100</span>-<span>50K</span></div>
                        </div>
                      </div>
                      <div class="casino-odds-box suspended">
                        <div class="back-border"><span class="casino-odds-box-odd">0.00</span> <span>0</span></div>
                        <div class="lay-border"><span class="casino-odds-box-odd">0.00</span> <span>0</span></div>
                      </div>
                      <div class="casino-odds-book" style="color: black;">0</div>
                    </div>
                    <div class="casino-odds-box-container casino-odds-box-container-double">
                      <div class="casino-odds-box-bhav"><img src="https://d3kb8xz339pq18.cloudfront.net/v1/static/backend/images/cards/KDD.png" style="width: 35px;">
                        <div class="range-icon"><i data-toggle="collapse" data-target="#demo1" class="fas fa-info-circle float-right"></i>
                          <div id="demo1" class="collapse icon-range">
                            Range:<span>100</span>-<span>50K</span></div>
                        </div>
                      </div>
                      <div class="casino-odds-box suspended">
                        <div class="back-border"><span class="casino-odds-box-odd">0.00</span> <span>0</span></div>
                        <div class="lay-border"><span class="casino-odds-box-odd">0.00</span> <span>0</span></div>
                      </div>
                      <div class="casino-odds-book" style="color: black;">0</div>
                    </div>
                    <div class="casino-odds-box-container casino-odds-box-container-double">
                      <div class="casino-odds-box-bhav"><img src="https://d3kb8xz339pq18.cloudfront.net/v1/static/backend/images/cards/KCC.png" style="width: 35px;">
                        <div class="range-icon"><i data-toggle="collapse" data-target="#demo2" class="fas fa-info-circle float-right"></i>
                          <div id="demo2" class="collapse icon-range">
                            Range:<span>100</span>-<span>50K</span></div>
                        </div>
                      </div>
                      <div class="casino-odds-box suspended">
                        <div class="back-border"><span class="casino-odds-box-odd">0.00</span> <span>0</span></div>
                        <div class="lay-border"><span class="casino-odds-box-odd">0.00</span> <span>0</span></div>
                      </div>
                      <div class="casino-odds-book" style="color: black;">0</div>
                    </div>
                    <div class="casino-odds-box-container casino-odds-box-container-double">
                      <div class="casino-odds-box-bhav"><img src="https://d3kb8xz339pq18.cloudfront.net/v1/static/backend/images/cards/KSS.png" style="width: 35px;">
                        <div class="range-icon"><i data-toggle="collapse" data-target="#demo3" class="fas fa-info-circle float-right"></i>
                          <div id="demo3" class="collapse icon-range">
                            Range:<span>100</span>-<span>50K</span></div>
                        </div>
                      </div>
                      <div class="casino-odds-box suspended">
                        <div class="back-border"><span class="casino-odds-box-odd">0.00</span> <span>0</span></div>
                        <div class="lay-border"><span class="casino-odds-box-odd">0.00</span> <span>0</span></div>
                      </div>
                      <div class="casino-odds-book" style="color: black;">0</div>
                    </div>
                  </div>
                </div>

                <div class="row row5 mt-2">
                  <div class="col-lg-4 col-md-12 col-sm-12 change_view-port">
                    <div class="card-content">
                      <div class="casino-odds-box-container casino-odds-box-container-extra">
                        <div class="casino-yn">
                          <div></div>
                          <div class="casino-odds-box-bhav"><b>No</b></div>
                          <div class="casino-odds-box-bhav"><b>Yes</b></div>
                        </div>
                        <div class="casino-odds-box casino-yn">
                          <div class="casino-odds-box-bhav"><b>Total Point</b>
                            <div class="range-icon"><i data-toggle="collapse" data-target="#demo4" class="fas fa-info-circle float-right"></i>
                              <div id="demo4" class="collapse icon-range">
                                Range:<span>100</span>-<span>50K</span></div>
                            </div>
                          </div>
                          <div class="lay-border"><span class="casino-odds-box-odd">79.00</span> <span>100</span></div>
                          <div class="back-border"><span class="casino-odds-box-odd">83.00</span> <span>100</span></div>
                        </div>
                        <div class="casino-odds-book" style="color: black;">0</div>
                      </div>
                      <div class="casino-odds-box-container casino-odds-box-container-extra">
                        <div class="casino-yn">
                          <div></div>
                          <div class="casino-odds-box-bhav"><b>No</b></div>
                          <div class="casino-odds-box-bhav"><b>Yes</b></div>
                        </div>
                        <div class="casino-odds-box casino-yn">
                          <div class="casino-odds-box-bhav"><b>Total Card</b>
                            <div class="range-icon"><i data-toggle="collapse" data-target="#demo5" class="fas fa-info-circle float-right"></i>
                              <div id="demo5" class="collapse icon-range">
                                Range:<span>100</span>-<span>50K</span></div>
                            </div>
                          </div>
                          <div class="lay-border"><span class="casino-odds-box-odd">13.00</span> <span>105</span></div>
                          <div class="back-border"><span class="casino-odds-box-odd">13.00</span> <span>90</span></div>
                        </div>
                        <div class="casino-odds-book" style="color: black;">0</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-12 col-sm-12 change_view-port">
                    <div class="card-content">
                      <div class="row row5">
                        <div class="col-4">
                          <div class="casino-odds-box-container casino-odds-box-container-extra">
                            <div class="casino-odds-box-bhav"><b>Win with 5</b>
                              <div class="range-icon"><i data-toggle="collapse" data-target="#demo6" class="fas fa-info-circle float-right"></i>
                                <div id="demo6" class="collapse icon-range">
                                  Range:<span>10</span>-<span>12K</span></div>
                              </div>
                            </div>
                            <div class="casino-odds-box back-border"><span class="casino-odds-box-odd">101.00</span></div>
                            <div class="casino-odds-book" style="color: black;">0</div>
                          </div>
                          <div class="casino-odds-box-container casino-odds-box-container-extra">
                            <div class="casino-odds-box-bhav"><b>Win with 15</b>
                              <div class="range-icon"><i data-toggle="collapse" data-target="#demo9" class="fas fa-info-circle float-right"></i>
                                <div id="demo9" class="collapse icon-range">
                                  Range:<span>10</span>-<span>12K</span></div>
                              </div>
                            </div>
                            <div class="casino-odds-box back-border"><span class="casino-odds-box-odd">8.00</span></div>
                            <div class="casino-odds-book" style="color: black;">0</div>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="casino-odds-box-container casino-odds-box-container-extra">
                            <div class="casino-odds-box-bhav"><b>Win with 6</b>
                              <div class="range-icon"><i data-toggle="collapse" data-target="#demo7" class="fas fa-info-circle float-right"></i>
                                <div id="demo7" class="collapse icon-range">
                                  Range:<span>10</span>-<span>12K</span></div>
                              </div>
                            </div>
                            <div class="casino-odds-box back-border"><span class="casino-odds-box-odd">51.00</span></div>
                            <div class="casino-odds-book" style="color: black;">0</div>
                          </div>
                          <div class="casino-odds-box-container casino-odds-box-container-extra">
                            <div class="casino-odds-box-bhav"><b>Win with 16</b>
                              <div class="range-icon"><i data-toggle="collapse" data-target="#demo10" class="fas fa-info-circle float-right"></i>
                                <div id="demo10" class="collapse icon-range">
                                  Range:<span>10</span>-<span>12K</span></div>
                              </div>
                            </div>
                            <div class="casino-odds-box back-border"><span class="casino-odds-box-odd">11.00</span></div>
                            <div class="casino-odds-book" style="color: black;">0</div>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="casino-odds-box-container casino-odds-box-container-extra">
                            <div class="casino-odds-box-bhav"><b>Win with 7</b>
                              <div class="range-icon"><i data-toggle="collapse" data-target="#demo8" class="fas fa-info-circle float-right"></i>
                                <div id="demo8" class="collapse icon-range">
                                  Range:<span>10</span>-<span>12K</span></div>
                              </div>
                            </div>
                            <div class="casino-odds-box back-border"><span class="casino-odds-box-odd">26.00</span></div>
                            <div class="casino-odds-book" style="color: black;">0</div>
                          </div>
                          <div class="casino-odds-box-container casino-odds-box-container-extra">
                            <div class="casino-odds-box-bhav"><b>Win with 17</b>
                              <div class="range-icon"><i data-toggle="collapse" data-target="#demo11" class="fas fa-info-circle float-right"></i>
                                <div id="demo11" class="collapse icon-range">
                                  Range:<span>10</span>-<span>12K</span></div>
                              </div>
                            </div>
                            <div class="casino-odds-box back-border"><span class="casino-odds-box-odd">31.00</span></div>
                            <div class="casino-odds-book" style="color: black;">0</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="table-remark text-right mt-3"><span class="remark text-white">Hi.</span></div>

                <div class="market-title theme1font m-t-10">
                  <span class="d-inline-block m-b-0">Last Result</span>
                  <span class="float-right round mt-1"><a href="casino-result.php" class="">View All</a></span>
                </div>

                <div class="last-result-container text-right m-t-10 mb-5">
                  <div class="last-result-container text-right m-t-10">
                    <span class="last-result ball-runs playersuit"><img src="{{asset('admin/Super-Admin/assets/cards/spade.png')}}" class=""></span>
                    <span class="last-result ball-runs playersuit"><img src="{{asset('admin/Super-Admin/assets/cards/heart.png')}}" class=""></span>
                    <span class="last-result ball-runs playersuit"><img src="{{asset('admin/Super-Admin/assets/cards/diamond.png')}}" class="diamond"></span>
                    <span class="last-result ball-runs playersuit"><img src="{{asset('admin/Super-Admin/assets/cards/heart.png')}}" class=""></span>
                    <span class="last-result ball-runs playersuit"><img src="{{asset('admin/Super-Admin/assets/cards/diamond.png')}}" class="diamond"></span>
                    <span class="last-result ball-runs playersuit"><img src="{{asset('admin/Super-Admin/assets/cards/heart.png')}}" class=""></span>
                    <span class="last-result ball-runs playersuit"><img src="{{asset('admin/Super-Admin/assets/cards/heart.png')}}" class=""></span>
                    <span class="last-result ball-runs playersuit"><img src="{{asset('admin/Super-Admin/assets/cards/diamond.png')}}" class="diamond"></span>
                    <span class="last-result ball-runs playersuit"><img src="{{asset('admin/Super-Admin/assets/cards/spade.png')}}" class=""></span>
                    <span class="last-result ball-runs playersuit"><img src="{{asset('admin/Super-Admin/assets/cards/heart.png')}}" class=""></span>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="right-side-bar">
                <div class="">
                  <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                      Download CSV
                    </button>
                    <a href="#"><button type="button" class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">
                        New Agent
                      </button></a>
                  </div>
                </div>
                <div class="table-responsive mt-3">
                  <table class="table coupon-table  m-b-0">
                    <thead>
                      <tr>
                        <th>UserName</th>
                        <th style="min-width: 140px;">Nation</th>
                        <th style="min-width: 50px;">Userrate</th>
                        <th>Amount</th>
                        <th style="min-width: 80px;">PlaceDate</th>
                        <th style="min-width: 80px;">MatchDate</th>
                        <th style="min-width: 60px;">Gametype</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="9" class="text-center">There are no records to show</td>
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
  @include('layouts.footer')
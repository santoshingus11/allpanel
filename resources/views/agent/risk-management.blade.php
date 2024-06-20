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
  <div class="main-wrapper Dashboard-bg admin-bg customResponsive">
    <!-- partial:partials/_sidebar.html -->
    <div class="left-side-bar">@include('layouts.left-side-bar')</div>
    <div class="page-wrapper bg-none">
      <!-- partial:partials/_navbar.html -->
      <div class="top-header-section">@include('layouts.header')</div>
      <!-- partial -->
      <div class="page-content">
        <div class="Welcometo-section">
          @include('layouts.top-balance-section')
        </div>
        <div class="row">
          <div class="col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
              <div class="card-body pt-2">
                <div class="d-flex justify-content-between align-items-center pb-2 border-bottom">
                  <div class="d-inline-flex align-items-center">
                    <h4 class=" mb-0"> Risk Management Summary</h4>
                  </div>

                </div>
                <div class="row mt-4">
                  <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="_Risk-Management Summary">
                      <div class="top_player-wrap">
                        <h3>
                          <ul class="tab-topplay">
                            <li class="select"><a href="#">Top 10 Matched Amount Player
                              </a></li>
                            <li><a href="#">Top 10 Exposure Player
                              </a></li>
                          </ul>
                        </h3>
                        <div class="row">
                          <div class="col-lg-6 col-md-12 col-sm-12 padding-right-0 no_change_this_code">
                            <ul class="slip-head">
                              <li class="col-playID">UID
                              </li>
                              <li class="col-exp">Exposure
                              </li>
                              <li class="col-amount sort-this">Matched Amount
                              </li>
                            </ul>
                            <table class="table01" style="margin-top: -6px;border-right: 1px solid #27415138;">
                              <tbody id="content_top_1_5">
                                <tr id="tempTr_noData_top">
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr id="tempTr_noData_top">
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr id="tempTr_noData_top">
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr id="tempTr_noData_top">
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr id="tempTr_noData_top">
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-lg-6 col-md-12 col-sm-12 padding-left-0 no_change_this_code">
                            <ul class="slip-head">
                              <li class="col-playID">UID
                              </li>
                              <li class="col-exp">Exposure
                              </li>
                              <li class="col-amount sort-this">Matched Amount
                              </li>
                            </ul>
                            <table class="table01" style="margin-top: -6px;">
                              <tbody id="content_top_1_5">
                                <tr id="tempTr_noData_top">
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr id="tempTr_noData_top">
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr id="tempTr_noData_top">
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr id="tempTr_noData_top">
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr id="tempTr_noData_top">
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12 no_change_this_code">
                    <div class="_Risk-Management Summary">
                      <div class="top_player-wrap">
                        <h3>Horse Racing &amp; Greyhound Racing</h3>
                      </div>
                      <ul class="slip-head">
                        <li class="col-playID">UID
                        </li>
                        <li class="col-exp">Exposure
                        </li>
                        <li class="col-amount sort-this">Matched Amount
                        </li>
                      </ul>
                      <table class="table01" style="margin-top: -6px;">
                        <tbody id="content_top_1_5">
                          <tr id="tempTr_noData_top">
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr id="tempTr_noData_top">
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr id="tempTr_noData_top">
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr id="tempTr_noData_top">
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr id="tempTr_noData_top">
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>



                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="match-wrap">
                    <div class="total_all Match_Odds">
                      <h2>Match Odds
                      </h2>
                      <div class="Match_Download_refresh">
                        <a class="btn_replay" href="javascript:void(0);" id="downloadFile_Match_Odds w1-80">Download</a>
                        <a class="btn_replay" href="javascript:void(0);" id="refresh_Match_Odds"><img src="assets/img/reload-black.png"></a>
                      </div>
                    </div>

                    <table class="table01 risk-management fix_mobile_view_design_code">
                      <tbody>
                        <tr>
                          <th width="10%" class="align-L" rowspan="2">Sports
                          </th>
                          <th width="7%" class="align-L" rowspan="2">Market Date
                          </th>
                          <th class="align-L" rowspan="2">Event/Market Name
                          </th>
                          <th width="21%" class="align-C border-l bg-yellow" colspan="3">Player P/L
                          </th>
                          <th width="6%" class="align-C border-l" rowspan="2">Downline P/L
                          </th>
                        </tr>
                        <tr>
                          <th width="7%" class="border-l bg-yellow align-C">1</th>
                          <th width="7%" class="bg-yellow align-C">X</th>
                          <th width="7%" class="bg-yellow align-C">2</th>
                        </tr>

                      </tbody>
                      <tbody id="content_MATCH_ODDS_DRAW">
                        <tr id="tempTr_noData_MATCH_ODDS_DRAW">
                          <td class="no-data" colspan="7">
                            <p>No Data
                            </p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="table01 risk-management fix_mobile_view_design_code">
                      <tbody>
                        <tr>
                          <th width="10%" class="align-L" rowspan="2">Sports
                          </th>
                          <th width="8%" class="align-L" rowspan="2">Market Date
                          </th>
                          <th class="align-L" rowspan="2">Event/Market Name
                          </th>
                          <th width="18%" class="align-C border-l bg-yellow" colspan="2">Player P/L
                          </th>
                          <th width="6%" class="align-C border-l" rowspan="2">Downline P/L
                          </th>
                        </tr>
                        <tr>
                          <th width="9%" class="border-l bg-yellow align-C">1</th>
                          <th width="9%" class="bg-yellow align-C">2</th>
                        </tr>

                      </tbody>
                      <tbody id="content_MATCH_ODDS">
                        <tr id="tempTr_noData_MATCH_ODDS">
                          <td class="no-data" colspan="6">
                            <p>No Data
                            </p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="match-wrap">
                    <div class="total_all Match_Odds">
                      <h2>Book Maker
                      </h2>
                      <div class="Match_Download_refresh">
                        <a class="btn_replay w1-80" href="javascript:void(0);" id="downloadFile_Match_Odds">Download</a>
                        <a class="btn_replay" href="javascript:void(0);" id="refresh_Match_Odds"><img src="assets/img/reload-black.png"></a>
                      </div>
                    </div>
                    <table class="table01 risk-management fix_mobile_view_design_code">
                      <tbody>
                        <tr>
                          <th width="10%" class="align-L" rowspan="2">Sports
                          </th>
                          <th width="7%" class="align-L" rowspan="2">Market Date
                          </th>
                          <th class="align-L" rowspan="2">Event/Market Name
                          </th>
                          <th width="21%" class="align-C border-l bg-yellow" colspan="3">Player P/L
                          </th>
                          <th width="6%" class="align-C border-l" rowspan="2">Downline P/L
                          </th>
                        </tr>
                        <tr>
                          <th width="7%" class="border-l bg-yellow align-C">1</th>
                          <th width="7%" class="bg-yellow align-C">X</th>
                          <th width="7%" class="bg-yellow align-C">2</th>
                        </tr>

                      </tbody>
                      <tbody id="content_MATCH_ODDS_DRAW">
                        <tr id="tempTr_noData_MATCH_ODDS_DRAW">
                          <td class="no-data" colspan="7">
                            <p>No Data
                            </p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="table01 risk-management fix_mobile_view_design_code">
                      <tbody>
                        <tr>
                          <th width="10%" class="align-L" rowspan="2">Sports
                          </th>
                          <th width="8%" class="align-L" rowspan="2">Market Date
                          </th>
                          <th class="align-L" rowspan="2">Event/Market Name
                          </th>
                          <th width="18%" class="align-C border-l bg-yellow" colspan="2">Player P/L
                          </th>
                          <th width="6%" class="align-C border-l" rowspan="2">Downline P/L
                          </th>
                        </tr>
                        <tr>
                          <th width="9%" class="border-l bg-yellow align-C">1</th>
                          <th width="9%" class="bg-yellow align-C">2</th>
                        </tr>

                      </tbody>
                      <tbody id="content_MATCH_ODDS">
                        <tr id="tempTr_noData_MATCH_ODDS">
                          <td class="no-data" colspan="6">
                            <p>No Data
                            </p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="match-wrap">
                    <div class="total_all Match_Odds">
                      <h2>Fancy Bet
                      </h2>
                      <div class="Match_Download_refresh">
                        <a class="btn_replay w1-80" href="javascript:void(0);" id="downloadFile_Match_Odds">Download</a>
                        <a class="btn_replay" href="javascript:void(0);" id="refresh_Match_Odds"><img src="assets/img/reload-black.png"></a>
                      </div>
                    </div>
                    <table class="table01 risk-management fix_mobile_view_design_code">
                      <tbody>
                        <tr>
                          <th width="10%" class="align-L" rowspan="2">Sports
                          </th>
                          <th width="7%" class="align-L" rowspan="2">Market Date
                          </th>
                          <th class="align-L" rowspan="2">Event/Market Name
                          </th>
                          <th width="21%" class="align-C border-l bg-yellow" colspan="3">Player P/L
                          </th>
                          <th width="6%" class="align-C border-l" rowspan="2">Downline P/L
                          </th>
                        </tr>
                        <tr>
                          <th width="7%" class="border-l bg-yellow align-C">1</th>
                          <th width="7%" class="bg-yellow align-C">X</th>
                          <th width="7%" class="bg-yellow align-C">2</th>
                        </tr>

                      </tbody>
                      <tbody id="content_MATCH_ODDS_DRAW">
                        <tr id="tempTr_noData_MATCH_ODDS_DRAW">
                          <td class="no-data" colspan="7">
                            <p>No Data
                            </p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="table01 risk-management fix_mobile_view_design_code">
                      <tbody>
                        <tr>
                          <th width="10%" class="align-L" rowspan="2">Sports
                          </th>
                          <th width="8%" class="align-L" rowspan="2">Market Date
                          </th>
                          <th class="align-L" rowspan="2">Event/Market Name
                          </th>
                          <th width="18%" class="align-C border-l bg-yellow" colspan="2">Player P/L
                          </th>
                          <th width="6%" class="align-C border-l" rowspan="2">Downline P/L
                          </th>
                        </tr>
                        <tr>
                          <th width="9%" class="border-l bg-yellow align-C">1</th>
                          <th width="9%" class="bg-yellow align-C">2</th>
                        </tr>

                      </tbody>
                      <tbody id="content_MATCH_ODDS">
                        <tr id="tempTr_noData_MATCH_ODDS">
                          <td class="no-data" colspan="6">
                            <p>No Data
                            </p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="match-wrap">
                    <div class="total_all Match_Odds">
                      <h2>Sports Book
                      </h2>
                      <div class="Match_Download_refresh">
                        <a class="btn_replay w1-80" href="javascript:void(0);" id="downloadFile_Match_Odds">Download</a>
                        <a class="btn_replay" href="javascript:void(0);" id="refresh_Match_Odds"><img src="assets/img/reload-black.png"></a>
                      </div>
                    </div>
                    <table class="table01 risk-management fix_mobile_view_design_code">
                      <tbody>
                        <tr>
                          <th width="10%" class="align-L" rowspan="2">Sports
                          </th>
                          <th width="7%" class="align-L" rowspan="2">Market Date
                          </th>
                          <th class="align-L" rowspan="2">Event/Market Name
                          </th>
                          <th width="21%" class="align-C border-l bg-yellow" colspan="3">Player P/L
                          </th>
                          <th width="6%" class="align-C border-l" rowspan="2">Downline P/L
                          </th>
                        </tr>
                        <tr>
                          <th width="7%" class="border-l bg-yellow align-C">1</th>
                          <th width="7%" class="bg-yellow align-C">X</th>
                          <th width="7%" class="bg-yellow align-C">2</th>
                        </tr>

                      </tbody>
                      <tbody id="content_MATCH_ODDS_DRAW">
                        <tr id="tempTr_noData_MATCH_ODDS_DRAW">
                          <td class="no-data" colspan="7">
                            <p>No Data
                            </p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="table01 risk-management fix_mobile_view_design_code">
                      <tbody>
                        <tr>
                          <th width="10%" class="align-L" rowspan="2">Sports
                          </th>
                          <th width="8%" class="align-L" rowspan="2">Market Date
                          </th>
                          <th class="align-L" rowspan="2">Event/Market Name
                          </th>
                          <th width="18%" class="align-C border-l bg-yellow" colspan="2">Player P/L
                          </th>
                          <th width="6%" class="align-C border-l" rowspan="2">Downline P/L
                          </th>
                        </tr>
                        <tr>
                          <th width="9%" class="border-l bg-yellow align-C">1</th>
                          <th width="9%" class="bg-yellow align-C">2</th>
                        </tr>

                      </tbody>
                      <tbody id="content_MATCH_ODDS">
                        <tr id="tempTr_noData_MATCH_ODDS">
                          <td class="no-data" colspan="6">
                            <p>No Data
                            </p>
                          </td>
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

    <script>
      /*===================== Deposit / Withdraw	Deposit / Withdraw	===========*/
      var dBtn = document.getElementById("dBtn");
      var wBtn = document.getElementById("wBtn");

      dBtn.addEventListener("click", function() {
        var btnListDW = document.querySelector(".btn_list-DW");
        btnListDW.classList.add("dBtn-select");
        btnListDW.classList.remove("wBtn-select");
      });

      wBtn.addEventListener("click", function() {
        var btnListDW = document.querySelector(".btn_list-DW");
        btnListDW.classList.add("wBtn-select");
        btnListDW.classList.remove("dBtn-select");
      });

      var wBtn = document.getElementById("wBtn");
      var fullBtn = document.getElementById("fullBtn");

      wBtn.addEventListener("click", function() {
        // Check if the fullBtn element has the 'disable' class
        if (fullBtn.classList.contains("disable")) {
          // Remove the 'disable' class
          fullBtn.classList.remove("disable");
        }
      });

      /*===================== Deposit / Withdraw end	Deposit / Withdraw	===========*/

      /*===================== Credit Reference	Credit Reference	===========*/
      var editBtn = document.getElementById("editCreditReferenceBtn");
      var cancelBtn = document.getElementById("cancelCreditReferenceBtn");
      var userCreditReference = document.getElementById("userCreditReference");
      var editCreditReference = document.getElementById("editCreditReference");

      // Edit button click event
      editBtn.addEventListener("click", function() {
        // Hide userCreditReference and show editCreditReference
        userCreditReference.style.display = "none";
        editCreditReference.style.display = "inline-block";
        // Show cancel button and hide edit button
        cancelBtn.style.display = "inline-block";
        editBtn.style.display = "none";
      });

      // Cancel button click event
      cancelBtn.addEventListener("click", function() {
        // Show userCreditReference and hide editCreditReference
        userCreditReference.style.display = "inline-block";
        editCreditReference.style.display = "none";
        // Show edit button and hide cancel button
        editBtn.style.display = "inline-block";
        cancelBtn.style.display = "none";
      });
      /*===================== Credit Reference end	Credit Reference	===========*/
    </script>
   @include('layouts.footer')
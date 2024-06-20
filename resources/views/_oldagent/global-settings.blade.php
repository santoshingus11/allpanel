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
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                  <div class="d-inline-flex align-items-center">
                    <h4 class=" mb-0">Global Settings</h4>
                  </div>
                </div>


                <table class="table-s table-exchange w-100 border bg-white mb-4">
                  <thead>
                    <tr>
                      <th colspan="3" class="table-s-header">Site Under Maintenance</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="ancy-setting">
                      <td><label class="form-check-label text-black" for="inlineCheckbox1">Site Under Maintenance</label></td>
                      <td>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label text-black" for="inlineCheckbox1">Site Under Maintenance</label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <table class="table-s table-exchange w-100 border bg-white mb-4 fix_mobile_view_design_code">
                  <thead>
                    <tr>
                      <th colspan="9" class="table-s-header">Currency Settings</th>
                      <th colspan="2" class="table-s-header"><button type="submit" class="btn btn-primary tealgreen btn-icon-text mb-md-0">Add More</button></th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr class="ancy-setting">
                      <td class="font-600 text-black">Match Stack</td>
                      <td>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <label for="IndexNumber" class="Currency_Settings wid-150">Select Sport</label>
                          <select class="form-select font-14 box-shadow" aria-label="Default select example">
                            <option value="0">All</option>
                            <option value="-1">Live Teen Patti</option>
                            <option value="-2">Live Poker</option>
                            <option value="-3">Andar Bahar</option>
                          </select>
                        </div>
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings wid-150"> Min Bet</label>
                        <input type="text" placeholder="Min Bet" class="box-shadow form-control font-12" id="commissionInput">
                      </td>

                      <td>
                        <label for="IndexNumber" class="Currency_Settings wid-150">Max Bet</label>
                        <input type="text" placeholder="Max Bet" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings wid-150">Stakes 1</label>
                        <input type="text" placeholder="Stakes 1" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings wid-150">Stakes 2</label>
                        <input type="text" placeholder="Stakes 2" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings wid-150">Stakes 3</label>
                        <input type="text" placeholder="Stakes 3" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings wid-150">Stakes 4</label>
                        <input type="text" placeholder="Stakes 4" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings wid-150">Stakes 5</label>
                        <input type="text" placeholder="Stakes 5" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings wid-150">Stakes 6</label>
                        <input type="text" placeholder="Stakes 6" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings"></label>
                        <button type="submit" class="btn btn-primary New-Agent btn-icon-text">Update</button>
                      </td>
                    </tr>
                    <tr class="ancy-setting">
                      <td class="font-600 text-black">Match Stack</td>
                      <td>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <label for="IndexNumber" class="Currency_Settings">Select Sport</label>
                          <select class="form-select font-14 box-shadow" aria-label="Default select example">
                            <option value="0">All</option>
                            <option value="-1">Live Teen Patti</option>
                            <option value="-2">Live Poker</option>
                            <option value="-3">Andar Bahar</option>
                          </select>
                        </div>
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings"> Min Bet</label>
                        <input type="text" placeholder="Min Bet" class="box-shadow form-control font-12" id="commissionInput">
                      </td>

                      <td>
                        <label for="IndexNumber" class="Currency_Settings">Max Bet</label>
                        <input type="text" placeholder="Max Bet" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings">Stakes 1</label>
                        <input type="text" placeholder="Stakes 1" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings">Stakes 2</label>
                        <input type="text" placeholder="Stakes 2" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings">Stakes 3</label>
                        <input type="text" placeholder="Stakes 3" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings">Stakes 4</label>
                        <input type="text" placeholder="Stakes 4" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings">Stakes 5</label>
                        <input type="text" placeholder="Stakes 5" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings">Stakes 6</label>
                        <input type="text" placeholder="Stakes 6" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings"></label>
                        <button type="submit" class="btn btn-primary New-Agent btn-icon-text">Update</button>
                      </td>
                    </tr>
                    <tr class="ancy-setting">
                      <td class="font-600 text-black">Match Stack</td>
                      <td>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <label for="IndexNumber" class="Currency_Settings">Select Sport</label>
                          <select class="form-select font-14 box-shadow" aria-label="Default select example">
                            <option value="0">All</option>
                            <option value="-1">Live Teen Patti</option>
                            <option value="-2">Live Poker</option>
                            <option value="-3">Andar Bahar</option>
                          </select>
                        </div>
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings"> Min Bet</label>
                        <input type="text" placeholder="Min Bet" class="box-shadow form-control font-12" id="commissionInput">
                      </td>

                      <td>
                        <label for="IndexNumber" class="Currency_Settings">Max Bet</label>
                        <input type="text" placeholder="Max Bet" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings">Stakes 1</label>
                        <input type="text" placeholder="Stakes 1" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings">Stakes 2</label>
                        <input type="text" placeholder="Stakes 2" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings">Stakes 3</label>
                        <input type="text" placeholder="Stakes 3" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings">Stakes 4</label>
                        <input type="text" placeholder="Stakes 4" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings">Stakes 5</label>
                        <input type="text" placeholder="Stakes 5" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings">Stakes 6</label>
                        <input type="text" placeholder="Stakes 6" class="box-shadow form-control font-12" id="commissionInput">
                      </td>
                      <td>
                        <label for="IndexNumber" class="Currency_Settings"></label>
                        <button type="submit" class="btn btn-primary New-Agent btn-icon-text">Update</button>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <table class="table-s table-exchange w-100 border bg-white mb-4 fix_mobile_view_design_code">
                  <thead>
                    <tr>
                      <th colspan="4" class="table-s-header">Limit &amp; Delay Setting</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="ancy-setting">
                      <th class=""></th>
                      <th class="">Min</th>
                      <th class="">Max</th>
                      <th class="">Delay</th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr class="ancy-setting">
                      <td class="font-600 text-black">Odds</td>
                      <td class=""><input type="number" placeholder="Commission" value="400" class="box-shadow form-control font-12 wid-150" id="commissionInput"></td>
                      <td class=""><input type="number" placeholder="Commission" value="100000" class="box-shadow form-control font-12 wid-150" id="commissionInput"></td>
                      <td class=""><input type="number" placeholder="Commission" value="1" class="box-shadow form-control font-12 wid-150" id="commissionInput"></td>
                    </tr>
                    <tr class="ancy-setting">
                      <td class="font-600 text-black">Bookmaker</td>
                      <td class=""><input type="number" placeholder="Commission" value="400" class="box-shadow form-control font-12 wid-150" id="commissionInput"></td>
                      <td class=""><input type="number" placeholder="Commission" value="100000" class="box-shadow form-control font-12 wid-150" id="commissionInput"></td>
                      <td class=""><input type="number" placeholder="Commission" value="1" class="box-shadow form-control font-12 wid-150" id="commissionInput"></td>
                    </tr>
                    <tr class="ancy-setting">
                      <td class="font-600 text-black">Session</td>
                      <td class=""><input type="number" placeholder="Commission" value="400" class="box-shadow form-control font-12 wid-150" id="commissionInput"></td>
                      <td class=""><input type="number" placeholder="Commission" value="100000" class="box-shadow form-control font-12 wid-150" id="commissionInput"></td>
                      <td class=""><input type="number" placeholder="Commission" value="1" class="box-shadow form-control font-12 wid-150" id="commissionInput"></td>
                    </tr>
                  </tbody>
                </table>

                <table class="table-s table-exchange w-100 border bg-white mb-4">
                  <thead>
                    <tr>
                      <th colspan="2" class="table-s-header">Set Bet Limit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="ancy-setting">
                      <th class="">Max Amount to Bet</th>
                      <th class="">Max Number of Bet</th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr class="ancy-setting">
                      <td class=""><input type="number" placeholder="Commission" value="400" class="box-shadow form-control font-12" id="commissionInput"></td>
                      <td class=""><input type="number" placeholder="Commission" value="100000" class="box-shadow form-control font-12" id="commissionInput"></td>
                    </tr>
                  </tbody>
                </table>

                <table class="table-s table-exchange w-100" style="background-color: #232a54 !important;">
                  <thead class="d-none">
                    <tr>
                      <th colspan="3" class="table-s-header">Limit &amp; Delay Setting</th>
                    </tr>
                  </thead>
                  <tbody class="d-none">
                    <tr class="ancy-setting">
                      <th class=""></th>
                      <th class=""></th>
                      <th class=""></th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr class="ancy-setting">
                      <td class="mobile_port_change">
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Site logo</label>
                          <input class="form-control event-search" type="file" id="formFile">
                        </div>
                      </td>
                      <td class="mobile_port_change" width="30%">
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Ex:(185*45, PNG)</label>
                          <div class="global-ex-logo"><img class="w-100" src="https://clone-skybetting.mrmmbs.com/skyexchange-Responsive/agent/assets/logo.png"></div>
                        </div>
                      </td>
                      <td class="mobile_port_change"><button type="submit" class="btn btn-primary tealgreen btn-icon-text mb-md-0">Submit</button></td>
                    </tr>
                  </tbody>
                </table>

                <table class="table-s table-exchange w-100 mt-2" style="background-color: #232a54 !important;">
                  <thead class="d-none">
                    <tr>
                      <th colspan="3" class="table-s-header">Fav Icon</th>
                    </tr>
                  </thead>
                  <tbody class="d-none">
                    <tr class="ancy-setting">
                      <th class=""></th>
                      <th class=""></th>
                      <th class=""></th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr class="ancy-setting">
                      <td class="mobile_port_change">
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Fav Icon</label>
                          <input class="form-control event-search" type="file" id="formFile">
                        </div>
                      </td>
                      <td class="mobile_port_change" width="30%">
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Ex:(185*45, PNG)</label>
                          <div _ngcontent-xmb-c33="" class="global-ex-logo"><img _ngcontent-xmb-c33="" class="w-100" src="https://clone-skybetting.mrmmbs.com/skyexchange-Responsive/agent/assets/logo.png"></div>
                        </div>
                      </td>
                      <td class="mobile_port_change"><button type="submit" class="btn btn-primary tealgreen btn-icon-text mb-md-0">Submit</button></td>
                    </tr>
                  </tbody>
                </table>
<!-- 
                <table class="table-s table-exchange w-100 mt-2" style="background-color: #232a54 !important;">
                  <thead class="d-none">
                    <tr>
                      <th colspan="3" class="table-s-header">Apk File</th>
                    </tr>
                  </thead>
                  <tbody class="d-none">
                    <tr class="ancy-setting">
                      <th class=""></th>
                      <th class=""></th>
                      <th class=""></th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr class="ancy-setting">
                      <td class="mobile_port_change">
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Apk File</label>
                          <input class="form-control event-search" type="file" id="formFile">
                        </div>
                      </td>
                      <td class="mobile_port_change"><button type="submit" class="btn btn-primary tealgreen btn-icon-text mb-md-0">Submit</button></td>
                    </tr>
                  </tbody>
                </table> -->

                <!-- <table class="table-s table-exchange w-100 border bg-white mt-2">
                  <thead class="d-none">
                    <tr>
                      <th colspan="3" class="table-s-header">Apk File</th>
                    </tr>
                  </thead>
                  <tbody class="">
                    <tr class="ancy-setting">
                      <th class="">Upload png image only</th>
                      <th class=""></th>
                      <th class=""></th>
                      <th class=""></th>
                      <th class=""></th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr class="ancy-setting">
                      <td class="global-settings_m">
                        <div class="mb-3 bg-secondary text-white py-2 px-2">
                          <label for="formFile" class="form-label">Whatsapp</label>
                          <input class="form-control event-search" type="file" id="formFile">
                          <button type="submit" class="btn btn-primary tealgreen btn-icon-text mt-2">Uplode</button>
                        </div>

                      </td>
                      <td class="global-settings_m">
                        <div class="mb-3 bg-secondary text-white py-2 px-2">
                          <label for="formFile" class="form-label">Insta</label>
                          <input class="form-control event-search" type="file" id="formFile">
                          <button type="submit" class="btn btn-primary tealgreen btn-icon-text mt-2">Uplode</button>
                        </div>
                      </td>
                      <td class="global-settings_m">
                        <div class="mb-3 bg-secondary text-white py-2 px-2">
                          <label for="formFile" class="form-label">Telegram</label>
                          <input class="form-control event-search" type="file" id="formFile">
                          <button type="submit" class="btn btn-primary tealgreen btn-icon-text mt-2">Uplode</button>
                        </div>
                      </td>
                      <td class="global-settings_m">
                        <div class="mb-3 bg-secondary text-white py-2 px-2">
                          <label for="formFile" class="form-label">Facebook</label>
                          <input class="form-control event-search" type="file" id="formFile">
                          <button type="submit" class="btn btn-primary tealgreen btn-icon-text mt-2">Uplode</button>
                        </div>
                      </td>
                      <td class="global-settings_m">
                        <div class="mb-3 bg-secondary text-white py-2 px-2">
                          <label for="formFile" class="form-label">twitter</label>
                          <input class="form-control event-search" type="file" id="formFile">
                          <button type="submit" class="btn btn-primary tealgreen btn-icon-text mt-2">Uplode</button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table> -->

                <!-- <table class="table-s table-exchange w-100 border bg-white mt-2" style="background-color: #232a54 !important;">
                  <thead class="d-none">
                    <tr>
                      <th colspan="5" class="table-s-header">Apk File</th>
                    </tr>
                  </thead>
                  <tbody class="d-none">
                    <tr class="ancy-setting">
                      <th class=""></th>
                      <th class=""></th>
                      <th class=""></th>
                      <th class=""></th>
                      <th class=""></th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr class="ancy-setting">
                      <td class="global-settings_m">
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Whatsapp Link</label>
                          <input type="text" class="form-control event-search" id="" placeholder="Whatsapp Link">
                        </div>
                      </td>
                      <td class="global-settings_m">
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Insta Link</label>
                          <input type="text" class="form-control event-search" id="" placeholder="Insta Link">
                        </div>
                      </td>
                      <td class="global-settings_m">
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Telegram Link</label>
                          <input type="text" class="form-control event-search" id="" placeholder="Telegram Link">
                        </div>
                      </td>
                      <td class="global-settings_m">
                        <div class="mb-3">
                          <label for="formFile" class="form-label">FB Link</label>
                          <input type="text" class="form-control event-search" id="" placeholder="FB Link">
                        </div>
                      </td>
                      <td class="global-settings_m">
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Twitter Link</label>
                          <input type="text" class="form-control event-search" id="" placeholder="Twitter Link">
                        </div>
                      </td>

                    </tr>
                  </tbody>
                </table> -->

                <table class="table-s table-exchange w-100 border mt-2" style="background-color: #232a54 !important;"">
                  <thead class=" d-none">
                  <tr>
                    <th colspan="4" class="table-s-header">Apk File</th>
                  </tr>
                  </thead>
                  <tbody class="d-none">
                    <tr class="ancy-setting">
                      <th class=""></th>
                      <th class=""></th>
                      <th class=""></th>
                      <th class=""></th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr class="ancy-setting">
                      <!-- <td class="global-settings_m">
                        <div class="mb-3">
                          <label for="Sign Up" class="form-label">Sign Up</label>
                          <select class="form-select font-14" aria-label="Default select example">
                            <option selected="">Active</option>
                            <option value="1">Inactive</option>
                          </select>
                        </div>
                      </td> -->
                      <td class="global-settings_m">
                        <div class="mb-3">
                          <label for="Sign Up" class="form-label"> Payment Gateway</label>
                          <select class="form-select font-14" aria-label="Default select example">
                            <option selected="">Active</option>
                            <option value="1">Inactive</option>
                          </select>
                        </div>
                      </td>
                      <td class="global-settings_m">
                        <div class="mb-3">
                          <label for="Sign Up" class="form-label"> Show user setting</label>
                          <select class="form-select font-14" aria-label="Default select example">
                            <option selected="">Active</option>
                            <option value="1">Inactive</option>
                          </select>
                        </div>
                      </td>
                      <td class="global-settings_m">
                        <div class="mb-3">
                          <label for="StartTime" class="form-label">Bet Start Time (In Minutes)</label>
                          <input type="number" class="form-control event-search" id="StartTime" placeholder="Bet Start Time (In Minutes)">
                        </div>
                      </td>

                    </tr>
                  </tbody>
                </table>

                <div class="col-md-12 mt-4">
                  <div class="global-setting-box mb-5 d-flex justify-content-end mobile_port_change-new">
                    <div class="form-inline d-inline-flex">
                      <input type="search" placeholder="Site Message" aria-controls="example" class="form-control event-search">
                      <input type="password" placeholder="Transaction" class="form-control event-search mx-2">
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary tealgreen btn-icon-text mx-2" disabled="">Submit</button>
                  </div>
                </div>




              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>



  @include('layouts.footer')
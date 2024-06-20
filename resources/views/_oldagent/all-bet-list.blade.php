<div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <div class="Pand-l-Statement">
                          <div class="Agent_-Listing height30vh mt-3">
                            <div class="table-responsive">
                              <div class="mb-3">
                                <div class="form-check form-check-inline">
                                  <input type="radio" class="form-check-input" value="matched" @if(isset($type) && $type=='matched'){{'checked'}}@endif name="type" id="type_id_matched" onclick="searchbdetlist()" >
                                  <label class="form-check-label" for="type_id_matched">
                                    Matched
                                  </label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input type="radio" class="form-check-input" value="unmatched" @if(isset($type) && $type=='unmatched'){{'checked'}}@endif name="type" id="type_id_unmatched" onclick="searchbdetlist()">
                                  <label class="form-check-label" for="type_id_unmatched">
                                    UnMatched
                                  </label>
                                </div>
                              </div>
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th class="">Member</th>
                                    <th class="">Placed</th>
                                    <th class="">Description</th>
                                    <th class="">In Play</th>
                                    <th class="">1-Click</th>
                                 
                                    <th class="">Odds</th>
                                    <th class="">Stake</th>
                                    <th class="">Potential Profit</th>
                                    <th class="">Liability</th>

                                    @if(Auth::guard('agent')->user()->role_id==1)
                                    <th class="">Admin PT</th>
                                    @endif

                                    @if(Auth::guard('agent')->user()->role_id==1 || Auth::guard('agent')->user()->role_id==2)
                                    <th class="">Sup MA PT</th>
                                    @endif

                                    @if(Auth::guard('agent')->user()->role_id==1 || Auth::guard('agent')->user()->role_id==3)
                                    <th class="">MA PT</th>
                                    @endif

                                    @if(Auth::guard('agent')->user()->role_id==1 || Auth::guard('agent')->user()->role_id==4)
                                    <th class="">CUS PT</th>
                                    @endif                                   

                                    <th class="right">Action</th>

                                  </tr>
                                </thead>
                                <tbody >
                                 @include('agent.bet-list-search')
                                </tbody>
                              </table>

                              @php $data=$bet_list;  @endphp
                              @include('layouts.allpagination')
                              
                            </div>
                            <div class="border-bottom mt-3"></div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                        <div class="Pand-l-Statement">
                          <div class="Agent_-Listing height30vh mt-3">
                            <div class="table-responsive">
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th class="">Member</th>
                                    <th class="">Placed</th>
                                    <th class="">Description</th>
                                    <th class="">In Play</th>
                                    <th class="">1-Click</th>
                                    <th class="">Placed</th>
                                    <th class="">Odds</th>
                                    <th class="">Stake</th>
                                    <th class="">Potential Profit</th>
                                    <th class="">Liability</th>
                                    <th class="">Agent PT</th>
                                    <th class="">MA PT</th>
                                    <th class="">CUS PT</th>
                                    <th class="right">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @include('agent.bet-list-yesterday-search')                                
                                </tbody>
                              </table>

                              
                              @php $data=$past_bet_list;  @endphp
                              @include('layouts.allpagination')

                            </div>
                            <div class="border-bottom mt-3"></div>
                          </div>
                        </div>
                      </div>
                    </div>
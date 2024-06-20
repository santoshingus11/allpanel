<div class="Agent_-Listings">
                      <div class="table-responsive border-bottom">
                        <table class="table-s table-exchange w-100 mt-5">
                          <thead>
                            <tr>
                              <th colspan="9" class="table-s-header">UnMatched</th>
                            </tr>
                          </thead>
                          <tbody class="">
                            <tr>
                              <th width="" class="text-start">Market
                              </th>
                              <th width="">Selection
                              </th>
                              <th width="">Type
                              </th>
                              <th width="">Bet ID
                              </th>
                              <th width="">Bet placed
                              </th>
                              <th width="">Odds req.
                              </th>
                              <th width="">Matched
                              </th>
                              <th width="">Unmatched
                              </th>
                              <th width="">Date matched
                              </th>
                            </tr>
                          </tbody>
                          <tbody id="Unmatched_Content">
                          @foreach($bet_list as $bl)                           
                          @if($bl->type=='unmatched')
                          <tr id="noDataTemplate" style="display: table-row;">
                              <td>{{$bl->market_name}}</td>
                              <td>{{$bl->selection_name}}</td>
                              <td>{{$bl->bet_type}}</td>
                              <td>{{$bl->bet_history_id}}</td>
                              <td>{{$bl->bet_placed}}</td>
                              <td>{{$bl->odd_req}}</td>
                              <td>--</td>
                              <td>--</td>
                              <td>{{$bl->match_date}}</td>
                          </tr>                          
                          @endif
                          @endforeach
                          </tbody>
                        </table>
                        <table class="table-s table-exchange w-100 mt-5">
                          <thead>
                            <tr>
                              <th colspan="9" class="table-s-header">Pending</th>
                            </tr>
                          </thead>
                          <tbody class="">
                            <tr>
                              <th width="" class="text-start">Market
                              </th>
                              <th width="">Selection
                              </th>
                              <th width="">Type
                              </th>
                              <th width="">Bet ID
                              </th>
                              <th width="">Bet placed
                              </th>
                              <th width="">Odds req.
                              </th>
                              <th width="">Matched
                              </th>
                              <th width="">Unmatched
                              </th>
                              <th width="">Date matched
                              </th>
                            </tr>
                          </tbody>
                          <tbody id="Unmatched_Content">
                          @foreach($bet_list as $bl)                           
                          @if($bl->type=='pending')
                          <tr id="noDataTemplate" style="display: table-row;">
                              <td>{{$bl->market_name}}</td>
                              <td>{{$bl->selection_name}}</td>
                              <td>{{$bl->bet_type}}</td>
                              <td>{{$bl->bet_history_id}}</td>
                              <td>{{$bl->bet_placed}}</td>
                              <td>{{$bl->odd_req}}</td>
                              <td>--</td>
                              <td>--</td>
                              <td>{{$bl->match_date}}</td>
                          </tr>                         
                          @endif
                          @endforeach
                          </tbody>
                        </table>
                        <table class="table-s table-exchange w-100 mt-5">
                          <thead>
                            <tr>
                              <th colspan="9" class="table-s-header">Matched</th>
                            </tr>
                          </thead>
                          <tbody class="">
                            <tr>
                              <th width="" class="text-start">Market
                              </th>
                              <th width="">Selection
                              </th>
                              <th width="">Type
                              </th>
                              <th width="">Bet ID
                              </th>
                              <th width="">Bet placed
                              </th>
                              <th width="">Odds req.
                              </th>
                              <th width="">Matched
                              </th>
                              <th width="">Unmatched
                              </th>
                              <th width="">Date matched
                              </th>
                            </tr>
                          </tbody>
                          <tbody id="Unmatched_Content">
                          @foreach($bet_list as $bl)                           
                          @if($bl->type=='matched')
                          <tr id="noDataTemplate" style="display: table-row;">
                              <td>{{$bl->market_name}}</td>
                              <td>{{$bl->selection_name}}</td>
                              <td>{{$bl->bet_type}}</td>
                              <td>{{$bl->bet_history_id}}</td>
                              <td>{{$bl->bet_placed}}</td>
                              <td>{{$bl->odd_req}}</td>
                              <td>--</td>
                              <td>--</td>
                              <td>{{$bl->match_date}}</td>
                          </tr>                         
                          @endif
                          @endforeach
                          </tbody>
                        </table>
                      </div>

                    </div>

@php $k=1;
$e=0;
$ab=0;   
$total_available_balance=0;
@endphp
@foreach($cashbanking as $cb)
@php 


                $exposure=QueryHelper::total_netexposure($cb->id,$cb->role_id);
                $e=$e+(float)$exposure ?? 0;                
                $ab=$ab+(float)$cb->balance ?? 0;
                $available_balance=$cb->balance+$exposure;
                $total_available_balance=$total_available_balance+$available_balance;
@endphp

<input type="hidden" name="agent_id{{$k}}"  value="{{$cb->id}}">
                <input type="hidden" name="agent_balance{{$k}}"  value="{{$cb->balance}}">
                <div id="type{{$k}}"></div>

<tr>
                              <td class="text-center" id="userId"><span class="order">{{$k}}. </span><span class="account_name"> {{$cb->username}}</span></td>
                              <td class="text-center"> {{$available_balance}}</td>
                              <td class="text-center">  {{$cb->balance}}</td>
                              <td class="text-center"> {{$exposure}}</td>
                              <td class="DW-amount">
                                <ul class="btn_list-DW" id="btn_list_DW{{$cb->id}}"> 
                                  <li><a id="dBtn" class="btn_replay wid30" href="#" onclick="agentdeposit('{{$cb->id}}','1','{{$k}}')">D</a></li>
                                  <li><a id="wBtn" class="btn_replay wid30" href="#" onclick="agentdeposit('{{$cb->id}}','2','{{$k}}')">W</a></li>
                                </ul>
                                <input id="amount_{{$cb->id}}" name="amount_{{$k}}" class="controlevent-search wid-150" type="text" placeholder="0" maxlength="18">
                                <a id="fullBtn{{$cb->id}}" href="javascript:void(0);" class="wid-width45 btn_replay float-L disable align-R" onclick="fullamount('{{$k}}','{{$cb->balance}}')">Full
                                </a>
                              </td>
                              <!-- <td class="credit-amount align-R">
                                <li class="footer-links" style="display: contents;"><a href="" id="userCreditReference" style="display: inline-block;"> 500.00</a></li>
                                <input id="editCreditReference" name="editCreditReference" class="align-R controlevent-search" type="text" placeholder="0" maxlength="18" style="display: none;">
                                <a id="editCreditReferenceBtn" href="javascript:void(0);" class="btn_replay" style="display: inline-block;">Edit
                                </a>
                                <a id="cancelCreditReferenceBtn" href="javascript:void(0);" class="btn_replay" style="display: none;">Cancel
                                </a>
                              </td>
                              <td id="userReferencePL" class="align-R"><span class="red">( 200.00)</span></td> -->
                              <td class="text-center"><input id="remark" name="remarks_{{$k}}" class="controlevent-search" type="text" placeholder="Remark"></td>
                              <td class="align-C border-l d-flex align-items-center justify-content-center">
                                <button type="submit" class="btn_replay normal_with w1-100 font-13  mx-2" onclick="openNewWindow('{{$cb->id}}')">Log</button>
                              </td>
                            </tr>
                    
                            @php $k++; @endphp
@endforeach


<tr id="totalTempTr" class="total">
                              <td class="align-L">Total</td>
                              <td id="totalSite" style="display: none"></td>
                              <td id="totalCurrencyType" style="display: none;"></td>
                              <td class="" id="totalBalance"> {{$total_available_balance}}</td>
                              <td class="" id="totalAvailableBalance"> {{$ab}}</td>
                              <td id="totalExposure"> {{$e}}</td>

                              <td id="totalCreditReference" class="" colspan="2"> </td>
                              <td class="align-R" id="totalReferencePL"><span class="red"></span></td>
                              <td></td>
                              <td></td>
</tr>
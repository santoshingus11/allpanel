@foreach($p_l_statement as $pl)
<tr role="row" class="">
                                <td aria-colindex="1" data-label="Date" role="cell">
                                  <div>{{$pl->created_at}}</div>
                                </td>
                                <td aria-colindex="2" data-label="Description" role="cell" class="">
                                  <div><span> {{$pl->remarks}}</span></div>
                                </td>
                                <td colspan="" class=""><a data-toggle="modal" data-target="#TransferStatusexampleModals" href="#" class="font-13 eye-view"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                      <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                      <circle cx="12" cy="12" r="3"></circle>
                                    </svg></a></td>
                                <td aria-colindex="4" data-label="From To" role="cell" class="">
                                  <div>{{$pl->pa_username ?? ''}} - {{$pl->ua_username ?? ''}}</div>
                                </td>
                                <td aria-colindex="5" data-label="Amount" role="cell">
                                  <div>{{$pl->amount}}</div>
                                </td>
                                <td aria-colindex="6" data-label="Closing" role="cell">
                                  <div>0.00</div>
                                </td>
                              </tr>
                              @endforeach
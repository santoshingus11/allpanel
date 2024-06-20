@foreach($data as $sc)

@php
 $take=QueryHelper::takebalance($sc->id);
 $give=QueryHelper::givebalance($sc->id);
@endphp
                        <tr>
                          <td>
                            <div class="form-checks">
                              <input type="checkbox" name="admin_id[]" id="admin_id{{$sc->id}}" value="{{$sc->id}}" class="position form-check-input">
                            </div>
                          </td>
                          <td>{{$sc->username}}</td>
                          <td>{{$sc->login_id}}</td>
                          <td>{{$take ?? '0'}}</td>
                          <td>{{$give ?? '0'}}</td>
                          <td>{{$sc->balance}}</td>
                          <td>{{$sc->payment_threshold ?? '0'}}</td>
                          <td>{{$sc->credit_limit}}</td>
                          <td>{{$sc->balance}}</td>
                          <td data-bs-toggle="modal" data-bs-target="#Transferforsmdemo1" onclick="sendids('{{$sc->id}}','{{$sc->username}}')" class="pointer eye-view">Transfer</td>
                        </tr>
                        @endforeach
   
   @if($admin->count()>0)
   @foreach($admin as $ad)
                        <tr>
                          <td class="">{{$ad->username }}</td>
                          <td class="">--</td>
                          <td class="">--</td>
                          <td class=""><input type="number" class="Bet-_Limit" value="{{$ad->sports_bet}}" id="sports_bet{{$ad->id}}" placeholder="Bet Limit"></td>
                          <td class=""><input type="number" class="Bet-_Limit" value="{{$ad->casino_bet}}" id="casino_bet{{$ad->id}}" placeholder="Bet Limit"></td>
                          <td class="">
                            <div class="match_locks">
                              <a class="btn void-button" href="javascript:void(0);" onclick="updatebetlimit('{{$ad->id}}')" >Update </a>
                            </div>
                          </td>
                        </tr>
@endforeach
@else
<tr>
<td colspan="14" class="text-center no-data-table-bg">There is no data </td>
</tr>
@endif
                      
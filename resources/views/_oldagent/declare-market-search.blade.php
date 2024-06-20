@php $i=1; @endphp
@foreach($market_settings as $ms)
<tr>
                              <td class="text-center">{{$i}}</td>
                              <td class="text-center">{{$ms->series_name}}</td>
                              <td class="text-center">{{$ms->selection_name}}</td>
                              <td class="text-center">{{$ms->match_name}}</td>
                              <td class="text-center">{{$ms->market_name}}</td>
                              <td class="text-center">{{$ms->match_date}}</td>
                              <td class="text-center">{{$ms->market_id}}</td>
                              <td class="align-C border-l d-flex align-items-center justify-content-center">
                              
                                @if($ms->declared==0)
                    <button type="button" class="btn_replay normal_with w1-100 font-13  mx-2" onclick="changestatus('1','{{$ms->market_settings_id}}')">Declared</button>
                    @else
                    <button type="button" class="btn_replay normal_with w1-100 font-13  mx-2"   onclick="changestatus('0','{{$ms->market_settings_id}}')">Declare</button>
                    @endif
                              
                              </td>
                            </tr>
@php $i++; @endphp
@endforeach
                       

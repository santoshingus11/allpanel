@php $i=1; @endphp
@foreach($market_settings as $ms)
<tr>
        <td class="text-center">{{$i}}</td>

        @if(Request::segment(2)=='market-rollback')
        <td class="text-center">{{$ms->sports_name}}</td>
                              @endif

        <td class="text-center">{{$ms->series_name}}</td>
        <td class="text-center">{{$ms->selection_name}}</td>
        <td class="text-center">{{$ms->match_name}}</td>
        <td class="text-center">{{$ms->match_date}}</td>
        <td class="text-center">{{$ms->market_name}}</td>
        <td class="text-center">{{$ms->market_id}}</td>

        @if(Request::segment(2)=='declare-market')
        <td>
                @if($ms->declared==0)
                <button type="button" class="btn_replay normal_with w1-100 font-13  mx-2" onclick="changestatus('declared','1','{{$ms->market_settings_id}}')">Declared</button>
                @else
                <button type="button" class="btn_replay normal_with w1-100 font-13  mx-2" onclick="changestatus('declared','0','{{$ms->market_settings_id}}')">Declare</button>
                @endif
        </td>
        @endif

        @if(Request::segment(2)=='match-lock')
        <td class="align-C">
                <div class="match_locks">
                        <input id="inpLock" type="checkbox"  @if($ms->status==1){{'checked'}}@endif value="1" onclick="lockmatch('status','{{$ms->market_settings_id}}',this.value)">
                        <label class="btn-lock" for="inpLock">
                                <svg width="36" height="40" viewBox="0 0 36 40">
                                        <path class="lockb" d="M27 27C27 34.1797 21.1797 40 14 40C6.8203 40 1 34.1797 1 27C1 19.8203 6.8203 14 14 14C21.1797 14 27 19.8203 27 27ZM15.6298 26.5191C16.4544 25.9845 17 25.056 17 24C17 22.3431 15.6569 21 14 21C12.3431 21 11 22.3431 11 24C11 25.056 11.5456 25.9845 12.3702 26.5191L11 32H17L15.6298 26.5191Z"></path>
                                        <path class="lock" d="M6 21V10C6 5.58172 9.58172 2 14 2V2C18.4183 2 22 5.58172 22 10V21"></path>
                                        <path class="bling" d="M29 20L31 22"></path>
                                        <path class="bling" d="M31.5 15H34.5"></path>
                                        <path class="bling" d="M29 10L31 8"></path>
                                </svg>
                        </label>
                </div>
        </td>
        @endif

        @if(Request::segment(2)=='market-rollback')
        <td class="align-C border-l d-flex align-items-center justify-content-center">

        @if($ms->rollback==1)
                    <button type="button" class="btn_replay normal_with w1-100 font-13  mx-2"  onclick="changestatus('rollback','0','{{$ms->market_settings_id}}','{{$ms->match_name}}','{{$ms->selection_name}}','{{$ms->sports_name}}')">Rollbacked</button>
                    @else
                    <button type="button" class="btn_replay normal_with w1-100 font-13  mx-2"  onclick="changestatus('rollback','1','{{$ms->market_settings_id}}','{{$ms->match_name}}','{{$ms->selection_name}}','{{$ms->sports_name}}')">Rollback</button>
                    @endif   

               
        </td>
        @endif
</tr>
@php $i++; @endphp
@endforeach
<nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="javascript:void(0)">Markets </a></li> > <li aria-current="page" class=" active">{{$selection_name ?? $match_name}} - {{$market_name}}</li></ol></nav>
<div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="">Member</th>
                          <th class="">Placed</th>
                          <th class="">Selection</th>
                          <th class="">Type</th>
                          <th class="">Currency</th>
                          <th class="">Odds</th>
                          <th class="">Stake</th>
                          <th class="">Status</th>
                          <th class="">Member Win/Loss</th>
                        </tr>
                      </thead>
                      <tbody id="bet_report_id">
                     @foreach($profit_loss as $pl)
                     @php 
                     if($pl->result==1) {
                      $pofit=$pl->bet_placed*($pl->odd_req-1);
                     }elseif($pl->result==0) {
                      $pofit=$pl->bet_placed;
                     }else{
                      $pofit=0;
                     }                    
                  
                     $currency=QueryHelper::hyperhypercurrency($pl->admin_id,$pl->role_id);                 
                     @endphp
                      <tr>
                        <td>{{$pl->username}}</td>
                        <td>{{$pl->created_at}}</td>
                        <td>{{$pl->selection_name}}</td>
                        <td>{{$pl->type}}</td>
                        <td>{{$currency['0']}}</td>
                        <td>{{$pl->odd_req}}</td>
                        <td>{{$pl->bet_placed}}</td>
                        @if($pl->result==1) <td class="green">{{'Win'}}</td>@else <td class="red">{{'Loss'}}</td>@endif
                       <td @if($pl->result==1)  class="green"  @else   class="red" @endif>{{$pofit}}</td>
                      </tr>
                      @endforeach                      
                      </tbody>
                    </table>

                  </div>
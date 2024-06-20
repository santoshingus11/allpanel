<div class="d-flex justify-content-between align-items-center pb-2 border-bottom global-settings_m">
                <div class="d-inline-flex align-items-center">
                    <h4 class=" mb-0"> Market Settings</h4>
                  </div>
                  <form class="forms-sample">
                    <div class="row">
                      <div class="mb-2 col-md-6 col-lg-4 col-sm-12">
                        <label for="exampleInputUsername1" class="form-label">Sport Name</label>
                        <select class="form-select" id="sports_name" onchange="changemarketsettings()">
                        <option value="">--Select--</option>
                        @foreach($sports_list as $sl)
                        <option value="{{$sl->sports_name}}" @if(isset($event_name) && $sl->sports_name==$event_name){{'selected'}}@endif>{{$sl->sports_name}}</option>
                        @endforeach
                        </select>
                      </div>

                      <div class="mb-2 col-md-6 col-lg-4 col-sm-12">
                        <label for="exampleInputUsername1" class="form-label">Series Name</label>
                        <select class="form-select" id="series_name" onchange="changemarketsettings()">
                        <option value="">--Select--</option>
                          @foreach($series_list as $sl)
                          <option value="{{$sl->series_name}}" @if(isset($series_name) && $sl->series_name==$series_name){{'selected'}}@endif>{{$sl->series_name}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="mb-2 col-md-6 col-lg-4 col-sm-12">
                        <label for="exampleInputUsername1" class="form-label">Match Name</label>
                        <select class="form-select" id="match_name" onchange="changemarketsettings()">
                        <option value="">--Select--</option>
                          @foreach($match_list as $sl)
                          <option value="{{$sl->match_name}}" @if(isset($match_name) && $sl->match_name==$match_name){{'selected'}}@endif>{{$sl->match_name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </form></div>
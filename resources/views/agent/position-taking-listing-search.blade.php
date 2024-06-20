
@if($position_taking->count()>0)
@foreach($position_taking as $pt)
<tr>
  <td>
    <div class="form-checks">
      <input type="checkbox" name="admin_id[]" id="admin_id{{$pt->admin_id}}" value="{{$pt->admin_id}}" class="position form-check-input">
    </div>
  </td>
  <td>{{$pt->username }}</td>
  <td>{{$pt->login_id }}</td>
  <td>{{$pt->cricket ?? 0}}</td>
  <td>{{$pt->football ?? 0}}</td>
  <td>{{$pt->tennis ?? 0}}</td>
  <td>{{$pt->horse_racing ?? 0}}</td>
  <td>{{$pt->greyhound_racing ?? 0}}</td>
  <td>{{$pt->casino ?? 0}}</td>
  <td>{{$pt->other ?? 0}}</td>
</tr>
@endforeach
@else
<tr><span class="p2">  No result found</span></tr>
@endif
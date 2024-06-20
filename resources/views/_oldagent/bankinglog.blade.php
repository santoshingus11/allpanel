<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	@include('layouts.header-url')
	@php error_reporting(0); @endphp
</head>

<div class="announce-wrap login-policy">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<table class="game-team">
					<tbody>
						<tr>
							<td class="game-name">
								Banking Logs
								<span id="title_userId">{{$user->username}}</span>
								<a class="pop-close" onclick="window.open('', '_self', ''); window.close();">Close</a>
							</td>
						</tr>
					</tbody>
				</table>
				<table id="table_log" class="table01">
					<tbody>
						<tr>
							<th width="11%" class="align-L">Date/Time
							</th>
							
							<th width="13%">Deposit
							</th>
							<th width="13%">Withdraw
							</th>
							<th width="13%">Balance
							</th>
							<th width="15%">Remark
							</th>
							<th width="">From/To
							</th>
						</tr>

					</tbody>
				
					<tbody >
						@foreach($banking_log as $bl)
						<tr id="tempTr">
							<td id="createDate" class="align-L">{{$bl->created_at}}</td>
						
							<td id="deposit">   @if($bl->type=='D')
                              {{sprintf("%.2f", $bl->amount)}}
                              @endif</td>
							<td id="withdraw" class="red">  @if($bl->type=='W')
                              {{sprintf("%.2f", $bl->amount)}}
                              @endif</td>
							<td id="balance">
							  @if($bl->type=='D')
                              {{sprintf("%.2f", $bl->amount)}}
							  @else
							  {{'0.00'}}
                              @endif
                             </td>
							<td id="remark">{{ $bl->remarks}}</td>
							<td>
								<spen id="from">{{ $bl->username}}/{{ $bl->to_username}}</spen>
								<!-- <img class="fromto" src="https://statics3.skyexch.art/images/transparent.gif">
								<spen id="to">skyclient55</spen> -->
							</td>
						</tr>
						@endforeach

					</tbody>
				</table>
			</div>

			@php $data=$banking_log;  @endphp
		
			@include('layouts.allpagination')
            </div>
		</div>
	</div>


</div>
<script>
	  function goToPage() {
      var pageNumber = document.getElementById('goToPageNumber').value;
        window.location.href = "{{ $banking_log->url(1) }}" + "&page=" + pageNumber;
    }
</script>
@include('layouts.footer')

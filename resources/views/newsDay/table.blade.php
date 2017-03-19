@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="text-center">
			<h1>Gaze of the World</h1>
			This is the list of countries mentioned the most by Alexa's Top News sites.<br>
			Data is compiled through a site's "International" or "World" RSS feed (if they have a suitable one, that
			is).<br>
			Click on a country to see how its coverage has changed in the past days weeks.
		</div>
		<br><br><br>
		<table class="table medium mx-auto table-hover">
			<thead>
			<tr>
				<th class="col-2">Country</th>
				<th class="col-8">Mentions</th>
			</tr>
			</thead>
			<tbody>
			@foreach($latest as $country => $amount)
				<tr data-toggle="modal" data-target="#{{ $country }}Modal">
					<td>{{ $countries[$country]["name"][0] }}</td>
					<td>{{ $amount }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>

	@foreach($latest as $country => $data)
		<div class="modal fade" id="{{ $country }}Modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
			 aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalLabel">{{ $countries[$country]["name"][0] }}</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<table>
							<thead>
							<tr>
								<th class="col-2">Day</th>
								<th class="col-2">Mentions</th>
							</tr>
							</thead>
							<tbody>
							@foreach($timeSeries as $index => $data)
								<tr>
									<td class="col-2">{{ $data->date }}</td>
									<td class="col-2">{{ $data->$country }}</td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	@endforeach
@endsection
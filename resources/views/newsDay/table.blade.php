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
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalLabel">{{ $countries[$country]["name"][0] }}</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<ul class="nav nav-tabs" data-tabs="tabs">
							<li class="nav-item"><a class="nav-link active" data-toggle="tab"
													href="#{{ $country }}-7Days">7 days</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#{{ $country }}-30Days">30
									days</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#{{ $country }}-90Days">90
									days</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#{{ $country }}-150Days">150
									days</a></li>
						</ul>
						<div class="tab-content">
							<div id="{{ $country }}-7Days" class="tab-pane active" role="tabpanel">
								<div id="{{ $country }}-7Days-chart"></div>
								<div class="text-center">
									<button type="button" class="btn btn-primary" data-toggle="collapse"
											data-target="#{{ $country }}-7Days-collapse" aria-expanded="false"
											aria-controls="{{ $country }}-7Days-collapse">Show raw values
									</button>
								</div>
								<div class="collapse" id="{{ $country }}-7Days-collapse">
									<div class="container col-8">
										<table>
											<thead>
											<tr>
												<th class="col-8">Day</th>
												<th class="col-4">Mentions</th>
											</tr>
											</thead>
											<tbody>
											@foreach(array_slice($timeSeries[$country], 0, 7) as $key => $data)
												<tr>
													<td class="col-8">{{ $key }}</td>
													<td class="col-4">{{ $data }}</td>
												</tr>
											@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="{{ $country }}-30Days" class="tab-pane fade in" role="tabpanel">
								<div id="{{ $country }}-30Days-chart"></div>
								<div class="text-center">
									<button type="button" class="btn btn-primary" data-toggle="collapse"
											data-target="#{{ $country }}-30Days-collapse" aria-expanded="false"
											aria-controls="{{ $country }}-30Days-collapse">Show raw values
									</button>
								</div>
								<div class="collapse" id="{{ $country }}-30Days-collapse">
									<div class="container col-8">
										<table>
											<thead>
											<tr>
												<th class="col-8">Day</th>
												<th class="col-4">Mentions</th>
											</tr>
											</thead>
											<tbody>
											@foreach(array_slice($timeSeries[$country], 0, 30) as $key => $data)
												<tr>
													<td class="col-8">{{ $key }}</td>
													<td class="col-4">{{ $data }}</td>
												</tr>
											@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="{{ $country }}-90Days" class="tab-pane fade in" role="tabpanel">
								<div id="{{ $country }}-90Days-chart"></div>
								<div class="text-center">
									<button type="button" class="btn btn-primary" data-toggle="collapse"
											data-target="#{{ $country }}-90Days-collapse" aria-expanded="false"
											aria-controls="{{ $country }}-90Days-collapse">Show raw values
									</button>
								</div>
								<div class="collapse" id="{{ $country }}-90Days-collapse">
									<div class="container col-8">
										<table>
											<thead>
											<tr>
												<th class="col-8">Day</th>
												<th class="col-4">Mentions</th>
											</tr>
											</thead>
											<tbody>
											@foreach(array_slice($timeSeries[$country], 0, 90) as $key => $data)
												<tr>
													<td class="col-8">{{ $key }}</td>
													<td class="col-4">{{ $data }}</td>
												</tr>
											@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="{{ $country }}-150Days" class="tab-pane fade in" role="tabpanel">
								<div id="{{ $country }}-150Days-chart"></div>
								<div class="text-center">
									<button type="button" class="btn btn-primary" data-toggle="collapse"
											data-target="#{{ $country }}-150Days-collapse" aria-expanded="false"
											aria-controls="{{ $country }}-150Days-collapse">Show raw values
									</button>
								</div>
								<div class="collapse" id="{{ $country }}-150Days-collapse">
									<div class="container col-8">
										<table>
											<thead>
											<tr>
												<th class="col-8">Day</th>
												<th class="col-4">Mentions</th>
											</tr>
											</thead>
											<tbody>
											@foreach(array_slice($timeSeries[$country], 0, 150) as $key => $data)
												<tr>
													<td class="col-8">{{ $key }}</td>
													<td class="col-4">{{ $data }}</td>
												</tr>
											@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script>
                document.addEventListener("DOMContentLoaded", function (event) {
                    createChart('{{ $country }}', '{!! json_encode($timeSeries[$country]) !!}');
                });
			</script>
		</div>
	@endforeach
@endsection
@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="text-center">
			<h1>Gaze of the World</h1>
			This is the list of countries mentioned the most by Alexa's Top News sites.<br>
			Data is compiled through a site's "International" or "World" RSS feed (if they have a suitable one, that
			is).
			<br>
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
				<tr id="{{ $country }}Row">
					<td>{{ $countries[$country]["name"][0] }}</td>
					<td>{{ $amount }}</td>
				</tr>
				<script>
                    $('#{{ $country }}Row').click(function () {
                        displayCountryModal('{{$country}}');
                        $('#countryModal').modal();
                    });
				</script>
			@endforeach
			</tbody>
		</table>
	</div>
	@foreach($latest as $country => $amount)
		<script>
            $(document).ready(function () {
                getData('{{ $country }}', 150);
            });
		</script>
	@endforeach
@endsection
@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="text-center">
			<h1>Gaze of the World</h1>
			This is the list of countries mentioned the most by Alexa's Top News sites.<br>
			Data is compiled through a site's "International" or "World" RSS feed (if they have a suitable one, that
			is).
			<br>
			Click on a country to see how its coverage has changed over time.
		</div>
		<div class="col-12 text-center py-5 mx-auto">
			<h5>
				The most covered country yesterday
				was: {{
					is_array($countries[key($latest)]['name']['EN']) ?
					$countries[key($latest)]['name']['EN'][0] :
					$countries[key($latest)]['name']['EN']
				}}
				{{--				$countries[key($latest)]['name']['EN'][0] :--}}
				{{--$countries[key($latest)]['name']['EN'] }}--}}
			</h5>
			<div id="mostMentionedCountryContainer" style="height: 20rem">
			</div>
		</div>
		<table class="table mx-auto table-hover">
			<thead>
			<tr>
				<th class="text-center">Trend</th>
				<th class="text-center">Country</th>
				<th class="text-center">Mentions</th>
			</tr>
			</thead>
			<tbody>
			@foreach($latest as $countryCode => $amount)
				<tr id="{{ $countryCode }}Row">
					@if($lastTwoDays[$countryCode][0] > $lastTwoDays[$countryCode][1])
						<td class="text-center align-middle green">
							&#9650;
						</td>
					@elseif($lastTwoDays[$countryCode][0] < $lastTwoDays[$countryCode][1])
						<td class="text-center align-middle red">
							&#9660;
						</td>
					@else
						<td class="text-center align-middle blue">
							&#9635;
						</td>
					@endif

					<td class="text-center">{{ is_array($countries[$countryCode]['name']['EN']) ?
					$countries[$countryCode]['name']['EN'][0] :
					$countries[$countryCode]['name']['EN'] }}</td>
					<td class="text-center">{{ $amount }}</td>
				</tr>
				<script>
                    $('#{{ $countryCode }}Row').click(function () {
                        displayCountryModal('{{  $countryCode }}');
                        $('#countryModal').modal();
                    });
				</script>
			@endforeach
			</tbody>
		</table>
	</div>
	<script>
        // Get country data so that it's ready when a user clicks on the modal.
        $(document).ready(function () {
            @foreach($latest as $country => $amount)
				getData('{{ $country }}', 150);
			@endforeach
        });
	</script>
@endsection

@section('after_scripts')
	<script>
        // Set up the "Most mentioned" chart.
        var mostMentioned = JSON.parse('{!! json_encode($mostMentioned) !!}');

        var mostMentionedArrayData = [];
        for (var day in mostMentioned) {
            mostMentionedArrayData.push([new Date(day).getTime(), mostMentioned[day]]);
        }

        mostMentionedArrayData.sort(function (a, b) {
            return b[0] - a[0];
        });

        Highcharts.chart('mostMentionedCountryContainer', {
            chart: {
                type: 'line',
                zoomType: 'x'
            },
            plotOptions: {
                scatter: {
                    lineWidth: 1
                }
            },
            title: {
                text: ''
            },
            xAxis: {
                type: 'datetime',
                labelFormat: {
                    value: '%d %m'
                }
            },
            yAxis: {
                title: {
                    text: 'Mentions'
                },
                allowDecimals: false
            },
            legend: {
                enabled: false
            },
            series: [{
                name: '{{
					is_array($countries[key($latest)]['name']['EN']) ?
					$countries[key($latest)]['name']['EN'][0] :
					$countries[key($latest)]['name']['EN']
				}}',
                data: mostMentionedArrayData.slice(0, 30) // We only want the last month of coverage.
            }]
        });
	</script>
@endsection
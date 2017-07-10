<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>
		@yield('title', 'Gaze of the World')
	</title>

	<!-- Styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether.min.css"
		  integrity="sha256-y4TDcAD4/j5o4keZvggf698Cr9Oc7JZ+gGMax23qmVA=" crossorigin="anonymous"/>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highcharts/5.0.10/css/highcharts.css"
		  integrity="sha256-2Zq2TpxcRPEfU059DSprFLT7QplVkkOnAykIwgmpSAM=" crossorigin="anonymous"/>
	<link href="{{ secure_asset(mix('/css/gaze.css')) }}" rel="stylesheet">

@yield('after_styles')

<!-- Scripts -->
	<script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
	</script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"
			integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

	@yield('after_head_scripts')
</head>
<body>
<div class="logo"></div>
<div id="app">
	@yield('content')
</div>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
		integrity="sha256-gL1ibrbVcRIHKlCO5OXOPC/lZz/gpdApgQAzskqqXp8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
		integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
		crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/5.0.10/highcharts.js"
		integrity="sha256-QXl+BEJDfotiSrbE8cZJvM3ogQvRwWaaDDkk8MYemPY=" crossorigin="anonymous"></script>
<script src="{{ secure_asset(mix('/js/gaze.js')) }}"></script>
@yield('after_scripts')
</body>
</html>

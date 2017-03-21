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
	<link href="css/gaze.css" rel="stylesheet">
	<link href="{{ secure_asset(mix('/css/app.css')) }}" rel="stylesheet">

@yield('after_styles')

<!-- Scripts -->
	<script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
	</script>
	@yield('after_head_scripts')
</head>
<body>
<div id="app">
	@yield('content')
</div>

<!-- Scripts -->
<script src="{{ secure_asset(mix('/js/app.js')) }}"></script>
<script src="js/gaze.js"></script>
@yield('after_scripts')
</body>
</html>

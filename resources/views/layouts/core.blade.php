<!DOCTYPE html>
<html lang="en">
	<head>
		{{-- META --}}
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="{{ config('app.name') }}—Built by Laravel" />
		<meta name="author" content="NAGA" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />

		{{-- TITLE --}}
		<title>{{ config('app.name') }}&mdash;@yield('title')</title>

		{{-- FAVICON --}}
		<link rel="icon" href="{{ asset('favicon.ico') }}" />

		{{-- FONTS --}}
		<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap">

		{{-- STYLESHEETS --}}
		<link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/mapbox-gl.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap5.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/responsive.bootstrap5.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/select2-bootstrap-5-theme.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/stylesheet.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/media.min.css') }}" />

		{{-- SCRIPTS --}}
		<script src="{{ asset('js/jquery.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/all.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/popper.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/mapbox-gl.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/mapbox-gl-circle.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/turf.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/sweetalert2.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/select2.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/excanvas.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/webcam.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/jquery-ui.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/jquery.ui.touch-punch.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/jquery.dataTables.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/dataTables.bootstrap5.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/dataTables.responsive.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/responsive.bootstrap5.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/signature.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/chart.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/swiper-bundle.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>
		<script src="{{ asset('js/predefined.min.js') }}" crossorigin="anonymous" defer="" type="text/javascript"></script>

		{{-- RECAPTCHA --}}
		{!! ReCaptcha::htmlScriptTagJsApi() !!}
	</head>
	<body>
		@include('sweetalert::alert')
		@yield('content')
	</body>
</html>
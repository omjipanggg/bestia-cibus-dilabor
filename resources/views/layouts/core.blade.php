<!DOCTYPE html>
<html lang="en">
	<head>
		{{-- META --}}
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="{{ config('app.name') }}—Built by Laravel">
		<meta name="author" content="NAGA">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		{{-- TITLE --}}
		<title>{{ config('app.name') }}&mdash;@yield('title')</title>

		{{-- FAVICON --}}
		<link rel="icon" href="{{ asset('favicon.ico') }}">

		{{-- FONTS --}}
		<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jaldi:wght@400;700&display=swap">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap">

		{{-- STYLESHEETS --}}
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mapbox-gl/2.14.1/mapbox-gl.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.1/swiper-bundle.min.css">

		{{-- PREDEFINED --}}
		<link rel="stylesheet" href="{{ asset('css/stylesheet.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/media.min.css') }}">

		{{-- RECAPTCHA --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
		{{-- {!! ReCaptcha::htmlScriptTagJsApi() !!} --}}

		{{-- SCRIPTS --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" crossorigin="anonymous" defer=""></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous" defer=""></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.7/umd/popper.min.js" crossorigin="anonymous" defer=""></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous" defer=""></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/mapbox.js/3.3.1/mapbox.js" crossorigin="anonymous" defer=""></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/mapbox-gl/2.14.1/mapbox-gl.js" crossorigin="anonymous" defer=""></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Turf.js/6.5.0/turf.min.js" crossorigin="anonymous" defer=""></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js" defer=""></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js" crossorigin="anonymous" defer=""></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js" crossorigin="anonymous" defer=""></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" crossorigin="anonymous" defer=""></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js" crossorigin="anonymous" defer=""></script>
		<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" crossorigin="anonymous" defer=""></script>
		<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js" crossorigin="anonymous" defer=""></script>
		<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js" crossorigin="anonymous" defer=""></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.1/swiper-bundle.min.js" crossorigin="anonymous" defer=""></script>

		{{-- PREDEFINED --}}
		<script src="{{ asset('js/excanvas.min.js') }}" defer=""></script>
		<script src="{{ asset('js/signature.min.js') }}" defer=""></script>
		<script src="{{ asset('js/predefined.min.js') }}" defer=""></script>

	</head>
	<body id="ceil">
		@include('components.loader')
		@include('sweetalert::alert')
        @include('layouts.navigation')
		@yield('content')

        @include('components.footer')
	</body>
</html>
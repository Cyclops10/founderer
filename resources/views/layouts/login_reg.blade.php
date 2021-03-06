<!doctype html>
<html class="fixed" lang="{{ app()->getLocale() }}">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <title>{{ config('app.name', 'Founderer') }}</title>

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{URL::asset('vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{URL::asset('vendor/animate/animate.css')}}">

		<link rel="stylesheet" href="{{URL::asset('vendor/font-awesome/css/font-awesome.css')}}" />
		<link rel="stylesheet" href="{{URL::asset('vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{URL::asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/theme.css')}}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{URL::asset('vendor/modernizr/modernizr.js')}}"></script>

	</head>
	<body>
		<!-- start: page -->
		@yield('content')
		<!-- end: page -->

		<!-- Vendor -->
		<script src="{{URL::asset('vendor/jquery/jquery.js')}}"></script>
		<script src="{{URL::asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
		<script src="{{URL::asset('vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{URL::asset('vendor/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{URL::asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{URL::asset('vendor/common/common.js')}}"></script>
		<script src="{{URL::asset('vendor/nanoscroller/nanoscroller.js')}}"></script>
		<script src="{{URL::asset('vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
		<script src="{{URL::asset('vendor/jquery-placeholder/jquery-placeholder.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{URL::asset('js/theme.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{URL::asset('js/custom.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{URL::asset('js/theme.init.js')}}"></script>

	</body>
</html>
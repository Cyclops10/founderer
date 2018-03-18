<!doctype html>
<html class="fixed" lang="{{ app()->getLocale() }}">
	<head>

    		<!-- Basic -->
    		<meta charset="utf-8">
    		<meta http-equiv="X-UA-Compatible" content="IE=edge">

    		<title>Demo Digital Agency | Porto - Responsive HTML5 Template 6.0.0</title>

    		<meta name="keywords" content="HTML5 Template" />
    		<meta name="description" content="Porto - Responsive HTML5 Template">
    		<meta name="author" content="okler.net">

    		<!-- Favicon -->
    		<link rel="shortcut icon" href="{{URL::asset('front/img/favicon.ico')}}" type="image/x-icon" />
    		<link rel="apple-touch-icon" href="{{URL::asset('front/img/apple-touch-icon.png')}}">

    		<!-- Mobile Metas -->
    		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    		<!-- Web Fonts  -->
    		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    		<!-- Vendor CSS -->
    		<link rel="stylesheet" href="{{URL::asset('front/vendor/bootstrap/css/bootstrap.min.css')}}">
    		<link rel="stylesheet" href="{{URL::asset('front/vendor/font-awesome/css/font-awesome.min.css')}}">
    		<link rel="stylesheet" href="{{URL::asset('front/vendor/animate/animate.min.css')}}">
    		<link rel="stylesheet" href="{{URL::asset('front/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    		<link rel="stylesheet" href="{{URL::asset('front/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    		<link rel="stylesheet" href="{{URL::asset('front/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    		<link rel="stylesheet" href="{{URL::asset('front/vendor/magnific-popup/magnific-popup.min.css')}}">

    		<!-- Theme CSS -->
    		<link rel="stylesheet" href="{{URL::asset('front/css/theme.css')}}">
    		<link rel="stylesheet" href="{{URL::asset('front/css/theme-elements.css')}}">
    		<link rel="stylesheet" href="{{URL::asset('front/css/theme-blog.css')}}">
    		<link rel="stylesheet" href="{{URL::asset('front/css/theme-shop.css')}}">

    		<!-- Current Page CSS -->
    		<link rel="stylesheet" href="{{URL::asset('front/vendor/rs-plugin/css/settings.css')}}">
    		<link rel="stylesheet" href="{{URL::asset('front/vendor/rs-plugin/css/layers.css')}}">
    		<link rel="stylesheet" href="{{URL::asset('front/vendor/rs-plugin/css/navigation.css')}}">

    		<!-- Demo CSS -->
    		<link rel="stylesheet" href="{{URL::asset('front/css/demos/demo-digital-agency.css')}}">

    		<!-- Skin CSS -->
    		<link rel="stylesheet" href="{{URL::asset('front/css/skins/skin-digital-agency.css')}}">

    		<!-- Theme Custom CSS -->
    		<link rel="stylesheet" href="{{URL::asset('front/css/custom.css')}}">

    		<!-- Head Libs -->
    		<script src="{{URL::asset('front/vendor/modernizr/modernizr.min.js')}}"></script>

    	</head>
    	<body>
		<!-- start: page -->
            <div class="body">
                @include('layouts.header_front')
                @yield('content')
                @include('layouts.footer_front')
            </div>
		<!-- end: page -->

		<!-- Vendor -->
            <script src="{{URL::asset('front/vendor/jquery/jquery.min.js')}}"></script>
            <script src="{{URL::asset('front/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
            <script src="{{URL::asset('front/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
            <script src="{{URL::asset('front/vendor/jquery-cookie/jquery-cookie.min.js')}}"></script>
            <script src="{{URL::asset('front/vendor/popper/umd/popper.min.js')}}"></script>
            <script src="{{URL::asset('front/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
            <script src="{{URL::asset('front/vendor/common/common.min.js')}}"></script>
            <script src="{{URL::asset('front/vendor/jquery.validation/jquery.validation.min.js')}}"></script>
            <script src="{{URL::asset('front/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>
            <script src="{{URL::asset('front/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
            <script src="{{URL::asset('front/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
            <script src="{{URL::asset('front/vendor/isotope/jquery.isotope.min.js')}}"></script>
            <script src="{{URL::asset('front/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
            <script src="{{URL::asset('front/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
            <script src="{{URL::asset('front/vendor/vide/vide.min.js')}}"></script>

            <!-- Theme Base, Components and Settings -->
            <script src="{{URL::asset('front/js/theme.js')}}"></script>

            <!-- Current Page Vendor and Views -->
            <script src="{{URL::asset('front/js/views/view.contact.js')}}"></script>

            <!-- Current Page Vendor and Views -->
            <script src="{{URL::asset('front/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
            <script src="{{URL::asset('front/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

            <!-- Theme Custom -->
            <script src="{{URL::asset('front/js/custom.js')}}"></script>

            <!-- Theme Initialization Files -->
            <script src="{{URL::asset('front/js/theme.init.js')}}"></script>

            <!-- page specific scripts -->
            @yield('pagespecificscripts')


            <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-12345678-1', 'auto');
                ga('send', 'pageview');
            </script>
        		 -->

	</body>
</html>
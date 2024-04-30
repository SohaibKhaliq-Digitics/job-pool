<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>Job Pool</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <!-- theme meta -->
        <meta name="theme-name" content="timer" />

        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="{{ url('front/plugins/bootstrap/bootstrap.min.css')}}">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="{{ url('front/plugins/ionicons/ionicons.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{ url('front/plugins/animate-css/animate.css')}}">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="{{ url('front/plugins/slider/slider.css')}}">
        <!-- slick slider -->
        <link rel="stylesheet" href="{{ url('front/plugins/slick/slick.css')}}">
        <!-- Fancybox -->
        <link rel="stylesheet" href="{{ url('front/plugins/facncybox/jquery.fancybox.css')}}">
        <!-- hover -->
        <link rel="stylesheet" href="{{ url('front/plugins/hover/hover-min.css')}}">
        <!-- template main css file -->
        <link rel="stylesheet" href="{{ url('front/css/style.css')}}">
    </head>
    <body>

<!--
        ==================================================
        Header Section Start
        ================================================== -->




        @include('front.layout.header');




<!--
==================================================
Slider Section Start
================================================== -->

<!--/#main-slider-->

<!--
==================================================
About Section Start
================================================== -->


      @yield('content');




            <!--
            ==================================================
            Footer Section Start
            ================================================== -->


            @include('front.layout.footer');



             <!-- /#footer -->

	<!-- Template Javascript Files
	================================================== -->
	<!-- jquery -->
	<script src="{{ url('front/plugins/jQurey/jquery.min.js')}}"></script>
	<!-- Form Validation -->
    <script src="{{ url('front/plugins/form-validation/jquery.form.js')}}"></script> 
    <script src="{{ url('front/plugins/form-validation/jquery.validate.min.js')}}"></script>
	<!-- slick slider -->
	<script src="{{ url('front/plugins/slick/slick.min.js')}}"></script>
	<!-- bootstrap js -->
	<script src="{{ url('front/plugins/bootstrap/bootstrap.min.js')}}"></script>
	<!-- wow js -->
	<script src="{{ url('front/plugins/wow-js/wow.min.js')}}"></script>
	<!-- slider js -->
	<script src="{{ url('front/plugins/slider/slider.js')}}"></script>
	<!-- Fancybox -->
	<script src="{{ url('front/plugins/facncybox/jquery.fancybox.js')}}"></script>
	<!-- template main js -->
	<script src="{{ url('front/js/main.js')}}"></script>
 	</body>
</html>

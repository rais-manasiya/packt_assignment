<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>@yield('title')</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}" type="image/x-icon">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.css') }}">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css') }}">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/slick.css') }}">
    
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/LineIcons.css') }}">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/default.css') }}">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
  
  
</head>

<body>
<!--====== HEADER PART START ======-->
@include("partials.header")    
<!--====== HEADER PART ENDS ======-->

@yield('content')


<!--====== FOOTER PART START ======-->
@include("partials.footer")    
<!--====== BACK TO TOP PART ENDS ======-->


<!--====== BACK TO TOP PART START ======-->

<a href="{{ url('#') }}" class="back-to-top"><i class="lni-chevron-up"></i></a>

<!--====== BACK TO TOP PART ENDS ======-->


<!--====== jquery js ======-->
<script src="{{ asset('/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

<!--====== Bootstrap js ======-->
<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>


<!--====== Slick js ======-->
<script src="{{ asset('/assets/js/slick.min.js') }}"></script>

<!--====== Magnific Popup js ======-->
<script src="{{ asset('/assets/js/jquery.magnific-popup.min.js') }}"></script>


<!--====== nav js ======-->
<script src="{{ asset('/assets/js/jquery.nav.js') }}"></script>

<!--====== Nice Number js ======-->
<script src="{{ asset('/assets/js/jquery.nice-number.min.js') }}"></script>

<!--====== Main js ======-->
<script src="{{ asset('/assets/js/main.js') }}"></script>

</body>

</html>


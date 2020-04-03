<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','default')|BCECOZ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BestCozumelExcursion, Cozumel Mexico" />
    <meta name="keywords" content="BestCozumel,Tours,Cozumel,México,Caribbean,Discover,Explore,Dream,Jeep,Experience,Quintanaroo" />
    <meta name="author" content="BestCozumelExcursion" />
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{URL::asset('css/icomoon.css')}}">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="{{URL::asset('css/themify-icons.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.theme.default.min.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
     <link rel="stylesheet" href="{{URL::asset('css/bce.css')}}">

    <!-- Modernizr JS -->
    <script src="{{URL::asset('js/modernizr-2.6.2.min.js')}}"></script>

</head>
<body>
<div class=""></div>
<div class="page">
@include('partials.navbar')
@include('partials.sidebar')
@yield('htmlcore')
@include('partials.footer')
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
</div>

<!-- jQuery -->
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{URL::asset('js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{URL::asset('js/jquery.waypoints.min.js')}}"></script>
<!-- Carousel -->
<script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
<!-- countTo -->
<script src="{{URL::asset('js/jquery.countTo.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::asset('js/magnific-popup-options.js')}}"></script>
<!-- Main -->
<script src="{{URL::asset('js/main.js')}}"></script>
</body>
</html>
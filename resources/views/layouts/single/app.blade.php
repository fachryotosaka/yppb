<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="yppb">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

  <meta name="description" content="" />
  <meta name="keywords" content="" />

    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,500i,700|Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/home/vendor/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/vendor/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/vendor/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/vendor/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('css/home/instant/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/home/instant/jquery.fancybox.min.css' )}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('css/home/single.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert/sweetalert.css') }}">

    @stack('style')

    <title>YPPB</title>
</head>


  <body>
        @include('sweetalert::alert')
             <!-- Header -->
            @if(Request::is('about') || Request::is('contact') || Request::routeIs('home.single*')|| Request::is('lembaga')|| Request::is('legalformal')|| Request::is('kepengurusan'))
                @include('components.home.header-about')
            @else
                @include('components.home.header')
            @endif

            <!-- Content -->
            @yield('main')

            <!-- Footer -->
            @if (Request::routeIs('home.single*'))
                @include('components.home.footer-detail')
            @else
                @include('components.home.footer')
            @endif





    <script src="{{ asset('js/home/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/home/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('js/home/vendor/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/home/vendor/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('js/home/vendor/jarallax.min.js') }}"></script>
    <script src="{{ asset('js/home/vendor/jarallax-element.min.js') }}"></script>
    <script sr c="{{ asset('js/home/vendor/ofi.min.js') }}"></script>

    <script src="{{ asset('js/home/vendor/aos.js') }}"></script>

    <script src="{{ asset('js/home/vendor/jquery.lettering.js') }}"></script>
    <script src="{{ asset('js/home/vendor/jquery.sticky.js') }}"></script>

    <script src="{{ asset('js/home/vendor/TweenMax.min.js') }}"></script>
    <script src="{{ asset('js/home/vendor/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('js/home/vendor/scrollmagic.animation.gsap.min.js') }}"></script>
    <script src="{{ asset('js/home/vendor/debug.addIndicators.min.js') }}"></script>

    <script src="{{ asset('js/home/instant/custom.js') }}"></script>

    <script src="{{ asset('js/home/main.js') }}"></script>
    <script src="{{ asset('library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    @stack('scripts')
  </body>
</html>

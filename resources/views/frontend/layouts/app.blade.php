<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Ashikur Rahman')</title>

    
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{asset('img/sitelogo.png')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('img/sitelogo.png')}}">
    
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome-pro.min.css')}}">
    <link rel="stylesheet" href="{{asset('/')}}css/flaticon_gerold.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/backToTop.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/odometer-theme-default.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <!-- Javascript with CSS here -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/nice-select.min.js')}}"></script>
    <script src="{{asset('js/backToTop.js')}}"></script>
    <script src="{{asset('js/smooth-scroll.js')}}"></script>
    <script src="{{asset('js/appear.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/gsap.min.js')}}"></script>
    <script src="{{asset('js/one-page-nav.js')}}"></script>
    <script src="{{asset('js/lightcase.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/odometer.min.js')}}"></script>
    <script src="{{asset('js/magnific-popup.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</head>
<body data-new-gr-c-s-check-loaded="14.1157.0" data-gr-ext-installed="">
    @include('frontend.layouts.header')

    <main class="site-content" id="content">
        @yield('content')
    </main>
  

    @include('frontend.layouts.footer')
    
  </body>
</html>
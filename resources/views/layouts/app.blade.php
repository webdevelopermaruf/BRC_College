<!DOCTYPE html>
<html lang="bn">

<head>
    <!--================= Meta tag =================-->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <!--================= Responsive Tag =================-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="assets/images/fav.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">
    <!--================= Bootstrap V5 css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--================= Menus css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/menus.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!--================= Owl Carousel css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <!--================= Owl Carousel css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
    <!--================= Elegant icon css  =================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/elegant-icon.css">
    <!--================= Fontawesome icon css  =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <!--================= Magnific Popup css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!--================= Animations css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/animations.css">
    <!--================= style css =================-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--================= Custom Spacing css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/custom-spacing.css">
    <!--================= Responsive css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>
    <!--================= Preloader Section Start Here =================-->
    {{-- <div id="react__preloader">
        <div id="react__circle_loader"></div>
        <div class="react__loader_logo"><img src="./assets/img/logo/brc-logo-curve-text.png" alt="Preload"></div>
    </div> --}}
    <!--================= Preloader Section End Here =================-->

    @include('components.header')

    <!--================= Wrapper Start Here =================-->
    <div class="react-wrapper">
        <div class="react-wrapper-inner">
            @yield('content')
        </div>
        <!--================= Wrapper End Here =================-->


        @include('components.footer')


        <!--================= Scroll to Top Start =================-->
        <div id="backscrollUp" class="home">
            <span aria-hidden="true" class="arrow_carrot-up bg-primaryColor"></span>
        </div>
        <!--================= Scroll to Top End =================-->
    </div>
    
    @include('components.scripts')
</body>

</html>
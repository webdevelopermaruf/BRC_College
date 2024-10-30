<!DOCTYPE html>
<html lang="bn">

<head>
    <!--================= Meta tag =================-->
    <meta charset="utf-8">
    <title>@yield('title') {{ $site_settings->site_short_name }}</title>
    <meta name="description" content="">
    <!--================= Responsive Tag =================-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="/assets/img/favicon.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.jpg">
    <link rel="stylesheet" type="text/css" href="/assets/css/menus.css">
    <link rel="stylesheet" type="text/css" href="/assets/fonts/elegant-icon.css">
    @stack('inertiaHead')
    @vite(['public/assets/css/bootstrap.min.css', 'public/assets/css/swiper.min.css', 'public/assets/css/all.min.css', 'public/style.css', 'public/assets/css/responsive.css'])

</head>

<body>
    <!--================= Preloader Section Start Here =================-->
    @if (Request::is('/') == false)
        <div id="react__preloader">
            <div id="react__circle_loader"></div>
            <div class="react__loader_logo"><img src="/assets/img/logo/brc-logo-curve-text.webp" alt="Preload"></div>
        </div>
    @endif
    <!--================= Preloader Section End Here =================-->

    @include('components.header')

    <!--================= Wrapper Start Here =================-->
    <div class="react-wrapper">
        <div class="react-wrapper-inner" id="my-app">
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

    @stack('inertiaTail')
    @include('components.scripts')

</body>

</html>

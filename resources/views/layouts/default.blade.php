<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('templates/img/favicon.png') }}">

        <link rel="stylesheet" href="{{ asset('templates/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/css/et-line-icon.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/css/responsive.css') }}">
        @livewireStyles
        <script src="{{ asset('js/vendor/modernizr-3.11.2.min.js') }}"></script>
</head>
<body>

    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    @livewireScripts
    <script src="{{ asset('templates/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('templates/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('templates/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('templates/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('templates/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('templates/js/ajax-mail.js') }}"></script>
    <script src="{{ asset('templates/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('templates/js/jquery.mb.YTPlayer.js') }}"></script>
    <script src="{{ asset('templates/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('templates/js/plugins.js') }}"></script>
    <script src="{{ asset('templates/js/main.js') }}"></script>
</body>
</html>

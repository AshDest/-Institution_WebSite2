<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    @include('layouts.css')
    @livewireStyles
    <script src="{{ asset('js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    @livewireScripts
    @include('layouts.scripts')
</body>

</html>

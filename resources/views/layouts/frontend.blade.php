<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'The Arch Solutions') }}</title>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/frontend/css/plugins.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.ico') }}">
</head>

<body>
    <!-- lodaer  -->
    <div class="loader-wrap">
        <div class="loader-spin"><span></span></div>
    </div>
    <!-- loader end  -->
    <!--  main   -->
    <div id="main">

        @include('layouts.navigation')

        <!-- Page Content -->
        <div class="wrapper">
            {{ $wrapper }}
            @include('layouts.footer')
        </div>
    </div>
    <!-- Main end -->

    <!--=============== scripts  ===============-->
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
</body>

</html>

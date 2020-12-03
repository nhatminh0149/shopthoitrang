<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>@yield('title')</title>

    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('ashion/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ashion/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ashion/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ashion/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ashion/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ashion/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ashion/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ashion/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('ashion/css/sweetalert.css') }}" type="text/css">
    @yield('custom-css')
</head>
<body>
    <!-- Header -->
    @include('frontend.layouts.partials.header')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('frontend.layouts.partials.footer')

     <!-- Js Plugins -->
    <script src="{{ asset('ashion/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('ashion/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ashion/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('ashion/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('ashion/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('ashion/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('ashion/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('ashion/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('ashion/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('ashion/js/main.js') }}"></script>
    <script src="{{ asset('ashion/js/sweetalert.min.js') }}"></script>    

    <div class="zalo-chat-widget" data-oaid="1625171934518864675" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420"></div>

    <script src="https://sp.zalo.me/plugins/sdk.js"></script>

    <!-- Các custom script dành riêng cho từng view -->
    @yield('custom-scripts')
</body>
</html>
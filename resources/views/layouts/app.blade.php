<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Tự thêm -->
        <!-- <meta charset="UTF-8">
        <meta name="description" content="Ashion Template">
        <meta name="keywords" content="Ashion, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->

        <!-- Google Font -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet"> -->

        <!-- Css Styles -->
        <!-- <link rel="stylesheet" href="{{ asset('ashion/css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('ashion/css/font-awesome.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('ashion/css/elegant-icons.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('ashion/css/jquery-ui.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('ashion/css/magnific-popup.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('ashion/css/owl.carousel.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('ashion/css/slicknav.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('ashion/css/style.css') }}" type="text/css"> -->
    <!-- End Tự thêm -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('user.logout') }}">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


    <!-- Tự thêm -->
            <!-- Js Plugins -->
        <!-- <script src="{{ asset('ashion/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('ashion/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('ashion/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('ashion/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('ashion/js/mixitup.min.js') }}"></script>
        <script src="{{ asset('ashion/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('ashion/js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('ashion/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('ashion/js/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('ashion/js/main.js') }}"></script> -->
    <!-- End Tự thêm -->
</body>
</html>

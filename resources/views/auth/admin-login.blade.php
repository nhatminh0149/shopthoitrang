<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <title>
        Admin Panel
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/material-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/material-dashboard.css?v=2.0.0') }}">

    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />
    <!-- iframe removal -->


    <style>
        body{
            background-image: linear-gradient(rgba(23, 23, 24, 0.6), rgba(23, 23, 24, 0.6)),
                                url('https://material-dashboard-laravel.creative-tim.com/material/img/login.jpg'); 
            background-size: cover; 
            background-position: top center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container" style="height: auto;">
        <div class="row align-items-center">

            <!-- <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
                <h3>Log in and see how you can go from prototyping to a fully-functional web app x10 times faster.&nbsp; </h3>
            </div> -->

            <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto" style="margin-top: 100px;">

                <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
                {{ csrf_field() }}
                    
                    <div class="card card-login mb-3">
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title"><strong>LOGIN</strong></h4>
                            <div class="social-line">
                                <!-- <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                    <i class="fa fa-google-plus"></i>
                                </a> -->
                            </div>
                        </div>

                        <div class="card-body">
                            <!-- <p class="card-description text-center">Or Sign in with  <strong>admin@material.com</strong>  and the password <strong>secret</strong> </p> -->
                            <p class="card-description text-center">Hãy nhập Email và Password được cấp để <br> đăng nhập vào hệ thống</p>
                            <div class="bmd-form-group is-filled">
                                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">email</i>
                                        </span>
                                    </div>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email..." value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="bmd-form-group mt-3 is-filled">
                                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password..." required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- <div class="form-check mr-auto ml-3 mt-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div> -->

                            <!-- <div class="form-check mr-auto ml-3 mt-3">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div> -->
                        </div>

                        <div class="card-footer justify-content-center">
                            <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
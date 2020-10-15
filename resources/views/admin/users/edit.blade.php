@extends('layouts.admin.master')

@section('title')
    Cập nhật khách hàng
@endsection

@section('content')
	<body class="">
    <div class="wrapper">
       @include('layouts.admin.sidenav')
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <span class="navbar-brand">QUẢN LÝ KHÁCH HÀNG</span>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="material-icons">dashboard</i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                    <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                    <a class="dropdown-item" href="#">Another Notification</a>
                                    <a class="dropdown-item" href="#">Another One</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="material-icons">person</i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">

                <div class="container-fluid">
                    
                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info', 'dark'] as $msg)
                            @if(Session::has('alert-' . $msg))
                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            @endif
                        @endforeach
                    </div>

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">CẬP NHẬT KHÁCH HÀNG</h4>
                            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                        </div>

                        <form class="mt-4 ml-5 mr-5 mb-5" role="form" action="{{ route('admin.user.update', $user->id) }}" method="post">
                            {{ csrf_field() }}
                            
                            <div class="row mb-4">
                                <div class="col">
                                    Mã khách hàng:<input type="text" class="form-control" id="id" name="id" value="{{ $user->id }}" readonly>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    Tài khoản khách hàng:<input type="text" class="form-control" id="username" name="username" value="{{ old('username', $user->username) }}">
                                    @if($errors->has("username"))
                                        <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                            {{$errors->first("username")}}
                                        </div>                 
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    Email:<input type="text" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
                                    @if($errors->has("email"))
                                        <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                            {{$errors->first("email")}}
                                        </div>                 
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    Mật khẩu:<input type="password" class="form-control" id="password" name="password" value="{{ old('password', $user->password) }}">
                                    @if($errors->has("password"))
                                        <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                            {{$errors->first("password")}}
                                        </div>                 
                                    @endif
                                </div>
                            </div>
                           
                            <div class="row mb-4">
                                <div class="col">
                                    Nhập lại mật khẩu:<input type="password" class="form-control" id="re_password" name="re_password" value="{{ old('password', $user->password) }}">
                                    @if($errors->has("re_password"))
                                        <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                            {{$errors->first("re_password")}}
                                        </div>                 
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    Họ tên khách hàng:<input type="text" class="form-control" id="hoten" name="hoten" value="{{ old('hoten', $user->hoten) }}">
                                    @if($errors->has("hoten"))
                                        <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                            {{$errors->first("hoten")}}
                                        </div>                 
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    Số điện thoại:<input type="text" class="form-control" id="sdt" name="sdt" value="{{ old('sdt', $user->sdt) }}">
                                    @if($errors->has("sdt"))
                                        <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                            {{$errors->first("sdt")}}
                                        </div>                 
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    Trạng thái 
                                    <select name="trangthai"  class="form-control">
                                        <option value="1" {{ old('trangthai', $user->trangthai) == 1 ? "selected" : "" }}>Kích hoạt</option>
                                        <option value="0" {{ old('trangthai', $user->trangthai) == 0 ? "selected" : "" }}>Vô hiệu hóa</option>
                                    </select> 
                                </div> 
                            </div>

                            

                            <button type="submit" class="btn btn-outline-primary">Cập nhật khách hàng</button>
                        </form>

                    </div>

                </div>
            </div>
            @include('layouts.admin.footer')
        </div>
    </div>
</body>
@endsection
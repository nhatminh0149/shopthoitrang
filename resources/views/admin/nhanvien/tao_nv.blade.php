@extends('layouts.admin.master')

@section('title')
    Tạo nhân viên
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
                        <a class="navbar-brand" href="#pablo">QUẢN LÝ NHÂN VIÊN</a>
                    </div>
                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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
                    </div> -->
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                {{-- <div class="container-fluid">
                   
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Purchased On</th>
                            <th>Customer</th>
                            <th>Ship to</th>
                            <th>Base Price</th>
                            <th>Purchased Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2012/08/03</td>
                            <td>Edinburgh</td>
                            <td>New York</td>
                            <td>$1500</td>
                            <td>$3200</td>
                            <td>
                              <label class="badge badge-info">On hold</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2015/04/01</td>
                            <td>Doe</td>
                            <td>Brazil</td>
                            <td>$4500</td>
                            <td>$7500</td>
                            <td>
                              <label class="badge badge-danger">Pending</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2010/11/21</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>2016/01/12</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>2017/12/28</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>2000/10/30</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-info">On-hold</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>2011/03/11</td>
                            <td>Cris</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>2015/06/25</td>
                            <td>Tim</td>
                            <td>Italy</td>
                            <td>$6300</td>
                            <td>$2100</td>
                            <td>
                              <label class="badge badge-info">On-hold</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>2016/11/12</td>
                            <td>John</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>2003/12/26</td>
                            <td>Tom</td>
                            <td>Germany</td>
                            <td>$1100</td>
                            <td>$2300</td>
                            <td>
                              <label class="badge badge-danger">Pending</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                      </tbody>
                    </table> 
                </div> --}}



                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">THÊM MỚI NHÂN VIÊN</h4>
                            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                        </div>

                        <form class="mt-4 ml-5 mr-5 mb-5" role="form" action="{{ route('admin.nv.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="row mb-4">
                                <div class="col">
                                    Tên nhân viên:<input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                    @if($errors->has("name"))
                                        <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                            {{$errors->first("name")}}
                                        </div>                 
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    Email:<input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                    @if($errors->has("email"))
                                        <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                            {{$errors->first("email")}}
                                        </div>                 
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    Password:<input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                                    @if($errors->has("password"))
                                        <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                            {{$errors->first("password")}}
                                        </div>                 
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    Nhập lại password:<input type="password" class="form-control" id="re_password" name="re_password" value="{{ old('re_password') }}">
                                    @if($errors->has("re_password"))
                                        <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                            {{$errors->first("re_password")}}
                                        </div>                 
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    Quyền: <br>
                                    <input type="radio" id="quyen" name="quyen" value="1" class="mt-3">
                                        <label for="quyen">Admin</label><br>
                                    <input type="radio" id="quyen" name="quyen" value="2">
                                        <label for="quyen">Nhân viên kho</label><br>
                                    <input type="radio" id="quyen" name="quyen" value="3">
                                        <label for="quyen">Nhân viên bán hàng</label><br><br>
                                    @if($errors->has("quyen"))
                                        <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                            {{$errors->first("quyen")}}
                                        </div>                 
                                    @endif
                                </div>
                            </div>

                            

                            <input type="hidden" class="form-control" id="trangthai" name="trangthai" value="1">


                            <button type="submit" class="btn btn-outline-primary">Thêm nhân viên mới</button>
                        </form>

                    </div>
                </div>
            </div>
            @include('layouts.admin.footer')
        </div>
    </div>
</body>
@endsection
@extends('layouts.admin.master')

@section('title')
    Chi tiết đơn đặt hàng
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
                        <a class="navbar-brand" href="#pablo">QUẢN LÝ ĐƠN HÀNG</a>
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
                            <h4 class="card-title text-center">ĐƠN HÀNG {{ $ds_ddh->ddh_id}}</h4>
                            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                        </div>

                        <div class="card-body table-responsive">
                            <table class="table">
                                @foreach ($ds_ddh1 as $ds_ddh1)
                                    <?php
                                        $ddh_ngaylap=date("d/m/Y H:i:s", strtotime($ds_ddh1->ddh_ngaylap));
                                    ?>

                                    <tr> 
                                        <th>Tài khoản đặt hàng:</th>
                                        <td>{{ $ds_ddh1->kh_taikhoan }}</td>
                                        <th>Ngày lập:</th>
                                        <td>{{ $ddh_ngaylap }}</td>
                                    </tr>
                                    <tr> 
                                        <th>Trạng thái:</th>
                                        <td>
                                            @if($ds_ddh1->ddh_trangthai == 0)
                                                {{ 'Chưa xử lý' }}
                                            @else
                                                {{ 'Đã xử lý'}}
                                            @endif
                                        </td>
                                        <th>Nhân viên duyệt đơn:</th>
                                        <td>
                                            @if($ds_ddh1->name == NULL)
                                                {{ 'Chưa có' }}
                                            @else
                                                {{ $ds_ddh1->name }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr> 
                                        <th>Địa chỉ giao hàng:</th>
                                        <td>{{ $ds_ddh1->ddh_diachigiaohang }}</td>
                                        <th>Số điện thoại:</th>
                                        <td>{{ $ds_ddh1->kh_sdt }}</td>
                                    </tr>
                                    <tr> 
                                        <th>Hình thức vận chuyển:</th>
                                        <td>{{ $ds_ddh1->htvc_ten }}</td>
                                        <th>Hình thức thanh toán:</th>
                                        <td>{{ $ds_ddh1->httt_ten }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    
                    <br>

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center">CHI TIẾT ĐƠN HÀNG</h4>
                            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                        </div>

                        <div class="card-body table-responsive">
                            <table class="table" id="order-listing">
                                <thead class=" text-primary"> 
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Màu</th>
                                    <th>Size</th>
                                    <th>Số lượng</th>
                                    <th>Giá bán</th>
                                    <th>Thành tiền</th>
                                </thead>

                                <tbody>
                                    <?php 
                                        $count = 1;
                                    ?>
                                    @foreach($ds_ddh2 as $ds_ddh2)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td>{{ $ds_ddh2->sp_ten }}</td>
                                        <td>{{ $ds_ddh2->m_ten }}</td>
                                        <td>{{ $ds_ddh2->size_ten }}</td>
                                        <td>{{ $ds_ddh2->ctdh_soluong }}</td>
                                        <td>{{ number_format($ds_ddh2->ctdh_dongia, 0, ',' , ',') }} đ</td>
                                        <td>{{ number_format($ds_ddh2->ctdh_soluong * $ds_ddh2->ctdh_dongia, 0, ',' , ',') }} đ</td>
                                    </tr>
                                   @endforeach
                                </tbody>
                                <tfoot>
                                    @foreach($ds_ddh3 as $ds_ddh3)
                                    <tr>
                                        <td colspan="6" class="text-right" style="font-weight: bold;">Tổng tiền:</td>
                                        <td style="font-weight: bold;">{{ number_format($ds_ddh3->TongTienDonHang, 0, ',' , ',') }} đ</td>
                                     </tr>
                                    @endforeach                                 
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            @include('layouts.admin.footer')
        </div>
    </div>
</body>
@endsection

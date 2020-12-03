@extends('layouts.admin.master')

@section('title')
    Danh sách đánh giá
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
                        <a class="navbar-brand" href="#pablo">QUẢN LÝ BÌNH LUẬN - ĐÁNH GIÁ</a>
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
                            <h4 class="card-title ">DANH SÁCH BÌNH LUẬN - ĐÁNH GIÁ</h4>
                            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                        </div>

                        <div class="card-body table-responsive">
                            <table class="table" id="order-listing">

                                <div class="flash-message">
                                    @foreach (['danger', 'warning', 'success', 'info', 'dark'] as $msg)
                                        @if(Session::has('alert-' . $msg))
                                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                        @endif
                                    @endforeach
                                </div>

                                <a href="{{ route('admin.danhmuc.create') }}">
                                    <button type="button" class="btn btn-outline-primary">Thêm mới</button>
                                </a>

                                <div id="notify_comment"></div>

                                <thead class=" text-primary text-center"> 
                                    <th>Mã</th>
                                    <th>Khách hàng</th>
                                    <th>Sản phẩm</th>
                                    <th>Nội dung</th>
                                    <th>Ngày đánh giá</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </thead>

                                <tbody>
                                    @foreach ($ds_danhgia as $key => $ds_danhgia_1)
                                    <?php
                                            $dg_ngaydanhgia=date("d/m/Y H:i:s", strtotime($ds_danhgia_1->dg_ngaydanhgia));
                                    ?>
                                    <tr>
                                        <td>{{ $ds_danhgia_1->dg_id }}</td>
                                        <td>{{ $ds_danhgia_1->khachhang->kh_taikhoan }}</td>
                                        <td>{{ $ds_danhgia_1->sanpham->sp_ten }}</td>
                                        <td>{{ $ds_danhgia_1->dg_noidung }}
                                            <style type="text/css">
                                                ul.list_rep li{
                                                    list-style-type: decimal;
                                                    color: blue;
                                                    margin: 0px 0px 0px -15px;
                                                }
                                            </style>
                                            <ul class="list_rep">
                                                @foreach ($ds_danhgia as $key => $comm_reply)
                                                    @if ($comm_reply->dg_parent_comment == $ds_danhgia_1->dg_id)
                                                        <li>Trả lời: {{ $comm_reply->dg_noidung }}</li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                            @if (($ds_danhgia_1->dg_trangthai) == 1)
                                                <br><textarea class="reply_comment{{$ds_danhgia_1->dg_id}}" cols="15" rows="3" style="resize: none;"></textarea><br>
                                                <button type="button" class="btn btn-outline-default btn-sm btn-reply-comment" data-sp_id="{{ $ds_danhgia_1->sp_id }}" data-dg_id="{{ $ds_danhgia_1->dg_id }}" data-kh_id="{{ $ds_danhgia_1->kh_id }}">Trả lời bình luận</button>
                                            @endif
                                        </td>
                                        <td>{{ $dg_ngaydanhgia }}</td>
                                        <td style="text-align: center;">
                                            @if (($ds_danhgia_1->dg_trangthai) == 1)
                                                <div class="badge badge-primary">
                                                    {{ 'Đã duyệt' }}
                                                </div>
                                            @else 
                                                <div class="badge badge-danger">
                                                    <a style="color: white;" href="{{ route('admin.danhgia.active', ['dg_id' => $ds_danhgia_1->dg_id]) }}">{{ 'Chưa duyệt' }}</a>
                                                </div>
                                            @endif
                                        </td>
                                    
                                        <td class="text-primary">
                                            <a href="">
                                                <button type="button" class="btn btn-outline-info"><i class="fa fa-pencil" aria-hidden="true" title="Trả lời bình luận"></i></button>
                                            </a>
                                            <a href="" onclick="return confirm('Bạn có muốn xóa bình luận này không?')">
                                                <button type="button" class="btn btn-outline-danger"><i class="fa fa-trash-o" aria-hidden="true" title="Xóa bình luận"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
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

@section('custom-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.btn-reply-comment').click(function(){
               
                var dg_id = $(this).data('dg_id');
                var dg_noidung = $('.reply_comment'+dg_id).val();
                var sp_id = $(this).data('sp_id')
                var kh_id = $(this).data('kh_id')

                //alert(dg_id);
                //alert(dg_noidung);
                //alert(sp_id);
               // alert(kh_id);
                $.ajax({
                    url: '{{url('/admin/reply-comment')}}',
                    method: 'POST',
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        dg_id: dg_id,
                        dg_noidung: dg_noidung,
                        sp_id: sp_id,
                        kh_id: kh_id
                    },
                    success:function(data){
                        $('.reply_comment'+dg_id).val('');
                        $('#notify_comment').html('<br><br><p class="text text-success">Trả lời bình luận thành công!</p>');
                    },
                });
            });
        });
    </script>

@endsection
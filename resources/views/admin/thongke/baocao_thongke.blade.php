@extends('layouts.admin.master')

@section('title')
    Thống kê
@endsection

@section('content')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<body class="">
    <div class="wrapper">
       @include('layouts.admin.sidenav')
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">Admin Dashboard</a>
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
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">content_copy</i>
                                    </div>
                                    <p class="card-category">Nhà cung cấp</p>
                                    <h3 class="card-title">{{ $nhacungcap_count }}
                                        <!-- <small>GB</small> -->
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">warning</i>
                                        <a href="#pablo">Get More Space...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">store</i>
                                    </div>
                                    <p class="card-category">Loại sản phẩm</p>
                                    <h3 class="card-title">{{ $loaisanpham_count }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">info_outline</i>
                                    </div>
                                    <p class="card-category">Sản phẩm</p>
                                    <h3 class="card-title">{{ $sanpham_count }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Tracked from Github
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                    <p class="card-category">Followers</p>
                                    <h3 class="card-title">+245</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BIẾN ĐỘNG GIÁ -->
                    <h4 style="text-align: center;">BIẾN ĐỘNG GIÁ SẢN PHẨM THEO THỜI GIAN</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <form autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="sp_id">Chọn sản phẩm</label>
                                        
                                        <?php $sp = DB::table('gia')
                                                    ->join('sanpham','sanpham.sp_id','=','gia.sp_id')
                                                    ->groupBy('gia.sp_id')
                                                    ->distinct('gia.sp_id')->get();
                                        ?>
                                        <select id="sp_id" name="sp_id" class="form-control">
                                        @foreach($sp as $sp)
                                            <option id="sp_id" name="sp_id" value="{{ $sp->sp_id }}">
                                                    {{ $sp->sp_ten }}  
                                            </option>
                                        @endforeach
                                    </select>
                                        
                                    </div>
                                    
                                    <input type="button" id="btn-biendonggia" class="btn btn-primary btn-sm" value="Thống kê">
                                </form>

                                <div class="col-md-12">
                                    <div id="chart1" style="height: 250px;"></div>
                                </div>
                            </div>
                        </div>

                   
                    
                </div>
            </div>
            @include('layouts.admin.footer')
        </div>
    </div>
</body>
@endsection
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


<!-- Biến động giá -->
<script>
$(document).ready(function() {
           
     var chart1 = new Morris.Line({

        element: 'chart1',
        
        parseTime: false,
        hideHover:'auto',
        xkey: 'ngay',
        ykeys: ['giaban'],
        behaveLikeLine:true,
        // chart.
        labels: ['Đơn giá']
        });

    $("#btn-biendonggia").click(function(e) {
        //alert('ok đã nhận');
        var sp_id = $('#sp_id').val();
        //alert(sp_id);

        var _token = $('input[name="_token"]').val();

        $.ajax({
            url: '{{ route('admin.doanhthu.biendong_gia') }}',
            method:"POST",
            dataType:"JSON",
            data:{sp_id:sp_id,_token:_token},
            success: function(data){
                chart1.setData(data);
            }
    })
    });
})
</script>
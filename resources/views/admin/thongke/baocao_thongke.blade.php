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
                        <a class="navbar-brand" href="#pablo">DASHBOARD</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <!-- <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form> -->
                        <!-- <ul class="navbar-nav">
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
                        </ul> -->
                       
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        
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
                                        <i class="fa fa-male" aria-hidden="true" style="margin-top: 4px;"></i>&nbsp;Nam: {{ $lsp_count_nam }}
                                    </div>
                                    <div class="stats">
                                        <i class="fa fa-female" aria-hidden="true" style="margin-top: 4px;"></i>&nbsp;Nữ: {{ $lsp_count_nu }}
                                    </div>
                                    <div class="stats">
                                        <i class="material-icons">people</i>Couple: {{ $lsp_count_couple }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">redeem</i>
                                    </div>
                                    <p class="card-category">Sản phẩm</p>
                                    <h3 class="card-title">{{ $sanpham_count }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">check_box</i>Có k/mãi: {{ $sp_count_cokm }}
                                    </div>
                                    <div class="stats">
                                        <i class="material-icons">check_box_outline_blank</i>Không k/mãi: {{ $sp_count_kokm }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">person_add_alt_1</i>
                                    </div>
                                    <p class="card-category">Khách hàng</p>
                                    <h3 class="card-title">{{ $khachhang_count }}
                                        <!-- <small>GB</small> -->
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">check_box</i>Hoạt động: {{ $khachhang_count_hd }}
                                    </div>
                                    <div class="stats">
                                        <i class="material-icons">check_box_outline_blank</i>Không h/động: {{ $khachhang_count_kohd }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">content_copy</i>
                                    </div>
                                    <p class="card-category">Đơn đặt hàng</p>
                                    <h3 class="card-title">{{ $dondathang_count }}
                                        <!-- <small>GB</small> -->
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">check_box</i>Duyệt: {{ $dondathang_count_duyet }}
                                    </div>
                                    <div class="stats">
                                        <i class="material-icons">check_box_outline_blank</i>Chưa duyệt: {{ $dondathang_count_chuaduyet }}
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
                                
                                <input type="button" id="btn-biendonggia" class="btn btn-primary btn-sm" value="Xem biến động">
                            </form>

                            <div class="col-md-12">
                                <div id="chart1" style="height: 250px;"></div>
                            </div>
                        </div>
                    </div>

                    <h4 style="text-align: center;">TỔNG DOANH THU THEO THÁNG TRONG NĂM</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <form method="get" action="#" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nam">Chọn năm</label>
                                    <input type="number" class="form-control" id="nam" name="nam" min="2019">
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm" id="btnLapBaoCao">Thống kê dữ liệu</button>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <canvas id="chartOfobjChart" style="height: 250px;"></canvas>
                        </div>
                    </div>

                    <br><br>
                    <div class="row">
                        <div class="col-md-6">  
                            <h4 style="text-align: center;">THỐNG KÊ SẢN PHẨM TỒN KHO</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="dynamic_form" role="form" method="post"> 
                                    {{ csrf_field() }}
                                        <div class="position-center">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Sản phẩm:</label>
                                                    <select name="sp_id_1" class="form-control input-sm m-bot15" id="sp_id_1">
                                                        @foreach($sp1 as $key => $sp1)
                                                            <option value="{{ $sp1->sp_id }}">{{ $sp1->sp_ten }}</option>
                                                        @endforeach  
                                                    </select>
                                            </div>
                                        
                                            <input  type="button" name="save" id="save" class="btn btn-primary btn-sm" value="Thống kê" />

                                        </div>
                                        <br>
                                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                            <style>
                                                .my-custom-scrollbar {
                                                    position: relative;
                                                    height: 200px;
                                                    overflow: auto;
                                                }
                                                .table-wrapper-scroll-y {
                                                    display: block;
                                                }
                                            </style>
                                            <table class="table table-bordered table-striped" id="table" style="font-size: 13px;">
                                
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h4 style="text-align: center;">THỐNG KÊ SẢN PHẨM THEO NGƯỠNG BÁO ĐỘNG</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="dynamic_form_1" role="form" method="post"> 
                                    {{ csrf_field() }}
                                        <div class="position-center">
                                            <div class="form-group">
                                                <label for="nguong">Chọn ngưỡng:</label>
                                                <input type="number" class="form-control" id="nguong" name="nguong" max="20">
                                            </div>
                                        
                                            <input  type="button" name="save_nguong" id="save_nguong" class="btn btn-primary btn-sm" value="Thống kê" />

                                        </div>
                                        <br>
                                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                            <style>
                                                .my-custom-scrollbar {
                                                    position: relative;
                                                    height: 200px;
                                                    overflow: auto;
                                                }
                                                .table-wrapper-scroll-y {
                                                    display: block;
                                                }
                                            </style>
                                            <table class="table table-bordered table-striped" id="table1" style="font-size: 13px;">
                                
                                            </table>
                                        </div>
                                    </form>
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

@section('custom-scripts')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<!-- Các script dành cho thư viện Numeraljs -->
<script src="{{ asset('vendor/numeraljs/numeral.min.js') }}"></script>

<!-- Các script dành cho thư viện ChartJS -->
<script src="{{ asset('vendor/Chart.js/Chart.min.js') }}"></script>

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
            url: '{{ route("admin.doanhthu.biendong_gia") }}',
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

<script>
    // Đăng ký tiền tệ VNĐ
    numeral.register('locale', 'vi', {
        delimiters: {
            thousands: ',',
            decimal: '.'
        },
        abbreviations: {
            thousand: 'k',
            million: 'm',
            billion: 'b',
            trillion: 't'
        },
        ordinal: function(number) {
            return number === 1 ? 'một' : 'không';
        },
        currency: {
            symbol: 'đ'
        }
    });

    // Sử dụng locate vi (Việt nam)
    numeral.locale('vi');
</script>

<!-- Biểu đồ cho tổng doanh thu -->
<script>
    $(document).ready(function() {
        var objChart;
        var $chartOfobjChart = document.getElementById("chartOfobjChart").getContext("2d");

        $("#btnLapBaoCao").click(function(e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route('admin.doanhthu.doanhthu_nam') }}',
                type: "GET",
                data: {
                    nam: $('#nam').val(),
                },
                success: function(response) {
                    var myLabels = [];
                    var myData = [];
                    $(response.data).each(function() {
                        myLabels.push((this.thoiGian));
                        myData.push(this.tongThanhTien);
                    });
                    myData.push(0); // creates a '0' index on the graph

                    if (typeof $objChart !== "undefined") {
                        $objChart.destroy();
                    }

                    $objChart = new Chart($chartOfobjChart, {
                        // The type of chart we want to create
                        type: "bar",

                        data: {
                            labels: myLabels,
                            datasets: [{
                                data: myData,
                                borderColor: "#9c27b0",
                                backgroundColor: "#9c27b0",
                                borderWidth: 1
                            }]
                        },

                        // Configuration options go here
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                // text: "Báo cáo đơn hàng"
                                text: "Tổng doanh thu"
                            },
                            scales: {
                                xAxes: [{
                                    barPercentage: 0.3,
                                    scaleLabel: {
                                        display: true,
                                        // labelString: 'Ngày nhận đơn hàng'
                                        labelString: 'Tháng'
                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        callback: function(value) {
                                            return numeral(value).format('0,0 $')
                                        }
                                    },
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Tổng thành tiền'
                                    }
                                }]
                            },
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                        return numeral(tooltipItem.value).format('0,0 $')
                                    }
                                }
                            },
                            responsive: true,
                            maintainAspectRatio: false,
                        }
                    });
                }
            });
        });
    });

</script>

<script type="text/javascript">
    $('#save').on('click', function(event){
        event.preventDefault();
        var a= $('#dynamic_form').serialize();
    
        //console.log(a);
        $.ajax({
            type:'post',
            url: '{{ route("admin.doanhthu.post_baocaotonkho") }}',
            data:$('#dynamic_form').serialize(),
            success:function(data){
                $("#table").html(data);
            },
            error:function(){

            }
        });
        
    });
  
</script>

<script type="text/javascript">
    $('#save_nguong').on('click', function(event){
        event.preventDefault();
        var a= $('#dynamic_form_1').serialize();
    
        //console.log(a);
        $.ajax({
            type:'post',
            url: '{{ route("admin.doanhthu.post_nguongbaodong") }}',
            data:$('#dynamic_form_1').serialize(),
            success:function(data){
                $("#table1").html(data);
            },
            error:function(){

            }
        });
        
    });
  
</script>
@endsection
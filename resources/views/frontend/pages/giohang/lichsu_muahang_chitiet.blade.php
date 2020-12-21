{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.master` --}}
@extends('frontend.layouts.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.master` --}}
@section('title')
A S H I O N
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.master` --}}
@section('custom-css')

@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layouts.master` --}}
@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{ route('frontend.home') }}"><i class="fa fa-home"></i> Trang chủ </a>
                    <span>Chi tiết đơn hàng - Mã đơn: {{ $ds_ddh->ddh_id}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- History Section Begin -->
<section class="history_detail">
    <div class="container mt-5 mb-5">
        <h5 style="font-size: 20px;  font-weight: bold;"><center>THÔNG TIN ĐƠN HÀNG</center></h5>
        <br>
        <div class="card-body table-responsive">
            <table class="table" cellpadding=5>
                @foreach ($ds_ddh1 as $ds_ddh1)
                    <?php
                        $ddh_ngaylap=date("d/m/Y H:i:s", strtotime($ds_ddh1->ddh_ngaylap));
                    ?>

                    <tr> 
                        <th>Tài khoản đặt hàng:</th>
                        <td>{{ $ds_ddh1->kh_taikhoan }}</td>
                        <th>Ngày mua hàng:</th>
                        <td>{{ $ddh_ngaylap }}</td>
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
        <br><br>
        <h5 style="font-size: 20px; font-weight: bold;"><center>CHI TIẾT ĐƠN HÀNG</center></h5>
        <div class="card-body table-responsive">
            <table class="table" id="order-listing">
                <thead class=" text-danger"> 
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
</section>
<!-- History Section End -->


@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')

@endsection
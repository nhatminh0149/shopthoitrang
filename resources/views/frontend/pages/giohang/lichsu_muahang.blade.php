{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.master` --}}
@extends('frontend.layouts.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.master` --}}
@section('title')
A S H I O N
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.master` --}}
@section('custom-css')
<style>
    .site-btn {
	font-size: 10px;
	color: #ffffff;
	background: #ca1515;
	font-weight: 600;
	border: none;
	text-transform: uppercase;
	display: inline-block;
	padding: 5px 10px;
	border-radius: 50px;
}

.site-btn:hover {
	font-size: 10px;
	color: #ffffff;
	background: #0a0a0a;
	font-weight: 600;
	border: none;
	text-transform: uppercase;
	display: inline-block;
	padding: 5px 10px;
	border-radius: 50px;
}
</style>
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
                    <span>Lịch sử mua hàng</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- History Section Begin -->
<section class="history">
    <div class="container mt-5 mb-5">
       <div class="row">
        @foreach($ds_ddh as $ds_ddh)
            <?php
                $ddh_ngaylap=date("d/m/Y", strtotime($ds_ddh->ddh_ngaylap));
            ?> 
           <div class="col-md-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('img/logo/giohang4.png') }}" alt="Card image cap"  >
                    <div class="card-body">
                        <span class="card-title" style="font-size: 14px;">Mã đơn hàng: {{ $ds_ddh->ddh_id }} </span><br>
                        <span class="card-title" style="font-size: 14px;">Ngày đặt: {{ $ddh_ngaylap }} </span><br>
                        <center><a href="{{ route('frontend.chitiet_lichsu', ['ddh_id' => $ds_ddh->ddh_id]) }}" class="site-btn mt-2">Xem chi tiết</a> </center>
                    </div>
                </div>
           </div>
        @endforeach
       </div>
    </div>
</section>
<!-- History Section End -->


@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')

@endsection
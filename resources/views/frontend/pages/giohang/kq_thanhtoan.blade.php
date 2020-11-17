{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.master` --}}
@extends('frontend.layouts.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.master` --}}
@section('title')
A S H I O N
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.master` --}}
@section('custom-css')
<style>
    .section{
        padding-top: 75px;
        padding-bottom: 120px;
    }
    .section .container{
        /* background: pink;  */
        height: 400px;
    }
    .section .container .row{
        padding-bottom: 148px;
        /* background: blue; */
    }
    .left{
        padding-top: 7px;
        padding-right: 85px;
    }
    .mtext-111{
        font-family: 'Cormorant', serif;
        font-size: 27px;
        line-height: 1.2;
        font-weight: bold;
    }
    .cl2 {
        color: #333;
    }
    .cl6 {
        color: #888;
    }
    .p-b-16{
        padding-bottom: 16px;
    }
    .p-b-26{
        padding-bottom: 26px;
    }
    .how-bor2,
    .how-bor1 {
        position: relative;
        z-index: 1;
    }

    .how-bor2::before,
    .how-bor1::before {
        content: "";
        display: block;
        position: absolute;
        z-index: -1;
        width: 100%;
        height: 100%;
        border: 3px solid #ccc;
    }

    .how-bor1::before {
        bottom: -21px;
        left: -21px;
    }

    .hov-img0 {
        display: block;
        overflow: hidden;
    }

    .hov-img0 img{
        width: 100%;
        -webkit-transition: transform 0.9s ease;
        -o-transition: transform 0.9s ease;
        -moz-transition: transform 0.9s ease;
        transition: transform 0.9s ease;
    }

    .hov-img0:hover img {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1);
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
                    <span>Đặt hàng thành công</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Content page -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-8">
                <div class="left">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Đặt hàng hoàn tất
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                        Chúng tôi đã gởi email xác nhận đơn hàng cho Quý khách. Quý khách vui vòng kiểm tra hộp thư. Xin cám ơn Quý khách đã tin tưởng sản phẩm của chúng tôi.
                    </p>

                    <p class="stext-113 cl6 p-b-26">
                        Nếu cần hỗ trợ, vui lòng gọi đến đường dây nóng của chúng tôi để được hỗ trợ khi cần thiết.
                        <br>Điện thoại: 0916-990-092
                    </p>

                    <h3>
                        
                    </h3>
                    <p>

                    </p>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <div class="hov-img0">
                        <img src="{{ asset('img/lookbook/lookbook4.jpg') }}" alt="IMG" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')

@endsection
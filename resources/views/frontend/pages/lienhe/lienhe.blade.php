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
                    <a href="{{ route('frontend.home') }}"><i class="fa fa-home"></i> Trang chủ</a>
                    <span>Liên hệ</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__content">
                    <div class="contact__address">
                        <h5>Thông tin liên hệ</h5>
                        <ul>
                            <li>
                                <h6><i class="fa fa-map-marker"></i> Địa chỉ</h6>
                                <p>51 Nguyễn Việt Hồng, An Lạc, Ninh Kiều, Cần Thơ </p>
                            </li>
                            <li>
                                <h6><i class="fa fa-phone"></i> Số điện thoại</h6>
                                <p><span>1900 633 501 - 1</span><span>1900 633 501 - 2</span></p>
                            </li>
                            <li>
                                <h6><i class="fa fa-envelope"></i> Email</h6>
                                <p>tranlenhatminh97@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="contact__form">
                        <h5>GỬI LỜI NHẮN</h5>
                        @if(Session::has('kh_id'))
                            <form action="{{ route('frontend.post_lienhe') }}" method="post"> 
                            {{ csrf_field() }}
                                <input type="text" name="kh_taikhoan" value="{{ Session::get('kh_taikhoan') }}" placeholder="Tài khoản khách hàng" readonly>
                                <input type="text" name="kh_email" value="{{ Session::get('kh_email') }}" placeholder="Email khách hàng" readonly>
                                <textarea name="message" placeholder="Lời nhắn"></textarea>
                                <button type="submit" class="site-btn">Gửi lời nhắn</button>
                            </form>
                        @else
                            <form action="{{ route('frontend.post_lienhe') }}" method="post">
                            {{ csrf_field() }}
                                <!-- <p style="color: red;"><i>*Quý khách vui lòng đăng nhập trước khi gửi liên hệ</i></p> -->
                                <!-- <input type="text" name="kh_taikhoan" placeholder="Tên khách hàng"> -->
                                <input type="text" name="kh_email" placeholder="Email khách hàng">
                                <textarea name="message" placeholder="Lời nhắn"></textarea>
                                <button type="submit" class="site-btn">Gửi lời nhắn</button>
                            </form>
                        @endif
                    </div>
                    <br>
                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info', 'dark'] as $msg)
                            @if(Session::has('alert-' . $msg))
                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#"
                                    class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            @endif
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.823377586331!2d105.77734171428223!3d10.031429375245953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0898ecfa45f37%3A0xf3c22c993cac6bda!2sTotoshop!5e0!3m2!1svi!2s!4v1587528395636!5m2!1svi!2s"
                        height="700" style="border:0" allowfullscreen="">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection
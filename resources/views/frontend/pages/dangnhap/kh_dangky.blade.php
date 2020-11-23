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
                    <span>Đăng ký</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Register Section Begin -->
<div class="container">
    <div class="content mt-5">
        <h3><center>ĐĂNG KÝ</center></h3>
        <form action="{{ route('frontend.dangky') }}" method="post" style="margin: 20px auto; width: 450px; border: 1px solid #ccc; padding: 30px;">
            {{ csrf_field() }}
            
            @if(Session::has('thanhcong'))
                <div class= "alert alert-success">{{ Session::get('thanhcong') }}</div>        
            @endif

            <div class="form-group">
                <label for="kh_taikhoan">Tài khoản</label>
                <input type="text" class="form-control" id="kh_taikhoan" name="kh_taikhoan" value="{{ old('kh_taikhoan') }}">
                <!-- "old" để lấy ra input cũ từ view, Nếu không tìm thấy input cũ thì sẽ trả về null. -->
                @if($errors->has("kh_taikhoan"))
                    <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                        {{$errors->first("kh_taikhoan")}}
                    </div>                 
                @endif
            </div>

            <div class="form-group">
                <label for="kh_matkhau">Mật khẩu</label>
                <input type="password" class="form-control" id="kh_matkhau" name="kh_matkhau" value="{{ old('kh_matkhau') }}">
                @if($errors->has("kh_matkhau"))
                    <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                        {{$errors->first("kh_matkhau")}}
                    </div>                 
                @endif
            </div>

            <div class="form-group">
                <label for="re_kh_matkhau">Nhập lại mật khẩu</label>
                <input type="password" class="form-control" id="re_kh_matkhau" name="re_kh_matkhau" value="{{ old('re_kh_matkhau') }}">
                @if($errors->has("re_kh_matkhau"))
                    <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                        {{$errors->first("re_kh_matkhau")}}
                    </div>                 
                @endif
            </div>

            <div class="form-group">
                <label for="kh_hoten">Họ tên</label>
                <input type="text" class="form-control" id="kh_hoten" name="kh_hoten" value="{{ old('kh_hoten') }}">
                @if($errors->has("kh_hoten"))
                    <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                        {{$errors->first("kh_hoten")}}
                    </div>                 
                @endif
            </div>

            <div class="form-group">
                <label for="kh_email">Email</label>
                <input type="text" class="form-control" id="kh_email" name="kh_email" value="{{ old('kh_email') }}">
                @if($errors->has("kh_email"))
                    <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                        {{$errors->first("kh_email")}}
                    </div>                 
                @endif
            </div>

            <div class="form-group">
                <label for="kh_sdt">Số điện thoại</label>
                <input type="text" class="form-control" id="kh_sdt" name="kh_sdt" value="{{ old('kh_sdt') }}">
                @if($errors->has("kh_sdt"))
                    <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                        {{$errors->first("kh_sdt")}}
                    </div>                 
                @endif
            </div>
            
            <input type="hidden" class="form-control" id="kh_trangthai" name="kh_trangthai" value="1">
            
            <br>
            <button type="submit" class="btn btn-outline-danger">Đăng ký</button>&nbsp;&nbsp;
        </form>
    </div>
</div>
<br><br>
<!-- Register Form Section End -->



@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection
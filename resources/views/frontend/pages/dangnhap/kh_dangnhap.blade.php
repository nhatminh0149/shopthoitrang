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
                    <span>Đăng nhập</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Register Section Begin -->
<section class="register">
    <div class="container" >
        <div class="content mt-5">
            <h3><center>ĐĂNG NHẬP</center></h3>
            <form action="{{ route('frontend.dangnhap') }}" method="post" style="margin: 20px auto; width: 400px; border: 1px solid #ccc; padding: 30px;">
                {{ csrf_field() }}
                
                @if(Session::has('flag'))
                <div class="alert alert-{{  Session::get('flag') }}"> {{ Session::get('message') }} </div>
                @endif

                <div class="form-group">
                    <label for="kh_email">Email: </label>
                    <input type="text" class="form-control" id="kh_email" name="kh_email" value="{{ old('kh_email') }}">
                    <!-- "old" để lấy ra input cũ từ view, Nếu không tìm thấy input cũ thì sẽ trả về null. -->
                    @if($errors->has("kh_email"))
                        <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                            {{$errors->first("kh_email")}}
                        </div>                 
                    @endif
                </div>

                <div class="form-group">
                    <label for="kh_matkhau">Mật khẩu: </label>
                    <input type="password" class="form-control" id="kh_matkhau" name="kh_matkhau" value="{{ old('kh_matkhau') }}">
                    @if($errors->has("kh_matkhau"))
                        <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                            {{$errors->first("kh_matkhau")}}
                        </div>                 
                    @endif
                </div>
                
                <br>
                <button type="submit" class="btn btn-outline-danger">Đăng nhập</button>&nbsp;&nbsp;
                <a href="" class="btn btn-outline-success">Đăng ký</a>
            </form>
        </div>
    </div>
</section>
<br><br>
<!-- Register Form Section End -->




@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection
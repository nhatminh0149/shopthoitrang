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
            <div class="contact__form">
                <h5 style="font-size: 25px;"><center>ĐĂNG NHẬP</center></h5>
                <form action="{{ route('frontend.dangnhap') }}" method="post" style="margin: 20px auto; width: 400px; border: 1px solid #ccc; padding: 30px; border-radius: 10px; box-shadow: 0px 25px 42px rgba(0, 0, 0, 0.2);">
                    {{ csrf_field() }}
                    
                    @if(Session::has('flag'))
                    <div class="alert alert-{{  Session::get('flag') }}"> {{ Session::get('message') }} </div>
                    @endif

                    <div class="form-group" style="text-align: center;">
                        <label for="kh_email" >Email</label>
                        <input type="text" class="form-control" id="kh_email" name="kh_email" value="{{ old('kh_email') }}">
                        <!-- "old" để lấy ra input cũ từ view, Nếu không tìm thấy input cũ thì sẽ trả về null. -->
                        @if($errors->has("kh_email"))
                            <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                {{$errors->first("kh_email")}}
                            </div>                 
                        @endif
                    </div>

                    <div class="form-group" style="text-align: center;">
                        <label for="kh_matkhau">Mật khẩu </label>
                        <input type="password" class="form-control" id="kh_matkhau" name="kh_matkhau" value="{{ old('kh_matkhau') }}">
                        <img src="{{ asset('img/eyes/eye4.png') }}" alt="" width="20px" height="23px" style="float: right; cursor: pointer; margin-top: -55px; margin-right: 10px; color: #ccc;" onclick="show()">
                        @if($errors->has("kh_matkhau"))
                            <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                {{$errors->first("kh_matkhau")}}
                            </div>                 
                        @endif
                    </div>
                    
                    <br>
                    <button type="submit" class="site-btn">Đăng nhập</button>&nbsp;&nbsp;
                    <a href="{{ route('frontend.dangky') }}" class="site-btn" style="float: right;">Đăng ký</a>
                </form>
            </div>
        </div>
    </div>
</section>
<br><br>
<!-- Register Form Section End -->




@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
<script type="text/javascript">
    isBool = true;
    function show(){
        if(isBool){
            document.getElementById("kh_matkhau").setAttribute('type','text');
            isBool = false;
        }else{
            document.getElementById("kh_matkhau").setAttribute('type','password');
            isBool = true;
        }
    }
</script>
@endsection
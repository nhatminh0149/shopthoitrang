{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.master` --}}
@extends('frontend.layouts.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.master` --}}
@section('title')
A S H I O N
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.master` --}}
@section('custom-css')
<style>
    input[type=submit] {
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
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
                    <span>Giỏ hàng</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Cart Section Begin -->
<section class="shop-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info', 'dark'] as $msg)
                        @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                    @endforeach
                </div>
                <div class="shop__cart__table">
                    <?php
                        $content = Cart::content();
                        //$total=0;
                        // echo '<pre>';
                        // print_r($content);
                        // echo '</pre>';
                    ?>
                    <table>
                        <thead>
                            <tr>
                                <th width="120px;">Sản phẩm</th>
                                <th width="100px;">Màu</th>
                                <th width="100px;">Size</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th width="180px;">Thành tiền</th>
                                <th width="80px;"></th>
                                <th width="80px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!$content->isEmpty())
                                @if(Session::get('cart')==true)
                                    @foreach($content as $content)
                                    <tr>
                                        <td class="cart__product__item">
                                            <img src="{{ asset('storage/photos/' . $content->options->image) }}" alt="" width="60px" height="90px">
                                            <div class="cart__product__item__title">
                                                <h6>{{ $content->name }}</h6>
                                            </div>
                                        </td>

                                        <form action="{{ route('frontend.capnhatsoluongsptronggiohang') }}" method="post" >
                                            {{ csrf_field() }}
                                            <td><input style=" border:0 none; width: 100px;" type="text" value="{{ $content->options->color }}" name="cart_color" readonly></td>
                                            <td><input style=" border:0 none; width: 100px;" type="text" value="{{ $content->options->size }}" name="cart_size" readonly></td>
                                            <!-- <td>{{ $content->options->color }}</td> -->
                                            <!-- <td>{{ $content->options->size }}</td> -->
                                            <td class="cart__price">{{ number_format($content->price, 0, ',' , ',') }} đ</td>
                                        
                                            <td class="cart__quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="{{ $content->qty }}" name="cart_quantity">
                                                </div>
                                            </td>
                                            <input type="hidden" value="{{ $content->rowId }}" name="rowId_cart" class="form-control">
                                            <input type="hidden" value="{{ $content->id }}" name="Id_cart" class="form-control">
                                            <td class="cart__total">{{ number_format($content->price * $content->qty, 0, ',' , ',') }} đ</td>
                                            <td class="cart__update">
                                                <input type="submit" name="update_qty" class="btn btn-outline-danger btn-sm" value="Cập nhật">
                                            </td>
                                        </form>

                                        <td class="cart__close">
                                            <!-- <a href=""><span class="icon_loading"></span></a> -->
                                            <a href="{{ route('frontend.xoasptronggiohang', ['rowId' => $content->rowId]) }}"><span class="icon_close"></span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="7">
                                        <center>
                                            @php
                                            echo 'Vui lòng thêm sản phẩm vào giỏ hàng';
                                            @endphp
                                        </center>
                                    </td>
                                </tr>
                                @endif
                            @else
                            <tr>
                                <td colspan="7">
                                    <center>
                                        @php
                                        echo 'Vui lòng thêm sản phẩm vào giỏ hàng';
                                        @endphp
                                    </center>
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="cart__btn">
                    <a href="{{ route('frontend.sanpham') }}"><i class="fa fa-reply"
                            aria-hidden="true"></i>&nbsp;&nbsp;Tiếp tục mua sắm</a>
                </div>
            </div>
            <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="cart__btn update__btn">
                    <a href="#"><span class="icon_loading"></span> Update cart</a>
                </div>
            </div> -->
        </div>
        <div class="row">
            <div class="col-lg-6">
                <!-- <div class="discount__content">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" placeholder="Enter your coupon code">
                        <button type="submit" class="site-btn">Apply</button>
                    </form>
                </div> -->
            </div>
            <div class="col-lg-4 offset-lg-2">
                <div class="cart__total__procced">
                    <h6>Tổng giỏ hàng</h6>
                    <ul>
                        <li>Tạm tính: <span>{{ number_format(\Cart::subtotal(2,'.',''), 0, ',' , ',') }} đ</span></li>
                        <!-- <li>Thành tiền: <span>{{ number_format(\Cart::subtotal(2,'.',''), 0, ',' , ',') }} đ</span></li> -->
                    </ul>
                    
                    @if(Session::has('kh_taikhoan') && Session::has('kh_matkhau') && (!Cart::content()->isEmpty()))
                        <a href="{{ route('frontend.thutucthanhtoan') }}" class="primary-btn">Tiến hành đặt hàng</a>
                    @elseif(Cart::content()->isEmpty())
                        @php
                            echo 'Không có sản phẩm để đặt hàng!';
                        @endphp
                    @else
                        <a href="{{ route('frontend.dangnhap') }}" class="primary-btn">Tiến hành đặt hàng</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Cart Section End -->

@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection
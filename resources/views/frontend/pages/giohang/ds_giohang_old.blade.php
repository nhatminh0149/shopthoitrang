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
                <div class="shop__cart__table">
                    @if(count($cart))
                    <table>
                        <thead>
                            <tr>
                                <th width="150px;">Sản phẩm</th>
                                <th width="100px;">Màu</th>
                                <th width="100px;">Size</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th width="180px;">Thành tiền</th>
                                <th width="120px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart as $cart)
                            <tr>
                                <td class="cart__product__item">
                                    <img src="{{ asset('storage/photos/' . $cart->options->image) }}" alt="" width="60px" height="90px">
                                    <div class="cart__product__item__title">
                                        <h6>{{$cart->name}}</h6>
                                    </div>
                                </td>
                                <td>{{$cart->options->color}}</td>
                                <td>{{$cart->options->size}}</td>
                                <td class="cart__price">{{ number_format($cart->price, 0, ',' , ',') }} đ</td>
                                <td class="cart__quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="{{$cart->qty}}">
                                    </div>
                                </td>
                                <td class="cart__total">{{ number_format($cart->price * $cart->qty, 0, ',' , ',') }} đ</td>
                                <td class="cart__close">
                                    <span class="icon_loading"></span>
                                    <span class="icon_close"></span>
                                </td>
                            </tr>
                            @endforeach
                            @else
                                <p>You have no items in the shopping cart</p>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="cart__btn">
                    <a href="{{ route('frontend.sanpham') }}"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp;&nbsp;Tiếp tục mua sắm</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="cart__btn update__btn">
                    <a href="#"><span class="icon_loading"></span> Update cart</a>
                </div>
            </div>
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
                        <li>Tạm tính: <span>$ 750.0</span></li>
                        <li>Thành tiền: <span>$ 750.0</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Tiến hành đặt hàng</a>
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
{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.master` --}}
@extends('frontend.layouts.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.master` --}}
@section('title')
A S H I O N
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.master` --}}
@section('custom-css')
<style>


</style>
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layouts.master` --}}
@section('content')
<!-- Categories Section Begin -->
<!-- <section class="categories">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="categories__item categories__large__item set-bg"
                    data-setbg="{{ asset('ashion/img/categories/category-1.jpg') }}">
                    <div class="categories__text">
                        <h1>Women’s fashion</h1>
                        <p>Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt labore
                            edolore magna aliquapendisse ultrices gravida.</p>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg"
                            data-setbg="{{ asset('ashion/img/categories/category-2.jpg') }}">
                            <div class="categories__text">
                                <h4>Men’s fashion</h4>
                                <p>358 items</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg"
                            data-setbg="{{ asset('ashion/img/categories/category-3.jpg') }}">
                            <div class="categories__text">
                                <h4>Kid’s fashion</h4>
                                <p>273 items</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg"
                            data-setbg="{{ asset('ashion/img/categories/category-4.jpg') }}">
                            <div class="categories__text">
                                <h4>Cosmetics</h4>
                                <p>159 items</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg"
                            data-setbg="{{ asset('ashion/img/categories/category-5.jpg') }}">
                            <div class="categories__text">
                                <h4>Accessories</h4>
                                <p>792 items</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Categories Section End -->
<!-- Banner Section Begin -->
<!-- <section class="banner set-bg" data-setbg="{{ asset('img/banner/banner0.jpg') }}" height="450px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="banner__slider owl-carousel">
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>The ToTo Collection</span>
                            <h1>The Project Jacket</h1>
                            <a href="{{ route('frontend.sanpham') }}">Shop now</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>The ToTo Collection</span>
                            <h1>The Project Jacket</h1>
                            <a href="{{ route('frontend.sanpham') }}">Shop now</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>The ToTo Collection</span>
                            <h1>The Project Jacket</h1>
                            <a href="{{ route('frontend.sanpham') }}">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Banner Section End -->

<!-- Banner Section -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('img/banner/banner11.jpg') }}" alt="First slide" style="width: 100%; height: 620px;">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/banner/banner9.jpg') }}" alt="Second slide" style="width: 100%; height: 620px;">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/banner/banner13.jpg') }}" alt="Third slide" style="width: 100%; height: 620px;">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Banner Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4><marquee>Sản phẩm bán chạy</marquee></h4>
                    <!-- <h4>Sản phẩm bán chạy</h4> -->
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".men">Đồ nam</li>
                    <li data-filter=".women">Đồ nữ</li>
                    <li data-filter=".couple">Đồ đôi</li>
                </ul>
            </div>
        </div>

        <?php
            //Lấy ngày hiện tại của hệ thống
            $today = date("Y-m-d");
        ?>

        <div class="row property__gallery">

            @foreach($loc_hinh as $loc_hinh)
            <div class="col-lg-3 col-md-4 col-sm-6 mix men">
                @if($loc_hinh->km_giatriphantram == 0)
                <div class="product__item" style="border: solid 1px whitesmoke;">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{ asset('storage/photos/' . $loc_hinh->ha_ten) }}">
                        <ul class="product__hover">
                            <li><a href="{{ asset('storage/photos/' . $loc_hinh->ha_ten) }}" class="image-popup"><span
                                        class="arrow_expand"></span></a></li>
                           
                            <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh->sp_id]) }}"><span
                                        class="icon_search"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a
                                href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh->sp_id]) }}">{{ $loc_hinh->sp_ten }}</a>
                        </h6>
                        <div class="product__price mt-1">{{ number_format($loc_hinh->sp_giaban, 0, ',' , ',') }} đ</div>
                    </div>
                </div>
                @elseif($loc_hinh->km_giatriphantram != 0 && $loc_hinh->km_ngayketthuc < $today)
                <div class="product__item" style="border: solid 1px whitesmoke;">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{ asset('storage/photos/' . $loc_hinh->ha_ten) }}">
                        <ul class="product__hover">
                            <li><a href="{{ asset('storage/photos/' . $loc_hinh->ha_ten) }}" class="image-popup"><span
                                        class="arrow_expand"></span></a></li>
                           
                            <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh->sp_id]) }}"><span
                                        class="icon_search"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a
                                href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh->sp_id]) }}">{{ $loc_hinh->sp_ten }}</a>
                        </h6>
                        <div class="product__price mt-1">{{ number_format($loc_hinh->sp_giaban, 0, ',' , ',') }} đ</div>
                    </div>
                </div>
                @elseif($loc_hinh->km_giatriphantram != 0 && $loc_hinh->km_ngayapdung > $today)
                <div class="product__item" style="border: solid 1px whitesmoke;">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{ asset('storage/photos/' . $loc_hinh->ha_ten) }}">
                        <ul class="product__hover">
                            <li><a href="{{ asset('storage/photos/' . $loc_hinh->ha_ten) }}" class="image-popup"><span
                                        class="arrow_expand"></span></a></li>
                           
                            <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh->sp_id]) }}"><span
                                        class="icon_search"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a
                                href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh->sp_id]) }}">{{ $loc_hinh->sp_ten }}</a>
                        </h6>
                        <div class="product__price mt-1">{{ number_format($loc_hinh->sp_giaban, 0, ',' , ',') }} đ</div>
                    </div>
                </div>
                @elseif($loc_hinh->km_giatriphantram != 0  && $loc_hinh->km_ngayapdung <= $today && $loc_hinh->km_ngayketthuc >= $today)
                <div class="product__item sale" style="border: solid 1px whitesmoke;">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{ asset('storage/photos/' . $loc_hinh->ha_ten) }}">
                        <div class="label">Sale</div>
                        <ul class="product__hover">
                            <li><a href="{{ asset('storage/photos/' . $loc_hinh->ha_ten) }}" class="image-popup"><span
                                        class="arrow_expand"></span></a></li>
                           
                            <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh->sp_id]) }}"><span
                                        class="icon_search"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a
                                href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh->sp_id]) }}">{{ $loc_hinh->sp_ten }}</a>
                        </h6>
                        <div class="product__price mt-1">
                            {{ number_format($loc_hinh->sp_giaban - ($loc_hinh->sp_giaban * $loc_hinh->km_giatriphantram/100),0, ',' , ',') }}
                            đ&nbsp;<span>{{ number_format($loc_hinh->sp_giaban, 0, ',' , ',') }} đ</span></div>
                    </div>
                </div>
                @endif
            </div>
            @endforeach

            @foreach($loc_hinh1 as $loc_hinh1)
            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                @if($loc_hinh1->km_giatriphantram == 0)
                <div class="product__item" style="border: solid 1px whitesmoke;">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{ asset('storage/photos/' . $loc_hinh1->ha_ten) }}">
                        <ul class="product__hover">
                            <li><a href="{{ asset('storage/photos/' . $loc_hinh1->ha_ten) }}" class="image-popup"><span
                                        class="arrow_expand"></span></a></li>
                           
                            <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh1->sp_id]) }}"><span
                                        class="icon_search"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a
                                href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh1->sp_id]) }}">{{ $loc_hinh1->sp_ten }}</a>
                        </h6>
                      
                        <div class="product__price mt-1">{{ number_format($loc_hinh1->sp_giaban, 0, ',' , ',') }} đ</div>
                    </div>
                </div>
                @elseif($loc_hinh1->km_giatriphantram != 0 && $loc_hinh1->km_ngayketthuc < $today)
                <div class="product__item" style="border: solid 1px whitesmoke;">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{ asset('storage/photos/' . $loc_hinh1->ha_ten) }}">
                        <ul class="product__hover">
                            <li><a href="{{ asset('storage/photos/' . $loc_hinh1->ha_ten) }}" class="image-popup"><span
                                        class="arrow_expand"></span></a></li>
                           
                            <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh1->sp_id]) }}"><span
                                        class="icon_search"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a
                                href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh1->sp_id]) }}">{{ $loc_hinh1->sp_ten }}</a>
                        </h6>
                      
                        <div class="product__price mt-1">{{ number_format($loc_hinh1->sp_giaban, 0, ',' , ',') }} đ</div>
                    </div>
                </div>
                @elseif($loc_hinh1->km_giatriphantram != 0 && $loc_hinh1->km_ngayapdung > $today)
                <div class="product__item" style="border: solid 1px whitesmoke;">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{ asset('storage/photos/' . $loc_hinh1->ha_ten) }}">
                        <ul class="product__hover">
                            <li><a href="{{ asset('storage/photos/' . $loc_hinh1->ha_ten) }}" class="image-popup"><span
                                        class="arrow_expand"></span></a></li>
                           
                            <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh1->sp_id]) }}"><span
                                        class="icon_search"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a
                                href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh1->sp_id]) }}">{{ $loc_hinh1->sp_ten }}</a>
                        </h6>
                      
                        <div class="product__price mt-1">{{ number_format($loc_hinh1->sp_giaban, 0, ',' , ',') }} đ</div>
                    </div>
                </div>
                @elseif($loc_hinh1->km_giatriphantram != 0  && $loc_hinh1->km_ngayapdung <= $today && $loc_hinh1->km_ngayketthuc >= $today)
                <div class="product__item sale" style="border: solid 1px whitesmoke;">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{ asset('storage/photos/' . $loc_hinh1->ha_ten) }}">
                        <div class="label">Sale</div>
                        <ul class="product__hover">
                            <li><a href="{{ asset('storage/photos/' . $loc_hinh1->ha_ten) }}" class="image-popup"><span
                                        class="arrow_expand"></span></a></li>
                           
                            <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh1->sp_id]) }}"><span
                                        class="icon_search"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a
                                href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh1->sp_id]) }}">{{ $loc_hinh1->sp_ten }}</a>
                        </h6>
                        
                        <div class="product__price mt-1">
                            {{ number_format($loc_hinh1->sp_giaban - ($loc_hinh1->sp_giaban * $loc_hinh1->km_giatriphantram/100),0, ',' , ',') }}
                            đ&nbsp;<span>{{ number_format($loc_hinh1->sp_giaban, 0, ',' , ',') }} đ</span></div>
                    </div>
                </div>
                @endif
            </div>
            @endforeach

            @foreach($loc_hinh2 as $loc_hinh2)
            <div class="col-lg-3 col-md-4 col-sm-6 mix couple">
                @if($loc_hinh2->km_giatriphantram == 0)
                <div class="product__item" style="border: solid 1px whitesmoke;">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{ asset('storage/photos/' . $loc_hinh2->ha_ten) }}">
                        <ul class="product__hover">
                            <li>
                                <a href="{{ asset('storage/photos/' . $loc_hinh->ha_ten) }}" class="image-popup">
                                    <span class="arrow_expand"></span>
                                </a>
                            </li>
                            <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh2->sp_id]) }}"><span
                                        class="icon_search"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a
                                href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh2->sp_id]) }}">{{ $loc_hinh2->sp_ten }}</a>
                        </h6>
                        <div class="product__price mt-1">{{ number_format($loc_hinh2->sp_giaban, 0, ',' , ',') }} đ</div>
                    </div>
                </div>
                @elseif($loc_hinh2->km_giatriphantram != 0 && $loc_hinh2->km_ngayketthuc < $today)
                <div class="product__item" style="border: solid 1px whitesmoke;">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{ asset('storage/photos/' . $loc_hinh2->ha_ten) }}">
                        <ul class="product__hover">
                            <li>
                                <a href="{{ asset('storage/photos/' . $loc_hinh->ha_ten) }}" class="image-popup">
                                    <span class="arrow_expand"></span>
                                </a>
                            </li>
                            <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh2->sp_id]) }}"><span
                                        class="icon_search"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a
                                href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh2->sp_id]) }}">{{ $loc_hinh2->sp_ten }}</a>
                        </h6>
                        <div class="product__price mt-1">{{ number_format($loc_hinh2->sp_giaban, 0, ',' , ',') }} đ</div>
                    </div>
                </div>
                @elseif($loc_hinh2->km_giatriphantram != 0 && $loc_hinh2->km_ngayapdung > $today)
                <div class="product__item" style="border: solid 1px whitesmoke;">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{ asset('storage/photos/' . $loc_hinh2->ha_ten) }}">
                        <ul class="product__hover">
                            <li>
                                <a href="{{ asset('storage/photos/' . $loc_hinh->ha_ten) }}" class="image-popup">
                                    <span class="arrow_expand"></span>
                                </a>
                            </li>
                            <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh2->sp_id]) }}"><span
                                        class="icon_search"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a
                                href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh2->sp_id]) }}">{{ $loc_hinh2->sp_ten }}</a>
                        </h6>
                        <div class="product__price mt-1">{{ number_format($loc_hinh2->sp_giaban, 0, ',' , ',') }} đ</div>
                    </div>
                </div>
                @elseif($loc_hinh2->km_giatriphantram != 0  && $loc_hinh2->km_ngayapdung <= $today && $loc_hinh2->km_ngayketthuc >= $today)
                <div class="product__item sale" style="border: solid 1px whitesmoke;">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{ asset('storage/photos/' . $loc_hinh2->ha_ten) }}">
                        <div class="label">Sale</div>
                        <ul class="product__hover">
                            <li>
                                <a href="{{ asset('storage/photos/' . $loc_hinh->ha_ten) }}" class="image-popup">
                                    <span class="arrow_expand"></span>
                                </a>
                            </li>
                            <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh2->sp_id]) }}"><span
                                        class="icon_search"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a
                                href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $loc_hinh2->sp_id]) }}">{{ $loc_hinh2->sp_ten }}</a>
                        </h6>
                        <div class="product__price mt-1">
                            {{ number_format($loc_hinh2->sp_giaban - ($loc_hinh2->sp_giaban * $loc_hinh2->km_giatriphantram/100),0, ',' , ',') }}
                            đ&nbsp;<span>{{ number_format($loc_hinh2->sp_giaban, 0, ',' , ',') }} đ</span></div>
                    </div>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Discount Section Begin -->
<section class="discount">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="discount__pic">
                    <img src="{{ asset('img/lookbook/lookbook5.jpg') }}" alt="lookbook5" width="360px" height="240px">
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="discount__text">
                    <div class="discount__text__title">
                        <span>Discount</span>
                        <h2>Spring 2020</h2>
                        <h5><span>Sale</span> 50%</h5>
                    </div>
                    <div class="discount__countdown" id="countdown-time">
                        <div class="countdown__item">
                            <span>22</span>
                            <p>Days</p>
                        </div>
                        <div class="countdown__item">
                            <span>18</span>
                            <p>Hour</p>
                        </div>
                        <div class="countdown__item">
                            <span>46</span>
                            <p>Min</p>
                        </div>
                        <div class="countdown__item">
                            <span>05</span>
                            <p>Sec</p>
                        </div>
                    </div>
                    <a href="{{ route('frontend.sanpham') }}">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Discount Section End -->


<section class="trend spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="related__title">
                    <h5>SẢN PHẨM KHUYẾN MÃI</h5>
                </div>
            </div>
            @foreach($best_seller as $best_seller)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item sale" style="border: solid 1px whitesmoke;">
                        <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/photos/' . $best_seller->ha_ten) }}">
                            <div class="label">Sale</div>
                            <ul class="product__hover">
                                <li><a href="{{ asset('storage/photos/' . $best_seller->ha_ten) }}" class="image-popup"><span
                                            class="arrow_expand"></span></a></li>
                                
                                <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $best_seller->sp_id]) }}"><span class="icon_search"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $best_seller->sp_id]) }}">{{ $best_seller->sp_ten }}</a></h6>
                            <div class="product__price mt-1">{{ number_format($best_seller->sp_giaban - ($best_seller->sp_giaban * $best_seller->km_giatriphantram/100),0, ',' , ',') }} đ&nbsp;<span>{{ number_format($best_seller->sp_giaban, 0, ',' , ',') }} đ</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Trend Section End -->



<!-- Services Section Begin -->
<!-- <section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-car"></i>
                    <h6>Free Shipping</h6>
                    <p>For all oder over $99</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-money"></i>
                    <h6>Money Back Guarantee</h6>
                    <p>If good have Problems</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-support"></i>
                    <h6>Online Support 24/7</h6>
                    <p>Dedicated support</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-headphones"></i>
                    <h6>Payment Secure</h6>
                    <p>100% secure payment</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Services Section End -->

@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection
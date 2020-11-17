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
                    <a href="{{ route('frontend.home') }}"><i class="fa fa-home"></i>Trang chủ</a>
                    <span>Đồ nữ</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Section Begin -->
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="shop__sidebar">
                    <div class="sidebar__categories">
                        <div class="section-title">
                            <h4>Danh mục</h4>
                        </div>
                        <div class="categories__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading active">
                                        <a data-toggle="collapse" data-target="#collapseOne" >Đồ nam</a>
                                    </div>
                                    <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li><a href="{{ route('frontend.aothunnam') }}">Áo Thun Nam</a></li>
                                                <li><a href="{{ route('frontend.aosominam') }}">Áo Sơ Mi Nam</a></li>
                                                <li><a href="{{ route('frontend.quanjeannam') }}">Quần Jean Nam</a></li>
                                                <li><a href="{{ route('frontend.quankakinam') }}">Quần Kaki Nam</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Đồ nữ</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li><a href="{{ route('frontend.aothunnu') }}">Áo Thun Nữ</a></li>
                                                <li><a href="{{ route('frontend.aosominu') }}">Áo Sơ Mi Nữ</a></li>
                                                <li><a href="{{ route('frontend.quanshortnu') }}">Quần Short Nữ</a></li>
                                                <li><a href="{{ route('frontend.quanjeannu') }}">Quần Jean Nữ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Đồ đôi</a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li><a href="{{ route('frontend.aothundoi') }}">Áo Thun Đôi</a></li>
                                                <li><a href="{{ route('frontend.aokhoacdoi') }}">Áo Khoác Đôi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__filter">
                        <div class="section-title">
                            <h4>LỌC GIÁ</h4>
                        </div>
                        <div class="filter-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="33" data-max="99"></div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <p>Giá:</p>
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
                        <a href="#">LỌC</a>
                    </div>
                    <div class="sidebar__sizes">
                        <div class="section-title">
                            <h4>Lọc size</h4>
                        </div>
                        <div class="size__list">
                            <label for="s">
                                S
                                <input type="checkbox" id="s">
                                <span class="checkmark"></span>
                            </label>
                            <label for="m">
                                M
                                <input type="checkbox" id="m">
                                <span class="checkmark"></span>
                            </label>
                            <label for="l">
                                L
                                <input type="checkbox" id="l">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="sidebar__color">
                        <div class="section-title">
                            <h4>Lọc màu</h4>
                        </div>
                        <div class="size__list color__list">
                            <label for="black">
                                Đen
                                <input type="checkbox" id="black">
                                <span class="checkmark"></span>
                            </label>
                            <label for="whites">
                                Trắng
                                <input type="checkbox" id="whites">
                                <span class="checkmark"></span>
                            </label>
                            <label for="blues">
                                Xanh
                                <input type="checkbox" id="blues">
                                <span class="checkmark"></span>
                            </label>
                            <label for="reds">
                                Đỏ
                                <input type="checkbox" id="reds">
                                <span class="checkmark"></span>
                            </label>
                            <label for="yellows">
                                Vàng
                                <input type="checkbox" id="yellows">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    
                    @foreach($ds_donu as $dsdnu)
                    <div class="col-lg-4 col-md-6">
                        @if($dsdnu->km_giatriphantram == 0)
                        <div class="product__item" style="border: solid 1px whitesmoke;">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/photos/' . $dsdnu->ha_ten) }}">
                                <ul class="product__hover">
                                    <li><a href="{{ asset('storage/photos/' . $dsdnu->ha_ten) }}" class="image-popup"><span
                                                class="arrow_expand"></span></a></li>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $dsdnu->sp_id]) }}"><span class="icon_search"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $dsdnu->sp_id]) }}">{{ $dsdnu->sp_ten }}</a></h6>
                                <!-- <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div> -->
                                <div class="product__price mt-1">{{ number_format($dsdnu->giaban, 0, ',' , ',') }} đ</div>
                            </div>
                        </div>
                        @else
                        <div class="product__item sale" style="border: solid 1px whitesmoke;">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/photos/' . $dsdnu->ha_ten) }}">
                                <div class="label">Sale</div>    
                                <ul class="product__hover">
                                    <li><a href="{{ asset('storage/photos/' . $dsdnu->ha_ten) }}" class="image-popup"><span
                                                class="arrow_expand"></span></a></li>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $dsdnu->sp_id]) }}"><span class="icon_search"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $dsdnu->sp_id]) }}">{{ $dsdnu->sp_ten }}</a></h6>
                                <!-- <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div> -->
                                <div class="product__price mt-1">{{ number_format($dsdnu->giaban - ($dsdnu->giaban * $dsdnu->km_giatriphantram/100),0, ',' , ',') }} đ&nbsp;<span>{{ number_format($dsdnu->giaban, 0, ',' , ',') }} đ</span></div>
                            </div>
                        </div>
                        @endif
                    </div>
                    @endforeach
                    

                    <div class="col-lg-12 text-center">
                        <div class="pagination__option">
                           
                            <!-- <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"><i class="fa fa-angle-right"></i></a> -->
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection
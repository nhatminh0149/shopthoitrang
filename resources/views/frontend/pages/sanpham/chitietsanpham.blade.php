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
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{ route('frontend.home') }}"><i class="fa fa-home"></i>Trang chủ</a>
                    <a href="{{ route('frontend.sanpham') }}">Sản phẩm</a>
                    <span>Chi tiết sản phẩm {{ $ctsp[0]->sp_id }}</span>
                    <!-- <span>{{ $ctsp[0]->sp_ten }}</span> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__left product__thumb nice-scroll">
                        @foreach($hinhanh as $hinhanh)
                        <a class="pt" href="#{{ $hinhanh->ha_id }}" id="ha{{ $hinhanh->m_id }}-mau">
                            <img src="{{ asset('storage/photos/' . $hinhanh->ha_ten) }}" alt="">
                        </a>
                        @endforeach
                        <!-- <a class="pt active" href="#product-1">
                            <img src="img/product/details/product-1.jpg" alt="">
                        </a>
                        <a class="pt" href="#product-2">
                            <img src="img/product/details/product-2.jpg" alt="">
                        </a>
                        <a class="pt" href="#product-3">
                            <img src="img/product/details/product-3.jpg" alt="">
                        </a>
                        <a class="pt" href="#product-4">
                            <img src="img/product/details/product-4.jpg" alt="">
                        </a> -->
                    </div>

                    <!-- Hình ngay giữa -->
                    <div class="product__details__slider__content">
                        <div class="product__details__pic__slider owl-carousel">
                            @foreach($hinhanh1 as $ha)
                            <img data-hash="{{ $ha->ha_id }}" class="product__big__img"
                                src="{{ asset('storage/photos/' . $ha->ha_ten) }}" alt="">
                            @endforeach
                            <!-- <img data-hash="product-1" class="product__big__img" src="img/product/details/product-1.jpg"
                                alt="">
                            <img data-hash="product-2" class="product__big__img" src="img/product/details/product-2.jpg"
                                alt="">
                            <img data-hash="product-3" class="product__big__img" src="img/product/details/product-3.jpg"
                                alt="">
                            <img data-hash="product-4" class="product__big__img" src="img/product/details/product-4.jpg"
                                alt=""> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <form action="{{ route('frontend.themvaogiohang') }}" method="post">
                {{ csrf_field() }}
                    <div class="product__details__text">
                        <h3>{{ $ctsp[0]->sp_ten }} <span>Loại sản phẩm: {{ $ctsp[0]->lsp_ten }}</span></h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>( 138 reviews )</span>
                        </div>
                        <div class="product__details__price">
                            @if($ctsp[0]->km_giatriphantram == 0)
                                {{ number_format($ctsp[0]->giaban,0, ',' , ',') }} đ
                            @else
                                {{ number_format($ctsp[0]->giaban - ($ctsp[0]->giaban * $ctsp[0]->km_giatriphantram/100),0, ',' , ',') }}đ
                                <span>{{ number_format($ctsp[0]->giaban,0, ',' , ',') }} đ</span>
                            @endif
                        </div>
                        <p>{{ $ctsp[0]->sp_mota }}</p>
                       
                        <div class="product__details__widget">
                            <ul>
                                <li>
                                    <span>Màu sắc:</span>
                                    <div class="color__checkbox">
                                    @foreach($mau as $mau)


                                        @if($mau->m_ten == 'Đỏ')
                                        <label for="red" id="{{ $mau->m_id }}">
                                            <input type="radio" name="color__radio" id="{{ $mau->m_id }}-mau"
                                                value="{{ $mau->m_id }}" checked>
                                            <!-- <button class="btn btn-danger"
                                                style="height: 23px; margin-bottom: 5px; margin-right: 10px;"></button> -->
                                            <span class="checkmark"></span>
                                        </label>
                                        @elseif($mau->m_ten == 'Đen')
                                        <label for="black" id="{{ $mau->m_id }}">
                                            <input type="radio" name="color__radio" id="{{ $mau->m_id }}-mau"
                                                value="{{ $mau->m_id }}">
                                            <!-- <button class="btn btn-dark"
                                                style="height: 23px; margin-bottom: 5px; margin-right: 10px;"></button> -->
                                            <span class="checkmark black-bg"></span>
                                        </label>
                                        @elseif($mau->m_ten == 'Trắng')
                                        <label for="white" id="{{ $mau->m_id }}">
                                            <input type="radio" name="color__radio" id="{{ $mau->m_id }}-mau"
                                                value="{{ $mau->m_id }}">
                                            <!-- <button class="btn btn-default"
                                                style="height: 23px; margin-bottom: 5px; margin-right: 10px; border: solid 1px black;"></button> -->
                                            <span class="checkmark white-bg"></span>
                                        </label>
                                        @elseif($mau->m_ten == 'Xanh')
                                        <label for="blue" id="{{ $mau->m_id }}">
                                            <input type="radio" name="color__radio" id="{{ $mau->m_id }}-mau"
                                                value="{{ $mau->m_id }}">
                                            <!-- <button class="btn btn-primary"
                                                style="height: 23px; margin-bottom: 5px; margin-right: 10px;"></button> -->
                                            <span class="checkmark blue-bg"></span>
                                        </label>
                                        @elseif($mau->m_ten == 'Vàng')
                                        <label for="yellow" id="{{ $mau->m_id }}">
                                            <input type="radio" name="color__radio" id="{{ $mau->m_id }}-mau"
                                                value="{{ $mau->m_id }}">
                                            <!-- <button class="btn btn-warning"
                                                style="height: 23px; margin-bottom: 5px; margin-right: 10px;"></button> -->
                                            <span class="checkmark yellow-bg"></span>
                                        </label>
                                        @endif

                                    @endforeach
                                    @if($errors->has("color__radio"))
                                        <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                            {{$errors->first("color__radio")}}
                                        </div>                 
                                    @endif
                                    <!-- <label for="red">
                                            <input type="radio" name="color__radio" id="red" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label for="black">
                                            <input type="radio" name="color__radio" id="black">
                                            <span class="checkmark black-bg"></span>
                                        </label>
                                        <label for="white">
                                            <input type="radio" name="color__radio" id="white">
                                            <span class="checkmark grey-bg"></span>
                                        </label> -->
                                    </div>
                                </li>
                                <li>
                                    <span>Size:</span>
                                    <div class="size__btn">
                                        @foreach($size as $size)
                                        
                                            <label for=" {{ $size->size_ten }}-btn" id="{{ $size->size_id }}">
                                                <input type="radio" id="{{ $size->size_id }}-size" name="size" value="{{ $size->size_id }}">
                                                <strong>{{ $size->size_ten }}</strong>
                                            </label>
                                        @endforeach
                                        @if($errors->has("size"))
                                            <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                                {{$errors->first("size")}}
                                            </div>                 
                                        @endif
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <hr class="mt-4">
                        <div class="product__details__button mt-5">
                            <div class="quantity">
                                <span>Số lượng:</span>
                                <div class="pro-qty">
                                    <input type="text" value="1" name="qty" >
                                </div>
                            </div>
                            <input name="spid_hidden" type="hidden" value="{{ $ctsp[0]->sp_id }}" />
                            <!-- <a href="#" class="cart-btn"><span class="icon_cart_alt"></span>&nbsp; Thêm vào giỏ hàng</a> -->
                            <button type="submit" class="cart-btn">
                                <span class="icon_cart_alt"></span>
                                Thêm vào giỏ hàng
                            </button>
                            <ul>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            </ul>
                            
                        </div>
                        <div class="flash-message">
                            @foreach (['danger', 'warning', 'success', 'info', 'dark'] as $msg)
                                @if(Session::has('alert-' . $msg))
                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Specification</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Reviews ( 2 )</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <h6>Description</h6>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
                                quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
                                Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
                                voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
                                consequat massa quis enim.</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                quis, sem.</p>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <h6>Specification</h6>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
                                quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
                                Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
                                voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
                                consequat massa quis enim.</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                quis, sem.</p>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <h6>Reviews ( 2 )</h6>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
                                quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
                                Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
                                voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
                                consequat massa quis enim.</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                quis, sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="related__title">
                    <h5>RELATED PRODUCTS</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/related/rp-1.jpg">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="img/product/related/rp-1.jpg" class="image-popup"><span
                                        class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Buttons tweed blazer</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/related/rp-2.jpg">
                        <ul class="product__hover">
                            <li><a href="img/product/related/rp-2.jpg" class="image-popup"><span
                                        class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Flowy striped skirt</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">$ 49.0</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/related/rp-3.jpg">
                        <div class="label stockout">out of stock</div>
                        <ul class="product__hover">
                            <li><a href="img/product/related/rp-3.jpg" class="image-popup"><span
                                        class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Cotton T-Shirt</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/related/rp-4.jpg">
                        <ul class="product__hover">
                            <li><a href="img/product/related/rp-4.jpg" class="image-popup"><span
                                        class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Slim striped pocket shirt</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">$ 59.0</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details Section End -->
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
<script>
// $('input[type=radio][name=color__radio]').click(function() {
//     var id = this.value;
//     var id_ha = "ha".id;
//     // if (id == '1') {
//     //alert("Allot Thai Gayo Bhai");
//     alert(id);
//     //document.getElementByName("ha").setAttribute("class", "pt");
//     //document.getElementById("id_ha").setAttribute("class", "pt active");
//     // }
//     // else if (this.value == 'transfer') {
//     //     alert("Transfer Thai Gayo");
//     // }
// });

// $(document).on('click', '.mau', function() {
//     //var sub_sp_id=$('.sp_id').data('sub_sp_id');

//     var id = $(".mau").val();
//     alert(id);
//     //var ctpn_gianhap = $("#ctpn_gianhap").val();

//     //$('#ctpn_tt' + sub_sp_id).val(ctsp_soluong * ctpn_gianhap);
//     //sum_pnk();
// });

// $(document).on('change', '.mau', function() {
//     //var sub_sp_id=$('.sp_id').data('sub_sp_id');

//     var m_id = $(".mau").val();
//     alert(m_id);

// });
// $(document).ready(function() {
//     $(':radio[name="color__radio"]').click(function() {
//         var id = $(this).val();
//         var id_ha = "#ha"+id+"-mau";

//         $('.pt').removeClass('active');
//         $(id_ha).addClass('active');
//         $(id_ha).click();
//         //alert ("stato ->" + $(this).val())
//         //alert(id_ha);
//     })
// });

//Khi bấm vào nút Thêm
// $(document).on('click', '#add', function(){
//     count++;
//     dynamic_field(count);

//     var ncc_id = $('#ncc_id').val(); 

//     $.ajax({
//         type:'get',
//         url:'{!!URL::to('admin/danhmuc_theoncc')!!}',
//         data:{'ncc_id':ncc_id},
    
//         success:function(data){
//             //console.log(data);
//             $('#dm_id'+count).html(data);
//         },
//         error:function(){

//         }
//     });
// });
</script>
@endsection
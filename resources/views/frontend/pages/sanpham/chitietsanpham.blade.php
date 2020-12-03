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
                        <div class="col-12 product-image-thumbs">
                            <div class="product-image-thumb" id="ha{{ $hinhanh->m_id }}-mau"><img
                                src="{{ asset('storage/photos/' . $hinhanh->ha_ten) }}" alt="Product Image">
                            </div>
                        </div>

                        <!-- <a class="pt" href="#{{ $hinhanh->ha_id }}" id="ha{{ $hinhanh->m_id }}-mau">
                            <img src="{{ asset('storage/photos/' . $hinhanh->ha_ten) }}" alt="">
                        </a> -->
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

                            <img src="{{ asset('storage/photos/' . $hinhanh1[0]->ha_ten) }}"
                                class="product-image product__big__img" alt="Product Image">

                            <!-- @foreach($hinhanh1 as $ha)
                            <img data-hash="{{ $ha->ha_id }}" class="product__big__img"
                                src="{{ asset('storage/photos/' . $ha->ha_ten) }}" alt="">
                            @endforeach -->
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
                        <!-- <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>( 138 reviews )</span>
                        </div> -->
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
                                            <input type="radio" id="{{ $size->size_id }}-size" name="size"
                                                value="{{ $size->size_id }}">
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
                                    <input type="text" value="1" name="qty">
                                </div>
                            </div>
                            <input name="spid_hidden" type="hidden" value="{{ $ctsp[0]->sp_id }}" />
                            <!-- <a href="#" class="cart-btn"><span class="icon_cart_alt"></span>&nbsp; Thêm vào giỏ hàng</a> -->
                            <button type="submit" class="cart-btn">
                                <span class="icon_cart_alt"></span>
                                Thêm vào giỏ hàng
                            </button>
                           

                        </div>
                        <div class="flash-message">
                            @foreach (['danger', 'warning', 'success', 'info', 'dark'] as $msg)
                                @if(Session::has('alert-' . $msg))
                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#"
                                        class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <!-- <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Specification</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-3" role="tab">Đánh giá sản phẩm</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-3" role="tabpanel">
                            
                            <div class="blog__details__comment">
                                <div class="blog__comment__item">
                                    <form action="">
                                    {{ csrf_field() }}
                                        <input type="hidden" name="sp_id" class="sp_id" value="{{ $ctsp[0]->sp_id }}">
                                        <div id="comment_show"> </div>
                                    </form>
                                </div>
                            </div>
                        
                            
                            <form action="#" style="text-align: center; margin: 20px auto; width: 500px; min-height: 400px; border: 1px solid #ccc; padding: 30px;">
                            {{ csrf_field() }}
                                @if(Session::has('kh_email'))
                                    <h4>Viết đánh giá bình luận của bạn</h4><br>
                                    <span>
                                        Tài khoản khách hàng: <br>
                                        <input type="text" name="" id="" value="{{ Session::get('kh_taikhoan') }}" readonly style="text-align: center;" class="form-control"> 
                                        <input type="hidden" name="kh_id" id="kh_id" class="kh_id" value="{{ Session::get('kh_id') }}" >
                                    </span>
                                    <br><br>
                                        Nội dung bình luận: <br>
                                        <textarea name="comment" class="form-control comment_content" id="" cols="46" rows="5"></textarea>
                                    <br><br>
                                    <button type="button" class="btn btn-danger send-comment">Gửi bình luận</button>
                                    <div id="notify_comment"></div>
                                @else
                                    <h4>Viết đánh giá bình luận của bạn</h4><br>
                                    <p style="color: red;"><i>*Quý khách hãy đăng nhập trước khi bình luận</i></p>
                                    <span>
                                        Tài khoản khách hàng: <br>
                                        <input type="text" name="" id="" value="" readonly>
                                    </span>
                                    <br><br>
                                        Nội dung bình luận: <br>
                                        <textarea name="comment" class="" id="" cols="46" rows="5"></textarea>
                                    <br><br>
                                @endif
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="related__title">
                    <h5>SẢN PHẨM LIÊN QUAN</h5>
                </div>
            </div>

            @foreach($sanphamlienquan as $sanphamlienquan)
            <div class="col-lg-3 col-md-4 col-sm-6">
                @if($sanphamlienquan->km_giatriphantram == 0)
                <div class="product__item" style="border: solid 1px whitesmoke;">
                    <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/photos/' . $sanphamlienquan->ha_ten) }}">
                        <ul class="product__hover">
                            <li><a href="{{ asset('storage/photos/' . $sanphamlienquan->ha_ten) }}" class="image-popup"><span
                                        class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $sanphamlienquan->sp_id]) }}"><span class="icon_search"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $sanphamlienquan->sp_id]) }}">{{ $sanphamlienquan->sp_ten }}</a></h6>
                        <!-- <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div> -->
                        <div class="product__price mt-1">{{ number_format($sanphamlienquan->sp_giaban, 0, ',' , ',') }} đ</div>
                    </div>
                </div>
                @else
                <div class="product__item sale" style="border: solid 1px whitesmoke;">
                    <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/photos/' . $sanphamlienquan->ha_ten) }}">
                        <div class="label">Sale</div>
                        <ul class="product__hover">
                            <li><a href="{{ asset('storage/photos/' . $sanphamlienquan->ha_ten) }}" class="image-popup"><span
                                        class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $sanphamlienquan->sp_id]) }}"><span class="icon_search"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">{{ $sanphamlienquan->sp_ten }}</a></h6>
                        <!-- <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div> -->
                        <div class="product__price mt-1">{{ number_format($sanphamlienquan->sp_giaban - ($sanphamlienquan->sp_giaban * $sanphamlienquan->km_giatriphantram/100),0, ',' , ',') }} đ&nbsp;<span>{{ number_format($sanphamlienquan->sp_giaban, 0, ',' , ',') }} đ</div>
                    </div>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Product Details Section End -->
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
<!-- <script src="{{ asset('ashion/js/aaa.js') }}"></script>
<script src="{{ asset('ashion/js/bbb.bundle.min.js') }}"></script>
<script src="{{ asset('ashion/js/ccc.min.js') }}"></script> -->
<script src="{{ asset('ashion/js/ddd.js') }}"></script>
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
<script type="text/javascript">
    $(document).ready(function(){
        //alert(sp_id);
        load_comment();
        
        function load_comment(){
            var sp_id = $('.sp_id').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{url('/load-comment')}}',
                method: 'POST',
                data: {
                    sp_id: sp_id,
                    _token: _token
                },
                success:function(data){
                    $('#comment_show').html(data);
                },
            });
        }

        $('.send-comment').click(function(){
            var sp_id = $('.sp_id').val();
            var kh_id = $('.kh_id').val();
            //alert(kh_id);
            var comment_content = $('.comment_content').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{url('/send-comment')}}',
                method: 'POST',
                data: {
                    sp_id: sp_id,
                    kh_id: kh_id,
                    comment_content: comment_content,
                    _token: _token
                },
                success:function(data){
                    //load_comment();
                    $('#notify_comment').html('<br><br><p class="text text-success">Thêm bình luận thành công!. <br>Bình luận của bạn đang được chờ duyệt. </p>');
                    load_comment();
                    $('#notify_comment').fadeOut(9000); //mất chữ "thêm vào bình luận thành công" sau 9s
                    $('.comment_content').val('');
                },
            });
        });

    });
</script>
@endsection
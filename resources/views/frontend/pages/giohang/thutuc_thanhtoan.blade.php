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
                    <span>Thủ tục thanh toán</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <form action="{{ route('frontend.dathang') }}" class="checkout__form" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-7">
                    <h5>Chi tiết đặt hàng</h5>
                    <div class="row">
                        @if(Session::has('kh_id'))
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="checkout__form__input">
                                <p>Tài khoản: <span>*</span></p>
                                <input type="text" name="kh_taikhoan" value="{{ Session::get('kh_taikhoan') }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="checkout__form__input">
                                <p>Email: <span>*</span></p>
                                <input type="text" name="kh_email" value="{{ Session::get('kh_email') }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="checkout__form__input">
                                <p>Số điện thoại: <span>*</span></p>
                                <input type="text" name="kh_sdt" value="{{ Session::get('kh_sdt') }}" readonly>
                            </div>
                        </div>
                        <input type="hidden" name="kh_id" value="{{ Session::get('kh_id') }}">
                        @endif

                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <p>Địa chỉ giao hàng: <span>*</span></p>
                                <input type="text" id="ddh_diachigiaohang" name="ddh_diachigiaohang" class="ddh_diachigiaohang" value="{{ old('ddh_diachigiaohang') }}">
                                @if($errors->has("ddh_diachigiaohang"))
                                <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                    {{$errors->first("ddh_diachigiaohang")}}
                                </div>
                                @endif
                            </div>
                            <div class="checkout__form__input">
                                <p>Tỉnh/Thành phố<span>*</span></p>
                                <select name="tinhtp_id" id="tinhtp_id" class="form-control tinhtp_id choosen" value="{{ old('tinhtp_id') }}">
                                    <option value="">---Chọn tỉnh/thành phố---</option>
                                        @foreach($tinhtp as $tinhtp)
                                        <option value="{{ $tinhtp->tinhtp_id }}">{{ $tinhtp->tinhtp_ten}}</option>
                                        @endforeach
                                </select>
                                @if($errors->has("tinhtp_id"))
                                <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                    {{$errors->first("tinhtp_id")}}
                                </div>
                                @endif
                            </div>
                            <br>
                            <div class="checkout__form__input">
                                <p>Quận/Huyện <span>*</span></p>
                                <select name="qh_id" id="qh_id" class="form-control qh_id choosen"
                                    value="{{ old('tinhtp_id') }}">
                                    <option value="">---Chọn quận huyện---</option>
                                </select>
                                @if($errors->has("qh_id"))
                                <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                    {{$errors->first("qh_id")}}
                                </div>
                                @endif
                            </div>
                            <br>
                            <div class="checkout__form__input">
                                <p>Phường/Xã <span>*</span></p>
                                <select name="px_id" id="px_id" class="form-control px_id" value="{{ old('px_id') }}">
                                    <option value="">---Chọn phường/xã---</option>
                                </select>
                                @if($errors->has("px_id"))
                                <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                    {{$errors->first("px_id")}}
                                </div>
                                @endif
                            </div>
                            <br>
                            <div class="checkout__form__input">
                                <p>Hình thức thanh toán<span>*</span></p>
                                <select name="httt_id" id="httt_id" class="form-control httt_id" value="{{ old('httt_id') }}">
                                    <option value="">---Chọn hình thức thanh toán---</option>
                                    @foreach($hinhthucthanhtoan as $hinhthucthanhtoan)
                                    <option value="{{ $hinhthucthanhtoan->httt_id }}">{{ $hinhthucthanhtoan->httt_ten}}
                                    </option>
                                    @endforeach
                                </select>
                                @if($errors->has("httt_id"))
                                <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                    {{$errors->first("httt_id")}}
                                </div>
                                @endif
                            </div>
                            <br>
                            <div class="checkout__form__input">
                                <p>Hình thức vận chuyển<span>*</span></p>
                                <select name="htvc_id" id="htvc_id" class="form-control htvc_id" value="{{ old('htvc_id') }}">
                                    <option value="">---Chọn hình thức vận chuyển---</option>
                                    @foreach($hinhthucvanchuyen as $hinhthucvanchuyen)
                                    <option value="{{ $hinhthucvanchuyen->htvc_id }}">{{ $hinhthucvanchuyen->htvc_ten}}
                                        ({{ number_format($hinhthucvanchuyen->htvc_chiphi, 0, ',' , ',') }})</option>
                                    @endforeach
                                </select>
                                @if($errors->has("htvc_id"))
                                <div class="a" style="color: red; font-style: italic; font-size: 14px;">
                                    {{$errors->first("htvc_id")}}
                                </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="checkout__order">
                        <h5>Hóa đơn của bạn</h5>
                        <div class="checkout__order__product">
                            <?php
                                $content = Cart::content();    
                            ?>
                            <table style="font-size: 14px; border-color: #ccc;">
                                <thead style="font-weight: bold;">
                                    <tr class="cart_menu">
                                        <td class="description" style="width: 400px; text-align: left;">Sản phẩm</td>
                                        <td class="description" style="width: 70px">Màu</td>
                                        <td class="description" style="width: 70px;">Size</td>
                                        <td class="price" style="width: 150px; text-align: right;">Giá</td>
                                        <td class="qty" style="width: 70px; text-align: center;">SL</td>
                                        <td class="total" style="width: 150px; text-align: right;">Tổng</td>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 12px;">
                                    @if(Session::get('cart')==true)
                                        @foreach($content as $content)
                                        <tr>
                                            <td>{{ $content->name }}</td>
                                            <td style="text-align: center;">{{ $content->options->color }}</td>
                                            <td style="text-align: center;">{{ $content->options->size }}</td>
                                            <td style="width: 150px; text-align: right;">
                                                {{ number_format($content->price, 0, ',' , ',') }} đ</td>
                                            <td style="text-align: center;">{{ $content->qty }}</td>
                                            <td style="text-align: right;">
                                                {{ number_format($content->price * $content->qty, 0, ',' , ',') }} đ</td>
                                        </tr>
                                        @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6">
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
                        <div class="checkout__order__total">
                            <ul>
                                <li>Tạm tính: <span>{{ number_format(\Cart::subtotal(2,'.',''), 0, ',' , ',') }} đ</span></li>
                               
                                <li>Phí vận chuyển: <span id="phivc"></span></li>
                                <input type="hidden" name="phivc_hidden" id="phivc_hidden" class="phivc_hidden" value="0">
                                <li>TỔNG CỘNG: <span id="tongcong">{{ number_format(\Cart::subtotal(2,'.',''), 0, ',' , ',') }} đ</span></li>
                                <input type="hidden" name="tongcong_hidden" id="tongcong_hidden" class="tongcong_hidden" value="{{ \Cart::subtotal(0,'.','') }}">
                            </ul>
                        </div>
                        <div class="mb-2" style="color: red; font-style: italic;">*Lưu ý: Quý khách mua hàng rồi, không được hủy</div>
                        <button type="submit" class="site-btn">Đặt hàng</button>
                        <!-- <input type="button" value="Đặt hàng" name="send_order" class="site-btn send_order"> -->
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Checkout Section End -->


@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
<script type="text/javascript">

    function formatNumber(nStr, decSeperate, groupSeperate) {
        nStr += '';
        x = nStr.split(decSeperate);
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
        }
        return x1 + x2;
    }

    $(document).ready(function() {
        $('.choosen').on('change', function() {
            var action = $(this).attr('id'); //lấy id của tp
            var ma_id = $(this).val(); //lấy giá trị hiện tại mà mình chọn
            var _token = $('input[name="_token"]').val();
            var result = '';

            if (action == 'tinhtp_id') {
                result = 'qh_id';
            } else {
                result = 'px_id';
            }
            $.ajax({
                url: '{{url('/chonthanhpho')}}',
                method: 'POST',
                data: {
                    action: action,
                    ma_id: ma_id,
                    _token: _token
                },
                success: function(data) {
                    $('#' + result).html(data);
                    $('#' + result).niceSelect('update'); //load dl lại khi gặp lỗi 500
                }
            });
        });
    });

    $(document).ready(function() {
        $('.htvc_id').on('change', function() {
            var htvc_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            //alert(htvc_id);
            //$('#phivc').text(htvc_id);
            $.ajax({
                url: '{{url('/tinhphivanchuyen')}}',
                method: 'POST',
                data: {
                    htvc_id: htvc_id,
                    _token: _token
                },
                success: function(data) {
                    $('#phivc_hidden').val(data);
                    $('#phivc').html(formatNumber(data,'.',',')+' đ'); 
                }
            });
            
        });
    });

    $(document).ready(function() {

        $('#phivc').on('DOMSubtreeModified', function() {
            phivc = $('#phivc_hidden').val();
            tongcong = $('#tongcong_hidden').val();      
            kq = parseInt(phivc) + parseInt(tongcong);
            $('#tongcong').text(formatNumber(kq, '.',',')+' đ');         
        });
    });


    // $(document).ready(function() {
    //     $('.send_order').click(function(){
    //         swal({
    //             title: "Xác nhận đặt hàng",
    //             text: "Đơn hàng sẽ không hoàn trả sau khi đặt, bạn có muốn đặt hàng không?",
    //             type: "info",
    //             showCancelButton: true,
    //             confirmButtonClass: "btn-info",
    //             confirmButtonText: "OK!",
    //             cancelButtonText: "Chưa mua",
    //             closeOnConfirm: false,
    //             closeOnCancel: false
    //         },
    //         function(isConfirm){
    //             if (isConfirm){  
    //             } 
    //             else{
    //                 swal("Đóng", "Đơn hàng chưa được gửi!", "error");
    //             }
    //         });

            
    //     });
    // });
</script>
@endsection
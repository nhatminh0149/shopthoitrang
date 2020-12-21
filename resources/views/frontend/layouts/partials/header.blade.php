<!-- <script>
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll < 300){
            $('.fixed-top').css('background', 'transparent');
        } else{
            $('.fixed-top').css('background', 'rgba(23, 162, 184, 0.9)');
        }
    });
</script> -->
<!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="{{ route('frontend.home') }}"><img src="{{ asset('img/logo/logoshop3.jpg') }}" alt="" width="120px" height="40px"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('frontend.home') }}">TRANG CHỦ</a></li>
                            <li class="{{ Request::is('sanpham') ? 'active' : '' }}"><a href="{{ route('frontend.sanpham') }}">SẢN PHẨM</a>
                                <!-- <ul class="dropdown">
                                    <li><a href="{{ route('frontend.donam') }}">ĐỒ NAM</a></li>
                                    <li><a href="{{ route('frontend.donu') }}">ĐỒ NỮ</a></li>
                                    <li><a href="{{ route('frontend.dodoi') }}">ĐỒ ĐÔI</a></li>
                                </ul> -->
                            </li>
                            <li><a href="{{ route('frontend.gioithieu') }}">GIỚI THIỆU</a></li>
                            <li class="{{ Request::is('lienhe') ? 'active' : '' }}"><a href="{{ route('frontend.lienhe') }}">LIÊN HỆ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth" style="margin-left: -100px;">
                            @if(Session::has('kh_email'))
                            <?php
                                $khachhang = Session::get('kh_id');
                            ?>
                                <a href="{{ route('frontend.edit_taikhoan', ['kh_id' => $khachhang]) }}">{{ Session::get('kh_hoten') }}</a>
                                <a href="{{ route('frontend.lichsu_muahang', ['kh_id' => $khachhang]) }}">Lịch sử mua hàng</a>
                                <a href="{{ route('frontend.dangxuat') }}">Đăng xuất</a>
                            @else
                                <a href="{{ route('frontend.dangnhap') }}">Đăng nhập</a>
                                <a href="{{ route('frontend.dangky') }}">Đăng ký</a>
                            @endif
                        </div>
                        <ul class="header__right__widget">
                            <!-- <li>
                                <form action="">
                                    <div class="flex-container search-icon">
                                        <input class="flex-c-m search-txt" type="text" name="search-product" placeholder="Tên sản phẩm">
                                        <input class="flex-c-m search-btn" type="submit" value="Tìm kiếm">
                                    </div>
                                </form>
                                <span class="icon_search search-switch"></span>
                            </li> -->
                            <!-- <li><a href="#"><span class="icon_heart_alt"></span>
                                    <div class="tip">2</div>
                                </a>
                            </li> -->
                            <li><a href="{{ route('frontend.giohang') }}"><span class="icon_cart_alt"></span>
                                    <div class="tip">{{ Cart::count() }}</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>

    </header>
<!-- Header Section End -->
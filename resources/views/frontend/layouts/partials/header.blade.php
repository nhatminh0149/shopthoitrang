<!-- <style>
        .flex-container {
            display: flex;
        }
        .search-icon{
            background: black;
            height: 40px;
            border-radius: 50px;
            padding: 10px;
            border: 1px solid #e2e5e9;
        }
        .search-icon .search-btn{
            color: black;
            float: right;
            width: 100px;
            height: 28px;
            border-radius: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            margin-top: -5px;
            background: black;
            color: whitesmoke;
        }
        .search-icon:hover > .search-txt{
            width: 200px;
            padding: 0 5px;
        }
        .search-icon:hover > .search-btn{
            background: white;
            color: black;
        }
        .search-icon .search-txt{
            border: none;
            background: none;
            outline: none;
            float: left;
            color: whitesmoke;
            font-size: 16px;
            transition: 0.4s;
            width: 0px;
            transition: 0.4s;
            margin-top: -3px;
        }
    </style> -->
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
                                <ul class="dropdown">
                                    <li><a href="{{ route('frontend.donam') }}">ĐỒ NAM</a></li>
                                    <li><a href="{{ route('frontend.donu') }}">ĐỒ NỮ</a></li>
                                    <li><a href="{{ route('frontend.dodoi') }}">ĐỒ ĐÔI</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.html">GIỚI THIỆU</a></li>
                            <li class="{{ Request::is('lienhe') ? 'active' : '' }}"><a href="{{ route('frontend.lienhe') }}">LIÊN HỆ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth" style="margin-left: -60px;">
                            @if(Session::has('kh_email'))
                                <a href="">{{ Session::get('kh_hoten') }}</a>
                                <a href="{{ route('frontend.dangxuat') }}">Đăng xuất</a>
                            @else
                                <a href="{{ route('frontend.dangnhap') }}">Đăng nhập</a>
                                <a href="{{ route('frontend.dangky') }}">Đăng ký</a>
                            @endif
                        </div>
                        <ul class="header__right__widget">
                            <li>
                                <!-- <form action="">
                                    <div class="flex-container search-icon">
                                        <input class="flex-c-m search-txt" type="text" name="search-product" placeholder="Tên sản phẩm">
                                        <input class="flex-c-m search-btn" type="submit" value="Tìm kiếm">
                                    </div>
                                </form> -->
                                <span class="icon_search search-switch"></span>
                            </li>
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                    <div class="tip">2</div>
                                </a>
                            </li>
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
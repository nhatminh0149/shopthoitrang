 <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg" >
            <div class="logo">
                <a href="/" class="simple-text logo-normal">
                    <!-- Multiauth -->
                    @if(isset(Auth::user()->name))
                        Hi! {{Auth::user()->name}}
                    @endif
                </a>
            </div>
            
            <div class="sidebar-wrapper">
                <ul class="nav">
                @if(Auth::user()->quyen==1)
                    <li class="nav-item {{ Request::is('admin') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.users') }}">
                            <i class="material-icons">group</i>
                            <p>Nhân viên</p>
                        </a>
                    </li> -->

                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.users') }}">
                            <i class="material-icons">group</i>
                            <span class="material-icons">group</span>
                            <p>Nhân viên</p>
                        </a>
                    </li> -->

                    <!-- <li class="nav-item {{ Request::is('admin/users*') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('admin.users') }}">
                            <i class="material-icons">person</i>
                            <p>User management</p>
                        </a>
                    </li> -->

                    <!-- <li class="nav-item {{ Request::is('admin/users*') ? 'active' : '' }} ">
                        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                            <i><img style="width:25px" src="https://material-dashboard-laravel.creative-tim.com/material/img/laravel.svg"></i>
                            <p>
                                Laravel Examples
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse show" id="laravelExample">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://material-dashboard-laravel.creative-tim.com/profile">
                                        <span class="sidebar-mini"> UP </span>
                                        <span class="sidebar-normal">User profile </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://material-dashboard-laravel.creative-tim.com/user">
                                        <span class="sidebar-mini"> UM </span>
                                        <span class="sidebar-normal"> User Management </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li> -->

                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                        <i class="material-icons">account_balance</i>
                            <p>
                                Kho
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="laravelExample">
                            <ul class="nav">

                                <li class="nav-item {{ Request::is('admin/kho*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.kho') }}">
                                        <i class="material-icons">store</i>
                                        <p>Quản lý kho</p>
                                    </a>
                                </li>

                                <li class="nav-item {{ Request::is('admin/ncc*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.ncc') }}">
                                        <i class="material-icons">view_module</i>
                                        <p>Quản lý nhà cung cấp</p>
                                    </a>
                                </li> 

                                <li class="nav-item {{ Request::is('admin/danhmuc*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.danhmuc') }}">
                                        <i class="material-icons">reorder</i>
                                        <p>Quản lý danh mục</p>
                                    </a>
                                </li>

                                <li class="nav-item {{ Request::is('admin/loaisanpham*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.lsp') }}">
                                        <i class="material-icons">list</i>
                                        <p>Quản lý loại sản phẩm</p>
                                    </a>
                                </li>

                                <li class="nav-item {{ Request::is('admin/sp*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.sp') }}">
                                        <i class="material-icons">redeem</i>
                                        <p>Quản lý sản phẩm</p>
                                    </a>
                                </li> 

                                <li class="nav-item {{ Request::is('admin/size*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.size') }}">
                                        <i class="material-icons">brightness_low</i>
                                        <p>Quản lý size</p>
                                    </a>
                                </li> 

                                <li class="nav-item {{ Request::is('admin/mau*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.mau') }}">
                                        <i class="material-icons">brightness_medium</i>
                                        <p>Quản lý màu</p>
                                    </a>
                                </li> 

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#laravel" aria-expanded="true">
                        <i class="material-icons">storefront</i>
                            <p>
                                Bán hàng
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="laravel">
                            <ul class="nav">

                                <li class="nav-item {{ Request::is('admin/km*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.km') }}">
                                        <i class="material-icons">photo_filter</i>
                                        <p>Quản lý khuyến mãi</p>
                                    </a>
                                </li>

                                <li class="nav-item {{ Request::is('admin/users*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.users') }}">
                                        <i class="material-icons">person_add_alt_1</i>
                                        <p>Quản lý khách hàng</p>
                                    </a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('admin.kho') }}">
                                        <i class="material-icons">phone_in_talk</i>
                                        <p>Quản lý đơn đặt hàng</p>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item {{ Request::is('admin/htvc*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.htvc') }}">
                            <i class="material-icons">local_shipping</i>
                            <p>Hình thức vận chuyển</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/httt*') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('admin.httt') }}">
                            <i class="material-icons">local_atm</i>
                            <p>Hình thức thanh toán</p>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('admin.logout') }}">
                            <i class="material-icons">directions_run</i>
                            <p>Đăng xuất</p>
                        </a>
                    </li>

                    
                @elseif(Auth::user()->quyen==2)
                    <!-- <li class="nav-item {{ Request::is('admin/kho*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.kho') }}">
                            <i class="material-icons">store</i>
                            <p>Kho</p>
                        </a>
                    </li> -->
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                        <i class="material-icons">account_balance</i>
                            <p>
                                Kho
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="laravelExample">
                            <ul class="nav">

                                <li class="nav-item {{ Request::is('admin/kho*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.kho') }}">
                                        <i class="material-icons">store</i>
                                        <p>Quản lý kho</p>
                                    </a>
                                </li>

                                <li class="nav-item {{ Request::is('admin/ncc*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.ncc') }}">
                                        <i class="material-icons">view_module</i>
                                        <p>Quản lý nhà cung cấp</p>
                                    </a>
                                </li> 

                                <li class="nav-item {{ Request::is('admin/danhmuc*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.danhmuc') }}">
                                        <i class="material-icons">reorder</i>
                                        <p>Quản lý danh mục</p>
                                    </a>
                                </li>

                                <li class="nav-item {{ Request::is('admin/loaisanpham*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.lsp') }}">
                                        <i class="material-icons">list</i>
                                        <p>Quản lý loại sản phẩm</p>
                                    </a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('admin.kho') }}">
                                        <i class="material-icons">redeem</i>
                                        <p>Quản lý sản phẩm</p>
                                    </a>
                                </li> 

                                <li class="nav-item {{ Request::is('admin/size*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.size') }}">
                                        <i class="material-icons">brightness_low</i>
                                        <p>Quản lý size</p>
                                    </a>
                                </li> 

                                <li class="nav-item {{ Request::is('admin/mau*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.mau') }}">
                                        <i class="material-icons">brightness_medium</i>
                                        <p>Quản lý màu</p>
                                    </a>
                                </li> 

                            </ul>
                        </div>
                    </li> 

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('admin.logout') }}">
                            <i class="material-icons">directions_run</i>
                            <p>Đăng xuất</p>
                        </a>
                    </li>

                @elseif(Auth::user()->quyen==3)
                    <!-- <li class="nav-item {{ Request::is('admin/users*') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('admin.users') }}">
                            <i class="material-icons">shopping_cart</i>
                            <p>Bán hàng</p>
                        </a>
                    </li> -->

                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#laravel" aria-expanded="true">
                        <i class="material-icons">storefront</i>
                            <p>
                                Bán hàng
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="laravel">
                            <ul class="nav">

                                <li class="nav-item {{ Request::is('admin/km*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.km') }}">
                                        <i class="material-icons">photo_filter</i>
                                        <p>Quản lý khuyến mãi</p>
                                    </a>
                                </li>

                                <li class="nav-item {{ Request::is('admin/kh*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.kh') }}">
                                        <i class="material-icons">person_add_alt_1</i>
                                        <p>Quản lý khách hàng</p>
                                    </a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('admin.kho') }}">
                                        <i class="material-icons">phone_in_talk</i>
                                        <p>Quản lý đơn đặt hàng</p>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('admin.logout') }}">
                            <i class="material-icons">directions_run</i>
                            <p>Đăng xuất</p>
                        </a>
                    </li>

                @endif

                {{--     <li class="nav-item ">
                        <a class="nav-link" href="../examples/user.html">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../examples/table.html">
                            <i class="material-icons">content_paste</i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../examples/typography.html">
                            <i class="material-icons">library_books</i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../examples/icons.html">
                            <i class="material-icons">bubble_chart</i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../examples/maps.html">
                            <i class="material-icons">location_ons</i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../examples/notifications.html">
                            <i class="material-icons">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="nav-item active-pro">
                        <a class="nav-link" href="../examples/upgrade.html">
                            <i class="material-icons">unarchive</i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
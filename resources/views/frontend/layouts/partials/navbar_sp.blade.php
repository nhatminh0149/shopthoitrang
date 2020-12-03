<div class="col-lg-3 col-md-3">
    <div class="shop__sidebar">

        <div class="sidebar__sizes">
            <div class="section-title">
                <h4>TÌM KIẾM SẢN PHẨM</h4>
            </div>
            <div class="discount__content">
                <!-- <form action="{{ route('frontend.timkiemsp') }}" method="post">
                            {{ csrf_field() }}
                                <input type="text" name ="search" id="search" placeholder="Tên sản phẩm...">
                                <button type="submit" class="site-btn">Tìm kiếm</button>
                            </form> -->

                <form action="{{ route('frontend.timkiemsp') }}" method="get" id="search-form">

                    <input name="q" type="text" placeholder="Tên sản phẩm..." autocomplete="off" autofocus>
                    <!-- <button type="button"><i class="fas fa-microphone"></i></button> -->
                </form>
                <!-- <p class="info"></p> -->

            </div>
        </div>

        <div class="sidebar__categories">
            <div class="section-title">
                <h4>Danh mục</h4>
            </div>
            <div class="categories__accordion">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-heading active">
                            <a data-toggle="collapse" data-target="#collapseOne">Đồ nam</a>
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
                        <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
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

        <div class="sidebar__sizes">

            <div class="section-title">
                <h4>Giá bán</h4>
            </div>
            <input type="hidden" id="hidden_minimum_price" value="50000" />
            <input type="hidden" id="hidden_maximum_price" value="2000000" />
            <b id="price_show">50,000 - 1,000,000 đ</b> <br>
            <div id="price_range" style="width: 250px; height: 5px; margin-top: 10px;"></div>

        </div>

        <br>

        <hr>

        <div class="sidebar__color">
            <div class="section-title">
                <h4>Lọc màu</h4>
            </div>
            <div style="height: 180px; display:inline">
                @foreach($danhsachmau as $mau)
                <div class="list-inline-item checkbox" style="width: 110px;margin-right: 0px;">
                    <label style="padding-bottom: 10px;width:142px;font-size:0.8rem;">
                        <input type="checkbox" style="display:inline" class="common_selector mau"
                            value="{{ $mau->m_id}}"> {{ $mau->m_ten }}
                        <!-- <img src="{{ asset('storage/photos/mau/' . $mau->m_hinh) }}" class="rounded-circle" 
                        style="border-color: #060606;height: 15px;width: 15px;" >  -->
                    </label>
                </div>
                @endforeach
            </div>
        </div>

        <hr>

        <div class="sidebar__color">
            <div class="section-title">
                <h4>Lọc size</h4>
            </div>
            <div style="height: 180px; display:inline">
                @foreach($danhsachsize as $size)
                <div class="list-inline-item checkbox" style="width: 110px;margin-right: 0px;">
                    <label style="padding-bottom: 10px;width:142px;font-size:0.8rem;">
                        <input type="checkbox" style="display:inline" class="common_selector size"
                            value="{{ $size->size_id}}"> {{ $size->size_ten }}
                        <!-- <img src="{{ asset('storage/photos/mau/' . $mau->m_hinh) }}" class="rounded-circle" 
                        style="border-color: #060606;height: 15px;width: 15px;" >  -->
                    </label>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
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


        <div class="sidebar__color">
            <div class="section-title">
                <h4>Danh mục</h4>
            </div>
            <div style="height: 180px; display:inline">
                @foreach($danhsachloai as $loai)
                <div class="list-inline-item checkbox" style="width: 120px; margin-right: 0px;">
                    <label style="padding-bottom: 10px; width:142px; font-size:0.8rem;">
                        <input type="checkbox" style="display:inline" class="common_selector loai"
                            value="{{ $loai->lsp_id}}"> {{ $loai->lsp_ten }}
                    </label>
                </div>
                @endforeach
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
                <!-- <div class="list-inline-item checkbox" style="width: 110px;margin-right: 0px;">
                    <label style="padding-bottom: 10px; width:142px; font-size:0.8rem;">
                        <input type="checkbox" style="display:inline" class="common_selector mau"
                            value="{{ $mau->m_id}}"> {{ $mau->m_ten }}
                    </label>
                </div> -->
                    @if($mau->m_ten == 'Đen')
                        <label for="black" id="{{ $mau->m_id }}" >
                            <input type="checkbox" style="display:inline" class="common_selector mau"
                            value="{{ $mau->m_id}}">
                            <button class="btn btn-dark"
                                style="height: 23px; margin-bottom: 5px; margin-right: 10px; border-radius: 50%;"></button>
                        </label>
                    @elseif($mau->m_ten == 'Đỏ')
                        <label for="red" id="{{ $mau->m_id }}">
                            <input type="checkbox" style="display:inline" class="common_selector mau"
                            value="{{ $mau->m_id}}">
                            <button class="btn btn-danger"
                                style="height: 23px; margin-bottom: 5px; margin-right: 10px; border-radius: 50%;" ></button>
                        </label>
                    @elseif($mau->m_ten == 'Trắng')
                    <label for="white" id="{{ $mau->m_id }}">
                        <input type="checkbox" style="display:inline" class="common_selector mau"
                            value="{{ $mau->m_id}}">
                        <button class="btn btn-default"
                            style="height: 23px; margin-bottom: 5px; margin-right: 10px; border: solid 1px black; border-radius: 50%;"></button>
                    </label>
                    <br>
                    @elseif($mau->m_ten == 'Vàng')
                    <label for="yellow" id="{{ $mau->m_id }}">
                        <input type="checkbox" style="display:inline" class="common_selector mau"
                            value="{{ $mau->m_id}}">
                        <button class="btn btn-warning"
                            style="height: 23px; margin-bottom: 5px; margin-right: 10px; border-radius: 50%;"></button>
                    </label>
                    @elseif($mau->m_ten == 'Xanh')
                    <label for="blue" id="{{ $mau->m_id }}">
                        <input type="checkbox" style="display:inline" class="common_selector mau"
                            value="{{ $mau->m_id}}">
                        <button class="btn btn-primary"
                            style="height: 23px; margin-bottom: 5px; margin-right: 10px; border-radius: 50%;"></button>
                    </label>
                    @endif
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
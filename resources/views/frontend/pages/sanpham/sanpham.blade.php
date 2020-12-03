{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.master` --}}
@extends('frontend.layouts.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.master` --}}
@section('title')
A S H I O N
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.master` --}}
@section('custom-css')
    <style>
        #search-form {
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        #search-form input {
            width: 100%;
            font-size: 14px;
            padding: 0px 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            height: 45px;
        }

        #search-form button {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            background-color: transparent;
            outline: none;
            border: none;
            width: 3rem;
            text-align: center;
            font-size: 1.5rem;
            cursor: pointer;
            color: #333;
        }

        @media (max-width: 1200px) {
            #search-form { 
                width: 50%; 
            }
        }
        @media (max-width: 768px) {
            #search-form { 
                width: 100%; 
            }
            .info { 
                font-size: 0.5rem; 
            }
        }
    </style>

    <style>
        .bor10{
            width: 272px;margin-left: 0px;margin-right: 0px;
            padding-right: 10px;padding-left: 10px;
        }
    </style> 

    <style>
        #loading {
            text-align: center; */
            background: url('loader.gif') no-repeat center;
            height: 150px; */
        }
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
                    <span>Sản phẩm</span>
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

            <div class="col-lg-9 col-md-9">
                <div class="row filter_data">
                </div> 
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
<script>
const searchForm = document.querySelector("#search-form");
const searchFormInput = searchForm.querySelector("input"); // <=> document.querySelector("#search-form input");
const info = document.querySelector(".info");

// The speech recognition interface lives on the browser’s window object
const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition; // if none exists -> undefined

if(SpeechRecognition) {
  console.log("Your Browser supports speech Recognition");
  
  const recognition = new SpeechRecognition();
  recognition.continuous = true;
  // recognition.lang = "en-US";

  searchForm.insertAdjacentHTML("beforeend", '<button type="button"><i class="fa fa-microphone"></i></button>');
  searchFormInput.style.paddingRight = "100px";

  const micBtn = searchForm.querySelector("button");
  const micIcon = micBtn.firstElementChild;

  micBtn.addEventListener("click", micBtnClick);
  function micBtnClick() {
    if(micIcon.classList.contains("fa-microphone")) { // Start Voice Recognition
      recognition.start(); // First time you have to allow access to mic!
    }
    else {
      recognition.stop();
    }
  }

  recognition.addEventListener("start", startSpeechRecognition); // <=> recognition.onstart = function() {...}
  function startSpeechRecognition() {
    micIcon.classList.remove("fa-microphone");
    micIcon.classList.add("fa-microphone-slash");
    searchFormInput.focus();
    console.log("Voice activated, SPEAK");
  }

  recognition.addEventListener("end", endSpeechRecognition); // <=> recognition.onend = function() {...}
  function endSpeechRecognition() {
    micIcon.classList.remove("fa-microphone-slash");
    micIcon.classList.add("fa-microphone");
    searchFormInput.focus();
    console.log("Speech recognition service disconnected");
  }

  recognition.addEventListener("result", resultOfSpeechRecognition); // <=> recognition.onresult = function(event) {...} - Fires when you stop talking
  function resultOfSpeechRecognition(event) {
    const current = event.resultIndex;
    const transcript = event.results[current][0].transcript;
    
    if(transcript.toLowerCase().trim()==="stop recording") {
      recognition.stop();
    }
    else if(!searchFormInput.value) {
      searchFormInput.value = transcript;
    }
    else {
      if(transcript.toLowerCase().trim()==="go") {
        searchForm.submit();
      }
      else if(transcript.toLowerCase().trim()==="reset input") {
        searchFormInput.value = "";
      }
      else {
        searchFormInput.value = transcript;
      }
    }
    // searchFormInput.value = transcript;
    // searchFormInput.focus();
    // setTimeout(() => {
    //   searchForm.submit();
    // }, 500);
  }
  
  info.textContent = '';
  
}
else {
  console.log("Your Browser does not support speech Recognition");
  info.textContent = "Your Browser does not support Speech Recognition";
}


</script>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        //var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        //alert(maximum_price)
        //var loai = get_filter('loai');
        var mau = get_filter('mau');
        var size = get_filter('size');
        // var q = get_filter('q');
        //var _token = $('input[name="_token"]').val();
        //alert(mau);

        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });        
        $.ajax({
            url: "{{url('/sanpham')}}",
            method:"POST",

            //data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
            data:{minimum_price:minimum_price, maximum_price:maximum_price, mau:mau, size:size},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:50000,
        max:1000000,
        values:[50000, 1000000],
        step:50000,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>
@endsection
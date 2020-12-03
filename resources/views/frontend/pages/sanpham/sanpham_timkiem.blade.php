{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.master` --}}
@extends('frontend.layouts.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.master` --}}
@section('title')
A S H I O N
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.master` --}}
@section('custom-css')
<style>
    /* .discount__content form {
        position: relative;
        width: 250px;
        display: inline-block;
    }

    .discount__content form input {
        height: 40px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding-left: 10px;
        padding-right: 115px;
        font-size: 14px;
        color: #444444;
    }

    .discount__content form input::-webkit-input-placeholder {
        color: #ccc;
    }

    .discount__content form input::-moz-placeholder {
        color: #444444;
    }

    .discount__content form input:-ms-input-placeholder {
        color: #444444;
    }

    .discount__content form input::-ms-input-placeholder {
        color: #444444;
    }

    .discount__content form input::placeholder {
        color: #444444;
    }

    .discount__content form button {
        position: absolute;
    } 
    .site-btn {
        font-size: 12px;
        color: #ffffff;
        background: #ca1515;
        font-weight: 300;
        border: none;
        display: inline-block;
        padding: 5px 10px;
        border-radius: 10px;
        height: 32px;
    }

    .site-btn:hover {
        font-size: 12px;
        color: #ffffff;
        background: #0a0a0a;
        font-weight: 300;
        border: none;
        display: inline-block;
        padding: 5px 10px;
        border-radius: 10px;
        height: 32px;
    } */

    /* @import url('https://fonts.googleapis.com/css?family=Montserrat'); */

/* * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Montserrat', sans-serif;
  background-color: #025677;
  color: #fff;
} */
/* .container {
  padding: 30px 50px;
} */
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
/* .info {
  margin-top: 0.5rem;
  text-align: center;
  font-size: 0.75rem;
} */

@media (max-width: 1200px) {
  #search-form { width: 50%; }
}
@media (max-width: 768px) {
  /* .container { padding: 30px 35px; } */
  #search-form { width: 100%; }
  .info { font-size: 0.5rem; }
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
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    
                    @foreach($ds_sp as $dssp)
                    <div class="col-lg-4 col-md-6"> 
                        @if($dssp->km_giatriphantram == 0)
                        <div class="product__item" style="border: solid 1px whitesmoke;">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/photos/' . $dssp->ha_ten) }}">
                                <ul class="product__hover">
                                    <li><a href="{{ asset('storage/photos/' . $dssp->ha_ten) }}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                  
                                    <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $dssp->sp_id]) }}"><span class="icon_search"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $dssp->sp_id]) }}">{{ $dssp->sp_ten }}</a></h6>
                                <!-- <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div> -->
                                <div class="product__price mt-1">{{ number_format($dssp->sp_giaban, 0, ',' , ',') }} đ</div>
                            </div>
                        </div>
                        @else
                        <div class="product__item sale" style="border: solid 1px whitesmoke;">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/photos/' . $dssp->ha_ten) }}">
                                <div class="label">Sale</div>
                                <ul class="product__hover">
                                    <li><a href="{{ asset('storage/photos/' . $dssp->ha_ten) }}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                   
                                    <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $dssp->sp_id]) }}"><span class="icon_search"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $dssp->sp_id]) }}">{{ $dssp->sp_ten }}</a></h6>
                               
                                <div class="product__price mt-1">{{ number_format($dssp->sp_giaban - ($dssp->sp_giaban * $dssp->km_giatriphantram/100),0, ',' , ',') }} đ&nbsp;<span>{{ number_format($dssp->sp_giaban, 0, ',' , ',') }} đ</span></div>
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
@endsection
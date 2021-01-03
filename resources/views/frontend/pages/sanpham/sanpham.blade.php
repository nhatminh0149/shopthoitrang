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

                            <form action="{{ route('frontend.sanpham') }}" method="get" id="search-form">
                               
                                <input class="search_value" name="q" type="text" placeholder="Tên sản phẩm..." autocomplete="off" autofocus>
                                <!-- <button type="button"><i class="fas fa-microphone"></i></button> -->
                            </form>
                            <!-- <p class="info"></p> -->

                        </div>
                    </div>

                    <div class="sidebar__color">
                        <div class="section-title">
                            <h4>Loại sản phẩm</h4>
                        </div>
                        <div style="height: 180px; display:inline">
                            @foreach($danhsachloai as $loai)
                            <div class="list-inline-item checkbox" style="width: 120px; margin-right: 0px;">
                                <label style="padding-bottom: 10px; width:142px; font-size:0.8rem;">
                                    <input type="checkbox" style="display:inline" class="common_selector loai" name="loai"
                                        value="{{ $loai->lsp_id}}" <?php if (isset($filter_loai) && $filter_loai != '') { $array = explode(',',$filter_loai[0]); if (in_array($loai->lsp_id, $array)) { echo "checked"; }} ?>> {{ $loai->lsp_ten }} 
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="sidebar__sizes">
                        <div class="section-title">
                            <h4>LỌC GIÁ</h4>
                        </div>
                        <div style="height: 180px; display:inline">
                            <div class="list-inline-item checkbox" style="width: 180px; margin-right: 0px;">
                                <label style="padding-bottom: 10px; width:182px; font-size:0.9rem;">
                                    <input type="checkbox" style="display:inline" class="common_selector price" name="price"
                                        value="1"> - Dưới 250,000 đ
                                </label>
                            </div> 
                            <div class="list-inline-item checkbox" style="width: 180px; margin-right: 0px;">
                                <label style="padding-bottom: 10px; width:182px; font-size:0.9rem;">
                                    <input type="checkbox" style="display:inline" class="common_selector price" name="price"
                                        value="2"> - 250,000 ₫ - 350,000 ₫
                                </label>
                            </div> 
                            <div class="list-inline-item checkbox" style="width: 180px; margin-right: 0px;">
                                <label style="padding-bottom: 10px; width:182px; font-size:0.9rem;">
                                    <input type="checkbox" style="display:inline" class="common_selector price" name="price"
                                        value="3"> - 350,000 ₫ - 500,000 ₫
                                </label>
                            </div> 
                            <div class="list-inline-item checkbox" style="width: 180px; margin-right: 0px;">
                                <label style="padding-bottom: 10px; width:182px; font-size:0.9rem;">
                                    <input type="checkbox" style="display:inline" class="common_selector price" name="price"
                                        value="4"> - Trên 500,000 đ
                                </label>
                            </div> 
                        </div>    
                    </div>

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
                                        <input type="checkbox" style="display:inline" class="common_selector mau" name="color"
                                        value="{{ $mau->m_id}}"  <?php if (isset($filter_color) && $filter_color != '') { $array = explode(',',$filter_color[0]); if (in_array($mau->m_id, $array)) { echo "checked"; }} ?>>
                                        <button class="btn btn-dark"
                                            style="height: 23px; margin-bottom: 5px; margin-right: 10px; border-radius: 50%;"></button>
                                    </label>
                                @elseif($mau->m_ten == 'Đỏ')
                                    <label for="red" id="{{ $mau->m_id }}">
                                        <input type="checkbox" style="display:inline" class="common_selector mau"  name="color"
                                        value="{{ $mau->m_id}}"  <?php if (isset($filter_color) && $filter_color != '') { $array = explode(',',$filter_color[0]); if (in_array($mau->m_id, $array)) { echo "checked"; }} ?>>
                                        <button class="btn btn-danger"
                                            style="height: 23px; margin-bottom: 5px; margin-right: 10px; border-radius: 50%;" ></button>
                                    </label>
                                @elseif($mau->m_ten == 'Trắng')
                                <label for="white" id="{{ $mau->m_id }}">
                                    <input type="checkbox" style="display:inline" class="common_selector mau"  name="color"
                                        value="{{ $mau->m_id}}"  <?php if (isset($filter_color) && $filter_color != '') { $array = explode(',',$filter_color[0]); if (in_array($mau->m_id, $array)) { echo "checked"; }} ?>>
                                    <button class="btn btn-default"
                                        style="height: 23px; margin-bottom: 5px; margin-right: 10px; border: solid 1px black; border-radius: 50%;"></button>
                                </label>
                                <br>
                                @elseif($mau->m_ten == 'Vàng')
                                <label for="yellow" id="{{ $mau->m_id }}">
                                    <input type="checkbox" style="display:inline" class="common_selector mau"  name="color"
                                        value="{{ $mau->m_id}}"  <?php if (isset($filter_color) && $filter_color != '') { $array = explode(',',$filter_color[0]); if (in_array($mau->m_id, $array)) { echo "checked"; }} ?>>
                                    <button class="btn btn-warning"
                                        style="height: 23px; margin-bottom: 5px; margin-right: 10px; border-radius: 50%;"></button>
                                </label>
                                @elseif($mau->m_ten == 'Xanh')
                                <label for="blue" id="{{ $mau->m_id }}">
                                    <input type="checkbox" style="display:inline" class="common_selector mau"  name="color"
                                        value="{{ $mau->m_id}}"  <?php if (isset($filter_color) && $filter_color != '') { $array = explode(',',$filter_color[0]); if (in_array($mau->m_id, $array)) { echo "checked"; }} ?>>
                                    <button class="btn btn-primary"
                                        style="height: 23px; margin-bottom: 5px; margin-right: 10px; border-radius: 50%;"></button>
                                </label>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="sidebar__color">
                        <div class="section-title">
                            <h4>Lọc size</h4>
                        </div>
                        <div style="height: 180px; display:inline">
                            @foreach($danhsachsize as $size)
                            <div class="list-inline-item checkbox" style="width: 110px;margin-right: 0px;">
                                <label style="padding-bottom: 10px;width:142px;font-size:0.8rem;">
                                    <input type="checkbox" style="display:inline" class="common_selector size" name="size"
                                        value="{{ $size->size_id}}"  <?php if (isset($filter_size) && $filter_size != '') { $array = explode(',',$filter_size[0]); if (in_array($size->size_id, $array)) { echo "checked"; }} ?>> {{ $size->size_ten }}
                                    
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                
                <button type="button" id="button-filter" class="btn btn-outline-dark" style="font-size: 16px;"><i class="fa fa-filter"></i>&nbsp BẮT ĐẦU LỌC</button>
            
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    
                    @foreach($sanpham as $dssp)
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
                        {!! $sanpham->appends(['loai'=>$filter_loai, 'color'=>$filter_color, 'size'=>$filter_size, 'price'=>$filter_price])->links() !!}
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

<script type="text/javascript">
			// $('input[type="checkbox"]').on('click', function() {
			// 	var value = $(this).attr("id");
			// 	var class_name = "tag-" + value;
			// 	if(this.checked) {
			// 		html = '<div id="tag-name" class="';
			// 		html += class_name;
			// 		html += '">';
			// 		html +=	'<a class="fa fa-close" onclick="return deleteTag(\''+class_name+'\');" id="remove-this-one" data-class-name="'+ class_name +'"></a>';
			// 		html += '<span class="ng-binding">';
			// 		html += $(this).data('name');
			// 		html += '</span>';
			// 		html += '</div>';
			// 		$('#tag-filter').append(html);
			// 	} else {
			// 		$('.'+class_name).remove();
			// 	}
			// });
			// function deleteTag(class_name) {
			// 	$('.'+class_name).remove();
			// 	var value = class_name.slice(4);
			// 	$('#'+value).prop('checked', false);
			// }

			function getIds(checkboxName) {
				let checkBoxes = document.getElementsByName(checkboxName);
				let ids = Array.prototype.slice.call(checkBoxes)
								.filter(ch => ch.checked==true)
								.map(ch => ch.value);
				return ids;
			}

			$('#button-filter').on('click', function() {
				url = 'sanpham?';

				var loai = getIds("loai");
				var size = getIds("size");
				var color = getIds("color");
				var price = getIds("price");

				if(loai.length) {
					url += '&loai' + encodeURIComponent('[]') + '=' + encodeURIComponent(loai);
				}

				if(size.length) {
					url += '&size' + encodeURIComponent('[]') + '=' + encodeURIComponent(size);
				}

				if(color.length) {
					url += '&color' + encodeURIComponent('[]') + '=' + encodeURIComponent(color);
				}

				if(price.length) {
					url += '&price' + encodeURIComponent('[]') + '=' + encodeURIComponent(price);
				}


				if (url == 'sanpham?') {
					url = 'sanpham?page=1';
				} else {
					url += '&page=1';
				}
				location.href = url;

			});

			$('#search_value').on('change', function() {
				searchsanpham();
			});

			// $('.fa-search').on('click', function() {
			// 	searchsanpham();
			// });

			function searchsanpham() {
				url = 'sanpham?';

				var search_value = $('#search_value').val();

				if(search_value != '') {
					url += '&search_value=' + encodeURIComponent(search_value);
				}
				if (url == 'sanpham?') {
					url = 'sanpham';
				} else {
                    url += '&page=1';
				}
				location.href = url;
			}
		</script>
@endsection
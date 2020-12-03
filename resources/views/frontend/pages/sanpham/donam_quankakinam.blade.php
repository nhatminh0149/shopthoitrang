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
                    <span>Quần kaki nam</span>
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
            
            @include('frontend.layouts.partials.navbar_sp')
            
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    
                    @foreach($ds_quankakinam as $ds_quankakinam)
                    <div class="col-lg-4 col-md-6">
                        @if($ds_quankakinam->km_giatriphantram == 0)
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/photos/' . $ds_quankakinam->ha_ten) }}">
                                <ul class="product__hover">
                                    <li><a href="{{ asset('storage/photos/' . $ds_quankakinam->ha_ten) }}" class="image-popup"><span
                                                class="arrow_expand"></span></a></li>
                                  
                                    <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $ds_quankakinam->sp_id]) }}"><span class="icon_search"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $ds_quankakinam->sp_id]) }}">{{ $ds_quankakinam->sp_ten }}</a></h6>
                                <!-- <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div> -->
                                <div class="product__price mt-1">{{ number_format($ds_quankakinam->sp_giaban, 0, ',' , ',') }} đ</div>
                            </div>
                        </div>
                        @else
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/photos/' . $ds_quankakinam->ha_ten) }}">
                                <div class="label">Sale</div>
                                <ul class="product__hover">
                                    <li><a href="{{ asset('storage/photos/' . $ds_quankakinam->ha_ten) }}" class="image-popup"><span
                                                class="arrow_expand"></span></a></li>
                                   
                                    <li><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $ds_quankakinam->sp_id]) }}"><span class="icon_search"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="{{ route('frontend.sanpham.xemchitiet', ['sp_id' => $ds_quankakinam->sp_id]) }}">{{ $ds_quankakinam->sp_ten }}</a></h6>
                                <!-- <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div> -->
                                <div class="product__price mt-1">{{ number_format($ds_quankakinam->sp_giaban - ($ds_quankakinam->sp_giaban * $ds_quankakinam->km_giatriphantram/100),0, ',' , ',') }} đ&nbsp;<span>{{ number_format($ds_quankakinam->sp_giaban, 0, ',' , ',') }} đ</span></div>
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
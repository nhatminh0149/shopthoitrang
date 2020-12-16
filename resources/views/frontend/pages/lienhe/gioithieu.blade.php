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
                    <a href="{{ route('frontend.home') }}"><i class="fa fa-home"></i> Trang chủ</a>
                    <span>Giới thiệu</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Blog Details Section Begin -->
<section class="blog-details spad" style="margin-top: -30px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="blog__details__content">
                    <div class="blog__details__item">
                        <img src="{{ asset('img/lookbook/lookbook5.jpg') }}" alt="">
                        <div class="blog__details__item__title">
                            <span class="tip">Tổng quan</span>
                            <h4>Giới thiệu về ToToShop</h4>
                            <ul>
                                <li>Đăng bởi<span> ToToShop</span></li>
                                <li>11 tháng 10, 2019</li>
                                <!-- <li>39 Comments</li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="blog__details__desc">
                        <p>Góp mặt trên thị trường thời trang Việt Nam từ năm 2009, với 10 năm không ngừng phát triển, 
                            đổi mới và tạo dấu ấn, Totoshop tự hào trở thành một trong những thương hiệu thời trang 
                            của người Việt được yêu thích nhất của giới trẻ.</p>
                        <p>Với điểm mạnh về sự đa dạng mẫu mã, chất lượng trong từng sản phẩm và luôn cập nhật những xu hướng mới nhất. 
                            Đến với Totoshop, bạn không chỉ tìm kiếm được những thứ mình "cần" mà còn tìm thấy được những thứ mình "nên có".</p>
                    </div>
                    <div class="blog__details__quote">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <p>Totoshop hiểu rằng, thời trang không phải chỉ là mặc một chiếc áo đẹp mà là mặc một chiếc áo thật sự phù hợp với mình. 
                            Vì vậy, dù bạn yêu thích phong cách nào hay đang trong quá trình định hình phong cách của bản thân, hãy đến với Totoshop 
                            để nhận được những gì bạn đang tìm kiếm nhé!</p>
                    </div>
                    <div class="blog__details__desc">
                        <p>Totoshop luôn đặt câu hỏi "Khách hàng cần gì và có được gì khi đến với Totoshop?". 
                            Từ đó, những sản phẩm đến tay khách hàng cũng chính là những gì Totoshop muốn gửi gắm. 
                            Nếu bạn đang tìm kiếm điểm dừng chân lý tưởng để thỏa sức trải nghiệm mua sắm, 
                            hãy nhớ đến với Totoshop nhé!
                            Bằng chứng cho sự nỗ lực của Totoshop suốt 10 năm qua chính là sự phủ rộng khắp các tỉnh phía Nam 
                            với 20 cửa hàng bán lẻ. Totoshop đã và đang không ngừng nổ lực trong thời gian sớm nhất sẽ có mặt
                            tại các tỉnh miền Trung và phủ sóng rộng khắp các tỉnh miền Đông/Tây/Nam Bộ để có cơ hội đến gần với khách hàng.</p>
                    </div>
                    <div class="blog__details__tags">
                        <a href="#">Fashion</a>
                        <a href="#">Street style</a>
                        <a href="#">Diversity</a>
                        <a href="#">Beauty</a>
                    </div>
                    <!-- <div class="blog__details__btns">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__details__btn__item">
                                    <h6><a href="#"><i class="fa fa-angle-left"></i> Previous posts</a></h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__details__btn__item blog__details__btn__item--next">
                                    <h6><a href="#">Next posts <i class="fa fa-angle-right"></i></a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog__details__comment">
                        <h5>3 Comment</h5>
                        <a href="#" class="leave-btn">Leave a comment</a>
                        <div class="blog__comment__item">
                            <div class="blog__comment__item__pic">
                                <img src="img/blog/details/comment-1.jpg" alt="">
                            </div>
                            <div class="blog__comment__item__text">
                                <h6>Brandon Kelley</h6>
                                <p>Duis voluptatum. Id vis consequat consetetur dissentiet, ceteros commune perpetua
                                mei et. Simul viderer facilisis egimus tractatos splendi.</p>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Seb 17, 2019</li>
                                    <li><i class="fa fa-heart-o"></i> 12</li>
                                    <li><i class="fa fa-share"></i> 1</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__comment__item blog__comment__item--reply">
                            <div class="blog__comment__item__pic">
                                <img src="img/blog/details/comment-2.jpg" alt="">
                            </div>
                            <div class="blog__comment__item__text">
                                <h6>Brandon Kelley</h6>
                                <p>Consequat consetetur dissentiet, ceteros commune perpetua mei et. Simul viderer
                                facilisis egimus ulla mcorper.</p>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Seb 17, 2019</li>
                                    <li><i class="fa fa-heart-o"></i> 12</li>
                                    <li><i class="fa fa-share"></i> 1</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__comment__item">
                            <div class="blog__comment__item__pic">
                                <img src="img/blog/details/comment-3.jpg" alt="">
                            </div>
                            <div class="blog__comment__item__text">
                                <h6>Brandon Kelley</h6>
                                <p>Duis voluptatum. Id vis consequat consetetur dissentiet, ceteros commune perpetua
                                mei et. Simul viderer facilisis egimus tractatos splendi.</p>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Seb 17, 2019</li>
                                    <li><i class="fa fa-heart-o"></i> 12</li>
                                    <li><i class="fa fa-share"></i> 1</li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="blog__sidebar">
                    <div class="blog__sidebar__item">
                        <div class="section-title">
                            <h4>Bảng chọn size</h4>
                        </div>
                        <ul>
                            <li><a href="#">Lắng nghe <span><i class="fa fa-check" aria-hidden="true"></i></span></a></li>
                            <li><a href="#">Thấu hiểu <span><i class="fa fa-check" aria-hidden="true"></i></span></a></li>
                            <li><a href="#">Quan tâm <span><i class="fa fa-check" aria-hidden="true"></i></span></a></li>
                            <li><a href="#">Trách nhiệm <span><i class="fa fa-check" aria-hidden="true"></i></span></a></li>
                            <li><a href="#">Sáng tạo<span><i class="fa fa-check" aria-hidden="true"></i></span></a></li>
                        </ul>
                        
                    </div>
                    <div class="blog__sidebar__item">
                        <div class="section-title">
                            <h4>Bảng chọn size</h4>
                        </div>
                        <img src="{{ asset('img/lookbook/bangchonsize.jpg') }}" alt="">
                        <!-- <a href="#" class="blog__feature__item">
                            <div class="blog__feature__item__pic">
                                <img src="img/blog/sidebar/fp-1.jpg" alt="">
                            </div>
                            <div class="blog__feature__item__text">
                                <h6>Amf Cannes Red Carpet Celebrities Kend...</h6>
                                <span>Seb 17, 2019</span>
                            </div>
                        </a>
                        <a href="#" class="blog__feature__item">
                            <div class="blog__feature__item__pic">
                                <img src="img/blog/sidebar/fp-2.jpg" alt="">
                            </div>
                            <div class="blog__feature__item__text">
                                <h6>Amf Cannes Red Carpet Celebrities Kend...</h6>
                                <span>Seb 17, 2019</span>
                            </div>
                        </a>
                        <a href="#" class="blog__feature__item">
                            <div class="blog__feature__item__pic">
                                <img src="img/blog/sidebar/fp-3.jpg" alt="">
                            </div>
                            <div class="blog__feature__item__text">
                                <h6>Amf Cannes Red Carpet Celebrities Kend...</h6>
                                <span>Seb 17, 2019</span>
                            </div>
                        </a> -->
                    </div>
                    <!-- <div class="blog__sidebar__item">
                        <div class="section-title">
                            <h4>Tags cloud</h4>
                        </div>
                        <div class="blog__sidebar__tags">
                            <a href="#">Fashion</a>
                            <a href="#">Street style</a>
                            <a href="#">Diversity</a>
                            <a href="#">Beauty</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection
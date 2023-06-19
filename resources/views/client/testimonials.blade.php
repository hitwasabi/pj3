@extends('layouts.base')
@section('title',"Lời chứng thực")

@section('content')
    @include('layouts.load')
    @include('client.header')
    <!--Page Title-->
        <section class="page-title centred" style="background-image: url({{asset('images/background/page-title-4.jpg')}});">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Lời chứng thực</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Lời chứng thực</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- testimonial-style-four -->
        <section class="testimonial-style-four centred sec-pad-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 testimonial-column">
                        <div class="testimonial-block-three">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-18"></i></div>
                                <h4>“Đừng lo về chất lượng, hãy lo cho túi tiền bạn nhé !”</h4>
                                <h5>Quang Phúc</h5>
                                <span class="designation">Người hướng dẫn</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 testimonial-column">
                        <div class="testimonial-block-three">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-18"></i></div>
                                <h4>"Mục tiêu của chúng tôi mỗi ngày là đảm bảo rằng nhu cầu của cư dân không chỉ được đáp ứng mà còn tốt hơn thế."</h4>
                                <h5>Anh Tú</h5>
                                <span class="designation">CEO</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 testimonial-column">
                        <div class="testimonial-block-three">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-18"></i></div>
                                <h4>“Quyền lợi của các bạn là mục tiêu của chúng tôi”</h4>
                                <h5>Anh Tú</h5>
                                <span class="designation">CEO</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-four end -->


        <!-- testimonial-style-two -->
        <section class="testimonial-style-two" style="background-image: url({{asset('images/background/testimonial-1.jpg')}});">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 inner-column">
                        <div class="single-item-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-18"></i></div>
                                    <div class="text">
                                        <h3>“Đừng lo về chất lượng, hãy lo cho túi tiền bạn nhé !”</h3>
                                    </div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="{{asset('images/resource/testimonial-1.jpg')}}" alt=""></figure>
                                        <h4>Quang Phúc</h4>
                                        <span class="designation">Người hướng dẫn</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-18"></i></div>
                                    <div class="text">
                                        <h3>"Mục tiêu của chúng tôi mỗi ngày là đảm bảo rằng nhu cầu của cư dân không chỉ được đáp ứng mà còn tốt hơn thế."</h3>
                                    </div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="{{asset('images/resource/testimonial-2.jpg')}}" alt=""></figure>
                                        <h4>Anh Tú</h4>
                                        <span class="designation">CEO</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-18"></i></div>
                                    <div class="text">
                                        <h3>“Quyền lợi của các bạn là mục tiêu của chúng tôi”</h3>
                                    </div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="{{asset('images/resource/testimonial-1.jpg')}}" alt=""></figure>
                                        <h4>Anh Tú</h4>
                                        <span class="designation">CEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-two end -->
        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>
@endsection

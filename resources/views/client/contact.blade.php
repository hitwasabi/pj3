@extends('layouts.base')
@section('title',"Liên hệ với chúng tôi")

@section('content')
    @include('layouts.load')
    @include('client.header')


        <!--Page Title-->
        <section class="page-title centred" style="background-image: url({{asset('images/background/page-title.jpg')}});">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Liên hệ chúng tôi</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Liên hệ chúng tôi</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- contact-info-section -->
        <section class="contact-info-section sec-pad centred">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Liên hệ chúng tôi</h5>
                    <h2>Giữ liên lạc</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                        <div class="info-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-32"></i></div>
                                <h4>Địa chỉ Email</h4>
                                <p>anhnamco9@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                        <div class="info-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-33"></i></div>
                                <h4>Số điện thoại</h4>
                                <p>0858862720</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                        <div class="info-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-34"></i></div>
                                <h4>Địa chỉ trụ sở</h4>
                                <p>Yên Sở City</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-section end -->
        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>
        @endsection

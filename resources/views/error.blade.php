<!-- xong -->
@extends('layouts.base')
@section('title',"404")

@section('content')
    @include('layouts.load')
    @include('client.header')

        <!--Page Title-->
        <section class="page-title-two bg-color-1 centred">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{asset('images/shape/shape-9.png')}});"></div>
                <div class="pattern-2" style="background-image: url({{asset('images/shape/shape-10.png')}});"></div>
            </div>
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>404</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>404</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- error-section -->
        <section class="error-section centred">
            <div class="auto-container">
                <div class="inner-box">
                    <h1>404</h1>
                    <h2>Không tìm thấy trang. <br />Có thể trang này không tồn tại hoặc đã bị xóa</h2>
                    <a href="{{url('/client/home')}}" class="theme-btn btn-one">Trở lại trang chủ</a>
                </div>
            </div>
        </section>
        <!-- error-section end -->
        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>
@endsection

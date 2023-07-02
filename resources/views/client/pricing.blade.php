@extends('layouts.base')
@section('title',"Giá gói")

@section('content')
    @include('layouts.load')
    @include('sweetalert::alert')
    @include('client.header')


        <!--Page Title-->
        <section class="page-title centred" style="background-image: url({{asset('images/background/page-title-4.jpg')}});">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Lựa chọn gói đăng bài</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Giá gói đăng bài</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- pricing-section -->
        <section class="pricing-section sec-pad centred">
            <div class="auto-container">
                <div class="tabs-box">
                    <ul class="tab-buttons ">
                        <h3>Gói theo tháng</h3>
                        <h4>Số dư tài khoản của bạn : {{number_format(\Illuminate\Support\Facades\Auth::user()->money, 0, '.', '.')}} đ</h4>
                    </ul>
                    <br>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                    <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <form action="{{url('client/buyPack')}}" method="POST">
                                            @csrf
                                        <div class="pricing-table">
                                            <div class="table-header">
                                                <div class="shape-1" style="background-image: url({{asset('images/shape/shape-4.png')}});"></div>
                                                <div class="shape-2" style="background-image: url({{asset('images/shape/shape-5.png')}});"></div>
                                                <h4>Gói thường</h4>
                                                <h2>45.000 đ <span> tháng</span></h2>
                                            </div>
                                            <div class="table-content">
                                                <ul class="feature-list clearfix">
                                                    <li>Giới hạn 2 bài /ngày</li>
                                                    <li>Thời gian tồn tại bài đăng 5 ngày</li>
                                                    <li>Phù hợp tất cả các loại hình tuy nhiên lượng tiếp cận khách hàng thấp hơn </li>
                                                </ul>
                                            </div>
                                            <div class="table-footer">
                                                <button class="muangay" type="submit">Mua ngay</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                    <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <form action="{{url('client/buyVipPack')}}" method="POST">
                                            @csrf
                                        <div class="pricing-table">
                                            <div class="table-header">
                                                <div class="shape-1" style="background-image: url({{asset('images/shape/shape-4.png')}});"></div>
                                                <div class="shape-2" style="background-image: url({{asset('images/shape/shape-5.png')}});"></div>
                                                <h4>Gói vip</h4>
                                                <h2>225.000 đ <span> tháng</span></h2>
                                            </div>
                                            <div class="table-content">
                                                <ul class="feature-list clearfix">
                                                    <li>Giới hạn 5 bài /ngày</li>
                                                    <li>Thời gian tồn tại bài đăng 10 ngày</li>
                                                    <li>Phù hợp khách hàng cá nhân/môi giới có lượng căn trống thường xuyên, cần cho thuê nhanh hơn.</li>
                                                </ul>
                                            </div>
                                            <div class="table-footer">
                                                <button class="muangay" type="submit">Mua ngay</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                    <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="pricing-table">
                                            <div class="table-header">
                                                <div class="shape-1" style="background-image: url({{asset('images/shape/shape-4.png')}});"></div>
                                                <div class="shape-2" style="background-image: url({{asset('images/shape/shape-5.png')}});"></div>
                                                <h4>Gói đa vũ trụ</h4>
                                                <h2>10.000.000  </h2>
                                            </div>
                                            <div class="table-content">
                                                <ul class="feature-list clearfix">

                                                </ul>
                                            </div>
                                            <div class="table-footer">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- pricing-section end -->


        <!-- clients-section -->
    @include('client.section')
        <!-- clients-section end -->
        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>
@endsection

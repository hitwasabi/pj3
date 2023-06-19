@extends('layouts.base')
@section('title',"Dịch vụ")

@section('content')
    @include('layouts.load')
    @include('client.header')

        <!--Page Title-->
        <section class="page-title centred" style="background-image: url({{asset('images/background/page-title-3.jpg')}});">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Dịch vụ của chúng tôi</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Dịch vụ của chúng tôi</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- feature-style-three -->
        <section class="feature-style-three service-page centred">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-24"></i></div>
                                <h4>Dịch vụ kinh doanh</h4>
                                <p> Tư vấn, thiết kế, phân tích</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-25"></i></div>
                                <h4>Dịch vụ Bất động sản</h4>
                                <p> Cho thuê hoặc quản lý bất động sản như đất đai, căn hộ, nhà ở, tòa nhà văn phòng và các loại tài sản khác liên quan đến bất động sản</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-26"></i></div>
                                <h4>Dịch vụ cá nhân</h4>
                                <p>Sửa chữa gia đình,tư vấn thuê nhà</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-27"></i></div>
                                <h4>Đại lý đáng tin cậy</h4>
                                <p>Có uy tín, trung thực và đáng tin cậy tuân thủ các quy chuẩn và tiêu chuẩn nghiêm ngặt</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-28"></i></div>
                                <h4>Cho thuê bất động sản</h4>
                                <p>Cho thuê tài sản của mình cho người khác sử dụng trong một khoảng thời gian nhất định với một khoản tiền thuê được thỏa thuận trước.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-29"></i></div>
                                <h4>Bán nhà</h4>
                                <p>Chuyển nhượng bất động sản từ người sở hữu hiện tại cho người mua với một giá trị được thỏa thuận trước.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-style-three end -->


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
                                        <h3>“Mục tiêu của chúng tôi mỗi ngày là đảm bảo rằng các nhu cầu của cư dân không chỉ được đáp ứng mà còn tốt hơn thế. Để thực hiện điều đó, chúng tôi cam kết cung cấp một môi trường hiện đại.”</h3>
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

        <!-- clients-section -->
        @include('client.section')
        <!-- clients-section end -->
        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>
@endsection

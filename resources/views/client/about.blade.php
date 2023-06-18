@extends('layouts.base')
@section('title',"Về chúng tôi")

@section('content')
    @include('layouts.load')
    @include('client.header')
    <div class="boxed_wrapper">
        <!--Page Title-->
        <section class="page-title centred" style="background-image: url({{asset('images/background/page-title-3.jpg')}});">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Về chúng tôi</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Về chúng tôi</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- about-section -->
        <section class="about-section about-page pb-0">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image_block_2">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('images/resource/about-1.jpg')}}" alt=""></figure>
                                    <div class="text wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <h2>20</h2>
                                        <h4>Năm  <br />Kinh nghiệm</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_3">
                                <div class="content-box">
                                    <div class="sec-title">
                                        <h5>Về chúng tôi</h5>
                                        <h2>Xin chào, tôi là Anh Tú</h2>
                                    </div>
                                    <div class="text">
                                        <p>Am hiểu cảm giác tình trạng của những người lên thành phố kiếm việc làm cần một căn nhà hợp lí</p>
                                        <p>Tôi và đội ngũ phát triển đã tạo ra trang web ChipHome thuê trọ hỗ trợ các bạn trong việc tìm nhà</p>
                                    </div>
                                    <ul class="list clearfix">
                                        <li>Uy tín , chất lượng</li>
                                        <li>Đội ngũ giàu kinh nghiệm</li>
                                    </ul>
                                    <div class="btn-box">
                                        <a href="../contact.blade.php" class="theme-btn btn-one">Hãy liên lạc cho tôi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- feature-style-three -->
        <section class="feature-style-three centred pb-110">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Dịch vụ của chúng tôi</h5>
                    <h2>Dịch vụ cho thuê</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-1"></i></div>
                            <h4>Danh tiếng xuất sắc</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-26"></i></div>
                            <h4>Đại lý cho thuê tốt</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-21"></i></div>
                            <h4>Dịch vụ cá nhân</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-1"></i></div>
                            <h4>Danh tiếng xuất sắc</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-26"></i></div>
                            <h4>Đại lý cho thuê tốt</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-21"></i></div>
                            <h4>Dịch vụ cá nhân</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-1"></i></div>
                            <h4>Danh tiếng xuất sắc</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-26"></i></div>
                            <h4>Đại lý cho thuê tốt</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-21"></i></div>
                            <h4>Dịch vụ cá nhân</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-style-three end -->
        @include('client.cta')
        <!-- clients-section -->
        <section class="clients-section bg-color-1">
            <div class="pattern-layer" style="background-image: url({{asset('images/shape/shape-1.png')}});"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                        <div class="sec-title">
                            <h5>Đối tác của chúng tôi</h5>
                            <h2>Chúng tôi sẽ trở thành đối tác lâu dài.</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                        <div class="clients-logo">
                            <ul class="logo-list clearfix">
                                <li>
                                    <figure class="logo"><a href="#"><img src="{{asset('images/clients/clients-1.png')}}" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="logo"><a href="#"><img src="{{asset('images/clients/clients-2.png')}}" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="logo"><a href="#"><img src="{{asset('images/clients/clients-3.png')}}" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="logo"><a href="#"><img src="{{asset('images/clients/clients-4.png')}}" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="logo"><a href="#"><img src="{{asset('images/clients/clients-5.png')}}" alt=""></a></figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- clients-section end -->


        <!-- team-section -->
        <section class="team-section sec-pad centred">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Our Agents</h5>
                    <h2>Meet Our Excellent Agents</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('images/team/team-6.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h4><a href="../agents-details.blade.php">Jennifer Lawrence</a></h4>
                                        <span class="designation">Senior Agent</span>
                                        <ul class="social-links clearfix">
                                            <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('images/team/team-7.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h4><a href="../agents-details.blade.php">Benedict Cumberbatch</a></h4>
                                        <span class="designation">Senior Agent</span>
                                        <ul class="social-links clearfix">
                                            <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('images/team/team-8.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h4><a href="../agents-details.blade.php">Elizabeth Winstead</a></h4>
                                        <span class="designation">Senior Agent</span>
                                        <ul class="social-links clearfix">
                                            <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>
@endsection

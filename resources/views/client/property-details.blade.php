@extends('layouts.base')
@section('title',"Chi tiết phòng")

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
                    <h1>Chi tiết phòng</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Chi tiết phòng</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- property-details -->
        <section class="property-details property-details-one">
            <div class="auto-container">
                <div class="top-details clearfix">
                    <div class="left-column pull-left clearfix">
                        <h3>The Citizen Apartment</h3>
                        <div class="author-info clearfix">
                            <div class="author-box pull-left">
                                <figure class="author-thumb"><img src="{{asset('images/feature/author-1.jpg')}}" alt=""></figure>
                                <h6>Michael Bean</h6>
                            </div>
                            <ul class="rating clearfix pull-left">
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-40"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-column pull-right clearfix">
                        <div class="price-inner clearfix">
                            <ul class="category clearfix pull-left">
                                <li><a href="{{url('/client/home/property-details')}}">Building</a></li>
                                <li><a href="{{url('/client/home/property-details')}}">Cho thuê</a></li>
                            </ul>
                            <div class="price-box pull-right">
                                <h3>$30,000.00</h3>
                            </div>
                        </div>
                        <ul class="other-option pull-right clearfix">
                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="property-details-content">
                            <div class="carousel-inner">
                                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                    <figure class="image-box"><img src="{{asset('images/resource/property-details-1.jpg')}}" alt=""></figure>
                                    <figure class="image-box"><img src="{{asset('images/resource/property-details-1.jpg')}}" alt=""></figure>
                                    <figure class="image-box"><img src="{{asset('images/resource/property-details-1.jpg')}}" alt=""></figure>
                                </div>
                            </div>
                            <div class="discription-box content-widget">
                                <div class="title-box">
                                    <h4>Mô tả phòng</h4>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud exercitation laboris nisi ut aliquip ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat</p>
                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim  est laborum. Sed perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium totam rem aperiam.</p>
                                </div>
                            </div>
                            <div class="details-box content-widget">
                                <div class="title-box">
                                    <h4>Chi tiết phòng</h4>
                                </div>
                                <ul class="list clearfix">
                                    <li>ID: <span>ZOP251C</span></li>
                                    <li>Số phòng: <span>06</span></li>
                                    <li>Phòng ngủ: <span>04</span></li>
                                    <li>Năm xây dựng: <span>01 April, 2019</span></li>
                                    <li>Nhà vệ sinh: <span>03</span></li>
                                    <li>Tình trạng: <span>Cho thuê</span></li>
                                    <li>Diện tích: <span>2024 Sq Ft</span></li>
                                </ul>
                            </div>

                            <div class="location-box content-widget">
                                <div class="title-box">
                                    <h4>Vị trí</h4>
                                </div>
                                <ul class="info clearfix">
                                    <li><span>Địa chỉ:</span> Virginia temple hills</li>
                                    <li><span>Thành phố:</span> United State</li>
                                    <li><span>Quận/huyện:</span> California</li>
                                    <li><span>Đường/phố:</span> Andersonville</li>
                                </ul>

                            </div>


                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="property-sidebar default-sidebar">
                            <div class="author-widget sidebar-widget">
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="{{asset('images/resource/author-1.jpg')}}" alt=""></figure>
                                    <div class="inner">
                                        <h4>Michael Bean</h4>
                                        <ul class="info clearfix">
                                            <li><i class="fas fa-map-marker-alt"></i>84 St. John Wood High Street,
                                            St Johns Wood</li>
                                            <li><i class="fas fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{url('/client/home/agents-details')}}">View Listing</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="similar-content">
                    <div class="title">
                        <h4>Các phòng tương tự</h4>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{asset('images/feature/feature-1.jpg')}}" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="author-info clearfix">
                                            <div class="author pull-left">
                                                <figure class="author-thumb"><img src="{{asset('images/feature/author-1.jpg')}}" alt=""></figure>
                                                <h6>Michael Bean</h6>
                                            </div>
                                            <div class="buy-btn pull-right"><a href="{{url('/client/home/property-details')}}">For Buy</a></div>
                                        </div>
                                        <div class="title-text"><h4><a href="{{url('/client/home/property-details')}}">Villa on Grand Avenue</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Start From</h6>
                                                <h4>$30,000.00</h4>
                                            </div>
                                            <ul class="other-option pull-right clearfix">
                                                <li><a href="{{url('/client/home/property-details')}}"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 Beds</li>
                                            <li><i class="icon-15"></i>2 Baths</li>
                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                        </ul>
                                        <div class="btn-box"><a href="{{url('/client/home/property-details')}}" class="theme-btn btn-two">See Details</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{asset('images/feature/feature-2.jpg')}}" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="author-info clearfix">
                                            <div class="author pull-left">
                                                <figure class="author-thumb"><img src="{{asset('images/feature/author-2.jpg')}}" alt=""></figure>
                                                <h6>Robert Niro</h6>
                                            </div>
                                            <div class="buy-btn pull-right"><a href="{{url('/client/home/property-details')}}">For Rent</a></div>
                                        </div>
                                        <div class="title-text"><h4><a href="{{url('/client/home/property-details')}}">Contemporary Apartment</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Start From</h6>
                                                <h4>$45,000.00</h4>
                                            </div>
                                            <ul class="other-option pull-right clearfix">
                                                <li><a href="{{url('/client/home/property-details')}}"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 Beds</li>
                                            <li><i class="icon-15"></i>2 Baths</li>
                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                        </ul>
                                        <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/feature/feature-3.jpg" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="author-info clearfix">
                                            <div class="author pull-left">
                                                <figure class="author-thumb"><img src="assets/images/feature/author-3.jpg" alt=""></figure>
                                                <h6>Keira Mel</h6>
                                            </div>
                                            <div class="buy-btn pull-right"><a href="property-details.html">Sold Out</a></div>
                                        </div>
                                        <div class="title-text"><h4><a href="property-details.html">Luxury Villa With Pool</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Start From</h6>
                                                <h4>$63,000.00</h4>
                                            </div>
                                            <ul class="other-option pull-right clearfix">
                                                <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 Beds</li>
                                            <li><i class="icon-15"></i>2 Baths</li>
                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                        </ul>
                                        <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- property-details end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>

@endsection

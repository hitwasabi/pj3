@extends('layouts.base')
@section('title',"Chi tiết chủ trọ")

@section('content')
    @include('layouts.load')
    @include('client.header')


    <!--Page Title-->
        <section class="page-title centred" style="background-image: url({{asset('images/background/page-title.jpg')}});">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Chi tiết chủ trọ</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Chi tiết chủ trọ</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- agent-details -->
        <section class="agent-details">
            <div class="auto-container">
                <div class="agent-details-content">
                    <div class="agents-block-one">
                        <div class="inner-box mr-0">
                            <figure class="image-box"><img src="{{asset('images/agents/agent-details-1.jpg')}}" alt=""></figure>
                            <div class="content-box">
                                <div class="upper clearfix">
                                    <div class="title-inner pull-left">
                                        <h4>Michael Bean</h4>
                                        <span class="designation">Modern House Real Estate Agent</span>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>Success isn’t really that difficult. There is a significant portion of the population here in North America, that actually want and need success to be hard! Why? So they then have a built-in excuse.when things don’t go their way! Pretty sad situation, to say the least. Have some fun and hypnotize yourself to be your very own Ghost of Christmas future”</p>
                                </div>
                                <ul class="info clearfix mr-0">
                                    <li><i class="fab fa fa-envelope"></i><a href="#">bean@realshed.com</a></li>
                                    <li><i class="fab fa fa-phone"></i><a href="#">030 3057 1965</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- agent-details end -->


        <!-- agents-page-section -->
        <section class="agents-page-section agent-details-page">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="agents-content-side tabs-box">
                            <div class="group-title">
                                <h3>Danh sách bài đăng của Michael Bean</h3>
                            </div>
                            <div class="item-shorting clearfix">
                                <div class="right-column  clearfix">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Sắp xếp theo: Mới nhất">Mới nhất</option>
                                            <option value="1">New Arrival</option>
                                        </select>
                                    </div>
                                    <div class="short-box clearfix">
                                    </div>
                                    <div class="short-menu clearfix">
                                        <button class="list-view on"><i class="icon-35"></i></button>
                                        <button class="grid-view"><i class="icon-36"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="wrapper list">
                                        <div class="deals-list-content list-item">
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="{{asset('images/resource/deals-3.jpg')}}" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                        <div class="buy-btn"><a href="#">For Buy</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text"><h4><a href="{{url('/client/home/property-details')}}">Villa on Grand Avenue</a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$30,000.00</h4>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a href="{{url('/client/home/property-details')}}" class="theme-btn btn-two">See Details</a></div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="#"><i class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/deals-4.jpg" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                        <div class="buy-btn"><a href="property-details.blade.php">For Buy</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text"><h4><a href="property-details.blade.php">Contemporary Apartment</a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$20,000.00</h4>
                                                            </div>
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                                    <span>Michael Bean</span>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/deals-5.jpg" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                        <div class="buy-btn"><a href="property-details.blade.php">For Buy</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text"><h4><a href="property-details.blade.php">Luxury Villa With Pool</a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$35,000.00</h4>
                                                            </div>
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                                    <span>Michael Bean</span>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/deals-6.jpg" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                        <div class="buy-btn"><a href="property-details.blade.php">For Buy</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text"><h4><a href="property-details.blade.php">Home in Merrick Way</a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$45,000.00</h4>
                                                            </div>
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                                    <span>Michael Bean</span>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/deals-7.jpg" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                        <div class="buy-btn"><a href="property-details.blade.php">For Buy</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text"><h4><a href="property-details.blade.php">Apartment in Glasgow</a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$40,000.00</h4>
                                                            </div>
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                                    <span>Michael Bean</span>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="deals-grid-content">
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <figure class="image"><img src="assets/images/feature/feature-1.jpg" alt=""></figure>
                                                                <div class="batch"><i class="icon-11"></i></div>
                                                                <span class="category">Featured</span>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-info clearfix">
                                                                    <div class="author pull-left">
                                                                        <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                                                        <h6>Michael Bean</h6>
                                                                    </div>
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">For Buy</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Luxury Villa With Pool</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$30,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <figure class="image"><img src="assets/images/feature/feature-2.jpg" alt=""></figure>
                                                                <div class="batch"><i class="icon-11"></i></div>
                                                                <span class="category">Featured</span>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-info clearfix">
                                                                    <div class="author pull-left">
                                                                        <figure class="author-thumb"><img src="assets/images/feature/author-2.jpg" alt=""></figure>
                                                                        <h6>Robert Niro</h6>
                                                                    </div>
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">For Rent</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Contemporary Apartment</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$45,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
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
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">Sold Out</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Villa on Grand Avenue</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$63,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <figure class="image"><img src="assets/images/feature/feature-4.jpg" alt=""></figure>
                                                                <div class="batch"><i class="icon-11"></i></div>
                                                                <span class="category">Featured</span>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-info clearfix">
                                                                    <div class="author pull-left">
                                                                        <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                                                        <h6>Michael Bean</h6>
                                                                    </div>
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">For Buy</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Home in Merrick Way</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$30,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <figure class="image"><img src="assets/images/feature/feature-5.jpg" alt=""></figure>
                                                                <div class="batch"><i class="icon-11"></i></div>
                                                                <span class="category">Featured</span>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-info clearfix">
                                                                    <div class="author pull-left">
                                                                        <figure class="author-thumb"><img src="assets/images/feature/author-2.jpg" alt=""></figure>
                                                                        <h6>Robert Niro</h6>
                                                                    </div>
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">For Rent</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Apartment in Glasgow</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$45,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <figure class="image"><img src="assets/images/feature/feature-6.jpg" alt=""></figure>
                                                                <div class="batch"><i class="icon-11"></i></div>
                                                                <span class="category">Featured</span>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-info clearfix">
                                                                    <div class="author pull-left">
                                                                        <figure class="author-thumb"><img src="assets/images/feature/author-3.jpg" alt=""></figure>
                                                                        <h6>Keira Mel</h6>
                                                                    </div>
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">Sold Out</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Family Home For Sale</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$63,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-2">
                                    <div class="wrapper list">
                                        <div class="deals-list-content list-item">
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/deals-3.jpg" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                        <div class="buy-btn"><a href="property-details.blade.php">For Buy</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text"><h4><a href="property-details.blade.php">Villa on Grand Avenue</a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$30,000.00</h4>
                                                            </div>
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                                    <span>Michael Bean</span>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/deals-4.jpg" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                        <div class="buy-btn"><a href="property-details.blade.php">For Buy</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text"><h4><a href="property-details.blade.php">Contemporary Apartment</a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$20,000.00</h4>
                                                            </div>
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                                    <span>Michael Bean</span>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/deals-5.jpg" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                        <div class="buy-btn"><a href="property-details.blade.php">For Buy</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text"><h4><a href="property-details.blade.php">Luxury Villa With Pool</a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$35,000.00</h4>
                                                            </div>
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                                    <span>Michael Bean</span>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/deals-6.jpg" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                        <div class="buy-btn"><a href="property-details.blade.php">For Buy</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text"><h4><a href="property-details.blade.php">Home in Merrick Way</a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$45,000.00</h4>
                                                            </div>
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                                    <span>Michael Bean</span>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/deals-7.jpg" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                        <div class="buy-btn"><a href="property-details.blade.php">For Buy</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text"><h4><a href="property-details.blade.php">Apartment in Glasgow</a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$40,000.00</h4>
                                                            </div>
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                                    <span>Michael Bean</span>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="deals-grid-content">
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <figure class="image"><img src="assets/images/feature/feature-1.jpg" alt=""></figure>
                                                                <div class="batch"><i class="icon-11"></i></div>
                                                                <span class="category">Featured</span>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-info clearfix">
                                                                    <div class="author pull-left">
                                                                        <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                                                        <h6>Michael Bean</h6>
                                                                    </div>
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">For Buy</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Luxury Villa With Pool</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$30,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <figure class="image"><img src="assets/images/feature/feature-2.jpg" alt=""></figure>
                                                                <div class="batch"><i class="icon-11"></i></div>
                                                                <span class="category">Featured</span>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-info clearfix">
                                                                    <div class="author pull-left">
                                                                        <figure class="author-thumb"><img src="assets/images/feature/author-2.jpg" alt=""></figure>
                                                                        <h6>Robert Niro</h6>
                                                                    </div>
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">For Rent</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Contemporary Apartment</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$45,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
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
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">Sold Out</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Luxury Villa With Pool</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$63,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <figure class="image"><img src="assets/images/feature/feature-4.jpg" alt=""></figure>
                                                                <div class="batch"><i class="icon-11"></i></div>
                                                                <span class="category">Featured</span>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-info clearfix">
                                                                    <div class="author pull-left">
                                                                        <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                                                        <h6>Michael Bean</h6>
                                                                    </div>
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">For Buy</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Home in Merrick Way</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$30,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <figure class="image"><img src="assets/images/feature/feature-5.jpg" alt=""></figure>
                                                                <div class="batch"><i class="icon-11"></i></div>
                                                                <span class="category">Featured</span>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-info clearfix">
                                                                    <div class="author pull-left">
                                                                        <figure class="author-thumb"><img src="assets/images/feature/author-2.jpg" alt=""></figure>
                                                                        <h6>Robert Niro</h6>
                                                                    </div>
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">For Rent</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Apartment in Glasgow</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$45,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <figure class="image"><img src="assets/images/feature/feature-6.jpg" alt=""></figure>
                                                                <div class="batch"><i class="icon-11"></i></div>
                                                                <span class="category">Featured</span>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-info clearfix">
                                                                    <div class="author pull-left">
                                                                        <figure class="author-thumb"><img src="assets/images/feature/author-3.jpg" alt=""></figure>
                                                                        <h6>Keira Mel</h6>
                                                                    </div>
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">Sold Out</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Family Home For Sale</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$63,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="agents-details.html"><i class="icon-12"></i></a></li>
                                                                        <li><a href="agents-details.html"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-3">
                                    <div class="wrapper list">
                                        <div class="deals-list-content list-item">
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/deals-3.jpg" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                        <div class="buy-btn"><a href="property-details.blade.php">For Buy</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text"><h4><a href="property-details.blade.php">Villa on Grand Avenue</a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$30,000.00</h4>
                                                            </div>
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                                    <span>Michael Bean</span>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/deals-4.jpg" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                        <div class="buy-btn"><a href="property-details.blade.php">For Buy</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text"><h4><a href="property-details.blade.php">Contemporary Apartment</a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$20,000.00</h4>
                                                            </div>
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                                    <span>Michael Bean</span>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/deals-5.jpg" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                        <div class="buy-btn"><a href="property-details.blade.php">For Buy</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text"><h4><a href="property-details.blade.php">Luxury Villa With Pool</a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$35,000.00</h4>
                                                            </div>
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                                    <span>Michael Bean</span>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/deals-6.jpg" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                        <div class="buy-btn"><a href="property-details.blade.php">For Buy</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text"><h4><a href="property-details.blade.php">Home in Merrick Way</a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$45,000.00</h4>
                                                            </div>
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                                    <span>Michael Bean</span>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/deals-7.jpg" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                        <div class="buy-btn"><a href="property-details.blade.php">For Buy</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text"><h4><a href="property-details.blade.php">Apartment in Glasgow</a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$40,000.00</h4>
                                                            </div>
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                                    <span>Michael Bean</span>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="deals-grid-content">
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <figure class="image"><img src="assets/images/feature/feature-1.jpg" alt=""></figure>
                                                                <div class="batch"><i class="icon-11"></i></div>
                                                                <span class="category">Featured</span>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-info clearfix">
                                                                    <div class="author pull-left">
                                                                        <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                                                        <h6>Michael Bean</h6>
                                                                    </div>
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">For Buy</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Luxury Villa With Pool</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$30,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <figure class="image"><img src="assets/images/feature/feature-2.jpg" alt=""></figure>
                                                                <div class="batch"><i class="icon-11"></i></div>
                                                                <span class="category">Featured</span>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-info clearfix">
                                                                    <div class="author pull-left">
                                                                        <figure class="author-thumb"><img src="assets/images/feature/author-2.jpg" alt=""></figure>
                                                                        <h6>Robert Niro</h6>
                                                                    </div>
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">For Rent</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Contemporary Apartment</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$45,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
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
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">Sold Out</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Villa on Grand Avenue</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$63,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <figure class="image"><img src="assets/images/feature/feature-4.jpg" alt=""></figure>
                                                                <div class="batch"><i class="icon-11"></i></div>
                                                                <span class="category">Featured</span>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-info clearfix">
                                                                    <div class="author pull-left">
                                                                        <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                                                        <h6>Michael Bean</h6>
                                                                    </div>
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">For Buy</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Home in Merrick Way</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$30,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <figure class="image"><img src="assets/images/feature/feature-5.jpg" alt=""></figure>
                                                                <div class="batch"><i class="icon-11"></i></div>
                                                                <span class="category">Featured</span>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-info clearfix">
                                                                    <div class="author pull-left">
                                                                        <figure class="author-thumb"><img src="assets/images/feature/author-2.jpg" alt=""></figure>
                                                                        <h6>Robert Niro</h6>
                                                                    </div>
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">For Rent</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Apartment in Glasgow</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$45,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <figure class="image"><img src="assets/images/feature/feature-6.jpg" alt=""></figure>
                                                                <div class="batch"><i class="icon-11"></i></div>
                                                                <span class="category">Featured</span>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-info clearfix">
                                                                    <div class="author pull-left">
                                                                        <figure class="author-thumb"><img src="assets/images/feature/author-3.jpg" alt=""></figure>
                                                                        <h6>Keira Mel</h6>
                                                                    </div>
                                                                    <div class="buy-btn pull-right"><a href="property-details.blade.php">Sold Out</a></div>
                                                                </div>
                                                                <div class="title-text"><h4><a href="property-details.blade.php">Family Home For Sale</a></h4></div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>$63,000.00</h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a href="property-details.blade.php"><i class="icon-12"></i></a></li>
                                                                        <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a href="property-details.blade.php" class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
        <!-- agents-page-section end -->
        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>
@endsection

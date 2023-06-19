@extends('layouts.base')
@section('title',"Danh sách phòng trọ")

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
                    <h1>Danh sách phòng trọ</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Danh sách phòng trọ</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- property-page-section -->
        <section class="property-page-section property-list">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar property-sidebar">
                            <div class="filter-widget sidebar-widget">
                                <div class="widget-title">
                                    <h5>Phòng trọ</h5>
                                </div>
                                <div class="widget-content">
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Thể loại phòng">Các loại</option>
                                           <option value="1">Phòng xịn</option>
                                           <option value="2">Phòng bình thường</option>
                                           <option value="3">Phòng mới</option>
                                           <option value="4">Phòng cũ</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Thành phố"></option>
                                           <option value="1">Hà Nội</option>
                                           <option value="2">Hồ Chí Minh</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Quận,huyện"></option>
                                           <option value="1">New York</option>
                                           <option value="2">California</option>
                                           <option value="3">London</option>
                                           <option value="4">Maxico</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Đường,phố"></option>
                                           <option value="1">New York</option>
                                           <option value="2">California</option>
                                           <option value="3">London</option>
                                           <option value="4">Maxico</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Số Phòng"></option>
                                           <option value="1">2+ Phòng</option>
                                           <option value="2">3+ Phòng</option>
                                           <option value="3">4+ Phòng</option>
                                           <option value="4">5+ Phòng</option>
                                        </select>
                                    </div>
                                    <div class="filter-btn">
                                        <button type="submit" class="theme-btn btn-one"><i class="fas fa-filter"></i>&nbsp;Lọc</button>
                                    </div>
                                </div>
                            </div>
                            <div class="price-filter sidebar-widget">
                                <div class="widget-title">
                                    <h5>Lựa chọn khoảng giá</h5>
                                </div>
                                <div class="range-slider clearfix">
                                    <div class="clearfix">
                                        <div class="input">
                                            <input type="text" class="property-amount" name="field-name" readonly="">
                                        </div>
                                    </div>
                                    <div class="price-range-slider"></div>
                                </div>
                            </div>
                            <div class="category-widget sidebar-widget">
                                <div class="widget-title">
                                    <h5>Trạng thái nhà trọ</h5>
                                </div>
                                <ul class="category-list clearfix">
                                    <li><a href="{{url('/client/home/property-details')}}">Cho thuê <span>(200)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="property-content-side">
                            <div class="item-shorting clearfix">
                                <div class="left-column pull-left">
                                    <h5>Kết quả tìm kiếm: </h5>
                                </div>
                                <div class="right-column pull-right clearfix">
                                    <div class="short-box clearfix">
                                        <div class="select-box">
                                            <select class="wide">
                                               <option data-display="Sắp xếp theo:">Mới nhất</option>
                                               <option value="1">Được yêu thích</option>
                                               <option value="2">Phổ biến nhất</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="short-menu clearfix">
                                        <button class="list-view on"><i class="icon-35"></i></button>
                                        <button class="grid-view"><i class="icon-36"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper list">
                                <div class="deals-list-content list-item">
                                    <div class="deals-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('images/resource/deals-3.jpg')}}" alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                                <div class="buy-btn"><a href="{{url('/client/home/property-details')}}">For Buy</a></div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text"><h4><a href="{{url('/client/home/property-details')}}">Villa on Grand Avenue</a></h4></div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$30,000.00</h4>
                                                    </div>
                                                    <div class="author-box pull-right">
                                                        <figure class="author-thumb">
                                                            <img src="{{asset('images/feature/author-1.jpg')}}" alt="">
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
                                                    <div class="btn-box pull-left"><a href="{{url('/client/home/property-details')}}" class="theme-btn btn-two">See Details</a></div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <li><a href="{{url('/client/home/property-details')}}"><i class="icon-12"></i></a></li>
                                                        <li><a href="{{url('/client/home/property-details')}}"><i class="icon-13"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="deals-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('images/resource/deals-4.jpg')}}" alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                                <div class="buy-btn"><a href="{{url('/client/home/property-details')}}">For Buy</a></div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text"><h4><a href="{{url('/client/home/property-details')}}">Contemporary Apartment</a></h4></div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$20,000.00</h4>
                                                    </div>
                                                    <div class="author-box pull-right">
                                                        <figure class="author-thumb">
                                                            <img src="{{asset('images/feature/author-1.jpg')}}" alt="">
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
                                                <div class="title-text"><h4><a href="property-details.blade.php">Apartment in Glasgow</a></h4></div>
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
                                                <div class="title-text"><h4><a href="property-details.blade.php">Family Home For Sale</a></h4></div>
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
                                <div class="deals-grid-content grid-item">
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
                                                            <div class="buy-btn pull-right"><a href="{{url('/client/home/property-details')}}">For Buy</a></div>
                                                        </div>
                                                        <div class="title-text"><h4><a href="{{url('/client/home/property-details')}}">Villa on Grand Avenue</a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$30,000.00</h4>
                                                            </div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="{{url('/client/home/property-details')}}"><i class="icon-12"></i></a></li>
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
                            <div class="pagination-wrapper">
                                <ul class="pagination clearfix">
                                    <li><a href="property-list.html" class="current">1</a></li>
                                    <li><a href="property-list.html">2</a></li>
                                    <li><a href="property-list.html">3</a></li>
                                    <li><a href="property-list.html"><i class="fas fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- property-page-section end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>
        @endsection

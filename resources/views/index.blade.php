@extends('layouts.base')
@section('title',"Trang chủ")
<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close"><i class="far fa-times"></i></div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="c" class="letters-loading">
                                c
                            </span>
                            <span data-text-preloader="h" class="letters-loading">
                                h
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="p" class="letters-loading">
                                p
                            </span>
                            <span data-text-preloader="h" class="letters-loading">
                                h
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="m" class="letters-loading">
                                m
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- switcher menu -->
        <div class="switcher">
            <div class="switch_btn">
                <button><i class="fas fa-palette"></i></button>
            </div>
            <div class="switch_menu">
                <!-- color changer -->
                <div class="switcher_container">
                    <ul id="styleOptions" title="switch styling">
                        <li>
                            <a href="javascript: void(0)" data-theme="green" class="green-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end switcher menu -->


        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="top-inner clearfix">
                    <div class="left-column pull-left">
                        <ul class="info clearfix">
                            <li><i class="far fa-map-marker-alt"></i>Yên Sở City</li>
                            <li><i class="far fa-clock"></i>Thứ 2 - Thứ 7  9.00h - 18.00h</li>
                            <li><i class="far fa-phone"></i>+0858862720</li>
                        </ul>
                    </div>
                    <div class="right-column pull-right">
                        <ul class="social-links clearfix">
                            <li><a href="https://www.facebook.com/Nhoctuthuoc/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/hitwasabi/"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <div class="sign-box">
                            <a href="signin.html"><i class="fas fa-user"></i>Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="assets/images/Home.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="index.html"><span>Trang chủ</span></a></li>
                                        <li class="dropdown"><a href="index.html"><span>Danh sách phòng</span></a>
                                            <ul>
                                                <li><a href="property-list.html">Property List</a></li>
                                                <li><a href="property-details-4.html">Property Details 04</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.html"><span>Các trang</span></a>
                                            <div class="megamenu">
                                                <div class="row clearfix">
                                                    <div class="col-xl-4 column">
                                                        <ul>
                                                            <li><h4>Trang</h4></li>
                                                            <li><a href="about.html">Về chúng tôi</a></li>
                                                            <li><a href="services.html">Dịch vụ của chúng tôi</a></li>
                                                            <li><a href="faq.html">Các câu hỏi tiêu biểu</a></li>
                                                            <li><a href="pricing.html">Giá các gói</a></li>
                                                            <li><a href="compare-roperties.html">So sánh các phòng</a></li>
                                                            <li><a href="categories.html">Trang danh mục</a></li>
                                                            <li><a href="testimonials.html">Lời chứng thực</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-4 column">
                                                        <ul>
                                                            <li><h4>Pages</h4></li>
                                                            <li><a href="gallery.html">Our Gallery</a></li>
                                                            <li><a href="profile.html">My Profile</a></li>
                                                            <li><a href="signin.html">Sign In</a></li>
                                                            <li><a href="signup.html">Sign Up</a></li>
                                                            <li><a href="error.html">404</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-4 column">
                                                        <ul>
                                                            <li><h4>Tin tức</h4></li>
                                                            <li><a href="blog-2.html">Blog 02</a></li>
                                                            <li><a href="blog-3.html">Blog 03</a></li>
                                                            <li><a href="blog-details.html">Blog Details</a></li>
                                                            <li><a href="contact.html">Contact Us</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown"><a href="index.html"><span>Blog</span></a>
                                            <ul>
                                                <li><a href="blog-1.html">Blog 01</a></li>
                                                <li><a href="blog-2.html">Blog 02</a></li>
                                                <li><a href="blog-3.html">Blog 03</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html"><span>Liên hệ</span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="assets/images/Home.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->


        <!-- banner-section -->
        <section class="banner-section" style="background-image: url(assets/images/banner/banner-1.jpg);">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="content-box centred">
                        <h2>Lựa chọn Phòng Trọ phù hợp cho riêng bạn!</h2>
                    </div>
                    <div class="search-field">
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons centred clearfix">
                                    <li class="tab-btn" data-tab="#tab-1">RENT</li>
                                </ul>
                            </div>
                            <div class="tabs-content info-group">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="inner-box">
                                        <div class="top-search">
                                            <form action="http://azim.commonsupport.com/Realshed/index.html" method="post" class="search-form">
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Tìm kiếm phòng trọ</label>
                                                            <div class="field-input">
                                                                <i class="fas fa-search"></i>
                                                                <input type="search" name="search-field" placeholder="Tìm kiếm..." required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Thành phố</label>
                                                            <div class="select-box">
                                                                <i class="far fa-compass"></i>
                                                                <select class="wide">
                                                                   <option data-display="Nhập Thành Phố">Hà Nội</option>
                                                                   <option value="1">Hồ Chí Minh</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Quận , huyện</label>
                                                            <div class="select-box">
                                                                <i class="far fa-compass"></i>
                                                                <select class="wide">
                                                                   <option data-display="Nhập Quận , huyện">Quận Hoàn Kiếm</option>
                                                                   <option value="1">Quận Đống Đa</option>
                                                                   <option value="2">Quận Hai Bà Trưng</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Đường,phố</label>
                                                            <div class="select-box">
                                                                <i class="far fa-compass"></i>
                                                                <select class="wide">
                                                                   <option data-display="Nhập đường,phố">Nhập đường,phố</option>
                                                                   <option value="1">New York</option>
                                                                   <option value="2">California</option>
                                                                   <option value="3">London</option>
                                                                   <option value="4">Maxico</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Loại phòng</label>
                                                            <div class="select-box">
                                                                <select class="wide">
                                                                   <option data-display="Các loại">Đầy đủ các loại</option>
                                                                   <option value="1">Xịn xò</option>
                                                                   <option value="2">Bình thường</option>
                                                                   <option value="3">Cũ</option>
                                                                   <option value="4">Mới</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="search-btn">
                                                    <button type="submit"><i class="fas fa-search"></i>Tìm kiếm</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="switch_btn_one ">
                                            <button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Tìm kiếm nâng cao<i class="fas fa-angle-down"></i></button>
                                            <div class="advanced-search">
                                                <div class="close-btn">
                                                    <a href="#" class="close-side-widget"><i class="far fa-times"></i></a>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Phòng ngủ</label>
                                                            <div class="select-box">
                                                                <select class="wide">
                                                                   <option data-display="Một phòng ngủ">Một phòng ngủ</option>
                                                                   <option value="1">Hai phòng ngủ</option>
                                                                   <option value="2">Ba phòng ngủ</option>
                                                                   <option value="3">Bốn phòng ngủ</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Sắp xếp theo</label>
                                                            <div class="select-box">
                                                                <select class="wide">
                                                                   <option data-display="Phòng phổ biến">Phòng phổ biến</option>
                                                                   <option value="1">Phòng được yêu thích</option>
                                                                   <option value="2">Phòng Mới</option>
                                                                   <option value="3">Phòng bình thường</option>
                                                                   <option value="4">Phòng Xịn</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Tầng</label>
                                                            <div class="select-box">
                                                                <select class="wide">
                                                                   <option data-display="Lựa chọn số tầng">Lựa chọn số tầng</option>
                                                                   <option value="1">1 tầng</option>
                                                                   <option value="2">2 tầng</option>
                                                                   <option value="3">3 tầng</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Phòng vệ sinh</label>
                                                            <div class="select-box">
                                                                <select class="wide">
                                                                   <option data-display="Lựa chọn số phòng vệ sinh">Một phòng vệ sinh</option>
                                                                   <option value="1">Hai phòng vệ sinh</option>
                                                                   <option value="2">Ba phòng vệ sinh</option>
                                                                   <option value="3">Bốn phòng vệ sinh</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="range-box">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                            <div class="price-range">
                                                                <h6>Lựa chọn khoảng giá</h6>
                                                                <div class="range-input">
                                                                    <div class="input"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                                                                </div>
                                                               <!-- Thay đổi số liệu trong class bên dưới -->
                                                                <div class="price-range-slider"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                            <div class="area-range">
                                                                <h6>Lựa chọn diện tích</h6>
                                                                <div class="range-input">
                                                                    <div class="input"><input type="text" class="area-range" name="field-name" readonly=""></div>
                                                                </div>
                                                                <div class="area-range-slider"></div>
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
        <!-- banner-section end -->


        <!-- category-section -->
        <section class="category-section centred bg-color-1">
            <div class="auto-container">
                <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <ul class="category-list clearfix">
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-1"></i></div>
                                    <h5><a href="property-details.html">Nhà trọ riêng</a></h5>
                                    <span>52</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-3"></i></div>
                                    <h5><a href="property-details.html">Nhà trọ chung cư</a></h5>
                                    <span>35</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="more-btn"><a href="categories.html" class="theme-btn btn-one">Xem tất cả</a></div>
                </div>
            </div>
        </section>
        <!-- category-section end -->

        <!-- deals-section -->
        <section class="deals-section sec-pad">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Phòng thuê trọ hot</h5>
                    <h2>Ưu đãi cực kì tốt</h2>
                </div>
                <div class="deals-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    <div class="single-item">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Đặc sắc</span>
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Giá khởi điểm</h6>
                                                    <h4>$30,000.00</h4>
                                                </div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="btn-box"><a href="property-details.html" class="theme-btn btn-one">Xem thông tin chi tiết</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/resource/deals-1.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Đặc sắc</span>
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="property-details.html">Contemporary Apartment</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Giá khởi điểm</h6>
                                                    <h4>$45,000.00</h4>
                                                </div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="btn-box"><a href="property-details.html" class="theme-btn btn-one">Xem thông tin chi tiết</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/resource/deals-1.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Đặc sắc</span>
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="property-details.html">Luxury Villa With Pool</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Giá khởi điểm</h6>
                                                    <h4>$63,000.00</h4>
                                                </div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="btn-box"><a href="property-details.html" class="theme-btn btn-one">Xem thông tin chi tiết</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/resource/deals-1.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- deals-section end -->

        <!-- feature-section -->
        <section class="feature-section sec-pad bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h5>Phòng tốt</h5>
                    <h2>Phòng tốt dành cho bạn</h2>
                    <p>Bạn đang tìm kiếm phòng trọ ? <br />Đây là nơi phù hợp dành cho bạn.</p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/feature/feature-1.jpg" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Đặc sắc</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                            <h6>Michael Bean</h6>
                                        </div>
                                        <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                    </div>
                                    <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">
                                            <h6>Start From</h6>
                                            <h4>$30,000.00</h4>
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
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
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
                                        <div class="buy-btn pull-right"><a href="property-details.html">For Rent</a></div>
                                    </div>
                                    <div class="title-text"><h4><a href="property-details.html">Contemporary Apartment</a></h4></div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">
                                            <h6>Start From</h6>
                                            <h4>$45,000.00</h4>
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
                <div class="more-btn centred"><a href="property-list.html" class="theme-btn btn-one">View All Listing</a></div>
            </div>
        </section>
        <!-- feature-section end -->










        <!-- chooseus-section -->
        <section class="chooseus-section">
            <div class="auto-container">
                <div class="inner-container bg-color-2">
                    <div class="upper-box clearfix">
                        <div class="sec-title light">
                            <h5>Tại sao nên lựa chọn chúng tôi?</h5>
                            <h2>Lý do bạn nên chọn chúng tôi</h2>
                        </div>
                        <div class="btn-box">
                            <a href="categories.html" class="theme-btn btn-one">Danh mục phòng trọ</a>
                        </div>
                    </div>
                    <div class="lower-box">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                <div class="chooseus-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="icon-19"></i></div>
                                        <h4>Danh tiếng xuất sắc</h4>
                                        <p>Được lựa chọn , sử dụng bởi rất nhiều khách hàng.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                <div class="chooseus-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="icon-26"></i></div>
                                        <h4>Đại lý tốt nhất</h4>
                                        <p>Tập hợp các nhà bất động sản với kinh nghiệm cao, đem đến những ngôi nhà , phòng trọ chất lượng</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                <div class="chooseus-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="icon-21"></i></div>
                                        <h4>Dịch vụ cá nhân</h4>
                                        <p>Hỗ trợ , giải đáp thắc mắc tận tình 24/7</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->


        <!-- place-section -->
        <section class="place-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h5>Top Các khu vực</h5>
                    <h2>Những khu vực phổ biến nhất</h2>
                    <p>Dù là ở đâu , chỗ nào chúng tôi cũng có!!! </p>
                </div>
                <div class="sortable-masonry">
                    <div class="items-container row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration brand marketing software">
                            <div class="place-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/resource/Hoan-Kiem.jpg" alt=""></figure>
                                    <div class="text">
                                        <h4><a href="categories.html">Quận Hoàn Kiếm</a></h4>
                                        <p>10 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all brand illustration print software logo">
                            <div class="place-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/resource/ho-tay.jpg" alt=""></figure>
                                    <div class="text">
                                        <h4><a href="categories.html">Quận Tây Hồ</a></h4>
                                        <p>08 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration marketing logo">
                            <div class="place-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/resource/2-Ba-Trung.jpg" alt=""></figure>
                                    <div class="text">
                                        <h4><a href="categories.html">Quận Hai Bà Trưng</a></h4>
                                        <p>29 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12 masonry-item small-column all brand marketing print software">
                            <div class="place-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/resource/quan-dong-da.jpg" alt=""></figure>
                                    <div class="text">
                                        <h4><a href="categories.html">Quận Đống Đa</a></h4>
                                        <p>05 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- place-section end -->


        <!-- cta-section -->
        <section class="cta-section bg-color-2">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            <div class="auto-container">
                <div class="inner-box clearfix">
                    <div class="text pull-left">
                        <h2>Tìm kiếm để thuê một phòng trọ hoặc <br />Đăng bài cho thuê ?</h2>
                    </div>
                    <div class="btn-box pull-right">
                        <a href="property-details.html" class="theme-btn btn-three">Danh mục phòng </a>
                        <a href="index-2.html" class="theme-btn btn-one">Đăng tin bài</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h5>NHỮNG BÀI BÁO THỜI SỰ</h5>
                    <h2>Luôn được cập nhật bởi chúng tôi</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-1.jpg" alt=""></a></figure>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="blog-details.html">Including Animation In Your Design System</a></h4>
                                    <ul class="post-info clearfix">
                                        <li class="author-box">
                                            <figure class="author-thumb"><img src="assets/images/news/author-1.jpg" alt=""></figure>
                                            <h5><a href="blog-details.html">Eva Green</a></h5>
                                        </li>
                                        <li>April 10, 2020</li>
                                    </ul>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-2.jpg" alt=""></a></figure>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="blog-details.html">Taking The Pattern Library To The Next Level</a></h4>
                                    <ul class="post-info clearfix">
                                        <li class="author-box">
                                            <figure class="author-thumb"><img src="assets/images/news/author-2.jpg" alt=""></figure>
                                            <h5><a href="blog-details.html">George Clooney</a></h5>
                                        </li>
                                        <li>April 09, 2020</li>
                                    </ul>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-3.jpg" alt=""></a></figure>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="blog-details.html">How New Font Technologies Will Improve The Web</a></h4>
                                    <ul class="post-info clearfix">
                                        <li class="author-box">
                                            <figure class="author-thumb"><img src="assets/images/news/author-3.jpg" alt=""></figure>
                                            <h5><a href="blog-details.html">Simon Baker</a></h5>
                                        </li>
                                        <li>April 28, 2020</li>
                                    </ul>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->




        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top bg-color-2">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget about-widget">
                                <div class="widget-title">
                                    <h3>Về chúng tôi</h3>
                                </div>
                                <div class="text">
                                    <li><a href="index-2.html">Về chúng tôi</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h3>Dịch vụ</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list class">
                                        <li><a href="index-2.html">Dịch vụ của chúng tôi</a></li>
                                        <li><a href="index-2.html">Các bài báo , tin tức</a></li>
                                        <li><a href="index-2.html">Liên hệ với chúng tôi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget">
                                <div class="widget-title">
                                    <h3>Báo Mới</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-1.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">The Added Value Social Worker</a></h5>
                                        <p>Mar 25, 2020</p>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-2.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">Ways to Increase Trust</a></h5>
                                        <p>Mar 24, 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Liên hệ</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i>Yên Sở City</li>
                                        <li><i class="fas fa-microphone"></i>+0858862720</li>
                                        <li><i class="fas fa-envelope"></i>anhnamco9@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-box clearfix">
                        <div class="copyright pull-left">
                            <p><a href="index-2.html">ChipHome</a> &copy; 2023 All Right Reserved</p>
                        </div>
                        <ul class="footer-nav pull-right clearfix">
                            <li><a href="index-2.html">Terms of Service</a></li>
                            <li><a href="index-2.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>



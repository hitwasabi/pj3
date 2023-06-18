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
                    <a href="{{url('/signin')}}"><i class="fas fa-user"></i>Đăng nhập</a>
                </div>
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="outer-box">
            <div class="main-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{url('/client/home')}}"><img src="{{asset('images/Home.png')}}" alt=""></a></figure>
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
                                <li><a href="{{url('/client/home')}}"><span>Trang chủ</span></a></li>
                                <li class="dropdown"><a href="index.html"><span>Danh sách phòng</span></a>
                                    <ul>
                                        <li><a href="../property-list.blade.php">Property List</a></li>
                                        <li><a href="property-details-4.html">Property Details 04</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="index.html"><span>Các trang</span></a>
                                    <div class="megamenu">
                                        <div class="row clearfix">
                                            <div class="col-xl-4 column">
                                                <ul>
                                                    <li><h4>Trang</h4></li>
                                                    <li><a href="about.blade.php">Về chúng tôi</a></li>
                                                    <li><a href="../services.blade.php">Dịch vụ của chúng tôi</a></li>
                                                    <li><a href="faq.blade.php">Các câu hỏi tiêu biểu</a></li>
                                                    <li><a href="../pricing.blade.php">Giá các gói</a></li>
                                                    <li><a href="compare-roperties.html">So sánh các phòng</a></li>
                                                    <li><a href="categories.html">Trang danh mục</a></li>
                                                    <li><a href="../testimonials.blade.php">Lời chứng thực</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-4 column">
                                                <ul>
                                                    <li><h4>Pages</h4></li>
                                                    <li><a href="../gallery.blade.php">Our Gallery</a></li>
                                                    <li><a href="profile.html">My Profile</a></li>
                                                    <li><a href="../signin.blade.php">Sign In</a></li>
                                                    <li><a href="../signup.blade.php">Sign Up</a></li>
                                                    <li><a href="../error.blade.php">404</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-4 column">
                                                <ul>
                                                    <li><h4>Tin tức</h4></li>
                                                    <li><a href="blog-2.html">Blog 02</a></li>
                                                    <li><a href="../blog-3.blade.php">Blog 03</a></li>
                                                    <li><a href="../blog-details.blade.php">Blog Details</a></li>
                                                    <li><a href="../contact.blade.php">Contact Us</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown"><a href="index.html"><span>Blog</span></a>
                                    <ul>
                                        <li><a href="blog-1.html">Blog 01</a></li>
                                        <li><a href="blog-2.html">Blog 02</a></li>
                                        <li><a href="../blog-3.blade.php">Blog 03</a></li>
                                        <li><a href="../blog-details.blade.php">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="../contact.blade.php"><span>Liên hệ</span></a></li>
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
                    <figure class="logo"><a href="{{url('/client/home')}}"><img src="{{asset('images/Home.png')}}" alt=""></a></figure>
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
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="{{url('/client/home')}}"><img src="{{asset('images/logo-2.png')}}" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->

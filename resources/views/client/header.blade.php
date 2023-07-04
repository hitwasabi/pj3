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
                @if(\Illuminate\Support\Facades\Auth::check() == false)
                <div class="sign-box">
                    <a href="{{url('/login')}}"><i class="fas fa-user"></i>Đăng nhập</a>
                </div>
                @else
                    <a href="#"><i class="fas fa-user"></i> {{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                @endif

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
                                @if(\Illuminate\Support\Facades\Auth::check() == true)
                                <li><a href="{{url('/agents/index')}}"><span>Quản trị</span></a></li>
                                @endif
                                <li><a href="{{url('client/home/property-list')}}"><span>Danh sách phòng</span></a>
                                </li>
                                <li class="dropdown"><a href="{{url('/client/home')}}"><span>Các trang</span></a>
                                    <div class="megamenu">
                                        <div class="row clearfix">
                                            <div class="col-xl-4 column">
                                                <ul>
                                                    <li><h4>Trang</h4></li>
                                                    <li><a href="{{url('/client/home/about')}}">Về chúng tôi</a></li>
                                                    <li><a href="{{url('/client/home/services')}}">Dịch vụ của chúng tôi</a></li>
                                                    <li><a href="{{url('/client/home/faq')}}">Các câu hỏi tiêu biểu</a></li>
                                                    <li><a href="{{url('/client/home/pricing')}}">Giá các gói</a></li>
                                                    <li><a href="{{url('/client/home/testimonials')}}">Lời chứng thực</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-4 column">
                                                <ul>
                                                    <li><h4>Thông tin</h4></li>
                                                    @if(\Illuminate\Support\Facades\Auth::check() == true)
                                                    @if(\Illuminate\Support\Facades\Auth::user()->isAdmin==1)
                                                    <li><a href="{{url('/agents/agents-profile')}}">Thông tin của tôi</a></li>
                                                    @else
                                                        <li><a href="{{url('/admin/admin-profile')}}">Thông tin của tôi</a></li>
                                                    @endif
                                                    @endif
                                                    @if(\Illuminate\Support\Facades\Auth::check() == false)
                                                    <li><a href="{{url('/login')}}">Đăng nhập</a></li>
                                                    <li><a href="{{url('/register')}}">Đăng kí</a></li>
                                                    <li><a href="{{url('/client/home/404')}}">404</a></li>
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="col-xl-4 column">
                                                <ul>
                                                    <li><h4>Tin tức</h4></li>
                                                    <li><a href="{{url('/client/home/blog')}}">Tin tức</a></li>
                                                    <li><a href="{{url('/client/home/contact')}}">Liên hệ chúng tôi</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{url('/client/home/blog')}}"><span>Tin tức</span></a>
                                </li>
                                <li><a href="{{url('/client/home/contact')}}"><span>Liên hệ</span></a></li>
                                @if(\Illuminate\Support\Facades\Auth::check() == true)
                                <li><a href="{{url('/logout')}}">Đăng xuất</a> </li>
                                @endif
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

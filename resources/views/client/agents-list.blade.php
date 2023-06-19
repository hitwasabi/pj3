@extends('layouts.base')
@section('title',"Danh sách chủ trọ")

@section('content')
    @include('layouts.load')
    @include('client.header')
    <!--Page Title-->
        <section class="page-title centred" style="background-image: url({{asset('images/background/page-title.jpg')}});">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Danh sách chủ trọ</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Danh sách chủ trọ</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- agents-page-section -->
        <section class="agents-page-section agents-list">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar agent-sidebar">
                            <div class="agents-search sidebar-widget">
                                <div class="widget-title">
                                    <h5>Tìm chủ trọ</h5>
                                </div>
                                <div class="search-inner">
                                    <form action="http://azim.commonsupport.com/Realshed/agents-list.html">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Enter Agent Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <button class="theme-btn btn-one">Tìm kiếm</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="agents-content-side">
                            <div class="item-shorting clearfix">
                                <div class="left-column pull-left">
                                    <h5>Kết quả tìm kiếm: <span>Showing 1-5 of 20 Listings</span></h5>
                                </div>
                                <div class="right-column pull-right clearfix">
                                    <div class="short-box clearfix">
                                        <div class="select-box">
                                            <select class="wide" >
                                                <option value="1">Mới nhất</option>
                                               <option value="2">Nhiều bài nhất</option>
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
                                <div class="agents-list-content list-item">
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{asset('images/agents/agents-1.jpg')}}" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="{{url('/client/home/agents-details')}}">Michael Bean</a></h4>
                                                    </div>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:bean@realshed.com">bean@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="{{url('/client/home/agents-details')}}" class="theme-btn btn-two">Xem chi tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="assets/images/agents/agents-2.jpg" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="agents-details.blade.php">Jennifer Lawrence</a></h4>
                                                        <span class="designation">Modern House Real Estate Agent</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:jennifer@realshed.com">jennifer@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="agents-details.blade.php" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="assets/images/agents/agents-3.jpg" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="agents-details.blade.php">Benedict Cumbatch</a></h4>
                                                        <span class="designation">Modern House Real Estate Agent</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:benedict@realshed.com">benedict@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="agents-details.blade.php" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="assets/images/agents/agents-4.jpg" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="agents-details.blade.php">Elizabeth Winstead</a></h4>
                                                        <span class="designation">Modern House Real Estate Agent</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:winstead@realshed.com">winstead@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="agents-details.blade.php" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="assets/images/agents/agents-5.jpg" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="agents-details.blade.php">Morgan Bale</a></h4>
                                                        <span class="designation">Modern House Real Estate Agent</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:bale@realshed.com">bale@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="agents-details.blade.php" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="assets/images/agents/agents-6.jpg" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="agents-details.blade.php">Jennifer Gal</a></h4>
                                                        <span class="designation">Modern House Real Estate Agent</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:jennifer@realshed.com">jennifer@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="agents-details.blade.php" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="agents-grid-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="{{asset('images/agents/agents-1.png')}}" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="{{url('/client/home/agents-details')}}">Michael Bean</a></h4>
                                                        </div>
                                                        <div class="text">
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:bean@realshed.com">bean@realshed.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="{{url('/client/home/agents-details')}}" class="theme-btn btn-two">Xem chi tiết</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="assets/images/agents/agents-2.png" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agents-details.blade.php">Jennifer Lawrence</a></h4>
                                                            <span class="designation">Modern House Real Estate Agent</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:jennifer@realshed.com">ijennifer@realshed.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="agents-details.blade.php" class="theme-btn btn-two">View Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="assets/images/agents/agents-3.png" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agents-details.blade.php">Elizabeth Winstead</a></h4>
                                                            <span class="designation">Modern House Real Estate Agent</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:winstead@realshed.com">winstead@realshed.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="agents-details.blade.php" class="theme-btn btn-two">View Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="assets/images/agents/agents-4.png" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agents-details.blade.php">Benedict Cumbatch</a></h4>
                                                            <span class="designation">Modern House Real Estate Agent</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:beaedict@realshed.com">beaedict@realshed.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="agents-details.blade.php" class="theme-btn btn-two">View Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="assets/images/agents/agents-5.png" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agents-details.blade.php">Morgan Bale</a></h4>
                                                            <span class="designation">Modern House Real Estate Agent</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:bale@realshed.com">bale@realshed.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="agents-details.blade.php" class="theme-btn btn-two">View Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="assets/images/agents/agents-6.png" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agents-details.blade.php">Jennifer Gal</a></h4>
                                                            <span class="designation">Modern House Real Estate Agent</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:jennifer@realshed.com">jennifer@realshed.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="agents-details.blade.php" class="theme-btn btn-two">View Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-wrapper">
                                <ul class="pagination clearfix">
                                    <li><a href="agents-list.html" class="current">1</a></li>
                                    <li><a href="agents-list.html">2</a></li>
                                    <li><a href="agents-list.html">3</a></li>
                                    <li><a href="agents-list.html"><i class="fas fa-angle-right"></i></a></li>
                                </ul>
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

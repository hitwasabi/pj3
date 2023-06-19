@extends('layouts.base')
@section('title',"Tin tức chi tiết")

@section('content')
    @include('layouts.load')
    @include('client.header')

        <!--Page Title-->
        <section class="page-title centred" style="background-image: url({{asset('images/background/page-title-5.jpg')}});">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Blog Details</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container blog-details sec-pad-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="news-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{asset('images/news/news-21.jpg')}}" alt=""></figure>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <h3>Including Animation In Your Design System.</h3>
                                        <ul class="post-info clearfix">
                                            <li class="author-box">
                                                <figure class="author-thumb"><img src="{{asset('images/news/author-1.jpg')}}" alt=""></figure>
                                                <h5><a href="{{url('client/home/blog-details')}}">Eva Green</a></h5>
                                            </li>
                                            <li>April 10, 2020</li>
                                        </ul>
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed perspiciatis unde omnis iste natus error sit voluptem accusantium doloremque laudantium.</p>
                                            <blockquote>
                                                <h4>“Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis.”</h4>
                                            </blockquote>
                                            <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed perspiciatis unde omnis iste natus error sit voluptem accusantium doloremque laudantium totam rem aperiam.</p>
                                        </div>
                                        <div class="post-tags">
                                            <ul class="tags-list clearfix">
                                                <li><h5>Tags:</h5></li>
                                                <li><a href="{{url('client/home/property-list')}}">Thuê nhà</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar">
                            <div class="sidebar-widget search-widget">
                                <div class="widget-title">
                                    <h4>Tìm kiếm</h4>
                                </div>
                                <div class="search-inner">
                                    <form action="http://azim.commonsupport.com/Realshed/blog-1.html" method="post">
                                        <div class="form-group">
                                            <input type="search" name="search_field" placeholder="Tìm kiếm" required="">
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget social-widget">
                                <div class="widget-title">
                                    <h4>Follow Us On</h4>
                                </div>
                                <ul class="social-links clearfix">
                                    <li><a href="https://www.facebook.com/Nhoctuthuoc/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/hitwasabi/"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h4>Bài báo gần đây</h4>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="{{url('client/home/blog-details')}}"><img src="{{asset('images/news/post-1.jpg')}}" alt=""></a></figure>
                                        <h5><a href="{{url('client/home/blog-details')}}">Best interior design idea for your home.</a></h5>
                                        <span class="post-date">April 10, 2020</span>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="{{url('client/home/blog-details')}}"><img src="{{asset('images/news/post-2.jpg')}}" alt=""></a></figure>
                                        <h5><a href="{{url('client/home/blog-details')}}">A digital prescription for the industry.</a></h5>
                                        <span class="post-date">April 09, 2020</span>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="{{url('client/home/blog-details')}}"><img src="{{asset('images/news/post-3.jpg')}}" alt=""></a></figure>
                                        <h5><a href="{{url('client/home/blog-details')}}">Strategic & commercial approach with issues.</a></h5>
                                        <span class="post-date">April 08, 2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container -->
        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>
@endsection

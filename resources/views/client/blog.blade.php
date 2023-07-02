@extends('layouts.base')
@section('title',"Tin tức")

@section('content')
    @include('layouts.load')
    @include('client.header')
    <!--Page Title-->
        <section class="page-title centred" style="background-image: url({{asset('images/background/page-title-5.jpg')}});">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Tin tức</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Tin tức</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container blog-standard sec-pad-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-standard-content">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                @forelse($blogs as $blog)
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{url('client/home/blogs-details/'.$blog->new_id)}}"><img src="{{url('images/rooms/'.$blog->new_image)}}" alt=""></a></figure>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="{{url('client/home/blogs-details/'.$blog->new_id)}}">
                                            </a>{{$blog->new_name}}</h3>
                                        <ul class="post-info clearfix">
                                            <li class="author-box">
                                                <figure class="author-thumb"><img src="{{$blog->user_image}}" alt=""></figure>
                                                <h5><a href="{{url('client/home/agents-details/'.$blog->userPost_id)}}">{{$blog->name}}</a></h5>
                                            </li>
                                            <li>{{$blog->post_date}}</li>
                                        </ul>
                                        <div class="btn-box">
                                            <a href="{{url('client/home/blog-details/'.$blog->new_id)}}" class="theme-btn btn-two">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    <p>Danh sach rong</p>
                                @endforelse
                            </div>
                            <div class="pagination-wrapper">
                                {{$blogs->links("pagination::bootstrap-4")}}
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
                                    <form action="http://azim.commonsupport.com/Realshed/blog-3.html" method="post">
                                        <div class="form-group">
                                            <input type="search" name="search_field" placeholder="Tìm kiếm" required="">
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget social-widget">
                                <div class="widget-title">
                                    <h4>Theo dõi chúng tôi tại</h4>
                                </div>
                                <ul class="social-links clearfix">
                                    <li><a href="https://www.facebook.com/Nhoctuthuoc/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/hitwasabi/"><i class="fab fa-instagram"></i></a></li>
                                </ul>
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

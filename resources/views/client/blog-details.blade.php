@extends('layouts.base')
@section('title',"Tin tức chi tiết")

@section('content')
    @include('layouts.load')
    @include('client.header')

        <!--Page Title-->
        <section class="page-title centred" style="background-image: url({{asset('images/background/page-title-5.jpg')}});">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Chi tiết tin tức</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Chi tiết tin tức</li>
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
                                        <figure class="image"><img src="{{url('images/rooms/'.$blog->new_image)}}" alt=""></figure>
                                        <span class="category">Đặc sắc</span>
                                    </div>
                                    <div class="lower-content">
                                        <h3>{{$blog->new_name}}</h3>
                                        <ul class="post-info clearfix">
                                            <li class="author-box">
                                                <figure class="author-thumb">
                                                    @if($blog->user_image == null)
                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADACAMAAABlApw1AAAAMFBMVEX19vfExcbIycnd3t/y8/TNzc7V1tfa29zm5+jr7O3LzMzc3d7Q0NHu7/Dg4eLj5OU4/BecAAAC7ElEQVR4nO3cAWKrIAwGYEFQVLT3v+2rdd3atTokaJK+/ztBoiAB0lYVAAAAAAAAAAAAAABAIS7Uje+tMbb3TR0cdzz7dG1vfvFtxx1VKje9RL/oJw3vwQ32ffgzO4hP4bIR/i2FC3eEm8a4Hf4sjtxRrvvr8X+9hMAd55o2JfxZyx3pe01q/MY03LG+kzD8f0TuaF/teP4i30Hy+L8TNg8ue+M3RtS3aEz6fj6zktaDXRP4TtBEzhhAMzFVhcsYQDMrpbIb8uI3puaOfJH7AsS8gik3fmMm7thvVvZfKTx37LMuP35jJOyTdxcRjyQUFJ6SgIAx5CjxG8P/HQq0BPhLupqWAP9atnMj8xv/xoY0hyWUpIRlbNZzx19lF0ILyx1/RYvfGO749Segfgipn8TqP6PqFzL1pYT6Yk59Oa1+Q0PbUg7c0VcfsKmnjCEJI+gDDrbUHy3mr2X8q9hC/fG6+gsO/VdM+i/5cko6/jLuye5rJglFxBPtrQY7J7LA+PW32+worMWN/7ugvOVMf9Nfpb7t8srVW42vtZj6bYObVvZoXkXr8U3XvuSgqPl7Mbffx6X9PuprvwcAAAAAgP+V68I0NPG6nVm2x7b3sRmm0Mnf1bgwNXFrUx+bSermbN5CJt4S2DgIy8KF1038X3wrJYluyL7p9gP3SYULqcNmjW0YX0QgdmvdNSynvV1LfPaP7OmnXpesi9Ut8XLeUNo8v8131smvI3U4bWuPT+Ggp//t6D+emI4N/8oe2UOUcoNE5w/7IhF7XNMdc4s5Eruk9/AHXAR2h4/+R+WvYgmdfXkKz+XThv+PohPh9Oc/K9gSmNkTR1XsTpzUXExRakE48fv5rC9TVzBM4LsiE3nki9+YEgta9r9GlFDiJ+vEH4oR0WcB8Uc+VPSS4sD9Vwr6GCp0dJKL3mDNtggs6D8WPbWKfoOcAHP8SAAJIAEkgASQABJAAkgACSABxgQAAAAAAAAAAAAAAODj/AMS6imfF+YdbQAAAABJRU5ErkJggg=="  alt="">
                                                    @else
                                                        <img src="{{url('images/agents/'.$blog->user_image)}}" class="avatar avatar-md" alt="">
                                                    @endif
                                                </figure>
                                                <h5><a href="{{url('client/home/agents-details/'.$blog->userPost_id)}}">{{$blog->name}}</a></h5>
                                            </li>
                                            <li>{{$blog->post_date}}</li>
                                        </ul>
                                        <div class="text">
                                            <p>{!! $blog->info !!}</p>
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
                            <div class="sidebar-widget social-widget">
                                <div class="widget-title">
                                    <h4>Theo dõi chúng tôi</h4>
                                </div>
                                <ul class="social-links clearfix">
                                    <li><a href="https://www.facebook.com/ChipHomeeee/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/hitwasabi/"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h4>Bài báo gần đây</h4>
                                </div>
                                <div class="post-inner">
                                    @forelse($blogs as $blog)
                                    <div class="post">
                                        <figure class="post-thumb"><a href="{{url('client/home/blog-details')}}"><img src="{{url('images/rooms/'.$blog->new_image)}}" alt=""></a></figure>
                                        <h5><a href="{{url('client/home/blog-details/'.$blog->new_id)}}">{{$blog->new_name}}.</a></h5>
                                        <span class="post-date">{{$blog->post_date}}</span>
                                    </div>
                                    @empty
                                        <div class="empty">Danh sách rỗng</div>
                                    @endforelse
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

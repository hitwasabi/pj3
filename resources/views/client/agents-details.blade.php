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
                                            @forelse($rent_rooms as $rent_room)
                                                <div class="deals-block-one">
                                                    <div class="inner-box">
                                                        <div class="image-box">
                                                            <figure class="image"><img src="{{$rent_room->url}}" alt=""></figure>
                                                            <div class="batch"><i class="icon-11"></i></div>
                                                            <span class="category">Featured</span>
                                                            <div class="buy-btn"><a href="property-details.blade.php">For Buy</a></div>
                                                        </div>
                                                        <div class="lower-content">
                                                            <div class="title-text"><h4><a href="{{url('client/home/property-details/'.$rent_room->rr_id.'/'.$rent_room->cate_id)}}">{{$rent_room->room_name}}</a></h4></div>
                                                            <div class="price-box clearfix">
                                                                <div class="price-info pull-left">
                                                                    <h6>Giá khởi điểm</h6>
                                                                    <h4>{{number_format($rent_room->prices, 0, '.', '.')}}<sup>đ</sup></h4>
                                                                </div>
                                                                <div class="author-box pull-right">
                                                                    <figure class="author-thumb">
                                                                        <img src="assets/images/feature/author-1.jpg" alt="">
                                                                        <span>Michael Bean</span>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <p>{{$rent_room->info_detail}}</p>
                                                            <ul class="more-details clearfix">
                                                                <li><i class="icon-14"></i>{{$rent_room->bed_room}} phòng ngủ</li>
                                                                <li><i class="icon-15"></i>{{$rent_room->bath_room}} phòng vệ sinh </li>
                                                                <li><i class="icon-16"></i>{{$rent_room -> acreage}}métvuông</li>
                                                            </ul>
                                                            <div class="other-info-box clearfix">
                                                                <div class="btn-box pull-left"><a href="{{url('client/home/property-details/'.$rent_room->rr_id.'/'.$rent_room->cate_id)}}" class="theme-btn btn-two">Xem chi tiết</a></div>
                                                                <ul class="other-option pull-right clearfix">
                                                                    <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <p>Danh sach rong</p>
                                            @endforelse
                                        </div>
                                        <div class="deals-grid-content grid-item">
                                            <div class="row clearfix">
                                                @forelse($rent_rooms as $rent_room)
                                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                        <div class="feature-block-one">
                                                            <div class="inner-box">
                                                                <div class="image-box">
                                                                    <figure class="image"><img src="{{$rent_room-> url}}" alt=""></figure>
                                                                    <div class="batch"><i class="icon-11"></i></div>
                                                                    <span class="category">Featured</span>
                                                                </div>
                                                                <div class="lower-content">
                                                                    <div class="author-info clearfix">
                                                                        <div class="author pull-left">
                                                                            <figure class="author-thumb"><img src="assets/images/feature/author-3.jpg" alt=""></figure>
                                                                            <h6>Keira Mel</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="title-text"><h4><a href="{{url('client/home/property-details/'.$rent_room->rr_id.'/'.$rent_room->cate_id)}}">{{$rent_room->room_name}}</a></h4></div>
                                                                    <div class="price-box clearfix">
                                                                        <div class="price-info pull-left">
                                                                            <h6>Giá khởi điểm</h6>
                                                                            <h4>{{number_format($rent_room->prices, 0, '.', '.')}}<sup>đ</sup></h4>
                                                                        </div>
                                                                        <ul class="other-option pull-right clearfix">
                                                                            <li><a href="property-details.blade.php"><i class="icon-13"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <p>{{$rent_room->info_detail}}</p>
                                                                    <ul class="more-details clearfix">
                                                                        <li><i class="icon-14"></i>{{$rent_room->bed_room}} phòng ngủ</li>
                                                                        <li><i class="icon-15"></i>{{$rent_room->bath_room}} phòng vệ sinh </li>
                                                                        <li><i class="icon-16"></i>{{$rent_room -> acreage}}métvuông</li>
                                                                    </ul>
                                                                    <div class="btn-box"><a href="{{url('client/home/property-details/'.$rent_room->rr_id.'/'.$rent_room->cate_id)}}" class="theme-btn btn-two">Xem chi tiết</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <p>Danh sach rong</p>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pagination-wrapper">
                                        {{$rent_rooms->links("pagination::bootstrap-4")}}
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

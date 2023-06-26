@extends('layouts.base')
@section('title',"Chi tiết phòng")

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
                    <h1>Chi tiết phòng</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Chi tiết phòng</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- property-details -->
        <section class="property-details property-details-one">
            <div class="auto-container">
                <div class="top-details clearfix">
                    <div class="left-column pull-left clearfix">
                        <h3>{{$rent_room->room_name}}</h3>
                        <div class="author-info clearfix">
                            <div class="author-box pull-left">
                                <figure class="author-thumb"><img src="{{asset('images/feature/author-1.jpg')}}" alt=""></figure>
                                <h6>{{$rent_room->name}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="right-column pull-right clearfix">
                        <div class="price-inner clearfix">
                            <ul class="category clearfix pull-left">
                                <li><a href="#">{{$rent_room->cate_name}}</a></li>
                                <li><a href="#">Cho thuê</a></li>
                            </ul>
                            <div class="price-box pull-right">
                                <h3>{{number_format($rent_room->prices, 0, '.', '.')}}<sup>đ</sup></h3>
                            </div>
                        </div>
                        <ul class="pull-right ">
                            <li><a >Liên hệ thuê phòng: {{$rent_room->phone}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="property-details-content">
                            <div class="carousel-inner">
                                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                    <figure class="image-box"><img src="{{url('images/rooms/'.$image->url)}}" alt=""></figure>
                                    <figure class="image-box"><img src="{{url('images/rooms/'.$image->url)}}" alt=""></figure>
                                    <figure class="image-box"><img src="{{url('images/rooms/'.$image->url)}}" alt=""></figure>
                                </div>
                            </div>
                            <div class="discription-box content-widget">
                                <div class="title-box">
                                    <h4>Mô tả phòng</h4>
                                </div>
                                <div class="text">
                                    <p>{{$rent_room->info_detail}}</p>
                                </div>
                            </div>
                            <div class="details-box content-widget">
                                <div class="title-box">
                                    <h4>Chi tiết phòng</h4>
                                </div>
                                <ul class="list clearfix">
                                    <li>ID: <span>{{$rent_room->rr_id}}</span></li>
                                    <li>Phòng ngủ: <span>{{$rent_room->bed_room}}</span></li>
                                    <li>Nhà vệ sinh: <span>{{$rent_room->bath_room}} </span></li>
                                    <li>Tình trạng: <span>Cho thuê</span></li>
                                    <li>Diện tích: <span>{{$rent_room -> acreage}} mét vuông</span></li>
                                </ul>
                            </div>

                            <div class="location-box content-widget">
                                <div class="title-box">
                                    <h4>Vị trí</h4>
                                </div>
                                <ul class="info clearfix">
                                    <li><span>Địa chỉ:</span> {{$rent_room->location_info}}</li>
                                    <li><span>Thành phố:</span> {{$rent_room->city_name}}</li>
                                    <li><span>Quận/huyện:</span> {{$rent_room->cd_name}}</li>
                                    <li><span>Đường/phố:</span> {{$rent_room->street_name}}</li>
                                </ul>

                            </div>


                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="property-sidebar default-sidebar">
                            <div class="author-widget sidebar-widget">
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="{{asset('images/resource/author-1.jpg')}}" alt=""></figure>
                                    <div class="inner">
                                        <h4>{{$rent_room->name}}</h4>
                                        <ul class="info clearfix">
                                            <li><i class="fas fa-phone"></i><a href="tel:03030571965">{{$rent_room->phone}}</a></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{url('/client/home/agents-details/'.$rent_room->id)}}">Xem danh sách phòng </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="similar-content">
                    <div class="title">
                        <h4>Các phòng tương tự</h4>
                    </div>
                    <div class="row clearfix">
                        @forelse($rent_rooms as $rent_room)
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
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
                                                <h6>{{$rent_room-> name}}</h6>
                                            </div>
                                            <div class="buy-btn pull-right"><a href="property-details.html">Sold Out</a></div>
                                        </div>
                                        <div class="title-text"><h4><a href="property-details.html">{{$rent_room-> room_name}}</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Giá khởi điểm</h6>
                                                <h4>{{number_format($rent_room->prices, 0, '.', '.')}}<sup>đ</sup></h4>
                                            </div>
                                            <ul class="other-option pull-right clearfix">
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>{{$rent_room->bed_room}} phòng ngủ</li>
                                            <li><i class="icon-15"></i>{{$rent_room->bath_room}} phòng vệ sinh </li>
                                            <li><i class="icon-16"></i>{{$rent_room -> acreage}}métvuông</li>
                                        </ul>
                                        <div class="btn-box"><a href="{{url('client/home/property-details/'.$rent_room->rr_id)}}" class="theme-btn btn-two">Xem chi tiết</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <div class="empty">Danh sách rỗng</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>
        <!-- property-details end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>

@endsection

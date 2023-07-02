@extends('layouts.base')
@section('title',"Trang chủ")

@section('content')
    @include('layouts.load')
    @include('client.header')
<!-- page wrapper -->
    <div class="boxed_wrapper">
        <!-- banner-section -->
        <section class="banner-section" style="background-image: url({{asset('images/banner/banner-1.jpg')}});">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="content-box centred">
                        <h2>Lựa chọn Phòng Trọ phù hợp cho riêng bạn!</h2>
                    </div>
                    <div class="search-field">
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons centred clearfix">
                                    <li class="tab-btn" data-tab="#tab-1">Thuê</li>
                                </ul>
                            </div>
                            <div class="tabs-content info-group">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="inner-box">
                                        <div class="top-search">
                                            <form action="{{url('client/home/search')}}" method="get" class="search-form">
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Tìm kiếm phòng trọ</label>
                                                            <div class="field-input">
                                                                <i class="fas fa-search"></i>
                                                                <input type="search" name="keyword_submit" placeholder="Tìm kiếm...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="cities">Thành phố</label>
                                                            <div class="select-box">
                                                                <i class="far fa-compass"></i>
                                                                <select class="wide"  name ="cities"  id="country-dropdown" onchange="selectProvince()">
                                                                    <option value="">Nhập tỉnh thành</option>
                                                                    @foreach($cities as $city)
                                                                        <option value="{{$city->cities_id }}">{{$city->city_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label for="city_details">Quận , huyện</label>
                                                            <div class="select-box">
                                                                <i class="far fa-compass"></i>
                                                                <select class="wide" name="cities_details" id="state_dropdown" onchange="selectStreet()">

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label for="streets">Đường,phố</label>
                                                            <div class="select-box" >
                                                                <i class="far fa-compass"></i>
                                                                <select class="wide" name ="streets" id="city-dropdown">
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Phòng ngủ</label>
                                                            <div class="select-box">
                                                                <select class="wide" name="bed_room">
                                                                    <option value="">Chọn số phòng ngủ</option>
                                                                    {{--                                                                    @foreach($rent_rooms as $rent_room)--}}
                                                                    {{--                                                                        <option value="{{$rent_room->bed_room }}">{{$rent_room->bed_room}} Phòng ngủ</option>--}}
                                                                    {{--                                                                    @endforeach--}}
                                                                    <option value="1">Một phòng ngủ</option>
                                                                    <option value="2">Hai phòng ngủ</option>
                                                                    <option value="3">Ba phòng ngủ</option>
                                                                    <option value="4">Bốn phòng ngủ</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Lọc giá</label>
                                                            <div class="select-box">
                                                                <select class="wide">
                                                                    <option value="">Nhập khoảng giá</option>
                                                                    <option value="1">1 triệu - 2 triệu</option>
                                                                    <option value="2">2 triệu - 3 triệu</option>
                                                                    <option value="3">3 triệu - 5 triệu</option>
                                                                    <option value="4">lớn hơn 5 triệu</option>
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
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Phòng ngủ</label>
                                                            <div class="select-box">
                                                                <select class="wide" name="bed_room">
                                                                    <option value="">Chọn số phòng ngủ</option>
{{--                                                                    @foreach($rent_rooms as $rent_room)--}}
{{--                                                                        <option value="{{$rent_room->bed_room }}">{{$rent_room->bed_room}} Phòng ngủ</option>--}}
{{--                                                                    @endforeach--}}
                                                                    <option value="1">Một phòng ngủ</option>
                                                                    <option value="2">Hai phòng ngủ</option>
                                                                    <option value="3">Ba phòng ngủ</option>
                                                                    <option value="4">Bốn phòng ngủ</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                        <div class="form-group">
                                                            <label>Phòng vệ sinh</label>
                                                            <div class="select-box">
                                                                <select class="wide">
                                                                    <option value="">Chọn số phòng vệ sinh</option>
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
                                    <h5><a href="{{url('/client/home/category/motel')}}">Nhà trọ riêng</a></h5>
                                    <span>52</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-3"></i></div>
                                    <h5><a href="{{url('/client/home/category/apartment')}}">Nhà trọ chung cư</a></h5>
                                    <span>35</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="more-btn"><a href="{{url('/client/home/property-list')}}" class="theme-btn btn-one">Xem tất cả</a></div>
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
                                            <div class="title-text"><h4><a href="{{url('/client/home/property-details')}}">Villa on Grand Avenue</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Giá khởi điểm</h6>
                                                    <h4>$30,000.00</h4>
                                                </div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="{{url('/client/home/property-details')}}"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="btn-box"><a href="{{url('/client/home/property-details')}}" class="theme-btn btn-one">Xem thông tin chi tiết</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('images/resource/deals-1.jpg')}}" alt=""></figure>
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
                                            <div class="title-text"><h4><a href="{{url('/client/home/property-details')}}">Contemporary Apartment</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Giá khởi điểm</h6>
                                                    <h4>$45,000.00</h4>
                                                </div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="{{url('/client/home/property-details')}}"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="btn-box"><a href="{{url('/client/home/property-details')}}" class="theme-btn btn-one">Xem thông tin chi tiết</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('images/resource/deals-1.jpg')}}" alt=""></figure>
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
                                            <div class="title-text"><h4><a href="{{url('/client/home/property-details')}}">Luxury Villa With Pool</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Giá khởi điểm</h6>
                                                    <h4>$63,000.00</h4>
                                                </div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="{{url('/client/home/property-details')}}"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="btn-box"><a href="{{url('/client/home/property-details')}}" class="theme-btn btn-one">Xem thông tin chi tiết</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('images/resource/deals-1.jpg')}}" alt=""></figure>
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
                    <h5>Phòng có nhiều tương tác</h5>
                    <h2>Phòng có nhiều lượt xem nhất</h2>
                </div>
                <div class="row clearfix">
                    @forelse($rent_roomss as $rent_room)
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{url('images/rooms/'.$rent_room->url)}}" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Đặc sắc</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="author-info clearfix">
                                            <div class="author pull-left">
                                                <figure class="author-thumb"><img src="{{$rent_room->user_image}}" alt=""></figure>
                                                <h6>{{$rent_room->name}}</h6>
                                            </div>
                                            <div class="buy-btn pull-right"><a href="{{url('/client/home/agents-details/'.$rent_room->owner_id)}}">Cho thuê</a></div>
                                        </div>
                                        <div class="title-text"><h4><a href="{{url('client/home/property-details/'.$rent_room->rr_id.'/'.$rent_room->cate_id)}}">{{$rent_room->room_name}}</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Giá khởi điểm</h6>
                                                <h4>{{number_format($rent_room->prices, 0, '.', '.')}}<sup>đ</sup></h4>
                                            </div>
                                        </div>
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
        </section>
        <!-- feature-section end -->
        <!-- feature-section -->
        <section class="feature-section sec-pad bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h5>Phòng tốt</h5>
                    <h2>Phòng tốt dành cho bạn</h2>
                    <p>Bạn đang tìm kiếm phòng trọ ? <br />Đây là nơi phù hợp dành cho bạn.</p>
                </div>
                <div class="row clearfix">
                    @forelse($rent_rooms as $rent_room)
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{url('images/rooms/'.$rent_room->url)}}" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Đặc sắc</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{$rent_room->user_image}}" alt=""></figure>
                                            <h6>{{$rent_room->name}}</h6>
                                        </div>
                                        <div class="buy-btn pull-right"><a href="{{url('/client/home/agents-details/'.$rent_room->owner_id)}}">Cho thuê</a></div>
                                    </div>
                                    <div class="title-text"><h4><a href="{{url('client/home/property-details/'.$rent_room->rr_id.'/'.$rent_room->cate_id)}}">{{$rent_room->room_name}}</a></h4></div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">
                                            <h6>Giá khởi điểm</h6>
                                            <h4>{{number_format($rent_room->prices, 0, '.', '.')}}<sup>đ</sup></h4>
                                        </div>
                                    </div>
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
                <div class="more-btn centred"><a href="{{url('/client/home/property-list')}}" class="theme-btn btn-one">Xem tất cả</a></div>
            </div>
        </section>
        <!-- feature-section end -->
        @include('client.whyChooseUs')
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
                                    <figure class="image-box"><img src="{{asset('images/resource/Hoan-Kiem.jpg')}}" alt=""></figure>
                                    <div class="text">
                                        <h4><a href="{{url('/client/home/hoanKiem')}}">Quận Hoàn Kiếm</a></h4>
                                        <p>10 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all brand illustration print software logo">
                            <div class="place-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('images/resource/ho-tay.jpg')}}" alt=""></figure>
                                    <div class="text">
                                        <h4><a href="{{url('/client/home/tayHo')}}">Quận Tây Hồ</a></h4>
                                        <p>08 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration marketing logo">
                            <div class="place-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('images/resource/2-Ba-Trung.jpg')}}" alt=""></figure>
                                    <div class="text">
                                        <h4><a href="{{url('/client/home/haiBaTrung')}}">Quận Hai Bà Trưng</a></h4>
                                        <p>29 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12 masonry-item small-column all brand marketing print software">
                            <div class="place-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('images/resource/quan-dong-da.jpg')}}" alt=""></figure>
                                    <div class="text">
                                        <h4><a href="{{url('/client/home/dongDa')}}">Quận Đống Đa</a></h4>
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


        @include('client.cta')

        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h5>NHỮNG BÀI BÁO THỜI SỰ</h5>
                    <h2>Luôn được cập nhật bởi chúng tôi</h2>
                </div>
                <div class="row clearfix">
                    @forelse($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="{{url('client/home/blogs-details/'.$blog->new_id)}}"><img src="{{url('images/rooms/'.$blog->new_image)}} " alt=""></a></figure>
                                    <span class="category">Tin tức</span>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="{{url('client/home/blogs-details/'.$blog->new_id)}}">{{$blog->new_name}}</a></h4>
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
                        </div>
                    </div>
                    @empty
                        <p>Danh sach rong</p>
                    @endforelse
                </div>
            </div>
            <br>
        </section>
        <!-- news-section end -->
        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>
@endsection
<script async='async' src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    {{--$(document).ready(function() {--}}
    {{--    $('#country-dropdown').on('change', function() {--}}
    {{--        // var country_id = this.value; //id cua tinh--}}
    {{--        console.log(1);--}}
    {{--        $("#state-dropdown").html('');--}}
    {{--        $.ajax({--}}
    {{--            url:"{{url('get-states-by-country')}}",--}}
    {{--            type: "POST",--}}
    {{--            data: {--}}
    {{--                city_id: country_id,--}}
    {{--                _token: '{{csrf_token()}}'--}}
    {{--            },--}}
    {{--            dataType : 'json',--}}
    {{--            success: function(result){--}}
    {{--                $.each(result.city_details,function(key,value){--}}
    {{--                    $("#state-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');--}}
    {{--                });--}}
    {{--                $('#city-dropdown').html('<option value="">Select State First</option>');--}}
    {{--            }--}}
    {{--        });--}}
    {{--    });--}}
    {{--    $('#state-dropdown').on('change', function() {--}}
    {{--        var state_id = this.value;--}}
    {{--        $("#city-dropdown").html('');--}}
    {{--        $.ajax({--}}
    {{--            url:"{{url('get-cities-by-state')}}",--}}
    {{--            type: "POST",--}}
    {{--            data: {--}}
    {{--                city_detailsId: state_id,--}}
    {{--                _token: '{{csrf_token()}}'--}}
    {{--            },--}}
    {{--            dataType : 'json',--}}
    {{--            success: function(result){--}}
    {{--                $.each(result.streets,function(key,value){--}}
    {{--                    $("#city-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');--}}
    {{--                });--}}
    {{--            }--}}
    {{--        });--}}
    {{--    });--}}
    {{--});--}}
    function selectProvince() {
        let country_id = $("#country-dropdown").val();
        $.ajax({
            url:"{{url('get-states-by-country')}}",
            type: "POST",
            data: {
                city_id: country_id,
                _token: '{{csrf_token()}}'
            },
            dataType : 'json',
            success: function(result){
                $('#state_dropdown').html('<option value="">Nhập quận huyện</option>');
                let html = '';
                let districts = result.city_details;
                for(let i = 0; i < districts.length; i++) {
                    let item = districts[i];
                    let name = item['cd_name'];
                    let id = item['city_detailId']
                    html += '<option value='+id+'>'+name+ '</option>';
                }
                $('#state_dropdown').append(html);
                $('#state_dropdown').niceSelect("update")

                // $('#state_dropdown').append($('<option>', {
                //     value: 1,
                //     text: 'My option'
                // }));
                // $.each(districts,function(key,value){
                //     $("#state-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
                // });

            }
        });
    }
    function selectStreet() {
        let state_id = $("#state_dropdown").val();
        $.ajax({
            url:"{{url('get-cities-by-state')}}",
            type: "POST",
            data: {
                city_detailsId: state_id,
                _token: '{{csrf_token()}}'
            },
            dataType : 'json',
            success: function(result){
                let html = '';
                let districts = result.streets;
                for(let i = 0; i < districts.length; i++) {
                    let item = districts[i];
                    let name = item['street_name'];
                    let id = item['street_id']
                    html += '<option value='+id+'>'+name+ '</option>';
                }
                $('#city-dropdown').html('<option value="">Nhập đường,xá</option>');
                $('#city-dropdown').append(html);
                $('#city-dropdown').niceSelect("update")

                // $('#state_dropdown').append($('<option>', {
                //     value: 1,
                //     text: 'My option'
                // }));
                // $.each(districts,function(key,value){
                //     $("#state-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
                // });

            }
        });
    }
</script>

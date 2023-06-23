@extends('layouts.base')
@section('title',"Danh sách phòng trọ")

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
                    <h1>Danh sách phòng trọ</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Danh sách phòng trọ</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- property-page-section -->
        <section class="property-page-section property-list">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar property-sidebar">
                            <div class="filter-widget sidebar-widget">
                                <div class="widget-title">
                                    <h5>Phòng trọ</h5>
                                </div>
                                <div class="widget-content">
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Thể loại phòng">Các loại</option>
                                           <option value="1">Phòng xịn</option>
                                           <option value="2">Phòng bình thường</option>
                                           <option value="3">Phòng mới</option>
                                           <option value="4">Phòng cũ</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Thành phố"></option>
                                           <option value="1">Hà Nội</option>
                                           <option value="2">Hồ Chí Minh</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Quận,huyện"></option>
                                           <option value="1">New York</option>
                                           <option value="2">California</option>
                                           <option value="3">London</option>
                                           <option value="4">Maxico</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Đường,phố"></option>
                                           <option value="1">New York</option>
                                           <option value="2">California</option>
                                           <option value="3">London</option>
                                           <option value="4">Maxico</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Số Phòng"></option>
                                           <option value="1">2+ Phòng</option>
                                           <option value="2">3+ Phòng</option>
                                           <option value="3">4+ Phòng</option>
                                           <option value="4">5+ Phòng</option>
                                        </select>
                                    </div>
                                    <div class="filter-btn">
                                        <button type="submit" class="theme-btn btn-one"><i class="fas fa-filter"></i>&nbsp;Lọc</button>
                                    </div>
                                </div>
                            </div>
                            <div class="price-filter sidebar-widget">
                                <div class="widget-title">
                                    <h5>Lựa chọn khoảng giá</h5>
                                </div>
                                <div class="range-slider clearfix">
                                    <div class="clearfix">
                                        <div class="input">
                                            <input type="text" class="property-amount" name="field-name" readonly="">
                                        </div>
                                    </div>
                                    <div class="price-range-slider"></div>
                                </div>
                            </div>
                            <div class="category-widget sidebar-widget">
                                <div class="widget-title">
                                    <h5>Trạng thái nhà trọ</h5>
                                </div>
                                <ul class="category-list clearfix">
                                    <li><a href="{{url('/client/home/property-details')}}">Cho thuê <span>(200)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="property-content-side">
                            <div class="item-shorting clearfix">
                                <div class="left-column pull-left">
                                    <h5>Kết quả tìm kiếm: </h5>
                                </div>
                                <div class="right-column pull-right clearfix">
                                    <div class="short-box clearfix">
                                        <div class="select-box">
                                            <select class="wide" onchange="location = this.value;">
                                               <option data-display="Sắp xếp theo:" value="{{URL::current()."?sort=id_desc"}}">Mới nhất</option>
                                               <option value="{{URL::current()."?sort=price_desc"}}"> Giá cao đến thấp</option>
                                               <option value="{{URL::current()."?sort=price_asc"}}">Giá thấp đến cao</option>
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
                                                    <div class="btn-box pull-left"><a href="{{url('client/home/property-details/'.$rent_room->rr_id)}}" class="theme-btn btn-two">Xem chi tiết</a></div>
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
                                                        <div class="title-text"><h4><a href="{{url('client/home/property-details/'.$rent_room->rr_id)}}">{{$rent_room->room_name}}</a></h4></div>
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
                                                        <div class="btn-box"><a href="{{url('client/home/property-details/'.$rent_room->rr_id)}}" class="theme-btn btn-two">Xem chi tiết</a></div>
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
        </section>
        <!-- property-page-section end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>
        @endsection

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
                            <figure class="image-box"><img src="{{url('images/agents/'.$users->user_image)}}" alt=""></figure>
                            <div class="content-box">
                                <div class="upper clearfix">
                                    <div class="title-inner pull-left">
                                        <h4>{{$users->name}}</h4>
                                        <span class="designation">Chủ trọ</span>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>Cho thuê nhà bằng tình cảm</p>
                                </div>
                                <ul class="info clearfix mr-0">
                                    <li><i class="fab fa fa-envelope"></i><a href="#">{{$users-> email}}</a></li>
                                    <li><i class="fab fa fa-phone"></i><a href="#"> {{$users-> phone}}</a></li>
                                    <li><i class="far fa-comment"></i><a href="{{url('https://zalo.me/'.$users->phone)}}"> Nhắn tin zalo</a></li>
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
                                <h3>Danh sách bài đăng của {{$users-> name}}</h3>
                            </div>
                            <div class="item-shorting clearfix">
                                <div class="left-column pull-left">
                                    <h5>{{ $rent_rooms->total() }} kết quả</h5>
                                </div>
                                <div class="right-column  clearfix">
                                    <div class="short-box clearfix">
                                    <div class="select-box">
                                        <select class="wide" onchange="location = this.value;">
                                            <option data-display="Sắp xếp theo:" value="{{URL::current()."?sort=id_desc"}}">Mới nhất</option>
                                            <option value="{{URL::current()."?sort=price_desc"}}"> Giá cao đến thấp</option>
                                            <option value="{{URL::current()."?sort=price_asc"}}">Giá thấp đến cao</option>
                                        </select>
                                    </div>
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
                                                            <figure class="image"><img src="{{url('images/rooms/'.$rent_room->url)}}" alt=""></figure>
                                                            <div class="batch"><i class="icon-11"></i></div>
                                                            <span class="category">Đặc sắc</span>
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
                                                                        <img src="{{url('images/agents/'.$rent_room->user_image)}}" alt="">
                                                                        <span><a href="{{url('/client/home/agents-details/'.$rent_room->owner_id)}}">{{$rent_room->name}}</a></span>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <ul class="more-details clearfix">
                                                                <div>
                                                                    <li><i class="icon-14"></i>{{$rent_room->bed_room}} phòng ngủ</li>
                                                                    <li><i class="icon-15"></i>{{$rent_room->bath_room}} phòng vệ sinh </li>
                                                                    <li><i class="icon-16"></i>{{$rent_room -> acreage}} m²</li>
                                                                </div>
                                                                <div class="buy-btn "><a href="{{url('https://zalo.me/'.$rent_room->phone)}}">Nhắn Zalo</a></div>
                                                            </ul>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a style="color: red;" href="{{url('/client/report/'.$rent_room->rr_id)}}"><i class="fas fa-exclamation"></i></a></li>
                                                            </ul>
                                                            <div class="other-info-box clearfix">
                                                                <div class="btn-box pull-left"><a href="{{url('client/home/property-details/'.$rent_room->rr_id.'/'.$rent_room->cate_id)}}" class="theme-btn btn-two">Xem chi tiết</a></div>
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
                                                                    <figure class="image"><img src="{{url('images/rooms/'.$rent_room->url)}}" alt=""></figure>
                                                                    <div class="batch"><i class="icon-11"></i></div>
                                                                    <span class="category">Đặc sắc</span>
                                                                </div>
                                                                <div class="lower-content">
                                                                    <div class="author-info clearfix">
                                                                        <div class="author pull-left">
                                                                            <figure class="author-thumb"><img src="{{url('images/agents/'.$rent_room->user_image)}}" alt=""></figure>
                                                                            <h6><a href="{{url('/client/home/agents-details/'.$rent_room->owner_id)}}">{{$rent_room->name}}</a></h6>
                                                                        </div>
                                                                        <div class="buy-btn pull-right"><a href="{{url('https://zalo.me/'.$rent_room->phone)}}">Nhắn Zalo</a></div>
                                                                    </div>
                                                                    <div class="title-text"><h4><a href="{{url('client/home/property-details/'.$rent_room->rr_id.'/'.$rent_room->cate_id)}}">{{$rent_room->room_name}}</a></h4></div>
                                                                    <div class="price-box clearfix">
                                                                        <div class="price-info pull-left">
                                                                            <h6>Giá khởi điểm</h6>
                                                                            <h4>{{number_format($rent_room->prices, 0, '.', '.')}}<sup>đ</sup></h4>
                                                                        </div>
                                                                        <ul class="other-option pull-right clearfix">
                                                                            <li><a style="color: red;" href="{{url('/client/report/'.$rent_room->rr_id)}}"><i class="fas fa-exclamation"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <ul class="more-details clearfix">
                                                                        <li><i class="icon-14"></i>{{$rent_room->bed_room}} phòng ngủ</li>
                                                                        <li><i class="icon-15"></i>{{$rent_room->bath_room}} phòng vệ sinh </li>
                                                                        <li><i class="icon-16"></i>{{$rent_room -> acreage}} m²</li>
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

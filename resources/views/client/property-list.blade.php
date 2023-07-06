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
                                    <form action="{{url('client/home/search')}}" method="get" class="search-form">
                                        <div class="field-input">
                                            <i class="fas fa-search"></i>
                                            <input type="search" name="keyword_submit" placeholder="Tìm kiếm...">
                                        </div>
                                        <div class="select-box">
                                            <label>Lựa chọn khu vực (không bắt buộc)</label>
                                            <select class="wide" name ="cities"  id="country-dropdown" onchange="selectProvince()">
                                                <option value="">Nhập tỉnh thành</option>
                                                @foreach($cities as $city)
                                                    <option value="{{$city->cities_id }}">{{$city->city_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="select-box">
                                            <select class="wide" name="cities_details" id="state_dropdown" onchange="selectStreet()">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="select-box">
                                            <select class="wide" name ="streets" id="city-dropdown">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="select-box">
                                            <select class="wide" name ="bed_room">
                                                <option value=" ">Chọn số phòng ngủ</option>
                                                {{--                                                                    @foreach($rent_rooms as $rent_room)--}}
                                                {{--                                                                        <option value="{{$rent_room->bed_room }}">{{$rent_room->bed_room}} Phòng ngủ</option>--}}
                                                {{--                                                                    @endforeach--}}
                                                <option value="1">Một phòng ngủ</option>
                                                <option value="2">Hai phòng ngủ</option>
                                                <option value="3">Ba phòng ngủ</option>
                                                <option value="4">Bốn phòng ngủ</option>
                                            </select>
                                        </div>
                                        <div class="select-box">
                                            <select class="wide" name ="bath_room" >
                                                <option value="">Chọn số phòng vệ sinh</option>
                                                <option value="1">Một phòng vệ sinh</option>
                                                <option value="2">Hai phòng vệ sinh</option>
                                                <option value="3">Ba phòng vệ sinh</option>
                                                <option value="4">Bốn phòng vệ sinh</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Lọc giá</label>
                                            <div class="range-price">
                                                <label>1 - 5 triệu  <input type="radio" name="price" value="1000000-5000000" id="" checked="checked"></label>
                                            </div>
                                            <div class="range-price">
                                                <label>1 - 2 triệu  <input type="radio" name="price" value="1000000-2000000" id=""></label>
                                            </div>
                                            <div class="range-price">
                                                <label>2 - 5 triệu <input type="radio" name="price" value="2000000-5000000" id=""></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Lọc diện tích</label>
                                            <div class="range-price">
                                                <label>20 - 500m<sup>2</sup>  <input type="radio" name="acre" value="20-500" id="" checked="checked"></label>
                                            </div>
                                            <div class="range-price">
                                                <label>20 - 30m<sup>2</sup>  <input type="radio" name="acre" value="20-30" id="" ></label>
                                            </div>
                                            <div class="range-price">
                                                <label>50 - 100m<sup>2</sup> <input type="radio" name="acre" value="50-100" id=""></label>
                                            </div>
                                            <div class="range-price">
                                                <label>100 - 500m<sup>2</sup> <input type="radio" name="acre" value="100-500" id=""></label>
                                            </div>
                                        </div>
                                        <div class="filter-btn">
                                            <button type="submit" class="theme-btn btn-one"><i class="fas fa-filter"></i>&nbsp;Lọc</button>
                                        </div>
                                    </form>
                                </div>
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
                                                <figure class="image"><img src="{{url('images/rooms/'.$rent_room->url)}}" alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Đặc sắc</span>
                                                <div class="buy-btn"><a href="#">Cho thuê</a></div>
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
                                                            <span>{{$rent_room->name}}</span>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-14"></i>{{$rent_room->bed_room}} phòng ngủ</li>
                                                    <li><i class="icon-15"></i>{{$rent_room->bath_room}} phòng vệ sinh </li>
                                                    <li><i class="icon-16"></i>{{$rent_room -> acreage}} m²</li>
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
                                                                <h6>{{$rent_room->name}}</h6>
                                                            </div>
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
        </section>
        <!-- property-page-section end -->


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

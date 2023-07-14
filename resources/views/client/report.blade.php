@extends('layouts.base')
@section('title',"Báo cáo phòng trọ")

@section('content')
    @include('layouts.load')
    @include('sweetalert::alert')
    @include('client.header')


    <!--Page Title-->
    <section class="page-title centred" style="background-image: url({{asset('images/background/page-title-4.jpg')}});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Báo cáo bài đăng </h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                    <li>Báo cáo</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- pricing-section -->
    <section class="deals-section sec-pad">
        <div class="auto-container">
            <div class="sec-title">
                @forelse($rent_roomsss as $rent_room)
                <h5>Chủ sở hữu phòng trọ : {{$rent_room->name}}</h5>
                <h2>Hãy báo cáo cho chúng tôi</h2>
            </div>
                    <div class="single-item">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <div class="lower-content">
                                            <div class="title-text a"><h4><a href="{{url('client/home/property-details/'.$rent_room->rr_id.'/'.$rent_room->cate_id)}}">{{$rent_room->room_name}}</a></h4></div>
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
                                            <hr>
                                            <form action="{{url('/client/report/'.$rent_room->rr_id)}}" method="POST">
                                                @csrf
                                            <h4>Lí do mà bạn muốn báo cáo bài viết này ?</h4>
                                                <input type="text" style="border: 2px solid red" name="report_info">
                                                <button type="submit" class="btn btn-xs btn-warning btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'>Xác nhận báo cáo</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="image-box">
                                    <figure class="image"><img src="{{url('images/rooms/'.$rent_room->url)}}" alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Danh sach rong</p>
                @endforelse
        </div>
    </section>
    <!-- pricing-section end -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script type="text/javascript">
        $('.show-alert-delete-box').click(function(event){
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: "Bạn có chắc chắn muốn báo cáo bài đăng này ? ",
                text: "Hãy cân nhắc khi xác nhận",
                icon: "warning",
                type: "warning",
                buttons: ["Hủy","Chắc chắn"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#20d706',
                confirmButtonText: 'Yes, delete it!'
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>

    <!-- clients-section -->
    @include('client.section')
    <!-- clients-section end -->
    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fal fa-angle-up"></span>
    </button>
    </div>
@endsection

@extends('layouts.base')
@section('title',"Giá gói")

@section('content')
    @include('layouts.load')
    @include('sweetalert::alert')
    @include('client.header')


        <!--Page Title-->
        <section class="page-title centred" style="background-image: url({{asset('images/background/page-title-4.jpg')}});">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Lựa chọn gói đăng bài</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Giá gói đăng bài</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- pricing-section -->
        <section class="pricing-section sec-pad centred">
            <div class="auto-container">
                <div class="tabs-box">
                    <ul class="tab-buttons ">
                        <h3>Gói theo tháng</h3>
                        @if(\Illuminate\Support\Facades\Auth::check() == false)
                            <h4>Hãy đăng nhập để mua gói</h4>
                        @else
                        <h4>Số dư tài khoản của bạn : {{number_format(\Illuminate\Support\Facades\Auth::user()->money, 0, '.', '.')}} đ</h4>
                        @endif
                    </ul>
                    <br>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                    <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <form action="{{url('client/buyPack')}}" method="POST">
                                            @csrf
                                        <div class="pricing-table">
                                            <div class="table-header">
                                                <div class="shape-1" style="background-image: url({{asset('images/shape/shape-4.png')}});"></div>
                                                <div class="shape-2" style="background-image: url({{asset('images/shape/shape-5.png')}});"></div>
                                                <h4>Gói thường</h4>
                                                <h2>45.000 đ <span> tháng</span></h2>
                                            </div>
                                            <div class="table-content">
                                                <ul class="feature-list clearfix">
                                                    <li>Giới hạn 2 bài /ngày</li>
                                                    <li>Thời gian tồn tại bài đăng 5 ngày</li>
                                                    <li>Phù hợp tất cả các loại hình tuy nhiên lượng tiếp cận khách hàng thấp hơn </li>
                                                </ul>
                                            </div>
                                            <div class="table-footer">
                                                @if(\Illuminate\Support\Facades\Auth::user()->level == 1)
                                                <button type="submit" class="btn btn-xs btn-success btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'>Mua ngay</button>
                                                @elseif(\Illuminate\Support\Facades\Auth::user()->level == 2)
                                                    <button type="submit" class="btn btn-xs btn-success btn-flat show-alert-delete-box-bought btn-sm" data-toggle="tooltip" title='Delete'>Mua ngay</button>
                                                @else
                                                    <button type="submit" class="btn btn-xs btn-success btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'>Mua ngay</button>
                                                @endif
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                    <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <form action="{{url('client/buyVipPack')}}" method="POST">
                                            @csrf
                                        <div class="pricing-table">
                                            <div class="table-header">
                                                <div class="shape-1" style="background-image: url({{asset('images/shape/shape-4.png')}});"></div>
                                                <div class="shape-2" style="background-image: url({{asset('images/shape/shape-5.png')}});"></div>
                                                <h4>Gói vip</h4>
                                                <h2>225.000 đ <span> tháng</span></h2>
                                            </div>
                                            <div class="table-content">
                                                <ul class="feature-list clearfix">
                                                    <li>Giới hạn 5 bài /ngày</li>
                                                    <li>Thời gian tồn tại bài đăng 10 ngày</li>
                                                    <li>Phù hợp khách hàng cá nhân/môi giới có lượng căn trống thường xuyên, cần cho thuê nhanh hơn.</li>
                                                </ul>
                                            </div>
                                            <div class="table-footer">
                                                @if(\Illuminate\Support\Facades\Auth::user()->level == 1)
                                                <button type="submit" class="btn btn-xs btn-success btn-flat show-alert-delete-box-fuck btn-sm" data-toggle="tooltip" title='Delete'>Mua ngay</button>
                                                @elseif(\Illuminate\Support\Facades\Auth::user()->level == 2)
                                                    <button type="submit" class="btn btn-xs btn-success btn-flat show-alert-delete-box-fuck-2 btn-sm" data-toggle="tooltip" title='Delete'>Mua ngay</button>
                                                @else
                                                    <button type="submit" class="btn btn-xs btn-success btn-flat show-alert-delete-box-fuck-3 btn-sm" data-toggle="tooltip" title='Delete'>Mua ngay</button>
                                                @endif
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                    <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="pricing-table">
                                            <div class="table-header">
                                                <div class="shape-1" style="background-image: url({{asset('images/shape/shape-4.png')}});"></div>
                                                <div class="shape-2" style="background-image: url({{asset('images/shape/shape-5.png')}});"></div>
                                                <h4>Gói đa vũ trụ</h4>
                                                <h2>10.000.000  </h2>
                                            </div>
                                            <div class="table-content">
                                                <ul class="feature-list clearfix">

                                                </ul>
                                            </div>
                                            <div class="table-footer">

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
        <!-- pricing-section end -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script type="text/javascript">
        $('.show-alert-delete-box').click(function(event){
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: "Bạn có chắc mình muốn mua gói THƯỜNG ? ",
                text: "Gói có thời gian tồn tại là 30 ngày",
                icon: "warning",
                type: "warning",
                buttons: ["Hủy","Xác nhận mua"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#af000f',
                confirmButtonText: 'Yes, delete it!'
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>

    <script type="text/javascript">
        $('.show-alert-delete-box-bought').click(function(event){
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: "Bạn có chắc mình muốn mua thêm gói THƯỜNG ? ",
                text: "Thời gian tồn tại của gói bạn đang sở hữu sẽ được cộng thêm 30 ngày, nhưng bạn không thể mua gói VIP",
                icon: "warning",
                type: "warning",
                buttons: ["Hủy","Xác nhận mua"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#af000f',
                confirmButtonText: 'Yes, delete it!'
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>


    <script type="text/javascript">
        $('.show-alert-delete-box-fuck').click(function(event){
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: "Bạn có chắc mình muốn mua gói VIP ? ",
                text: "Gói có thời gian tồn tại là 30 ngày cùng với nhiều quyền lợi",
                icon: "warning",
                type: "warning",
                buttons: ["Hủy","Xác nhận mua"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#af000f',
                confirmButtonText: 'Yes, delete it!'
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>

    <script type="text/javascript">
        $('.show-alert-delete-box-fuck-2').click(function(event){
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: "Bạn có chắc mình muốn nâng cấp lên gói VIP ? ",
                text: "Gói có thời gian tồn tại là 30 ngày cùng với nhiều quyền lợi",
                icon: "warning",
                type: "warning",
                buttons: ["Hủy","Xác nhận mua"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#af000f',
                confirmButtonText: 'Yes, delete it!'
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>

    <script type="text/javascript">
        $('.show-alert-delete-box-fuck-3').click(function(event){
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: "Bạn có chắc mình muốn mua thêm cấp lên gói VIP ? ",
                text: "Thời gian tồn tại của gói bạn đang sở hữu sẽ được cộng thêm 30 ngày",
                icon: "warning",
                type: "warning",
                buttons: ["Hủy","Xác nhận mua"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#af000f',
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

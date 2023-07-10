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
                <h1>Nạp tiền vào tài khoản</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                    <li>Nạp tiền</li>
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
                    <h3>Nạp tiền</h3>
                    @if(\Illuminate\Support\Facades\Auth::check() == false)
                        <h4>Hãy đăng nhập để nạp tiền vào tài khoản</h4>
                    @else
                        <h4>Số dư tài khoản của bạn : {{number_format(\Illuminate\Support\Facades\Auth::user()->money, 0, '.', '.')}} đ</h4>
                    @endif
                </ul>
                <br>
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="row clearfix">
                            <div class=" pricing-block center" >
                                <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <form action="{{url('client/buyPack')}}" method="POST">
                                        @csrf
                                        <div class="pricing-table">
                                            <div class="table-header">
                                                <div class="shape-1" style="background-image: url({{asset('images/shape/shape-4.png')}});"></div>
                                                <div class="shape-2" style="background-image: url({{asset('images/shape/shape-5.png')}});"></div>
                                                <h4>Quét mã QR dưới đây</h4>
                                                <h2><img src="https://i.ibb.co/684Qds6/qr.png" width="5000" height="500"></h2>
                                            </div>
                                            <div class="table-content">
                                                <ul class="feature-list clearfix">
                                                    <li><b>Khi chuyển khoản hãy kèm theo tin nhắn sau : </b></li>
                                                    <li style="color: red;">NAPTIEN <b>{Tên tài khoản} {Số điện thoại}</b></li>
                                                    <li>Chúng tôi sẽ giải quyết sau nếu quý khách nạp nhầm hoặc nhập sai thông tin</li>
                                                    <li>Khi chuyển khoản thành công, quý khách hãy chờ tối đa 30 phút để tiền được thêm vào tài khoản</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- pricing-section end -->


    <!-- clients-section -->
    @include('client.section')
    <!-- clients-section end -->
    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fal fa-angle-up"></span>
    </button>
    </div>
@endsection

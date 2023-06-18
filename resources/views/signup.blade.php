@extends('layouts.base')
@section('title',"Đăng ký")

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
                    <h1>Đăng ký</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Đăng ký</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- ragister-section -->
        <section class="ragister-section centred sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                        <div class="sec-title">
                            <h5>Đăng ký</h5>
                            <h2>Đăng ký với ChipHome</h2>
                        </div>
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons centred clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">Chủ trọ</li>
                                    <li class="tab-btn" data-tab="#tab-2">Admin</li>
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="inner-box">
                                        <h4>Đăng ký</h4>
                                        <form action="http://azim.commonsupport.com/Realshed/signin.html" method="post" class="default-form">
                                            <div class="form-group">
                                                <label>Tên đăng nhập</label>
                                                <input type="text" name="name" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Mật khẩu</label>
                                                <input type="password" name="name" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Xác nhận mật khẩu</label>
                                                <input type="password" name="name" required="">
                                            </div>
                                            <div class="form-group message-btn">
                                                <button type="submit" class="theme-btn btn-one">Đăng ký</button>
                                            </div>
                                        </form>
                                        <div class="othre-text">
                                            <p>Đã có sẵn tài khoản? <a href="signin.blade.php">Đăng nhập</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-2">
                                    <div class="inner-box">
                                        <h4>Sign up</h4>
                                        <form action="http://azim.commonsupport.com/Realshed/signin.html" method="post" class="default-form">
                                            <div class="form-group">
                                                <label>User name</label>
                                                <input type="text" name="name" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="email" name="email" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" name="name" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" name="name" required="">
                                            </div>
                                            <div class="form-group message-btn">
                                                <button type="submit" class="theme-btn btn-one">Sign up</button>
                                            </div>
                                        </form>
                                        <div class="othre-text">
                                            <p>Already have an account? <a href="signin.blade.php">Sign in</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ragister-section end -->
        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>
@endsection

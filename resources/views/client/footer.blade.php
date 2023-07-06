<!-- main-footer -->
<footer class="main-footer">
    <div class="footer-top bg-color-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-title">
                            <h3>Về chúng tôi</h3>
                        </div>
                        <div class="text">
                            <li><a href="{{url('client/home/about')}}">Về chúng tôi</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml-70">
                        <div class="widget-title">
                            <h3>Dịch vụ</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list class">
                                <li><a href="{{url('client/home/services')}}">Dịch vụ của chúng tôi</a></li>
                                <li><a href="{{url('client/home/blog')}}">Các bài báo , tin tức</a></li>
                                <li><a href="{{url('client/home/contact')}}">Liên hệ với chúng tôi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget post-widget">
                        <div class="widget-title">
                            <h3>Báo Mới</h3>
                        </div>
                        <div class="post-inner">
                            @forelse($blogs as $blog)
                            <div class="post">
                                <figure class="post-thumb"><a href="{{url('client/home/blog-details/'.$blog->new_id)}}"><img src="{{url('images/rooms/'.$blog->new_image)}}" alt=""></a></figure>
                                <h5><a href="{{url('client/home/blog-details/'.$blog->new_id)}}">{{$blog->new_name}}</a></h5>
                                <p>{{$blog->post_date}}</p>
                            </div>
                            @empty
                                <p>Danh sach rong</p>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Liên hệ</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li><i class="fas fa-map-marker-alt"></i>Yên Sở City</li>
                                <li><i class="fas fa-microphone"></i>+0858862720</li>
                                <li><i class="fas fa-envelope"></i>anhnamco9@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <div class="copyright pull-left">
                    <p><a href="{{url('client/home')}}">ChipHome</a> &copy; 2023 All Right Reserved</p>
                </div>
                <ul class="footer-nav pull-right clearfix">
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->

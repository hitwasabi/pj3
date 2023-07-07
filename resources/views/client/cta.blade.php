<!-- cta-section -->
<section class="cta-section bg-color-2">
    <div class="pattern-layer" style="background-image: url({{asset('images/shape/shape-2.png')}});"></div>
    <div class="auto-container">
        <div class="inner-box clearfix">
            <div class="text pull-left">
                <h2>Tìm kiếm để thuê một phòng trọ hoặc <br />Đăng bài cho thuê ?</h2>
            </div>
            <div class="btn-box pull-right">
                <a href="{{url('client/home/property-list')}}" class="theme-btn btn-three">Danh mục phòng </a>
                @if(\Illuminate\Support\Facades\Auth::check()==true)
                    <a href="{{url('/agents/add-product')}}" class="theme-btn btn-one">Đăng tin bài</a>
                @else
                <a href="{{url('/login')}}" class="theme-btn btn-one">Đăng tin bài</a>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- cta-section end -->

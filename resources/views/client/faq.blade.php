<!-- xong -->
@extends('layouts.base')
@section('title',"Câu hỏi thường gặp")

@section('content')
    @include('layouts.load')
    @include('client.header')


    <!--Page Title-->
        <section class="page-title centred" style="background-image: url({{asset('images/background/page-title-4.jpg')}});">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Các câu hỏi thường gặp</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/client/home')}}">Trang chủ</a></li>
                        <li>Các câu hỏi thường gặp</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- faq-page-section -->
        <section class="faq-page-section sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="faq-content-side">
                            <div class="sec-title">
                                <h5>FAQ’S</h5>
                                <h2>Các câu hỏi thường gặp</h2>
                                <p>Tất cả các câu hỏi thường gặp chúng tôi sẽ giải đáp dưới đây:</p>
                            </div>
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                        <h5>Một ngôi nhà có thể mất giá trị?</h5>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content-box">
                                            <p>Có, một ngôi nhà có thể mất giá trị. Giá trị của một ngôi nhà có thể bị ảnh hưởng bởi nhiều yếu tố khác nhau, bao gồm:
                                            </p>
                                            <ul class="list-style-one clearfix">
                                                <li> Tuổi tác: Những căn nhà cũ hơn thường có giá trị thấp hơn so với những căn nhà mới được xây dựng.</li>

                                                <li>Vị trí: Vị trí của ngôi nhà là một yếu tố quan trọng ảnh hưởng đến giá trị của nó. Những căn nhà nằm ở khu vực an ninh, tiện ích và giao thông thuận lợi thường có giá trị cao hơn.</li>

                                                <li>Tình trạng bảo trì: Nếu một ngôi nhà không được bảo trì đúng cách, giá trị của nó sẽ giảm đi rất nhiều.</li>

                                                <li>Thị trường bất động sản: Giá trị của một ngôi nhà có thể bị ảnh hưởng bởi tình trạng thị trường bất động sản. Khi thị trường bất động sản suy thoái, giá trị của các căn nhà cũng giảm theo.</li>
                                            </ul>
                                            <p>Do đó, để giữ giá trị của một ngôi nhà, bạn cần chú ý đến việc duy trì, bảo dưỡng và cải thiện nó để có thể tăng giá trị của một ngôi nhà trong tương lai.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                        <h5>Một ngôi nhà cũ có thể có giá trị tốt như một ngôi nhà mới?</h5>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content-box">
                                            <p>Có, một ngôi nhà cũ cũng có thể có giá trị tốt như một ngôi nhà mới nếu nó được bảo dưỡng và cải tiến đúng cách. Việc sửa chữa hoặc nâng cấp lại ngôi nhà cũ có thể tăng giá trị của nó và mang lại lợi ích kinh tế cho chủ sở hữu.</p>
                                            <p>Ngoài ra, một số người thích các ngôi nhà cổ điển, bởi vì chúng có tính lịch sử và kiến trúc độc đáo. Những ngôi nhà này có thể có giá trị cao hơn so với những ngôi nhà mới nếu chúng được giữ gìn và bảo tồn đúng cách.
                                            <p>Tuy nhiên, để đánh giá đúng giá trị của một ngôi nhà cũ, cần xem xét nhiều yếu tố khác nhau, bao gồm tuổi tác, tình trạng bảo trì, vị trí, kích thước, thiết kế và các yếu tố khác. Điều quan trọng là phải đưa ra quyết định đúng đắn khi mua hoặc bán một ngôi nhà cũ.</p>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                     <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                        <h5>Tôi nên trả bao nhiêu cho người bán?</h5>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content-box">
                                            <p>Việc trả bao nhiêu cho người môi giới phụ thuộc vào nhiều yếu tố khác nhau, bao gồm thị trường bất động sản, giá trị của căn nhà và chính sách của từng công ty môi giới. Tuy nhiên, đa số các công ty môi giới sẽ tính phí dựa trên tỷ lệ phần trăm (%) của giá trị giao dịch.</p>
                                            <p>Trên thị trường bất động sản, phí môi giới thường dao động từ 2% đến 5% của giá trị căn nhà. Vì vậy, hãy tính toán khoảng cách giữa giá mà bạn sẽ bán hoặc mua ngôi nhà và giá thực tế của ngôi nhà đó trên thị trường. Sau đó, hãy xác định tỷ lệ phân trăm phí môi giới của công ty để tính toán chi phí môi giới.</p>
                                            <p>Ngoài ra, có thể thương lượng với công ty môi giới để giảm phí hoặc tìm kiếm các chương trình khuyến mãi. Bạn có thể tham khảo ý kiến của bạn bè, người thân hoặc chuyên gia bất động sản để đưa ra quyết định đúng đắn khi trả phí cho người môi giới.</p>
                                            <p>Tuy nhiên ở trên trang web ChipHome, bạn chỉ cần trả phí cho người cho thuê , chúng tôi sẽ không nhận bất cứ một khoản tiền nào của các bạn . Hãy an tâm nhé!</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-page-section end -->

        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>
@endsection

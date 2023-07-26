@extends('layouts.admin_base')
@section('title',"Trang chủ quản trị")

@section('content')



    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        @include('admin.preloader')
        @include('agents.header')
        @include('sweetalert::alert')
        @include('agents.sidebar')

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->


        <!--**********************************
            Content body end
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li><h5 class="bc-title">Dashboard</h5></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Home </a>
                    </li>
{{--                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>--}}
                </ol>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 wid-100">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card chart-grd same-card">
                                    <div class="card-body depostit-card p-0">
                                        <div class="depostit-card-media d-flex justify-content-between pb-0">
                                            <div>
                                                <h6>Tổng số bài của bạn</h6>
                                                <h3>{{$all_room}}</h3>
                                            </div>
                                            <div class="icon-box bg-primary-light">
                                                <div class="fas fa-home"></div>
                                            </div>
                                        </div>
                                        <div id="NewCustomers"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card chart-grd same-card">
                                    <div class="card-body depostit-card p-0">
                                        <div class="depostit-card-media d-flex justify-content-between pb-0">
                                            <div>
                                                <h6>Tổng số bài đang đăng</h6>
                                                <h3>{{$rent_room}}</h3>
                                            </div>
                                            <div class="icon-box bg-danger-light">
                                                <div class="fas fa-home"></div>
                                            </div>
                                        </div>
                                        <div id="NewExperiences"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card chart-grd same-card">
                                    <div class="card-body depostit-card p-0">
                                        <div class="depostit-card-media d-flex justify-content-between pb-0">
                                            <div>
                                                <h6>Tổng số bài đã hủy</h6>
                                                <h3>{{$cancel_room}}</h3>
                                            </div>
                                            <div class="icon-box bg-danger-light">
                                                <div class="fas fa-home"></div>
                                            </div>
                                        </div>
                                        <div id="NewExperience"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 same-card">
                                <div class="card">
                                    <div class="card-body depostit-card">
                                        <div class="depostit-card-media d-flex justify-content-between style-1">
                                            <div>
                                                <h6>Số bài bị báo cáo</h6>
                                                <h3>{{$reports->count()}}</h3>
                                            </div>
                                            <div class="icon-box bg-danger-light">
                                                <div style="color: darkred"><b>!!</b></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 same-card">
                                <div class="card">
                                    <div class="card-body depostit-card">
                                        <div class="depostit-card-media d-flex justify-content-between style-1">
                                            <div>
                                                <h6>Số lần thực hiện thanh toán</h6>
                                                <h3>{{$payment->count()}}</h3>
                                            </div>
                                            <div class="icon-box bg-primary-light">
                                                <div class="fas fa-money-bill"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 same-card">
                                <div class="card">
                                    <div class="card-body depostit-card">
                                        <div class="depostit-card-media d-flex justify-content-between style-1">
                                            <div>
                                                <h6>Số lần mua gói</h6>
                                                <h3>{{$packs->count()}}</h3>
                                            </div>
                                            <div class="icon-box bg-primary-light">
                                                <div class="fas fa-money-bill"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 same-card">
                                <div class="card">
                                    <div class="card-body depostit-card">
                                        <div class="depostit-card-media d-flex justify-content-between style-1">
                                            <div>
                                                <h6>Số lần nạp tiền</h6>
                                                <h3>{{$charge->count()}}</h3>
                                            </div>
                                            <div class="icon-box bg-primary-light">
                                                <div class="fas fa-money-bill"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 same-card">
                                <div class="card">
                                    <div class="card-body depostit-card">
                                        <div class="depostit-card-media d-flex justify-content-between style-1">
                                            <div>
                                                <h6>Lần thanh toán gần nhất</h6>
                                                <h3>{{$latest->payment_time}}</h3>
                                            </div>
                                            <div class="icon-box bg-primary-light">
                                                <div class="fas fa-money-bill"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-sm-12">
                                <div class="card">
                                <div class="card-body depostit-card">
                                    <div class="depostit-card-media d-flex justify-content-between style-1">
                                        <div>
                                            <h6>Số dư tài khoản</h6>
                                            <h3>{{\Illuminate\Support\Facades\Auth::user()->money}} đ</h3>
                                        </div>
                                        <div>
                                            <h6>Cấp độ tài khoản của bạn</h6>
                                            @if(\Illuminate\Support\Facades\Auth::user()->isAdmin == 1)
                                            @if(\Illuminate\Support\Facades\Auth::user()->level == 2)
                                            <h3>Thường</h3>
                                            @elseif(\Illuminate\Support\Facades\Auth::user()->level == 1)
                                            <h3>Bạn chưa có cấp độ, hãy mua gói</h3>
                                            @else
                                                <h3>Vip</h3>
                                            @endif
                                            @else
                                                <h3>Admin</h3>
                                            @endif
                                        </div>
                                        <div>
                                            <h6>Ngày hết hạn gói</h6>
                                            @if(\Illuminate\Support\Facades\Auth::user()->level != 1)
                                            <h3>{{$endDate}}</h3>
                                            @else
                                                <h3>None</h3>
                                            @endif
                                        </div>
                                        <div class="icon-box bg-primary-light">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.3787 1.875H15.625V1.25C15.625 1.08424 15.5592 0.925268 15.4419 0.808058C15.3247 0.690848 15.1658 0.625 15 0.625C14.8342 0.625 14.6753 0.690848 14.5581 0.808058C14.4408 0.925268 14.375 1.08424 14.375 1.25V1.875H10.625V1.25C10.625 1.08424 10.5592 0.925268 10.4419 0.808058C10.3247 0.690848 10.1658 0.625 10 0.625C9.83424 0.625 9.67527 0.690848 9.55806 0.808058C9.44085 0.925268 9.375 1.08424 9.375 1.25V1.875H5.625V1.25C5.625 1.08424 5.55915 0.925268 5.44194 0.808058C5.32473 0.690848 5.16576 0.625 5 0.625C4.83424 0.625 4.67527 0.690848 4.55806 0.808058C4.44085 0.925268 4.375 1.08424 4.375 1.25V1.875H3.62125C2.99266 1.87599 2.3901 2.12614 1.94562 2.57062C1.50114 3.0151 1.25099 3.61766 1.25 4.24625V17.0037C1.25099 17.6323 1.50114 18.2349 1.94562 18.6794C2.3901 19.1239 2.99266 19.374 3.62125 19.375H16.3787C17.0073 19.374 17.6099 19.1239 18.0544 18.6794C18.4989 18.2349 18.749 17.6323 18.75 17.0037V4.24625C18.749 3.61766 18.4989 3.0151 18.0544 2.57062C17.6099 2.12614 17.0073 1.87599 16.3787 1.875ZM17.5 17.0037C17.499 17.3008 17.3806 17.5854 17.1705 17.7955C16.9604 18.0056 16.6758 18.124 16.3787 18.125H3.62125C3.32418 18.124 3.03956 18.0056 2.8295 17.7955C2.61944 17.5854 2.50099 17.3008 2.5 17.0037V4.24625C2.50099 3.94918 2.61944 3.66456 2.8295 3.4545C3.03956 3.24444 3.32418 3.12599 3.62125 3.125H4.375V3.75C4.375 3.91576 4.44085 4.07473 4.55806 4.19194C4.67527 4.30915 4.83424 4.375 5 4.375C5.16576 4.375 5.32473 4.30915 5.44194 4.19194C5.55915 4.07473 5.625 3.91576 5.625 3.75V3.125H9.375V3.75C9.375 3.91576 9.44085 4.07473 9.55806 4.19194C9.67527 4.30915 9.83424 4.375 10 4.375C10.1658 4.375 10.3247 4.30915 10.4419 4.19194C10.5592 4.07473 10.625 3.91576 10.625 3.75V3.125H14.375V3.75C14.375 3.91576 14.4408 4.07473 14.5581 4.19194C14.6753 4.30915 14.8342 4.375 15 4.375C15.1658 4.375 15.3247 4.30915 15.4419 4.19194C15.5592 4.07473 15.625 3.91576 15.625 3.75V3.125H16.3787C16.6758 3.12599 16.9604 3.24444 17.1705 3.4545C17.3806 3.66456 17.499 3.94918 17.5 4.24625V17.0037Z" fill="var(--primary)"/>
                                                <path d="M7.68311 7.05812L6.24999 8.49125L5.44186 7.68312C5.38421 7.62343 5.31524 7.57581 5.23899 7.54306C5.16274 7.5103 5.08073 7.49306 4.99774 7.49234C4.91475 7.49162 4.83245 7.50743 4.75564 7.53886C4.67883 7.57028 4.60905 7.61669 4.55037 7.67537C4.49168 7.73406 4.44528 7.80384 4.41385 7.88065C4.38243 7.95746 4.36661 8.03976 4.36733 8.12275C4.36805 8.20573 4.3853 8.28775 4.41805 8.364C4.45081 8.44025 4.49842 8.50922 4.55811 8.56687L5.80811 9.81687C5.92532 9.93404 6.08426 9.99986 6.24999 9.99986C6.41572 9.99986 6.57466 9.93404 6.69186 9.81687L8.56686 7.94187C8.68071 7.82399 8.74371 7.66612 8.74229 7.50224C8.74086 7.33837 8.67513 7.18161 8.55925 7.06573C8.44337 6.94985 8.28661 6.88412 8.12274 6.8827C7.95887 6.88127 7.80099 6.94427 7.68311 7.05812Z" fill="var(--primary)"/>
                                                <path d="M15 8.125H10.625C10.4592 8.125 10.3003 8.19085 10.1831 8.30806C10.0658 8.42527 10 8.58424 10 8.75C10 8.91576 10.0658 9.07473 10.1831 9.19194C10.3003 9.30915 10.4592 9.375 10.625 9.375H15C15.1658 9.375 15.3247 9.30915 15.4419 9.19194C15.5592 9.07473 15.625 8.91576 15.625 8.75C15.625 8.58424 15.5592 8.42527 15.4419 8.30806C15.3247 8.19085 15.1658 8.125 15 8.125Z" fill="var(--primary)"/>
                                                <path d="M7.68311 12.6831L6.24999 14.1162L5.44186 13.3081C5.38421 13.2484 5.31524 13.2008 5.23899 13.1681C5.16274 13.1353 5.08073 13.1181 4.99774 13.1173C4.91475 13.1166 4.83245 13.1324 4.75564 13.1639C4.67883 13.1953 4.60905 13.2417 4.55037 13.3004C4.49168 13.3591 4.44528 13.4288 4.41385 13.5056C4.38243 13.5825 4.36661 13.6648 4.36733 13.7477C4.36805 13.8307 4.3853 13.9127 4.41805 13.989C4.45081 14.0653 4.49842 14.1342 4.55811 14.1919L5.80811 15.4419C5.92532 15.559 6.08426 15.6249 6.24999 15.6249C6.41572 15.6249 6.57466 15.559 6.69186 15.4419L8.56686 13.5669C8.68071 13.449 8.74371 13.2911 8.74229 13.1272C8.74086 12.9634 8.67513 12.8066 8.55925 12.6907C8.44337 12.5749 8.28661 12.5091 8.12274 12.5077C7.95887 12.5063 7.80099 12.5693 7.68311 12.6831Z" fill="var(--primary)"/>
                                                <path d="M15 13.75H10.625C10.4592 13.75 10.3003 13.8158 10.1831 13.9331C10.0658 14.0503 10 14.2092 10 14.375C10 14.5408 10.0658 14.6997 10.1831 14.8169C10.3003 14.9342 10.4592 15 10.625 15H15C15.1658 15 15.3247 14.9342 15.4419 14.8169C15.5592 14.6997 15.625 14.5408 15.625 14.375C15.625 14.2092 15.5592 14.0503 15.4419 13.9331C15.3247 13.8158 15.1658 13.75 15 13.75Z" fill="var(--primary)"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="col-xl-12 col-sm-12">
                                <div class="card">
                                    <div class="card-body depostit-card">
                                        <!DOCTYPE HTML>
                                        <html>
                                        <head>
                                            <script>
                                                window.onload = function () {

                                                    var chart = new CanvasJS.Chart("chartContainer", {
                                                        animationEnabled: true,
                                                        title:{
                                                            text: "THỐNG KÊ BÀI ĐĂNG PHÒNG TRỌ",
                                                            fontFamily : "Bolder",
                                                            horizontalAlign: "left"
                                                        },
                                                        data: [{
                                                            type: "doughnut",
                                                            startAngle: 60,
                                                            //innerRadius: 60,
                                                            indexLabelFontSize: 17,
                                                            indexLabel: "{label} - #percent%",
                                                            toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                                                            dataPoints: [
                                                                { y: {{$rent_room}}, label: "Số bài đăng khả dụng" },
                                                                { y: {{$cancel_room}}, label: "Số bài đăng không khả dụng" },
                                                                { y: {{$reports->count()}}, label: "Số bài bị báo cáo" }
                                                            ]
                                                        }]
                                                    });
                                                    chart.render();

                                                }
                                            </script>
                                        </head>
                                        <body>
                                        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                                        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
                                        </body>
                                        </html>
                                    </div>
                                </div>
                            </div>

{{--                            <div class="col-xl-12">--}}
{{--                                <div class="card overflow-hidden">--}}
{{--                                    <div class="card-header border-0 pb-0 flex-wrap">--}}
{{--                                        <h4 class="heading mb-0">Projects Overview</h4>--}}
{{--                                        <ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">--}}
{{--                                            <li class="nav-item" role="presentation">--}}
{{--                                                <button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab"  aria-selected="true">Week</button>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item" role="presentation">--}}
{{--                                                <button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab"  aria-selected="false">Month</button>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item" role="presentation">--}}
{{--                                                <button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab"  aria-selected="false">Year</button>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item" role="presentation">--}}
{{--                                                <button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-selected="false">All</button>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="card-body  p-0">--}}
{{--                                        <div id="overiewChart"></div>--}}
{{--                                        <div class="ttl-project">--}}
{{--                                            <div class="pr-data">--}}
{{--                                                <h5>12,721</h5>--}}
{{--                                                <span>Tổng số lượt xem</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="pr-data">--}}
{{--                                                <h5 class="text-primary">721</h5>--}}
{{--                                                <span>Active Projects</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="pr-data">--}}
{{--                                                <h5>$2,50,523</h5>--}}
{{--                                                <span>Revenue</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="pr-data">--}}
{{--                                                <h5 class="text-success">12,275h</h5>--}}
{{--                                                <span>Working Hours</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-xl-3 t-earn">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="heading mb-0" style="color: cornflowerblue">Tổng số lượt xem các bài băng của bạn : </h4>
                            </div>
                            <div class="card-body px-0 overflow-hidden">
                                <div class="total-earning">
                                    <h2>{{$views}}</h2>
                                    <h4 style="color: blue;" class="heading mb-0">Bài đăng đang có luợt xem cao nhất :  </h4>
                                    <br>
                                        <h5>Bài đăng số : <a href="{{url('/agents/ecom-product-detail/'.$mostView->rr_id)}}">{{$mostView->rr_id}}</a> </h5>
                                    <hr>
                                    <h4 style="color: red;" class="heading mb-0">Tổng số lần bài đăng của bạn bị báo cáo :  </h4>
                                    <br>
                                    <h2>{{$report->count()}}</h2>

                                    <h4 style="color: orangered" class="heading mb-0">Bài đăng đang bị báo cáo nhiều nhất :  </h4>
                                    <br>
                                    @foreach($mostReportRoom as $rPr)
                                        <h5>Bài đăng số : <a href="{{url('/agents/ecom-product-detail/'.$rPr->rr_id)}}">{{$rPr->rr_id}}</a> </h5>
                                    @endforeach
{{--                                    <ul class="nav nav-pills mb-3 earning-tab earning-chart" id="pills-tab1" role="tablist">--}}
{{--                                        <li class="nav-item" role="presentation">--}}
{{--                                            <button class="nav-link active" data-series="day" id="pills-day-tab1" data-bs-toggle="pill" data-bs-target="#pills-day1" type="button" role="tab" aria-selected="true">Day</button>--}}
{{--                                        </li>--}}
{{--                                        <li class="nav-item" role="presentation">--}}
{{--                                            <button class="nav-link" id="pills-week-tab1" data-series="week" data-bs-toggle="pill" data-bs-target="#pills-week1" type="button" role="tab" aria-selected="false">Week</button>--}}
{{--                                        </li>--}}
{{--                                        <li class="nav-item" role="presentation">--}}
{{--                                            <button class="nav-link" id="pills-month-tab1" data-series="month" data-bs-toggle="pill" data-bs-target="#pills-month1" type="button" role="tab" aria-selected="false">Month</button>--}}
{{--                                        </li>--}}
{{--                                        <li class="nav-item" role="presentation">--}}
{{--                                            <button class="nav-link" id="pills-year-tab1" data-series="year" data-bs-toggle="pill" data-bs-target="#pills-year1" type="button" role="tab" aria-selected="false">Year</button>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 bst-seller">
                    </div>
                </div>

            </div>
        </div>

        <!--**********************************
            Content body end
        ***********************************-->
        <div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
            <div class="offcanvas-header">
                <h5 class="modal-title" id="#gridSystemModal">Add Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <div class="container-fluid">
                    <div>
                        <label>Profile Picture</label>
                        <div class="dz-default dlab-message upload-img mb-3">
                            <form action="#" class="dropzone">
                                <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <div class="fallback">
                                    <input name="file" type="file" multiple>

                                </div>
                            </form>
                        </div>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-xl-6 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Employee ID <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label for="exampleFormControlInput2" class="form-label">Employee Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label for="exampleFormControlInput3" class="form-label">Employee Email<span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label for="exampleFormControlInput4" class="form-label">Password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="exampleFormControlInput4" placeholder="">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Designation<span class="text-danger">*</span></label>
                                <select class="default-select form-control">
                                    <option  data-display="Select">Please select</option>
                                    <option value="html">Software Engineer</option>
                                    <option value="css">Civil Engineer</option>
                                    <option value="javascript">Web Doveloper</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Department<span class="text-danger">*</span></label>
                                <select class="default-select form-control">
                                    <option  data-display="Select">Please select</option>
                                    <option value="html">Software</option>
                                    <option value="css">Doit</option>
                                    <option value="javascript">Designing</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Country<span class="text-danger">*</span></label>
                                <select class="default-select form-control">
                                    <option  data-display="Select">Please select</option>
                                    <option value="html">Ind</option>
                                    <option value="css">USA</option>
                                    <option value="javascript">UK</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label for="exampleFormControlInput88" class="form-label">Mobile<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="exampleFormControlInput88" placeholder="">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Gender<span class="text-danger">*</span></label>
                                <select class="default-select form-control">
                                    <option  data-display="Select">Please select</option>
                                    <option value="html">Male</option>
                                    <option value="css">Female</option>
                                    <option value="javascript">Other</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label for="exampleFormControlInput99" class="form-label">Joining Date<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="exampleFormControlInput99">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label for="exampleFormControlInput8" class="form-label">Date of Birth<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="exampleFormControlInput8">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label for="exampleFormControlInput10" class="form-label">Reporting To<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleFormControlInput10" placeholder="">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Language Select<span class="text-danger">*</span></label>
                                <select class="default-select form-control">
                                    <option  data-display="Select">Please select</option>
                                    <option value="html">English</option>
                                    <option value="css">Hindi</option>
                                    <option value="javascript">Canada</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">User Role<span class="text-danger">*</span></label>
                                <select class="default-select form-control">
                                    <option  data-display="Select">Please select</option>
                                    <option value="html">Parmanent</option>
                                    <option value="css">Parttime</option>
                                    <option value="javascript">Per Hours</option>
                                </select>
                            </div>
                            <div class="col-xl-12 mb-3">
                                <label class="form-label">Address<span class="text-danger">*</span></label>
                                <textarea rows="2" class="form-control"></textarea>
                            </div>
                            <div class="col-xl-12 mb-3">
                                <label class="form-label">About<span class="text-danger">*</span></label>
                                <textarea rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary me-1">Submit</button>
                            <button class="btn btn-danger light ms-1">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample1">
            <div class="offcanvas-header">
                <h5 class="modal-title" id="#gridSystemModal1">Add New Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <div class="container-fluid">
                    <form>
                        <div class="row">
                            <div class="col-xl-6 mb-3">
                                <label for="exampleFormControlInputfirst" class="form-label">Title<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleFormControlInputfirst" placeholder="Title">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Project<span class="text-danger">*</span></label>
                                <select class="default-select form-control">
                                    <option  data-display="Select">Project</option>
                                    <option value="html">Salesmate</option>
                                    <option value="css">ActiveCampaign</option>
                                    <option value="javascript">Insightly</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label for="exampleFormControlInputthree" class="form-label">Start Date<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="exampleFormControlInputthree">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label for="exampleFormControlInputfour" class="form-label">End Date<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="exampleFormControlInputfour">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Estimated Hour<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="09:30"><span class="input-group-text"><i
                                            class="fas fa-clock"></i></span>
                                </div>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Status<span class="text-danger">*</span></label>
                                <select class="default-select form-control">
                                    <option  data-display="Select">Status</option>
                                    <option value="html">In Progess</option>
                                    <option value="css">Pending</option>
                                    <option value="javascript">Completed</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">priority<span class="text-danger">*</span></label>
                                <select class="default-select form-control">
                                    <option  data-display="Select">priority</option>
                                    <option value="html">Hight</option>
                                    <option value="css">Medium</option>
                                    <option value="javascript">Low</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Category<span class="text-danger">*</span></label>
                                <select class="default-select form-control">
                                    <option  data-display="Select">Category</option>
                                    <option value="html">Designing</option>
                                    <option value="css">Development</option>
                                    <option value="javascript">react developer</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Permission<span class="text-danger">*</span></label>
                                <select class="default-select form-control">
                                    <option  data-display="Select">Permission</option>
                                    <option value="html">Public</option>
                                    <option value="css">Private</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Deadline add<span class="text-danger">*</span></label>
                                <select class="default-select form-control">
                                    <option  data-display="Select">Deadline</option>
                                    <option value="html">Yes</option>
                                    <option value="css">No</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Assigned to<span class="text-danger">*</span></label>
                                <select class="default-select form-control">
                                    <option  data-display="Select">Assigned</option>
                                    <option value="html">Bernard</option>
                                    <option value="css">Sergey Brin</option>
                                    <option value="javascript"> Larry Ellison</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Responsible Person<span class="text-danger">*</span></label>
                                <input name='tagify' class="form-control py-0 ps-0" value='James, Harry'>

                            </div>
                            <div class="col-xl-12 mb-3">
                                <label class="form-label">Description<span class="text-danger">*</span></label>
                                <textarea rows="3" class="form-control"></textarea>
                            </div>
                            <div class="col-xl-12 mb-3">
                                <label class="form-label">Summary<span class="text-danger">*</span></label>
                                <textarea rows="3" class="form-control"></textarea>
                            </div>

                        </div>
                        <div>
                            <button class="btn btn-primary me-1">Help Desk</button>
                            <button class="btn btn-danger light ms-1">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Employee</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <label class="form-label">Email ID<span class="text-danger">*</span></label>
                                <input type="email" class="form-control" placeholder="hello@gmail.com">
                                <label class="form-label mt-3">Employment date<span class="text-danger">*</span></label>
                                <input class="form-control" type="date">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <label class="form-label mt-3">First Name<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <label class="form-label mt-3">Last Name<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Surname">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 invite">
                                    <label class="form-label">Send invitation email<span class="text-danger">*</span></label>
                                    <input type ="email" class="form-control " placeholder="+ invite">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!--**********************************
          Footer start
      ***********************************-->
        @include('admin.footer')
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
@endsection

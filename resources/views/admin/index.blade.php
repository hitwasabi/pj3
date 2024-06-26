@extends('layouts.admin_base')
@section('title',"Trang chủ admin")

@section('content')



    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        @include('admin.preloader')
        @include('admin.header')
        @include('sweetalert::alert')
        @include('admin.sidebar')

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
                    <li><h5 class="bc-title">Thống kê</h5></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Home </a>
                    </li>
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
                                                <h6>Tổng số bài đăng</h6>
                                                <h3>{{$rooms->count()}}</h3>
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
                                                <h6>Tổng số bài khả dụng</h6>
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
                                                <h6>Tổng số bài không khả dụng</h6>
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
                                                <h6>Tổng số người dùng</h6>
                                                <h3>{{$user->count()}}</h3>
                                            </div>
                                            <div class="icon-box bg-primary-light">
                                                <div class="fas fa-user"></div>
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
                                                <h6>Tổng số TK VIP</h6>
                                                <h3>{{$vips}}</h3>
                                            </div>
                                            <div class="icon-box bg-primary-light">
                                                <div class="fas fa-user-alt"></div>
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
                                                <h6>Tổng số TK thường</h6>
                                                <h3>{{$normals}}</h3>
                                            </div>
                                            <div class="icon-box bg-primary-light">
                                                <div class="fas fa-user-circle"></div>
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
                                                <h6>Số TK mặc định</h6>
                                                <h3>{{$none}}</h3>
                                            </div>
                                            <div class="icon-box bg-primary-light">
                                                <div class="fas fa-user-astronaut"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-sm-12">
                                <div class="card chart-grd same-card">
                                    <div class="card-body d-flex ">
{{--                                        <div id="AllProject"></div>--}}
{{--                                        <ul class="project-list">--}}
{{--                                            <li><h6>All Projects</h6></li>--}}
{{--                                            <li>--}}
{{--                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                    <rect width="20" height="20" rx="3" fill="#3AC977"/>--}}
{{--                                                </svg>--}}
{{--                                                Compete--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                    <rect width="20" height="20" rx="3" fill="var(--primary)"/>--}}
{{--                                                </svg>--}}
{{--                                                Pending--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                    <rect width="20" height="20" rx="3" fill="var(--secondary)"/>--}}
{{--                                                </svg>--}}
{{--                                                Not Start--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                    <rect width="10" height="10" rx="3" fill="var(--secondary)"/>--}}
{{--                                                </svg>--}}
{{--                                                Not Start--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
                                        <!DOCTYPE HTML>
                                        <html>

                                        <head>
                                            <script>
                                                window.onload = function () {

                                                    var chart = new CanvasJS.Chart("chartContainer1", {
                                                        animationEnabled: true,
                                                        title:{
                                                            text: "THỐNG KÊ NGƯỜI DÙNG (100%)",
                                                            fontFamily: "Bolder",
                                                            horizontalAlign: "center"
                                                        },
                                                        data: [{
                                                            type: "doughnut",
                                                            startAngle: 150,
                                                            //innerRadius: 60,
                                                            indexLabelFontSize: 16,
                                                            indexLabel: "{label} - #percent%",
                                                            toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                                                            dataPoints: [
                                                                { y: {{(int)($vips)}}, label: "Người dùng VIP" },
                                                                { y: {{(int)($normals)}}, label: "Người dùng thường" },
                                                                { y: {{(int)($none)}}, label: "Người chưa mua gói" }

                                                            ]
                                                        }]
                                                    });



                                                    var chart1 = new CanvasJS.Chart("chartContainer2", {
                                                        animationEnabled: true,
                                                        title:{
                                                            text: "THỐNG KÊ BÀI ĐĂNG PHÒNG TRỌ",
                                                            fontFamily: "Bolder",
                                                            horizontalAlign: "center"
                                                        },
                                                        data: [{
                                                            type: "doughnut",
                                                            startAngle: 60,
                                                            //innerRadius: 60,
                                                            indexLabelFontSize: 17,
                                                            indexLabel: "{label} - #percent%",
                                                            toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                                                            dataPoints: [
                                                                { y: {{(int)($rent_room)}}, label: "Số bài đăng khả dụng " },
                                                                { y: {{(int)($cancel_room)}}, label: "Số bài đăng không khả dụng" },
                                                                { y: {{(int)($reports->count())}}, label: "Số bài đăng bị báo cáo" }
                                                            ]
                                                        }]
                                                    });
                                                    chart.render();
                                                    chart1.render();
                                                }
                                            </script>
                                            <style>
                                                #chartContainer1 {
                                                    margin: 0 auto;
                                                    align: center;
                                                }
                                            </style>
                                        </head>
                                        <body>
                                        <div id="chartContainer1" style="height: 370px; width: 100%;">
                                        </div>
                                        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
                                        </body>
                                        </html>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-sm-12">
                                <div class="card chart-grd same-card">
                                    <div class="card-body d-flex align-items-center  py-2">
                                        <!DOCTYPE HTML>
                                        <html>
                                        <head>
                                        </head>
                                        <body>
                                        <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
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
                                <h4 style="color: green;" class="heading mb-0">Tổng số doanh thu:</h4>
                            </div>
                            <div class="card-body px-0 overflow-hidden">
                                <div class="total-earning">
                                    <h3>{{number_format($money, 0, '.', '.')}} vnđ</h3>
                                </div>
                                <hr>
                                <div class="card-header border-0 pb-0">
                                    <h4 style="color: cornflowerblue;" class="heading mb-0">Tổng số lần khách hàng thực hiện giao dịch trên website:</h4>
                                </div>
                                <div class="card-body px-0 overflow-hidden">
                                    <div class="total-earning">
                                        <h2>{{$paid}}</h2>
                                    </div>
                                    <div class="card-header border-0 pb-0">
                                        <h4 style="color: mediumorchid;" class="heading mb-0">Số gói VIP được thanh toán:</h4>
                                    </div>
                                    <div class="card-body px-0 overflow-hidden">
                                        <div class="total-earning">
                                            <h2>{{$vip}}</h2>
                                        </div>
                                        <div class="card-header border-0 pb-0">
                                            <h4 style="color: orange" class="heading mb-0">Số gói Thường được thanh toán:</h4>
                                        </div>
                                        <div class="card-body px-0 overflow-hidden">
                                            <div class="total-earning">
                                                <h2>{{$normal}}</h2>
                                            </div>
                                    <hr>
                                    <div class="card-header border-0 pb-0">
                                        <h4 style="color: #0b4c44" class="heading mb-0">Lần giao dịch gần đây nhất được thực hiện vào ngày:</h4>
                                    </div>
                                    <div class="card-body px-0 overflow-hidden">
                                        <div class="total-earning">
                                            <h2>{{$pay->payment_time}}</h2>
                                        </div>
                                    </div>
                                        </div>
                                        <div class="card-header border-0 pb-0">
                                            <h4 style="color: burlywood" class="heading mb-0">Khách hàng mua nhiều gói nhất:</h4>
                                        </div>
                                        <div class="card-body px-0 overflow-hidden">
                                            <div class="total-earning">
                                                <h3><a style="color: black" href="{{url('client/home/agents-details/'.$userMostBuy->id)}}">{{$userMostBuy->name}}</a></h3>
                                            </div>
                                        </div>
                                        <div class="card-header border-0 pb-0">
                                            <h4 style="color: gray" class="heading mb-0">Khách hàng đăng nhiều bài nhất:</h4>
                                        </div>
                                        <div class="card-body px-0 overflow-hidden">
                                            <div class="total-earning">
                                                <h3><a style="color: black" href="{{url('client/home/agents-details/'.$userMostPost->id)}}">{{$userMostPost->name}}</a></h3>
                                            </div>
                                        </div>
                                    </div>

                            </div>
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

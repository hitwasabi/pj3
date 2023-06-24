
@extends('layouts.admin_base')
@section('title',"Trang rỗng")

@section('content')



    <!--**********************************
    Main wrapper start
***********************************-->
    <div id="main-wrapper">
        @include('admin.preloader')
        @include('agents.header')

        @include('agents.sidebar')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                    <div class="offcanvas-header">
                        <h5 class="modal-title" id="#gridSystemModal">Bài đăng mới</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <form action="{{url('/agents/add-product')}}" method="POST">
                    @csrf
                    <div class="offcanvas-body">
                        <div class="container-fluid">
                            <div>
                                <label>Ảnh phòng cho thuê</label>
                                <div class="dz-default dlab-message upload-img mb-3">
                                    <form action="#" class="dropzone">
                                        <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <div class="fallback">
                                            <input name="url" type="file" multiple>
                                        </div>
                                    </form>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-xl-6 mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tên phòng trọ<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="room_name" name="room_name" placeholder="Nhập tên phòng trọ..." required>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <label for="exampleFormControlInput2" class="form-label">Loại phòng cho thuê<span class="text-danger">*</span></label>
                                        <select class="default-select form-control" name="cate_id">
                                            <option  data-display="Select">Hãy chọn</option>
                                        @foreach($cates as $cate)
                                            <option value="{{$cate->id}}">{{$cate->cate_name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <label for="exampleFormControlInput3" class="form-label">Thành phố<span class="text-danger">*</span></label>
                                        <select class="default-select form-control" name="city_id">
                                            <option  data-display="Select">Hãy chọn</option>
                                        @foreach($cities as $city)
                                            <option value="{{$city->cities_id}}">{{$city->city_name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <label for="exampleFormControlInput2" class="form-label">Số người cho thuê<span class="text-danger">*</span></label>
                                        <select class="default-select form-control" name="rent_amountId">
                                            <option  data-display="Select">Hãy chọn</option>
                                            @foreach($amounts as $amount)
                                                <option value="{{$amount->ram_id}}">{{$amount->amounts}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <label class="form-label">Quận<span class="text-danger">*</span></label>
                                        <select class="default-select form-control" name="city_detailId">
                                            <option  data-display="Select">Hãy chọn</option>
                                            @foreach($districts as $district)
                                                <option value="{{$city->cities_id}}">{{$district->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <label class="form-label">Số phòng ngủ<span class="text-danger">*</span></label>
                                        <select class="default-select form-control" name="bed_room">
                                            <option  data-display="Select">Hãy chọn</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <label class="form-label">Đường<span class="text-danger">*</span></label>
                                        <select class="default-select form-control" name="street_id">
                                            <option  data-display="Select">Hãy chọn</option>
                                            @foreach($streets as $street)
                                                <option value="{{$district->city_detailId}}">{{$street->street_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <label class="form-label">Số phòng tắm<span class="text-danger">*</span></label>
                                        <select class="default-select form-control" name="bath_room">
                                            <option  data-display="Select">Hãy chọn</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <label class="form-label">Giá cho thuê<span class="text-danger">(vnđ)</span></label>
                                        <input type="number" class="form-control" id="room_name" name="prices" min="100000" placeholder="Nhập giá phòng trọ..." required>

                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <label class="form-label">Diện tích phòng trọ<span class="text-danger">(mét vuông)</span></label>
                                        <input type="text" class="form-control" id="room_name" name="acreage" placeholder="Nhập diện tích phòng trọ..." required>
                                    </div>

                                    <div class="col-xl-12 mb-3">
                                        <label class="form-label">Mô tả thêm <span class="text-danger">*</span></label>
                                        <textarea rows="3" class="form-control" name="info_detail"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary me-1">Đăng bài</button>
                                </div>
                        </div>
                    </div>
                    </form>
                </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        @include('admin.footer')

    </div>
@endsection
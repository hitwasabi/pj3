@extends('layouts.admin_base')
@section('title',"Tin tức")

@section('content')


    <!--**********************************
    Main wrapper start
***********************************-->
    <div id="main-wrapper">
        @include('admin.preloader')
        @include('admin.header')

        @include('admin.sidebar')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="heading mb-0">Danh sách bài báo</h4>
                    <form action="{{url('admin/edit-blog')}}" method="GET">
                        @csrf
                    <div class="d-flex align-items-center">
                        <button class="btn btn-primary btn-sm ms-2" type="submit">Thêm bài báo</button>
                    </div>
                    </form>
                </div>
                <div class="table-responsive">
                    <table id="example3" class="display table" style="min-width: 845px">
                        <thead>
                        <tr>
                            <th>Ảnh đại diện</th>
                            <th>Tên người viết</th>
                            <th>Tên bài báo</th>
                            <th>Ảnh bài báo</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Ngày viết</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($blogs as $blog)
                        <tr>
                            <td><img class="rounded-circle" width="35" src="{{$blog->user_image}}" alt=""></td>
                            <td>{{$blog->name}}</td>
                            <td>{{$blog->new_name}}</td>
                            <td><img  width="35" src="{{$blog->new_image}}" alt=""></td>
                            <td><a href="javascript:void(0);"><strong>{{$blog->phone}}</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>{{$blog->email}}</strong></a></td>
                            <td>{{$blog->post_date}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('/admin/edit-blog')}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @empty
                            <p>Danh sach rong</p>
                        @endforelse
                        </tbody>
                    </table>
                    <div class="pagination-wrapper">
                        {{$blogs->links("pagination::bootstrap-4")}}
                    </div>
                </div>
            </div>
        </div>




        <div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
            <div class="offcanvas-header">
                <h5 class="modal-title" id="#gridSystemModal">Thêm bài báo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <div class="container-fluid">
                    <div>
                        <label>Ảnh Bìa</label>
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
                                <label for="exampleFormControlInput1" class="form-label">ID Bài báo <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="col-xl-12 mb-3">
                                <label class="form-label">About<span class="text-danger">*</span></label>
                                <textarea rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary me-1">Đăng bài</button>
                            <button class="btn btn-danger light ms-1">Hủy đăng bài</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        @include('admin.footer')

    </div>
@endsection

@extends('layouts.admin_base')
@section('title',"Thông tin Admin")

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
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li><h5 class="bc-title">Thông tin cá nhân</h5></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </li>
                </ol>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card h-auto">
                            <div class="card-body">
                                <div class="c-profile text-center">
                                    @if(\Illuminate\Support\Facades\Auth::user()->user_image == null)
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADACAMAAABlApw1AAAAMFBMVEX19vfExcbIycnd3t/y8/TNzc7V1tfa29zm5+jr7O3LzMzc3d7Q0NHu7/Dg4eLj5OU4/BecAAAC7ElEQVR4nO3cAWKrIAwGYEFQVLT3v+2rdd3atTokaJK+/ztBoiAB0lYVAAAAAAAAAAAAAABAIS7Uje+tMbb3TR0cdzz7dG1vfvFtxx1VKje9RL/oJw3vwQ32ffgzO4hP4bIR/i2FC3eEm8a4Hf4sjtxRrvvr8X+9hMAd55o2JfxZyx3pe01q/MY03LG+kzD8f0TuaF/teP4i30Hy+L8TNg8ue+M3RtS3aEz6fj6zktaDXRP4TtBEzhhAMzFVhcsYQDMrpbIb8uI3puaOfJH7AsS8gik3fmMm7thvVvZfKTx37LMuP35jJOyTdxcRjyQUFJ6SgIAx5CjxG8P/HQq0BPhLupqWAP9atnMj8xv/xoY0hyWUpIRlbNZzx19lF0ILyx1/RYvfGO749Segfgipn8TqP6PqFzL1pYT6Yk59Oa1+Q0PbUg7c0VcfsKmnjCEJI+gDDrbUHy3mr2X8q9hC/fG6+gsO/VdM+i/5cko6/jLuye5rJglFxBPtrQY7J7LA+PW32+worMWN/7ugvOVMf9Nfpb7t8srVW42vtZj6bYObVvZoXkXr8U3XvuSgqPl7Mbffx6X9PuprvwcAAAAAgP+V68I0NPG6nVm2x7b3sRmm0Mnf1bgwNXFrUx+bSermbN5CJt4S2DgIy8KF1038X3wrJYluyL7p9gP3SYULqcNmjW0YX0QgdmvdNSynvV1LfPaP7OmnXpesi9Ut8XLeUNo8v8131smvI3U4bWuPT+Ggp//t6D+emI4N/8oe2UOUcoNE5w/7IhF7XNMdc4s5Eruk9/AHXAR2h4/+R+WvYgmdfXkKz+XThv+PohPh9Oc/K9gSmNkTR1XsTpzUXExRakE48fv5rC9TVzBM4LsiE3nki9+YEgta9r9GlFDiJ+vEH4oR0WcB8Uc+VPSS4sD9Vwr6GCp0dJKL3mDNtggs6D8WPbWKfoOcAHP8SAAJIAEkgASQABJAAkgACSABxgQAAAAAAAAAAAAAAODj/AMS6imfF+YdbQAAAABJRU5ErkJggg==" class="avatar avatar-md" alt="">
                                    @else
                                        <img src="{{url('images/agents/'.\Illuminate\Support\Facades\Auth::user()->user_image)}}" class="avatar avatar-md" alt="">
                                    @endif
                                    <h4>{{$user->name}}</h4>
                                </div>
                                <div class="c-details">
                                    <ul>
                                        <li>
                                            <span>Email</span>
                                            <p>{{$user->email}}</p>
                                        </li>
                                        <li>
                                            <span>Phone</span>
                                            <p>{{$user->phone}}</p>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-3 d-block"></span>
                                <div class="d-flex mt-4 justify-content-end">
                                    <form action="{{url('/admin/edit-profile/'.\Illuminate\Support\Facades\Auth::user()->id)}}" method="GET">
                                        @csrf
                                        <button type="submit" class="modal-btn btn btn-primary btn-sm  ms-2 ">
                                            Sửa thông tin cá nhân
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="card h-auto">
                            <div class="card-header py-3">
                                <h4 class="heading mb-0">Lịch sử nạp tiền</h4>
                                <h4 class="heading">
                                </h4>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive active-projects style-1">
                                    <table id="empoloyees-tbl" class="table">
                                        <thead>
                                        <tr>
                                            <th>Số hóa đơn</th>
                                            <th>Loại thanh toán</th>
                                            <th>Trạng Thái</th>
                                            <th>Giá tiền</th>
                                            <th>Ngày thanh toán</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($charges->count() == null)
                                            <tr>
                                                <td><span class="badge badge-success light border-0">Bạn chưa thực hiện thanh toán nên không có lịch sử</span></td>
                                            </tr>
                                        @else
                                            @foreach($charges as $charge)
                                                <tr>
                                                    <td><span>#{{$charge->payment_id}}</span></td>
                                                    <td>
                                                        <span>{{$charge->payment_info}}</span>
                                                    </td>
                                                    <td><span class="badge badge-success light border-0">Đã hoàn thành</span></td>
                                                    <td>
                                                        <span>{{$charge->price}} đ</span>
                                                    </td>
                                                    <td>
                                                        <span>{{$charge->payment_time}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                    {{$charges->appends(Request::all())->links("pagination::bootstrap-4")}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal3" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title">Edit Your Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control mb-3" id="exampleInputEmail7"  placeholder="Enter email">
                        <label class="form-label">Phone</label>
                        <input type="number" class="form-control mb-3" id="exampleInputEmail8"  placeholder="Enter No.">
                        <label class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control mb-3" id="exampleInputEmail8"  placeholder="Enter No.">
                        <label class="form-label">Position</label>
                        <input type="text" class="form-control mb-3" id="exampleInputEmail9"  placeholder="Enter Position">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
            </div>

        </div>

        <!--**********************************
            Content body end
        ***********************************-->
        @include('admin.footer')

    </div>
@endsection

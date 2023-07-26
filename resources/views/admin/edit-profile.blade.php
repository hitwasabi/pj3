
@extends('layouts.admin_base')
@section('title',"Chỉnh sửa thông tin ")

@section('content')



    <!--**********************************
    Main wrapper start
***********************************-->
    <div id="main-wrapper">
        @include('admin.preloader')
        @include('admin.header')

        @include('admin.sidebar')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <form class="profile-form" action="{{url('/admin/edit-profile/'.\Illuminate\Support\Facades\Auth::id())}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- row -->
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="clearfix">
                            <div class="card card-bx profile-card author-profile m-b30">
                                <div class="card-body">
                                    <div class="p-5">
                                        <div class="author-profile">
                                            <div class="author-media">
                                                @if(\Illuminate\Support\Facades\Auth::user()->user_image == null)
                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADACAMAAABlApw1AAAAMFBMVEX19vfExcbIycnd3t/y8/TNzc7V1tfa29zm5+jr7O3LzMzc3d7Q0NHu7/Dg4eLj5OU4/BecAAAC7ElEQVR4nO3cAWKrIAwGYEFQVLT3v+2rdd3atTokaJK+/ztBoiAB0lYVAAAAAAAAAAAAAABAIS7Uje+tMbb3TR0cdzz7dG1vfvFtxx1VKje9RL/oJw3vwQ32ffgzO4hP4bIR/i2FC3eEm8a4Hf4sjtxRrvvr8X+9hMAd55o2JfxZyx3pe01q/MY03LG+kzD8f0TuaF/teP4i30Hy+L8TNg8ue+M3RtS3aEz6fj6zktaDXRP4TtBEzhhAMzFVhcsYQDMrpbIb8uI3puaOfJH7AsS8gik3fmMm7thvVvZfKTx37LMuP35jJOyTdxcRjyQUFJ6SgIAx5CjxG8P/HQq0BPhLupqWAP9atnMj8xv/xoY0hyWUpIRlbNZzx19lF0ILyx1/RYvfGO749Segfgipn8TqP6PqFzL1pYT6Yk59Oa1+Q0PbUg7c0VcfsKmnjCEJI+gDDrbUHy3mr2X8q9hC/fG6+gsO/VdM+i/5cko6/jLuye5rJglFxBPtrQY7J7LA+PW32+worMWN/7ugvOVMf9Nfpb7t8srVW42vtZj6bYObVvZoXkXr8U3XvuSgqPl7Mbffx6X9PuprvwcAAAAAgP+V68I0NPG6nVm2x7b3sRmm0Mnf1bgwNXFrUx+bSermbN5CJt4S2DgIy8KF1038X3wrJYluyL7p9gP3SYULqcNmjW0YX0QgdmvdNSynvV1LfPaP7OmnXpesi9Ut8XLeUNo8v8131smvI3U4bWuPT+Ggp//t6D+emI4N/8oe2UOUcoNE5w/7IhF7XNMdc4s5Eruk9/AHXAR2h4/+R+WvYgmdfXkKz+XThv+PohPh9Oc/K9gSmNkTR1XsTpzUXExRakE48fv5rC9TVzBM4LsiE3nki9+YEgta9r9GlFDiJ+vEH4oR0WcB8Uc+VPSS4sD9Vwr6GCp0dJKL3mDNtggs6D8WPbWKfoOcAHP8SAAJIAEkgASQABJAAkgACSABxgQAAAAAAAAAAAAAAODj/AMS6imfF+YdbQAAAABJRU5ErkJggg=="  alt="">
                                                @else
                                                    <img src="{{url('images/agents/'.\Illuminate\Support\Facades\Auth::user()->user_image)}}"  alt="">
                                                @endif
                                                <div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
                                                    <input type="file" name="user_image" class="update-flie">
                                                    <i class="fa fa-camera"></i>
                                                </div>
                                            </div>
                                            <div class="author-info">
                                                <h6 class="title">{{\Illuminate\Support\Facades\Auth::user()->name}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-list">
                                        <ul>
                                            <li><a href="#">Họ tên</a><span>{{\Illuminate\Support\Facades\Auth::user()->name}}</span></li>
                                            <li><a href="#">Email</a><span>{{\Illuminate\Support\Facades\Auth::user()->email}}</span></li>
                                            <li><a href="#">Số điện thoại</a><span>{{\Illuminate\Support\Facades\Auth::user()->phone}}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="card profile-card card-bx m-b30">
                            <div class="card-header">
                                <h6 class="title">Cài đặt thông tin</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Họ tên</label>
                                        <input type="text" name="name" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Số điện thoại</label>
                                        <input type="text" name="phone" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}">
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
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


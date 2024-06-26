@extends('layouts.admin_base')
@section('title',"Đăng bài của bạn")

@section('content')

    <div id="main-wrapper">
    @include('admin.preloader')
    @include('agents.header')
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="">
                        <form action="{{url('client/home/pricing')}}" method="GET">
                            @csrf
                            <h1>Xin lỗi!</h1>
                            <a><p>Hiện tại bạn chưa thể đăng bài do chưa thanh toán gói.</p></a>
                            <a><p>Để sử dụng được chức năng này, hãy đến thanh toán gói!</p></a>
                            <button type="submit" class="btn btn-xs btn-outline-secondary">Tới mua gói</button>
                        </form>
                </div>
            </div>
        </div>




    @include('agents.sidebar')

        @include('admin.footer')

    </div>
@endsection

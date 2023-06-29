@extends('layouts.admin_base')
@section('title',"Đăng bài của bạn")

@section('content')

    <div id="main-wrapper">
    @include('admin.preloader')
    @include('agents.header')

        <div class="content-body">
            <form action="{{url('client/home/pricing')}}" method="GET">
                @csrf
                <h2>Xin lỗi!</h2>
                <p>Hiện tại bạn chưa thể đăng bài do chưa thanh toán gói.</p>
                <p>Để sử dụng được chức năng này, hãy đến thanh toán gói:</p>
                <button type="submit" class="btn-stunning">Tới mua gói</button>
            </form>
        </div>



    @include('agents.sidebar')

        @include('admin.footer')

    </div>
@endsection

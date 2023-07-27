@extends('layouts.admin_base')
@section('title',"Lịch sử nạp tiền, thanh toán")

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
                <div class="card h-auto">
                    <div class="card-header py-3">
                        <h4 class="heading mb-0">Lịch sử thanh toán</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects style-1">
                            <table id="empoloyees-tbl" class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Người mua</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Gói</th>
                                    <th>Giá</th>
                                    <th>Trạng Thái</th>
                                    <th>Ngày mua</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($payments as $payment )
                                <tr>
                                    <td><span>#{{$payment->payment_id}}</span></td>
                                    <td>
                                        <span>{{$payment->name}}</span>
                                    </td>
                                    <td><span>{{$payment->email}}</span></td>
                                    <td><span>{{$payment->phone}}</span></td>
                                    <td><span>{{$payment->payment_info}}</span></td>
                                    <td><span>{{number_format($payment->price, 0, '.', '.')}} đ</span></td>
                                    <td><span class="badge badge-success light border-0">Thành công</span></td>
                                    <td>
                                        <span>{{$payment->payment_time}}</span>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$payments->appends(Request::all())->links("pagination::bootstrap-4")}}
                        </div>
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

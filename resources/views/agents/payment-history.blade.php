@extends('layouts.admin_base')
@section('title',"Lịch sử nạp tiền, thanh toán")

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
                <div class="card h-auto">
                    <div class="card-header py-3">
                        <h4 class="heading mb-0">Lịch sử thanh toán</h4>
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
                                @if($datas->count() == null)
                                    <tr>
                                        <td><span class="badge badge-success light border-0">Bạn chưa thực hiện thanh toán nên không có lịch sử</span></td>
                                    </tr>
                                @else
                                    @foreach($datas as $data)
                                <tr>
                                    <td><span>#{{$data->payment_id}}</span></td>
                                    <td>
                                        <span>{{$data->payment_info}}</span>
                                    </td>
                                    <td><span class="badge badge-success light border-0">Đã hoàn thành</span></td>
                                    <td>
                                        <span>{{number_format($data->price, 0, '.', '.')}} đ</span>
                                    </td>
                                    <td>
                                        <span>{{$data->payment_time}}</span>
                                    </td>
                                </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            {{$datas->appends(Request::all())->links("pagination::bootstrap-4")}}
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

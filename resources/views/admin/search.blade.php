@extends('layouts.admin_base')
@section('title',"Kết quả tìm kiếm phòng trọ")

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
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="javascript:void(0)">Shop</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Product List</a></li>
                </ol>
            </div>
            <div class="input-group container-fluid mh-auto" >
                <form action="{{url('admin/search')}}" method="get" class="search-form">
                    <i class="fas fa-search"></i>
                    <input type="search" name="keyword_submit" placeholder="Tìm kiếm...">
                </form>
            </div>
            <div class="input-group container-fluid mh-auto" >
                <h5>Kết quả tìm kiếm: @php
                        echo ($_GET['keyword_submit']);
                    @endphp </h5>
            </div>
            <div class="container-fluid mh-auto">
                <div class="row">
                    @forelse($search_product as $room)
                        <div class="col-lg-12 col-xl-6 col-xxl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row m-b-30">
                                        <div class="col-md-5 col-xxl-12">
                                            <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                                <div class="new-arrivals-img-contnent">
                                                    <img class="img-fluid" src="{{url('images/rooms/'.$room->url)}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xxl-12">
                                            <div class="new-arrival-content position-relative">
                                                <h4><a href="{{'/agents/ecom-product-detail/'.$room->rr_id}}">{{$room->room_name}}</a></h4>
                                                <p class="price">{{number_format($room->prices, 0, '.', '.')}}<sup>đ</sup></p>
                                                <p>Tình trạng: <span class="item">  <i class="fa fa-check-circle text-success"></i></span></p>
                                                <p>ID phòng: <span class="item">{{$room->rr_id}}</span> </p>
                                                <form action="{{url('/agents/edit-room/'.$room->rr_id)}}" method="GET">
                                                    @csrf
                                                    <button type="submit">Sửa thông tin</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>Danh sach rong</p>
                    @endforelse
                </div>
                <div class="pagination-wrapper">
                    {!!$search_product->appends(['keyword_submit'=>$_GET['keyword_submit']])->links("pagination::bootstrap-4")  !!}
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        @include('admin.footer')

    </div>
@endsection


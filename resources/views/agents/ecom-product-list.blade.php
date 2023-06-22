@extends('layouts.admin_base')
@section('title',"Danh sách phòng trọ")

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
			<div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item "><a href="javascript:void(0)">Shop</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Product List</a></li>
					</ol>
                </div>
            <div class="container-fluid mh-auto">

                <div class="row">
                    @forelse($rent_rooms as $rent_room)
                    <div class="col-lg-12 col-xl-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid" src="{{$rent_room-> url}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="{{'/agents/ecom-product-detail/'.$rent_room->rr_id}}">{{$rent_room->room_name}}</a></h4>
                                            <p class="price">{{number_format($rent_room->prices, 0, '.', '.')}}<sup>đ</sup></p>
                                            <p>Tình trạng: <span class="item">  <i class="fa fa-check-circle text-success"></i></span></p>
                                            <p>ID phòng: <span class="item">{{$rent_room->rr_id}}</span> </p>
                                            <p class="text-content">{{$rent_room->info_detail}}</p>
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
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        @include('admin.footer')

    </div>
@endsection


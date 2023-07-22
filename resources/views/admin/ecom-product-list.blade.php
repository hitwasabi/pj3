@extends('layouts.admin_base')
@section('title',"Danh sách phòng trọ")

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
             <div class="container-fluid mh-auto">
                 <div class="row">
                     @forelse($rooms as $room)
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
                                         <div class="row" >
                                             <div class="new-arrival-content position-relative">
                                                 <div>
                                                 <h4><a href="{{'/agents/ecom-product-detail/'.$room->rr_id}}">{{$room->room_name}}</a></h4>
                                                 <p class="price">{{number_format($room->prices, 0, '.', '.')}}<sup>đ</sup></p>
                                                 <p>Tình trạng: <span class="item">  <i class="fa fa-check-circle text-success"></i></span></p>
                                                 <p>ID phòng: <span class="item">{{$room->rr_id}}</span> </p>
                                                 </div>
                                                 <div class="row">
                                                 <div class="col-sm">
                                                 <form action="{{url('/agents/edit-room/'.$room->rr_id)}}" method="GET">
                                                     @csrf
                                                     <button class="btn btn-xs btn-outline-success" type="submit">Sửa thông tin</button>
                                                 </form>
                                                 </div>
                                                 @if($room->status == 0)
                                                     <div class="col-sm">
                                                     <form action="{{url('agents/hideRoom/'.$room->rr_id)}}" method="POST">
                                                         @csrf
                                                         @method('PUT')
                                                         <button class="btn btn-xs btn-outline-warning show-alert-hide-box" type="submit">Ẩn bài</button>
                                                     </form>
                                                     </div>
                                                 @else
                                                     <div class="col-sm">
                                                     <form action="{{url('admin/adminShowRoom/'.$room->rr_id)}}" method="POST">
                                                         @csrf
                                                         @method('PUT')
                                                         <button class="btn btn-xs btn-outline-secondary show-alert-show-box" type="submit">Hiện lại bài</button>
                                                     </form>
                                                     </div>
                                                 @endif
                                                 </div>
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
                     {!!$rooms->links("pagination::bootstrap-4")  !!}
                 </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <script type="text/javascript">
            $('.show-alert-hide-box').click(function(event){
                var form =  $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                    title: "Bạn có chắc chắn muốn ẩn bài đăng này ? ",
                    text: "",
                    icon: "warning",
                    type: "warning",
                    buttons: ["Hủy","Chắc chắn"],
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#20d706',
                    confirmButtonText: 'Yes, delete it!'
                }).then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $('.show-alert-show-box').click(function(event){
                var form =  $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                    title: "Bạn có chắc chắn muốn hiện bài đăng này ? ",
                    text: "",
                    icon: "warning",
                    type: "warning",
                    buttons: ["Hủy","Chắc chắn"],
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#20d706',
                    confirmButtonText: 'Yes, delete it!'
                }).then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
            });
        </script>

        @include('admin.footer')

    </div>
@endsection


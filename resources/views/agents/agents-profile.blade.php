@extends('layouts.admin_base')
@section('title',"Thông tin chủ trọ")

@section('content')



    <!--**********************************
    Main wrapper start
***********************************-->
    <div id="main-wrapper">
        @include('admin.preloader')
        @include('agents.header')
        @include('sweetalert::alert')
        @include('agents.sidebar')

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
                                    <img src="images/user1.jpg" class="rounded-circle mb-2">
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
                                <span class="mt-3 d-block">Social</span>
                                <div class="d-flex mt-4 justify-content-end">
                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm light me-2"><i class="fa-solid fa-trash me-1"></i>Delete</a>
                                    <button type="button" class="modal-btn btn btn-primary btn-sm  ms-2 " data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                        <i class="fa-solid fa-pen-to-square me-1"></i>
                                        <span>Edit </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <h4 class="heading">Cấp độ gói đang sở hữu :
                        @if($user->level == 2)
                        Thường
                        @elseif($user->level == 3)
                        VIP
                            @else
                            None
                        @endif
                        </h4>
                        <div class="card h-auto">
                            <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                                <div class="d-flex align-items-center c-busiess">
                                    <img src="images/economics.png" class="avatar">
                                    <div>
                                        <h5 class="mb-0">Business board pro<span class="badge badge-danger badge-xs ms-1">Active</span></h5>
                                        <span>Billing monthly | Next payment on 15/02/2023for$590.40</span>
                                    </div>
                                </div>
                                <div>
                                    <a href="javascript:void(0)" class="btn btn-light btn-sm me-2">Cancle plan</a>
                                    <a href="javascript:void(0)" class="btn btn-primary btn-sm ms-2">Update plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="card h-auto">
                            <div class="card-header py-3">
                                <h4 class="heading mb-0">Lịch sử thanh toán</h4>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive active-projects style-1">
                                    <table id="empoloyees-tbl" class="table">
                                        <thead>
                                        <tr>
                                            <th>REFERENCE</th>
                                            <th>PRODUCT</th>
                                            <th>STATUS</th>
                                            <th>DATE</th>
                                            <th>AMOUNT</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><span>#552145252</span></td>
                                            <td>
                                                <span>Zoom video conferencing</span>
                                            </td>
                                            <td><span class="badge badge-danger light border-0">Pending</span></td>
                                            <td>
                                                <span>12 February 2022</span>
                                            </td>
                                            <td>
                                                <span>$900</span>
                                            </td>
                                        </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3>Danh sách phòng của chủ trọ</h3>
                    <div class="row">
                        <div class="col-lg-12 col-xl-6 col-xxl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row m-b-30">
                                        <div class="col-md-5 col-xxl-12">
                                            <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                                <div class="new-arrivals-img-contnent">
                                                    <img class="img-fluid" src="images/product/2.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xxl-12">
                                            <div class="new-arrival-content position-relative">
                                                <h4><a href="ecom-product-detail.html">Tên phòng</a></h4>
                                                <div class="comment-review star-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                                    </ul>
                                                    <p class="price">$320.00</p>
                                                </div>
                                                <p>Tình trạng: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                                <p>ID phòng: <span class="item">0405689</span> </p>
                                                <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6 col-xxl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row m-b-30">
                                        <div class="col-md-5 col-xxl-12">
                                            <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                                <div class="new-arrivals-img-contnent">
                                                    <img class="img-fluid" src="images/product/3.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xxl-12">
                                            <div class="new-arrival-content position-relative">
                                                <h4><a href="ecom-product-detail.html">Solid Women's V-neck Dark T-Shirt</a></h4>
                                                <div class="comment-review star-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                                    </ul>
                                                    <span class="review-text">(34 reviews) / </span><a class="product-review" href="#"  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
                                                    <p class="price">$325.00</p>
                                                </div>
                                                <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                                <p>Product code: <span class="item">0405689</span> </p>
                                                <p>Brand: <span class="item">Lee</span></p>
                                                <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6 col-xxl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row m-b-30">
                                        <div class="col-md-5 col-xxl-12">
                                            <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                                <div class="new-arrivals-img-contnent">
                                                    <img class="img-fluid" src="images/product/4.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xxl-12 ">
                                            <div class="new-arrival-content position-relative">
                                                <h4><a href="ecom-product-detail.html">Solid Women's V-neck Dark T-Shirt</a></h4>
                                                <div class="comment-review star-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <span class="review-text">(34 reviews) / </span><a class="product-review" href="#"  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
                                                    <p class="price">$480.00</p>
                                                </div>
                                                <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                                <p>Product code: <span class="item">0405689</span> </p>
                                                <p>Brand: <span class="item">Lee</span></p>
                                                <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6 col-xxl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row m-b-30">
                                        <div class="col-md-5 col-xxl-12">
                                            <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                                <div class="new-arrivals-img-contnent">
                                                    <img class="img-fluid" src="images/product/5.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xxl-12">
                                            <div class="new-arrival-content position-relative">
                                                <h4><a href="ecom-product-detail.html">Solid Women's V-neck Dark T-Shirt</a></h4>
                                                <div class="comment-review star-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <span class="review-text">(34 reviews) / </span><a class="product-review" href="#"  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
                                                    <p class="price">$658.00</p>
                                                </div>
                                                <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                                <p>Product code: <span class="item">0405689</span> </p>
                                                <p>Brand: <span class="item">Lee</span></p>
                                                <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6 col-xxl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row m-b-30">
                                        <div class="col-md-5 col-xxl-12">
                                            <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                                <div class="new-arrivals-img-contnent">
                                                    <img class="img-fluid" src="images/product/6.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xxl-12">
                                            <div class="new-arrival-content position-relative">
                                                <h4><a href="ecom-product-detail.html">Solid Women's V-neck Dark T-Shirt</a></h4>
                                                <div class="comment-review star-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <span class="review-text">(34 reviews) / </span><a class="product-review" href="#"  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
                                                    <p class="price">$280.00</p>
                                                </div>
                                                <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                                <p>Product code: <span class="item">0405689</span> </p>
                                                <p>Brand: <span class="item">Lee</span></p>
                                                <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6 col-xxl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row m-b-30">
                                        <div class="col-md-5 col-xxl-12">
                                            <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                                <div class="new-arrivals-img-contnent">
                                                    <img class="img-fluid" src="images/product/7.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xxl-12">
                                            <div class="new-arrival-content position-relative">
                                                <h4><a href="ecom-product-detail.html">Solid Women's V-neck Dark T-Shirt</a></h4>
                                                <div class="comment-review star-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <span class="review-text">(34 reviews) / </span><a class="product-review" href="#"  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
                                                    <p class="price">$600.00</p>
                                                </div>
                                                <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                                <p>Product code: <span class="item">0405689</span> </p>
                                                <p>Brand: <span class="item">Lee</span></p>
                                                <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- review -->
                        <div class="modal fade" id="reviewModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Review</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="text-center mb-4">
                                                <img class="img-fluid rounded" width="78" src="images/avatar/1.jpg" alt="DexignZone">
                                            </div>
                                            <div class="mb-3">
                                                <div class="rating-widget mb-4 text-center">
                                                    <!-- Rating Stars Box -->
                                                    <div class="rating-stars">
                                                        <ul id="stars">
                                                            <li class="star" title="Poor" data-value="1">
                                                                <i class="fa fa-star fa-fw"></i>
                                                            </li>
                                                            <li class="star" title="Fair" data-value="2">
                                                                <i class="fa fa-star fa-fw"></i>
                                                            </li>
                                                            <li class="star" title="Good" data-value="3">
                                                                <i class="fa fa-star fa-fw"></i>
                                                            </li>
                                                            <li class="star" title="Excellent" data-value="4">
                                                                <i class="fa fa-star fa-fw"></i>
                                                            </li>
                                                            <li class="star" title="WOW!!!" data-value="5">
                                                                <i class="fa fa-star fa-fw"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <textarea class="form-control" placeholder="Comment" rows="5"></textarea>
                                            </div>
                                            <button class="btn btn-success btn-block">RATE</button>
                                        </form>
                                    </div>
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

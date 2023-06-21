
@extends('layouts.admin_base')
@section('title',"Chi tiết phòng trọ")

@section('content')



    <!--**********************************
    Main wrapper start
***********************************-->
    <div id="main-wrapper">
        @include('admin.preloader')
        @include('agents.header')

        @include('agents.sidebar')



        <div class="content-body">
			<div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Shop</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Chi tiết phòng</a></li>
					</ol>
                </div>
            <div class="container-fluid mh-auto">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <!-- Tab panes -->
                                        <div class="tab-content" id="myTabContent">
										  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
												 <img class="img-fluid rounded  " src="images/product/1.jpg" alt="">
										  </div>
										  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
												<img class="img-fluid rounded " src="images/product/2.jpg" alt="">
										  </div>
										  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
											 <img class="img-fluid rounded" src="images/product/3.jpg" alt="">
										  </div>
										  <div class="tab-pane fade" id="end-tab-pane" role="tabpanel" aria-labelledby="end-tab" tabindex="0">
											 <img class="img-fluid rounded" src="images/product/3.jpg" alt="">
										  </div>

										</div>
                                        <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs slide-item-list mt-3" id="myTab" role="tablist">
												  <li class="nav-item" role="presentation">
													<a href="#first" class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"  role="tab" aria-controls="home-tab-pane" aria-selected="true"><img class="img-fluid me-2 rounded" src="images/tab/1.jpg" alt="" width="80"></a>
												  </li>
												  <li class="nav-item" role="presentation">
													<a href="#second" class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"  role="tab" aria-controls="profile-tab-pane" aria-selected="false"><img class="img-fluid me-2 rounded" src="images/tab/2.jpg" alt="" width="80"></a>
												  </li>
												  <li class="nav-item" role="presentation">
													<a href="#third" class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" role="tab" aria-controls="contact-tab-pane" aria-selected="false"><img class="img-fluid me-2 rounded" src="images/tab/3.jpg" alt="" width="80"></a>
												  </li>
												  <li class="nav-item" role="presentation">
													<a href="#for" class="nav-link" id="end-tab" data-bs-toggle="tab" data-bs-target="#end-tab-pane"  role="tab" aria-controls="end-tab-pane" aria-selected="false"><img class="img-fluid  rounded" src="images/tab/4.jpg" alt="" width="80"></a>
												  </li>

											</ul>
                                        </div>
                                    </div>
                                    <!--Tab slider End-->
                                    <div class="col-xl-9 col-lg-6 col-md-6 col-sm-12">
                                        <div class="product-detail-content">
                                            <!--Product details-->
                                            <div class="new-arrival-content pr">
                                                <h4>Tên phòng</h4>
                                                <div class="comment-review star-rating d-flex">
													<ul>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
													</ul>
												</div>
												<div class="d-table mb-2">
													<p class="price float-start d-block">$325.00</p>
                                                </div>
                                                <p>Tình trạng: <span class="item"> Chưa cho thuê<i
                                                            class="fa fa-shopping-basket"></i></span>
                                                </p>
                                                <p>Id phòng: <span class="item">0405689</span> </p>
                                                <p>Product tags:&nbsp;&nbsp;
                                                    <span class="badge badge-success light">thuê nhà</span>
                                                </p>
                                                <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
					<!-- review -->
					<div class="modal fade" id="reviewModal">
						<div class="modal-dialog modal-dialog-center" role="document">
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
        <!--**********************************
            Content body end
        ***********************************-->
        @include('admin.footer')

        </div>
        @endsection

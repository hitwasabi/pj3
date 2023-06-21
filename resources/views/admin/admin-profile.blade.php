@extends('layouts.admin_base')
@section('title',"Thông tin admin")

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
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li><h5 class="bc-title">Dashboard</h5></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Home </a>
                    </li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
                </ol>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card h-auto">
                            <div class="card-body">
                                <div class="c-profile text-center">
                                    <img src="images/user1.jpg" class="rounded-circle mb-2">
                                    <h4>Thomas Fleming</h4>
                                </div>
                                <div class="c-details">
                                    <ul>
                                        <li>
                                            <span>Email</span>
                                            <p>demo123@gmail.com</p>
                                        </li>
                                        <li>
                                            <span>Phone</span>
                                            <p>+91 12345647890</p>
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
                                        <tr>
                                            <td><span>#5454421</span></td>
                                            <td>
                                                <span>Salesforce CRM</span>
                                            </td>
                                            <td><span class="badge badge-primary light border-0">Inprogress</span></td>
                                            <td>
                                                <span>13 March 2023</span>
                                            </td>
                                            <td>
                                                <span>$500</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span>#5857455</span></td>
                                            <td>
                                                <span>Slack collaboration platform</span>
                                            </td>
                                            <td><span class="badge badge-primary light border-0">Inprogress</span></td>
                                            <td>
                                                <span>24 January 2022</span>
                                            </td>
                                            <td>
                                                <span>$800</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span>#552145252</span></td>
                                            <td>
                                                <span>Google Chrome</span>
                                            </td>
                                            <td><span class="badge badge-danger light border-0">Pending</span></td>
                                            <td>
                                                <span>12 February 2022</span>
                                            </td>
                                            <td>
                                                <span>$900</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span>#5454421</span></td>
                                            <td>
                                                <span>Shopify eCommerce</span>
                                            </td>
                                            <td><span class="badge badge-success light border-0">Completed</span></td>
                                            <td>
                                                <span>13 March 2023</span>
                                            </td>
                                            <td>
                                                <span>$500</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span>#5857455</span></td>
                                            <td>
                                                <span>Slack collaboration platform</span>
                                            </td>
                                            <td><span class="badge badge-primary light border-0">Inprogress</span></td>
                                            <td>
                                                <span>24 January 2022</span>
                                            </td>
                                            <td>
                                                <span>$800</span>
                                            </td>
                                        </tr>
                                        </tbody>

                                    </table>
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

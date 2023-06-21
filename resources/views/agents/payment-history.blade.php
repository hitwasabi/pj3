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
                                    <th>REFERENCE</th>
                                    <th>Gói</th>
                                    <th>Trạng Thái</th>
                                    <th>Ngày</th>
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
        <!--**********************************
            Content body end
        ***********************************-->

        @include('admin.footer')

    </div>
@endsection

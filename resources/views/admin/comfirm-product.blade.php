@extends('layouts.admin_base')
@section('title',"Duyệt bài")

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
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="heading mb-0">Danh sách bài báo</h4>
                    <div class="d-flex align-items-center">
                        <a class="btn btn-primary btn-sm ms-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Thêm bài báo</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="example3" class="display table" style="min-width: 845px">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Tên chủ trọ</th>
                            <th>Tên bài đăng</th>
                            <th>Hình ảnh</th>
                            <th>Thông tin</th>
                            <th>Vị trí</th>
                            <th>Diện tích</th>
                            <th>Ngày viết</th>
                            <th>Hàng động</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                            <td>Tiger Nixon</td>
                            <td>Architect</td>
                            <td>Male</td>
                            <td>M.COM., P.H.D.</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2011/04/25</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('/admin/edit-blog')}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Female</td>
                            <td>M.COM., P.H.D.</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2011/07/25</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                            <td>Ashton Cox</td>
                            <td>Junior Technical</td>
                            <td>Male</td>
                            <td>B.COM., M.COM.</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2009/01/12</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                            <td>Cedric Kelly</td>
                            <td>Developer</td>
                            <td>Male</td>
                            <td>B.COM., M.COM.</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2012/03/29</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Female</td>
                            <td>B.A, B.C.A</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2008/11/28</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                            <td>Brielle Williamson</td>
                            <td>Specialist</td>
                            <td>Male</td>
                            <td>B.COM., M.COM.</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2012/12/02</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>Female</td>
                            <td>B.A, B.C.A</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2012/08/06</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                            <td>Rhona Davidson</td>
                            <td>Integration</td>
                            <td>Male</td>
                            <td>B.TACH, M.TACH</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2010/10/14</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>Female</td>
                            <td>B.A, B.C.A</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2009/09/15</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Male</td>
                            <td>B.COM., M.COM.</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2008/12/13</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>Female</td>
                            <td>B.TACH, M.TACH</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2008/12/19</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Male</td>
                            <td>B.TACH, M.TACH</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2013/03/03</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>Female</td>
                            <td>B.A, B.C.A</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2008/10/16</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing</td>
                            <td>Male</td>
                            <td>B.COM., M.COM.</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2012/12/18</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>Male</td>
                            <td>B.TACH, M.TACH</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2010/03/17</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td>Female</td>
                            <td>B.A, B.C.A</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2012/11/27</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                            <td>Paul Byrd</td>
                            <td>Financial Officer</td>
                            <td>Male</td>
                            <td>B.TACH, M.TACH</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2010/06/09</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                            <td>Gloria Little</td>
                            <td>Systems Administrator</td>
                            <td>Female</td>
                            <td>B.A, B.C.A</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2009/04/10</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
                            <td>Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>Male</td>
                            <td>B.COM., M.COM.</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2012/10/13</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                            <td>Dai Rios</td>
                            <td>Personnel Lead</td>
                            <td>Male</td>
                            <td>B.TACH, M.TACH</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2012/09/26</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                            <td>Jenette Caldwell</td>
                            <td>Development Lead</td>
                            <td>Female</td>
                            <td>B.A, B.C.A</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2011/09/03</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                            <td>Yuri Berry</td>
                            <td>Marketing Officer</td>
                            <td>Male</td>
                            <td>B.TACH, M.TACH</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2009/06/25</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>Male</td>
                            <td>B.TACH, M.TACH</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2011/12/12</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                            <td>Doris Wilder</td>
                            <td>Sales Assistant</td>
                            <td>Female</td>
                            <td>B.A, B.C.A</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2010/09/20</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                            <td>Angelica Ramos</td>
                            <td>Executive Officer</td>
                            <td>Male</td>
                            <td>B.COM., M.COM.</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2009/10/09</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                            <td>Gavin Joyce</td>
                            <td>Developer</td>
                            <td>Female</td>
                            <td>B.TACH, M.TACH</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2010/12/22</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                            <td>Jennifer Chang</td>
                            <td>Regional Director</td>
                            <td>Male</td>
                            <td>B.A, B.C.A</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2010/11/14</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                            <td>Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td>Female</td>
                            <td>B.TACH, M.TACH</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2011/06/07</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
                            <td>Fiona Green</td>
                            <td>Operating Officer</td>
                            <td>Male</td>
                            <td>B.A, B.C.A</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2010/03/11</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                            <td>Shou Itou</td>
                            <td>Regional Marketing</td>
                            <td>Female</td>
                            <td>B.COM., M.COM.</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2011/08/14</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
            <div class="offcanvas-header">
                <h5 class="modal-title" id="#gridSystemModal">Thêm bài báo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <div class="container-fluid">
                    <div>
                        <label>Ảnh Bìa</label>
                        <div class="dz-default dlab-message upload-img mb-3">
                            <form action="#" class="dropzone">
                                <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <div class="fallback">
                                    <input name="file" type="file" multiple>
                                </div>
                            </form>
                        </div>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-xl-6 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">ID Bài báo <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="col-xl-12 mb-3">
                                <label class="form-label">About<span class="text-danger">*</span></label>
                                <textarea rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary me-1">Đăng bài</button>
                            <button class="btn btn-danger light ms-1">Hủy đăng bài</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        @include('admin.footer')

    </div>
@endsection

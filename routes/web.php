<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/client/home');
});

//404
Route::get('client/home/404',function (){
    return view('/error');
});


//faq
Route::get('client/home/faq',function (){
    return view('/client/faq');
});


//Loi chung thuc
Route::get('client/home/testimonials', function () {
    return view('/client/testimonials');
});


//Dich vu
Route::get('client/home/services', function () {
    return view('/client/services');
});

//tin tuc
Route::get('client/home/blog', function () {
    return view('/client/blog');
});
Route::get('client/home/blog-details', function () {
    return view('/client/blog-details');
});

//lien he
Route::get('client/home/contact', function () {
    return view('/client/contact');
});

//gia goi
Route::get('client/home/pricing', function () {
    return view('/client/pricing');
});


//Xem cac phong o client
Route::get('client/home/property-list',[\App\Http\Controllers\ClientController::class,'viewAllRoom']);
//Xem cac phong nha mat dat o client
Route::get('/client/home/category/motel',[\App\Http\Controllers\ClientController::class,'viewMotel']);
//Xem cac phong nha chung cu o client
Route::get('/client/home/category/apartment',[\App\Http\Controllers\ClientController::class,'viewApartment']);

//Xem cac phong o cac quan o client
Route::get('/client/home/hoanKiem',[\App\Http\Controllers\ClientController::class,'viewHoanKiem']);
Route::get('/client/home/tayHo',[\App\Http\Controllers\ClientController::class,'viewTayHo']);
Route::get('/client/home/haiBaTrung',[\App\Http\Controllers\ClientController::class,'viewHaiBaTrung']);
Route::get('/client/home/dongDa',[\App\Http\Controllers\ClientController::class,'viewDongDa']);


//Xem chi tiet cac phong o client
Route::get('client/home/property-details/{rr_id}/{cate_id}',[ClientController::class,'show']);
//Tim kiem
Route::get('/client/home/search',[ClientController::class,'searchInfo']);


//Login
//giao dien dang nhap
Route::get('/login',[\App\Http\Controllers\LoginController::class,'viewLogin']);
Route::post('/login',[\App\Http\Controllers\LoginController::class,'login']);

//Logout
Route::get('/logout',[\App\Http\Controllers\LoginController::class,'logout']);

//dang ky
Route::get('/register',[\App\Http\Controllers\RegisterController::class,'viewRegister']);
Route::post('/register',[\App\Http\Controllers\RegisterController::class,'saveAccount']);

//Client
Route::get('/client/home',[ClientController::class,'viewClient']);
Route::get('/client/home/about',[ClientController::class,'viewAbout']);


//Chu tro
//Xem danh sach chu tro
Route::get('/client/home/agents-list', function () {
    return view('/client/agents-list');
});
Route::get('client/home/agents-details/{id}',[ClientController::class,'viewAgent']);



Route::post('/agents/add-product',[\App\Http\Controllers\RoomController::class,'postRoom']);
Route::post('/client/buyPack',[ClientController::class,'buyPack']);


//Xem chi tiet chu tro DEMO
Route::get('/client/home/agents-details', function () {
    return view('/client/agents-details');
});
Route::get('/agents/index',[\App\Http\Controllers\AgentController::class,'viewAgent']);
//Xem cac san pham cua agent
Route::get('/agents/ecom-product-list',[\App\Http\Controllers\AgentController::class,'viewEcom_product_list']);
//Xem chi tiet san pham agent
Route::get('/agents/ecom-product-detail/{rr_id}',[AgentController::class,'show']);

Route::get('/agents/edit-profile',[\App\Http\Controllers\AgentController::class,'viewEdit']);
Route::get('/agents/wrong-level',[AgentController::class,'viewWrong']);
Route::get('/agents/add-product',[AgentController::class,'viewAdd']);
Route::get('/agents/payment-history',[AgentController::class,'viewPayment']);
Route::get('/agents/agents-profile',[\App\Http\Controllers\AgentController::class,'viewAgentsProfile']);







//admin
Route::get('/admin/index',[\App\Http\Controllers\AdminController::class,'viewAdmin']);
Route::get('/admin/employee',[\App\Http\Controllers\AdminController::class,'viewEmployee']);
Route::get('/admin/blog',[\App\Http\Controllers\AdminController::class,'viewBlog']);
Route::get('/admin/edit-blog',[\App\Http\Controllers\AdminController::class,'viewEditBlog']);
Route::get('/admin/contacts',[\App\Http\Controllers\AdminController::class,'viewContact']);
Route::get('/admin/ecom-product-list',[\App\Http\Controllers\AdminController::class,'viewEcom_product_list']);
Route::get('/admin/edit-profile',[\App\Http\Controllers\AdminController::class,'viewEdit']);
Route::get('/admin/payment-history',[AdminController::class,'viewPayment']);
Route::get('/admin/customer-profile',[\App\Http\Controllers\AdminController::class,'viewEmployeeDetail']);
Route::get('/admin/comfirm-product',[\App\Http\Controllers\AdminController::class,'comfirm']);
Route::get('/admin/admin-profile',[\App\Http\Controllers\AdminController::class,'viewAdminProfile']);


Route::get('client/home',[\App\Http\Controllers\ClientController::class,'index']);  //tinh
Route::post('get-states-by-country',[\App\Http\Controllers\ClientController::class,'getState']); //quan huyen
Route::post('get-cities-by-state',[\App\Http\Controllers\ClientController::class,'getCity']); //xa phuong



Route::post('/admin/post-blog',[AdminController::class,'addBlog']);


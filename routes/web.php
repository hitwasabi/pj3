<?php

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

//Danh sach phong
Route::get('client/home/property-list', function () {
    return view('/client/property-list');
});

//Chi tiet phong
Route::get('client/home/property-details', function () {
    return view('/client/property-details');
});


//Login
//giao dien dang nhap
Route::get('/signin',function (){
    return view('/signin');
});

Route::get('/login',[\App\Http\Controllers\LoginCotroller::class,'viewLogin']);
Route::post('/login',[\App\Http\Controllers\LoginCotroller::class,'login']);

//dang ky
Route::get('/register',[\App\Http\Controllers\RegisterController::class,'register']);

//Client
Route::get('/client/home',[ClientController::class,'viewClient']);
Route::get('/client/home/about',[ClientController::class,'viewAbout']);


//Chu tro
//Xem danh sach chu tro
Route::get('/client/home/agents-list', function () {
    return view('/client/agents-list');
});
//Xem chi tiet chu tro DEMO
Route::get('/client/home/agents-details', function () {
    return view('/client/agents-details');
});

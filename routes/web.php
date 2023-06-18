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
Route::get('/404',function (){
    return view('/error');
});
//faq
Route::get('/faq',function (){
    return view('/client/faq');
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
Route::get('/client/about',[ClientController::class,'viewAbout']);

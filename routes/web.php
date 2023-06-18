<?php

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


Route::get('/signin',function (){
    return view('signin');
});

Route::get('/login',[\App\Http\Controllers\LoginCotroller::class,'viewLogin']);
Route::post('/login',[\App\Http\Controllers\LoginCotroller::class,'login']);

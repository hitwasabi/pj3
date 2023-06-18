<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function viewClient(){

        return view('client/home');
    }
    public function viewAbout(){

        return view('client/about');
    }
}

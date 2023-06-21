<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewAdmin(){
        return view('admin/index');
    }

    public function viewEmployee(){
        return view('/admin/customer');
    }

    public function viewBlog(){
        return view('/admin/blog');
    }

    public function viewContact(){
        return view('/admin/contacts');
    }

    public function viewEcom_product_list(){
        return view('/admin/ecom-product-list');
    }

    public function viewEdit(){
        return view('/admin/edit-profile');
    }

}

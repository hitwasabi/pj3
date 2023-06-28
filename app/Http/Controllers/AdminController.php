<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    public function viewEditBlog(){
        return view('/admin/edit-blog');
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

    public function viewEmployeeDetail(){
        return view('/admin/customer-profile');
    }
    public function viewPayment(){
        return view('/admin/payment-history');
    }
    public function comfirm(){
        return view('/admin/comfirm-product');
    }
    public function viewAdminProfile(){
        return view('/admin/admin-profile');
    }

    public function addBlog(Request $request){
        $request->validate([
            'new_image' => 'required'
        ]);
        $image = time().'.'.$_FILES['new_image']['name'];
        $request->new_image->move(public_path('images/rooms'), $image);
        $info = $request->input('info');
        $new_name = $request->input('new_name');
        DB::table('blogs')->insert([
            'userPost_id' => Auth::user()->id,
            'info' => $info,
            'new_image' => $image,
            'new_name' => $new_name,
            'post_date' => Carbon::now()
        ]);
        return view('admin/index');
    }
}

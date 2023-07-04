<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function viewAdmin(){
        return view('admin/index');
    }

    public function viewEmployee(){
        $agents = DB::table('users')
        ->where('isAdmin','=',1)
            ->get();
        return view('/admin/customer',compact('agents'));
    }

    public function viewBlog(){
        $blogs =DB::table('blogs')
            ->join('users','users.id','=','blogs.userPost_id')
            ->select('users.*','blogs.*')
            ->paginate(2);
        $data = ['blogs'=>$blogs];
        return view('/admin/blog',$data);
    }

    public function viewAddBlog(){
        return view('/admin/add-blog');
    }

    public function viewEditBlog($new_id){
        $data = Blog::findOrFail($new_id);
        return view('/admin/edit-blog',compact('data'));
    }

    public function editBlog(Request $request,$new_id){
        $image = time().'.'.$_FILES['new_image']['name'];
        $request->new_image->move(public_path('images/rooms'), $image);
        $info = $request->input('info');
        $new_name = $request->input('new_name');
        DB::table('blogs')->where('new_id','=',$new_id)->update([
            'info' => $info,
            'new_image' => $image,
            'new_name' => $new_name,
            'post_date' => Carbon::now()
        ]);
        Alert::success('Sửa thành công', 'Bài viết của bạn đã được cập nhật');
        return redirect('admin/index');
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
        Alert::success('Đăng thành công', 'Bài viết của bạn đã được đăng lên');
        return redirect('admin/index');
    }
}

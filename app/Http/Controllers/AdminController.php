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
        if (Auth::user()->isAdmin == 1){
            return redirect('agents/index');
        }
        return view('admin/index');
    }

    public function viewEmployee(){
        if (Auth::user()->isAdmin == 1){
            return redirect('agents/index');
        }
        $agents = DB::table('users')
        ->where('isAdmin','=',1)
            ->get();
        return view('/admin/customer',compact('agents'));
    }

    public function viewBlog(){
        if (Auth::user()->isAdmin == 1){
            return redirect('agents/index');
        }
        $blogs =DB::table('blogs')
            ->join('users','users.id','=','blogs.userPost_id')
            ->select('users.*','blogs.*')
            ->paginate(2);
        $data = ['blogs'=>$blogs];
        return view('/admin/blog',$data);
    }

    public function viewAddBlog(){
        if (Auth::user()->isAdmin == 1){
            return redirect('agents/index');
        }
        return view('/admin/add-blog');
    }

    public function viewEditBlog($new_id){
        if (Auth::user()->isAdmin == 1){
            return redirect('agents/index');
        }
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
        if (Auth::user()->isAdmin == 1){
            return redirect('agents/index');
        }
        $agents = DB::table('users')
            ->where('isAdmin','=',1)
            ->get();
        return view('/admin/contacts',compact('agents'));
    }

    public function viewEcom_product_list(){
        if (Auth::user()->isAdmin == 1){
            return redirect('agents/index');
        }
        return view('/admin/ecom-product-list');
    }

    public function viewEdit(){
        if (Auth::user()->isAdmin == 1){
            return redirect('agents/index');
        }

        return view('/admin/edit-profile');
    }

    public function viewEmployeeDetail(){
        if (Auth::user()->isAdmin == 1){
            return redirect('agents/index');
        }
        return view('/admin/customer-profile');
    }
    public function viewPayment(){
        if (Auth::user()->isAdmin == 1){
            return redirect('agents/index');
        }
        return view('/admin/payment-history');
    }
    public function comfirm(){
        if (Auth::user()->isAdmin == 1){
            return redirect('agents/index');
        }
        return view('/admin/comfirm-product');
    }
    public function viewAdminProfile(){
        if (Auth::user()->isAdmin == 1){
            return redirect('agents/index');
        }
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

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\City;
use App\Models\Payment_history;
use App\Models\Rent_room;
use App\Models\Report;
use App\Models\User;
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
        }else {
            $rooms = Rent_room::all();
            $rent_room = DB::table('rent_rooms')
                ->select('rr_id')
                ->where('status', '=', 0)
                ->count();
            $cancel_room = DB::table('rent_rooms')
                ->select('rr_id')
                ->where('status', '=', 1)
                ->count();
            $reports = DB::table('rent_rooms')
                ->join('reports','reports.rpRoom_id','=','rent_rooms.rr_id')
                ->where('rent_rooms.status', '=', 0)
                ->select('reports.rpRoom_id')->distinct()->get();
            $money = DB::table('payment_histories')
                ->where('payment_info', 'like', 'Nạp tiền vào tài khoản')
                ->sum('price');
            $user = DB::table('users')
                ->where('isAdmin', '=', 1)
                ->get();
            $vips = DB::table('users')
                ->where('isAdmin', '=', 1)
                ->where('level','=',3)
                ->get()->count();
            $normals = DB::table('users')
                ->where('isAdmin', '=', 1)
                ->where('level','=',2)
                ->get()->count();
            $none = DB::table('users')
                ->where('isAdmin', '=', 1)
                ->where('level','=',1)
                ->get()->count();
            $paid = Payment_history::all()->count();
            $pay = DB::table('payment_histories')
                ->orderBy('payment_id','DESC')
                ->first();
            $vip = DB::table('payment_histories')
                ->where('payment_info','LIKE','Mua gói Vip')
                ->count();
            $mostBuy = Payment_history::select('user_id', DB::raw('count(*) as count'))
                ->groupBy('user_id')
                ->orderBy('count','DESC')
                ->first();
            $userMostBuy = User::findOrFail($mostBuy->user_id);
            $mostPost = Rent_room::select('owner_id', DB::raw('count(*) as count'))
                ->groupBy('owner_id')
                ->orderBy('count','DESC')
                ->first();
            $userMostPost = User::findOrFail($mostPost->owner_id);
            $normal = DB::table('payment_histories')
                ->where('payment_info','LIKE','Mua gói thuờng')
                ->count();
            return view('admin/index', compact('rooms', 'money', 'userMostBuy', 'userMostPost',
                'user','vips','none','normals','rent_room','cancel_room','reports','paid','pay','normal','vip'));
        }
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
        $rooms =DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*',)
            ->paginate(6);
        return view('/admin/ecom-product-list',compact('rooms'));
    }

    public function viewEcom_product_report()
    {
        if (Auth::user()->isAdmin == 1){
            return redirect('agents/index');
        }
        $rent_rooms = DB::table('rent_rooms')
            ->join('rent_amounts', 'rent_amounts.ram_id', '=', 'rent_rooms.rent_amountId')
            ->join('images', 'images.rentRoom_id', '=', 'rent_rooms.rr_id')
            ->join('categories', 'categories.id', '=', 'rent_rooms.cate_id')
            ->join('room_details', 'room_details.rentRoom_id', '=', 'rent_rooms.rr_id')
            ->join('cities', 'rent_rooms.city_id', '=', 'cities.cities_id')
            ->join('city_details', 'rent_rooms.city_detailId', '=', 'city_details.city_detailId')
            ->join('streets', 'rent_rooms.street_id', '=', 'streets.street_id')
            ->join('reports', 'reports.rpRoom_id', '=', 'rent_rooms.rr_id')
            ->select('rent_rooms.*', 'rent_amounts.*', 'images.url', 'room_details.*', 'categories.*', 'cities.*', 'city_details.*', 'streets.*','reports.*')
            ->distinct()
            ->paginate(6);
        return view('/admin/ecom-product-report', compact('rent_rooms'));
    }

    public function viewEdit(){
        if (Auth::user()->isAdmin == 1){
            return redirect('agents/index');
        }
        return view('/admin/edit-profile');
    }

    public function edit(Request $request,$id){
        $user_image = time().'.'.$_FILES['user_image']['name'];
        if ($request->user_image == null ){
            $user_image = \App\Models\User::findOrFail($id)->user_image;
        }else {
            $request->user_image->move(public_path('images/agents'), $user_image);
        }
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');

        if ($user_image == null ){
            $user_image = \App\Models\User::findOrFail($id)->user_image;
        }

        DB::table('users')->where('id','=',$id)->update([
            'user_image' => $user_image,
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        ]);
        Alert::info('Thành công','Thông tin của bạn đã được cập nhật');
        return redirect('admin/index');
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
        $payments = DB::table('payment_histories')
            ->join('users','users.id','=','payment_histories.user_id')
            ->select('payment_histories.*','users.*')
            ->orderBy('payment_id','DESC')
            ->paginate(10);
        return view('/admin/payment-history',compact('payments'));
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

    public function viewCharges($id){
        if (Auth::user()->isAdmin == 1){
            return redirect('agents/index');
        }
        $agents = DB::table('users')
            ->where('id','=',$id)
            ->get();
        return view('admin/charges',compact('agents'));
    }

    public function charges(Request $request, $id){
        $currentUser = User::findOrFail($id);
        $cash = $request->input('money');
        $newCash = $currentUser->money + $cash;
        $currentUser->update(['money'=> $newCash]);
        Payment_history::create([
            'user_id' => $id,
            'price' => $cash,
            'payment_info' => 'Nạp tiền vào tài khoản',
            'payment_time' => Carbon::today()
        ]);
        Alert::success('Nạp thành công','Tài khoản '.$currentUser->name.' đã được nạp '.$cash.' vnđ');
        return redirect('admin/contacts');
    }

    public function addBlog(Request $request){
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

    public function searchInfo(Request $request){
        if (Auth::user()->isAdmin == 1){
            return redirect('agents/index');
        }
        $query =DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*',);
        $keyword = $request->get('keyword_submit');
        if($request->get('keyword_submit')){
            $query->where('room_name','like','%'.$keyword.'%');
        }
        $collection = $query->paginate(6);
        $data = ['search_product'=>$collection,
            'keyword_submit'=>$keyword,
        ];
        //dd($collection);
        return view('admin/search', $data);
    }

    public function viewEditRoom($rr_id){
        $rent_rooms = DB::table('rent_rooms')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->where('rent_rooms.rr_id','=',$rr_id)
            ->select('rent_rooms.*','room_details.*','users.*','images.*')
            ->get();
        $cates = Category::all();
        $cities = City::all();
        $districts = DB::table('cities')
            ->join('city_details', 'cities.cities_id', '=', 'city_details.city_id')
            ->select('city_details.*')
            ->get();
        $streets = DB::table('city_details')
            ->join('streets', 'city_details.city_detailId', '=', 'streets.city_detailsId')
            ->select('streets.*')
            ->get();
        $amounts = DB::table('rent_amounts')
            ->select('rent_amounts.ram_id', 'rent_amounts.amounts')
            ->get();
        return view('admin/edit-room',compact('rent_rooms','cates','cities','districts','streets','amounts'));
    }

    public function editRoom(Request $request, $rr_id){
        $url = time().'.'.$_FILES['url']['name'];
        $request->url->move(public_path('images/rooms'), $url);
        $url1 = time().'.'.$_FILES['url_1']['name'];
        $request->url_1->move(public_path('images/rooms'), $url1);
        $url2 = time().'.'.$_FILES['url_2']['name'];
        $request->url_2->move(public_path('images/rooms'), $url2);
        $room_name = $request->input('room_name');
        $cate_id = $request->input('cate_id');
        $rent_amountId = $request->input('rent_amountId');
        $city_id = $request->input('city_id');
        $city_detailId = $request->input('city_detailId');
        $street_id = $request->input('street_id');
        $info_detail = $request->input('info_detail');
        $prices = $request->input('prices');
        $acreage = $request->input('acreage');
        $bath_room = $request->input('bath_room');
        $bed_room = $request->input('bed_room');
        $location_info = $request->input('location_info');

        DB::table('rent_rooms')->where('rr_id','=',$rr_id)->update([
            'room_name' => $room_name,
            'cate_id' => $cate_id,
            'rent_amountId' => $rent_amountId,
            'city_id' => $city_id,
            'city_detailId' => $city_detailId,
            'street_id' => $street_id,
            'info_detail' => $info_detail,
            'room_date' => Carbon::now(),
        ]);
        DB::table('room_details')->where('rentRoom_id','=',$rr_id)->update([
            'prices' => $prices,
            'acreage' => $acreage,
            'bath_room' => $bath_room,
            'bed_room' => $bed_room,
            'location_info' => $location_info
        ]);
        DB::table('images')->where('rentRoom_id','=',$rr_id)->update([
            'url' => $url,
            'url_1' => $url1,
            'url_2' => $url2
        ]);
        Alert::success('Cập nhật hành công','Bài đăng của bạn đã được sửa');
        return redirect('admin/index');
    }

    public function deleteBlog($id){
        DB::table('blogs')
            ->where('new_id','=',$id)
            ->delete();
        Alert::info('Thành công','Bài báo đã được xóa');
        return redirect('admin/blog');
    }

    public function viewMail(){
        return view('client/mail');
    }
}

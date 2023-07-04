<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AgentController extends Controller
{
    public function viewAgent(){
        $all_room = DB::table('users')
            ->join('rent_rooms','users.id','=','rent_rooms.owner_id')
            ->select('rent_rooms.rr_id')
            ->where('rent_rooms.owner_id','=',Auth::user()->id)
            ->count();
        $rent_room = DB::table('rent_rooms')
            ->select('rr_id')
            ->where('status','=' , 0)
            ->where('owner_id','=',Auth::user()->id)
            ->count();
        $cancel_room = DB::table('rent_rooms')
            ->select('rr_id')
            ->where('status','=' , 1)
            ->where('owner_id','=',Auth::user()->id)
            ->count();
        $payment = DB::table('payment_histories')
            ->where('user_id','=',Auth::id())
            ->get();
        return view('/agents/index',compact('all_room','rent_room','cancel_room','payment'));
    }

    public function viewEcom_product_list(){
        $id = Auth::user()->id;
        $rent_rooms =DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*',)
            ->where('rent_rooms.owner_id','=',$id)
            ->get();
        $users = DB::table('users')->where('id',"=",$id)->first();
        return view('/agents/ecom-product-list',compact('users','rent_rooms'));
    }

    public function show($rr_id){
        $rent_room =DB::table('rent_rooms')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','room_details.*','cities.*','city_details.*','streets.*','rent_amounts.*')->get()
            ->where('rr_id',"=",$rr_id)->first();
        $image = DB::table('images')->where('rentRoom_id',"=",$rr_id)->first();
        $room_details = DB::table('room_details')->where('rentRoom_id',"=",$rr_id)->first();
        $rent_rooms =DB::table('categories')
            ->join('rent_rooms','categories.id','=','rent_rooms.cate_id')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->where('rent_rooms.rr_id',"!=",$rr_id)
            ->get();
        return view('/agents/ecom-product-detail',compact('rent_rooms','image','room_details','rent_room'));
    }
    public function viewEdit(){
        return view('/agents/edit-profile');
    }

    public function editProfile(Request $request, $id){
        $user_image = time().'.'.$_FILES['user_image']['name'];
        $request->user_image->move(public_path('images/agents'), $user_image);
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');

        DB::table('users')->where('id','=',$id)->update([
            'user_image' => $user_image,
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        ]);
        Alert::info('Thành công','Thông tin của bạn đã được cập nhật');
        return redirect('agents/agents-profile');
    }

    public function viewPayment(){
        $user_id = Auth::user()->id;
        $datas = DB::table('payment_histories')
            ->where('user_id','=',$user_id)
            ->get();
        return view('/agents/payment-history',compact('datas'));
    }

    public function viewAgentsProfile(){
        $id = Auth::user()->id;
        $user = \App\Models\User::findOrFail($id);
        $datas = DB::table('payment_histories')
            ->where('user_id','=',$id)
            ->get();
        return view('/agents/agents-profile',compact('user','datas'));
    }

    public function viewWrong(){
        return view('agents/wrong-level');
    }

    public function viewAdd()
    {
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
            return view('agents/add-product', compact('cities', 'districts', 'streets', 'amounts', 'cates'));
        }
}

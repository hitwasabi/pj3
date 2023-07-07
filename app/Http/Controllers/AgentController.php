<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\City_detail;
use App\Models\Street;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AgentController extends Controller
{
    public function viewAgent(){
        if (Auth::check() == false){
            return redirect('login');
        }
            $all_room = DB::table('users')
                ->join('rent_rooms', 'users.id', '=', 'rent_rooms.owner_id')
                ->select('rent_rooms.rr_id')
                ->where('rent_rooms.owner_id', '=', Auth::user()->id)
                ->count();
            $rent_room = DB::table('rent_rooms')
                ->select('rr_id')
                ->where('status', '=', 0)
                ->where('owner_id', '=', Auth::user()->id)
                ->count();
            $cancel_room = DB::table('rent_rooms')
                ->select('rr_id')
                ->where('status', '=', 1)
                ->where('owner_id', '=', Auth::user()->id)
                ->count();
            $payment = DB::table('payment_histories')
                ->where('user_id', '=', Auth::id())
                ->get();
        return view('/agents/index',compact('all_room','rent_room','cancel_room','payment'));
    }

    public function viewEcom_product_list(){
        if (Auth::check() == false){
            return redirect('login');
        }
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
        //dd($rent_rooms);
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
        if (Auth::check() == false){
            return redirect('login');
        }
        return view('/agents/edit-profile');
    }

    public function viewCharge(){
        return view('client/charges');
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
        if (Auth::check() == false){
            return redirect('login');
        }
        $user_id = Auth::user()->id;
        $datas = DB::table('payment_histories')
            ->where('user_id','=',$user_id)
            ->get();
        return view('/agents/payment-history',compact('datas'));
    }

    public function viewAgentsProfile(){
        if (Auth::check() == false){
            return redirect('login');
        }
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
        if (Auth::check() == false){
            return redirect('login');
        }
            $cates = Category::all();
            $data['cities'] = City::get(["city_name","cities_id"]);
            $amounts = DB::table('rent_amounts')
                ->select('rent_amounts.ram_id', 'rent_amounts.amounts')
                ->get();
            $data['cates']  = $cates;
            $data['amounts']  = $amounts;
            //dd($data);
            return view('agents/add-product',$data);
        }
    public function getState(Request $request)
    {
        $data['city_details'] = City_detail::where("city_id",$request->city_id)
            ->get(["cd_name","city_detailId"]);
        return response()->json($data);
    }
    public function getCity(Request $request)
    {
        $data['streets'] = Street::where("city_detailsId",$request->city_detailsId)
            ->get(["street_name","street_id"]);
        return response()->json($data);
    }
}

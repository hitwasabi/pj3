<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Rent_room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class RoomController extends Controller
{
    public function postRoom(Request $request){
        $request->validate([
            'url' => 'required'
        ]);
        $url = time().'.'.$_FILES['url']['name'];
        $request->url->move(public_path('images/rooms'), $url);
        $url1 = time().'.'.$_FILES['url_1']['name'];
        $request->url_1->move(public_path('images/rooms'), $url1);
        $url2 = time().'.'.$_FILES['url_2']['name'];
        $request->url_2->move(public_path('images/rooms'), $url2);
        $room_name = $request->input('room_name');
        $owner_id = Auth::id();
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

        $rr_id = DB::table('rent_rooms')->insertGetId([
            'room_name' => $room_name,
            'owner_id' => $owner_id,
            'cate_id' => $cate_id,
            'rent_amountId' => $rent_amountId,
            'city_id' => $city_id,
            'city_detailId' => $city_detailId,
            'street_id' => $street_id,
            'info_detail' => $info_detail,
            'status' => 0,
            'room_date' => Carbon::now(),
            'interact' => 0
        ]);
        DB::table('room_details')->insert([
            'rentRoom_id' => $rr_id,
            'prices' => $prices,
            'acreage' => $acreage,
            'bath_room' => $bath_room,
            'bed_room' => $bed_room,
            'location_info' => $location_info
        ]);
        DB::table('images')->insert([
            'rentRoom_id' => $rr_id,
            'url' => $url,
            'url_1' => $url1,
            'url_2' => $url2
        ]);
        Alert::success('Thành công','Bài của bạn đã được đăng lên!');
        return redirect('agents/index');
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
        return view('agents/edit-room',compact('rent_rooms','cates','cities','districts','streets','amounts'));
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
        return redirect('agents/index');
    }

    public function adminHideRoom($rr_id){
        DB::table('rent_rooms')->where('rr_id','=',$rr_id)->update([
            'status' => 1
            ]);
        Alert::info('Hoàn thành','Phòng có id '.$rr_id.' đã được ẩn đi');
        return redirect('admin/ecom-product-list');
    }

    public function adminShowRoom($rr_id){
        DB::table('rent_rooms')->where('rr_id','=',$rr_id)->update([
            'status' => 0
        ]);
        Alert::info('Hoàn thành','Phòng có id '.$rr_id.' đã được hiện lại');
        return redirect('admin/ecom-product-list');
    }

    public function agentHideRoom($rr_id){
        DB::table('rent_rooms')->where('rr_id','=',$rr_id)->update([
            'status' => 1
        ]);
        Alert::info('Hoàn thành','Phòng có id '.$rr_id.' của bạn đã được ẩn đi');
        return redirect('agents/ecom-product-list');
    }

}

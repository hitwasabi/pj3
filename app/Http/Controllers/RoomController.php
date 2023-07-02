<?php

namespace App\Http\Controllers;

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
            'bed_room' => $bed_room
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
}

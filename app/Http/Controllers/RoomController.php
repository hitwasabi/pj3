<?php

namespace App\Http\Controllers;

use App\Models\Rent_room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RoomController extends Controller
{
    public function postRoom(Request $request){
        $request->validate([
            'url' => 'required'
        ]);
        $url = time().'.'.$_FILES['url']['name'];
//        dd($url);
//        $url = time().'.'.$request->url->name;
        // Public Folder
        $request->url->move(public_path('images/rooms'), $url);
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
            'status' => 0
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
            'url' => $url
        ]);
        return redirect('agents/index');
    }
}

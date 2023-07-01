<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\City_detail;
use App\Models\Street;

use App\Models\Payment_history;

use http\Client\Curl\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Event;

class ClientController extends Controller
{
    public function viewClient(){
        $rent_rooms =DB::table('rent_rooms')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','room_details.*','cities.*','city_details.*','streets.*','rent_amounts.*','users.*','images.*');
        return view('/client/home')->with('rent_rooms',$rent_rooms);
    }
    public function viewAbout(){

        return view('client/about');
    }
    public function viewAllRoom(Request $request){
        $rent_rooms =DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*')
            ->paginate(3);
        if($request-> get('sort')=='price_asc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortBy('prices')
            );
        }
        if($request-> get('sort')=='price_desc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortByDesc('prices')
            );
        }
        if($request-> get('sort')=='id_desc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortByDesc('rr_id')
            );
        }
        $data = ['rent_rooms'=>$rent_rooms];
        $data['cities'] = City::get(["city_name","cities_id"]);
        return view('client/property-list', $data);

    }

    public function show($rr_id,$cate_name){
        $rent_room = DB::table('rent_rooms')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','room_details.*','cities.*','city_details.*','streets.*','rent_amounts.*','users.*','categories.*')
            ->get()
            ->where('rr_id',"=",$rr_id)->first();
        $image = DB::table('images')->where('rentRoom_id',"=",$rr_id)->first();
        $room_details = DB::table('room_details')->where('rentRoom_id',"=",$rr_id)->first();
        $rent_rooms = DB::table('categories')
            ->join('rent_rooms','categories.id','=','rent_rooms.cate_id')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->where('rent_rooms.rr_id',"!=",$rr_id)
            ->where('categories.id' ,"=",$cate_name)
            ->get()->take(3);
        $interact = DB::table('rent_rooms')
            ->where('rr_id','=',$rr_id)
            ->increment('interact');
        return view('client/property-details',compact('rent_rooms','image','room_details','rent_room','interact'));
    }
    public function searchInfo(Request $request){
        $keyword = $request->get('keyword_submit');
        $cities =  $request->get('cities');
        $city_details =  $request->get('cities_details');
        $streets =  $request->get('streets');
        $bath_room =  $request->get('bath_room');
        $bed_room =  $request->input('bed_room');
        $prices =  $request->input('prices');

        $collection =DB::table('rent_rooms')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','room_details.*','cities.*','city_details.*','streets.*','rent_amounts.*','users.*','images.*')
            ->where('room_name','like','%'.$keyword.'%')
            ->where('cities_id','like','%'.$cities.'%')
            ->where('rent_rooms.city_detailId','like','%'.$city_details.'%')
            ->where('rent_rooms.street_id','like','%'.$streets.'%')
            ->where('room_details.bath_room','like','%'.$bath_room.'%')
            ->where('room_details.bed_room','like','%'.$bed_room.'%')
            ->where('room_details.prices','like','%'.$prices.'%')
            ->paginate(3);
        if($request-> get('sort')=='price_asc'){
            $collection->setCollection(
                $collection->sortBy('prices')->paginate()
            );
        }
        if($request-> get('sort')=='price_desc'){
            $collection->setCollection(
                $collection->sortByDesc('prices')->paginate()
            );
        }
        if($request-> get('sort')=='id_desc'){
            $collection->setCollection(
                $collection->sortByDesc('rr_id')->paginate()
            );
        }


        $data = ['search_product'=>$collection,
                'keyword_submit'=>$keyword];
        $data['cities'] = City::get(["city_name","cities_id"]);
        return view('client/search', $data);
    }

    //Cac trang danh muc
    public function  viewMotel(Request $request){
        //$products = DB::select("SELECT * FROM products INNER JOIN images ON products.product_id = images.product_id INNER JOIN sell_products ON products.product_id = sell_products.product_id");
        $rent_rooms = DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*')
            ->where('cate_name','=','Nhà riêng')
            ->paginate(3);
        if($request-> get('sort')=='price_asc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*')
                ->where('cate_name','=','Nhà riêng')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortBy('prices')
            );
        }
        if($request-> get('sort')=='price_desc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*')
                ->where('cate_name','=','Nhà riêng')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortByDesc('prices')
            );
        }
        if($request-> get('sort')=='id_desc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*')
                ->where('cate_name','=','Nhà riêng')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortByDesc('rr_id')
            );
        }
        return view('/client/category/motel')->with('rent_rooms',$rent_rooms);
    }


    public function  viewApartment(Request $request){
        //$products = DB::select("SELECT * FROM products INNER JOIN images ON products.product_id = images.product_id INNER JOIN sell_products ON products.product_id = sell_products.product_id");
        $rent_rooms = DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*')
            ->where('cate_name','=','Nhà chung cư')
            ->paginate(3);
        if($request-> get('sort')=='price_asc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*')
                ->where('cate_name','=','Nhà chung cư')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortBy('prices')
            );
        }
        if($request-> get('sort')=='price_desc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*')
                ->where('cate_name','=','Nhà chung cư')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortByDesc('prices')
            );
        }
        if($request-> get('sort')=='id_desc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*')
                ->where('cate_name','=','Nhà chung cư')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortByDesc('rr_id')
            );
        }
        return view('/client/category/apartment')->with('rent_rooms',$rent_rooms);
    }

    //Cac trang phong theo quan
    public function  viewHoanKiem(Request $request){
        $rent_rooms = DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*')
            ->where('city_details.name','=','Hoàn Kiếm')
            ->paginate(3);
        if($request-> get('sort')=='price_asc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('cities','rent_rooms.city_id','=','cities.cities_id')
                ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
                ->join('streets','rent_rooms.street_id','=','streets.street_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*')
                ->where('city_details.name','=','Hoàn Kiếm')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortBy('prices')
            );
        }
        if($request-> get('sort')=='price_desc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('cities','rent_rooms.city_id','=','cities.cities_id')
                ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
                ->join('streets','rent_rooms.street_id','=','streets.street_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*')
                ->where('city_details.name','=','Hoàn Kiếm')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortByDesc('prices')
            );
        }
        if($request-> get('sort')=='id_desc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('cities','rent_rooms.city_id','=','cities.cities_id')
                ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
                ->join('streets','rent_rooms.street_id','=','streets.street_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*')
                ->where('city_details.name','=','Hoàn Kiếm')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortByDesc('rr_id')
            );
        }
        return view('/client/district/hoanKiem')->with('rent_rooms',$rent_rooms);
    }
    public function  viewTayHo(Request $request){
        //$products = DB::select("SELECT * FROM products INNER JOIN images ON products.product_id = images.product_id INNER JOIN sell_products ON products.product_id = sell_products.product_id");
        $rent_rooms = DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*')
            ->where('city_details.name','=','Tây Hồ')
            ->paginate(3);
        if($request-> get('sort')=='price_asc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('cities','rent_rooms.city_id','=','cities.cities_id')
                ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
                ->join('streets','rent_rooms.street_id','=','streets.street_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*')
                ->where('city_details.name','=','Tây Hồ')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortBy('prices')
            );
        }
        if($request-> get('sort')=='price_desc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('cities','rent_rooms.city_id','=','cities.cities_id')
                ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
                ->join('streets','rent_rooms.street_id','=','streets.street_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*')
                ->where('city_details.name','=','Tây Hồ')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortByDesc('prices')
            );
        }
        if($request-> get('sort')=='id_desc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('cities','rent_rooms.city_id','=','cities.cities_id')
                ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
                ->join('streets','rent_rooms.street_id','=','streets.street_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*')
                ->where('city_details.name','=','Tây Hồ')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortByDesc('rr_id')
            );
        }
        return view('/client/district/tayHo')->with('rent_rooms',$rent_rooms);
    }
    public function  viewHaiBaTrung(Request $request){
        //$products = DB::select("SELECT * FROM products INNER JOIN images ON products.product_id = images.product_id INNER JOIN sell_products ON products.product_id = sell_products.product_id");
        $rent_rooms = DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*')
            ->where('city_details.name','=','Hai Bà Trưng')
            ->paginate(3);
        if($request-> get('sort')=='price_asc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('cities','rent_rooms.city_id','=','cities.cities_id')
                ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
                ->join('streets','rent_rooms.street_id','=','streets.street_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*')
                ->where('city_details.name','=','Hai Bà Trưng')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortBy('prices')
            );
        }
        if($request-> get('sort')=='price_desc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('cities','rent_rooms.city_id','=','cities.cities_id')
                ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
                ->join('streets','rent_rooms.street_id','=','streets.street_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*')
                ->where('city_details.name','=','Hai Bà Trưng')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortByDesc('prices')
            );
        }
        if($request-> get('sort')=='id_desc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('cities','rent_rooms.city_id','=','cities.cities_id')
                ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
                ->join('streets','rent_rooms.street_id','=','streets.street_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*')
                ->where('city_details.name','=','Hai Bà Trưng')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortByDesc('rr_id')
            );
        }
        return view('/client/district/haiBaTrung')->with('rent_rooms',$rent_rooms);
    }
    public function  viewDongDa(Request $request){
        //$products = DB::select("SELECT * FROM products INNER JOIN images ON products.product_id = images.product_id INNER JOIN sell_products ON products.product_id = sell_products.product_id");
        $rent_rooms = DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*')
            ->where('city_details.name','=','Đống đa')
            ->paginate(3);
        if($request-> get('sort')=='price_asc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('cities','rent_rooms.city_id','=','cities.cities_id')
                ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
                ->join('streets','rent_rooms.street_id','=','streets.street_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*')
                ->where('city_details.name','=','Đống đa')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortBy('prices')
            );
        }
        if($request-> get('sort')=='price_desc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('cities','rent_rooms.city_id','=','cities.cities_id')
                ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
                ->join('streets','rent_rooms.street_id','=','streets.street_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*')
                ->where('city_details.name','=','Đống đa')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortByDesc('prices')
            );
        }
        if($request-> get('sort')=='id_desc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('cities','rent_rooms.city_id','=','cities.cities_id')
                ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
                ->join('streets','rent_rooms.street_id','=','streets.street_id')
                ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*')
                ->where('city_details.name','=','Đống đa')
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortByDesc('rr_id')
            );
        }
        return view('/client/district/dongDa')->with('rent_rooms',$rent_rooms);
    }

    public function  viewAgent(Request $request,$id){
        $rent_rooms = DB::table('rent_rooms')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','room_details.*','cities.*','city_details.*','streets.*','rent_amounts.*','images.url')
            ->where('rent_rooms.owner_id',"=",$id)
            ->paginate(3);
        if($request-> get('sort')=='price_asc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('cities','rent_rooms.city_id','=','cities.cities_id')
                ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
                ->join('streets','rent_rooms.street_id','=','streets.street_id')
                ->select('rent_rooms.*','room_details.*','cities.*','city_details.*','streets.*','rent_amounts.*','images.url')
                ->where('rent_rooms.owner_id',"=",$id)
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortBy('prices')
            );
        }
        if($request-> get('sort')=='price_desc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('cities','rent_rooms.city_id','=','cities.cities_id')
                ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
                ->join('streets','rent_rooms.street_id','=','streets.street_id')
                ->select('rent_rooms.*','room_details.*','cities.*','city_details.*','streets.*','rent_amounts.*','images.url')
                ->where('rent_rooms.owner_id',"=",$id)
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortByDesc('prices')
            );
        }
        if($request-> get('sort')=='id_desc'){
            $rent_rooms =DB::table('rent_rooms')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('cities','rent_rooms.city_id','=','cities.cities_id')
                ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
                ->join('streets','rent_rooms.street_id','=','streets.street_id')
                ->select('rent_rooms.*','room_details.*','cities.*','city_details.*','streets.*','rent_amounts.*','images.url')
                ->where('rent_rooms.owner_id',"=",$id)
                ->paginate(3);
            $rent_rooms->setCollection(
                $rent_rooms->sortByDesc('rr_id')
            );
        }
        $users = DB::table('users')->where('id',"=",$id)->first();
        return view('/client/agents-details',compact('users','rent_rooms'));
    }




    public function index()
    {
        $data['cities'] = City::get(["city_name","cities_id"]);
        $rent_rooms =DB::table('rent_rooms')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','room_details.*','cities.*','city_details.*','streets.*','rent_amounts.*','users.*','images.*')
            ->get();
//        return view('/client/home')->with('rent_rooms',$rent_rooms);
//        dd($rent_rooms);
        $data['rent_rooms']  = $rent_rooms;

        return view('/client/home',$data);
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

    public function buyPack(){
        if (Auth::user()->level == 3){
            return view('client/pricing');
        }
        if (Auth::user()->money < 45000){
            return view('client/pricing');
        }else{
            $cash = Auth::user()->money;
            $newCash = $cash - 45000;
            $user = \App\Models\User::findOrFail(Auth::id());
            $user->update(['money'=> $newCash]);
            $user->update(['level'=>'2']);
            Payment_history::create([
                'user_id' => Auth::user()->id,
                'price' => 45000,
                'payment_info' => 'Mua gói thường',
                'payment_time' => Carbon::now()
            ]);
            return view('agents/index');
        }
    }


    public function buyVipPack(){
        if (Auth::user()->money < 225000){
            return view('client/pricing');
        }else{
            $cash = Auth::user()->money;
            $newCash = $cash - 225000;
            $user = \App\Models\User::findOrFail(Auth::id());
            $user->update(['money'=> $newCash]);
            $user->update(['level'=>'3']);
            Payment_history::create([
                'user_id' => Auth::user()->id,
                'price' => 225000,
                'payment_info' => 'Mua gói Vip',
                'payment_time' => Carbon::now()
            ]);
            return view('agents/index');
        }
    }

//Client xem trang tin tuc
    public function viewAllBlog(){
        $blogs =DB::table('blogs')
            ->join('users','users.id','=','blogs.userPost_id')
            ->select('users.*','blogs.*')
            ->paginate(3);
        $data = ['blogs'=>$blogs];
        //dd($data);
        return view('client/blog', $data);

    }
    public function showBlog($new_id){
        $blog =DB::table('blogs')
            ->join('users','users.id','=','blogs.userPost_id')
            ->select('users.*','blogs.*')
            ->where('blogs.new_id',"=",$new_id)->first();
        $blogs =DB::table('blogs')
            ->join('users','users.id','=','blogs.userPost_id')
            ->select('users.*','blogs.*')
            ->where('blogs.new_id',"!=",$new_id)
            ->get()->take(3);
        $data = ['blog'=>$blog,
            'blogs'=>$blogs];
        return view('client/blog-details',$data);
    }
}



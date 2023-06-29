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
    public function viewClient(Request $request){
        return view('client/home');
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
        return view('/client/property-list')->with('rent_rooms',$rent_rooms);
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
            ->paginate(3);
        if($request-> get('sort')=='price_asc'){
            $collection->setCollection(
                $collection->sortBy('prices')
            );
        }
        if($request-> get('sort')=='price_desc'){
            $collection->setCollection(
                $collection->sortByDesc('prices')
            );
        }
        if($request-> get('sort')=='id_desc'){
            $collection->setCollection(
                $collection->sortByDesc('rr_id')
            );
        }
        return view('client/search',['search_product'=>$collection]);
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

}

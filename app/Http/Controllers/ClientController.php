<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\City;
use App\Models\City_detail;
use App\Models\Rent_room;
use App\Models\Street;

use App\Models\Payment_history;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\Console\Helper\Table;

class ClientController extends Controller
{
    public $min_prices;
    public $max_prices;
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
        $query =DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->select('rent_rooms.*','rent_amounts.*','images.*','room_details.*','categories.*','users.*')
            ->where('rent_rooms.status','=',0)
            ->orderBy('users.level','DESC')->inRandomOrder();
//            ->where('users.level','=','3')
//            ->get()->random(1);
        $collection = $query->orderBy(DB::raw('RAND()'))->paginate(4);
        if($request-> get('sort')=='price_asc'){
            $query =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('users','users.id','=','rent_rooms.owner_id')
                ->select('rent_rooms.*','rent_amounts.*','images.*','room_details.*','categories.*','users.*')
                ->where('rent_rooms.status','=',0);
            $query->orderBy('room_details.prices')->orderBy('users.level','DESC')->inRandomOrder();
            $collection = $query->paginate(4);
        }
        if($request-> get('sort')=='price_desc'){
            $query =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('users','users.id','=','rent_rooms.owner_id')
                ->select('rent_rooms.*','rent_amounts.*','images.*','room_details.*','categories.*','users.*')
                ->where('rent_rooms.status','=',0);
            $query->orderBy('room_details.prices','DESC')->orderBy('users.level','DESC')->inRandomOrder();
            $collection = $query->paginate(4);
        }
        if($request-> get('sort')=='id_desc'){
            $query =DB::table('rent_rooms')
                ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
                ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
                ->join('categories','categories.id','=','rent_rooms.cate_id')
                ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
                ->join('users','users.id','=','rent_rooms.owner_id')
                ->select('rent_rooms.*','rent_amounts.*','images.*','room_details.*','categories.*','users.*')
                ->where('rent_rooms.status','=',0)->orderBy('users.level','DESC');
            $query->orderBy('rr_id','DESC');
            $collection = $query->paginate(4);
        }
        $data = ['rent_rooms'=>$collection];
        $data['cities'] = City::get(["city_name","cities_id"]);
        //dd($collection);
        return view('client/property-list', $data);

    }

    public function show($rr_id,$cate_name, Request $request){
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
            ->inRandomOrder()->get()->take(3);
        $room_key = 'rr_'.$rr_id;
        if (!Session::has($room_key)) {
            Rent_room::where('rr_id', $rr_id)->increment('interact');
            Session::put($room_key, 1);
        }
        return view('client/property-details',compact('rent_rooms','image','room_details','rent_room'));
    }
    public function searchInfo(Request $request){
        $keyword = $request->get('keyword_submit');
        $cities =  $request->get('cities');
        $city_details =  $request->get('cities_details');
        $streets =  $request->get('streets');
        $bath_room =  $request->get('bath_room');
        $bed_room =  $request->input('bed_room');
        $price = $request->price;
        $acre = $request->acre;
        $query = DB::table('rent_rooms')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','room_details.*','cities.*','city_details.*','streets.*','rent_amounts.*','users.*','images.*')
            ->where('rent_rooms.status','=',0);


        if($request->get('keyword_submit')){
            $query->where('room_name','like','%'.$keyword.'%');
        }
        if($request->get('cities')){
            $query->where('cities_id','like','%'.$cities.'%');
        }
        if($request->get('cities_details')){
            $query->where('rent_rooms.city_detailId','like','%'.$city_details.'%');
        }
        if($request->get('streets')){
            $query->where('rent_rooms.street_id','like','%'.$streets.'%');
        }
        if($request->get('bath_room')){
            $query->where('room_details.bath_room','like','%'.$bath_room.'%');
        }
        if($request->get('bed_room')){
            $query->where('room_details.bed_room','like','%'.$bed_room.'%');
        }
        if($request->price) {
            $price = $request->price;
            $priceArr = explode("-", $price);
            $minPrice= (int)$priceArr[0];
            $maxPrice= (int)$priceArr[1];
            $query->where('room_details.prices','>=', $minPrice);
            $query->where('room_details.prices', '<=', $maxPrice);
        }
        if($request->acre) {
            $acre = $request->acre;
            $acreArr = explode("-", $acre);
            $minAcre= (int)$acreArr[0];
            $maxAcre= (int)$acreArr[1];
            $query->where('room_details.acreage','>=', $minAcre);
            $query->where('room_details.acreage', '<=', $maxAcre);
        }
//        dd($query->get());
        $collection = $query->paginate(4);
        if($request-> get('sort')=='price_asc'){
            $query->orderBy('room_details.prices');
            $collection = $query->paginate(4)->withQueryString();
        }
        if($request-> get('sort')=='price_desc'){
            $query->orderBy('room_details.prices','DESC');
            $collection = $query->paginate(4)->withQueryString();
        }
        if($request-> get('sort')=='id_desc'){
            $query->orderBy('rr_id','DESC');
            $collection = $query->paginate(4)->withQueryString();
        }
        $data = ['search_product'=>$collection,
                'keyword_submit'=>$keyword,
            'cities'=>$cities,
            'cities_details'=>$city_details,
            'streets'=>$streets,
            'bath_room'=>$bath_room,
            'bed_room'=>$bed_room,
            'price'=>$price,
            'acreage'=>$acre
        ];
        $data['cities'] = City::get(["city_name","cities_id"]);
        //dd($collection);
        return view('client/search', $data);
    }

    //Cac trang danh muc
    public function  viewMotel(Request $request){
        $query = DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','users.*')
            ->where('cate_name','=','Nhà riêng')
            ->where('rent_rooms.status','=',0);
        $collection = $query->paginate(4);
        if($request-> get('sort')=='price_asc'){
            $query->orderBy('room_details.prices');
            $collection = $query->paginate(4)->withQueryString();
        }
        if($request-> get('sort')=='price_desc'){
            $query->orderBy('room_details.prices','DESC');
            $collection = $query->paginate(4)->withQueryString();
        }
        if($request-> get('sort')=='id_desc'){
            $query->orderBy('rr_id','DESC');
            $collection = $query->paginate(4)->withQueryString();
        }
        //$products = DB::select("SELECT * FROM products INNER JOIN images ON products.product_id = images.product_id INNER JOIN sell_products ON products.product_id = sell_products.product_id");
        $data['cities'] = City::get(["city_name","cities_id"]);
        $data['rent_rooms']  = $collection;
        return view('/client/category/motel',$data);
    }


    public function  viewApartment(Request $request){
        //$products = DB::select("SELECT * FROM products INNER JOIN images ON products.product_id = images.product_id INNER JOIN sell_products ON products.product_id = sell_products.product_id");
        $query = DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','users.*')
            ->where('cate_name','=','Nhà chung cư')
            ->where('rent_rooms.status','=',0);
        $collection = $query->paginate(4);
        if($request-> get('sort')=='price_asc'){
            $query->orderBy('room_details.prices');
            $collection = $query->paginate(4)->withQueryString();
        }
        if($request-> get('sort')=='price_desc'){
            $query->orderBy('room_details.prices','DESC');
            $collection = $query->paginate(4)->withQueryString();
        }
        if($request-> get('sort')=='id_desc'){
            $query->orderBy('rr_id','DESC');
            $collection = $query->paginate(4)->withQueryString();
        }
        //$products = DB::select("SELECT * FROM products INNER JOIN images ON products.product_id = images.product_id INNER JOIN sell_products ON products.product_id = sell_products.product_id");
        $data['cities'] = City::get(["city_name","cities_id"]);
        $data['rent_rooms']  = $collection;
        return view('/client/category/apartment',$data);
    }

    //Cac trang phong theo quan
    public function  viewHoanKiem(Request $request){
        $query = DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*','users.*')
            ->where('city_details.cd_name','=','Quận Hoàn Kiếm')
            ->where('rent_rooms.status','=',0);
        $collection = $query->paginate(4);
        if($request-> get('sort')=='price_asc'){
            $query->orderBy('room_details.prices');
            $collection = $query->paginate(4)->withQueryString();
        }
        if($request-> get('sort')=='price_desc'){
            $query->orderBy('room_details.prices','DESC');
            $collection = $query->paginate(4)->withQueryString();
        }
        if($request-> get('sort')=='id_desc'){
            $query->orderBy('rr_id','DESC');
            $collection = $query->paginate(4)->withQueryString();
        }
        //$products = DB::select("SELECT * FROM products INNER JOIN images ON products.product_id = images.product_id INNER JOIN sell_products ON products.product_id = sell_products.product_id");
        $data['cities'] = City::get(["city_name","cities_id"]);
        $data['rent_rooms']  = $collection;
        return view('/client/district/hoanKiem',$data);
    }
    public function  viewTayHo(Request $request){
        //$products = DB::select("SELECT * FROM products INNER JOIN images ON products.product_id = images.product_id INNER JOIN sell_products ON products.product_id = sell_products.product_id");
        $query = DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*','users.*')
            ->where('city_details.cd_name','=','Quận Tây Hồ')
            ->where('rent_rooms.status','=',0);
        $collection = $query->paginate(4);
        if($request-> get('sort')=='price_asc'){
            $query->orderBy('room_details.prices');
            $collection = $query->paginate(4)->withQueryString();
        }
        if($request-> get('sort')=='price_desc'){
            $query->orderBy('room_details.prices','DESC');
            $collection = $query->paginate(4)->withQueryString();
        }
        if($request-> get('sort')=='id_desc'){
            $query->orderBy('rr_id','DESC');
            $collection = $query->paginate(4)->withQueryString();
        }
        //$products = DB::select("SELECT * FROM products INNER JOIN images ON products.product_id = images.product_id INNER JOIN sell_products ON products.product_id = sell_products.product_id");
        $data['cities'] = City::get(["city_name","cities_id"]);
        $data['rent_rooms']  = $collection;
        return view('/client/district/tayHo',$data);
    }
    public function  viewHaiBaTrung(Request $request){
        //$products = DB::select("SELECT * FROM products INNER JOIN images ON products.product_id = images.product_id INNER JOIN sell_products ON products.product_id = sell_products.product_id");
        $query = DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*','users.*')
            ->where('city_details.cd_name','=','Quận Hai Bà Trưng')
            ->where('rent_rooms.status','=',0);
        $collection = $query->paginate(4);
        if($request-> get('sort')=='price_asc'){
            $query->orderBy('room_details.prices');
            $collection = $query->paginate(4)->withQueryString();
        }
        if($request-> get('sort')=='price_desc'){
            $query->orderBy('room_details.prices','DESC');
            $collection = $query->paginate(4)->withQueryString();
        }
        if($request-> get('sort')=='id_desc'){
            $query->orderBy('rr_id','DESC');
            $collection = $query->paginate(4)->withQueryString();
        }
        //$products = DB::select("SELECT * FROM products INNER JOIN images ON products.product_id = images.product_id INNER JOIN sell_products ON products.product_id = sell_products.product_id");
        $data['cities'] = City::get(["city_name","cities_id"]);
        $data['rent_rooms']  = $collection;
        return view('/client/district/haiBaTrung',$data);
    }
    public function  viewDongDa(Request $request){
        //$products = DB::select("SELECT * FROM products INNER JOIN images ON products.product_id = images.product_id INNER JOIN sell_products ON products.product_id = sell_products.product_id");
        $query = DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*','users.*')
            ->where('city_details.cd_name','=','Quận Đống Đa')
            ->where('rent_rooms.status','=',0);
        $collection = $query->paginate(4);
        if($request-> get('sort')=='price_asc'){
            $query->orderBy('room_details.prices');
            $collection = $query->paginate(4)->withQueryString();
        }
        if($request-> get('sort')=='price_desc'){
            $query->orderBy('room_details.prices','DESC');
            $collection = $query->paginate(4)->withQueryString();
        }
        if($request-> get('sort')=='id_desc'){
            $query->orderBy('rr_id','DESC');
            $collection = $query->paginate(4)->withQueryString();
        }
        //$products = DB::select("SELECT * FROM products INNER JOIN images ON products.product_id = images.product_id INNER JOIN sell_products ON products.product_id = sell_products.product_id");
        $data['cities'] = City::get(["city_name","cities_id"]);
        $data['rent_rooms']  = $collection;
        return view('/client/district/dongDa',$data);
    }

    public function  viewAgent(Request $request,$id){
        $query = DB::table('rent_rooms')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->select('rent_rooms.*','room_details.*','cities.*','city_details.*','streets.*','rent_amounts.*','images.url','users.*')
            ->where('rent_rooms.owner_id',"=",$id);
        $collection = $query->paginate(4);
        if($request-> get('sort')=='price_asc'){
            $query->orderBy('room_details.prices');
            $collection = $query->paginate(4)->withQueryString();
        }
        if($request-> get('sort')=='price_desc'){
            $query->orderBy('room_details.prices','DESC');
            $collection = $query->paginate(4)->withQueryString();
        }
        if($request-> get('sort')=='id_desc'){
            $query->orderBy('rr_id','DESC');
            $collection = $query->paginate(4)->withQueryString();
        }
        $users = DB::table('users')->where('id',"=",$id)->first();
        $data['users'] = $users;
        $data['rent_rooms'] = $collection;
        return view('/client/agents-details',$data);
    }


    public function index()
    {
        $this->min_prices=1;
        $this->max_prices=20000000;
        $data['cities'] = City::get(["city_name","cities_id"]);
        $users = User::all();
        foreach ($users as $user){
            if ($user->endDate == Carbon::today()){
                $user->update(['level' => 1]);
            }
        }
        $rooms = Rent_room::
            join('users','users.id','=','rent_rooms.owner_id')
            ->select('rent_rooms.*','users.level')->get();
        foreach ($rooms as $room){
            if($room->level == 2){
                if(Carbon::today()->diffInDays($room->room_date) == 500){
                    $room->update(['status' => 1]);
                }
            }
            if ($room->level == 3){
                if(Carbon::today()->diffInDays($room->room_date) == 700){
                    $room->update(['status' => 1]);
                }
            }
        }
        $rent_rooms =DB::table('rent_rooms')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->where('rent_rooms.status','=',0)
            ->select('rent_rooms.*','room_details.*','cities.*','city_details.*','streets.*','rent_amounts.*','users.*','images.*')
            ->inRandomOrder()->get()->take(3);
//        return view('/client/home')->with('rent_rooms',$rent_rooms);
//        dd($rent_rooms);

        $rent_roomss =DB::table('rent_rooms')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','room_details.*','cities.*','city_details.*','streets.*','rent_amounts.*','users.*','images.*')
            ->orderBy('rent_rooms.interact','DESC')
            ->where('rent_rooms.status','=',0)
            ->get()->take(3);
        $rent_roomsss =DB::table('rent_rooms')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','room_details.*','cities.*','city_details.*','streets.*','rent_amounts.*','users.*','images.*')
            ->where('users.level','=','3')
            ->where('rent_rooms.status','=',0)
            ->inRandomOrder()
            ->get();
        $motel = DB::table('rent_rooms')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','room_details.*','cities.*','city_details.*','streets.*','rent_amounts.*','users.*','images.*')
            ->where('cate_name','=','Nhà riêng')
            ->where('rent_rooms.status','=',0)
            ->get();
        $apartment = DB::table('rent_rooms')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->select('rent_rooms.*','room_details.*','cities.*','city_details.*','streets.*','rent_amounts.*','users.*','images.*')
            ->where('cate_name','=','Nhà chung cư')
            ->where('rent_rooms.status','=',0)
            ->get();
        $hoanKiem = DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*','users.*')
            ->where('city_details.cd_name','=','Quận Hoàn Kiếm')
            ->where('rent_rooms.status','=',0)
            ->get();
        $tayHo = DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*','users.*')
            ->where('city_details.cd_name','=','Quận Tây Hồ')
            ->where('rent_rooms.status','=',0)
            ->get();
        $haiBaTrung = DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*','users.*')
            ->where('city_details.cd_name','=','Quận Hai Bà Trưng')
            ->where('rent_rooms.status','=',0)
            ->get();
        $dongDa = DB::table('rent_rooms')
            ->join('rent_amounts','rent_amounts.ram_id','=','rent_rooms.rent_amountId')
            ->join('images','images.rentRoom_id','=','rent_rooms.rr_id')
            ->join('categories','categories.id','=','rent_rooms.cate_id')
            ->join('room_details','room_details.rentRoom_id','=','rent_rooms.rr_id')
            ->join('cities','rent_rooms.city_id','=','cities.cities_id')
            ->join('city_details','rent_rooms.city_detailId','=','city_details.city_detailId')
            ->join('streets','rent_rooms.street_id','=','streets.street_id')
            ->join('users','users.id','=','rent_rooms.owner_id')
            ->select('rent_rooms.*','rent_amounts.*','images.url','room_details.*','categories.*','cities.*','city_details.*','streets.*','users.*')
            ->where('city_details.cd_name','=','Quận Đống Đa')
            ->where('rent_rooms.status','=',0)
            ->get();
        $blogs =DB::table('blogs')
            ->join('users','users.id','=','blogs.userPost_id')
            ->select('users.*','blogs.*')
            ->orderBy('blogs.post_date','DESC')
            ->get()->take(3);
        $data['apartment']  = $apartment;
        $data['motel']  = $motel;
        $data['hoanKiem']  = $hoanKiem;
        $data['tayHo']  = $tayHo;
        $data['haiBaTrung']  = $haiBaTrung;
        $data['dongDa']  = $dongDa;
        $data['rent_rooms']  = $rent_rooms;
        $data['rent_roomss']  = $rent_roomss;
        $data['rent_roomsss']  = $rent_roomsss;
        $data['blogs']  = $blogs;
        $data['min_prices']  = $this->min_prices;
        $data['max_prices']  = $this->max_prices;
        //dd($blogs);
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
        if (Auth::check() == false){
            Alert::info('Xin lỗi','Bạn cần phải đăng nhập để thực hiện hành động này');
            return redirect('login');
        }
        if (Auth::user()->level == 3){
            Alert::error('Không thành công', 'Bạn không thể mua gói vì cấp độ của bạn cao hơn');
            return redirect('client/home/pricing');
        }
        if (Auth::user()->money < 45000){
            Alert::error('Không thành công', 'Bạn không có đủ số dư trong tài khoản');
        }else{
            $cash = Auth::user()->money;
            $newCash = $cash - 45000;
            $user = \App\Models\User::findOrFail(Auth::id());
            $user->update(['money'=> $newCash]);
            $user->update(['level'=>'2']);
            $user->update(['endDate'=> Carbon::parse($user->endDate)->addDays(30)]);
            Payment_history::create([
                'user_id' => Auth::user()->id,
                'price' => 45000,
                'payment_info' => 'Mua gói thường',
                'payment_time' => Carbon::now()
            ]);
            $mailData = [
                'title' => 'Mail from ChipHome.com',
                'body' => 'Thư này gửi cho khách hàng, vui lòng không phản hồi lại'
            ];
            Mail::to($user->email)->send(new SendMail($mailData));
            if ($user->level == 1) {
                Alert::success('Mua thành công', 'Cấp độ tài khoản của bạn bây giờ là "Thường"');
            }else{
                Alert::success('Mua thành công', 'Gói "Thường" của bạn đã được gia hạn thêm 30 ngày');
            }
        }
        return redirect('client/home/pricing');
    }


    public function buyVipPack(){
        if (Auth::check() == false){
            Alert::info('Xin lỗi','Bạn cần phải đăng nhập để thực hiện hành động này');
            return redirect('login');
        }
        if (Auth::user()->money < 225000){
            Alert::error('Không thành công', 'Bạn không có đủ số dư trong tài khoản');
            return redirect('client/home/pricing');
        }else {
            if (Auth::user()->level == 2) {
                if (Carbon::today()->diffInDays(Auth::user()->endDate) > 30) {
                    Alert::warning('Không thể thực hiện thanh toán','Gói hiện tại của bạn đang là "Thường" và có thời hạn lâu hơn để có thể mua gói VIP');
                    return redirect('client/home/pricing');
                } else {
                    $cash = Auth::user()->money;
                    $newCash = $cash - 225000;
                    $user = \App\Models\User::findOrFail(Auth::id());
                    $user->update(['money' => $newCash]);
                    $user->update(['level' => '3']);
                    $user->update(['endDate' => Carbon::parse($user->endDate)->addDays(30)]);
                    Payment_history::create([
                        'user_id' => Auth::user()->id,
                        'price' => 225000,
                        'payment_info' => 'Mua gói Vip',
                        'payment_time' => Carbon::now()
                    ]);
                    $mailData = [
                        'title' => 'Mail from ChipHome.com',
                        'body' => 'Thư này gửi cho khách hàng, vui lòng không phản hồi lại'
                    ];
                    Mail::to($user->email)->send(new SendMail($mailData));
                    Alert::success('Mua thành công', 'Cấp độ tài khoản của bạn bây giờ là "VIP"');
                    return redirect('client/home/pricing');
                }
            }else{
                $cash = Auth::user()->money;
                $newCash = $cash - 225000;
                $user = \App\Models\User::findOrFail(Auth::id());
                $user->update(['money' => $newCash]);
                $user->update(['level' => '3']);
                $user->update(['endDate' => Carbon::parse($user->endDate)->addDays(30)]);
                Payment_history::create([
                    'user_id' => Auth::user()->id,
                    'price' => 225000,
                    'payment_info' => 'Mua gói Vip',
                    'payment_time' => Carbon::now()
                ]);
                $mailData = [
                    'title' => 'Mail from ChipHome.com',
                    'body' => 'Thư này gửi cho khách hàng, vui lòng không phản hồi lại'
                ];
                Mail::to($user->email)->send(new SendMail($mailData));
                Alert::success('Mua thành công', 'Gói "VIP" của bạn đã được gia hạn thêm 30 ngày');
                return redirect('client/home/pricing');
            }
        }
    }

//Client xem trang tin tuc
    public function viewAllBlog(){
        $blogs =DB::table('blogs')
            ->join('users','users.id','=','blogs.userPost_id')
            ->select('users.*','blogs.*')
            ->paginate(5);
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

    public function viewReport($rr_id){
        if (Auth::check() == false){
            Alert::info('Xin lỗi','Bạn cần đăng nhập để thực hiện hành vi này');
            return redirect('/login');
        }else {
            $rent_roomsss = DB::table('rent_rooms')
                ->join('images', 'images.rentRoom_id', '=', 'rent_rooms.rr_id')
                ->join('categories', 'categories.id', '=', 'rent_rooms.cate_id')
                ->join('rent_amounts', 'rent_amounts.ram_id', '=', 'rent_rooms.rent_amountId')
                ->join('room_details', 'room_details.rentRoom_id', '=', 'rent_rooms.rr_id')
                ->join('cities', 'rent_rooms.city_id', '=', 'cities.cities_id')
                ->join('city_details', 'rent_rooms.city_detailId', '=', 'city_details.city_detailId')
                ->join('users', 'users.id', '=', 'rent_rooms.owner_id')
                ->join('streets', 'rent_rooms.street_id', '=', 'streets.street_id')
                ->select('rent_rooms.*', 'room_details.*', 'cities.*', 'city_details.*', 'streets.*', 'rent_amounts.*', 'users.*', 'images.*')
                ->where('rent_rooms.status', '=', 0)
                ->where('rent_rooms.rr_id', '=', $rr_id)
                ->inRandomOrder()
                ->get();
            return view('client/report', compact('rent_roomsss'));
        }
    }

    public function report(Request $request,$rr_id){
        $userReport_id = Auth::user()->id;
        $report_info = $request->input('report_info');
        DB::table('reports')->insert([
            'userReport_id' => $userReport_id,
            'rpRoom_id' => $rr_id,
            'report_info' => $report_info,
            'report_date' => Carbon::today()
        ]);
        Alert::info('Báo cáo thành công','Chúng tôi sẽ kiểm tra và xác thực việc báo cáo của bạn');
        return redirect('client/home');
    }


}



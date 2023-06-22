<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentController extends Controller
{
    public function viewAgent(){
        return view('/agents/index');
    }

    public function viewEcom_product_list(){
        return view('/agents/ecom-product-list');
    }

    public function viewEdit(){
        return view('/agents/edit-profile');
    }
    public function viewPayment(){
        return view('/agents/payment-history');
    }

    public function viewAgentsProfile(){
        return view('/agents/agents-profile');
    }

    public function viewAdd()
    {
        $cates = Category::all();
        $cities = City::all();
        $districts= DB::table('cities')
            ->join('city_details','cities.cities_id','=','city_details.city_id')
            ->select('city_details.*')
            ->get();
        $streets = DB::table('city_details')
            ->join('streets','city_details.city_detailId','=','streets.city_detailsId')
            ->select('streets.*')
            ->get();
        $amounts = DB::table('rent_amounts')
            ->select('rent_amounts.ram_id','rent_amounts.amounts')
            ->get();
        return view('agents/add-product',compact('cities','districts','streets','amounts','cates'));
    }

}

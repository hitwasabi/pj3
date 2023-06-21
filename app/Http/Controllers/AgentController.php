<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

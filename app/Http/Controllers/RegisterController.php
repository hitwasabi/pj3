<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function viewRegister(){
        return view('/signup');
    }
    public function saveAccount(Request $request){
        $name = $request->get('name');
        $email =$request->get('email');
        $password = $request->get('password');
        $phone = $request->get('phone');
        DB::table('users')->insert([
            'name'=>$name,
            'email'=>$email,
            'password'=>Hash::make($password),
            'phone'=>$phone,
            'isAdmin'=> 1,
            'level'=> 1,
        ]);
        return redirect('/signin');
    }
}

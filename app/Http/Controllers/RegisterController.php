<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function viewRegister(){
        return view('/signup');
    }
    public function saveAccount(Request $request){
        $this->validate($request, [
            'password' => 'min:3|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:3'
        ]);
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
        return redirect('/login');
    }
}
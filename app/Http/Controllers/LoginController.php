<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function viewLogin(){
        return view('signin');
    }

    function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        $rs = Auth::attempt(
            ['email'=>$email,'password'=>$password]
        );
        if($rs == true){
            $user = Auth::user();
            if($user->isAdmin == 1){
                return redirect('admin/home');
            }else{
                return redirect('client/home');
            }
        }else{
            dd("Login failed");
        }
    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}

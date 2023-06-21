<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function viewLogin(){
        return view('/signin');
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
            if($user->isAdmin == 0){
                return redirect('admin/index');
            }else{
                return redirect('client/home');
            }
        }else{
            return view('/error');
        }
    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}

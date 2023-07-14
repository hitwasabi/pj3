<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
                Alert::success('Đăng nhập thành công','Chào mừng bạn, '.$user->name);
                return redirect('admin/index');
            }else{
                Alert::success('Đăng nhập thành công','Chào mừng bạn, '.$user->name);
                return redirect('client/home');
            }
        }else{
            Alert::error('Đăng nhập không thành công','Thông tin của bạn đang sai hoặc bạn chưa có tài khoản');
            return redirect('/signin');
        }
    }

    function logout(Request $request){
        $user = \App\Models\User::findOrFail(Auth::id());
        $user->update(['isVerify' => 0]);
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::info('Bạn đã đăng xuất khỏi trái đất');
        return redirect('/client/home');
    }

}

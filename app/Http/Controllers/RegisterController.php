<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function viewRegister(){
        return view('/signup');
    }
    public function saveAccount(Request $request){
        $this->validate($request, [
            'password' => 'required|confirmed|min:6'
        ]);
        $name = $request->get('name');
        $email =$request->get('email');
        $password = $request->get('password');
        $phone = $request->get('phone');
        $result = DB::table('users')->insertGetId([
            'name'=>$name,
            'email'=>$email,
            'password'=>Hash::make($password),
            'phone'=>$phone,
            'money'=> 0,
            'isAdmin'=> 1,
            'level'=> 1
        ]);
        //dd($result);
        if ($result != null) {
            Alert::success('Đăng ký thành công', 'Giờ bạn có thể đăng nhập và sử dụng trang web một cách tiện lợi');
            return redirect('login');
        }
        if ($result == null){
            Alert::error('Đăng ký không thành công', 'Thông tin bạn nhập chưa chính xác');
            return redirect('register');
        }
    }
}

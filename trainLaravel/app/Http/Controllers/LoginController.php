<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getFormLogin() {
        return view('page.login');
    }

    public function submitFormLogin(Request $request){
        echo $request->input('username');
        echo $request->input('email');
        echo $request->input('password');
        echo $request->input('phone');
        echo 'Đăng ký thành công !';
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
class SignUpController extends Controller
{
    public function submitFormSignUp(Request $request){
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');
        $address = $request->input('address');
 
        $user = new user;
        $user->username = $username;
        $user->email = $email;
        $user->password = $password;
        $user->phone = $phone; 
        $user->address = $address;

        echo 'Đăng ký thành công !';

    }

}

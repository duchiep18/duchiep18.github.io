<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class SignUpController extends Controller
{
    public function submitFormSignUp(Request $request){
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $address = $request->input('address');
        
        $user = new User;
        $user->username = $username;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->address = $address;
        $user->save();
        echo 'Đăng ký thành công !';

    }

}

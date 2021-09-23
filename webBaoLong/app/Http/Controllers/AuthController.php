<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Validator;
use Auth;
use Session;



class AuthController extends Controller
{
    public function geptFormLogin() {
        return view ('client.page.login');

    }

    public function submitFormLogin (Request $request){
        $email = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');


        if(Auth::attempt(['email' => $email,
                          'username' => $username,
                          'password' => $password]))
        {
            $user =user::where('email', $email)->first();
            Auth::login($user);
            return redirect('/home_admin');
        }
    }

    public function getFormRegister() {
        return view ('client.page.signUp');
    }

    public function submitFormRegister(Request $request) {

            $request->validate([
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'address' => '',
            'phonenumber' => 'required|max:15',
            'gender' => 'numeric|in:1,2',
        ],[
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email của bạn không hợp lệ !',
            'email.unique' => 'Email đã tồn tại',
            'username.required' => 'Trường username là trường bắt buộc',
            'username.unique' => 'Tên đăng nhập đã tồn tại',
            'password.required' => 'Password là trường bắt buộc',
            'password.min' => 'Password cần có tối thiểu 8 kí tự',
            'phonenumber.required' => 'Số điện thoại là trường bắt buộc',
            'phonenumber.max' => 'Số điện thoại không hợp lệ',
            'gender.numeric' => 'Giới tính không hợp lê',
        ]);

            // if($validator->fails()){
            //     return redirect()->back()->withErrors($validator)->withInput();
            // }
        $email = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');
        $address = $request->input('address');
        $phonenumber = $request->input('phonenumber');
        $gender = $request->input('gender');
        $user = new user;
        $user->email = $email;
        $user->username = $username;
        $user->password = bcrypt($password);
        $user->address = $address;
        $user->gender = $gender;
        $user->phone_number = $phonenumber;
        $user->save();
        return redirect()->route('login.get');

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login.get');
    }

    public function getGallery(){
        return view('admin.gallery.add_gallery');
    }



}


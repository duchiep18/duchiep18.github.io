<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllPages()
    {
        return view('admin.pages_danh_muc.PagesOfWeb.allpages');
    }
    
    public function getCreatePage()
    {
        return view ('admin.pages_danh_muc.PagesOfWeb.createPage');
    }

    public function getAllOrders()
    {
        return view ('admin.pages_danh_muc.Orders.all_Orders');
    }
    public function getAllUsers()
    {
        return view('admin.pages_danh_muc.Users.all_Users');
    }
    public function createUser()
    {
        return view('admin.pages_danh_muc.Users.createUser');
    }
    public function profileUser()
    {
        return view('admin.pages_danh_muc.Users.profileUser');
    }
    public function getAllComments()
    {
        return view('admin.pages_danh_muc.all_comments');
    }



}

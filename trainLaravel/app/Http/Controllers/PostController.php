<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\themsanpham;


class PostController extends Controller
{
    public function index(Request $request){
        $keywordsearch = $request->input('keywordsearch');
        $query = themsanpham::query();
        if($keywordsearch){
            $query->where('tensanpham', 'like', "%{$keywordsearch}%");
        }
        $product = $query->paginate(5);
        // $product = themsanpham::paginate(4);
        return view('posts.index', compact('product'));
    }

    public function create(){
        return view('posts.create');
    }

    
    public function storeData(Request $request){
        $tensanpham = $request->input('tensanpham');
        $thongtinsanpham = $request->input('thongtinsanpham');
        $giasanpham = $request->input('giasanpham');
        $trang_thai = $request->input('trang_thai');
        $product = new themsanpham;
        $product->tensanpham = $tensanpham;
        $product->thongtinsanpham = $thongtinsanpham;
        $product->giasanpham = $giasanpham;
        $product->trang_thai = $trang_thai;
        $product->save();
        echo "Insert Product Success";
    }
}

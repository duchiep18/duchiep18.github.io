<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\themsanpham;

class ProductController extends Controller
{

    
    public function create(){
        return view('admin.pages_danh_muc.ProductPages.createProducts');
    }

    //tìm kiếm, đổ dl ra trang qly
     public function getProduct_admin(Request $request){
        $query = themsanpham::query();
        $product = $query->paginate(6);
        // $product = themsanpham::paginate(4);
        return view('admin.pages_danh_muc.ProductPages.products_list', compact('product'));
    }
    //đổ dl ra web
    public function getProduct(Request $request){
        $query = themsanpham::query();
        $product = $query->paginate(5);
        // $product = themsanpham::paginate(4);
        return view('client.page.home', compact('product'));
    }

    public function storeData(Request $request){
        $id = $request->input('id');
        $tensanpham = $request->input('tensanpham');
        $thongtinsanpham = $request->input('thongtinsanpham');
        $giasanpham = $request->input('giasanpham');
        $image = $request->input('image');
        $trang_thai = $request->input('trang_thai');
        $created_at = $request->input('created_at');
        $updated_at = $request->input('updated_at');
        $product = new themsanpham;
        $product->tensanpham = $tensanpham;
        $product->thongtinsanpham = $thongtinsanpham;
        $product->giasanpham = $giasanpham;
        $product->image = $image;
        $product->trang_thai = $trang_thai;
        $product->created_at = $created_at;
        $product->updated_at = $updated_at;
        $product->save();
        return redirect()->route('products.index');   

     }
     public function edit($id){
        $product = themsanpham::find($id);
        return view ('admin.pages_danh_muc.ProductPages.editProduct', compact('product'));
    }

    public function update($id, Request $request)

    {
        $product = themsanpham::find($id);
        $tensanpham = $request->input('tensanpham');
        $thongtinsanpham = $request->input('thongtinsanpham');
        $giasanpham = $request->input('giasanpham');
        $image = $request->input('image');
        $trang_thai = $request->input('trang_thai');
        $created_at = $request->input('created_at');
        $updated_at = $request->input('updated_at');

        $product->tensanpham = $tensanpham;
        $product->thongtinsanpham = $thongtinsanpham;
        $product->giasanpham = $giasanpham;
        $product->image = $image;
        $product->trang_thai = $trang_thai;
        $product->created_at = $created_at;
        $product->updated_at = $updated_at;
        $product->save();
        
        return redirect()->route('products.index');
    }
   
    public function destroy($id){
        $productdelete = themsanpham::find($id);
        $productdelete->delete();

        return redirect()->route('products.index');
    }
    
    
}

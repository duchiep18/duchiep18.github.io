<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\themsanpham;
use App\Models\products_categories;

class ProductController extends Controller
{

    //chuyển trang tạo sản phẩm
    public function create(){
        $categories_prd = products_categories::all(); 
        return view('admin.pages_danh_muc.ProductPages.createProducts', compact('categories_prd'));
    }
    //chuyển trang tạo danh mục 
    public function create_prd_catgr(){
        return view('admin.pages_danh_muc.ProductPages.createProductsCategories');
    }
    //tìm kiếm sản phẩm
     public function search_products(Request $request)
     {
         $keywordproducts = $request->input('keywordsearch_products');
         $productsQuery = themsanpham::query();
         if($keywordproducts) {
             $productsQuery->where('tensanpham','like', "%{$keywordproducts}%");
         }
         $product = $productsQuery->paginate();
         return view('admin.pages_danh_muc.NewsPages.news_list', compact('product'));
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
        $product = $query->paginate(6);
        // $product = themsanpham::paginate(4);
        return view('client.page.home', compact('product'));
    }
    //hàm tạo danh mục sản phẩm
    public function productCategories(Request $request){
        $id = $request->input('id');
        $tendanhmucsp = $request->input('tendanhmucsp');
        $motadanhmucsp = $request -> input('motadanhmucsp');
        $loaidanhmucsp = $request -> input('loaidanhmucsp');

        $product_catgr = new products_categories;
        $product_catgr->id = $id; 
        $product_catgr->tendanhmucsp = $tendanhmucsp; 
        $product_catgr->motadanhmucsp = $motadanhmucsp; 
        $product_catgr->loaidanhmucsp = $loaidanhmucsp; 
        $product_catgr->save();
        return redirect()->route('products.create_catgr');
    }
    //hàm tạo sản phẩm vào csdl
    public function storeData(Request $request){
        $id = $request->input('id');
        $tensanpham = $request->input('tensanpham');
        $thongtinsanpham = $request->input('thongtinsanpham');
        $giasanpham = $request->input('giasanpham');
        $image = $request->input('image');
        $trang_thai = $request->input('trang_thai');
        $product = new themsanpham;
        $product->tensanpham = $tensanpham;
        $product->thongtinsanpham = $thongtinsanpham;
        $product->giasanpham = $giasanpham;
        $product->image = $image;
        $product->trang_thai = $trang_thai;
        $product->save();
        return redirect()->route('products.index');   

     }
     //chuyển đến trang edit sản phẩm
     public function edit($id){
        $categories_prd = products_categories::all(); 
        $product = themsanpham::find($id);
        return view ('admin.pages_danh_muc.ProductPages.editProduct',compact('product','categories_prd'));
    }
    //hàm cập nhật sản phẩm
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
    //hàm hủy sản phẩm
    public function destroy($id){
        $productdelete = themsanpham::find($id);
        $productdelete->delete();

        return redirect()->route('products.index');
    }
    
    
}

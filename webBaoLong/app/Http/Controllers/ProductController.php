<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\products_categories;
use Session;

class ProductController extends Controller
{

    //chuyển trang tạo sản phẩm
    public function create_prd(){
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
         $productsQuery = products::query();
         if($keywordproducts) {
             $productsQuery->where('products_name','like', "%{$keywordproducts}%");
         }
         $product = $productsQuery->paginate(5);
         return view('admin.pages_danh_muc.NewsPages.news_list', compact('product'));
     }

    //tìm kiếm, đổ dl ra trang qly
     public function getProduct_admin(Request $request){
        $query = products::query();
        $products = $query->paginate(5);
        // $preoduct = products::paginate(4);
        return view('admin.pages_danh_muc.ProductPages.products_list', compact('products'));
    }
    //đổ dl ra trang Home
    public function getProduct(Request $request){
        $query = products::query();
        $products = $query->paginate(6);
        // $product = products::paginate(4);
        return view('client.page.home', compact('products'));
    }
    //đổ dl ra trang Home sau khi Login
    // public function getProduct_Login(Request $request){
    //     $query = products::query();
    //     $product = $query->paginate(6);
    //     // $product = products::paginate(4);
    //     return view('client.page.homeLogin', compact('product'));
    // }
    //hàm tạo danh mục sản phẩm
    public function productCategories(Request $request){
        $id = $request->input('id');
        $prd_categories_name = $request->input('tendanhmucsp');
        $prd_categories_desc = $request -> input('motadanhmucsp');
        $prd_categories_type = $request -> input('loaidanhmucsp');

        $product_catgr = new products_categories;
        $product_catgr->id = $id;
        $product_catgr->product_categories_name = $prd_categories_name;
        $product_catgr->product_categories_desc = $prd_categories_desc;
        $product_catgr->product_categories_type = $prd_categories_type;
        $product_catgr->save();
        return redirect()->route('products.create_catgr');
    }
    //hàm tạo sản phẩm vào csdl
    public function storeData(Request $request){
        $prd_name = $request->input('name_products');
        $categories_prd_id = $request->input('categories_prd');
        $prd_content = $request->input('content');
        $prd_desc = $request->input('description');
        $prd_price = $request->input('price');
        $prd_price_sale= $request->input('price_sale');
        $image = str_replace(url('responsive_filemanager/source').'/', '', $request->image);
        $request->merge(['image'=>$image]);
        $image_list = str_replace(url('responsive_filemanager/source').'/', '', $request->image_list);
        $request->merge(['image_list'=>$image_list]);
        $prd_tags = $request->input('tags_prd');
        $prd_url =$request->input('url_prd');
        $prd_status = $request->input('status');

        $product = new products;
        $product->products_name =  $prd_name ;
        $product->categories_prd_id = $categories_prd_id;
        $product->products_content =  $prd_content ;
        $product->products_description = $prd_desc ;
        $product->products_content = $prd_content;
        $product->price =  $prd_price ;
        $product->sale_price =  $prd_price_sale ;
        $product->image_product = $image;
        $product->image_list_product = $image_list;
        $product->url_prd = $prd_url;
        $product->tags = $prd_tags;
        $product->status = $prd_status ;
        $product->save();
        return redirect()->route('products.index');

     }
     //chuyển đến trang edit sản phẩm
     public function edit($id){
        $categories_prd = products_categories::all();
        $product = products::find($id);
        return view ('admin.pages_danh_muc.ProductPages.editProduct',compact('product','categories_prd'));
    }
    //hàm cập nhật sản phẩm
    public function update($id, Request $request)
    {
        $prd_name = $request->input('name_products');
        $categories_prd_id = $request->input('categories_prd');
        $prd_content = $request->input('content');
        $prd_desc = $request->input('description');
        $prd_price = $request->input('price');
        $prd_price_sale= $request->input('price_sale');
        $image = str_replace(url('responsive_filemanager/source').'/', '', $request->image);
        $image_list = str_replace(url('responsive_filemanager/source').'/', '', $request->image_list);
        $prd_tags = $request->input('tags_prd');
        $prd_url =$request->input('url_prd');
        $prd_status = $request->input('status');

        $product = new products;
        $product->products_name =  $prd_name ;
        $product->categories_prd_id = $categories_prd_id;
        $product->products_content =  $prd_content ;
        $product->products_description = $prd_desc ;
        $product->products_content = $prd_content;
        $product->price =  $prd_price ;
        $product->sale_price =  $prd_price_sale ;
        $product->image_product = $image;
        $product->image_list_product = $image_list;
        $product->url_prd = $prd_url;
        $product->tags = $prd_tags;
        $product->status = $prd_status ;
        $product->save();
        return redirect()->route('products.index');
    }
    //hàm hủy sản phẩm
    public function destroy($id){
        $productdelete = products::find($id);
        $productdelete->delete();

        return redirect()->route('products.index');
    }


}

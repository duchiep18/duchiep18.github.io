<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\news_post_categories;
use \App\Models\products_categories; 
use Session;


class CategoryController extends Controller
{
        public function news($id){
            $category_news = news_post_categories::find($id);   
            $news = $category_news->news()->paginate(5);
            return view('categories_news_and_products.categories_news', compact('news'));
        }
        
        public function products($id){
            $category_products = products_categories::find($id);
            $products = $category_products->products()->paginate(5);
            return view('categories_news_and_products.categories_products', compact('products'));
        }

}

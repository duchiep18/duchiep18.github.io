<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\CategoryNews;
class CategoryController extends Controller
{
        public function news($id){
            $category_news = CategoryNews::find($id);   
            $news = $category_news->news()->paginate(5);
            return view('categories_news_and_products.categories_news', compact('news'));
        }


}

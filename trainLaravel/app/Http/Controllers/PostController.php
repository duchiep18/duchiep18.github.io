<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\news_categories;


class PostController extends Controller
{
     //fumction News List
     public function index(){
        return view('admin.pages_danh_muc.NewsPages.news_list');
    }
    //tìm kiếm bài viết
    public function search_news(Request $request)
    {
        $keywordnews = $request->input('keywordsearch_news');
        $newsQuery = News::query();
        if($keywordnews) 
        {
            $newsQuery->where('title', 'like', "%{$keywordnews}%");
        } 
        $new = $newsQuery->paginate();
        return view('admin.pages_danh_muc.NewsPages.news_list', compact('new'));
    }
    //truy cập trang tạo bài viết
    public function create()
    {
        $categories = news_categories::all();
        return view('admin.pages_danh_muc.NewsPages.createNews', compact('categories'));
    }

    //truy cập trang tạo danh mục
    public function create_catgr(){
        return view('admin.pages_danh_muc.NewsPages.createNewsCategories');
    }
    //phân trang quản lý tin tức
    public function getNews(Request $request){
        $query =News::query();
        $news = $query->paginate(5);
        // $news = posts::paginate(4);
        return view('admin.pages_danh_muc.NewsPages.news_list', compact('news'));
    }
    //tạo chuyên mục tin tức
    public function storeCategories(Request $request) {
        $id = $request ->input('id');
        $name = $request ->input ('tendanhmuc');
        $description = $request ->input('motadanhmuc');
        
        $news_catgr = new news_categories;
        $news_catgr->id = $id;
        $news_catgr->name = $name; 
        $news_catgr->description = $description;
        $news_catgr->save(); 

        return redirect()->route('news.create');
    }

    //tạo bai viết
    public function storeData(Request $request){
        $id = $request -> input('id');
        $category_id = $request -> input('loaitintuc');
        $title = $request -> input('tenbaiviet');
        $description = $request -> input('motabaiviet');
        $content = $request -> input('noidungbaiviet');
        $image = $request -> input('anhbaiviet');
        $status = $request -> input('trang_thai');
        $new = new News;
        $new->id = $id;
        $new->category_id = $category_id;
        $new->title = $title;
        $new->description = $description;
        $new->content = $content;
        $new->image = $image;
        $new->status = $status;
        $new->save();
        return redirect()->route('news.index');
    }
    //sang trang edit tin tức
    public function edit($id){
        $categories = news_categories::all();
        $new = News::find($id);
        return view ('admin.pages_danh_muc.NewsPages.editNews', compact('new', 'categories'));
    }
    //update tin tức
    public function update($id, Request $request)
    {
        $newupdate = News::find($id);
        $category_id = $request -> input('loaitintuc');
        $title = $request -> input('tenbaiviet');
        $description = $request -> input('motabaiviet');
        $content = $request -> input('noidungbaiviet');
        $image = $request -> input('anhbaiviet');
        $status = $request -> input('trang_thai');
        $created_at = $request -> input('created_at');
        $updated_at = $request -> input('updated_at');
      
        $newupdate->category_id = $category_id;
        $newupdate->title = $title;
        $newupdate->description = $description;
        $newupdate->content = $content;
        $newupdate->image = $image;
        $newupdate->status = $status;
        $newupdate->created_at = $created_at; 
        $newupdate->updated_at = $updated_at;
        $newupdate->save();
        return redirect()->route('news.index');
    }
    //hàm hủy bài viết  
    public function destroy($id)
    {
        $newdelete = News::find($id);
        $newdelete->delete();
        return redirect()->route('news.index');    
    }

}

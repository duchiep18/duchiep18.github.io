<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;


class PostController extends Controller
{
    
     //fumction News List
     public function index(){
        return view('admin.pages_danh_muc.NewsPages.news_list');
    }


    public function create(){
        return view('admin.pages_danh_muc.NewsPages.createNews');
    }

    public function getNews(Request $request){
        $query =News::query();
        $news = $query->paginate(5);
        // $news = posts::paginate(4);
        return view('admin.pages_danh_muc.NewsPages.news_list', compact('news'));
    }

    public function storeData(Request $request){
        $id = $request -> input('id');
        $category_id = $request -> input('loaitintuc');
        $title = $request -> input('tenbaiviet');
        $description = $request -> input('motabaiviet');
        $content = $request -> input('noidungbaiviet');
        $image = $request -> input('anhbaiviet');
        $status = $request -> input('trang_thai');
        $created_at = $request -> input('created_at');
        $updated_at = $request -> input('updated_at');
        $new = new News;
        $new->id = $id;
        $new->category_id = $category_id;
        $new->title = $title;
        $new->description = $description;
        $new->content = $content;
        $new->image = $image;
        $new->status = $status;
        $new->created_at = $created_at;
        $new->updated_at = $updated_at;
        $new->save();

        return redirect()->route('news.index');
    }

    public function edit($id){
        $new = News::find($id);
        return view ('admin.pages_danh_muc.NewsPages.editNews', compact('new'));
    }

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

    public function destroy($id)
    {
        $newdelete = News::find($id);
        $newdelete->delete();
        return redirect()->route('news.index');    
    }

}

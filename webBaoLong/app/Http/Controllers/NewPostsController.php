<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\news_post;
use App\Models\news_post_categories;


class NewPostsController extends Controller
{
    //Get tới trag Post List, phân trang quản lý tin tức
    public function getNews(Request $request){
        $query =news_post::query();
        $news = $query->paginate(10);
//      $news = posts::paginate(4);
        return view('admin.pages_danh_muc.NewsPages.news_list', compact('news'));
    }

    //Chuyền categories đến trag Create Post
    public function create()
    {
        $categories = news_post_categories::all();
        return view('admin.pages_danh_muc.NewsPages.createNews', compact('categories'));
    }

      //tìm kiếm bài viết
      public function search_news(Request $request)
      {
          $keywordnews = $request->input('keywordsearch_news');
          $newsQuery = news_post::query();
          if($keywordnews)
          {
              $newsQuery->where('title', 'like', "%{$keywordnews}%");
          }
          $new = $newsQuery->paginate(10);
          return view('admin.pages_danh_muc.NewsPages.news_list', compact('new'));
      }
    //truy cập trang tạo danh mục cùng Categories đã tạo
    public function create_catgr(){
        $categories = news_post_categories::all();
        return view('admin.pages_danh_muc.NewsPages.createNewsCategories', compact('categories'));
    }

    //tạo chuyên mục tin tức
    public function storeCategories(Request $request) {
        $name = $request ->input ('name_categories');
        $url_cat = $request -> input('url_cat');
        $description = $request ->input('desc_cat');
        $news_categories_type = $request -> input('type_cat');

        $news_catgr = new news_post_categories;
        $news_catgr->news_categories_name = $name;
        $news_catgr->news_categories_desc = $description;
        $news_catgr->news_categories_type = $news_categories_type;
        $news_catgr->url_cat = $url_cat;
        $news_catgr->save();

        return redirect()->route('news.create_catgr');
    }

    //tạo bai viết
    public function storeData(Request $request){
        $title = $request -> input('title');
        $category_news_id = $request -> input('category_news_id');
        $content = $request -> input('content');
        $description = $request -> input('description');
        $url_post = $request->input('url_post');
        $image = str_replace(url('responsive_filemanager/source').'/', '', $request->image);
        $tags_post = $request->input('tags_post');
        $status = $request -> input('status');

        $new = new news_post;
        $new->title = $title;
        $new->category_news_id = $category_news_id;
        $new->content = $content;
        $new->description = $description;
        $new->url_post = $url_post;
        $new->image_post = $image;
        $new->tags_post = $tags_post;
        $new->status = $status;
        $new->save();
        return redirect()->route('news.index');
    }
    //sang trang edit tin tức
    public function edit($id){
        $categories = news_post_categories::all();
        $new = news_post::find($id);
        return view ('admin.pages_danh_muc.NewsPages.editNews', compact('new', 'categories'));
    }
    //update tin tức
    public function update($id, Request $request)
    {
        $newupdate = news_post::find($id);
        $title = $request -> input('title');
        $category_news_id = $request -> input('category_news_id');
        $content = $request -> input('content');
        $description = $request -> input('description');
        $url_post = $request->input('url_post');
        $image = str_replace(url('responsive_filemanager/source').'/', '', $request->image);
        $tags_post = $request -> input('tags_post');
        $status = $request -> input('status');

        $newupdate->title = $title;
        $newupdate->category_news_id = $category_news_id;
        $newupdate->content = $content;
        $newupdate->description = $description;
        $newupdate->image_post = $image;
        $newupdate->url_post = $url_post;
        $newupdate->status = $status;
        $newupdate->save();
        return redirect()->route('news.index');
    }
    //hàm hủy bài viết
    public function destroy($id)
    {
        $newdelete = news_post::find($id);
        $newdelete->delete();
        return redirect()->route('news.index');
    }

}

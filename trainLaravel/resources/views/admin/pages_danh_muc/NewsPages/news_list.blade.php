@extends('admin.layout.admin_master')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <h1 style="text-align:center"> Danh sách tin tức</h1> <br> <br>

                    <a href="{{route('news.create')}}" class="btn btn-primary">Thêm bài tin mới</a>
                    <br><br>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" style="border=18" name="keywordsearch_news" value="{{request()->input('keywordsearch_news')}}" class="form-control" id="" placeholder="Nhập thứ bạn muốn tìm kiếm"> <br> 
                            </div>
                            <div class="col-md-6">
                            <button type="submit" class="btn btn-primary ">Tìm kiếm bài viết</button>
                            </div>
                        </div>
                    </form>
                         <br> <br>
                        
                   <table class="table table-striped table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th class="col-md-1"> id </th>
                                <th class="col-md-1"> Loại tin tức </th>
                                <th class="col-md-2"> Tên bài viết </th>
                                <th class="col-md-2"> Mô tả bài viết </th>
                                <th class="col-md-4"> Nội dung bài viết </th>
                                <th class="col-md-2"> Ảnh </th>
                                <th class="col-md-1"> Trạng thái </th>
                                <th class="col-md-2"> created_at </th>
                                <th class="col-md-2"> updated_at </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $addnew)
                            <tr>
                                <td> {{$addnew->id}} </td>
                                <td> 
                                    @if($addnew->news_category)
                                        {{$addnew->news_category->news_categories_name}}
                                    @endif
                                </td>
                                <td> {{$addnew->title}} </td>
                                <td> {{$addnew->description}} </td>
                                <td> {{$addnew->content}} </td>
                                <td class="thumb column-thumb" data-colname="Ảnh"><a href="#"><img width="150" height="150" src="{{'$addnew->image'}}" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy"  sizes="(max-width: 150px) 100vw, 150px"></a>
                                </td>                                
                                <td> {{$addnew->status}} </td>
                                <td> {{$addnew->created_at}} </td>
                                <td> {{$addnew->updated_at}} </td>

                                <td> 
                                    <a href="{{route('news.edit', $addnew->id)}}" class="btn btn-primary">Edit</a> 
                                    <form class="" action="{{route('news.destroy', $addnew->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-delete" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

                    <div style="text-align:center">
						{{$news->appends($_GET)}}      
					</div>
                </div>
            </div>
        </div>
        
            <!-- Latest compiled and minified CSS & JS -->
            <script src="//code.jquery.com/jquery.js"></script>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>   
            <script>
                $(document).ready(function () {
                    $('.btn-delete').click(function () {
                        event.preventDefault();
                        let isDelete = confirm('Sếp có muốn xóa bài viết này hay không?');
                        if (isDelete) {
                             $(this).parents('form').submit();
                        }
                    });
                })
            </script>
            
    </section>
  
@stop
          
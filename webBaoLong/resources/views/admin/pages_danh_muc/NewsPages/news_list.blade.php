@extends('admin.layout.admin_master')
 <!-- Bootstrap Select Css -->
@push('css')
 <link href="../admin-frontend/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
@endpush

@section('content')
    <section class="content">
        <div class="container-fluid">
            <h1 style="text-align:center"> Danh sách tin tức - bài viết</h1>
            <br>
            <div class="block-header" style="margin-left: -15px;">
                <a href="{{route('news.create')}}" class="btn btn-primary">Thêm bài viết mới</a> <br>
            </div>

            <div class="row clearfix">
                <div class ="col-xs-12 col-sm-12 col-md-6 col-lg-6 nopadding-left">
                    <ul class="dashboard-stat-list1">
                        <li class="all">
                            <a href="#">Tất cả</a>
                            <span>|</span>
                        </li>
                        <li class="publish">
                            <a href="#">Đã thêm</a>
                            <span>|</span>
                        </li>

                    </ul>
                </div>
                <div class ="col-md-6 col-lg-6 hidden-xs hidden-sm">
                    <div class="form-line">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 0 0 10px 10px;float:right;">Tìm các bài viết</button>
                        <input type="text" class="form-control" style="width: 40%; display: inline; float: right; background-color: white;">
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12 col-lg-12 hidden-xs hidden-sm nopadding-left">

                    <div style="display: inline-block;max-width: fit-content; margin-left: 10px;">
                        <select class="form-control show-tick">
                            <option>Tất cả các ngày</option>
                            <option>Tháng 10 năm 2021</option>
                            <option>Tháng 11 năm 2021</option>
                            <option>Tháng 12 năm 2021</option>
                        </select>
                    </div>
                    <div style="display: inline-block;max-width: fit-content; margin-left: 10px;">
                        <select class="form-control show-tick">
                            <option>Tất cả chuyên mục</option>
                            <option>Chưa được phân loại</option>
                            <option>Tin tức</option>
                        </select>
                    </div>

                    <div style="display: inline-block;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:2px">Lọc</button>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row clearfix">
                <div class="card" style="margin-top: -20px;">
                    <div class="header">
                        <ul class="header-dropdown m-r--5">

                        </ul>
                    </div>
                    <div class="body table-responsive" style="border: 1px solid #9E9E9E;">
                        <table class="table table-bordered table-striped" style="margin-bottom: 0px;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tiêu đề</th>
                                    <th>Chuyên mục</th>
                                    <th>Mô tả bài viết</th>
                                    <th>Thẻ</th>
                                    <th>Trạng thái</th>
                                    <th>Thời gian</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($news as $addnew)
                                <tr>
                                    <td> {{$addnew->id}} </td>
                                    <td> {{$addnew->title}} </td>
                                    <td>
                                        @if($addnew->news_category)
                                            {{$addnew->news_category->news_categories_name}}
                                        @endif
                                    </td>
                                    <td> {{$addnew->description}} </td>
                                    <td>{{$addnew->tags_post}}</td>
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
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding-left">
                    <div style="display: inline-block;max-width: fit-content">
                        <select class="form-control show-tick">
                            <option>Hành động</option>
                            <option>Chỉnh sửa</option>
                            <option>Bỏ vào thùng rác</option>
                        </select>
                    </div>
                    <div style="display: inline-block;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:2px">Áp dụng</button>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class ="col-xs-12 col-sm-12 hidden-lg hidden-md">
                    <div class="form-line">
                        <input type="text" class="form-control" style="background-color: white;margin-left: -15px;margin-top: 10px;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin:6px 0 10px -15px;">Tìm kiếm bài viết</button>

                    </div>
                </div>
            </div>

            <div style="text-align:center">
				{{$news->appends($_GET)}}
             </div>
        </div>
    </section>
    <!-- JS Delete button-->
    <script src="//code.jquery.com/jquery.js"></script>

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
@stop



@extends('admin.layout.admin_master')

@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <form action="{{route('news.update', $new->id)}}" method="POST" role="form">
                        @csrf 
                        @method('put')
                        <h1 style="text-align:center">Sửa đổi bài viết</h1> <br><br>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label for="">Các loại tin tức:</label>
                                    <select name="loaitintuc" class="form-control show-tick"  >
                                        <option value="category_id">-- Chọn loại tin tức --</option>
                                        @foreach($categories as $category)
                                            <option {{ $category->id == $new->category_id ? 'selected' : '' }} value="{{$category->id}}"> {{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Tên bài viết:</label>
                            <input type="text" value="{{$new->title}}" name="tenbaiviet" class="form-control" id="" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for=""> Mô tả bài viết:</label>
                            <textarea name="motabaiviet" value="{{$new->description}}" id="input" class="form-control" rows="3" required="required">{{$new->description}}</textarea>
                            
                        </div>

                        <div class="form-group">
                            <label for="">Nội dung bài viết:</label>
                            <textarea name="noidungbaiviet" id="input" class="form-control" rows="10" required="required">{{$new->content}}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for=""> Ảnh bài viết:</label>
                            <input type="file" value="{{$new->image}}" name="anhbaiviet" id="" multiple >
                        </div>

                        <div class="form-group">
                            <label for="">Status:</label>
                            <select name="trang_thai" id="input" class="form-control" required="required">
                                <option value="1">Đăng ngay </option>
                                <option value="2">Chờ duyệt </option>
                                <option value="3">Bản nháp</option>                                                     
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Cập nhật bài viết</button>
                    </form>
                        
                </div>
            
            </div>
        
        </div>

    </section>
    
@stop
@extends('admin.layout.admin_master')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    
                    <form action="{{route('news.update', $new->id)}}" method="POST" role="form">
                        @csrf 
                        @method('put')
                        <h1 >Sửa đổi bài viết</h1> <br><br>
                        <div class="form-group">
                            <label for="">Loại trang tin</label>
                             <select name="loaitintuc" id="input" class="form-control" required="required">
                                 <option value="">Chọn loại tin tức</option>
                                 <option value="1">Tin tức</option>
                                 <option value="2">Bài viết review sản phẩm, công nghệ</option>
                                 <option value="3">Các mẹo về đồ công nghệ hay</option>                                
                             </select>
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
                                 <option value="1">Đăng luôn</option>
                                 <option value="2">Chờ duyệt</option>                                                         
                            </select>
                             
                        </div>


                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                        
                </div>
            
            </div>
        
        </div>
    
    <!-- Latest compiled and minified CSS & JS -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>

@stop
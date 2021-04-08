<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    
                    <form action="{{route('news.storeData')}}" method="POST" role="form">
                        @csrf 
                        <h1>Thêm tin mới</h1> <br>
                        <div class="form-group">
                            <label for="">Loại trang tin</label>
                             <select name="loaitintuc" id="input" class="form-control" required="required">
                                 <option value="1">Tin tức</option>
                                 <option value="2">Bài viết review sản phẩm, công nghệ</option>
                                 <option value="3">Các mẹo về đồ công nghệ hay</option>
                                 
                             </select>
                             
                        </div>

                        <div class="form-group">
                            <label for="">Tên bài viết:</label>
                            <input type="text" name="tenbaiviet" class="form-control" id="" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for=""> Mô tả bài viết:</label>
                            
                            <textarea name="motabaiviet" id="input" class="form-control" rows="3" required="required"></textarea>
                            
                        </div>
                    
                        <div class="form-group">
                            <label for="">Nội dung bài viết:</label>
                            <textarea name="noidungbaiviet" id="input" class="form-control" rows="10" required="required"></textarea>
            
                        </div>
                    
                        
                        <div class="form-group">
                            <label for=""> Ảnh bài viết:</label>
                            <input type="file" name="anhbaiviet" id="" multiple >
                        </div>

                        <div class="form-group">
                            <label for="">Status:</label>
                             <select name="trang_thai" id="input" class="form-control" required="required">
                                 <option value="1">Đăng luôn</option>
                                 <option value="2">Chờ duyệt</option>
                             </select>
                             
                        </div>


                        <button type="submit" class="btn btn-primary">Tạo bài viết</button>
                    </form>
                        
                </div>
            
            </div>
        
        </div>
    
    <!-- Latest compiled and minified CSS & JS -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>
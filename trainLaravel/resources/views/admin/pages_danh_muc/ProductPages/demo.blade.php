<!doctype html>
<html lang="en">
  <head>
    <title>Thêm tin tức:</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <form action="{{route('products.storeData')}}" method="POST" role="form">
                        @csrf 
                        <h1 style="text-align:center">Thêm tài khoản</h1>
                        <div class="form-group">
                          <label for="">Loại tin tức:</label>
                          <select class="form-control" name="" id="">
                            <option>Tin tức:</option>
                            <option>Sản phẩm:</option>
                            <option>Người dùng:</option>
                          </select>
                        </div>

                        <div class="form-group">
                            <label for="">Tên sản phẩm:</label>
                            <input type="text" name="tensanpham" class="form-control" id="" placeholder="">
                        </div>
                    
                        <div class="form-group">
                            <label for="">Thông tin sản phẩm:</label>
                            <textarea name="thongtinsanpham" id="input" class="form-control" rows="10" required="required"></textarea>
            
                        </div>
                    
                        <div class="form-group">
                            <label for="">Giá sản phẩm:</label>
                            <input type="text" name="giasanpham" class="form-control"  
                               id="" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for=""> Ảnh sản phẩm:</label>
                            <input type="file" name="anhsanpham" id="" >
                        </div>
                        <div class="form-group">
                            <label for=""> Ảnh mô tả sản phẩm:</label>
                            <input type="file" name="anhsanphamslide" id="" multiple>
                        </div>

                        <div class="form-group">
                            <label for="">Status:</label>
                             <select name="trang_thai" id="input" class="form-control" required="required">
                                 <option value="1">Còn hàng</option>
                                 <option value="2">Hết hàng</option>
                             </select>
                        </div>


                        <button type="submit" class="btn btn-primary">Create New Product</button>
                    </form>
                        
                </div>
            
            </div>
        
        </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




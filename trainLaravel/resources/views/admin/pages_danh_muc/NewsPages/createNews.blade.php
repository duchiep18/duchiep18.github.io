@extends('admin.layout.admin_master')


@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                 
                 <form action="{{route('news.storeData')}}" method="POST" role="form">
                        @csrf  
                        <h1 style="text-align:center">Thêm bài viết</h1>
                        
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label for="">Các loại tin tức:</label>
                                    <select name="loaitintuc" class="form-control show-tick"  >
                                        <option value="">-- Chọn loại tin tức --</option>
                                        <option value="0">Tin mới về công nghệ  </option>
                                        <option value="1">Bài viết review sản phẩm </option>
                                        <option value="2">Mẹo vặt máy tính hay</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                            
                        <div class="form-group">
                            <label for="">Tiêu đề bài viết bài viết:</label>
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
                          <label for="">Trạng thái</label>
                          <select name="trang_thai" class="form-control show-tick" >
                             <option value="0">Đăng ngay </option>
                             <option value="1">Chờ duyệt </option>
                             <option value="2">Bản nháp</option>
                          </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Tạo bài viết</button>
                    </form>
                 
                </div>
            
            </div>
        
        </div>
    </section>

@stop
@extends('admin.layout.admin_master')


@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                 
                 <form action="{{route('news.storeData')}}" method="POST" role="form">
                        @csrf  
                        <h1 style="text-align:center">Thêm tin mới</h1>
                        
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label for="">Các loại tin tức:</label>
                                    <select class="form-control show-tick">
                                        <option value="">-- Chọn loại tin tức --</option>
                                        <option value="10">10  </option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                            
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
                          <label for="">Trạng thái</label>
                        
                        </div>

                        <button type="submit" class="btn btn-primary">Tạo bài viết</button>
                    </form>
                 
                </div>
            
            </div>
        
        </div>
    </section>

@stop
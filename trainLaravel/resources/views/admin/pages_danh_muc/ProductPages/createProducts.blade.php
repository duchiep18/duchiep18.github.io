@extends('admin.layout.admin_master')

@section('content')

<section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    
                    <form action="{{route('products.storeData')}}" method="POST" role="form">
                        @csrf 
                        @method('post')
                        <h1 style="text-align:center">Tạo sản phẩm mới</h1> <br><br>
                        <div class="form-group">
                            <label for="">Loại sản phẩm:</label>
                            <select name="loaisanpham" id="input" class="form-control" required="required">
                                 <option value="category_id">Chọn danh mục</option>
                                    @foreach($categories_prd as $category_prd)
                                        <option value="{{$category_prd->id}}">{{$category_prd->tendanhmucsp}}</option>
                                    @endforeach
                             </select>
                             
                        </div>
                        
                        <div class="form-group">
                            <label for="">Tên sản phẩm:</label>
                            <input type="text" value="" name="tensanpham" class="form-control" id="" placeholder="">
                        </div>
                    
                        <div class="form-group">
                            <label for="">Thông tin sản phẩm:</label>
                            <textarea name="thongtinsanpham" id="input" class="form-control" rows="10" required="required"></textarea>
                        </div>
                    
                        <div class="form-group">
                            <label for="">Giá sản phẩm:</label>
                            <input type="text" value=""  name="giasanpham" class="form-control" id="" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for=""> Ảnh sản phẩm:</label>
                            <input type="file" value="" name="anhsanpham" id="" >
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

                        <button type="submit" class="btn btn-primary">Tạo sản phẩm</button>
                    </form>
                        
                </div>
            
            </div>
        
        </div>
    </section>

  
@stop
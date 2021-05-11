@extends('admin.layout.admin_master')

@section('content')

<section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                 
                 <form action="{{route('products.storeCategories')}}" method="POST" role="form">
                        @csrf  
                        @method('post')
                        <h2 style="text-align:center">Thêm danh mục sản phẩm</h1>
                        <br><br>
                        <div class="form-group">
                            <label for="">Tên danh mục: </label>
                            <input type="text" name="tendanhmucsp" class="form-control" id="" placeholder="">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for=""> Mô tả danh mục:</label>
                            <textarea name="motadanhmucsp" id="" class="form-control" rows="4" required="required"></textarea>
                        </div>
                        <br>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label for="">Loại quyền danh mục:</label>
                                    <select name="loaidanhmucsp" class="form-control show-tick">
                                        <option value="category_id">-- Chọn loại tin tức --</option>
                                            <option value="1">Sản phẩm</option>
                                            <option value="2">Danh mục con</option>
                                            <option value="3">Cả hai</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-primary">Tạo danh mục</button>
                    </form>
                 
                </div>
            
            </div>
        
        </div>
    </section>
@stop
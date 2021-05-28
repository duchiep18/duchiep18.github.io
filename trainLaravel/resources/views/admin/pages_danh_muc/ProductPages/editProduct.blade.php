@extends('admin.layout.admin_master')

@section('content')

<section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    
                    <form action="{{route('products.update', $product->id)}}" method="POST" role="form">
                        @csrf 
                        @method('put')
                        <h1 style="text-align:center">Cập nhật sản phẩm </h1> <br><br>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label for="">Các loại danh mục sản phẩm:</label>
                                        <select name="loaisanpham" class="form-control show-tick"  >
                                            <option value="category_prd_id">-- Chọn loại danh mục --</option>
                                            @foreach($categories_prd as $category_prd)
                                                <option {{ $category_prd->id == $product->categories_prd_id ? 'selected' : '' }} value="{{$category_prd->id}}"> {{$category_prd->tendanhmucsp}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                        <div class="form-group">
                            <label for="">Tên sản phẩm:</label>
                            <input type="text" value="{{$product->tensanpham}}" name="tensanpham" class="form-control" id="" placeholder="">
                        </div>
                    
                        <div class="form-group">
                            <label for="">Thông tin sản phẩm:</label>
                            <textarea name="thongtinsanpham" id="input" class="form-control" rows="10" required="required">{{$product->thongtinsanpham}}</textarea>
            
                        </div>
                    
                        <div class="form-group">
                            <label for="">Giá sản phẩm:</label>
                            <input type="text" value="{{$product->giasanpham}}"  name="giasanpham" class="form-control"  id="" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for=""> Ảnh sản phẩm:</label>
                            <img src="{{$product->image}}" alt="">
                        </div>
                        

                        <div class="form-group">
                            <label for="">Trạng thái sản phẩm:</label>
                             <select name="trang_thai" id="input" class="form-control" required="required">
                                 <option value="1">Còn hàng</option>
                                 <option value="2">Hết hàng</option>
                                 <option value="3">Liên hệ</option>
                             </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Cập nhật sản phẩm<button>
                    </form>
                        
                </div>
            
            </div>
        
        </div>
    </section>

@stop
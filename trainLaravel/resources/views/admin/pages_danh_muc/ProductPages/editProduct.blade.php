@extends('admin.layout.admin_master')

@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    
                    <form action="{{route('products.update', $product->id)}}" method="POST" role="form">
                        @csrf 
                        @method('put')
                        <h1 style="text-align:center">Sửa đổi sản phẩm</h1> <br><br>
                        <div class="form-group">
                            <label for="">Loại sản phẩm:</label>
                            <select name="loaisanpham" id="input" class="form-control" required="required">
                                 <option value="1">Chipset-CPU</option>
                                 <option value="2">Mainboard - Bo mạch chủ</option>
                                 <option value="3">VGA - Card đồ họa màn hình</option>
                                 <option value="4">Ram - Bộ nhớ trong</option>
                                 <option value="5">PSU - Nguồn máy tính</option>
                                 <option value="6">SSD - HDD - Ổ cứng máy tính</option>
                                 <option value="7">Monitor - Màn hình máy tính</option>
                                 <option value="8">Case - Vỏ máy tính</option>
                             </select>
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
                            <input type="text" value="{{$product->giasanpham}}"  name="giasanpham" class="form-control"  
                               id="" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for=""> Ảnh sản phẩm:</label>
                            <input type="file" value="{{$product->image}}" name="anhsanpham" id="" >
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

                        <button type="submit" class="btn btn-primary">Update sản phẩm</button>
                    </form>
                        
                </div>
            
            </div>
        
        </div>
    </section>

@stop
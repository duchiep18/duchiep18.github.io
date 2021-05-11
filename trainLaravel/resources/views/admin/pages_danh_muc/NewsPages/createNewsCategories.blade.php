@extends('admin.layout.admin_master')

@section('content')

<section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                 
                 <form action="{{route('news.storeCategories')}}" method="POST" role="form">
                        @csrf  
                        @method('post')
                        <h2 style="text-align:center">Thêm chuyên mục loại tin tức</h1>
                            
                        <br><br>
                        <div class="form-group">
                            <label for="">Tên chuyên mục: </label>
                            <input type="text" name="tendanhmuc" class="form-control" id="" placeholder="">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for=""> Mô tả loại tin:</label>
                            <textarea name="motadanhmuc" id="" class="form-control" rows="4" required="required"></textarea>
                        </div>
                        
                        <br>

                        <button type="submit" class="btn btn-primary">Tạo danh mục</button>
                    </form>
                 
                </div>
            
            </div>
        
        </div>
    </section>


@stop
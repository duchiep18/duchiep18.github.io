@extends('admin.layout.admin_master')


@section('content')

    <section class="content">
            
    <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <h1 style="text-align:center"> Danh sách Sản phẩm</h1> 
                    <br> <br>

                    <a href="{{route('products.create')}}" class="btn btn-primary">Thêm sản phẩm mới</a> <br>
                    <br> 
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                    <input type="text" style="border=18" name="keywordsearch_products" value="{{request()->input('keywordsearch_products')}}" class="form-control" id="" placeholder="Nhập sản phẩm muốn tìm kiếm"> <br> 
                            </div>
                            <div class="col-md-6">
                            <button type="submit" class="btn btn-primary ">Tìm kiếm sản phẩm</button>
                            </div>
                        </div>
                    </form>
                    <br> 
                   <table class="table table-striped table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th> id </th>
                                <th> Tên sản phẩm </th>
                                <th> Thông tin sản phẩm </th>
                                <th> Giá sản phẩm </th>
                                <th> Ảnh sản phẩm </th>
                                <th> Trạng thái </th>
                                <th> created_at </th>
                                <th> updated_at </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $addproduct)
                            <tr>
                                <td> {{$addproduct->id}} </td>
                                <td> {{$addproduct->tensanpham}} </td>
                                <td> {{$addproduct->thongtinsanpham}} </td>
                                <td> {{$addproduct->giasanpham}} </td>
                                <td class="thumb column-thumb" data-colname="Ảnh"><a href="#"><img width="150" height="150" src="{{'$addproduct->image'}}" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy"  sizes="(max-width: 150px) 100vw, 150px"></a>
                                </td>                                
                                <td> {{$addproduct->trang_thai}} </td>
                                <td> {{$addproduct->created_at}} </td>
                                <td> {{$addproduct->updated_at}} </td>
                                <td> 
                                <a href="{{route('products.edit', $addproduct->id)}}" class="btn btn-primary">Edit</a> 
                                <form action="{{route('products.destroy', $addproduct->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-delete" type="button">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                   
                    <div style="text-align:center">
							{{$product->appends($_GET)}}      
					</div>
                </div>
            </div>
        </div>
          <!-- Latest compiled and minified CSS & JS -->
            <script src="//code.jquery.com/jquery.js"></script>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>   
            <script>
                $(document).ready(function() {
                    $('.btn-delete').click(function() {
                        event.preventDefault();
                        let isDelete = confirm('Sếp có muốn xóa sản phẩm này hay không?');
                        if (isDelete) {
                            $(this).parents('form').submit();
                        }
                    });
                })
            </script>
            
    </section>

   
@stop
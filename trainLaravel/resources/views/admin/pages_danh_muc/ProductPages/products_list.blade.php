@extends('admin.layout.admin_master')


@section('content')

    <section class="content">
            
    <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h1 style="text-align:center"> Danh sách Sản phẩm</h1> <br> <br>

                    <div class="form-group">
                            <label class="sr-only" for=""></label>
                            <input type="text" style="border=10" name="keywordsearch" value="{{ request()->input('keywordsearch') }}" class="form-control" id="" placeholder="Search something"> <br> 
                            <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                         <br> <br>
                        <a href="{{route('products.create')}}" class="btn btn-primary">Thêm sản phẩm mới</a> 
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
                                <form  action="#" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-delete" type="button">Delete</button>
                                </form>
                                
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

                   
                    <div style="padding-left:350px">
							{{$product->appends($_GET)}}      
						</div>
                </div>
            </div>
        </div>
       
    </section>

    <!--JS delete-form  -->
     <!-- <script>
		$(document).ready(function () {
			$('.btn-delete').click(function () {
				let isDelete = confirm('Sếp có muốn xóa bản ghi này hay không?');
				if (isDelete) {
					$(this).parents('form').submit();
				}
			});
		})
	</script> -->
    <!-- Latest compiled and minified JS -->
    <script src="//code.jquery.com/jquery.js"></script>
    
    <!-- Jquery Core Js -->
    
    <!-- Bootstrap Core Js -->
    <script src="/admin-frontend/plugins/bootstrap/js/bootstrap.js"></script>
    
    <!-- Select Plugin Js -->
    <script src="/admin-frontend/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    
    <!-- Slimscroll Plugin Js -->
    <script src="/admin-frontend/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    
    <!-- Waves Effect Plugin Js -->
    <script src="/admin-frontend/plugins/node-waves/waves.js"></script>
    
    <!-- Jquery CountTo Plugin Js -->
    <script src="/admin-frontend/plugins/jquery-countto/jquery.countTo.js"></script>
    
    <!-- Morris Plugin Js -->
    <script src="/admin-frontend/plugins/raphael/raphael.min.js"></script>
    <script src="/admin-frontend/plugins/morrisjs/morris.js"></script>
    
    <!-- ChartJs -->
    <script src="/admin-frontend/plugins/chartjs/Chart.bundle.js"></script>
    
    <!-- Flot Charts Plugin Js -->
    <script src="/admin-frontend/plugins/flot-charts/jquery.flot.js"></script>
    <script src="/admin-frontend/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="/admin-frontend/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="/admin-frontend/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="/admin-frontend/plugins/flot-charts/jquery.flot.time.js"></script>
    
    <!-- Sparkline Chart Plugin Js -->
    <script src="/admin-frontend/plugins/jquery-sparkline/jquery.sparkline.js"></script>
    
    <!-- Custom Js -->
    <script src="/admin-frontend/js/admin.js"></script>
    <script src="/admin-frontend/js/pages/index.js"></script>
    
    <!-- Demo Js -->
    <script src="/admin-frontend/js/demo.js"></script>

    
</body>
</html>


@stop
@extends('admin.layout.admin_master')


@section('content')

    <section class="content">
    <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h1 style="text-align:center"> Danh sách tin tức</h1> <br> <br>

                    <div class="form-group">
                            <label class="sr-only" for=""></label>
                            <input type="text" style="border=10" name="keywordsearch" value="{{ request()->input('keywordsearch') }}" class="form-control" id="" placeholder="Search something"> <br> 
                            <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                         <br> <br>
                        <a href="{{route('news.create')}}" class="btn btn-primary">Thêm bài tin mới</a> 
                    </form>
                    <br> 
                   <table class="table table-striped table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col"> id </th>
                                <th scope="col"> Loại tin tức </th>
                                <th scope="col"> Tên bài viết </th>
                                <th scope="col"> Mô tả bài viết </th>
                                <th scope="col"> Nội dung bài viết </th>
                                <th scope="col"> Ảnh </th>
                                <th scope="col"> Trạng thái </th>
                                <th scope="col"> created_at </th>
                                <th scope="col"> updated_at </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $addnew)
                            <tr>
                                <td> {{$addnew->id}} </td>
                                <td> {{$addnew->category_id}} </td>
                                <td> {{$addnew->title}} </td>
                                <td> {{$addnew->description}} </td>
                                <td> {{$addnew->content}} </td>
                                <td class="thumb column-thumb" data-colname="Ảnh"><a href="#"><img width="150" height="150" src="{{'$addnew->image'}}" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy"  sizes="(max-width: 150px) 100vw, 150px"></a>
                                </td>                                
                                <td> {{$addnew->status}} </td>
                                <td> {{$addnew->created_at}} </td>
                                <td> {{$addnew->updated_at}} </td>
                                <td> 
                                <a href="{{route('news.edit', $addnew->id)}}" class="btn btn-primary">Edit</a> 
                                <form  action="{{route('news.destroy', $addnew->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-delete" type="submit">Delete</button>
                                </form>
                                
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

                    <div style="padding-left:350px">
						{{$news->appends($_GET)}}      
					</div>
                </div>
            </div>
        </div>

    </section>

    
     <script>
		$(document).ready(function () {
			$('.btn-delete').click(function () {
				let isDelete = confirm('Sếp có muốn xóa bản ghi này hay không?');
				if (isDelete) {
					$(this).parents('form').submit();
				}
			});
		})
	</script>
    
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
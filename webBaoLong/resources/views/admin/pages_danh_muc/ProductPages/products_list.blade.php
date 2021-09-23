@extends('admin.layout.admin_master')

<!-- Bootstrap Select Css -->
@push('css')
 <link href="../admin-frontend/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
@endpush

@section('content')
    <section class="content">
    <div class="container-fluid">
                    <h1 style="text-align:center"> Danh sách Sản phẩm</h1>
                    <br> <br>

                    <div class="block-header" style="margin-left: -15px;">
                        <a href="{{route('products.create')}}" class="btn btn-primary">Thêm sản phẩm mới</a> <br>
                    </div>
                    <br>
                    <div class="row clearfix">
                        <div class ="col-xs-12 col-sm-12 col-md-6 col-lg-6 nopadding-left">
                            <ul class="dashboard-stat-list1">
                                <li class="all">
                                    <a href="#">Tất cả</a>
                                    <span>|</span>
                                </li>
                                <li class="publish">
                                    <a href="#">Đã xuất</a>
                                    <span>|</span>
                                </li>

                            </ul>
                        </div>
                        <div class ="col-md-6 col-lg-6 hidden-xs hidden-sm">
                            <div class="form-line">
                                <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 0 0 10px 10px;float:right;">Tìm các sản phẩm</button>
                                <input type="text" class="form-control" style="width: 40%; display: inline; float: right; background-color: white;">
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-12 col-lg-12 hidden-xs hidden-sm nopadding-left">

                            <div style="display: inline-block;max-width: fit-content; margin-left: 10px;">
                                <select class="form-control show-tick">
                                    <option>Tất cả các ngày</option>
                                    <option>Tháng 10 năm 2021</option>
                                    <option>Tháng 11 năm 2021</option>
                                    <option>Tháng 12 năm 2021</option>
                                </select>
                            </div>
                            <div style="display: inline-block;max-width: fit-content; margin-left: 10px;">
                                <select class="form-control show-tick">
                                    <option>Tất cả chuyên mục</option>
                                    <option>Chưa được phân loại</option>
                                    <option>Tin tức</option>
                                </select>
                            </div>

                            <div style="display: inline-block;">
                                <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:2px">Lọc</button>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row clearfix">
                        <div class="card" style="margin-top: -20px;">
                            <div class="header">
                                <ul class="header-dropdown m-r--5">

                                </ul>
                            </div>
                            <div class="body table-responsive" style="border: 1px solid #9E9E9E;">
                                <table class="table table-bordered table-striped" style="margin-bottom: 0px;">
                                    <thead>
                                        <tr>
                                            <th> <i class="material-icons col-amber">image</i> </th>
                                            <th>Tên sản phẩm</th>
                                            <th>Tình trạng</th>
                                            <th>Giá</th>
                                            <th>Danh mục sản phẩm</th>
                                            <th>Từ khóa</th>
                                            <th>Thời gian</th>
                                        </tr>
                                    </thead>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="{{url('responsive_filemanager/source')}}/{{$product->image_product}}" style="width: 64px; height: 64px;">
                                                    </a>
                                                </div>
                                            </td>
                                            <td> {{$product->products_name}} </td>
                                            <td> {{$product->status}} </td>
                                            <td> {{$product->price}} </td>
                                            <td>
                                                @if($product->products_category)
                                                    {{$product->products_category->product_categories_name}}
                                                @endif
                                            </td>
                                            <td> {{$product->tags}} </td>
                                            <td> {{$product->created_at}} </td>
                                            <td> {{$product->updated_at}} </td>
                                            <td>
                                                <a href="{{route('products.edit', $product->id)}}" class="btn btn-primary">Edit</a>
                                                <form class="" action="{{route('products.destroy', $product->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-delete" type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div style="text-align:center">
							{{$products->appends($_GET)}}
					</div>
                </div>
            </div>
        </div>
        <script src="//code.jquery.com/jquery.js"></script>
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

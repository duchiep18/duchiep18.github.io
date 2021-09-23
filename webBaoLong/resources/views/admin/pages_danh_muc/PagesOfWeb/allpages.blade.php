@extends('admin.layout.admin_master')


@section('content')
    <section class="content">
    <div class="container-fluid">
                    <h1 style="text-align:center"> Danh sách các trang</h1> 
                    <br> <br>
                        
                    <div class="block-header" style="margin-left: -15px;">
                        <a href="create_page" class="btn btn-primary">Thêm trang mới</a> <br>
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
                                <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 0 0 10px 10px;float:right;">Tìm các trang</button>
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
                                            <th>ID</th>
                                            <th>Tiêu đề</th>
                                            <th>Tác giả</th>
                                            <th>Thời gian</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><a href="#">Mr.Robot</a></td>
                                            <td>none</td>
                                            <td>none</td>
                                            <td>
                                                <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:35px">Sửa</button>
                                                <br>
                                                <button type="button" class="btn btn-delete bg-red btn-lg waves-effect" style="border-radius: 5px; margin-left:35px">Xóa</button>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div style="text-align:center">
							{{-- {{$product->appends($_GET)}} --}}
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
    {{-- // Bootstrap 3 --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

   
@stop
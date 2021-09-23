@extends('admin.layout.admin_master')

<!-- Bootstrap Select Css -->
@push('css')
 <link href="../admin-frontend/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
@endpush

@section('content')
    <section class="content">
        <div class="container-fluid">
            
            <div class="block-header" style="margin-left: -15px;">
                <h2 style="padding-left: 0px; display: inline-block">Đơn hàng</h2>
                <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 0 0 10px 10px;">Thêm đơn hàng</button>
            </div>
            
            <div class="row clearfix">
                <div class ="col-xs-12 col-sm-12 col-md-6 col-lg-6 nopadding-left">
                    <ul class="dashboard-stat-list1">
                        <li class="all">
                            <a href="#">Tất cả</a>
                            <span>|</span>
                        </li>
                        <li class="publish">
                            <a href="#">Đang xử lý</a>
                            <span>|</span>
                        </li>
                        <li class="singleContent">
                            <a href="#">Đã hoàn tất</a>
                            <span>|</span>
                        </li>
                        <li class="cornerstone">
                            <a href="#">Đã hủy bỏ</a>
                        </li>
                    </ul>
                </div>
                <div class ="col-md-6 col-lg-6 hidden-xs hidden-sm">
                    <div class="form-line">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 0 0 10px 10px;float:right;">Tìm đơn hàng</button>
                        <input type="text" class="form-control" style="width: 40%; display: inline; float: right; background-color: white;">
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12 col-lg-12 hidden-xs hidden-sm nopadding-left">
                    <div style="display: inline-block;max-width: fit-content">
                        <select class="form-control show-tick">
                            <option>Hành động</option>
                            <option>Bỏ vào thùng rác</option>
                            <option>Đổi trạng thái sang thực hiện</option>
                            <option>Đổi trạng thái sang tạm giữ</option>
                            <option>Đổi trạng thái sang hoàn tất</option>
                        </select>
                    </div>
                    <div style="display: inline-block;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:2px">Áp dụng</button>
                    </div>
                    <div style="display: inline-block;max-width: fit-content; margin-left: 10px;">
                        <select class="form-control show-tick">
                            <option>Tất cả các ngày</option>
                            <option>Tháng 9 năm 2021</option>
                            <option>Tháng 10 năm 2021</option>
                            <option>Tháng 11 năm 2021</option>
                            <option>Tháng 12 năm 2021</option>
                        </select>
                    </div>
                    <input type="text" class="form-control" placeholder="Lọc theo tài khoản khách hàng (Vui lòng nhập nhiều hơn 1 ký tự)"style="width: 40%; background-color: white; display:inline-block; margin: 0 10px 0 10px; border-radius: 6px; border: 1px solid #9E9E9E;">
                    <div style="display: inline-block;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:-8px">Lọc</button>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="card" style="margin-top: 20px;">
                    <div class="header">
                        <ul class="header-dropdown m-r--5">
                            
                        </ul>
                    </div>
                    <div class="body table-responsive" style="border: 1px solid #9E9E9E;">
                        <table class="table table-bordered table-striped" style="margin-bottom: 0px;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Đơn hàng</th>
                                    <th>Ngày</th>
                                    <th>Tình trạng</th>
                                    <th>Giao hàng đến</th>
                                    <th>Tổng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><a href="#">Máy bơm nước</a></td>
                                    <td>none</td>
                                    <td>none</td>
                                    <td>none</td>
                                    <td>none</td>
                                    <td>
                                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:35px">Sửa</button>
                                        <br>
                                        <button type="button" class="btn bg-red btn-lg waves-effect" style="border-radius: 5px; margin-left:35px">Xóa</button>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 nopadding-left">
                    <div style="display: inline-block;max-width: fit-content;">
                        <select class="form-control show-tick">
                            <option>Hành động</option>
                            <option>Bỏ vào thùng rác</option>
                            <option>Đổi trạng thái sang thực hiện</option>
                            <option>Đổi trạng thái sang tạm giữ</option>
                            <option>Đổi trạng thái sang hoàn tất</option>
                        </select>
                    </div>
                    <div style="display: inline-block;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:-2px">Áp dụng</button>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class ="col-xs-12 col-sm-12 hidden-lg hidden-md">
                    <div class="form-line">
                        <input type="text" class="form-control" style="background-color: white;margin-left: -15px;margin-top: 10px;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin:6px 0 10px -15px;">Tìm đơn hàng</button>
                        
                    </div>
                </div>
            </div>

            <div style="text-align:center">
				{{-- {{$news->appends($_GET)}}       --}}
             </div>
        </div>
    </section>
       
        <script>
                $(document).ready(function () {
                    $('.btn-delete').click(function () {
                        event.preventDefault();
                        let isDelete = confirm('Sếp có muốn xóa bài viết này hay không?');
                        if (isDelete) {
                             $(this).parents('form').submit();
                        }
                    });
                })
         </script>
        
@stop

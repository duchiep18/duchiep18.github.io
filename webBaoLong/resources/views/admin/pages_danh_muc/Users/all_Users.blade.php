@extends('admin.layout.admin_master')

<!-- Bootstrap Select Css -->
@push('css')
 <link href="../admin-frontend/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
@endpush

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header" style="margin-left: -15px;">
                <h2 style="padding-left: 0px; display: inline-block">Thành viên</h2>
                <div class="block-header" style="margin-left: -15px;">
                    <a href="" class="btn btn-primary">Thêm thành viên mới</a> <br>
                </div>
                
            </div>
            
            <div class="row clearfix">
                <div class ="col-xs-12 col-sm-12 col-md-6 col-lg-6 nopadding-left">
                    <ul class="dashboard-stat-list1">
                        <li class="all">
                            <a href="#">Tất cả</a>
                            <span>|</span>
                        </li>
                        <li class="publish">
                            <a href="#">Quản lý</a>
                        </li>
                    </ul>
                </div>
                <div class ="col-md-6 col-lg-6 hidden-xs hidden-sm">
                    <div class="form-line">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 0 0 10px 10px;float:right;">Tìm kiếm người dùng</button>
                        <input type="text" class="form-control" style="width: 40%; display: inline; float: right; background-color: white;">
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12 col-lg-12 hidden-xs hidden-sm nopadding-left">
                    <div style="display: inline-block;max-width: fit-content">
                        <select class="form-control show-tick">
                            <option>Hành động</option>
                            <option>Xóa</option>
                            <option>Gửi lấy lại mật khẩu mới</option>
                        </select>
                    </div>
                    <div style="display: inline-block;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:2px">Áp dụng</button>
                    </div>
                    <div style="display: inline-block;max-width: fit-content; margin-left: 10px;">
                        <select class="form-control show-tick">
                            <option>Đổi thành...</option>
                            <option>SEO Editor</option>
                            <option>SEO Manager</option>
                            <option>Translator</option>
                            <option>Quản lý cửa hàng</option>
                            <option>Khách hàng</option>
                            <option>Thành viên đăng ký</option>
                            <option>Cộng tác viên</option>
                            <option>Tác giả</option>
                            <option>Biên tập viên</option>
                            <option>Quản lý</option>
                            <option>--Trang mạng này không chỉ định vai trò nào--</option>
                        </select>
                    </div>
                    <div style="display: inline-block;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:2px">Thay đổi</button>
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
                                    <th>Tên người dùng</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Vai trò</th>
                                    <th>Bài viết</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><a href="#">Mr.Robot</a></td>
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
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding-left">
                    <div style="display: inline-block;max-width: fit-content">
                        <select class="form-control show-tick">
                            <option>Hành động</option>
                            <option>Xóa</option>
                            <option>Gửi lấy lại mật khẩu mới</option>
                        </select>
                    </div>
                    <div style="display: inline-block;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:2px">Áp dụng</button>
                    </div>
                    <div style="display: inline-block;max-width: fit-content; margin-left: 10px;">
                        <select class="form-control show-tick">
                            <option>Đổi thành...</option>
                            <option>SEO Editor</option>
                            <option>SEO Manager</option>
                            <option>Translator</option>
                            <option>Quản lý cửa hàng</option>
                            <option>Khách hàng</option>
                            <option>Thành viên đăng ký</option>
                            <option>Cộng tác viên</option>
                            <option>Tác giả</option>
                            <option>Biên tập viên</option>
                            <option>Quản lý</option>
                            <option>--Trang mạng này không chỉ định vai trò nào--</option>
                        </select>
                    </div>
                    <div style="display: inline-block;">
                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-left:2px">Thay đổi</button>
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

@extends('admin.layout.admin_master')

@section('content')

<section class="content">
        <div class="container-fluid">
            <h2 style="text-align:center">Thêm danh mục sản phẩm</h1>
                 
            <form action="{{route('products.storeCategories')}}" method="POST" role="form">
                 @csrf  
                 @method('post')
                    {{-- Left Side --}}
                    <div class="row">
                        <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11" style="float:left; margin-top:10px;">
                            <div class="form-line hidden-sm hidden-xs" style="padding-left: 50px;">
                                <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 0 0 10px 10px;float:right">Tìm kiếm danh mục</button>
                                <input type="text" class="form-control" style="width: 40%; display: inline; float: right; background-color: white;">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        
                        <div class ="col-xs-12 col-sm-12 col-md-5 col-lg-5" >
                            <p><b>Thêm danh mục</b></p>
                            <p><small>Tên danh mục</small></p>
                            <input type="text" name="tendanhmucsp" class="form-control" style="background-color: white;margin-top: -10px;">
                            <p style="margin-bottom: 16px;"><small>Tên riêng sẽ hiển thị trên trang mạng của bạn.</small></p>
                            
                            <p><small>Đường dẫn</small></p>
                            <input type="text" name="url" class="form-control" style="background-color: white;margin-top: -10px;">
                            <p><small>Chuỗi cho đường dẫn tĩnh là phiên bản của tên hợp chuẩn với Đường dẫn(URL).Chuỗi này bao gồm chữ cái thường, số và dấu gạch ngang (-).</small></p>
                            
                            <p><small>Kiểu danh mục</small></p>
                            <div style="margin-top: -10px;">
                                <select class="form-control show-tick" name="loaidanhmucsp">
                                    <option>Đăng ngay</option>
                                    <option>Chờ duyệt</option>
                                </select>
                            </div>
                            <p style="margin-bottom: 16px;"><small>Chuyên mục khác với thẻ,bạn có thể sử dụng nhiều cấp chuyên mục.Ví dụ:Trong chuyên mục nhạc,bạn có chuyên mục con là nhạc Pop,nhạc Jazz.Việc này hoàn toàn là tùy theo ý bạn.</small></p>
                            
                            <p><small>Mô tả</small></p>
                            <div class="form-group" style="margin-top: -10px;">
                                <div class="form-line">
                                    <textarea rows="4" name="motadanhmucsp" class="form-control no-resize" style="background-color: white;"></textarea>
                                </div>
                            </div>
                            <p style="margin-bottom: 16px; margin-top: -25px;"><small>Thông thường mô tả này không được sử dụng trong các giao diện,tuy nhiên có vài giao diện có thể hiển thị mô tả này.</small></p>
                            
                            <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-bottom: 40px">Thêm chuyên mục</button>
                        </div>

                        {{-- Right Side --}}
                        <div class ="col-md-12 col-lg-12 col-md-7 col-lg-7" >
                            
                            <div class="card" style="margin-top: 50px;">
                                <div class="header">
                                    <ul class="header-dropdown m-r--5">
                                        
                                    </ul>
                                </div>
                                <div class="body table-responsive" style="border: 1px solid #9E9E9E;">
                                    <table class="table table-bordered table-striped" style="margin-bottom: 0px;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên</th>
                                                <th>Mô tả</th>
                                                <th>Đường dẫn</th>
                                                <th>Thời gian</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><a href="#">none</a></td>
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
                            
                            <p style="margin-top: 20px;"><small>Xóa chuyên mục sẽ không xóa bài viết trong chuyên mục đó. Thay vì thế, bài viết sẽ được chuyển đến chuyên mục mặc định Chưa được phân loại. Chuyên mục mặc định không thể xóa.</small></p>
                            <p><small>Nhóm phân loại có thể được lựa chọn chuyển đổi thành thẻ đánh dấu với <a href="#"><u>công cụ chuyển đổi nhóm phân loại và thẻ đánh dấu.</u></a></small></p>
                        </div>
                    </div>
        
                    <div class="row clearfix">
                        <div class ="col-xs-12 col-sm-12 hidden-lg hidden-md">
                            <div class="form-line">
                                <input type="text" class="form-control" style="background-color: white;margin-left: -15px;margin-top: 10px;">
                                <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin:6px 0 10px -15px;">Tìm kiếm chuyên mục</button>
                                
                            </div>
                        </div>
                    </div>
                 
            </form>
                 
        </div>
    </section>
@stop
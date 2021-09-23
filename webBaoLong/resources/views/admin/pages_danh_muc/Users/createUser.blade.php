@extends('admin.layout.admin_master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header" style="margin-left: -15px;">
                <h2 style="padding-left: 0px;">Thêm người dùng mới</h2>
            </div>
            
            <div class="row clearfix">

                <div class ="col-xs-12 col-sm-12 col-md-8 col-lg-8" style="padding-left: 0px;">
                    <p style="margin-bottom: 16px;"><small>Tạo một người sử dụng mới và thêm vào trang mạng này.</small></p>
                    <div style="margin-left: -15px;">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label">
                            <label for="username"><small>Tên người dùng (bắt buộc)</small></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="username" class="form-control" style="background-color: white; border: 1px solid #9E9E9E; border-radius: 5px;">
                                </div>
                            </div>
                        </div>     
                    </div>
                    
                    
                    <div style="margin-left: -15px;">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label">
                            <label for="email"><small>Email (bắt buộc)</small></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="email" class="form-control" style="background-color: white; border: 1px solid #9E9E9E; border-radius: 5px;">
                                </div>
                            </div>
                        </div>     
                    </div>

                    <div style="margin-left: -15px;">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label">
                            <label for="name"><small>Tên</small></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="name" class="form-control" style="background-color: white; border: 1px solid #9E9E9E; border-radius: 5px;">
                                </div>
                            </div>
                        </div>     
                    </div>

                    <div style="margin-left: -15px;">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label">
                            <label for="surname"><small>Họ</small></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="surname" class="form-control" style="background-color: white; border: 1px solid #9E9E9E; border-radius: 5px;">
                                </div>
                            </div>
                        </div>     
                    </div>

                    <div style="margin-left: -15px;">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label">
                            <label for="nameweb"><small>Trang web</small></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nameweb" class="form-control" style="background-color: white; border: 1px solid #9E9E9E; border-radius: 5px;">
                                </div>
                            </div>
                        </div>     
                    </div>

                    <div style="margin-left: -15px;">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label">
                            <label><small>Ngôn ngữ</small></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick">
                                        <option>Trang web mặc định</option>
                                        <option>English (United State)</option>
                                        <option>Tiếng Việt</option>
                                    </select>
                                </div>
                            </div>
                        </div>     
                    </div>

                    <div style="margin-left: -15px;">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label">
                            <label for="password"><small>Mật khẩu</small></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                            <div class="form-group">
                                <div class="form-line">
                                    <button type="button" class="btn bg-blue btn-block btn-lg waves-effect" style="border-radius: 5px; margin-bottom: 9px;">Thêm chuyên mục</button>
                                    <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10" style="margin-left: -16px  ;">
                                        <input type="text" id="password" class="form-control" style="background-color: white; border: 1px solid #9E9E9E; border-radius: 5px;">
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                        <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: -1px 0px 0px -18px;">Ẩn đi</button>
                                    </div>
                                </div>
                            </div>
                        </div>     
                    </div>

                    <div style="margin-left: -15px;">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label">
                            <label for="announce"><small>Gửi thông báo đến thành viên</small></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="checkbox" id="basic_checkbox_2" class="filled-in" checked />
                                    <label for="basic_checkbox_2"><small>Gửi cho thành viên mới đăng ký một email chứa thông tin tài khoản của họ.</small></label>                                </div>
                            </div>
                        </div>     
                    </div>

                    <div style="margin-left: -15px;">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label">
                            <label><small>Vai trò</small></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick">
                                        <option>Thành viên đăng ký</option>
                                        <option>SEO Editor</option>
                                        <option>SEO Manager</option>
                                        <option>Translator</option>
                                        <option>Quản lý cửa hàng</option>
                                        <option>Quản lý</option>
                                        <option>Cộng tác viên</option>
                                        <option>Khách hàng</option>
                                        <option>Tác giả</option>
                                        <option>Biên tập viên</option>
                                    </select>
                                </div>
                            </div>
                        </div>     
                    </div>

                    <br>
                    <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-bottom: 40px;">Thêm chuyên mục</button>
                </div>
                
            </div>
        </div>
    </section>
        <!-- Latest compiled and minified CSS & JS -->
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>   
        
        {{-- // Bootstrap 3 --}}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@stop

@extends('admin.layout.admin_master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header" style="margin-left: -15px;">
                <h2 style="padding-left: 0px;">Hồ sơ</h2>
            </div>
            
            <div class="row clearfix">

                <div class ="col-xs-12 col-sm-12 col-md-8 col-lg-8" style="padding-left: 0px;">
                    <p style="margin-bottom: 16px;"><small>Cập nhật hồ sơ cá nhân.</small></p>
                    <div style="margin-left: -15px;">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label">
                            <label for="id"><small>ID</small></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="id" class="form-control" style="background-color: white; border: 1px solid #9E9E9E; border-radius: 5px;">
                                </div>
                            </div>
                        </div>     
                    </div>
                    
                    <div style="margin-left: -15px;">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label">
                            <label for="username"><small>Tên người dùng</small></label>
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
                            <label for="password"><small>Mật khẩu</small></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" id="password" class="form-control" style="background-color: white; border: 1px solid #9E9E9E; border-radius: 5px;">
                                </div>
                            </div>
                        </div>     
                    </div>

                    <div style="margin-left: -15px;">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label">
                            <label for="address"><small>Địa chỉ</small></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="address" class="form-control" style="background-color: white; border: 1px solid #9E9E9E; border-radius: 5px;">
                                </div>
                            </div>
                        </div>     
                    </div>

                    <div style="margin-left: -15px;">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label">
                            <label for="gender"><small>Giới tính</small></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input name="group1" type="radio" id="radio_1" checked />
                                    <label for="radio_1">Nam</label>
                                    <input name="group1" type="radio" id="radio_2" />
                                    <label for="radio_2">Nữ</label>
                                </div>
                            </div>
                        </div>     
                    </div>

                    <div style="margin-left: -15px;">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label">
                            <label for="phonenumber"><small>Số điện thoại</small></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="phonenumber" class="form-control" style="background-color: white; border: 1px solid #9E9E9E; border-radius: 5px;">
                                </div>
                            </div>
                        </div>     
                    </div>

                    <div style="margin-left: -15px;">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label">
                            <label for="avatar"><small>Ảnh đại diện</small></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;">
                                        <img alt="" src="https://secure.gravatar.com/avatar/5b9275cf2eb78fb26dd9d1c654eb87c7?s=96&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/5b9275cf2eb78fb26dd9d1c654eb87c7?s=192&amp;d=mm&amp;r=g 2x" class="avatar avatar-96 photo" height="96" width="96" loading="lazy">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;">
                                        <a href="#"><small><u>Cập nhật ảnh đại diện</u></small></a>
                                    </div>
                                </div>
                            </div>
                        </div>     
                    </div>

                    <br>
                    <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-bottom: 40px; margin-top: 20px;">Thêm hồ sơ</button>
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

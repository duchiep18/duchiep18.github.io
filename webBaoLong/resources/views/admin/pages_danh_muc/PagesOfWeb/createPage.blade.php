@extends('admin.layout.admin_master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <h1 style="text-align:center">Tạo thêm trang</h1>
                <form action="#" method="POST" role="form">
                    @csrf  
                    @method('post')
                    <br>
                    {{-- Left Side --}}
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <!-- CKEditor -->
                            <div class ="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 0px;">
                                <input type="text" class="form-control" name="title" placeholder="Thêm tiêu đề" style="width: 100%; height: 40px; background-color:white">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0; margin-top:15px">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            Nội dung trang
                                        </h2>
                                        <ul class="header-dropdown m-r--5">
                                            
                                        </ul>
                                    </div>
                                    <div class="body">
                                        <textarea id="content_post" name="content">
                                            
                                        </textarea>
                                    </div>
                                </div>
                            </div>  
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0;">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            Mô tả trang
                                        </h2>
                                        <ul class="header-dropdown m-r--5">
                                            
                                        </ul>
                                    </div>
                                    <div class="body">
                                        <textarea id="content_post" name="description" rows="20">
                                            
                                        </textarea>
                                    </div>
                                </div>
                            </div>  
                            <!-- #END# CKEditor --> 
                            <br>
                            
                        </div>
                        {{-- Right SIde --}}
                        {{-- <div class="col-md-4"> --}}
                         <!--#Đăng-->
                         <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="margin-top: 40px">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: -40px; padding: 0px 16px 6px 0px; float: right; height:400px;">
                                <div class="card" style="border: 1px solid #9E9E9E; border-radius: 10px;">
                                    <div class="header bg-cyan" style="border-radius: 10px 10px 0px 0px">
                                        <h2>
                                            Đăng
                                        </h2>
                                        <ul class="header-dropdown m-r--5">
                                            
                                        </ul>
                                    </div>
                                    <div class="body" style="height:280px ">
                                        <div>
                                            <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 5px 10px 0px 0; float: right">Xem thử</button>
                                        </div>
                                        <br>
                                        <div style="margin: 40px 10px 10px 10px">
                                            <p style="margin: 25px 0 10px">Hiển thị : <strong></strong> 
                                            <p style="margin: 25px 0 10px">Đăng : <strong></strong> 
                                        </div>
                                        <div>
                                            <hr style="height:2px;border-width:0;color:gray;background-color:gray; margin-top: 35px;">
                                            <button type="submit" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 5px 0 0px 10px; float: right">Đăng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Chuyên mục-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: -25px; padding: 0px 16px 6px 0px;">
                <div class="card" style="border: 1px solid #9E9E9E; border-radius: 10px">
                    <div class="header bg-cyan" style="border-radius: 10px 10px 0px 0px">
                        <h2>
                                Kiểu trang
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            
                        </ul>
                    </div>
                    <div class="body">
                        
                        <ul class="nav nav-tabs tab-nav-right" role="tablist" style="margin-left: 3px; margin-top: -2px;">
                            <li role="presentation" class="active"><a href="#home" data-toggle="tab">Tất cả chuyên mục</a></li>
                        </ul>

                        
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div style="margin:0 10px 10px 10px;">
                                    <br>
                                    <input type="checkbox" name="category_id" id="basic_checkbox_3" class="filled-in" />
                                    <label for="basic_checkbox_3">Tin tức</label>
                                </div>
                            </div>
                           
                            <hr style="height:2px;border-width:0;color:gray;background-color:gray;">
                            <div style="margin-left: 10px; margin-top: -10px;">
                                <a href="chuyenmuc.html"><u>+ Thêm chuyên mục</u></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        <!--Chuyên mục-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px; padding: 0px 16px 6px 0px;">
            <div class="card" style="border: 1px solid #9E9E9E; border-radius: 10px">
                <div class="header bg-cyan" style="border-radius: 10px 10px 0px 0px">
                    <h2>
                            Trạng thái 
                    </h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
            <div class="body">
                <ul class="nav nav-tabs tab-nav-right" role="tablist" style="margin-left: 3px; margin-top: -2px;">
                    <li role="presentation" class="active"><a href="#home" data-toggle="tab">Tất cả chuyên mục</a></li>
                </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home">
                    <div style="margin:0 10px 10px 10px;">
                        <input type="checkbox" name="status" id="basic_checkbox_2" class="filled-in"  />
                        <label for="basic_checkbox_2">#</label>
                    </div>
                </div>
                
                <hr style="height:2px;border-width:0;color:gray;background-color:gray;">
                <div style="margin-left: 10px; margin-top: -10px;">
                    <a href="chuyenmuc.html"><u>+ Thêm trạng thái</u></a>
                </div>
            </div>
    </div>
    </div>
    </div>
        
                       </div>
                    </div>
                    
                </form>
                
            </div>
    </section>
 @stop
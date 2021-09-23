@extends('admin.layout.admin_master')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2 style="font-size: 25px; margin-left: 15px!important;">Trang Chủ</h2>
        </div>
            <!-- Widgets -->
            <div class="row clearfix" style="margin: 0px 15px 0px 15px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-light-green" style="padding: 15px 10px 10px 0px; border-radius: 15px; overflow: hidden;">
                    <div class="title"><h2 style="padding-left: 15px;">Tổng Quan</h2></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding" >
                        <div class="info-box bg-light-green hover-expand-effect">
                            <div class="icon" style="display: inline-block;">
                                <i class="material-icons" style="font-size: 50px;">signal_cellular_alt</i>
                            </div>
                            <div class="content" style="display: inline-block;">
                                <div class="small-text">doanh thu </div>
                                <div class="text"><strong>6.000.000<u>đ</u></strong></div>
                                <div class="small-text">tháng này</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                        <div class="info-box bg-light-green hover-expand-effect">
                            <div class="icon" style="display: inline-block;">
                                <i class="material-icons" style="font-size: 45px;">thumb_up</i>
                            </div>
                            <div class="content" style="display: inline-block;">
                                <div class="small-text">sản phẩm</div>
                                <div class="text"><strong>Máy Bơm</strong></div>
                                <div class="small-text">bán chạy nhất tháng</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 nopadding">
                        <div class="info-box bg-light-green hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">pending</i>
                            </div>
                            <div class="content">
                                <div class="text"><strong>26 đơn hàng</strong></div>
                                <div class="small-text">đang chờ xử lý</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 nopadding">
                        <div class="info-box bg-light-green hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">remove_circle_outline</i>
                            </div>
                            <div class="content">
                                <div class="text"><strong>0 đơn hàng</strong></div>
                                <div class="small-text">đang tạm ngưng</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 nopadding">
                        <div class="info-box bg-light-green hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">report</i>
                            </div>
                            <div class="content">
                                <div class="text"><strong>0 sản phẩm</strong></div>
                                <div class="small-text">sắp hết hàng</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 nopadding">
                        <div class="info-box bg-light-green hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">cancel</i>
                            </div>
                            <div class="content">
                                <div class="text"><strong>16 sản phẩm</strong></div>
                                <div class="small-text">hết hàng</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>
            <div class="row1 clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body-left bg-cyan">
                            <div class="m-b--35 font-bold">TIN NHANH</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    #socialtrends
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                                <li>
                                    #materialdesign
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                                <li>#adminbsb</li>
                                <li>#freeadmintemplate</li>
                                <li>#bootstraptemplate</li>
                                <li>
                                    #freehtmltemplate
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            
                
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body-right bg-teal">
                            <div class="font-bold m-b--35">HOẠT ĐỘNG</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right"><b>12</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    YESTERDAY
                                    <span class="pull-right"><b>15</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right"><b>90</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST MONTH
                                    <span class="pull-right"><b>342</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST YEAR
                                    <span class="pull-right"><b>4 225</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    ALL
                                    <span class="pull-right"><b>8 752</b> <small>TICKETS</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body-left bg-cyan">
                            <div class="m-b--35 font-bold">TIN NHANH</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    #socialtrends
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                                <li>
                                    #materialdesign
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                                <li>#adminbsb</li>
                                <li>#freeadmintemplate</li>
                                <li>#bootstraptemplate</li>
                                <li>
                                    #freehtmltemplate
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
</section>

@stop
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | XuePC Admin Managment</title>
    <!-- Favicon-->
    <link rel="icon" href="/admin-frontend/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->

    <!-- Waves Effect Css -->
    <link href="/admin-frontend/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/admin-frontend/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="/admin-frontend/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="/admin-frontend/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="/admin-frontend/css/themes/all-themes.css" rel="stylesheet" />
    <!-- Bootstrap 4 css -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="#" class="bars"></a>
                <a class="navbar-brand" href="xuepc_admin">XUEPC Store - Quản lý trang Web</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="#" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="#">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="#" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="/admin-frontend/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Boss</div>
                    <div class="email">@gmail.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right ">
                            <li><a href="#"><i class="material-icons">person</i>Thông tin tài khoản</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="material-icons">group</i>Danh sách khách hàng</a></li>
                            <li><a href="#"><i class="material-icons">shopping_cart</i>Quản lý đơn hàng</a></li>
                            <li><a href="#"><i class="material-icons">star</i>Sản phẩm bán chạy</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="material-icons">input</i>Đăng xuất </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Danh mục quản lý</li>
                    <li>
                        <a href="xuepc_admin">
                            <i class="material-icons">home</i>
                            <span>Trang chủ</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-frontend/pages/typography.html">
                            <i class="material-icons">assessment</i>
                            <span>Bảng tin</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">fiber_new</i>
                            <span>Bài viết tin tức</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('news.index')}}" alt="">
                                    <span>Tất cả bài viết</span>
                                </a>
                               
                            </li>
                            <li>
                                <a href="{{route('news.create')}}" alt="">
                                    <span>Viết bài mới </span>
                                </a>
                               
                            </li>
                            <li>
                                <a href="#" alt="">
                                    <span>Chuyên mục tin tức </span>
                                </a>
                               
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">image</i>
                            <span>Media</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#" alt="">
                                    <span>Thư viện</span>
                                </a>
                               
                            </li>
                            <li>
                                <a href="#" alt="">
                                    <span>Tải lên </span>
                                </a>
                               
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">pages</i>
                            <span>Trang</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/admin-frontend/pages/ui/alerts.html">Danh sách các trang</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/ui/animations.html">Thêm Trang Mới</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                        <span class="material-icons">
                        inventory
                        </span> 
                        <span>Sản phẩm</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Tất cả sản phẩm</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/tables/jquery-datatable.html">Thêm mới sản phẩm</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/tables/editable-table.html">Danh mục sản phẩm</a>
                            </li>  

                            <li>
                                <a href="/admin-frontend/pages/tables/editable-table.html">Từ khóa</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/tables/editable-table.html">Thuộc tính</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/admin-frontend/pages/forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/forms/editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">people</i>
                            <span>Thành viên</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/admin-frontend/pages/medias/image-gallery.html">Danh sách người dùng</a>
                                <a href="/admin-frontend/pages/medias/image-gallery.html">Thêm thành viên</a>
                                <a href="/admin-frontend/pages/medias/image-gallery.html">Hồ sơ</a>
                            </li>
                          
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/admin-frontend/pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/admin-frontend/pages/examples/profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="#">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/admin-frontend/pages/changelogs.html">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a>
                    </li>
                    <li class="header">LABELS</li>
                    <li>
                        <a href="#">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 - 2021 <a href="#">XuePC Computer</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 0.0.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
            
    <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h1 style="text-align:center"> Danh sách Sản phẩm</h1> <br> <br>

                    <div class="form-group">
                            <label class="sr-only" for=""></label>
                            <input type="text" style="border=10" name="keywordsearch" value="{{ request()->input('keywordsearch') }}" class="form-control" id="" placeholder="Search something"> <br> 
                            <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                         <br> <br>
                        <a href="{{route('products.create')}}" class="btn btn-primary">Thêm sản phẩm mới</a> 
                    </form>
                    <br> 
                   <table class="table table-striped table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th> id </th>
                                <th> Tên sản phẩm </th>
                                <th> Thông tin sản phẩm </th>
                                <th> Giá sản phẩm </th>
                                <th> Ảnh sản phẩm </th>
                                <th> Trạng thái </th>
                                <th> created_at </th>
                                <th> updated_at </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $addproduct)
                            <tr>
                                <td> {{$addproduct->id}} </td>
                                <td> {{$addproduct->tensanpham}} </td>
                                <td> {{$addproduct->thongtinsanpham}} </td>
                                <td> {{$addproduct->giasanpham}} </td>
                                <td class="thumb column-thumb" data-colname="Ảnh"><a href="#"><img width="150" height="150" src="{{'$addproduct->image'}}" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy"  sizes="(max-width: 150px) 100vw, 150px"></a>
                                </td>                                
                                <td> {{$addproduct->trang_thai}} </td>
                                <td> {{$addproduct->created_at}} </td>
                                <td> {{$addproduct->updated_at}} </td>
                                <td> 
                                <a href="{{route('products.edit', $addproduct->id)}}" class="btn btn-primary">Edit</a> 
                                <form  action="#" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-delete" type="button">Delete</button>
                                </form>
                                
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

                   
                    <div style="padding-left:350px">
							{{$product->appends($_GET)}}      
						</div>
                </div>
            </div>
        </div>
       
    </section>

    <!--JS delete-form  -->
     <!-- <script>
		$(document).ready(function () {
			$('.btn-delete').click(function () {
				let isDelete = confirm('Sếp có muốn xóa bản ghi này hay không?');
				if (isDelete) {
					$(this).parents('form').submit();
				}
			});
		})
	</script> -->
    <!-- Latest compiled and minified JS -->
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

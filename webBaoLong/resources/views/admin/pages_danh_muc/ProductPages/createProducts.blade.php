@extends('admin.layout.admin_master')

@push('css')
    <!-- Bootstrap Tagsinput Css -->
    <link href="{{asset('admin-frontend/plugins/jQuery-tagEditor-master/jquery.tag-editor.css')}}" rel="stylesheet">
@endpush

@section('content')

<section class="content">
        <div class="container-fluid">
            <h1 style="text-align:center">Tạo sản phẩm mới</h1> <br><br>
                    <form action="{{route('products.storeData')}}" method="POST" role="form">
                        @csrf
                        @method('post')
                        {{-- Left Side --}}
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <!-- CKEditor -->
                            <div class ="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 0px;">
                                <input type="text" class="form-control" name="name_products" id="name" onkeyup="ChangeToSlug();" placeholder="Tên sản phẩm" style="width: 100%; height: 40px; background-color:white">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0; padding-top:20px">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            Thông số chi tiết
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
                                            Mô tả sản phẩm
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
                            {{-- Product Price --}}
                            <div class ="col-xs-12 col-sm-12 col-md-5 col-lg-5"  style="padding-left:0" >
                                <p>Giá sản phẩm:</p>
                                <input type="text" name="price" class="form-control" style="background-color: white;margin-top: -10px;">
                            </div>
                            <br>
                            <div class ="col-xs-12 col-sm-12 col-md-5 col-lg-5" style="padding-left:50px" >
                                <p>Giá khuyến mãi:</p>
                                <input type="text" name="price_sale" class="form-control" style="background-color: white;margin-top: -10px;">
                            </div>
                            <br>
                            {{-- URL sản phẩm --}}
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 25px; padding: 0px 16px 6px 0px;">
                                <div class ="col-xs-12 col-sm-12 col-md-5 col-lg-5"  style="padding-left:0" >
                                    <p>Url sản phẩm:</p>
                                    <input type="text" name="url_prd" id="slug" class="form-control" style="background-color: white;margin-top: -10px;">
                                </div>
                            </div>
                            <br>
                            <!--Ảnh đại diện-->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 25px; padding: 0px 16px 6px 0px;">
                                <div class="card" style="border: 1px solid #9E9E9E; border-radius: 10px">
                                    <div class="header bg-cyan" style="border-radius: 10px 10px 0px 0px">
                                        <h2>
                                            Ảnh đại diện
                                        </h2>
                                    </div>
                                    <div class="body" style="height:fit-content">
                                        <div style="">
                                            <input type="text" class="form-control" name="image" id="image">
                                            <br>
                                            <img src="" alt="" id="show_image" style="height:250px; width:250px; margin-bottom: 10px">
                                            <br>
                                            <span>
                                                <a href="#modal-file" data-toggle="modal" class="btn btn-primary">Chọn ảnh</a>
                                            </span>
                                        </div>
                                        <br> <br><br>
                                    </div>
                                </div>
                                <br>
                                <div class="card" style="border: 1px solid #9E9E9E; border-radius: 10px">
                                    <div class="header bg-cyan" style="border-radius: 10px 10px 0px 0px">
                                        <h2>
                                            List ảnh sản phẩm
                                        </h2>
                                    </div>
                                    <div class="body" style="height:fit-content">
                                        <div style="">
                                            <input type="text" class="form-control" name="image_list" id="image_list">
                                            <br>
                                            <div class="row" id="show_image_list">

                                            </div>
                                            <span>
                                                <a href="#modal-list-image" data-toggle="modal" class="btn btn-primary">Chọn ảnh</a>
                                            </span>
                                        </div>
                                        <br> <br><br>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        {{-- End Image --}}
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
                                            <button type="submit" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 5px 0 0px 10px; float: right">Thêm sản phẩm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Chuyên mục-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px; padding: 0px 16px 6px 0px;">
                            <div class="card" style="border: 1px solid #9E9E9E; border-radius: 10px">
                                <div class="header bg-cyan" style="border-radius: 10px 10px 0px 0px">
                                    <h2>
                                            Danh mục sản phẩm
                                    </h2>

                                </div>
                                <div class="body">

                                    <ul class="nav nav-tabs tab-nav-right" role="tablist" style="margin-left: 3px; margin-top: -2px;">
                                        <li role="presentation" class="active"><a href="#home" data-toggle="tab">Tất cả danh mục</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <div style="margin:0 10px 10px 10px;">
                                                <br>
                                                <select name="categories_prd" id="input" class="form-control" required="required">
                                                    <option value="category_prd_id">Chọn danh mục</option>
                                                    @foreach($categories_prd as $category_prd)
                                                        <option value="{{$category_prd->id}}">{{$category_prd->product_categories_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Thẻ-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px; padding: 0px 16px 6px 0px;">
                            <div class="card" style="border: 1px solid #9E9E9E; border-radius: 10px">
                                <div class="header bg-cyan" style="border-radius: 10px 10px 0px 0px">
                                    <h2>
                                        Từ khóa sản phẩm
                                    </h2>

                                </div>
                            <div class="body">
                                <div style="margin: 10px">
                                    <input type="text" id="tags" name="tags_prd" class="form-control">
                                    <br>
                                    <p>Phân cách các thẻ bằng dấu phẩy (,).</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!--Chuyên mục-->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                 style="margin-top: -25px; padding: 0px 16px 6px 0px;">
                                <div class="card" style="border: 1px solid #9E9E9E; border-radius: 10px">
                                    <div class="header bg-cyan" style="border-radius: 10px 10px 0px 0px">
                                        <h2>
                                            Trạng thái
                                        </h2>
                                    </div>
                                    <div class="body">

                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <div style="margin:0 10px 10px 10px;">
                                                    <input type="checkbox" name="status" value="Còn hàng"
                                                           id="basic_checkbox_1" class="filled-in"/>
                                                    <label for="basic_checkbox_1">Còn hàng</label>
                                                </div>
                                                <div style="margin:0 10px 10px 10px;">
                                                    <input type="checkbox" name="status" value="Hết hàng"
                                                           id="basic_checkbox_2" class="filled-in"/>
                                                    <label for="basic_checkbox_2">Hết hàng</label>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
        </form>
    </div>

</section>

@stop()

@section('js')

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="{{asset('admin-frontend/plugins/jQuery-tagEditor-master/jquery.tag-editor.min.js')}}"></script>
    <script>
        $('#tags').tagEditor({ initialTags: $(this).attr("data-json"),
            placeholder: 'Thêm từ khóa' });
    </script>

    <!-- Modal Ava -->
    <div class="modal fade" id="modal-file" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
         aria-hidden="true">
        <div class="modal-dialog" style="width:80%" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thư viện ảnh</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe
                        src="http://localhost:8000/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&akey=webBLTuanAnh&fldr=&field_id=image"
                        frameborder="18" style="width:100%; height:900px; "></iframe>

                </div>

            </div>
        </div>
    </div>

    <!-- Modal List  img -->
    <div class="modal fade" id="modal-list-image" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
         aria-hidden="true">
        <div class="modal-dialog" style="width:80%" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thư viện ảnh</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe
                        src="http://localhost:8000/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&akey=webBLTuanAnh&fldr=&field_id=image_list"
                        frameborder="18" style="width:100%; height:900px; "></iframe>

                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#modal-file').on('hide.bs.modal', function () {
            var _img = $('input#image').val();
            $('img#show_image').attr('src', _img);
        });

        $('#modal-list-image').on('hide.bs.modal', function () {
            var _imgs = $('input#image_list').val();
            var img_list = $.parseJSON(_imgs);
            var _html='';
            for (var i = 0; i < img_list.length; i++) {
                _html += '<div class="col-md-3 thumbnail">';
                    _html += '<img src="'+img_list[i]+'" alt="">';
                _html += '</div>';
            }
            $('#show_image_list').html(_html);
        });
    </script>

<script>
function ChangeToSlug()
{
    var name, slug;

    //Lấy text từ thẻ input title
    name = document.getElementById("name").value;

    //Đổi chữ hoa thành chữ thường
    slug = name.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, " - ");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value = slug;
}
</script>
@stop()

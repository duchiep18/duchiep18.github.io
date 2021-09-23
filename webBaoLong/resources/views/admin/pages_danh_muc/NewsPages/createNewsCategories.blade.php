@extends('admin.layout.admin_master')

<!-- Bootstrap Select Css -->
@push('css')
 <link href="../admin-frontend/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
@endpush

@section('content')

<section class="content">
        <div class="container-fluild">
            <h2 style="text-align:center">Chuyên mục tin tức - bài viết></h2>
                 <form action="{{route('news.storeCategories')}}" method="POST" role="form">
                        @csrf
                        @method('post')
                        <br><br><br>
                        {{-- Left Side --}}
                        <div class="row">
                            <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11" style="float:left; margin-top:20px;">
                                <div class="form-line hidden-sm hidden-xs" style="padding-left: 50px;">
                                    <button type="button" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin: 0 0 10px 10px;float:right">Tìm kiếm chuyên mục</button>
                                    <input type="text" class="form-control" style="width: 40%; display: inline; float: right; background-color: white;">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">

                            <div class ="col-xs-12 col-sm-12 col-md-5 col-lg-5" >
                                <p><b>Thêm chuyên mục</b></p>
                                <p><small>Tên</small></p>
                                <input type="text" name="name_categories" class="form-control" id="name" onkeyup="ChangeToSlug()" style="background-color: white;margin-top: -10px;">
                                <p style="margin-bottom: 16px;"><small>Tên riêng sẽ hiển thị trên trang mạng của bạn.</small></p>

                                <p><small>Đường dẫn</small></p>
                                <input type="text" name="url_cat" id="slug" class="form-control" style="background-color: white;margin-top: -10px;">
                                <p><small>Chuỗi cho đường dẫn tĩnh là phiên bản của tên hợp chuẩn với Đường dẫn(URL).Chuỗi này bao gồm chữ cái thường, số và dấu gạch ngang (-).</small></p>

                                <p><small>Chuyên mục cha</small></p>
                                <div style="margin-top: -10px;">
                                    <select class="form-control show-tick" name="type_cat">
                                        <option>-- Trống --</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->news_categories_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <p style="margin-bottom: 16px;"><small>Chuyên mục khác với thẻ,bạn có thể sử dụng nhiều cấp chuyên mục.Ví dụ:Trong chuyên mục nhạc,bạn có chuyên mục con là nhạc Pop,nhạc Jazz.Việc này hoàn toàn là tùy theo ý bạn.</small></p>

                                <p><small>Mô tả</small></p>
                                <div class="form-group" style="margin-top: -10px;">
                                    <div class="form-line">
                                        <textarea rows="4" name="desc_cat" class="form-control no-resize" style="background-color: white;"></textarea>
                                    </div>
                                </div>
                                <p style="margin-bottom: 16px; margin-top: -25px;"><small>Thông thường mô tả này không được sử dụng trong các giao diện,tuy nhiên có vài giao diện có thể hiển thị mô tả này.</small></p>

                                <button type="submit" class="btn bg-blue btn-lg waves-effect" style="border-radius: 5px; margin-bottom: 40px">Thêm chuyên mục</button>
                            </div>
                 </form>

                             {{-- Right Side --}}
                            <div class ="col-md-12 col-lg-12 col-md-7 col-lg-7" style="margin-top: 25px;" >

                                <div class="card" style="margin-top: 25px;">
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
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td> {{$category->id}} </td>
                                                    <td> {{$category->news_categories_name}} </td>
                                                    <td> {{$category->news_categories_desc}} </td>
                                                    <td>
                                                        {{$category->url_cat}}
                                                    </td>
                                                    <td> {{$category->created_at}} </td>

                                                    <td>
                                                        <a href="{{route('news.edit', $category->id)}}" class="btn btn-primary">Edit</a>
                                                        <form class="" action="{{route('news.destroy', $category->id)}}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger btn-delete" type="submit">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

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

                </div>

            </div>

        </div>
    <!-- JS Delete button-->
    <script src="//code.jquery.com/jquery.js"></script>

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
    </section>
@stop
@section('js')

    <script>
        function ChangeToSlug() {
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

@stop

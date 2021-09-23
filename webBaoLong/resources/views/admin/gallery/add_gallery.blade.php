@extends('admin.layout.admin_master')

@section('content')

<section class="content">
        <div class="box-body">
            <h2 style="text-align: center">Thư viện ảnh</h2>
            <br>
            <br>
            <iframe
                src="http://localhost:8000/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&akey=webBLTuanAnh&fldr="
                frameborder="18" style="width:100%; height:900px; "></iframe>

        </div>

</section>


@stop

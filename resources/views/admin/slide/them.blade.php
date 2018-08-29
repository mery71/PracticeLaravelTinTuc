@extends('admin.layout.index')
@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                 @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $value)
                    {{ $value }}<br>
                    @endforeach
                </div>
                @endif
                 @if(session('thongbao'))
                <div class="alert alert-success">
                    {{ session('thongbao') }}
                </div>
                @endif
                <form action="admin/slide/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Tên</label>
                        <input class="form-control" name="Ten" placeholder="Nhập tên slide" />
                    </div>

                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="demo" class="form-control ckeditor" rows="3" name="NoiDung"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Link</label>
                        <input class="form-control" name="link" placeholder="Nhập link" />
                    </div>

                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="Hinh" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

        @endsection
        @section('script')
        <script>
            $(document).ready(function(){
                $("#TheLoai").change(function(){
                    var idTheLoai = $(this).val();
                    $.get('admin/ajax/loaitin/'+idTheLoai, function(data){
                        $('#LoaiTin').html(data);
                    });
                });
            });
        </script>
        @endsection
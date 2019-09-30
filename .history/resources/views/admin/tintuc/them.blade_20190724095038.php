@extends('admin.layout.index')
@section('content')
<div id="wrapper">

  

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tin Tức
                        <small>Add</small>
                    </h1>

                    @if (session('thanhcong'))
                <div class="alert alert-success">{{session('thanhcong')}}</div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="admin/tintuc/them" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value={{@csrf_token()}}>
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" name="Tieude" placeholder="Please Enter Category Keywords" />
                        </div>
                        <div class="form-group">
                            <label>Tóm Tắt</label>
                            <textarea name="tomtat "class="form-control ckeditor" rows="3"id="demo"></textarea>
                        </div>
                        <div class="form-group">
                            <label >Hình Ảnh</label>
                            <input type="file" name="hinh" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Nội dung </label>
                            <textarea name="noidung" class="form-control ckeditor" rows="2"id="demo"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Nổi bật</label>
                            <select class="form-control" name="noibat">
                                <option value="0">không </option>
                                <option value="">Có</option>
                            </select>
                        </div>
              
                        <button type="submit" class="btn btn-default"> Add</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
@endsection

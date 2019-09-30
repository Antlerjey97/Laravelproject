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
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Category Parent</label>
                            <select class="form-control">
                                <option value="0">Please Choose Category</option>
                                <option value="">Tin Tức</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Category Name</label>
                            <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" />
                        </div>
                        
                        <div class="form-group">
                            <label>Category Order</label>
                            <input class="form-control" name="txtOrder" placeholder="Please Enter Category Order" />
                        </div>
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" name="Tieude" placeholder="Please Enter Category Keywords" />
                        </div>
                        <div class="form-group">
                            <label>Tóm Tắt</label>
                            <textarea name="tomtat "class="form-control ckeditor" rows="3"id="demo"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Nội dung </label>
                            <textarea name="noidung" class="form-control ckeditor" rows="2"id="demo"></textarea>
                        </div>
                     
                        <button type="submit" class="btn btn-default">Category Add</button>
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

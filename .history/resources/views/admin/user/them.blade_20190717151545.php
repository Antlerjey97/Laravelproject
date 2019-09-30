@extends('admin.layout.index')
@section('content')
<div id="wrapper">

  
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="" method="POST">
                        
                    <input type="hidden" name="_Token"{{csrf_token()}}/>
                    {{csrf_field()}}
                        <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" name="name" placeholder=" Name" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" name="password" placeholder="Password" />
                        </div>
                        {{-- <div class="form-group">
                            <label>Category Description</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div> --}}
                        {{-- <div class="form-group">
                                <label>Status</label>
                                <select class="form-control">
                                    <option value="0">Admin</option>
                                    <option value="1">User</option>
                                </select>
                            </div> --}}
                        <div class="form-group">
                            <label> Status</label>
                            <label class="radio-inline">
                                <input name="rdoStatus" value="1" checked="" type="radio">Admin
                            </label>
                            <label class="radio-inline">
                                <input name="rdoStatus" value="2" type="radio">User
                            </label>
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

@extends('admin.layout.index')
@section('content')


 
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thể loại
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if (count($errors)>0)
                        <div class='alert alert-danger'>
                            @foreach ($errors->all() as $item)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @else
                        
                    @endif

                    @if(session('thongbao'))
                    <div class='alert alert-success'>
                        {{session('thongbao')}}
                    </div>
                    @endif

                <form action="admin/theloai/them" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name= "_Token"value="{{csrf_token()}}"/> 
                       
                        
                        <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" name="ten" placeholder=" Nhập Tên" />
                        </div>
                        <div class="form-group">
                            <label>Tên Không Dấu</label>
                            <input class="form-control" name="tenkhongdau" placeholder="Nhập Tên Không Dấu" />
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


@endsection

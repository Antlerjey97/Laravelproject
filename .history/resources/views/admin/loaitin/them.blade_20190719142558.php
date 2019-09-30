@extends('admin.layout.index')
@section('content')


 
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Loại tin
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if (count($errors)>0)
                        <div class='alert alert-danger'>
                            @foreach ($errors->all() as $item)
                                {{$item}}<br>
                            @endforeach
                        </div>
                    @else
                        
                    @endif

                    @if(session('thongbao'))
                    <div class='alert alert-success'>
                        {{session('thongbao')}}
                    </div>
                    @endif

                <form action="admin/loaitin/them" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name= "_Token"value="{{csrf_token()}}"/> 
                       
                    <div class="form-group">
                            <label>Tên Thể loại</label>
                            <select class="form-control" name="id"id="theloai">
                         @foreach ($theloai as $iteam)
                            <option value="{{$iteam->id}}">{{$iteam->Ten}}</option>
                                @endforeach
                               
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên Loại Tin</label>
                            <select class="form-control" name="idtheloai" id="loaitin">
                         @foreach ($loaitin as $iteam)
                            <option value="{{$iteam->id}}">{{$iteam->Ten}}</option>
                                @endforeach
                               
                                
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Tên Loại tin</label>
                            <input class="form-control" name="ten" placeholder=" Nhập Tên" />
                        </div>
                        <div class="form-group">
                                <label>Tên Không dấu</label>
                                <input class="form-control" name="tenkhongdau" placeholder=" Nhập Tên" />
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
@section('script')
    <script>
    $(document).ready(function(){
        alert('Đã chạy được')
    });
    </script>
@endsection

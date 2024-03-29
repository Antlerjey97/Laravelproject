@extends('admin.layout.index')

@section('content')
    <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Loại Tin
                    <small>Danh sách</small>
                </h1>
                @if (session('thongbao'))
        <div class="alert alert-success">{{session('thongbao')}}</div>
            @endif
            </div>
            
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên </th>
                        <th>Tên Không Dấu</th>
                        <th>Têm thể loại</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loaitin as $loaitin)
                        
                
                    <tr class="odd gradeX" align="center">
                        <td>{{$loaitin->id}}</td>
                        <td>{{$loaitin->Ten}}</td>
                        <td>{{$loaitin->TenKhongDau}}</td>
                         <td>{{$loaitin->theloai}}</td>
                       
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/loaitin/xoa/{{$loaitin->id}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loaitin/sua/{{$loaitin->id}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

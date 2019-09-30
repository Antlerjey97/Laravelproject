@extends('admin.layout.index')

@section('content')
    <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin Tức
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tiêu Đề</th>
                        <th>Tiêu đề không dấu</th>
                        <th>Tóm tắt </th>
                        <th>Nội dung </th>
                        <th> Hình</th>
                        <th>Edit</th>
                        <th>Add</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tintuc as $tin)
                    <tr class="odd gradeX" align="center">
                            <td>{{$tin->id}}</td>
                                <td>{{$tin->TieuDe}}</td>
                                <td>{{$tin->TieuDeKhongDau}}</td>
                                <td>{{$tin->TomTat}}</td>
                                 <td>{{$tin->NoiDung}}</td>
                                 <td>{{$tin->Hinh}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/tintuc/sua"> edit</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/tintuc/them">add</a></td>
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

@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dịch Vụ
                <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if (session('thongbao'))
            <div class="alert alert-danger">
                {{session('thongbao')}}
            </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Id</th>
                        <th>Tên dịch vụ</th>
                        <th>Tóm tắt</th>
                        <th>Nội dung</th>
                        <th>Ảnh</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dichvu as $dv)
                    <tr class="odd gradeX" align="center">
                        <td>{{$dv->id}}</td>
                        <td>{{$dv->tendv}}</td>
                        <td>{{$dv->tomtat}}</td>
                        <td>{{$dv->noidung}}</td>
                        <td> <img with="50px" height="40px" src="upload/{{$dv->img}}" ></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/dichvu/xoa/{{$dv->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/dichvu/sua/{{$dv->id}}">Edit</a></td>
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
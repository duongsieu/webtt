@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<style>
    .pagination{
        margin-left: 280px;
    }
</style>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if (session('thongbao'))
            <div class="alert alert-danger">
                {{session('thongbao')}}
            </div>
            @endif
              @if (session('thongbaoxoa'))
            <div class="alert alert-danger">
                {{session('thongbaoxoa')}}
            </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Id</th>
                        <th>Hình</th>
                        <th>Id_sanpham</th>
                        <th>Id_tintuc</th>
                        <th>Id_dichvu</th>
                        <th>Chủ đề</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($image as $img)
                    <tr class="odd gradeX" align="center">
                        <td>{{$img->id}}</td>
                        <td><img with="50px" height="40px" src="upload/{{$img->img}}" ></td>
                        <td>{{$img->id_sanpham}}</td>
                        <td>{{$img->id_tintuc}}</td>
                        <td>{{$img->id_dichvu}}</td>
                        <td>{{$img->chude}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/images/xoa/{{$img->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/images/sua/{{$img->id}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!!$image->links()!!}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
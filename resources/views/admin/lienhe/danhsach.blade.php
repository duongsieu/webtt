@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Liên hệ
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
                        <th>Tên</th>
                        <th>Sdt</th>
                        <th>Nội dung</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lienhe as $lh)
                    <tr class="odd gradeX" align="center">
                        <td>{{$lh->id}}</td>
                        <td>{{$lh->ten}}</td>
                        <td>{{$lh->sdt}}</td>
                        <td>{{$lh->noidung}}</td>
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
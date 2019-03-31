@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Id_Bill</th>
                         <th>Tên sản phẩm</th>
                              <th>Hình ảnh</th>
                        <th>Đơn gía</th>
                        <th>Số lượng</th>



                    </tr>
                </thead>
                <tbody>
                    @foreach($danhsachchitiet as $cthd)
                    <tr class="odd gradeX" align="center">
                        <td>{{$cthd->id_bill}}</td>
                        <td>{{$cthd->sanpham->name}}</td>
                        <td><img width="50px" height="50px" src="upload/{{$cthd->sanpham->img}}" alt=""></td>
                        <td>{{$cthd->unit_price}}</td>
                        <td>{{$cthd->soluong}}</td>
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
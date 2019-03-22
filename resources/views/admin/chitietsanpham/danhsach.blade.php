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
                        <th>Tên sản phẩm</th>
                        <th>Khối lượng bản thân</th>
                        <th>Dài x Rộng x Cao</th>
                        <th>Khoảng cách trục bánh xe</th>
                        <th>Độ cao yên</th>
                        <th>Khoảng sáng gầm xe</th>
                        <th>Dung tích bình xăng</th>
                        <th>Kích cở lốp trướ/sau</th>
                        <th>Công suất tối đa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($chitietsanpham as $ctsp)
                    <tr class="odd gradeX" align="center">
                        <td>{{$ctsp->sanpham->name}}</td>
                        <td>{{$ctsp->khoiluong}}</td>
                        <td>{{$ctsp->kichthuoc}}</td>
                        <td>{{$ctsp->trucbanhxe}}</td>
                        <td>{{$ctsp->docaiyen}}</td>
                        <td>{{$ctsp->sanggamxe}}</td>
                        <td>{{$ctsp->binhxang}}</td>
                        <td>{{$ctsp->lopxe}}</td>
                        <td>{{$ctsp->congsuattoida}}</td>
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
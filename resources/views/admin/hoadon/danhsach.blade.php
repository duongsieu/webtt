@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hóa đơn
                <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Id</th>
                        <th>Tên khách</th>
                        <th>Ngay</th>
                        <th>Tổng hóa đơn</th>
                        <th>Ghi chú</th>
                        <th>Trạng thái</th>
                        <th>Hình thức thanh toán</th>
                        <th>Chi tiết</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($hoadon as $hd)
                    <tr class="odd gradeX" align="center">
                        {{-- <td>{{$hd->user->id}}</td> --}}
                        <td>{{$hd->id}}</td>
                        <td>{{$hd->user->name}}</td>
                        <td>{{$hd->ngay}}</td>
                        <td>{{$hd->tonghoadon}}</td>
                        <td>{{$hd->note}}</td>
                        <td>{{$hd->status}}</td>
                        <td>{{$hd->hinhthuocthanhtoan}}</td>
                        <td>
                            <form action="admin/chitiethoadon/danhsach/{{$hd->id}}" method="GET">

                                <button type="submit" class="btn btn-default">Chi tiết</button>
                            </form>
                        </td>

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
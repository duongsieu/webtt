@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<style>
    .pagination{
        margin-left: 350px;
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
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Id</th>
                        <th>Tên sản phẩm</th>
                        <th>Gía</th>
                        <th>Số lượng</th>

                        <th>Mô tả</th>
                        <th>Tên thể loại</th>
                        <th>Nổi bật</th>
                        <th>Chi tiết</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sanpham as $sp)
                    <tr class="odd gradeX" align="center">
                        <td>{{$sp->id}}</td>
                        <td>{{$sp->name}}</td>
                        <td>{{$sp->price}}</td>
                        <td>{{$sp->amount}}</td>

                        <td>{{$sp->description}}</td>
                        <td>{{$sp->theloai->name}}</td>
                        <td>{{$sp->noibat}}</td>
                        <td>
                            <form action="admin/chitietsanpham/danhsach/{{$sp->id}}" method="GET">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                <button type="submit" class="btn btn-default">Chi tiết</button>
                            </form>
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/xoa/{{$sp->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sanpham/sua/{{$sp->id}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          {!!$sanpham->links()!!}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
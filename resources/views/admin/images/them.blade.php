@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if (count($errors ) > 0 )
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}}<br>
                    @endforeach
                </div>
                @endif
                @if (session('thongbao'))
                <div class="alert alert-danger">
                    {{session('thongbao')}}
                </div>
                @endif
                <form action="admin/images/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />

                   <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="img" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Id_sanpham</label>
                        <input class="form-control" name="id_sanpham" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Id_tintuc</label>
                        <input class="form-control" name="id_tintuc" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Id_dichvu</label>
                        <input class="form-control" name="id_dichvu" placeholder="" />
                    </div>
                     <div class="form-group">
                        <label>Chủ đề</label>
                        <input class="form-control" name="chude" placeholder="" />
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <form>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endsection
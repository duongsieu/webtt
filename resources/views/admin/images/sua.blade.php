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
                <form action="admin/images/sua/{{$image->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />

                   <div class="form-group">
                        <label>Hình ảnh</label>
                        <img width="50px" height="50px" src="upload/{{$image->img}}" alt="">
                        <input type="file" name="img" class="form-control" value="{{$image->img}}" />
                    </div>
                    <div class="form-group">
                        <label>Id_sanpham</label>
                        <input class="form-control" name="id_sanpham" placeholder="" value="{{$image->id_sanpham}}" />
                    </div>
                    <div class="form-group">
                        <label>Id_tintuc</label>
                        <input class="form-control" name="id_tintuc" placeholder="" value="{{$image->id_tintuc}}" />
                    </div>
                    <div class="form-group">
                        <label>Id_dichvu</label>
                        <input class="form-control" name="id_dichvu" placeholder="" value="{{$image->id_dichvu}}" />
                    </div>
                       <div class="form-group">
                        <label>Chủ đề</label>
                        <input class="form-control" name="chude" placeholder="" value="{{$image->chude}}" />
                    </div>

                    <button type="submit" class="btn btn-default">Sửa</button>
                    <form>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endsection
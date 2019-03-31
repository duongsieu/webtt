@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                <small>{{$tintuc->tieude}}</small>
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
                <form action="admin/tintuc/sua/{{$tintuc->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" name="name" placeholder="" value="{{$tintuc->tieude}}" />
                    </div>
                    <div class="form-group">
                        <label>Tóm tắt</label>
                        <textarea id="demo" name="description" class="form-control ckeditor" rows="3">
                        {{$tintuc->tomtat}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="demo" name="description" class="form-control ckeditor" rows="3">
                        {{$tintuc->noidung}}
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    {{--    <button type="reset" class="btn btn-default">Reset</button> --}}
                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endsection
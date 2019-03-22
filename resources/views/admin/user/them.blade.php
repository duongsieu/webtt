@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/user/them" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Sdt</label>
                        <input class="form-control" name="sdt" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <input class="form-control" name="role" placeholder="" />
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    {{-- <button type="reset" class="btn btn-default">Reset</button> --}}
                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endsection
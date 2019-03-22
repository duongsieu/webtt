@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>{{$user->name}}</small>
                        </h1>
                    </div>
                    @if (session('thongbao'))
                        <div class="alert alert-danger">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                      <form action="admin/user/sua/{{$user->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="" value="{{$user->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="" value="{{$user->email}}" />
                            </div>
                            <div class="form-group">
                                <label>Sdt</label>
                                <input class="form-control" name="sdt" placeholder="" value="{{$user->sdt}}" />
                            </div>
                             <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" name="password" placeholder="" value="{{$user->password}}" />
                            </div>
                             <div class="form-group">
                                <label>Role</label>
                                <input class="form-control" name="role" placeholder="" value="{{$user->role}}" />
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
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
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
                <form action="admin/sanpham/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>Thể loại</label>
                        <select class="form-control" name="TheLoai">
                            @foreach($theloai as $tl)
                            <option value="{{$tl->id}}">{{$tl->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên Sản phẩm</label>
                        <input class="form-control" name="name" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Gía</label>
                        <input class="form-control" name="price" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Số Lượng</label>
                        <input class="form-control" name="amount" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Nổi bật</label>
                        <input class="form-control" name="noibat" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea id="demo" name="description" class="form-control ckeditor" rows="3"></textarea>
                    </div>
                    <h3 class="page-header">Chi tiết sản phẩm</h3>
                    <div class="form-group">
                        <label>Khối lượng bản thân</label>
                        <input class="form-control" name="khoiluong" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Dài x Rộng x Cao</label>
                        <input class="form-control" name="kichthuoc" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Khoảng cách trục bánh xe</label>
                        <input class="form-control" name="trucbanhxe" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Độ cao yên</label>
                        <input class="form-control" name="docaiyen" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Khoảng sáng gầm xe </label>
                        <input class="form-control" name="sanggamxe" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Dung tích bình xăng</label>
                        <input class="form-control" name="binhxang" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Kích cở lốp trướ/sau</label>
                        <input class="form-control" name="lopxe" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Công suất tối đa</label>
                        <input class="form-control" name="congsuattoida" placeholder="" />
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    {{-- <button type="reset" class="btn btn-default">Reset</button> --}}
                    <form>
                        {{-- <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="POST" />
                            <div class="mb-3 d-flex flex-column">
                                <lable> Name </lable>
                                <input type="text" id="name" placeholder="Name" name="name">
                            </div>
                            <div class="mb-3 d-flex flex-column">
                                <lable> Producttype_id </lable>
                                <input type="text" id="producttype_id" placeholder="Producttype_id" name="producttype_id">
                            </div>
                            <div class="mb-3 d-flex flex-column">
                                <lable> Description </lable>
                                <textarea id="editor1" name="description"></textarea>
                            </div>
                            <div class="mb-3 d-flex flex-column">
                                <lable> Price </lable>
                                <input type="text" id="price" placeholder="Price" name="price">
                            </div>
                            <div class="mb-3 d-flex flex-column">
                                <lable> Promotion_price </lable>
                                <input type="text" id="promotion_price" placeholder="Promotion_price" name="promotion_price">
                            </div>
                            <div class="mb-3 d-flex flex-column">
                                <lable> Image </lable>
                                <input type="file" id="image" name="image" class="form-control">
                            </div>
                            <div class="mb-3 d-flex flex-column">
                                <lable> Unit </lable>
                                <input type="text" id="unit" placeholder="Unit" name="unit">
                            </div>
                            <div class="mb-3 d-flex flex-column">
                                <lable> New </lable>
                                <input type="text" id="new" placeholder="New" name="new">
                            </div>
                            <div class="mb-3 d-flex flex-column">
                                <lable> <b> Status </b></lable>
                                <lable class="radio-inline">
                                <input type="radio" id="status" name="status" value="Còn" checked=""> Còn
                                </lable>
                                <lable class="radio-inline">
                                <input type="radio" id="status" name="status" value="Hết" checked=""> Hết
                                </lable>
                            </div>
                            <div>
                                <button type="submit"> CREATE
                                </button>
                            </div>

                        </form>   --}}
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endsection
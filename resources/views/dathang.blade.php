<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="ostacor">
        <meta name="keywords" content="HTML5,CSS3,Bootstrap,JavaScript,jquery">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Shop</title>
        <base href="{{asset('')}}">
        <!-- Google Font and font-awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Exo+2:100,200,300,400,400i,500,600,700" rel="stylesheet">
        <!-- bootstrap -->
        <link href="Style/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS: custom Styles -->
        <link href="Style/css/animate.css" rel="stylesheet">
        <link href="Style/css/main.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .Bill_form-block{
                height: 50px;
                margin-left: 20px;
        margin-top: 20px;
            }
            .lable-form{
                    float: left;
        line-height: 50px;
        font-size: 20px;
        font-family: auto;
            }
            .input-form{
                float: right;
                margin-right: 100px;
        text-align: center;
        font-size: 18px;
        font-family: auto;
                    border-radius: 20px;
                    height: 50px;
                    width: 257px;
            }
            .tuandeptrai{
                margin-top: 30px;
            }
        .Bill_card-donhang_right{
        display: inline;
        }
        </style>
    </head>
    <!-- Body Start-->
    <body>
        <!-- Header -->
        @include ('header');
  {{--       <div class="banner">
            <div class="container">
                <div>
                    <h1>Đặt hàng</h1>
                </div>
            </div>
        </div> --}}
        <form style="margin-top: 49px; background: #bfc0bf; height: 100%;" action="dathang" method="POST" style="background: #cccccc">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <div class="container">
                <div class="row">
                    <h2 class="tuandeptrai">Thông tin cá nhân</h2>
                </div >
                <div class="row mb-5">
                    <div class="col-md-6" >
                        <div class="Bill_form-block">
                            <label class="lable-form">Tên:</label>
                            <input class="input-form" type="text" name="name" placeholder="Ten" value="{{Auth::user()->name}}">
                        </div>
                        <div class="Bill_form-block">
                            <label class="lable-form">Số điện thoại:</label>
                            <input class="input-form" type="text" name="sdt" placeholder="Số điện thoại" value="{{Auth::user()->sdt}}">
                        </div>
                        <div class="Bill_form-block">
                            <label class="lable-form">Email:</label>
                            <input class="input-form" type="text" name="email" placeholder="Email" value="{{Auth::user()->email}}">
                        </div>
                        <div class="Bill_form-block"><label class="lable-form">Địa chỉ:</label>
                        <input class="input-form" type="text" name="diachi" placeholder="Địa Chỉ" value="{{Auth::user()->diachi}}"></div>
                        <div class="Bill_form-block">
                            <label class="lable-form">Ghi chú:</label>
                            <input class="input-form" type="text" name="note" placeholder="Ghi chú">
                        </div>
                    </div>
                    <div class="col-md-6" >
                        <div class="card">
                            <div class="card-header" style="margin-top: -30px"> <h2> Đơn hàng của bạn </h2> </div>
                            <ul class="list-group list-group-flush" style="margin-top: 17px">
                                @if(Session::has('cart'))
                                @foreach($sanpham_cart as $sp)
                                <li class="list-group-item item">
                                    <div class="Bill_card-donhang" style="float: left" >
                                        @foreach($images as $img)
                                        @if($img->id_sanpham == $sp['item']['id'] && $img->chude == '1' && $sp['item']['id_type'] = '1' )
                                        <img width="100px" height="100px" src="upload/{{$img->img}}" alt="">
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="Bill_card-donhang" style="display: flex;margin-left: 122px; flex-direction: column; ">
                                        <p class="text-danger text-capitalize"><b>Tên sản phẩm:</b> {{$sp['item']['name']}} </p>
                                        <span> <b> Đơn gía: </b>{{number_format($sp['item']['price'])}}</span><br>
                                        <span> <b> SL: </b>{{$sp['qty']}}</span>
                                        <span><b>Hình thức thanh toán:</b> Giao tiền khi nhận hàng</span>
                                    </div>
                                </li>
                                @endforeach
                                <li class="list-group-item">
                                    <div class="d-flex flex-row ">
                                        <h4 class="pr-3"> Tổng tiền:</h4> <h4>{{number_format($totalPrice)}}</h4>
                                    </div>
                                </li>
                                @endif
                                <button class="btn" type="submit">Đặt Hàng</button>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
    <!-- Body Ended -->
</html>
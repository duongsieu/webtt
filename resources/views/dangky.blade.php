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
    <base href="{{asset('')}}">
    <title>Shop</title>
    <!-- Google Font and font-awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:100,200,300,400,400i,500,600,700" rel="stylesheet">
    <!-- bootstrap -->
    <link href="Style/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS: custom Styles -->
    <link href="Style/css/animate.css" rel="stylesheet">
    <link href="Style/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="StyleLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="StyleLogin/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="StyleLogin/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="StyleLogin/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="StyleLogin/css/util.css">
    <link rel="stylesheet" type="text/css" href="StyleLogin/css/main.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .wrap-login100{
        padding-top: 100px;
      }
    </style>
  </head>
  <body>
    @include ('header');


         <div class="wrap-login100">
          <div class="login100-pic js-tilt" style="padding-top: 50px" data-tilt>
        <img src="StyleLogin/images/img-01.png" alt="IMG">
      </div>

      @if (count($errors ) > 0 )
      <div class="alert alert-danger">
        @foreach($errors->all() as $err)
        {{$err}}<br>
        @endforeach
      </div>
      @endif

      <div>
      <form action="dangky" class="login100-form validate-form" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <span class="login100-form-title">
          Đăng ký
        </span>
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input class="input100" type="text" name="name" placeholder=" Nhập tên của bạn">
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input class="input100" type="text" name="email" placeholder="Nhập email">
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input class="input100" type="text" name="sdt" placeholder="Nhập sdt">
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input class="input100" type="text" name="diachi" placeholder="Nhập địa chỉ">
        </div>
        <input type="hidden" name="role" value="khach">
        <div class="wrap-input100 validate-input" data-validate = "Password is required">
          <input class="input100" type="password" name="password" placeholder="Password">
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Password is required">
          <input class="input100" type="password" name="passwordagain" placeholder="Password">
        </div>
        <div class="container-login100-form-btn">
          <button class="login100-form-btn" type="submit">
          Đăng ký
          </button>
        </div>

      </form>
      </div>
    </div>
    <script src="StyleAdmin/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="StyleAdmin/vendor/bootstrap/js/popper.js"></script>
    <script src="StyleAdmin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="StyleAdmin/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="StyleAdmin/vendor/tilt/tilt.jquery.min.js"></script>
    <!--===============================================================================================-->
    <script src="StyleAdmin/js/main.js"></script>
  </body>
</html>
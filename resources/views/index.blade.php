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
  </head>
  <!-- Body Start-->
  <body>
    <!-- Header -->
    @include ('header');
    <!-- Header End -->
    <!-- Jumbotron -->
    <div class="jumbotron">
      <!-- Container -->
      <div class="container">
        <div data-aos="fade-right">
          <h1>Sang trọng hơn, <span>
          thoải mái hơn </span>
          <span>Chúng tôi là sự lựa chọn của bạn</span>
          </h1>
          <a class="btn btn-primary btn-lg" href="shop" role="button">Sản phẩm</a>
        </div>
        <!-- Row -->
        <div class="row" data-aos="fade-up" data-aos-easing="linear"  data-aos-duration="500">
          <!-- 1st col -->
          @foreach($dichvu as $dv)
          <div class="col-xs-12 col-md-4 col">
            <a href="product_single"><figure class="pete-1" ></figure></a>
            <div class="inner-content">
              <h2><a href="services">{{$dv->tendv}}</a></h2>
              <p>{!!$dv->tomtat!!}</p>
              <p><a href="services">xem thêm...</a></p>
            </div>
          </div>
          @endforeach
        </div>
        <!-- Row End -->
      </div>
      <!-- Container End-->
    </div>
    <!-- Jumbotron Ended -->
    <!-- Product Section Start -->
    <section class="product">
      <!-- Container -->
      <div class="container">
        <h2>Featured Products <a class="btn btn-default" href="shop" role="button">shop more</a></h2>
        <!-- Row -->
        <div class="row"  data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
          <!-- 1st col -->
          @foreach($sanpham as $sp)
          <div class="col-sm-6 col-md-3 col">
            <div class="thumbnail">
              <figure class="image one">
                <a href="product_single/{{$sp->id}}"><img width="262.5px" height="166.48px" src="upload/{{$sp->img}}" class="img-responsive" alt="Responsive image"></a>
              </figure>
              <div class="caption">
                <h3><a href="product_single/{{$sp->id}}">{{$sp->name}}</a></h3>
                <p>{!!$sp->description!!}</p>
                <div class="box">
                  <p><span>{{$sp->price}}</span>&#8363;</p>
                  <span class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <!-- 1st col End-->
        </div>
        <!-- Row End -->
      </div>
      <!-- Container End-->
    </section>
    <!-- Product Section End -->
    <section class="blog">
      <div class="container" >
        <h2>Latest Blog Posts <a class="btn btn-default" href="blog" role="button">go to blog</a></h2>
        <!-- 1st Row-->
        <div class="row"  >
          @foreach($tintuc as $tt)
          <div class="col-md-6"  >
            <div class="thumbnail">
              <div class="caption">
                <h3><a href="blog_single/{{$tt->id}}">{{$tt->tieude}}</a></h3>
                <p><span><a href="blog_single/{{$tt->id}}">read more...</a></span></p>
              </div>
              <img src="upload/{{$tt->img}}" class="img-responsive" alt="post-1">
            </div>
          </div>
          @endforeach
        </div>
        <!-- 1st Row End-->
        <!-- 2st Row-->
        <!-- 2st Row End-->
        </div><!-- /.container -->
      </section>
      <!-- Contact Section -->
      @if (session('thongbao'))
      <div class="alert alert-danger">
        {{session('thongbao')}}
      </div>
      @endif
      @include ('contact');
      <!-- Contact Section End -->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="Style/js/animate.js"></script>
      <script src="Style/js/bootstrap.min.js"></script>
      <script src="Style/js/custom.js"></script>
    </body>
    <!-- Body Ended -->
  </html>
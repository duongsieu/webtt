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

 @include ('header');
<!-- Jumbotron -->
<div class="banner">
  <div class="container">
    <div class="row">
    </div>
  </div>
</div>
<!-- Jumbotron End -->

<!-- Blog-single Section Start -->
    <section class="single">
        <div class="container">
           <div class="inner-content">
            <h2 class="myh2" style="color:#f97000" >Chi tiết sản phẩm</h2>
               <div class="row">
                <div class="col-sm-12 col-md-8 slider-sec" data-aos="fade-up">
                    <!-- main slider carousel -->

                    <div id="myCarousel" class="carousel slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="item carousel-item active" data-slide-number="0">
                             @foreach($image as $img)
              @if($img->id_sanpham == $sanpham->id)
                                <img style="width: 550px" src="upload/{{$img->img}}" alt="image" class="img-thumbnail img-responsive img-fluid w549">
                                 @endif
            @endforeach
                            </div>

                        </div>
                        <!-- main slider carousel nav controls -->



                    </div>
                    <!--/main slider carousel-->
                </div>
                <div class="col-sm-12 col-md-4 slider-content">
                 <h2 style="color:#f97000">Mô tả</h2>
                    <p class="myp" data-aos="fade-up">
                       {!!$sanpham->description!!}
                    </p>
                <div class="row myrow">
                   <div class="col-sm-12" data-aos="fade-up" data-aos-duration="1000">
                    <ul>
                        <li class="mylist1">
                            <span class="myspan1">Now</span>&nbsp;&nbsp;
                            <span class="myspan1">:</span>&nbsp;&nbsp;
                            <span class="myspan1">{{number_format($sanpham->price)}}</span>
                        </li>
                    </ul>
                    </div>
                    <div class="col-sm-12">
                    <div class="cart" data-aos="fade-up" data-aos-duration="1500">
                        <a href="muahang/{{$sanpham->id}}" class="btn btn-info" role="button">ADD TO CART</a>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section class="review">
  <div class="container">
    <div class="inner-content">
      @if(Auth::check())
      <div class="col-12" style="background: #f7f5fd" data-aos="fade-up">
        <h2>Write a Review</h2>
        <form class="form-horizontal" action="binhluan/{{$sanpham->id}}" method="POST">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <fieldset>
            <div class="form-group">
              <div class="col-sm-12">
                <textarea class="form-control" name="noidung" placeholder="Type your message" required="true" rows="7"></textarea>
              </div>
            </div>
            <div class="col-sm-12 form-group">
              <button class="btn btn-default pull-left" type="submit">Submit Comment</button>
            </div>
          </fieldset>
        </form>
      </div>
      <h2>Reviews</h2>
      <div class="myreview"  data-aos="fade-up">
        @foreach($sanpham->binhluan as $bl)
        <div class="review-content">
          <h6><p>trả lời bởi</p>{{Auth::user()->name}}
          </h6>
          <p>{{$bl->noidung}}</p>
        </div>
        @endforeach
      </div>
      @endif
    </div>
  </div>
</section>
<!-- Blog-single Section End -->
<!-- Product Section Start -->
<section id="product" class="product">
  <div class="container">
    <h2>Sản phẩm cùng loại</h2>
    <div class="row">
      @foreach($sanphamcungloai as $spcl)
      <div class="col-sm-6 col-md-3 col" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1200">
        <div class="thumbnail">
          @foreach($image as $img)
          @if($img->id_sanpham == $spcl->id && $img->chude == '1' && $spcl->id_type = '1' )
          <figure class="image one">
            <a href="product_single/{{$spcl->id}}"><img width="262.5px" height="166.48px" src="upload/{{$img->img}}" class="img-responsive" alt="Responsive image"></a>
          </figure>
          @endif
          @endforeach
          <div class="caption">
            <h3 style="height: 70px !important"><a href="product_single">{{$spcl->name}}</a></h3>
            <div class="box">
              <p> {{$spcl->price}}</p>
             <a class="cart" href="muahang/{{$spcl->id}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- Product Section End -->

<!-- Contact Section -->
<section id="contact" class="contact">
 <div class="container">
  <div class="row">
   <div class="inner-content">
    <div class="col-sm-6"  data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
     <h2 class="left">Contact us for support</h2>
      <form>
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" name="comments" placeholder="Comment" rows="8"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-left" type="submit">Get In Touch</button>
        </div>
      </div>
      </form>
    </div>
    <div class="col-sm-5 address"  data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
      <h2>Our Office Address</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five </p>
      <ul class="social-icon">
         <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
         <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
         <li><a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
         <li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
  </div>
    </div>
  <footer class="main-footer">
     <div class="container">
     <div class="row">
      <div class="col-sm-3">
          <p><a class="footer-logo" href="index.html">pet<span>z</span></a></p>
      </div>
      <div class="col-sm-9">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a class="hidden-xs" href="#">|</a></li>
            <li><a href="about.html">About</a></li>
            <li><a class="hidden-xs" href="#">|</a></li>
            <li><a href="products.html">Product</a></li>
            <li><a class="hidden-xs" href="#">|</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a class="hidden-xs" href="#">|</a></li>
            <li><a href="shop.html">shop</a></li>
            <li><a class="hidden-xs" href="#">|</a></li>
            <li><a href="blog.html">blog</a></li>
            <li><a class="hidden-xs" href="#">|</a></li>
            <li><a href="careers.html">careers</a></li>
          </ul>
          <p>(C) 2017, All Rights Reserved <span><a href="https://www.template.net/editable/websites/html5" target="_blank">Petz Theme</a></span>, Designed by <span><a href="https://www.template.net/editable/websites/html5" target="_blank">Template.net</a></span></p>
      </div>
      </div>
      </div>
  </footer>
</section>
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

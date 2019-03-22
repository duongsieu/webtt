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
    <!-- bootstrap -->
    <link href="Style/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS: custom Styles -->
    <link href="Style/css/animate.css" rel="stylesheet">
    <link href="Style/css/main.css" rel="stylesheet">
    <!-- Google Font and font-awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:100,200,300,400,400i,500,600,700" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>.container {padding-right: 20px;padding-left: 20px;}</style>
  </head>
  <!-- Body Start-->
  <body>
    <!-- Header -->
    @include ('header');
    <!-- Header End -->
    <!-- Jumbotron -->
    <div class="banner">
      <div class="container">
        <div>
          <h1>shop</h1>
        </div>
      </div>
    </div>
    <!-- Jumbotron End -->
    <!-- Product Section Start -->
    <section id="product">
      <div class="container">
        <div class="inner-content">
          <h2>Featured Products</h2>
          <div class="row" data-aos="fade-up" data-aos-duration="500">
            @foreach($sanpham as $spnb)
            <div class="col-sm-6 col-md-3 col">
              <div class="thumbnail">
                <figure class="image one">
                  <a href="product_single/{{$spnb->id}}"><img src="upload/{{$spnb->img}}" class="img-responsive" alt="Responsive image"></a>
                </figure>
                <div class="caption">
                  <h3><a href="product_single/{{$spnb->id}}">{{$spnb->name}}</a></h3>
                  <p>{{$spnb->description}} </p>
                  <div class="box">
                    <p><span>$ 23 </span> Only</p>
                    <span class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <!-- col End -->
          </div>
          <!-- 1st Row End -->
          <h2 style="padding-top: 40px;">Latest Products</h2>
          <div class="row"  data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
            @foreach($sanphama as $sp)
            <div class="col-sm-6 col-md-3 col">
              <div class="thumbnail">
                <figure class="image one">
                  <a href="product_single/{{$sp->id}}"><img src="upload/{{$sp->img}}" class="img-responsive" alt="Responsive image"></a>
                </figure>
                <div class="caption">
                  <h3><a href="product_single/{{$sp->id}}">{{$sp->name}}</a></h3>
                  <p>{{$sp->description}}</p>
                  <div class="box">
                    <p><span>$ 23 </span> Only</p>
                    <span class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="products-display">
            <a href="#" class="previous">Previous</a>
            <a href="#" class="next">Next</a>
          </div>
        </div>
        <!-- Inner-content End -->
      </div>
      <!-- Container End -->
    </section>
    <!-- Product Section End -->
    <!-- Contact Section -->
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
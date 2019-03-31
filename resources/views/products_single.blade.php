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
    <!-- bootstrap -->

    <link href="Style/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS: custom Styles -->
    <link href="Style/css/animate.css" rel="stylesheet">

    <link href="Style/css/main.css" rel="stylesheet">
    <link href="Style/css/maintable.css" rel="stylesheet">
    <!-- Google Font and font-awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:100,200,300,400,400i,500,600,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style> .product h2, {font-size: 30px;color:
    ;}.container {padding-right: 20px;padding-left: 20px;}.product {background-image: none;}
    .center{
          max-width: 50%;
           margin: auto;
    }
    .bx-wrapper{
  max-width: 50% !important;
  margin: auto ;


    }
  </style>
  </head>
  <!-- Body Start-->
  <body>
    <!-- Header -->
    @include ('header');
    <!-- Header End -->
    <!-- Jumbotron -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-sm-12"><h1>Our Blog</h1></div>
        </div>
      </div>
    </div>
    <!-- Jumbotron End -->
    <!-- Blog-single Section Start -->
    <section class="single">
      <div class="container">
        <div class="inner-content">
          <h3 class="myh3">Chi tiết sản phẩm</h3>


          <div class="row">
        <div class="slider">
          @foreach($image as $img)
    @if($img->id_sanpham == $sanpham->id)
    <div ><img width="800px" height="300px"  src="upload/{{$img->img}}" alt=""></div>
    @endif
 @endforeach
  </div>


            <div class="wrap-table100">
              <h1 style="font-size: 30px;  color: #ff9700;   text-align: center;   padding-top: 48px;    padding-bottom: 30px;">Thông số kỹ thuật</h1>
              <div class="table100 ver1 m-b-110">
                <div class="table100-body">
                  <table >
                    <thead>
                      @foreach($chitietsanpham as $ctsp)
                        <tr class="row100 head">
                          <th class="cell100 column2">Tên sản phẩm</th>
                          <td class="cell100 column1">{{$ctsp->sanpham->name}}</td>
                        </tr>
                        <tr class="row100 head">
                          <th class="cell100 column2">Khối lượng bản thân</th>
                          <td class="cell100 column1">{{$ctsp->khoiluong}}</td>
                        </tr>
                        <tr class="row100 head">
                          <th class="cell100 column3">Dài x Rộng x Cao</th>
                          <td class="cell100 column1">{{$ctsp->kichthuoc}}</td>
                        </tr>
                        <tr class="row100 head">
                          <th class="cell100 column4">Khoảng cách trục bánh xe</th>
                          <td class="cell100 column1">{{$ctsp->trucbanhxe}}</td>
                        </tr>
                        <tr class="row100 head">
                          <th class="cell100 column5">Độ cao yên</th>
                          <td class="cell100 column1">{{$ctsp->docaiyen}}</td>
                        </tr>
                        <tr class="row100 head">
                          <th class="cell100 column6">Khoảng sáng gầm xe</th>
                          <td class="cell100 column1">{{$ctsp->sanggamxe}}</td>
                        </tr>
                        <tr class="row100 head">
                          <th class="cell100 column7">Dung tích bình xăng</th>
                          <td class="cell100 column1">{{$ctsp->binhxang}}</td>
                        </tr>
                        <tr class="row100 head">
                          <th class="cell100 column8">Kích cở lốp trướ/sau</th>
                          <td class="cell100 column1">{{$ctsp->lopxe}}</td>
                        </tr>
                        <tr class="row100 head">
                          <th class="cell100 column9">Công suất tối đa</th>
                          <td class="cell100 column1">{{$ctsp->congsuattoida}}</td>
                        </tr>
                        <tr class="row100 head">
                          <th class="cell100 column9">Gía sản phẩm</th>
                          <td class="cell100 column1">{{number_format($ctsp->sanpham->price)}}</td>
                        </tr>
                      @endforeach
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- main slider carousel -->
          <div class="row myrow">
            <div class="col-sm-12">
              <div class="cart" data-aos="fade-up" data-aos-duration="1500">
                <a href="muahang/{{$sanpham->id}}" class="btn btn-info" role="button">ADD TO CART</a>
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
              {{-- <div class="form-group"> --}}
                {{-- <div class="col-sm-4">
                  <input class="form-control" placeholder="Enter your name" required="true" size="30" type="text" />
                </div>
                <div class="col-sm-4">
                  <input class="form-control" placeholder="Enter your email" required="true" size="30" type="text" />
                </div>
                <div class="col-sm-4">
                  <input class="form-control" placeholder="Your website" required="true" size="30" type="text" />
                </div>
              </div> --}}
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
          @foreach($sanpham -> binhluan as $bl)
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
      <h2>Featured Products</h2>
      <div class="row">
        @foreach($sanphamcungloai as $spcl)
        <div class="col-sm-6 col-md-3 col" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1200">
          <div class="thumbnail">
            <figure class="image one">
              <a href="product_single"><img src="upload/{{$spcl->img}}" class="img-responsive" alt="Responsive image"></a>
            </figure>
            <div class="caption">
              <h3><a href="product_single">{{$spcl->name}}</a></h3>
              <p>{{$spcl->description}}</p>
              <div class="box">
                <p> {{$spcl->price}}</p>
                <span class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
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
  @include ('contact');
  <!-- Contact Section End -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="Style/js/animate.js"></script>
  <script src="Style/js/bootstrap.min.js"></script>
  <script src="Style/js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script>
    $(document).ready(function(){
      $('.slider').bxSlider();
    });
  </script>
</body>
<!-- Body Ended -->
</html>
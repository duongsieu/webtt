<header class="header">
  <!-- nav -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index">shop<span></span></a>
      </div>
      <!-- Collect the nav links and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index"><i class="fa fa-home" aria-hidden="true"></i> <span class="sr-only">(current)</span></a></li>
          <li><a href="shop">Sản phẩm </a></li>
          <li><a href="services">Dịch vụ </a></li>
          <li><a href="blog">Tin tức </a></li>
          <li><a href="contact">Liên hệ </a></li>
          @if(Auth::check())
         <li><a href="">{{Auth::user()->name}}</a></li>
          <li><a href="dangxuat">Đăng xuất</a></li>
          @else
          <li><a href="dangnhap">Đăng nhập</a></li>

          @endif
        </ul>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-->
      </nav>
      <!-- nav End-->
    </header>
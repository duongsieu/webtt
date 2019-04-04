<header class="header">
  <style>
  .sub-menu{
  display: inline-block;
  width: 200%;
  height: auto;
  position: absolute;
  left: 0;
  top: 100%;
  background: #fff;
  opacity: 0;
  transition: all ease 2s;
  visibility: hidden;
  }
  .sub-menu1{
    display: inline-block;
  width: 120%;
  height: auto;
  position: absolute;
  left: 0;
  top: 100%;
  background: #fff;
  opacity: 0;
  transition: all ease 2s;
  visibility: hidden;
  }
  .sub-menu-item{
  display: block;
  padding: 20px;
  }
  .has-sub-menu{
  position: relative;
  }
  .cart-menu{
  right: 0;
  left: auto;
  height: auto;
  }
  .no-hover:hover .sub-menu{
  opacity: 0 !important;
  visibility: hidden !important;
  }
  .has-sub-menu:hover .sub-menu{
  display: block;
  opacity: 1;
  visibility: visible;
  }
   .has-sub-menu:hover .sub-menu1{
  display: block;
  opacity: 1;
  visibility: visible;
  }
  .no-margin-r{
  margin-right: 0;
  }
  </style>
  <!-- nav -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container no-margin-r">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">shop<span>moto</span></a>
      </div>
      <!-- Collect the nav links and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          {{--  <li class="active"><a href="index"><i class="fa fa-home" aria-hidden="true"></i> <span class="sr-only">(current)</span></a></li> --}}
          <li class="has-sub-menu"><a href="shop">Sản phẩm </a> </li>
        <li><a href="dichvu">Dịch vụ </a></li>
        <li><a href="blog">Tin tức </a></li>
        @if(Auth::check())
        <li class="has-sub-menu "><a class="fa fa-user" href="">&#160;&#160;{{Auth::user()->name}}</a>
          <ul class="sub-menu1 ">
             <li class="sub-menu-item"><a style="color:#362f2d" href="caidat">Cài đặt</a></li>
            <li class="sub-menu-item"><a style="color:#362f2d" href="dangxuat">Đăng xuất</a></li>

          </ul>
        </li>
        @else
        <li><a href="dangnhap">Đăng nhập</a></li>
        @endif
        <li class="has-sub-menu no-hove" > <a  ><i class="fa fa-shopping-cart" aria-hidden="true"></i><span style="margin-left: 5px;">Giỏ hàng(@if(Session::has('cart')){{Session('cart')->totalQty}}@else Trống @endif)</span></a>
        @if(Session::has('cart'))
        <ul id="mydrop" class="sub-menu cart-menu">

          @foreach($sanpham_cart as $sp)
          <li class="sub-menu-item">
           @foreach($images as $img)
          @if($img->id_sanpham == $sp['item']['id'] && $img->chude == '1' && $sp['item']['id_type'] = '1' )
            <a href=""><img width="50px" height="50px" src="upload/{{$img->img}}" alt=""></a>
            @endif
            @endforeach
            <span>{{$sp['item']['name']}}</span>&#124;
            <span>{{$sp['qty']}}*<span>{{number_format($sp['item']['price'])}}</span></span>
            <a href ="xoahang/{{$sp['item']['id']}}">Xóa</a>
          </li>
          @endforeach
          <span>Tổng tiền: {{number_format( Session('cart')->totalPrice)}}</span>&#124;&#124;
          <a href="dathang">Đặt hàng</a>
        </ul>
        @endif
      </li>
    </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-->
  </nav>
  <!-- nav End-->
  {{--   <script>
  function myFunction() {
  document.getElementById("mydrop").classList.toggle("show");
  }
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
  var dropdowns = document.getElementsByClassName("sub-menu cart-menu");
  var i;
  for (i = 0; i < dropdowns.length; i++) {
  var openDropdown = dropdowns[i];
  if (openDropdown.classList.contains('show')) {
  openDropdown.classList.remove('show');
  }
  }
  }
  }
  </script> --}}
</header>
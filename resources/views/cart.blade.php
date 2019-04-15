<a  ><i class="fa fa-shopping-cart" aria-hidden="true"></i><span style="margin-left: 5px;">Giỏ hàng(@if(Session::has('cart')){{Session('cart')->totalQty}}@else Trống @endif)</span></a>
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
             <a href=" xoahang/{{$sp['item']['id']}}">Xóa</a>
          </li>
          @endforeach
          <span>Tổng tiền: {{number_format( Session('cart')->totalPrice)}}</span>&#124;&#124;
          <a href="dathang">Đặt hàng</a>
        </ul>
        @endif
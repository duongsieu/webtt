<div class="row"  data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
          @if(count($sanpham) >0)
            @foreach($sanpham as $sp)

            <div class="col-sm-6 col-md-3 col">
              <div class="thumbnail" id="sanpham" >
                <figure class="image one">
                @foreach($images as $img)
                  @if($img->id_sanpham == $sp->id && $img->chude == 1 )
                  <a href="product_single/{{$sp->id}}"><img width="262.5px" height="166.48px" src="upload/{{$img->img}}" class="img-responsive" alt="Responsive image"></a>
                    @endif
                  @endforeach
                </figure>
                <div class="caption">
                  <h3 style="height: 70px !important"><a href="product_single/{{$sp->id}}">{{$sp->name}}</a></h3>
                  {{-- <p>{!!$sp->description!!}</p> --}}
                  <div class="box">
                    <p><span>{{number_format($sp->price)}}</span>&#8363;</p>
                   @if($sp->amount > 0)
                  <a class="cart" id="{{$sp->id}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                  @else
                  <i>Hết hàng</i>
                  @endif
                  </div>
                </div>
              </div>
            </div>

            @endforeach
            @else
               <p>Không có sản phẩm theo yêu cầu của bạn</p>
            @endif
          </div>
             <script>
      $(document).ready(function(){
      $("a").click(function() {
      var key = this.id;
      $.get("ajax/muahang/"+key,function(data){
      $("#cart").html(data);
      alert("them thanh cong");
      });
      });
      });
      </script>

{{--
          <div class="products-display">
            {{$sanpham->links()}}
          </div> --}}
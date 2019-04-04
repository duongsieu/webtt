<div class="row"  data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
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
                    <a class="cart" href="muahang/{{$sp->id}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>

            @endforeach

          </div>


          <div class="products-display">
            {{$sanpham->links()}}
          </div>
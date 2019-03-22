<section id="contact" class="contact">
  <div class="container">
    <div class="row">
      <div class="inner-content">
        <div class="col-sm-6"  data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
          <h2 class="left">Contact us for support</h2>
          <form action="lienhe/them" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" name="ten" placeholder="Tên" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" name="sdt" placeholder="Sdt" type="text" required>
              </div>
            </div>
            <textarea class="form-control" name="noidung" placeholder="Nội dung" rows="8"></textarea><br>
            <div class="row">
              <div class="col-sm-12 form-group">
                <button class="btn btn-default pull-left" type="submit">Get In Touch</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-sm-5 address"  data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
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
  <!-- Footer -->
  <footer class="main-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <p><a class="footer-logo" href="index">pet<span>z</span></a></p>
        </div>
        <div class="col-sm-9">
          <ul>
            <li><a href="index">Home</a></li>
            <li><a class="hidden-xs" href="#">|</a></li>
            <li><a href="about">About</a></li>
            <li><a class="hidden-xs" href="#">|</a></li>
            <li><a href="products">Product</a></li>
            <li><a class="hidden-xs" href="#">|</a></li>
            <li><a href="services">Services</a></li>
            <li><a class="hidden-xs" href="#">|</a></li>
            <li><a href="shop">shop</a></li>
            <li><a class="hidden-xs" href="#">|</a></li>
            <li><a href="blog">blog</a></li>
            <li><a class="hidden-xs" href="#">|</a></li>
            <li><a href="careers">careers</a></li>
            <li><a class="hidden-xs" href="#">|</a></li>
            <li><a href="#contact">contact</a></li>
            <li><a class="hidden-xs" href="#">|</a></li>
          </ul>
          <p>(C) 2017, All Rights Reserved <span><a href="https://www.template.net/editable/websites/html5" target="_blank">Petz Theme</a></span>, Designed by <span><a href="https://www.template.net/editable/websites/html5" target="_blank">Template.net</a></span></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->
</section>
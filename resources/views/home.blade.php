@php
  $lang = app("App\Http\Controllers\langs")->text();
@endphp

<!-- Banner -->
  <section id="banner">
    {{--<i class="icon fa-diamond"></i>--}}
    {{--<img class="logohead" src="{{asset("public/logo.png")}}" alt="">--}}
    {{--<h2>Etiam adipiscing</h2>
    <p>Magna feugiat lorem dolor egestas</p>--}}
    <img src="{{asset("public/images/logobgwhite.png")}}" class="logo">
    <ul class="actions">
      <h2>2726 spencer hwy pasadena tx 77504</h2>
      <li><a href="#four" class="contactus">{!!$lang["contactus"]!!}</a></li>
    </ul>
  </section>

  <div class="container-fluid menus">
    <div class="row firstrow">
      <div class="col-12 text-center">
        <h2>{!!$lang["specialsoftheweek"]!!}</h2>
        <div class="col-12">
          <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4">
              <div class="row">
                <a class="btn btn-success col-12 col-md-5" href="{{asset("public/menu/catering.pdf")}}">Catering</a>
                <div class="col-2"></div>
                <a class="btn btn-danger col-12 col-md-5" href="{{asset("public/menu/menu.pdf")}}">Menu</a>
              </div>
            </div>
            <div class="col-4">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- One -->
  <section id="one" class="wrapper style1">
    <div class="inner">
      <div class="row">
        {{--START Specials Carousel--}}
          <div id="demo" class="carousel slide" data-ride="carousel">

            {{--<!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>--}}

            <!-- The slideshow -->
            <div class="carousel-inner">
              <?php
                $dir = opendir("public/images/specials");
                $active = 1;
                while ($file = readdir($dir)){
                  if (!is_dir($file)){
                    if($active == 1){
                      ?>
                        <div class="carousel-item active">
                          <img class="img-fluid" src="{{asset("public/images/specials")}}/<?= $file ?>">
                        </div>
                      <?php
                      $active = 0;
                    }else{
                      ?>
                        <div class="carousel-item">
                          <img class="img-fluid" src="{{asset("public/images/specials")}}/<?= $file ?>">
                        </div>
                      <?php
                    }
                  }
                }
              ?>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>

          </div>
        {{--END   Specials Carousel--}}
      </div>
    </div>
  </section>

<!-- Two -->
  <section id="two" class="wrapper gallery">
    <div class="inner">

      <div class="row">
        {{--BEGIN Gallery Section--}}
          <div id="gallery" class="carousel slide" data-ride="carousel">

            {{--<!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>--}}

            <!-- The slideshow -->
            <div class="carousel-inner">
              <?php
                $dir = opendir("public/images/gallery");
                $active = 1;
                while ($file = readdir($dir)){
                  if (!is_dir($file)){
                    if($active == 1){
                      ?>
                        <div class="carousel-item active">
                          <img class="img-fluid" src="{{asset("public/images/gallery")}}/<?= $file ?>">
                        </div>
                      <?php
                      $active = 0;
                    }else{
                      ?>
                        <div class="carousel-item">
                          <img class="img-fluid" src="{{asset("public/images/gallery")}}/<?= $file ?>">
                        </div>
                      <?php
                    }
                  }
                }
              ?>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#gallery" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#gallery" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>

          </div>
        {{--END   Gallery Section--}}
      </div>

    </div>
  </section>

<!-- Three -->
  <section id="three" class="wrapper style3 special">
    <div class="inner">
      <header class="major narrow	">
        <h2>Dos Mas Mexican Restaurant</h2>
        <br>
        <p>
          {!!$lang["about"]!!}
        </p>
      </header>
      {{--<ul class="actions">
        <li><a href="#four" class="button big alt">{!!$lang["contactus"]!!}</a></li>
      </ul>--}}
    </div>
  </section>

<!-- Four -->
  <section id="four" class="wrapper style2 special">
    <div class="inner">
      <header class="major narrow">
        <h2>{!! $lang["getintouch"] !!}</h2>
        <p><a href="mailto:info@dosmasmexicanrestaurant.com">info@dosmasmexicanrestaurant.com</a></p>
      </header>
      <form action="sendmail" method="POST">
        @csrf
        <div class="container 75%">
          <div class="row uniform 50%">
            <div class="6u 12u$(xsmall)">
              <input name="name" placeholder="{!!$lang["name"]!!}" type="text" />
            </div>
            <div class="6u$ 12u$(xsmall)">
              <input name="email" placeholder="{!!$lang["email"]!!}" type="email" />
            </div>
            <div class="12u$">
              <textarea name="message" placeholder="{!!$lang["message"]!!}" rows="4"></textarea>
            </div>
          </div>
        </div>
        <ul class="actions">
          <li><input type="submit" class="special col-12" value="{!!$lang["submit"]!!}" /></li>
          <li><input type="reset" class="alt col-12" value="Reset" /></li>
        </ul>
      </form>
      <div class="inner">
        <div class="continer">
          <div class="row">
            <div class="col-12 text-center">
              info@dosmasmexicanrestaurant.com
            </div>
          </div>
        </div>
        <ul class="icons">
          <li><a href="https://www.facebook.com/Dosmasrestaurant/" class="icon fa-facebook">
            <span class="label">Facebook</span>
          </a></li>
          {{--<li><a href="#" class="icon fa-twitter">
            <span class="label">Twitter</span>
          </a></li>--}}
          <li><a href="https://www.instagram.com/dosmasrestaurant/" class="icon fa-instagram">
            <span class="label">Instagram</span>
          </a></li>
          {{--<li><a href="#" class="icon fa-linkedin">
            <span class="label">LinkedIn</span>
          </a></li>--}}
        </ul>
      </div>
    </div>
  </section>

  {{-- Gallery Modal --}}
  {{--<div class="modal" id="gallery_modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body"></div>
      </div>
    </div>
  </div>--}}

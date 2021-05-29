<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style1.css') !!}">
    <link rel="shortcut icon" href="{{ asset('assets/images/forest.png') }}">

    <title>@yield('title')</title>
  </head>
  <body>
    <header>
    <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-transparent">
      <a class="navbar-brand"  href="#">
      <img src="{!! asset('css/img/x1/Tropisianimal.png') !!}" width="170" height="30" class="d-inline-block align-top" alt="" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse show" id="navbarCollapse" style="">
        <ul class="navbar-nav mr-auto">
        </ul>
        <form class="form-inline mt-2 mt-md-0">
        <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link mr-4 text-white text-uppercase"  href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mr-4 text-white text-uppercase"  href="{{ url('/tentang') }}">Tentang</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mr-4 text-white text-uppercase"  href="{{ url('/berita') }}">Berita</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mr-4 text-white text-uppercase"  href="{{ url('/galeri') }}">Galeri</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mr-4 text-white text-uppercase"  href="{{ url('/kontak') }}">Kontak</a>
                  </li>
          </ul>
        </form>
      </div>
    </nav>
    </div>
    <div class="jumbotron jumbotron-fluid bg-transparent mt-5">
      <div class="container mt-5">
        <h1 class=" display-3 fw-800">@yield('text1')</h1>
      </div>
    </div>
    </header>

    <main>
    @yield('top')
    </main>

    <!-- Footer -->
<footer style="font-size:12px;" class="page-footer font-small blue pt-4 bg-dark text-white">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-3 mt-md-0 mt-3" style="padding:40px;">

    <!-- Content -->
    <h5 class="mb-4 font-weight-bold">Tropisianimal</h5>
    <p class="font-weight-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem at maiores facilis! Beatae aperiam, esse libero </p>
    <a href="">
      <img src="{!! asset('css/img/x1/001-facebook.png') !!}" alt="">
    </a>
    <a href="">
      <img src="{!! asset('css/img/x1/002-twitter.png') !!}" alt="">
    </a>
  </div>
  <!-- Grid column -->

  <hr class="clearfix w-100 d-md-none pb-3">

  <!-- Grid column -->
  <div class="col-md-3 mb-md-0 mb-3 " style="padding:40px;">

    <!-- Links -->
    <h5 class="mb-4">Useful Links</h5>

    <ul class="list-unstyled">
      <li class="mb-2">
        <a class="text-white" href="#!">Blog</a>
      </li>
      <li class="mb-2">
        <a class="text-white" href="#!">Hewan</a>
      </li>
      <li class="mb-2">
        <a class="text-white" href="#!">Galeri</a>
      </li>
      <li class="mb-2">
        <a class="text-white" href="#!">Testimonial</a>
      </li>
    </ul>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-3 mb-md-0 mb-3" style="padding:40px;">

    <!-- Links -->
    <h5 class="mb-4">Privacy</h5>

    <ul class="list-unstyled">
      <li class="mb-2">
        <a class="text-white mb-4" href="#!">Karir</a>
      </li>
      <li class="mb-2">
        <a class="text-white" href="#!">Tentang Kami</a>
      </li>
      <li class="mb-2">
        <a class="text-white" href="#!">Kontak Kami</a>
      </li>
      <li class="mb-2">
        <a class="text-white" href="#!">Servis</a>
      </li>
    </ul>

  </div>
  <!-- Grid column -->
<!-- Grid column -->
<div class="col-md-3 mb-md-0 mb-3" style="padding:40px;">

<!-- Links -->
<h5 class="mb-4">Contact Info</h5>

<ul class="list-unstyled">
  <li class="mb-2">
    <a class="text-white" href="#!">
    <img src="{!! asset('css/svg/mail.svg') !!}" height="20" width="20" alt="">
    &nbsp;tropisianimal@gmail.com
    </a>
  </li>
  <li class="mb-2">
  <a class="text-white" href="#!">
    <img src="{!! asset('css/svg/phone.svg') !!}" height="20" width="20" alt="">
    &nbsp;+62 812 3456 7890
    </a>
  </li>
  <li class="mb-2">
  <a class="text-white" href="">
  <img src="{!! asset('css/svg/map-pin.svg') !!}" height="20" width="20" alt="">
    &nbsp; Kota Bandung, Jawa Barat
  </a>
  </li>
</ul>

</div>
<!-- Grid column -->
</div>
<!-- Grid row -->


</div>
<div class="footer-copyright text-center py-3">Copyright &copy;2020 All right reserved</div>
</footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(window).on("scroll", function(){
			if($(window).scrollTop() > 300){
        $(".navbar").removeClass("bg-transparent");
				$(".navbar").addClass("bg-success");
			} else {
        $(".navbar").removeClass("bg-success");
        $(".navbar").addClass("bg-transparent");
			}
		});
    </script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Tech Forgery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
{{-- <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css"> --}}
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
{{-- <link rel="stylesheet" href="css/magnific-popup.css"> --}}
{{-- <link rel="stylesheet" href="css/aos.css"> --}}
<link rel="stylesheet" href="css/ionicons.min.css">
{{-- <link rel="stylesheet" href="css/bootstrap-datepicker.css"> --}}
{{-- <link rel="stylesheet" href="css/jquery.timepicker.css"> --}}
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
<link rel="preload" href="../fonts/ionicons/fonts/ionicons580c.woff2?v=4.0.0-19" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="../fonts/flaticon/font/Flaticon.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="../fonts/icomoon/icomoonccfb.ttf?6tt51o" as="font" type="font/truetype" crossorigin>


</head>
<body>

<div class="page">
    <nav id="techforgery-main-nav"  class="border" role="navigation">
        <a href="#" class="js-techforgery-nav-toggle techforgery-nav-toggle active "><i></i></a>
        <div class="js-fullheight techforgery-table">
        <div class="img" style="background-image: url(images/bg_2.jpg);"></div>
        <div class="techforgery-table-cell js-fullheight">
            <div class="row no-gutters">
                <div class="col-md-12 text-center">
                <h1 class=""><a href="index.php" class="logo"><img src="/images/logo_website_white.svg" alt="TECH FORGERY"></a></h1>
                    <ul>
                    <li class="active"><a href="index.php"><span><small>01</small>Home</span></a></li>
                    <li><a href="about.html"><span><small>02</small>About</span></a></li>
                    <li><a href="services.html"><span><small>03</small>Services</span></a></li>
                    <li><a href="pricing.html"><span><small>04</small>Pricing</span></a></li>
                    <li><a href="portfolio.html"><span><small>05</small>Portfolio</span></a></li>
                    <li><a href="blog.html"><span><small>06</small>Blog</span></a></li>
                    <li><a href="contact.html"><span><small>07</small>Contact</span></a></li>

                    <form method="POST" action="{{ route('logout') }}">
                      @csrf

                      <li><a href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();"><span><small>07</small>Logout</span></a></li>
                     
                    </form>

                    </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>


  <div id="techforgery-page">
 
    <header>
      <div class="techforgery-navbar-brand text-center">
      <a class="techforgery-logo" href="/"><img loading="lazy" src="/images/logo_website_white.svg" alt="TECH FORGERY"></a>
      </div>
      <a href="#" class="js-techforgery-nav-toggle techforgery-nav-toggle"><i></i></a>
    </header>
    
    @yield('content')
  




<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
    <div class="row mb-5 justify-content-center">
    <div class="col-md-5 text-center">
    <div class="ftco-footer-widget mb-3">
    <ul class="ftco-footer-social list-unstyled">
    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
    </ul>
    </div>
    <div class="ftco-footer-widget">
    <h2 class="mb-3">Contact Us with rehman ali</h2>
    <p class="email"><a href="#"><span class="__cf_email__" data-cfemail="d9b0b7bfb699bcb4b8b0b5f7bab6b4">[email&#160;protected]</span></a></p>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 text-center">
    <p>
    {{-- Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true" style="color: red;"></i> by <a href="https://techforgery.com/" target="_blank">techforgery</a> --}}
    </p>
    </div>
    </div>
    </div>
</footer>

{{-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
</div> --}}

{{-- <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
  <h5 class="modal-title" id="modalRequestLabel">Request a Quote</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>
  <div class="modal-body">
  <form action="#">
  <div class="form-group">
  <label for="appointment_name" class="text-black">Full Name</label>
  <input type="text" class="form-control" id="appointment_name">
  </div>
  <div class="form-group">
  <label for="appointment_email" class="text-black">Email</label>
  <input type="text" class="form-control" id="appointment_email">
  </div>
  <div class="row">
  <div class="col-md-6">
  <div class="form-group">
  <label for="appointment_date" class="text-black">Date</label>
  <input type="text" class="form-control" id="appointment_date">
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
  <label for="appointment_time" class="text-black">Time</label>
  <input type="text" class="form-control" id="appointment_time">
  </div>
  </div>
  </div>
  <div class="form-group">
  <label for="appointment_message" class="text-black">Message</label>
  <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
  <input type="submit" value="Send Message" class="btn btn-primary">
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
</div> --}}
<script src="js/jquery.min.js"></script> 
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
{{-- <script src="js/jquery.magnific-popup.min.js"></script> --}}
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
{{-- <script src="js/bootstrap-datepicker.js"></script> --}}
{{-- <script src="js/jquery.timepicker.min.js"></script> --}}
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script> --}}
{{-- <script src="js/google-map.js"></script> --}}
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>

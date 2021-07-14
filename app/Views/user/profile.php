<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Gp Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>/assets/user/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url() ?>/assets/user/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
  <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">

  <link href="<?php echo base_url() ?>/assets/user/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/user/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/user/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/user/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/user/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/user/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>/assets/user/assets/css/style.css" rel="stylesheet">

  <style>
    html *{
    -webkit-font-smoothing: antialiased;
    }

    .h6, h6 {
        font-size: .75rem !important;
        font-weight: 500;
        font-family: Roboto,Helvetica,Arial,sans-serif;
        line-height: 1.5em;
        text-transform: uppercase;
    }

    .name h6 {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    

    a .material-icons {
        vertical-align: middle;
    }

    .fixed-top {
        position: fixed;
        z-index: 1030;
        left: 0;
        right: 0;
    }

    .profile-page .page-header {
        height: 380px;
        background-position:center;
    }

    .page-header {
        height: 100vh;
        background-size: cover;
        margin: 0;
        padding: 0;
        border: 0;
        display: flex;
        align-items: center;
    }

    .header-filter:after, .header-filter:before {
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        display: block;
        left: 0;
        top: 0;
        content: "";
    }

    .header-filter::before {
        background: rgba(0,0,0,.5);
    }

    .main-raised {
        margin: -60px 30px 0;
        border-radius: 6px;
        box-shadow: 0 16px 24px 2px rgba(0,0,0,.14), 0 6px 30px 5px rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
    }

    .main {
        background: #FFF;
        position: relative;
        z-index: 3;
    }

    .profile-page .profile {
        text-align: center;
    }

    .profile-page .profile img {
        max-width: 160px;
        width: 100%;
        margin: 0 auto;
        -webkit-transform: translate3d(0,-50%,0);
        -moz-transform: translate3d(0,-50%,0);
        -o-transform: translate3d(0,-50%,0);
        -ms-transform: translate3d(0,-50%,0);
        transform: translate3d(0,-50%,0);
    }

    .img-raised {
        box-shadow: 0 5px 15px -8px rgba(0,0,0,.24), 0 8px 10px -5px rgba(0,0,0,.2);
    }

    .rounded-circle {
        border-radius: 50%!important;
    }

    .img-fluid, .img-thumbnail {
        max-width: 100%;
        height: auto;
    }

    .title {
        margin-top: 30px;
        margin-bottom: 25px;
        min-height: 32px;
        color: #3C4858;
        font-weight: 700;
        font-family: "Roboto Slab","Times New Roman",serif;
    }

    .profile-page .description {
        margin: 1.071rem auto 0;
        max-width: 600px;
        color: #999;
        font-weight: 300;
    }

    p {
        font-size: 14px;
        margin: 0 0 10px;
    }

    .profile-page .profile-tabs {
        margin-top: 4.284rem;
    }

    .nav-pills, .nav-tabs {
        border: 0;
        border-radius: 3px;
        padding: 0 15px;
    }

    .nav .nav-item {
        position: relative;
        margin: 0 2px;
    }

    .nav-pills.nav-pills-icons .nav-item .nav-link {
        border-radius: 4px;
    }

    .nav-pills .nav-item .nav-link.active {
        color: #fff;
        background-color: #9c27b0;
        box-shadow: 0 5px 20px 0 rgba(0,0,0,.2), 0 13px 24px -11px rgba(156,39,176,.6);
    }

    .nav-pills .nav-item .nav-link {
        line-height: 24px;
        font-size: 12px;
        font-weight: 500;
        min-width: 100px;
        color: #555;
        transition: all .3s;
        border-radius: 30px;
        padding: 10px 15px;
        text-align: center;
    }

    .nav-pills .nav-item .nav-link:not(.active):hover {
        background-color: rgba(200,200,200,.2);
    }


    .nav-pills .nav-item i {
        display: block;
        font-size: 30px;
        padding: 15px 0;
    }

    .tab-space {
        padding: 20px 0 50px;
    }

    .profile-page .gallery {
        margin-top: 3.213rem;
        padding-bottom: 50px;
    }

    .profile-page .gallery img {
        width: 100%;
        margin-bottom: 2.142rem;
    }

    .profile-page .profile .name{
        margin-top: -80px;
    }

    img.rounded {
        border-radius: 6px!important;
    }

    .tab-content>.active {
        display: block;
    }

    /*buttons*/
    .btn {
        position: relative;
        padding: 12px 30px;
        margin: .3125rem 1px;
        font-size: .75rem;
        font-weight: 400;
        line-height: 1.428571;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0;
        border: 0;
        border-radius: .2rem;
        outline: 0;
        transition: box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1);
        will-change: box-shadow,transform;
    }

    .btn.btn-just-icon {
        font-size: 20px;
        height: 41px;
        min-width: 41px;
        width: 41px;
        padding: 0;
        overflow: hidden;
        position: relative;
        line-height: 41px;
    }

    .btn.btn-just-icon fa{
        margin-top: 0;
        position: absolute;
        width: 100%;
        transform: none;
        left: 0;
        top: 0;
        height: 100%;
        line-height: 41px;
        font-size: 20px;
    }
    .btn.btn-link{
        background-color: transparent;
        color: #999;
    }

    /* dropdown */




    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        float: left;
        min-width: 11rem !important;
        margin: .125rem 0 0;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        background-color: #fff;
        background-clip: padding-box;
        border-radius: .25rem;
        transition: transform .3s cubic-bezier(.4,0,.2,1),opacity .2s cubic-bezier(.4,0,.2,1);
    }

    .dropdown-menu.show{
        transition: transform .3s cubic-bezier(.4,0,.2,1),opacity .2s cubic-bezier(.4,0,.2,1);
    }


    .dropdown-menu .dropdown-item:focus, .dropdown-menu .dropdown-item:hover, .dropdown-menu a:active, .dropdown-menu a:focus, .dropdown-menu a:hover {
        box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(156,39,176,.4);
        background-color: #9c27b0;
        color: #FFF;
    }
    .show .dropdown-toggle:after {
        transform: rotate(180deg);
    }

    .dropdown-toggle:after {
        will-change: transform;
        transition: transform .15s linear;
    }


    .dropdown-menu .dropdown-item, .dropdown-menu li>a {
        position: relative;
        width: auto;
        display: flex;
        flex-flow: nowrap;
        align-items: center;
        color: #333;
        font-weight: 400;
        text-decoration: none;
        font-size: .8125rem;
        border-radius: .125rem;
        margin: 0 .3125rem;
        transition: all .15s linear;
        min-width: 7rem;
        padding: 0.625rem 1.25rem;
        min-height: 1rem !important;
        overflow: hidden;
        line-height: 1.428571;
        text-overflow: ellipsis;
        word-wrap: break-word;
    }

    .dropdown-menu.dropdown-with-icons .dropdown-item {
        padding: .75rem 1.25rem .75rem .75rem;
    }

    .dropdown-menu.dropdown-with-icons .dropdown-item .material-icons {
        vertical-align: middle;
        font-size: 24px;
        position: relative;
        margin-top: -4px;
        top: 1px;
        margin-right: 12px;
        opacity: .5;
    }

    /* footer */

    footer{
        margin-top: 10px;
        color: #555;
        padding: 25px;
        font-weight: 300;
        
    }
    .footer p{
        margin-bottom: 0;
        font-size: 14px;
        margin: 0 0 10px;
        font-weight: 300;
    }
    footer p a{
        color: #555;
        font-weight: 400;
    }

    footer p a:hover {
        color: #9f26aa;
        text-decoration: none;
    }

  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">WeCare<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?php echo base_url() ?>/assets/user/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">User Details</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>User Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>User Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="container">

              <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile">
                      <div class="avatar">
                        <center>
                          <img src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTU0NjQzOTk4OTQ4OTkyMzQy/ansel-elgort-poses-for-a-portrait-during-the-baby-driver-premiere-2017-sxsw-conference-and-festivals-on-march-11-2017-in-austin-texas-photo-by-matt-winkelmeyer_getty-imagesfor-sxsw-square.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                        </center>
                      </div>
                      <div class="name">
                        <center><h3 class="title">Christian Louboutin</h3></center>
                      </div>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                  <div class="profile-tabs">
                    <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                      <li class="nav-item" style="width: 140px; lenght: 100px; padding: 7px;">
                        <a class="nav-link active" style="background-color: #EA6B9D;" href="#studio" role="tab" data-toggle="tab">
                        <div class="icon"><i class="bx bx-receipt"></i></div>
                              Atur Pola
                          </a>
                      </li>
                      <li class="nav-item" style="width: 140px; padding: 7px;">
                        <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                          <div class="icon"><i class="ri-calendar-todo-line"></i></div>
                              Jadwal Makan
                          </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Informasi Kesehatan</h3>
              <ul>
                <li><strong>Info 1</strong>: Sehat</li>
                <li><strong>Info 2</strong>: Sehat</li>
                <li><strong>Info 3</strong>: Sehat</li>
                <li><strong>Info 4</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

        <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>WeCare<span>.</span></h3>
              <p>
               Jl. Umban Sari ( Patin ) No. 1, <br>
               Riau 28265, Indonesia<br><br>
                <strong>Phone:</strong> +62 76153939<br>
                <strong>Email:</strong> info@pcr.ac.id<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() ?>/assets/user/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url() ?>/assets/user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/user/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/user/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url() ?>/assets/user/assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo base_url() ?>/assets/user/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>/assets/user/assets/js/main.js"></script>

  <script>
  var big_image;

  $(document).ready(function() {
    BrowserDetect.init();

    // Init Material scripts for buttons ripples, inputs animations etc, more info on the next link https://github.com/FezVrasta/bootstrap-material-design#materialjs
    $('body').bootstrapMaterialDesign();

    window_width = $(window).width();

    $navbar = $('.navbar[color-on-scroll]');
    scroll_distance = $navbar.attr('color-on-scroll') || 500;

    $navbar_collapse = $('.navbar').find('.navbar-collapse');

    //  Activate the Tooltips
    $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();

    // Activate Popovers
    $('[data-toggle="popover"]').popover();

    if ($('.navbar-color-on-scroll').length != 0) {
      $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);
    }

    materialKit.checkScrollForTransparentNavbar();

    if (window_width >= 768) {
      big_image = $('.page-header[data-parallax="true"]');
      if (big_image.length != 0) {
        $(window).on('scroll', materialKit.checkScrollForParallax);
      }

    }


  });

  $(document).on('click', '.navbar-toggler', function() {
    $toggle = $(this);

    if (materialKit.misc.navbar_menu_visible == 1) {
      $('html').removeClass('nav-open');
      materialKit.misc.navbar_menu_visible = 0;
      $('#bodyClick').remove();
      setTimeout(function() {
        $toggle.removeClass('toggled');
      }, 550);

      $('html').removeClass('nav-open-absolute');
    } else {
      setTimeout(function() {
        $toggle.addClass('toggled');
      }, 580);


      div = '<div id="bodyClick"></div>';
      $(div).appendTo("body").click(function() {
        $('html').removeClass('nav-open');

        if ($('nav').hasClass('navbar-absolute')) {
          $('html').removeClass('nav-open-absolute');
        }
        materialKit.misc.navbar_menu_visible = 0;
        $('#bodyClick').remove();
        setTimeout(function() {
          $toggle.removeClass('toggled');
        }, 550);
      });

      if ($('nav').hasClass('navbar-absolute')) {
        $('html').addClass('nav-open-absolute');
      }

      $('html').addClass('nav-open');
      materialKit.misc.navbar_menu_visible = 1;
    }
  });

  materialKit = {
    misc: {
      navbar_menu_visible: 0,
      window_width: 0,
      transparent: true,
      fixedTop: false,
      navbar_initialized: false,
      isWindow: document.documentMode || /Edge/.test(navigator.userAgent)
    },

    initFormExtendedDatetimepickers: function() {
      $('.datetimepicker').datetimepicker({
        icons: {
          time: "fa fa-clock-o",
          date: "fa fa-calendar",
          up: "fa fa-chevron-up",
          down: "fa fa-chevron-down",
          previous: 'fa fa-chevron-left',
          next: 'fa fa-chevron-right',
          today: 'fa fa-screenshot',
          clear: 'fa fa-trash',
          close: 'fa fa-remove'
        }
      });
    },

    initSliders: function() {
      // Sliders for demo purpose
      var slider = document.getElementById('sliderRegular');

      noUiSlider.create(slider, {
        start: 40,
        connect: [true, false],
        range: {
          min: 0,
          max: 100
        }
      });

      var slider2 = document.getElementById('sliderDouble');

      noUiSlider.create(slider2, {
        start: [20, 60],
        connect: true,
        range: {
          min: 0,
          max: 100
        }
      });
    },

    checkScrollForParallax: function() {
      oVal = ($(window).scrollTop() / 3);
      big_image.css({
        'transform': 'translate3d(0,' + oVal + 'px,0)',
        '-webkit-transform': 'translate3d(0,' + oVal + 'px,0)',
        '-ms-transform': 'translate3d(0,' + oVal + 'px,0)',
        '-o-transform': 'translate3d(0,' + oVal + 'px,0)'
      });
    },

    checkScrollForTransparentNavbar: debounce(function() {
      if ($(document).scrollTop() > scroll_distance) {
        if (materialKit.misc.transparent) {
          materialKit.misc.transparent = false;
          $('.navbar-color-on-scroll').removeClass('navbar-transparent');
        }
      } else {
        if (!materialKit.misc.transparent) {
          materialKit.misc.transparent = true;
          $('.navbar-color-on-scroll').addClass('navbar-transparent');
        }
      }
    }, 17)
  };

  // Returns a function, that, as long as it continues to be invoked, will not
  // be triggered. The function will be called after it stops being called for
  // N milliseconds. If `immediate` is passed, trigger the function on the
  // leading edge, instead of the trailing.

  function debounce(func, wait, immediate) {
    var timeout;
    return function() {
      var context = this,
        args = arguments;
      clearTimeout(timeout);
      timeout = setTimeout(function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
      }, wait);
      if (immediate && !timeout) func.apply(context, args);
    };
  };

  var BrowserDetect = {
    init: function() {
      this.browser = this.searchString(this.dataBrowser) || "Other";
      this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
    },
    searchString: function(data) {
      for (var i = 0; i < data.length; i++) {
        var dataString = data[i].string;
        this.versionSearchString = data[i].subString;

        if (dataString.indexOf(data[i].subString) !== -1) {
          return data[i].identity;
        }
      }
    },
    searchVersion: function(dataString) {
      var index = dataString.indexOf(this.versionSearchString);
      if (index === -1) {
        return;
      }

      var rv = dataString.indexOf("rv:");
      if (this.versionSearchString === "Trident" && rv !== -1) {
        return parseFloat(dataString.substring(rv + 3));
      } else {
        return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
      }
    },

    dataBrowser: [{
        string: navigator.userAgent,
        subString: "Chrome",
        identity: "Chrome"
      },
      {
        string: navigator.userAgent,
        subString: "MSIE",
        identity: "Explorer"
      },
      {
        string: navigator.userAgent,
        subString: "Trident",
        identity: "Explorer"
      },
      {
        string: navigator.userAgent,
        subString: "Firefox",
        identity: "Firefox"
      },
      {
        string: navigator.userAgent,
        subString: "Safari",
        identity: "Safari"
      },
      {
        string: navigator.userAgent,
        subString: "Opera",
        identity: "Opera"
      }
    ]

  };
  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WeCare</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>/assets/user/assets/img/w_logo.png" rel="icon">
  <link href="<?php echo base_url() ?>/assets/user/assets/img/w_logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->


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
    header {
      background-color: #333333;
    }
  </style>
</head>

<body>

  <?= view('user/_parts/nav') ?>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>User Details</h2>
          <ol>
            <li><a href="<?php echo base_url('index')?>">Home</a></li>
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
                <div class="col-md-6 mx-auto">
                    <div class="profile">
                      <div class="avatar">
                        <center>
                          <img src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTU0NjQzOTk4OTQ4OTkyMzQy/ansel-elgort-poses-for-a-portrait-during-the-baby-driver-premiere-2017-sxsw-conference-and-festivals-on-march-11-2017-in-austin-texas-photo-by-matt-winkelmeyer_getty-imagesfor-sxsw-square.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                        </center>
                      </div>
                      <div class="name">
                        <center><h4 class="title my-4">Christian Louboutin</h4></center>
                      </div>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mx-auto">
                  <div class="profile-tabs">
                    <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                      <li class="nav-item" style="width: 140px; padding: 7px;">
                        <a class="nav-link active" style="background-color: #EA6B9D;" href="<?php echo base_url('check')?>" role="tab" data-toggle="tab">
                          <div class="icon text-center">
                            <i class="bx bx-receipt"></i>
                          </div>
                              <div class="text-center">Atur Pola</div>
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
                <li><strong>Info 1</strong>: <?= $status?></li>
                <li><strong>Info 2</strong>: <?= $status?></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Kenapa kesehatan itu penting?</h2>
              <p>
                Kesehatan adalah suatu hal yang mendasar dalam hidup manusia.
                Banyak orang sakit dan keluarganya yang mengorbankan segala harta benda
                mereka untuk mencari kesembuhan. Begitu pentingnya arti kesehatan
                sehingga ada orang memilih lebih baik mati daripada hidup tidak sehat dan
                tidak dapat melakukan apa-apa 
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
</body>

</html>
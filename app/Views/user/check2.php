<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <title>Survey</title>
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

    #calendar {
      max-width: 1100px;
      min-height: 500px;
      margin: 0 auto;
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
          <h2>Survey</h2>
          <ol>
            <li><a href="<?php echo base_url("")?>">Home</a></li>
            <li><a href="<?php echo base_url("profile")?>">User Details</a></li>
            <li>Survey</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="form-group">
            <form action="<?php echo base_url('home/survey_action')?>" method="post">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <table class="table">
                            <tr>
                                <td>1. Berapa kali anda mengonsumsi makanan instan dalam sehari? (tidak termasuk snack ringan)</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q1" id="q1" value="2x">
                                        <label class="form-check-label" for="q1">
                                            2x
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q1" id="q1" value="3x">
                                        <label class="form-check-label" for="q1">
                                            3x
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q1" id="q1" value="4x">
                                        <label class="form-check-label" for="q1">
                                            4x
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q1" id="q1" value="5x">
                                        <label class="form-check-label" for="q1">
                                            5x
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2. Berapa kali dalam sehari anda mengonsumsi makanan instan? snack?</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q2" id="q2" value="2x">
                                        <label class="form-check-label" for="q2">
                                            2x
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q2" id="q2" value="3x">
                                        <label class="form-check-label" for="q2">
                                            3x
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q2" id="q2" value="4x">
                                        <label class="form-check-label" for="q2">
                                            4x
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q2" id="q2" value="5x">
                                        <label class="form-check-label" for="q2">
                                            5x
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3. Apakah jadwal makan anda teratur?</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q3" id="q3" value="ya">
                                        <label class="form-check-label" for="q3">
                                            Ya
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q3" id="q3" value="tidak">
                                        <label class="form-check-label" for="q3">
                                            Tidak
                                        </label>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4. Bagaimana porsi makan anda yang dimakan setiap hari?</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q4" id="q4" value="1/2">
                                        <label class="form-check-label" for="q4">
                                            1/2 Piring
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q4" id="q4" value="1">
                                        <label class="form-check-label" for="q4">
                                            1 Piring
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q4" id="q4" value="2">
                                        <label class="form-check-label" for="q4">
                                            2 Piring
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q4" id="q4" value="3">
                                        <label class="form-check-label" for="q4">
                                            3 Piring
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5. Kapan porsi makan anda yang paling banyak?</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q5" id="q5" value="pagi">
                                        <label class="form-check-label" for="q5">
                                            Pagi
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q5" id="q5" value="siang">
                                        <label class="form-check-label" for="q5">
                                            Siang
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q5" id="q5" value="malam">
                                        <label class="form-check-label" for="q5">
                                            Malam
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q5" id="q5" value="ketiganya">
                                        <label class="form-check-label" for="q5">
                                            Ketiganya
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6. Makanan apa yang menjadi sumber makanan pokok keluarga?</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q6" id="q6" value="beras">
                                        <label class="form-check-label" for="q6">
                                            Beras
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q6" id="q6" value="sagu">
                                        <label class="form-check-label" for="q6">
                                            Sagu
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q6" id="q6" value="umbi">
                                        <label class="form-check-label" for="q6">
                                            Umbi-umbian
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q6" id="q6" value="ketiganya">
                                        <label class="form-check-label" for="q6">
                                            Ketiganya
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7. Di antara sumber-sumber protein hewan berikut, manakah yang sering anda konsumsi?</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q7" id="q7" value="ikan">
                                        <label class="form-check-label" for="q7">
                                            Ikan
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q7" id="q7" value="daging">
                                        <label class="form-check-label" for="q7">
                                            Daging
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q7" id="q7" value="telur">
                                        <label class="form-check-label" for="q7">
                                            Telur
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q7" id="q7" value="susu">
                                        <label class="form-check-label" for="q7">
                                            Susu
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8. Di antara sumber-sumber protein nabati berikut, manakah yang sering anda konsumsi?</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q8" id="q8" value="kacang">
                                        <label class="form-check-label" for="q8">
                                            Kacang-kacangan
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q8" id="q8" value="tahu">
                                        <label class="form-check-label" for="q8">
                                            Tahu
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q8" id="q8" value="sayur">
                                        <label class="form-check-label" for="q8">
                                            Sayuran
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q8" id="q8" value="tempe">
                                        <label class="form-check-label" for="q8">
                                            Tempe
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>9. Seberapa sering mengonsumsi makanan instan?</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q9" id="q9" value="setiap">
                                        <label class="form-check-label" for="q9">
                                            Setiap hari
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q9" id="q9" value="kadang">
                                        <label class="form-check-label" for="q9">
                                            Kadang-kadang
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q9" id="q9" value="jarang">
                                        <label class="form-check-label" for="q9">
                                            Jarang
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q9" id="q9" value="tidak">
                                        <label class="form-check-label" for="q9">
                                            Tidak pernah
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10. Kapan anda mengonsumsi sayuran?</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q10" id="q10" value="setiap">
                                        <label class="form-check-label" for="q10">
                                            Setiap hari
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q10" id="q10" value="kadang">
                                        <label class="form-check-label" for="q10">
                                            Kadang-kadang
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q10" id="q10" value="jarang">
                                        <label class="form-check-label" for="q10">
                                            Jarang
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q10" id="q10" value="tidak">
                                        <label class="form-check-label" for="q10">
                                            Tidak pernah
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>11. Kapan anda mengonsumsi buah-buahan?</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q11" id="q11" value="setiap">
                                        <label class="form-check-label" for="q11">
                                            Setiap hari
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q11" id="q11" value="kadang">
                                        <label class="form-check-label" for="q11">
                                            Kadang-kadang
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q11" id="q11" value="jarang">
                                        <label class="form-check-label" for="q11">
                                            Jarang
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q11" id="q11" value="tidak">
                                        <label class="form-check-label" for="q11">
                                            Tidak pernah
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>12. Kapan anda mengonsumsi daging?</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q12" id="q12" value="setiap">
                                        <label class="form-check-label" for="q12">
                                            Setiap-hari
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q12" id="q12" value="kadang">
                                        <label class="form-check-label" for="q12">
                                            Kadang-kadang
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q12" id="q12" value="jarang">
                                        <label class="form-check-label" for="q12">
                                            Jarang
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q12" id="q12" value="tidak">
                                        <label class="form-check-label" for="q12">
                                            Tidak pernah
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>13. Kapan anda mengonsumsi ikan laut?</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q13" id="q13" value="setiap">
                                        <label class="form-check-label" for="q13">
                                            Setiap hari
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q13" id="q13" value="kadang">
                                        <label class="form-check-label" for="q13">
                                            Kadang-kadang
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q13" id="q13" value="jarang">
                                        <label class="form-check-label" for="q13">
                                            Jarang
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q13" id="q13" value="tidak">
                                        <label class="form-check-label" for="q13">
                                            Tidak Pernah
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>14. Berapa lama frekuensi makan anda dalam sehari?</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q14" id="q14" value="2">
                                        <label class="form-check-label" for="q14">
                                            2 Jam
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q14" id="q14" value="3">
                                        <label class="form-check-label" for="q14">
                                            3 Jam
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q14" id="q14" value="4">
                                        <label class="form-check-label" for="q14">
                                            4 Jam
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q14" id="q14" value="5">
                                        <label class="form-check-label" for="q14">
                                            5-6 Jam
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>15. Kegiatan apa yang sering anda lakukan ketika anda selesai makan?</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q15" id="q15" value="tidur">
                                        <label class="form-check-label" for="q15">
                                            Tidur
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q15" id="q15" value="belajar">
                                        <label class="form-check-label" for="q15">
                                            Belajar
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q15" id="q15" value="nonton">
                                        <label class="form-check-label" for="q15">
                                            Menonton
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q15" id="q15" value="berat">
                                        <label class="form-check-label" for="q15">
                                            Pekerjaan Berat
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>16. Berapa kali kah kamu melakukan olahraga dalam 1 minggu</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q16" id="q16" value="tidak">
                                        <label class="form-check-label" for="q16">
                                            Tidak pernah
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q16" id="q16" value="jarang">
                                        <label class="form-check-label" for="q16">
                                            1-2 kali
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q16" id="q16" value="kadang">
                                        <label class="form-check-label" for="q16">
                                            3-5 kali
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q16" id="q16" value="sering">
                                        <label class="form-check-label" for="q16">
                                            6-7 kali
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>17. Berapa lama durasi setiap anda melakukan olahraga </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q17" id="q17" value="singkat">
                                        <label class="form-check-label" for="q17">
                                            < 10 menit
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q17" id="q17" value="sedang">
                                        <label class="form-check-label" for="q17">
                                            10-19 menit
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q17" id="q17" value="panjang">
                                        <label class="form-check-label" for="q17">
                                            20-29 menit
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q17" id="q17" value="sangat">
                                        <label class="form-check-label" for="q17">
                                            > 30 menit
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>18. Seberapa besar intensitas anda setiap anda melakukan olahraga </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q18" id="q18" value="ringan">
                                        <label class="form-check-label" for="q18">
                                            Ringan
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q18" id="q18" value="sedang">
                                        <label class="form-check-label" for="q18">
                                            Sedang
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q18" id="q18" value="agak">
                                        <label class="form-check-label" for="q18">
                                            Agak berat
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q18" id="q18" value="berat">
                                        <label class="form-check-label" for="q18">
                                            Berat
                                        </label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <button type="submit" class="btn-dark">Submit</button>
                </div>
            </form>
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
            <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('')?>">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('')?>#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('')?>#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('')?>#team">Teams</a></li>
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

  

  <!-- <script>
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

  var survey = []; //Bidimensional array: [ [1,3], [2,4] ]

  </script> -->
</body>

</html>
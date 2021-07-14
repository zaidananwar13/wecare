<style>
    #hero .cont {
        position: relative;
        padding-top: 74px;
        text-align: left;
    }
    #hero .cont .butt{
        text-align: center;
        margin: 5px 0 10px 60px;
        padding-top: 40px;
    }
    .form {
        padding-top: 20px;
    }

    .form .mainform {
        padding-left: 15px;
    }

    .form .mainform h6 {
        font-size: 20px;
        font-weight: 500;
        color : #fff;
        margin: 5px 0 10px 60px;
    }

    input[type=text] {
        width: 120%;
        padding: 4px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 3px solid #ccc;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
    }
    
    input[type=text]:focus {
        border: 3px solid #000;
    }
    .secform {
        padding-top: 20px;
    }

    .secform .mainform {
        padding-left: 15px;
    }

    .secform .mainform .butt{
        text-align: center;
        margin: 5px 0 10px 60px;
        padding-top: 40px;
    }

    .secform .mainform p {
        font-size: 15px;
        color: #000;
        margin-left: 60px;
    }

.features .image {
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 400px;
}
</style>
<html>
    <head>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>WeCare | Survey</title>
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


    </head>
    <body>
        <!--Form-->
        <form action="">
        <section id="hero">
            <div class="cont">
                <div class="row">
                    <div class="form">
                        <div class="mainform">
                            <div class="section-title">
                                <h2>Biodata</h2>
                                <p>Biodata Survey</p>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-4 col-auto">
                                    <h6><span>Nama</span></h6>
                                </div>
                                <div class="col-auto col-6">
                                    <input type="text" id="" name="" class="input" >
                                </div>
                                <br>
                                <div class="col-4 col-auto">
                                    <h6><span>Umur</span></h6>
                                </div>
                                <div class="col-auto col-6">
                                    <input type="text" name="" id="" class="input">
                                </div>
                                <div class="col-4 col-auto">
                                    <h6><span>Jenis Kelamin</span></h6>
                                </div>
                                <div class="col-auto col-6">
                                    <input type="text" name="" id="" class="input">
                                </div>
                                <div class="col-4 col-auto">
                                    <h6><span>Tingkat Ekonomi</span></h6>
                                </div>
                                <div class="col-auto col-6">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>Pilih</option>
                                        <option value="">Kelas Bawah</option>
                                        <option value="">Kelas Menengah</option>
                                        <option value="">Kelas Atas</option>
                                    </select>
                                </div>
                                <div class="col-4 col-auto">
                                    <h6><span>Pola Hidup</span></h6>
                                </div>
                                <div class="col-auto col-6">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>Pilih</option>
                                        <option value="">Sehat</option>
                                        <option value="">Kurang</option>
                                        <option value="">Tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="features" class="features">
            <div class="secform">
                <div class="mainform">
                    <div class="section-title">
                        <h2>Survey</h2>
                        <p>Body Survey</p>
                    </div>
                    <div class="row">
                        <div class="col-auto col-7">
                            <p>1. Berapa kali anda mengonsumsi makanan instan dalam sehari? (tidak termasuk snack ringan)</p>
                        </div>
                        <div class="col-auto col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="">
                                <label class="form-check-label" for="">2x</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="">
                                <label class="form-check-label" for="">3x</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio3">4x</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio3">5x</label>
                            </div>
                        </div>
                        <div class="col-auto col-7">
                            <p>2. Berapa kali dalam sehari anda mengonsumsi makanan instan? snack?</p>
                        </div>
                        <div class="col-auto col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio1">2x</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">3x</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio3">4x</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio3">5x</label>
                            </div>
                        </div>
                        <div class="col-auto col-7">
                            <p>3. Apakah jadwal makan teratur?</p>
                        </div>
                        <div class="col-auto col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                            </div>
                        </div>
                        <div class="col-auto col-7">
                            <p>4. Bagaimana porsi makan anda yang dimakan setiap hari?</p>
                        </div>
                        <div class="col-auto col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio1">1/2 Piring</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">1 Piring</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio3">2 Piring</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio3">>2 Piring</label>
                            </div>
                        </div>
                        <div class="col-auto col-7">
                            <p>5. Kapan porsi makan anda yang paling banyak?</p>
                        </div>
                        <div class="col-auto col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio1">Pagi</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Siang</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio3">Malam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio3">Ketiganya</label>
                            </div>
                        </div>
                        <div class="col-auto col-7">
                            <p>6. Makanan apa yang menjadi sumber makanan pokok keluarga?</p>
                        </div>
                        <div class="col-auto col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio1">Beras</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Sagu</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Umbi-umbian</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Ketiganya</label>
                            </div>
                        </div>
                        <div class="col-auto col-7">
                            <p>7. Di antara sumber-sumber protein hewan berikut, manakah yang sering anda konsumsi?</p>
                        </div>
                        <div class="col-auto col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio1">Ikan</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Daging</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Telur</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Susu</label>
                            </div>
                        </div>
                        <div class="col-auto col-7">
                            <p>8. Di antara sumber-sumber protein nabati berikut, manakah yang sering anda konsumsi?</p>
                        </div>
                        <div class="col-auto col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio1">Kacang-kacangan</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Tahu</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Sayuran</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Tempe</label>
                            </div>
                        </div>
                        <div class="col-auto col-7">
                            <p>9. Seberapa sering mengonsumsi makanan instan?</p>
                        </div>
                        <div class="col-auto col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio1">Setiap hari</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Kadang-kadang</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Jarang</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Tidak pernah</label>
                            </div>
                        </div>
                        <div class="col-auto col-7">
                            <p>10. Seberapa sering mengonsumsi sayuran?</p>
                        </div>
                        <div class="col-auto col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio1">Setiap hari</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Kadang-kadang</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Jarang</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Tidak pernah</label>
                            </div>
                        </div>
                        <div class="col-auto col-7">
                            <p>11. Seberapa sering mengonsumsi makanan buah-buahan?</p>
                        </div>
                        <div class="col-auto col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio1">Setiap hari</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Kadang-kadang</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Jarang</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Tidak pernah</label>
                            </div>
                        </div>
                        <div class="col-auto col-7">
                            <p>12. Seberapa sering mengonsumsi ikan laut?</p>
                        </div>
                        <div class="col-auto col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio1">Setiap hari</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Kadang-kadang</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Jarang</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Tidak pernah</label>
                            </div>
                        </div>
                        <div class="col-auto col-7">
                            <p>13. Seberapa sering mengonsumsi daging?</p>
                        </div>
                        <div class="col-auto col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio1">Setiap hari</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Kadang-kadang</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Jarang</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Tidak pernah</label>
                            </div>
                        </div>
                        <div class="col-auto col-7">
                            <p>14. Berapa lama frekuensi makan anda dalam sehari?</p>
                        </div>
                        <div class="col-auto col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio1">>2 Jam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">>3 Jam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">>4 Jam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">>5-6 Jam</label>
                            </div>
                        </div>
                        <div class="col-auto col-7">
                            <p>15. Kegiatan apa yang sering anda lakukan ketika anda selesai makan?</p>
                        </div>
                        <div class="col-auto col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio1">Tidur</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Belajar</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Menonton</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="" id="" value="">
                                <label class="form-check-label" for="inlineRadio2">Lainnya</label>
                            </div>
                        </div>
                        <div class="butt">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        </form>
        
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
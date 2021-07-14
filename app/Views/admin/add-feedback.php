<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wecare - Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/assets/css/style.css">

    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/admin/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- Navbar -->
      <?php echo view('admin/_parts/nav'); ?>

      <div class="container-fluid page-body-wrapper">
        <!-- Sidebar -->
        <?php echo view('admin/_parts/sidebar'); ?>
        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Feedback </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Feedback</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add</li>
                </ol>
              </nav>
            </div>
            <div class="row">

              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Feedback ID: <?php echo $id ?></h4>
                    <p class="card-description"> Fill form elements </p>
                    <form class="forms-sample" action="" method="post">
                      <div class="form-group mb-5">
                        <label for="exampleTextarea1"><b>Keluhan</b></label>
                        <textarea disabled class="form-control" id="exampleTextarea1" rows="4"><?php echo $keluhan; ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea name="balasan" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <button type="submit" name="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:<?php echo base_url() ?>/assets/admin/partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates </a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url() ?>/assets/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url() ?>/assets/admin/assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url() ?>/assets/admin/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url() ?>/assets/admin/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url() ?>/assets/admin/assets/js/file-upload.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php
  // echo checkReplyStatus(2); die;
?>

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

            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Konsultasi</h4>
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Profile </th>
                          <th> Nama </th>
                          <th> Pertanyaan </th>
                          <th> Status </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; foreach($consultations as $consult) : ?>
                        <tr>
                          <td> <?php echo $i; ?> </td>
                          <td class="py-1">
                            <img src="<?php echo base_url().'/'. generateRandImage(); ?>" alt="image" />
                          </td>
                          <td> <?php echo getUserName($consult['id_user']); ?> </td>
                          <td class="question">
                            <?php echo $consult["pertanyaan"] ?>
                          </td>
                          <td><?php echo checkReplyStatus($consult['id_konsultasi']) ?></td>
                          <td class="dropdown"> 
                            <i class="mdi mdi-dots-vertical " id="profileDropdown"  data-toggle="dropdown" aria-expanded="false"></i>
                            
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalKonsul-<?php echo $consult['id_konsultasi'] ?>">
                                <i class="mdi mdi-eye mr-2 text-success" ></i> Lihat Feedback </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" onclick="return confirm('Are you wish to delete the data?')"
                              href="<?php echo csite_url('dashboard/konsultasi/delete/' . $consult['id_konsultasi']); ?>">
                                <i class="mdi mdi-delete mr-2 text-danger"></i> Hapus </a>
                            </div>
                          </td>
                        </tr>
                        
                        <?php $i++; endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          
          <!-- Modal -->
          <?php foreach($consultations as $consult) : ?>
            <div class="modal fade" id="modalKonsul-<?php echo $consult['id_konsultasi'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Feedback</h5>
                    <i class="mdi mdi-close-circle mr-2 text-primary btn-close" data-bs-dismiss="modal" aria-label="Close"></i>
                  </div>
                  <div class="modal-body">

                  <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      
                      <div class="row">
                        <a href="<?php echo csite_url('dashboard/feedback/add/' . $consult['id_konsultasi']) ?>">
                          <button type="button" class="btn btn-xs btn-gradient-primary btn-rounded btn-icon ml-5 mr-3">
                              <i class="mdi mdi-plus"></i>
                          </button>
                        </a>

                        <h5 class="mt-auto mb-auto">Add New</h5>
                      </div>

                      <div class="card-body">
                        </p>
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th> Date </th>
                              <th> Admin </th>
                              <th> Balasan </th>
                              <th> Action </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $feeds = getFeed($consult['id_konsultasi']); if(count($feeds) != 0) : ?>
                            <?php foreach($feeds as $feed) : ?>
                                <tr>
                                  <td> <?php echo $feed['tanggal'] ?> </td>
                                  <td class="py-1">
                                    <img class="mr-3" src="<?php echo base_url().'/'. generateRandImage(); ?>" alt="image" />
                                    <?php echo getAdminName($feed['id_admin']); ?>
                                  </td>
                                  <td class="question mt-3">
                                    <?php echo $feed['balasan'] ?>
                                  </td>
                                  <td>
                                    <a href="<?php echo csite_url('dashboard/feedback/edit/' . $feed['id_konsultasi'] . '/' . $feed['id_balasan']) ?>">                                      
                                      <button type="button" class="btn btn-info btn-opt-2">Edit</button>
                                    </a>
                                  </td>
                                  <td>
                                    <a onclick="return confirm('Are you wish to delete the data?')" href="<?php echo csite_url('dashboard/feedback/delete/' . $feed['id_konsultasi'] . '/' . $feed['id_balasan']) ?>">   
                                      <button type="button" class="btn btn-danger btn-opt">Delete</button>
                                    </a>
                                  </td>
                                </tr>
                            <?php endforeach; ?>
                            
                            <?php else: ?>
                                <tr>
                                  <td class="text-center text-danger" colspan="5"><h5>Feedback  belum diberikan!</h5></td>
                                </tr>
                              <?php endif; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

          <?php endforeach; ?>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
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
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
    <script src="<?php echo base_url() ?>/assets/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url() ?>/assets/admin/assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url() ?>/assets/admin/assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url() ?>/assets/admin/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url() ?>/assets/admin/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url() ?>/assets/admin/assets/js/dashboard.js"></script>
    <script src="<?php echo base_url() ?>/assets/admin/assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
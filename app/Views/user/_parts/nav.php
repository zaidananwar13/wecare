<?php
$uri = current_url(true);
?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="<?= csite_url('') ?>">WeCare<span>.</span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto <?= (isset($_SESSION['access_token'])) ? '' : 'active' ?>" href="<?= csite_url('#hero') ?>">Home</a></li>
          <li><a class="nav-link scrollto" href="<?= csite_url('#about') ?>">About</a></li>
          <li><a class="nav-link scrollto" href="<?= csite_url('#services') ?>">Services</a></li>
          <li><a class="nav-link scrollto" href="<?= csite_url('#team') ?>">Team</a></li>
          <li><a class="nav-link scrollto" href="<?= csite_url('#contact') ?>">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <?php if(isset($_SESSION['access_token'])) : ?>      
        <?php if(isset($page)) : ?>          
          <a href="<?= csite_url('auth/logout') ?>" class="btn btn-warning scrollto">Logout</a>
        <?php else:  ?>   
          <a href="<?= csite_url('profile') ?>" class="btn btn-warning scrollto">My Profile</a>
        <?php endif;  ?>
      <?php else : ?>
        <a href="auth/user" class="get-started-btn scrollto">Log In</a>
      <?php endif; ?>

    </div>
  </header><!-- End Header -->
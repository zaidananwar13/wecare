<?php
	if(isset($GLOBALS['global_var'])) {
		echo "ree"; die;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>KitaCare - Masuk Akun</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>/assets/auth/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/auth/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/auth/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/auth/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/auth/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/auth/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/auth/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url() ?>/assets/auth/images/img-01.png" alt="IMG">
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
				</div>

				<div class="login100-form validate-form">
					<span class="login100-form-title">
						Sign In with Your Google Account!
					</span>
					
					<div class="container-login100-form-btn">
						<button onclick="window.location.href='verify'" class="login100-form-btn">
							Sign In
						</button>
					</div>

					
					<div class="text-center p-t-136">
						<a class="txt2" href="../">
							Kembali ke Halaman Utama
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->	
	<script src="<?php echo base_url() ?>/assets/auth/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>/assets/auth/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url() ?>/assets/auth/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>/assets/auth/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>/assets/auth/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>/assets/auth/js/main.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Arkatama | Input Data Pengguna</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url(); ?>assets/arkatama.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/form-input/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/form-input/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/form-input/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/form-input/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/form-input/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/form-input/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/form-input/css/main.css">
	<!--===============================================================================================-->
	<!-- Sweetalert -->
	<script src="<?= base_url() ?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
	<div>
		<h5 style="padding: 20px;">Nama : Mubessirul Ummah (Universitas Trunojoyo Madura)</h5>
	</div>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="padding:100px 130px 33px 95px;">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= base_url(); ?>assets/form-input/images/arkatama.png" alt="IMG">
				</div>


				<form class="login100-form" action="<?= base_url('datacontroller/processInput'); ?>" method="POST">
					<span class="login100-form-title" style="width:104%;">
						Input Data Pengguna
					</span>


					<div class="wrap-input100">
						<input class="input100" type="text" name="data_input" id="data_input" required placeholder="Input Data">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-database" aria-hidden="true"></i>
						</span>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Submit
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/form-input/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/form-input/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url(); ?>assets/form-input/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/form-input/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/form-input/vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/form-input/js/main.js"></script>

</body>

</html>
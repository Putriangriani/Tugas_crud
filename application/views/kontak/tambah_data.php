<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambah Data</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<div class="contact100-form validate-form">
				<span class="contact100-form-title">
					Tambah Data
				</span>
				<div style="color: red;"><?php echo validation_errors(); ?></div>
				<?php echo form_open("kontak/tambah"); ?>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="input_no" placeholder="No" value="<?php echo set_value('input_no'); ?>" required>
				</div>
				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="input_nama" placeholder="Nama" value="<?php echo set_value('input_nama'); ?>" required>
				</div>
				<div class="wrap-input100 validate-input">
					<input class="input100" id="email" type="text" name="input_email" placeholder="Email" value="<?php echo set_value('input_email'); ?>" required>
				</div>
				<div class="wrap-input100 validate-input">
					<input class="input100" id="phone" type="text" name="input_phone" placeholder="Phone" value="<?php echo set_value('input_phone'); ?>" required>
				</div>


				
				<input type="submit" name="submit" value="TAMBAH" style="size: 15000px">
				<br><br>
				<a href="<?php echo base_url(); ?>"><input type="button" value="BATAL" style="size:15000px,"></a>
    			<?php echo form_close(); ?>
    			
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/js/jquery.js">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/js/bootstrap.min.js">
</head>
<body>

	<div class="container">

		<div class="col-xs-3">
			<?php $this->load->view('layouts/login_view'); ?>
		</div>

		<div class="col-xs-9">
			<?php $this->load->view($main_view); ?>
		</div>

	</div>

</body>
</html>
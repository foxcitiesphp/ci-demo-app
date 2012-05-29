<!DOCTYPE html>
<html>
	<head>
		<title>Todoster</title>

		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

		<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	</head>
	<body>
		<div class="container">
			<h1>Todoster</h1>
			<hr />

			<?php echo $this->load->view($content); ?>
		</div>
	</body>
</html>
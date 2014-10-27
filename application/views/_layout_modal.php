<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $meta_title; ?></title>
	<link rel="stylesheet" href="<?php echo site_url('css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo site_url('css/1.css'); ?>">
</head>

<body style="background: #555;">
<div class="container"><div class="col-md-8 col-md-offset-2"><div class="modal-show" role="dialog"><div class="modal-content">
	<div class="modal-header">
		<h2>User Login with there credentials</h2>

	</div>
	<div class="modal-body">
	<!-- <pre><?php echo print_r($this->session->userdata, TRUE); ?></pre> -->
	<?php echo form_open(); ?>
		<div class="well">
		<div class="text-danger"><?php echo validation_errors(); ?></div>
			<table class="table">
				<tr>
					<td class=" text-primary">Email</td>
					<td><?php echo form_input('email'); ?></td>
				</tr>
				<tr>
					<td class="text-primary">Password</td>
					<td><?php echo form_password('password'); ?></td>
				</tr>
				<tr>
					<td></td>
					<td><?php echo form_submit('submit','Login', 'class="btn btn-primary"'); ?></td>
				</tr>
			</table>
		</div>
		<?php echo form_close(); ?>
	</div>
	<div class="modal-footer">&copy;<?php echo $meta_title; ?></div></div>
</div></div></div>
<script src="<?php echo site_url('js/jquery.js') ?>"></script>
	<script src="<?php echo site_url('js/bootstrap.min.js'); ?>"></script>
</body>
</html>
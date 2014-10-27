<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $meta_title; ?></title>
	<link rel="stylesheet" href="<?php echo site_url('css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo site_url('css/1.css'); ?>">
</head>
<body>
	<div class="navbar navbar-inverse">
	<div class="navbar-header">
		<a href="<?php echo site_url('admin/deshboard'); ?>" class="btn btn-success"><?php echo $meta_title; ?></a>
	</div>
	<div class="navbar-collapse collapse">
       	<ul class="nav navbar-nav navbar-right lead">
			<li class="active nav"><a href="<?php echo site_url('admin/deshboard'); ?>">Home</a></li>
			<li class="nav"><?php echo anchor('admin/page','Pages'); ?></li>
			<li class="nav"><?php echo anchor('admin/Page/order','Order Pages'); ?></li>
			<li class="nav"><?php echo anchor('admin/article','News & Articles'); ?></li>
			<li class="nav"><?php echo anchor('admin/user','Users'); ?></li>
			<li class="nav"><?php echo anchor('admin/migration','Migration'); ?></li>	
		</ul>
	</div>
	</div>
<div class="container">
	<div class="row">
		<!-- main area -->
		<div class="col-md-9">
			<div class="well">
			<section class="">
				<h2>Welcome : <?php echo strtoupper($this->session->userdata('name')); ?></h2>
			</section>
			<?php echo var_dump($this->session->all_userdata()); ?>
			
			</div>
		</div>
		<!-- sidebar area -->
		<div class="col-md-3">
			<div class="panel panel-success">
			<div class="panel-heading">
				<h3>Sidebar</h3>
			</div>	 
			<section class="panel-body">
				<p><?php echo anchor('hussain@tv.com', '<i class="glyphicon glyphicon-envelope">Hussian</i>'); ?></p>
				<p><?php echo anchor('admin/user/logout', '<i class="glyphicon glyphicon-off">Logout</i>'); ?></p>
			</section>
			</div>
		</div>
	</div>
</div>

	<script src="<?php echo site_url('js/jquery.js') ?>"></script>
	<script src="<?php echo site_url('js/bootstrap.min.js'); ?>"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $meta_title; ?></title>
	<link rel="stylesheet" href="<?php echo site_url('css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo site_url('css/1.css'); ?>">
	<style>
	#ds:hover ul.dropdown-menu{
	display: block;
	}
	</style>
</head>
<body>
<div class="container">
 <h2><?php echo $site_name; ?></h2>  
<div class="container">
	   <div class="navbar navbar-inverse">
			<div class="navbar-header">
				<a href="<?php echo site_url('admin/deshboard'); ?>" class="btn btn-success"><?php echo $meta_title; ?></a>
			</div>
		<div class="navbar-collapse collapse">
	       	<ul class="nav navbar-nav navbar-right lead">
				<li class="active nav"><a href="<?php echo site_url('admin/deshboard'); ?>">Home</a></li>
				
		<li class="dropdown" id="ds"><a class="dropdown-toggle" data-toggle="dropdown" href="admin/page">Pages<i class="caret"></i></a>
		<ul class="dropdown-menu">
		<li><a href="#">Link</a></li>
		<li><a href="#">link</a></li>
		<li><a href="#">link</a></li>
		</ul>
		</li>

				<li class="nav"><?php echo anchor('admin/Page','Order Pages'); ?></li>
				<li class="nav"><?php echo anchor('admin/article','News & Articles'); ?></li>
				<li class="nav"><?php echo anchor('admin/user','Users'); ?></li>
				<li class="nav"><?php echo anchor('admin/migration','Migration'); ?></li>	
				
			</ul>
		</div>
	  </div>
</div>

<div class="container">
	<div class="row">
		<!-- main area -->
		<div class="col-md-9">
			<div class="well">
			<section class="">
				<h2>Main Contents</h2>
				<?php echo var_dump($page); ?>
			</section>
			</div>
		</div>


		<!-- sidebar area -->
		<div class="col-md-3">
			<div class="panel panel-success">
			<div class="panel-heading">
				<h3>Recent Posts</h3>
			</div>	 
			<section class="panel-body">

			<hr>
				<p><?php echo anchor('hussain@tv.com', '<i class="glyphicon glyphicon-envelope">Hussian</i>'); ?></p>
				<p><?php echo anchor('admin/user/logout', '<i class="glyphicon glyphicon-off">Logout</i>'); ?></p>
				<hr>
			</section>
			</div>
		</div>
	</div>
</div>
</div>
	<script src="<?php echo site_url('js/jquery.js') ?>"></script>
	<script src="<?php echo site_url('js/bootstrap.min.js'); ?>"></script>
</body>
</html>
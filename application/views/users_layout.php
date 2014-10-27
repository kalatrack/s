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
			<li class="nav"><?php echo anchor('admin/page', 'Pages', 'Pages'); ?></li>
			<li class="nav"><?php echo anchor('admin/page', 'order', 'Order Page'); ?></li>
			<li class="nav"><?php echo anchor('admin/article', 'articles', 'News & Articles'); ?></li>
			<li class="nav"><?php echo anchor('admin/user', 'Users', 'Users'); ?></li>
			<li class="nav"><?php echo anchor('admin/migration', 'Migration', 'Migration'); ?></li>
		</ul>
	</div>
	</div>
<div class="container">
	<div class="row">
		<!-- main area -->
		<div class="col-md-8">
			<div class="well">
			<section>
<?php echo anchor('admin/user/edit', '<i class="glyphicon glyphicon-edit text-primary" style="text-decoration: underline;">Add a User</i>'); ?>
	<h2>Users</h2>
	
				<table class="table table-striped table-hover table-border">
					<thead>
						<tr>
							<th>Email</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
<?php if(count($users)){ foreach($users as $user){  ?>
						<tr>
<td><?php echo anchor('admin/user/edit/'.$user->id, $user->email);  ?></td>
<td><?php echo anchor('admin/user/edit/'.$user->id,'<i class="glyphicon glyphicon-edit "></i>');?></td>
<td><?php echo anchor('admin/user/delete/'.$user->id,'<i class="glyphicon glyphicon-trash"></i>');?></td>
						</tr>
						<?php } ?><tr>
							<td><?php }else{ echo 'there is no user find in database';} ?></td>
						</tr>
					</tbody>
				</table>
				
			</section>
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
				<p><?php echo anchor('admin/user/logout', '<i class="glyphicon glyphicon-flash">Logout</i>'); ?></p>
			</section>
			<section class="panel-footer">@donot</section>
			</div>
		</div>
	</div>
</div>

	<script src="<?php echo site_url('js/jquery.js') ?>"></script>
	<script src="<?php echo site_url('js/bootstrap.min.js'); ?>"></script>
</body>
</html>
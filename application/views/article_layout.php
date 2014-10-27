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
			<li class="nav"><?php echo anchor('admin/Page','Order Pages'); ?></li>
			<li class="nav"><?php echo anchor('admin/article','News & Articles'); ?></li>
			<li class="nav"><?php echo anchor('admin/user','Users'); ?></li>
			<li class="nav"><?php echo anchor('admin/migration','Migration'); ?></li>			
		</ul>
	</div>
	</div>
<div class="container">
	<div class="row">
		<!-- main area -->
		<div class="col-md-8">
			<div class="well">
			<section>
<?php echo anchor('admin/article/edit', '<i class="glyphicon glyphicon-edit text-primary" style="text-decoration: underline;">Add a article</i>'); ?>
	<h2>Articles</h2>
	
				<table class="table table-striped table-hover table-border">
					<thead>
						<tr>
							<th>Publication Date</th>
							<th>Title</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
<?php if(count($articles)){ foreach($articles as $article){  ?>
						<tr>
<td><?php echo $article->pubdate;  ?></td>
<td><?php echo anchor('admin/article/edit/'.$article->id, $article->title);  ?></td>
<td><?php echo anchor('admin/article/edit/'.$article->id,'<i class="glyphicon glyphicon-edit "></i>');?></td>
<td><?php echo anchor('admin/article/delete/'.$article->id,'<i class="glyphicon glyphicon-trash"></i>');?></td>
						</tr>
						<?php } ?><tr>
							<td><?php }else{ echo 'there is no article find in database';} ?></td>
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
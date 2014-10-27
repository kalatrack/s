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
	<?php $button = anchor('admin/article', '<button class="btn btn-info">Cancel</button>'); ?>
		<div class="modal-body">
<h2><?php echo empty($article->id) ? 'Add a new article ': 'Edit article : '.$article->title.'<br>'.$button; ?></h2>

	<?php echo form_open(); ?>
		<div class="well">
		<div class="text-danger"><?php echo validation_errors(); ?></div>
			<table class="table table-striped">
				<tr> 
				<!-- parent child relation in between articles and sub articles  -->
<td class=" text-primary">Publication Date</td>
<td><?php echo form_input('pubdate', set_value('pubdate',$article->pubdate)); ?></td>
				</tr><tr>
					<td class=" text-primary">Title</td>
					<td><?php echo form_input('title',set_value('title', $article->title)); ?></td>
				</tr><tr>
					<td class=" text-primary">Slug</td>
					<td><?php echo form_input('slug', set_value('slug',$article->slug)); ?></td>
				</tr>
				<tr>
					<td class="text-primary">Body</td>
					<td><?php echo form_textarea('body', set_value('body',$article->body)); ?></td>
				</tr>
				<tr>
					<td></td>
					<td><?php echo form_submit('submit','Save', 'class="btn btn-primary"'); ?></td>
				</tr>
			</table>
		</div>
		<?php echo form_close(); ?>
	</div>

				
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

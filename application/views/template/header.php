<!DOCTYPE html>
<html>
	<head>
		<title>Archive Thesis</title>
		<!-- Bootstrap stylesheets -->
	   
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bootstrap-theme.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bootstrap-theme.css.map">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bootstrap-theme.min.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bootstrap.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bootstrap.css.map">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
	    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/npm.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/settings.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/user.js"></script>

		<script type="text/javascript">
		$(document).ready(function(e){

			custom_functions();	
			
		});
		function custom_functions(){
			user();
			settings();
		}
		</script>
	</head>
	<body>
		<!-- header -->

	<div class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">Archive Thesis</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class='nav nav-tabs navbar-right'>
				<li role="presentation">
					<a href="<?php echo base_url(); ?>" role="tab">Home</a>
				</li>
				<?php if($user_id != null): ?>
				<li role="presentation">
					<a href="<?php echo base_url(); ?>theses" role="tab">Theses</a>
				</li>
				<li role="presentation">
					<a href="<?php echo base_url(); ?>user" role="tab">Users</a>
				</li>
				<li role="presentation">
					<a href="<?php echo base_url(); ?>settings" role="tab">General Settings</a>
				</li>
				<li role="presentation">
					<a href="<?php echo base_url(); ?>user/logout" role="tab">Logout</a>
				</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>

		<!-- header end -->
	<!-- body -->

	<div class="container">
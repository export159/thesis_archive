<!DOCTYPE html>
<html>
	<head>
		<title>Archive Thesis</title>
	</head>

	<body>
		<div>
			Header
			<ul>
				<li>
					<a href="<?php echo base_url(); ?>">Home</a>
				</li>
				<?php if($user_id != null): ?>
				<li>
					<a href="<?php echo base_url(); ?>theses">Theses</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>user">Users</a>
				</li>
				<li>
					<!-- brad ini nga general settings amo ini an mga settings hini nga system sugad han add, edit, delete han category, course, roles ha usa la nga page basta an tanan nga settings -->
					<a href="<?php echo base_url(); ?>settings">General Settings</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>user/logout">Logout</a>
				</li>
				<?php endif; ?>
			</ul>
		</div>
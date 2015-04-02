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
					<?php if($user_id != null): ?>
						<a href="<?php echo base_url(); ?>user/logout">Logout</a>
					<?php endif; ?>
				</li>
			</ul>
		</div>
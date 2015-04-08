<div>
	<h2> <?php echo htmlentities($user['first_name']. ' '.$user['middle_name'].' '.$user['last_name']); ?></h2>
	<h4>Username:</h4> <?php echo htmlentities($user['username']); ?>
	<h4>Password:</h4> <?php echo htmlentities($user['password']); ?>
	<h4>User type:</h4> <?php echo htmlentities($user['role']); ?>
	<br />
	<br />
	<a href="<?php base_url() ?>edit/<?php echo htmlentities($user['id']); ?>">Edit</a>
</div>
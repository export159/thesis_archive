<form action="<?php echo base_url(); ?>user/update/<?php echo $user['id']; ?>" method="POST">
	<label>Username: </label><input type="text" value="<?php echo htmlentities($user['username']); ?>" name="username" />
	<br />
	<label>Password: </label><input type="password" value="<?php echo htmlentities($user['password']); ?>" name="password" />
	<br />
	<input type="hidden" value="<?php echo $user['info_id']; ?>" name="user_info_id" />
	<label>First name: </label><input type="text" value="<?php echo htmlentities($user['first_name']); ?>" name="first_name" />
	<br />
	<label>Middle name: </label><input type="text" value="<?php echo htmlentities($user['middle_name']); ?>" name="middle_name" />
	<br />
	<label>Last name: </label><input type="text" value="<?php echo htmlentities($user['last_name']); ?>" name="last_name" />
	<br />
	<select name="role">
		<option value="">- Select Role -</option>
	<?php foreach($roles as $role): ?>
		<option value="<?php echo htmlentities($role['id']); ?>" <?php if($user['role_id'] == $role['id']) echo "selected"; ?>><?php echo htmlentities($role['role']); ?></option>
	<?php endforeach; ?>
	</select>
	<br />
	<input type="submit" value="Update user" />
</form>
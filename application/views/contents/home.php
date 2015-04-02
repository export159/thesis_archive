<?php if($user_id == null): ?>
	<form action="<?php echo base_url(); ?>user/login" method="POST">
		<label>Username: </label><input type="text" name="username" />
		<br />
		<label>Password: </label><input type="password" name="password" />
		<br />
		<input type="submit" value="Login" />
	</form>
<?php endif; ?>
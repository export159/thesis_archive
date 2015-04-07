<!-- an pag view han uses -->
<table border="1">
	<thead>
		<th>#</th>
		<th>Username</th>
		<th>Password</th>
		<th>First name</th>
		<th>Middle name</th>
		<th>Last name</th>
		<th>Role</th>
		<th colspan="2">Action</th>
	</thead>
	<tbody>
		<?php foreach($users as $index => $user): ?>
			<tr>
				<td><?php echo htmlentities($index + 1); ?></td>
				<td><?php echo htmlentities($user['username']); ?></td>
				<td><?php echo htmlentities($user['password']); ?></td>
				<td><?php echo htmlentities($user['first_name']); ?></td>
				<td><?php echo htmlentities($user['middle_name']); ?></td>
				<td><?php echo htmlentities($user['last_name']); ?></td>
				<td><?php echo htmlentities($user['role']); ?></td>
				<td>
					<a href="<?php base_url() ?>user/edit/<?php echo htmlentities($user['id']); ?>">Edit</a>
				</td>
				<td>Delete</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<!-- an pag add han user //ig modal nala ini brad -->
<div>
	<form action="<?php echo base_url(); ?>user/add" method="POST">
		<label>Username: </label><input type="text" name="username" />
		<br />
		<label>Password: </label><input type="password" name="password" />
		<br />
		<label>First name: </label><input type="text" name="first_name" />
		<br />
		<label>Middle name: </label><input type="text" name="middle_name" />
		<br />
		<label>Last name: </label><input type="text" name="last_name" />
		<br />
		<select name="role">
			<option value="">- Select Role -</option>
		<?php foreach($roles as $role): ?>
			<option value="<?php echo htmlentities($role['id']); ?>"><?php echo htmlentities($role['role']); ?></option>
		<?php endforeach; ?>
		</select>
		<br />
		<input type="submit" value="Add user" />
	</form>
</div>
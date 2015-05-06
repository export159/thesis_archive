<table class="table table-striped">
	<thead>
		<th>#</th>
		<th>Username</th>
		<th>Password</th>
		<th>First name</th>
		<th>Middle name</th>
		<th>Last name</th>
		<th>Role</th>
		<th colspan="3">Action</th>
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
					<a href="<?php base_url() ?>user/<?php echo htmlentities($user['id']); ?>">View</a>
				</td>
				<td>
					<a href="<?php base_url() ?>user/edit/<?php echo htmlentities($user['id']); ?>">Edit</a>
				</td>
				<td><a href="#" class="user-delete" data-id="<?php echo htmlentities($user['info_id']); ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
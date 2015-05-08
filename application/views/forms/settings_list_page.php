<table class="table table-striped">
	<thead>
		<th>#</th>
		<th><?php echo $header; ?></th>
		<th colspan="2">Actions</th>
	</thead>
	<tbody>
		<?php foreach($values as $index => $value): ?>
		<tr>
			<td><?php echo $index + 1; ?></td>
			<td><?php echo $value[$type]; ?></td>
			<td>
				<a class="show-setting-form" data-value="<?php echo plural($type); ?>-edit" data-id="<?php echo $value['id']; ?>" href="#" data-toggle="modal">Edit</a>
			</td>
			<td>
				<a class="settings-delete" data-value="<?php echo plural($type); ?>-delete" data-id="<?php echo $value['id']; ?>" href="#">Delete</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
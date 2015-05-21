<table class="table table-striped">
	<thead>
		<th>#</th>
		<th>Title</th>
		<th>Abstract</th>
		<th>Scope and Limitations</th>
		<th>Academic Year</th>
		<th>Category</th>
		<th>PDF Path</th>
		<th>System Path</th>
		<th>Researchers</th>
		<th colspan="3">Actions</th>
	</thead>
	<tbody>
		<?php foreach($theses as $index => $thesis): ?>
			<tr>
				<td><?php echo $index+1; ?></td>
				<td><?php echo htmlentities($thesis['title']); ?></td>
				<td><?php echo htmlentities($thesis['abstract']); ?></td>
				<td><?php echo htmlentities($thesis['scope']); ?></td>
				<td><?php echo htmlentities($thesis['year']); ?></td>
				<td><?php echo htmlentities($thesis['category']); ?></td>
				<td><?php echo htmlentities($thesis['pdf_path']); ?></td>
				<td><?php echo htmlentities($thesis['system_path']); ?></td>
				<td>
					<ul>
						<?php foreach($thesis['researchers'] as $researcher): ?>
							<li>
								<?php echo htmlentities($researcher['last_name']).' '.htmlentities($researcher['first_name']).', '.htmlentities($researcher['middle_name']).' '.htmlentities($researcher['course']).' '.htmlentities($researcher['year']); ?>
							</li>
								
						<?php endforeach; ?>
					</ul>
				</td>
				<td>
					View
				</td>
				<td>
					Edit
				</td>
				<td>
					Delete
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
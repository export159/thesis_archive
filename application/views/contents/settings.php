<h2>General Settings</h2>
<div>
<h3>Roles</h3>
<button>Add</button>
	<table border="1">
		<thead>
			<th>#</th>
			<th>Role</th>
			<th colspan="2">Actions</th>
		</thead>
		<tbody>
		<?php foreach($roles as $index => $role): ?>
			<tr>
				<td><?php echo $index + 1; ?></td>
				<td><?php echo $role['role']; ?></td>
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
</div>
<hr />
<div>
<h3>Categories</h3>
<button>Add</button>
	<table border="1">
		<thead>
			<th>#</th>
			<th>Category</th>
			<th colspan="2">Actions</th>
		</thead>
		<tbody>
		<?php foreach($categories as $index => $category): ?>
			<tr>
				<td><?php echo $index + 1; ?></td>
				<td><?php echo $category['category']; ?></td>
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
</div>
<hr />
<div>
<h3>Courses</h3>
<button>Add</button>
	<table border="1">
		<thead>
			<th>#</th>
			<th>Course</th>
			<th colspan="2">Actions</th>
		</thead>
		<tbody>
		<?php foreach($courses as $index => $course): ?>
			<tr>
				<td><?php echo $index + 1; ?></td>
				<td><?php echo $course['course']; ?></td>
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
</div>
<hr />
<div>
<h3>Year Levels</h3>
<button>Add</button>
	<table border="1">
		<thead>
			<th>#</th>
			<th>Year Level</th>
			<th colspan="2">Actions</th>
		</thead>
		<tbody>
		<?php foreach($year_levels as $index => $year_level): ?>
			<tr>
				<td><?php echo $index + 1; ?></td>
				<td><?php echo $year_level['year']; ?></td>
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
</div>

<h3>General Settings</h3>
<div class="row well" >
	<h4>Roles</h4>
	<a class="show-setting-form" data-value="roles-add" href="#" data-toggle="modal">Add a Role</a>
	<table class="table table-striped">
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
<div class="row well" >
	<h4>Cateogries</h4>
	<a class="show-setting-form" data-value="categories-add" href="#" data-toggle="modal">Add a Category</a>
	<table class="table table-striped">
		<thead>
			<th>#</th>
			<th>Cateogory</th>
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
<div class="row well" >
	<h4>Courses</h4>
	<a class="show-setting-form" data-value="courses-add" href="#" data-toggle="modal">Add a Course</a>
	<table class="table table-striped">
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
<div class="row well" >
	<h4>Year Levels</h4>
	<a class="show-setting-form" data-value="levels-add" href="#" data-toggle="modal">Add a Year Level</a>
	<table class="table table-striped">
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
<!-- modals -->
<div id="modal-settings-form" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="AddUser" aria-hidden="true">
	<form class="form form-horizontal" method="POST">
  	<div class="modal-dialog modal-sm">
    	<div class="modal-content">
      		<div class="modal-header">
       			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
   				<h4 class="modal-title" id="myModalLabel"></h4>
   			</div>
   			<div class="modal-body">
				<?php $this->load->view('forms/settings_form'); ?>     			
   			</div>
   			<div class="modal-footer">
      			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       			<button type="submit" class="btn btn-primary">Add</button>
   			</div>
    	</div>
  	</div>
  	</form>
</div>
	<!-- modals end -->
<h3>General Settings</h3>
<div class="row well" >
	<h4>Roles</h4>
	<a class="show-setting-form" data-value="roles-add" href="#" data-toggle="modal">Add a Role</a>
	<div class="roles-list">
		<?php
			$data['header'] = 'Role';
			$data['type'] = 'role';
			$data['values'] = $roles;

			$this->load->view('forms/settings_list_page', $data);
		 ?>
	</div>
</div>
<div class="row well" >
	<h4>Cateogries</h4>
	<a class="show-setting-form" data-value="categories-add" href="#" data-toggle="modal">Add a Category</a>
	<div class="categories-list">
		<?php
			$data['header'] = 'Category';
			$data['type'] = 'category';
			$data['values'] = $categories;

			$this->load->view('forms/settings_list_page', $data);
	 	?>
	</div>
</div>
<div class="row well" >
	<h4>Courses</h4>
	<a class="show-setting-form" data-value="courses-add" href="#" data-toggle="modal">Add a Course</a>
	<div class="courses-list">
		<?php
			$data['header'] = 'Course';
			$data['type'] = 'course';
			$data['values'] = $courses;

			$this->load->view('forms/settings_list_page', $data);
	 	?>
	</div>
</div>
<div class="row well" >
	<h4>Year Levels</h4>
	<a class="show-setting-form" data-value="years-add" href="#" data-toggle="modal">Add a Year Level</a>
	<div class="years-list">
		<?php
			$data['header'] = 'Year Level';
			$data['type'] = 'year';
			$data['values'] = $year_levels;

			$this->load->view('forms/settings_list_page', $data);
	 	?>
	</div>
</div>
<!-- modals -->
<div id="modal-settings-form" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="AddUser" aria-hidden="true">
	<form class="form form-horizontal settings-form" method="POST">
  	<div class="modal-dialog modal-sm">
    	<div class="modal-content">
      		<div class="modal-header">
       			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
   				<h4 class="modal-title" id="myModalLabel"></h4>
   			</div>
   			<div class="modal-body">			
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
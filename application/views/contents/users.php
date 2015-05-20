<div class="row">
	<h3>Users</h3>
	<a id="add-user-button" href="#" data-toggle="modal">Add User</a>
	<div class="well" id="users-list">
		<?php $this->load->view('/forms/user_list_page', $users); ?>
	</div>
</div>

<!-- modals for users -->
<div id="modal-add-user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="AddUser" aria-hidden="true">
	<form class="form form-horizontal" action="<?php echo base_url(); ?>user/add" method="POST">
  	<div class="modal-dialog modal-sm">
    	<div class="modal-content">
      		<div class="modal-header">
       			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      				<h4 class="modal-title" id="myModalLabel">Add User</h4>
     			</div>
     			<div class="modal-body">
       			<div class="form-group">
    				<div class="col-sm-offset-1 col-sm-10">
    					<input type="text" name="username" class="form-control" placeholder="Username....">
    				</div>
  				</div>
  				<div class="form-group">
    				<div class="col-sm-offset-1 col-sm-10">
    					<input type="password" name="password" class="form-control" placeholder="Password....">
    				</div>
  				</div>
  				<div class="form-group">
    				<div class="col-sm-offset-1 col-sm-10">
    					<input type="text" name="first_name" class="form-control" placeholder="First name....">
    				</div>
  				</div>
  				<div class="form-group">
    				<div class="col-sm-offset-1 col-sm-10">
    					<input type="text" name="middle_name" class="form-control" placeholder="Middle name....">
    				</div>
  				</div>
  				<div class="form-group">
    				<div class="col-sm-offset-1 col-sm-10">
    					<input type="text" name="last_name" class="form-control" placeholder="Last name....">
    				</div>
  				</div>
	  				<div class="form-group">
    				<div class="col-sm-offset-1 col-sm-10">
    					<select name="role" class="form-control">
    						<option value="">- Select Role -</option>
							<?php foreach($roles as $role): ?>
							<option value="<?php echo htmlentities($role['id']); ?>"><?php echo htmlentities($role['role']); ?></option>
							<?php endforeach; ?>
    					</select>
    				</div>
  				</div>
     			</div>
     			<div class="modal-footer">
	       			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	       			<button type="submit" class="btn btn-primary">Add</button>
     			</div>
    	</div>
  	</div>
  	</form>
</div>
		<!-- modal end -->
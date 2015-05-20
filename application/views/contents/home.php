<?php if($user_id == null): ?>
	<div class="row well">
			<form class="form form-horizontal" action="<?php echo base_url(); ?>user/login" method="POST">
				<legend class="col-sm-offset-4 col-sm-3">Sign in</legend>
				<div class="form-group">
    				<div class="col-sm-offset-4 col-sm-3">
    					<input type="text" name="username" class="form-control" placeholder="Enter your username....">
    				</div>
  				</div>
  				<div class="form-group">
    				<div class="col-sm-offset-4 col-sm-3">
    					<input type="password" name="password" class="form-control" placeholder="Enter your password....">
    				</div>
  				</div>
  				<div class="form-group">
				    <div class="col-sm-offset-4 col-sm-10">
				      	<button type="submit" class="btn btn-primary">Sign in</button>
				      	<button type="reset" class="btn">Clear</button>
				    </div>
				 </div>
			</form>
		</div>
<?php endif; ?>
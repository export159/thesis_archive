	</div>
<!-- body end -->
<!-- footer -->

	<div class="text-center">&copy LNU, Archive Thesis 2014</div>

	<!-- footer end -->
		
	</body>
</html>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/npm.js"></script>

<script type="text/javascript">
$(document).ready(function(e){
	$('#add-user-button').click(function(e){
		$('#modal-add-user').modal('show');
	});
	$('.show-setting-form').click(function(e){
		value = $(this).data('value');

		if(value == 'roles-add'){
			$('#modal-settings-form form').attr('action', '<?php echo base_url() ?>settings/addRole')
			$('.modal-title').html('Add Roles');
			$('.modal-body input').attr('placeholder', 'Role');
			$('.modal-body input').attr('name', 'role');
		}else if(value == 'categories-add'){
			$('#modal-settings-form form').attr('action', '<?php echo base_url() ?>settings/addCategory')
			$('.modal-title').html('Add Category');
			$('.modal-body input').attr('placeholder', 'Category');
			$('.modal-body input').attr('name', 'category');
		}else if(value == 'courses-add'){
			$('#modal-settings-form form').attr('action', '<?php echo base_url() ?>settings/addCourse')
			$('.modal-title').html('Add Course');
			$('.modal-body input').attr('placeholder', 'Course');
			$('.modal-body input').attr('name', 'course');
		}else if(value == 'levels-add'){
			$('#modal-settings-form form').attr('action', '<?php echo base_url() ?>settings/addYear')
			$('.modal-title').html('Add Year Level');
			$('.modal-body input').attr('placeholder', 'Year Level (Eg. IV)');
			$('.modal-body input').attr('name', 'year');
		}

		$('#modal-settings-form').modal('show');
	});
});
</script>

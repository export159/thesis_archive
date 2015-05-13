function settings(){
	
	$('body').on('click', '.show-setting-form', function(e){
		value = $(this).data('value');
		id 	  = $(this).data('id');

		// modal for showing the "add" interface//
		if(value == 'roles-add'){
			$('body').find('#modal-settings-form form').attr('action', '/archive_thesis/settings/addRole')
			$('body').find('#modal-settings-form form').attr('data-value', 'roles-list');
			$('body').find('.modal-title').html('Add Roles');
			$('body').find('.modal-body input').attr('placeholder', 'Role');
			$('body').find('.modal-body input').removeAttr('value');
			$('body').find('.modal-body input').attr('name', 'role');
			$('body').find('#modal-settings-form').modal('show');
		}else if(value == 'categories-add'){
			$('body').find('#modal-settings-form form').attr('action', '/archive_thesis/settings/addCategory')
			$('body').find('#modal-settings-form form').attr('data-value', 'categories-list');
			$('body').find('.modal-title').html('Add Category');
			$('body').find('.modal-body input').attr('placeholder', 'Category');
			$('body').find('.modal-body input').attr('name', 'category');
			$('body').find('.modal-body input').attr('value', '');
			$('body').find('#modal-settings-form').modal('show');
		}else if(value == 'courses-add'){
			$('body').find('#modal-settings-form form').attr('action', '/archive_thesis/settings/addCourse')
			$('body').find('#modal-settings-form form').attr('data-value', 'courses-list');
			$('body').find('.modal-title').html('Add Course');
			$('body').find('.modal-body input').attr('placeholder', 'Course');
			$('body').find('.modal-body input').attr('name', 'course');
			$('body').find('.modal-body input').attr('value', '');
			$('body').find('#modal-settings-form').modal('show');
		}else if(value == 'years-add'){
			$('body').find('#modal-settings-form form').attr('action', '/archive_thesis/settings/addYear')
			$('body').find('#modal-settings-form form').attr('data-value', 'years-list');
			$('body').find('.modal-title').html('Add Year Level');
			$('body').find('.modal-body input').attr('placeholder', 'Year Level (Eg. IV)');
			$('body').find('.modal-body input').attr('name', 'year');
			$('body').find('.modal-body input').attr('value', '');
			$('body').find('#modal-settings-form').modal('show');
		}

		// end //

		// modal for showing the "edit" interface //
		else if(value == 'roles-edit'){
			$('body').find('#modal-settings-form form').attr('action', '/archive_thesis/settings/updateRole/'+id);
			$('body').find('#modal-settings-form form').attr('data-value', 'roles-list');
			$('body').find('.modal-title').html('Edit Role');
			$('body').find('.modal-body input').attr('placeholder', 'Role');
			// <-----start loading here --> //
			$.ajax({
				url: '/archive_thesis/settings/editRole/'+ id,
				type: 'GET',
				dataType: 'json',
				success: function(e){
					//role_id = e[0].id;
					$('body').find('.modal-body input').attr('name', 'role');
					$('body').find('.modal-body input').attr('value', e[0]['role']);
					//$('.modal-body .form-group div').prepend('<input type="hidden" name ="role_id" value="'+role_id+'" />');
					// <-----stop loading here --> //
					$('body').find('#modal-settings-form').modal('show');
				}
			});
		}
		else if(value == 'categories-edit'){
			$('body').find('#modal-settings-form form').attr('action', '/archive_thesis/settings/updateCategory/'+id)
			$('body').find('#modal-settings-form form').attr('data-value', 'categories-list');
			$('body').find('.modal-title').html('Edit Category');
			$('body').find('.modal-body input').attr('placeholder', 'Category');
			// <-----start loading here --> //
			$.ajax({
				url: '/archive_thesis/settings/editCategory/'+ id,
				type: 'GET',
				dataType: 'json',
				success: function(e){
					//role_id = e[0].id;
					$('body').find('.modal-body input').attr('name', 'category');
					$('body').find('.modal-body input').attr('value', e[0]['category']);
					//$('.modal-body .form-group div').prepend('<input type="hidden" name ="role_id" value="'+role_id+'" />');
					// <-----stop loading here --> //
					$('body').find('#modal-settings-form').modal('show');
				}
			});
		}
		else if(value == 'courses-edit'){
			$('body').find('#modal-settings-form form').attr('action', '/archive_thesis/settings/updateCourse/'+id)
			$('body').find('#modal-settings-form form').attr('data-value', 'courses-list');
			$('body').find('.modal-title').html('Edit Course');
			$('body').find('.modal-body input').attr('placeholder', 'Course');
			// <-----start loading here --> //
			$.ajax({
				url: '/archive_thesis/settings/editCourse/'+ id,
				type: 'GET',
				dataType: 'json',
				success: function(e){
					//role_id = e[0].id;
					$('body').find('.modal-body input').attr('name', 'course');
					$('body').find('.modal-body input').attr('value', e[0]['course']);
					//$('.modal-body .form-group div').prepend('<input type="hidden" name ="role_id" value="'+role_id+'" />');
					// <-----stop loading here --> //
					$('body').find('#modal-settings-form').modal('show');
				}
			});
		}
		else if(value == 'years-edit'){
			$('body').find('#modal-settings-form form').attr('action', '/archive_thesis/settings/updateYear/'+id)
			$('body').find('#modal-settings-form form').attr('data-value', 'years-list');
			$('body').find('.modal-title').html('Edit Year Level');
			$('body').find('.modal-body input').attr('placeholder', 'Year Level (Eg. IV)');
			// <-----start loading here --> //
			$.ajax({
				url: '/archive_thesis/settings/editYear/'+ id,
				type: 'GET',
				dataType: 'json',
				success: function(e){
					//role_id = e[0].id;
					$('body').find('.modal-body input').attr('name', 'year');
					$('body').find('.modal-body input').attr('value', e[0]['year']);
					//$('.modal-body .form-group div').prepend('<input type="hidden" name ="role_id" value="'+role_id+'" />');
					// <-----stop loading here --> //
					$('body').find('#modal-settings-form').modal('show');
				}
			});
		}
		// end //


		
	});
	
	// deleting setting values
	$('body').on('click', '.settings-delete', function(){
		id    = $(this).data('id');
		value = $(this).data('value');
		
		if(confirm("Do you want to delete this entry?")){
			if(value == 'roles-delete'){
				$.ajax({
					url: '/archive_thesis/settings/deleteRole/'+id,
					type: 'GET',
					success: function(e){
						$('.roles-list').html(e);
					}
				});
			}else if(value == 'categories-delete'){
				$.ajax({
					url: '/archive_thesis/settings/deleteCategory/'+id,
					type: 'GET',
					success: function(e){
						$('.categories-list').html(e);
					}
				});
			}else if(value == 'courses-delete'){
				$.ajax({
					url: '/archive_thesis/settings/deleteCourse/'+id,
					type: 'GET',
					success: function(e){
						$('.courses-list').html(e);
					}
				});
			}else if(value == 'years-delete'){
				$.ajax({
					url: '/archive_thesis/settings/deleteYear/'+id,
					type: 'GET',
					success: function(e){
						$('.years-list').html(e);
					}
				});
			}
		}

		return false;
	});
	//end

	// -- before submitting form on this page -- //
	$('body').on('submit', '.settings-form', function(){
		type = $(this).data('value');
		action = $(this).attr('action');
		value = $(this).find('input').val();

		
		$.ajax({
			url: action,
			data: {'data' : value},
			type: 'POST',
			success: function(e){
				if(type == 'roles-list')
					$('.'+type).html(e);
				else if(type == 'categories-list')
					$('.'+type).html(e);
				else if(type == 'courses-list')
					$('.'+type).html(e);
				else if(type == 'years-list')
					$('.'+type).html(e);

				value = $(this).find('input').val();
				$('#modal-settings-form').modal('hide');
			}
		});

		return false;
	});
	
}
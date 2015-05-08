function settings(){
	
	$('.show-setting-form').click(function(e){
		value = $(this).data('value');
		id 	  = $(this).data('id');

		// modal for showing the "add" interface//
		if(value == 'roles-add'){
			$('#modal-settings-form form').attr('action', '/archive_thesis/settings/addRole')
			$('.modal-title').html('Add Roles');
			$('.modal-body input').attr('placeholder', 'Role');
			$('.modal-body input').attr('name', 'role');
			$('.modal-body input').attr('value', '');
			$('#modal-settings-form').modal('show');
		}else if(value == 'categories-add'){
			$('#modal-settings-form form').attr('action', '/archive_thesis/settings/addCategory')
			$('.modal-title').html('Add Category');
			$('.modal-body input').attr('placeholder', 'Category');
			$('.modal-body input').attr('value', '');
			$('.modal-body input').attr('name', 'category');
			$('#modal-settings-form').modal('show');
		}else if(value == 'courses-add'){
			$('#modal-settings-form form').attr('action', '/archive_thesis/settings/addCourse')
			$('.modal-title').html('Add Course');
			$('.modal-body input').attr('placeholder', 'Course');
			$('.modal-body input').attr('value', '');
			$('.modal-body input').attr('name', 'course');
			$('#modal-settings-form').modal('show');
		}else if(value == 'years-add'){
			$('#modal-settings-form form').attr('action', '/archive_thesis/settings/addYear')
			$('.modal-title').html('Add Year Level');
			$('.modal-body input').attr('placeholder', 'Year Level (Eg. IV)');
			$('.modal-body input').attr('value', '');
			$('.modal-body input').attr('name', 'year');
			$('#modal-settings-form').modal('show');
		}

		// end //

		// modal for showing the "edit" interface //
		else if(value == 'roles-edit'){
			$('#modal-settings-form form').attr('action', '/archive_thesis/settings/updateRole/'+id)
			$('.modal-title').html('Edit Role');
			$('.modal-body input').attr('placeholder', 'Role');
			// <-----start loading here --> //
			$.ajax({
				url: '/archive_thesis/settings/editRole/'+ id,
				type: 'GET',
				dataType: 'json',
				success: function(e){
					//role_id = e[0].id;
					$('.modal-body input').attr('name', 'role');
					$('.modal-body input').attr('value', e[0]['role']);
					//$('.modal-body .form-group div').prepend('<input type="hidden" name ="role_id" value="'+role_id+'" />');
					// <-----stop loading here --> //
					$('#modal-settings-form').modal('show');
					console.log(role_id);
				}
			});
		}
		else if(value == 'categories-edit'){
			$('#modal-settings-form form').attr('action', '/archive_thesis/settings/updateCategory/'+id)
			$('.modal-title').html('Edit Category');
			$('.modal-body input').attr('placeholder', 'Category');
			// <-----start loading here --> //
			$.ajax({
				url: '/archive_thesis/settings/editCategory/'+ id,
				type: 'GET',
				dataType: 'json',
				success: function(e){
					//role_id = e[0].id;
					$('.modal-body input').attr('name', 'category');
					$('.modal-body input').attr('value', e[0]['category']);
					//$('.modal-body .form-group div').prepend('<input type="hidden" name ="role_id" value="'+role_id+'" />');
					// <-----stop loading here --> //
					$('#modal-settings-form').modal('show');
				}
			});
		}
		else if(value == 'courses-edit'){
			$('#modal-settings-form form').attr('action', '/archive_thesis/settings/updateCourse/'+id)
			$('.modal-title').html('Edit Course');
			$('.modal-body input').attr('placeholder', 'Course');
			// <-----start loading here --> //
			$.ajax({
				url: '/archive_thesis/settings/editCourse/'+ id,
				type: 'GET',
				dataType: 'json',
				success: function(e){
					//role_id = e[0].id;
					$('.modal-body input').attr('name', 'course');
					$('.modal-body input').attr('value', e[0]['course']);
					//$('.modal-body .form-group div').prepend('<input type="hidden" name ="role_id" value="'+role_id+'" />');
					// <-----stop loading here --> //
					$('#modal-settings-form').modal('show');
					//console.log(role_id);
				}
			});
		}
		else if(value == 'years-edit'){
			$('#modal-settings-form form').attr('action', '/archive_thesis/settings/updateYear/'+id)
			$('.modal-title').html('Edit Year Level');
			$('.modal-body input').attr('placeholder', 'Year Level (Eg. IV)');
			// <-----start loading here --> //
			$.ajax({
				url: '/archive_thesis/settings/editYear/'+ id,
				type: 'GET',
				dataType: 'json',
				success: function(e){
					//role_id = e[0].id;
					$('.modal-body input').attr('name', 'year');
					$('.modal-body input').attr('value', e[0]['year']);
					//$('.modal-body .form-group div').prepend('<input type="hidden" name ="role_id" value="'+role_id+'" />');
					// <-----stop loading here --> //
					$('#modal-settings-form').modal('show');
					//console.log(role_id);
				}
			});
		}
		// end //


		
	});
	
	// deleting setting values
	$('.settings-delete').click(function(){
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
	
}
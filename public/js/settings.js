function settings(){
	
	$('body').on('click', '.show-setting-form', function(e){
		value = $(this).data('value');
		id 	  = $(this).data('id');

		// modal for showing the "add" interface//
		if(value == 'roles-add'){
			$('body').find('#modal-settings-form form').attr('action', '/archive_thesis/settings/addRole')
			$('body').find('#modal-settings-form form').attr('data-value', 'roles-list');
			$('body').find('.modal-title').html('Add Roles');
			showSettingsModal('add', 'role', 'Role', 0);
			/*
			
			$('body').find('.modal-body input').removeAttr('value');
			
			*/
			
		}else if(value == 'categories-add'){
			$('body').find('#modal-settings-form form').attr('action', '/archive_thesis/settings/addCategory')
			$('body').find('#modal-settings-form form').attr('data-value', 'categories-list');
			$('body').find('.modal-title').html('Add Category');
			showSettingsModal('add', 'category', 'Category', 0);
		}else if(value == 'courses-add'){
			$('body').find('#modal-settings-form form').attr('action', '/archive_thesis/settings/addCourse')
			$('body').find('#modal-settings-form form').attr('data-value', 'courses-list');
			$('body').find('.modal-title').html('Add Course');
			showSettingsModal('add', 'course', 'Course', 0);
		}else if(value == 'years-add'){
			$('body').find('#modal-settings-form form').attr('action', '/archive_thesis/settings/addYear')
			$('body').find('#modal-settings-form form').attr('data-value', 'years-list');
			$('body').find('.modal-title').html('Add Year Level');
			showSettingsModal('add', 'year', 'Year Level (Eg. IV)', 0);
		}

		// end //

		// modal for showing the "edit" interface //
		else if(value == 'roles-edit'){
			$('body').find('#modal-settings-form form').attr('action', '/archive_thesis/settings/updateRole/'+id);
			$('body').find('#modal-settings-form form').attr('data-value', 'roles-list');
			$('body').find('.modal-title').html('Edit Role');
			$('body').find('.modal-body input').attr('placeholder', 'Role');
			// <-----start loading here --> //
			showSettingsModal('edit', 'role', 'Role', id);
		}
		else if(value == 'categories-edit'){
			$('body').find('#modal-settings-form form').attr('action', '/archive_thesis/settings/updateCategory/'+id)
			$('body').find('#modal-settings-form form').attr('data-value', 'categories-list');
			$('body').find('.modal-title').html('Edit Category');
			$('body').find('.modal-body input').attr('placeholder', 'Category');
			// <-----start loading here --> //
			showSettingsModal('edit', 'category', 'Category', id);
		}
		else if(value == 'courses-edit'){
			$('body').find('#modal-settings-form form').attr('action', '/archive_thesis/settings/updateCourse/'+id)
			$('body').find('#modal-settings-form form').attr('data-value', 'courses-list');
			$('body').find('.modal-title').html('Edit Course');
			$('body').find('.modal-body input').attr('placeholder', 'Course');
			// <-----start loading here --> //
			showSettingsModal('edit', 'course', 'Course', id);
		}
		else if(value == 'years-edit'){
			$('body').find('#modal-settings-form form').attr('action', '/archive_thesis/settings/updateYear/'+id)
			$('body').find('#modal-settings-form form').attr('data-value', 'years-list');
			$('body').find('.modal-title').html('Edit Year Level');
			$('body').find('.modal-body input').attr('placeholder', 'Year Level (Eg. IV)');
			// <-----start loading here --> //
			showSettingsModal('edit', 'year', 'Year Level (Eg. IV)', id);
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

// --- for settings.js support functions --- //

//function showSettings, params: type = (ex. 'add', 'edit');name = (ex. 'role', 'category', etc); 
//								 placeholder = (ex. 'Role', 'Category', 'Year Level (Ex. IV)', etc); id = (default value is 0, should have other value if type = 'edit')
function showSettingsModal(type, name, placeholder, id){
	var formURL = null;
	if(type == 'add'){
		formURL = '/archive_thesis/settings/getForm/add';
	}else if(type == 'edit'){
		formURL = '/archive_thesis/settings/getForm/edit/'+name+'/'+id;
	}
	$.ajax({
		url: formURL,
		type: 'GET',
		success: function(obj){
			$('body').find('.modal-body').html(obj);
			$('body').find('.modal-body input').attr('placeholder', placeholder);
			$('body').find('.modal-body input').attr('name', name);
			$('body').find('#modal-settings-form').modal('show');
		}
	});
}
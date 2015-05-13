function user(){
	$('#add-user-button').click(function(e){
		$('#modal-add-user').modal('show');
	});

	$('body').on('click', '.user-delete', function(event){
		if(confirm('Do you want to delete this user?')){
			id = $(this).data('id');
			// -- start loading here -- //
			$.ajax({
				url: '/archive_thesis/user/delete/'+id,
				data: {'status' : 'delete'},
				contentType: false,
				success: function(e){
			// -- stop loading here -- //
					$('#users-list').html(e);
				}
			});

		}
		return false;
	});
}
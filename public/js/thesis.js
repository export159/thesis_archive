function thesis(){
	$('#add-thesis-button').click(function(e){
		$('#modal-thesis').modal('show');
	});

	//-- for all forms submit --//
	$('body').on('submit', '#thesis_form', function(){

		//return false;
	});
	//-- end --//
}
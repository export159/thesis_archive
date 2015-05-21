<div class="row">
	<h3>Records</h3>
	<a id="add-thesis-button" data-toggle="modal" href="#">Add Thesis</a>
	<div class="well" id="theses-list">
		<?php $this->load->view('forms/theses_list_page', $theses); ?>
	</div>
</div>

<!-- modals for theses -->
<div id="modal-thesis" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="AddThesis" aria-hidden="true">
	<form class="form form-horizontal" action="<?php echo base_url(); ?>theses/add" method="POST">
  	<div class="modal-dialog modal-sm">
    	<div class="modal-content">
      		<div class="modal-header">
       			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      				<h4 class="modal-title" id="myModalLabel">Add Thesis</h4>
     			</div>
     			<div class="modal-body">
       			<?php 
       				$data['categories'] = $categories;
       				$data['courses'] = $courses;
       				$data['years'] = $years;
       				$this->load->view('forms/thesis_form', $data); 
       			?>
     			<div class="modal-footer">
	       			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	       			<button type="submit" class="btn btn-primary">Add</button>
     			</div>
    	</div>
  	</div>
  	</form>
</div>
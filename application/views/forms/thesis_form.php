<div class="form-group">
	<div class="col-sm-offset-1 col-sm-10">
		<input type="text" name="title" class="form-control" placeholder="Title....">
	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-1 col-sm-10">
		<textarea class="form-control" name="abstract" placeholder="Abstract"></textarea>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-1 col-sm-10">
		<textarea class="form-control" name="scope" placeholder="Scope and Limitations"></textarea>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-1 col-sm-10">
		<input type="text" name="year" class="form-control" placeholder="Academic Year....">
	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-1 col-sm-10">
		<select class="form-control" name="category" placeholder="Select Category">
      <option value="0">- Select Category -</option>
      <?php foreach($categories as $category): ?>
          <option value="<?php echo $category['id']; ?>">
            <?php echo htmlentities($category['category']); ?>
          </option>
      <?php endforeach; ?>  
    </select>
	</div>
</div>
<hr />
<h5>Researchers</h5>
<?php 
  $data['years'] = $years;
  $data['courses'] = $courses;
  $this->load->view('forms/researchers_form', $data); 
  $this->load->view('forms/researchers_form', $data);
?>
<div class="form-group">
<div class="col-sm-offset-1 col-sm-10">

	</div>
</div>
</div>
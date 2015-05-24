
<div class="well">
	<div class="form-group">
		<div class="col-sm-offset-1 col-sm-10">
			<input class="form-control" name="res_fn[]" placeholder="First name ..." />
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-1 col-sm-10">
			<input class="form-control" name="res_mn[]" placeholder="Middle name ..." />
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-1 col-sm-10">
			<input class="form-control" name="res_ln[]" placeholder="Last name ..." />
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-1 col-sm-10">
			<select class="form-control" name="res_course[]">
				<option value="0">- Select Course -</option>
				<?php foreach($courses as $course): ?>
					<option value="<?php echo $course['id']; ?>">
						<?php echo htmlentities($course['course']); ?>
					</option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-1 col-sm-10">
			<select class="form-control" name="res_year[]">
				<option value="0">- Select Course -</option>
				<?php foreach($years as $year): ?>
					<option value="<?php echo $year['id']; ?>">
						<?php echo htmlentities($year['year']); ?>
					</option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
</div>
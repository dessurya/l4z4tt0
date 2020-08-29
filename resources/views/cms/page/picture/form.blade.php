<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Upload Picture</h3>
	</div>
	<form id="form_upload_picture" class="" method="post" action="{{ route('cms.picture.store') }}">
		<div class="card-body">
			<div class="row">
                <div class="col-sm-12">
					<div class="form-group">
						<label>Name</label>
						<input name="picture" type="file" class="form-control input" multiple="multiple" accept=".png,.jpg,jpeg,.gif">
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
</div>
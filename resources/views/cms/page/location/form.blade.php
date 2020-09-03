<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">{{ $config['title'] }}</h3>
	</div>
	<form id="{{ $config['id'] }}" class="postData" method="post" action="">
		<input type="hidden" name="id" class="input">
		<div class="card-body">
			<div class="row">
                <div class="col-sm-6">
					<div class="form-group">
						<label>City</label>
						<input disabled name="city" type="text" class="form-control input">
					</div>
				</div>
                <div class="col-sm-6">
					<div class="form-group">
						<label>Name</label>
						<input disabled name="name" type="text" class="form-control input">
					</div>
				</div>
                <div class="col-sm-12">
					<div class="form-group">
						<label>Address</label>
                        <textarea disabled data-text="" name="address" class="summernote form-control input"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button disabled type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
</div>
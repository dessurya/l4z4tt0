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
						<label>Name</label>
						<input disabled name="name" type="text" class="form-control input">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label>Show Name</label>
						<select name="flag_name" disabled class="form-control input select">
							<option value="Y">Y</option>
							<option value="N">N</option>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Button Title</label>
						<input disabled name="button_title" type="text" class="form-control input">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Button Url</label>
						<input disabled name="button_url" type="url" class="form-control input">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Show Button</label>
						<select name="flag_button" disabled class="form-control input select">
							<option value="Y">Y</option>
							<option value="N">N</option>
						</select>
					</div>
				</div>
                <div class="col-sm-12">
					<div class="form-group">
						<label>Order</label>
                        <input disabled name="order" type="number" class="form-control input">
					</div>
				</div>
                <div class="col-sm-12">
					<div class="form-group">
						<label>Picture</label>
						<textarea disabled name="picture" class="form-control input"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button disabled type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
</div>
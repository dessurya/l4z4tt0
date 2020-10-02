<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">{{ $config['title'] }}</h3>
	</div>
	<form id="{{ $config['id'] }}" class="postData" method="post" action="">
		<input type="hidden" name="id" class="input">
		<div class="card-body">
			<div class="row">
                <div class="col-sm-12">
					<div class="form-group">
						<label>Name</label>
						<input disabled name="name" type="text" class="form-control input">
					</div>
				</div>
                <div class="col-sm-12">
					<div class="form-group">
						<label>Introduction</label>
                        <textarea disabled data-text="" name="introduction" class="summernote form-control input"></textarea>
					</div>
				</div>
                <div class="col-sm-12">
					<div class="form-group">
						<label>Content</label>
                        <textarea disabled data-text="" name="content" class="summernote form-control input"></textarea>
					</div>
				</div>
                <div class="col-sm-12">
					<div class="form-group">
						<label>Banner</label>
						<textarea disabled name="banner" class="form-control input"></textarea>
					</div>
				</div>
                <div class="col-sm-12">
					<div class="form-group">
						<label>Picture</label>
						<textarea disabled name="picture" class="form-control input"></textarea>
					</div>
				</div>
				<div class="col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h6 class="card-title">Section Meta</h6>
                        </div>
                        <div class="card-body">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>Meta Title</label>
										<input disabled name="meta_title" type="text" class="form-control input notallowed" max="200">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<label>Meta Content</label>
										<input disabled name="meta_content" type="text" class="form-control input notallowed" max="200">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<label>Meta Keyword</label>
										<input disabled name="meta_keyword" type="text" class="form-control input notallowed" max="200">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button disabled type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
</div>
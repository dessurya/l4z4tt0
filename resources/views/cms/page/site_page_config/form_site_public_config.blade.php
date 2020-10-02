<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Config Page {{ $data->name }}</h3>
	</div>
	<form id="form_{{ $data->identity }}" class="postData" method="post" action="{{ route('cms.site.page.store.'.$data->identity) }}">
		<div class="card-body">
			<div class="row">
            
                <div class="col-sm-12">
					<div class="form-group">
						<label>Page Name</label>
						<input value="{{ $data->name }}" required name="name" type="text" class="form-control input">
					</div>
				</div>

                <div class="col-sm-12">
					<div class="form-group">
						<label>Whatsapp number</label>
						<input value="{{ $data->config['wa_no'] }}" required name="wa_no" type="text" class="form-control input">
					</div>
				</div>

                <div class="col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h6 class="card-title">Section Website</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Icon</label>
                                        <input value="{{ $data->config['website']['icon'] }}" name="website_icon" type="url" class="form-control input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h6 class="card-title">Section Navigasi</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <input value="{{ $data->config['navigasi']['logo'] }}" name="navigasi_logo" type="url" class="form-control input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h6 class="card-title">Section Footer</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <input value="{{ $data->config['footer']['logo'] }}" name="footer_logo" type="url" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Quote</label>
                                        <textarea data-text="{{ $data->config['footer']['quote'] }}" name="footer_quote" class="summernote form-control input"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Contact</label>
                                        <textarea data-text="{{ $data->config['footer']['contact'] }}" name="footer_contact" class="summernote form-control input"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Max Item Kemitraan</label>
                                        <input value="{{ $data->config['footer']['max_item'] }}" name="footer_max_item" type="number" class="form-control input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
</div>
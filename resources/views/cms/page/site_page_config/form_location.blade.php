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
						<input value="{{ $data->name }}" required name="page_name" type="text" class="form-control input">
					</div>
				</div>

                <div class="col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h6 class="card-title">Section Meta</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input value="{{ $data->config['meta']['title'] }}" name="meta_title" type="text" class="form-control input" max="250">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Keyword</label>
                                        <input value="{{ $data->config['meta']['keyword'] }}" name="meta_keyword" type="text" class="form-control input" max="250">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea name="meta_content" rows="3" class="form-control input" max="250">{{ $data->config['meta']['content'] }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h6 class="card-title">Section Maps</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Show or Hide</label>
                                        <select name="maps_show" class="form-control input select">
                                            <option value="true" {{ $data->config['maps']['show'] == 'true' ? 'selected' : '' }}>Show</option>
                                            <option value="false" {{ $data->config['maps']['show'] == 'false' ? 'selected' : '' }}>Hide</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input value="{{ $data->config['maps']['title'] }}" name="maps_title" type="text" class="form-control input" max="250">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Picture</label>
                                        <input value="{{ $data->config['maps']['picture'] }}" name="maps_picture" type="url" class="form-control input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h6 class="card-title">Section Information</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Show or Hide</label>
                                        <select name="information_show" class="form-control input select">
                                            <option value="true" {{ $data->config['information']['show'] == 'true' ? 'selected' : '' }}>Show</option>
                                            <option value="false" {{ $data->config['information']['show'] == 'false' ? 'selected' : '' }}>Hide</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input value="{{ $data->config['information']['title'] }}" name="information_title" type="text" class="form-control input">
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
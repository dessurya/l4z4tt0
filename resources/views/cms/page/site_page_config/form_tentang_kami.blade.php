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
                            <h6 class="card-title">Section Banner</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Show or Hide</label>
                                        <select name="banner_show" class="form-control input select">
                                            <option value="true" {{ $data->config['banner']['show'] == 'true' ? 'selected' : '' }}>Show</option>
                                            <option value="false" {{ $data->config['banner']['show'] == 'false' ? 'selected' : '' }}>Hide</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Picture</label>
                                        <input value="{{ $data->config['banner']['picture'] }}" name="banner_picture" type="url" class="form-control input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h6 class="card-title">Section Profile</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Show or Hide</label>
                                        <select name="profile_show" class="form-control input select">
                                            <option value="true" {{ $data->config['profile']['show'] == 'true' ? 'selected' : '' }}>Show</option>
                                            <option value="false" {{ $data->config['profile']['show'] == 'false' ? 'selected' : '' }}>Hide</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input value="{{ $data->config['profile']['title'] }}" required name="profile_title" type="text" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Picture</label>
                                        <input value="{{ $data->config['profile']['picture'] }}" name="profile_picture" type="url" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Decription</label>
                                        <textarea required data-text="{{ $data->config['profile']['decription'] }}" name="profile_decription" class="summernote form-control input"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h6 class="card-title">Section Sejarah</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Show or Hide</label>
                                        <select name="sejarah_show" class="form-control input select">
                                            <option value="true" {{ $data->config['sejarah']['show'] == 'true' ? 'selected' : '' }}>Show</option>
                                            <option value="false" {{ $data->config['sejarah']['show'] == 'false' ? 'selected' : '' }}>Hide</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input value="{{ $data->config['sejarah']['title'] }}" required name="sejarah_title" type="text" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Picture</label>
                                        <input value="{{ $data->config['sejarah']['picture'] }}" name="sejarah_picture" type="url" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Decription</label>
                                        <textarea required data-text="{{ $data->config['sejarah']['decription'] }}" name="sejarah_decription" class="summernote form-control input"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h6 class="card-title">Section Visi dan Misi</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Show or Hide</label>
                                        <select name="visi_misi_show" class="form-control input select">
                                            <option value="true" {{ $data->config['visi_misi']['show'] == 'true' ? 'selected' : '' }}>Show</option>
                                            <option value="false" {{ $data->config['visi_misi']['show'] == 'false' ? 'selected' : '' }}>Hide</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input value="{{ $data->config['visi_misi']['title'] }}" required name="visi_misi_title" type="text" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Visi Picture</label>
                                        <input value="{{ $data->config['visi_misi']['visi_picture'] }}" name="visi_misi_visi_picture" type="url" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Misi Picture</label>
                                        <input value="{{ $data->config['visi_misi']['misi_picture'] }}" name="visi_misi_misi_picture" type="url" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Visi Content</label>
                                        <textarea required data-text="{{ $data->config['visi_misi']['visi_content'] }}" name="visi_misi_visi_content" class="summernote form-control input"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Misi Content</label>
                                        <textarea required data-text="{{ $data->config['visi_misi']['misi_content'] }}" name="visi_misi_misi_content" class="summernote form-control input"></textarea>
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
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
                            <h6 class="card-title">Section Slider</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Show or Hide</label>
                                        <select name="slider_show" class="form-control input select">
                                            <option value="true" {{ $data->config['slider']['show'] == 'true' ? 'selected' : '' }}>Show</option>
                                            <option value="false" {{ $data->config['slider']['show'] == 'false' ? 'selected' : '' }}>Hide</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Max Item</label>
                                        <input value="{{ $data->config['slider']['max_item'] }}" name="slider_max_item" type="number" class="form-control input" max="10" min="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h6 class="card-title">Section Menu Lazatto</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Show or Hide</label>
                                        <select name="menu_lazatto_show" class="form-control input select">
                                            <option value="true" {{ $data->config['menu_lazatto']['show'] == 'true' ? 'selected' : '' }}>Show</option>
                                            <option value="false" {{ $data->config['menu_lazatto']['show'] == 'false' ? 'selected' : '' }}>Hide</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Max Item</label>
                                        <input value="{{ $data->config['menu_lazatto']['max_item'] }}" name="menu_lazatto_max_item" type="number" class="form-control input" max="10" min="1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input value="{{ $data->config['menu_lazatto']['title'] }}" required name="menu_lazatto_title" type="text" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Link Title</label>
                                        <input value="{{ $data->config['menu_lazatto']['title_link'] }}" required name="menu_lazatto_title_link" type="text" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Decription</label>
                                        <textarea required data-text="{{ $data->config['menu_lazatto']['decription'] }}" name="menu_lazatto_decription" class="summernote form-control input"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h6 class="card-title">Section Tentang Kami</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Show or Hide</label>
                                        <select name="tentang_kami_show" class="form-control input select">
                                            <option value="true" {{ $data->config['tentang_kami']['show'] == 'true' ? 'selected' : '' }}>Show</option>
                                            <option value="false" {{ $data->config['tentang_kami']['show'] == 'false' ? 'selected' : '' }}>Hide</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Picture</label>
                                        <input value="{{ $data->config['tentang_kami']['picture'] }}" name="tentang_kami_picture" type="url" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input value="{{ $data->config['tentang_kami']['title'] }}" required name="tentang_kami_title" type="text" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Link Title</label>
                                        <input value="{{ $data->config['tentang_kami']['title_link'] }}" required name="tentang_kami_title_link" type="text" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Decription</label>
                                        <textarea required data-text="{{ $data->config['tentang_kami']['decription'] }}" name="tentang_kami_decription" class="summernote form-control input"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h6 class="card-title">Section News</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Show or Hide</label>
                                        <select name="news_show" class="form-control input select">
                                            <option value="true" {{ $data->config['news']['show'] == 'true' ? 'selected' : '' }}>Show</option>
                                            <option value="false" {{ $data->config['news']['show'] == 'false' ? 'selected' : '' }}>Hide</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input value="{{ $data->config['news']['title'] }}" required name="news_title" type="text" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Max Item</label>
                                        <input value="{{ $data->config['news']['max_item'] }}" name="news_max_item" type="number" class="form-control input" max="12" min="1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Link Title</label>
                                        <input value="{{ $data->config['news']['title_link'] }}" required name="news_title_link" type="text" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Decription</label>
                                        <textarea required data-text="{{ $data->config['news']['decription'] }}" name="news_decription" class="summernote form-control input"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h6 class="card-title">Section Location</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Show or Hide</label>
                                        <select name="location_show" class="form-control input select">
                                            <option value="true" {{ $data->config['location']['show'] == 'true' ? 'selected' : '' }}>Show</option>
                                            <option value="false" {{ $data->config['location']['show'] == 'false' ? 'selected' : '' }}>Hide</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input value="{{ $data->config['location']['title'] }}" required name="location_title" type="text" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Picture</label>
                                        <input value="{{ $data->config['location']['picture'] }}" name="location_picture" type="url" class="form-control input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h6 class="card-title">Section Kemitraan</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Show or Hide</label>
                                        <select name="kemitraan_show" class="form-control input select">
                                            <option value="true" {{ $data->config['kemitraan']['show'] == 'true' ? 'selected' : '' }}>Show</option>
                                            <option value="false" {{ $data->config['kemitraan']['show'] == 'false' ? 'selected' : '' }}>Hide</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Max Item</label>
                                        <input value="{{ $data->config['kemitraan']['max_item'] }}" name="kemitraan_max_item" type="number" class="form-control input" max="10" min="1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input value="{{ $data->config['kemitraan']['title'] }}" required name="kemitraan_title" type="text" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Link Title</label>
                                        <input value="{{ $data->config['kemitraan']['title_link'] }}" required name="kemitraan_title_link" type="text" class="form-control input">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Decription</label>
                                        <textarea required data-text="{{ $data->config['kemitraan']['decription'] }}" name="kemitraan_decription" class="summernote form-control input"></textarea>
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
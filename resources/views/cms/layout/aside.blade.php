<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<a href="{{ route('cms.dashboard') }}" class="brand-link">
      <img src="{{ asset('vendors/adminlte-dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CMS Area</span>
    </a>

    <div class="sidebar">
    	<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    		<div class="image">
    			<img src="{{ asset('vendors/adminlte-dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
    		</div>
    		<div class="info">
    			<a href="{{ route('cms.user.profile') }}" class="d-block">{{ Auth::guard('user')->user()->name }}</a>
    		</div>
    	</div>

    	<nav class="mt-2">
    		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    			<li class="nav-item">
    				<a href="{{ route('cms.dashboard') }}" class="nav-link {{ Route::is('cms.dashboard') ? 'active' : '' }} ">
    					<p>Dashboard</p>
    				</a>
    			</li>
				<li class="nav-item">
    				<a href="{{ route('cms.picture.index') }}" class="nav-link {{ Route::is('cms.picture.index') ? 'active' : '' }} ">
    					<p>Upload Picture</p>
    				</a>
    			</li>
				<li class="nav-item">
    				<a href="{{ route('cms.user.index') }}" class="nav-link {{ Route::is('cms.user.index') ? 'active' : '' }} ">
    					<p>User</p>
    				</a>
    			</li>
				<li class="nav-item">
    				<a href="{{ route('cms.site.page.index') }}" class="nav-link {{ Route::is('cms.site.page.index') ? 'active' : '' }} ">
    					<p>Site Page</p>
    				</a>
    			</li>
				<li class="nav-item">
    				<a href="{{ route('cms.slider.index') }}" class="nav-link {{ Route::is('cms.slider.index') ? 'active' : '' }} ">
    					<p>Slider</p>
    				</a>
    			</li>
				<li class="nav-item">
    				<a href="{{ route('cms.menu.index') }}" class="nav-link {{ Route::is('cms.menu.index') ? 'active' : '' }} ">
    					<p>Menu Lazatto</p>
    				</a>
    			</li>
				<li class="nav-item">
    				<a href="{{ route('cms.location.index') }}" class="nav-link {{ Route::is('cms.location.index') ? 'active' : '' }} ">
    					<p>Location</p>
    				</a>
    			</li>
				<li class="nav-item">
    				<a href="{{ route('cms.news.index') }}" class="nav-link {{ Route::is('cms.news.index') ? 'active' : '' }} ">
    					<p>News</p>
    				</a>
    			</li>
				<li class="nav-item">
    				<a href="{{ route('cms.kemitraan.index') }}" class="nav-link {{ Route::is('cms.kemitraan.index') ? 'active' : '' }} ">
    					<p>Kemitraan</p>
    				</a>
    			</li>
    		</ul>
    	</nav>
    </div>
</aside>
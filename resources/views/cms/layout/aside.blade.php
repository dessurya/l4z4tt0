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
    			<a href="#" class="d-block">{{ Auth::guard('user')->user()->name }}</a>
    		</div>
    	</div>

    	<nav class="mt-2">
    		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    			<li class="nav-item">
    				<a href="{{ route('cms.dashboard') }}" class="nav-link {{ Route::is('cms.dashboard') ? 'active' : '' }} ">
    					<i class="nav-icon fas fa-tachometer-alt"></i>
    					<p>Dashboard</p>
    				</a>
    			</li>
				<li class="nav-item">
    				<a href="{{ route('cms.user.index') }}" class="nav-link {{ Route::is('cms.user.index') ? 'active' : '' }} ">
    					<i class="nav-icon fas fa-tachometer-alt"></i>
    					<p>User</p>
    				</a>
    			</li>
    		</ul>
    	</nav>
    </div>
</aside>
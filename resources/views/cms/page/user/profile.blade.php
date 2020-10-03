@extends('cms.layout.base')

@section('title')
Profile : {{ Auth::guard('user')->user()->name }}
@endsection

@push('content')
<div class="col-12 col-sm-12">
    <div class="card card-primary">
        <form method="post" action="{{ route('cms.user.profile.store') }}">
        {{ csrf_field() }}
            <div class="card-body">
                <div class="row">
                    @if(Session::has('status'))
					<div class="col-12 alert alert-warning text-white" role="alert">
						<label>{{ Session::get('status') }}</label>
					</div>
					@endif
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input required name="name" type="text" class="form-control input" value="{{ Auth::guard('user')->user()->name }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input required name="email" type="email" class="form-control input" value="{{ Auth::guard('user')->user()->email }}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Old Password</label>
                            <input required name="password" type="password" class="form-control input">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>New Password</label>
                            <input name="n_password" type="password" min="6" class="form-control input">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Confirm New Password</label>
                            <input name="c_password" type="password" min="6" class="form-control input">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endpush
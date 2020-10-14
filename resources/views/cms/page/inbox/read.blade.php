<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Message From {{ $inbox->name }}</h3>
        <div class="card-tools">
            <a href="mailto:{{ $inbox->email }}?subject={{ urlencode($inbox->subject) }}&body={{ urlencode($inbox->message) }}">Send Mail</a>
        </div>
	</div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Email</label>
                    <p>{{ $inbox->email }}</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Subject</label>
                    <p>{{ $inbox->subject }}</p>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Message</label>
                    <p>{{ $inbox->message }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
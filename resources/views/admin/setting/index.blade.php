@extends('layouts.metronic')

@section('content')
<div class="container">
	<div class="row">
		<div class="card card-custom gutter-b col-md-6">
			<div class="card-header">
				<h3 class="card-title">Email Configs</h3>
			</div>
			<form method="POST">
				@csrf
				@if (session('status.smtp'))
				<div class="card card-custom bg-primary mb-5">
					<div class="card-body text-white">{{ session('status.smtp') }}</div>
				</div>
				@endif
				<div class="card-body">
					<div class="form-group mb-8">
						<div class="alert alert-custom alert-default" role="alert">
							<div class="alert-icon">
								{{ Metronic::getSVG('media/svg/icons/Communication/Outgoing-mail.svg', 'svg-icon-primary svg-icon-xl') }}
							</div>
							<div class="alert-text">Settings for SMTP to send Email to Users on Registration, etc.</div>
						</div>
					</div>
					@if(empty($smtp))
					<div class="form-group mb-8">
						<div class="alert alert-custom alert-default bg-info" role="alert">
							<div class="alert-icon">
								{{ Metronic::getSVG('media/svg/icons/Code/Warning-2.svg', 'svg-icon-warning svg-icon-xl') }}
							</div>
							<div class="alert-text">No previous data found!</div>
						</div>
					</div>
					@endif
					<div class="form-group">
						<label>SMTP Host</label>
						<input type="text" class="form-control @error('smtp.host') is-invalid @enderror" name="smtp_host" placeholder="SMTP Host" value="{{ $smtp['host'] }}" />
						<span class="form-text text-muted">SMTP Host name provided by your email providers</span>
					</div>
					<div class="form-group">
						<label>SMTP Port</label>
						<input type="text" class="form-control @error('smtp.port') is-invalid @enderror" name="smtp_port" placeholder="SMTP Port" value="{{ $smtp['port'] }}" />
						<span class="form-text text-muted">SMTP Port number provided by your email providers</span>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control @error('smtp.username') is-invalid @enderror" name="smtp_username" placeholder="Username" value="{{ $smtp['username'] }}" />
						<span class="form-text text-muted">SMTP Username provided by your email providers</span>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control @error('smtp.password') is-invalid @enderror" name="smtp_password" placeholder="Password" value="{{ $smtp['password'] }}" />
						<span class="form-text text-muted">SMTP Password provided by your email providers.</span>
						<span class="form-text text-warning">Please do note that this value would be saved as a <strong>plain text</strong> in the database.</span>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary mr-2">Submit</button>
					<button type="reset" class="btn btn-secondary">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
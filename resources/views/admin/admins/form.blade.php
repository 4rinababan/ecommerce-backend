@extends('layouts.metronic')

@section('content')
<div class="container">
	<div class="row">
		<div class="card card-custom gutter-b col-md-12">
			<div class="card-header flex-wrap border-0 pt-6 pb-0">
				<div class="card-title">
					<h3 class="card-label">{{!isset($data)||empty($data)?"Create New":"Update"}} Admin</h3>
				</div>
			</div>
			<form method="POST" enctype="multipart/form-data" action="{{ isset($data) ? route('admins.update', $data['id']) : route('admins.store') }}">
				@csrf
				@if(isset($data))
				@method('PUT')
				@endif
				<div class="card-body">
					<div class="form-group">
						<label>Username *</label>
						<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Username" value="{{ old('name') ?? (isset($data) ? $data['name'] : '') }}" autocomplete="off" />
						@error('name')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<label>First Name</label>
						<input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="First Name" value="{{ old('first_name') ?? (isset($data) ? $data['first_name'] : '') }}" autocomplete="off" />
						@error('first_name')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Last Name" value="{{ old('last_name') ?? (isset($data) ? $data['last_name'] : '') }}" autocomplete="off" />
						@error('last_name')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Your Email Address" value="{{ old('email') ?? (isset($data) ? $data['email'] : '') }}" autocomplete="off" />
						@error('email')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Your Password" value="{{ old('password') ?? (isset($data) ? $data['password'] : '') }}" autocomplete="off" />
						@error('password')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<label>Phone *</label>
						<input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Your Phone Number" value="{{ old('phone') ?? (isset($data) ? $data['phone'] : '') }}" autocomplete="off" />
						@error('phone')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary mr-2">Submit</button>
					<button type="button" class="btn btn-secondary" id="btn_cancel">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

{{-- Scripts Section --}}
@section('scripts')
	{{-- page scripts --}}
	<script type="text/javascript">
		$(document).ready(function(){
			$("#btn_cancel").on('click', function(){
				window.history.back();
			});
		});
	</script>
@endsection


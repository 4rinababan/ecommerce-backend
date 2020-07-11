@extends('layouts.metronic')
@section('theme-layout', 'blank')

@section('content')
<div class="login login-4 login-reset-on d-flex flex-row-fluid" id="kt_login">
	<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('{{asset('media/bg/bg-3.jpg')}}');">
		<div class="login-form text-center p-7 position-relative overflow-hidden">
			<div class="d-flex flex-center mb-15">
				<a href="{{ url('/') }}">
					<img src="{{asset('pasaraya-logo.png')}}" class="max-h-75px" alt="" />
				</a>
			</div>
			{{-- Reset Password Form --}}
			<div class="login-reset">
				<div class="mb-20">
					<h3>{{ __('Reset Password') }}</h3>
					<div class="text-muted font-weight-bold">Enter your new password below</div>
				</div>
				<form class="form" id="kt_login_reset_form" method="POST" action="{{ route('password.update') }}">
					@csrf
					<input type="hidden" name="token" value="{{ $token }}">
					@if (session('status'))
						<div class="card card-custom bg-primary mb-5">
							<div class="card-body text-white">{{ session('status') }}</div>
						</div>
					@endif
					<div class="form-group mb-5">
						<input id="reset-email" name="email" type="email" class="form-control h-auto form-control-solid py-4 px-8 @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" value="{{ $email ?? old('email') }}" required autofocus readonly/>
						@error('email')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group mb-5">
						<input id="reset-password" name="password" class="form-control h-auto form-control-solid py-4 px-8 @error('password') is-invalid @enderror" type="password" placeholder="{{ __('Password') }}" required />
						@error('password')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group mb-5">
						<input id="reset-password-confirm" name="password_confirmation" class="form-control h-auto form-control-solid py-4 px-8 @error('password_confirmation') is-invalid @enderror" type="password" placeholder="{{ __('Confirm Password') }}" required />
						@error('password_confirmation')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group d-flex flex-wrap flex-center mt-10">
						<button id="kt_login_reset_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">{{ __('Send Password Reset Link') }}</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

{{-- Styles Section --}}
@section('styles')
	<link href="{{ asset('css/pages/login/classic/login-4.css?v=7.0.5') }}" rel="stylesheet" type="text/css"/>
@endsection

{{-- Scripts Section --}}
@section('scripts')
	{{-- page scripts --}}
	<script src="{{ asset('js/pages/custom/login/login-general.js?v=7.0.5') }}" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			KTLogin.init('reset');
		});
	</script>
@endsection
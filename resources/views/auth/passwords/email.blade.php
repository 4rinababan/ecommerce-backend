@extends('layouts.metronic')
@section('theme-layout', 'blank')

@section('content')
<div class="login login-4 login-forgot-on d-flex flex-row-fluid" id="kt_login">
	<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('{{asset('media/bg/bg-3.jpg')}}');">
		<div class="login-form text-center p-7 position-relative overflow-hidden">
			<div class="d-flex flex-center mb-15">
				<a href="{{ url('/') }}">
					<img src="{{asset('pasaraya-logo.png')}}" class="max-h-75px" alt="" />
				</a>
			</div>
			{{-- Login Forgot Password Form --}}
			<div class="login-forgot">
				<div class="mb-20">
					<h3>{{ __('Reset Password') }}</h3>
					<div class="text-muted font-weight-bold">Enter your email to reset your password</div>
				</div>
				<form class="form" id="kt_login_forgot_form" method="POST" action="{{ route('password.email') }}">
					@csrf
					@if (session('status'))
						<div class="card card-custom bg-primary mb-5">
							<div class="card-body text-white">{{ session('status') }}</div>
						</div>
					@endif
					<div class="form-group mb-10 @error('email') has-danger @enderror">
						<input id="forgot-email" type="email" class="form-control form-control-solid h-auto py-4 px-8 @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" name="email" required autocomplete="off" autofocus/>
						@error('email')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group d-flex flex-wrap flex-center mt-10">
						<button id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">{{ __('Send Password Reset Link') }}</button>
						<button id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">{{ __('Cancel') }}</button>
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
			KTLogin.init('forgot');
			$("#kt_login_forgot_cancel").on('click', function(){history.back()});
		});
	</script>
@endsection
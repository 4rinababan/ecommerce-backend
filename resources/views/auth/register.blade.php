@extends('layouts.metronic')
@section('theme-layout', 'blank')

@section('content')
<div class="login login-4 login-signup-on d-flex flex-row-fluid" id="kt_login">
	<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('{{asset('media/bg/bg-3.jpg')}}');">
		<div class="login-form text-center p-7 position-relative overflow-hidden">
			<div class="d-flex flex-center mb-15">
				<a href="{{ url('/') }}">
					<img src="{{asset('pasaraya-logo.png')}}" class="max-h-75px" alt="" />
				</a>
			</div>
			<div class="login-signup">
				<div class="mb-20">
					<h3>{{ __('Register') }}</h3>
					<div class="text-muted font-weight-bold">Enter your details to create your account</div>
				</div>
				<form class="form" id="kt_login_signup_form" method="POST" action="{{ route('register') }}">
					@csrf
					<div class="form-group mb-5">
						<input id="name" name="name" class="form-control h-auto form-control-solid py-4 px-8 @error('name') is-invalid @enderror" type="text" value="{{ old('name') }}" placeholder="{{ __('Name') }}" required />
						@error('name')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group mb-5">
						<input id="signup-email" name="email" class="form-control h-auto form-control-solid py-4 px-8 @error('email') is-invalid @enderror" type="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required />
						@error('email')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group mb-5">
						<input id="signup-password" name="password" class="form-control h-auto form-control-solid py-4 px-8 @error('password') is-invalid @enderror" type="password" placeholder="{{ __('Password') }}" required />
						@error('password')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group mb-5">
						<input id="password-confirm" name="password_confirmation" class="form-control h-auto form-control-solid py-4 px-8 @error('password_confirmation') is-invalid @enderror" type="password" placeholder="{{ __('Confirm Password') }}" required />
						@error('password_confirmation')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group mb-5 text-left">
						<div class="checkbox-inline">
							<label class="checkbox m-0">
							<input type="checkbox" name="agree" />
							<span></span>I Agree to the
							<a href="#" class="font-weight-bold ml-1">terms and conditions</a>.</label>
						</div>
						<div class="form-text text-muted text-center"></div>
					</div>
					<div class="form-group d-flex flex-wrap flex-center mt-10">
						<button id="kt_login_signup_submit" type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">{{ __('Register') }}</button>
						<button id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">{{ __('Cancel') }}</button>
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
			KTLogin.init("signup");
			$("#kt_login_signup_cancel").on('click', function(){history.back()});
		});
	</script>
@endsection
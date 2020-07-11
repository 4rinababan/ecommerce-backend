@extends('layouts.metronic')
@section('theme-layout', 'blank')

@section('content')
<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
	<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('{{asset('media/bg/bg-3.jpg')}}');">
		<div class="login-form text-center p-7 position-relative overflow-hidden">
			<div class="d-flex flex-center mb-15">
				<a href="{{ url('/') }}">
					<img src="{{asset('pasaraya-logo.png')}}" class="max-h-75px" alt="" />
				</a>
			</div>
			<div class="login-signin">
				<div class="mb-20">
					<h3>{{ __('Login') }}</h3>
					<div class="text-muted font-weight-bold">Enter your details to login to your account:</div>
				</div>
				<form class="form" id="kt_login_signin_form" method="POST" action="{{ route('login') }}">
					@csrf
					@if (session('status'))
						<div class="card card-custom bg-primary mb-5">
							<div class="card-body text-white">{{ session('status') }}</div>
						</div>
					@endif
					<div class="form-group mb-5">
						<input id="signin-email" name="email" type="email" class="form-control h-auto form-control-solid py-4 px-8 @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autofocus/>
						@error('email')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group mb-5">
						<input id="signin-password" name="password" type="password" class="form-control h-auto form-control-solid py-4 px-8 @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required />
						@error('password')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group d-flex flex-wrap justify-content-between align-items-center">
						<div class="checkbox-inline">
							<label class="checkbox m-0 text-muted">
							<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
							<span></span>Remember me</label>
						</div>
						@if (Route::has('password.request'))
							<a id="kt_login_forgot" class="text-muted text-hover-primary" href="{{ route('password.request') }}">
								{{ __('Forgot Your Password?') }}
							</a>
						@endif
					</div>
					<button id="kt_login_signin_submit" type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">{{ __('Login') }}</button>
				</form>
				@if (Route::has('register'))
				<div class="mt-10">
					<span class="opacity-70 mr-4">Don't have an account yet?</span>
					<a href="{{ route('register') }}" id="kt_login_signup" class="text-muted text-hover-primary font-weight-bold">{{ __('Register!') }}</a>
				</div>
				@endif
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
			KTLogin.init();
		});
	</script>
@endsection
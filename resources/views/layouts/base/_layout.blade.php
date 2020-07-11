@if($__env->yieldContent('theme-layout', config('layout.self.layout')) == 'blank')
	<div class="d-flex flex-column flex-root">
		@yield('content')
	</div>
@else
	@include('layouts.base._header-mobile')
	<div class="d-flex flex-column flex-root">
		<div class="d-flex flex-row flex-column-fluid page">
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<div id="kt_header" class="header flex-column header-fixed">
					@include('layouts.partials._menu-top')
					@include('layouts.partials._menu-bottom')
				</div>
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					@yield('content')
				</div>
				<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
					<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
						<div class="text-dark order-2 order-md-1">
							<span class="text-muted font-weight-bold mr-2">2020©</span>
							<a href="http://ecobuildproducts.com" target="_blank" class="text-dark-75 text-hover-primary">Ecobuild Products</a>
						</div>
						<div class="nav nav-dark order-1 order-md-2">
							<a href="https://ecobuildproducts.com/about-us/" target="_blank" class="nav-link pr-3 pl-0">About</a>
							<a href="https://ecobuildproducts.com/about-us/" target="_blank" class="nav-link px-3">Team</a>
							<a href="https://ecobuildproducts.com/contact-us/" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('layouts.partials._quick-user-panel')
	{{--
	@include('layouts.partials._quick-panel')
	@include('layouts.partials._chat-panel')
	--}}
	<div id="kt_scrolltop" class="scrolltop">
		{{ Metronic::getSVG('media/svg/icons/Navigation/Up-2.svg') }}
	</div>
	{{--
	@include('layouts.partials._sticky-toolbar')
	@include('layouts.partials._demo-panel')
	--}}
	{{--
	<div class="d-flex flex-column flex-root">
		<div class="d-flex flex-row flex-column-fluid page">
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				@include('layout.base._header')
			@if(config('layout.aside.self.display'))
				@include('layouts.base._aside')
			@endif
				<div class="content {{ Metronic::printClasses('content', false) }} d-flex flex-column flex-column-fluid" id="kt_content">
					@if(config('layout.subheader.display'))
						@if(array_key_exists(config('layout.subheader.layout'), config('layout.subheader.layouts')))
							@include('layout.partials.subheader._'.config('layout.subheader.layout'))
						@else
							@include('layout.partials.subheader._'.array_key_first(config('layout.subheader.layouts')))
						@endif
					@endif
					@include('layout.base._content')
				</div>
				@include('layout.base._footer')
			</div>
		</div>
	</div>
	--}}
@endif
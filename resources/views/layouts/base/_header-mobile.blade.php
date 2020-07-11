{{-- Header Mobile --}}
<div id="kt_header_mobile" class="header-mobile {{ Metronic::printClasses('header-mobile', false) }}" {{ Metronic::printAttrs('header-mobile') }}>
	{{-- Mobile Logo --}}
	<a href="{{ url('/') }}">
		<img alt="{{ config('app.name') }}" src="{{ asset('pasaraya-logo-horizontal2.png') }}" class="max-h-30px" />
	</a>
	{{-- Mobile Toolbar --}}
	<div class="d-flex align-items-center">
		@if (config('layout.header.menu.self.display'))
			<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle"><span></span></button>
		@endif
		<button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
			{{ Metronic::getSVG('media/svg/icons/General/User.svg', 'svg-icon-xl') }}
		</button>
	</div>
	<!--end::Toolbar-->
</div>
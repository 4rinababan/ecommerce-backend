<!--begin::Top-->
<div class="header-top">
	<!--begin::Container-->
	<div class="container">
		<div class="d-none d-lg-flex align-items-center mr-3">
			<a href="{{ url('/') }}" class="mr-20">
				<img alt="{{ config('app.name') }}" src="{{ asset('pasaraya-logo-horizontal2.png') }}" class="max-h-35px" />
			</a>
			@include('layouts.partials._quick-search-desktop')
		</div>
		<!--begin::Topbar-->
		<div class="topbar">
			@include('layouts.partials._quick-search-mobile')
			@include('layouts.partials._topbar-other-items')
			<div class="topbar-item">
				<div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
					<div class="d-flex flex-column text-right pr-3">
						<span class="text-white opacity-50 font-weight-bold font-size-sm d-none d-md-inline">{{ Auth::user()->name }}</span>
						<span class="text-white font-weight-bolder font-size-sm d-none d-md-inline">Administrator</span>
						{{-- TODO: Change Role name when Role Table is used and connected --}}
					</div>
					{{-- TODO: Change the Span below with profile picture in future --}}
					<span class="symbol symbol-35">
						<span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30">{{ substr(Auth::user()->name,0,1) }}</span>
					</span>
				</div>
			</div>
		</div>
		<!--end::Topbar-->
	</div>
	<!--end::Container-->
</div>
<!--end::Top-->
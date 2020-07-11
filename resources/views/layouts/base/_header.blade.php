{{-- Header --}}
<div id="kt_header" class="header {{ Metronic::printClasses('header', false) }}" {{ Metronic::printAttrs('header') }}>

	@if (config('layout.header.self.display'))
		{{-- Header Top for Desktop View --}}
		<div class="header-top">
			{{-- Container --}}
			<div class="container">
				{{-- Top Left Menu --}}
				<div class="d-none d-lg-flex align-items-center mr-3">
					{{-- Logo --}}
					<a href="{{ url('/') }}" class="mr-20">
						<img alt="{{ config('app.name') }}" src="{{ asset('pasaraya-logo-horizontal2.png') }}" class="max-h-35px" />
					</a>
					<!--begin::Desktop Search-->
					<div class="quick-search quick-search-inline ml-4 w-300px" id="kt_quick_search_inline">
						<!--begin::Form-->
						<form method="get" class="quick-search-form">
							<div class="input-group rounded bg-light">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<span class="svg-icon svg-icon-lg">
											<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</span>
								</div>
								<input type="text" class="form-control h-45px" placeholder="Search..." />
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="quick-search-close ki ki-close icon-sm"></i>
									</span>
								</div>
							</div>
						</form>
						<!--end::Form-->
						<!--begin::Search Toggle-->
						<div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
						<!--end::Search Toggle-->
						<!--begin::Dropdown-->
						<div class="dropdown-menu dropdown-menu-left dropdown-menu-lg dropdown-menu-anim-up">
							<div class="quick-search-wrapper scroll" data-scroll="true" data-height="350" data-mobile-height="200"></div>
						</div>
						<!--end::Dropdown-->
					</div>
					<!--end::Desktop Search-->
				</div>
			</div>
		</div>
	@else
		<div></div>
	@endif
		{{--
		@if (config('layout.header.self.display'))

			@php
				$kt_logo_image = 'logo-light.png';
			@endphp

			@if (config('layout.header.self.theme') === 'light')
				@php $kt_logo_image = 'logo-dark.png' @endphp
			@elseif (config('layout.header.self.theme') === 'dark')
				@php $kt_logo_image = 'logo-light.png' @endphp
			@endif

			{{-- Header Menu --}}
			<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
				@if(config('layout.aside.self.display') == false)
					<div class="header-logo">
						<a href="{{ url('/') }}">
							<img alt="Logo" src="{{ asset('media/logos/'.$kt_logo_image) }}"/>
						</a>
					</div>
				@endif

				<div id="kt_header_menu" class="header-menu header-menu-mobile {{ Metronic::printClasses('header_menu', false) }}" {{ Metronic::printAttrs('header_menu') }}>
					<ul class="menu-nav {{ Metronic::printClasses('header_menu_nav', false) }}">
						{{ Menu::renderHorMenu(config('menu_header.items')) }}
					</ul>
				</div>
			</div>

		@else
			<div></div>
		@endif

		@include('layout.partials.extras._topbar')
		--}}
	</div>
</div>

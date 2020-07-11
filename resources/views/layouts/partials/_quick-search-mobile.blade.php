{{-- TODO: Search Bar to be usable on Admin Panel? --}}
{{--
<!--begin::Tablet & Mobile Search-->
<div class="dropdown d-flex d-lg-none">
	<!--begin::Toggle-->
	<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
		<div class="btn btn-icon btn-hover-transparent-white btn-lg btn-dropdown mr-1">
			{{ Metronic::getSVG('media/svg/icons/General/Search.svg', 'svg-icon-xl') }}
		</div>
	</div>
	<!--end::Toggle-->
	<!--begin::Dropdown-->
	<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
		<div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
			<!--begin:Form-->
			<form method="get" class="quick-search-form">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							{{ Metronic::getSVG('media/svg/icons/General/Search.svg', 'svg-icon-lg') }}
						</span>
					</div>
					<input type="text" class="form-control" placeholder="Search..." />
					<div class="input-group-append">
						<span class="input-group-text">
							<i class="quick-search-close ki ki-close icon-sm text-muted"></i>
						</span>
					</div>
				</div>
			</form>
			<!--end::Form-->
			<!--begin::Scroll-->
			<div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
			<!--end::Scroll-->
		</div>
	</div>
	<!--end::Dropdown-->
</div>
<!--end::Tablet & Mobile Search-->
--}}
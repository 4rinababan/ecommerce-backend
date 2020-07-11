@extends('layouts.metronic')

@section('content')
{{-- TODO: For future reference the content from template is as below --}}
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container">
		<!--begin::Dashboard-->
		<!--begin::Row-->
		<div class="row mt-0 mt-lg-3">
			<div class="col-xl-4">
				<!--begin::Mixed Widget 17-->
				<div class="card card-custom gutter-b card-stretch">
					<!--begin::Header-->
					<div class="card-header border-0 pt-5">
						<div class="card-title font-weight-bolder">
							<div class="card-label">Weekly Sales Stats
							<div class="font-size-sm text-muted mt-2">890,344 Sales</div></div>
						</div>
						<div class="card-toolbar">
							<div class="dropdown dropdown-inline">
								<a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="ki ki-bold-more-hor"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
									<!--begin::Naviigation-->
									<ul class="navi">
										<li class="navi-header font-weight-bold py-5">
											<span class="font-size-lg">Add New:</span>
											<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
										</li>
										<li class="navi-separator mb-3 opacity-70"></li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-shopping-cart-1"></i>
												</span>
												<span class="navi-text">Order</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="navi-icon flaticon2-calendar-8"></i>
												</span>
												<span class="navi-text">Members</span>
												<span class="navi-label">
													<span class="label label-light-danger label-rounded font-weight-bold">3</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="navi-icon flaticon2-telegram-logo"></i>
												</span>
												<span class="navi-text">Project</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="navi-icon flaticon2-new-email"></i>
												</span>
												<span class="navi-text">Record</span>
												<span class="navi-label">
													<span class="label label-light-success label-rounded font-weight-bold">5</span>
												</span>
											</a>
										</li>
										<li class="navi-separator mt-3 opacity-70"></li>
										<li class="navi-footer pt-5 pb-4">
											<a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
											<a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
										</li>
									</ul>
									<!--end::Naviigation-->
								</div>
							</div>
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body p-0 d-flex flex-column">
						<!--begin::Items-->
						<div class="flex-grow-1 card-spacer">
							<div class="row row-paddingless mt-5 mb-10">
								<!--begin::Item-->
								<div class="col">
									<div class="d-flex align-items-center mr-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-45 symbol-light-info mr-4 flex-shrink-0">
											<div class="symbol-label">
												{{ Metronic::getSVG('media/svg/icons/Shopping/Cart3.svg', 'svg-icon-lg svg-icon-info') }}
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="font-size-h4 text-dark-75 font-weight-bolder">$2,034</div>
											<div class="font-size-sm text-muted font-weight-bold mt-1">Author Sales</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="col">
									<div class="d-flex align-items-center mr-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-45 symbol-light-danger mr-4 flex-shrink-0">
											<div class="symbol-label">
												{{ Metronic::getSVG('media/svg/icons/Home/Library.svg', 'svg-icon-lg svg-icon-danger') }}
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="font-size-h4 text-dark-75 font-weight-bolder">$706</div>
											<div class="font-size-sm text-muted font-weight-bold mt-1">Commision</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Widget Item-->
							</div>
							<div class="row row-paddingless">
								<!--begin::Item-->
								<div class="col">
									<div class="d-flex align-items-center mr-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-45 symbol-light-success mr-4 flex-shrink-0">
											<div class="symbol-label">
												{{ Metronic::getSVG('media/svg/icons/Shopping/Cart3.svg', 'svg-icon-lg svg-icon-success') }}
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="font-size-h4 text-dark-75 font-weight-bolder">$49</div>
											<div class="font-size-sm text-muted font-weight-bold mt-1">Average Bid</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="col">
									<div class="d-flex align-items-center mr-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-45 symbol-light-primary mr-4 flex-shrink-0">
											<div class="symbol-label">
												{{ Metronic::getSVG('media/svg/icons/Shopping/Barcode-read.svg', 'svg-icon-lg svg-icon-primary') }}
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="font-size-h4 text-dark-75 font-weight-bolder">$5.8M</div>
											<div class="font-size-sm text-muted font-weight-bold mt-1">All Time Sales</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Item-->
							</div>
						</div>
						<!--end::Items-->
						<!--begin::Chart-->
						<div id="kt_mixed_widget_17_chart" class="card-rounded-bottom" data-color="primary" style="height: 200px"></div>
						<!--end::Chart-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Mixed Widget 17-->
			</div>
			<div class="col-xl-4">
				<!--begin::List Widget 9-->
				<div class="card card-custom gutter-b card-stretch">
					<!--begin::Header-->
					<div class="card-header align-items-center border-0 mt-4">
						<h3 class="card-title align-items-start flex-column">
							<span class="font-weight-bolder text-dark">My Activity</span>
							<span class="text-muted mt-3 font-weight-bold font-size-sm">890,344 Sales</span>
						</h3>
						<div class="card-toolbar">
							<div class="dropdown dropdown-inline">
								<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="ki ki-bold-more-hor"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
									<!--begin::Navigation-->
									<ul class="navi navi-hover">
										<li class="navi-header font-weight-bold py-4">
											<span class="font-size-lg">Choose Label:</span>
											<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
										</li>
										<li class="navi-separator mb-3 opacity-70"></li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-success">Customer</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-danger">Partner</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-warning">Suplier</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-primary">Member</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-dark">Staff</span>
												</span>
											</a>
										</li>
										<li class="navi-separator mt-3 opacity-70"></li>
										<li class="navi-footer py-4">
											<a class="btn btn-clean font-weight-bold btn-sm" href="#">
											<i class="ki ki-plus icon-sm"></i>Add new</a>
										</li>
									</ul>
									<!--end::Navigation-->
								</div>
							</div>
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body pt-4">
						<div class="timeline timeline-5 mt-3">
							<!--begin::Item-->
							<div class="timeline-item align-items-start">
								<!--begin::Label-->
								<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">08:42</div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-warning icon-xl"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Text-->
								<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Outlines keep you honest. And keep structure</div>
								<!--end::Text-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="timeline-item align-items-start">
								<!--begin::Label-->
								<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">10:00</div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-success icon-xl"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Content-->
								<div class="timeline-content d-flex">
									<span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">AEOL meeting</span>
								</div>
								<!--end::Content-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="timeline-item align-items-start">
								<!--begin::Label-->
								<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">14:37</div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-danger icon-xl"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Desc-->
								<div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">Make deposit
								<a href="#" class="text-primary">USD 700</a>. to ESL</div>
								<!--end::Desc-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="timeline-item align-items-start">
								<!--begin::Label-->
								<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-primary icon-xl"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Text-->
								<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
								<!--end::Text-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="timeline-item align-items-start">
								<!--begin::Label-->
								<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-danger icon-xl"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Desc-->
								<div class="timeline-content font-weight-bolder text-dark-75 pl-3 font-size-lg">New order placed
								<a href="#" class="text-primary">#XF-2356</a>.</div>
								<!--end::Desc-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="timeline-item align-items-start">
								<!--begin::Label-->
								<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">23:07</div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-info icon-xl"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Text-->
								<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Outlines keep and you honest. Indulging in poorly driving</div>
								<!--end::Text-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="timeline-item align-items-start">
								<!--begin::Label-->
								<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-primary icon-xl"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Text-->
								<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
								<!--end::Text-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="timeline-item align-items-start">
								<!--begin::Label-->
								<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-danger icon-xl"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Desc-->
								<div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">New order placed
								<a href="#" class="text-primary">#XF-2356</a>.</div>
								<!--end::Desc-->
							</div>
							<!--end::Item-->
						</div>
						<!--end: Items-->
					</div>
					<!--end: Card Body-->
				</div>
				<!--end: Card-->
				<!--end: List Widget 9-->
			</div>
			<div class="col-xl-4">
				<!--begin::Engage Widget 5-->
				<div class="card card-custom gutter-b card-stretch bg-info">
					<div class="card-body d-flex p-0">
						<div class="flex-grow-1 bg-info p-12 pb-40 card-rounded flex-grow-1 bgi-no-repeat" style="background-position: right bottom; background-size: 55% auto; background-image: url({{ asset('media/svg/humans/custom-6.svg)') }}">
							<h3 class="text-inverse-info pb-5 font-weight-bolder">Start Now</h3>
							<p class="text-inverse-info pb-5 font-size-h6">Offering discounts for better
							<br />online a store can loyalty
							<br />weapon into driving</p>
							<a href="#" class="btn btn-success font-weight-bold py-2 px-6">Join Now</a>
						</div>
					</div>
				</div>
				<!--end::Engage Widget 5-->
			</div>
		</div>
		<!--end::Row-->
		<!--begin::Row-->
		<div class="row">
			<div class="col-lg-4">
				<!--begin::List Widget 4-->
				<div class="card card-custom card-stretch gutter-b">
					<!--begin::Header-->
					<div class="card-header border-0">
						<h3 class="card-title font-weight-bolder text-dark">Todo</h3>
						<div class="card-toolbar">
							<div class="dropdown dropdown-inline">
								<a href="#" class="btn btn-light btn-sm font-size-sm font-weight-bolder dropdown-toggle text-dark-75" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create</a>
								<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
									<!--begin::Navigation-->
									<ul class="navi navi-hover">
										<li class="navi-header pb-1">
											<span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-shopping-cart-1"></i>
												</span>
												<span class="navi-text">Order</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-calendar-8"></i>
												</span>
												<span class="navi-text">Event</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-graph-1"></i>
												</span>
												<span class="navi-text">Report</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-rocket-1"></i>
												</span>
												<span class="navi-text">Post</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-writing"></i>
												</span>
												<span class="navi-text">File</span>
											</a>
										</li>
									</ul>
									<!--end::Navigation-->
								</div>
							</div>
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body pt-2">
						<!--begin::Item-->
						<div class="d-flex align-items-center">
							<!--begin::Bullet-->
							<span class="bullet bullet-bar bg-success align-self-stretch"></span>
							<!--end::Bullet-->
							<!--begin::Checkbox-->
							<label class="checkbox checkbox-lg checkbox-light-success checkbox-inline flex-shrink-0 m-0 mx-4">
								<input type="checkbox" name="select" value="1" />
								<span></span>
							</label>
							<!--end::Checkbox-->
							<!--begin::Text-->
							<div class="d-flex flex-column flex-grow-1">
								<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Create FireStone Logo</a>
								<span class="text-muted font-weight-bold">Due in 2 Days</span>
							</div>
							<!--end::Text-->
							<!--begin::Dropdown-->
							<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
								<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="ki ki-bold-more-hor"></i>
								</a>
								<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
									<!--begin::Navigation-->
									<ul class="navi navi-hover">
										<li class="navi-header font-weight-bold py-4">
											<span class="font-size-lg">Choose Label:</span>
											<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
										</li>
										<li class="navi-separator mb-3 opacity-70"></li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-success">Customer</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-danger">Partner</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-warning">Suplier</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-primary">Member</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-dark">Staff</span>
												</span>
											</a>
										</li>
										<li class="navi-separator mt-3 opacity-70"></li>
										<li class="navi-footer py-4">
											<a class="btn btn-clean font-weight-bold btn-sm" href="#">
											<i class="ki ki-plus icon-sm"></i>Add new</a>
										</li>
									</ul>
									<!--end::Navigation-->
								</div>
							</div>
							<!--end::Dropdown-->
						</div>
						<!--end:Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-center mt-10">
							<!--begin::Bullet-->
							<span class="bullet bullet-bar bg-primary align-self-stretch"></span>
							<!--end::Bullet-->
							<!--begin::Checkbox-->
							<label class="checkbox checkbox-lg checkbox-light-primary checkbox-inline flex-shrink-0 m-0 mx-4">
								<input type="checkbox" value="1" />
								<span></span>
							</label>
							<!--end::Checkbox-->
							<!--begin::Text-->
							<div class="d-flex flex-column flex-grow-1">
								<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Stakeholder Meeting</a>
								<span class="text-muted font-weight-bold">Due in 3 Days</span>
							</div>
							<!--end::Text-->
							<!--begin::Dropdown-->
							<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
								<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="ki ki-bold-more-hor"></i>
								</a>
								<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
									<!--begin::Navigation-->
									<ul class="navi navi-hover">
										<li class="navi-header font-weight-bold py-4">
											<span class="font-size-lg">Choose Label:</span>
											<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
										</li>
										<li class="navi-separator mb-3 opacity-70"></li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-success">Customer</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-danger">Partner</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-warning">Suplier</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-primary">Member</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-dark">Staff</span>
												</span>
											</a>
										</li>
										<li class="navi-separator mt-3 opacity-70"></li>
										<li class="navi-footer py-4">
											<a class="btn btn-clean font-weight-bold btn-sm" href="#">
											<i class="ki ki-plus icon-sm"></i>Add new</a>
										</li>
									</ul>
									<!--end::Navigation-->
								</div>
							</div>
							<!--end::Dropdown-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-center mt-10">
							<!--begin::Bullet-->
							<span class="bullet bullet-bar bg-warning align-self-stretch"></span>
							<!--end::Bullet-->
							<!--begin::Checkbox-->
							<label class="checkbox checkbox-lg checkbox-light-warning checkbox-inline flex-shrink-0 m-0 mx-4">
								<input type="checkbox" value="1" />
								<span></span>
							</label>
							<!--end::Checkbox-->
							<!--begin::Text-->
							<div class="d-flex flex-column flex-grow-1">
								<a href="#" class="text-dark-75 text-hover-primary font-size-sm font-weight-bold font-size-lg mb-1">Scoping &amp; Estimations</a>
								<span class="text-muted font-weight-bold">Due in 5 Days</span>
							</div>
							<!--end::Text-->
							<!--begin: Dropdown-->
							<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
								<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="ki ki-bold-more-hor"></i>
								</a>
								<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
									<!--begin::Navigation-->
									<ul class="navi navi-hover">
										<li class="navi-header font-weight-bold py-4">
											<span class="font-size-lg">Choose Label:</span>
											<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
										</li>
										<li class="navi-separator mb-3 opacity-70"></li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-success">Customer</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-danger">Partner</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-warning">Suplier</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-primary">Member</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-dark">Staff</span>
												</span>
											</a>
										</li>
										<li class="navi-separator mt-3 opacity-70"></li>
										<li class="navi-footer py-4">
											<a class="btn btn-clean font-weight-bold btn-sm" href="#">
											<i class="ki ki-plus icon-sm"></i>Add new</a>
										</li>
									</ul>
									<!--end::Navigation-->
								</div>
							</div>
							<!--end::Dropdown-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-center mt-10">
							<!--begin::Bullet-->
							<span class="bullet bullet-bar bg-info align-self-stretch"></span>
							<!--end::Bullet-->
							<!--begin::Checkbox-->
							<label class="checkbox checkbox-lg checkbox-light-info checkbox-inline flex-shrink-0 m-0 mx-4">
								<input type="checkbox" value="1" />
								<span></span>
							</label>
							<!--end::Checkbox-->
							<!--begin::Text-->
							<div class="d-flex flex-column flex-grow-1">
								<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Sprint Showcase</a>
								<span class="text-muted font-weight-bold">Due in 1 Day</span>
							</div>
							<!--end::Text-->
							<!--begin::Dropdown-->
							<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
								<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="ki ki-bold-more-hor"></i>
								</a>
								<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
									<!--begin::Navigation-->
									<ul class="navi navi-hover py-5">
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-drop"></i>
												</span>
												<span class="navi-text">New Group</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-list-3"></i>
												</span>
												<span class="navi-text">Contacts</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-rocket-1"></i>
												</span>
												<span class="navi-text">Groups</span>
												<span class="navi-link-badge">
													<span class="label label-light-primary label-inline font-weight-bold">new</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-bell-2"></i>
												</span>
												<span class="navi-text">Calls</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-gear"></i>
												</span>
												<span class="navi-text">Settings</span>
											</a>
										</li>
										<li class="navi-separator my-3"></li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-magnifier-tool"></i>
												</span>
												<span class="navi-text">Help</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-bell-2"></i>
												</span>
												<span class="navi-text">Privacy</span>
												<span class="navi-link-badge">
													<span class="label label-light-danger label-rounded font-weight-bold">5</span>
												</span>
											</a>
										</li>
									</ul>
									<!--end::Navigation-->
								</div>
							</div>
							<!--end::Dropdown-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-center mt-10">
							<!--begin::Bullet-->
							<span class="bullet bullet-bar bg-danger align-self-stretch"></span>
							<!--end::Bullet-->
							<!--begin::Checkbox-->
							<label class="checkbox checkbox-lg checkbox-light-danger checkbox-inline flex-shrink-0 m-0 mx-4">
								<input type="checkbox" value="1" />
								<span></span>
							</label>
							<!--end::Checkbox:-->
							<!--begin::Title-->
							<div class="d-flex flex-column flex-grow-1">
								<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Project Retro</a>
								<span class="text-muted font-weight-bold">Due in 12 Days</span>
							</div>
							<!--end::Text-->
							<!--begin: Dropdown-->
							<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
								<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="ki ki-bold-more-hor"></i>
								</a>
								<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
									<!--begin::Navigation-->
									<ul class="navi navi-hover">
										<li class="navi-header font-weight-bold py-4">
											<span class="font-size-lg">Choose Label:</span>
											<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
										</li>
										<li class="navi-separator mb-3 opacity-70"></li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-success">Customer</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-danger">Partner</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-warning">Suplier</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-primary">Member</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-dark">Staff</span>
												</span>
											</a>
										</li>
										<li class="navi-separator mt-3 opacity-70"></li>
										<li class="navi-footer py-4">
											<a class="btn btn-clean font-weight-bold btn-sm" href="#">
											<i class="ki ki-plus icon-sm"></i>Add new</a>
										</li>
									</ul>
									<!--end::Navigation-->
								</div>
							</div>
							<!--end::Dropdown-->
						</div>
						<!--end::Item-->
					</div>
					<!--end::Body-->
				</div>
				<!--end:List Widget 4-->
			</div>
			<div class="col-lg-8">
				<!--begin::Advance Table Widget 2-->
				<div class="card card-custom card-stretch gutter-b">
					<!--begin::Header-->
					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label font-weight-bolder text-dark">New Arrivals</span>
							<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
						</h3>
						<div class="card-toolbar">
							<ul class="nav nav-pills nav-pills-sm nav-dark-75">
								<li class="nav-item">
									<a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_1_1">Month</a>
								</li>
								<li class="nav-item">
									<a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_1_2">Week</a>
								</li>
								<li class="nav-item">
									<a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_1_3">Day</a>
								</li>
							</ul>
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body pt-3 pb-0">
						<!--begin::Table-->
						<div class="table-responsive">
							<table class="table table-borderless table-vertical-center">
								<thead>
									<tr>
										<th class="p-0" style="width: 50px"></th>
										<th class="p-0" style="min-width: 200px"></th>
										<th class="p-0" style="min-width: 100px"></th>
										<th class="p-0" style="min-width: 125px"></th>
										<th class="p-0" style="min-width: 110px"></th>
										<th class="p-0" style="min-width: 150px"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="pl-0 py-4">
											<div class="symbol symbol-50 symbol-light mr-1">
												<span class="symbol-label">
													<img src="{{ asset('media/svg/misc/006-plurk.svg') }}" class="h-50 align-self-center" alt="" />
												</span>
											</div>
										</td>
										<td class="pl-0">
											<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>
											<div>
												<span class="font-weight-bolder">Email:</span>
												<a class="text-muted font-weight-bold text-hover-primary" href="#">bprow@bnc.cc</a>
											</div>
										</td>
										<td class="text-right">
											<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
											<span class="text-muted font-weight-bold">Paid</span>
										</td>
										<td class="text-right">
											<span class="text-muted font-weight-500">ReactJs, HTML</span>
										</td>
										<td class="text-right">
											<span class="label label-lg label-light-primary label-inline">Approved</span>
										</td>
										<td class="text-right pr-0">
											<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
												{{ Metronic::getSVG('media/svg/icons/General/Settings-1.svg', 'svg-icon-md svg-icon-primary') }}
											</a>
											<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
												{{ Metronic::getSVG('media/svg/icons/Communication/Write.svg', 'svg-icon-md svg-icon-primary') }}
											</a>
											<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
												{{ Metronic::getSVG('media/svg/icons/General/Trash.svg', 'svg-icon-md svg-icon-primary') }}
											</a>
										</td>
									</tr>
									<tr>
										<td class="pl-0 py-4">
											<div class="symbol symbol-50 symbol-light">
												<span class="symbol-label">
													<img src="{{ asset('media/svg/misc/015-telegram.svg') }}" class="h-50 align-self-center" alt="" />
												</span>
											</div>
										</td>
										<td class="pl-0">
											<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>
											<div>
												<span class="font-weight-bolder">Email:</span>
												<a class="text-muted font-weight-bold text-hover-primary" href="#">app@dev.com</a>
											</div>
										</td>
										<td class="text-right">
											<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>
											<span class="text-muted font-weight-bold">Paid</span>
										</td>
										<td class="text-right">
											<span class="text-muted font-weight-500">Python, MySQL</span>
										</td>
										<td class="text-right">
											<span class="label label-lg label-light-warning label-inline">In Progress</span>
										</td>
										<td class="text-right pr-0">
											<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
												{{ Metronic::getSVG('media/svg/icons/General/Settings-1.svg', 'svg-icon-md svg-icon-primary') }}
											</a>
											<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
												{{ Metronic::getSVG('media/svg/icons/Communication/Write.svg', 'svg-icon-md svg-icon-primary') }}
											</a>
											<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
												{{ Metronic::getSVG('media/svg/icons/General/Trash.svg', 'svg-icon-md svg-icon-primary') }}
											</a>
										</td>
									</tr>
									<tr>
										<td class="pl-0 py-4">
											<div class="symbol symbol-50 symbol-light">
												<span class="symbol-label">
													<img src="{{ asset('media/svg/misc/003-puzzle.svg') }}" class="h-50 align-self-center" alt="" />
												</span>
											</div>
										</td>
										<td class="pl-0">
											<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>
											<div>
												<span class="font-weight-bolder">Email:</span>
												<a class="text-muted font-weight-bold text-hover-primary" href="#">company@dev.com</a>
											</div>
										</td>
										<td class="text-right">
											<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>
											<span class="text-muted font-weight-bold">Paid</span>
										</td>
										<td class="text-right">
											<span class="text-muted font-weight-500">Laravel, Metronic</span>
										</td>
										<td class="text-right">
											<span class="label label-lg label-light-success label-inline">Success</span>
										</td>
										<td class="text-right pr-0">
											<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
												{{ Metronic::getSVG('media/svg/icons/General/Settings-1.svg', 'svg-icon-md svg-icon-primary') }}
											</a>
											<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
												{{ Metronic::getSVG('media/svg/icons/Communication/Write.svg', 'svg-icon-md svg-icon-primary') }}
											</a>
											<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
												{{ Metronic::getSVG('media/svg/icons/General/Trash.svg', 'svg-icon-md svg-icon-primary') }}
											</a>
										</td>
									</tr>
									<tr>
										<td class="pl-0 py-4">
											<div class="symbol symbol-50 symbol-light">
												<span class="symbol-label">
													<img src="{{ asset('media/svg/misc/005-bebo.svg') }}" class="h-50 align-self-center" alt="" />
												</span>
											</div>
										</td>
										<td class="pl-0">
											<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>
											<div>
												<span class="font-weight-bolder">Email:</span>
												<a class="text-muted font-weight-bold text-hover-primary" href="#">hr@demo.com</a>
											</div>
										</td>
										<td class="text-right">
											<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>
											<span class="text-muted font-weight-bold">Paid</span>
										</td>
										<td class="text-right">
											<span class="text-muted font-weight-bold">AngularJS, C#</span>
										</td>
										<td class="text-right">
											<span class="label label-lg label-light-danger label-inline">Rejected</span>
										</td>
										<td class="text-right pr-0">
											<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
												{{ Metronic::getSVG('media/svg/icons/General/Settings-1.svg', 'svg-icon-md svg-icon-primary') }}
											</a>
											<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
												{{ Metronic::getSVG('media/svg/icons/Communication/Write.svg', 'svg-icon-md svg-icon-primary') }}
											</a>
											<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
												{{ Metronic::getSVG('media/svg/icons/General/Trash.svg', 'svg-icon-md svg-icon-primary') }}
											</a>
										</td>
									</tr>
									<tr>
										<td class="pl-0 py-4">
											<div class="symbol symbol-50 symbol-light">
												<span class="symbol-label">
													<img src="{{ asset('media/svg/misc/014-kickstarter.svg') }}" class="h-50 align-self-center" alt="" />
												</span>
											</div>
										</td>
										<td class="pl-0">
											<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>
											<div>
												<span class="font-weight-bolder">Email:</span>
												<a class="text-muted font-weight-bold text-hover-primary" href="#">ktr@demo.com</a>
											</div>
										</td>
										<td class="text-right">
											<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
											<span class="text-muted font-weight-bold">Paid</span>
										</td>
										<td class="text-right">
											<span class="text-muted font-weight-500">ReactJS, Ruby</span>
										</td>
										<td class="text-right">
											<span class="label label-lg label-light-warning label-inline">In Progress</span>
										</td>
										<td class="text-right pr-0">
											<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
												{{ Metronic::getSVG('media/svg/icons/General/Settings-1.svg', 'svg-icon-md svg-icon-primary') }}
											</a>
											<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
												{{ Metronic::getSVG('media/svg/icons/Communication/Write.svg', 'svg-icon-md svg-icon-primary') }}
											</a>
											<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
												{{ Metronic::getSVG('media/svg/icons/General/Trash.svg', 'svg-icon-md svg-icon-primary') }}
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--end::Table-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Advance Table Widget 2-->
			</div>
		</div>
		<!--end::Row-->
		<!--begin::Row-->
		<div class="row">
			<div class="col-xl-4">
				<!--begin::Mixed Widget 7-->
				<div class="card card-custom gutter-b card-stretch">
					<!--begin::Body-->
					<div class="card-body">
						<div class="d-flex flex-wrap align-items-center py-1">
							<!--begin:Pic-->
							<div class="symbol symbol-80 symbol-light-danger mr-5">
								<span class="symbol-label">
									<img src="{{ asset('media/svg/misc/008-infography.svg') }}" class="h-50 align-self-center" alt="" />
								</span>
							</div>
							<!--end:Pic-->
							<!--begin:Title-->
							<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
								<a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h5">Monthly Subscription
								<br />Based SaaS</a>
								<span class="text-muted font-weight-bold font-size-lg">Due: 27 Apr 2020</span>
							</div>
							<!--end:Title-->
							<!--begin:Stats-->
							<div class="d-flex flex-column w-100 mt-12">
								<span class="text-dark mr-2 font-size-lg font-weight-bolder pb-3">Progress</span>
								<div class="progress progress-xs w-100">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<!--end:Stats-->
							<!--begin:Team-->
							<div class="d-flex flex-column mt-10">
								<div class="text-dark mr-2 font-size-lg font-weight-bolder pb-4">Team</div>
								<div class="d-flex">
									<a href="#" class="symbol symbol-50 symbol-light-danger mr-3">
										<div class="symbol-label">
											<img src="{{ asset('media/svg/avatars/001-boy.svg') }}" class="h-75 align-self-end" alt="" />
										</div>
									</a>
									<a href="#" class="symbol symbol-50 symbol-light-danger mr-3">
										<div class="symbol-label">
											<img src="{{ asset('media/svg/avatars/028-girl-16.svg') }}" class="h-75 align-self-end" alt="" />
										</div>
									</a>
									<a href="#" class="symbol symbol-50 symbol-light-danger mr-3">
										<div class="symbol-label">
											<img src="{{ asset('media/svg/avatars/024-boy-9.svg') }}" class="h-75 align-self-end" alt="" />
										</div>
									</a>
									<a href="#" class="symbol symbol-50 symbol-light-danger">
										<div class="symbol-label">
											<img src="{{ asset('media/svg/avatars/005-girl-2.svg') }}" class="h-75 align-self-end" alt="" />
										</div>
									</a>
								</div>
							</div>
							<!--end:Team-->
						</div>
					</div>
					<!--end::Body-->
				</div>
				<!--end::Mixed Widget 7-->
			</div>
			<div class="col-xl-4">
				<!--begin::Mixed Widget 8-->
				<div class="card card-custom gutter-b card-stretch">
					<!--begin::Card body-->
					<div class="card-body">
						<div class="d-flex flex-wrap align-items-center py-1">
							<!--begin::Pic-->
							<div class="symbol symbol-80 symbol-light-success mr-5">
								<span class="symbol-label">
									<img src="{{ asset('media/svg/misc/014-kickstarter.svg') }}" class="h-50 align-self-center" alt="" />
								</span>
							</div>
							<!--end::Pic-->
							<!--begin::Title-->
							<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
								<a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h5">Monthly Subscription
								<br />Based SaaS</a>
								<span class="text-muted font-weight-bold font-size-lg">Due: 27 Apr 2020</span>
							</div>
							<!--end::Title-->
							<!--begin::Stats-->
							<div class="d-flex flex-column w-100 mt-12">
								<span class="text-dark mr-2 font-size-lg font-weight-bolder pb-3">Progress</span>
								<div class="progress progress-xs w-100">
									<div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<!--end::Stats-->
							<!--begin::Team-->
							<div class="d-flex flex-column mt-10">
								<span class="text-dark mr-2 font-size-lg font-weight-bolder pb-4">Team</span>
								<div class="d-flex">
									<!--begin::Pic-->
									<a href="#" class="symbol symbol-50 symbol-light-success mr-3">
										<div class="symbol-label">
											<img src="{{ asset('media/svg/avatars/001-boy.svg') }}" class="h-75 align-self-end" alt="" />
										</div>
									</a>
									<!--end::Pic-->
									<!--begin::Pic-->
									<a href="#" class="symbol symbol-50 symbol-light-success mr-3">
										<div class="symbol-label">
											<img src="{{ asset('media/svg/avatars/028-girl-16.svg') }}" class="h-75 align-self-end" alt="" />
										</div>
									</a>
									<!--end::Pic-->
									<!--begin::Pic-->
									<a href="#" class="symbol symbol-50 symbol-light-success mr-3">
										<div class="symbol-label">
											<img src="{{ asset('media/svg/avatars/024-boy-9.svg') }}" class="h-75 align-self-end" alt="" />
										</div>
									</a>
									<!--end::Pic-->
								</div>
							</div>
							<!--end::Team-->
						</div>
					</div>
					<!--end::Body-->
				</div>
				<!--end::Mixed Widget 8-->
			</div>
			<div class="col-xl-4">
				<!--begin::Mixed Widget 9-->
				<div class="card card-custom gutter-b card-stretch">
					<!--begin::Body-->
					<div class="card-body">
						<div class="d-flex flex-wrap align-items-center py-1">
							<!--begin::Pic-->
							<div class="symbol symbol-80 symbol-light-primary mr-5">
								<span class="symbol-label">
									<img src="{{ asset('media/svg/misc/010-vimeo.svg') }}" class="h-50 align-self-center" alt="" />
								</span>
							</div>
							<!--end::Pic-->
							<!--begin::Title-->
							<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
								<a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h5">Monthly Subscription
								<br />Based SaaS</a>
								<span class="text-muted font-weight-bold font-size-lg">Due: 27 Apr 2020</span>
							</div>
							<!--end::Title-->
							<!--begin::Stats-->
							<div class="d-flex flex-column w-100 mt-12">
								<span class="text-dark mr-2 font-size-lg font-weight-bolder pb-3">Progress</span>
								<div class="progress progress-xs w-100">
									<div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<!--end::Stats-->
							<!--begin::Team-->
							<div class="d-flex flex-column mt-10">
								<span class="text-dark mr-2 font-size-lg font-weight-bolder pb-4">Team</span>
								<div class="d-flex">
									<!--begin::Pic-->
									<a href="#" class="symbol symbol-50 symbol-light-primary mr-3">
										<div class="symbol-label">
											<img src="{{ asset('media/svg/avatars/001-boy.svg') }}" class="h-75 align-self-end" alt="" />
										</div>
									</a>
									<!--end::Pic-->
									<!--begin::Pic-->
									<a href="#" class="symbol symbol-50 symbol-light-primary mr-3">
										<div class="symbol-label">
											<img src="{{ asset('media/svg/avatars/028-girl-16.svg') }}" class="h-75 align-self-end" alt="" />
										</div>
									</a>
									<!--end::Pic-->
									<!--begin::Pic-->
									<a href="#" class="symbol symbol-50 symbol-light-primary mr-3">
										<div class="symbol-label">
											<img src="{{ asset('media/svg/avatars/024-boy-9.svg') }}" class="h-75 align-self-end" alt="" />
										</div>
									</a>
									<!--end::Pic-->
									<!--begin::Pic-->
									<a href="#" class="symbol symbol-50 symbol-light-primary">
										<div class="symbol-label">
											<img src="{{ asset('media/svg/avatars/005-girl-2.svg') }}" class="h-75 align-self-end" alt="" />
										</div>
									</a>
									<!--end::Pic-->
								</div>
							</div>
							<!--end::Team-->
						</div>
					</div>
					<!--end::Body-->
				</div>
				<!--end::Mixed Widget 9-->
			</div>
		</div>
		<!--end::Row-->
		<!--begin::Row-->
		<div class="row">
			<div class="col-xl-4">
				<!--begin::Mixed Widget 10-->
				<div class="card card-custom card-stretch gutter-b">
					<!--begin::Body-->
					<div class="card-body d-flex flex-column">
						<div class="flex-grow-1 pb-5">
							<!--begin::Info-->
							<div class="d-flex align-items-center pr-2 mb-6">
								<span class="text-muted font-weight-bold font-size-lg flex-grow-1">7 Hours Ago</span>
								<div class="symbol symbol-50">
									<span class="symbol-label bg-light-light">
										<img src="{{ asset('media/svg/misc/006-plurk.svg') }}" class="h-50 align-self-center" alt="" />
									</span>
								</div>
							</div>
							<!--end::Info-->
							<!--begin::Link-->
							<a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">PitStop - Multiple Email
							<br />Generator</a>
							<!--end::Link-->
							<!--begin::Desc-->
							<p class="text-dark-50 font-weight-normal font-size-lg mt-6">Pitstop creates quick email campaigns.
							<br />We help to strengthen your brand
							<br />for your every purpose.</p>
							<!--end::Desc-->
						</div>
						<!--begin::Team-->
						<div class="d-flex align-items-center">
							<!--begin::Pic-->
							<a href="#" class="symbol symbol-45 symbol-light mr-3">
								<div class="symbol-label">
									<img src="{{ asset('media/svg/avatars/001-boy.svg') }}" class="h-75 align-self-end" alt="" />
								</div>
							</a>
							<!--end::Pic-->
							<!--begin::Pic-->
							<a href="#" class="symbol symbol-45 symbol-light mr-3">
								<div class="symbol-label">
									<img src="{{ asset('media/svg/avatars/028-girl-16.svg') }}" class="h-75 align-self-end" alt="" />
								</div>
							</a>
							<!--end::Pic-->
							<!--begin::Pic-->
							<a href="#" class="symbol symbol-45 symbol-light">
								<div class="symbol-label">
									<img src="{{ asset('media/svg/avatars/024-boy-9.svg') }}" class="h-75 align-self-end" alt="" />
								</div>
							</a>
							<!--end::Pic-->
						</div>
						<!--end::Team-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Mixed Widget 10-->
			</div>
			<div class="col-xl-4">
				<!--begin::Mixed Widget 11-->
				<div class="card card-custom card-stretch gutter-b">
					<!--begin::Body-->
					<div class="card-body d-flex flex-column">
						<div class="flex-grow-1 pb-5">
							<!--begin::Info-->
							<div class="d-flex align-items-center pr-2 mb-6">
								<span class="text-muted font-weight-bold font-size-lg flex-grow-1">2 Days Ago</span>
								<div class="symbol symbol-50">
									<span class="symbol-label bg-light-light">
										<img src="{{ asset('media/svg/misc/015-telegram.svg') }}" class="h-50 align-self-center" alt="" />
									</span>
								</div>
							</div>
							<!--end::Info-->
							<a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">Craft - ReactJS Admin
							<br />Theme</a>
							<!--begin::Desc-->
							<p class="text-dark-50 font-weight-normal font-size-lg mt-6">Craft uses the latest and greatest frameworks
							<br />with ReactJS for complete modernization and
							<br />future proofing your business operations
							<br />and sales opportunities</p>
							<!--end::Desc-->
						</div>
						<!--begin::Team-->
						<div class="d-flex align-items-center">
							<!--begin::Pic-->
							<a href="#" class="symbol symbol-45 symbol-light mr-3">
								<div class="symbol-label">
									<img src="{{ asset('media/svg/avatars/001-boy.svg') }}" class="h-75 align-self-end" alt="" />
								</div>
							</a>
							<!--end::Pic-->
							<!--begin::Pic-->
							<a href="#" class="symbol symbol-45 symbol-light mr-3">
								<div class="symbol-label">
									<img src="{{ asset('media/svg/avatars/028-girl-16.svg') }}" class="h-75 align-self-end" alt="" />
								</div>
							</a>
							<!--end::Pic-->
							<!--begin: Pic-->
							<a href="#" class="symbol symbol-45 symbol-light mr-3">
								<div class="symbol-label">
									<img src="{{ asset('media/svg/avatars/024-boy-9.svg') }}" class="h-75 align-self-end" alt="" />
								</div>
							</a>
							<!--end::Pic-->
							<!--begin::Pic-->
							<a href="#" class="symbol symbol-45 symbol-light">
								<div class="symbol-label">
									<img src="{{ asset('media/svg/avatars/005-girl-2.svg') }}" class="h-75 align-self-end" alt="" />
								</div>
							</a>
							<!--end::Pic-->
						</div>
						<!--end::Team-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Mixed Widget 11-->
			</div>
			<div class="col-xl-4">
				<!--begin::Mixed Widget 12-->
				<div class="card card-custom card-stretch gutter-b">
					<!--begin::Body-->
					<div class="card-body d-flex flex-column">
						<div class="flex-grow-1 pb-5">
							<!--begin::Info-->
							<div class="d-flex align-items-center pr-2 mb-6">
								<span class="text-muted font-weight-bold font-size-lg flex-grow-1">5 Weeks Ago</span>
								<div class="symbol symbol-50">
									<span class="symbol-label bg-light-light">
										<img src="{{ asset('media/svg/misc/003-puzzle.svg') }}" class="h-50 align-self-center" alt="" />
									</span>
								</div>
							</div>
							<!--end::Info-->
							<a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">KT.com - High Quality
							<br />Templates</a>
							<!--begin::Desc-->
							<p class="text-dark-50 font-weight-normal font-size-lg mt-6">Easy to use, incredibly flexible and secure
							<br />with in-depth documentation that outlines
							<br />everything for you</p>
							<!--end::Desc-->
						</div>
						<!--begin::Team-->
						<div class="d-flex align-items-center">
							<!--begin::Pic-->
							<a href="#" class="symbol symbol-45 symbol-light mr-3">
								<div class="symbol-label">
									<img src="{{ asset('media/svg/avatars/001-boy.svg') }}" class="h-75 align-self-end" alt="" />
								</div>
							</a>
							<!--end::Pic-->
							<!--begin::Pic-->
							<a href="#" class="symbol symbol-45 symbol-light mr-3">
								<div class="symbol-label">
									<img src="{{ asset('media/svg/avatars/028-girl-16.svg') }}" class="h-75 align-self-end" alt="" />
								</div>
							</a>
							<!--end::Pic-->
							<!--begin::Pic-->
							<a href="#" class="symbol symbol-45 symbol-light">
								<div class="symbol-label">
									<img src="{{ asset('media/svg/avatars/024-boy-9.svg') }}" class="h-75 align-self-end" alt="" />
								</div>
							</a>
							<!--end::Pic-->
						</div>
						<!--end::Team-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Mixed Widget 12-->
			</div>
		</div>
		<!--end::Row-->
		<!--begin::Row-->
		<div class="row">
			<div class="col-lg-4">
				<!--begin::Mixed Widget 16-->
				<div class="card card-custom card-stretch gutter-b">
					<!--begin::Header-->
					<div class="card-header border-0 pt-5">
						<div class="card-title font-weight-bolder">
							<div class="card-label">Weekly Sales Stats
							<div class="font-size-sm text-muted mt-2">890,344 Sales</div></div>
						</div>
						<div class="card-toolbar">
							<div class="dropdown dropdown-inline">
								<a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="ki ki-bold-more-hor"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
									<!--begin::Navigation-->
									<ul class="navi navi-hover">
										<li class="navi-header font-weight-bold py-4">
											<span class="font-size-lg">Choose Label:</span>
											<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
										</li>
										<li class="navi-separator mb-3 opacity-70"></li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-success">Customer</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-danger">Partner</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-warning">Suplier</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-primary">Member</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-text">
													<span class="label label-xl label-inline label-light-dark">Staff</span>
												</span>
											</a>
										</li>
										<li class="navi-separator mt-3 opacity-70"></li>
										<li class="navi-footer py-4">
											<a class="btn btn-clean font-weight-bold btn-sm" href="#">
											<i class="ki ki-plus icon-sm"></i>Add new</a>
										</li>
									</ul>
									<!--end::Navigation-->
								</div>
							</div>
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body d-flex flex-column">
						<!--begin::Chart-->
						<div id="kt_mixed_widget_16_chart" style="height: 200px"></div>
						<!--end::Chart-->
						<!--begin::Items-->
						<div class="mt-10 mb-5">
							<div class="row row-paddingless mb-10">
								<!--begin::Item-->
								<div class="col">
									<div class="d-flex align-items-center mr-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-45 symbol-light-info mr-4 flex-shrink-0">
											<div class="symbol-label">
												{{ Metronic::getSVG('media/svg/icons/Shopping/Cart3.svg', 'svg-icon-lg svg-icon-info') }}
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="font-size-h4 text-dark-75 font-weight-bolder">$2,034</div>
											<div class="font-size-sm text-muted font-weight-bold mt-1">Author Sales</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="col">
									<div class="d-flex align-items-center mr-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-45 symbol-light-danger mr-4 flex-shrink-0">
											<div class="symbol-label">
												{{ Metronic::getSVG('media/svg/icons/Home/Library.svg', 'svg-icon-lg svg-icon-danger') }}
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="font-size-h4 text-dark-75 font-weight-bolder">$706</div>
											<div class="font-size-sm text-muted font-weight-bold mt-1">Commission</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Item-->
							</div>
							<div class="row row-paddingless">
								<!--begin::Item-->
								<div class="col">
									<div class="d-flex align-items-center mr-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-45 symbol-light-success mr-4 flex-shrink-0">
											<div class="symbol-label">
												{{ Metronic::getSVG('media/svg/icons/Shopping/Cart3.svg', 'svg-icon-lg svg-icon-success') }}
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="font-size-h4 text-dark-75 font-weight-bolder">$49</div>
											<div class="font-size-sm text-muted font-weight-bold mt-1">Average Bid</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="col">
									<div class="d-flex align-items-center mr-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-45 symbol-light-primary mr-4 flex-shrink-0">
											<div class="symbol-label">
												{{ Metronic::getSVG('media/svg/icons/Shopping/Barcode-read.svg', 'svg-icon-lg svg-icon-primary') }}
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="font-size-h4 text-dark-75 font-weight-bolder">$5.8M</div>
											<div class="font-size-sm text-muted font-weight-bold mt-1">All Time Sales</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
								<!--end::Item-->
							</div>
						</div>
						<!--end::Items-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Mixed Widget 16-->
			</div>
			<div class="col-lg-8">
				<!--begin::Base Table Widget 2-->
				<div class="card card-custom card-stretch gutter-b">
					<!--begin::Header-->
					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label font-weight-bolder text-dark">New Arrivals</span>
							<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
						</h3>
						<div class="card-toolbar">
							<ul class="nav nav-pills nav-pills-sm nav-dark-75">
								<li class="nav-item">
									<a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_2_1">Month</a>
								</li>
								<li class="nav-item">
									<a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_2_2">Week</a>
								</li>
								<li class="nav-item">
									<a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_2_3">Day</a>
								</li>
							</ul>
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body pt-2 pb-0">
						<!--begin::Table-->
						<div class="table-responsive">
							<table class="table table-borderless table-vertical-center">
								<thead>
									<tr>
										<th class="p-0" style="width: 50px"></th>
										<th class="p-0" style="min-width: 150px"></th>
										<th class="p-0" style="min-width: 140px"></th>
										<th class="p-0" style="min-width: 120px"></th>
										<th class="p-0" style="min-width: 40px"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="pl-0 py-5">
											<div class="symbol symbol-50 symbol-light mr-2">
												<span class="symbol-label">
													<img src="{{ asset('media/svg/misc/006-plurk.svg') }}" class="h-50 align-self-center" alt="" />
												</span>
											</div>
										</td>
										<td class="pl-0">
											<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top Authors</a>
											<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
										</td>
										<td class="text-right">
											<span class="text-muted font-weight-bold">ReactJs, HTML</span>
										</td>
										<td class="text-right">
											<span class="text-muted font-weight-bold">4600 Users</span>
										</td>
										<td class="text-right pr-0">
											<a href="#" class="btn btn-icon btn-light btn-sm">
												{{ Metronic::getSVG('media/svg/icons/Navigation/Arrow-right.svg', 'svg-icon-md svg-icon-success') }}
											</a>
										</td>
									</tr>
									<tr>
										<td class="pl-0 py-5">
											<div class="symbol symbol-50 symbol-light mr-2">
												<span class="symbol-label">
													<img src="{{ asset('media/svg/misc/015-telegram.svg') }}" class="h-50 align-self-center" alt="" />
												</span>
											</div>
										</td>
										<td class="pl-0">
											<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular Authors</a>
											<span class="text-muted font-weight-bold d-block">Most Successful</span>
										</td>
										<td class="text-right">
											<span class="text-muted font-weight-bold">Python, MySQL</span>
										</td>
										<td class="text-right">
											<span class="text-muted font-weight-bold">7200 Users</span>
										</td>
										<td class="text-right pr-0">
											<a href="#" class="btn btn-icon btn-light btn-sm">
												{{ Metronic::getSVG('media/svg/icons/Navigation/Arrow-right.svg', 'svg-icon-md svg-icon-success') }}
											</a>
										</td>
									</tr>
									<tr>
										<td class="pl-0 py-5">
											<div class="symbol symbol-50 symbol-light mr-2">
												<span class="symbol-label">
													<img src="{{ asset('media/svg/misc/003-puzzle.svg') }}" class="h-50 align-self-center" alt="" />
												</span>
											</div>
										</td>
										<td class="pl-0">
											<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New Users</a>
											<span class="text-muted font-weight-bold d-block">Awesome Users</span>
										</td>
										<td class="text-right">
											<span class="text-muted font-weight-bold">Laravel, Metronic</span>
										</td>
										<td class="text-right">
											<span class="text-muted font-weight-bold">890 Users</span>
										</td>
										<td class="text-right pr-0">
											<a href="#" class="btn btn-icon btn-light btn-sm">
												{{ Metronic::getSVG('media/svg/icons/Navigation/Arrow-right.svg', 'svg-icon-md svg-icon-success') }}
											</a>
										</td>
									</tr>
									<tr>
										<td class="pl-0 py-5">
											<div class="symbol symbol-50 symbol-light mr-2">
												<span class="symbol-label">
													<img src="{{ asset('media/svg/misc/005-bebo.svg') }}" class="h-50 align-self-center" alt="" />
												</span>
											</div>
										</td>
										<td class="pl-0">
											<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active Customers</a>
											<span class="text-muted font-weight-bold d-block">Best Customers</span>
										</td>
										<td class="text-right">
											<span class="text-muted font-weight-bold">AngularJS, C#</span>
										</td>
										<td class="text-right">
											<span class="text-muted font-weight-bold">6370 Users</span>
										</td>
										<td class="text-right pr-0">
											<a href="#" class="btn btn-icon btn-light btn-sm">
												{{ Metronic::getSVG('media/svg/icons/Navigation/Arrow-right.svg', 'svg-icon-md svg-icon-success') }}
											</a>
										</td>
									</tr>
									<tr>
										<td class="pl-0 py-5">
											<div class="symbol symbol-50 symbol-light mr-2">
												<span class="symbol-label">
													<img src="{{ asset('media/svg/misc/014-kickstarter.svg') }}" class="h-50 align-self-center" alt="" />
												</span>
											</div>
										</td>
										<td class="pl-0">
											<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller Theme</a>
											<span class="text-muted font-weight-bold d-block">Amazing Templates</span>
										</td>
										<td class="text-right">
											<span class="text-muted font-weight-bold">ReactJS, Ruby</span>
										</td>
										<td class="text-right">
											<span class="text-muted font-weight-bold">354 Users</span>
										</td>
										<td class="text-right pr-0">
											<a href="#" class="btn btn-icon btn-light btn-sm">
												{{ Metronic::getSVG('media/svg/icons/Navigation/Arrow-right.svg', 'svg-icon-md svg-icon-success') }}
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--end::Table-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Base Table Widget 2-->
			</div>
		</div>
		<!--end::Row-->
		<!--end::Dashboard-->
	</div>
	<!--end::Container-->
</div>
<!--end::Entry-->
@endsection
{{-- TODO: Other Items on Admin Panel TopBar? --}}
{{--
<!--begin::Notifications-->
<div class="dropdown">
	<!--begin::Toggle-->
	<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
		<div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1 pulse pulse-white">
			{{ Metronic::getSVG('media/svg/icons/Code/Compiling.svg', 'svg-icon-xl') }}
			<span class="pulse-ring"></span>
		</div>
	</div>
	<!--end::Toggle-->
	<!--begin::Dropdown-->
	<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
		<form>
			<!--begin::Header-->
			<div class="d-flex flex-column pt-12 bg-dark-o-5 rounded-top">
				<!--begin::Title-->
				<h4 class="d-flex flex-center">
					<span class="text-dark">User Notifications</span>
					<span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23 new</span>
				</h4>
				<!--end::Title-->
				<!--begin::Tabs-->
				<ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary mt-3 px-8" role="tablist">
					<li class="nav-item">
						<a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#topbar_notifications_events">Events</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs">Logs</a>
					</li>
				</ul>
				<!--end::Tabs-->
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="tab-content">
				<!--begin::Tabpane-->
				<div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
					<!--begin::Scroll-->
					<div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
						<!--begin::Item-->
						<div class="d-flex align-items-center mb-6">
							<!--begin::Symbol-->
							<div class="symbol symbol-40 symbol-light-primary mr-5">
								<span class="symbol-label">
									{{ Metronic::getSVG('media/svg/icons/Home/Library.svg', 'svg-icon-lg svg-icon-primary') }}
								</span>
							</div>
							<!--end::Symbol-->
							<!--begin::Text-->
							<div class="d-flex flex-column font-weight-bold">
								<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Cool App</a>
								<span class="text-muted">Marketing campaign planning</span>
							</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-center mb-6">
							<!--begin::Symbol-->
							<div class="symbol symbol-40 symbol-light-warning mr-5">
								<span class="symbol-label">
									{{ Metronic::getSVG('media/svg/icons/Communication/Write.svg', 'svg-icon-lg svg-icon-warning') }}
								</span>
							</div>
							<!--end::Symbol-->
							<!--begin::Text-->
							<div class="d-flex flex-column font-weight-bold">
								<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Awesome SAAS</a>
								<span class="text-muted">Project status update meeting</span>
							</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-center mb-6">
							<!--begin::Symbol-->
							<div class="symbol symbol-40 symbol-light-success mr-5">
								<span class="symbol-label">
									{{ Metronic::getSVG('media/svg/icons/Communication/Group-chat.svg', 'svg-icon-lg svg-icon-success') }}
								</span>
							</div>
							<!--end::Symbol-->
							<!--begin::Text-->
							<div class="d-flex flex-column font-weight-bold">
								<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Claudy Sys</a>
								<span class="text-muted">Project Deployment &amp; Launch</span>
							</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-center mb-6">
							<!--begin::Symbol-->
							<div class="symbol symbol-40 symbol-light-danger mr-5">
								<span class="symbol-label">
									{{ Metronic::getSVG('media/svg/icons/General/Attachment2.svg', 'svg-icon-lg svg-icon-danger') }}
								</span>
							</div>
							<!--end::Symbol-->
							<!--begin::Text-->
							<div class="d-flex flex-column font-weight-bold">
								<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Trilo Service</a>
								<span class="text-muted">Analytics &amp; Requirement Study</span>
							</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-center mb-6">
							<!--begin::Symbol-->
							<div class="symbol symbol-40 symbol-light-info mr-5">
								<span class="symbol-label">
									{{ Metronic::getSVG('media/svg/icons/Communication/Shield-user.svg', 'svg-icon-lg svg-icon-info') }}
								</span>
							</div>
							<!--end::Symbol-->
							<!--begin::Text-->
							<div class="d-flex flex-column font-weight-bold">
								<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Bravia SAAS</a>
								<span class="text-muted">Reporting Application</span>
							</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-center mb-6">
							<!--begin::Symbol-->
							<div class="symbol symbol-40 symbol-light-danger mr-5">
								<span class="symbol-label">
									{{ Metronic::getSVG('media/svg/icons/Communication/Mail-notification.svg', 'svg-icon-lg svg-icon-danger') }}
								</span>
							</div>
							<!--end::Symbol-->
							<!--begin::Text-->
							<div class="d-flex flex-column font-weight-bold">
								<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Express Wind</a>
								<span class="text-muted">Software Analytics &amp; Design</span>
							</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-center mb-6">
							<!--begin::Symbol-->
							<div class="symbol symbol-40 symbol-light-success mr-5">
								<span class="symbol-label">
									{{ Metronic::getSVG('media/svg/icons/Design/Bucket.svg', 'svg-icon-lg svg-icon-success') }}
								</span>
							</div>
							<!--end::Symbol-->
							<!--begin::Text-->
							<div class="d-flex flex-column font-weight-bold">
								<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Bruk Fitness</a>
								<span class="text-muted">Web Design &amp; Development</span>
							</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
					</div>
					<!--end::Scroll-->
					<!--begin::Action-->
					<div class="d-flex flex-center pt-7">
						<a href="#" class="btn btn-light-primary font-weight-bold text-center">See All</a>
					</div>
					<!--end::Action-->
				</div>
				<!--end::Tabpane-->
				<!--begin::Tabpane-->
				<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
					<!--begin::Nav-->
					<div class="navi navi-hover scroll my-4" data-scroll="true" data-height="300" data-mobile-height="200">
						<!--begin::Item-->
						<a href="#" class="navi-item">
							<div class="navi-link">
								<div class="navi-icon mr-2">
									<i class="flaticon2-line-chart text-success"></i>
								</div>
								<div class="navi-text">
									<div class="font-weight-bold">New report has been received</div>
									<div class="text-muted">23 hrs ago</div>
								</div>
							</div>
						</a>
						<!--end::Item-->
						<!--begin::Item-->
						<a href="#" class="navi-item">
							<div class="navi-link">
								<div class="navi-icon mr-2">
									<i class="flaticon2-paper-plane text-danger"></i>
								</div>
								<div class="navi-text">
									<div class="font-weight-bold">Finance report has been generated</div>
									<div class="text-muted">25 hrs ago</div>
								</div>
							</div>
						</a>
						<!--end::Item-->
						<!--begin::Item-->
						<a href="#" class="navi-item">
							<div class="navi-link">
								<div class="navi-icon mr-2">
									<i class="flaticon2-user flaticon2-line- text-success"></i>
								</div>
								<div class="navi-text">
									<div class="font-weight-bold">New order has been received</div>
									<div class="text-muted">2 hrs ago</div>
								</div>
							</div>
						</a>
						<!--end::Item-->
						<!--begin::Item-->
						<a href="#" class="navi-item">
							<div class="navi-link">
								<div class="navi-icon mr-2">
									<i class="flaticon2-pin text-primary"></i>
								</div>
								<div class="navi-text">
									<div class="font-weight-bold">New customer is registered</div>
									<div class="text-muted">3 hrs ago</div>
								</div>
							</div>
						</a>
						<!--end::Item-->
						<!--begin::Item-->
						<a href="#" class="navi-item">
							<div class="navi-link">
								<div class="navi-icon mr-2">
									<i class="flaticon2-sms text-danger"></i>
								</div>
								<div class="navi-text">
									<div class="font-weight-bold">Application has been approved</div>
									<div class="text-muted">3 hrs ago</div>
								</div>
							</div>
						</a>
						<!--end::Item-->
						<!--begin::Item-->
						<a href="#" class="navi-item">
							<div class="navi-link">
								<div class="navi-icon mr-2">
									<i class="flaticon2-pie-chart-3 text-warning"></i>
								</div>
								<div class="navinavinavi-text">
									<div class="font-weight-bold">New file has been uploaded</div>
									<div class="text-muted">5 hrs ago</div>
								</div>
							</div>
						</a>
						<!--end::Item-->
						<!--begin::Item-->
						<a href="#" class="navi-item">
							<div class="navi-link">
								<div class="navi-icon mr-2">
									<i class="flaticon-pie-chart-1 text-info"></i>
								</div>
								<div class="navi-text">
									<div class="font-weight-bold">New user feedback received</div>
									<div class="text-muted">8 hrs ago</div>
								</div>
							</div>
						</a>
						<!--end::Item-->
						<!--begin::Item-->
						<a href="#" class="navi-item">
							<div class="navi-link">
								<div class="navi-icon mr-2">
									<i class="flaticon2-settings text-success"></i>
								</div>
								<div class="navi-text">
									<div class="font-weight-bold">System reboot has been successfully completed</div>
									<div class="text-muted">12 hrs ago</div>
								</div>
							</div>
						</a>
						<!--end::Item-->
						<!--begin::Item-->
						<a href="#" class="navi-item">
							<div class="navi-link">
								<div class="navi-icon mr-2">
									<i class="flaticon-safe-shield-protection text-primary"></i>
								</div>
								<div class="navi-text">
									<div class="font-weight-bold">New order has been placed</div>
									<div class="text-muted">15 hrs ago</div>
								</div>
							</div>
						</a>
						<!--end::Item-->
						<!--begin::Item-->
						<a href="#" class="navi-item">
							<div class="navi-link">
								<div class="navi-icon mr-2">
									<i class="flaticon2-notification text-primary"></i>
								</div>
								<div class="navi-text">
									<div class="font-weight-bold">Company meeting canceled</div>
									<div class="text-muted">19 hrs ago</div>
								</div>
							</div>
						</a>
						<!--end::Item-->
						<!--begin::Item-->
						<a href="#" class="navi-item">
							<div class="navi-link">
								<div class="navi-icon mr-2">
									<i class="flaticon2-fax text-success"></i>
								</div>
								<div class="navi-text">
									<div class="font-weight-bold">New report has been received</div>
									<div class="text-muted">23 hrs ago</div>
								</div>
							</div>
						</a>
						<!--end::Item-->
						<!--begin::Item-->
						<a href="#" class="navi-item">
							<div class="navi-link">
								<div class="navi-icon mr-2">
									<i class="flaticon-download-1 text-danger"></i>
								</div>
								<div class="navi-text">
									<div class="font-weight-bold">Finance report has been generated</div>
									<div class="text-muted">25 hrs ago</div>
								</div>
							</div>
						</a>
						<!--end::Item-->
						<!--begin::Item-->
						<a href="#" class="navi-item">
							<div class="navi-link">
								<div class="navi-icon mr-2">
									<i class="flaticon-security text-warning"></i>
								</div>
								<div class="navi-text">
									<div class="font-weight-bold">New customer comment recieved</div>
									<div class="text-muted">2 days ago</div>
								</div>
							</div>
						</a>
						<!--end::Item-->
						<!--begin::Item-->
						<a href="#" class="navi-item">
							<div class="navi-link">
								<div class="navi-icon mr-2">
									<i class="flaticon2-analytics-1 text-success"></i>
								</div>
								<div class="navi-text">
									<div class="font-weight-bold">New customer is registered</div>
									<div class="text-muted">3 days ago</div>
								</div>
							</div>
						</a>
						<!--end::Item-->
					</div>
					<!--end::Nav-->
				</div>
				<!--end::Tabpane-->
				<!--begin::Tabpane-->
				<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
					<!--begin::Nav-->
					<div class="d-flex flex-center text-center text-muted min-h-200px">All caught up!
					<br />No new notifications.</div>
					<!--end::Nav-->
				</div>
				<!--end::Tabpane-->
			</div>
			<!--end::Content-->
		</form>
	</div>
	<!--end::Dropdown-->
</div>
<!--end::Notifications-->
<!--begin::Quick Actions-->
<div class="dropdown">
	<!--begin::Toggle-->
	<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
		<div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1">
			{{ Metronic::getSVG('media/svg/icons/Media/Equalizer.svg', 'svg-icon-xl') }}
		</div>
	</div>
	<!--end::Toggle-->
	<!--begin::Dropdown-->
	<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
		<!--begin:Header-->
		<div class="d-flex flex-column flex-center py-10 bg-dark-o-5 rounded-top bg-light">
			<h4 class="text-dark font-weight-bold">Quick Actions</h4>
			<span class="btn btn-success btn-sm font-weight-bold font-size-sm mt-2">23 tasks pending</span>
		</div>
		<!--end:Header-->
		<!--begin:Nav-->
		<div class="row row-paddingless">
			<!--begin:Item-->
			<div class="col-6">
				<a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
					{{ Metronic::getSVG('media/svg/icons/Shopping/Euro.svg', 'svg-icon-3x svg-icon-success') }}
					<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Accounting</span>
					<span class="d-block text-dark-50 font-size-lg">eCommerce</span>
				</a>
			</div>
			<!--end:Item-->
			<!--begin:Item-->
			<div class="col-6">
				<a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-bottom">
					{{ Metronic::getSVG('media/svg/icons/Communication/Mail-attachment.svg', 'svg-icon-3x svg-icon-success') }}
					<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Administration</span>
					<span class="d-block text-dark-50 font-size-lg">Console</span>
				</a>
			</div>
			<!--end:Item-->
			<!--begin:Item-->
			<div class="col-6">
				<a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-right">
					{{ Metronic::getSVG('media/svg/icons/Shopping/Box2.svg', 'svg-icon-3x svg-icon-success') }}
					<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Projects</span>
					<span class="d-block text-dark-50 font-size-lg">Pending Tasks</span>
				</a>
			</div>
			<!--end:Item-->
			<!--begin:Item-->
			<div class="col-6">
				<a href="#" class="d-block py-10 px-5 text-center bg-hover-light">
					{{ Metronic::getSVG('media/svg/icons/Communication/Group.svg', 'svg-icon-3x svg-icon-success') }}
					<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Customers</span>
					<span class="d-block text-dark-50 font-size-lg">Latest cases</span>
				</a>
			</div>
			<!--end:Item-->
		</div>
		<!--end:Nav-->
	</div>
	<!--end::Dropdown-->
</div>
<!--end::Quick Actions-->
<!--begin::My Cart-->
<div class="dropdown">
	<!--begin::Toggle-->
	<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
		<div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1">
			{{ Metronic::getSVG('media/svg/icons/Shopping/Cart3.svg', 'svg-icon-xl') }}
		</div>
	</div>
	<!--end::Toggle-->
	<!--begin::Dropdown-->
	<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-xl dropdown-menu-anim-up">
		<form>
			<!--begin::Header-->
			<div class="d-flex align-items-center py-10 px-8 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(assets/media/misc/bg-1.jpg)">
				<span class="btn btn-md btn-icon bg-white-o-15 mr-4">
					<i class="flaticon2-shopping-cart-1 text-success"></i>
				</span>
				<h4 class="text-white m-0 flex-grow-1 mr-3">My Cart</h4>
				<button type="button" class="btn btn-success btn-sm">2 Items</button>
			</div>
			<!--end::Header-->
			<!--begin::Scroll-->
			<div class="scroll scroll-push" data-scroll="true" data-height="250" data-mobile-height="200">
				<!--begin::Item-->
				<div class="d-flex align-items-center justify-content-between p-8">
					<div class="d-flex flex-column mr-2">
						<a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">iBlender</a>
						<span class="text-muted">Best kichen gadget in 2020</span>
						<div class="d-flex align-items-center mt-2">
							<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 350</span>
							<span class="text-muted mr-1">for</span>
							<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">5</span>
							<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
								<i class="ki ki-minus icon-xs"></i>
							</a>
							<a href="#" class="btn btn-xs btn-light-success btn-icon">
								<i class="ki ki-plus icon-xs"></i>
							</a>
						</div>
					</div>
					<a href="#" class="symbol symbol-70 flex-shrink-0">
						<img src="assets/media/stock-600x400/img-1.jpg" title="" alt="" />
					</a>
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-solid"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex align-items-center justify-content-between p-8">
					<div class="d-flex flex-column mr-2">
						<a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">SmartCleaner</a>
						<span class="text-muted">Smart tool for cooking</span>
						<div class="d-flex align-items-center mt-2">
							<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
							<span class="text-muted mr-1">for</span>
							<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">4</span>
							<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
								<i class="ki ki-minus icon-xs"></i>
							</a>
							<a href="#" class="btn btn-xs btn-light-success btn-icon">
								<i class="ki ki-plus icon-xs"></i>
							</a>
						</div>
					</div>
					<a href="#" class="symbol symbol-70 flex-shrink-0">
						<img src="assets/media/stock-600x400/img-2.jpg" title="" alt="" />
					</a>
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-solid"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex align-items-center justify-content-between p-8">
					<div class="d-flex flex-column mr-2">
						<a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">CameraMax</a>
						<span class="text-muted">Professional camera for edge cutting shots</span>
						<div class="d-flex align-items-center mt-2">
							<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 150</span>
							<span class="text-muted mr-1">for</span>
							<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">3</span>
							<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
								<i class="ki ki-minus icon-xs"></i>
							</a>
							<a href="#" class="btn btn-xs btn-light-success btn-icon">
								<i class="ki ki-plus icon-xs"></i>
							</a>
						</div>
					</div>
					<a href="#" class="symbol symbol-70 flex-shrink-0">
						<img src="assets/media/stock-600x400/img-3.jpg" title="" alt="" />
					</a>
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-solid"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex align-items-center justify-content-between p-8">
					<div class="d-flex flex-column mr-2">
						<a href="#" class="font-weight-bold text-dark text-hover-primary">4DPrinter</a>
						<span class="text-muted">Manufactoring unique objects</span>
						<div class="d-flex align-items-center mt-2">
							<span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 1450</span>
							<span class="text-muted mr-1">for</span>
							<span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
							<a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
								<i class="ki ki-minus icon-xs"></i>
							</a>
							<a href="#" class="btn btn-xs btn-light-success btn-icon">
								<i class="ki ki-plus icon-xs"></i>
							</a>
						</div>
					</div>
					<a href="#" class="symbol symbol-70 flex-shrink-0">
						<img src="assets/media/stock-600x400/img-4.jpg" title="" alt="" />
					</a>
				</div>
				<!--end::Item-->
			</div>
			<!--end::Scroll-->
			<!--begin::Summary-->
			<div class="p-8">
				<div class="d-flex align-items-center justify-content-between mb-4">
					<span class="font-weight-bold text-muted font-size-sm mr-2">Total</span>
					<span class="font-weight-bolder text-dark-50 text-right">$1840.00</span>
				</div>
				<div class="d-flex align-items-center justify-content-between mb-7">
					<span class="font-weight-bold text-muted font-size-sm mr-2">Sub total</span>
					<span class="font-weight-bolder text-primary text-right">$5640.00</span>
				</div>
				<div class="text-right">
					<button type="button" class="btn btn-primary text-weight-bold">Place Order</button>
				</div>
			</div>
			<!--end::Summary-->
		</form>
	</div>
	<!--end::Dropdown-->
</div>
<!--end::My Cart-->
<!--begin::Quick panel-->
<div class="topbar-item">
	<div class="btn btn-icon btn-hover-transparent-white btn-lg mr-1" id="kt_quick_panel_toggle">
		{{ Metronic::getSVG('media/svg/icons/Layout/Layout-4-blocks.svg', 'svg-icon-xl') }}
	</div>
</div>
<!--end::Quick panel-->
<!--begin::Chat-->
<div class="topbar-item mr-1">
	<div class="btn btn-icon btn-hover-transparent-white btn-clean btn-lg" data-toggle="modal" data-target="#kt_chat_modal">
		{{ Metronic::getSVG('media/svg/icons/Communication/Group-chat.svg', 'svg-icon-xl') }}
	</div>
</div>
<!--end::Chat-->
--}}
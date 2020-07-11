<div class="header-bottom">
	<div class="container">
		<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
			<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
				<ul class="menu-nav">
					@foreach(config('menu') as $menu)
					<li class="menu-item menu-item-submenu @if(!isset($menu['submenu-fixed']) || $menu['submenu-fixed']===false) menu-item-rel @endif @if($menu['title']==='asdasd') menu-item-open menu-item-here @endif" data-menu-toggle="hover" aria-haspopup="true">
						<a href="@if(!empty($menu['submenu'])||empty($menu['url']))javascript:;@elseif(Route::has($menu['url'])){{route($menu['url'])}}@else{{url($menu['url'])}}@endif" class="menu-link menu-toggle">
							<span class="menu-text">{{$menu['title']}}</span>
							<span class="menu-desc">{{$menu['desc']}}</span>
							@if(!empty($menu['submenu']))
							<i class="menu-arrow"></i>
							@endif
						</a>
						@if(!empty($menu['submenu']))
						<div class="menu-submenu @if(!isset($menu['submenu-fixed']) || $menu['submenu-fixed']===false) menu-submenu-classic @else menu-submenu-fixed @endif @if(isset($menu['submenu-align'])) menu-submenu-{{$menu['submenu-align']}} @else menu-submenu-left @endif">
							@if(!isset($menu['submenu-fixed']) || $menu['submenu-fixed']===false)
							<ul class="menu-subnav">
								@foreach($menu['submenu'] as $submenu)
								<li class="menu-item @if(!empty($submenu['submenu'])) menu-item-submenu @endif" @if(!empty($submenu['submenu'])) data-menu-toggle="hover" @endif aria-haspopup="true">
									<a href="@if(!empty($submenu['submenu'])||empty($submenu['url']))javascript:;@elseif(Route::has($submenu['url'])){{route($submenu['url'])}}@else{{url($submenu['url'])}}@endif" class="menu-link @if(!empty($submenu['submenu'])) menu-toggle @endif">
										@if(!empty($submenu['icon']))
											{{ Metronic::getSVG($submenu['icon'], 'menu-icon') }}
										@endif
										<span class="menu-text">{{$submenu['title']}}</span>
										@if(!empty($submenu['desc']))
											<span class="menu-desc">{{$submenu['desc']}}</span>
										@endif
									</a>
									@if(!empty($submenu['submenu']))
									<div class="menu-submenu menu-submenu-classic menu-submenu-right">
										<ul class="menu-subnav">
											@foreach($submenu['submenu'] as $subsubmenu)
											<li class="menu-item" aria-haspopup="true">
												<a href="@if(empty($subsubmenu['url']))javascript:;@elseif(Route::has($subsubmenu['url'])){{route($subsubmenu['url'])}}@else{{url($subsubmenu['url'])}}@endif" class="menu-link">
													@if(isset($subsubmenu['bullet']) && $subsubmenu['bullet'])
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													@elseif(!empty($subsubmenu['icon']))
														{{ Metronic::getSVG($submenu['icon'], 'menu-icon') }}
													@endif
													<span class="menu-text">{{$subsubmenu['title']}}</span>
												</a>
											</li>
											@endforeach
										</ul>
									</div>
									@endif
								</li>
								@endforeach
							</ul>
							{{-- TODO: Menu Fixed Desktop on Hover --}}
							{{--
							@else
							<div class="menu-subnav">
								<ul class="menu-content">
									@foreach($menu['submenu'] as $submenu)
									<li class="menu-item">
										<h3 class="menu-heading menu-toggle">
											<span class="menu-text">{{$submenu['title']}}</span>
											<i class="menu-arrow"></i>
										</h3>
										<ul class="menu-inner">
									@endforeach
								</ul>
							</div>
							--}}
							@endif
						</div>
						@endif
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
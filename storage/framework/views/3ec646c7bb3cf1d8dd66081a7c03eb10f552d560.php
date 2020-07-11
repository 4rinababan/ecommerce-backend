<div class="header-bottom">
	<div class="container">
		<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
			<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
				<ul class="menu-nav">
					<?php $__currentLoopData = config('menu'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="menu-item menu-item-submenu <?php if(!isset($menu['submenu-fixed']) || $menu['submenu-fixed']===false): ?> menu-item-rel <?php endif; ?> <?php if($menu['title']==='asdasd'): ?> menu-item-open menu-item-here <?php endif; ?>" data-menu-toggle="hover" aria-haspopup="true">
						<a href="<?php if(!empty($menu['submenu'])||empty($menu['url'])): ?>javascript:;<?php elseif(Route::has($menu['url'])): ?><?php echo e(route($menu['url'])); ?><?php else: ?><?php echo e(url($menu['url'])); ?><?php endif; ?>" class="menu-link menu-toggle">
							<span class="menu-text"><?php echo e($menu['title']); ?></span>
							<span class="menu-desc"><?php echo e($menu['desc']); ?></span>
							<?php if(!empty($menu['submenu'])): ?>
							<i class="menu-arrow"></i>
							<?php endif; ?>
						</a>
						<?php if(!empty($menu['submenu'])): ?>
						<div class="menu-submenu <?php if(!isset($menu['submenu-fixed']) || $menu['submenu-fixed']===false): ?> menu-submenu-classic <?php else: ?> menu-submenu-fixed <?php endif; ?> <?php if(isset($menu['submenu-align'])): ?> menu-submenu-<?php echo e($menu['submenu-align']); ?> <?php else: ?> menu-submenu-left <?php endif; ?>">
							<?php if(!isset($menu['submenu-fixed']) || $menu['submenu-fixed']===false): ?>
							<ul class="menu-subnav">
								<?php $__currentLoopData = $menu['submenu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li class="menu-item <?php if(!empty($submenu['submenu'])): ?> menu-item-submenu <?php endif; ?>" <?php if(!empty($submenu['submenu'])): ?> data-menu-toggle="hover" <?php endif; ?> aria-haspopup="true">
									<a href="<?php if(!empty($submenu['submenu'])||empty($submenu['url'])): ?>javascript:;<?php elseif(Route::has($submenu['url'])): ?><?php echo e(route($submenu['url'])); ?><?php else: ?><?php echo e(url($submenu['url'])); ?><?php endif; ?>" class="menu-link <?php if(!empty($submenu['submenu'])): ?> menu-toggle <?php endif; ?>">
										<?php if(!empty($submenu['icon'])): ?>
											<?php echo e(Metronic::getSVG($submenu['icon'], 'menu-icon')); ?>

										<?php endif; ?>
										<span class="menu-text"><?php echo e($submenu['title']); ?></span>
										<?php if(!empty($submenu['desc'])): ?>
											<span class="menu-desc"><?php echo e($submenu['desc']); ?></span>
										<?php endif; ?>
									</a>
									<?php if(!empty($submenu['submenu'])): ?>
									<div class="menu-submenu menu-submenu-classic menu-submenu-right">
										<ul class="menu-subnav">
											<?php $__currentLoopData = $submenu['submenu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subsubmenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<li class="menu-item" aria-haspopup="true">
												<a href="<?php if(empty($subsubmenu['url'])): ?>javascript:;<?php elseif(Route::has($subsubmenu['url'])): ?><?php echo e(route($subsubmenu['url'])); ?><?php else: ?><?php echo e(url($subsubmenu['url'])); ?><?php endif; ?>" class="menu-link">
													<?php if(isset($subsubmenu['bullet']) && $subsubmenu['bullet']): ?>
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<?php elseif(!empty($subsubmenu['icon'])): ?>
														<?php echo e(Metronic::getSVG($submenu['icon'], 'menu-icon')); ?>

													<?php endif; ?>
													<span class="menu-text"><?php echo e($subsubmenu['title']); ?></span>
												</a>
											</li>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</ul>
									</div>
									<?php endif; ?>
								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
							
							
							<?php endif; ?>
						</div>
						<?php endif; ?>
					</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
		</div>
	</div>
</div><?php /**PATH C:\xampp\htdocs\ecommerce-backend\resources\views/layouts/partials/_menu-bottom.blade.php ENDPATH**/ ?>
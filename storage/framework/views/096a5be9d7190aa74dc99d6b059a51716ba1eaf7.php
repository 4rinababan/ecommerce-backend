<?php if($__env->yieldContent('theme-layout', config('layout.self.layout')) == 'blank'): ?>
	<div class="d-flex flex-column flex-root">
		<?php echo $__env->yieldContent('content'); ?>
	</div>
<?php else: ?>
	<?php echo $__env->make('layouts.base._header-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<div class="d-flex flex-column flex-root">
		<div class="d-flex flex-row flex-column-fluid page">
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<div id="kt_header" class="header flex-column header-fixed">
					<?php echo $__env->make('layouts.partials._menu-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('layouts.partials._menu-bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</div>
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<?php echo $__env->yieldContent('content'); ?>
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
	<?php echo $__env->make('layouts.partials._quick-user-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
	<div id="kt_scrolltop" class="scrolltop">
		<?php echo e(Metronic::getSVG('media/svg/icons/Navigation/Up-2.svg')); ?>

	</div>
	
	
<?php endif; ?><?php /**PATH C:\xampp\htdocs\ecommerce-backend\resources\views/layouts/base/_layout.blade.php ENDPATH**/ ?>

<div id="kt_header_mobile" class="header-mobile <?php echo e(Metronic::printClasses('header-mobile', false)); ?>" <?php echo e(Metronic::printAttrs('header-mobile')); ?>>
	
	<a href="<?php echo e(url('/')); ?>">
		<img alt="<?php echo e(config('app.name')); ?>" src="<?php echo e(asset('pasaraya-logo-horizontal2.png')); ?>" class="max-h-30px" />
	</a>
	
	<div class="d-flex align-items-center">
		<?php if(config('layout.header.menu.self.display')): ?>
			<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle"><span></span></button>
		<?php endif; ?>
		<button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
			<?php echo e(Metronic::getSVG('media/svg/icons/General/User.svg', 'svg-icon-xl')); ?>

		</button>
	</div>
	<!--end::Toolbar-->
</div><?php /**PATH C:\xampp\htdocs\ecommerce-backend\resources\views/layouts/base/_header-mobile.blade.php ENDPATH**/ ?>
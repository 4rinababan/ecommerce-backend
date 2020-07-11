<!--begin::Top-->
<div class="header-top">
	<!--begin::Container-->
	<div class="container">
		<div class="d-none d-lg-flex align-items-center mr-3">
			<a href="<?php echo e(url('/')); ?>" class="mr-20">
				<img alt="<?php echo e(config('app.name')); ?>" src="<?php echo e(asset('pasaraya-logo-horizontal2.png')); ?>" class="max-h-35px" />
			</a>
			<?php echo $__env->make('layouts.partials._quick-search-desktop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
		<!--begin::Topbar-->
		<div class="topbar">
			<?php echo $__env->make('layouts.partials._quick-search-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php echo $__env->make('layouts.partials._topbar-other-items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<div class="topbar-item">
				<div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
					<div class="d-flex flex-column text-right pr-3">
						<span class="text-white opacity-50 font-weight-bold font-size-sm d-none d-md-inline"><?php echo e(Auth::user()->name); ?></span>
						<span class="text-white font-weight-bolder font-size-sm d-none d-md-inline">Administrator</span>
						
					</div>
					
					<span class="symbol symbol-35">
						<span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30"><?php echo e(substr(Auth::user()->name,0,1)); ?></span>
					</span>
				</div>
			</div>
		</div>
		<!--end::Topbar-->
	</div>
	<!--end::Container-->
</div>
<!--end::Top--><?php /**PATH C:\xampp\htdocs\ecommerce-backend\resources\views/layouts/partials/_menu-top.blade.php ENDPATH**/ ?>
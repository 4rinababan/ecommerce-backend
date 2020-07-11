<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
	<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
		<h3 class="font-weight-bold m-0">
			User Profile
			
		</h3>
		<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
			<i class="ki ki-close icon-xs text-muted"></i>
		</a>
	</div>
	<!--begin::Content-->
	<div class="offcanvas-content pr-5 mr-n5">
		<div class="d-flex align-items-center mt-5">
			<div class="symbol symbol-100 mr-5">
				<div class="symbol-label" style="background-image:url('<?php echo e(asset('media/users/300_21.jpg')); ?>')"></div>
				
				
			</div>
			<div class="d-flex flex-column">
				<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary"><?php echo e(Auth::user()->name); ?></a>
				
				<div class="text-muted mt-1">Administrator</div>
				
				<div class="navi mt-2">
					<a href="#" class="navi-item">
						<span class="navi-link p-0 pb-2">
							<span class="navi-icon mr-1">
								<?php echo e(Metronic::getSVG('media/svg/icons/Communication/Mail-notification.svg', 'svg-icon-lg svg-icon-primary')); ?>

							</span>
							<span class="navi-text text-muted text-hover-primary"><?php echo e(Auth::user()->email); ?></span>
						</span>
					</a>
					<a class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5"
						href="<?php echo e(route('logout')); ?>"
						onclick="event.preventDefault();document.getElementById('logout-form').submit();">
						<?php echo e(__('Logout')); ?>

					</a>
					<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
						<?php echo csrf_field(); ?>
					</form>
				</div>
			</div>
		</div>
		
	</div>
	<!--end::Content-->
</div>
<!-- end::User Panel--><?php /**PATH C:\xampp\htdocs\ecommerce-backend\resources\views/layouts/partials/_quick-user-panel.blade.php ENDPATH**/ ?>
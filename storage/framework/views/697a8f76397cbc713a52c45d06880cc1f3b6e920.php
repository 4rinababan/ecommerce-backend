

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<?php if(session('success')): ?>
		<div class="alert alert-custom alert-success alert-shadow gutter-b col-lg-12 col-xl-12" role="alert">
			<div class="alert-icon">
				<?php echo e(Metronic::getSVG('media/svg/icons/Navigation/Double-check.svg', 'svg-icon-white svg-icon-xl')); ?>

			</div>
			<div class="alert-text"><?php echo e(session('success')); ?></div>
		</div>
		<?php endif; ?>
		<div class="card card-custom gutter-b col-md-12">
			<div class="card-header flex-wrap border-0 pt-6 pb-0">
				<div class="card-title">
					<h3 class="card-label">Admin
				</div>
			</div>
			<div class="card-body">
				<?php echo e($dataTable->table([], true)); ?>

			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
	
	<?php echo e($dataTable->scripts()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.metronic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce-backend\resources\views/admin/admins/index.blade.php ENDPATH**/ ?>
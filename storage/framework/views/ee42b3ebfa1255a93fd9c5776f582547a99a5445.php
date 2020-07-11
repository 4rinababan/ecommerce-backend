

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="card card-custom gutter-b col-md-12">
			<div class="card-header flex-wrap border-0 pt-6 pb-0">
				<div class="card-title">
					<h3 class="card-label">Update Admin</h3>
				</div>
			</div>
			<form method="POST" enctype="multipart/form-data" action="">
				<?php echo csrf_field(); ?>
				<?php echo method_field('PUT'); ?>
				
				<div class="card-body">
					<div class="form-group">
						<label>First Name<?php echo e($data['id']); ?></label>
						<input type="text" class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="first_name" placeholder="First Name" value="<?php echo e(old('first_name') ?? (isset($data) ? $data['first_name'] : '')); ?>" autocomplete="off" />
						<?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<div class="invalid-feedback"><?php echo e($message); ?></div>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
					<div class="form-group">
						<label>Last Name *</label>
						<input type="text" class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="last_name" placeholder="Last Name" value="<?php echo e(old('last_name') ?? (isset($data) ? $data['last_name'] : '')); ?>" autocomplete="off" />
						<?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<div class="invalid-feedback"><?php echo e($message); ?></div>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
					<div class="form-group">
						<label>Phone *</label>
						<input type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" placeholder="Phone Number" value="<?php echo e(old('phone') ?? (isset($data) ? $data['phone'] : '')); ?>" autocomplete="off" />
						<?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<div class="invalid-feedback"><?php echo e($message); ?></div>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary mr-2">Submit</button>
					<button type="button" class="btn btn-secondary" id="btn_cancel">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
	
	<script type="text/javascript">
		$(document).ready(function(){
			let logo = new KTImageInput('logo');
			logo.on('cancel', function(imageInput) {
				if(imageInput.hidden.value === null || imageInput.hidden.value === "" || imageInput.hidden.value == "1") {
					setTimeout(function(){
						$(imageInput.remove).trigger("click");
					}, 0);
				}
			});

			logo.on('change', function(imageInput) {
				$(imageInput.element).children(".image-input-wrapper").css("background-color", "white");
			});

			logo.on('remove', function(imageInput) {
				$(imageInput.element).children(".image-input-wrapper").css("background-color", "");
			});
			$("#btn_cancel").on('click', function(){
				window.history.back();
			});
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.metronic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce-backend\resources\views/admin/admins/edit.blade.php ENDPATH**/ ?>
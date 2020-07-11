

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="card card-custom gutter-b col-md-12">
			<div class="card-header flex-wrap border-0 pt-6 pb-0">
				<div class="card-title">
					<h3 class="card-label">Update Brand</h3>
				</div>
			</div>
			<form method="POST" enctype="multipart/form-data" action="<?php echo e(route('brands.update', $data['id'])); ?>">
				<?php echo csrf_field(); ?>
				<?php echo method_field('PUT'); ?>
				<div class="card-body">
					<div class="form-group">
						<label>Name *</label>
						<input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" placeholder="Brand Name" value="<?php echo e(old('name') ?? (isset($data) ? $data['name'] : '')); ?>" autocomplete="off" />
						<?php $__errorArgs = ['name'];
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
						<label>Slug</label>
						<input type="text" class="form-control <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="slug" placeholder="Slug" value="<?php echo e(old('slug') ?? (isset($data) ? $data['slug'] : '')); ?>" autocomplete="off" />
						<span class="form-text text-muted">Leave this empty, or remove this to generate a new slug.</span>
						<?php $__errorArgs = ['slug'];
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
						<label>Logo *</label>
						<div class="col-lg-9 col-xl-6 <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
							<div class="image-input image-input-empty" id="logo" style="background-image: url(<?php echo e(isset($data) ? $data['logo'] : asset('media/defaults/category.png')); ?>); background-size: contain; background-position: center;">
								<div class="image-input-wrapper" style="background-size: contain; background-position: center;"></div>
								<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change Logo">
									<i class="fa fa-pen icon-sm text-muted"></i>
									<input type="file" name="logo" accept=".png, .jpg, .jpeg" />
									<input type="hidden" name="logo_remove" />
								</label>
								<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Reset Logo">
									<i class="ki ki-bold-close icon-xs text-muted"></i>
								</span>
								<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove Logo">
									<i class="ki ki-bold-close icon-xs text-muted"></i>
								</span>
							</div>
						</div>
						<?php $__errorArgs = ['logo'];
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
						<label for="description">Description</label>
						<textarea class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="description" rows="3"></textarea>
						<?php $__errorArgs = ['description'];
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
<?php echo $__env->make('layouts.metronic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce-backend\resources\views/admin/brands/edit.blade.php ENDPATH**/ ?>
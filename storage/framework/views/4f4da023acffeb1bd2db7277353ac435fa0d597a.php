

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="card card-custom gutter-b col-md-6">
			<div class="card-header">
				<h3 class="card-title">Email Configs</h3>
			</div>
			<form method="POST">
				<?php echo csrf_field(); ?>
				<?php if(session('status.smtp')): ?>
				<div class="card card-custom bg-primary mb-5">
					<div class="card-body text-white"><?php echo e(session('status.smtp')); ?></div>
				</div>
				<?php endif; ?>
				<div class="card-body">
					<div class="form-group mb-8">
						<div class="alert alert-custom alert-default" role="alert">
							<div class="alert-icon">
								<?php echo e(Metronic::getSVG('media/svg/icons/Communication/Outgoing-mail.svg', 'svg-icon-primary svg-icon-xl')); ?>

							</div>
							<div class="alert-text">Settings for SMTP to send Email to Users on Registration, etc.</div>
						</div>
					</div>
					<?php if(empty($smtp)): ?>
					<div class="form-group mb-8">
						<div class="alert alert-custom alert-default bg-info" role="alert">
							<div class="alert-icon">
								<?php echo e(Metronic::getSVG('media/svg/icons/Code/Warning-2.svg', 'svg-icon-warning svg-icon-xl')); ?>

							</div>
							<div class="alert-text">No previous data found!</div>
						</div>
					</div>
					<?php endif; ?>
					<div class="form-group">
						<label>SMTP Host</label>
						<input type="text" class="form-control <?php $__errorArgs = ['smtp.host'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="smtp_host" placeholder="SMTP Host" value="<?php echo e($smtp['host']); ?>" />
						<span class="form-text text-muted">SMTP Host name provided by your email providers</span>
					</div>
					<div class="form-group">
						<label>SMTP Port</label>
						<input type="text" class="form-control <?php $__errorArgs = ['smtp.port'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="smtp_port" placeholder="SMTP Port" value="<?php echo e($smtp['port']); ?>" />
						<span class="form-text text-muted">SMTP Port number provided by your email providers</span>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control <?php $__errorArgs = ['smtp.username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="smtp_username" placeholder="Username" value="<?php echo e($smtp['username']); ?>" />
						<span class="form-text text-muted">SMTP Username provided by your email providers</span>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control <?php $__errorArgs = ['smtp.password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="smtp_password" placeholder="Password" value="<?php echo e($smtp['password']); ?>" />
						<span class="form-text text-muted">SMTP Password provided by your email providers.</span>
						<span class="form-text text-warning">Please do note that this value would be saved as a <strong>plain text</strong> in the database.</span>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary mr-2">Submit</button>
					<button type="reset" class="btn btn-secondary">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.metronic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce-backend\resources\views/admin/setting/index.blade.php ENDPATH**/ ?>
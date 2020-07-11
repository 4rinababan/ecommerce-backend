
<?php $__env->startSection('theme-layout', 'blank'); ?>

<?php $__env->startSection('content'); ?>
<div class="login login-4 login-signup-on d-flex flex-row-fluid" id="kt_login">
	<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('<?php echo e(asset('media/bg/bg-3.jpg')); ?>');">
		<div class="login-form text-center p-7 position-relative overflow-hidden">
			<div class="d-flex flex-center mb-15">
				<a href="<?php echo e(url('/')); ?>">
					<img src="<?php echo e(asset('pasaraya-logo.png')); ?>" class="max-h-75px" alt="" />
				</a>
			</div>
			<div class="login-signup">
				<div class="mb-20">
					<h3><?php echo e(__('Register')); ?></h3>
					<div class="text-muted font-weight-bold">Enter your details to create your account</div>
				</div>
				<form class="form" id="kt_login_signup_form" method="POST" action="<?php echo e(route('register')); ?>">
					<?php echo csrf_field(); ?>
					<div class="form-group mb-5">
						<input id="name" name="name" class="form-control h-auto form-control-solid py-4 px-8 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(__('Name')); ?>" required />
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
					<div class="form-group mb-5">
						<input id="signup-email" name="email" class="form-control h-auto form-control-solid py-4 px-8 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(__('E-Mail Address')); ?>" required />
						<?php $__errorArgs = ['email'];
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
					<div class="form-group mb-5">
						<input id="signup-password" name="password" class="form-control h-auto form-control-solid py-4 px-8 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" placeholder="<?php echo e(__('Password')); ?>" required />
						<?php $__errorArgs = ['password'];
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
					<div class="form-group mb-5">
						<input id="password-confirm" name="password_confirmation" class="form-control h-auto form-control-solid py-4 px-8 <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" placeholder="<?php echo e(__('Confirm Password')); ?>" required />
						<?php $__errorArgs = ['password_confirmation'];
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
					<div class="form-group mb-5 text-left">
						<div class="checkbox-inline">
							<label class="checkbox m-0">
							<input type="checkbox" name="agree" />
							<span></span>I Agree to the
							<a href="#" class="font-weight-bold ml-1">terms and conditions</a>.</label>
						</div>
						<div class="form-text text-muted text-center"></div>
					</div>
					<div class="form-group d-flex flex-wrap flex-center mt-10">
						<button id="kt_login_signup_submit" type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2"><?php echo e(__('Register')); ?></button>
						<button id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2"><?php echo e(__('Cancel')); ?></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
	<link href="<?php echo e(asset('css/pages/login/classic/login-4.css?v=7.0.5')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
	
	<script src="<?php echo e(asset('js/pages/custom/login/login-general.js?v=7.0.5')); ?>" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			KTLogin.init("signup");
			$("#kt_login_signup_cancel").on('click', function(){history.back()});
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.metronic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce-backend\resources\views/auth/register.blade.php ENDPATH**/ ?>
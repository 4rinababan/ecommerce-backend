
<?php $__env->startSection('theme-layout', 'blank'); ?>

<?php $__env->startSection('content'); ?>
<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
	<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('<?php echo e(asset('media/bg/bg-3.jpg')); ?>');">
		<div class="login-form text-center p-7 position-relative overflow-hidden">
			<div class="d-flex flex-center mb-15">
				<a href="<?php echo e(url('/')); ?>">
					<img src="<?php echo e(asset('pasaraya-logo.png')); ?>" class="max-h-75px" alt="" />
				</a>
			</div>
			<div class="login-signin">
				<div class="mb-20">
					<h3><?php echo e(__('Login')); ?></h3>
					<div class="text-muted font-weight-bold">Enter your details to login to your account:</div>
				</div>
				<form class="form" id="kt_login_signin_form" method="POST" action="<?php echo e(route('login')); ?>">
					<?php echo csrf_field(); ?>
					<?php if(session('status')): ?>
						<div class="card card-custom bg-primary mb-5">
							<div class="card-body text-white"><?php echo e(session('status')); ?></div>
						</div>
					<?php endif; ?>
					<div class="form-group mb-5">
						<input id="signin-email" name="email" type="email" class="form-control h-auto form-control-solid py-4 px-8 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('E-Mail Address')); ?>" value="<?php echo e(old('email')); ?>" required autofocus/>
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
						<input id="signin-password" name="password" type="password" class="form-control h-auto form-control-solid py-4 px-8 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('Password')); ?>" required />
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
					<div class="form-group d-flex flex-wrap justify-content-between align-items-center">
						<div class="checkbox-inline">
							<label class="checkbox m-0 text-muted">
							<input type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>/>
							<span></span>Remember me</label>
						</div>
						<?php if(Route::has('password.request')): ?>
							<a id="kt_login_forgot" class="text-muted text-hover-primary" href="<?php echo e(route('password.request')); ?>">
								<?php echo e(__('Forgot Your Password?')); ?>

							</a>
						<?php endif; ?>
					</div>
					<button id="kt_login_signin_submit" type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4"><?php echo e(__('Login')); ?></button>
				</form>
				<?php if(Route::has('register')): ?>
				<div class="mt-10">
					<span class="opacity-70 mr-4">Don't have an account yet?</span>
					<a href="<?php echo e(route('register')); ?>" id="kt_login_signup" class="text-muted text-hover-primary font-weight-bold"><?php echo e(__('Register!')); ?></a>
				</div>
				<?php endif; ?>
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
			KTLogin.init();
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.metronic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce-backend\resources\views/auth/login.blade.php ENDPATH**/ ?>
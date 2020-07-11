<div>
	<a class="d-inline" href="<?php echo e(route('brands.edit', $id)); ?>"><input type="button" value="Edit" class="btn btn-warning" /></a>
	<form method="POST" action="<?php echo e(route('brands.destroy', $id)); ?>" class="d-inline">
		<?php echo csrf_field(); ?>
		<?php echo method_field('DELETE'); ?>
		<input type="submit" value="Delete" class="btn btn-danger" />
	</form>
</div><?php /**PATH C:\xampp\htdocs\ecommerce-backend\resources\views/admin/brands/action.blade.php ENDPATH**/ ?>
<?php $__env->startSection('controller'); ?>
<div class="border-bottom">
	<?php if($user->id == 1 || $data->id == $user->id): ?>
	<a href="<?php echo e(url('admin/adminstrator/edit/'.$data->id)); ?>" class="btn btn-outline-danger mb-3">Edit profile</a>
	<?php endif; ?>
</div>
<div class="col-md-7 offset-2">
	<fieldset class="form-control mt-3 bg-light">
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Avata</b>
			</div>
			<div class="col-md-8">
				<img src="<?php echo e(asset(url('upload/user/'.$data->user_img))); ?>" width="100" height="100">
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Fullname</b>
			</div>
			<div class="col-md-8">
				<?php echo e($data->user_name); ?>

			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Sex</b>
			</div>
			<div class="col-md-8">
				<?php echo e($data->user_sex); ?>

			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Address</b>
			</div>
			<div class="col-md-8">
				<?php echo e($data->user_address); ?>

			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Birthday</b>
			</div>
			<div class="col-md-8">
				<?php echo e($data->user_birthday); ?>

			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Email</b>
			</div>
			<div class="col-md-8">
				<?php echo e($data->user_email); ?>

			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>PhoneNumber</b>
			</div>
			<div class="col-md-8">
				<?php echo e($data->user_phone); ?>

			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Username</b>
			</div>
			<div class="col-md-8">
				<?php echo e($data->user_username); ?>

			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Admin Level</b>
			</div>
			<div class="col-md-8">
				<?php echo e($data->user_level); ?>

			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Description</b>
			</div>
			<div class="col-md-8">
				<i><?php echo $data->user_description ?></i>
			</div>
		</div>
	</fieldset>
</div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
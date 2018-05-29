<?php $__env->startSection('controller'); ?>
<div class="border-bottom">
	<?php if($user->user_level=='1'): ?>
	<a href="<?php echo e(url('admin/adminstrator/add')); ?>" class="btn btn-outline-danger mb-3">Add a new Admin</a>
	<?php endif; ?>
</div>
<div class="col-md-12 mt-3 text-center">
	
	<div class="row thead mb-3">
		<div class="col-md-1">
			<b>#</b>
		</div>
		<div class="col-md-1">
			<b>Image</b>
		</div>
		<div class="col-md-2">
			<b>Fullname</b>
		</div>
		<div class="col-md-3">
			<b>Email</b>
		</div>
		<div class="col-md-1">
			<b>Phone</b>
		</div>
		<div class="col-md-1">
			<b>Online</b>
		</div>
		<div class="col-md-3">
			<b>Action</b>
		</div>
	</div>
	<?php $stt=0?>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php $stt++?>
	<div class="row mb-3 text-center">
		<div class="col-md-1">
			<?php echo e($stt); ?>

		</div>
		<div class="col-md-1">
			<img src="<?php echo e(url('upload/user/'.$rows->user_img)); ?>" width="50px" class="img-thumbnail">
		</div>
		<div class="col-md-2">
			<?php echo e($rows->user_name); ?>

		</div>
		<div class="col-md-3">
			<?php echo e($rows->user_email); ?>

		</div>
		<div class="col-md-1">
			<?php echo e($rows->user_phone); ?>

		</div>
		<div class="col-md-1">
			<?php if($rows->user_use==1): ?>
				<div class="badge badge-primary">On</div>
			<?php else: ?>
				<div class="badge badge-danger">Off</div>
			<?php endif; ?>
		</div>
		<div class="col-md-3">
		<?php if($user->user_level=='1'): ?>
			<a href="<?php echo e(url('admin/adminstrator/profile/'.$rows->id)); ?>" class="btn btn-success">Profile</a>
			<a href="<?php echo e(url('admin/adminstrator/edit/'.$rows->id)); ?>" class="btn btn-primary">Edit</a>
			<a href="<?php echo e(url('admin/adminstrator/delete/'.$rows->id)); ?>" class="btn btn-danger delete">Delete</a>
		<?php else: ?>
			<a href="<?php echo e(url('admin/adminstrator/profile/'.$rows->id)); ?>" class="btn btn-success">Profile</a>
		<?php endif; ?>
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--
	<table id="table_admin" class="display table table-hover">
	    <thead>
	        <tr>
	            <th>#</th>
	            <th>Image</th>
	            <th>Fullname</th>
	            <th>Level</th>
	            <th>Action</th>
	        </tr>
	    </thead>
	</table>
</div>
-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
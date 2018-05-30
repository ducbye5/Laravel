<?php $__env->startSection('controller'); ?>
<div class="border-bottom">
	<a href="<?php echo e(url('admin/news/add')); ?>" class="btn btn-outline-danger mb-3">Add a news</a>
</div>
<div class="col-md-12 mt-3">
	<div class="row text-center thead mb-3">
		<div class="col-md-1">
			<b>#</b>
		</div>
		<div class="col-md-2">
			<b>Image</b>
		</div>
		<div class="col-md-2">
			<b>Title</b>
		</div>
		<div class="col-md-3">
			<b>Content</b>
		</div>
		<div class="col-md-2">
			<b>Writer</b>
		</div>
		<div class="col-md-2">
			<b>Action</b>
		</div>
	</div>
	<?php $stt=0?>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php $stt++;?>
	<div class="row mb-3">
		<div class="col-md-1 text-center">
			<?php echo e($stt); ?>

		</div>
		<div class="col-md-2 text-center">
			<img src="<?php echo e(asset('upload/news/'.$rows->news_img)); ?>" width="100px" class="img-thumbnail">
		</div>
		<div class="col-md-2 text-left text-truncate">
			
			<a href="<?php echo e(url('admin/news/edit/'.$rows->id)); ?>" title="<?php echo e($rows->news_title); ?>"><b><?php echo e($rows->news_title); ?></b></a>
			
		</div>
		<div class="col-md-3 text-left text-truncate">
			<?php echo $rows->news_content; ?>

		</div>
		<div class="col-md-2 text-center">
			<?php echo e($rows->user_name); ?>

		</div>
		<div class="col-md-2 text-center">
		
			<a href="<?php echo e(url('admin/news/edit/'.$rows->id)); ?>" class="btn btn-primary">Edit</a>
			<a href="<?php echo e(url('admin/news/delete/'.$rows->id)); ?>" class="btn btn-danger delete" onbeforeunload=''>Delete</a>
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
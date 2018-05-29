<?php $__env->startSection('controller'); ?>
<div class="container">
	<div class="mt-5 col-md-10 offset-1">
		<form method="post" action="" class="form-control bg-light" enctype="multipart/form-data">
			<?php echo e(csrf_field()); ?>

			<div class="form-group mt-3">
				<label for="img" class="form-control-label">File Input</label>
				<input type="file" name="image_news" class="form-control-file" id="img">
			</div>
			<div class="form-group mt-3">
				<label for="title" class="form-control-label">Title</label>
				<input type="text" name="title_news" class="form-control" id="title" value="<?php echo e(isset($data->news_title)?$data->news_title:''); ?>" placeholder="<?php echo e(isset($data->news_title)?$data->news_title:'Title for news'); ?>">
			</div>
			<div class="form-group mt-3">
				<label for="content" class="form-control-label">Content</label>
				<textarea name="content_news" class="form-control" id="content" rows="5">
					<?php echo e(isset($data->news_content)?$data->news_content:''); ?>

				</textarea>
				<script type="text/javascript">
					CKEDITOR.replace('content_news');
				</script>
			</div>
			<div class="mt-3 form-group text-center">
				<input type="submit" name="" class="btn btn-primary" value="Submit">
				<input type="reset" name="" class="btn btn-success" value="Reset">
				<a href="<?php echo e(url('admin/news')); ?>" class="btn btn-danger">Cancel</a>
			</div>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
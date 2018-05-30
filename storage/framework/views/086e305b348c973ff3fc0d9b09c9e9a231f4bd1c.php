<?php $__env->startSection('controller'); ?>

	<div class="row">
		<div class="col-md-10  mt-3 pl-4">
			<a href="<?php echo e(url('admin/toeic/add')); ?>" class="btn btn-success">Thêm dữ liệu câu hỏi</a>
			<a href="<?php echo e(url('admin/toeic/download')); ?>" class="btn btn-info">Xuất dữ liệu hiện tại(Excel)</a>
		</div>
		<div class="col-md-12  pl-3 pr-3 mt-5">
			<table id="datatable" class="table table-striped table-bordered cell-border text-center">
		        <thead>
		            <tr>
		            	<th>ID</th>
		                <th>Question</th>
		                <th>(A)</th>
		                <th>(B)</th>
		                <th>(C)</th>
		                <th>(D)</th>
		                <th>Result</th>
		                <th>Part</th>
		                <th>Edit</th>
		                <th>Delete</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php $stt =0?>
		        	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		        	<?php $stt++?>
		            <tr>
		                <td><?php echo e($stt); ?></td>
		                <td><?php echo e($rows->question); ?></td>
		                <td><?php echo e($rows->A); ?></td>
		                <td><?php echo e($rows->B); ?></td>
		                <td><?php echo e($rows->C); ?></td>
		                <td><?php echo e($rows->D); ?></td>
		                <td><?php echo e($rows->result); ?></td>
		                <td><?php echo e($rows->name); ?></td>
		                <td><a href="" class="btn btn-primary">Edit</a></td>
		                <td><a href="" class="btn btn-danger">Delete</a></td>
		            </tr>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        </tbody>
		    </table>
		</div>
	</div>
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
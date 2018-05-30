<?php $__env->startSection('controller'); ?>
<div class="container">
	<div class="row">
		<ul class="nav nav-tabs">
		  <li class="nav-item">
		    <a class="nav-link active" data-toggle="tab" href="#part1">Part 1</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#part2">Part 2</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#part3">Part 3</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#part4">Part 4</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#part5">Part 5</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#part6">Part 6</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#part7">Part 7</a>
		  </li>
		</ul>
	</div>
	<div class="tab-content">
	  <div class="tab-pane  active" id="part1">
	  	<div class="row mt-5">
			<div class="col-md-4 ">
				<form method="post" action="" class="form-control bg-light" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="form-group mt-3">
						<label for="img" class="form-control-label">File Excel</label>
						<input type="file" name="excel_question" class="form-control-file" id="excel">
					</div>
					<div class="form-group mt-3">
						<label for="img_question" class="form-control-label">Mutil Image Question</label>
						<input type="file" name="img_question[]" class="form-control-file" id="img_question" multiple>
					</div>
					<div class="mt-3 form-group text-center">
						<input type="submit" name="" class="btn btn-primary" value="Submit">
						<input type="reset" name="" class="btn btn-success" value="Reset">
						<a href="<?php echo e(url('admin/toeic')); ?>" class="btn btn-danger">Cancel</a>
					</div>
				</form>
				<fieldset class="form-control bg-light mt-5">
					<legend class="form-control bg-danger text-center cl-white">Chú ý</legend>
					<div>
						<i>Part 4 thuộc phần nghe(hình ảnh)  </i>
					</div>
				</fieldset>
			</div>
			<div class="col-md-7 offset-1">
				<form method="post" action="" class="form-control bg-light" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="form-group mt-3">
						<label for="radio" class="form-control-label">Name file radio</label>
						<select class="form-control" id="radio">
							<option value="radio 1">Radio 1</option>
							<option value="radio 2">Radio 2</option>
							<option value="radio 3">Radio 3</option>
							<option value="radio 4">Radio 4</option>
						</select>
					</div>
					<div class="form-group mt-3">
						<label for="img_question" class="form-control-label">Image Question</label>
						<input type="file" name="img_question" class="form-control-file" id="img_question">
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A" class="form-control"  placeholder="Answer (A)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B" class="form-control"  placeholder="Answer (B)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C" class="form-control"  placeholder="Answer (C)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(D)</button>
							<input type="text" name="D" class="form-control"  placeholder="Answer (D)" required="">
						</div>
					</div>
					<div class="mt-3 form-group text-center">
						<input type="submit"  class="btn btn-primary" value="Submit">
						<input type="reset"  class="btn btn-success" value="Reset">
						<a href="<?php echo e(url('admin/toeic')); ?>" class="btn btn-danger">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	  </div>
	  <div class="tab-pane  fade" id="part2">
	  	<div class="row mt-5">
			<div class="col-md-4 ">
				<form method="post" action="" class="form-control bg-light" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="form-group mt-3">
						<label for="img" class="form-control-label">File Excel</label>
						<input type="file" name="excel_question" class="form-control-file" id="excel">
					</div>
					<div class="mt-3 form-group text-center">
						<input type="submit" name="" class="btn btn-primary" value="Submit">
						<input type="reset" name="" class="btn btn-success" value="Reset">
						<a href="<?php echo e(url('admin/toeic')); ?>" class="btn btn-danger">Cancel</a>
					</div>
				</form>
				<fieldset class="form-control bg-light mt-5">
					<legend class="form-control bg-danger text-center cl-white">Chú ý</legend>
					<div>
						<i>Part 2 thuộc phần nghe (hỏi đáp) . Mỗi câu hỏi chỉ có 3 đáp án</i>
					</div>
				</fieldset>
			</div>
			<div class="col-md-7 offset-1">
				<form method="post" action="" class="form-control bg-light" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="form-group mt-3">
						<label for="radio" class="form-control-label">Name file radio</label>
						<select class="form-control" id="radio">
							<option value="radio 1">Radio 1</option>
							<option value="radio 2">Radio 2</option>
							<option value="radio 3">Radio 3</option>
							<option value="radio 4">Radio 4</option>
						</select>
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A" class="form-control"  placeholder="Answer (A)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B" class="form-control"  placeholder="Answer (B)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C" class="form-control"  placeholder="Answer (C)" required="">
						</div>
					</div>
					<div class="mt-3 form-group text-center">
						<input type="submit"  class="btn btn-primary" value="Submit">
						<input type="reset"  class="btn btn-success" value="Reset">
						<a href="<?php echo e(url('admin/toeic')); ?>" class="btn btn-danger">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	  </div>
	  <div class="tab-pane  fade" id="part3">
	  	<div class="row mt-5">
			<div class="col-md-4 ">
				<form method="post" action="" class="form-control bg-light" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="form-group mt-3">
						<label for="img" class="form-control-label">File Excel</label>
						<input type="file" name="excel_question" class="form-control-file" id="excel">
					</div>
					<div class="mt-3 form-group text-center">
						<input type="submit" name="" class="btn btn-primary" value="Submit">
						<input type="reset" name="" class="btn btn-success" value="Reset">
						<a href="<?php echo e(url('admin/toeic')); ?>" class="btn btn-danger">Cancel</a>
					</div>
				</form>
				<fieldset class="form-control bg-light mt-5">
					<legend class="form-control bg-danger text-center cl-white">Chú ý</legend>
					<div>
						<i>Part 3 thuộc phần nghe . Gồm nhiều đoạn hội thoại mỗi đoạn hội thoại sẽ có 3 câu hỏi</i>
					</div>
				</fieldset>
			</div>
			<div class="col-md-7 offset-1">
				<form method="post" action="" class="form-control bg-light" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="form-group mt-3">
						<label for="radio" class="form-control-label">Name file radio</label>
						<select class="form-control" id="radio">
							<option value="radio 1">Radio 1</option>
							<option value="radio 2">Radio 2</option>
							<option value="radio 3">Radio 3</option>
							<option value="radio 4">Radio 4</option>
						</select>
					</div>
					<div class="form-group mt-3">
						<label for="conversation" class="form-control-label">Conversation number</label>
						<select class="form-control" id="conversation">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Question 1 </label>
						<input type="text" name="question1" class="form-control"  placeholder="Question" required="">
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A1" class="form-control"  placeholder="Answer (A)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B1" class="form-control"  placeholder="Answer (B)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C1" class="form-control"  placeholder="Answer (C)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(D)</button>
							<input type="text" name="D1" class="form-control"  placeholder="Answer (D)" required="">
						</div>
					</div>


					<div class="form-group mt-3">
						<label class="form-control-label">Question 2 </label>
						<input type="text" name="question2" class="form-control"  placeholder="Question" required="">
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A2" class="form-control"  placeholder="Answer (A)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B2" class="form-control"  placeholder="Answer (B)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C2" class="form-control"  placeholder="Answer (C)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(D)</button>
							<input type="text" name="D2" class="form-control"  placeholder="Answer (D)" required="">
						</div>
					</div>


					<div class="form-group mt-3">
						<label class="form-control-label">Question 3 </label>
						<input type="text" name="question3" class="form-control"  placeholder="Question" required="">
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A3" class="form-control"  placeholder="Answer (A)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B3" class="form-control"  placeholder="Answer (B)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C3" class="form-control"  placeholder="Answer (C)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(D)</button>
							<input type="text" name="D3" class="form-control"  placeholder="Answer (D)" required="">
						</div>
					</div>

					<div class="mt-3 form-group text-center">
						<input type="submit"  class="btn btn-primary" value="Submit">
						<input type="reset"  class="btn btn-success" value="Reset">
						<a href="<?php echo e(url('admin/toeic')); ?>" class="btn btn-danger">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	  </div>
	  <div class="tab-pane  fade" id="part4">
	  	<div class="row mt-5">
			<div class="col-md-4 ">
				<form method="post" action="" class="form-control bg-light" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="form-group mt-3">
						<label for="img" class="form-control-label">File Excel</label>
						<input type="file" name="excel_question" class="form-control-file" id="excel">
					</div>
					<div class="mt-3 form-group text-center">
						<input type="submit" name="" class="btn btn-primary" value="Submit">
						<input type="reset" name="" class="btn btn-success" value="Reset">
						<a href="<?php echo e(url('admin/toeic')); ?>" class="btn btn-danger">Cancel</a>
					</div>
				</form>
				<fieldset class="form-control bg-light mt-5">
					<legend class="form-control bg-danger text-center cl-white">Chú ý</legend>
					<div>
						<i>Part 4 thuộc phần nghe . Gồm nhiều đoạn hội thoại mỗi đoạn hội thoại sẽ có 3 câu hỏi</i>
					</div>
				</fieldset>
			</div>
			<div class="col-md-7 offset-1">
				<form method="post" action="" class="form-control bg-light" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="form-group mt-3">
						<label for="radio" class="form-control-label">Name file radio</label>
						<select class="form-control" id="radio">
							<option value="radio 1">Radio 1</option>
							<option value="radio 2">Radio 2</option>
							<option value="radio 3">Radio 3</option>
							<option value="radio 4">Radio 4</option>
						</select>
					</div>
					<div class="form-group mt-3">
						<label for="conversation" class="form-control-label">Conversation number</label>
						<select class="form-control" id="conversation">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Question 1 </label>
						<input type="text" name="question1" class="form-control"  placeholder="Question" required="">
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A1" class="form-control"  placeholder="Answer (A)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B1" class="form-control"  placeholder="Answer (B)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C1" class="form-control"  placeholder="Answer (C)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(D)</button>
							<input type="text" name="D1" class="form-control"  placeholder="Answer (D)" required="">
						</div>
					</div>


					<div class="form-group mt-3">
						<label class="form-control-label">Question 2 </label>
						<input type="text" name="question2" class="form-control"  placeholder="Question" required="">
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A2" class="form-control"  placeholder="Answer (A)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B2" class="form-control"  placeholder="Answer (B)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C2" class="form-control"  placeholder="Answer (C)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(D)</button>
							<input type="text" name="D2" class="form-control"  placeholder="Answer (D)" required="">
						</div>
					</div>


					<div class="form-group mt-3">
						<label class="form-control-label">Question 3 </label>
						<input type="text" name="question3" class="form-control"  placeholder="Question" required="">
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A3" class="form-control"  placeholder="Answer (A)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B3" class="form-control"  placeholder="Answer (B)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C3" class="form-control"  placeholder="Answer (C)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="btn btn-dark" disabled="">(D)</button>
							<input type="text" name="D3" class="form-control"  placeholder="Answer (D)" required="">
						</div>
					</div>

					<div class="mt-3 form-group text-center">
						<input type="submit"  class="btn btn-primary" value="Submit">
						<input type="reset"  class="btn btn-success" value="Reset">
						<a href="<?php echo e(url('admin/toeic')); ?>" class="btn btn-danger">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	  </div>
	  <div class="tab-pane  fade" id="part5">
	  	<div class="row mt-5">
			<div class="col-md-4 ">
				<form method="post" action="" class="form-control bg-light" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="form-group mt-3">
						<label class="form-control-label">File Excel</label>
						<input type="file" name="excel_question" class="form-control-file">
					</div>
					<div class="mt-3 form-group text-center">
						<input type="submit" name="" class="btn btn-primary" value="Submit">
						<input type="reset" name="" class="btn btn-success" value="Reset">
						<a href="<?php echo e(url('admin/toeic')); ?>" class="btn btn-danger">Cancel</a>
					</div>
				</form>
				<fieldset class="form-control bg-light mt-5">
					<legend class="form-control bg-danger text-center cl-white">Chú ý</legend>
					<div>
						<i>Part 5 các câu hỏi liên quan đến từ vựng</i>
					</div>
				</fieldset>
			</div>
			<div class="col-md-7 offset-1">
				<form method="post" action="" class="form-control bg-light" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="form-group mt-3">
						<label class="form-control-label">Question</label>
						<input type="text" name="question" class="form-control"  placeholder="Question" required="">
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A" class="form-control"  placeholder="Answer (A)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B" class="form-control"  placeholder="Answer (B)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C" class="form-control"  placeholder="Answer (C)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(D)</button>
							<input type="text" name="D" class="form-control"  placeholder="Answer (D)" required="">
						</div>
					</div>
					<div class="mt-3 form-group text-center">
						<input type="submit"  class="btn btn-primary" value="Submit">
						<input type="reset"  class="btn btn-success" value="Reset">
						<a href="<?php echo e(url('admin/toeic')); ?>" class="btn btn-danger">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	  </div>
	  <div class="tab-pane  fade" id="part6">
	  	<div class="row mt-5">
			<div class="col-md-4 ">
				<form method="post" action="" class="form-control bg-light" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="form-group mt-3">
						<label class="form-control-label">File Excel</label>
						<input type="file" name="excel_question" class="form-control-file">
					</div>
					<div class="mt-3 form-group text-center">
						<input type="submit" name="" class="btn btn-primary" value="Submit">
						<input type="reset" name="" class="btn btn-success" value="Reset">
						<a href="<?php echo e(url('admin/toeic')); ?>" class="btn btn-danger">Cancel</a>
					</div>
				</form>
				<fieldset class="form-control bg-light mt-5">
					<legend class="form-control bg-danger text-center cl-white">Chú ý</legend>
					<div>
						<i>Part 6 gồm 1 đoạn văn và từ 3 câu hỏi</i>
					</div>
				</fieldset>
			</div>
			<div class="col-md-7 offset-1">
				<form method="post" action="" class="form-control bg-light" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="form-group mt-3">
						<label class="form-control-label">Paragraph</label>
						<textarea type="text" name="paragraph" class="form-control" required="" rows="10"></textarea>
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Question (1)</label>
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A1" class="form-control"  placeholder="Answer (A)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B1" class="form-control"  placeholder="Answer (B)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C1" class="form-control"  placeholder="Answer (C)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(D)</button>
							<input type="text" name="D1" class="form-control"  placeholder="Answer (D)" required="">
						</div>
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Question (2)</label>
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A2" class="form-control"  placeholder="Answer (A)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B2" class="form-control"  placeholder="Answer (B)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C2" class="form-control"  placeholder="Answer (C)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(D)</button>
							<input type="text" name="D2" class="form-control"  placeholder="Answer (D)" required="">
						</div>
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Question (3)</label>
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A3" class="form-control"  placeholder="Answer (A)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B3" class="form-control"  placeholder="Answer (B)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C3" class="form-control"  placeholder="Answer (C)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(D)</button>
							<input type="text" name="D3" class="form-control"  placeholder="Answer (D)" required="">
						</div>
					</div>
					<div class="mt-3 form-group text-center">
						<input type="submit"  class="btn btn-primary" value="Submit">
						<input type="reset"  class="btn btn-success" value="Reset">
						<a href="<?php echo e(url('admin/toeic')); ?>" class="btn btn-danger">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	  </div>
	  <div class="tab-pane  fade" id="part7">
	  	<div class="row mt-5">
			<div class="col-md-4 ">
				<form method="post" action="" class="form-control bg-light" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="form-group mt-3">
						<label class="form-control-label">File Excel</label>
						<input type="file" name="excel_question" class="form-control-file">
					</div>
					<div class="mt-3 form-group text-center">
						<input type="submit" name="" class="btn btn-primary" value="Submit">
						<input type="reset" name="" class="btn btn-success" value="Reset">
						<a href="<?php echo e(url('admin/toeic')); ?>" class="btn btn-danger">Cancel</a>
					</div>
				</form>
				<fieldset class="form-control bg-light mt-5">
					<legend class="form-control bg-danger text-center cl-white">Chú ý</legend>
					<div>
						<i>Part 7 gồm 1 đoạn văn và từ 2 đến 5 câu hỏi</i>
					</div>
				</fieldset>
			</div>
			<div class="col-md-7 offset-1">
				<form method="post" action="" class="form-control bg-light" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="form-group mt-3">
						<label class="form-control-label">Paragraph</label>
						<textarea type="text" name="paragraph" class="form-control" required="" rows="10"></textarea>
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Question (1)</label>
						<input type="text" name="question1" class="form-control"  placeholder="Answer (A)" required="">
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A1" class="form-control"  placeholder="Answer (A)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B1" class="form-control"  placeholder="Answer (B)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C1" class="form-control"  placeholder="Answer (C)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(D)</button>
							<input type="text" name="D1" class="form-control"  placeholder="Answer (D)" required="">
						</div>
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Question (2)</label>
						<input type="text" name="question2" class="form-control"  placeholder="Answer (A)" required="">
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A2" class="form-control"  placeholder="Answer (A)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B2" class="form-control"  placeholder="Answer (B)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C2" class="form-control"  placeholder="Answer (C)" required="">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(D)</button>
							<input type="text" name="D2" class="form-control"  placeholder="Answer (D)" required="">
						</div>
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Question (3)</label>
						<input type="text" name="question3" class="form-control"  placeholder="Answer (A)">
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A3" class="form-control"  placeholder="Answer (A)">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B3" class="form-control"  placeholder="Answer (B)">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C3" class="form-control"  placeholder="Answer (C)">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(D)</button>
							<input type="text" name="D3" class="form-control"  placeholder="Answer (D)">
						</div>
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Question (4)</label>
						<input type="text" name="question4" class="form-control"  placeholder="Answer (A)">
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A4" class="form-control"  placeholder="Answer (A)">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B4" class="form-control"  placeholder="Answer (B)">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C4" class="form-control"  placeholder="Answer (C)">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(D)</button>
							<input type="text" name="D4" class="form-control"  placeholder="Answer (D)">
						</div>
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Question (5)</label>
						<input type="text" name="question5" class="form-control"  placeholder="Answer (A)">
					</div>
					<div class="form-group mt-3">
						<label class="form-control-label">Answer</label>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(A)</button>
							<input type="text" name="A5" class="form-control"  placeholder="Answer (A)">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(B)</button>
							<input type="text" name="B5" class="form-control"  placeholder="Answer (B)">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(C)</button>
							<input type="text" name="C5" class="form-control"  placeholder="Answer (C)">
						</div>
						<div class="input-group mb-2">
							<button  class="bage btn btn-dark" disabled="">(D)</button>
							<input type="text" name="D5" class="form-control"  placeholder="Answer (D)">
						</div>
					</div>
					<div class="mt-3 form-group text-center">
						<input type="submit"  class="btn btn-primary" value="Submit">
						<input type="reset"  class="btn btn-success" value="Reset">
						<a href="<?php echo e(url('admin/toeic')); ?>" class="btn btn-danger">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	  </div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
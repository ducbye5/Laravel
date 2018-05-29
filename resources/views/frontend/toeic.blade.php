@extends('frontend.layout')
@section('controller')
			<div class="col-md-2  pr-0 section-left mt-5">
				<fieldset class="form-control">
					<legend class="form-control text-center">Hướng dẫn</legend>
					<div>
						<ul>
							<li>
								<a href="">Hướng dẫn thi thử</a>
							</li>
							<li>
								<a href="">Mẹo khi làm bài thi Toeic</a>
							</li>
						</ul>
					</div>
				</fieldset>
			</div>
			<div class="col-md-7 section-center mt-5">
				<div class="row">
					<div class="col-md-5">
						<a href="" class="btn btn-outline-primary col-md-10 mb-3"><i>Đề thi full <span class="badge badge-danger">New</span></i></a>
						<a href="" class="btn btn-outline-primary col-md-10 mb-3"><i>Đề thi full LISTENING <span class="badge badge-danger">New</span></i></a>
						<a href="" class="btn btn-outline-primary col-md-10 mb-3"><i>Đề thi full READING <span class="badge badge-danger">New</span></i></a>
					</div>
					<div class="col-md-7">
						<fieldset class="form-control mb-5">
							<legend class="form-control text-center bg-danger cl-white">Top điểm thi</legend>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van A
								</div>
								<div class="col-md-3">
									<i>880</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van B
								</div>
								<div class="col-md-3">
									<i>800</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van C
								</div>
								<div class="col-md-3">
									<i>780</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i>600</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i>600</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i>600</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i>600</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i>600</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i>600</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i>600</i>
								</div>
							</div>
						</fieldset>
					</div>
				</div>
				<div class="row mb-5">
					<fieldset class="form-control col-md-10 offset-1">
						<legend class="form-control text-center bg-success cl-white">Thi thử Toeic full PART 1</legend>
						<div class="row">
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 1</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 2</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 3</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 4</i></a>
							</div>	
						</div>
					</fieldset>
				</div>
				<div class="row mb-5">
					<fieldset class="form-control col-md-10 offset-1">
						<legend class="form-control text-center bg-success cl-white">Thi thử Toeic full PART 2</legend>
						<div class="row">
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 1</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 2</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 3</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 4</i></a>
							</div>	
						</div>
					</fieldset>
				</div>
				<div class="row mb-5">
					<fieldset class="form-control col-md-10 offset-1">
						<legend class="form-control text-center bg-success cl-white">Thi thử Toeic full PART 3</legend>
						<div class="row">
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 1</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 2</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 3</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 4</i></a>
							</div>	
						</div>
					</fieldset>
				</div>
				<div class="row mb-5">
					<fieldset class="form-control col-md-10 offset-1">
						<legend class="form-control text-center bg-success cl-white">Thi thử Toeic full PART 4</legend>
						<div class="row">
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 1</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 2</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 3</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 4</i></a>
							</div>	
						</div>
					</fieldset>
				</div>
				<?php $id=1;$part = 5?>
				<div class="row mb-5">
					<fieldset class="form-control col-md-10 offset-1">
						<legend class="form-control text-center bg-success cl-white">Thi thử Toeic full PART 5</legend>
						<div class="row">
							<div class="col-md-3">
								<a href="{{ url('index/toeic/test/'.$part.'/'.$id) }}" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 1</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 2</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 3</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 4</i></a>
							</div>	
						</div>
					</fieldset>
				</div>
				<div class="row mb-5">
					<fieldset class="form-control col-md-10 offset-1">
						<legend class="form-control text-center bg-success cl-white">Thi thử Toeic full PART 6</legend>
						<div class="row">
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 1</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 2</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 3</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 4</i></a>
							</div>	
						</div>
					</fieldset>
				</div>
				<div class="row mb-5">
					<fieldset class="form-control col-md-10 offset-1">
						<legend class="form-control text-center bg-success cl-white">Thi thử Toeic full PART 7</legend>
						<div class="row">
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 1</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 2</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 3</i></a>
							</div>
							<div class="col-md-3">
								<a href="thitoeic.html" class="btn btn-outline-success col-md-10 mb-3"><i>Đề thi 4</i></a>
							</div>	
						</div>
					</fieldset>
				</div>
			</div>
			<div class="col-md-3  mt-5">
						<fieldset class="form-control">
							<legend class="form-control text-center">Tự luyện</legend>
							<a href="" class="col-md-12 btn btn-primary mb-3">Từ vựng</a>
							<a href="" class="col-md-12 btn btn-primary mb-3">Luyện nghe</a>
							<a href="" class="col-md-12 btn btn-primary mb-3">Ngữ pháp</a>
						</fieldset>
						<fieldset class="form-control mt-3">
							<legend class="form-control text-center">Hỏi đáp nhanh</legend>
							<div style="height: 400px;overflow: auto">
								<div class="row">
								<div class="col-md-12">
									<div class="cl-blue">
										Nguyen Van A
									</div>
									<div class="pl-3">
										<i>Các bạn điểm cao quá</i>
									</div>
									<div class="cl-DFD8D8 f-size-3">
										2018-04-17 12:48:25
									</div>
									<div>
										<label class="badge badge-default btn">Trả lời</label>
									</div>
									<hr class="mt-0 mb-0">
								</div>
								<div class="col-md-10 offset-2">
									<div class="cl-green">
										Admin <label class="badge badge-primary">Quản trị viên</label>
									</div>
									<div class="pl-3">
										<i class="cl-red">Bạn cứ cố gắng luyện tập để tăng điểm luyện lên nhé</i>
									</div>
									<div class="cl-DFD8D8 f-size-3">
										2018-04-17 12:48:25
									</div>
								</div>
								</div>
								<div class="row">
								<div class="col-md-12">
									<div class="cl-blue">
										Nguyen Van A
									</div>
									<div class="pl-3">
										<i>Các bạn điểm cao quá</i>
									</div>
									<div class="cl-DFD8D8 f-size-3">
										2018-04-17 12:48:25
									</div>
									<div>
										<label class="badge badge-default btn">Trả lời</label>
									</div>
									<hr class="mt-0 mb-0">
								</div>
								<div class="col-md-10 offset-2">
									<div class="cl-green">
										Admin <label class="badge badge-primary">Quản trị viên</label>
									</div>
									<div class="pl-3">
										<i class="cl-red">Bạn cứ cố gắng luyện tập để tăng điểm luyện lên nhé</i>
									</div>
									<div class="cl-DFD8D8 f-size-3">
										2018-04-17 12:48:25
									</div>
								</div>
								</div>
								<div class="row">
								<div class="col-md-12">
									<div class="cl-blue">
										Nguyen Van A
									</div>
									<div class="pl-3">
										<i>Các bạn điểm cao quá</i>
									</div>
									<div class="cl-DFD8D8 f-size-3">
										2018-04-17 12:48:25
									</div>
									<div>
										<label class="badge badge-default btn">Trả lời</label>
									</div>
									<hr class="mt-0 mb-0">
								</div>
								<div class="col-md-10 offset-2">
									<div class="cl-green">
										Admin <label class="badge badge-primary">Quản trị viên</label>
									</div>
									<div class="pl-3">
										<i class="cl-red">Bạn cứ cố gắng luyện tập để tăng điểm luyện lên nhé</i>
									</div>
									<div class="cl-DFD8D8 f-size-3">
										2018-04-17 12:48:25
									</div>
								</div>
								</div>
							</div>
							<div class="mt-3">
								<form method="post" action="" class="mb-3">
									<input type="text" name="chatbox" class="form-control mb-3">
									<input type="submit" class="btn btn-primary" value="Gửi">
									<input type="reset" class="btn btn-danger" value="Xóa">
								</form>
							</div>
						</fieldset>
						<fieldset class="form-control mt-3">
							<legend class="form-control text-center">Thành viên VIP mới nhất</legend>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i class="badge badge-danger">VIP</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i class="badge badge-danger">VIP</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i class="badge badge-danger">VIP</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i class="badge badge-danger">VIP</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i class="badge badge-danger">VIP</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i class="badge badge-danger">VIP</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i class="badge badge-danger">VIP</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i class="badge badge-danger">VIP</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i class="badge badge-danger">VIP</i>
								</div>
							</div>
							<div class="row mt-3 text-center">
								<div class="col-md-3">
									<img src="{{ asset(url('upload/user/man.png')) }}" class="rounded-circle" width="30">
								</div>
								<div class="col-md-6">
									Nguyen Van D
								</div>
								<div class="col-md-3">
									<i class="badge badge-danger">VIP</i>
								</div>
							</div>
						</fieldset>
			</div>
@endsection
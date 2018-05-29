<!DOCTYPE html>
<html>
<head>
	<title>Toeic</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('icon/pe-icon-7-stroke.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
</head>
<body>
<div class="container-fluid">
	<header>
		<div class="header">
			<div class="container">
				<div class="col-md-12">
					<div class="row mt-4 mb-5">
						<div class="col-md-2 header-left">
							<a href="{{ url('index') }}">
								<h3>MODUS</h3>
							</a>
						</div>
						<div class="col-md-8 header-center" id="header-menu">
							<ul>
								<li>
									<a>Khóa học</a>
									<div class="header-menu">
										<ul>
											<li>
												<a href="{{ url('index/toeic') }}">Toeic</a>
											</li>
											<li>
												<a href="">Ielts</a>
											</li>
											<li>
												<a href="">Lập Trình</a>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<a href="{{ url('index/toeic') }}">Toeic</a>
								</li>
								<li>
									<a href="">Tài liệu</a>
								</li>
								<li>
									<a href="">Bài Viết</a>
								</li>
								<li>
									<a href="">Liên Hệ</a>
								</li>
							</ul>
						</div>
						<div class="col-md-2  text-right">
								<div class="dropdown mt-2">
									<div  class="dropdown-toggle" data-toggle="dropdown">
										<img src="{{ asset(url('upload/user/'.$customer->customer_img)) }}" class="rounded-circle" width="30">
										<span>{{ $customer->customer_name }}</span>
									</div>
									<div class="dropdown-menu">
										<a href="" class="dropdown-item">
											<span class="pe-7s-pe-7s-config"></span>
											<span>Thiết lập tài khoản</span>
										</a>
										<a href="" class="dropdown-item">
											<span class="pe-7s-pe-7s-news-paper"></span>
											<span>Gửi Góp Ý</span>
										</a>
										<a href="{{ url('index/logout') }}" class="dropdown-item">
											<span class="pe-7s-pe-7s-back"></span>
											<span>Thoát</span>
										</a>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="section row">
			@yield('controller')
		</div>
	</section>
	<footer>
		<div class="footer row">
			a
		</div>
	</footer>
	<div id="stop" class="scrollTop">
	    <span><a href="" class="pe-7s-angle-up-circle"></a></span>
	</div>
</div>
</body>
</html>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
	<script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/index.js') }}"></script>
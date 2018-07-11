<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('icon/pe-icon-7-stroke.css') }}">
	<script src="{{ asset('assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</head>
<body>
<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-6">
			<form method="post" action="{{ url('login') }}" class="form-control bg-light">
				{{ csrf_field() }}
				<div class="input-group mt-3">
					<div class="input-group-prepend">
						<i class="input-group-text" id="icon_user">
							<span class="pe-7s-user"></span>
						</i>
					</div>
					<input type="email" name="email" class="form-control" aria-describedby="icon_user" placeholder="Email" required>
				</div>
				<div class="input-group mt-3">
					<div class="input-group-prepend">
						<i class="input-group-text" id="icon_password">
							<span class="pe-7s-news-paper"></span>
						</i>
					</div>
					<input type="password" name="password" class="form-control" aria-describedby="icon_password" placeholder="Password" required>
				</div>
				<div class="mt-3 mb-3">
					<input type="submit" class="btn btn-primary" value="Login">
					<input type="reset" class="btn btn-danger" value="Cancel">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
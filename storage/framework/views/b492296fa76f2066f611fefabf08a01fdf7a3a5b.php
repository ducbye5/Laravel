<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('icon/pe-icon-7-stroke.css')); ?>">
	<script src="<?php echo e(asset('bootstrap/js/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('bootstrap/js/popper.min.js')); ?>"></script>
	<script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
</head>
<body>
<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-6">
			<form method="post" action="" class="form-control bg-light">
				<?php echo e(csrf_field()); ?>

				<div class="input-group mt-3">
					<div class="input-group-prepend">
						<i class="input-group-text" id="icon_user">
							<span class="pe-7s-user"></span>
						</i>
					</div>
					<input type="text" name="username" class="form-control" aria-describedby="icon_user" placeholder="username" required>
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
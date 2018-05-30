@extends('backend.layout')
@section('controller')
<div class="border-bottom">
	@if($user->id == 1 || $data->id == $user->id)
	<a href="{{ url('admin/adminstrator/edit/'.$data->id) }}" class="btn btn-outline-danger mb-3">Edit profile</a>
	@endif
</div>
<div class="col-md-7 offset-2">
	<fieldset class="form-control mt-3 bg-light">
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Avata</b>
			</div>
			<div class="col-md-8">
				<img src="{{ asset(url('upload/user/'.$data->user_img)) }}" width="100" height="100">
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Fullname</b>
			</div>
			<div class="col-md-8">
				{{ $data->user_name }}
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Sex</b>
			</div>
			<div class="col-md-8">
				{{ $data->user_sex }}
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Address</b>
			</div>
			<div class="col-md-8">
				{{ $data->user_address }}
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Birthday</b>
			</div>
			<div class="col-md-8">
				{{ $data->user_birthday }}
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Email</b>
			</div>
			<div class="col-md-8">
				{{ $data->user_email }}
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>PhoneNumber</b>
			</div>
			<div class="col-md-8">
				{{ $data->user_phone }}
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Username</b>
			</div>
			<div class="col-md-8">
				{{ $data->user_username }}
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4">
				<b>Admin Level</b>
			</div>
			<div class="col-md-8">
				{{ $data->user_level }}
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
	

@endsection
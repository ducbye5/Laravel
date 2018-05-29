@extends('backend.layout')
@section('controller')
<div class="border-bottom">
	@if($user->user_level=='1')
	<a href="{{ url('admin/adminstrator/add') }}" class="btn btn-outline-danger mb-3">Add a new Admin</a>
	@endif
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
	@foreach($data as $rows)
	<?php $stt++?>
	<div class="row mb-3 text-center">
		<div class="col-md-1">
			{{ $stt }}
		</div>
		<div class="col-md-1">
			<img src="{{ url('upload/user/'.$rows->user_img) }}" width="50px" class="img-thumbnail">
		</div>
		<div class="col-md-2">
			{{ $rows->user_name }}
		</div>
		<div class="col-md-3">
			{{  $rows->user_email }}
		</div>
		<div class="col-md-1">
			{{ $rows->user_phone }}
		</div>
		<div class="col-md-1">
			@if($rows->user_use==1)
				<div class="badge badge-primary">On</div>
			@else
				<div class="badge badge-danger">Off</div>
			@endif
		</div>
		<div class="col-md-3">
		@if($user->user_level=='1')
			<a href="{{ url('admin/adminstrator/profile/'.$rows->id) }}" class="btn btn-success">Profile</a>
			<a href="{{ url('admin/adminstrator/edit/'.$rows->id) }}" class="btn btn-primary">Edit</a>
			<a href="{{ url('admin/adminstrator/delete/'.$rows->id) }}" class="btn btn-danger delete">Delete</a>
		@else
			<a href="{{ url('admin/adminstrator/profile/'.$rows->id) }}" class="btn btn-success">Profile</a>
		@endif
		</div>
	</div>
	@endforeach
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
@endsection
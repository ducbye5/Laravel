@extends('backend.layout')
@section('controller')
<div class="border-bottom">
	<a href="{{ url('admin/news/add') }}" class="btn btn-outline-danger mb-3">Add a news</a>
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
	@foreach($data as $rows)
	<?php $stt++;?>
	<div class="row mb-3">
		<div class="col-md-1 text-center">
			{{ $stt }}
		</div>
		<div class="col-md-2 text-center">
			<img src="{{ asset('upload/news/'.$rows->news_img) }}" width="100px" class="img-thumbnail">
		</div>
		<div class="col-md-2 text-left text-truncate">
			
			<a href="{{ url('admin/news/edit/'.$rows->id) }}" title="{{ $rows->news_title }}"><b>{{ $rows->news_title }}</b></a>
			
		</div>
		<div class="col-md-3 text-left text-truncate">
			{!! $rows->news_content !!}
		</div>
		<div class="col-md-2 text-center">
			{{ $rows->user_name }}
		</div>
		<div class="col-md-2 text-center">
		
			<a href="{{ url('admin/news/edit/'.$rows->id) }}" class="btn btn-primary">Edit</a>
			<a href="{{ url('admin/news/delete/'.$rows->id) }}" class="btn btn-danger delete" onbeforeunload=''>Delete</a>
		</div>
	</div>
	@endforeach
</div>
@endsection
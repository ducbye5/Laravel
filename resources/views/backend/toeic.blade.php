@extends('backend.layout')
@section('controller')

	<div class="row">
		<div class="col-md-10  mt-3 pl-4">
			<a href="{{ url('admin/toeic/add') }}" class="btn btn-success">Thêm dữ liệu câu hỏi</a>
			<a href="{{ url('admin/toeic/download') }}" class="btn btn-info">Xuất dữ liệu hiện tại(Excel)</a>
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
		        	@foreach($data as $rows)
		        	<?php $stt++?>
		            <tr>
		                <td>{{ $stt }}</td>
		                <td>{{ $rows->question }}</td>
		                <td>{{ $rows->A }}</td>
		                <td>{{ $rows->B }}</td>
		                <td>{{ $rows->C }}</td>
		                <td>{{ $rows->D }}</td>
		                <td>{{ $rows->result }}</td>
		                <td>{{ $rows->name }}</td>
		                <td><a href="" class="btn btn-primary">Edit</a></td>
		                <td><a href="" class="btn btn-danger">Delete</a></td>
		            </tr>
		            @endforeach
		        </tbody>
		    </table>
		</div>
	</div>
@endsection
	
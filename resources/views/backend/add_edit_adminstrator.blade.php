@extends('backend.layout')
@section('controller')
<div class="container">
	<div class="mt-5 col-md-10 offset-1">
		{!! Form::open([ 'method'=>'post', 'file'=>'true', 'class'=>'form-control bg-light','enctype'=>'multipart/form-data']) !!}
		
			<div class="form-group mt-3 row">
				<b class="col-sm-2">{{ Form::label('img','Avata User',['class'=>'form-control-label']) }}</b>
				<div class="col-sm-10">
				{{ 
					Form::file('user_image',['class'=>'form-control-file','id'=>'img']) 
				}}
				</div>
			</div>

			<div class="form-group mt-3 row">
				<b class="col-sm-2">
					{{ 
						Form::label('username','Username',['class'=>'form-control-label']) 
					}}
				</b>
				<div class="col-sm-10">
				{{ 
					Form::text('user_username',isset($data->user_username)?$data->user_username:'',['class'=>'form-control','id'=>'username', 'placeholder'=>isset($data->user_username)?$data->user_username:'Username','title'=>isset($data->user_username)?$data->user_username:'Username',isset($data->user_username)?"readonly='readonly'":"required='required'"]) 
				}}
				</div>
			</div>

			<div class="form-group mt-3 row">
				<b class="col-sm-2">
					{{ 
						Form::label('password','Password',['class'=>'form-control-label']) 
					}}
				</b>
				<div class="col-sm-10">
				{{ 
					Form::password('user_password',['class'=>'form-control','id'=>'password', 'placeholder'=>isset($data->user_password)?'Type a new password if you want to change':'Password',isset($data->user_username)?'':"required='required'",'title'=>isset($data->user_password)?$data->user_password:'Password']) 
				}}
				</div>
			</div>

			<div class="form-group mt-3 row">
				<b class="col-sm-2">
					{{ 
						Form::label('name','Fullname',['class'=>'form-control-label']) 
					}}
				</b>
				<div class="col-sm-10">
					{{ 
						Form::text('user_fullname',isset($data->user_name)?$data->user_name:'',['class'=>'form-control','id'=>'name', 'placeholder'=>isset($data->user_name)?$data->user_name:'Fullname User']) 
					}}
				</div>
			</div>

			<div class="form-group mt-3 row">
				<b class="col-sm-2">
					{{ 
						Form::label('sex','Sex',['class'=>'form-check-label']) 
					}}
				</b>
				<div class="col-sm-10">
				{{ 
					Form::radio('user_sex','man','', ['class'=>'form-check-inline',empty($data->user_sex)?"checked='checked'":(empty(($data->user_sex)=='man')?'':"checked='checked'")]) 

				}}<i class="mr-3">Man</i>
				{{ 
					Form::radio('user_sex','woman','',['class'=>'form-check-inline',empty($data->user_sex)?'':(empty(($data->user_sex)=='woman')?'':"checked='checked'")]) 
				}}<i>Woman</i>
				</div>
			</div>

			<div class="form-group mt-3 row">
				<b class="col-sm-2">
					{{ 
						Form::label('user_birthday','Birthday',['class'=>'form-check-label']) 
					}}
				</b>
				<div class="col-sm-3">
					
					{{
						Form::date('user_birthday',empty($data->user_birthday)?date('Y-m-d'):empty(($data->user_birthday)!='0000-00-00')?date('Y-m-d'):$data->user_birthday,['class'=>'form-control'])
					}}
				</div>
			</div>
			<div class="form-group mt-3 row">
				<b class="col-sm-2">
					{{ 
						Form::label('address','Address', ['class'=>'form-check-label']) 
					}}
				</b>
				<div class="col-sm-10">
					{{ 
						Form::select('user_address',
						[
							'hanoi'=>'Hà nội',
							'hcm'=>'Hồ Chí Minh',
							'haiphong'=>'Hải Phòng',
							'danang'=>'Đà Nẵng'
						],empty($data->user_address)?'danang':$data->user_address,['class'=>'form-control','id'=>'address']) 
					}}
				</div>
			</div>

			<div class="form-group mt-3 row">
				<b class="col-sm-2">
					{{ 
						Form::label('email','Email', ['class'=>'form-check-label']) 
					}}
				</b>
				<div class="col-sm-10">
					{{ 
						Form::email('user_email',isset($data->user_email)?$data->user_email:'',['class'=>'form-control','id'=>'email','placeholder'=>'Email Address']) 
					}}
				</div>
			</div>

			<div class="form-group mt-3 row">
				<b class="col-sm-2">
					{{ 
						Form::label('phone','Phonenumber', ['class'=>'form-check-label']) 
					}}
				</b>
				<div class="col-sm-10">
					{{ 
						Form::text('user_phone',isset($data->user_phone)?$data->user_phone:'',['class'=>'form-control','id'=>'phone','placeholder'=>'Phonenumber']) 
					}}
				</div>
			</div>

			<div class="form-group mt-3 row">
				<b class="col-sm-2">
					{{ 
						Form::label('description','Desciption', ['class'=>'form-check-label']) 
					}}
				</b>
				<div class="col-sm-10">
					{{ 
						Form::textarea('user_description',isset($data->user_description)?$data->user_description:'',['class'=>'form-control','row'=>'5']) 
					}}
					<script>
						CKEDITOR.replace('user_description');
					</script>
				</div>
			</div>

			<div class="form-group mt-5 row">
				<div class="col-sm-12 text-center">
					{{ 
						Form::submit('Submit',['class'=>'btn btn-primary'])
					}}
					{{ Form::macro('fooField', function()
						{
						return '<input type="reset"/>';
						}) 
					}}
					{{
						Form::reset('Reset',['class'=>'btn btn-success'])
					}}
					<a href="{{ url('admin/adminstrator') }}" class="btn btn-danger">Cancel</a>
				</div>
			</div>

		{!! Form::close() !!}
	</div>
</div>
@endsection
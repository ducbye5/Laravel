@extends('index')
@section('controller')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ url('admin/user') }}">List admin</a></li>
                            <li><a href="{{ url('admin/user/profile/'.$data['id']) }}">Profile</a></li>
                            <li class="active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<div class="content mt-3">
    <div class="animated fadeIn">
    	<div class="row">
    		<div class="col-lg-12">
    			<div class="card">
                      <div class="card-header">
                        <strong>Edit Profile Form</strong> 
                      </div>
                      <div class="card-body card-block">
                        <form action="{{ url('admin/user/edit/'.$data['id']) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                        	<div class="col-lg-6">
	                        	<div class="row form-group">
	                           		<div class="col col-md-3"><label for="image" class=" form-control-label">Image</label></div>
	                            	<div class="col-12 col-md-9 mb-2"><input type="file" id="image" name="image" class="form-control-file"><small class="form-text text-muted">This is your lastname</small></div>
	                          	</div>
	                          	<div class="row form-group">
	                            	<div class="col col-md-3"><label for="nickname" class=" form-control-label">Nickname</label></div>
	                            	<div class="col-12 col-md-9"><input type="text" id="nickname" name="nickname" class="form-control" value="{{ $data['name'] }}"><small class="form-text text-muted">This is a nickname</small></div>
	                          	</div>
	                          	<div class="row form-group">
	                            	<div class="col col-md-3"><label for="email" class=" form-control-label">Email</label></div>
	                            	<div class="col-12 col-md-9"><input type="email" id="email" name="email"  class="form-control" disabled="disabled" value="{{ $data['email'] }}"><small class="help-block form-text">Your email are disabled</small></div>
	                          	</div>
	                          	<div class="row form-group">
	                            	<div class="col col-md-3"><label for="password" class=" form-control-label">Password</label></div>
	                            	<div class="col-12 col-md-9"><input type="password" id="password" name="password" placeholder="Password" class="form-control"><small class="help-block form-text">Please enter a new password if you want to change password</small></div>
	                          	</div>
	                          	<div class="row form-group">
	                            	<div class="col col-md-3"><label for="telephone" class=" form-control-label">Telephone</label></div>
	                            	<div class="col-12 col-md-9"><input type="text" id="telephone" name="telephone"  class="form-control" value="{{  $data['telephone'] }}"><small class="help-block form-text">This is your telephone</small></div>
	                          	</div>
	                        </div>
	                        <div class="col-lg-6">
	                        	<div class="row form-group">
	                            	<div class="col col-md-3"><label for="lastname" class=" form-control-label">Lastname</label></div>
	                            	<div class="col-12 col-md-9"><input type="text" id="lastname" name="lastname" value="{{ $data['last_name'] }}" class="form-control"><small class="form-text text-muted">This is your lastname</small></div>
	                          	</div>
	                          	<div class="row form-group">
	                            	<div class="col col-md-3"><label for="firstname" class=" form-control-label">Firstname</label></div>
	                            	<div class="col-12 col-md-9 mb-2"><input type="text" id="firstname" name="firstname" value="{{ $data['first_name'] }}" class="form-control"><small class="form-text text-muted">This is your firstname</small></div>
	                          	</div>
	                          	<div class="row form-group">
		                            <div class="col col-md-3"><label class=" form-control-label">Sex</label></div>
		                            <div class="col col-md-9 mb-4">
		                              	<div class="form-check-inline form-check">
		                                	<label for="man" class="form-check-label ">
		                                  	<input type="radio" id="man" name="sex" value="Man" class="form-check-input" {{ !empty($data['sex']=='Man')?'checked':'' }}>Man
		                                	</label>
		                                	<label for="woman" class="form-check-label ">
		                                  	<input type="radio" id="woman" name="sex" value="Woman" class="form-check-input" {{ !empty($data['sex']=='Woman')?'checked':'' }}>Woman
		                                	</label>
		                              	</div>
		                            </div>
		                        </div>
		                        <div class="row form-group">
	                            	<div class="col col-md-3"><label for="birthday" class=" form-control-label">Birthday</label></div>
	                            	<div class="col-12 col-md-9"><input type="date" id="birthday" name="birthday" class="form-control" value="{{ $data['birthday'] }}"><small class="form-text text-muted">This is your birthday</small></div>
	                          	</div>
	                          	<div class="row form-group">
		                            <div class="col col-md-3"><label for="address" class=" form-control-label">Address</label></div>
		                            <div class="col-12 col-md-9">
		                              	<select name="address" id="address" class="form-control">
		                                	<option value="Hà Nội" checked>Hà Nội</option>
		                                	<option value="Đà Nẵng">Đà Nẵng</option>
		                                	<option value="Hồ Chí Minh">Hồ Chí Minh</option>
		                                	<option value="Hải Phòng">Hải Phòng</option>
		                              	</select>
		                              	<small class="form-text text-muted">This is your address</small>
		                            </div>
		                        </div>
	                        </div>
	                        <div class="col-lg-12">
	                        	<div class="row">
		                        	<div class="col-lg-6">
			                        	<div class="row form-group">
			                        		<div class="col col-md-3"><label for="facebook" class=" form-control-label">Facebook</label></div>
			                        		<div class="col-12 col-md-9"><input type="text" id="facebook" name="facebook" class="form-control" value="{{ $data['facebook'] }}"><small class="form-text text-muted">This is your facebook</small></div>
			                        	</div>
			                        	<div class="row form-group">
			                        		<div class="col col-md-3"><label for="twitter" class=" form-control-label">Twitter</label></div>
			                        		<div class="col-12 col-md-9"><input type="text" id="twitter" name="twitter" class="form-control" value="{{ $data['twitter'] }}"><small class="form-text text-muted">This is your twitter</small></div>
			                        	</div>
		                        	</div>
			                        <div class="col-lg-6">
			                        	<div class="row form-group">
			                        		<div class="col col-md-3"><label for="linkedin" class=" form-control-label">Linkedin</label></div>
			                        		<div class="col-12 col-md-9"><input type="text" id="linkedin" name="linkedin" class="form-control" value="{{ $data['linkedin'] }}"><small class="form-text text-muted">This is your linkedin</small></div>
			                        	</div>
			                        	<div class="row form-group">
			                        		<div class="col col-md-3"><label for="pinterest" class=" form-control-label">Pinterest</label></div>
			                        		<div class="col-12 col-md-9"><input type="text" id="pinterest" name="pinterest" class="form-control" value="{{ $data['pinterest'] }}"><small class="form-text text-muted">This is your pinterest</small></div>
			                        	</div>
			                        </div>
			                    </div>
	                        </div>
	                  		<div class="col-lg-12">
	                  			<div class="row form-group">
	                            	<div class="col col-md-2"><label for="description" class=" form-control-label">Description</label></div>
	                            	<div class="col-12 col-md-10"><textarea name="description" id="description" rows="5" placeholder="Content..." class="form-control">{{ $data['description'] }}</textarea>
	                            	<script type="text/javascript">
										CKEDITOR.replace('description');
									</script>
	                            	</div>
	                          	</div>
	                        </div>
	                        @if($user['id']==1)
	                        <div class="col-lg-12">
	                        	<div class="row form-group">
		                            <div class="col col-md-2"><label class=" form-control-label">Active</label></div>
		                            <div class="col col-md-10">
		                              	<div class="form-check-inline form-check">
		                                	<label for="enabled" class="form-check-label ">
		                                  	<input type="radio" id="enabled" name="active" value="1" class="form-check-input" {{ !empty($data['active']=='1')?'checked':'' }}>Enabled
		                                	</label>
		                                	<label for="disabled" class="form-check-label ">
		                                  	<input type="radio" id="disabled" name="active" value="0" class="form-check-input" {{ !empty($data['active']=='0')?'checked':'' }}>Disabled
		                                	</label>
		                              	</div>
		                            </div>
		                        </div>
	                        </div>
	                        @endif
	                        <div class="col-lg-12 text-center">
		                       	<button type="submit" class="btn btn-primary btn-sm">
			                        <i class="fa fa-dot-circle-o"></i> Submit
			                    </button>
			                    <a href="{{ url('admin/user') }}" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Cancel</a>
	                        </div>
                        </form>
                      </div>
                    </div>
    		</div>
    	</div>
    </div>
</div>
@endsection
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
                            <li><a href="">Dashboard</a></li>
                            <li><a href="">Admin</a></li>
                            <li><a href="">Other admin</a></li>
                            <li class="active">Add new admin</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
        	<div class="col-lg-6 offset-3">
                    <div class="card">
                      <div class="card-header">Example Form</div>
                      <div class="card-body card-block">
                        <form action="{{ url('admin/user/create') }}" method="post" >
                        	{{ csrf_field() }}
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="name" name="name" placeholder="name" class="form-control" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                              <input type="email" id="email" name="email" placeholder="Email" class="form-control" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                              <input type="password" id="password" name="password" placeholder="Password" class="form-control" required="required">
                            </div>
                          </div>
                          <div class="form-actions form-group">
                          	<button type="submit" class="btn btn-success btn-sm">Submit</button>
                          	<input type="reset" class="btn btn-primary btn-sm" value="Reset">
                          	<a href="{{ url('admin/user') }}" class="btn btn-danger btn-sm">Cancel</a>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
        </div>
    </div>
</div>
@endsection
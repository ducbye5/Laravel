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
                            <li class="active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6 col-md-6 offset-1">
              <fieldset class="form-control bg-light">
                <legend class="form-control text-center">INFORMATION</legend>
                <div class="row mb-3">
                  <span class="col-md-6 col-sm-5"><b>Fullname</b></span>
                  <span class="col-md-6 col-sm-7"><i>{{ $data['first_name'] }} {{ $data['last_name'] }}</i></span>
                </div>
                <div class="row mb-3">
                  <span class="col-md-6 col-sm-5"><b>Sex</b></span>
                  <span class="col-md-6 col-sm-7"><i>{{ $data['sex'] }}</i></span>
                </div>
                <div class="row mb-3">
                  <span class="col-md-6 col-sm-5"><b>Birthday</b></span>
                  <span class="col-md-6 col-sm-7"><i>{{ $data['birthday'] }}</i></span>
                </div>
                <div class="row mb-3">
                  <span class="col-md-6 col-sm-5"><b>Address</b></span>
                  <span class="col-md-6 col-sm-7"><i>{{ $data['address'] }}</i></span>
                </div>
                <div class="row mb-3">
                  <span class="col-md-6 col-sm-5"><b>Telephone</b></span>
                  <span class="col-md-6 col-sm-7"><i>{{ $data['telephone'] }}</i></span>
                </div>
                <div class="row mb-3">
                  <span class="col-md-6 col-sm-5"><b>Email</b></span>
                  <span class="col-md-6 col-sm-7"><i>{{ $data['email'] }}</i></span>
                </div>
                <div class="row mb-3">
                  <span class="col-md-6 col-sm-5"><b>Description</b></span>
                  <span class="col-md-6 col-sm-7"><i><?php echo $data['description'] ?></i></span>
                </div>
              </fieldset>
            </div>
            @if(($user['level'] == 1) || ($data['id'] == $user['id']))
        	  <div class="col-lg-4 col-md-6">
              <aside class="profile-nav alt">
                            <section class="card">
                                <div class="card-header user-header alt bg-dark">
                                    <div class="media">
                                        <a href="#">
                                            <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{ asset('images/admin.jpg') }}">
                                        </a>
                                        <div class="media-body">
                                            <h2 class="text-light display-6">{{ $data['name'] }}</h2>
                                            @if($data['level']==1)
                                            <p>Admin Manager</p>
                                            @else
                                            <p>Admin</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-envelope-o"></i> Mail Inbox <span class="badge badge-primary pull-right">10</span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-tasks"></i> Recent Activity <span class="badge badge-danger pull-right">15</span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-bell-o"></i> Notification <span class="badge badge-success pull-right">11</span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-comments-o"></i> Message <span class="badge badge-warning pull-right r-activity">03</span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ url('admin/user/edit/'.$data['id']) }}"> <i class="fa fa-cog"></i> Edit profile</a>
                                    </li>
                                    <li class="list-group-item text-sm-center">
                                        <a href="{{ $data['facebook'] }}"  title="facebook" target="_blank"><i class="fa fa-facebook pr-1"></i></a>
                                        <a href="{{ $data['twitter'] }}" title="twitter" target="_blank"><i class="fa fa-twitter pr-1"></i></a>
                                        <a href="{{ $data['linkedin'] }}" title="linkedin" target="_blank"><i class="fa fa-linkedin pr-1"></i></a>
                                        <a href="{{ $data['pinterest'] }}" title="pinterest" target="_blank"><i class="fa fa-pinterest pr-1"></i></a>
                                    </li>
                                </ul>

                            </section>
              </aside>
            </div>
            @else
            <div class="col-lg-4 col-md-6">
              <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Profile Card</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="{{ asset('images/admin.jpg') }}" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1">{{ $data['name'] }}</h5>
                                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i> {{ $data['address'] }}</div>
                                </div>
                                <hr>
                                <div class="card-text text-sm-center">
                                    <a href="{{ $data['facebook'] }}"  title="facebook" target="_blank"><i class="fa fa-facebook pr-1"></i></a>
                                    <a href="{{ $data['twitter'] }}" title="twitter" target="_blank"><i class="fa fa-twitter pr-1"></i></a>
                                    <a href="{{ $data['linkedin'] }}" title="linkedin" target="_blank"><i class="fa fa-linkedin pr-1"></i></a>
                                    <a href="{{ $data['pinterest'] }}" title="pinterest" target="_blank"><i class="fa fa-pinterest pr-1"></i></a>
                                </div>
                            </div>
              </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
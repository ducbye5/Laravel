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
                            <li class="active">List admin</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered text-center">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Fullname</th>
                                <th>Level</th>
                                <th>Status</th>
                                <th>Active</th>
                                <th>Option</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($data as $rows)
                              <tr>
                                <td>{{ $rows->name }}</td>
                                <td>{{ $rows->first_name }} {{ $rows->last_name }}</td>
                                <td>{{ $rows->level }}</td>
                                @if( $rows->status == 1)
                                  <td><label class="badge badge-primary">On</label></td>
                                @else
                                  <td><label class="badge badge-danger">Off</label></td>
                                @endif
                                @if( $rows->active  == 1)
                                  <td><label class="badge badge-primary">Enabel</label></td>
                                @else
                                  <td><label class="badge badge-danger">Disable</label></td>
                                @endif
                                @if($user['level'] > 1)
                                <td>
                                  <a href="{{ url('admin/user/profile/'.$rows->id) }}" class="btn btn-success">Profile</a>
                                </td>
                                @else
                                <td>
                                  <a href="{{ url('admin/user/profile/'.$rows->id) }}" class="btn btn-success">Profile</a>
                                  <a href="{{ url('admin/user/edit/'.$rows->id) }}" class="btn btn-primary">Edit</a>
                                  <a href="{{ url('admin/user/delete/'.$rows->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                                @endif
                              </tr>
                              @endforeach 
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>


                </div>
            </div>
        </div>
@endsection
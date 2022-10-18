@extends('layouts.admin')
@section('content')
<section class="content" style="margin-left: 250px">
    <div class="container-fluid" >
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <h1>All Users</h1>
                <thead>
                <tr align="center">
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                  <tr align ="center">
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><button class="btn btn-danger btn-sm"><a style="color: white" href="{{url('delete/'.$user->id)}}" class="fa fa-trash">Delete</a></button></td>
                  </tr>
                  @endforeach
                </tbody>
            </div>
        </div>
  </div>
@endsection

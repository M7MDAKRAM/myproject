@extends('layouts.admin')
@section('content')
  <!-- Main content -->
    <section class="content" style="margin-left: 250px">
        <div class="container-fluid" >
          <div class="row">
            <div class="col-12">
              <div class="card">

                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                      <h1 align:center>Social Media</h1>
                    <thead>
                    <tr align="center">
                      <th>Name</th>
                      <th>email</th>
                      <th>Message</th>
                      <th>Send Date</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($contact as $contact)
                      <tr align="center">
                        <td>{{$contact->fullname}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->message}}</td>
                        <td>{{$contact->created_at}}</td>
                        <td>
                            <button  class="btn btn-danger btn-sm"><a style="color: white" href="{{url('delete/'.$contact->id)}}" class="fa fa-trash">Delete</a></button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </div>
            </div>
      </div>
@endsection

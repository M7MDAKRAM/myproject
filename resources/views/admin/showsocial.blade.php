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
                      <th>Facebook</th>
                      <th>Twitter</th>
                      <th>Instagram</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($about as $abo)
                      <tr align ="center">
                        <td>{{$abo->facebook}}</td>
                        <td>{{$abo->twitter}}</td>
                        <td>{{$abo->instagram}}</td>
                        <td>
                            <button  class="btn btn-primary btn-sm"> <a style="color: white" href="{{url('eedit/'.$abo->id)}}" class="fa fa-edit">Edit</a></button>
                            <button  class="btn btn-danger btn-sm"><a style="color: white" href="{{url('rremove/'.$abo->id)}}" class="fa fa-trash">Delete</a></button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </div>
            </div>
      </div>
@endsection

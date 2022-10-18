@extends('layouts.admin')
@section('content')
  <!-- Main content -->
    <section class="content" style="margin-left: 250px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h1 class="card-title">Orders Menu</h1>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr align="center">
                      <th>Id</th>
                      <th>Customer Name</th>
                      <th>Customer Location</th>
                      <th>Customer Number</th>
                      <th>Product Name</th>
                      <th>Quantity</th>
                      <th>Remark</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                         @foreach ($orders as $ordeer)
                      <tr align="center">
                        <td>{{$ordeer->id}}</td>
                        <td>{{$ordeer->name}}</td>
                        <td>{{$ordeer->location}}</td>
                        <td>{{$ordeer->phone}}</td>
                        <td>{{$ordeer->pro_name}}</td>
                        <td>{{$ordeer->quantity}}</td>
                        <td>{{$ordeer->remark}}</td>
                        <td>
                            <button  class="btn btn-primary btn-sm"><a  style="color: white" href="{{url('ediit/'.$ordeer->id)}}" class="fa fa-edit">Edit</a></button>
                            <button  class="btn btn-danger btn-sm"><a style="color: white" href="{{url('deelete/'.$ordeer->id)}}" class="fa fa-trash">delete</a></button>
                        </td>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </div>
            </div>


      </div>
@endsection

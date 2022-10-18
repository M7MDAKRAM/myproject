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
                      <h1 align:center>All Products</h1>
                    <thead>
                        <div class="search">

                            <form class="from-inline" action="{{url('searchproduct')}}" method="get">
                                @csrf
                                <input type="search" class="from-control" name="search" placeholder="search product">
                                <input type="submit" value="search" class="btn btn-success" >
                            </form>

                          </div>
                    <tr align="center">
                      <th>Id</th>
                      <th>image product</th>
                      <th>Name</th>
                      <th>price</th>
                      <th>quantity</th>
                      <th>description</th>
                      <th>Type</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $product)
                      <tr align ="center">
                        <td>{{$product->id}}</td>
                        <td>
                            <img src="{{asset('images/'.$product->image)}}" class="cate-image"  width="80px" height="80px">
                        </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}$</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->type}}</td>
                        <td>
                            <button  class="btn btn-primary btn-sm"> <a style="color: white" href="{{url('edit/'.$product->id)}}" class="fa fa-edit">Edit</a></button>
                            <button  class="btn btn-danger btn-sm"><a style="color: white" href="{{url('remove/'.$product->id)}}" class="fa fa-trash">Delete</a></button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </div>
            </div>
      </div>
@endsection

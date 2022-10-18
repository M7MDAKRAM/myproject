@extends('layouts.admin')
@section('content')
    <div class="container">
        <style>
            .uper {
                margin-top: 10px;
                margin-left: 150px;
            }
        </style>
        <div class="card uper">
            <div class="card-header">
                Edite and Update Data
            </div>
            <div class="card-body">
                <form method="post" action="{{url('update/'.$product->id)}}" enctype="multipart/form-data">
                   @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="image">Product image:</label>
                        <input type="file" class="form-control" value="{{$product->image}}" name="image_pro">
                    </div>
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" value="{{$product->name}}" name="product_name" />
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price :</label>
                        <input type="text" class="form-control" value="{{$product->price}}" name="product_price" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity:</label>
                        <input type="text" class="form-control" value="{{$product->quantity}}" name="product_qty" />
                    </div>
                    <div class="form-group">
                        <label for="description">Product description:</label>
                        <input type="textarea" class="form-control"value="{{$product->description}}" name="product_des" />
                    </div>
                    <div class="form-group">
                        <label for="Type">Product Type:</label>
                        <input type="string" class="form-control" value="{{$product->type}}" name="product_typ" />
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection

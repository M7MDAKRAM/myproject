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
                <h1>Add Product</h1>
            </div>
            <div class="card-body">
                <form method="post" action="{{url('/admin/store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Product image:</label>
                        <input type="file" class="form-control" name="image_pro">
                    </div>
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" name="product_name" />
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price :</label>
                        <input type="text" class="form-control" name="product_price" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity:</label>
                        <input type="text" class="form-control" name="product_qty" />
                    </div>
                    <div class="form-group">
                        <label for="description">Product description:</label>
                        <input type="textarea" class="form-control" name="product_des" />
                    </div>
                    <div class="form-group">
                        <label for="Type">Product Type:</label>
                        <input type="string" class="form-control" name="product_typ" />
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>

@endsection

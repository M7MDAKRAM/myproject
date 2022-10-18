@extends('layouts.main')
@section('main-container')
    <div class="container">
        <style>
            .uper {
                margin-top: 100px;
                margin-left: 150px;
            }
        </style>
        <div class="card uper" style="margin-top: 50px">
            <div class="card-body" style="margin-top: 100px">
                <form method="post" action="{{url('updatee/'.$order->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" value="{{$order->name}}" name="customer_name"  required/>
                    </div>
                    <div class="form-group">
                        <label for="name">Location:</label>
                        <input type="text" class="form-control" value="{{$order->location}}" name="customer_loc" required/>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="name">Phone Number:</label>
                            <input type="text" class="form-control" value="{{$order->phone}}" name="phone_num" max="10" required/>
                        </div>
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" value="{{$order->pro_name}}" name="product_name"/>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity:</label>
                        <input type="number" class="form-control"value="{{$order->quantity}}" name="product_qty"/>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Remarks:</label>
                        <input type="textarea" class="form-control" value="{{$order->remark}}" name="customer_remark" />
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection

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
                <form method="post" action="{{url('/frontend/save')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="customer_name" placeholder="Full Name" required/>
                    </div>
                    <div class="form-group">
                        <label for="name">Location:</label>
                        <input type="text" class="form-control" name="customer_loc" placeholder="Your Location" required/>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="name">Phone Number:</label>
                            <input type="text" class="form-control" name="phone_num" min="10" max="10" placeholder="Your Phone Number" required/>
                        </div>
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" name="product_name" placeholder=" Enter Product Name"/>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity:</label>
                        <input type="number" class="form-control"  placeholder=" Enter Product Quantity" name="product_qty"/>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Remarks:</label>
                        <input type="textarea" class="form-control"  placeholder=" Enter Any Remark" name="customer_remark" />
                    </div>
                    <button type="submit" class="btn btn-primary">Order Confirmation</button>
                </form>
            </div>
        </div>
    </div>

@endsection

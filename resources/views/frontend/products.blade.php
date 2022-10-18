@extends('layouts.main')
@section('main-container')

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>sixteen products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
                  <li  class="nav-item">
                    <a class="nav-link" href="{{url('/men')}}" style="color: black">Men</a>
               </li>
                  <li  class="nav-item">
                      <a class="nav-link" href="{{url('/woman')}}" style="color: black">Woman</a>
                 </li>
              </ul>
              <li>
                <form class="from-inline" action="{{url('search')}}" method="get">
                    @csrf
                    <input type="search" class="from-control" name="search" placeholder="  search">
                    <input type="submit" value="search" class="btn btn-success">
                </form>
            </li>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    @foreach ($product as $products )
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item" style="width: 250px">
                        <img  src="{{asset('images/'.$products->image)}}" alt="Card image cap" class="Card-img-top">
                        <div class="down-content">
                          <a href=""><h4>{{$products->name}}</h4></a>
                          <h6>{{$products->price}}$</h6>
                          <p>{{$products->description}}</p>
                          <a href="push">Order Now+</a>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

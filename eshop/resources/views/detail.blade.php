@extends('master')
@section('content') 

<div class="container mt-3">
    <div class="card m-4 mx-auto">
    <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a href="/" class="btn btn-primary">Back</a>
      </li>
    </ul>
    </div>
    <img src="{{$product['gallery']}}" class="card-img-top product-details-sigle">
    <div class="card-body">
        <h5 class="card-title">{{$product['name']}}</h5>
        <p class="card-text">{{$product['description']}}</p>
        <p class="card-text">Price € {{$product['price']}},00</p>
        <div class="input-group">
            <div class="input-group-btn m-2">
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <button class="btn btn-primary">Add to cart</button>
                    
                </form>
            </div>
            <div class="input-group-btn">
                @csrf
                <form action="">
                    <!-- <a href="#" class="btn btn-primary m-2">Buy now</a> -->
                </form>
            </div>
        </div>
        
        
        <p class="card-text mt-3"><small class="text-muted">Category {{$product['category']}}</small></p>
    </div>
    </div>
</div>

@endsection
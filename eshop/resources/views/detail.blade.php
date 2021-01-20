@extends('master')
@section('content') 

<div class="container mt-3">
    <div class="card mb-3">
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
        <a href="#" class="btn btn-primary">Add to cart</a>
        <a href="#" class="btn btn-primary">Buy now</a>
        <p class="card-text mt-3"><small class="text-muted">Category {{$product['category']}}</small></p>
    </div>
    </div>
</div>

@endsection
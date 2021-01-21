@extends('master')
@section('content') 

<h3 class="text-center mt-4 fw-lighter">Your cart :</h3>

<div class="row row-cols-3 row-cols-md-4 g-4 m-1">
    @foreach($products as $item)   
    <div class="col">
        <div class="card h-100">           
            <img src="{{$item->gallery}}" class="card-img-top trend-img h-100">
            <div class="card-body">
                <a href="detail/{{$item->id}}">   
                    <h5 class="card-title">{{$item->name}}</h5>
                </a> 
                <p class="card-text">{{$item->description}}</p>
                <a class="btn btn-primary" href="/removecart/{{$item->cart_id}}" role="button">Remove</a>
            </div>
            <div class="card-footer text-muted">
                Subtotal € {{$item->price}},00
            </div>  
        </div>
    </div>
    @endforeach
</div>

<div class="d-grid gap-2 mt-3 col-6 mx-auto">
    <a class="btn btn-primary" href="/ordernow" role="button">Order now</a>
</div>

@endsection
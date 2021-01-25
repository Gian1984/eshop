@extends('master')
@section('content') 

<h3 class="text-center mt-4 fw-lighter text-white">Your cart :</h3>

<div class="row m-1 mb-4">
    @foreach($products as $item)   
    <div class="col-lg-3 mt-1 mb-1">
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

<a class="btn btn-primary m-5 col-6 mx-auto" href="/ordernow" role="button" style="max-height:40px;">Order now</a>
    
@endsection

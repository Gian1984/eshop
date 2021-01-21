@extends('master')
@section('content') 

<h3 class="text-center mt-4 fw-lighter">My orders :</h3>

<div class="row row-cols-3 row-cols-md-4 g-4 m-1">
    @foreach($orders as $item)   
    <div class="col">
        <div class="card h-100">           
            <img src="{{$item->gallery}}" class="card-img-top trend-img h-100">
            <div class="card-body">
                <a href="detail/{{$item->id}}">   
                    <h5 class="card-title">{{$item->name}}</h5>
                </a>
                <span for="" class="text-muted fw-lighter text-sm">Delivery status:</span> 
                <p class="card-text fs-6">{{$item->status}}</p>
                <span for="" class="text-muted fw-lighter text-sm">Delivery address:</span> 
                <p class="card-text">{{$item->adress}}</p>
                <span for="" class="text-muted fw-lighter text-sm">Payment method:</span> 
                <p class="card-text">{{$item->payment_method}}</p>
                <span for="" class="text-muted fw-lighter text-sm">Payment status:</span> 
                <p class="card-text">{{$item->payment_status}}</p>
                
            </div>
            <div class="card-footer text-muted">
                Subtotal € {{$item->price}},00
            </div>  
        </div>
    </div>
    @endforeach
</div>

@endsection
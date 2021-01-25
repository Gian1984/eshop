@extends('master')
@section('content') 

<h3 class="text-center mt-4 fw-lighter text-white">Are you searching for :</h3>

<div class="row row-cols-3 row-cols-md-4 g-4 m-1 mb-4">
    @foreach($products as $item)   
    <div class="col">
        <div class="card h-100">           
            <img src="{{$item['gallery']}}" class="card-img-top trend-img h-100">
            <div class="card-body">
                <a href="detail/{{$item['id']}}">   
                    <h5 class="card-title">{{$item['name']}}</h5>
                </a> 
                <p class="card-text">{{$item['description']}}</p>
            </div>  
        </div>
    </div>
    @endforeach
</div>

@endsection
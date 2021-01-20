@extends('master')
@section('content') 
<div class="custom-product">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($products as $item)
            <div class="carousel-item {{$item['id']==1?'active':''}}">                
                <img class="slider-img" src="{{$item['gallery']}}" class="d-block w-100">
                <div class="carousel-caption mt-5 slider-text">
                    <a href="detail/{{$item['id']}}">
                        <h3>{{$item['name']}}</h3>
                    </a>
                    <p>{{$item['description']}}</p>
                </div>                   
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
    </div> 
</div>

<h3 class="text-center mt-4 fw-lighter">Trending Products</h3>

<div class="row row-cols-3 row-cols-md-4 g-4 m-1">
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
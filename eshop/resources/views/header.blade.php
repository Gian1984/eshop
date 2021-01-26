<?php

use App\Http\Controllers\ProductController;
    $total=0;
    if(Session::has('user')){
        $total=ProductController::cartItem();
    }    
?>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Pc-Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        @if(Session::has('user'))
        <li class="nav-item">
          <a class="nav-link active" href="/myorders">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/cartlist" tabindex="-1" aria-disabled="true">Cart ({{$total}})</a>
        </li>
        @endif
      </ul>
      <form class="d-flex" action="/search">
        <input class="form-control me-2 search-box" type="search" name="query" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
      @if(Session::has('user'))
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
            <li><a class="dropdown-item" href="/contact_us">Info orders</a></li>
          </ul>
        </li>
      </ul>
      @else
      <ul class="navbar-nav">
        <li><a class="btn btn-outline-light" href="/login" role="button">Login</a><li>
        <li><a class="btn btn-outline-light" href="/register" role="button">Register</a><li>    
      </ul>  
      @endif
    </div>
  </div>
</nav>
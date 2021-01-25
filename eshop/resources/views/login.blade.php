
@extends('master')
@section('content')

<div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 ">
                <form action="login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show mt-3 text-center" role="alert">
                    <strong>Attention!</strong> Wrong email or password!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
</div>

@endsection
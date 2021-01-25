@extends('master')
@section('content') 
<div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 ">
                <h3 class="text-center  fw-lighter">Please fill the following fields :</h3>
                <form action="register" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" name="name[]" class="form-control" id="firstname" required>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" name="name[]" class="form-control" id="lastname" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
</div>
@endsection
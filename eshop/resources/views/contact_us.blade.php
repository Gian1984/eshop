@extends('master')
@section('content')

<div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 ">
                <form action="contact_us" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="contact" class="form-label text-white">Email address</label>
                        <input class="form-control" type="email" name="contact" id="contact" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-white">Tell us about, we will answer soon as possible!</label>
                        <textarea class="form-control" name="inforder" id="exampleFormControlTextarea1" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3 text-center" role="alert">
                    <strong>Success!</strong> We will answer soon as possible!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
</div>

@endsection
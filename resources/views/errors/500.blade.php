@extends('errors.layouts.app')
@section('content')
    <!-- Hero Section Start -->
    <section class="container-fluid text-center p-5">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('assets/uploads/500.png') }}" alt="500 Server Error " class="img-fluid mb-4"
                style="max-width: 500px;">

            <h1 class="display-1 fw-bold">500</h1>
            <p class="lead mb-4">Oops! Something went wrong on our end.</p>

            <a href="{{ url('/') }}" class="btn btn-primary px-4 py-2">Go to Home</a>
        </div>
    </section>
    <!-- Hero Section End -->
@endsection

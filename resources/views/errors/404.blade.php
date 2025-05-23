@extends('errors.layouts.app')


@section('content')

  <!-- Hero Section Start -->
<section class="container-fluid text-center p-5">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <img src="{{ asset('assets/uploads/404.png') }}" alt="404 Not Found" class="img-fluid mb-4" style="max-width: 500px;">

        <h1 class="display-1 fw-bold">404</h1>
        <p class="lead mb-4">Sorry, the page you are looking for could not be found.</p>

        <a href="{{ url('/') }}" class="btn btn-primary px-4 py-2">Go to Home</a>
    </div>
</section>
<!-- Hero Section End -->
@endsection

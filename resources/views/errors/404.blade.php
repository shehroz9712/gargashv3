@extends('errors.layouts.app')

@section('title', 'Page Not Found')

@section('content')
    <div class="text-center mt-5">
        <h1 class="display-1">404</h1>
        <p class="lead">Sorry, the page you are looking for could not be found.</p>
        <a href="{{ url('/') }}" class="btn btn-primary">Go to Home</a>
    </div>
@endsection

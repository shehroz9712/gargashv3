@extends('errors.layouts.app')

@section('title', 'Server Error')

@section('content')
    <div class="text-center mt-5">
        <h1 class="display-1">500</h1>
        <p class="lead">Oops! Something went wrong on our end.</p>
        <a href="{{ url('/') }}" class="btn btn-primary">Go to Home</a>
    </div>
@endsection

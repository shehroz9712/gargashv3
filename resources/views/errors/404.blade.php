@extends('errors.layouts.app')

@section('content')

<style>
    .error-404 {
        background: url('{{ asset('assets/uploads/404.png') }}') no-repeat center center;
        background-size: cover;
        min-height: 100vh;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
    }

    .error-404::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Dark overlay for readability */
        z-index: 1;
    }

    .error-content {
        position: relative;
        z-index: 2;
        max-width: 600px;
        padding: 2rem;
    }

    .error-content h1 {
        font-size: 8rem;
        font-weight: 800;
        margin-bottom: 1rem;
    }

    .error-content p {
        font-size: 1.25rem;
        margin-bottom: 2rem;
    }

    .error-content a.btn {
        padding: 0.75rem 2rem;
        font-size: 1.1rem;
        font-weight: 500;
    }
</style>

<div class="error-404">
    <div class="error-content">
        <h1>404</h1>
        <p>Sorry, the page you are looking for could not be found.</p>
        <a href="{{ url('/') }}" class="btn btn-light text-dark">Go to Home</a>
    </div>
</div>

@endsection

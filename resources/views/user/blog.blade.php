@extends('user.layouts.app')

@section('css')
@endsection


@section('content')
    <section class=" blog-section-hero-bg container-fluid vh-100 blogs-hero-height-responsive blog-bg overflow-hidden">
        <form action="{{ route('user.blog.search') }}" method="GET">
        <div class="align-items-center container d-flex flex-column h-100 justify-content-center w-100">
            <div class="text-center">
                <h1 class="fw-bold display-3 blogs-hero-heading-font-size-responsive text-black">Stay Updated with<span
                        style="color:#E6B110;"> Gargash</span>
                </h1>
                <p class="fs-6 lh-sm fw-normal text-dark">Your go-to luxury car care destination for expert service and
                    insights to ensure a smooth and worry-free drive. </p>
            </div>
                @csrf
                <div class="align-items-center d-flex gap-4 flex-column justify-content-center w-100">

                    <div
                        class="align-items-center bg-white d-flex justify-content-between px-3 py-2 rounded-3 w-100 w-md-75">
                        <span class="align-items-center d-flex gap-3">
                            <i class="fa-solid fa-magnifying-glass fs-6 d-none d-md-block"></i>
                            <input type="text" placeholder="Search article" name="query" class="border-0 fs-6 w-100 "
                                autofocus style="outline: none; border: none;">
                        </span>
                        <button type="submit"
                            class="blogs-hero-search-font-size-responsive btn btn-primary px-0 w-50 w-md-25">
                            Search
                        </button>
                    </div>
                    <div class="align-items-md-center d-flex flex-column flex-md-row gap-2 w-75">
                        <h2 class="fs-5 fw-bold">Popular Tags :</h2>
                        <div class="align-items-center border border-dark d-flex justify-content-center rounded-3">
                            <p class="fs-6 fw-normal m-0 px-3 py-1">Merc</p>
                        </div>
                        <div class="align-items-center border border-dark d-flex justify-content-center rounded-3">
                            <p class="fs-6 fw-normal m-0 px-3 py-1">User Experience</p>
                        </div>
                        <div class="align-items-center border border-dark d-flex justify-content-center rounded-3">
                            <p class="fs-6 fw-normal m-0 px-3 py-1">User Interfaces</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!-- Hero Section End -->
    <!-- Featured Section Start -->
    <style>
        @media (min-width: 768px) {
            .Featured-section {
                margin-top: -6rem;
            }
        }
    </style>
    <section class="Featured-section bg-white container rounded-4 py-0">
        <div class="row">
            <div class="col-md-6 p-0">
                <img src="{{ asset('assets/uploads/blogs/' . $blog->image) }}" alt=""
                    style="object-fit: cover; object-position: center; background-position: center;">
            </div>
            <div class="col-md-6 d-flex flex-column gap-3 py-4">
                @if ($blog->is_featured)
                    <span class="Featured badge p-2 rounded w-fit"
                        style="color: #36B37E; background: #36b37e29;">Featured</span>
                @endif
                <h2 class="fw-bold" style="color: #183B56;">{{ $blog->title }} </h2>
                <p class="fs-6 fw-light">{{ $blog->short_content }}</p>
                <div class="align-items-center d-flex justify-content-between">
                    <div class="align-items-center d-flex gap-2">
                        <img src="{{ asset('assets/uploads/blogs/' . $blog->author_image) }}" alt=""
                            class="img-fluid " style="max-width: 10%;">
                        <span class="d-flex flex-column gap-1">
                            <h6 class="fs-6 fw-normal m-0">{{ $blog->author }}</h6>
                            <span class="align-items-center d-flex gap-1">
                                <i class="fa-solid fa-circle-check" style="color: #36B37E; background: #36b37e29;"></i>
                                <p class="m-0">Verified Author</p>
                            </span>
                        </span>
                    </div>
                    <div></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
    <!-- Text Area Start -->
    <section class="container">
        <div class="d-flex flex-column gap-3">
            <h2 class="fs-2 fw-semibold text-black text-center w-fit mx-auto" style="border-bottom:2px solid #E6B110;">
                {{ $blog->title }}</h2>

            {!! $blog->content !!}
        </div>
    </section>
    <!-- Text Area End -->
    <!-- Recent Articles Section Start-->
    <section class="container py-5 pb-0">
        <div class="align-items-center row">
            <div class="col-md-6 text-start">
                <div class="d-flex flex-column gap-2">
                    <h2 class="fs-2 m-0 fw-bolder">
                        <span style="color: #E6B110;">Relevant </span> Articles
                    </h2>
                    <p class="fs-6 fw-light lh-base m-0">Here’s what we've been up to recently.</p>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <button type="button" class="btn btn-primary bg-transparent "
                    style="border: 4px solid #202D75; color:#202D75;"> View all <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Bold Section Start-->
    <div class="container blogs-popular-articales-hight-responsive ">
        <div class="align-items-center  g-2 h-100 justify-content-center row">
            <div class="col-md-12 h-100 position-relative"> <!-- Added position-relative -->
                <!-- Carousel Container -->
                <div class="container blogs-popular-articales-hight-responsive">
                    <div class="align-items-center g-2 h-100 justify-content-center row">
                        <div class="col-md-12 h-100 position-relative">
                            <!-- Carousel Container -->
                            <div id="blogCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                                <!-- Carousel Inner -->
                                <div class="carousel-inner h-100 mt-5">
                                    @foreach ($chunkedBlogs as $index => $blogsChunk)
                                        <div class="carousel-item h-100 {{ $index === 0 ? 'active' : '' }}">
                                            <div class="row h-100">
                                                @foreach ($blogsChunk as $blog)
                                                    <div class="col-md-3 h-100">
                                                        <a href="{{ route('user.blog.detail', $blog->slug) }}">
                                                            <div class="blog-img-5 d-flex flex-column h-100 justify-content-between px-4 py-3 rounded-4"
                                                                style="background-image: url('{{ asset('assets/uploads/blogs/' . $blog->image) }}'); background-size: cover;">
                                                                @if ($blog->is_featured)
                                                                    <span
                                                                        class="Featured badge bg-light px-3 py-2 rounded rounded-pill text-dark w-fit">Featured</span>
                                                                @endif
                                                                <div class="d-flex flex-column gap-3 pb-4">
                                                                    <div>
                                                                        <h2 class="fs-6 fw-semibold lh-sm text-light">
                                                                            {{ $blog->title }}</h2>
                                                                        <p class="fw-light lh-sm m-0 text-light"
                                                                            style="font-size: 0.8rem;">
                                                                            {{ $blog->short_content }}</p>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between">
                                                                        <span class="align-items-center d-flex gap-2">
                                                                            @if ($blog->author_image)
                                                                                <img src="{{ asset('storage/' . $blog->author_image) }}"
                                                                                    alt="{{ $blog->author }}"
                                                                                    class="img-fluid rounded-circle"
                                                                                    style="width: 40px; height: 40px;">
                                                                            @else
                                                                                <img src="{{ asset('assets/img/bolg-icon-logo.png') }}"
                                                                                    alt="" class="img-fluid">
                                                                            @endif
                                                                            <span>
                                                                                <p class="fw-semibold lh-base m-0 text-light"
                                                                                    style="font-size: small;">By
                                                                                    {{ $blog->author ?? 'Gargash' }}</p>
                                                                                <span>
                                                                                    <span
                                                                                        class="align-items-center d-flex gap-1"
                                                                                        style="font-size: small;">
                                                                                        <i class="fa-solid fa-circle-check"
                                                                                            style="color: #36B37E; background: #36b37e29;"></i>
                                                                                        <p class="fw-lighter m-0 text-light"
                                                                                            style="font-size: x-small;">
                                                                                            Verified</p>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                        <p class="m-0 my-auto text-secondary"
                                                                            style="font-size: small;">
                                                                            {{ $blog->created_at->format('F d, Y') }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Navigation Buttons -->
                                @if ($chunkedBlogs->count() > 1)
                                    <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Bold Section End-->


    <!-- Custom CSS for Navigation Icons -->
    <style>
        /* Custom styles for carousel navigation buttons */
        .carousel-control-prev,
        .carousel-control-next {
            width: 40px;
            /* Adjust size */
            height: 40px;
            /* Adjust size */
            background-color: #202D75;
            /* Background color */
            border-radius: 50%;
            /* Make it circular */
            top: 50%;
            /* Center vertically */
            transform: translateY(-50%);
            /* Center vertically */
            opacity: 1;
            /* Ensure it's visible */
        }

        .carousel-control-prev {
            left: -20px;
            /* Position to the left */
        }

        .carousel-control-next {
            right: -20px;
            /* Position to the right */
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: brightness(0) invert(1);
            /* Make icons white */
            width: 20px;
            /* Adjust icon size */
            height: 20px;
            /* Adjust icon size */
        }
    </style>

    <!-- sticky-icons Section Start -->

    @include('user.layouts.partials.sticky-icons')
    @include('user.layouts.partials.sticky-icons-mobile')
    <!-- sticky-icons Section End -->
    <!-- sticky-icons Section Start -->
@endsection

@section('js')
@endsection

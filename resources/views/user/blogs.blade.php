@extends('user.layouts.app')

@section('css')
@endsection
@section('meta')
 <title>Luxury Trusted Car Care Services Garage Service in Dubai UAE</title>
    <meta name="description" content="Gargash Auto Best Luxury Trusted Car Care Services Garage Service in Dubai UAE. We are offering Luxury Car Care services Dubai UAE that go beyond expectations.">
    <meta name="keywords" content="Luxury Car Care services Dubai UAE, car care services Dubai">
@endsection

@section('content')
<!-- Hero Sectin Start -->
<section class=" container-fluid overflow-visible  promotion-section-bg  ">
    <div class="container d-flex flex-column h-100 justify-content-center text-center w-100">
        <div class="align-items-center d-flex flex-column gap-5 ">
            <span class="d-flex flex-column gap-2 text-center">
                <!-- <p class="fw-bold fs-6">Delivering Luxury</p> -->
                <h1 class="fw-bolder lh-1 promotion-hero-heading-font-size">From First-Time Buyers 
                    <span class="text-warning">to Car Enthusiasts</span>  <br class="d-none d-md-block">  – We’ve Got You Covered
                </h1>
                <p class="fs-6 fw-normal text-black-50 pormotions-hero-para-responsive-font-padding m-0">Master Your
                    Machine: Unlocking Professional-Grade Knowledge with Gargash Auto</p>
            </span>

        </div>
    </div>
</section>
<!-- Hero Sectin End -->

<!-- main blog section Start -->


<section class="container pt-2 mt-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4" id="blog-container">
        @foreach ($blogs as $blog)
        <div class="index-services-box-height blog-post {{ $loop->index >= 6 ? 'd-none' : '' }}">
            <a href="{{ route('user.blog.detail', $blog->slug) }}" class="text-black w-100 h-100">
                <div
                    class="col d-flex flex-column gap-5 justify-content-center rounded-5 shadow bg-white py-4 h-100">
                    <div class="img">
                        <img src="{{ asset('assets/uploads/blogs/' . $blog->image) }}" style="max-height:350px; margin: 0px auto;" alt="">
                    </div>
                    <div class="d-flex flex-column gap-3 px-3 px-md-5 text-start">
                        <h5 class="m-0 fs-4 fw-bold text-capitalize">{{ $blog->title }}</h5>
                        <p class="fs-6 fw-lighter d-none d-md-block">{{ Str::limit($blog->description, 100) }}</p>
                        <button class="btn fs-6 fw-semibold w-100">Discover More</button>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    @if ($blogs->count() > 6)
    <div class="d-flex justify-content-center w-100 mt-4" id="load-more-container">
        <button class="btn w-md-25 w-100 fs-6 fw-semibold" id="load-more-btn">Load More</button>
    </div>
    @endif
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const blogPosts = document.querySelectorAll('.blog-post');
        const loadMoreBtn = document.getElementById('load-more-btn');
        const loadMoreContainer = document.getElementById('load-more-container');
        let visibleCount = 6; // Initial number of visible posts
        const increment = 3; // Number of posts to show each time

        // Hide all posts beyond the initial visible count
        for (let i = visibleCount; i < blogPosts.length; i++) {
            blogPosts[i].classList.add('d-none');
        }

        // Check if we need to show the "More" button
        if (blogPosts.length <= visibleCount) {
            loadMoreContainer.classList.add('d-none');
        }

        loadMoreBtn.addEventListener('click', function() {
            // Show next set of posts
            const nextPosts = Math.min(visibleCount + increment, blogPosts.length);

            for (let i = visibleCount; i < nextPosts; i++) {
                blogPosts[i].classList.remove('d-none');
            }

            visibleCount = nextPosts;

            // Hide button if all posts are visible
            if (visibleCount >= blogPosts.length) {
                loadMoreContainer.classList.add('d-none');
            }
        });
    });
</script>

<!-- main blog section End -->


<!-- sticky-icons Section Start -->
@include('user.layouts.partials.sticky-icons')


<!-- sticky-icons Section End -->
<!-- sticky-icons Section Start -->

@include('user.layouts.partials.sticky-icons-mobile')



<!-- sticky-icons Section End -->
@endsection

@section('js')
@endsection
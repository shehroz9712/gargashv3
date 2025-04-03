@extends('user.layouts.app')

@section('css')
@endsection


@section('content')


<!-- Hero Sectin Start -->
<section class=" container-fluid overflow-visible  promotion-section-bg  ">
    <div class="container d-flex flex-column h-100 justify-content-center text-center w-100">
        <div class="align-items-center d-flex flex-column gap-5 ">
            <span class="d-flex flex-column gap-2 text-center">
                <!-- <p class="fw-bold fs-6">Delivering Luxury</p> -->
                <h1 class="fw-bolder lh-1 promotion-hero-heading-font-size">Auto Intelligence
                    <span class="text-warning">Fuel Your <br class="d-none d-md-block"> Car Purchase/ Sale / Repair Decisions</span>
                </h1>
                <p class="fs-6 fw-normal text-black-50 pormotions-hero-para-responsive-font-padding m-0">Master Your Machine: Unlocking Professional-Grade Knowledge for Serious Car Enthusiasts</p>
            </span>

            <div class="align-items-center d-flex gap-4 flex-column justify-content-center w-100">
                <div class="align-items-center bg-white d-flex justify-content-between px-3 py-2 rounded-3 w-100 w-md-75">
                    <span class="align-items-center d-flex gap-3">
                        <i class="fa-solid fa-magnifying-glass fs-6 d-none d-md-block"></i>
                        <input type="text" placeholder="Search Blogs" class="border-0 fs-6 w-100 " autofocus style="outline: none; border: none;">
                    </span>
                    <a href="blog-details.php" type="button" class="blogs-hero-search-font-size-responsive btn btn-primary px-0 w-50 w-md-25">
                        Search
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Sectin End -->

<!-- main blog section Start -->

<section class="container blog-main-blog-section-height-responsive vh-75">
    <a href="./blog-1.php">
        <div class="align-items-center blogs-main-blog-section-styling blogs-main-blog-section-img  d-flex flex-column h-100 justify-content-end text-black w-100">
            <span class="bg-white pt-3 px-2 px-md-4 rounded-top text-black text-center w-md-50">
                <h5 class="fs-5 fw-bold text-start text-md-center">Mastering Pre-Purchase Car Inspection: Gargash Auto Guide</h5>
                <p class="fs-6 fw-lighter text-start text-md-center">Discover the comprehensive guide to pre-purchase car inspection at Gargash Auto, ensuring every vehicle purchase comes with confidence and clarity.</p>
            </span>
        </div>
    </a>
</section>

<section class="container pt-0">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4" id="blog-container">
        <!-- Initial 3 blog posts -->
        <div class="index-services-box-height blog-post">
            <a href="./blog-2.php" class="text-black w-100 h-100">
                <div class="col d-flex flex-column gap-5 justify-content-center rounded-5 shadow bg-white py-4 h-100">
                    <div class="img">
                        <img src="{{ asset('assets/user/img/blog-img/blog-2-hero-bg.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-3 px-3 px-md-5 text-start">
                        <h5 class="m-0 fs-4 fw-bold text-capitalize">5 Benefits of interior car Detailing, No.5 is a health reason.!</h5>
                        <button class="btn fs-6 fw-semibold w-100">Discover More</button>
                    </div>
                </div>
            </a>
        </div>

        <div class="index-services-box-height blog-post">
            <a href="./blog-3.php" class="text-black w-100 h-100">
                <div class="col d-flex flex-column gap-5 justify-content-center rounded-5 shadow bg-white py-4 h-100">
                    <div class="img">
                        <img src="{{ asset('assets/user/img/blog-img/blog-3-hero-bg.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-3 px-3 px-md-5 text-start">
                        <h5 class="m-0 fs-4 fw-bold text-capitalize">5 Benefits of interior car Detailing, No.5 is a health reason.</h5>
                        <button class="btn fs-6 fw-semibold w-100">Discover More</button>
                    </div>
                </div>
            </a>
        </div>

        <div class="index-services-box-height blog-post">
            <a href="./blog-4.php" class="text-black w-100 h-100">
                <div class="col d-flex flex-column gap-5 justify-content-center rounded-5 shadow bg-white py-4 h-100">
                    <div class="img">
                        <img src="{{ asset('assets/user/img/blog-img/blog-4-hero-bg.jpg" alt="">
                    </div>
                    <div class="d-flex flex-column gap-3 px-3 px-md-5 text-start">
                        <h5 class="m-0 fs-4 fw-bold text-capitalize">Your Handbook for Common Car Problems and Expert Solutions</h5>
                        <button class="btn fs-6 fw-semibold w-100">Discover More</button>
                    </div>
                </div>
            </a>
        </div>


        <div class="index-services-box-height blog-post">
            <a href="#" class="text-black w-100 h-100">
                <div class="col d-flex flex-column gap-5 justify-content-center rounded-5 shadow bg-white py-4 h-100">
                    <div class="img">
                        <img src="{{ asset('assets/user/img/blog-img-3.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-3 px-3 px-md-5 text-start">
                        <h5 class="m-0 fs-4 fw-bold text-capitalize"> Blog Post Title 1</h5>
                        <button class="btn fs-6 fw-semibold w-100">Discover More</button>
                    </div>
                </div>
            </a>
        </div>
        <div class="index-services-box-height blog-post">
            <a href="#" class="text-black w-100 h-100">
                <div class="col d-flex flex-column gap-5 justify-content-center rounded-5 shadow bg-white py-4 h-100">
                    <div class="img">
                        <img src="{{ asset('assets/user/img/blog-img-4.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-3 px-3 px-md-5 text-start">
                        <h5 class="m-0 fs-4 fw-bold text-capitalize"> Blog Post Title 2</h5>
                        <button class="btn fs-6 fw-semibold w-100">Discover More</button>
                    </div>
                </div>
            </a>
        </div>
        <div class="index-services-box-height blog-post">
            <a href="#" class="text-black w-100 h-100">
                <div class="col d-flex flex-column gap-5 justify-content-center rounded-5 shadow bg-white py-4 h-100">
                    <div class="img">
                        <img src="{{ asset('assets/user/img/blog-img-3.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-3 px-3 px-md-5 text-start">
                        <h5 class="m-0 fs-4 fw-bold text-capitalize"> Blog Post Title 3</h5>
                        <button class="btn fs-6 fw-semibold w-100">Discover More</button>
                    </div>
                </div>
            </a>
        </div>
        <!-- Hidden blog posts (add as many as you have) -->
        <div class="index-services-box-height blog-post d-none">
            <a href="#" class="text-black w-100 h-100">
                <div class="col d-flex flex-column gap-5 justify-content-center rounded-5 shadow bg-white py-4 h-100">
                    <div class="img">
                        <img src="{{ asset('assets/user/img/blog-img-3.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-3 px-3 px-md-5 text-start">
                        <h5 class="m-0 fs-4 fw-bold text-capitalize"> Blog Post Title 4</h5>
                        <button class="btn fs-6 fw-semibold w-100">Discover More</button>
                    </div>
                </div>
            </a>
        </div>
        <div class="index-services-box-height blog-post d-none">
            <a href="#" class="text-black w-100 h-100">
                <div class=" col d-flex flex-column gap-5 justify-content-center rounded-5 shadow bg-white py-4 h-100">
                    <div class="img">
                        <img src="{{ asset('assets/user/img/blog-img-4.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-3 px-3 px-md-5 text-start">
                        <h5 class="m-0 fs-4 fw-bold text-capitalize"> Blog Post Title 5</h5>
                        <button class="btn fs-6 fw-semibold w-100">Discover More</button>
                    </div>
                </div>
            </a>
        </div>
        <div class="index-services-box-height blog-post d-none">
            <a href="#" class="text-black w-100 h-100">
                <div class=" col d-flex flex-column gap-5 justify-content-center rounded-5 shadow bg-white py-4 h-100">
                    <div class="img">
                        <img src="{{ asset('assets/user/img/blog-img-3.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-3 px-3 px-md-5 text-start">
                        <h5 class="m-0 fs-4 fw-bold text-capitalize"> Blog Post Title 6</h5>
                        <button class="btn fs-6 fw-semibold w-100">Discover More</button>
                    </div>
                </div>
            </a>
        </div>
        <div class="index-services-box-height blog-post d-none">
            <a href="#" class="text-black w-100 h-100">
                <div class=" col d-flex flex-column gap-5 justify-content-center rounded-5 shadow bg-white py-4 h-100">
                    <div class="img">
                        <img src="{{ asset('assets/user/img/blog-img-3.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-3 px-3 px-md-5 text-start">
                        <h5 class="m-0 fs-4 fw-bold text-capitalize"> Blog Post Title 7</h5>
                        <button class="btn fs-6 fw-semibold w-100">Discover More</button>
                    </div>
                </div>
            </a>
        </div>
        <div class="index-services-box-height blog-post d-none">
            <a href="#" class="text-black w-100 h-100">
                <div class=" col d-flex flex-column gap-5 justify-content-center rounded-5 shadow bg-white py-4 h-100">
                    <div class="img">
                        <img src="{{ asset('assets/user/img/blog-img-3.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-3 px-3 px-md-5 text-start">
                        <h5 class="m-0 fs-4 fw-bold text-capitalize"> Blog Post Title 8</h5>
                        <button class="btn fs-6 fw-semibold w-100">Discover More</button>
                    </div>
                </div>
            </a>
        </div>
        <div class="index-services-box-height blog-post d-none">
            <a href="#" class="text-black w-100 h-100">
                <div class=" col d-flex flex-column gap-5 justify-content-center rounded-5 shadow bg-white py-4 h-100">
                    <div class="img">
                        <img src="{{ asset('assets/user/img/blog-img-3.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-3 px-3 px-md-5 text-start">
                        <h5 class="m-0 fs-4 fw-bold text-capitalize"> Blog Post Title 9</h5>
                        <button class="btn fs-6 fw-semibold w-100">Discover More</button>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="d-flex justify-content-center w-100 mt-4" id="load-more-container">
        <button class="btn w-md-25 w-100 fs-6 fw-semibold" id="load-more-btn">Load More</button>
    </div>
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

@extends('user.layouts.app')

@section('css')
@endsection


@section('content')
    <!-- Hero Section Start -->
    <!-- <section class=" blog-section-hero-bg container-fluid vh-100 blog-bg overflow-hidden">
          <div class="align-items-center container d-flex flex-column h-100 justify-content-center w-100">
            <div class="text-center">
              <h1 style="font-size: 78.26px;" class="fw-bold text-black">Stay Updated with <span style="color:#E6B110;">Gargash</span>
              </h1>
              <p class="fs-6 fw-normal text-dark">Your go-to luxury car care destination for expert service and insights to ensure a smooth and worry-free drive. </p>
            </div>
            <div class="align-items-center d-flex gap-4 flex-column justify-content-center w-100">
              <div class="align-items-center bg-white d-flex justify-content-between px-3 py-2 rounded-3 w-75">
                <span class="align-items-center d-flex gap-3">
                  <i class="fa-solid fa-magnifying-glass"></i>
                  <input type="text" placeholder="Search article" autofocus>
                </span>
                <a href="blog-details.php">
                  <button type="button" class="btn btn-primary"> Search </button>
                </a>
              </div>
              <div class="align-items-center d-flex gap-2 w-75">
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
        </section> -->

    <section class=" blog-section-hero-bg container-fluid vh-100 blogs-hero-height-responsive blog-bg overflow-hidden">
        <div class="align-items-center container d-flex flex-column h-100 justify-content-center w-100">
            <div class="text-center">
                <h1 class="fw-bold display-3 blogs-hero-heading-font-size-responsive text-black">Stay Updated with<span
                        style="color:#E6B110;"> Gargash</span>
                </h1>
                <p class="fs-6 lh-sm fw-normal text-dark">Your go-to luxury car care destination for expert service and
                    insights to ensure a smooth and worry-free drive. </p>
            </div>
            <div class="align-items-center d-flex gap-4 flex-column justify-content-center w-100">
                <div class="align-items-center bg-white d-flex justify-content-between px-3 py-2 rounded-3 w-100 w-md-75">
                    <span class="align-items-center d-flex gap-3">
                        <i class="fa-solid fa-magnifying-glass fs-6 d-none d-md-block"></i>
                        <input type="text" placeholder="Search article" class="border-0 fs-6 w-100 " autofocus
                            style="outline: none; border: none;">
                    </span>
                    <a href="blog-details.php" type="button"
                        class="blogs-hero-search-font-size-responsive btn btn-primary px-0 w-50 w-md-25"> 
                        Search
                    </a>
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
                <img src="assets/img/blog-img-2.png" alt=""
                    style="object-fit: cover; object-position: center; background-position: center;">
            </div>
            <div class="col-md-6 d-flex flex-column gap-3 py-4">
                <span class="Featured badge p-2 rounded w-fit"
                    style="color: #36B37E; background: #36b37e29;">Featured</span>
                <h2 class="fw-bold" style="color: #183B56;">How this Specialist Luxury car workshop came to be </h2>
                <p class="fs-6 fw-light">The story of Gargash Auto, and the man behind it - Amir Perviz</p>
                <div class="align-items-center d-flex justify-content-between">
                    <div class="align-items-center d-flex gap-2">
                        <img src="assets/img/person.png" alt="" class="img-fluid " style="max-width: 10%;">
                        <span class="d-flex flex-column gap-1">
                            <h6 class="fs-6 fw-normal m-0">Amir Perviz</h6>
                            <span class="align-items-center d-flex gap-1">
                                <i class="fa-solid fa-circle-check" style="color: #36B37E; background: #36b37e29;"></i>
                                <p class="m-0">working at Mercedes Benz.</p>
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
            <h2 class="fs-2 fw-semibold text-black text-center w-fit mx-auto" style="border-bottom:2px solid #E6B110;">How
                This Specialist Luxury Car Workshop Came to Be</h2>
            <span>
                <p>Our journey began with a passion for high-performance vehicles and a commitment to providing top-tier
                    service for luxury car owners. Recognizing the need for a dedicated workshop specializing in premium
                    automotive brands, we set out to create a space where precision, expertise, and customer satisfaction
                    come first.</p>
                <p>With years of experience in the automotive industry, our team of highly skilled professionals ensures
                    that every vehicle receives the care and attention it deserves. From routine maintenance to complex
                    repairs, we utilize advanced technology and industry-leading techniques to deliver exceptional results.
                </p>
                <p>Driven by our love for luxury cars and a vision to set new standards in automotive servicing, our
                    workshop has grown into a trusted name among enthusiasts and collectors. Our dedication to quality
                    workmanship and customer trust continues to fuel our success, making us the go-to destination for
                    specialist luxury car care.</p>
            </span>
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
                <div id="blogCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                    <!-- Carousel Inner -->
                    <div class="carousel-inner h-100 mt-5">
                        <!-- Carousel Item 1 (4 Blogs) -->
                        <div class="carousel-item active h-100">
                            <div class="row h-100">
                                <!-- Blog 1 -->
                                <div class="col-md-3 h-100">
                                    <a href="blog-details.php">
                                        <div
                                            class="blog-img-5 d-flex flex-column h-100 justify-content-between px-4 py-3 rounded-4">
                                            <span
                                                class="Featured badge bg-light px-3 py-2 rounded rounded-pill text-dark w-fit">Featured</span>
                                            <div class="d-flex flex-column gap-3 pb-4">
                                                <div>
                                                    <h2 class="fs-6 fw-semibold lh-sm text-light">How To Improve Fuel
                                                        Efficiency</h2>
                                                    <p class="fw-light lh-sm m-0 text-light" style="font-size: 0.8rem;">We
                                                        all know that a “heavy foot on the gas” means that you burn more
                                                        fuel when you drive.</p>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span class="align-items-center d-flex gap-2">
                                                        <img src="{{ asset('assets/img/bolg-icon-logo.png') }}"
                                                            alt="" class="img-fluid">
                                                        <span>
                                                            <p class="fw-semibold lh-base m-0 text-light"
                                                                style="font-size: small;">By Gargash</p>
                                                            <span>
                                                                <span class="align-items-center d-flex gap-1"
                                                                    style="font-size: small;"> <i
                                                                        class="fa-solid fa-circle-check"
                                                                        style="color: #36B37E; background: #36b37e29;"></i>
                                                                    <p class=" fw-lighter m-0 text-light"
                                                                        style="font-size: x-small;">Verified</p>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span></span>
                                                    </span>
                                                    <p class="m-0 my-auto text-secondary" style="font-size: small;">June
                                                        29, 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Blog 2 -->
                                <div class="col-md-3 h-100">
                                    <a href="blog-details.php">
                                        <div
                                            class="blog-img-5 d-flex flex-column h-100 justify-content-between px-4 py-3 rounded-4">
                                            <span
                                                class="Featured badge bg-light px-3 py-2 rounded rounded-pill text-dark w-fit">Featured</span>
                                            <div class="d-flex flex-column gap-3 pb-4">
                                                <div>
                                                    <h2 class="fs-6 fw-semibold lh-sm text-light">How To Improve Fuel
                                                        Efficiency</h2>
                                                    <p class="fw-light lh-sm m-0 text-light" style="font-size: 0.8rem;">We
                                                        all know that a “heavy foot on the gas” means that you burn more
                                                        fuel when you drive.</p>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span class="align-items-center d-flex gap-2">
                                                        <img src="{{ asset('assets/img/bolg-icon-logo.png') }}"
                                                            alt="" class="img-fluid">
                                                        <span>
                                                            <p class="fw-semibold lh-base m-0 text-light"
                                                                style="font-size: small;">By Gargash</p>
                                                            <span>
                                                                <span class="align-items-center d-flex gap-1"
                                                                    style="font-size: small;"> <i
                                                                        class="fa-solid fa-circle-check"
                                                                        style="color: #36B37E; background: #36b37e29;"></i>
                                                                    <p class=" fw-lighter m-0 text-light"
                                                                        style="font-size: x-small;">Verified</p>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span></span>
                                                    </span>
                                                    <p class="m-0 my-auto text-secondary" style="font-size: small;">June
                                                        29, 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Blog 3 -->
                                <div class="col-md-3 h-100">
                                    <a href="blog-details.php">
                                        <div
                                            class="blog-img-5 d-flex flex-column h-100 justify-content-between px-4 py-3 rounded-4">
                                            <span
                                                class="Featured badge bg-light px-3 py-2 rounded rounded-pill text-dark w-fit">Featured</span>
                                            <div class="d-flex flex-column gap-3 pb-4">
                                                <div>
                                                    <h2 class="fs-6 fw-semibold lh-sm text-light">How To Improve Fuel
                                                        Efficiency</h2>
                                                    <p class="fw-light lh-sm m-0 text-light" style="font-size: 0.8rem;">We
                                                        all know that a “heavy foot on the gas” means that you burn more
                                                        fuel when you drive.</p>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span class="align-items-center d-flex gap-2">
                                                        <img src="{{ asset('assets/img/bolg-icon-logo.png') }}"
                                                            alt="" class="img-fluid">
                                                        <span>
                                                            <p class="fw-semibold lh-base m-0 text-light"
                                                                style="font-size: small;">By Gargash</p>
                                                            <span>
                                                                <span class="align-items-center d-flex gap-1"
                                                                    style="font-size: small;"> <i
                                                                        class="fa-solid fa-circle-check"
                                                                        style="color: #36B37E; background: #36b37e29;"></i>
                                                                    <p class=" fw-lighter m-0 text-light"
                                                                        style="font-size: x-small;">Verified</p>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span></span>
                                                    </span>
                                                    <p class="m-0 my-auto text-secondary" style="font-size: small;">June
                                                        29, 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Blog 4 -->
                                <div class="col-md-3 h-100">
                                    <a href="blog-details.php">
                                        <div
                                            class="blog-img-5 d-flex flex-column h-100 justify-content-between px-4 py-3 rounded-4">
                                            <span
                                                class="Featured badge bg-light px-3 py-2 rounded rounded-pill text-dark w-fit">Featured</span>
                                            <div class="d-flex flex-column gap-3 pb-4">
                                                <div>
                                                    <h2 class="fs-6 fw-semibold lh-sm text-light">How To Improve Fuel
                                                        Efficiency</h2>
                                                    <p class="fw-light lh-sm m-0 text-light" style="font-size: 0.8rem;">We
                                                        all know that a “heavy foot on the gas” means that you burn more
                                                        fuel when you drive.</p>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span class="align-items-center d-flex gap-2">
                                                        <img src="{{ asset('assets/img/bolg-icon-logo.png') }}"
                                                            alt="" class="img-fluid">
                                                        <span>
                                                            <p class="fw-semibold lh-base m-0 text-light"
                                                                style="font-size: small;">By Gargash</p>
                                                            <span>
                                                                <span class="align-items-center d-flex gap-1"
                                                                    style="font-size: small;"> <i
                                                                        class="fa-solid fa-circle-check"
                                                                        style="color: #36B37E; background: #36b37e29;"></i>
                                                                    <p class=" fw-lighter m-0 text-light"
                                                                        style="font-size: x-small;">Verified</p>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span></span>
                                                    </span>
                                                    <p class="m-0 my-auto text-secondary" style="font-size: small;">June
                                                        29, 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel Item 2 (Next 4 Blogs) -->
                        <div class="carousel-item h-100">
                            <div class="row h-100">
                                <!-- Blog 5 -->
                                <div class="col-md-3 h-100">
                                    <div
                                        class="blog-img-5 d-flex flex-column h-100 justify-content-between px-4 py-3 rounded-4">
                                        <span
                                            class="Featured badge bg-light px-3 py-2 rounded rounded-pill text-dark w-fit">Featured</span>
                                        <div class="d-flex flex-column gap-3 pb-4">
                                            <div>
                                                <h2 class="fs-6 fw-semibold lh-sm text-light">How To Improve Fuel
                                                    Efficiency</h2>
                                                <p class="fw-light lh-sm m-0 text-light" style="font-size: 0.8rem;">We all
                                                    know that a “heavy foot on the gas” means that you burn more fuel when
                                                    you drive.</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <span class="align-items-center d-flex gap-2">
                                                    <img src="{{ asset('assets/img/bolg-icon-logo.png') }}" alt=""
                                                        class="img-fluid">
                                                    <span>
                                                        <p class="fw-semibold lh-base m-0 text-light"
                                                            style="font-size: small;">By Gargash</p>
                                                        <span>
                                                            <span class="align-items-center d-flex gap-1"
                                                                style="font-size: small;"> <i
                                                                    class="fa-solid fa-circle-check"
                                                                    style="color: #36B37E; background: #36b37e29;"></i>
                                                                <p class=" fw-lighter m-0 text-light"
                                                                    style="font-size: x-small;">Verified</p>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span></span>
                                                </span>
                                                <p class="m-0 my-auto text-secondary" style="font-size: small;">June 29,
                                                    2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 h-100">
                                    <div
                                        class="blog-img-5 d-flex flex-column h-100 justify-content-between px-4 py-3 rounded-4">
                                        <span
                                            class="Featured badge bg-light px-3 py-2 rounded rounded-pill text-dark w-fit">Featured</span>
                                        <div class="d-flex flex-column gap-3 pb-4">
                                            <div>
                                                <h2 class="fs-6 fw-semibold lh-sm text-light">How To Improve Fuel
                                                    Efficiency</h2>
                                                <p class="fw-light lh-sm m-0 text-light" style="font-size: 0.8rem;">We all
                                                    know that a “heavy foot on the gas” means that you burn more fuel when
                                                    you drive.</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <span class="align-items-center d-flex gap-2">
                                                    <img src="{{ asset('assets/img/bolg-icon-logo.png') }}" alt=""
                                                        class="img-fluid">
                                                    <span>
                                                        <p class="fw-semibold lh-base m-0 text-light"
                                                            style="font-size: small;">By Gargash</p>
                                                        <span>
                                                            <span class="align-items-center d-flex gap-1"
                                                                style="font-size: small;"> <i
                                                                    class="fa-solid fa-circle-check"
                                                                    style="color: #36B37E; background: #36b37e29;"></i>
                                                                <p class=" fw-lighter m-0 text-light"
                                                                    style="font-size: x-small;">Verified</p>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span></span>
                                                </span>
                                                <p class="m-0 my-auto text-secondary" style="font-size: small;">June 29,
                                                    2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 h-100">
                                    <div
                                        class="blog-img-5 d-flex flex-column h-100 justify-content-between px-4 py-3 rounded-4">
                                        <span
                                            class="Featured badge bg-light px-3 py-2 rounded rounded-pill text-dark w-fit">Featured</span>
                                        <div class="d-flex flex-column gap-3 pb-4">
                                            <div>
                                                <h2 class="fs-6 fw-semibold lh-sm text-light">How To Improve Fuel
                                                    Efficiency</h2>
                                                <p class="fw-light lh-sm m-0 text-light" style="font-size: 0.8rem;">We all
                                                    know that a “heavy foot on the gas” means that you burn more fuel when
                                                    you drive.</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <span class="align-items-center d-flex gap-2">
                                                    <img src="{{ asset('assets/img/bolg-icon-logo.png') }}" alt=""
                                                        class="img-fluid">
                                                    <span>
                                                        <p class="fw-semibold lh-base m-0 text-light"
                                                            style="font-size: small;">By Gargash</p>
                                                        <span>
                                                            <span class="align-items-center d-flex gap-1"
                                                                style="font-size: small;"> <i
                                                                    class="fa-solid fa-circle-check"
                                                                    style="color: #36B37E; background: #36b37e29;"></i>
                                                                <p class=" fw-lighter m-0 text-light"
                                                                    style="font-size: x-small;">Verified</p>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span></span>
                                                </span>
                                                <p class="m-0 my-auto text-secondary" style="font-size: small;">June 29,
                                                    2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 h-100">
                                    <div
                                        class="blog-img-5 d-flex flex-column h-100 justify-content-between px-4 py-3 rounded-4">
                                        <span
                                            class="Featured badge bg-light px-3 py-2 rounded rounded-pill text-dark w-fit">Featured</span>
                                        <div class="d-flex flex-column gap-3 pb-4">
                                            <div>
                                                <h2 class="fs-6 fw-semibold lh-sm text-light">How To Improve Fuel
                                                    Efficiency</h2>
                                                <p class="fw-light lh-sm m-0 text-light" style="font-size: 0.8rem;">We all
                                                    know that a “heavy foot on the gas” means that you burn more fuel when
                                                    you drive.</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <span class="align-items-center d-flex gap-2">
                                                    <img src="{{ asset('assets/img/bolg-icon-logo.png') }}" alt=""
                                                        class="img-fluid">
                                                    <span>
                                                        <p class="fw-semibold lh-base m-0 text-light"
                                                            style="font-size: small;">By Gargash</p>
                                                        <span>
                                                            <span class="align-items-center d-flex gap-1"
                                                                style="font-size: small;"> <i
                                                                    class="fa-solid fa-circle-check"
                                                                    style="color: #36B37E; background: #36b37e29;"></i>
                                                                <p class=" fw-lighter m-0 text-light"
                                                                    style="font-size: x-small;">Verified</p>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span></span>
                                                </span>
                                                <p class="m-0 my-auto text-secondary" style="font-size: small;">June 29,
                                                    2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add more blogs here -->
                            </div>
                        </div>
                    </div>
                    <!-- Custom Carousel Navigation Buttons -->
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

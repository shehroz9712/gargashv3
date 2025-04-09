@extends('user.layouts.app')

@section('css')
@endsection


@section('content')
    <!-- Hero Section Start -->

    <section
        class="all-pages-hero-height-responsive container-fluid position-relative german-Car-hero-bg overflow-visible vh-100">
        <div class="container h-100">
            <div class="row align-items-md-center h-100 ">
                <div class="col-md-6 d-flex flex-column gap-4">
                    <h1 class="display-3 fw-bolder lh-1 m-0 gap-4">
                        Precision German
                        <span style="color: #E6B110;"> Car Services </span>
                    </h1>
                    <h6 class="fw-light me-auto">Experience the pinnacle of German engineering, performance, and luxury.</h6>
                    <div class="d-flex flex-column flex-md-row flex-wrap gap-4">
                        <button class="btn fs-6 fw-bold text-dark">Our Services</button>
                        <a href="tel:+971 56 545 8853" target="_blank">
                            <button class="bg-transparent border-2 border-dark btn fs-6 fw-bold px-5 text-dark ">Call
                                Now</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 ">

                </div>
            </div>
        </div>
    </section>

    <!-- Hero Section End -->



    <!-- Partner Section Start -->

    <section class="container-fluid">
        <div class="container auto-text-bg">
            <div class="row g-4">

                <div class="col-md-6 my-auto">
                    <img src="{{ asset('assets/user/img/German-car-section-img.png') }}" alt=""
                        class="Chinese-Car-Partner-right-car mt-5">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center gap-3">
                    <h2 class="fs-1 fw-bold fw-semibold m-0">Your Ultimate German Car Destination</h2>
                    <ul class="fs-6 fw-semibold gap-1 list-group text-secondary">
                        <li><strong>Expert Repairs</strong> for All German Car Models</li>
                        <li><strong>Certified Technicians</strong> Specializing in German Engineering</li>
                        <li><strong>Genuine German Parts</strong> for Peak Performance</li>
                        <li><strong>Comprehensive Warranty</strong> on All Repairs and Services</li>
                        <li><strong>Affordable Pricing</strong> with No Hidden Costs</li>
                        <li><strong>Luxury German Cars</strong> Sales and Maintenance Experts</li>
                        <li><strong>Wide Range of Pre-Owned German Cars</strong> for Sale</li>
                        <li><strong>Brands We Serve:</strong> BMW, Mercedes-Benz, Audi, Porsche, Volkswagen, and More</li>
                        <li><strong>Your Trusted German Car Repair & Sales Hub</strong></li>
                    </ul>
                    <a href="tel:+971 56 545 8853" target="_blank">
                        <button class="btn fs-6 fw-bold w-50">Call Now</button>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Partner Section End -->
    <!-- Full Container Start -->
    <div class="auto-spa-full-container-bg container-fluid d-flex flex-column gap-4 justify-content-center px-5"
        style="height: 50vh;">
        <div class="container">
            <div class="g-3 g-md-0 row">
                <div class="col-md-7">
                    <h3 class="ceramic-full-container-top-heading-responsive fw-light text-white">Your Trusted Partner for
                    </h3>
                    <h2 class="ceramic-full-container-main-heading-responsive fw-bolder text-white">German Car Repairs &
                        Sales in Dubai</h2>

                </div>
                <div class="col-md-5 d-flex flex-column gap-3 gap-md-4 align-items-end">
                    <button type="button" class="bg-transparent border btn btn-primary text-white w-100 w-md-50 fs-6">
                        View Our Services
                    </button>
                    <button type="button" class="btn btn-primary w-100 w-md-50 fs-6">
                        Contact Us Today
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Container End -->





    <!-- sticky-icons Section Start -->
    @include('user.layouts.partials.google-review')


    <!-- sticky-icons Section End -->
    <!-- sticky-icons Section Start -->
    @include('user.layouts.partials.logo-slider')


    <!-- sticky-icons Section End -->


    <!-- sticky-icons Section Start -->
    @include('user.layouts.partials.sticky-icons')


    <!-- sticky-icons Section End -->
    <!-- sticky-icons Section Start -->

    @include('user.layouts.partials.sticky-icons-mobile')



    <!-- sticky-icons Section End -->
@endsection

@section('js')
@endsection

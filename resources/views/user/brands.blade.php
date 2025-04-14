@extends('user.layouts.app')

@section('css')
@endsection


@section('content')
<!-- Hero Section Start -->

<section
    class="all-pages-hero-height-responsive container-fluid position-relative branded-Car-hero-bg overflow-visible vh-100">
    <div class="container h-100">
        <div class="row align-items-md-center h-100 ">
            <div class="col-md-6 d-flex flex-column gap-4">
                <h1 class="display-3 fw-bolder lh-1 m-0 gap-4">Drive Branded. <span style="color: #E6B110;"> Buy, Sell, Repair.</span>
                </h1>
                <h6 class="fw-light me-auto">Expert Repairs and Sales for European Car Enthusiasts</h6>
                <div class="d-flex flex-column flex-md-row flex-wrap gap-4">
                    <button class="btn fs-6 fw-bold text-dark">Our Services</button>
                    <a href="tel:+971 56 545 8853" target="_blank"> <button
                            class="bg-transparent border-2 border-dark btn fs-6 fw-bold px-5 text-dark ">Call
                            Now</button></a>
                </div>
            </div>
            <div class="col-md-6 dark mt-5 mt-md-0">
                @include('user.layouts.partials.form')
            </div>
        </div>
    </div>
</section>
<!-- slider Start -->
@include('user.layouts.partials.thumbnail-slider-new')
<!-- slider End-->
<!-- slider Start -->
@include('user.layouts.partials.logo-slider')
<!-- slider End-->

<!-- On Desktop  -->
<section class="brand-section d-lg-block d-none section">
    <div class="container">
        <div class="brand-wrapper bg-img-cover img-img-no-repeat w-100 position-center">
            <div class="row">
                <div class="col-lg-6">
                    <a href="https://wa.me/971547935400" target="_blank">
                        <div class="text-center">
                            <h4 class="level-3 heading-font extra-color-2 mb-0">Choose Your</h4>
                            <div class="">
                                <h2 class="level-1-lg heading-font extra-color-2">
                                    <span class="letters">Brand</span>
                                </h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="https://wa.me/971547935400" target="_blank">
                        <div class="text-center">
                            <h4 class="level-3 heading-font extra-color-2 mb-0">Choose Your</h4>
                            <div class="">
                                <h2 class="level-1-lg heading-font extra-color-2">
                                    <span class="letters">Services</span>
                                </h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- On Desktop  -->
<!-- On Mobile  -->
<section class="container d-block d-lg-none vh-100 w-100 pb-0 ">
    <div class="d-flex flex-column gap-3 h-100 w-100">
        <a href="#brand-seciont" class="w-100 h-50">
            <div
                class="Choose-Your-brand-in-mobile rounded-4 align-items-center d-flex flex-column  justify-content-center h-100 w-100 brand-section-open">
                <h4 class="fw-bolder level-1 text-light pb-1 ">Choose Your</h4>
                <h2 class="fw-bolder level-1 text-light">Brand</h2>
            </div>
        </a>
        <a href="#service-seciont" class="w-100 h-50">
            <div
                class="Choose-Your-Services-in-mobile rounded-4 align-items-center d-flex flex-column justify-content-center w-100 h-100">
                <h4 class="fw-bolder level-1 text-light pb-1 ">Choose Your</h4>
                <h2 class="fw-bolder level-1 text-light">Services</h2>
            </div>
        </a>
    </div>

</section>
<!-- On Mobile  -->

<!-- offers-section Starts Here  -->
<section class="offers-section section position-relative z-index-1 overflow-visible">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10">
                <div class="offers-wrapper">
                    <div class="ml14">
                        <h2 class="level-2 heading-font text-wrapper extra-color-2">
                            <span class="letters">Experience Luxury Car Care with Unbeatable Offers</span>
                        </h2>
                    </div>
                    <p class="level-7 primary-light-font extra-color-5 col-lg-7 col-md-9">Enjoy exclusive discounts and
                        exceptional services, ensuring your elite vehicle receives the best care and expert maintenance.
                    </p>
                    <a href="https://wa.me/971547935400" target="_blank" class="btn">Get Started Today</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- offers-section Ends Here  -->

<!-- google review  -->
@include('user.layouts.partials.google-review')


<!-- Hero Section End -->
@endsection

@section('js')
@endsection
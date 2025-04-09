@extends('user.layouts.app')

@section('css')
@endsection


@section('content')
    <!-- Hero  Section Start -->
    <style>


    </style>
    <section class="container-fluid all-pages-hero-height-responsive vh-100 car-insp-bg section overflow-hidden">
        <div class="container d-flex align-items-center h-100">
            <div class="row align-items-center white">
                <div class="col-md-7">
                    <div class="experiecne-top-content">
                        <h2 class="display-3 fw-bold">
                            <span class="secondary-color">Royal Treatment for Your Luxury Car </span> Free Inspection &
                            Diagnostics
                        </h2>
                        <p class="fs-6 fw-semibold lh-sm text-secondary">Whether it’s an American, German, Japanese, or
                            exotic car, we ensure top-tier service fit for royalty.
                        </p>
                        <span class="d-flex flex-column flex-md-row gap-4">
                            <a href="tel:+971 56 545 8853" target="_blank"><button class="transparent-btn">Call
                                    Now</button></a>
                            <button class="btn fs-6 fw-semibold px-5 rounded-3 text-black">Our Services</button>
                        </span>
                    </div>
                </div>
                <div class="col-md-5 mt-5 mt-md-0">
                    <img src="{{ asset('assets/user/img/car-inspection-hero-right.png') }}" alt=""
                        style="max-width: 115%;" />
                </div>
            </div>
        </div>
    </section>

    <!-- Hero  Section End -->
    <!-- Main Car  section Start-->
    <section class="align-items-center container d-flex flex-column justify-content-center gap-3">
        <h2 class="display-6 fw-bolder lh-1 text-center">Quick Fit Car Inspection <br>
            <span class="main-color">Service Includes:</span>
        </h2>
        <p class="fs-6 fw-semibold lh-sm text-center text-secondary">Your car may have a check engine light warning or
            squeaking brake noise, vibration in the car, or engine misfire, bad AC smell or AC not working, Air Suspension
            may be down or faulty, oil leaking from the car or it may have a coolant or water leakage, Engine overheating,
            gearbox jerking, or you may need an inspection for a small or major car accident, we have covered it all in our
            360 Degree Comprehensive Inspection. Feel Free To Book A Free Car Inspection today.</p>
        <img src="{{ asset('assets/user/img/car-ins-about-section.png') }}" alt="" loading="lazy">
    </section>
    <!-- Main Car  section end-->
    <!-- Form Section Start Here -->


    <section class="car-insp-form-section-bg">
        <div class="container">
            <div class="align-items-center row white">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h1 class="auto-spa-form-heading-font-size-responsive fw-bold lh-1 mb-4 px-5 text-center">
                        Your seamless
                        <span class="main-color">Driving Experience</span> Begins Here.
                    </h1>
                    <p class="fs-6 fw-semibold m-0 text-black text-center">Book Gargash Car Services</p>
                </div>
                <div class="col-md-6">
                    @include('user.layouts.partials.form')
                </div>


            </div>
        </div>

    </section>

    <!-- Form Section End Here -->
    <!--  -->
    <div class="container mt-5">
        <h2 class="text-center text-black fs-1 fw-bolder">A Glimpse Of Our Portfolio</h2>
    </div> @include('user.layouts.partials.gateway-images')

    <!--  -->

    <!-- sticky-icons Section Start -->
    @include('user.layouts.partials.sticky-icons')


    <!-- sticky-icons Section End -->

    <!-- sticky-icons Section Start -->

    @include('user.layouts.partials.sticky-icons-mobile')



    <!-- sticky-icons Section End -->
@endsection

@section('js')
@endsection

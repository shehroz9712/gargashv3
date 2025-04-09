@extends('user.layouts.app')

@section('css')
@endsection


@section('content')
<!-- Body Content Start Here -->
<style>
    .shop-bg {
        background: url('assets/user/img/car-insp-hero-bg.png') no-repeat center center/cover;
    }

    .shop-form-section-bg {
        background: url('assets/user/img/body-shop-form-section-bg.png') no-repeat center center/cover;
    }
</style>
<!-- Hero  Section Start -->
<section class="shop-bg section">
    <div class="container">
        <div class="row align-items-center white">
            <div class="col-lg-7">
                <div class="experiecne-top-content">
                    <h2 class="display-4 fw-bold mx-auto primary-color text-start">
                        <span class="text-warning">Renowned Auto </span>Body Shop in Dubai
                    </h2>
                    <p class="fs-6 fw-light lh-sm text-secondary">Specializing in auto body, mechanical and electrical
                        repair and servicing for American, German, Japanese, Chinese, and all luxury cars. Enjoy
                        discounted prices, pickup and drop-off, and a complimentary inspection and estimate. Proud
                        finalists at Automechanika, offering top-tier service you can trust. Call us today for your
                        booking!</p>
                    <span class="d-flex flex-column flex-md-row gap-4">
                        <a href="https://wa.me/971547935400" target="_blank"><button
                                class="border-0 btn fs-6 fw-semibold rounded-3">Avail Your Discount</button></a>
                        <a href="tel:+971 56 545 8853" target="_blank"><button class="transparent-btn">Call
                                Now</button></a>
                    </span>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="{{ asset('assets/user/img/body-shop-hero-2.jpg') }}" alt="" style="mix-blend-mode: multiply;"/>
            </div>
        </div>
    </div>
</section>
<!-- Hero  Section End -->
<!-- Form Section Start Here -->
<section class="container-fluid shop-form-section-bg overflow-visible body-shop-hero-height-responsive vh-100">
    <div class="container h-100 w-100">
        <div class="align-items-center g-2 h-100 justify-content-center row w-100">
            <div class="col-md-6 px-0 text-center">
                <h2 class="fw-bolder text-black lh-1 responsive-heading-3">Your Effortless <span
                        class="main-color">Driving Experience </span> Starts Here.</h2>
                <p>Schedule your appointment at Gargash Auto today!</p>
            </div>
            <div class="col-md-6 white"> @include('user.layouts.partials.form') </div>
        </div>
    </div>
</section>
<!-- Form Section End Here -->
<!-- Content section start -->
<section class="container-fluid">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-5">
            <img src="{{ asset('assets/user/img/auto-body-services.png') }}" alt="" class="img-fluid"
                style="margin-left: -1rem;">
        </div>
        <div class="col-md-5 d-flex flex-column gap-2">
            <span>
                <h2 class="fs-1 fw-semibold lh-sm text-dark">Auto Body Services in Dubai</h2>
            </span>
            <span>
                <p class="fs-6 fw-light lh-sm text-secondary">Looking for comprehensive auto body services in Dubai?
                    You've come to the right place. We provide expert services including accident repair, chassis
                    repair, auto detailing, and more.</p>
                <h3 class="fs-5 fw-semibold">Our services include:</h3>
            </span>
            <span class="d-flex flex-column flex-md-row gap-1 gap-md-5">
                <ul class="fs-6 fw-light list-group text-secondary">
                    <li>Accident/Collision Repair</li>
                    <li>Car Painting Service</li>
                    <li>Scratch Removal & Repaint</li>
                    <li>Detailing, Polishing & Ceramic Coating</li>
                    <li>PPF (Paint Protection Film)</li>
                    <li>Windscreen Repair/Replacement</li>
                    <li>Paintless Dent Repair</li>
                    <li>Car Tinting</li>
                    <li>Under Coating & Rust Proofing</li>
                    <li>Interior Repair</li>
                    <li>Convertible Roof Repair</li>
                    <li>Chassis Repair</li>
                </ul>
                <ul class="fs-6 fw-light list-group text-secondary">
                    <li>Calipers Painting</li>
                    <li>Rim Painting Service</li>
                    <li>Dent Removal</li>
                    <li>Car Wrapping Service</li>
                    <li>Headlights Restoration</li>
                    <li>Hail Damage Repair</li>
                    <li>Upholstery Service</li>
                    <li>Dashboard Repair</li>
                    <li>Dashboard Repair</li>
                    <li>Sand Blasting</li>
                    <li>Leather Repair & Restoration</li>
                    <li>Sunroof Repair</li>
                </ul>
            </span>
            <h5 class="fs-6 fw-normal">Let us take care of your vehicle with our expert services, ensuring it stays in
                perfect condition.</h5>
        </div>
        <div class="col-md-2 d-none d-md-block">
            <img src="{{ asset('assets/user/img/auto-body-services-tree.png') }}" alt="" class="img-fluid"
                style="margin-right: 1rem;">
        </div>
    </div>
</section>
<!-- gateway-section Start Here  -->
@include('user.layouts.partials.gateway')
<!-- gateway-section Ends Here  -->



<!-- Logo Slider Start -->
@include('user.layouts.partials.logo-slider')

<!-- Logo Slider Start -->
<!-- sticky-icons Section Start -->
@include('user.layouts.partials.sticky-icons')


<!-- sticky-icons Section Start -->

@include('user.layouts.partials.sticky-icons-mobile')



<!-- sticky-icons Section End -->

<!-- sticky-icons Section End -->
@endsection

@section('js')
@endsection
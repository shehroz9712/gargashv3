@extends('user.layouts.app')
@section('css')
@endsection@section('content')

@section('meta')
    <title>Electric Car Repair & Maintenance Services Dubai UAE </title>
    <meta name="description" content=" Electric Car Repair & Maintenance Services Dubai UAE. Every service we offer reflects our commitment to excellence, customer satisfaction, and long-term performance. ">
    <meta name="keywords" content="Electric Car Repair Dubai,Electric Car Repair Services,Electric Car Repair UAE,Electric Car Maintenance Dubai,Electric Car Maintenance UAE">    
@endsection
<style>
    .service-card {
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
    }

    .service-card:hover {
        transform: translateY(-5px);
    }

    .service-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .tip-card {
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        text-align: center;
        padding: 20px;
    }

    .tip-card:hover {
        transform: translateY(-5px);
    }

    .tip-card img {
        width: 80%;
        margin-bottom: 15px;
    }

    .tip-title {
        font-weight: bold;
        font-size: 18px;
    }

    .tip-highlight {
        color: #F5A623;
        /* Yellow Highlight */
    }

    .form-bg-ew {
        position: relative;
        overflow: hidden;
        /* Ensure scaling effect doesn't overflow */
    }

    .form-bg-ew::before {
        content: "";
        position: absolute;
        top: 10%;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('assets/img/image 788.png') no-repeat center center/cover;
        transform: scale(0.9);
        transform-origin: center;
        z-index: -1;
    }
</style>
<!-- Body Content Start Here -->

<!-- Electric Hero Section Start -->

<section class="container-fluid all-pages-hero-height-responsive vh-100 electric-car-bg section overflow-hidden">
    <div class="container d-flex align-items-center h-100">
        <div class="row align-items-center white">
            <div class="col-md-6">
                <div class="experiecne-top-content">
                    <h2 class="display-3 electric-repair-hero-heading-font-size-responsive fw-bold">
                        <span class="secondary-color ">Safeguard Your Car's Electricals </span> With Our Expertise
                    </h2>
                    <p class="fs-6 fw-semibold lh-sm text-secondary">Delivering exceptional car care services for your peace of mind on every mile
                    </p>
                    <span class="d-flex flex-column flex-md-row gap-4">
                        <a href="tel:+971 56 545 8853" target="_blank"><button class="btn fw-semibold rounded-3 text-black fs-6">Call Now</button></a>

                    </span>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/user/img/coche_electrico2 1.png') }}" alt="" style="max-width: 155%;" />
            </div>
        </div>
    </div>
</section>
<!-- Electric Hero Section End -->

<!-- Electric About Section start -->
<section class="section container-fluid  form-bg-ew">
    <div class="container d-flex flex-column h-100 justify-content-center text-center w-100">
        <div class="row">
        <div class="col-md-6">
            <h1 class="fw-bolder display-4 electric-repair-About-heading-font-size-responsive">Dealership Quality Services At 
            <span class="text-warning">Competitive Prices!</span>
            </h1>
            <h4 class="fs-4 fw-bold">Book Gargash Car Workshop</h4>
        </div>
        <div class="col-md-6">
        <div class="contact-form-section">
            <div class="row align-items-center justify-content-center dark">
                    @include('user.layouts.partials.form')
            </div>
        </div>
        </div>
        </div>
    </div>

</section>
<!-- Electric About Section End -->

<!-- Luxury Section Start -->

<section>
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card service-card">
                    <img src="{{ asset('assets/user/img/image-1.png') }}" alt="Engine Control Unit">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Engine Control Unit</h5>
                        <p class="text-muted">Unleash your car’s peak performance as our certified technicians ensure
                            your ignition modules and all electrical features.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card">
                    <img src="{{ asset('assets/user/img/image-2.png') }}" alt="Programming">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Programming</h5>
                        <p class="text-muted">We have the technology, expertise and experience to keep the programming
                            system of your car updated and worry-free.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card">
                    <img src="{{ asset('assets/user/img/image-3.png') }}" alt="Navigation Update">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Navigation Update</h5>
                        <p class="text-muted">We provide our customers with the finest navigation experience through
                            accurate updates.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card">
                    <img src="{{ asset('assets/user/img/image-4.png') }}" alt="AC System Check">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">AC System Check</h5>
                        <p class="text-muted">Our experts will ensure your car’s AC helps you beat the heat
                            and ensures your comfort.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card">
                    <img src="{{ asset('assets/user/img/image-5.png') }}" alt="Central Locking System Check">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Central Locking System Check</h5>
                        <p class="text-muted">We diagnose with precision so you can enjoy a secure and hassle-free
                            drive.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card">
                    <img src="{{ asset('assets/user/img/image-784.jpg') }}" alt="Ignition System Check">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Battery System Check</h5>
                        <p class="text-muted">Our certified technicians inspect and repair all the components related to
                            the electric system.</p>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Luxury Section End -->
@include('user.layouts.partials.gateway-images') @include('user.layouts.partials.google-review') @include('user.layouts.partials.sticky-icons') @include('user.layouts.partials.sticky-icons-mobile')

@endsection

@section('js')
@endsection
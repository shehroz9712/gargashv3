@extends('user.layouts.app')

@section('css')
@endsection
@section('content')
@section('meta')
 <title>German Car Sales & Repairs Services in Dubai UAE</title>
    <meta name="description" content="German Car Sales & Repairs Services in Dubai UAE. Enjoy affordable pricing with no hidden costs, alongside our extensive selection of pre-owned German cars for sale.">
    <meta name="keywords" content="German Car Services Dubai,German Car Repairs Dubai,German Car Sales Dubai">
@endsection
    <!-- Hero Section Start -->

    <section
        class="all-pages-hero-height-responsive container-fluid position-relative german-Car-hero-bg overflow-visible vh-100">
        <div class="container h-100">
            <div class="row align-items-md-center h-100 ">
                <div class="col-md-6 d-flex flex-column gap-4">
                    <h1 class="display-3 fw-bolder lh-1 m-0 gap-4">
                        Unleashing the Full Potential of 
                        <span style="color: #E6B110;"> German Engineering and Luxury </span>
                    </h1>
                    <h6 class="fw-light me-auto">At Gargash Auto, we specialize in providing expert care for your German luxury vehicle, ensuring top-tier performance, precision, and unrivaled craftsmanship with every service.
</h6>
                   <span class="d-flex flex-column flex-md-row gap-4"> <a href="https://wa.me/971547935400" target="_blank"><button class="btn fw-semibold rounded-3 text-black fs-6">Book Your Premium Service Today!</button></a> </span>
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
                    <h2 class="fs-1 fw-bold fw-semibold m-0">Expert Repairs for All German Car Models</h2>
                    <p>At Gargash Auto, we offer specialized services for all German car brands, ensuring expert repairs and maintenance with certified technicians who understand the intricacies of German engineering. We use only genuine parts to guarantee peak performance, and all repairs come with a comprehensive warranty for your peace of mind. Enjoy affordable pricing with no hidden costs, alongside our extensive selection of pre-owned German cars for sale. Brands we serve include BMW, Mercedes-Benz, Audi, Porsche, and Volkswagen, among others. Trust us as your go-to hub for German car repairs, sales, and maintenance.</p>
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
                    <h3 class="ceramic-full-container-top-heading-responsive fw-light text-white"> Specialized German Auto Solutions in Dubai
                    </h3>
                    <h2 class="ceramic-full-container-main-heading-responsive fw-bolder text-white"> – Repairs & Sales Under One Roof
</h2>

                </div>
                <div class="col-md-5 d-flex flex-column gap-3 gap-md-4 align-items-end">
              
                   <span class="d-flex flex-column flex-md-row gap-4"> <a href="https://wa.me/971547935400" target="_blank"><button class="btn fw-semibold rounded-3 text-black fs-6">Book Your Premium Auto Spa Today!</button></a> </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Container End -->




@include('user.layouts.partials.logo-slider')

@include('user.layouts.partials.google-review')
    @include('user.layouts.partials.sticky-icons')


    <!-- sticky-icons Section End -->
    <!-- sticky-icons Section Start -->

    @include('user.layouts.partials.sticky-icons-mobile')



    <!-- sticky-icons Section End -->
@endsection

@section('js')
@endsection

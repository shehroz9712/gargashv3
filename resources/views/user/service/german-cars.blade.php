@extends('user.layouts.app') @section('css') @endsection @section('content')
<!-- Hero Section Start -->

@section('meta')
    <title> German Car Sales & Repairs Services in Dubai UAE</title>
    <meta name="description" content=" German Car Sales & Repairs Services in Dubai UAE. Enjoy affordable pricing with no hidden costs, alongside our extensive selection of pre-owned German cars for sale.">
    <meta name="keywords" content="German Car Services Dubai,German Car Repairs Dubai, German Car Sales Dubai, ">    
@endsection

<section class="all-pages-hero-height-responsive container-fluid position-relative german-Car-hero-bg overflow-visible vh-100">
    <div class="container h-100">
        <div class="row align-items-md-center h-100 ">
            <div class="col-md-12 d-flex flex-column gap-4">
                <center>
                    <h1 class="display-3 fw-bolder lh-1 m-0 gap-4 align-content-center">
                    Unleashing the Full Potential of
                    <span style="color: #E6B110;"> German Engineering and Luxury </span></h1>
                    <br/>
                    <h6 class="me-auto align-content-center">At Gargash Auto, we specialize in providing expert care for your German luxury vehicle, ensuring top-tier performance, precision, and unrivaled craftsmanship with every service.</h6>
                    <br/>
                    <span class="d-flex flex-column flex-md-row gap-4 align-content-center"> <a href="https://wa.me/971547935400" target="_blank"><button class="btn fw-semibold align-content-center rounded-3 text-black fs-6 align-content-center">Book Our Premium Service Today!</button></a> </span>
                </center>
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
                <img src="{{ asset('assets/user/img/German-car-section-img.png') }}" alt="" class="Chinese-Car-Partner-right-car mt-5">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center gap-3">
                <h2 class="fs-1 fw-bold fw-semibold m-0">Expert Repairs for All German Car Models</h2>
                <p>At Gargash Auto, we offer specialized services for all German car brands, ensuring expert repairs and maintenance with certified technicians who understand the intricacies of German engineering. We use only genuine parts to guarantee peak
                    performance, and all repairs come with a comprehensive warranty for your peace of mind. Enjoy affordable pricing with no hidden costs, alongside our extensive selection of pre-owned German cars for sale. Brands we serve include BMW,
                    Mercedes-Benz, Audi, Porsche, and Volkswagen, among others. Trust us as your go-to hub for German car repairs, sales, and maintenance.</p>
                <a href="https://wa.me/971547935400" target="_blank">
                    <button class="btn fs-6 fw-bold w-50">Call Now</button>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Partner Section End -->
<!-- Full Container Start -->
<div class="auto-spa-full-container-bg container-fluid d-flex flex-column gap-4 justify-content-center px-5" style="height: 50vh;">
    <div class="container">
        <div class="g-3 g-md-0 row">
            <div class="col-md-7">
                <h2 class="ceramic-full-container-top-heading-responsive fw-light text-white"> Specialized German Auto Solutions in Dubai
                <br/> – Repairs & Sales Under One Roof
                </h2>
                <p style="color:white">we specialize in premium maintenance, repair, and performance upgrades for German luxury vehicles in Dubai. Whether you drive a Mercedes-Benz, BMW, Audi, Porsche, or Volkswagen, our factory-trained technicians use genuine OEM parts and advanced diagnostics to ensure your car performs at its best.</p>

            </div>
            <div class="col-md-5 d-flex flex-column gap-3 gap-md-4 align-items-end">
                <span class="d-flex flex-column flex-md-row gap-4"> <a href="https://wa.me/971547935400" target="_blank"><button class="btn fw-semibold rounded-3  fs-6" style="margin:10px;">Book Our Premium Service!</button></a> </span>
            </div>
        </div>
    </div>
</div>
@include('user.layouts.partials.logo-slider') @include('user.layouts.partials.google-review') @include('user.layouts.partials.sticky-icons')@include('user.layouts.partials.sticky-icons-mobile')@endsection @section('js') @endsection
@extends('user.layouts.app')

@section('css')
@endsection
@section('meta')
    <title>Premium European Car Sales & Repair Experts in Dubai UAE </title>
    <meta name="description" content=" Premium European Car Sales & Repair Experts in Dubai UAE. we specialize in offering expert services for a wide range of luxury European car brands.">
    <meta name="keywords" content="Premium European Car Experts Dubai,European Car Repair Dubai,European Car Sales Experts Dubai,European Car Experts Dubai ">    
@endsection

@section('content')
<!-- Hero Section Start -->

<section
    class="all-pages-hero-height-responsive container-fluid position-relative european-Car-hero-bg overflow-visible vh-100">
    <div class="container h-100">
        <div class="row align-items-md-center h-100 ">
            <div class="col-md-6 d-flex flex-column gap-4">
                <h1 class="display-3 fw-bolder lh-1 m-0 gap-4"><span style="background:rgba(230,177,16,.6) ">Premium European </span>
                    Car Experts Dubai</h1>
                <p class=" me-auto" style="color:#000">At Gargash Auto, we specialize in providing top-tier care for European vehicles. As European Car Experts Dubai, we offer expert repairs, maintenance, and unparalleled service tailored to meet the needs of high-end European brands.
                </p>
                <div class="d-flex flex-column flex-md-row flex-wrap gap-4">
                    <a href="https://wa.me/971547935400"><button class="btn fs-6 fw-bold text-dark">Book Your Service Today!!</button></a>
                </div>
            </div>
            <div class="col-md-6 dark mt-5 mt-md-0">
                @include('user.layouts.partials.form')
            </div>
        </div>
    </div>
</section>

<!-- Hero Section End -->



<!-- Partner Section Start -->

<section class="container-fluid">
    <div class="container auto-text-bg">
        <div class="row g-4">
<div class="col-md-6 d-flex flex-column justify-content-center gap-3">
                <h2 class="fs-1 fw-bold fw-semibold m-0">Your Premium European Car Experts Dubai</h2>
                <p>At Gargash Auto, we are proud to be the Premium European Car Experts Dubai, offering specialized repair, maintenance, and sales services for a wide range of European car brands. Our team of certified technicians has years of experience working on high-end vehicles, ensuring that each car receives expert care tailored to its specific needs. Whether it’s a European Car Repair Dubai service or routine maintenance, we use only genuine, high-quality parts to keep your car running at its best and to maintain its performance for the long term. <br />We also offer a wide selection of pre-owned European cars for sale, providing you with the opportunity to own a luxury vehicle from renowned brands like BMW, Mercedes, Audi, Porsche, Jaguar, and Volvo, all at competitive prices. Each vehicle in our collection is carefully inspected to meet the highest standards of quality, ensuring you get a reliable and high-performance car.
                    <br />At Gargash Auto, we believe in offering European Car Experts Dubai services with transparency and integrity. We provide clear, upfront pricing with no hidden costs, so you can trust that you are getting the best value for your investment. Our comprehensive warranty on repairs and services gives you peace of mind, knowing that your European car is in expert hands. Whether you need professional repairs, maintenance, or are interested in purchasing a pre-owned European car, we are your go-to destination for all things European automotive in Dubai.
                </p>
            </div>
            <div class="col-md-6 my-auto">
                <img src="{{ asset('assets/user/img/CarImg2.png') }}" alt=""
                    class="Chinese-Car-Partner-right-car mt-5">
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
                <h3 class="ceramic-full-container-top-heading-responsive fw-light text-white">Get in Touch with Our</h3>
                <h2 class="ceramic-full-container-main-heading-responsive fw-bolder text-white">European Car Experts in
                    Dubai</h2>
                <p style="color:white">Reach out today to schedule your service, repair, or consultation with our skilled European Car Experts Dubai. Our team is here to provide expert care and guidance for your luxury European vehicle.
                </p>

            </div>
            <div class="col-md-5 d-flex flex-column gap-3 gap-md-4" style="margin:auto;">
               <a href="https://wa.me/971547935400" target="_blank" class="d-flex justify-content-center w-100">
                <button type="button" class="btn btn-primary fs-6 fw-semibold w-75 promotions-blog-btn-font-size "> Book your service </button>
              </a>
            </div>
        </div>
    </div>
</div>
<!-- Full Container End -->


<!-- sticky-icons Section Start -->
@include('user.layouts.partials.logo-slider')


<!-- sticky-icons Section End -->
<!-- sticky-icons Section Start -->
@include('user.layouts.partials.google-review')


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
@extends('user.layouts.app') @section('meta')
<title>Luxury Trusted Car Care Services Garage Service in Dubai UAE</title>
<meta name="description" content="Gargash Auto Best Luxury Trusted Car Care Services Garage Service in Dubai UAE. We are offering Luxury Car Care services Dubai UAE that go beyond expectations.">
<meta name="keywords" content="Luxury Car Care services Dubai UAE, car care services Dubai"> @endsection @section('css')
<style>
    .logo-item {
        opacity: 0.5;
        transition: opacity 0.3s ease-in-out;
        height: 100px;
    }

    /* //////////////////////////////////////////// */



    @media (max-width:786px) {
        .logo-item {
            opacity: 0.5;
            transition: opacity 0.3s ease-in-out;
            height: auto;
            width: 40%;
        }
    }

    @media (max-width:425px) {
        .logo-item {
            opacity: 0.5;
            transition: opacity 0.3s ease-in-out;
            height: 2.5rem;
            width: 60%;

        }
    }



    /* //////////////////////////////////////////// */


    .slick-list {
        height: 100% !important;
    }

    .slick-current .logo-item {
        opacity: 1;
    }

    .slick-prev,
    .slick-next {
        background: transparent;
        border: none;
        font-size: 2rem;
        color: #333;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    .slick-prev {
        left: -50px;
    }

    .slick-next {
        right: -50px;
    }

    .index-hero-right-services-box-bg:hover .bg-transparent.card-body {
        background-color: white !important;
        border-radius: 7px;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        box-shadow: 0px 3px 4px grey;
        width: 100%;
    }

    /* Hide text by default */
    .index-hero-right-services-box-bg .card-title {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    /* Show text on hover */
    .index-hero-right-services-box-bg:hover .card-title {
        opacity: 1;
    }

    /* Hide background at all times */
    .index-hero-right-services-box-bg {
        background: #eee;
    }

    /* Optional: Add hover effect for better UX */
    .index-hero-right-services-box-shadow-animation:hover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        transform: translateY(-5px);
        transition: all 0.3s ease;

    }

    .index-service-img-width-height-responsive::after {
        border-radius: 7px;
        box-shadow: 0px -4px 4px grey;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0;
    }
</style>
@endsection @section('content')
<!-- Banner Start Here -->


<section class="banner-section">
    <div class="container">
        <div class="banner-start-here">
            <div class="banner-top-content text-center">
                <h1 class="level-1 heading-font primary-color" style="font-weight:700;">
                    <span class="secondary-color d-block"> Experience Premium Car Care with 
 </span> 20+ Years of Expertise
                </h1>
                <span class="level-8 primary-regular-font dark-color">Expert Care for All German & European Brands</span>
            </div>
            <div class="row pt-4">
                <div class="col-lg-6 my-auto">
                    <div class="banner-content-here pt-2 wow animate__animated animate__fadeInDown">
                        <figure class="position-relative">
                            <img src="{{ asset('assets/user/img/banner-img.png') }}" alt="" class="img-fluid">
                            <div class="">
                                <div class="banner-img-content d-flex flex-column gap-1 gap-md-4 left-0 mt-md-0 p-0 position-absolute pt-3 pt-md-5 right-0 text-center top-0">
                                    <h4 class="level-1 heading-font extra-color-2 m-0">
                                        <span class="secondary-color d-block"> Brands  </span> we specialized In
                                    </h4>
                                    <a href="https://wa.me/971547935400" target="_blank" class="btn fs-6 mx-auto w-md-50 w-75">Unlock Your Discount!</a>
                                </div>
                                <div class="banner-car-wrap position-absolute bottom-0">
                                    <figure>
                                        <img src="{{ asset('assets/user/img/banner-car-img.png') }}" alt="" class="img-fluid">
                                    </figure>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="d-flex">
                        <div class="bg-white-overlay h-75 position-relative w-100 shadow rounded-2">
                            <div class="d-flex image-container justify-content-evenly mt-5 mt-md-0 p-md-3 px-md-5 row row-cols-3 row-cols-md-5 w-100 " style="row-gap: 3rem; overflow-y: scroll; height:500px">
                                <img src="{{ asset('assets/user/img/shop-logo-8.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-14.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-9.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-4.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/Carlogo2.png') }}" alt="" class="" style="width:180px; z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-6.png') }}" alt="" class="h-25 w-25" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-7.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-13.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-3.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-5.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;"> 
                                <img src="{{ asset('assets/user/img/shop-logo-1.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-2.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-10.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-11.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-12.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-15.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-16.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-17.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-18.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-19.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-20.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-21.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-22.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-23.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-24.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                                <img src="{{ asset('assets/user/img/shop-logo-25.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End Here -->


<!-- About us Section Start  -->
<section class=" container">
    <div class="align-items-center row">
        <div class="col-lg-6">
            <h2 class="fs-2 fw-semibold">About Us</h2>
            <p class="fs-6 fw-normal lh-sm text-justify">
                Gargash Auto was founded by a team of highly experienced automotive professionals committed to offering Luxury Car Care services Dubai UAE that go beyond expectations. With a presence in both Dubai and Sharjah, we have established ourselves as a trusted
                name for car owners seeking premium service. Our mission is to provide a transparent and customer-friendly experience that addresses common frustrations found in other repair shops, ensuring every visit is a seamless one.
            </p>
            <p class="fs-6 fw-normal lh-sm"> We specialize in car care services Dubai, focusing on delivering expert maintenance and repairs for the finest German and European brands. From Mercedes to BMW, Audi to Porsche, our skilled technicians bring unmatched expertise to every service.
                At Gargash Auto, attention to detail and precision are our top priorities, and we take immense pride in offering tailored solutions for each vehicle.
            </p>
            <p class="fs-6 fw-normal lh-sm">Our commitment to quality service doesn’t stop there—we ensure that you receive the highest level of care at the most competitive prices, making exceptional Luxury Car Care services Dubai UAE accessible to all luxury vehicle owners. At Gargash
                Auto, your satisfaction is our top priority, and we are dedicated to keeping your car running smoothly for years to come.</p>
            <p class="fs-6 fw-normal lh-sm">For inquiries or suggestions, feel free to contact us anytime.
            </p>

            <a href="/about" class="btn fs-6 fw-semibold rounded-3"> Read More </a>
        </div>
        <div class="col-lg-6 mt-5 mt-md-0">
            <div class="about-text-bottom">
                <img src="{{ asset('assets/user/img/about-us-section-right.png') }}" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- About us Section End  -->

<!-- gateway-section Start Here  -->

{{-- @include('user.layouts.partials.gateway') --}}
<!-- gateway-section Ends Here  -->


<!-- discover-section Starts Here  -->
@include('user.layouts.partials.thumbnail-slider-old')


<!-- discover-section Ends Here  -->


<!-- offers-section Starts Here  -->
<section class="offers-section section position-relative z-index-1 overflow-visible">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10">
                <div class="offers-wrapper">
                    <div class="ml14">
                        <h2 class="level-2 heading-font text-wrapper extra-color-2">
                            <span>Luxury Car Care with Exclusive Offers</span>
                        </h2>
                    </div>
                    <p class="level-7 primary-light-font extra-color-5 col-lg-7 col-md-9">Get unbeatable deals and premium car care services Dubai to keep your elite German and European vehicle in top condition.
                    </p>
                    <a href="https://wa.me/971547935400" target="_blank" class="btn">Get Started Today</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- brand-section Ends Here  -->
<!-- process-section Starts Here  -->
<section class="">
    <div class="container">
        <div class="process-top-content text-center mb-5">
            <div class="ml14">
                <h2 class="level-1 heading-font text-wrapper dark-color">
                    <span>Luxury In and Out </span>
                </h2>
                <p class="level-7 primary-regular-font dark-color col-lg-9 mx-auto">Our expert Luxury Car Care services Dubai UAE combine advanced tools, modern techniques, and skilled technicians. With our 4-step car repair model, we ensure comfort, convenience, and premium care for every German and European car owner.</p>
                <a href="https://wa.me/971547935400" target="_blank" class="btn">Speak to an expert <span
                        class="ps-2">
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="process-wrapper position-relative mt-5">
            <div class="process-wrap position-relative">
                <div class="align-items-md-center align-items-md-center d-flex flex-sm-row gap-3 gap-sm-0 justify-content-between pb-sm-5">
                    <div class="process-card-wrapper process-card1 extra-bg-2 radius-29 position-absolute">
                        <div class="process-card">
                            <figure>
                                <img src="{{ asset('assets/user/img/process-icon1.png') }}" alt="" class="inmg-fluid">
                            </figure>
                            <div class="process-text">
                                <h5 class="level-6 heading-font secondary-color">BOOK A SERVICE</h5>
                                <p class="level-9 primary-regular-font dark-color">Call us to book your service
                                    <br> and enjoy a free inspection.</p>
                            </div>
                        </div>
                    </div>
                    <div class="process-card-wrapper process-card2 extra-bg-2 radius-29 position-absolute right-0">
                        <div class="process-card">
                            <figure>
                                <img src="{{ asset('assets/user/img/process-icon2.png') }}" alt="" class="inmg-fluid">
                            </figure>
                            <div class="process-text">
                                <h5 class="level-6 heading-font secondary-color">HASSLE FREE PICKUP</h5>
                                <p class="level-9 primary-regular-font dark-color">We’ll pick up your car from your
                                    <br> home, office, or shopping mall.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="text-center">
                    <img src="{{ asset('assets/user/img/process-car-img.png') }}" alt="" class="img-fluid">
                </figure>
                <div class="d-flex flex-sm-row  gap-sm-0 gap-3 align-items-center justify-content-between pb-sm-5">
                    <div class="process-card-wrapper process-card3 extra-bg-2 radius-29 position-absolute">
                        <div class="process-card">
                            <figure>
                                <img src="{{ asset('assets/user/img/process-icon3.png') }}" alt="" class="inmg-fluid">
                            </figure>
                            <div class="process-text">
                                <h5 class="level-6 heading-font secondary-color">REPAIR & FIX</h5>
                                <p class="level-9 primary-regular-font dark-color">We repair your car, perform road
                                    <br> tests, and ensure quality control.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="process-card-wrapper process-card4 extra-bg-2 radius-29 position-absolute right-0">
                        <div class="process-card">
                            <figure>
                                <img src="{{ asset('assets/user/img/process-icon4.png') }}" alt="" class="inmg-fluid">
                            </figure>
                            <div class="process-text">
                                <h5 class="level-6 heading-font secondary-color">SMOOTH RETURN</h5>
                                <p class="level-9 primary-regular-font dark-color">We wash and clean your car inside
                                    <br> and out before delivering it back to you!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <br />
            <br />
        </div>
    </div>
</section>
<!-- process-section Ends Here  -->

@include('user.layouts.partials.google-review')
@include('user.layouts.partials.sticky-icons')
@include('user.layouts.partials.sticky-icons-mobile')
@endsection @section('js') @endsection
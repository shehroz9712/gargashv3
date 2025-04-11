@extends('user.layouts.app')

@section('css')
    <style>
        .logo-item {
            opacity: 0.5;
            transition: opacity 0.3s ease-in-out;
            height: 100px;
        }

        /* //////////////////////////////////////////// */



        @media (max-width:786px) {
            .logo-item {
                /* opacity: 0.5;
                                                                        transition: opacity 0.3s ease-in-out;
                                                                        height: 3rem;
                                                                        width: 60%; */
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
@endsection


@section('content')
    <!-- Banner Start Here -->


    <section class="banner-section">
        <div class="container">
            <div class="banner-start-here">
                <div class="banner-top-content text-center">
                    <h1 class="level-1 heading-font primary-color" style="font-weight:700;">
                        <span class="secondary-color d-block"> Transform Your Car Care
                            with </span> 20+ Years of Expertise
                    </h1>
                    <span class="level-8 primary-regular-font dark-color">Adding a Touch of Luxury to Every Journey</span>
                </div>
                <div class="row pt-4">
                    <div class="col-lg-6 my-auto">
                        <div class="banner-content-here pt-2 wow animate__animated animate__fadeInDown">
                            <figure class="position-relative">
                                <img src="{{ asset('assets/user/img/banner-img.png') }}" alt="" class="img-fluid">
                                <div class="">
                                    <div
                                        class="banner-img-content d-flex flex-column gap-1 gap-md-4 left-0 mt-md-0 p-0 position-absolute pt-3 pt-md-5 right-0 text-center top-0">
                                        <h2 class="level-1 heading-font extra-color-2 m-0">
                                            <span class="secondary-color d-block"> Claim Our </span> Latest Offer
                                        </h2>
                                        <a href="https://wa.me/971547935400" target="_blank"
                                            class="btn fs-6 mx-auto w-md-50 w-75">Avail Your Discount</a>
                                    </div>
                                    <div class="banner-car-wrap position-absolute bottom-0">
                                        <figure>
                                            <img src="{{ asset('assets/user/img/banner-car-img.png') }}" alt=""
                                                class="img-fluid">
                                        </figure>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-md-5">
                        <div class="px-3 row row-cols-2 row-cols-md-3">
                            <div class="card bg-transparent index-hero-right-services-box-animation ">
                                <a href="{{ route('user.servicesDetail', ['slug' => 'mechanical-repair']) }}"
                                    class="text-black w-100 h-100">
                                    <div
                                        class=" bg-transparent align-items-center d-flex flex-column index-hero-right-services-box-height-responsive index-hero-right-services-box-shadow-animation index-hero-right-services-box-bg  text-center ">
                                        <div class=" index-service-img-width-height-responsive">
                                            <span
                                                class="index-service-img-width-height-responsive index-service-img-width-height-responsive-6"></span>
                                        </div>
                                        <div
                                            class="bg-transparent align-items-center card-body d-flex justify-content-center m-0 p-0 py-3">
                                            <h5 class="card-title fs-5 fw-normal m-0 px-2">Mechanical Repair</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card bg-transparent index-hero-right-services-box-animation ">
                                <a href="{{ route('user.servicesDetail', ['slug' => 'electric-repair']) }}"
                                    class="text-black w-100 h-100">
                                    <div
                                        class=" bg-transparent align-items-center d-flex flex-column index-hero-right-services-box-height-responsive index-hero-right-services-box-shadow-animation index-hero-right-services-box-bg  text-center ">
                                        <div class=" index-service-img-width-height-responsive">
                                            <span
                                                class="index-service-img-width-height-responsive index-service-img-width-height-responsive-2"></span>
                                        </div>
                                        <div
                                            class="bg-transparent align-items-center card-body d-flex justify-content-center m-0 p-0 py-3">
                                            <h5 class="card-title fs-5 fw-normal m-0 px-2">Electrical Repair</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card bg-transparent index-hero-right-services-box-animation ">
                                <a href="{{ route('user.shop') }}" class="text-black w-100 h-100">
                                    <div
                                        class=" bg-transparent align-items-center d-flex flex-column index-hero-right-services-box-height-responsive index-hero-right-services-box-shadow-animation index-hero-right-services-box-bg text-center ">
                                        <div class=" index-service-img-width-height-responsive">
                                            <span
                                                class="index-service-img-width-height-responsive index-service-img-width-height-responsive-1"></span>
                                        </div>
                                        <div
                                            class="bg-transparent align-items-center card-body d-flex justify-content-center m-0 p-0 py-3">
                                            <h5 class="card-title fs-5 fw-normal m-0 px-2">Bodyshop</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card bg-transparent index-hero-right-services-box-animation py-4">
                                <a href="{{ route('user.servicesDetail', ['slug' => 'electric-repair']) }}"
                                    class="text-black w-100 h-100">
                                    <div
                                        class=" bg-transparent align-items-center d-flex flex-column index-hero-right-services-box-height-responsive index-hero-right-services-box-shadow-animation index-hero-right-services-box-bg text-center ">
                                        <div class=" index-service-img-width-height-responsive">
                                            <span
                                                class="index-service-img-width-height-responsive index-service-img-width-height-responsive-3"></span>
                                        </div>
                                        <div
                                            class="bg-transparent align-items-center card-body d-flex justify-content-center m-0 p-0 py-3">
                                            <h5 class="card-title fs-5 fw-normal m-0 px-2">Electric Car Repair</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card bg-transparent index-hero-right-services-box-animation py-4">
                                <a href="{{ route('user.servicesDetail', ['slug' => 'major-minor-service']) }}"
                                    class="text-black w-100 h-100">
                                    <div
                                        class=" bg-transparent align-items-center d-flex flex-column index-hero-right-services-box-height-responsive index-hero-right-services-box-shadow-animation index-hero-right-services-box-bg index-hero-right-services-box-radius  text-center ">
                                        <div class=" index-service-img-width-height-responsive">
                                            <span
                                                class="index-service-img-width-height-responsive index-service-img-width-height-responsive-5"></span>
                                        </div>
                                        <div
                                            class="bg-transparent align-items-center card-body d-flex justify-content-center m-0 p-0 py-3">
                                            <h5 class="card-title fs-5 fw-normal m-0 px-2">Major & Minor Service</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card bg-transparent index-hero-right-services-box-animation py-4">
                                <a href="{{ route('user.servicesDetail', ['slug' => 'general-repair']) }}"
                                    class="text-black w-100 h-100">
                                    <div
                                        class=" bg-transparent align-items-center d-flex flex-column index-hero-right-services-box-height-responsive index-hero-right-services-box-shadow-animation index-hero-right-services-box-bg  index-hero-right-services-box-radius text-center ">
                                        <div class=" index-service-img-width-height-responsive">
                                            <span
                                                class="index-service-img-width-height-responsive index-service-img-width-height-responsive-4"></span>
                                        </div>
                                        <div
                                            class="bg-transparent align-items-center card-body d-flex justify-content-center m-0 p-0 py-3">
                                            <h5 class="card-title fs-5 fw-normal m-0 px-2">Software Repair & Update</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card bg-transparent index-hero-right-services-box-animation ">
                                <a href="{{ route('user.servicesDetail', ['slug' => 'warranty-service-contract']) }}"
                                    class="text-black w-100 h-100">
                                    <div
                                        class=" bg-transparent align-items-center d-flex flex-column index-hero-right-services-box-height-responsive index-hero-right-services-box-shadow-animation index-hero-right-services-box-bg index-hero-right-services-box-radius text-center ">
                                        <div class=" index-service-img-width-height-responsive">
                                            <span
                                                class="index-service-img-width-height-responsive index-service-img-width-height-responsive-9"></span>
                                        </div>
                                        <div
                                            class="bg-transparent align-items-center card-body d-flex justify-content-center m-0 p-0 py-3">
                                            <h5 class="card-title fs-5 fw-normal m-0 px-2">Warranty & Service Contract</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card bg-transparent index-hero-right-services-box-animation ">
                                <a href="{{ route('user.servicesDetail', ['slug' => 'car-recovery']) }}"
                                    class="text-black w-100 h-100">
                                    <div
                                        class=" bg-transparent align-items-center d-flex flex-column index-hero-right-services-box-height-responsive index-hero-right-services-box-shadow-animation index-hero-right-services-box-bg index-hero-right-services-box-radius text-center ">
                                        <div class=" index-service-img-width-height-responsive">
                                            <span
                                                class="index-service-img-width-height-responsive index-service-img-width-height-responsive-7"></span>
                                        </div>
                                        <div
                                            class="bg-transparent align-items-center card-body d-flex justify-content-center m-0 p-0 py-3">
                                            <h5 class="card-title fs-5 fw-normal m-0 px-2">Car Recovery</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card bg-transparent index-hero-right-services-box-animation ">
                                <a href="{{ route('user.promotions') }}" class="text-black w-100 h-100">
                                    <div
                                        class=" bg-transparent align-items-center d-flex flex-column index-hero-right-services-box-height-responsive index-hero-right-services-box-shadow-animation index-hero-right-services-box-bg index-hero-right-services-box-radius text-center ">
                                        <div class=" index-service-img-width-height-responsive">
                                            <span
                                                class="index-service-img-width-height-responsive index-service-img-width-height-responsive-8"></span>
                                        </div>
                                        <div
                                            class="bg-transparent align-items-center card-body d-flex justify-content-center m-0 p-0 py-3">
                                            <h5 class="card-title fs-5 fw-normal m-0 px-2">Offers</h5>
                                        </div>
                                    </div>
                                </a>
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
                <p class="fs-6 fw-normal lh-sm">
                    Gargash Auto was founded by a team of top in line and experienced automotive professionals committed to
                    delivering high-quality auto repair services in Dubai. It later extended to Sharjah. Having recognized
                    the common issues and complaints car owners face with other repair shops, our primary goal is to offer a
                    friendly, transparent environment while ensuring top-notch service to earn the trust, satisfaction, and
                    loyalty of our valued customers.
                </p>
                <p class="fs-6 fw-normal lh-sm"> At Gargash Auto, we warmly welcome all customers and guarantee
                    premium-quality auto repairs at the most competitive prices.</p>
                <p class="fs-6 fw-normal lh-sm">For more information or suggestions, feel free to reach out to us.</p>
                <a href="https://wa.me/971547935400" target="_blank" class="btn fs-6 fw-semibold rounded-3"> Click here
                    for more Offers </a>
            </div>
            <div class="col-lg-6 mt-5 mt-md-0">
                <div class="about-text-bottom">
                    <img src="{{ asset('assets/user/img/about-us-section-right.png') }}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- About us Section End  -->




    <!-- experience-section Starts Here  -->
    <section class="banner-section experience-section section bg-img-cover img-no-repeat w-100 position-center ">
        <div class="container">
            <div class="experiecne-top-content text-center">
                <h2 class="level-1 heading-font primary-color col-lg-8 mx-auto" style="font-weight: 700;"> Your Perfect
                    <span class="secondary-color">Driving Experience </span> Starts Here.
                </h2>
            </div>
            <div class="row align-items-end white">
                <div class="col-lg-5">
                    @include('user.layouts.partials.form')
                </div>
                <div class="col-lg-7">
                    <div class="experience-car-wrapper position-relative">
                        <figure style="position: relative;" class="my-figure">

                            <!-- My Own  -->
                            <img src="{{ asset('assets/user/img/home-car-cloudy-2.png') }}" alt=""
                                class="my-car-normal-image">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- experience-section Ends Here  -->

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

    <!-- brand-section Ends Here  -->
    <!-- process-section Starts Here  -->
    <section class="">
        <div class="container">
            <div class="process-top-content text-center mb-5">
                <div class="ml14">
                    <h2 class="level-1 heading-font text-wrapper dark-color">
                        <span class="letters">LUXURY IN AND OUT </span>
                    </h2>
                    <p class="level-7 primary-regular-font dark-color col-lg-9 mx-auto">Our advanced repair services are
                        powered by modern tools, cutting-edge techniques, innovative processes, and skilled technicians. Our
                        4-step car repair model is designed to provide comfort and convenience for every car owner.</p>
                    <a href="https://wa.me/971547935400" target="_blank" class="btn">Speak to an expert <span
                            class="ps-2">
                            <i class="fa-solid fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="process-wrapper position-relative mt-5">
                <div class="process-wrap position-relative">
                    <div
                        class="align-items-md-center align-items-md-center d-flex flex-sm-row gap-3 gap-sm-0 justify-content-between pb-sm-5">
                        <div class="process-card-wrapper process-card1 extra-bg-2 radius-29 position-absolute">
                            <div class="process-card">
                                <figure>
                                    <img src="{{ asset('assets/user/img/process-icon1.png') }}" alt=""
                                        class="inmg-fluid">
                                </figure>
                                <div class="process-text">
                                    <h5 class="level-6 heading-font secondary-color">BOOK A SERVICE</h5>
                                    <p class="level-9 primary-regular-font dark-color">Call us to book your service <br>
                                        and enjoy a free inspection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="process-card-wrapper process-card2 extra-bg-2 radius-29 position-absolute right-0">
                            <div class="process-card">
                                <figure>
                                    <img src="{{ asset('assets/user/img/process-icon2.png') }}" alt=""
                                        class="inmg-fluid">
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
                                    <img src="{{ asset('assets/user/img/process-icon3.png') }}" alt=""
                                        class="inmg-fluid">
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
                                    <img src="{{ asset('assets/user/img/process-icon4.png') }}" alt=""
                                        class="inmg-fluid">
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

    <!-- review-section Starts Here  -->
    @include('user.layouts.partials.google-review')
    <!-- review-section Ends Here  -->

    <!-- sticky-icons Section Start -->
    @include('user.layouts.partials.sticky-icons')

    <!-- sticky-icons Section End -->
    <!-- sticky-icons Section Start -->
    @include('user.layouts.partials.sticky-icons-mobile')


    <!-- sticky-icons Section End -->
@endsection

@section('js')
@endsection

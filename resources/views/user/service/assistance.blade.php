@extends('user.layouts.app')

@section('css')
@endsection


@section('content')
<!-- Body Content Start Here -->

<!-- Hero  Section Start -->
<section class="container-fluid all-pages-hero-height-responsive vh-100 chinese-car-hero-bg">
    <div class="container d-flex align-items-center h-100">
        <div class="row align-items-center white">
            <div class="col-md-6">
                <div class="experiecne-top-content">
                    <h2 class="display-3 fw-bold lh-1">
                        Car
                        <span class="main-color">Recovery</span>
                    </h2>
                    <p class="fs-5 fw-semibold lh-sm text-black">Stuck on the road with a flat tire, dead battery, or
                        locked out of your car?
                    </p>
                    <p class="fs-6  fw-semibold lh-sm text-black-50">Our Car Recovery Service in Dubai, Sharjah is
                        here to rescue you from any car troubles, 24/7.
                    </p>

                </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
                <img src="{{ asset('assets/user/img/road-side-car.png') }}" alt="" style="max-width: 155%;" />
            </div>
        </div>
    </div>
</section>
<!-- Hero  Section End -->



<!-- Fast & Reliable  Section Start -->

<section class="container">
    <div class="row h-100">
        <div class="col-md-6 my-auto">
            <img src="{{ asset('assets/user/img/road-side-roadside-tracks.png') }}" alt="" class="img-fluid"
                loading="lazy">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center gap-3">
            <span class="d-flex flex-column gap-2">
                <p class="fs-5 fw-semibold m-0 text-start">Prompt & Trustworthy Assistance</p>
                <h2 class="fs-2 fw-bolder"><span class="main-color">Fast & Reliable</span> Car Recovery</h2>
            </span>
            <p class="fs-6 fw-semibold text-black-50">Our Car Recovery service covers a wide range of situations,
                including flat tires, battery jump-starts, lockouts, and fuel delivery. We understand car troubles can
                be frustrating, which is why our team of experts uses state-of-the-art equipment and technology to
                handle any type of Car Recovery, including towing services and heavy-duty vehicle recovery.</p>
            <div class="bg-white d-block d-md-flex flex-column gap-2 p-4 rounded-3 shadow">
                <div class="d-flex gap-2">
                    <img src="{{ asset('assets/user/img/road-side-roadside-icon-1.png') }}" alt=""
                        class="h-50 img-fluid w-fit" loading="lazy">

                    <span>
                        <h4 class="fs-5 fw-semibold text-black">24/7 Emergency Assistance</h4>
                        <p class="fs-6 lh-sm text-black-50">Our Car Recovery Service in Dubai, and Sharjah is
                            available 24/7, ensuring that you get help anytime you need it, even during weekends and
                            holidays.</p>
                    </span>

                </div>
                <div class="d-flex gap-2">
                    <img src="{{ asset('assets/user/img/road-side-roadside-icon-2.png') }}" alt=""
                        class="h-50 img-fluid w-fit" loading="lazy">

                    <span>
                        <h4 class="fs-5 fw-semibold text-black">Fast Response Time</h4>
                        <p class="fs-6 lh-sm text-black-50">Our experienced technicians arrive at your location within
                            minutes of your call, ensuring a fast response time to minimize your inconvenience.</p>
                    </span>

                </div>

            </div>
        </div>
    </div>

</section>

<!-- Fast & Reliable  Section End -->


<!-- Form Section  start-->
<section class="container-fluid Assistance-form-section-bg vh-100">
    <div class="container h-100 w-100">
        <div class="align-items-center g-2 h-100 justify-content-center row w-100">

            <div class="col-md-6 px-0 text-center">
                <h2 class="fw-bolder text-black lh-1 responsive-heading-3">
                    Your seamless <span class="main-color">Driving Experience</span> Begins Here.
                </h2>

                <p>Book Gargash Car Services</p>
            </div>
            <div class=" col-md-6 light position-relative white">
                @include('user.layouts.partials.form')
            </div>

        </div>


    </div>
</section>

<!-- Form Section  End-->


<!-- Fast & Reliable  Section Start -->

<section class="container">
    <div class="row h-100">
        <div class="col-md-6 my-auto">
            <img src="{{ asset('assets/user/img/road-side-roadside-track.png') }}" alt="" class="img-fluid"
                loading="lazy">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center gap-3">
            <span class="d-flex flex-column gap-2">
                <p class="fs-5 fw-semibold m-0 text-start">Reviving Your Ride Reliably</p>
                <h2 class="fs-2 fw-bolder"><span class="main-color">Comprehensive Car </span> Recovery Solutions
                </h2>
            </span>
            <p class="fs-6 fw-semibold text-black-50">Our team of experts is dedicated to providing you with the highest
                quality service possible. Each member is extensively trained and experienced in handling a variety of
                roadside situations, from flat tires to lockouts and everything in between. Our services include:</p>
            <div>
                <div class="d-flex gap-2">
                    <ul>
                        <li>Flat tire assistance</li>
                        <li>Battery jump-starts</li>
                        <li>Lockout assistance</li>
                        <li>Roadside repairs</li>
                    </ul>
                    <ul>
                        <li>Fuel delivery</li>
                        <li>Towing</li>
                        <li>Winching and recovery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>
@include('user.layouts.partials.gateway-images') @include('user.layouts.partials.google-review') @include('user.layouts.partials.sticky-icons') @include('user.layouts.partials.sticky-icons-mobile')
@endsection

@section('js')
@endsection
@extends('user.layouts.app') @section('css') @endsection @section('content')

<!-- Hero  Section Start -->
<section class="container-fluid all-pages-hero-height-responsive vh-100 auto-spa-bg section overflow-hidden">
    <div class="container d-flex align-items-center h-100">
        <div class="row align-items-center white">
            <div class="col-md-5">
                <div class="experiecne-top-content">
                    <h2 class="display-3 fw-bold">
                        <span class="secondary-color">Expert Car Detailing & </span> <br> Premium Auto Spa UAE
                    </h2>
                    <p class="fs-6 fw-semibold lh-sm text-secondary">Experience the ultimate in car pampering with our Premium Auto Spa UAE—where luxury vehicles receive meticulous care and attention from trained experts.

                    </p>
                    <span class="d-flex flex-column flex-md-row gap-4">
                        <a href="https://wa.me/971547935400" target="_blank"><button class="btn fw-semibold rounded-3 text-black fs-6">Book Your Premium Auto Spa Today!</button></a>
                    </span>
                </div>
            </div>
            <div class="col-md-7">
                <img src="{{ asset('assets/user/img/auto-spa-service-hero-right.png') }}" alt="" style="max-width: 155%;" />
            </div>
        </div>
    </div>
</section>
<!-- Hero  Section End -->

<!-- Main Car  section Start-->

<section class="align-items-center container d-flex flex-column justify-content-center gap-3">
    <h4 class=" auto-spa-main-car-section-top-heading-responsive m-0 fw-bolder text-center lh-1">Complete Auto Spa Solutions</h4>
    <p class=" lh-1 lh-sm text-center">From car tinting to ceramic coating and advanced detailing, our Premium Vehicle Services Dubai offer everything your luxury vehicle needs for maximum protection and a flawless, showroom-quality finish. We provide specialized treatments that safeguard
        your car’s exterior and interior, preserving its aesthetic appeal and enhancing its durability. With top-tier products and expert techniques, we ensure your vehicle shines while maintaining its value, delivering unparalleled care for both luxury
        and performance cars. Trust us to give your car the attention it deserves with our complete suite of premium auto care services.

    </p>
    <img src="./assets/img/auto-spa-service-we-do-all.png') }}" alt="" loading="lazy" class="px-2 px-md-0 w-100 w-md-75">
</section>

<!-- Main Car  section end-->

<!-- Form Section Start -->



<section class="auto-spa-form-bg">
    <div class="container">
        <div class="align-items-center row white">
            <div class="col-md-6 dark">
                @include('user.layouts.partials.form')
            </div>
            <div class="col-md-6">
                <h1 class="auto-spa-form-heading-font-size-responsive fw-bold lh-1 mt-4 mt-md-0 px-5 text-center">
                    Indulge Your
                    <span class="main-color">Car with Elite </span>Spa Care
                </h1>
                <p class="fs-6 fw-semibold m-0 text-black text-center">Give your vehicle the care it deserves with our Premium Auto Spa Dubai services. Book your appointment today for a flawless finish and unmatched attention to detail. </p>
                <br />
            </div>

        </div>
    </div>

</section>


@include('user.layouts.partials.gateway-images')
<div class="align-items-center auto-spa-full-container-bg container-fluid d-flex flex-column justify-content-center gap-5 auto-spa-full-container-section-height-responsive">
    <span class="d-flex flex-column gap-2 text-center">
        <h2 class="auto-spa-full-container-section-heading-font-size-responsive text-center text-white auto-spa-full-container-section-padding m-0">From <span class="text-warning">Expert Car Detailing Dubai</span> to advanced protective solutions,
            we ensure your luxury vehicle shines like royalty.
        </h2>
        <p class="fs-5 fw-normal m-0 text-white">Give your car the VIP experience it deserves with our Premium Auto Spa Dubai services!</p>
    </span>
    <a href="tel:+971 56 545 8853" class="d-flex justify-content-center w-100">
        <button type="button" class="btn btn-primary fs-6 w-md-25">
            Call Now
        </button>
    </a>

</div>

<!-- full container End -->
@include('user.layouts.partials.google-review') @include('user.layouts.partials.sticky-icons') @include('user.layouts.partials.sticky-icons-mobile') @endsection @section('js') @endsection
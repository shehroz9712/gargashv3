@extends('user.layouts.app')

@section('css')
@endsection


@section('content')

<!-- Hero  Section Start -->
<section class="container-fluid all-pages-hero-height-responsive vh-100 auto-spa-bg section overflow-hidden">
    <div class="container d-flex align-items-center h-100">
        <div class="row align-items-center white">
            <div class="col-md-5">
                <div class="experiecne-top-content">
                    <h2 class="display-3 fw-bold">
                        <span class="secondary-color">Premium Auto </span> <br> Spa in UAE
                    </h2>
                    <p class="fs-6 fw-semibold lh-sm text-secondary">Give your car the luxury it deserves at Dubai’s premier auto spa. Experience top-tier detailing, restoration, and protection services that leave your vehicle looking flawless.
                    </p>
                    <span class="d-flex flex-column flex-md-row gap-4">
                        <a href="https://wa.me/971547935400" target="_blank"><button class="btn fw-semibold rounded-3 text-black fs-6">Avail Your Discount</button></a>
                        <a href="tel:+971 56 545 8853" target="_blank"><button class="transparent-btn w-100">Call Now</button></a>
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
    <h4 class=" auto-spa-main-car-section-top-heading-responsive m-0 fw-bolder text-center lh-1">Auto Care Bundle</h4>
    <h2 class="auto-spa-main-car-section-main-heading-responsive fw-bolder lh-1 lh-sm text-center">From car tinting and ceramic coating, and beyond <br>
        <span class="main-color">we offer everything your vehicle needs for ultimate protection and a flawless finish.</span>
    </h2>
    <img src="./assets/img/auto-spa-service-we-do-all.png') }}" alt="" loading="lazy" class="px-2 px-md-0 w-100 w-md-75">
    <div class="d-flex flex-column flex-md-row gap-4 w-100 justify-content-center">
        <a href="tel:+971 56 545 8853" target="_blank"> <button
                type="button"
                class="btn btn-primary fs-6">
                Call Now
            </button></a>
        <button
            type="button"
            class="bg-transparent border border-dark btn btn-primary fs-6 ">
            Our Services
        </button>


    </div>

</section>

<!-- Main Car  section end-->

<!-- Form Section Start -->



<section class="auto-spa-form-bg">
    <div class="container">
        <div class="align-items-center row white">
            <div class="col-md-6">
                 @include('user.layouts.partials.form')
            </div>
            <div class="col-md-6">
                <h1 class="auto-spa-form-heading-font-size-responsive fw-bold lh-1 mt-4 mt-md-0 px-5 text-center">
                    Your seamless
                    <span class="main-color">Pamper Your Luxury Car </span> with the Royal Treatment!
                </h1>
                <p class="fs-6 fw-semibold m-0 text-black text-center">Book your appointment today </p>
            </div>

        </div>
    </div>

</section>


<!-- Form Section End -->


<!-- full container Start -->

<div class="align-items-center auto-spa-full-container-bg container-fluid d-flex flex-column justify-content-center gap-5 auto-spa-full-container-section-height-responsive">
    <span class="d-flex flex-column gap-2 text-center">
        <h2 class="auto-spa-full-container-section-heading-font-size-responsive text-center text-white auto-spa-full-container-section-padding m-0">From expert detailing to top-tier protection, we ensure your car shines like royalty.
        </h2>
        <p class="fs-5 fw-normal m-0 text-white">Let your car experience the VIP treatment!</p>
    </span>
    <a href="tel:+971 56 545 8853" class="d-flex justify-content-center w-100"> <button
            type="button"
            class="btn btn-primary fs-6 w-md-25">
            Call Now
        </button></a>

</div>

<!-- full container End -->


<!--  -->

  @include('user.layouts.partials.gateway')


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

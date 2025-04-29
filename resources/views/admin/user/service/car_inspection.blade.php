@extends('user.layouts.app')

@section('css')
@endsection


@section('content')

@section('meta')
 <title>Luxury Car Inspection & Detailing Services Dubai UAE
</title>
    <meta name="description" content="Luxury Car Inspection & Detailing Services Dubai UAE. We offer unparalleled service that ensures your vehicle gets the royal treatment it deserves. ">
    <meta name="keywords" content="Luxury Car Care Dubai,Luxury Car Inspection Dubai,Car Inspection Service Dubai">
    

@endsection

    <!-- Hero  Section Start -->
    <!-- Hero  Section Start -->
<section class="container-fluid all-pages-hero-height-responsive vh-100 electric-car-bg section">
    <div class="container d-flex align-items-center h-100">
        <div class="row align-items-center white">
            <div class="col-md-6">
                <div class="experiecne-top-content">
                    <h2 class="display-3 electric-repair-hero-heading-font-size-responsive fw-bold">
                        
                        <span class="secondary-color ">Free</span> Inspection & Diagnostics
                    </h2>
                    <p class="fs-6 fw-semibold lh-sm text-secondary">No matter if it's an American, German, Japanese, or exotic car, we offer unparalleled service that ensures your vehicle gets the royal treatment it deserves.

                    </p>
                    <span class="d-flex flex-column flex-md-row gap-4"> <a href="https://wa.me/971547935400" target="_blank"><button class="btn fw-semibold rounded-3 text-black fs-6">Book Your Premium Auto Spa Today!</button></a> </span>
                </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
                <img src="{{ asset('assets/user/img/warrenty-hero-right.png') }}" alt="" class="extended-warranty-hero-car-img-responsive" style="max-width: 125% !important;" />
            </div>
        </div>
    </div>
</section>
<!-- Hero  Section End -->
    <!-- Main Car  section Start-->
    <section class="align-items-center container d-flex flex-column justify-content-center gap-3">
        <h2 class="display-6 fw-bolder lh-1 text-center">Get Your Car Fully Checked with Our <br>
            <span class="main-color">360-Degree Auto Inspection</span>
        </h2>
        <p class="fs-6 fw-semibold lh-sm text-center text-secondary">Is your car showing signs like a check engine light, squeaky brakes, vibrations, or engine misfires? Don’t wait for the problem to worsen. Our luxury car inspection service in Dubai offers a complete 360-degree auto inspection to identify and address issues such as faulty air suspension, oil and coolant leaks, and engine overheating.
Whether you're dealing with minor issues or need a deep post-accident inspection, we’ve got you covered. Our team of experts provides top-notch car inspection services in Dubai to ensure your vehicle runs like new. Book your luxury car care in Dubai today and experience the care and attention your car deserves from trusted automotive professionals.
</p>
        <img src="{{ asset('assets/user/img/car-ins-about-section.png') }}" alt="" loading="lazy">
    </section>
    <!-- Main Car  section end-->
    <!-- Form Section Start Here -->


    <section class="car-insp-form-section-bg">
        <div class="container">
            <div class="align-items-center row white">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="auto-spa-form-heading-font-size-responsive fw-bold lh-1 mb-4 px-5 text-center">
                        Start Your Smooth Journey with
                        <span class="main-color">  Gargash Auto.</span> 
                    </h2>
                    <h3 > Book Your Premium Car Services Today </h3>
                    <p class="fs-6 fw-semibold m-0 text-black text-center">
Experience top-quality service and exceptional care for your vehicle. Book your appointment with Gargash Auto now for a seamless driving experience.
</p>
                </div>
                <div class="col-md-6 dark">
                    @include('user.layouts.partials.form')
                </div>


            </div>
        </div>

    </section>

    <!-- Form Section End Here -->
    <!--  -->
    @include('user.layouts.partials.gateway-images')

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

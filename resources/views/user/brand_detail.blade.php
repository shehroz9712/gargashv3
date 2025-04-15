@extends('user.layouts.app')

@section('css')
@endsection


@section('content')
    <!-- Hero  Section Start -->
    <section class="container-fluid all-pages-hero-height-responsive auto-spa-bg section overflow-hidden">
        <div class="container d-flex align-items-center">
            <div class="row align-items-center white">
                <div class="col-md-5">
                    <div class="experiecne-top-content">
                        <h2 class="display-3 fw-bold">
                            <span class="secondary-color">{{ $brand->name }} Repair </span> <br> Dubai Service
                        </h2>
                        <p class="fs-6 fw-semibold lh-sm text-secondary">{{ $brand->heading }}
                        </p>
                        <span class="d-flex flex-column flex-md-row gap-4">
                            <a href="https://wa.me/971547935400" target="_blank"><button
                                    class="btn fw-semibold rounded-3 text-black fs-6">Avail Your Discount</button></a>
                            <a href="tel:+971 56 545 8853" target="_blank"><button class="transparent-btn w-100">Call
                                    Now</button></a>
                        </span>
                    </div>
                </div>
                <div class="col-md-7 d-flex justify-content-end">
                    <img src="{{ asset('assets/user/img/brands/audo-hero.png') }}" alt="" style="scale:1.2;" />
                </div>
            </div>
        </div>
    </section>
    <!-- Hero  Section End -->
    <!-- Our Vision  Start  -->
    <section class="container">
        <div class="row d-flex  flex-md-row align-items-center">
            <div class="col-md-8 text-start">
                <h2 class="display-6 fw-bold"> The Finest Dealer Alternative Audi Service Center <span class="main-color">
                        in Dubai</span>
                </h2>
                <p class="about-us-our-team-text-aling-responsive">We offer top-notch Audi services at our luxury car
                    maintenance center, leveraging upgraded special tools and catalyst software to troubleshoot and repair
                    your Audi. We are one of the largest stand-alone Audi garages in Dubai.

                </p>

            </div>
            <div class="col-md-4 d-flex flex-column gap-3 justify-content-center mt-4 mt-md-0 align-items-end">

                <a href="https://wa.me/971547935400" target="_blank" class="btn fw-semibold rounded-3 text-black fs-6 w-75">
                    Click here
                    for more Offers </a>

                <a href="https://wa.me/971547935400" target="_blank"
                    class="bg-transparent border-2 border-dark btn fs-6 fw-semibold rounded-3 text-black w-75">Avail Your
                    Discount</a>

            </div>
        </div>
    </section>
    <!-- Our Vision  End  -->

    <!-- Technicians Start  -->
    <section class="container">
        <div class="row d-flex  flex-md-row align-items-center">
            <div class="col-md-6">
                <img class="img-fluid rounded-3" src="{{ asset('assets/user/img/brands/technicians-tnrivalled.jpg') }}"
                    alt="hero" />
            </div>
            <div class="col-md-6 text-start">

                <h2 class="display-6 fw-bold">Unrivalled
                    <span class="main-color"> Technicians</span>
                </h2>
                <p class="about-us-our-team-text-aling-responsive">We collaborate with the most trusted and experienced
                    automobile technicians in the industry. Each technician is carefully selected by our Audi service
                    advisor to ensure expertise and reliability. Their skills guarantee that your vehicle receives the best
                    attention, using advanced tools and techniques tailored specifically for Audi models.

                </p>
                <p class="about-us-our-team-text-aling-responsive">
                    Our team ensures precise diagnostics and delivers top-tier service every time. With a focus on customer
                    satisfaction, we maintain high standards in every aspect of Audi repair and maintenance. From
                    identifying the smallest issues to performing complex repairs, our professionals handle every task with
                    dedication, giving your Audi the care it truly deserves.
                </p>

            </div>

        </div>
    </section>
    <!-- Technicians End  -->
    <!-- Genuine Start  -->
    <section class="container">
        <div class="row d-flex  flex-md-row align-items-center">

            <div class="col-md-6 text-start">

                <h2 class="display-6 fw-bold">
                    <span class="main-color">Genuine </span>
                    Audi Parts Use
                </h2>
                <p class="about-us-our-team-text-aling-responsive">At our service center, we use only genuine Audi parts
                    sourced directly from the original equipment manufacturer. This ensures your vehicle maintains its
                    performance, safety, and value. By choosing authentic components, we guarantee a perfect fit and lasting
                    durability, keeping your Audi running like it just left the showroom.</p>
                <p class="about-us-our-team-text-aling-responsive">
                    We take pride in offering uncompromised Audi repair services that meet the highest industry standards.
                    Our goal is to provide you with a brand-new car experience every time you hit the road. With our expert
                    care and original parts, your Audi receives the premium attention it deserves, delivering smooth and
                    reliable performance.
                </p>
                <div class="d-flex justify-content-center justify-content-md-start">

                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid rounded-3" src="{{ asset('assets/user/img/brands/Audi-Parts-Use.jpg') }}"
                    alt="hero" />
            </div>

        </div>
    </section>
    <!-- Genuine End  -->
    <!-- Genuine Start  -->
    <section class="container">
        <div class="row d-flex  flex-md-row align-items-center">


            <div class="col-md-6">
                <img class="img-fluid rounded-3" src="{{ asset('assets/user/img/brands/audi-car-interior-side.jpg') }}"
                    alt="hero" />
            </div>
            <div class="col-md-6 text-start">

                <h2 class="display-6 fw-bold">

                    Transparency
                </h2>
                <p class="main-color">( 0 hidden charges)</p>
                <p class="about-us-our-team-text-aling-responsive">When you hand over your Audi to us, you can do so with
                    full confidence. We assure complete transparency in our process, with no hidden charges. Integrity is at
                    the heart of our service, ensuring that your trust is valued and respected throughout your Audi’s repair
                    journey.

                </p>
                <p class="about-us-our-team-text-aling-responsive">
                    From the moment we begin repairs to the final delivery, we keep you informed at every step. Regular
                    updates eliminate communication gaps and make the entire process smooth and stress-free. Our streamlined
                    service ensures you’re always in the loop, giving you peace of mind and confidence in the care your Audi
                    receives.
                </p>
                <div class="d-flex justify-content-center justify-content-md-start">

                </div>
            </div>


        </div>
    </section>
    <!-- Genuine End  -->
    <!-- full container Start -->

    <div class="audi-full-container-bg container-fluid d-flex flex-column gap-4 justify-content-center px-5"
        style="height: 50vh;">
        <div class="container">

            <div class="align-items-center d-flex flex-column justify-content-center gap-4">
                <span class="text-center">

                    <h2 class="ceramic-full-container-main-heading-responsive fw-bolder text-white m-0 lh-lg">Trusted
                        {{ $brand->name }}
                        Repair Workshop & Service Center
                    </h2>
                    <p class="fs-6 fw-normal text-white">We custom-make our affordable Audi service quotation based on your
                        car’s requirements and do not use any generic price. We ensure you get the best-in-class affordable
                        Audi service at our Audi workshop. As German car experts, we know the ins and outs of every premium
                        car. Powered by trusted parts and equipment suppliers and a passionate Audi mechanics team, our goal
                        is to become the best dealer-alternative Audi Service Center in Dubai.

                    </p>
                </span>
                <span class="d-flex gap-3">
                    <button type="button"
                        class="btn btn-primary text-white w-100 w-md-50 fs-6 audi-full-container-btn-hover-bg-change">
                        Our Services
                    </button>
                    <button type="button"
                        class="bg-transparent border btn btn-primary text-white w-100 w-md-50 fs-6 audi-full-container-btn-hover-bg-change">

                        Our Services
                    </button>
                </span>

            </div>


        </div>

    </div>

    <!-- full container End -->

    <!-- icons section Start -->
    <section class="container">
        <div>
            <h2 class="fs-1 fw-bold text-center">Our Periodic <span style="color: #E6B110;"> {{ $brand->name }} Maintenance </span>Service
                Includes</h2>
            <p class="fs-6 fw-semibold text-black-50 text-center">After you hand over the car to our Audi garage, we will go
                through an essential examination, create an inspection report, and start working on the issues. We will
                decide and consult with you before making any replacements or repairs during the servicing period.</p>
        </div>
        <div class="row row-cols-1  row-cols-sm-2 row-cols-md-5 gap-4 mt-4 justify-content-center">
            <div>
                <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                    <div class="img col-4">
                        <img src="{{ asset('assets/user/img/brands/logo-1.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-2 text-center col-8">
                        <h5 class="m-0 fs-6 fw-normal text-capitalize">Audi Engine oil check and change
                        </h5>

                    </div>
                </div>
            </div>
            <div>
                <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                    <div class="img col-4">
                        <img src="{{ asset('assets/user/img/brands/logo-2.webp') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-2 text-center col-8">
                        <h5 class="m-0 fs-6 fw-normal text-capitalize">Air filter analysis and change
                        </h5>

                    </div>
                </div>
            </div>
            <div>
                <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                    <div class="img col-4">
                        <img src="{{ asset('assets/user/img/brands/logo-3.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-2 text-center col-8">
                        <h5 class="m-0 fs-6 fw-normal text-capitalize">Watch break oil and brake repair
                        </h5>

                    </div>
                </div>
            </div>
            <div>
                <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                    <div class="img col-4">
                        <img src="{{ asset('assets/user/img/brands/logo-4.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-2 text-center col-8">
                        <h5 class="m-0 fs-6 fw-normal text-capitalize">Inspect the Coolant levels
                        </h5>

                    </div>
                </div>
            </div>
            <div>
                <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                    <div class="img col-4">
                        <img src="{{ asset('assets/user/img/brands/logo-5.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-2 text-center col-8">
                        <h5 class="m-0 fs-6 fw-normal text-capitalize">Oil filter audit and replacement
                        </h5>

                    </div>
                </div>
            </div>
            <div>
                <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                    <div class="img col-4">
                        <img src="{{ asset('assets/user/img/brands/logo-6.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-2 text-center col-8">
                        <h5 class="m-0 fs-6 fw-normal text-capitalize">Brake assessment and liquid refill
                        </h5>

                    </div>
                </div>
            </div>
            <div>
                <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                    <div class="img col-4">
                        <img src="{{ asset('assets/user/img/brands/logo-7.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-2 text-center col-8">
                        <h5 class="m-0 fs-6 fw-normal text-capitalize">Check tire health and replace
                        </h5>

                    </div>
                </div>
            </div>
            <div>
                <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                    <div class="img col-4">
                        <img src="{{ asset('assets/user/img/brands/logo-8.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-2 text-center col-8">
                        <h5 class="m-0 fs-6 fw-normal text-capitalize">Wiper blades check and wash
                        </h5>

                    </div>
                </div>
            </div>
            <div>
                <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                    <div class="img col-4">
                        <img src="{{ asset('assets/user/img/brands/logo-9.webp') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-2 text-center col-8">
                        <h5 class="m-0 fs-6 fw-normal text-capitalize">Audi transmission repair and oil refill
                        </h5>

                    </div>
                </div>
            </div>
            <div>
                <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                    <div class="img col-4">
                        <img src="{{ asset('assets/user/img/brands/logo-10.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-2 text-center col-8">
                        <h5 class="m-0 fs-6 fw-normal text-capitalize">AC channel check and replacement
                        </h5>

                    </div>
                </div>
            </div>
            <div>
                <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                    <div class="img col-4">
                        <img src="{{ asset('assets/user/img/brands/logo-11.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-2 text-center col-8">
                        <h5 class="m-0 fs-6 fw-normal text-capitalize">Exhaust Gas Recirculation service
                        </h5>

                    </div>
                </div>
            </div>
            <div>
                <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                    <div class="img col-4">
                        <img src="{{ asset('assets/user/img/brands/logo-12.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-2 text-center col-8">
                        <h5 class="m-0 fs-6 fw-normal text-capitalize">Wash the vehicle exterior and tires
                        </h5>

                    </div>
                </div>
            </div>
            <div>
                <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                    <div class="img col-4">
                        <img src="{{ asset('assets/user/img/brands/logo-13.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-2 text-center col-8">
                        <h5 class="m-0 fs-6 fw-normal text-capitalize">Dyno tuning and chip tuning
                        </h5>

                    </div>
                </div>
            </div>
            <div>
                <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                    <div class="img col-4">
                        <img src="{{ asset('assets/user/img/brands/logo-14.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-2 text-center col-8">
                        <h5 class="m-0 fs-6 fw-normal text-capitalize">Car clutch check and repair
                        </h5>

                    </div>
                </div>
            </div>
            <div>
                <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                    <div class="img col-4">
                        <img src="{{ asset('assets/user/img/brands/logo-15.webp') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-2 text-center col-8">
                        <h5 class="m-0 fs-6 fw-normal text-capitalize">Examination of locks, lights, & electrical jobs
                        </h5>

                    </div>
                </div>
            </div>
            <div>
                <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                    <div class="img col-4">
                        <img src="{{ asset('assets/user/img/brands/logo-16.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column gap-2 text-center col-8">
                        <h5 class="m-0 fs-6 fw-normal text-capitalize">Clean the engine bay
                        </h5>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- icons section End -->

    <!-- Slider Start -->

    <!-- discover-section Starts Here  -->



    <!-- discover-section Ends Here  -->


    <!-- Slider End -->
@endsection

@section('js')
@endsection

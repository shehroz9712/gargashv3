@extends('user.layouts.app')

@section('css')
@endsection


@section('content')
<!-- Body Content Start Here -->
<section class="section container-fluid update-about-bg  vh-100 about-us-hero-height-responsive">
    <div class="container d-flex flex-column h-100   justify-content-center  w-100">
        <div class="g-4 g-md-0 row">
            <div class="col-md-6 my-auto">
                <div class="contract-hero-content">
                    <h2 class="fw-bolder display-4"> <span class="text-warning">Welcome To </span>Gargash Auto Service
                    </h2>
                    <h4 class="fs-4 fw-bold">Where Precision Meets Performance</h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form-section dark">
                    @include('user.layouts.partials.form')

                </div>
            </div>
        </div>
    </div>
</section>

<!-- about us page Hero  Section End -->
<!-- Service Partner Styling Start  -->
<section class=" container">
    <div class="align-items-center row">
        <div class="col-lg-6">
            <h2 class="fs-2 fw-semibold">About Us</h2>
            <h5>Driven by Expertise. Built on Trust. Focused on You.</h5>
            <p class="fs-6 fw-normal lh-sm">
                Gargash Auto was born from a vision shared by a group of elite automotive professionals—craftsmen, technicians, and service advisors who have spent decades mastering their art in the global automotive industry. United by a passion for precision and a desire to transform the car repair experience in the UAE, we came together to create something different—something better. </p>
            <p class="fs-6 fw-normal lh-sm">Our journey began in Dubai, a city that thrives on excellence and innovation. From humble beginnings, we set out with a bold purpose: to raise the standard of auto service—not just in how cars are fixed, but in how people are treated. That commitment soon led us to expand our services to Sharjah, driven by the trust and loyalty of our growing community.</p>
            <p class="fs-6 fw-normal lh-sm">At Gargash Auto, we understand the unspoken bond between driver and vehicle. We know that for many, a car is more than just transportation—it’s freedom, livelihood, a lifeline to family, or a symbol of hard work and progress. That’s why we treat every vehicle that enters our workshop as if it were our own.</p>
            <p class="fs-6 fw-normal lh-sm">We’ve listened closely to what car owners truly want—and deserve. No more hidden charges. No rushed explanations. No compromises. Just honest, transparent service backed by world-class skill and a customer-first mindset. From routine oil changes to engine overhauls and high-end diagnostics, we deliver dealership-grade quality—without the dealership price tag or pressure.</p>
            <a href="https://wa.me/971547935400" target="_blank" class="btn fs-6 fw-semibold rounded-3">Let’s drive forward—together.</a>
        </div>
        <div class="col-lg-6 mt-5 mt-md-0">
            <div class="about-text-bottom">
                <img src="{{ asset('assets/user/img/about-us-section-right.png') }}" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- Service Partner Styling End  -->
<!-- Specialized Brands Section Start -->
@include('user.layouts.partials.brand')

<!-- Specialized Brands Section Start -->
<!-- Our Team Styling Start  -->
<section style="background-color: #f1f1f1;">
    <div class="container">
        <div class="row align-items-center about-our-team-responsive-padding">
            <div class="col-lg-5" style="float: left;">
                <div class="our-team-top">
                    <img src="{{ asset('assets/user/img/our-team-left.png') }}"
                        style="box-shadow: 6px 4px 4px #ccc; border-radius: 0px 20px;" alt="">
                </div>
            </div>
            <div class="about-us-our-team-text-padding-responsive col-lg-6 mt-4 mt-md-0">
                <h2 class="display-6 fw-bold">Meet Our<span class="main-color"> Expert Team</span>
                </h2>
                <h5>Global Talent. Local Trust. Unmatched Precision.</h5>
                <p class="about-us-our-team-text-aling-responsive">At Gargash Auto, our people are our power. Behind every smooth engine, every precision repair, and every satisfied customer stands a team of world-class automotive professionals—each bringing specialized experience, deep technical knowledge, and a shared passion for perfection.

                    Handpicked from diverse international backgrounds, our technicians are experts in handling luxury and performance vehicles. From complex engine and gearbox rebuilds to highly detailed diagnostics and routine maintenance, they work with cutting-edge tools and the latest automotive technologies to ensure your vehicle performs at its best.

                    But we’re not just about technical skill—we're about trust. Every repair, every service, every recommendation is made with honesty, clarity, and your satisfaction in mind.</p>

            </div>

        </div>
</section>

<!-- Our Team Styling End  -->
<!-- Our career  Styling Start  
    <section class="container my-md-5">
        <div class="row d-flex  flex-md-row align-items-center">
            <div class="col-md-6 d-flex justify-content-center mt-4 mt-md-0">
                <img   class="mt-5 mt-md-0 w-75 w-md-100" src="{{ asset('assets/user/img//Career.jpg') }}" alt="hero" />
            </div>
            <div class="col-md-6 text-start">

                <h2 class="display-6 fw-bold">Job<span class="main-color"> Career</span> </h2>
                <p class="about-us-our-team-text-aling-responsive">Join Gargash Auto and build a rewarding career in the
                    automotive industry. We offer exciting opportunities for skilled professionals passionate about
                    high-quality auto repair services. Grow with us in a dynamic work environment. Explore open positions
                    and apply today to be part of our expert team!</p>
                <div class="d-flex justify-content-center justify-content-md-start">
                    <a href="https://wa.me/971547935400" target="_blank" class="btn fs-6 fw-semibold rounded-3"> Submit Your
                        CV </a>
                </div>
            </div>

        </div>
    </section>
    <!-- Our career  Styling End  -->
<!-- Our Vision Styling Start  -->
<section class="container py-md-4">
    <div class="row d-flex  flex-md-row align-items-center">
        <div class="col-md-6 text-start">
            <h2 class="display-6 fw-bold"> Our <span class="main-color">Vision</span>
            </h2>
            <h5>Driving Excellence. Inspiring Trust. Shaping the Future.</h5>
            <p class="about-us-our-team-text-aling-responsive">At Gargash Auto, our vision is clear: to redefine the standard of automotive care across the region by delivering seamless, transparent, and high-performance repair solutions that consistently exceed customer expectations.
                We envision a future where every vehicle receives the precision it deserves, every customer enjoys peace of mind, and every service reflects our deep-rooted values of integrity, innovation, and excellence.
                By continuously investing in cutting-edge technologies, advanced diagnostics, and industry-best practices, we aim to stay at the forefront of automotive innovation—ensuring your vehicle is always in expert hands.</p>
            <div class="d-flex justify-content-center justify-content-md-start">

            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center mt-4 mt-md-0">
            <img class="mt-5 mt-md-0 w-75 w-md-100" src="{{ asset('assets/user/img/about1.png') }}"
                alt="hero" />
        </div>
    </div>
</section>
<!-- Our Vision Styling End  -->
<section class="container py-md-4">
    <div class="row d-flex  flex-md-row align-items-center">
        <div class="col-md-6 d-flex justify-content-center mt-4 mt-md-0">
            <img class="mt-5 mt-md-0 w-75 w-md-100" src="{{ asset('assets/user/img/about2.png') }}"
                alt="hero" />
        </div>
        <div class="col-md-6 text-start">
            <h2 class="display-6 fw-bold"> Our <span class="main-color">Mission</span>
            </h2>
            <h5>Precision in Service. Passion in Every Detail.</h5>
            <p class="about-us-our-team-text-aling-responsive">At Gargash Auto, our mission is to provide exceptional, transparent, and customer-focused automotive solutions that deliver lasting value and total peace of mind. We are committed to maintaining the highest standards in diagnostics, repair, and maintenance—combining expert craftsmanship with advanced technology.

                We believe every customer deserves honesty, every vehicle deserves care, and every service should reflect our unwavering dedication to excellence. Through continuous improvement, professional integrity, and a culture of respect, we strive to build long-term relationships and become the trusted auto care partner for generations to come.</p>
            <div class="d-flex justify-content-center justify-content-md-start">

            </div>
        </div>

    </div>
</section>
<!-- sticky-icons Section Start -->

@include('user.layouts.partials.gateway-images')
@include('user.layouts.partials.google-review')
<!-- sticky-icons Section End -->
@endsection

@section('js')
@endsection
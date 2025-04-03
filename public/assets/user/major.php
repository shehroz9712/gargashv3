


<!-- Hero  Section Start -->
<section class="shop-bg section major-bg">
    <div class="container">
        <div class="row align-items-center white">
            <div class="col-lg-7">
                <div class="experiecne-top-content">
                    <h2 class="display-4 fw-bold mx-auto primary-color text-start">
                        Complete Care
                        <span class="text-warning">Peak Performanc</span>
                    </h2>
                    <p class="fs-6 fw-light lh-sm text-secondary">Ensure your car's longevity with expert maintenance, deep inspection, and care.</p>
                    <span class="d-flex flex-column flex-md-row gap-4">
                        <a href="https://wa.me/971547935400" target="_blank">
                            <button class="border-0 btn fs-6 fw-semibold rounded-3">Avail Your Discount</button>
                        </a>
                        <a href="tel:+971 56 545 8853" target="_blank">
                            <button class="bg-transparent border-3 border-dark btn fs-6 fw-semibold rounded-3">Call Now</button>
                        </a>
                    </span>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="{{ asset('assets/user/img/Car-Tinting-car-2.png') }}" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- Hero  Section End -->

<!-- Form Section Start Here -->


<section class="car-insp-form-section-bg">
    <div class="container">
        <div class="align-items-center row white">
            <div class="col-md-6 mb-4 mb-md-0">
                <h1 class="auto-spa-form-heading-font-size-responsive fw-bold lh-1 mb-4 px-5 text-center">
                    Your seamless
                    <span class="main-color">Driving Experience</span> Begins Here.
                </h1>
                <p class="fs-6 fw-semibold m-0 text-black text-center">Book Gargash Car Workshop</p>
            </div>
            <div class="col-md-6">
                 @include('user.layouts.partials.form')
            </div>


        </div>
    </div>

</section>

<!-- Form Section End Here -->



<!-- Images Section Start -->


<section class="container">
    <h2 class="display-4 fw-bold major-mino-images-section-heading-mobile-font-size text-center">Why Choose <span class="main-color">Gargash Auto</span>
        for Car Major Service in Dubai?</h2>
    <div class="row row-cols-md-5 row-cols-2">
        <img src="{{ asset('assets/user/img/Major-img-1.png') }}" alt="" class="img-fluid" />
        <img src="{{ asset('assets/user/img/Major-img-2.png') }}" alt="" class="img-fluid" />
        <img src="{{ asset('assets/user/img/Major-img-3.png') }}" alt="" class="img-fluid" />
        <img src="{{ asset('assets/user/img/Major-img-4.png') }}" alt="" class="img-fluid" />
        <img src="{{ asset('assets/user/img/Major-img-5.png') }}" alt="" class="img-fluid" />
    </div>
</section>

<!-- Images Section End -->
<!-- gateway-section Start Here  -->
  @include('user.layouts.partials.gateway')
<!-- gateway-section Ends Here  -->

<!-- sticky-icons Section Start -->
    @include('user.layouts.partials.sticky-icons')

<!-- sticky-icons Section End -->
 <!-- sticky-icons Section Start -->

    @include('user.layouts.partials.sticky-icons-mobile')



<!-- sticky-icons Section End -->


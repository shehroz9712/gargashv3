@extends('user.layouts.app')

@section('css')
@endsection


@section('content')
    <!-- Hero  Section Start -->
    <section class="container-fluid all-pages-hero-height-responsive vh-100 auto-spa-bg section">
        <div class="container d-flex align-items-center h-100">
            <div class="row align-items-center white">
                <div class="col-md-6">
                    <div class="experiecne-top-content">
                        <h2 class="display-3 fw-bold">Car Major Service For
                            <span class="secondary-color">All Brands & Models</span>
                        </h2>
                        <p class="fs-6 fw-semibold lh-sm text-secondary">Car Major Service in Dubai. Call Us For free Pickup
                        </p>
                        <span class="d-flex flex-column flex-md-row gap-4">
                            <a href="tel:+971 56 545 8853" target="_blank">
                                <button class="btn fw-semibold rounded-3 text-black fs-6">Call Now</button>
                            </a>
                            <button
                                class="bg-transparent border-2 border-dark fs-6 btn fw-semibold px-5 rounded-3 text-black">Our
                                Services</button>
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/user/img/majo-&-minor-hero-bg.png') }}" alt=""
                        style="max-width:130%;" class="mt-5 mt-md-0 major-minor-hero-img-responsive" />
                </div>
            </div>
        </div>
    </section>
    <!-- Hero  Section End -->



    <!-- Types Section Start -->
    <style>
        .nav-pills .nav-link.active {
            background-color: #ffc107;
            /* Bootstrap's warning color */
            color: #000;
            /* Optional: Change text color */
        }
    </style>
    <section>
        <div class="container">
            <div class="d-flex flex-column gap-5 h-100 w-100">
                <div class="text-center">
                    <!-- <h2 class="display-6 fw-bolder lh-1 px-5">
                        All Types of Electric Car Major <span style="color: #E6B110;">Service in Dubai</span>
                    </h2> -->
                    <p class="fs-6 fw-semibold m-0 text-black-50">Quick Fit Auto Center is a one-stop solution to all types
                        of Car Major Service in Dubai. We have expert technicians ready to reinstate your Vehicle’s
                        Performance through minor and major service in Dubai. </p>
                </div>
                <div class="w-100 d-flex flex-column gap-3">
                    <!-- Minor Services Tab -->
                    <div class="tab-pane fade show active" id="pills-minor" role="tabpanel"
                        aria-labelledby="pills-minor-tab">
                        <div class="row gx-3 gy-3 w-100 pb-4">
                            <div class="col-6 col-md-3">
                                <div
                                    class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">
                                    <img src="{{ asset('assets/user/img/icons/image 5.png') }}" alt=""
                                        class="img-fluid me-auto w-50 w-md-25">
                                    <div>
                                        <h3 class="fw-bold fs-6">Charging Services</h3>
                                        <p class="mb-0" style="font-size: 12px;">Reliable EV charging solutions for every
                                            vehicle type.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div
                                    class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">
                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-2.png') }}" alt=""
                                        class="img-fluid me-auto w-50 w-md-25">
                                    <div>
                                        <h3 class="fw-bold fs-6">Maintenance </h3>
                                        <p class="mb-0" style="font-size: 12px;">Comprehensive maintenance for peak
                                            vehicle performance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div
                                    class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">

                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-3.png') }}" alt=""
                                        class="img-fluid me-auto  w-md-25">
                                    <div>
                                        <h3 class="fw-bold" style="font-size: 17px;">Car Recovery</h3>
                                        <p class="mb-0" style="font-size: 12px;">24/7 professional car recovery services
                                            across Dubai.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div
                                    class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">

                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-4.png') }}" alt=""
                                        class="img-fluid me-auto w-50 w-md-25">
                                    <div>
                                        <h3 class="fw-bold fs-6">Leasing Services</h3>
                                        <p class="mb-0" style="font-size: 12px;">Flexible car leasing plans to fit every
                                            lifestyle.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-3 gy-3 w-100 justify-content-md-center">
                            <div class="col-6 col-md-3">
                                <div
                                    class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">

                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-5.png') }}" alt=""
                                        class="img-fluid ">
                                    <div>
                                        <h3 class="fw-bold fs-6">Insurance </h3>
                                        <p class="mb-0" style="font-size: 12px;">Get tailored insurance plans for full
                                            peace of mind.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div
                                    class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">

                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-6.png') }}" alt=""
                                        class="img-fluid me-auto w-md-25">
                                    <div>
                                        <h3 class="fw-bold fs-6">Battery Recycling </h3>
                                        <p class="mb-0" style="font-size: 12px;">Eco-friendly battery disposal and
                                            recycling services.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div
                                    class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">

                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-7.png') }}" alt=""
                                        class="img-fluid me-auto w-50 w-md-25">
                                    <div>
                                        <h3 class="fw-bold fs-6">EV Software </h3>
                                        <p class="mb-0" style="font-size: 12px;">Smart software upgrades and diagnostics
                                            for EVs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Types Section End -->




    <!-- Form Section Start -->

    <section
        class="container-fluid major-minor-form-bg major-minor-form-left-side-car major-minor-form-right-side-car position-relative text-center vh-100">
        <div class="align-items-center container d-flex flex-column justify-content-center w-100">
            <h2 class="display-5  fw-bold">Get A <span class="main-color">Free Car Inspection</span></h2>
            <div class="w-100 w-md-50 white" style="z-index: 10;">
                @include('user.layouts.partials.form')
            </div>
        </div>
    </section>

    <!-- Form Section End -->

    <!--  -->

    <div class="container table-responsive py-5">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Services</th>
                    <td>Minor Service </td>
                    <td>Major Service </td>

                </tr>

            </tbody>
        </table>
    </div>
    <!--  -->

    <!-- Images Section Start -->


    <section class="container">
        <h2 class="display-4 fw-bold major-mino-images-section-heading-mobile-font-size text-center">Why Choose <span
                class="main-color">Gargash Auto</span>
            for Car Major/ Minor Service in Dubai?</h2>
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

    <!-- full container Start -->

    <div
        class="align-items-center auto-spa-full-container-bg container-fluid d-flex flex-column justify-content-center gap-4 auto-spa-full-container-section-height-responsive">
        <h2
            class="auto-spa-full-container-section-heading-font-size-responsive text-center text-white auto-spa-full-container-section-padding">
            Enjoy Top Quality Car Major Service in Dubai
        </h2>
        <a href="tel:+971 56 545 8853" target="_blank" class="d-flex justify-content-center w-100">
            <button type="button" class="btn btn-primary fs-6 w-50 w-md-25">
                Call Now
            </button>
        </a>
    </div>

    <!-- full container End -->
    <!-- sticky-icons Section Start -->
    @include('user.layouts.partials.sticky-icons')

    <!-- sticky-icons Section End -->
    <!-- sticky-icons Section Start -->

    @include('user.layouts.partials.sticky-icons-mobile')



    <!-- sticky-icons Section End -->
@endsection

@section('js')
@endsection

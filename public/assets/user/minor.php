


<!-- Hero  Section Start -->
<section class="minor-bg section">
    <div class="container">
        <div class="row align-items-center white">
            <div class="col-lg-7">
                <div class="experiecne-top-content">
                    <h2 class="display-4 fw-bold mx-auto primary-color text-start">
                        Quick Fix,
                        <span class="text-warning">Smooth Drive</span>
                    </h2>
                    <p class="fs-6 fw-light lh-sm text-secondary">Basic maintenance for a reliable ride with quick, essential service checks.</p>
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
                <img src="{{ asset('assets/user/img/minor-car.png') }}" alt="" />
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
                <h2 class="display-6 fw-bolder lh-1 px-5">
                    All Types of Electric Car Major <span style="color: #E6B110;">Service in Dubai</span>
                </h2>
                <p class="fs-6 fw-semibold m-0 text-black-50">Quick Fit Auto Center is a one-stop solution to all types of Car Major Service in Dubai. We have expert technicians ready to reinstate your Vehicle’s Performance through minor and major service in Dubai. </p>
            </div>
            <div class="w-100 d-flex flex-column gap-3">
                <!-- Nav Tabs -->
                <div class="align-items-center d-flex justify-content-center w-100">
                    <ul class="border d-flex justify-content-around nav nav-pills px-4 py-3 rounded-pill" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill active" id="pills-minor-tab" data-bs-toggle="pill" data-bs-target="#pills-minor" type="button" role="tab" aria-controls="pills-minor" aria-selected="true">Minor Services</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill" id="pills-major-tab" data-bs-toggle="pill" data-bs-target="#pills-major" type="button" role="tab" aria-controls="pills-major" aria-selected="false">Major Services</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill" id="pills-contract-tab" data-bs-toggle="pill" data-bs-target="#pills-contract" type="button" role="tab" aria-controls="pills-contract" aria-selected="false">Service Contract</button>
                        </li>
                    </ul>
                </div>

                <!-- Tab Content -->
                <div class="tab-content" id="pills-tabContent">
                    <!-- Minor Services Tab -->
                    <div class="tab-pane fade show active" id="pills-minor" role="tabpanel" aria-labelledby="pills-minor-tab">
                        <div class="row gx-3 gy-3 w-100 pb-4">
                            <div class="col-6 col-md-3">
                                <div class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">
                                    <img src="{{ asset('assets/user/img/icons/image 5.png') }}" alt="" class="img-fluid me-auto w-50 w-md-25">
                                    <div>
                                        <h3 class="fw-bold fs-6">Charging Services</h3>
                                        <p class="mb-0" style="font-size: 12px;">Lorem Ipsum simply dummy text of the printing
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">
                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-2.png') }}" alt=""
                                        class="img-fluid me-auto w-50 w-md-25">
                                    <div>
                                        <h3 class="fw-bold fs-6">Maintenance </h3>
                                        <p class="mb-0" style="font-size: 12px;">Lorem Ipsum simply dummy text of the printing
                                            typesetting</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">

                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-3.png') }}" alt=""
                                        class="img-fluid me-auto  w-md-25">
                                    <div>
                                        <h3 class="fw-bold" style="font-size: 17px;">Roadside Assistance</h3>
                                        <p class="mb-0" style="font-size: 12px;">Lorem Ipsum simply dummy text of the printing
                                            typesetting</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">

                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-4.png') }}" alt=""
                                        class="img-fluid me-auto w-50 w-md-25">
                                    <div>
                                        <h3 class="fw-bold fs-6">Leasing Services</h3>
                                        <p class="mb-0" style="font-size: 12px;">Lorem Ipsum simply dummy text of the printing
                                            typesetting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-3 gy-3 w-100 justify-content-md-center">
                            <div class="col-6 col-md-3">
                                <div class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">

                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-5.png') }}" alt=""
                                        class="img-fluid ">
                                    <div>
                                        <h3 class="fw-bold fs-6">Insurance </h3>
                                        <p class="mb-0" style="font-size: 12px;">Lorem Ipsum simply dummy text of the printing
                                            typesetting</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">

                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-6.png') }}" alt=""
                                        class="img-fluid me-auto w-md-25">
                                    <div>
                                        <h3 class="fw-bold fs-6">Battery Recycling </h3>
                                        <p class="mb-0" style="font-size: 12px;">Lorem Ipsum simply dummy text of the printing
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">

                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-7.png') }}" alt=""
                                        class="img-fluid me-auto w-50 w-md-25">
                                    <div>
                                        <h3 class="fw-bold fs-6">EV Software </h3>
                                        <p class="mb-0" style="font-size: 12px;">Lorem Ipsum simply dummy text of the
                                            printing
                                            typesetting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Major Services Tab -->
                    <div class="tab-pane fade" id="pills-major" role="tabpanel" aria-labelledby="pills-major-tab">
                        <div class="row gx-3 gy-3 w-100">
                            <div class="col-6 col-md-3">
                                <div class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">
                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-3.png') }}" alt="" class="img-fluid me-auto w-md-25">
                                    <div>
                                        <h3 class="fw-bold" style="font-size: 17px;">Roadside Assistance</h3>
                                        <p class="mb-0" style="font-size: 12px;">Lorem Ipsum simply dummy text of the printing typesetting</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">
                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-4.png') }}" alt="" class="img-fluid me-auto w-50 w-md-25">
                                    <div>
                                        <h3 class="fw-bold fs-6">Leasing Services</h3>
                                        <p class="mb-0" style="font-size: 12px;">Lorem Ipsum simply dummy text of the printing typesetting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Contract Tab -->
                    <div class="tab-pane fade" id="pills-contract" role="tabpanel" aria-labelledby="pills-contract-tab">
                        <div class="row gx-3 gy-3 w-100 justify-content-md-center">
                            <div class="col-6 col-md-3">
                                <div class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">
                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-5.png') }}" alt="" class="img-fluid">
                                    <div>
                                        <h3 class="fw-bold fs-6">Insurance</h3>
                                        <p class="mb-0" style="font-size: 12px;">Lorem Ipsum simply dummy text of the printing typesetting</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">
                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-6.png') }}" alt="" class="img-fluid me-auto w-md-25">
                                    <div>
                                        <h3 class="fw-bold fs-6">Battery Recycling</h3>
                                        <p class="mb-0" style="font-size: 12px;">Lorem Ipsum simply dummy text of the printing</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="align-items-center bg-white d-flex flex-column flex-md-row gap-2 p-3 rounded-4 shadow">
                                    <img src="{{ asset('assets/user/img/all-types-tab-icon-7.png') }}" alt="" class="img-fluid me-auto w-50 w-md-25">
                                    <div>
                                        <h3 class="fw-bold fs-6">EV Software</h3>
                                        <p class="mb-0" style="font-size: 12px;">Lorem Ipsum simply dummy text of the printing typesetting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap JS (required for tabs functionality) -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </div>
    </div>
</section>

<!-- Types Section End -->



<!-- gateway-section Start Here  -->
  @include('user.layouts.partials.gateway')
<!-- gateway-section Ends Here  -->
<!-- full container Section  start-->

<section class="container-fluid assistance-full-section-bg " style="height: 40vh;">
    <div class="align-items-center h-100 justify-content-center px-5 row row-cols-md-2 w-100">
        <div class=" text-white">
            <p class="fs-6 fw-semibold m-0">Less than 30 min Arrival and</p>
            <h2 class="fs-2  fw-semibold">24/7 Roadside Assistance</h2>
        </div>

        <a href="tel:+971 56 545 8853" class="align-items-center text-white d-flex gap-1 flex-wrap justify-content-end">
            <span class="align-items-center border d-flex gap-4 px-4 px-md-5 py-3 rounded-2">
                <i class="fa-solid fa-phone fs-1 fw-bold"></i>
                <span>
                    <p class="fs-4 road-side-assistance-full-container-text-font-size-responsive fw-semibold m-0  ">We Are Ready 24/7</p>
                    <p class="fs-4 road-side-assistance-full-container-text-font-size-responsive fw-bold m-0">+971 56 545 8853</p>
                </span>
            </span>
        </a>

    </div>

</section>

<!-- full container Section  End-->

<!-- sticky-icons Section Start -->
    @include('user.layouts.partials.sticky-icons')

<!-- sticky-icons Section End -->
 <!-- sticky-icons Section Start -->

    @include('user.layouts.partials.sticky-icons-mobile')



<!-- sticky-icons Section End -->


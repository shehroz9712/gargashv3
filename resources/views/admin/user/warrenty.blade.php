@extends('user.layouts.app')

@section('css')
@endsection


@section('content')



<!-- Hero  Section Start -->
<section class="align-items-center d-flex justify-content-center section warrenty-hero-bg vh-100">
    <div class="container">
        <div class="row align-items-center white">
            <div class="col-lg-6">
                <div class="experiecne-top-content">
                    <h2 class=" heading-font primary-color mx-auto text-start display-3 fw-bold">
                        Get *15% Off On Extended<span class="secondary-color"> Warranty Package </span>
                    </h2>
                    <p class="fs-6 fw-semibold lh-sm">Auto Body Repair & Service in Dubai for American, German, Japanese, and All Luxury Cars. Discounted Price, Free Pickup & Drop Off, Free Inspection & Estimate. Call Us for Free Pickup</p>
                    <span class="d-flex gap-4">
                        <a href="tel:+971 56 545 8853" target="_blank"><button class="border-0 btn btn-primary fs-6 fw-semibold text-dark">Call Now</button></a>
                        <a href="https://wa.me/971547935400" target="_blank">
                        <button class="bg-transparent border-2 border-dark btn btn-primary fs-6 fw-semibold text-dark">Schedule Services</button>
                        </a>
                        
                    </span>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/user/img/warrenty-hero-right.png') }}" alt="" style="max-width: 110%;" />
            </div>
        </div>
    </div>
</section>
<!-- Hero  Section End -->


<!-- Partner Section Start -->

<section class="container-fluid vh-100">
    <div class="container">
        <div class="row vh-100">
            <div class="col-md-5 my-auto">
                <img src="{{ asset('assets/user/img/warrenty-imges.png') }}" alt="" class="mt-5">
            </div>
            <div class="col-md-7 d-flex flex-column justify-content-center vh-100 gap-2">
                <h2 class="fs-1 fw-bold">Overview</h2>
                <ul class="d-flex flex-column fs-6 fw-light gap-3 lh-sm list-unstyled text-black-50">
                    <li>Investing in an extended warranty for your <span class="fw-bold">luxury vehicle </span>holds a level of importance that is the same purchasing a new vehicle.</li>
                    <li>Consider this: once the manufacturer’s warranty expires, you become vulnerable to potentially substantial costs arising from <span class="fw-bold ">mechanical</span> or <span class="fw-bold ">electrical</span> breakdowns.</li>
                    <li>As vehicles age, the likelihood of component failures increases. It’s not merely about the expense of replacing a part; the labor charges for fitting it will add to the overall cost.</li>
                    <li>Opting for Gargash Auto Extended Warranty for car presents a safeguard against the financial repercussions of <span class="fw-bold">unforeseen</span> repairs.</li>

                </ul>
                <button class="btn fs-6 fw-bold w-50">Click here for more Offers</button>
            </div>

        </div>
    </div>
</section>

<!-- Partner Section End -->

<!-- Form Section Start -->

<section class=" warrenty-form-bg">
    <div class="container">
        <div class="align-items-center row white">

            <div class="col-md-6">
                <h1 class="display-5 fw-bold lh-1 px-5 text-center">
                    Dealership Quality Services At
                    <span class="main-color">Competitive Prices!</span>
                </h1>
                <p class="fs-6 fw-semibold pt-3 text-black text-center">Book Gargash Car Workshop</p>
            </div>
            <div class="col-md-6 black">
                 @include('user.layouts.partials.form')
            </div>

        </div>
    </div>

</section>

<!-- Form Section End -->


<!-- Packages Section Start -->


<section class="align-items-center container d-flex justify-content-center flex-column gap-4">
    <div class="text-center">
        <h4 class="fs-3 fw-bold text-dark m-0">Explore our Extended</h4>
        <h2 class="display-5 fw-bold" style="color: #E6B110;">Warranty Packages</h2>
    </div>
    <div class="row">
        <div class="col">
            <div class="border-0 card">
                <div class="bg-white border-0 card-body d-flex flex-column gap-3 py-5 rounded-5 shadow text-center" style="padding:0px 4rem; ">
                    <h5 class="card-title fw-bold" style="font-size: 15px;">Silver Package</h5>
                    <span>
                        <h5 class="card-title fs-5 fw-bold">AED*</h5>
                        <h2 class="display-5 fw-bold">2800</h2>
                    </span>
                    <p class="fw-semibold fs-5">Starting from</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="border-0 card">
                <div class="bg-white border-0 card-body d-flex flex-column gap-3 py-5 rounded-5 shadow text-center" style="padding:0px 4rem;  background: linear-gradient(180deg, #F7EE8E 0%, #E0AA3E 29%, #DFA93E 54%, #BC8D43 76%);">
                    <i class="fa-solid fa-fire-flame-curved fs-1"></i>
                    <h5 class="card-title fs-5 fw-bold">Gold Package</h5>
                    <span>
                        <h5 class="card-title fs-5 fw-bold">AED*</h5>
                        <h2 class="display-5 fw-bold">3500</h2>
                    </span>
                    <p class="fw-semibold fs-5">Starting from</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="border-0 card">
                <div class="bg-white border-0 card-body d-flex flex-column gap-3 py-5 rounded-5 shadow text-center" style="padding:0px 4rem; ">
                    <h5 class="card-title fw-bold" style="font-size: 15px;">Platinum Package</h5>
                    <span>
                        <h5 class="card-title fs-5 fw-bold">AED*</h5>
                        <h2 class="display-5 fw-bold">6150</h2>
                    </span>
                    <p class="fw-semibold fs-5">Starting from</p>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- Packages Section End -->

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

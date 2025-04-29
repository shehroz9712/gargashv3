@extends('user.layouts.app')
@section('css')
@endsection
@section('content')

<!-- Hero  Section Start -->
<section class="container-fluid all-pages-hero-height-responsive vh-100 electric-car-bg section">
    <div class="container d-flex align-items-center h-100">
        <div class="row align-items-center white">
            <div class="col-md-6">
                <div class="experiecne-top-content">
                    <h2 class="display-3 electric-repair-hero-heading-font-size-responsive fw-bold">
                        Warranty Package
                        <span class="secondary-color ">Get *15% Off On Extended</span>
                    </h2>
                    <p class="fs-6 fw-semibold lh-sm text-secondary">Delivering exceptional car care services for your peace of mind on every mile
                    </p>
                    <span class="d-flex flex-column flex-md-row gap-4">
                        <a href="https://wa.me/971547935400" target="_blank"><button class="btn fw-semibold rounded-3 text-black fs-6">Book Your Service Today!</button></a>
                    </span>
                </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
                <img src="{{ asset('assets/user/img/CarImg1.png') }}" alt="" class="extended-warranty-hero-car-img-responsive" style="max-width: 125% !important;" />
            </div>
        </div>
    </div>
</section>
<!-- Hero  Section End -->


<!-- Partner Section Start -->

<section class="container-fluid">
    <div class="container">
        <div class="align-items-center g-5 row">
            <div class="col-md-5 my-auto">
                <img src="{{ asset('assets/user/img/warrenty-imges.png') }}" alt="" class="mt-5">
            </div>
            <div class="col-md-7 d-flex flex-column justify-content-center gap-2">
                <h2 class="fs-1 fw-bold">Overview</h2>
                <ul class="d-flex flex-column fs-6  gap-3 lh-sm list-unstyled text-black-50">
                    <li>Investing in an extended warranty for your <span class="fw-bold">luxury vehicle </span>holds a level of importance that is the same purchasing a new vehicle.</li>
                    <li>Consider this: once the manufacturer’s warranty expires, you become vulnerable to potentially substantial costs arising from <span class="fw-bold ">mechanical</span> or <span class="fw-bold ">electrical</span> breakdowns.</li>
                    <li>As vehicles age, the likelihood of component failures increases. It’s not merely about the expense of replacing a part; the labor charges for fitting it will add to the overall cost.</li>
                    <li>Opting for Gargash Auto Extended Warranty for car presents a safeguard against the financial repercussions of <span class="fw-bold">unforeseen</span> repairs.</li>

                </ul>
                <a href="https://wa.me/971547935400" target="_blank">
                    <button class="btn fs-6 fw-bold w-100 w-md-50 px-0">Click here for more Offers</button>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Partner Section End -->

<!-- Form Section Start -->

<section class=" warrenty-form-bg">
    <div class="container">
        <div class="align-items-center row white">

            <div class="col-md-6 d-flex flex-column gap-3">
                <h1 class="display-5 extended-warranty-form-heading-responsive m-0 fw-bold lh-1 px-5 text-center text-black">
                    Dealership Quality Services At
                    <span class="main-color">Competitive Prices!</span>
                </h1>
                <p class="fs-6 fw-semibold text-black text-center m-0">Book Gargash Car Workshop</p>
            </div>
            <div class="col-md-6 black">
                @include('user.layouts.partials.form')
            </div>

        </div>
    </div>

</section>

<!-- Form Section End -->


<!-- Packages Section Start -->


<section class="align-items-center container d-flex justify-content-center flex-column gap-4 overflow-hidden ">
    <div class="text-center">
        <h4 class="fs-3 fw-bold text-dark m-0">Explore our Extended</h4>
        <h2 class="display-5 fw-bold" style="color: #E6B110;">Warranty Packages</h2>
    </div>
    <div class="row row-cols-md-3 g-5 g-md-4">
        <div class="">
            <div class="border-0 card">
                <div class="bg-white border-0 card-body d-flex flex-column gap-3 py-5 rounded-5 shadow text-center" style="padding:0px 6rem; ">
                    <h5 class="card-title fw-bold" style="font-size: 15px;">Silver Package</h5>
                    <span>
                        <h5 class="card-title fs-5 fw-bold">AED*</h5>
                        <h2 class="display-5 fw-bold">2800</h2>
                    </span>
                    <p class="fw-semibold fs-5">Starting from</p>
                </div>
            </div>
        </div>
        <div class="">
            <div class="border-0 card">
                <div class="bg-white border-0 card-body d-flex flex-column gap-3 py-5 rounded-5 shadow text-center" style="padding:0px 6rem;  background: linear-gradient(180deg, #F7EE8E 0%, #E0AA3E 29%, #DFA93E 54%, #BC8D43 76%);">
                    <i class="fa-solid fa-fire-flame-curved fs-1"></i>
                    <h5 class="card-title fw-bold" style="font-size: 15px;">Gold Package</h5>
                    <span>
                        <h5 class="card-title fs-5 fw-bold">AED*</h5>
                        <h2 class="display-5 fw-bold">3500</h2>
                    </span>
                    <p class="fw-semibold fs-5">Starting from</p>
                </div>
            </div>
        </div>
        <div class="">
            <div class="border-0 card">
                <div class="bg-white border-0 card-body d-flex flex-column gap-3 py-5 rounded-5 shadow text-center" style="padding:0px 6rem; ">
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

@include('user.layouts.partials.gateway-images')
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
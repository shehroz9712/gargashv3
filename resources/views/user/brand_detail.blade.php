@extends('user.layouts.app')
@section('meta')
 <title>{{ $brand->meta_title }}</title>
    <meta name="description" content="{{ $brand->meta_description }}">
    <meta name="keywords" content="{{ $brand->meta_keyword }}">

@endsection
@section('css')
@endsection


@section('content')

<!-- Hero Section Start -->
<section class="container-fluid all-pages-hero-height-responsive auto-spa-bg section overflow-hidden">
    <div class="container h-100">
        <div class="row align-items-center white h-100">
            
            <div class="col-lg-7 col-md-6 order-md-2 ">
                <div class="d-flex justify-content-center justify-content-md-end">
                    <img src="{{ asset('assets/uploads/brands/' . $brand->image) }}" 
                         alt="{{ $brand->name }}" 
                         class="img-fluid hero-image" 
                         style="max-width: min(100%, 650px)" />
                </div>
            </div>
            
            <div class="col-lg-5 col-md-6 order-md-1 ">
                <div class="experiecne-top-content py-4 py-md-0">
                    <h1 class="display-4 display-md-3 fw-bold mb-3">
                        <span>{{ $brand->name }}</span>
                    </h1>
                    <p class="fs-6 fw-semibold lh-sm mb-4">{{ $brand->heading }}</p>
                    <div class="d-flex flex-column flex-md-row gap-3">
                        <a href="https://wa.me/971547935400" target="_blank" class="text-decoration-none">
                            <button class="btn btn-light rounded-3 text-black fs-6 px-4 py-2">
                                Book Your Service Today
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            
           
        </div>
    </div>
</section>

<section class="container">
    <div class="row d-flex  flex-md-row align-items-center">
        <div class="col-md-12 text-start">
            {!! $brand->description !!}
        </div>
    </div>
</section>
<!-- Our Vision  Start  -->
@foreach ($brand->sections as $index => $section)
<section class="container pt-lg-5 pt-0 ">
    <div class="row g-4 d-flex align-items-center {{ $index % 2 == 1 ? 'flex-md-row-reverse' : '' }}">
        <div class="col-md-6">
            <img class="img-fluid rounded-3" style="box-shadow: 4px 4px 4px #ccc;" src="{{ asset('assets/uploads/brands/' . $section->image) }}"
                alt="hero" />
        </div>
        <div class="col-md-6 text-start">

            <h2 class="display-6 fw-bold">{{ $section->heading }}</h2>
            <p>{!! $section->description !!}</p>

        </div>

    </div>
</section>
@endforeach

<!-- full container Start -->

<!--<div class="audi-full-container-bg container-fluid d-flex flex-column gap-4 justify-content-center px-5"-->
<!--    style="height: 50vh;">-->
<!--    <div class="container">-->

<!--        <div class="align-items-center d-flex flex-column justify-content-center gap-4">-->
<!--            <span class="text-center">-->

<!--                <h2 class="ceramic-full-container-main-heading-responsive fw-bolder text-white m-0 lh-lg">Trusted-->
<!--                    -->
<!--                    Repair Workshop & Service Center-->
<!--                </h2>-->
<!--                <p class="fs-6 fw-normal text-white">We custom-make our affordable Audi service quotation based on your-->
<!--                    car’s requirements and do not use any generic price. We ensure you get the best-in-class affordable-->
<!--                    Audi service at our Audi workshop. As German car experts, we know the ins and outs of every premium-->
<!--                    car. Powered by trusted parts and equipment suppliers and a passionate Audi mechanics team, our goal-->
<!--                    is to become the best dealer-alternative Audi Service Center in Dubai.-->

<!--                </p>-->
<!--            </span>-->
<!--            <span class="d-flex gap-3">-->
<!--                <button type="button"-->
<!--                    class="btn btn-primary text-white w-100 w-md-50 fs-6 audi-full-container-btn-hover-bg-change">-->
<!--                    Our Services-->
<!--                </button>-->
<!--                <button type="button"-->
<!--                    class="bg-transparent border btn btn-primary text-white w-100 w-md-50 fs-6 audi-full-container-btn-hover-bg-change">-->

<!--                    Our Services-->
<!--                </button>-->
<!--            </span>-->

<!--        </div>-->


<!--    </div>-->

<!--</div>-->

<!-- full container End -->

<!-- icons section Start -->
<section class="container">
    <div>
        <h2 class="fs-1 fw-bold text-center">Our  Periodic <span style="color: #E6B110;"> Maintenance
            </span>Service
            Includes</h2>
        <p class="fs-6 fw-semibold text-black-50 text-center">After you hand over the car to our 
            garage, we will go
            through an essential examination, create an inspection report, and start working on the issues. We will
            decide and consult with you before making any replacements or repairs during the servicing period.</p>
    </div>
    <div class="row row-cols-1  row-cols-sm-2 row-cols-md-5 gap-4 mt-4 justify-content-center">
        <div>
            <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                <div class="img col-4">
                    <img src="{{ asset('assets/user/img/brands/logo1.png') }}" alt="">
                </div>
                <div class="d-flex flex-column gap-2 text-center col-8">
                    <h5 class="m-0 fs-6 fw-normal text-capitalize"> Engine oil check and change
                    </h5>

                </div>
            </div>
        </div>
        <div>
            <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                <div class="img col-4">
                    <img src="{{ asset('assets/user/img/brands/logo2.png') }}" alt="">
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
                    <img src="{{ asset('assets/user/img/brands/logo3.png') }}" alt="">
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
                    <img src="{{ asset('assets/user/img/brands/logo4.png') }}" alt="">
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
                    <img src="{{ asset('assets/user/img/brands/logo5.png') }}" alt="">
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
                    <img src="{{ asset('assets/user/img/brands/logo6.png') }}" alt="">
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
                    <img src="{{ asset('assets/user/img/brands/logo7.png') }}" alt="">
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
                    <img src="{{ asset('assets/user/img/brands/logo8.png') }}" alt="">
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
                    <img src="{{ asset('assets/user/img/brands/logo9.png') }}" alt="">
                </div>
                <div class="d-flex flex-column gap-2 text-center col-8">
                    <h5 class="m-0 fs-6 fw-normal text-capitalize"> transmission repair and oil
                        refill
                    </h5>

                </div>
            </div>
        </div>
        <div>
            <div class="align-items-center row px-2 py-3 rounded-3 shadow cursor-pointer Maintenance-box-hover-effect">
                <div class="img col-4">
                    <img src="{{ asset('assets/user/img/brands/logo10.png') }}" alt="">
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
                    <img src="{{ asset('assets/user/img/brands/logo11.png') }}" alt="">
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
                    <img src="{{ asset('assets/user/img/brands/logo12.png') }}" alt="">
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
                    <img src="{{ asset('assets/user/img/brands/logo13.png') }}" alt="">
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
                    <img src="{{ asset('assets/user/img/brands/logo14.png') }}" alt="">
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
                    <img src="{{ asset('assets/user/img/brands/logo15.png') }}" alt="">
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
                    <img src="{{ asset('assets/user/img/brands/logo16.png') }}" alt="">
                </div>
                <div class="d-flex flex-column gap-2 text-center col-8">
                    <h5 class="m-0 fs-6 fw-normal text-capitalize">Clean the engine bay
                    </h5>

                </div>
            </div>
        </div>

    </div>
</section>
@include('user.layouts.partials.google-review')

<!-- icons section End -->

<!-- Slider Start -->

<!-- discover-section Starts Here  -->
@include('user.layouts.partials.sticky-icons')
@include('user.layouts.partials.sticky-icons-mobile')


<!-- discover-section Ends Here  -->


<!-- Slider End -->
@endsection

@section('js')
@endsection
@extends('user.layouts.app')

@section('css')
@endsection
@section('meta')
    <title>Car Ceramic Coating Services in Dubai UAE
 </title>
    <meta name="description" content=" Car Ceramic  Coating Services in Dubai UAE. The ceramic coating service will make your car’s look glossy, shiny and elegant. ">
    <meta name="keywords" content=" Ceramic Coating Dubai, Car Ceramic Coating Service Dubai, high graded ceramic coating service Dubai">    
@endsection

@section('content')


<!-- Body Content Start Here -->

<div class="align-items-center all-pages-hero-height-responsive cearmic-bg container-fluid d-flex justify-content-center vh-100">
  <div class="container">
    <div class="align-items-center d-flex flex-column justify-content-center">
      <div class="ceramic-hero-heading-div">
        <h1 class="fw-bolder text-center m-0 gradient-text  ceramic-hero-heading-responsive">
          Ceramic Coating
        </h1>
      </div>
      <div class="ceramic-hero-img-div">
        <img src="{{ asset('assets/user/img/ceramic-car.png') }}" alt="" loading="lazy" class="ceramic-hero-img-margin-bottom" />
      </div>
    </div>
  </div>
</div>
<!-- Cearmic Hero Section End -->
<!-- Save Section Start -->
<div class="container ceramic-save-section-margin-top-responsive">
  <div class="align-items-center row">
    <div class="col-md-6">
      <h3 class="fs-4 fw-normal lh-lg">Save your Car's paint with</h3>
      <h1 class="display-5 fw-bold lh-1"> Durable Car <span class="main-color">Ceramic Coating Service in Dubai</span>
        </h2>
        <p class="fs-6 fw-normal lh-sm text-secondary"> The UV rays, dirt’s, marks, stains and muddy particles are always in contact with the vehicle’s body fading out the shine of the car. Here comes our car ceramic coating service in Dubai, based on nanotechnology and installing a protective layer over the auto body paint. This will rescue the car’s body with direct contamination of external harmful elements and your car will remain in excellent condition! </p>
        <div class="d-flex flex-column flex-md-row gap-3">
          <a href="https://wa.me/971547935400"><button class="btn fs-6 fw-bold text-dark">Call Now</button> </a>
          
        </div>
    </div>
    <div class="col-md-6">
      <img src="{{ asset('assets/user/img/save-section-right.png') }}" alt="" />
    </div>
  </div>
</div>
<!-- Save Section End -->
<!-- Cearmic Form Section Start -->
<!-- Form Section Start Here -->


<section class="ceramic-form-section-bg">
  <div class="container">
    <div class="align-items-center flex-wrap-reverse row white">

      <div class="col-md-6 dark">
        @include('user.layouts.partials.form')
      </div>

      <div class="col-md-6 mb-4 mb-md-0">
        <h1 class="auto-spa-form-heading-font-size-responsive fw-bold lh-1 mb-4 px-5 text-center">
          Your seamless
          <span class="main-color">Driving Experience</span> Begins Here.
        </h1>
      
      </div>



    </div>
  </div>

</section>

<!-- Form Section End Here -->
<!-- Cearmic Form Section End -->
<!-- Coating Section Start -->
<section class="container">
  <div class="d-flex flex-column gap-4">
    <div class="text-center">
      <h2 class="display-5 fw-bold">Benefits of Car <span class="main-color">Ceramic Coating</span>
      </h2>
      <p class="fs-6 fw-normal lh-sm"> We have all necessary advance tools at our Auto body workshop, assuring car owners they get high graded ceramic coating service in Dubai. The coating perfectly synchronized with the car’s body paint and never break or wash away. This proves that ceramic coating is a long term and durable solution. Save your priceless vehicle with car ceramic coating service in Dubai! </p>
    </div>
    <div class="g-3 row row-cols-md-3">
      <div class=" d-flex flex-column gap-3 align-items-center">
        <img src="{{ asset('assets/user/img/coating-bottom-1.png') }}" alt="" />
        <p class="fs-6 fw-normal lh-sm"> The ceramic coating will repel the water and it will never stay over the car’s body. Thus, it is hard for the stains and dust marks to adhere with the body. This saves your car and even make the car washing service less frequent. </p>
      </div>
      <div class=" d-flex flex-column gap-3 align-items-center">
        <p> Your car is always exposed directly to the sunlight and harmful rays, that’s why the paint will begin to fade and oxidize. There comes ceramic coating that adds a protective layer, like a firm barrier and escape the direct connection of auto body with the external environment. </p>
        <img src="{{ asset('assets/user/img/coating-bottom-2.png') }}" alt="" />
      </div>
      <div class=" d-flex flex-column gap-3 align-items-center">
        <img src="{{ asset('assets/user/img/coating-bottom-3.png') }}" alt="" />
        <p class="fs-6 fw-normal lh-sm"> The ceramic coating service will make your car’s look glossy, shiny and elegant. Drive confidently on the roads with your near, clean and beautifully looking vehicle. </p>
      </div>
    </div>
  </div>
</section>
<!-- full container Start -->

<div class="auto-spa-full-container-bg container-fluid d-flex flex-column gap-4 justify-content-center px-5" style="height: 50vh;">
  <div class="container">
    <div class="g-3 g-md-0 row">
      <div class="col-md-7">
        <h3 class=" ceramic-full-container-top-heading-responsive fw-light text-white">Get a Quick Contact with our</h3>
        <h2 class="ceramic-full-container-main-heading-responsive fw-bolder text-white">Service Advisor in Dubai</h2>
      </div>
      <div class="col-md-5 d-flex flex-column gap-3 gap-md-4 align-items-end">
       <a href="https://wa.me/971547935400" target="_blank"><button class="btn fw-semibold rounded-3 text-black fs-6">Book Your Service Today!</button></a>
      </div>
    </div>
  </div>

</div>

@include('user.layouts.partials.gateway-images') @include('user.layouts.partials.google-review') @include('user.layouts.partials.sticky-icons') @include('user.layouts.partials.sticky-icons-mobile')

@endsection

@section('js')
@endsection
@extends('user.layouts.app')

@section('css')
@endsection

@section('meta')
    <title>Vinyl Car Wrapping Services Dubai UAE</title>
    <meta name="description" content="Vinyl Car Wrapping Services Dubai UAE. Give your vehicle the makeover it deserves with our expert car wrapping service today!">
    <meta name="keywords" content="Vinyl Car Wrapping Dubai">    
@endsection

@section('content')

<!-- hero section start -->

<div class="container-fluid Wrapping-bg overflow-hidden">
  <div class="container">
    <h1 class="fw-bolder text-center m-0 gradient-text responsive-heading-1"> Car Wrapping </h1>
    <img src="{{ asset('assets/user/img/Wrapping-car.png') }}" alt="" loading="lazy">
  </div>
</div>
<!-- hero section end -->
<!-- Save Section Start -->
<div class="container ">
  <div class="align-items-center row">
    <div class="col-md-6">
      <h3 class="fs-4 fw-normal lh-lg"></h3>
      <h1 class="display-5 fw-bold lh-1"> Premium <span class="main-color">Car Wrapping</span> Service in Dubai
      </h1>
      <p class="fs-6 fw-normal lh-sm text-secondary"> Transform your vehicle's appearance and protect its original paint with our top-tier car wrapping services in Dubai. At Gargash Auto, we offer a wide range of high-quality wraps that not only enhance your car's aesthetics but also provide a durable shield against everyday wear and tear.</p>
      <div class="d-flex flex-column flex-md-row gap-3">
        <span class="d-flex flex-column flex-md-row gap-4"> <a href="https://wa.me/971547935400" target="_blank"><button class="btn fw-semibold rounded-3 text-black fs-6">Book Your Services Today!!</button></a> </span>
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
        <h3 class="auto-spa-form-heading-font-size-responsive fw-bold lh-1 mb-4 px-5 text-center">
          Your seamless
          <span class="main-color">Driving Experience</span> Begins Here.
        </h3>

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
      <p class="fs-6 fw-normal lh-sm"> We’ve equipped our auto body workshop with cutting-edge tools and technology to deliver premium car wrapping services in Dubai. Each wrap is precisely applied to blend seamlessly with your vehicle’s curves and contours, ensuring a flawless, paint-like finish that lasts. Unlike paint, wraps don’t chip or fade under harsh conditions—making it a smart, long-term solution for both style and protection. Give your vehicle the makeover it deserves with our expert car wrapping service today!</p>
    </div>
    <div class="g-3 row row-cols-md-3">
      <div class=" d-flex flex-column gap-3 align-items-center">
        <img src="{{ asset('assets/user/img/coating-bottom-1.png') }}" alt="" />
        <p class="fs-6 fw-normal lh-sm"> Car wrapping acts like a second skin, shielding your vehicle’s original paint from harsh sun, sand, road debris, and minor scratches. Especially in Dubai’s intense climate, a quality wrap is your car’s best defense against fading and oxidation. It keeps your factory finish untouched, helping retain resale value while reducing the need for touch-ups or repaints.
        </p>
      </div>
      <div class=" d-flex flex-column gap-3 align-items-center">
        <p> Whether you're into matte black, high-gloss finishes, carbon fiber textures, or bold color shifts, wrapping opens up endless personalization options. And the best part? It’s not permanent. You can change your car’s look whenever you want—no paint required. It’s the ultimate freedom of expression, wrapped up in one clean package.
        </p>
        <img src="{{ asset('assets/user/img/coating-bottom-2.png') }}" alt="" />
      </div>
      <div class=" d-flex flex-column gap-3 align-items-center">
        <img src="{{ asset('assets/user/img/coating-bottom-3.png') }}" alt="" />
        <p class="fs-6 fw-normal lh-sm"> Car wraps are designed for durability and low maintenance. They’re resistant to fading, cracking, and peeling when properly cared for—and they don’t require any special products to stay clean. Just regular washes and you’re good to go. It's a sleek, stress-free way to keep your car turning heads year after year.
        </p>
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
        <button
          type="button"
          class="bg-transparent border btn btn-primary text-white w-100 w-md-50 fs-6">
          Our Services
        </button>
        <a href="tel:+971 56 545 8853" target="_blank" class="d-flex justify-content-end w-100"> <button
            type="button"
            class="btn btn-primary w-100 w-md-50 fs-6">
            Call Now
          </button></a>

      </div>
    </div>
  </div>

</div>

@include('user.layouts.partials.gateway-images') @include('user.layouts.partials.google-review') @include('user.layouts.partials.sticky-icons') @include('user.layouts.partials.sticky-icons-mobile')

@endsection

@section('js')
@endsection
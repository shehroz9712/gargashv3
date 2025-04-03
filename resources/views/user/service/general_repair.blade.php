@extends('user.layouts.app')

@section('css')
@endsection


@section('content')

<!-- Hero Section start -->
<section class="container-fluid vh-100 general_repair_hero_bg">
    <div class="container h-100 w-100">
      <div class="align-items-center d-flex flex-column h-100 justify-content-center text-center w-100">
        <h1 class="fw-bolder text-white lh-1 responsive-heading-2">
          <span class="main-color">Gargash Auto Service</span>
          <br> Center Dubai
        </h1>
        <p class="fs-6 fw-light text-light">Adding exquisite care to your luxurious journey</p>
        <div class="align-items-center d-flex flex-column flex-md-row gap-4 h-auto w-100 justify-content-center">
          <a href="https://wa.me/971547935400" target="_blank">
            <button class="btn ">Avail Your Discount</button>
          </a>
          <a href="tel:+971 56 545 8853" target="_blank">
            <button class="bg-transparent border btn px-5 text-white w-fit">Call Now</button>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->
  <!-- Form Section  start-->
  <section class="container-fluid   general-repair-form-bg overflow-visible ">
    <div class="container h-100 w-100">
      <div class="align-items-center flex-wrap-reverse g-md-5 g-3 justify-content-center row">
        <div class="col-md-6 white">  @include('user.layouts.partials.form') </div>
        <div class="col-md-6 px-0 text-center">
          <h2 class="fw-bolder text-black lh-1 responsive-heading-3"> Your seamless <span class="main-color">Driving Experience</span> Begins Here. </h2>
          <p>Book Gargash Car Services</p>
        </div>
      </div>
      <img src="{{ asset('assets/user/img/gr-form-car-collection.png') }}" alt="" class="img-fluid d-none d-md-block" style="margin-bottom: -7rem;">
    </div>
  </section>
  <!-- Form Section  End-->
  <!-- Partner Section Start -->
  <section class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex flex-column justify-content-center gap-4">
          <h2 class="fs-3 fw-semibold m-0">Why Choose Gargash Auto As your Car Service Partner? </h2>
          <ul class="fs-6 lh-base list-group m-0">
            <li>Professional Environment with High-Tech Certified Technicians</li>
            <li>Largest Independent Dealer Standard Service Center ( 4 Branches across UAE )</li>
            <li>One Stop Service Workshop with all repair facilities under one roof</li>
            <li>German, American, European, Japanese, Chinese Luxury, Exotic, Classic & EV Cars Specialists </li>
            <li>Transparent & Affordable prices, Guaranteed Customer Satisfaction</li>
            <li>Free Pickup, Inspection, Honest Video Reporting & Drop off Service</li>
          </ul>
          <button type="button" class="btn btn-primary w-fit fs-6 fw-semibold"> Call Our Advisor </button>
        </div>
        <div class="col-md-6 my-auto">
          <img src="{{ asset('assets/user/img/service-partner-right.png') }}" alt="" class="img-fluid mt-5 w-100">
        </div>
      </div>
    </div>
  </section>
  <!-- Partner Section End -->
  <!-- About Section Start -->
  <section class="align-items-center container d-flex flex-column justify-content-center mx-auto text-center gap-3">
    <h2 class="display-5 general-repair-about-heading-responsive fw-bolder text-black text-center">Complete Auto Maintenance, <br>
      <span class="main-color">Repair, & Service Solution</span>
    </h2>
    <img src="{{ asset('assets/user/img/services-solution.png') }}" alt="" class="img-fluid w-100">
    <button type="button" class="btn btn-primary w-fit fs-6"> Call Our Advisor </button>
  </section>
  <!-- About Section  End -->
  
  <!-- Brands We Section Start -->
      @include('user.layouts.partials.logo-slider')
  
  
  
  <!-- sticky-icons Section Start -->
      @include('user.layouts.partials.sticky-icons')
  
  <!-- sticky-icons Section End -->
  <!-- sticky-icons Section Start -->
  
      @include('user.layouts.partials.sticky-icons-mobile')
  
  
  
  <!-- sticky-icons Section End -->
  
  
@endsection

@section('js')
@endsection

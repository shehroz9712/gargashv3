@extends('user.layouts.app')

@section('css')
@endsection


@section('content')<!-- Hero  Section Start -->
<section class="container-fluid all-pages-hero-height-responsive vh-100 chinese-car-hero-bg overflow-hidden">
  <div class="container d-flex align-items-center h-100">
    <div class="row align-items-center white">
      <div class="col-md-6">
        <div class="experiecne-top-content">
          <h1 class="display-3 fw-bold">
            <span class="secondary-color">Expert Chinese Car </span> <br> Repair Services
          </h1>
          <p class="fs-6 fw-semibold lh-sm text-secondary">Adding exquisite care to your luxurious journey
          </p>
          <span class="d-flex flex-column flex-md-row gap-4">
            <a href="https://wa.me/971547935400" target="_blank"><button class="btn fw-semibold rounded-3 text-black fs-6">Avail Your Discount</button></a>
            <a href="tel:+971 56 545 8853" target="_blank"><button class="transparent-btn">Call Now</button></a>
          </span>
        </div>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/user/img/Chinese-Car-hero-right-car.png') }}" alt="" style="max-width: 155%;" />
      </div>
    </div>
  </div>
</section>
<!-- Hero  Section End -->


<!-- Form Section  start-->
<section class="container-fluid chinese-car-form-bg overflow-visible vh-100">
  <div class="container h-100 w-100">
    <div class="align-items-center flex-wrap-reverse g-2 h-100 justify-content-center row w-100">
      <div class="col-md-6 white"> @include('user.layouts.partials.form') </div>
      <div class="col-md-6 px-0 text-center">
        <h2 class="fw-bolder text-black lh-1 responsive-heading-3"> Your seamless <span class="main-color">Driving Experience</span> Begins Here. </h2>
        <p>Book Gargash Car Workshop</p>
      </div>
    </div>
    <img src="{{ asset('assets/user/img/Chinese-Car-form-car.png') }}" alt="" class="img-fluid d-none d-md-block" style="margin-top: -8rem;">
  </div>
</section>
<!-- Form Section  End-->


<!-- Partner Section Start -->
<section class="container-fluid mt-5">
  <div class="container">
    <div class="row ">
      <div class="col-md-6 d-flex flex-column justify-content-center ">
        <h2 class="fs-3 fw-semibold lh-sm">Why Choose Gargash Auto As your Chinese Car Service Partner?</h2>
        <ul class="fs-5 lh-base list-group py-3">
          <li>Professional Environment with High-Tech Certified Technicians</li>
          <li>Largest Independent Dealer Standard Service Center ( 5 Branches across UAE ) </li>
          <li>One Stop Service Workshop with all repair facilities under one roof</li>
          <li>German, American, European Cars, Japanese, Chinese Luxury, Exotic & Classic & EV Cars Specialists </li>
          <li>Transparent & Affordable prices, Guaranteed Customer Satisfaction</li>
          <li>Free Pickup, Inspection, Honest Video Reporting & Drop off Service</li>
        </ul>
        <button class="btn fs-6 fw-bold w-100 w-md-50">Call Our Advisor</button>
      </div>
      <div class="col-md-6 d-flex justify-content-center my-auto">
        <img src="{{ asset('assets/user/img/Chinese-Car-Partner-right-car.png') }}" alt="" class="w-100 mt-5">
      </div>
    </div>
</section>
<!-- Partner Section End -->
<!-- Maintenance Section Start -->
<section class="container-fluid  py-5">
  <div class="container d-flex flex-column gap-4">
    <h2 class="display-4 Chinese-Car-maintenace-section-heading fw-bold lh-sm text-center">
      <span style="color: #E6B110;">Complete Chinese Auto Maintenance</span> ,
      Repair, & Service Solution
    </h2>
    <img src="{{ asset('assets/user/img/Maintenance-car.png') }}" alt="">
    <span class="align-items-center justify-content-center row">
      <button class="btn fs-6 w-75 w-md-25">Call Our
        Advisor</button>
    </span>
  </div>
</section>
<!-- Maintenance Section End -->



@include('user.layouts.partials.gateway-images') @include('user.layouts.partials.google-review') @include('user.layouts.partials.sticky-icons') @include('user.layouts.partials.sticky-icons-mobile')

@endsection

@section('js')
@endsection
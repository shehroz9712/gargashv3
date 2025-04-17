@extends('user.layouts.app')

@section('css')
@endsection


@section('content')

<!-- Hero Section start -->
<section class="container-fluid vh-50 general_repair_hero_bg">
    <div class="container h-100 w-100">
      <div class="align-items-center d-flex flex-column h-100 justify-content-center text-center w-100">
        <h1 class="fw-bolder text-white lh-1 responsive-heading-2">
          <span class="main-color">Gargash Auto Major & Minor </span>
          <br> Services Center Dubai
        </h1>
        <p class="fs-6 fw-light text-light">Your Seamless Driving Experience Starts Here with our Expert Car Care</p>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->
  <!-- Form Section  start-->
  <section class="container-fluid   general-repair-form-bg overflow-visible ">
    <div class="container h-100 w-100">
      <div class="align-items-center flex-wrap-reverse g-md-5 g-3 dark justify-content-center row">
        <div class="col-md-6 white">  @include('user.layouts.partials.form') </div>
        <div class="col-md-6 px-0 text-center">
        <h2 class="fs-3 fw-semibold m-0">Expert Car Major Service Solutions in Dubai</h2>
        <br/>
          <p>At Gargash Auto, we specialize in Car Major Service Dubai to ensure your vehicle performs at its best for years to come. As a trusted Car Service Center Dubai, we offer comprehensive major services for all types of vehicles. Whether you own a luxury sedan, sports car, or family vehicle, our certified technicians are equipped to handle every aspect of major service, including engine diagnostics, transmission checks, brake systems, and much more.</p>
<p>Our service process goes beyond just a typical check-up. We conduct thorough inspections and use advanced tools to identify and resolve any underlying issues that might affect your car’s performance. With our dedication to excellence, you can trust us to restore your vehicle’s reliability and efficiency.</p>
<p>We believe in providing top-quality Car Major Service Dubai with transparency and integrity. At Gargash Auto, we use only OEM-approved parts and the latest technology to ensure your vehicle runs smoothly. Experience the best in customer care and vehicle service, and enjoy the peace of mind that comes with knowing your car is in the hands of experts.</p>
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
          <h2 class="fs-3 fw-semibold m-0">Excellence in Car Major Service Dubai for Unmatched Vehicle Performance</h2>
         <p>At Gargash Auto, we are committed to providing top-tier Car Major Service Dubai, offering specialized solutions that cater to every aspect of your vehicle’s maintenance and repair needs. As a leading Auto Repair Center Dubai, we ensure that your car receives expert care using only the highest-quality parts and cutting-edge technology. Whether you need routine service or extensive repairs, our skilled Automotive Professionals Dubai are equipped to restore your vehicle to peak condition.</p>
         <p>From comprehensive engine diagnostics to intricate mechanical repairs, Gargash Auto is your trusted destination for Complete Auto Repair Solutions Dubai. With a focus on precision and performance, we guarantee each service enhances your vehicle’s reliability, safety, and longevity. Our expert team is dedicated to providing efficient, transparent, and high-quality services, making us the best choice for Car Major Service Dubai.</p>
          <span class="d-flex flex-column flex-md-row gap-4"> <a href="https://wa.me/971547935400" target="_blank"><button class="btn fw-semibold rounded-3 text-black fs-6">Book Your Service Today!</button></a> </span>
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
    <h2 class="display-5 general-repair-about-heading-responsive fw-bolder text-black text-center">Car Major Service Dubai: <br>
      <span class="main-color">Your One-Stop Auto Maintenance & Repair Hub</span>
    </h2>
    <img src="{{ asset('assets/user/img/services-solution.png') }}" alt="" class="img-fluid w-100">
    
  </section>
  <!-- About Section  End -->
  
 @include('user.layouts.partials.gateway-images') @include('user.layouts.partials.google-review') @include('user.layouts.partials.sticky-icons') @include('user.layouts.partials.sticky-icons-mobile')
  
@endsection

@section('js')
@endsection

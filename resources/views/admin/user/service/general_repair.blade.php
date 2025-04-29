@extends('user.layouts.app')

@section('css')
@endsection
@section('content')
@section('meta')
 <title>Advanced Auto Repair Services Dubai | Automative Professionals UAE</title>
    <meta name="description" content="Advanced Auto Repair Services Dubai & Automative Professionals UAE. We specialize in offering reliable and advanced repair solutions for all vehicle types.">
    <meta name="keywords" content="Auto Repair Services Dubai,Auto Repair Solutions Dubai,Advanced Auto Repair Services Dubai,Leading Auto Repair Center Dubai,Complete Auto Repair Solutions Dubai,Automotive Professionals Dubai">
    

@endsection

<!-- Hero Section start -->
<section class="container-fluid vh-50 general_repair_hero_bg">
    <div class="container h-100 w-100">
      <div class="align-items-center d-flex flex-column h-100 justify-content-center text-center w-100">
        <h1 class="fw-bolder text-white lh-1 responsive-heading-2">
          <span class="main-color">Gargash Auto General Repair</span>
          <br> Services Center Dubai
        </h1>
        <p class="fs-6 fw-light text-light">Your seamless Driving Experience Begins Here</p>
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
        <h2 class="fs-3 fw-semibold m-0">Advanced Auto Repair Services Dubai for Every Make & Model</h2>
        <br/>
          <p>At Gargash Auto, we provide General Repair Services Dubai that go beyond expectations. As a Leading Auto Repair Center Dubai, we specialize in offering reliable and advanced repair solutions for all vehicle types. Our expert team of Automotive Professionals Dubai ensures that every repair, big or small, is carried out with precision and care, using the best tools and genuine parts for optimal performance. Whether you need minor repairs or more complex services, we are your trusted destination for Complete Auto Repair Solutions Dubai.</p>
          <p>We use only genuine parts and cutting-edge tools to restore your vehicle to peak condition, maintaining safety, reliability, and performance. From minor fixes to extensive overhauls, Gargash Auto stands as your one-stop destination for Complete Auto Repair Solutions Dubai, trusted by car owners who expect nothing but the best.</p>
          
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
          <h2 class="fs-3 fw-semibold m-0">Your Trusted Choice for Complete Auto Repair Solutions in Dubai</h2>
         <p>At Gargash Auto, we offer a professional environment with high-tech, certified technicians dedicated to providing top-tier service. As the largest independent dealer-standard service center with four branches across the UAE, we are your one-stop workshop for all car repair needs. Whether you drive German, American, European, Japanese, Chinese, luxury, exotic, classic, or EV vehicles, our specialists ensure your car gets the care it deserves. We pride ourselves on transparent and affordable pricing, guaranteeing customer satisfaction. Additionally, we offer convenient services such as free pickup, inspection, honest video reporting, and drop-off, making your experience as seamless and hassle-free as possible.</p>
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

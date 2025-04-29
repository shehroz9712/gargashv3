@extends('user.layouts.app')

@section('css')
@endsection


@section('content')

<!-- Body Content Start Here -->
<section class="section container-fluid contract-hero ">
  <div class="container d-flex flex-column h-100  justify-content-center text-center w-100">
    <div class="contract-hero-content">
      <h4 class="fs-4 fw-bold">Get *15% Off On Our</h4>
      <h1 class="display-1 fw-bolder lh-1">Annual <span class="text-warning">Service Contract!</span>
      </h1>
      <h4 class="fs-4 fw-bold">Complete Peace Of Mind</h4>
    </div>
    <div class="contact-form-section">
      <div class="row align-items-center justify-content-center dark">
        <div class="col-lg-5"> @include('user.layouts.partials.form') </div>
      </div>
    </div>
  </div>
</section>
<!-- Contract Hero Section End -->
<!-- contaract Overview Section Start -->
<style>
  table {
    width: 100%;
    border-collapse: separate;
    /* Separate mode for border-radius */
    border-spacing: 0;
    /* Space remove karne ke liye */
    border-radius: 10px;
    overflow: hidden;
  }

  .silver-heading {
    font-weight: bold;
    text-align: center;
    background: linear-gradient(90deg, #D9D9D9 0%, #FBFBFB 33%, #D9D9D9 65%, #FBFBFB 94%);
    color: black;
    padding: 15px;
  }

  /* Golden Plan row with gradient */
  .gold-heading {
    font-weight: bold;
    text-align: center;
    background: linear-gradient(90deg, #A07B0C 0%, #E6B110 24%, #D9A70F 71%, #A07B0C 100%);
    color: white;
    padding: 15px;
  }

  td {
    border: 1px solid gray;
    padding: 15px 20px;
    font-weight: bold;
    /* Proper padding */
    text-align: center;
  }

  /* Rounded Borders */
  tr:first-child td:first-child {
    border-top-left-radius: 25px;
  }

  tr:first-child td:last-child {
    border-top-right-radius: 25px;
  }

  tr:last-child td:first-child {
    border-bottom-left-radius: 10px;
  }

  tr:last-child td:last-child {
    border-bottom-right-radius: 10px;
  }

  .headin-2 {
    color: #0D4383;
  }
</style>
<section class="align-items-center container d-flex justify-content-center flex-column">
  <div class="container">
    <div class="d-flex flex-column text-center top">
      <h2 class="fs-1 fw-bolder">Overview</h2>
      <p class="fs-6 fw-light text-secondary">We believe in providing comprehensive and hassle-free solutions for all your vehicle service needs.</p>
    </div>
    <div class="bottom row contract-overview-section-margin-responsive">
      <div class="col-md-6 px-0 px-md-3">
        <div class=" mt-3 px-0">
          <table>
            <tr>
              <td colspan="3" class="silver-heading">Silver Plan</td>
              <!-- Centered -->
            </tr>
            <tr>
              <td class="headin-2">Duration</td>
              <td class="headin-2">Distance driven</td>
              <td class="headin-2">Service Provided</td>
            </tr>
            <tr>
              <td>3 Years Annual Service Contract</td>
              <td>15,000 Km Per Year (45,000 Km)</td>
              <td>It includes 2 Minor and 1 major service. The validity lasts for 3 years</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-md-6 px-0">
        <div class="mt-3 px-0 px-md-3">
          <table>
            <tr>
              <td colspan="3" class="gold-heading">Golden Plan</td>
              <!-- Centered -->
            </tr>
            <tr>
              <td class="headin-2">Duration</td>
              <td class="headin-2">Distance driven</td>
              <td class="headin-2">Service Provided</td>
            </tr>
            <tr>
              <td>4 Years Annual Service Contract</td>
              <td>15,000 Km Per Year (60,000 Km)</td>
              <td>It includes 2 Minor and 1 major service. The validity lasts for 3 years</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contaract Overview Section End -->
<!-- Everything Section Start -->
<section class="align-items-center container d-flex flex-column justify-content-center py-md-5">
  <div class="flex-column g-5  row">
    <div class="align-items-center d-flex flex-column text-center top col-md-12">
      <h2 class="fs-1 fw-bolder">Best In <span style="color: #E6B110;">Everything</span>
      </h2>
      <p class="fs-6 fw-light text-secondary">Our Annual Service Contracts are designed to offer you peace of mind and ensure that your vehicle receives regular maintenance and care, keeping it in optimal condition throughout the year.</p>
      <button class="btn w-md-25 fs-6">Speak to an expert </button>
    </div>
    <div class="bottom col-md-12 d-flex justify-content-center">
      <img src="{{ asset('assets/user/img/everythig-img2.png') }}" alt="" class="w-100 w-md-75" />
    </div>
  </div>
</section>
<!-- Everything Section End -->
<!-- Why Choose Section Start -->
<section class="pt-0">
  <div class="container contract-Annual-Service py-5 contract-why-choose-section-padding">
    <div class="row">
      <div class="col-md-7">
        <h2 class="fs-1 fw-bolder text-left">Why Choose Our <span style="color: #E6B110;">Annual Service </span> Contracts?</h2>
        <p class="fs-6 fw-light text-secondary text-left">Experience unmatched car care at Gargash Auto, a leading multi-brand luxury car service center. Whether you drive a Mercedes, BMW, Rolls-Royce, Volkswagen, Mini Cooper, Maserati, Lamborghini, or any other luxury brand, we offer tailored solutions to meet your needs.</p>
      </div>
      <div class="align-items-end col-md-5 d-flex flex-column gap-4 justify-content-start">
        <button class="btn btn-primary fs-6 fw-semibold rounded-4 w-100 w-md-75" style=" color: #0D4383;">Schedule your car service <i class="ri-arrow-drop-right-line fs-5"></i>
        </button>
        <button class="bg-transparent body-bg border-2 border-black border-dark btn btn-primary fs-6 fw-semibold rounded-4 w-100 w-md-75" style="  color: #0D4383;">Speak to an expert <i class="ri-arrow-drop-right-line"></i>
        </button>
      </div>
      <hr class="mt-4 mt-md-0" />
    </div>
    <h2 class="fs-2 fw-semibold m-0 pb-5 pt-1 text-center">Let us take care of your vehicle, so you can focus on <span class="text-warning">enjoying the ride.</span></h2>
    <div class="row">
      <div class="col-6 col-md-3">
        <div class="d-flex flex-column gap-4">
          <img src="{{ asset('assets/user/img/icons/image 5.png') }}" alt="" class=" w-25">
          <div>
            <h6 class="fs-6 fw-bold">Convenience</h6>
            <p>Enjoy hassle-free service with our convenient solutions.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="d-flex flex-column gap-4">
          <img src="{{ asset('assets/user/img/icons/image 6.png') }}" alt="" class=" w-25">
          <div>
            <h6 class="fs-6 fw-bold">Expert Technicians</h6>
            <p>Benefit from skilled technicians who specialize in luxury vehicles.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="d-flex flex-column gap-4">
          <img src="{{ asset('assets/user/img/icons/image 7.png') }}" alt="" class=" w-25">
          <div>
            <h6 class="fs-6 fw-bold">Priority Service</h6>
            <p>Receive prompt and prioritized service to minimize downtime.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="d-flex flex-column gap-4">
          <img src="{{ asset('assets/user/img/icons/image 8.png') }}" alt="" class=" w-25">
          <div>
            <h6 class="fs-6 fw-bold">Comprehensive Coverage</h6>
            <p>Receive all-inclusive service to ensure your vehicle stays in peak condition throughout the year.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6 col-md-3">
        <div class="d-flex flex-column gap-4">
          <img src="{{ asset('assets/user/img/icons/image 10.png') }}" alt="" class=" w-25">
          <div>
            <h6 class="fs-6 fw-bold">Cost Savings</h6>
            <p>Enjoy significant savings on routine services and repairs with our bundled service plans.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="d-flex flex-column gap-4">
          <img src="{{ asset('assets/user/img/icons/image.png') }}" alt="" class=" w-25">
          <div>
            <h6 class="fs-6 fw-bold">Genuine Parts</h6>
            <p>We use only genuine, high-quality parts for all repairs and replacements, ensuring your vehicle performs optimally.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="d-flex flex-column gap-4">
          <img src="{{ asset('assets/user/img/icons/image-1.png') }}" alt="" class=" w-25">
          <div>
            <h6 class="fs-6 fw-bold">Tailored Maintenance</h6>
            <p>Customized service plans based on your vehicle’s specific needs, ensuring long-term reliability and performance.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="d-flex flex-column gap-4">
          <img src="{{ asset('assets/user/img/icons/image-2.png') }}" alt="" class=" w-25">
          <div>
            <h6 class="fs-6 fw-bold">Exclusive Benefits</h6>
            <p>Gain access to exclusive offers, priority scheduling, and other perks that enhance your ownership experience.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- Why Choose Section End -->
<section class="section container py-5">
  <div class="row">
    <div class="col-md-6">
      <img src="{{ asset('assets/user/img/rolls-royce-black.png') }}" alt="" class="h-100 img-fluid w-100">
    </div>
    <div class="col-md-6 d-flex flex-column gap-2 justify-content-center">
      <h2 style="letter-spacing: -4%; " class="fw-bolder lh-1 contract-why-Choose-heading-font-size">Your <span class="main-color">Premier Stop </span> for Luxury Car Maintenance </h2>
      <p class="fs-6 fw-normal">With over 20 years of experience in the UAE, we are a multi-brand luxury automotive repair and service center offering dealership-quality services at competitive prices. We provide a comprehensive range of solutions for your luxury car, including mechanical, body shop, and electrical services, all in one place.</p>
      <span class="d-flex flex-column flex-md-row gap-4 w-100">
        <button class="btn btn-primary fs-6 fw-semibold rounded-4" style=" color: #0D4383;">Schedule your car service <i class="ri-arrow-drop-right-line fs-5"></i>
        </button>
        <button class="bg-transparent body-bg border-2 border-black border-dark btn btn-primary fs-6 fw-semibold rounded-4" style="  color: #0D4383;">Speak to an expert <i class="ri-arrow-drop-right-line"></i>
        </button>
      </span>
    </div>
  </div>
</section>
<!-- Body Content End Here -->

<!-- sticky-icons Section Start -->
@include('user.layouts.partials.sticky-icons')


<!-- sticky-icons Section End -->
<!-- sticky-icons Section Start -->

@include('user.layouts.partials.sticky-icons-mobile')



<!-- sticky-icons Section End -->

@endsection

@section('js')
@endsection
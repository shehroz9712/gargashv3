@extends('user.layouts.app')

@section('css')
@endsection


@section('content')

<!-- Body Content Start Here -->
<section class="section container-fluid contract-hero ">
  <div class="container h-100 w-100">
    <div class="row row-cols-md-2 align-items-center">
      <div class="contract-hero-content">
        <h4 class="fs-4 fw-bold">*Get 15% Off Our Annual Service Contract!</h4>
        <h1 class="display-1 fw-bolder lh-1">Annual <span class="text-warning">Service Contract!</span>
        </h1>
        <p class="fs-5">Premium care and complete peace of mind for your luxury German and European vehicle.</p>
      </div>
      <div class="contact-form-section mt-4 mt-md-0">
        <div class="row align-items-center justify-content-center dark">
          @include('user.layouts.partials.form')
        </div>
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
      <h2 class="fs-1 fw-bolder">Package </h2>
      <p class="fs-5  text-secondary"> We specialize in delivering comprehensive, hassle-free Luxury Car Care services Dubai UAE   for all your vehicle service needs, ensuring expert care for your German and European cars.
</p>
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
              <td colspan="3" class="gold-heading">Gold Plan</td>
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
              <td>It includes 2 Minor and 1 major service. The validity lasts for 4 years</td>
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
      <p class="fs-6 fw-light text-secondary">Our Annual Service Contracts provide peace of mind, ensuring your German and European vehicle receives regular maintenance and care to stay in top condition year-round.
</p>
     
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
        <p class="fs-6 fw-light text-secondary text-left">Enjoy consistent, expert care for your German and European vehicle, with guaranteed regular maintenance to keep it running smoothly and efficiently all year long.
<br/>Experience unparalleled car care at Gargash Auto, a premier multi-brand luxury car service center. From Mercedes, BMW, and Rolls-Royce to Volkswagen, Mini Cooper, Maserati, Lamborghini, and more, we provide bespoke solutions for your luxury vehicle’s needs.

</p>
      </div>
      <div class="align-items-end col-md-5 d-flex flex-column gap-4 p-5 justify-content-start">
        <button class="btn btn-primary fs-6 fw-semibold rounded-4 w-100 w-md-75" style=" color: #0D4383;">Schedule your car service <i class="ri-arrow-drop-right-line fs-5"></i>
        </button>
        <button class="bg-transparent body-bg border-2 border-black border-dark btn btn-primary fs-6 fw-semibold rounded-4 w-100 w-md-75" style="  color: #0D4383;">Speak to an expert <i class="ri-arrow-drop-right-line"></i>
        </button>
      </div>
      <hr class="mt-4 mt-md-0" />
    </div>
    <h2 class="fs-2 fw-semibold m-0 pb-5 pt-1 text-center">Leave the care of your vehicle to us, and focus on <span class="text-warning">enjoying the drive.</span></h2>
    <div class="row">
      <div class="col-6 col-md-3">
        <div class="d-flex flex-column gap-4">
          <img src="{{ asset('assets/user/img/icons/img1.png') }}" alt="" class=" w-25">
          <div>
            <h6 class="fs-6 fw-bold">Convenience</h6>
            <p> Experience hassle-free service with our tailored, convenient solutions for your luxury vehicle.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="d-flex flex-column gap-4">
          <img src="{{ asset('assets/user/img/icons/img2.png') }}" alt="" class=" w-25">
          <div>
            <h6 class="fs-6 fw-bold">Expert Technicians</h6>
            <p>Trust our skilled technicians, specializing in the care of luxury German and European vehicles.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="d-flex flex-column gap-4">
          <img src="{{ asset('assets/user/img/icons/img3.png') }}" alt="" class=" w-25">
          <div>
            <h6 class="fs-6 fw-bold">Priority Service</h6>
            <p>Enjoy prompt, prioritized service to ensure minimal downtime for your luxury vehicle.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="d-flex flex-column gap-4">
          <img src="{{ asset('assets/user/img/icons/img4.png') }}" alt="" class=" w-25">
          <div>
            <h6 class="fs-6 fw-bold">Comprehensive Coverage</h6>
            <p> Benefit from all-inclusive service, keeping your luxury vehicle in peak condition year-round.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6 col-md-3">
        <div class="d-flex flex-column gap-4">
          <img src="{{ asset('assets/user/img/icons/img5.png') }}" alt="" class=" w-25">
          <div>
            <h6 class="fs-6 fw-bold">Cost Savings</h6>
            <p> Maximize savings on routine services and repairs with our bundled service plans, tailored for your luxury vehicle.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="d-flex flex-column gap-4">
          <img src="{{ asset('assets/user/img/icons/img6.png') }}" alt="" class=" w-25">
          <div>
            <h6 class="fs-6 fw-bold">Genuine Parts</h6>
            <p> We use only authentic, high-quality parts for all repairs and replacements, ensuring your luxury vehicle performs at its best.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="d-flex flex-column gap-4">
          <img src="{{ asset('assets/user/img/icons/img7.png') }}" alt="" class=" w-25">
          <div>
            <h6 class="fs-6 fw-bold">Tailored Maintenance</h6>
            <p> Enjoy customized service plans designed for your vehicle’s unique needs, ensuring long-term reliability and optimal performance.
</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="d-flex flex-column gap-4">
          <img src="{{ asset('assets/user/img/icons/img8.png') }}" alt="" class=" w-25">
          <div>
            <h6 class="fs-6 fw-bold">Exclusive Benefits</h6>
            <p>Unlock exclusive offers, priority scheduling, and other premium perks to elevate your luxury vehicle ownership experience.</p>
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
      <img src="{{ asset('assets/user/img/rolls-royce-black.png') }}" alt="" class="img-fluid w-100">
    </div>
    <div class="col-md-6 d-flex flex-column gap-2 justify-content-center">
      <h2 style="letter-spacing: -4%; " class="fw-bolder lh-1 contract-why-Choose-heading-font-size">Your <span class="main-color"> Premier Destination </span> for Luxury Car Maintenance </h2>
      <p class="fs-6 fw-normal"> Gargash Auto is your trusted partner for Luxury Car Care services Dubai UAE, offering specialized maintenance and repairs for German and European luxury vehicles. With over 20 years of experience in the UAE, Gargash Auto is a trusted multi-brand luxury automotive repair and service center, offering Luxury Car Care services Dubai UAE of dealership quality at competitive prices. We provide a comprehensive range of solutions for your luxury vehicle, including mechanical, body shop, and electrical services—all in one convenient location. Our expert technicians ensure your German and European car receives the highest standard of care, making us the go-to destination for car care services Dubai.
</p>
      <span class="d-flex flex-column flex-md-row gap-4 w-100">
        <a href="https://wa.me/971547935400"><button class="btn btn-primary fs-6 fw-semibold rounded-4" style=" color: #0D4383;"> Book Your Service Now! <i class="ri-arrow-drop-right-line fs-5"></i>
        </button></a>
        
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
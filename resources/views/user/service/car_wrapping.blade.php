@extends('user.layouts.app')

@section('css')
@endsection


@section('content')

<!-- hero section start -->

<div class="container-fluid Wrapping-bg overflow-hidden">
    <div class="container">
      <h1 class="fw-bolder text-center m-0 gradient-text responsive-heading-1"> Wrapping </h1>
      <img src="{{ asset('assets/user/img/Wrapping-car.png') }}" alt="" loading="lazy">
    </div>
  </div>
  <!-- hero section end -->
  <!-- Form Section Start -->
  <section class="container car-wrapping-margin-top-responsive overflow-hidden">
    <div class="align-items-center dark g-5  row">
      <div class="col-md-4">
        <p class="m-0 fs-6 fw-light">From exclusive discounts to top-tier services, we guarantee your premium vehicle receives the finest care and smart maintenance.</p>
      </div>
      <div class="col-md-5">  @include('user.layouts.partials.form') </div>
      <div class="col-md-3 d-flex flex-column gap-3">
        <a href="https://wa.me/971547935400" target="_blank"><button class="btn btn-primary fs-6">Avail Your Discount</button></a>
        <a href="tel:+971 56 545 8853" target="_blank" target="_blank"><button class="transparent-btn w-md-75 w-100">Call Now</button></a>
  
      </div>
    </div>
  </section>
  <!-- Form Section End -->
  <!-- icons section Start -->
  <section class="container">
    <div>
      <h2 class="fs-1 fw-bold text-center">Vinyl Wrap <span style="color: #E6B110;">Types</span>
      </h2>
    </div>
    <div class="row row-cols-1  row-cols-sm-2 row-cols-md-4 g-4">
      <div class="align-items-center col d-flex flex-column justify-content-center">
        <div class="img">
          <img src="{{ asset('assets/user/img/Vinyl-grid-item-1.png') }}" alt="">
        </div>
        <div class="d-flex flex-column gap-2 text-center">
          <h5 class="m-0 fs-6 fw-semibold">COLOR SHIFT VINYL WRAP</h5>
          <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
              <i class="fa-solid fa-arrow-right"></i>
            </span>
          </p>
        </div>
      </div>
      <div class="align-items-center col d-flex flex-column justify-content-center">
        <div class="img">
          <img src="{{ asset('assets/user/img/Vinyl-grid-item-2.png') }}" alt="">
        </div>
        <div class="d-flex flex-column gap-2 text-center">
          <h5 class="m-0 fs-6 fw-semibold">CARBON VINYL WRAP</h5>
          <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
              <i class="fa-solid fa-arrow-right"></i>
            </span>
          </p>
        </div>
      </div>
      <div class="align-items-center col d-flex flex-column justify-content-center">
        <div class="img">
          <img src="{{ asset('assets/user/img/Vinyl-grid-item-3.png') }}" alt="">
        </div>
        <div class="d-flex flex-column gap-2 text-center">
          <h5 class="m-0 fs-6 fw-semibold">CHROME VINYL WRAP</h5>
          <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
              <i class="fa-solid fa-arrow-right"></i>
            </span>
          </p>
        </div>
      </div>
      <div class="align-items-center col d-flex flex-column justify-content-center">
        <div class="img">
          <img src="{{ asset('assets/user/img/Vinyl-grid-item-4.png') }}" alt="">
        </div>
        <div class="d-flex flex-column gap-2 text-center">
          <h5 class="m-0 fs-6 fw-semibold">DEEP GLOSS VINYL WRAP</h5>
          <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
              <i class="fa-solid fa-arrow-right"></i>
            </span>
          </p>
        </div>
      </div>
      <div class="align-items-center col d-flex flex-column justify-content-center">
        <div class="img">
          <img src="{{ asset('assets/user/img/Vinyl-grid-item-5.png') }}" alt="">
        </div>
        <div class="d-flex flex-column gap-2 text-center">
          <h5 class="m-0 fs-6 fw-semibold">SATIN VINYL WRAP</h5>
          <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
              <i class="fa-solid fa-arrow-right"></i>
            </span>
          </p>
        </div>
      </div>
      <div class="align-items-center col d-flex flex-column justify-content-center">
        <div class="img">
          <img src="{{ asset('assets/user/img/Vinyl-grid-item-6.png') }}" alt="">
        </div>
        <div class="d-flex flex-column gap-2 text-center">
          <h5 class="m-0 fs-6 fw-semibold">GLOSS VINYL WRAP</h5>
          <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
              <i class="fa-solid fa-arrow-right"></i>
            </span>
          </p>
        </div>
      </div>
      <div class="align-items-center col d-flex flex-column justify-content-center">
        <div class="img">
          <img src="{{ asset('assets/user/img/Vinyl-grid-item-7.png') }}" alt="">
        </div>
        <div class="d-flex flex-column gap-2 text-center">
          <h5 class="m-0 fs-6 fw-semibold">MATTE VINYL WRAP</h5>
          <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
              <i class="fa-solid fa-arrow-right"></i>
            </span>
          </p>
        </div>
      </div>
      <div class="align-items-center col d-flex flex-column justify-content-center">
        <div class="img">
          <img src="{{ asset('assets/user/img/Vinyl-grid-item-8.png') }}" alt="">
        </div>
        <div class="d-flex flex-column gap-2 text-center">
          <h5 class="m-0 fs-6 fw-semibold">FORGED CARBON VINYL WRAP</h5>
          <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
              <i class="fa-solid fa-arrow-right"></i>
            </span>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- icons section End -->
  <!-- Full container  section Start-->
  <section class="align-items-center align-items-md-baseline container-fluid d-flex full-container-bg justify-content-center justify-content-md-end px-5" style="height: 75vh;">
    <span class="align-items-end d-flex flex-column" style="color: #0d6efd;">
      <h5 class="display-5 fw-bold ">OCEAN GREEN</h5>
      <button type="button" class="transparent-btn" style=" color:#0d6efd !important; border:2px solid #0d6efd !important; "> DEEP GLOSS WRAPS </button>
    </span>
  </section>
  <!-- Full container  section End-->
  <!-- Car images grid section Start -->
  <section class="container-fluid">
    <div class="px-4 d-flex flex-column gap-4">
      <div>
        <h2 class="fs-1 fw-bold text-center">Colors <span style="color: #E6B110;">We Have</span>
        </h2>
      </div>
      <div class="row row-cols-1  row-cols-sm-2 row-cols-md-4 g-4">
        <div class="align-items-center col d-flex flex-column justify-content-center gap-3">
          <div class="img">
            <img src="{{ asset('assets/user/img/we-have-1.png') }}" alt="">
          </div>
          <div class="d-flex flex-column gap-2 text-center">
            <h5 class="m-0 fs-6 fw-semibold">GREY VINYL WRAP</h5>
            <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
                <i class="fa-solid fa-arrow-right"></i>
              </span>
            </p>
          </div>
        </div>
        <div class="align-items-center col d-flex flex-column justify-content-center gap-3">
          <div class="img">
            <img src="{{ asset('assets/user/img/we-have-2.png') }}" alt="">
          </div>
          <div class="d-flex flex-column gap-2 text-center">
            <h5 class="m-0 fs-6 fw-semibold">GREEN VINYL WRAP</h5>
            <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
                <i class="fa-solid fa-arrow-right"></i>
              </span>
            </p>
          </div>
        </div>
        <div class="align-items-center col d-flex flex-column justify-content-center gap-3">
          <div class="img">
            <img src="{{ asset('assets/user/img/we-have-3.png') }}" alt="">
          </div>
          <div class="d-flex flex-column gap-2 text-center">
            <h5 class="m-0 fs-6 fw-semibold">ORANGE VINYL WRAP</h5>
            <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
                <i class="fa-solid fa-arrow-right"></i>
              </span>
            </p>
          </div>
        </div>
        <div class="align-items-center col d-flex flex-column justify-content-center gap-3">
          <div class="img">
            <img src="{{ asset('assets/user/img/we-have-4.png') }}" alt="">
          </div>
          <div class="d-flex flex-column gap-2 text-center">
            <h5 class="m-0 fs-6 fw-semibold">BLACK VINYL WRAP</h5>
            <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
                <i class="fa-solid fa-arrow-right"></i>
              </span>
            </p>
          </div>
        </div>
        <div class="align-items-center col d-flex flex-column justify-content-center gap-3">
          <div class="img">
            <img src="{{ asset('assets/user/img/we-have-5.png') }}" alt="">
          </div>
          <div class="d-flex flex-column gap-2 text-center">
            <h5 class="m-0 fs-6 fw-semibold">BLUE VINYL WRAP</h5>
            <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
                <i class="fa-solid fa-arrow-right"></i>
              </span>
            </p>
          </div>
        </div>
        <div class="align-items-center col d-flex flex-column justify-content-center gap-3">
          <div class="img">
            <img src="{{ asset('assets/user/img/we-have-6.png') }}" alt="">
          </div>
          <div class="d-flex flex-column gap-2 text-center">
            <h5 class="m-0 fs-6 fw-semibold">GOLD VINYL WRAP</h5>
            <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
                <i class="fa-solid fa-arrow-right"></i>
              </span>
            </p>
          </div>
        </div>
        <div class="align-items-center col d-flex flex-column justify-content-center gap-3">
          <div class="img">
            <img src="{{ asset('assets/user/img/we-have-7.png') }}" alt="">
          </div>
          <div class="d-flex flex-column gap-2 text-center">
            <h5 class="m-0 fs-6 fw-semibold">BROWN VINYL WRAP</h5>
            <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
                <i class="fa-solid fa-arrow-right"></i>
              </span>
            </p>
          </div>
        </div>
        <div class="align-items-center col d-flex flex-column justify-content-center gap-3">
          <div class="img">
            <img src="{{ asset('assets/user/img/we-have-8.png') }}" alt="">
          </div>
          <div class="d-flex flex-column gap-2 text-center">
            <h5 class="m-0 fs-6 fw-semibold">PINK VINYL WRAP</h5>
            <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
                <i class="fa-solid fa-arrow-right"></i>
              </span>
            </p>
          </div>
        </div>
        <div class="align-items-center col d-flex flex-column justify-content-center gap-3">
          <div class="img">
            <img src="{{ asset('assets/user/img/we-have-9.png') }}" alt="">
          </div>
          <div class="d-flex flex-column gap-2 text-center">
            <h5 class="m-0 fs-6 fw-semibold">SILVER VINYL WRAP</h5>
            <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
                <i class="fa-solid fa-arrow-right"></i>
              </span>
            </p>
          </div>
        </div>
        <div class="align-items-center col d-flex flex-column justify-content-center gap-3">
          <div class="img">
            <img src="{{ asset('assets/user/img/we-have-10.png') }}" alt="">
          </div>
          <div class="d-flex flex-column gap-2 text-center">
            <h5 class="m-0 fs-6 fw-semibold">WHITE VINYL WRAP</h5>
            <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
                <i class="fa-solid fa-arrow-right"></i>
              </span>
            </p>
          </div>
        </div>
        <div class="align-items-center col d-flex flex-column justify-content-center gap-3">
          <div class="img">
            <img src="{{ asset('assets/user/img/we-have-11.png') }}" alt="">
          </div>
          <div class="d-flex flex-column gap-2 text-center">
            <h5 class="m-0 fs-6 fw-semibold">YELLOW VINYL WRAP</h5>
            <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
                <i class="fa-solid fa-arrow-right"></i>
              </span>
            </p>
          </div>
        </div>
        <div class="align-items-center col d-flex flex-column justify-content-center gap-3">
          <div class="img">
            <img src="{{ asset('assets/user/img/we-have-12.png') }}" alt="">
          </div>
          <div class="d-flex flex-column gap-2 text-center">
            <h5 class="m-0 fs-6 fw-semibold">PURPLE VINYL WRAP</h5>
            <p class="m-0" style="font-size:14px;"> <a href="tel:+971 56 545 8853" target="_blank">Call Now</a> <span class="px-1 py-1 rounded-circle" style="border:1px solid gray; font-size:10px;">
                <i class="fa-solid fa-arrow-right"></i>
              </span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Car images grid section End -->
  
  <!-- sticky-icons Section Start -->
      @include('user.layouts.partials.sticky-icons')
  
  
  <!-- sticky-icons Section End -->
  <!-- sticky-icons Section Start -->
  
      @include('user.layouts.partials.sticky-icons-mobile')
  
  
  
  <!-- sticky-icons Section End -->
  
  
  
@endsection

@section('js')
@endsection

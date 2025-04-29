@extends('user.layouts.app') @section('css') @endsection @section('content')


<!-- Hero Sectin Start -->
<section class=" container-fluid overflow-visible  promotion-section-bg promotion-section-bg-before promotion-section-bg-after pormotions-hero-height-responsive">
    <div class="container d-flex flex-column  justify-content-center text-center">
        <div class="align-items-center d-flex flex-column gap-5 h-100">
            <span class="text-center">
        <!-- <p class="fw-bold fs-6">Delivering Luxury</p> -->
        <h1 class="fw-bolder lh-1 promotion-hero-heading-font-size">Providing Luxury Car Care <br>
          <span class="text-warning">with Exceptional Offers</span>
            </h1>
            <br/>
            <p class="fs-6 fw-normal text-black-50 pormotions-hero-para-responsive-font-padding">Enjoy premium car care services Dubai tailored for German and European vehicles—now with unbeatable promotions to match.</p>
            </span>
            <span class="w-100 w-md-75">
        <a href="https://wa.me/971547935400" target="_blank" class="w-100 h-100">
          <img src="{{ asset('assets/user/img/up-pro-hero-bottom.png') }}" class="pormotions-hero-img-margin-top-responsive" alt="Location 1">
        </a>
      </span>
        </div>
    </div>
</section>
<!-- Hero Sectin End -->
<!-- Text  Sectin Start-->
<section class="pb-0 position-relative" style="z-index: 2;">
    <div class="container px-4">
        <div class="row">
            <div class="col-lg-8">
                <p class="level-7 primary-light-font dark-color ">We take pride in being a top-tier provider of Luxury Car Care services Dubai UAE. Gargash Auto Multibrand Workshop is your trusted destination for expert car servicing and high-end vehicle repairs across the UAE. Our team of skilled professionals
                    specializes in German and European brands, delivering unmatched care to keep your luxury car performing at its best. Plus, our exciting promotions let you enjoy dealership-quality car care services Dubai at highly competitive prices.
                </p>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-column flex-lg-column flex-md-row gap-3 gateway-btn-wrapper w-100">
                    <a href="https://wa.me/971547935400" target="_blank" class="align-self-baseline align-self-lg-end btn fs-6 w-100 w-fit w-md-75">Avail Your Discount</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Text  Sectin End-->
<!-- Blog Section Start -->
<style>
    .blog-box-height {
        height: 30rem;
      }
    
      .promotions-box-hover-effect {
        transition: all 0.3s ease;
      }
    
      .promotions-box-hover-effect:hover {
        transform: translateY(-5px);
      }
    
      .promotions-box-hover-effect .shadow {
        transition: all 0.3s ease;
      }
    
      .promotions-box-hover-effect:hover .shadow {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15) !important;
      }
    
    
      @media(max-width:768px) {
        .blog-box-height {
          height: 35rem;
        }
    
        .heading-2 {
          font-size: 2.2rem !important;
        }
    
        .para-2 {
          font-size: 1.5rem !important;
        }
    
        .row-gap-7rem {
          gap: 7rem;
        }
    
        .mobile-responsive-font-size {
          font-size: 1.2rem;
        }
    
        /* height: 35rem; */
      }
</style>
<section class="container">
    <div class="d-flex flex-column" style="gap: 6rem;">
        <div class="row row-cols-lg-3 g-5">

            <div class="promotions-box-hover-effect">
                <div class="shadow px-0 rounded-5">
                    <div class="align-items-end blog-img-1 d-flex justify-content-end pb-3 px-4 rounded-5 text-white  blog-box-height">
                        <span>
              <small class="text-white fw-normal kdam-thmor-pro-font fs-6">*T&C Apply</small>
            </span>
                    </div>
                    <span class="d-flex flex-column gap-3 py-4 px-2">
            <!-- <div class="d-flex flex-column gap-2 ps-2 text-black">
                <h4 class="fs-4 m-0">
                  *15% Off On Annual Service Contracts</h4>
                <p class="fs-6 fw-normal lh-sm m-0">Drive with confidence knowing that your vehicle’s best interest has been covered</p>
              </div> -->
            <div class="d-flex justify-content-center">
              <a href="https://wa.me/971547935400" target="_blank" class="d-flex justify-content-center w-100">
                <button type="button" class="btn btn-primary fs-6 fw-semibold w-75 promotions-blog-btn-font-size "> Avail Now </button>
              </a>
            </div>
          </span>

                </div>
            </div>
            <div class="promotions-box-hover-effect">
                <div class="shadow px-0 rounded-5">

                    <div class="align-items-end blog-img-2  d-flex justify-content-end pb-3 px-4 rounded-5 text-white  blog-box-height">

                        <span>
              <small class="text-white fw-normal kdam-thmor-pro-font fs-6">*T&C Apply</small>
            </span>
                    </div>
                    <span class="d-flex flex-column gap-3 py-4 px-2">
            <!-- <div class="d-flex flex-column gap-2 ps-2 text-black">
                <h4 class="fs-4 m-0">*50% Off Every Tuesday on Major & Minor Services</h4>
                <p class="fs-6 fw-normal lh-sm m-0">Enhance your overall driving experience with this exclusive offer every Tuesday. </p>
              </div> -->
            <div class="d-flex justify-content-center">
              <a href="https://wa.me/971547935400" target="_blank" class="d-flex justify-content-center w-100">
                <button type="button" class="btn btn-primary fs-6 fw-semibold w-75 promotions-blog-btn-font-size "> Avail Now </button>
              </a>
            </div>
          </span>

                </div>
            </div>
            <div class="promotions-box-hover-effect">
                <div class="shadow px-0 rounded-5">

                    <div class="align-items-end blog-img-3  d-flex justify-content-end pb-3 px-4 rounded-5 text-white  blog-box-height">

                        <span>
              <small class="text-white fw-normal kdam-thmor-pro-font fs-6">*T&C Apply</small>
            </span>
                    </div>
                    <span class="d-flex flex-column gap-3 py-4 px-2">
            <!-- <div class="d-flex flex-column gap-2 ps-2 text-black">
                <h4 class="fs-4 m-0">*50% Off Every Tuesday on Major & Minor Services</h4>
                <p class="fs-6 fw-normal lh-sm m-0">Enhance your overall driving experience with this exclusive offer every Tuesday. </p>
              </div> -->
            <div class="d-flex justify-content-center">
              <a href="https://wa.me/971547935400" target="_blank" class="d-flex justify-content-center w-100">
                <button type="button" class="btn btn-primary fs-6 fw-semibold w-75 promotions-blog-btn-font-size "> Avail Now </button>
              </a>
            </div>
          </span>

                </div>
            </div>
            <div class="promotions-box-hover-effect">
                <div class="shadow px-0 rounded-5">

                    <div class="align-items-end blog-img-4  d-flex justify-content-end pb-3 px-4 rounded-5 text-white  blog-box-height">

                        <span>
              <small class="text-white fw-normal kdam-thmor-pro-font fs-6">*T&C Apply</small>
            </span>
                    </div>
                    <span class="d-flex flex-column gap-3 py-4 px-2">
            <!-- <div class="d-flex flex-column gap-2 ps-2 text-black">
                <h4 class="fs-4 m-0">*50% Off Every Tuesday on Major & Minor Services</h4>
                <p class="fs-6 fw-normal lh-sm m-0">Enhance your overall driving experience with this exclusive offer every Tuesday. </p>
              </div> -->
            <div class="d-flex justify-content-center">
              <a href="https://wa.me/971547935400" target="_blank" class="d-flex justify-content-center w-100">
                <button type="button" class="btn btn-primary fs-6 fw-semibold w-75 promotions-blog-btn-font-size "> Avail Now </button>
              </a>
            </div>
          </span>

                </div>
            </div>
            <div class="promotions-box-hover-effect">
                <div class="shadow px-0 rounded-5">

                    <div class="align-items-end blog-img-5  d-flex justify-content-end pb-3 px-4 rounded-5 text-white  blog-box-height">

                        <span>
              <small class="text-white fw-normal kdam-thmor-pro-font fs-6">*T&C Apply</small>
            </span>
                    </div>
                    <span class="d-flex flex-column gap-3 py-4 px-2">
            <!-- <div class="d-flex flex-column gap-2 ps-2 text-black">
                <h4 class="fs-4 m-0">*50% Off Every Tuesday on Major & Minor Services</h4>
                <p class="fs-6 fw-normal lh-sm m-0">Enhance your overall driving experience with this exclusive offer every Tuesday. </p>
              </div> -->
            <div class="d-flex justify-content-center">
              <a href="https://wa.me/971547935400" target="_blank" class="d-flex justify-content-center w-100">
                <button type="button" class="btn btn-primary fs-6 fw-semibold w-75 promotions-blog-btn-font-size "> Avail Now </button>
              </a>
            </div>
          </span>

                </div>
            </div>
            <div class="promotions-box-hover-effect">
                <div class="shadow px-0 rounded-5">

                    <div class="align-items-end blog-img-6  d-flex justify-content-end pb-3 px-4 rounded-5 text-white  blog-box-height">

                        <span>
              <small class="text-white fw-normal kdam-thmor-pro-font fs-6">*T&C Apply</small>
            </span>
                    </div>
                    <span class="d-flex flex-column gap-3 py-4 px-2">
            <!-- <div class="d-flex flex-column gap-2 ps-2 text-black">
                <h4 class="fs-4 m-0">*50% Off Every Tuesday on Major & Minor Services</h4>
                <p class="fs-6 fw-normal lh-sm m-0">Enhance your overall driving experience with this exclusive offer every Tuesday. </p>
              </div> -->
            <div class="d-flex justify-content-center">
              <a href="https://wa.me/971547935400" target="_blank" class="d-flex justify-content-center w-100">
                <button type="button" class="btn btn-primary fs-6 fw-semibold w-75 promotions-blog-btn-font-size "> Avail Now </button>
              </a>
            </div>
          </span>
                </div>
            </div>

        </div>




    </div>
    </div>
</section>
<!-- Blog Section End -->
<!-- Faq Section Start -->
<!-- F&Q Section Start -->
<section class=" fq-section">
    <div class="text-center">
        <h2 class="fs-1 fw-bold">Navigate Through Common Queries</h2>
        <p class="fs-6 fw-normal"> Find quick answers to your questions about our Luxury Car Care services Dubai UAE and learn how we expertly service German and European vehicles.</p>
    </div>
    <style>
        .faq-box {
          background: white;
          box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
          border-radius: 8px;
          padding: 15px;
          margin-bottom: 10px;
          cursor: pointer;
        }
    
        .faq-box.active {
          background: #e6b110;
        }
    
        .faq-header {
          display: flex;
          gap: 30px;
          align-items: center;
          justify-content: space-between;
          padding: 10px;
          transition: background 0.3s ease;
          border-radius: 8px;
        }
    
        .faq-box.active .faq-header {
          background: #e6b110;
          /* Active hone par sirf header yellow */
          border-radius: 8px;
        }
    
        .faq-content {
          display: none;
          margin: -1rem;
          margin-top: 0.5rem;
          background: white;
          padding: 10px;
          border-radius: 0 0 8px 8px;
        }
    
        .faq-content p {
          padding: 0px 3.2rem;
        }
    
        .faq-icon {
          background: #e6b110;
          padding: 10px;
          border-radius: 50%;
          transition: all 0.3s ease;
        }
    
        .faq-box.active .faq-icon {
          background: #fff;
          color: black;
          transform: rotate(180deg);
        }
    
        /* ✅ Updated Button Styling */
        .faq-btn {
          background: #e6b110;
          color: #fff;
          font-size: 20px;
          padding: 10px 15px;
          border-radius: 10px;
          transition: all 0.3s ease;
        }
    
        .faq-box.active .faq-btn {
          background: #fff;
          color: #e6b110;
        }
    
        .faq-btn i {
          transition: transform 0.3s ease;
        }
    
        .faq-box.active .faq-btn i {
          transform: rotate(180deg);
        }
    </style>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-box" onclick="toggleFAQ(this)">
                    <div class="faq-header">
                        <div class="faq-heading d-flex gap-3 justify-content-center align-items-center">
                            <span class="faq-icon"></span>
                            <h5 class="mb-0"> Do you service only Mercedes, or all luxury car brands?</h5>
                        </div>
                        <div class="faq-btn">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-content">
                        <p class="text-md-start">We service all major German and European luxury car brands—including Mercedes, BMW, Audi, Porsche, Rolls-Royce, and more—offering expert car care services Dubai tailored to each vehicle.
                        </p>
                    </div>
                </div>
                <div class="faq-box" onclick="toggleFAQ(this)">
                    <div class="faq-header">
                        <div class="faq-heading d-flex gap-3 justify-content-center align-items-center">
                            <span class="faq-icon"></span>
                            <h5 class="mb-0">Do You Offer Emergency Repair Services?</h5>
                        </div>
                        <div class="faq-btn">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-content">
                        <p class="text-md-start"> Yes, we offer emergency repair services to quickly address any urgent issues with your luxury vehicle, ensuring that your car receives the best care when you need it most.</p>
                    </div>
                </div>
                <div class="faq-box" onclick="toggleFAQ(this)">
                    <div class="faq-header">
                        <div class="faq-heading d-flex gap-3 justify-content-center align-items-center">
                            <span class="faq-icon"></span>
                            <h5 class="mb-0">Can I Track the Progress of My Car Service?</h5>
                        </div>
                        <div class="faq-btn">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-content">
                        <p class="text-md-start">Absolutely! We keep you updated throughout the service process, so you’re always informed about the status of your luxury vehicle’s repair or maintenance.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-box" onclick="toggleFAQ(this)">
                    <div class="faq-header">
                        <div class="faq-heading d-flex gap-3 justify-content-center align-items-center">
                            <span class="faq-icon"></span>
                            <h5 class="mb-0">What sets Gargash Auto apart from other service centers?</h5>
                        </div>
                        <div class="faq-btn">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-content">
                        <p class="text-md-start">Gargash Auto stands out with 20+ years of experience, certified technicians, and dealership-quality Luxury Car Care services Dubai UAE—all at competitive prices. We specialize in German and European brands, offering precision,
                            transparency, and unmatched customer service.
                        </p>
                    </div>
                </div>
                <div class="faq-box" onclick="toggleFAQ(this)">
                    <div class="faq-header">
                        <div class="faq-heading d-flex gap-3 justify-content-center align-items-center">
                            <span class="faq-icon"></span>
                            <h5 class="mb-0">Do You Use Genuine Parts for All Repairs?</h5>
                        </div>
                        <div class="faq-btn">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-content">
                        <p class="text-md-start">Absolutely. At Gargash Auto, we use only genuine, manufacturer-approved parts for every service and repair. This guarantees the performance, safety, and long-term reliability of your luxury vehicle—especially for high-end German
                            and European brands.
                        </p>
                    </div>
                </div>
                <div class="faq-box" onclick="toggleFAQ(this)">
                    <div class="faq-header">
                        <div class="faq-heading d-flex gap-3 justify-content-center align-items-center">
                            <span class="faq-icon"></span>
                            <h5 class="mb-0"> How Long Does a Typical Service Take?</h5>
                        </div>
                        <div class="faq-btn">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-content">
                        <p class="text-md-start">The duration of a service depends on the type of maintenance or repair needed. We strive to provide efficient Luxury Car Care services Dubai UAE, ensuring your German or European vehicle is serviced promptly without compromising
                            quality.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleFAQ(selectedFaq) {
          let allFaqs = document.querySelectorAll(".faq-box");
          allFaqs.forEach((faq) => {
            if (faq !== selectedFaq) {
              faq.classList.remove("active");
              faq.querySelector(".faq-content").style.display = "none";
            }
          });
          selectedFaq.classList.toggle("active");
          let content = selectedFaq.querySelector(".faq-content");
          content.style.display = selectedFaq.classList.contains("active") ? "block" : "none";
        }
        // Close FAQ when clicking outside
        document.addEventListener("click", function(event) {
          let allFaqs = document.querySelectorAll(".faq-box");
          let isInsideFAQ = event.target.closest(".faq-box");
          if (!isInsideFAQ) {
            allFaqs.forEach((faq) => {
              faq.classList.remove("active");
              faq.querySelector(".faq-content").style.display = "none";
            });
          }
        });
    </script>
</section>
@include('user.layouts.partials.sticky-icons')

@include('user.layouts.partials.sticky-icons-mobile')

<!-- gateway-section Start Here  -->
@include('user.layouts.partials.gateway-images') @include('user.layouts.partials.google-review')
@endsection @section('js') @endsection
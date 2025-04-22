<style>
    .bg-white-overlay {
        position: relative;
        /* Ensure relative positioning */
        overflow-x: hidden;
        overflow-y: auto;
        z-index: 9;
    }

    .bg-white-overlay::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.6);
        /* White overlay with transparency */
        z-index: -1;
        /* Ensures it's above the background but below content */
        border-radius: inherit;
        /* If the parent has rounded corners */

    }

    .image-container {
        height: 200px;
        /* Adjust this height to fit exactly 2 rows of images */
        overflow-y: auto;
        /* Enable vertical scrolling */
    }

    /* Custom scrollbar styling */
    .image-container::-webkit-scrollbar {
        width: 8px;
        /* Width of the scrollbar */
    }

    .image-container::-webkit-scrollbar-track {
        background: rgba(230, 177, 16, 0.1);
        /* Light track color */
        border-radius: 4px;
        /* Rounded corners for the track */
    }

    .image-container::-webkit-scrollbar-thumb {
        background: #E6B110;
        /* Color of the scrollbar thumb */
        border-radius: 4px;
        /* Rounded corners for the thumb */
    }

    .image-container::-webkit-scrollbar-thumb:hover {
        background: rgba(230, 177, 16, 0.8);
        /* Lighter color on hover */
    }

    /* Responsive adjustments */
    @media (max-width: 767.98px) {
        .responsive-heading-3 {
            font-size: 1.5rem;
            /* Smaller font size for mobile */
        }

        .image-container {
            height: 300px;
            /* Increase height for better visibility on mobile */
        }

        .image-container .row {
            row-gap: 2rem !important;
            /* Reduce gap between rows on mobile */
        }

        .logo-slider-height-responsive {
            height: auto !important;
        }
    }
</style>

<section class="align-items-center container-fluid d-flex justify-content-center px-3 px-md-5 logo-slider-height-responsive vh-75">
    <div class="row justify-content-center align-items-center g-2 w-100 h-100">
        <!-- Left Column (Text Content) -->
        <div class="col-12 col-md-6 d-flex flex-column gap-3  justify-content-center text-center text-md-start">
            <h2 class="display-3 fw-bolder lh-1  text-start">Brands We <br class="d-md-block d-none">
                <span class="main-color">Specialized In</span>
            </h2>
            <p class="fw-light fs-6  text-start">At Gargash Auto, we specialize in offering expert services for a wide range of luxury European car brands. Whether it’s a BMW, Mercedes-Benz, Audi, Porsche, or Jaguar, our Premium European Car Experts Dubai provide tailored solutions to keep your vehicle running at its best. With years of experience and genuine parts, we ensure optimal performance for every brand we service.
            </p>
        </div>

        <!-- Right Column (Image Grid) -->
        <div class="col-12 col-md-6 d-flex h-100 justify-content-center align-items-center">
            <div class="bg-white-overlay h-75 position-relative w-100 shadow rounded-2">
                <div class="d-flex image-container justify-content-evenly mt-5 mt-md-0 p-md-3 px-md-5 row row-cols-3 row-cols-md-5 w-100  logo-slider-responsive-height" style="row-gap: 4rem;">
                    <img src="{{ asset('assets/user/img/shop-logo-1.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-2.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-3.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-4.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-5.png') }}" width="80" height="80" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-6.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-7.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-8.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;" width="75" height="76">
                    <img src="{{ asset('assets/user/img/shop-logo-9.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-10.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-11.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-12.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-13.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-14.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-15.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-16.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-17.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-18.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-19.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-20.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-21.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-22.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-23.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-24.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                    <img src="{{ asset('assets/user/img/shop-logo-25.png') }}" alt="" class="h-25 w-auto" style="z-index: 10;">
                </div>
            </div>
        </div>
    </div>
</section>
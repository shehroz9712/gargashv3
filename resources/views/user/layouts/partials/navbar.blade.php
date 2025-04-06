<header class="site-header">
    <div class="top-reading secondary-bg py-1 overflow-hidden">
        <div class="container">
            <!-- <ul class="top-updates d-flex align-items-center justify-content-center justify-content-between list-unstyled m-0 p-0"> -->
            <ul
                class="top-updates d-flex align-items-center justify-content-center  justify-content-between list-unstyled m-0 p-0">
                <li
                    class="single-item primary-semibold-font level-10 dark-color text-capitalize d-flex align-items-center gap-1 my-hero-text-size   pe-3">
                    <span>
                        <img src="{{ asset('assets/user/img/header-icon1.png') }}" alt="" class="img-fluid"
                            style="max-width: 500px;" />
                    </span> <span class="me-2">FREE PICKUP</span>
                </li>
                <li
                    class="single-item primary-semibold-font level-10 dark-color text-capitalize d-flex align-items-center gap-1 my-hero-text-size px-3  ">
                    <span>
                        <img src="{{ asset('assets/user/img/header-icon2.png') }}" alt="" class="img-fluid"
                            style="max-width: 500px;" />
                    </span> FREE INSPECTION
                </li>
                <li
                    class="single-item primary-semibold-font level-10 dark-color text-capitalize d-flex align-items-center gap-1 my-hero-text-size  px-3 ">
                    <span>
                        <img src="{{ asset('assets/user/img/header-icon3.png') }}" alt="" class="img-fluid"
                            style="max-width: 500px;" />
                    </span> JOB APPROVAL
                </li>
                <li
                    class="single-item primary-semibold-font level-10 dark-color text-capitalize d-flex align-items-center gap-1 my-hero-text-size  px-3 ">
                    <span>
                        <img src="{{ asset('assets/user/img/header-icon4.png') }}" alt="" class="img-fluid"
                            style="max-width: 500px;" />
                    </span> REPAIR & FIX
                </li>
                <li
                    class="single-item primary-semibold-font level-10 dark-color text-capitalize d-flex align-items-center gap-1 my-hero-text-size  px-3 ">
                    <span>
                        <img src="{{ asset('assets/user/img/header-icon5.png') }}" alt="" class="img-fluid"
                            style="max-width: 500px;" />
                    </span> DELIVER BACK
                </li>
                <li
                    class="single-item primary-semibold-font level-10 dark-color text-capitalize d-flex align-items-center gap-1 my-hero-text-size  px-3 ">
                    <ul
                        class="reviews-wrap list-unstyled m-0 p-0 d-flex align-items-center justify-content-center gap-1">
                        <li class="review-li">
                            <i class="fa-solid fa-star" style="color: #000"></i>
                        </li>
                        <li class="review-li">
                            <i class="fa-solid fa-star" style="color: #000"></i>
                        </li>
                        <li class="review-li">
                            <i class="fa-solid fa-star" style="color: #000"></i>
                        </li>
                        <li class="review-li">
                            <i class="fa-solid fa-star" style="color: #000"></i>
                        </li>
                        <li class="review-li">
                            <i class="fa-solid fa-star" style="color: #fff"></i>
                        </li>
                    </ul> 4.9 Google Reviews
                </li>
                <li class="single-item dropdown-wrap px-3">
                    <div class="dropdown">
                        <button class="dropdown-toggle border-0 bg-transparent d-flex align-items-center" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fa-solid fa-flag-usa me-1"></span>
                            <span class="language-span">English</span>
                        </button>

                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- ////////////////////// -->

    <script>
        const topUpdates = document.querySelector('.top-updates');

        // Slider ko stop karein jab hover ya click ho
        topUpdates.addEventListener('mouseenter', () => {
            topUpdates.style.animationPlayState = 'paused';
        });

        topUpdates.addEventListener('mouseleave', () => {
            topUpdates.style.animationPlayState = 'running';
        });

        // Mobile par touch events ke liye
        topUpdates.addEventListener('touchstart', () => {
            topUpdates.style.animationPlayState = 'paused';
        });

        topUpdates.addEventListener('touchend', () => {
            topUpdates.style.animationPlayState = 'running';
        });
    </script>

    <!-- ////////////////////// -->



    <div class="container-fluid header-options header-bg py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-lg-row gap-lg-0 gap-3">
                <div class="header-details-wrapper d-lg-flex d-none align-items-center justify-content-end gap-3">
                    <a class="contact-icon">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                    <div class="contact-detail">
                        <h6 class="level-9 primary-semibold-font extra-color-3 mb-0"> Call Us </h6>
                        <a href="tel:+971 56 545 8853"
                            class="cell-no level-7 heading-font dark-color text-decoration-none dark-hover"> +971 56 545
                            8853</a>
                    </div>
                </div>
                <figure class="header-logo">
                    <a href="{{ route('user.home') }}" class="d-block">
                        <img src="{{ asset('assets/user/img/logo.png') }}" class="logo-here w-100 object-cover"
                            alt="" />
                    </a>
                </figure>
                <div class="header-details-wrapper d-lg-flex d-none align-items-center justify-content-end gap-3">
                    <a class="contact-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                    <div class="contact-detail">
                        <h6 class="level-9 primary-semibold-font extra-color-3 mb-0"> Mail Us </h6>
                        <a href="mailto:sales@gargashauto.ae"
                            class="cell-no level-7 heading-font dark-color text-decoration-none dark-hover">
                            sales@gargashauto.ae</a>
                    </div>
                </div>
                <!-- <button class="icon-badge position-absolute top-0 right-0 mt-3 me-3 d-lg-none d-block" onclick='$(".mobile-header").toggleClass("active");$("body").toggleClass("overflow-hidden")'><i class="fa fa-close"></i></button> -->
                <button class="d-lg-none icon-badge p-4 bg-dark"
                    onclick='$(".mobile-header").toggleClass("active");$("body").toggleClass("overflow-hidden")'>
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- ///////////////////////// -->
    <div class="header-menu-bar py-3 d-lg-block d-none bg-white">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="header-nav col-xxl-10 col-lg-12">
                    <ul class="header-menus d-flex align-items-center list-unstyled w-100 justify-content-between m-0">
                        <li class="list-item">
                            <a href="{{ route('user.home') }}"
                                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Home</a>
                        </li>
                        <li class="list-item">
                            <a href="{{ route('user.contract') }}"
                                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Annual
                                Contract</a>
                        </li>
                        <li class="list-item">
                            <a href="{{ route('user.promotions') }}"
                                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Ongoing
                                Promotions</a>
                        </li>
                        <!-- <li class="single-item">
              <a class="header-link categoryBtn text-decoration-none level-8 primary-semibold-font dark-color link-here cursor-pointer"> Brands <i class="fa-solid fa-angle-down"></i>
              </a>
            </li> -->
                        <li class="single-item">
                            <a
                                class="header-link categoryBtn-service text-decoration-none level-8 primary-semibold-font dark-color link-here cursor-pointer">
                                Services <i class="fa-solid fa-angle-down"></i>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="{{ route('user.shop') }}"
                                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Body
                                Shop </a>
                        </li>
                        <li class="list-item">
                            <a href="{{ route('user.blogs') }}"
                                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Blog
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="{{ route('user.about-us') }}"
                                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">About
                                Us </a>
                        </li>
                        <li class="list-item">
                            <a href="{{ route('user.contact') }}"
                                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Contact
                                Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <style>
        .tabbable-responsive {
            width: 100%;
        }

        /* Desktop View - Horizontal Tabs */
        .nav-tabs {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            border: none !important;
            padding: 0;
            white-space: nowrap;
        }

        .nav-item {
            flex-shrink: 0;
        }

        .nav-link {
            color: #e6b110 !important;
            padding: 10px 20px;
            border-radius: 5px 5px 0 0;
            margin-right: 5px;
            font-size: 1.25rem;
            font-weight: 600;
            border: 1px solid transparent !important;
        }

        .nav-link.active {
            background-color: #e6b110 !important;
            color: white !important;
            border-bottom: 3px solid #e6b110 !important;
        }

        h6 {
            margin-bottom: 0;
        }

        /* Mobile View - Accordion Tabs */
        @media (max-width: 767.98px) {
            .nav-tabs {
                display: none;
            }

            .accordion-item {
                border: 1px solid #dee2e6;
                margin-bottom: 5px;
                border-radius: 5px;
            }

            .accordion-button {
                background-color: #e6b110;
                color: white;
                font-size: 1.25rem;
                font-weight: 600;
                border-radius: 5px;
            }

            .accordion-button:not(.collapsed) {
                background-color: #d4a00d;
            }
        }
    </style>

    <!-- Brands Mega Menu  -->

    <!-- Services Mega Menu  -->
    <div class="mega-menu category-services-menu self-mobile-respnsive mega-menu-mobile-respnsive-scrolling">
        <!-- Close Button (Only for Mobile) -->
        <button
            class="close-menu icon-badge me-3 mt-3 p-4 position-absolute right-0 top-0  d-md-none close-self-mobile-respnsive-div">
            <i class="fa fa-close text-white"></i>
        </button>
        <div class="container">
            <div class="row align-items-center mobile-responsive-scrolling">
                <div class="col-md-12">
                    <div class="row align-items-center ">
                        <div class="head pb-2 mb-2">
                            <h6 class="title level-9 primary-semibold-font extra-color-3">Services</h6>
                        </div>
                        <div class="col-md-3 borderCol">
                            <ul class="list-unstyled p-0 d-flex flex-column gap-4 mb-0">
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'auto-spa']) }}"
                                        class="d-flex">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon12.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="primary-semibold-font primary-color">Auto Spa</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Luxurious detailing
                                                to keep your car looking brand new.</span>

                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'car-inspection']) }}"
                                        class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon6.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Car Inspection</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Thorough
                                                inspections to ensure safety and reliability.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'car-wrapping']) }}"
                                        class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon8.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Car Wrapping</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Custom wraps to
                                                transform your vehicle's appearance.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'ceramic']) }}"
                                        class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon11.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Ceramic</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Ceramic coating for
                                                long-lasting paint protection.</span>
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 borderCol">
                            <ul class="list-unstyled p-0 d-flex flex-column gap-4 mb-0">
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'european-cars']) }}"
                                        class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon3.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">European Cars</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Specialized care
                                                for European Cars brands.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'german-cars']) }}"
                                        class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon10.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">German Cars</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Specialized care
                                                for German Cars brands.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'electric-repair']) }}"
                                        class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon5.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Electric Repair
                                            </h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Specialized repairs
                                                for electric vehicles.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'extended-warranty']) }}"
                                        class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon2.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Extended Warranty
                                            </h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Peace of mind with
                                                extended coverage on your vehicle.</span>
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 borderCol">
                            <ul class="list-unstyled p-0 d-flex flex-column gap-4 mb-0">
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'general-repair']) }}"
                                        class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon1.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">General Repair</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Expert repair
                                                services for all makes and models.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{ route('user.servicesDetail', ['slug' => 'major-minor-service']) }}"
                                        class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon9.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Major/Minor Service
                                            </h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Comprehensive
                                                servicing for both routine and major repairs.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{ route('user.servicesDetail', ['slug' => 'road-side-assistance']) }}"
                                        class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon7.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Roadside Assistance
                                            </h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Reliable support
                                                when you need it the most.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'tinting']) }}"
                                        class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon4.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Tinting</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Professional window
                                                tinting for added privacy and comfort.</span>
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 borderCol d-flex flex-column gap-4">
                            <video src="{{ asset('assets/user/img/1.mp4') }}" controls autoplay muted
                                disablePictureInPicture controlsList="nodownload noplaybackrate"
                                class="h-100 rounded-3 w-100">
                            </video>
                            <a href="https://wa.me/971547935400" target="_blank" class="btn ">Book Now</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>



    </div>


    <!-- Mobile mega menu tab Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // For mobile: Close accordion when clicking on open tab
            const mobileAccordionButtons = document.querySelectorAll('#mobileTabAccordion .accordion-button');

            mobileAccordionButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const target = this.getAttribute('data-bs-target');
                    const targetCollapse = document.querySelector(target);

                    // If the clicked section is already shown, collapse it
                    if (this.classList.contains('collapsed') === false) {
                        const bsCollapse = new bootstrap.Collapse(targetCollapse, {
                            toggle: true
                        });
                        // This will prevent the default behavior
                        event.stopPropagation();
                        return false;
                    }
                });
            });

            // Keep your existing close button functionality
            var closeButton = document.querySelector('.close-self-mobile-respnsive-div');
            if (closeButton) {
                var mobileDiv = document.querySelector('.self-mobile-respnsive');
                closeButton.addEventListener('click', function() {
                    mobileDiv.classList.remove('active');
                });
            }
        });
    </script>

    <!-- Mobile maga Menu button closing Script -->
    <script>
        document.addEventListener('click', function(event) {
            // Mega Menu 1 (category-menu)
            if (event.target.closest('.close-self-mobile-respnsive-div') && event.target.closest(
                    '.category-menu')) {
                var categoryMenu = document.querySelector('.category-menu');
                if (categoryMenu) {
                    categoryMenu.classList.remove('active');
                }
            }

            // Mega Menu 2 (category-services-menu)
            if (event.target.closest('.close-self-mobile-respnsive-div') && event.target.closest(
                    '.category-services-menu')) {
                var servicesMenu = document.querySelector('.category-services-menu');
                if (servicesMenu) {
                    servicesMenu.classList.remove('active');
                }
            }
        });
    </script>

    <ul class="mobile-header list-unstyled d-flex flex-lg-row flex-column gap-4 ps-lg-0 mb-0 pe-lg-5 z-index-1"
        style="z-index: 15;">
        <li class="list-item align-self-baseline"><a href="{{ route('user.home') }}"
                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Home</a>
        </li>
        <li class="list-item align-self-baseline"><a href="{{ route('user.contract') }}"
                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Annual
                Contract</a>
        </li>
        <li class="list-item align-self-baseline"><a href="{{ route('user.promotions') }}"
                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Ongoing
                Promotions</a>
        </li>
        <li class="single-item align-self-baseline"><a href="#"
                class="header-link categoryBtn-service text-decoration-none level-8 primary-semibold-font dark-color link-here">
                Services <i class="fa-solid fa-angle-down"></i></a>
        </li>
        <li class="list-item align-self-baseline"><a
                href="{{ route('user.shop') }}"
                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Body
                Shop</a></li>
        <li class="list-item align-self-baseline"><a href="{{ route('user.blogs') }}"
                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Blogs</a>
        </li>
        <li class="list-item align-self-baseline"><a href="{{ route('user.about-us') }}"
                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">About
                Us
            </a></li>
        <li class="list-item align-self-baseline"><a href="{{ route('user.contact') }}"
                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Contact
                Us</a></li>
        <div class="header-details-wrapper d-flex align-items-center justify-content-start gap-3 align-self-baseline">
            <a class="contact-icon">
                <i class="fa-solid fa-phone"></i>
            </a>
            <div class="contact-detail">
                <h6 class="level-9 primary-semibold-font extra-color-2 mb-0">Call Us </h6>
                <a href="tel:+971 56 545 8853"
                    class="cell-no level-7 heading-font dark-color text-decoration-none dark-hover">
                    +971 56 545 8853</a>
            </div>
        </div>
        <div class="header-details-wrapper d-flex align-items-center justify-content-start gap-3 align-self-baseline">
            <a class="contact-icon">
                <i class="fa-solid fa-envelope"></i>
            </a>
            <div class="contact-detail">
                <h6 class="level-9 primary-semibold-font extra-color-2 mb-0">Mail Us </h6>
                <a href="mailto:sales@gargashauto.ae"
                    class="cell-no level-7 heading-font dark-color text-decoration-none dark-hover">
                    sales@gargashauto.ae</a>
            </div>
        </div>

        <button class="icon-badge me-3 mt-3 p-4 position-absolute right-0 top-0"
            onclick='$(".mobile-header").toggleClass("active");$("body").toggleClass("overflow-hidden")'><i
                class="fa fa-close"></i></button>

    </ul>
</header>

<style>
    .scroll-transition {
        transition: margin-top 0.3s ease;
    }

    .top-reading {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 10;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .top-reading.hide {
        transform: translateY(-100%);
        opacity: 0;
        pointer-events: none;
    }m
</style>


<header class="site-header">
    <div class="top-reading secondary-bg py-1 overflow-hidden">
        <div class="container">

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
                    </ul> 4.7 Google Reviews
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

        // Stop the slider when hovered or clicked
        topUpdates.addEventListener('mouseenter', () => {
            topUpdates.style.animationPlayState = 'paused';
        });

        topUpdates.addEventListener('mouseleave', () => {
            topUpdates.style.animationPlayState = 'running';
        });

        // For touch events on mobile
        topUpdates.addEventListener('touchstart', () => {
            topUpdates.style.animationPlayState = 'paused';
        });

        topUpdates.addEventListener('touchend', () => {
            topUpdates.style.animationPlayState = 'running';
        });
    </script>
    <!-- ////////////////////// -->
    <span>
        <div class="container-fluid header-options header-bg py-3 mt-5">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between flex-lg-row gap-lg-0 gap-3">
                    <div class="header-details-wrapper d-lg-flex d-none align-items-center justify-content-end gap-3">
                        <a class="contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                        <div class="contact-detail">
                            <h6 class="level-9 primary-semibold-font extra-color-3 mb-0"> Toll Free: </h6>
                            <a href="tel:8004272886"
                                class="cell-no level-7 heading-font dark-color text-decoration-none dark-hover"> 800
                                4272886</a><br>


                        </div>
                    </div>
                    <figure class="header-logo">
                        <a href="https://gargashauto.ae/" class="d-block">
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
                                <a href="https://gargashauto.ae/"
                                    class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Home</a>
                            </li>
                            <li class="single-item">
                                <a class="header-link categoryBtn text-decoration-none level-8 primary-semibold-font dark-color link-here cursor-pointer"> Brands <i class="fa-solid fa-angle-down"></i>
                                </a>
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
    </span>
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
    <div class="mega-menu category-menu self-mobile-respnsive mega-menu-mobile-respnsive-scrolling self-margin-top-responsive">
        <!-- Close Button (Only for Mobile) -->
        <button class="close-menu icon-badge me-3 mt-3 p-4 position-absolute right-0 top-0  d-md-none close-self-mobile-respnsive-div">
            <i class="fa fa-close text-white"></i>
        </button>

        <!--Desktop  Mega  Menu Start here-->
        <div class="card container d-md-block d-none mt-5 mt-md-0">
            <div class="card-header bg-transparent">
                <div class="tabbable-responsive">
                    <!-- Desktop Tabs -->
                    <ul class="nav nav-tabs d-none d-md-flex overflow-hidden" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="Dubai-tab" data-bs-toggle="tab" href="#Dubai" role="tab" aria-controls="Dubai" aria-selected="true">Dubai
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sharjah-tab" data-bs-toggle="tab" href="#sharjah" role="tab" aria-controls="sharjah" aria-selected="true">Sharjah
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Desktop Content -->

            <div class="card-body brand-card-body-display-responsive">
                <div class="tab-content d-none d-md-block">
                    <div class="tab-pane fade show active" id="Dubai" role="tabpanel" aria-labelledby="Dubai-tab">

                        <p class="fs-6 fw-normal m-0 mb-4 text-black-50">At Gargash Auto, we specialize in offering expert services for a wide range of luxury European car brands. Whether it’s a BMW, Mercedes-Benz, Audi, Porsche, or Jaguar, our Premium European Car Experts Dubai provide tailored solutions to keep your vehicle running at its best. With years of experience and genuine parts, we ensure optimal performance for every brand we service

                        </p>

                        <div class="container">

                            <div class="row row-cols-3">
                                <div class="col">
                                    <div class="menu-text">
                                        <h6 class="fs-5 fw-bold" style="color:black !important;">European Cars</h6>
                                        <ul class="d-flex flex-column fs-5 fw-semibold gap-0 list-unstyled mt-2">
                                            <li>
                                                <a href="https://gargashauto.ae/brand/bentley-repair-dubai" class=" fs-6 primary-semibold-font  fw-normal">
                                                    Bentley
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://gargashauto.ae/brand/jaguar-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                    Jaguar
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://gargashauto.ae/brand/range-rover-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                    Range Rover
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://gargashauto.ae/brand/mini-cooper-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                    Mini Cooper
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://gargashauto.ae/brand/rolls-royce-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                    Rolls Royce
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="menu-text">
                                        <h6 class="fs-5 fw-bold ">German Cars</h6>
                                        <ul class="d-flex flex-column gap-0 list-unstyled mt-2">
                                            <li>
                                                <a href="https://gargashauto.ae/brand/audi-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                    Audi
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://gargashauto.ae/brand/bmw-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                    BMW
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://gargashauto.ae/brand/mercedes-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                    Mercedes
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://gargashauto.ae/brand/porsche-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                    Porsche
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://gargashauto.ae/brand/volvo-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                    Volvo
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="menu-text">
                                        <h6 class="fs-5 fw-bold ">Italian Cars</h6>
                                        <ul class="d-flex flex-column fs-5 fw-semibold gap-0 list-unstyled mt-2">
                                            <li>
                                                <a href="https://gargashauto.ae/brand/ferrari-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                    Ferrari
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://gargashauto.ae/brand/lamborghini-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                    Lamborghini
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://gargashauto.ae/brand/maserati-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                    Maserati
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body brand-card-body-display-responsive d-none">
                <div class="tab-content d-none d-md-block ">
                    <div class="tab-pane fade show " id="sharjah" role="tabpanel" aria-labelledby="sharjah-tab">
                        <p class="fs-6 fw-normal m-0 mb-4 text-black-50">At Gargash Auto, we specialize in offering expert services for a wide range of luxury European car brands. Whether it’s a BMW, Mercedes-Benz, Audi, Porsche, or Jaguar, our Premium European Car Experts Dubai provide tailored solutions to keep your vehicle running at its best. With years of experience and genuine parts, we ensure optimal performance for every brand we service</p>
                        <div class="container">
                            <div class="row align-items-center mobile-responsive-scrolling">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col">
                                            <div class="menu-text">
                                                <h6 class="fs-5 fw-bold ">European Cars </h6>
                                                <ul class="d-flex flex-column fs-5 fw-semibold gap-0 list-unstyled mt-2">
                                                    <li>
                                                        <a href="https://gargashauto.ae/brand/bentley-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                            Bentley
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://gargashauto.ae/brand/jaguar-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                            Jaguar
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://gargashauto.ae/brand/range-rover-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                            Range Rover
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://gargashauto.ae/brand/mini-cooper-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                            Mini Cooper
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://gargashauto.ae/brand/rolls-royce-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                            Rolls Royce
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="menu-text">
                                                <h6 class="fs-5 fw-bold ">German Cars</h6>
                                                <ul class="d-flex flex-column gap-0 list-unstyled mt-2">
                                                    <li>
                                                        <a href="https://gargashauto.ae/brand/audi-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                            Audi
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://gargashauto.ae/brand/bmw-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                            BMW
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://gargashauto.ae/brand/mercedes-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                            Mercedes
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://gargashauto.ae/brand/porsche-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                            Porsche
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://gargashauto.ae/brand/volvo-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                            Volvo
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="menu-text">
                                                <h6 class="fs-5 fw-bold ">Italian Cars</h6>
                                                <ul class="d-flex flex-column fs-5 fw-semibold gap-0 list-unstyled mt-2">
                                                    <li>
                                                        <a href="https://gargashauto.ae/brand/ferrari-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                            Ferrari
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://gargashauto.ae/brand/lamborghini-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                            Lamborghini
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://gargashauto.ae/brand/maserati-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                            Maserati
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Tab top extra tabs remove wit JS-->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Function to handle tab visibility
                function handleTabVisibility() {
                    // Get all tab panes
                    const tabPanes = document.querySelectorAll('.tab-pane');

                    tabPanes.forEach(pane => {
                        // Get the parent's parent of each tab-pane (card-body)
                        const cardBody = pane.closest('.card-body');

                        if (pane.classList.contains('active')) {
                            // If tab is active, show its parent's parent
                            cardBody.classList.remove('d-none');
                            cardBody.classList.add('d-block');
                        } else {
                            // If tab is not active, hide its parent's parent
                            cardBody.classList.remove('d-block');
                            cardBody.classList.add('d-none');
                        }
                    });
                }

                // Initial check when page loads
                handleTabVisibility();

                // Listen for Bootstrap tab change events
                const tabEls = document.querySelectorAll('[data-bs-toggle="tab"]');
                tabEls.forEach(tab => {
                    tab.addEventListener('shown.bs.tab', function() {
                        handleTabVisibility();
                    });
                });
            });
        </script>
        <!--Desktop  Mega  Menu End here-->

        <!-- Mobile Mega  Menu  Start here-->
        <div class="d-md-none my-5">
            <div class="accordion" id="mobileTabAccordion">
                <!-- Dubai -->
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mobileDubai" aria-expanded="false" aria-controls="mobileDubai">
                            Dubai
                        </button>
                    </h2>
                    <div id="mobileDubai" class="accordion-collapse collapse self-mobile-navbar-height-responsive" data-bs-parent="#mobileTabAccordion">
                        <div class="accordion-body " style="height: 100%; overflow-y: auto; padding-bottom: 5rem;">

                            <div class="container">
                                <div class="mt-4 row">
                                    <div class="col-12">
                                        <div class="menu-text">
                                            <h6 class="fs-5 fw-bold ">European Cars
                                            </h6>
                                            <ul class="mt-2">
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/bentley-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                        Bentley
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/jaguar-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                        Jaguar
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/range-rover-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                        Range Rover
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/mini-cooper-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                        Mini Cooper
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/rolls-royce-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                        Rolls Royce
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="menu-text">
                                            <h6 class="fs-5 fw-bold ">German Cars</h6>
                                            <ul class="mt-2">
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/audi-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                        Audi
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/bmw-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                        BMW
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/mercedes-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                        Mercedes
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/porsche-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                        Porsche
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/volvo-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                        Volvo
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="menu-text">
                                            <h6 class="fs-5 fw-bold ">Italian Cars</h6>
                                            <ul class="mt-2">
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/ferrari-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                        Ferrari
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/lamborghini-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                        Lamborghini
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/maserati-repair-dubai" class="self-navbar-text-color fs-6 fw-normal">
                                                        Maserati
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sharjah -->
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mobilesharjah" aria-expanded="false" aria-controls="mobilesharjah">
                            Sharjah
                        </button>
                    </h2>
                    <div id="mobilesharjah" class="accordion-collapse collapse self-mobile-navbar-height-responsive" data-bs-parent="#mobileTabAccordion">
                        <div class="accordion-body" style="height: 100%; overflow-y: auto; padding-bottom: 7rem;">

                            <div class="container">
                                <div class="mt-4 row">
                                    <div class="col-12">
                                        <div class="menu-text">
                                            <h6 class="fs-5 fw-bold ">European Cars </h6>
                                            <ul class=" mt-2 ">
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/bentley-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                        Bentley
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/jaguar-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                        Jaguar
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/range-rover-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                        Range Rover
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/mini-cooper-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                        Mini Cooper
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/rolls-royce-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                        Rolls Royce
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="menu-text">
                                            <h6 class="fs-5 fw-bold ">German Cars</h6>
                                            <ul class=" mt-2 ">
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/audi-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                        Audi
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/bmw-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                        BMW
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/mercedes-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                        Mercedes
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/porsche-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                        Porsche
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/volvo-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                        Volvo
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="menu-text">
                                            <h6 class="fs-5 fw-bold ">Italian Cars</h6>
                                            <ul class=" mt-2 ">
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/ferrari-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                        Ferrari
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/lamborghini-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                        Lamborghini
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://gargashauto.ae/brand/maserati-repair-sharjah" class="self-navbar-text-color fs-6 fw-normal">
                                                        Maserati
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add remaining emirates in the same pattern -->
            </div>
        </div>
    </div>
    <!-- Mobile mega menu tab Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileAccordionButtons = document.querySelectorAll('#mobileTabAccordion .accordion-button');
            let activeCollapse = null; // track currently open collapse

            mobileAccordionButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    const targetSelector = this.getAttribute('data-bs-target');
                    const targetCollapse = document.querySelector(targetSelector);

                    // If this button is already open (not collapsed)
                    if (!this.classList.contains('collapsed')) {
                        // Close the currently open collapse
                        const bsCollapse = bootstrap.Collapse.getOrCreateInstance(targetCollapse);
                        bsCollapse.hide();
                        activeCollapse = null;
                    } else {
                        // Close previously active if exists
                        if (activeCollapse && activeCollapse !== targetCollapse) {
                            const prevCollapse = bootstrap.Collapse.getOrCreateInstance(activeCollapse);
                            prevCollapse.hide();
                        }

                        // Open the selected collapse
                        const newCollapse = bootstrap.Collapse.getOrCreateInstance(targetCollapse);
                        newCollapse.show();
                        activeCollapse = targetCollapse;
                    }

                    event.preventDefault();
                });
            });

            // Default open: First accordion item
            const firstCollapse = document.querySelector('#mobileTabAccordion .accordion-collapse');
            if (firstCollapse) {
                const defaultInstance = bootstrap.Collapse.getOrCreateInstance(firstCollapse);
                defaultInstance.show();
                activeCollapse = firstCollapse;
            }

            // Close button functionality
            const closeButton = document.querySelector('.close-self-mobile-respnsive-div');
            const mobileDiv = document.querySelector('.self-mobile-respnsive');
            if (closeButton && mobileDiv) {
                closeButton.addEventListener('click', function() {
                    mobileDiv.classList.remove('active');
                });
            }
        });
    </script>


    <!-- Mobile Mega  Menu End here -->
    <!-- Brand Mega Menu End -->


    <!-- Services Mega Menu  -->
    <div class="mega-menu category-services-menu self-mobile-respnsive mega-menu-mobile-respnsive-scrolling self-margin-top-services">
        <!-- Close Button (Only for Mobile) -->
        <button
            class="close-menu icon-badge me-3 mt-3 p-4 position-absolute right-0 top-0  d-md-none close-self-mobile-respnsive-div">
            <i class="fa fa-close text-white"></i>
        </button>
        
        <style>
            .imgmenu
            {
                height:40px !important;
                width:40px !important;
            }
        </style>
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
                                        class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon12.png') }}" alt=""
                                                class="imgmenu">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Auto Spa</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Luxurious detailing
                                                to keep your car looking brand new.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'car-inspection']) }}"
                                        class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon6.png') }}" alt=""
                                                class="imgmenu">
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
                                                class="imgmenu">
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
                                                class="imgmenu">
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
                                                class="imgmenu">
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
                                                class="imgmenu">
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
                                                class="imgmenu">
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
                                                class="imgmenu">
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
                                                class="imgmenu">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">General Repair</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Expert repair
                                                services for all makes and models.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'major-minor-service']) }}"
                                        class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon9.png') }}" alt=""
                                                class="imgmenu">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Major/Minor Service
                                            </h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Comprehensive
                                                servicing for both routine and major repairs.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'car-recovery']) }}"
                                        class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon7.png') }}" alt=""
                                                class="imgmenu">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Car Recovery
                                            </h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Reliable support
                                                when you need it the most.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'tinting']) }}"
                                        class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon4.png') }}" alt=""
                                                class="imgmenu">
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
        <li class="list-item align-self-baseline"><a href="https://gargashauto.ae/"
                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Home</a>
        </li>

        <li class="single-item">
            <a class="header-link categoryBtn text-decoration-none level-8 primary-semibold-font dark-color link-here cursor-pointer"> Brands <i class="fa-solid fa-angle-down"></i>
            </a>
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
        <li class="list-item align-self-baseline"><a href="{{ route('user.shop') }}"
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
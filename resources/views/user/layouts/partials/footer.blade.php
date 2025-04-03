<button onclick="topFunction()" id="myBtn" title="Go to top"
    class="align-items-center bottom-20 d-flex justify-content-center p-3 position-fixed rounded">
    <i class="fa-solid fa-arrow-up-from-bracket"></i>
</button>

<style>
    #myBtn {
        display: none;
        /* Hidden by default */
        z-index: 99;
        /* Ensure it's above other elements */
        font-size: 18px;
        background: #e6b110;
        bottom: 1%;
        right: 4%;
        transition: opacity 0.3s, visibility 0.3s;
        /* Smooth transition */
        opacity: 0;
        /* Initially invisible */
        visibility: hidden;
        /* Initially hidden */
    }

    #myBtn.show {
        opacity: 1;
        /* Fully visible */
        visibility: visible;
        /* Show the button */
    }

    #myBtn:hover {
        background-color: rgb(230, 177, 16);
        color: #111;
        /* Dark-grey background on hover */
    }
</style>

<footer class="site-footer extra-bg-7 position-relative" id="brand-seciont">
    <div class="container">
        <div
            class="footer-top-wrapper mb-4 d-flex flex-sm-row flex-column gap-sm-0 gap-3 align-items-center justify-content-between">
            <div class="footer-para">
                <p class="level-4 primary-light-font extra-color-3 mb-0">With exclusive discounts and outstanding
                    services, we guarantee your premium vehicle gets the finest care and expert maintenance.</p>
            </div>
            <div class="footer-social-wrapper">
                <ul class="list-unstyled d-flex ps-0 mb-0 gap-2 justify-content-center">
                    <li>
                        <a href="https://www.facebook.com/GargashAuto" target="_blank"
                            class="text-decoration-none body-color primary-regular-font level-8 d-flex align-items-center gap-3">
                            <span class="icon-badge">
                                <i class="fa-brands fa-facebook-f"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/gargashauto/?hl=en" target="_blank"
                            class="text-decoration-none body-color primary-regular-font level-8 d-flex align-items-center gap-3">
                            <span class="icon-badge">
                                <i class="fa-brands fa-instagram"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/@gargashauto" target="_blank"
                            class="text-decoration-none body-color primary-regular-font level-8 d-flex align-items-center gap-3">
                            <span class="icon-badge">
                                <i class="fa-brands fa-youtube"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-faqs-wrapper">
            <div class="accordion accordion-flush footer-tabs-min-height" id="accordionFlushExample">
                <div class="accordion-item bg-transparent">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button bg-transparent level-1 sub-font dark-color collapsed text-black"
                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                            aria-expanded="false" aria-controls="flush-collapseOne"> Brands </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse open-brand-section"
                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <!-- <ul class="brand-ul d-flex flex-sm-row flex-column align-items-center flex-wrap"> -->
                            <ul class="row row-cols-2 row-cols-md-6">
                                <li class="brand-li">
                                    <a href="#"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Mercedes</a>
                                </li>
                                <li class="brand-li">
                                    <a href="#"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">BMW</a>
                                </li>
                                <li class="brand-li">
                                    <a href="#"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Audi</a>
                                </li>
                                <li class="brand-li">
                                    <a href="#"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Lexus</a>
                                </li>
                                <li class="brand-li">
                                    <a href="#"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Range
                                        Rover</a>
                                </li>
                                <li class="brand-li">
                                    <a href="#"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Porsche</a>
                                </li>
                                <li class="brand-li">
                                    <a href="#"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Infiniti</a>
                                </li>
                                <li class="brand-li">
                                    <a href="#"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Nissan</a>
                                </li>
                                <li class="brand-li">
                                    <a href="#"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">GMC</a>
                                </li>
                                <li class="brand-li">
                                    <a href="#"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Jeep</a>
                                </li>
                                <li class="brand-li">
                                    <a href="#"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Porsche</a>
                                </li>
                                <li class="brand-li">
                                    <a href="#"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Infiniti</a>
                                </li>
                                <li class="brand-li">
                                    <a href="#"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Nissan</a>
                                </li>
                                <li class="brand-li">
                                    <a href="#"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">GMC</a>
                                </li>
                                <li class="brand-li">
                                    <a href="#"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Jeep</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item bg-transparent" id="service-seciont">
                    <h2 class="accordion-header" id="service-seciont">
                        <button class="accordion-button bg-transparent level-1 sub-font dark-color collapsed text-black"
                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                            aria-expanded="false" aria-controls="flush-collapseTwo"> Services </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <!-- <ul class="brand-ul d-flex flex-sm-row flex-column align-items-center flex-wrap"> -->
                            <ul class="g-2 row row-cols-2 row-cols-md-4">
                                <li class="brand-li">
                                    <a href="{{ route('user.servicesDetail', ['slug' => 'auto-spa']) }}"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Auto
                                        Spa</a>
                                </li>
                                <li class="brand-li">
                                    <a href="{{ route('user.servicesDetail', ['slug' => 'car-inspection']) }}"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Car
                                        Inspection</a>
                                </li>
                                <li class="brand-li">
                                    <a href="{{ route('user.servicesDetail', ['slug' => 'car-wrapping']) }}"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Car
                                        Wrapping</a>
                                </li>
                                <li class="brand-li">
                                    <a href="{{ route('user.servicesDetail', ['slug' => 'ceramic']) }}"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Ceramic</a>
                                </li>
                                <li class="brand-li">
                                    <a href="{{ route('user.servicesDetail', ['slug' => 'chinese-car']) }}"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Chinese
                                        Car</a>
                                </li>
                                <li class="brand-li">
                                    <a href="{{ route('user.servicesDetail', ['slug' => 'electric-car']) }}"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Electric
                                        Car</a>
                                </li>
                                <li class="brand-li">
                                    <a href="{{ route('user.servicesDetail', ['slug' => 'electric-repair']) }}"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Electric
                                        Repair</a>
                                </li>
                                <li class="brand-li">
                                    <a href="{{ route('user.servicesDetail', ['slug' => 'extended-warranty']) }}"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Extended
                                        Warranty</a>
                                </li>
                                <li class="brand-li">
                                    <a href="{{ route('user.servicesDetail', ['slug' => 'general-repair']) }}"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">General
                                        Repair</a>
                                </li>
                                <li class="brand-li">
                                    <a href="{{ route('user.servicesDetail', ['slug' => 'major-minor-service']) }}"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Major/
                                        Minor</a>
                                </li>
                                <li class="brand-li">
                                    <a href="{{ route('user.servicesDetail', ['slug' => 'road-side-assistance']) }}"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Road
                                        Side Assistance</a>
                                </li>
                                <li class="brand-li">
                                    <a href="{{ route('user.servicesDetail', ['slug' => 'tinting']) }}"
                                        class="level-4-lg primary-regular-font dark-color opacity-60 text-decoration-none">Tinting</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item bg-transparent">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button
                            class="accordion-button bg-transparent level-1 sub-font dark-color collapsed text-black"
                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                            aria-expanded="false" aria-controls="flush-collapseThree"> Contact Us </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse "
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="list-unstyled d-flex flex-column ps-0 mb-0 gap-3">
                                        <li class="footer-social-li">
                                            <a href="#"
                                                class="level-7 extra-color-2 text-decoration-none d-flex align-items-start gap-3">
                                                <div class="contact-img primary-regular-font">
                                                    <span class="secondary-color level-6">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </span>
                                                </div>
                                                <div class="contact-text">
                                                    <h6 class="level-7 primary-regular-font dark-color">16 29th St
                                                        - AI Quoz Industrial Area 4 - Dubai </h6>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="footer-social-li">
                                            <a href="#"
                                                class="level-7 extra-color-2 text-decoration-none d-flex align-items-start gap-3">
                                                <div class="contact-img primary-regular-font">
                                                    <span class="secondary-color level-6">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </span>
                                                </div>
                                                <div class="contact-text">
                                                    <h6 class="level-7 primary-regular-font dark-color">25.121845
                                                        - 55.239942 - AI Quoz Industrial Area 4 - Dubai </h6>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="footer-social-li">
                                            <a href="#"
                                                class="level-7 extra-color-2 text-decoration-none d-flex align-items-start gap-3">
                                                <div class="contact-img primary-regular-font">
                                                    <span class="secondary-color level-6">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </span>
                                                </div>
                                                <div class="contact-text">
                                                    <h6 class="level-7 primary-regular-font dark-color">208 Amman
                                                        St - AI Qusais Industrial Area 4 - Dubai </h6>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="footer-social-li">
                                            <a href="#"
                                                class="level-7 extra-color-2 text-decoration-none d-flex align-items-center gap-3">
                                                <div class="contact-img primary-regular-font">
                                                    <span class="secondary-color level-6">
                                                        <i class="fa-solid fa-clock"></i>
                                                    </span>
                                                </div>
                                                <div class="contact-text">
                                                    <h6 class="level-7 primary-regular-font dark-color">Monday -
                                                        Saturday: 8 am - 6 pmSunday: Closed </h6>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <div class="contact-heading mb-4">
                                        <h4 class="level-4 primary-semibold-font dark-color">Rahmania Branch </h5>
                                    </div>
                                    <ul class="list-unstyled d-flex flex-column ps-0 mb-0 gap-3">
                                        <li class="footer-social-li">
                                            <a href="#"
                                                class="level-7 extra-color-2 text-decoration-none d-flex align-items-start gap-3">
                                                <div class="contact-img primary-regular-font">
                                                    <span class="secondary-color level-6">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </span>
                                                </div>
                                                <div class="contact-text">
                                                    <h6 class="level-7 primary-regular-font dark-color">Abu Amr Al
                                                        Basri St - Al Rahmaniya Suburb - Kshishah 6 - Sharjah,
                                                        Entrance C. Basement Level </h6>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="footer-social-li">
                                            <a href="#"
                                                class="level-7 extra-color-2 text-decoration-none d-flex align-items-center gap-3">
                                                <div class="contact-img primary-regular-font">
                                                    <span class="secondary-color level-6">
                                                        <i class="fa-solid fa-clock"></i>
                                                    </span>
                                                </div>
                                                <div class="contact-text">
                                                    <h6 class="level-7 primary-regular-font dark-color">Monday -
                                                        Wednesday: 10 am - 10 pmThursday - Sunday: 10 am - 11 pm
                                                    </h6>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="list-unstyled d-flex flex-column ps-0 mb-0 gap-3">
                                        <li class="footer-social-li">
                                            <a href="tel:+971 56 545 8853"
                                                class="level-7 extra-color-2 text-decoration-none d-flex align-items-start gap-3">
                                                <div class="contact-img primary-regular-font">
                                                    <span class="secondary-color level-6">
                                                        <i class="fa-solid fa-phone"></i>
                                                    </span>
                                                </div>
                                                <div class="contact-text">
                                                    <h6 class="level-7 primary-regular-font dark-color">+971 56
                                                        545 8853 </h6>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="footer-social-li">
                                            <a href="tel:+971 54 793 5400"
                                                class="level-7 extra-color-2 text-decoration-none d-flex align-items-center gap-3">
                                                <div class="contact-img primary-regular-font">
                                                    <span class="secondary-color level-6">
                                                        <i class="fa-solid fa-brands fa-whatsapp"></i>
                                                    </span>
                                                </div>
                                                <div class="contact-text">
                                                    <h6 class="level-7 primary-regular-font dark-color">+971 54
                                                        793 5400 </h6>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="footer-social-li">
                                            <a href="mailto:sales@gargashauto.ae"
                                                class="level-7 extra-color-2 text-decoration-none d-flex align-items-center gap-3">
                                                <div class="contact-img primary-regular-font">
                                                    <span class="secondary-color level-6">
                                                        <i class="fa-solid fa-envelope"></i>
                                                    </span>
                                                </div>
                                                <div class="contact-text">
                                                    <h6 class="level-7 primary-regular-font dark-color">
                                                        sales@gargashauto.ae</h6>
                                                </div>
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
        <div
            class="footer-bottom-wrapper d-flex flex-sm-row flex-column gap-sm-0 gap-2 align-items-center justify-content-between pt-5">
            <div class="footer-copyright">
                <p class="level-8 primary-light-font dark-color">All Rights reserved. Design & Developed by <a
                        href="https://fusionfolios.net/" target="_blank"> Fusion Folios</a>
                </p>
            </div>
            <div class="footer-nav">
                <ul class="list-unstyled d-flex align-items-center gap-2">
                    <li>
                        <a href="#" class="level-8 primary-regular-font dark-color text-decoration-none">Terms &
                            Condition</a>
                    </li>
                    <span class="border-line"></span>
                    <li>
                        <a href="#" class="level-8 primary-regular-font dark-color text-decoration-none">
                            Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

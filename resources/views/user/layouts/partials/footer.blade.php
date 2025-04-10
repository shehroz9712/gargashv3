<style>
    a,
    a:hover,
    a:focus,
    a:active {
        text-decoration: none;
        outline: none;
    }


    .footer {
        background: transparent;
        color: #e6b110;
        padding-top: 80px;
        padding-bottom: 40px;
        position: relative;
    }



    /*END FOOTER SOCIAL DESIGN*/

    @media only screen and (max-width:768px) {
        .single_footer {
            margin-bottom: 30px;
        }
    }

    .single_footer h4 {
        color: #e6b110;
        margin-top: 0;
        margin-bottom: 25px;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 20px;
    }

    .single_footer h4::after {
        content: "";
        display: block;
        height: 2px;
        width: 40px;
        background: #e6b110;
        margin-top: 20px;
    }

    .single_footer p {
        color: #111;
    }

    .single_footer ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .single_footer ul li a {
        color: #111;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;

        font-size: 15px;
        text-transform: capitalize;

    }

    .single_footer ul li a:hover {
        color: #e6b110;
    }

    .single_footer_address ul li {
        color: #e6b110;
    }

    .single_footer_address ul li span {
        font-weight: 400;
        color: #e6b110;
        line-height: 28px;
    }

    .contact_social ul {
        list-style: outside none none;
        margin: 0;
        padding: 0;
    }

    /*START NEWSLETTER CSS*/
    .subscribe {
        display: block;
        position: relative;
        margin-top: 15px;
        width: 100%;
    }

    .subscribe__input {
        background-color: #e6b110;
        border: medium none;
        border-radius: 5px;
        color: #333;
        display: block;
        font-size: 15px;
        font-weight: 500;
        height: 60px;
        letter-spacing: 0.4px;
        margin: 0;
        padding: 0 150px 0 20px;
        text-align: center;
        text-transform: capitalize;
        width: 100%;
    }

    @media only screen and (max-width:768px) {
        .subscribe__input {
            padding: 0 50px 0 20px;
        }
    }

    .subscribe__btn {
        background-color: transparent;
        border-radius: 0 25px 25px 0;
        color: #01c7e9;
        cursor: pointer;
        display: block;
        font-size: 20px;
        height: 60px;
        position: absolute;
        right: 0;
        top: 0;
        width: 60px;
    }

    .subscribe__btn i {
        transition: all 0.3s ease 0s;
    }

    @media only screen and (max-width:768px) {
        .subscribe__btn {
            right: 0px;
        }
    }

    .subscribe__btn:hover i {
        color: #e6b110;
    }

    .f-new-btn {
        padding: 0;
        border: none;
        background-color: transparent;
        -webkit-border-radius: 0;
        border-radius: 0;
    }

    /*END NEWSLETTER CSS*/

    /*START SOCIAL PROFILE CSS*/
    .social_profile {
        margin-top: 40px;
    }

    .social_profile ul {
        list-style: outside none none;
        margin: 0;
        padding: 0;
    }

    .social_profile ul li {
        float: left;
    }

    .social_profile ul li a {
        text-align: center;
        border: 0px;
        text-transform: uppercase;
        transition: all 0.3s ease 0s;
        margin: 0px 5px;
        font-size: 18px;
        color: #e6b110;
        border-radius: 30px;
        width: 50px;
        height: 50px;
        line-height: 50px;
        display: block;
        border: 1px solid #e6b110;
    }

    @media only screen and (max-width:768px) {
        .social_profile ul li a {
            margin-right: 10px;
            margin-bottom: 10px;
        }
    }

    @media only screen and (max-width:480px) {
        .social_profile ul li a {
            width: 40px;
            height: 40px;
            line-height: 40px;
        }
    }

    .social_profile ul li a:hover {
        background: #e6b110;
        border: 1px solid #e6b110;
        color: #fff;
        border: 0px;
    }

    /*END SOCIAL PROFILE CSS*/
    .copyright {
        margin-top: 70px;
        padding-top: 40px;
        color: #111;
        font-size: 15px;
        border-top: 1px solid rgba(255, 255, 255, 0.4);
        text-align: center;
    }

    .copyright a {
        color: #e6b110;
        transition: all 0.2s ease 0s;
        transition: all 0.2s ease-in-out;
    }

    .copyright a:hover {
        color: #111;
    }

    .footer-bg-auto::before {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        background: url('{{ asset('assets/user/img/footer-bottom.png') }}') no-repeat center;
        width: 100%;
        height: 100%;
        z-index: -1;
        transform: scale(0.5);
        opacity: 0.8;
    }
</style>



<div class="footer">
    <div class="container footer-bg-auto position-relative">
        <span class="bg-secondary d-block opacity-50 rounded-1 w-100" style="padding: 1px 0;"></span>
        <div class="d-flex justify-content-center py-5">
            <a href="{{ route('user.home') }}"><img src="{{ asset('assets/user/img/logo.png') }}" alt=""></a>
        </div>
        <div class="row justify-content-evenly">
            <div class="col-md-3 col-sm-4 col-xs-12 ">
                <div class="single_footer single_footer_address">
                    <h4>Branches Locations</h4>
                    <ul class="list-unstyled d-flex flex-column ps-0 mb-0 gap-3">
                        <li class="footer-social-li">
                            <a target="_blank" href="https://maps.app.goo.gl/iQVBESPcxBcani4w9"
                                class="level-7 extra-color-2 text-decoration-none d-flex align-items-center gap-3 ">
                                <div class="contact-img primary-regular-font">
                                    <span class="secondary-color level-6">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                </div>
                                <div class="contact-text">
                                    <h6 class="level-7 primary-regular-font dark-color">16 29th St - AI Quoz Industrial
                                        Area 4 - Dubai </h6>
                                </div>
                            </a>
                        </li>
                        <li class="footer-social-li">
                            <a target="_blank" href="https://maps.app.goo.gl/h6zHQjcNaRzxaFXX6"
                                class="level-7 extra-color-2 text-decoration-none d-flex align-items-center gap-3 ">
                                <div class="contact-img primary-regular-font">
                                    <span class="secondary-color level-6">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                </div>
                                <div class="contact-text">
                                    <h6 class="level-7 primary-regular-font dark-color">Gargash Auto Multi-Brand Car
                                        Service Centre - Al Quoz 4 , Dubai.</h6>
                                </div>
                            </a>
                        </li>
                        <li class="footer-social-li">
                            <a target="_blank" href="https://maps.app.goo.gl/edSSJeg6y3eXhR5s8"
                                class="level-7 extra-color-2 text-decoration-none d-flex align-items-center gap-3 ">
                                <div class="contact-img primary-regular-font">
                                    <span class="secondary-color level-6">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                </div>
                                <div class="contact-text">
                                    <h6 class="level-7 primary-regular-font dark-color">208 Amman St - AI Qusais
                                        Industrial Area 4 - Dubai </h6>
                                </div>
                            </a>
                        </li>
                        <li class="footer-social-li">
                            <a href="#"
                                class="level-7 extra-color-2 text-decoration-none d-flex align-items-center gap-3 ">
                                <div class="contact-img primary-regular-font">
                                    <span class="secondary-color level-6">
                                        <i class="fa-solid fa-clock"></i>
                                    </span>
                                </div>
                                <div class="contact-text">
                                    <h6 class="level-7 primary-regular-font dark-color">Monday - Saturday: 8 am - 6
                                        pmSunday: Closed </h6>
                                </div>
                            </a>
                        </li>
                        <li class="footer-social-li d-md-none d-block">
                            <div class="p-0 d-md-none d-block">
                                <div class="">
                                    <h4 class="text-black m-0">Rahmania Branch </h4>
                                </div>
                                <ul class="d-flex flex-column flex-md-row gap-3 list-unstyled mb-0 ps-0 pt-3">
                                    <li class="footer-social-li">

                                        <a target="_blank" href="https://maps.app.goo.gl/jLmLPWVXiFVUL5Yz6"
                                            class="level-7 extra-color-2 text-decoration-none d-flex align-items-center gap-3">
                                            <div class="contact-img primary-regular-font">
                                                <span class="secondary-color level-6">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </span>
                                            </div>

                                            <div class="contact-text">
                                                <h6 class="level-7 primary-regular-font dark-color">Abu Amr Al Basri St
                                                    - Al Rahmaniya Suburb - Kshishah 6 - Sharjah, Entrance C. Basement
                                                    Level </h6>
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
                                                <h6 class="level-7 primary-regular-font dark-color">Monday - Wednesday:
                                                    10 am - 10 pmThursday - Sunday: 10 am - 11 pm </h6>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
            <!--- END COL -->
            <div class="col-lg-3 col-sm-4 col-xs-12">
                <div class="single_footer">
                    <h4>Services</h4>
                    <ul class="row row-cols-2 lh-sm g-3 fw-normal">
                        <li class="p-0"><a href="{{ route('user.servicesDetail', ['slug' => 'auto-spa']) }}">Auto
                                Spa</a></li>
                        <li class="p-0"><a
                                href="{{ route('user.servicesDetail', ['slug' => 'car-inspection']) }}">Car
                                Inspection</a></li>
                        <li class="p-0"><a href="{{ route('user.servicesDetail', ['slug' => 'car-wrapping']) }}">Car
                                Wrapping</a></li>
                        <li class="p-0"><a
                                href="{{ route('user.servicesDetail', ['slug' => 'ceramic']) }}">Ceramic</a></li>
                        <li class="p-0"><a
                                href="{{ route('user.servicesDetail', ['slug' => 'european-cars']) }}">European Cars</a>
                        </li>
                        <li class="p-0"><a
                                href="{{ route('user.servicesDetail', ['slug' => 'german-cars']) }}">German Cars</a>
                        </li>
                        <li class="p-0"><a
                                href="{{ route('user.servicesDetail', ['slug' => 'electric-repair']) }}">Electric
                                Repair</a></li>
                        <li class="p-0"><a
                                href="{{ route('user.servicesDetail', ['slug' => 'extended-warranty']) }}">Extended
                                Warranty</a></li>
                        <li class="p-0"><a
                                href="{{ route('user.servicesDetail', ['slug' => 'general-repair']) }}">General
                                Repair</a></li>
                        <li class="p-0"><a
                                href="{{ route('user.servicesDetail', ['slug' => 'major-minor-service']) }}">Major/Minor
                                Service</a></li>
                        <li class="p-0"><a href="{{ route('user.servicesDetail', ['slug' => 'car-recovery']) }}">Car
                                Recovery</a></li>
                        <li class="p-0"><a
                                href="{{ route('user.servicesDetail', ['slug' => 'tinting']) }}">Tinting</a></li>

                    </ul>
                </div>
            </div>
            <!--- END COL -->
            <div class="col-lg-3 col-sm-4 col-xs-12">
                <div class="single_footer single_footer_address">
                    <h4>Page Link</h4>
                    <ul class="row row-cols-2 lh-sm g-3 fw-normal">
                        <li class="p-0"><a href="{{ route('user.contract') }}">Annual Contract</a></li>
                        <li class="p-0"><a href="{{ route('user.promotions') }}">Ongoing Promotions</a></li>
                        <li class="p-0"><a href="#">Services</a></li>
                        <li class="p-0"><a href="{{ route('user.shop') }}">Body Shop</a></li>
                        <li class="p-0"><a href="{{ route('user.blogs') }}">Blog</a></li>
                        <li class="p-0"><a href="{{ route('user.about-us') }}">About us</a></li>
                        <li class="p-0"><a href="{{ route('user.contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="social_profile">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/GargashAuto" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/gargashauto/?hl=en" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li><a href="https://www.youtube.com/@gargashauto" target="_blank"><i
                                    class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--- END COL -->

        </div>
        <div class="container d-none d-md-block">
            <div class="row">
                <div class="col d-md-block d-none"></div>
                <div class="col-md-11 p-0">
                    <div class="">
                        <h4 class="text-black m-0">Rahmania Branch </h4>
                    </div>
                    <ul class="d-flex flex-column flex-md-row gap-3 list-unstyled mb-0 ps-0 pt-3">
                        <li class="footer-social-li">

                            <a target="_blank" href="https://maps.app.goo.gl/jLmLPWVXiFVUL5Yz6"
                                class="level-7 extra-color-2 text-decoration-none d-flex align-items-center gap-3">
                                <div class="contact-img primary-regular-font">
                                    <span class="secondary-color level-6">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                </div>

                                <div class="contact-text">
                                    <h6 class="level-7 primary-regular-font dark-color">Abu Amr Al Basri St - Al
                                        Rahmaniya Suburb - Kshishah 6 - Sharjah, Entrance C. Basement Level </h6>
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
                                    <h6 class="level-7 primary-regular-font dark-color">Monday - Wednesday: 10 am - 10
                                        pmThursday - Sunday: 10 am - 11 pm </h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--- END ROW -->
        <div class="row ">
            <div class="col-lg-12 col-sm-12 col-xs-12 pt-4 text-center">
                <p class="fs-6 m-0 text-black">All Rights reserved. Design & Developed by <strong><a
                            href="https://fusionfolios.net/" target="_blank"> Fusion Folios</a></strong></p>
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</div>

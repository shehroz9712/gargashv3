<!DOCTYPE html>
<html>
@include('user.layouts.partials.head')

<body class="rtl">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MK337R95" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <style>
        /* Header Css  */


       .submenu {
            top: 60px;
            left: -20px;
            transition: 0.4s ease;
            opacity: 0;
            max-width: max-content;
            z-index: 1;
            width: 200px;
        }

        .site-header .header-menu-bar .list-item.dropdown:hover .submenu {
            top: 20px;
            opacity: 1;
            overflow: visible;
        }

        .header-link.active {
            color: var(--secondary-color);
            border-bottom: 4px solid var(--secondary-color);
            font-weight: 700;
        }

        .mobile-header .header-link.active {
            color: var(--dark-color);
            font-weight: 700;
        }

        .site-header .header-menu-bar .list-item.dropdown {
            overflow: hidden;
        }

        .site-header .header-menu-bar .list-item.dropdown:hover {
            overflow: visible;
            opacity: 1;
        }

        .site-header span.number {
            background: var(--reviews-color);
            width: 14px;
            height: 14px;
            border-radius: 50%;
            font-size: 7px;
            /* right: -11px; */
            left: 9px;
        }

        .site-header .mobile-header {
            position: fixed;
            width: 100%;
            height: 100vh;
            top: 0px;
            right: 0px;
            padding: 100px 20px 20px;
            background-color: var(--secondary-color);
            min-height: 100%;
            transform: translateX(100%);
            transition: 0.2s all;
        }

        .site-header .dropdown-toggle::after {
            content: unset;
        }

        .flag-icon-us {
            background-image: url(../img/flag-icon.png);
        }

        .flag-icon {
            width: 40px;
            height: 30px;
        }

        .top-updates .single-item {
            position: relative;
            z-index: 1;
        }

        .top-updates .single-item::before {
            z-index: -1;
            content: "";
            position: absolute;
            background: var(--dark-color);
            width: 1px;
            height: 35px;
            display: block;
            right: -30px;
            /* top: -20px; */
            /* bottom: -12px; */
            background-size: cover;
            background-position: center;
        }

        .top-updates .single-item.dropdown-wrap::before {
            content: unset;
        }

        .language-span {
            border-left: 1px solid var(--dark-color);
            padding-left: 6px;
        }

        .contact-icon {
            background: var(--dark-color);
            color: var(--body-color);
            border: 2px solid var(--secondary-color);
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            animation: pulse-animation 2s infinite;
            text-decoration: none;
            box-shadow: 11px 11px 18.1px rgba(0, 0, 0, 0.28);
        }

        .contact-icon i {
            font-size: 25px;
        }

        .header-menu-bar {
            border-top: 1px solid #d9d9d9;
            border-bottom: 1px solid #d9d9d9;
        }

        /* megamenu Css  */
        header .categories-menus {
            max-width: 80%;
            margin: 0px auto;
        }

        header .mega-menu .head {
            padding: 10px 0 0px;
        }

        header .categories-menus ul li button {
            font-size: 13px;
            border: 0;
            background: transparent;
            font-family: "Rubik";
            background: #fff;
            width: 100%;
            padding: 5px 5px;
            border-bottom: 1px solid #dddddd54;
        }

        header .categories-menus ul li button.active {
            background: #ccc;
        }

        header .categories-menus ul li a {
            color: var(--body-color);
            font-family: "Rubik";
            font-size: 13px;
        }

        header .mega-menu {
            background: var(--extra-color-2);
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            height: 0px;
            z-index: 9;
            position: absolute;
            width: 100%;
            margin: auto;
            display: none;
            max-width: 90%;
            top: 100%;
            left: 0;
            right: 0;
            border-radius: 16px;
            padding: 20px;
        }

        /* .mega-menu.active {
          height: auto;
          display: block;
        } */

        /* header .mega-menu .head .title {
     font-size: 22px;
     font-weight: 700;
     padding-bottom: 15px;
     border-bottom: 1px solid #ddd;
     margin-bottom: 5px;
    } */
        header .mega-menu ul li a {
            font-size: 12px;
            color: var(--body-color);
            text-decoration: none;
            font-family: var(--primary-medium-font);
        }

        header .mega-menu ul li {
            padding: 2px 0;
        }

        @keyframes marquee {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(-100%);
            }
        }

        /* megamenu Css  */

        /* Laptop Responsive  */
        @media (max-width: 1200px) {
            .top-updates .single-item::before {
                right: -10px;
                content: "";
            }
        }

        /* Mobile Responsive  */
        @media (max-width: 991px) {
            .site-header .mobile-header.active {
                transform: translateX(0px);
            }

            .top-updates .single-item::before {
                right: -13px;
                content: "";
            }

            .top-updates {
                animation: marquee 10s linear infinite;
            }

            .top-reading {
                max-width: 900px;
            }
        }

        @media (max-width: 768px) {
            .top-updates .single-item::before {
                content: unset;
            }
        }

        @media (max-width: 576px) {
            .top-updates {
                gap: 60px;
            }

            .top-updates .single-item::before {
                right: -33px;
                content: "";
            }

            .top-updates .single-item span {
                flex: 0 0 35%;
            }



        }

        @media (max-width: 768px) {

            /* Shakir Work */
            .mega-menu-mobile-respnsive-scrolling.active {
                overflow-y: auto;
                /* padding: 42px 0; */
            }

            /* header mega menu */
            /* Shakir Work */
            .self-mobile-respnsive.active {
                margin-top: 2rem;
            }

            .mega-menu.active {
                height: 40rem;
                display: block;
                /* overflow: hidden; */
            }

            .header-mega-menu-margin-top {
                margin-top: 6rem;
            }


        }

        /* Header Css  */


        /* /////////////////////////////////////// */

        .top-updates .single-item {
            position: relative;
            z-index: 1;
        }

        .top-updates .single-item::before {
            z-index: -1;
            content: "";
            position: absolute;
            background: var(--dark-color);
            width: 1px;
            height: 35px;
            display: block;
            right: -30px;
        }

        .top-updates .single-item.dropdown-wrap::before {
            content: unset;
        }

        /* Laptop Responsive */
        @media (max-width: 1200px) {
            .top-updates .single-item::before {
                right: -10px;
            }
        }

        /* Mobile Responsive */
        @media (max-width: 991px) {
            .top-updates {
                animation: marquee 20s linear infinite;
                /* Slider speed kam ki hai */
            }

            .top-updates .single-item::before {
                right: -15px;
                height: 25px;
            }
        }

        @media (max-width: 768px) {
            .top-updates .single-item::before {
                z-index: -1;
                content: "";
                position: absolute;
                background: var(--dark-color);
                width: 1px;
                height: 35px;
                display: block;
                right: 0px;


            }
        }

        @media (max-width: 576px) {
            .top-updates {
                gap: 60px;
            }

            .top-updates .single-item::before {
                right: -20px;
                height: 20px;
            }

            .top-updates .single-item span {
                flex: 0 0 35%;
            }
        }


        /* //////////////////// */

        .site-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
        }

        /* Optional: Add a shadow when scrolled */
        .site-header.scrolled {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Optional: Change background when scrolled */
        .header-bg.scrolled {
            background-color: white !important;
            /* Or your desired color */
        }
    </style>

    <!-- Header Start Here -->
    @include('user.layouts.partials.navbar')

    <!-- Header End Here -->

    @yield('content')


    <!--  -->

    <!--  -->

    @include('user.layouts.partials.footer')
    @include('user.layouts.partials.scripts')
    @yield('js')
</body>

</html>

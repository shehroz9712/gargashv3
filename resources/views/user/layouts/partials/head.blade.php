<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Site Title -->
    @yield('meta')
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/user/img/favicon.png') }}" />
    <!-- Flag Icons -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" />
    <!-- Bootstrap CSS (Latest) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- Font Awesome (Latest) -->
    <!-- Font Awesome CDN -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.rtl.min.css" integrity="sha384-MdqCcafa5BLgxBDJ3d/4D292geNL64JyRtSGjEszRUQX9rhL1QkcnId+OT7Yw+D+" crossorigin="anonymous">-->
    <!-- Font Awesome (Latest) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- Font Awesome CDN -->
    <!-- Slick Slider CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/user/slick/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/user/slick/slick-theme.css') }}" />
    <!-- Slick Slider CDN -->
    <!-- Anime.js CDN -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/animate.css') }}" />
    <!-- Anime.js CDN -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-3Y6SzU7Ij9q0qQO0IZHfruoDFcZL2o2eA2i9Fp1am2RsOBuoTzO4QgjnjJHLs9oHRpmJNlMGtqD3jFjWx6lm0Q=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <!-- Css Stylesheet -->
    <!-- Default Styles (LTR & RTL Support) -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/colors.css') }}" class="dark-style" />
    <link rel="stylesheet" href="{{ asset('assets/user/css/fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/user/css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/user/css/responsive.css') }}" />
    <!-- Css Stylesheet -->
    <!-- HeaderLinks Include Here -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/header.css') }}" />
    <meta name="google-site-verification" content="qGs1sXNVQHSkF7U3S7aNQCP_YlxrWyVab_2ZqgoJFfE" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.8/inputmask.min.js"></script> --}}

    @yield('css')


    <style>
        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
        }

        .service-icon-navbar img.img-fluid {
            height: 50px;
        }
    </style>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/670e582c2480f5b4f58dabcd/1ia80grv2';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Corporation",
            "name": "Gargash Auto",
            "alternateName": "Gargash Auto",
            "url": "https://gargashauto.ae/",
            "logo": "https://gargashauto.ae/assets/user/img/logo.png"
        }
    </script>



    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "Product",
            "name": "Gargash Auto",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.9",
                "ratingCount": "21541",
                "reviewCount": "11241"
            }
        }
    </script>

    <!--End of Tawk.to Script-->

    <!-- Google tag (gtag.js) <script async src="https://www.googletagmanager.com/gtag/js?id=G-CSVJ04BMPG"></script> <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-CSVJ04BMPG');
    </script> -->
    <!-- Google Tag Manager -->
    <!--<script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5GS6F6VG');
    </script>-->
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MK337R95');
    </script>
    <!-- End Google Tag Manager -->
</head>

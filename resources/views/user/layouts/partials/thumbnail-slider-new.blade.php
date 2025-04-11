<!-- First, include Slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

<div class="slider_wrap">
    <div class="banner_slider">
        <img src="assets/user/img/CarImg1.png" alt="Car 1" class="img-fluid">
        <img src="assets/user/img/CarImg2.png" alt="Car 2" class="img-fluid">
        <img src="assets/user/img/CarImg3.png" alt="Car 3" class="img-fluid">
    </div>
    <div class="thumbnail_slider_area">
        <div class="container">
            <div class="thumbnail_slider row">
                <div class="col">
                    <img src="assets/user/img/logo-8.png" alt="Car 1" class="img-fluid">
                </div>
                <div class="col">
                    <img src="assets/user/img/logo-9.png" alt="Car 1" class="img-fluid">
                </div>
                <div class="col">
                    <img src="assets/user/img/logo-10.png" alt="Car 1" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery first, then Slick JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    jQuery(document).ready(function($) {
        $('.banner_slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            autoplay: true, // optional: auto-rotate slides
            // dots: true
        });
    });
</script>